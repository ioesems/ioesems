class SnakeGame {
    constructor() {
        this.canvas = document.getElementById('game-canvas');
        this.ctx = this.canvas.getContext('2d');
        this.scoreElement = document.getElementById('score');
        this.foodEatenElement = document.getElementById('food-eaten');
        this.startBtn = document.getElementById('start-btn');
        this.playAgainBtn = document.getElementById('play-again-btn');
        this.leaderboardBtn = document.getElementById('leaderboard-btn');
        this.logoutBtn = document.getElementById('logout-btn');
        this.gameOverDiv = document.getElementById('game-over');
        this.finalScoreElement = document.getElementById('final-score');
        this.finalFoodElement = document.getElementById('final-food');
        
        // Mobile control buttons
        this.upBtn = document.querySelector('.mobile-controls .up');
        this.downBtn = document.querySelector('.mobile-controls .down');
        this.leftBtn = document.querySelector('.mobile-controls .left');
        this.rightBtn = document.querySelector('.mobile-controls .right');
        
        // Game settings
        this.gridSize = 20;
        this.gameSpeed = 150; // milliseconds
        this.direction = 'right';
        this.nextDirection = 'right';
        this.gameRunning = false;
        this.gameStartTime = null;
        this.foodEaten = 0;
        this.isMobile = this.detectMobile();
        
        // Initialize snake
        this.snake = [
            {x: 5, y: 10},
            {x: 4, y: 10},
            {x: 3, y: 10}
        ];
        
        this.food = {x: 15, y: 10};
        
        // Set up canvas for responsive design
        this.setupCanvas();
        
        // Bind event listeners
        this.bindEventListeners();
        
        // Initial render
        this.render();
    }
    
    detectMobile() {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || 
               window.innerWidth <= 768;
    }
    
    setupCanvas() {
        // Adjust canvas size for mobile devices
        if (this.isMobile) {
            const maxWidth = Math.min(window.innerWidth - 40, 350);
            const aspectRatio = this.canvas.height / this.canvas.width;
            const newHeight = maxWidth * aspectRatio;
            
            this.canvas.style.width = `${maxWidth}px`;
            this.canvas.style.height = `${newHeight}px`;
            
            // Update grid size for better touch experience
            this.gridSize = Math.floor(maxWidth / 30);
            if (this.gridSize < 10) this.gridSize = 10;
        }
    }
    
    bindEventListeners() {
        // Keyboard controls
        document.addEventListener('keydown', (e) => {
            this.handleKeyPress(e);
        });
        
        // Touch controls for mobile
        if (this.isMobile) {
            this.setupMobileControls();
        }
        
        // Start button
        this.startBtn.addEventListener('click', () => {
            this.startGame();
        });
        
        // Play again button
        this.playAgainBtn.addEventListener('click', () => {
            this.resetGame();
            this.startGame();
        });
        
        // Leaderboard button
        this.leaderboardBtn.addEventListener('click', () => {
            window.location.href = 'leaderboard.php';
        });
        
        // Logout button
        this.logoutBtn.addEventListener('click', () => {
            window.location.href = 'logout.php';
        });
        
        // Prevent scrolling when touching the game area on mobile
        this.canvas.addEventListener('touchstart', (e) => {
            e.preventDefault();
        }, { passive: false });
        
        this.canvas.addEventListener('touchmove', (e) => {
            e.preventDefault();
        }, { passive: false });
        
        // Handle window resize
        window.addEventListener('resize', () => {
            this.setupCanvas();
            this.render();
        });
    }
    
    setupMobileControls() {
        // Add event listeners to mobile control buttons
        this.upBtn.addEventListener('touchstart', (e) => {
            e.preventDefault();
            this.handleDirectionChange('up');
        });
        
        this.downBtn.addEventListener('touchstart', (e) => {
            e.preventDefault();
            this.handleDirectionChange('down');
        });
        
        this.leftBtn.addEventListener('touchstart', (e) => {
            e.preventDefault();
            this.handleDirectionChange('left');
        });
        
        this.rightBtn.addEventListener('touchstart', (e) => {
            e.preventDefault();
            this.handleDirectionChange('right');
        });
        
        // Also support mouse clicks for testing on desktop
        this.upBtn.addEventListener('mousedown', () => this.handleDirectionChange('up'));
        this.downBtn.addEventListener('mousedown', () => this.handleDirectionChange('down'));
        this.leftBtn.addEventListener('mousedown', () => this.handleDirectionChange('left'));
        this.rightBtn.addEventListener('mousedown', () => this.handleDirectionChange('right'));
    }
    
    handleDirectionChange(newDirection) {
        if (!this.gameRunning) return;
        
        const currentDirection = this.direction;
        
        // Prevent 180-degree turns
        if (
            (newDirection === 'up' && currentDirection !== 'down') ||
            (newDirection === 'down' && currentDirection !== 'up') ||
            (newDirection === 'left' && currentDirection !== 'right') ||
            (newDirection === 'right' && currentDirection !== 'left')
        ) {
            this.nextDirection = newDirection;
        }
    }
    
    handleKeyPress(e) {
        if (!this.gameRunning) return;
        
        switch(e.key) {
            case 'ArrowUp':
                if (this.direction !== 'down') this.nextDirection = 'up';
                break;
            case 'ArrowDown':
                if (this.direction !== 'up') this.nextDirection = 'down';
                break;
            case 'ArrowLeft':
                if (this.direction !== 'right') this.nextDirection = 'left';
                break;
            case 'ArrowRight':
                if (this.direction !== 'left') this.nextDirection = 'right';
                break;
        }
    }
    
    startGame() {
        if (this.gameRunning) return;
        
        this.gameRunning = true;
        this.gameStartTime = Date.now();
        this.startBtn.disabled = true;
        this.gameOverDiv.classList.add('hidden');
        
        // Hide game over if visible
        this.gameOverDiv.style.display = 'none';
        
        // Start game loop
        this.gameLoop();
    }
    
    gameLoop() {
        if (!this.gameRunning) return;
        
        // Update direction
        this.direction = this.nextDirection;
        
        // Move snake
        this.moveSnake();
        
        // Check collisions
        if (this.checkCollision()) {
            this.gameOver();
            return;
        }
        
        // Check if food eaten
        this.checkFood();
        
        // Render game
        this.render();
        
        // Continue loop
        setTimeout(() => this.gameLoop(), this.gameSpeed);
    }
    
    moveSnake() {
        // Get head position
        const head = {...this.snake[0]};
        
        // Move head based on direction
        switch(this.direction) {
            case 'up':
                head.y -= 1;
                break;
            case 'down':
                head.y += 1;
                break;
            case 'left':
                head.x -= 1;
                break;
            case 'right':
                head.x += 1;
                break;
        }
        
        // Add new head
        this.snake.unshift(head);
        
        // Remove tail if no food eaten
        if (head.x === this.food.x && head.y === this.food.y) {
            // Food eaten, generate new food
            this.generateFood();
            this.foodEaten++;
            this.updateScore(this.foodEaten * 10);
        } else {
            this.snake.pop();
        }
    }
    
    checkCollision() {
        const head = this.snake[0];
        
        // Calculate grid boundaries
        const maxX = Math.floor(this.canvas.width / this.gridSize);
        const maxY = Math.floor(this.canvas.height / this.gridSize);
        
        // Check wall collision
        if (
            head.x < 0 || 
            head.y < 0 || 
            head.x >= maxX || 
            head.y >= maxY
        ) {
            return true;
        }
        
        // Check self collision (start from 1 to avoid head)
        for (let i = 1; i < this.snake.length; i++) {
            if (head.x === this.snake[i].x && head.y === this.snake[i].y) {
                return true;
            }
        }
        
        return false;
    }
    
    checkFood() {
        const head = this.snake[0];
        
        if (head.x === this.food.x && head.y === this.food.y) {
            // Generate new food
            this.generateFood();
            this.foodEaten++;
            this.updateScore(this.foodEaten * 10);
        }
    }
    
    generateFood() {
        const maxX = Math.floor(this.canvas.width / this.gridSize) - 1;
        const maxY = Math.floor(this.canvas.height / this.gridSize) - 1;
        
        let newFood;
        let foodOnSnake;
        
        do {
            foodOnSnake = false;
            newFood = {
                x: Math.floor(Math.random() * maxX),
                y: Math.floor(Math.random() * maxY)
            };
            
            // Check if food is on snake
            for (let segment of this.snake) {
                if (segment.x === newFood.x && segment.y === newFood.y) {
                    foodOnSnake = true;
                    break;
                }
            }
        } while (foodOnSnake);
        
        this.food = newFood;
    }
    
    updateScore(score) {
        this.scoreElement.textContent = score;
    }
    
    render() {
        // Clear canvas
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        
        // Draw snake
        this.snake.forEach((segment, index) => {
            this.ctx.fillStyle = index === 0 ? '#2ecc71' : '#27ae60';
            this.ctx.fillRect(
                segment.x * this.gridSize,
                segment.y * this.gridSize,
                this.gridSize,
                this.gridSize
            );
            
            // Draw border around segment
            this.ctx.strokeStyle = '#229954';
            this.ctx.strokeRect(
                segment.x * this.gridSize,
                segment.y * this.gridSize,
                this.gridSize,
                this.gridSize
            );
        });
        
        // Draw food
        this.ctx.fillStyle = '#e74c3c';
        this.ctx.beginPath();
        const centerX = this.food.x * this.gridSize + this.gridSize / 2;
        const centerY = this.food.y * this.gridSize + this.gridSize / 2;
        const radius = this.gridSize / 2;
        this.ctx.arc(centerX, centerY, radius, 0, Math.PI * 2);
        this.ctx.fill();
        
        // Draw grid (optional)
        this.ctx.strokeStyle = '#eee';
        const maxX = Math.floor(this.canvas.width / this.gridSize);
        const maxY = Math.floor(this.canvas.height / this.gridSize);
        
        for (let x = 0; x <= maxX; x++) {
            this.ctx.beginPath();
            this.ctx.moveTo(x * this.gridSize, 0);
            this.ctx.lineTo(x * this.gridSize, this.canvas.height);
            this.ctx.stroke();
        }
        
        for (let y = 0; y <= maxY; y++) {
            this.ctx.beginPath();
            this.ctx.moveTo(0, y * this.gridSize);
            this.ctx.lineTo(this.canvas.width, y * this.gridSize);
            this.ctx.stroke();
        }
    }
    
    gameOver() {
        this.gameRunning = false;
        this.startBtn.disabled = false;
        
        // Calculate game duration
        const gameDuration = Math.floor((Date.now() - this.gameStartTime) / 1000);
        const finalScore = this.foodEaten * 10;
        
        // Update final score display
        this.finalScoreElement.textContent = finalScore;
        this.finalFoodElement.textContent = this.foodEaten;
        
        // Show game over screen
        this.gameOverDiv.classList.remove('hidden');
        this.gameOverDiv.style.display = 'block';
        
        // Save game to database
        this.saveGame(finalScore, gameDuration);
    }
    
    saveGame(score, gameDuration) {
        fetch('save_game.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `score=${score}&food_eaten=${this.foodEaten}&game_duration=${gameDuration}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log('Game saved successfully');
                // Update highest score if needed
                if (data.highest_score) {
                    document.getElementById('display-highest-score').textContent = data.highest_score;
                }
            } else {
                console.error('Error saving game:', data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
    
    resetGame() {
        // Reset snake to initial position
        this.snake = [
            {x: 5, y: 10},
            {x: 4, y: 10},
            {x: 3, y: 10}
        ];
        
        // Reset direction
        this.direction = 'right';
        this.nextDirection = 'right';
        
        // Reset score
        this.foodEaten = 0;
        this.updateScore(0);
        this.foodEatenElement.textContent = '0';
        
        // Generate new food
        this.generateFood();
        
        // Render game
        this.render();
    }
}

// Initialize game when page loads
document.addEventListener('DOMContentLoaded', () => {
    const game = new SnakeGame();
});

// Prevent default touch behaviors that might interfere with the game
document.addEventListener('touchmove', function(e) {
    if (e.target.closest('#game-canvas') || e.target.closest('.mobile-controls')) {
        e.preventDefault();
    }
}, { passive: false });