<?php
require_once 'config.php';
requireLogin();

// Get user info
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();

// Get available rooms
$stmt = $pdo->prepare("
    SELECT gr.*, u.username as creator_name 
    FROM game_rooms gr 
    JOIN users u ON gr.creator_id = u.id 
    WHERE gr.status = 'waiting' AND gr.current_players < gr.max_players
    ORDER BY gr.created_at DESC
");
$stmt->execute();
$availableRooms = $stmt->fetchAll();

// Get user's active games
$stmt = $pdo->prepare("
    SELECT gr.*, u.username as creator_name 
    FROM game_rooms gr 
    JOIN game_players gp ON gr.id = gp.room_id 
    JOIN users u ON gr.creator_id = u.id 
    WHERE gp.user_id = ? AND gr.status IN ('waiting', 'active')
    ORDER BY gr.created_at DESC
");
$stmt->execute([$_SESSION['user_id']]);
$myGames = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Ludo Master</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .game-card { transition: transform 0.3s; cursor: pointer; }
        .game-card:hover { transform: translateY(-5px); }
        .create-room-btn { background: linear-gradient(135deg, #6e8efb, #a777e3); border: none; }
        .stats-card { background: linear-gradient(135deg, #ff9a9e, #fecfef); }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-dice"></i> Ludo Master
            </a>
            <div class="d-flex align-items-center">
                <span class="me-3 text-white">Hello, <?= htmlspecialchars($user['username']) ?>!</span>
                <a href="logout.php" class="btn btn-outline-light">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <div class="row">
            <!-- User Stats -->
            <div class="col-md-4 mb-4">
                <div class="card stats-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Your Stats</h5>
                        <div class="row text-center">
                            <div class="col-4">
                                <div class="display-6"><?= $user['wins'] ?></div>
                                <small>Wins</small>
                            </div>
                            <div class="col-4">
                                <div class="display-6"><?= $user['games_played'] ?></div>
                                <small>Games</small>
                            </div>
                            <div class="col-4">
                                <div class="display-6"><?= $user['losses'] ?></div>
                                <small>Losses</small>
                            </div>
                        </div>
                        <?php if ($user['games_played'] > 0): ?>
                            <div class="mt-3">
                                Win Rate: <strong><?= round(($user['wins'] / $user['games_played']) * 100, 1) ?>%</strong>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Create Room -->
            <div class="col-md-8 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create New Game</h5>
                        <form id="createRoomForm" class="row g-3">
                            <div class="col-md-8">
                                <label for="maxPlayers" class="form-label">Number of Players</label>
                                <select class="form-select" id="maxPlayers" name="max_players">
                                    <option value="2">2 Players</option>
                                    <option value="3">3 Players</option>
                                    <option value="4" selected>4 Players</option>
                                </select>
                            </div>
                            <div class="col-md-4 d-flex align-items-end">
                                <button type="submit" class="btn create-room-btn w-100">
                                    <i class="fas fa-plus"></i> Create Room
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Games -->
        <div class="row mb-4">
            <div class="col-12">
                <h4>My Games</h4>
                <?php if (count($myGames) > 0): ?>
                    <div class="row">
                        <?php foreach ($myGames as $game): ?>
                            <div class="col-md-4 mb-3">
                                <div class="card game-card" onclick="joinRoom('<?= $game['room_code'] ?>')">
                                    <div class="card-body">
                                        <h6 class="card-title">Room: <?= $game['room_code'] ?></h6>
                                        <p class="card-text">
                                            <i class="fas fa-user"></i> Created by: <?= htmlspecialchars($game['creator_name']) ?><br>
                                            <i class="fas fa-users"></i> Players: <?= $game['current_players'] ?>/<?= $game['max_players'] ?><br>
                                            <span class="badge bg-<?= $game['status'] == 'active' ? 'success' : 'warning' ?>">
                                                <?= ucfirst($game['status']) ?>
                                            </span>
                                        </p>
                                        <button class="btn btn-sm btn-primary">Join Game</button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <div class="alert alert-info">You don't have any active games.</div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Available Rooms -->
        <div class="row">
            <div class="col-12">
                <h4>Available Rooms</h4>
                <?php if (count($availableRooms) > 0): ?>
                    <div class="row">
                        <?php foreach ($availableRooms as $room): ?>
                            <div class="col-md-4 mb-3">
                                <div class="card game-card" onclick="joinRoom('<?= $room['room_code'] ?>')">
                                    <div class="card-body">
                                        <h6 class="card-title">Room: <?= $room['room_code'] ?></h6>
                                        <p class="card-text">
                                            <i class="fas fa-user"></i> Created by: <?= htmlspecialchars($room['creator_name']) ?><br>
                                            <i class="fas fa-users"></i> Players: <?= $room['current_players'] ?>/<?= $room['max_players'] ?><br>
                                            <span class="badge bg-warning">Waiting</span>
                                        </p>
                                        <button class="btn btn-sm btn-success">Join Room</button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <div class="alert alert-info">No available rooms. Create one!</div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function joinRoom(roomCode) {
            window.location.href = 'game.php?room=' + roomCode;
        }

        document.getElementById('createRoomForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData();
            formData.append('max_players', document.getElementById('maxPlayers').value);
            formData.append('action', 'create_room');
            
            try {
                const response = await fetch('api/game_api.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.success) {
                    window.location.href = 'game.php?room=' + result.room_code;
                } else {
                    alert('Error: ' + result.message);
                }
            } catch (error) {
                alert('Network error. Please try again.');
            }
        });
    </script>
</body>
</html>