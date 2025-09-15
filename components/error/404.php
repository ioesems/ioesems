<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="404 - Page Not Found. Discover resources, tools, and guidance related to engineering and IOE for students and professionals.">
    <meta name="keywords" content="404, IOESems, engineering, page not found, resources, educational tools, student guidance">
    <meta name="author" content="IOESems">
    <meta name="robots" content="noindex, follow">
    <meta property="og:title" content="404 - Page Not Found - IOESems">
    <meta property="og:description" content="The page you are looking for is not available. Explore resources and information for engineering and IOE students.">
    <meta property="og:image" content="https://ioesems.com/404-image.jpg"> <!-- Replace with actual image URL -->
    <meta property="og:url" content="https://ioesems.com/404">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="404 - Page Not Found - IOESems">
    <meta name="twitter:description" content="The page you are looking for is not available. Explore resources and information for engineering and IOE students.">
    <meta name="twitter:image" content="https://ioesems.com/404-image.jpg"> <!-- Replace with actual image URL -->
    <link rel="canonical" href="https://ioesems.com/404">
    
    <title>404 - Page Not Found</title>
    <style>
        /* Black to Yellow to Green Gradient Animation */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #000000, #fbd13e, #4caf50);
            background-size: 400% 400%;
            animation: gradientBG 8s ease infinite;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            color: black;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Text Container */
        .container {
            text-align: center;
            z-index: 1;
            position: relative;
        }

        .container h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            letter-spacing: 5px;
            text-transform: uppercase;
            animation: fadeIn 2s ease forwards;
            opacity: 0;
        }

        .container p {
            font-size: 1.5rem;
            animation: fadeIn 3s ease forwards;
            opacity: 0;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Particles Styling with color effect */
        .particle {
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: rgba(255, 255, 255, 0.8); /* Default white particle */
            border-radius: 50%;
            animation: float 6s linear infinite, colorChange 4s ease infinite;
        }

        /* Floating Animation */
        @keyframes float {
            0% { transform: translateY(0px); opacity: 1; }
            50% { opacity: 0.5; }
            100% { transform: translateY(-1000px); opacity: 0; }
        }

        /* Color changing effect for particles */
        @keyframes colorChange {
            0% { background-color: rgba(255, 255, 255, 0.8); }
            25% { background-color: rgba(255, 204, 0, 0.8); } /* Yellow */
            50% { background-color: rgba(0, 255, 0, 0.8); }   /* Green */
            75% { background-color: rgba(0, 255, 255, 0.8); }  /* Light Blue */
            100% { background-color: rgba(255, 255, 255, 0.8); } /* White */
        }

        /* Media Query for Android and Small Devices */
        @media screen and (max-width: 600px) {
            .container h1 {
                font-size: 2rem; /* Smaller Heading */
            }

            .container p {
                font-size: 1rem; /* Smaller Text */
            }

            .particle {
                width: 5px;
                height: 5px; /* Smaller particles */
            }

            body {
                font-size: 14px; /* Adjust overall font size */
                background-size: 300% 300%; /* Adjust gradient for smaller screens */
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
        <h1>404 - Page Not Found</h1>
        <p>Oops! The page you are looking for doesn't exist. Let's get you back on track.</p>
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
