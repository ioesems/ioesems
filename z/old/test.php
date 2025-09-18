
<!-- <==========comment==========> -->
<!-- Animated Comments Display -->
<div class="container mt-4">
  <div class="comment-scroller p-3 rounded" style="height: 80px; overflow: hidden; background: rgba(255,255,255,0.2); border: 1px solid rgba(255,255,255,0.3);">
    <div id="commentCarousel" class="comment-track" style="display: flex; transition: transform 0.5s ease-in-out;">
      <?php
        // Fetch recent comments
        $comment_stmt = $conn->prepare("SELECT username, comment_text FROM comments ORDER BY created_at DESC LIMIT 10");
        $comment_stmt->execute();
        $result = $comment_stmt->get_result();
        $comments = $result->fetch_all(MYSQLI_ASSOC);

        if (count($comments) > 0) {
          foreach ($comments as $row) {
            echo '<div class="comment-item" style="min-width: 100%; padding: 0 10px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; font-style: italic; color: #fff; text-shadow: 1px 1px 2px #000;">';
            echo '<strong>' . htmlspecialchars($row['username']) . ':</strong> ' . htmlspecialchars($row['comment_text']);
            echo '</div>';
          }
        } else {
          echo '<div class="comment-item" style="min-width: 100%; padding: 0 10px; color: #fff;">Be the first to leave a comment!</div>';
        }
      ?>
    </div>
  </div>

  <a href="<?php echo ROOT_PATH; ?>components/head-foot/comment/comment.php" class="btn btn-success w-100 mt-2">
    Add Your Comment
  </a>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('commentCarousel');
    const items = carousel.children;
    let index = 0;

    if (items.length <= 1) return; // No need to animate

    setInterval(() => {
      index = (index + 1) % items.length;
      const offset = -index * 100;
      carousel.style.transform = `translateX(${offset}%)`;
    }, 3000); // Change every 3 seconds
  });
</script>

<style>
  .comment-scroller {
    position: relative;
  }
  .comment-track {
    display: flex;
  }
  .comment-item {
    flex: 0 0 auto;
    width: 100%;
  }
</style>