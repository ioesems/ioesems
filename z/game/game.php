<?php
require_once 'config.php';
requireLogin();

$roomCode = $_GET['room'] ?? '';

if (empty($roomCode)) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Ludo Game - Room <?= htmlspecialchars($roomCode) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --red-color: #e74c3c;
            --blue-color: #3498db;
            --green-color: #2ecc71;
            --yellow-color: #f1c40f;
        }
        
        * {
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }
        
        body {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            touch-action: manipulation;
        }
        
        .game-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 10px;
            position: relative;
        }
        
        .game-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding: 12px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .game-header h2 {
            margin: 0;
            font-size: 1.5rem;
            color: #333;
        }
        
        .game-header-actions .btn {
            padding: 8px 15px;
            font-size: 0.9rem;
            border-radius: 20px;
        }
        
        .game-board-wrapper {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            margin-bottom: 20px;
            overflow: hidden;
        }
        
        .ludo-board-container {
            position: relative;
            width: 100%;
            aspect-ratio: 1 / 1;
            max-width: 500px;
            margin: 0 auto;
            background: #f9f9f9;
            border: 4px solid #333;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .ludo-board {
            width: 100%;
            height: 100%;
            position: relative;
            background: #f9f9f9;
        }
        
        /* Center square */
        .center-square {
            position: absolute;
            width: 30%;
            height: 30%;
            top: 35%;
            left: 35%;
            background: #333;
            border-radius: 50%;
            z-index: 1;
        }
        
        /* Home bases */
        .home-base {
            position: absolute;
            width: 30%;
            height: 30%;
            border-radius: 8px;
            z-index: 1;
        }
        
        .home-red { 
            top: 5%; 
            left: 5%; 
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            border: 3px solid var(--red-color);
        }
        
        .home-blue { 
            top: 5%; 
            right: 5%; 
            background: linear-gradient(135deg, #4dabf7, #3c91e6);
            border: 3px solid var(--blue-color);
        }
        
        .home-green { 
            bottom: 5%; 
            right: 5%; 
            background: linear-gradient(135deg, #51cf66, #40a94a);
            border: 3px solid var(--green-color);
        }
        
        .home-yellow { 
            bottom: 5%; 
            left: 5%; 
            background: linear-gradient(135deg, #ffd43b, #fab005);
            border: 3px solid var(--yellow-color);
        }
        
        /* Home triangles */
        .home-triangle {
            position: absolute;
            width: 0;
            height: 0;
            border-left: 40px solid transparent;
            border-right: 40px solid transparent;
            border-bottom: 70px solid;
            transform: rotate(-45deg);
            z-index: 2;
        }
        
        .triangle-red {
            top: 35%;
            left: 35%;
            border-bottom-color: var(--red-color);
        }
        
        .triangle-blue {
            top: 35%;
            right: 35%;
            border-bottom-color: var(--blue-color);
        }
        
        .triangle-green {
            bottom: 35%;
            right: 35%;
            border-bottom-color: var(--green-color);
        }
        
        .triangle-yellow {
            bottom: 35%;
            left: 35%;
            border-bottom-color: var(--yellow-color);
        }
        
        /* Game path - outer squares */
        .path-cell {
            position: absolute;
            width: 6.5%;
            height: 6.5%;
            background: white;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            color: #999;
            z-index: 1;
        }
        
        .path-red { background: rgba(231, 76, 60, 0.1); }
        .path-blue { background: rgba(52, 152, 219, 0.1); }
        .path-green { background: rgba(46, 204, 113, 0.1); }
        .path-yellow { background: rgba(241, 196, 15, 0.1); }
        .path-white { background: rgba(255, 255, 255, 0.7); }
        
        /* Tokens */
        .token {
            width: 8.5%;
            height: 8.5%;
            border-radius: 50%;
            position: absolute;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            z-index: 10;
            touch-action: manipulation;
        }
        
        .token.selectable {
            animation: pulse 1.5s infinite;
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
        }
        
        .token.selected {
            transform: scale(1.2);
            box-shadow: 0 0 25px rgba(255, 255, 255, 1);
            z-index: 20;
        }
        
        .token-red { background: linear-gradient(135deg, #ff6b6b, #ee5a24); }
        .token-blue { background: linear-gradient(135deg, #4dabf7, #3c91e6); }
        .token-green { background: linear-gradient(135deg, #51cf66, #40a94a); }
        .token-yellow { background: linear-gradient(135deg, #ffd43b, #fab005); }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(255, 255, 255, 0); }
            100% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0); }
        }
        
        /* Dice */
        .dice-container {
            text-align: center;
            margin: 20px 0 15px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .dice {
            width: 70px;
            height: 70px;
            background: white;
            border: 4px solid #333;
            border-radius: 15px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            font-weight: bold;
            margin: 0 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: all 0.3s;
            user-select: none;
            -webkit-user-select: none;
        }
        
        .dice:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        
        .dice-rolling {
            animation: roll 0.6s ease-in-out;
        }
        
        @keyframes roll {
            0% { transform: rotate(0deg) scale(1); }
            25% { transform: rotate(90deg) scale(1.1); }
            50% { transform: rotate(180deg) scale(1); }
            75% { transform: rotate(270deg) scale(1.1); }
            100% { transform: rotate(360deg) scale(1); }
        }
        
        /* Game controls */
        .game-controls {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
            padding: 15px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        
        .btn-game {
            padding: 12px 25px;
            font-size: 1rem;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            min-width: 150px;
        }
        
        .btn-roll {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
        }
        
        .btn-roll:disabled {
            background: #ccc;
            color: #666;
            cursor: not-allowed;
        }
        
        .btn-ready {
            background: linear-gradient(135deg, #2ecc71, #27ae60);
            color: white;
        }
        
        .btn-leave {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
        }
        
        /* Status display */
        .game-status {
            text-align: center;
            padding: 12px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 15px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .status-waiting { color: #856404; background-color: #fff3cd; }
        .status-your-turn { color: #155724; background-color: #d4edda; }
        .status-other-turn { color: #004085; background-color: #cce5ff; }
        .status-info { color: #383d41; background-color: #e2e3e5; }
        
        /* Players panel */
        .players-panel {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        
        .players-panel h5 {
            margin-top: 0;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eee;
            color: #333;
        }
        
        .player-item {
            display: flex;
            align-items: center;
            padding: 12px;
            margin-bottom: 10px;
            border-radius: 10px;
            background: #f8f9fa;
            transition: all 0.3s;
        }
        
        .player-item:hover {
            transform: translateX(5px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        
        .player-color-indicator {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            margin-right: 12px;
            border: 2px solid #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        
        .player-red { background: linear-gradient(135deg, #ff6b6b, #ee5a24); }
        .player-blue { background: linear-gradient(135deg, #4dabf7, #3c91e6); }
        .player-green { background: linear-gradient(135deg, #51cf66, #40a94a); }
        .player-yellow { background: linear-gradient(135deg, #ffd43b, #fab005); }
        
        .player-name {
            font-weight: 600;
            flex: 1;
            font-size: 1rem;
        }
        
        .player-status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .badge-ready { background: #d4edda; color: #155724; }
        .badge-waiting { background: #fff3cd; color: #856404; }
        .badge-turn { background: #cce5ff; color: #004085; }
        .badge-your-turn { background: #d1ecf1; color: #0c5460; }
        
        /* Chat panel */
        .chat-panel {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .chat-panel h5 {
            margin-top: 0;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eee;
            color: #333;
        }
        
        .chat-messages {
            height: 150px;
            overflow-y: auto;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        
        .chat-message {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            font-size: 0.9rem;
        }
        
        .message-user {
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }
        
        .message-text {
            color: #555;
            line-height: 1.4;
        }
        
        .message-time {
            font-size: 0.75rem;
            color: #888;
            text-align: right;
            margin-top: 5px;
        }
        
        .chat-form {
            display: flex;
            gap: 10px;
        }
        
        .chat-input {
            flex: 1;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 25px;
            outline: none;
            font-size: 0.95rem;
        }
        
        .chat-input:focus {
            border-color: #6e8efb;
            box-shadow: 0 0 0 3px rgba(110, 142, 251, 0.2);
        }
        
        .chat-send {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            border: none;
            padding: 0 25px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .chat-send:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(110, 142, 251, 0.3);
        }
        
        /* Winner modal */
        .winner-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.85);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .winner-content {
            background: linear-gradient(135deg, #fff, #f0f0f0);
            padding: 40px 30px;
            border-radius: 20px;
            text-align: center;
            max-width: 90%;
            width: 500px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            animation: celebration 1.5s infinite alternate;
            position: relative;
            overflow: hidden;
        }
        
        @keyframes celebration {
            0% { transform: scale(1); }
            100% { transform: scale(1.03); }
        }
        
        .winner-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #e74c3c;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .winner-name {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 30px;
            color: #2c3e50;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .winner-button {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(110, 142, 251, 0.4);
        }
        
        .winner-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(110, 142, 251, 0.6);
        }
        
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #f00;
            animation: fall 3s linear forwards;
            z-index: -1;
        }
        
        @keyframes fall {
            0% { transform: translateY(-10vh) rotate(0deg); opacity: 1; }
            100% { transform: translateY(100vh) rotate(360deg); opacity: 0; }
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .game-container {
                padding: 5px;
            }
            
            .game-header {
                padding: 10px;
            }
            
            .game-header h2 {
                font-size: 1.3rem;
            }
            
            .dice {
                width: 60px;
                height: 60px;
                font-size: 30px;
            }
            
            .token {
                width: 9.5%;
                height: 9.5%;
                font-size: 12px;
            }
            
            .btn-game {
                min-width: 120px;
                padding: 10px 20px;
                font-size: 0.9rem;
            }
            
            .game-status {
                font-size: 1rem;
                padding: 10px;
            }
            
            .player-color-indicator {
                width: 22px;
                height: 22px;
            }
            
            .player-name {
                font-size: 0.95rem;
            }
            
            .chat-messages {
                height: 120px;
            }
        }
        
        @media (max-width: 480px) {
            .ludo-board-container {
                margin: 0 auto;
            }
            
            .dice {
                width: 50px;
                height: 50px;
                font-size: 24px;
            }
            
            .token {
                width: 10.5%;
                height: 10.5%;
                font-size: 11px;
            }
            
            .btn-game {
                min-width: 100px;
                padding: 8px 16px;
                font-size: 0.85rem;
            }
            
            .game-status {
                font-size: 0.95rem;
                padding: 8px;
            }
            
            .chat-input {
                padding: 10px;
                font-size: 0.9rem;
            }
            
            .chat-send {
                padding: 0 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="game-container">
        <!-- Header -->
        <div class="game-header">
            <div>
                <h2><i class="fas fa-dice"></i> Ludo Master</h2>
                <div class="small">Room: <span class="badge bg-primary"><?= htmlspecialchars($roomCode) ?></span></div>
            </div>
            <div class="game-header-actions">
                <button class="btn btn-outline-secondary btn-sm me-2" onclick="copyRoomLink()">
                    <i class="fas fa-link"></i> Share
                </button>
                <button class="btn btn-outline-danger btn-sm" onclick="leaveRoom()">
                    <i class="fas fa-door-open"></i> Leave
                </button>
            </div>
        </div>
        
        <!-- Game Status -->
        <div class="game-status status-info" id="gameStatus">Setting up game...</div>
        
        <!-- Dice -->
        <div class="dice-container">
            <div class="dice" id="dice">?</div>
        </div>
        
        <!-- Game Controls -->
        <div class="game-controls">
            <button class="btn btn-game btn-roll" id="rollButton" disabled>
                <i class="fas fa-dice"></i> Roll Dice
            </button>
            <button class="btn btn-game btn-ready" id="readyButton">
                <i class="fas fa-check-circle"></i> Ready Up
            </button>
            <button class="btn btn-game btn-leave" onclick="leaveRoom()">
                <i class="fas fa-times"></i> Leave Game
            </button>
        </div>
        
        <!-- Game Board -->
        <div class="game-board-wrapper">
            <div class="ludo-board-container">
                <div class="ludo-board" id="ludoBoard">
                    <!-- Center square -->
                    <div class="center-square"></div>
                    
                    <!-- Home bases -->
                    <div class="home-base home-red"></div>
                    <div class="home-base home-blue"></div>
                    <div class="home-base home-green"></div>
                    <div class="home-base home-yellow"></div>
                    
                    <!-- Home triangles -->
                    <div class="home-triangle triangle-red"></div>
                    <div class="home-triangle triangle-blue"></div>
                    <div class="home-triangle triangle-green"></div>
                    <div class="home-triangle triangle-yellow"></div>
                    
                    <!-- Game path will be generated by JavaScript -->
                    <div id="pathContainer"></div>
                    
                    <!-- Tokens will be placed here dynamically -->
                    <div id="tokensContainer"></div>
                </div>
            </div>
        </div>
        
        <!-- Players and Chat (side by side on desktop, stacked on mobile) -->
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="players-panel">
                    <h5><i class="fas fa-users"></i> Players</h5>
                    <div id="playersList">
                        <div class="text-center py-4">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <p class="mt-2">Loading players...</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="chat-panel">
                    <h5><i class="fas fa-comments"></i> Chat</h5>
                    <div class="chat-messages" id="chatMessages">
                        <div class="text-center py-3">
                            <small>No messages yet. Say hello!</small>
                        </div>
                    </div>
                    <div class="chat-form">
                        <input type="text" class="chat-input" id="chatInput" placeholder="Type a message...">
                        <button class="chat-send" id="sendChatButton">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Winner Modal -->
    <div class="winner-modal" id="winnerModal">
        <div class="winner-content">
            <h2 class="winner-title">🎉 Game Over! 🎉</h2>
            <h3 class="winner-name" id="winnerName">Player Name</h3>
            <p>Congratulations to the winner!</p>
            <button class="winner-button" onclick="location.href='dashboard.php'">
                <i class="fas fa-home"></i> Return to Dashboard
            </button>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Game state variables
        let gameState = {
            roomCode: '<?= htmlspecialchars($roomCode) ?>',
            playerId: <?= $_SESSION['user_id'] ?>,
            playerName: '<?= htmlspecialchars($_SESSION['username']) ?>',
            playerColor: null,
            isYourTurn: false,
            diceValue: null,
            lastChatId: 0,
            gameActive: false,
            selectedToken: null,
            pathPositions: [] // Will be populated with all 52 positions
        };
        
        // DOM elements
        const diceElement = document.getElementById('dice');
        const rollButton = document.getElementById('rollButton');
        const readyButton = document.getElementById('readyButton');
        const gameStatusElement = document.getElementById('gameStatus');
        const playersListElement = document.getElementById('playersList');
        const tokensContainer = document.getElementById('tokensContainer');
        const chatMessagesElement = document.getElementById('chatMessages');
        const chatInput = document.getElementById('chatInput');
        const sendChatButton = document.getElementById('sendChatButton');
        const winnerModal = document.getElementById('winnerModal');
        const winnerNameElement = document.getElementById('winnerName');
        const pathContainer = document.getElementById('pathContainer');
        const ludoBoard = document.getElementById('ludoBoard');
        
        // Initialize game path positions
        function initializePathPositions() {
            const positions = [];
            
            // Create 52 path positions (standard Ludo board)
            // This creates a realistic path around the board
            
            // Top row (left to right) - positions 1-10
            for (let i = 0; i < 10; i++) {
                positions.push({
                    x: 15 + (i * 7),
                    y: 7,
                    type: 'white'
                });
            }
            
            // Right column (top to bottom) - positions 11-20
            for (let i = 0; i < 10; i++) {
                positions.push({
                    x: 85,
                    y: 15 + (i * 7),
                    type: 'white'
                });
            }
            
            // Bottom row (right to left) - positions 21-30
            for (let i = 0; i < 10; i++) {
                positions.push({
                    x: 85 - (i * 7),
                    y: 85,
                    type: 'white'
                });
            }
            
            // Left column (bottom to top) - positions 31-40
            for (let i = 0; i < 10; i++) {
                positions.push({
                    x: 7,
                    y: 85 - (i * 7),
                    type: 'white'
                });
            }
            
            // Special colored entry points
            positions[0].type = 'red';    // Red entry
            positions[10].type = 'blue';  // Blue entry
            positions[20].type = 'green'; // Green entry
            positions[30].type = 'yellow'; // Yellow entry
            
            // Add home rows (positions 41-52)
            // Red home row
            for (let i = 0; i < 6; i++) {
                positions.push({
                    x: 15 + (i * 7),
                    y: 45,
                    type: 'red'
                });
            }
            
            // Blue home row
            for (let i = 0; i < 6; i++) {
                positions.push({
                    x: 45,
                    y: 15 + (i * 7),
                    type: 'blue'
                });
            }
            
            gameState.pathPositions = positions;
            renderPath();
        }
        
        // Render the game path on the board
        function renderPath() {
            pathContainer.innerHTML = '';
            
            gameState.pathPositions.forEach((pos, index) => {
                const cell = document.createElement('div');
                cell.className = `path-cell path-${pos.type}`;
                cell.style.left = `${pos.x}%`;
                cell.style.top = `${pos.y}%`;
                cell.style.transform = 'translate(-50%, -50%)';
                cell.dataset.position = index + 1;
                cell.innerHTML = `<small>${index + 1}</small>`;
                pathContainer.appendChild(cell);
            });
        }
        
        // Initialize game
        async function initGame() {
            try {
                // Initialize path positions
                initializePathPositions();
                
                // Join room if not already joined
                await joinRoom();
                
                // Start polling for game state
                setInterval(updateGameState, 1500);
                
                // Start polling for chat messages
                setInterval(fetchChatMessages, 3000);
                
                // Setup event listeners
                rollButton.addEventListener('click', rollDice);
                readyButton.addEventListener('click', readyUp);
                sendChatButton.addEventListener('click', sendChat);
                chatInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') sendChat();
                });
                
                // Prevent double tap zoom on mobile
                document.addEventListener('touchstart', function(event) {
                    if (event.touches.length > 1) {
                        event.preventDefault();
                    }
                }, { passive: false });
                
                // Initial update
                await updateGameState();
                
            } catch (error) {
                console.error('Error initializing game:', error);
                alert('Error initializing game. Please refresh the page.');
            }
        }
        
        async function joinRoom() {
            const formData = new FormData();
            formData.append('action', 'join_room');
            formData.append('room_code', gameState.roomCode);
            
            const response = await fetch('api/game_api.php', {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            
            if (!result.success) {
                alert('Error joining room: ' + result.message);
                window.location.href = 'dashboard.php';
                return false;
            }
            
            if (result.player_color) {
                gameState.playerColor = result.player_color;
            }
            
            return true;
        }
        
        async function updateGameState() {
            try {
                const response = await fetch(`api/game_api.php?action=get_game_state&room_code=${gameState.roomCode}`);
                const result = await response.json();
                
                if (!result.success) {
                    console.error('Error getting game state:', result.message);
                    return;
                }
                
                // Update game state
                gameState.isYourTurn = result.is_your_turn;
                gameState.gameActive = result.room.status === 'active';
                
                // Update UI
                updatePlayersList(result.players);
                updateTokens(result.players);
                updateGameControls(result.room.status);
                checkForWinner(result.room);
                
            } catch (error) {
                console.error('Error updating game state:', error);
            }
        }
        
        function updatePlayersList(players) {
            if (!players || players.length === 0) return;
            
            let html = '';
            players.forEach(player => {
                let statusClass = 'badge-waiting';
                let statusText = 'Not Ready';
                
                if (player.is_ready) {
                    statusClass = 'badge-ready';
                    statusText = 'Ready';
                }
                
                if (gameState.gameActive) {
                    if (gameState.isYourTurn && player.user_id == gameState.playerId) {
                        statusClass = 'badge-your-turn';
                        statusText = 'YOUR TURN!';
                    } else if (player.user_id == gameState.playerId) {
                        statusClass = 'badge-turn';
                        statusText = 'Your Next Turn';
                    }
                }
                
                html += `
                    <div class="player-item">
                        <div class="player-color-indicator player-${player.player_color}"></div>
                        <div class="player-name">${player.username}</div>
                        <div class="player-status-badge ${statusClass}">${statusText}</div>
                    </div>
                `;
            });
            
            playersListElement.innerHTML = html;
        }
        
        function updateTokens(players) {
            tokensContainer.innerHTML = '';
            
            if (!players || players.length === 0) return;
            
            players.forEach(player => {
                const positions = JSON.parse(player.position);
                
                positions.forEach((position, index) => {
                    if (position === null || position === undefined) return;
                    
                    // Calculate token position based on game position
                    const tokenPos = calculateTokenPosition(position, player.player_color, index);
                    
                    if (!tokenPos) return;
                    
                    const token = document.createElement('div');
                    token.className = `token token-${player.player_color}`;
                    token.style.left = `${tokenPos.x}%`;
                    token.style.top = `${tokenPos.y}%`;
                    token.style.transform = 'translate(-50%, -50%)';
                    token.dataset.playerId = player.user_id;
                    token.dataset.tokenIndex = index;
                    token.dataset.position = position;
                    token.innerText = index + 1;
                    
                    // Only add click event if it's the player's own token and their turn and dice is rolled
                    if (player.user_id == gameState.playerId && gameState.isYourTurn && gameState.diceValue) {
                        // Check if this token can be moved with current dice value
                        if (canMoveToken(position, gameState.diceValue)) {
                            token.classList.add('selectable');
                            token.addEventListener('click', () => selectToken(token, index));
                        }
                    }
                    
                    tokensContainer.appendChild(token);
                });
            });
        }
        
        function canMoveToken(currentPosition, diceValue) {
            // Token in home (position 0) can only move if dice is 6
            if (currentPosition === 0) {
                return diceValue === 6;
            }
            
            // Token already finished
            if (currentPosition === 100) {
                return false;
            }
            
            // Check if move would exceed finish (must land exactly on 100)
            const newPosition = currentPosition + diceValue;
            return newPosition <= 100;
        }
        
        function selectToken(tokenElement, tokenIndex) {
            // Deselect any previously selected token
            document.querySelectorAll('.token.selected').forEach(el => {
                el.classList.remove('selected');
            });
            
            // Select this token
            tokenElement.classList.add('selected');
            gameState.selectedToken = tokenIndex;
            
            gameStatusElement.innerHTML = `Token ${tokenIndex + 1} selected. Click "Move Token" or click another token to change.`;
            gameStatusElement.className = 'game-status status-your-turn';
        }
        
        function calculateTokenPosition(position, color, tokenIndex) {
            // Token is in home base (position 0)
            if (position === 0) {
                const homePositions = {
                    'red': [
                        {x: 15, y: 15}, {x: 25, y: 15},
                        {x: 15, y: 25}, {x: 25, y: 25}
                    ],
                    'blue': [
                        {x: 85, y: 15}, {x: 95, y: 15},
                        {x: 85, y: 25}, {x: 95, y: 25}
                    ],
                    'green': [
                        {x: 85, y: 85}, {x: 95, y: 85},
                        {x: 85, y: 95}, {x: 95, y: 95}
                    ],
                    'yellow': [
                        {x: 15, y: 85}, {x: 25, y: 85},
                        {x: 15, y: 95}, {x: 25, y: 95}
                    ]
                };
                
                return homePositions[color][tokenIndex];
            }
            
            // Token has finished the game (position 100)
            if (position === 100) {
                // Position in center
                const centerPositions = [
                    {x: 45, y: 45}, {x: 55, y: 45},
                    {x: 45, y: 55}, {x: 55, y: 55}
                ];
                return centerPositions[tokenIndex];
            }
            
            // Token is on the game path
            // Map position to path index (1-52 for main path, 53+ for home rows)
            let pathIndex = position - 1;
            
            if (pathIndex >= 0 && pathIndex < gameState.pathPositions.length) {
                return gameState.pathPositions[pathIndex];
            }
            
            // Default fallback
            return {x: 50, y: 50};
        }
        
        function updateGameControls(roomStatus) {
            if (roomStatus === 'waiting') {
                rollButton.disabled = true;
                diceElement.innerText = '?';
                gameStatusElement.innerText = 'Waiting for players to ready up...';
                gameStatusElement.className = 'game-status status-waiting';
                readyButton.style.display = 'inline-block';
            } else if (roomStatus === 'active') {
                readyButton.style.display = 'none';
                
                if (gameState.isYourTurn) {
                    if (!gameState.diceValue) {
                        rollButton.disabled = false;
                        diceElement.innerText = '?';
                        gameStatusElement.innerHTML = '🎲 It\'s your turn! Click "Roll Dice" to start.';
                        gameStatusElement.className = 'game-status status-your-turn';
                    } else {
                        rollButton.disabled = true;
                        gameStatusElement.innerHTML = `You rolled a ${gameState.diceValue}! Click a highlighted token to select it.`;
                        gameStatusElement.className = 'game-status status-your-turn';
                    }
                } else {
                    rollButton.disabled = true;
                    gameStatusElement.innerHTML = '⏳ Waiting for other player to complete their turn...';
                    gameStatusElement.className = 'game-status status-other-turn';
                }
            } else if (roomStatus === 'finished') {
                rollButton.disabled = true;
                readyButton.style.display = 'none';
                gameStatusElement.innerText = '🏆 Game finished! Winner has been declared.';
                gameStatusElement.className = 'game-status status-info';
            }
        }
        
        function checkForWinner(room) {
            if (room.status === 'finished' && room.winner_id) {
                // Get winner name
                fetch(`api/game_api.php?action=get_game_state&room_code=${gameState.roomCode}`)
                    .then(response => response.json())
                    .then(result => {
                        if (result.success) {
                            const winner = result.players.find(p => p.user_id == room.winner_id);
                            if (winner) {
                                winnerNameElement.innerText = winner.username;
                                winnerModal.style.display = 'flex';
                                
                                // Create confetti effect
                                createConfetti();
                            }
                        }
                    });
            }
        }
        
        function createConfetti() {
            for (let i = 0; i < 150; i++) {
                const confetti = document.createElement('div');
                confetti.className = 'confetti';
                confetti.style.left = Math.random() * 100 + 'vw';
                confetti.style.backgroundColor = ['#ff0000', '#00ff00', '#0000ff', '#ffff00', '#ff00ff', '#ff8000'][Math.floor(Math.random() * 6)];
                confetti.style.width = (Math.random() * 8 + 5) + 'px';
                confetti.style.height = (Math.random() * 8 + 5) + 'px';
                confetti.style.animationDuration = (Math.random() * 3 + 2) + 's';
                confetti.style.animationDelay = (Math.random() * 2) + 's';
                document.body.appendChild(confetti);
                
                // Remove confetti after animation
                setTimeout(() => {
                    confetti.remove();
                }, 5000);
            }
        }
        
        async function rollDice() {
            if (!gameState.isYourTurn || gameState.diceValue) return;
            
            // Visual feedback
            diceElement.classList.add('dice-rolling');
            rollButton.disabled = true;
            
            try {
                const formData = new FormData();
                formData.append('action', 'roll_dice');
                formData.append('room_code', gameState.roomCode);
                
                const response = await fetch('api/game_api.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.success) {
                    gameState.diceValue = result.dice_value;
                    diceElement.innerText = result.dice_value;
                    diceElement.classList.remove('dice-rolling');
                    
                    gameStatusElement.innerHTML = `You rolled a <strong>${result.dice_value}</strong>! Click a highlighted token to move it.`;
                    gameStatusElement.className = 'game-status status-your-turn';
                    
                    // Re-render tokens to show which ones can be moved
                    updateTokensUIForMovement();
                } else {
                    alert('Error rolling dice: ' + result.message);
                    diceElement.classList.remove('dice-rolling');
                    rollButton.disabled = false;
                }
            } catch (error) {
                console.error('Error rolling dice:', error);
                diceElement.classList.remove('dice-rolling');
                rollButton.disabled = false;
                alert('Network error. Please try again.');
            }
        }
        
        function updateTokensUIForMovement() {
            // This function is now handled in updateTokens()
            // Tokens that can be moved will have the 'selectable' class
        }
        
        async function moveToken(tokenIndex) {
            if (!gameState.isYourTurn || !gameState.diceValue) return;
            
            try {
                const formData = new FormData();
                formData.append('action', 'move_token');
                formData.append('room_code', gameState.roomCode);
                formData.append('token_index', tokenIndex);
                formData.append('dice_value', gameState.diceValue);
                
                const response = await fetch('api/game_api.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.success) {
                    // Reset for next turn
                    gameState.diceValue = null;
                    gameState.selectedToken = null;
                    diceElement.innerText = '?';
                    rollButton.disabled = true;
                    
                    // Deselect any selected token
                    document.querySelectorAll('.token.selected').forEach(el => {
                        el.classList.remove('selected');
                    });
                    
                    gameStatusElement.innerHTML = '✅ Move completed. Waiting for next player...';
                    gameStatusElement.className = 'game-status status-other-turn';
                    
                    // Update game state to reflect changes
                    updateGameState();
                } else {
                    alert('Error moving token: ' + result.message);
                }
            } catch (error) {
                console.error('Error moving token:', error);
                alert('Network error. Please try again.');
            }
        }
        
        // Modified selectToken function to immediately move the token
        function selectToken(tokenElement, tokenIndex) {
            // For better mobile experience, immediately move the token when selected
            moveToken(tokenIndex);
        }
        
        async function readyUp() {
            try {
                const formData = new FormData();
                formData.append('action', 'ready_up');
                formData.append('room_code', gameState.roomCode);
                
                const response = await fetch('api/game_api.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.success) {
                    if (result.game_started) {
                        gameStatusElement.innerHTML = '🎮 <strong>Game started!</strong> Wait for your turn.';
                        gameStatusElement.className = 'game-status status-info';
                    } else {
                        gameStatusElement.innerHTML = '✅ You are ready! Waiting for other players...';
                        gameStatusElement.className = 'game-status status-waiting';
                        readyButton.disabled = true;
                        readyButton.innerHTML = '<i class="fas fa-check-circle"></i> Ready ✓';
                    }
                    
                    // Update game state
                    updateGameState();
                } else {
                    alert('Error readying up: ' + result.message);
                }
            } catch (error) {
                console.error('Error readying up:', error);
                alert('Network error. Please try again.');
            }
        }
        
        async function fetchChatMessages() {
            try {
                const response = await fetch(`api/game_api.php?action=get_chat&room_code=${gameState.roomCode}&last_id=${gameState.lastChatId}`);
                const result = await response.json();
                
                if (result.success && result.messages.length > 0) {
                    result.messages.forEach(message => {
                        addChatMessage(message);
                        gameState.lastChatId = Math.max(gameState.lastChatId, message.id);
                    });
                    
                    // Scroll to bottom
                    chatMessagesElement.scrollTop = chatMessagesElement.scrollHeight;
                }
            } catch (error) {
                console.error('Error fetching chat messages:', error);
            }
        }
        
        function addChatMessage(message) {
            const messageElement = document.createElement('div');
            messageElement.className = 'chat-message';
            
            const now = new Date();
            const timeString = now.getHours().toString().padStart(2, '0') + ':' + 
                              now.getMinutes().toString().padStart(2, '0');
            
            messageElement.innerHTML = `
                <div class="message-user">${escapeHtml(message.username)}</div>
                <div class="message-text">${escapeHtml(message.message)}</div>
                <div class="message-time">${timeString}</div>
            `;
            
            chatMessagesElement.appendChild(messageElement);
        }
        
        async function sendChat() {
            const message = chatInput.value.trim();
            if (!message) return;
            
            try {
                const formData = new FormData();
                formData.append('action', 'send_chat');
                formData.append('room_code', gameState.roomCode);
                formData.append('message', message);
                
                const response = await fetch('api/game_api.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.success) {
                    chatInput.value = '';
                    
                    // Add message immediately to UI
                    const fakeMessage = {
                        username: gameState.playerName,
                        message: message,
                        id: Date.now() // Temporary ID
                    };
                    addChatMessage(fakeMessage);
                    
                    // Scroll to bottom
                    chatMessagesElement.scrollTop = chatMessagesElement.scrollHeight;
                } else {
                    alert('Error sending message: ' + result.message);
                }
            } catch (error) {
                console.error('Error sending chat message:', error);
                alert('Network error. Please try again.');
            }
        }
        
        function copyRoomLink() {
            const roomUrl = window.location.origin + window.location.pathname + '?room=' + gameState.roomCode;
            navigator.clipboard.writeText(roomUrl).then(() => {
                alert('🎉 Room link copied to clipboard! Share it with friends.');
            }).catch(err => {
                console.error('Could not copy text: ', err);
                alert('Failed to copy link. Please copy manually: ' + roomUrl);
            });
        }
        
        function leaveRoom() {
            if (confirm('Are you sure you want to leave this game?')) {
                window.location.href = 'dashboard.php';
            }
        }
        
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.innerText = text;
            return div.innerHTML;
        }
        
        // Handle window visibility change (pause animations when tab is inactive)
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                // Pause any animations
                document.querySelectorAll('.dice-rolling').forEach(el => {
                    el.classList.remove('dice-rolling');
                });
            }
        });
        
        // Initialize the game when page loads
        document.addEventListener('DOMContentLoaded', initGame);
        
        // Prevent scrolling on mobile when interacting with game
        document.body.addEventListener('touchmove', function(e) {
            if (e.target.closest('.ludo-board-container') || e.target.closest('.dice')) {
                e.preventDefault();
            }
        }, { passive: false });
    </script>
</body>
</html>