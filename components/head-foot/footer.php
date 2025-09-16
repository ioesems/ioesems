<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Define ROOT_PATH — same as header.php
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', '/std/');
}

// Initialize comments array
$comments = [];

try {
    // 🔑 Use SAME path logic as in your working comment.php
    $configPath = __DIR__ . '/../login/config.php';

    if (file_exists($configPath)) {
        include $configPath;

        // Check if $conn is valid
        if (isset($conn) && $conn instanceof mysqli) {
            $sql = "SELECT username, comment_text FROM comments ORDER BY created_at DESC LIMIT 10";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $comments[] = $row;
                }
            }
            // Do NOT close $conn — other scripts may need it
        }
    } else {
        error_log("Config file not found at: " . $configPath);
    }
} catch (Exception $e) {
    error_log("Footer comment fetch error: " . $e->getMessage());
}
?>

<footer class="footer">

  <!-- Animated Comments Display -->
  <div class="container mt-4">
    <div class="comment-scroller p-3 rounded" style="height: 80px; overflow: hidden; background: rgba(255,255,255,0.2); border: 1px solid rgba(255,255,255,0.3);">
      <div id="commentCarousel" class="comment-track" style="display: flex; transition: transform 0.5s ease-in-out;">
        <?php if (!empty($comments)): ?>
          <?php foreach ($comments as $row): ?>
            <div class="comment-item" style="min-width: 100%; padding: 0 10px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; font-style: italic; color: #ffe601ff; text-shadow: 1px 1px 2px #000;">
              <strong><?= htmlspecialchars($row['username']) ?>:</strong> <?= htmlspecialchars($row['comment_text']) ?>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <div class="comment-item" style="min-width: 100%; padding: 0 10px; color: #59fc0eff;">
            Be the first to leave a comment!
          </div>
        <?php endif; ?>
      </div>
    </div>

    <a href="<?= ROOT_PATH ?>components/head-foot/comment/comment.php" class="btn btn-success w-100 mt-2">
      Add Your Comment
    </a>
  </div>

  <!-- Social media section -->
  <div class="container p-5 pb-0">
    <section class="social-media mb-4">
      <div class="social-media-row">
        <a class="btn btn-floating facebook" href="#"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-floating twitter" href="#"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-floating google" href="#"><i class="fab fa-google"></i></a>
        <a class="btn btn-floating instagram" href="#"><i class="fab fa-instagram"></i></a>
        <a class="btn btn-floating linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
        <a class="btn btn-floating github" href="#"><i class="fab fa-github"></i></a>
      </div>
    </section>
  </div>

  <!-- Copyright -->
  <div class="text-center p-4 copyright">
    © 2024 Copyright:
    <a class="text-link" href="https://badri.com.np">mkm.com.np</a>
  </div>
</footer>

<style>
/* Footer */
.footer {
  text-align: center;
  padding: 40px 0;
  background: linear-gradient(135deg, #d8f78c 0%, #a8e063 100%);
  color: #1b3a1a;
}

/* Dark mode */
body.dark-mode .footer { background: #1b1b1b; color: #a8e063; }
body.dark-mode .copyright { background: rgba(255,255,255,0.05); color: #a8e063; }
body.dark-mode .text-link { color: #b3e074; }

/* Social media */
.social-media-row { display: flex; justify-content: center; flex-wrap: wrap; gap: 15px; }
.social-media .btn {
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 50%;
  font-size: 20px;
  color: #fff;
  transition: all 0.3s ease;
  box-shadow: 0 3px 6px rgba(0,0,0,0.1);
}
.social-media .btn:hover {
  transform: scale(1.15) rotate(5deg);
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* BEAUTIFUL CUSTOM COLORS — YELLOW/GREEN FOCUSED */
.facebook  { background: linear-gradient(45deg, #FFDE59, #FFB300); } /* Sunny Yellow */
.twitter   { background: linear-gradient(45deg, #A8E063, #56AB2F); } /* Fresh Green */
.google    { background: linear-gradient(45deg, #FF6F61, #FFA500); } /* Coral + Orange */
.instagram { background: linear-gradient(45deg, #FF9AA2, #FFB7B2); } /* Soft Peach */
.linkedin  { background: linear-gradient(45deg, #6ECEDA, #3498DB); } /* Aqua Sky */
.github    { background: linear-gradient(45deg, #F7DC6F, #F4D03F); } /* Golden Yellow */

/* Text link */
.text-link { color: #56ab2f; text-decoration: none; font-weight: bold; }
.text-link:hover { text-decoration: underline; }

/* Comment scroller */
.comment-scroller {
  position: relative;
  font-size: 14px;
  font-weight: 500;
}
.comment-track {
  display: flex;
}
.comment-item {
  flex: 0 0 auto;
  width: 100%;
  font-size: 15px;   /* 👈 Control font size here */
}

/* Responsive */
@media (max-width: 768px) {
  .social-media .btn { width: 45px; height: 45px; font-size: 18px; }
  .comment-scroller { height: 70px; font-size: 13px; }
}
@media (max-width: 480px) {
  .social-media .btn { width: 40px; height: 40px; font-size: 16px; }
  .comment-scroller { height: 65px; font-size: 12px; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carouselContainer = document.querySelector('.comment-scroller');
    const carousel = document.getElementById('commentCarousel');
    if (!carousel) return;

    const items = carousel.children;
    if (items.length <= 1) return;

    let index = 0;
    let intervalId;

    function startCarousel() {
        intervalId = setInterval(() => {
            index = (index + 1) % items.length;
            carousel.style.transform = `translateX(-${index * 100}%)`;
        }, 3000); // Change every 3 seconds
    }

    function stopCarousel() {
        clearInterval(intervalId);
    }

    // Start animation
    startCarousel();

    // Pause on hover for better UX
    if (carouselContainer) {
        carouselContainer.addEventListener('mouseenter', stopCarousel);
        carouselContainer.addEventListener('mouseleave', startCarousel);
    }
});
</script>