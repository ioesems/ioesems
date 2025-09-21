<?php
require_once '../config.php';

header('Content-Type: application/json');

if (!isLoggedIn()) {
    echo json_encode(['success' => false, 'message' => 'Not logged in']);
    exit();
}

$action = $_POST['action'] ?? $_GET['action'] ?? '';

try {
    switch ($action) {
        case 'create_room':
            createRoom();
            break;
        case 'join_room':
            joinRoom();
            break;
        case 'get_game_state':
            getGameState();
            break;
        case 'roll_dice':
            rollDice();
            break;
        case 'move_token':
            moveToken();
            break;
        case 'ready_up':
            readyUp();
            break;
        case 'send_chat':
            sendChat();
            break;
        case 'get_chat':
            getChat();
            break;
        case 'create_invitation':
            createInvitation();
            break;
        default:
            echo json_encode(['success' => false, 'message' => 'Invalid action']);
    }
} catch (Exception $e) {
    error_log("Game API Error: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Server error. Please try again later.']);
}

function createRoom()
{
    global $pdo, $_SESSION;

    $maxPlayers = intval($_POST['max_players'] ?? 4);
    if ($maxPlayers < 2 || $maxPlayers > 4) {
        $maxPlayers = 4;
    }

    // Generate unique room code
    $roomCode = generateRoomCode();
    $attempts = 0;
    while ($attempts < 10) {
        $stmt = $pdo->prepare("SELECT id FROM game_rooms WHERE room_code = ?");
        $stmt->execute([$roomCode]);
        if ($stmt->rowCount() == 0)
            break;
        $roomCode = generateRoomCode();
        $attempts++;
    }

    if ($attempts >= 10) {
        echo json_encode(['success' => false, 'message' => 'Could not generate room code']);
        exit();
    }

    // Create room
    $stmt = $pdo->prepare("
        INSERT INTO game_rooms (room_code, creator_id, max_players, current_players, status) 
        VALUES (?, ?, ?, ?, 'waiting')
    ");

    if ($stmt->execute([$roomCode, $_SESSION['user_id'], $maxPlayers, 1])) {
        $roomId = $pdo->lastInsertId();

        // Assign first player (red) to creator
        $stmt = $pdo->prepare("
            INSERT INTO game_players (room_id, user_id, player_color, position, turn_order, is_ready) 
            VALUES (?, ?, 'red', '[0,0,0,0]', 1, FALSE)
        ");
        $stmt->execute([$roomId, $_SESSION['user_id']]);

        echo json_encode([
            'success' => true,
            'room_code' => $roomCode,
            'message' => 'Room created successfully'
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to create room']);
    }
}

function joinRoom()
{
    global $pdo, $_SESSION;

    $roomCode = $_POST['room_code'] ?? '';

    if (empty($roomCode)) {
        echo json_encode(['success' => false, 'message' => 'Room code required']);
        exit();
    }

    // Find room
    $stmt = $pdo->prepare("SELECT * FROM game_rooms WHERE room_code = ? AND status = 'waiting'");
    $stmt->execute([$roomCode]);
    $room = $stmt->fetch();

    if (!$room) {
        echo json_encode(['success' => false, 'message' => 'Room not found or game already started']);
        exit();
    }

    // Check if user is already in this room
    $stmt = $pdo->prepare("SELECT id FROM game_players WHERE room_id = ? AND user_id = ?");
    $stmt->execute([$room['id'], $_SESSION['user_id']]);
    if ($stmt->rowCount() > 0) {
        echo json_encode(['success' => true, 'room_code' => $roomCode, 'already_joined' => true]);
        exit();
    }

    // Check if room is full
    if ($room['current_players'] >= $room['max_players']) {
        echo json_encode(['success' => false, 'message' => 'Room is full']);
        exit();
    }

    // Assign color and turn order
    $colors = ['red', 'blue', 'green', 'yellow'];
    $stmt = $pdo->prepare("SELECT player_color FROM game_players WHERE room_id = ? ORDER BY id ASC");
    $stmt->execute([$room['id']]);
    $usedColors = $stmt->fetchAll(PDO::FETCH_COLUMN);

    $availableColors = array_diff($colors, $usedColors);
    $playerColor = !empty($availableColors) ? reset($availableColors) : 'red'; // fallback
    $turnOrder = $room['current_players'] + 1;

    // Add player to room
    $stmt = $pdo->prepare("
        INSERT INTO game_players (room_id, user_id, player_color, position, turn_order, is_ready) 
        VALUES (?, ?, ?, '[0,0,0,0]', ?, FALSE)
    ");

    if ($stmt->execute([$room['id'], $_SESSION['user_id'], $playerColor, $turnOrder])) {
        // Update room player count
        $stmt = $pdo->prepare("UPDATE game_rooms SET current_players = current_players + 1 WHERE id = ?");
        $stmt->execute([$room['id']]);

        echo json_encode([
            'success' => true,
            'room_code' => $roomCode,
            'player_color' => $playerColor,
            'turn_order' => $turnOrder,
            'message' => 'Joined room successfully'
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to join room']);
    }
}

function getGameState()
{
    global $pdo, $_SESSION;

    $roomCode = $_GET['room_code'] ?? '';

    if (empty($roomCode)) {
        echo json_encode(['success' => false, 'message' => 'Room code required']);
        exit();
    }

    // Get room info
    $stmt = $pdo->prepare("SELECT * FROM game_rooms WHERE room_code = ?");
    $stmt->execute([$roomCode]);
    $room = $stmt->fetch();

    if (!$room) {
        echo json_encode(['success' => false, 'message' => 'Room not found']);
        exit();
    }

    // Get players in room
    $stmt = $pdo->prepare("
        SELECT gp.*, u.username, u.avatar 
        FROM game_players gp 
        JOIN users u ON gp.user_id = u.id 
        WHERE gp.room_id = ? 
        ORDER BY gp.turn_order ASC
    ");
    $stmt->execute([$room['id']]);
    $players = $stmt->fetchAll();

    if (empty($players)) {
        echo json_encode(['success' => false, 'message' => 'No players in room']);
        exit();
    }

    // Get recent chat messages
    $stmt = $pdo->prepare("
        SELECT gc.*, u.username 
        FROM game_chat gc 
        JOIN users u ON gc.user_id = u.id 
        WHERE gc.room_id = ? 
        ORDER BY gc.sent_at DESC 
        LIMIT 20
    ");
    $stmt->execute([$room['id']]);
    $chatMessages = array_reverse($stmt->fetchAll());

    // ✅ DETERMINE CURRENT TURN (FIXED LOGIC)
    $currentTurnPlayerId = null;
    $isYourTurn = false;

    if ($room['status'] === 'active') {
        // Get last REAL move (roll or move, not game_start)
        $stmt = $pdo->prepare("
            SELECT player_id FROM game_moves 
            WHERE room_id = ? AND move_type IN ('roll', 'move') 
            ORDER BY id DESC LIMIT 1
        ");
        $stmt->execute([$room['id']]);
        $lastMove = $stmt->fetch();

        // Get player IDs in turn order
        $playerIds = array_column($players, 'user_id');

        if ($lastMove) {
            // Find who went last
            $lastIndex = array_search($lastMove['player_id'], $playerIds);
            if ($lastIndex !== false) {
                // Next player's turn
                $nextIndex = ($lastIndex + 1) % count($playerIds);
                $currentTurnPlayerId = $playerIds[$nextIndex];
            } else {
                // Last player left game? Default to first player
                $currentTurnPlayerId = $playerIds[0];
            }
        } else {
            // No moves yet → first player goes
            $currentTurnPlayerId = $playerIds[0];
        }

        // Check if it's your turn
        $isYourTurn = ($currentTurnPlayerId == $_SESSION['user_id']);
    }

    // Get your color
    $yourColor = null;
    foreach ($players as $player) {
        if ($player['user_id'] == $_SESSION['user_id']) {
            $yourColor = $player['player_color'];
            break;
        }
    }

    echo json_encode([
        'success' => true,
        'room' => $room,
        'players' => $players,
        'chat_messages' => $chatMessages,
        'current_turn_player_id' => $currentTurnPlayerId,
        'is_your_turn' => $isYourTurn,
        'your_color' => $yourColor
    ]);
}
function checkIfYourTurn($room, $players)
{
    global $pdo, $_SESSION;

    if ($room['status'] !== 'active')
        return false;

    $stmt = $pdo->prepare("
        SELECT turn_order FROM game_players 
        WHERE room_id = ? AND user_id = ?
    ");
    $stmt->execute([$room['id'], $_SESSION['user_id']]);
    $player = $stmt->fetch();

    if (!$player)
        return false;

    // Get last move to determine whose turn is next
    $stmt = $pdo->prepare("
        SELECT player_id FROM game_moves 
        WHERE room_id = ? ORDER BY id DESC LIMIT 1
    ");
    $stmt->execute([$room['id']]);
    $lastMove = $stmt->fetch();

    if (!$lastMove) {
        // First turn goes to player with turn_order = 1
        return $player['turn_order'] === 1;
    }

    // Find the player whose turn is next
    $stmt = $pdo->prepare("
        SELECT turn_order FROM game_players 
        WHERE room_id = ? AND user_id = ?
    ");
    $stmt->execute([$room['id'], $lastMove['player_id']]);
    $lastPlayer = $stmt->fetch();

    if (!$lastPlayer)
        return false;

    $nextTurn = ($lastPlayer['turn_order'] % count($players)) + 1;
    return $player['turn_order'] === $nextTurn;
}

function getYourColor($roomId)
{
    global $pdo, $_SESSION;

    $stmt = $pdo->prepare("SELECT player_color FROM game_players WHERE room_id = ? AND user_id = ?");
    $stmt->execute([$roomId, $_SESSION['user_id']]);
    $result = $stmt->fetch();

    return $result ? $result['player_color'] : null;
}

function rollDice()
{
    global $pdo, $_SESSION;

    $roomCode = $_POST['room_code'] ?? '';

    if (empty($roomCode)) {
        echo json_encode(['success' => false, 'message' => 'Room code required']);
        exit();
    }

    // Get room
    $stmt = $pdo->prepare("SELECT id FROM game_rooms WHERE room_code = ? AND status = 'active'");
    $stmt->execute([$roomCode]);
    $room = $stmt->fetch();

    if (!$room) {
        echo json_encode(['success' => false, 'message' => 'Game not active']);
        exit();
    }

    // Get players
    $stmt = $pdo->prepare("SELECT user_id, turn_order FROM game_players WHERE room_id = ? ORDER BY turn_order ASC");
    $stmt->execute([$room['id']]);
    $players = $stmt->fetchAll();

    if (empty($players)) {
        echo json_encode(['success' => false, 'message' => 'No players in game']);
        exit();
    }

    // Get current turn
    $stmt = $pdo->prepare("
        SELECT player_id FROM game_moves 
        WHERE room_id = ? AND move_type IN ('roll', 'move') 
        ORDER BY id DESC LIMIT 1
    ");
    $stmt->execute([$room['id']]);
    $lastMove = $stmt->fetch();

    $playerIds = array_column($players, 'user_id');
    $currentTurnPlayerId = null;

    if ($lastMove) {
        $lastIndex = array_search($lastMove['player_id'], $playerIds);
        if ($lastIndex !== false) {
            $nextIndex = ($lastIndex + 1) % count($playerIds);
            $currentTurnPlayerId = $playerIds[$nextIndex];
        } else {
            $currentTurnPlayerId = $playerIds[0];
        }
    } else {
        $currentTurnPlayerId = $playerIds[0]; // First player starts
    }

    // Check if it's user's turn
    if ($currentTurnPlayerId != $_SESSION['user_id']) {
        echo json_encode(['success' => false, 'message' => 'Not your turn. Waiting for player ID: ' . $currentTurnPlayerId]);
        exit();
    }

    // Roll dice
    $diceValue = rand(1, 6);

    // Record move
    $stmt = $pdo->prepare("
        INSERT INTO game_moves (room_id, player_id, move_type, dice_value) 
        VALUES (?, ?, 'roll', ?)
    ");
    $stmt->execute([$room['id'], $_SESSION['user_id'], $diceValue]);

    echo json_encode([
        'success' => true,
        'dice_value' => $diceValue,
        'message' => 'Dice rolled successfully'
    ]);
}
function isUserTurn($roomCode)
{
    global $pdo, $_SESSION;

    $stmt = $pdo->prepare("SELECT id FROM game_rooms WHERE room_code = ? AND status = 'active'");
    $stmt->execute([$roomCode]);
    $room = $stmt->fetch();

    if (!$room)
        return false;

    // Get last move
    $stmt = $pdo->prepare("
        SELECT player_id FROM game_moves 
        WHERE room_id = ? ORDER BY id DESC LIMIT 1
    ");
    $stmt->execute([$room['id']]);
    $lastMove = $stmt->fetch();

    // Get all players
    $stmt = $pdo->prepare("
        SELECT user_id, turn_order FROM game_players 
        WHERE room_id = ? ORDER BY turn_order ASC
    ");
    $stmt->execute([$room['id']]);
    $players = $stmt->fetchAll();

    if (empty($players))
        return false;

    // Determine whose turn it should be
    if (!$lastMove) {
        // First turn
        return $players[0]['user_id'] == $_SESSION['user_id'];
    } else {
        // Find the player who made the last move
        $lastPlayerIndex = -1;
        foreach ($players as $index => $player) {
            if ($player['user_id'] == $lastMove['player_id']) {
                $lastPlayerIndex = $index;
                break;
            }
        }

        if ($lastPlayerIndex == -1)
            return false;

        // Next player's turn
        $nextPlayerIndex = ($lastPlayerIndex + 1) % count($players);
        return $players[$nextPlayerIndex]['user_id'] == $_SESSION['user_id'];
    }
}

function moveToken()
{
    global $pdo, $_SESSION;

    $roomCode = $_POST['room_code'] ?? '';
    $tokenIndex = intval($_POST['token_index'] ?? -1);
    $diceValue = intval($_POST['dice_value'] ?? 0);

    if (empty($roomCode) || $tokenIndex < 0 || $tokenIndex > 3 || $diceValue < 1 || $diceValue > 6) {
        echo json_encode(['success' => false, 'message' => 'Invalid parameters']);
        exit();
    }

    // Verify it's user's turn
    if (!isUserTurn($roomCode)) {
        echo json_encode(['success' => false, 'message' => 'Not your turn']);
        exit();
    }

    // Get room
    $stmt = $pdo->prepare("SELECT id FROM game_rooms WHERE room_code = ? AND status = 'active'");
    $stmt->execute([$roomCode]);
    $room = $stmt->fetch();

    if (!$room) {
        echo json_encode(['success' => false, 'message' => 'Game not active']);
        exit();
    }

    // Get player info
    $stmt = $pdo->prepare("
        SELECT id, player_color, position, tokens_home, tokens_finished 
        FROM game_players WHERE room_id = ? AND user_id = ?
    ");
    $stmt->execute([$room['id'], $_SESSION['user_id']]);
    $player = $stmt->fetch();

    if (!$player) {
        echo json_encode(['success' => false, 'message' => 'Player not found in room']);
        exit();
    }

    $positions = json_decode($player['position'], true);
    if (!is_array($positions) || count($positions) !== 4) {
        $positions = [0, 0, 0, 0];
    }

    $oldPosition = $positions[$tokenIndex];

    // Validate move according to Ludo rules
    $newPosition = calculateNewPosition($oldPosition, $diceValue, $player['tokens_home'], $tokenIndex);

    if ($newPosition === false) {
        echo json_encode(['success' => false, 'message' => 'Invalid move']);
        exit();
    }

    // Update position
    $positions[$tokenIndex] = $newPosition;
    $positionJson = json_encode($positions);

    // Update tokens_home and tokens_finished if needed
    $tokensHome = $player['tokens_home'];
    $tokensFinished = $player['tokens_finished'];

    if ($oldPosition === 0 && $newPosition > 0) {
        $tokensHome--;
    }

    if ($newPosition >= 100) { // Allow >= in case of overshoot handling
        $newPosition = 100;
        if ($positions[$tokenIndex] !== 100) { // Only count once
            $tokensFinished++;
        }
    }

    // Update player record
    $stmt = $pdo->prepare("
        UPDATE game_players 
        SET position = ?, tokens_home = ?, tokens_finished = ? 
        WHERE id = ?
    ");

    if ($stmt->execute([$positionJson, $tokensHome, $tokensFinished, $player['id']])) {
        // Record move
        $stmt = $pdo->prepare("
            INSERT INTO game_moves (room_id, player_id, move_type, token_index, from_position, to_position) 
            VALUES (?, ?, 'move', ?, ?, ?)
        ");
        $stmt->execute([$room['id'], $_SESSION['user_id'], $tokenIndex, $oldPosition, $newPosition]);

        // Check if player won
        if ($tokensFinished === 4) {
            $stmt = $pdo->prepare("UPDATE game_rooms SET status = 'finished', winner_id = ? WHERE id = ?");
            $stmt->execute([$_SESSION['user_id'], $room['id']]);

            // Update user stats
            $stmt = $pdo->prepare("UPDATE users SET wins = wins + 1, games_played = games_played + 1 WHERE id = ?");
            $stmt->execute([$_SESSION['user_id']]);

            // Update other players as losers
            $stmt = $pdo->prepare("
                UPDATE users u 
                JOIN game_players gp ON u.id = gp.user_id 
                SET u.losses = u.losses + 1, u.games_played = u.games_played + 1 
                WHERE gp.room_id = ? AND u.id != ?
            ");
            $stmt->execute([$room['id'], $_SESSION['user_id']]);
        }

        echo json_encode([
            'success' => true,
            'new_position' => $newPosition,
            'tokens_home' => $tokensHome,
            'tokens_finished' => $tokensFinished,
            'game_finished' => ($tokensFinished === 4),
            'message' => 'Token moved successfully'
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to move token']);
    }
}

function calculateNewPosition($currentPosition, $diceValue, $tokensHome, $tokenIndex)
{
    // If token is at home (position 0) and dice is 6, can move out
    if ($currentPosition === 0) {
        if ($diceValue === 6) {
            return 1; // Starting position
        } else {
            return false; // Can't move out without rolling 6
        }
    }

    // If token is already finished
    if ($currentPosition === 100) {
        return false;
    }

    $newPosition = $currentPosition + $diceValue;

    // Win condition: must land exactly on 100
    if ($newPosition > 100) {
        return false; // Can't overshoot
    }

    return $newPosition;
}

function readyUp()
{
    global $pdo, $_SESSION;

    $roomCode = $_POST['room_code'] ?? '';

    if (empty($roomCode)) {
        echo json_encode(['success' => false, 'message' => 'Room code required']);
        exit();
    }

    // Get room
    $stmt = $pdo->prepare("SELECT id FROM game_rooms WHERE room_code = ? AND status = 'waiting'");
    $stmt->execute([$roomCode]);
    $room = $stmt->fetch();

    if (!$room) {
        echo json_encode(['success' => false, 'message' => 'Room not found or game already started']);
        exit();
    }

    // Mark player as ready
    $stmt = $pdo->prepare("
        UPDATE game_players SET is_ready = TRUE WHERE room_id = ? AND user_id = ?
    ");
    $stmt->execute([$room['id'], $_SESSION['user_id']]);

    // Check if all players are ready
    $stmt = $pdo->prepare("
        SELECT COUNT(*) as total, SUM(is_ready) as ready_count 
        FROM game_players WHERE room_id = ?
    ");
    $stmt->execute([$room['id']]);
    $result = $stmt->fetch();

    $gameStart = false;
    if ($result['total'] == $result['ready_count'] && $result['total'] > 0) {
        // All players ready, start game
        $stmt = $pdo->prepare("UPDATE game_rooms SET status = 'active' WHERE id = ?");
        $stmt->execute([$room['id']]);
        $gameStart = true;
    }

    echo json_encode([
        'success' => true,
        'game_started' => $gameStart,
        'message' => 'Ready status updated'
    ]);
}

function sendChat()
{
    global $pdo, $_SESSION;

    $roomCode = $_POST['room_code'] ?? '';
    $message = trim($_POST['message'] ?? '');

    if (empty($roomCode) || empty($message)) {
        echo json_encode(['success' => false, 'message' => 'Room code and message required']);
        exit();
    }

    if (strlen($message) > 500) {
        echo json_encode(['success' => false, 'message' => 'Message too long']);
        exit();
    }

    // Get room
    $stmt = $pdo->prepare("SELECT id FROM game_rooms WHERE room_code = ?");
    $stmt->execute([$roomCode]);
    $room = $stmt->fetch();

    if (!$room) {
        echo json_encode(['success' => false, 'message' => 'Room not found']);
        exit();
    }

    // Check if user is in room
    $stmt = $pdo->prepare("SELECT id FROM game_players WHERE room_id = ? AND user_id = ?");
    $stmt->execute([$room['id'], $_SESSION['user_id']]);
    if ($stmt->rowCount() == 0) {
        echo json_encode(['success' => false, 'message' => 'You are not in this room']);
        exit();
    }

    // Insert message
    $stmt = $pdo->prepare("
        INSERT INTO game_chat (room_id, user_id, message) 
        VALUES (?, ?, ?)
    ");

    if ($stmt->execute([$room['id'], $_SESSION['user_id'], $message])) {
        echo json_encode(['success' => true, 'message' => 'Message sent']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send message']);
    }
}

function getChat()
{
    global $pdo;

    $roomCode = $_GET['room_code'] ?? '';
    $lastId = intval($_GET['last_id'] ?? 0);

    if (empty($roomCode)) {
        echo json_encode(['success' => false, 'message' => 'Room code required']);
        exit();
    }

    // Get room
    $stmt = $pdo->prepare("SELECT id FROM game_rooms WHERE room_code = ?");
    $stmt->execute([$roomCode]);
    $room = $stmt->fetch();

    if (!$room) {
        echo json_encode(['success' => false, 'message' => 'Room not found']);
        exit();
    }

    // Get new messages
    $stmt = $pdo->prepare("
        SELECT gc.*, u.username 
        FROM game_chat gc 
        JOIN users u ON gc.user_id = u.id 
        WHERE gc.room_id = ? AND gc.id > ? 
        ORDER BY gc.sent_at ASC
    ");
    $stmt->execute([$room['id'], $lastId]);
    $messages = $stmt->fetchAll();

    $lastMessageId = $lastId;
    if (!empty($messages)) {
        $lastMessageId = end($messages)['id'];
    }

    echo json_encode([
        'success' => true,
        'messages' => $messages,
        'last_id' => $lastMessageId
    ]);
}

/**
 * ✅ NEW FUNCTION: Create Invitation (Fixed for expires_at)
 */
function createInvitation()
{
    global $pdo, $_SESSION;

    $roomCode = $_POST['room_code'] ?? '';

    if (empty($roomCode)) {
        echo json_encode(['success' => false, 'message' => 'Room code required']);
        exit();
    }

    // Get room
    $stmt = $pdo->prepare("SELECT id FROM game_rooms WHERE room_code = ? AND status = 'waiting'");
    $stmt->execute([$roomCode]);
    $room = $stmt->fetch();

    if (!$room) {
        echo json_encode(['success' => false, 'message' => 'Room not found or game already started']);
        exit();
    }

    // Generate secure token
    $token = bin2hex(random_bytes(32));

    // Set expiration (7 days from now) - ✅ FIXED FOR DATETIME
    $expiresAt = date('Y-m-d H:i:s', strtotime('+7 days'));

    // Create invitation
    $stmt = $pdo->prepare("
        INSERT INTO invitations (room_id, sender_id, token, expires_at) 
        VALUES (?, ?, ?, ?)
    ");

    if ($stmt->execute([$room['id'], $_SESSION['user_id'], $token, $expiresAt])) {
        $invitationId = $pdo->lastInsertId();
        $shareLink = "https://" . ($_SERVER['HTTP_HOST'] ?? 'yourdomain.com') . "/invite.php?token=" . $token;

        echo json_encode([
            'success' => true,
            'invitation_id' => $invitationId,
            'share_link' => $shareLink,
            'expires_at' => $expiresAt,
            'message' => 'Invitation created successfully'
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to create invitation']);
    }
}
?>