<?php
include '../../login/config.php';
include '../../head-foot/header.php';
?>

<style>
/* Body & container */
.container-study {
    max-width: 900px;
    margin: 120px auto 50px;
    padding: 30px;
    background: linear-gradient(to right, #f0f9eb, #e6f7c1); /* Soft greenish-yellow */
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #1b3a1a;
}

/* Headings */
.container-study h2 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
    color: #2a5d23; /* Dark green for headings */
}

/* Subheading for each problem */
.problem-title {
    font-weight: bold;
    font-size: 1.2rem;
    margin-top: 20px;
    color: #3e7d32;
}

/* Problem description */
.problem-description {
    font-size: 1rem;
    margin: 8px 0 15px 15px;
    line-height: 1.5;
}

/* Solutions */
.solution {
    margin: 5px 0 15px 30px;
    padding: 10px;
    background: #d7f0c7; /* Slightly darker greenish box */
    border-left: 5px solid #4caf50;
    border-radius: 8px;
    font-size: 0.95rem;
}

/* Responsive */
@media(max-width:768px){
    .container-study {
        margin: 100px 15px 30px;
        padding: 20px;
    }
}
</style>

<div class="container-study">
    <h2>Study Problems of Engineering Students</h2>
    
    <!-- Problem 1 -->
    <div class="problem-title">1. Time Management</div>
    <div class="problem-description">Struggling to balance lectures, assignments, projects, and self-study.</div>
    <div class="solution"><strong>Solution:</strong> Create a daily/weekly study plan, prioritize tasks, and use techniques like Pomodoro or time-blocking.</div>
    
    <!-- Problem 2 -->
    <div class="problem-title">2. Difficulty Understanding Complex Topics</div>
    <div class="problem-description">Advanced subjects like Thermodynamics, Electronics, or Calculus can be challenging.</div>
    <div class="solution"><strong>Solution:</strong> Break topics into smaller parts, use online tutorials/videos, group discussions, and consult teachers or seniors.</div>

    <!-- Problem 3 -->
    <div class="problem-title">3. Procrastination</div>
    <div class="problem-description">Delaying studies and assignments until the last moment, leading to stress and poor results.</div>
    <div class="solution"><strong>Solution:</strong> Set small achievable goals, reward yourself for completing tasks, and eliminate distractions like social media while studying.</div>

    <!-- Problem 4 -->
    <div class="problem-title">4. Lack of Motivation</div>
    <div class="problem-description">Feeling demotivated due to tough exams or repetitive study routines.</div>
    <div class="solution"><strong>Solution:</strong> Remind yourself of long-term goals, study in groups, maintain a vision board, and take short breaks for mental refreshment.</div>

    <!-- Problem 5 -->
    <div class="problem-title">5. Poor Note-Taking</div>
    <div class="problem-description">Missing important points during lectures or while reading textbooks.</div>
    <div class="solution"><strong>Solution:</strong> Develop a systematic note-taking method (like Cornell Notes), highlight key points, and review notes regularly.</div>

    <!-- Problem 6 -->
    <div class="problem-title">6. Difficulty in Problem-Solving</div>
    <div class="problem-description">Many students struggle to apply theory in assignments, labs, or exams.</div>
    <div class="solution"><strong>Solution:</strong> Practice previous year questions, attempt sample problems, and seek guidance from mentors or online forums.</div>

    <!-- Extra Tips -->
    <div class="problem-title">Tips for Effective Study</div>
    <div class="solution">1. Create a quiet and well-lit study environment.</div>
    <div class="solution">2. Use active recall and spaced repetition techniques.</div>
    <div class="solution">3. Stay hydrated and take regular physical activity breaks.</div>
    <div class="solution">4. Discuss difficult topics with peers or study groups.</div>
    <div class="solution">5. Avoid multitasking; focus on one subject at a time for better retention.</div>
</div>

<?php include '../../head-foot/footer.php'; ?>
