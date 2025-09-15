<?php
include '../../login/config.php';
include '../../head-foot/header.php';
?>

<style>
  body {
    background-color: #f6ffed; /* light green background */
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
    box-shadow: 0px 4px 15px rgba(46, 70, 0, 0.2);
  }
  h2 {
    color: #4CAF50; /* calming green */
    font-weight: 700;
    margin-bottom: 20px;
    text-align: center;
  }
  .problem {
    margin-bottom: 25px;
    padding: 20px;
    background: #fbffe5; /* soft yellow */
    border-left: 6px solid #4CAF50;
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
    background: #e6f7ff;
    border-left: 6px solid #0288d1;
    border-radius: 8px;
    font-size: 15px;
  }
</style>

<div class="problem-container">
  <h2>Common Family Problems & Solutions for Students</h2>
  <p style="text-align:center; font-size:16px;">
    Many students face challenges balancing academics with family expectations. 
    Here are some frequent issues and healthy ways to manage them.
  </p>

  <div class="problem">
    <h3>1. High Expectations from Family</h3>
    <div class="solution">
      <strong>Problem:</strong> Parents or relatives may expect high grades or specific career paths.<br>
      <strong>Solution:</strong> Have open and respectful discussions about your personal goals. 
      Show them your study plan, seek mentorship, and balance their expectations with your own ambitions.
    </div>
  </div>

  <div class="problem">
    <h3>2. Financial Pressure</h3>
    <div class="solution">
      <strong>Problem:</strong> Limited financial resources may cause stress for tuition, projects, or living expenses.<br>
      <strong>Solution:</strong> Explore scholarships, part-time opportunities (teaching juniors, tutoring), or 
      university aid programs. Share your struggles openly with family to reduce silent pressure.
    </div>
  </div>

  <div class="problem">
    <h3>3. Lack of Understanding about Engineering Workload</h3>
    <div class="solution">
      <strong>Problem:</strong> Families may not understand the heavy workload of IOE engineering courses.<br>
      <strong>Solution:</strong> Explain your semester structure, practicals, and project demands. 
      Show them examples of assignments to build empathy.
    </div>
  </div>

  <div class="problem">
    <h3>4. Balancing Family Duties with Studies</h3>
    <div class="solution">
      <strong>Problem:</strong> Students often juggle between household responsibilities and academic deadlines.<br>
      <strong>Solution:</strong> Create a shared schedule with your family. Politely request time during exams. 
      Offer help during less busy periods so that the balance feels fair.
    </div>
  </div>

  <div class="problem">
    <h3>5. Comparison with Other Relatives or Siblings</h3>
    <div class="solution">
      <strong>Problem:</strong> Families sometimes compare you with cousins or siblings, which can lower confidence.<br>
      <strong>Solution:</strong> Remind yourself that every student has unique strengths. 
      Focus on your progress and politely share your achievements with your family.
    </div>
  </div>

  <div class="problem">
    <h3>6. Miscommunication</h3>
    <div class="solution">
      <strong>Problem:</strong> Arguments or misunderstandings at home affect mental focus.<br>
      <strong>Solution:</strong> Practice calm communication. Avoid conflicts during stress. 
      Write down your thoughts before discussing sensitive topics to prevent emotional reactions.
    </div>
  </div>

  <div class="note-box">
    💡 <strong>Note for Students:</strong> It is okay to feel stressed due to family expectations. 
    But always remember — honest communication, planning, and empathy can help you and your family 
    work together towards your success. If family stress becomes overwhelming, seek help from trusted friends, mentors, or counselors.
  </div>
</div>

<?php include '../../head-foot/footer.php'; ?>
