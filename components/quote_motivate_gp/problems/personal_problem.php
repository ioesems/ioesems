<?php
include '../../login/config.php';
include '../../head-foot/header.php';
?>

<style>
  body {
    background-color: #f9fff2; /* soft greenish yellow */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #2e4600;
    line-height: 1.7;
  }
  .problem-container {
    max-width: 900px;
    margin: 60px auto;
    background: #ffffff;
    border-radius: 12px;
    padding: 30px 40px;
    box-shadow: 0px 4px 15px rgba(50, 70, 0, 0.2);
  }
  h2 {
    color: #388e3c; /* balanced green */
    font-weight: 700;
    margin-bottom: 20px;
    text-align: center;
  }
  .problem {
    margin-bottom: 25px;
    padding: 20px;
    background: #fffde7; /* pale yellow */
    border-left: 6px solid #388e3c;
    border-radius: 8px;
  }
  .problem h3 {
    color: #2e7d32;
    font-size: 20px;
    margin-bottom: 10px;
  }
  .solution {
    margin-top: 8px;
    color: #444;
  }
  .note-box {
    margin-top: 30px;
    padding: 15px;
    background: #e8f5e9;
    border-left: 6px solid #1b5e20;
    border-radius: 8px;
    font-size: 15px;
  }
</style>

<div class="problem-container">
  <h2>Personal Problems & Solutions for Engineering Students</h2>
  <p style="text-align:center; font-size:16px;">
    Every student has unique personal challenges. These struggles may not be visible, but 
    handling them properly is essential for academic and emotional growth.
  </p>

  <div class="problem">
    <h3>1. Self-Doubt and Low Confidence</h3>
    <div class="solution">
      <strong>Problem:</strong> Many students feel they are not “smart enough” for engineering.<br>
      <strong>Solution:</strong> Remember that effort beats talent. Track small achievements (assignments, projects). 
      Regular practice and asking questions in class slowly build confidence.
    </div>
  </div>

  <div class="problem">
    <h3>2. Lack of Motivation</h3>
    <div class="solution">
      <strong>Problem:</strong> Losing drive during long semesters or after repeated failures.<br>
      <strong>Solution:</strong> Break tasks into smaller goals. Reward yourself for completing them. 
      Surround yourself with motivated peers and remind yourself why you chose engineering in the first place.
    </div>
  </div>

  <div class="problem">
    <h3>3. Poor Time Management</h3>
    <div class="solution">
      <strong>Problem:</strong> Balancing classes, labs, assignments, and personal life feels overwhelming.<br>
      <strong>Solution:</strong> Use planners or digital apps. Prioritize urgent vs. important tasks. 
      Avoid last-minute preparation by starting small but early.
    </div>
  </div>

  <div class="problem">
    <h3>4. Physical Health Neglect</h3>
    <div class="solution">
      <strong>Problem:</strong> Skipping meals, irregular sleep, and no exercise due to workload.<br>
      <strong>Solution:</strong> Maintain at least a basic routine—7 hours of sleep, balanced meals, and 
      20–30 mins of daily physical activity. Health supports academic performance.
    </div>
  </div>

  <div class="problem">
    <h3>5. Overthinking and Stress</h3>
    <div class="solution">
      <strong>Problem:</strong> Worrying too much about grades, future jobs, or comparison with others.<br>
      <strong>Solution:</strong> Practice mindfulness or meditation. Talk to trusted friends or mentors. 
      Focus on controllable actions rather than imagined outcomes.
    </div>
  </div>

  <div class="problem">
    <h3>6. Financial Pressure</h3>
    <div class="solution">
      <strong>Problem:</strong> Many students feel burdened by limited pocket money or tuition expenses.<br>
      <strong>Solution:</strong> Plan a strict monthly budget. Explore part-time tutoring, freelancing, or scholarships. 
      Communicate with family honestly instead of bottling up stress.
    </div>
  </div>

  <div class="note-box">
    🌱 <strong>Reminder:</strong> Personal struggles are part of growth. 
    Handling them with patience, planning, and self-care makes you stronger. 
    If challenges feel overwhelming, consider reaching out to a mentor, counselor, or mental health support system. 
    You are never alone in this journey.
  </div>
</div>

<?php include '../../head-foot/footer.php'; ?>
