<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Define ROOT_PATH if not already defined
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', '/std/'); // Adjust according to your project
}
?>

<footer class="footer">

  <!-- Comment Button -->
  <div class="container mt-4">
    <a href="<?php echo ROOT_PATH; ?>components/head-foot/comment.php" class="btn btn-success w-100">
      Go to Comments
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
.social-media .btn { width: 50px; height: 50px; line-height: 50px; border-radius: 50%; font-size: 20px; color: #fff; transition: all 0.3s; }
.social-media .btn:hover { transform: scale(1.15); }

/* Text link */
.text-link { color: #56ab2f; text-decoration: none; font-weight: bold; }
.text-link:hover { text-decoration: underline; }

/* Responsive */
@media (max-width: 768px) { .social-media .btn { width: 45px; height: 45px; font-size: 18px; } }
@media (max-width: 480px) { .social-media .btn { width: 40px; height: 40px; font-size: 16px; } }
</style>
