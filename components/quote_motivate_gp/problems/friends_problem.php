<?php
include '../../login/config.php';
include '../../head-foot/header.php';
?>

<style>
/* Container styling */
.container-friends {
    max-width: 900px;
    margin: 120px auto 50px;
    padding: 30px;
    background: linear-gradient(to right, #f0f9eb, #e6f7c1); /* green-yellow blend */
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #1b3a1a;
}

/* Heading */
.container-friends h2 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
    color: #2a5d23;
}

/* Problem title */
.problem-title {
    font-weight: bold;
    font-size: 1.2rem;
    margin-top: 20px;
    color: #3e7d32;
}

/* Description */
.problem-description {
    font-size: 1rem;
    margin: 8px 0 15px 15px;
    line-height: 1.5;
}

/* Solution box */
.solution {
    margin: 5px 0 15px 30px;
    padding: 10px;
    background: #d7f0c7;
    border-left: 5px solid #4caf50;
    border-radius: 8px;
    font-size: 0.95rem;
}

/* Responsive */
@media(max-width:768px){
    .container-friends {
        margin: 100px 15px 30px;
        padding: 20px;
    }
}
</style>

<div class="container-friends">
    <h2>Friendship Problems in Engineering Student Life</h2>

    <!-- Problem 1 -->
    <div class="problem-title">1. Peer Pressure</div>
    <div class="problem-description">Students often feel pressured to follow their friends’ habits, such as skipping classes or wasting time.</div>
    <div class="solution"><strong>Solution:</strong> Learn to say no politely, focus on your priorities, and find friends who respect your goals.</div>

    <!-- Problem 2 -->
    <div class="problem-title">2. Competition Among Friends</div>
    <div class="problem-description">Healthy competition can turn unhealthy, creating jealousy and distance.</div>
    <div class="solution"><strong>Solution:</strong> Appreciate each other’s strengths, celebrate small wins, and collaborate on group projects instead of competing unnecessarily.</div>

    <!-- Problem 3 -->
    <div class="problem-title">3. Misunderstandings</div>
    <div class="problem-description">Simple issues or miscommunication can escalate into bigger conflicts.</div>
    <div class="solution"><strong>Solution:</strong> Practice open communication, clear doubts directly, and avoid gossip or assumptions.</div>

    <!-- Problem 4 -->
    <div class="problem-title">4. Feeling Left Out</div>
    <div class="problem-description">Some students may feel ignored or excluded in groups or during events.</div>
    <div class="solution"><strong>Solution:</strong> Take initiative to engage in conversations, join clubs or activities, and build diverse friendships beyond your classroom circle.</div>

    <!-- Problem 5 -->
    <div class="problem-title">5. Balancing Study and Friendship</div>
    <div class="problem-description">Too much time with friends can affect studies, while too little can affect relationships.</div>
    <div class="solution"><strong>Solution:</strong> Set boundaries, fix study times, and make sure outings don’t clash with important academic commitments.</div>

    <!-- Problem 6 -->
    <div class="problem-title">6. Loneliness in Hostel or New City</div>
    <div class="problem-description">Many IOE students living away from home struggle to make new friends quickly.</div>
    <div class="solution"><strong>Solution:</strong> Participate in orientation, group study sessions, and cultural programs to meet people with similar interests.</div>

    <!-- Extra Tips -->
    <div class="problem-title">Tips for Healthy Friendships</div>
    <div class="solution">1. Be supportive and listen actively.</div>
    <div class="solution">2. Respect differences in opinions and study habits.</div>
    <div class="solution">3. Avoid toxic or negative influences.</div>
    <div class="solution">4. Build friendships that inspire growth and positivity.</div>
</div>

<?php include '../../head-foot/footer.php'; ?>
