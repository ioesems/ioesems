<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Under Construction: IOESems is working hard to bring you an amazing experience. Stay tuned for updates.">
    <meta name="keywords" content="IOESems, Under Construction, Coming Soon, Maintenance, Engineering, IOE Notes, Updates">
    <meta name="author" content="IOESems">
    <meta name="robots" content="noindex, follow">
    <meta property="og:title" content="Under Construction - IOESems">
    <meta property="og:description" content="This page is currently under construction. IOESems is preparing an amazing experience for students. Check back soon!">
    <meta property="og:image" content="https://ioesems.com/construction-image.jpg"> <!-- Replace with actual image URL -->
    <meta property="og:url" content="https://ioesems.com/under-construction">
    <meta property="og:site_name" content="IOESems">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Under Construction - IOESems">
    <meta name="twitter:description" content="IOESems is working on something exciting! Stay tuned for updates and resources.">
    <meta name="twitter:image" content="https://ioesems.com/construction-image.jpg"> <!-- Replace with actual image URL -->
    <link rel="canonical" href="https://ioesems.com/under-construction">
    
    <title>Under Construction</title>
    <style>
        /* Ensures the layout fits the screen without overflow */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Gradient Background Animation */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 100px); /* Subtract space for the navbar */
            width: 100vw;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            background-size: 400% 400%;
            animation: gradientBG 8s ease infinite;
            font-family: 'Arial', sans-serif;
            color:black;
            overflow: hidden; /* Prevent overflow */
            padding-top: 100px; /* Space for navbar */
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Text Container */
        .container {
            text-align: center;
            position: relative;
            padding: 0 20px; /* Add some padding to avoid text touching the edges */
        }

        .container h1 {
            font-size: 5vw; /* Use viewport width for scalability */
            margin-bottom: 2vh; /* Adjust with viewport height */
            letter-spacing: 5px;
            text-transform: uppercase;
            animation: fadeIn 2s ease forwards;
            opacity: 0;
        }

        .container p {
            font-size: 2vw; /* Use viewport width for scalability */
            animation: fadeIn 3s ease forwards;
            opacity: 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Particles Styling */
        .particle {
            position: absolute;
            width: 6vw; /* Use viewport width for scalability */
            height: 6vw; /* Use viewport width for scalability */
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            animation: float 6s linear infinite;
        }

        /* Floating Animation */
        @keyframes float {
            0% {
                transform: translateY(0px);
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                transform: translateY(-1000px);
                opacity: 0;
            }
        }

        /* Media Query for Android and Small Devices */
        @media screen and (max-width: 600px) {
            /* Text adjustments */
            .container h1 {
                font-size: 8vw; /* More scalable heading size */
                letter-spacing: 3px;
            }

            .container p {
                font-size: 4vw; /* More scalable text size */
            }

            /* Adjust particle sizes for smaller screens */
            .particle {
                width: 10vw;
                height: 10vw;
            }

            /* Ensure content fully fits without cropping */
            body {
                font-size: 3vw;
                background-size: 200% 200%; /* Adjust gradient for smaller screens */
            }
        }

        /* Button Styling for Go to Homepage */
        .go-home-btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: black;
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .go-home-btn:hover {
            background-color: #333;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>🚧 Under Construction 🚧</h1>
        <p>We’re working hard to bring you an amazing experience. Stay tuned!</p>
        <p><a href="/std/index.php" class="go-home-btn">Go to Homepage</a></p>
    </div>

    <?php
    // PHP generates 50 particles dynamically
    for ($i = 0; $i < 50; $i++) {
        $xPos = rand(0, 100); // Random horizontal position
        $delay = rand(0, 5);  // Random animation delay
        $size = rand(5, 15);  // Random particle size
        echo "<div class='particle' style='left: ${xPos}%; animation-delay: ${delay}s; width: ${size}px; height: ${size}px;'></div>";
    }
    ?>

    <script>
        // Add interactivity to particles
        document.addEventListener("DOMContentLoaded", () => {
            const particles = document.querySelectorAll(".particle");

            // Hover effect for glowing animation
            particles.forEach(particle => {
                particle.addEventListener("mouseover", () => {
                    particle.style.boxShadow = "0 0 10px rgba(255, 255, 255, 0.8)";
                    particle.style.transform = "scale(1.5)";
                });

                particle.addEventListener("mouseout", () => {
                    particle.style.boxShadow = "none";
                    particle.style.transform = "scale(1)";
                });
            });

            // Add dynamic resizing on window resize
            window.addEventListener("resize", () => {
                particles.forEach(particle => {
                    particle.style.width = `${Math.random() * 10 + 5}px`;
                    particle.style.height = `${Math.random() * 10 + 5}px`;
                });
            });
        });
    </script>

</body>

</html>
