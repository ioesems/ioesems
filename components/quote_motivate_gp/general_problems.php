<?php
include '../login/config.php';
include '../head-foot/header.php';
?>

<div class="container mt-5">

    <!-- Emotionally Supportive Section -->
    <div class="emotional-help p-5 mb-5 rounded shadow-sm text-center">
        <div style="font-size:3rem;">🌱</div>
        <h3 style="color:#2c3e50; font-weight:bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-top:15px;">
            Share Your Thoughts, We're Here to Listen
        </h3>
        <p style="color:#3b3b3b; font-size:1.15rem; line-height:1.6; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-top:15px;">
            Feeling overwhelmed? Facing challenges in studies, relationships, or personal life?  
            Don’t keep it to yourself — let us know. Your concerns matter, and we’re here to provide guidance, support, and a listening ear.
        </p>
        <a href="../public_channel/index.php" class="share-btn mt-3">📝 Share Your Problem</a>
    </div>
    <!-- End Emotional Section -->

    <h2 class="text-center mb-4" style="color:#1b3a1a; font-weight:bold;">General Engineering Problems</h2>
    <p class="text-center mb-5" style="color:#3a3a3a; font-size:1.1rem;">
        Select a category below to explore common challenges and their solutions. Each category focuses on typical problems encountered in daily life and studies.
    </p>

    <div class="row g-4">
        <?php
        // Define problem categories
        $categories = [
            ["name" => "Mental Problems", "color" => "#d4edda", "link" => "./problems/mental_problem.php", "icon" => "🧠"],
            ["name" => "Study Problems", "color" => "#fff3cd", "link" => "./problems/study_problem.php", "icon" => "📚"],
            ["name" => "Friends Problems", "color" => "#d1ecf1", "link" => "./problems/friends_problem.php", "icon" => "👫"],
            ["name" => "Family Problems", "color" => "#c3e6cb", "link" => "./problems/family_problem.php", "icon" => "🏠"],
            ["name" => "Social Problems", "color" => "#ffeeba", "link" => "./problems/social_problem.php", "icon" => "🌐"],
            ["name" => "Personal Problems", "color" => "#cce5ff", "link" => "./problems/personal_problem.php", "icon" => "🛠️"],
            ["name" => "Others", "color" => "#e2e3e5", "link" => "./problems/others_problem.php", "icon" => "⚙️"],
        ];

        foreach ($categories as $cat):
        ?>
        <div class="col-md-4">
            <a href="<?= $cat['link'] ?>" class="category-card d-block text-decoration-none" style="background: <?= $cat['color'] ?>;">
                <div class="card-body text-center py-5 rounded shadow-sm">
                    <div style="font-size:3rem;"><?= $cat['icon'] ?></div>
                    <h4 class="mt-3" style="color:#1b3a1a; font-weight:bold;"><?= $cat['name'] ?></h4>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>

    <p class="mt-5 text-center" style="color:#3a3a3a; font-size:1rem;">
        Want to add more topics? Admin can edit this page or create subpages for specific challenges.
    </p>
</div>

<style>
body {
    background: linear-gradient(to right, #f8ffb0, #c0e980);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.category-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

h2, h4 {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

p {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.emotional-help {
    background: linear-gradient(to right, #ffecd2, #fcb69f); /* soft, warm colors */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.emotional-help:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.share-btn {
    display: inline-block;
    padding: 8px 18px;
    background-color: #1b3a1a;
    color: #fff;
    font-weight: bold;
    border-radius: 25px;
    text-decoration: none;
    transition: background 0.3s ease, transform 0.3s ease;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.share-btn:hover {
    background-color: #2c5f2d;
    transform: translateY(-2px);
}

@media (max-width: 576px) {
    .share-btn {
        padding: 6px 14px;
        font-size: 0.9rem;
    }
}
</style>

<?php include '../head-foot/footer.php'; ?>


<!-- https://chatgpt.com/c/68c4dbfc-7074-8322-a516-669d8dfe0064  -->