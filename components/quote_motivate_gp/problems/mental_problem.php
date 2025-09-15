<?php
include '../../login/config.php';
include '../../head-foot/header.php';
?>

<style>
/* Body & container */
.container-mental {
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
.container-mental h2 {
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
    .container-mental {
        margin: 100px 15px 30px;
        padding: 20px;
    }
}
</style>

<div class="container-mental">
    <h2>Mental Health Problems of Engineering Students</h2>
    
    <!-- Problem 1 -->
    <div class="problem-title">1. Stress and Anxiety</div>
    <div class="problem-description">Heavy coursework, project deadlines, and exams can cause significant stress and anxiety among engineering students.</div>
    <div class="solution"><strong>Solution:</strong> Practice mindfulness, maintain a study schedule, take regular short breaks, and seek counseling if stress is overwhelming.</div>
    
    <!-- Problem 2 -->
    <div class="problem-title">2. Parental & Peer Pressure</div>
    <div class="problem-description">Expectations from family and peers can create a fear of failure or guilt, affecting mental stability.</div>
    <div class="solution"><strong>Solution:</strong> Communicate openly with family, set realistic goals, and prioritize self-care over external pressures.</div>

    <!-- Problem 3 -->
    <div class="problem-title">3. Burnout & Fatigue</div>
    <div class="problem-description">Long hours of study and poor rest can lead to burnout and emotional exhaustion.</div>
    <div class="solution"><strong>Solution:</strong> Ensure 7-8 hours of sleep, include physical activity, and manage workload efficiently.</div>

    <!-- Problem 4 -->
    <div class="problem-title">4. Low Self-Esteem & Impostor Syndrome</div>
    <div class="problem-description">Feeling inadequate despite achievements is common in highly competitive environments.</div>
    <div class="solution"><strong>Solution:</strong> Focus on personal progress, celebrate small wins, and seek peer or mentor support.</div>

    <!-- Problem 5 -->
    <div class="problem-title">5. Lack of Mental Health Support</div>
    <div class="problem-description">Many institutions lack counseling or support for students experiencing mental health issues.</div>
    <div class="solution"><strong>Solution:</strong> Form peer support groups, access online counseling platforms, or approach trusted faculty for guidance.</div>

    <!-- Extra Tips -->
    <div class="problem-title">Tips for Maintaining Mental Health</div>
    <div class="solution">1. Regular physical exercise improves mood and reduces anxiety.</div>
    <div class="solution">2. Maintain a balanced diet; avoid excessive caffeine and junk food.</div>
    <div class="solution">3. Engage in hobbies and social activities to relax your mind.</div>
    <div class="solution">4. Learn time management techniques and avoid procrastination.</div>
    <div class="solution">5. Practice deep breathing or meditation daily for mental clarity.</div>
</div>

<?php include '../../head-foot/footer.php'; ?>
