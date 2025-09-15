<?php
include '../login/config.php';
include '../head-foot/header.php';
?>

<div class="container mt-5">
  <h3>Motivational Videos</h3>
  <p>Click any video to watch. Add or replace links as you prefer.</p>

  <div class="row">
    <?php
    $result = $conn->query("SELECT * FROM motivational_videos ORDER BY created_at DESC");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $videoId = htmlspecialchars($row['youtube_link']);
            $title = htmlspecialchars($row['title']);
            $description = htmlspecialchars($row['description']);
            echo "
            <div class='col-md-6 mb-4'>
                <div class='ratio ratio-16x9'>
                    <iframe src='https://www.youtube.com/embed/$videoId' title='$title' allowfullscreen></iframe>
                </div>
                <p class='mt-2'><strong>$title</strong><br>$description</p>
            </div>
            ";
        }
    } else {
        echo "<p class='text-muted'>No videos available at the moment.</p>";
    }
    ?>
  </div>
</div>

<?php include '../head-foot/footer.php'; ?>
