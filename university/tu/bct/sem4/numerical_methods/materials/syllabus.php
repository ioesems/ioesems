<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerical Methods Syllabus - Detailed Course Outline | Engineering Curriculum</title>
    <meta name="description" content="Comprehensive syllabus for Numerical Methods course covering non-linear equations, linear algebra, interpolation, numerical integration, ODEs, PDEs, and Python implementation for engineering students.">
    <meta name="keywords" content="numerical methods syllabus, engineering syllabus, numerical analysis, computational methods, python programming, university course, numerical methods for engineers">
    <style>
        :root {
            --primary-green: #228B22;
            --secondary-green: #32CD32;
            --accent-yellow: #FFD700;
            --light-yellow: #FFFFE0;
            --dark-text: #333333;
            --light-text: #FFFFFF;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: var(--light-yellow);
            color: var(--dark-text);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: var(--light-text);
            padding: 25px 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: var(--accent-yellow);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        main {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
        }
        
        section {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border-left: 4px solid var(--accent-yellow);
            transition: transform 0.3s ease;
        }
        
        section:hover {
            transform: translateY(-5px);
        }
        
        h2 {
            color: var(--primary-green);
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 8px;
            margin-bottom: 15px;
            font-size: 1.8rem;
        }
        
        h3 {
            color: var(--secondary-green);
            margin-top: 15px;
            font-size: 1.4rem;
        }
        
        ul, ol {
            padding-left: 20px;
            margin: 10px 0;
        }
        
        li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }
        
        li:before {
            content: "•";
            color: var(--accent-yellow);
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: var(--primary-green);
            color: white;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .highlight {
            background-color: var(--accent-yellow);
            padding: 2px 5px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        .references {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 15px;
            border-radius: 5px;
        }
        
        .reference-item {
            margin-bottom: 8px;
            padding-left: 15px;
            position: relative;
        }
        
        .reference-item:before {
            content: "•";
            color: var(--secondary-green);
            position: absolute;
            left: 0;
        }
        
        footer {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            border-radius: 8px;
        }
        
        @media (max-width: 768px) {
            main {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            header {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Numerical Methods Syllabus</h1>
        <div class="subtitle">Comprehensive Engineering Course Outline for Year II, Part II</div>
    </header>
    
    <main>
        <section>
            <h2>Course Objectives</h2>
            <p>This course aims to provide students with comprehensive understanding of numerical methods for solving mathematical problems in engineering. Students will learn to implement computational techniques for solving equations, interpolation, numerical differentiation and integration, ordinary and partial differential equations, and system analysis using Python programming language.</p>
        </section>
        
        <section>
            <h2>Topics Covered</h2>
            
            <h3>1. Resolution of Non-Linear Equations (7 hours)</h3>
            <ul>
                <li>1.1 Errors and accuracy in numerical computations</li>
                <li>1.2 Bisection method</li>
                <li>1.3 Regula Falsi method and secant method</li>
                <li>1.4 Fixed point iteration method</li>
                <li>1.6 Comparison of methods (Bracketing vs open-ended methods and rates)</li>
                <li>1.7 Solution of system of non-linear equations</li>
                <ul>
                    <li>1.7.1 Direct approach</li>
                    <li>1.7.2 Newton Raphson method</li>
                </ul>
            </ul>
            
            <h3>2. Solution of System of Linear Algebraic Equations (8 hours)</h3>
            <ul>
                <li>2.1 Direct methods</li>
                <ul>
                    <li>2.1.1 Gauss Jordan method</li>
                    <li>2.1.2 Gauss elimination method, pivoting strategies (Partial and complete)</li>
                    <li>2.1.3 Matrix inverse using Gauss Jordan and Gauss elimination methods</li>
                    <li>2.1.4 Factorization methods (Do-Little's method and Crout's method)</li>
                </ul>
                <li>2.2 Iterative methods</li>
                <ul>
                    <li>2.2.1 Jacobi's method</li>
                    <li>2.2.2 Gauss-Seidel method</li>
                </ul>
                <li>2.3 Determination of largest and smallest Eigen values and corresponding vectors using Power method</li>
            </ul>
            
            <h3>3. Interpolation (9 hours)</h3>
            <ul>
                <li>3.1 Polynomial interpolation</li>
                <ul>
                    <li>3.1.1 Finite differences (Forward, backward, central and divided differences)</li>
                    <li>3.1.2 Newton's forward and backward difference interpolation</li>
                    <li>3.1.3 Stirling's and Bessel's central difference interpolation</li>
                </ul>
                <li>3.2 Interpolation with equally spaced intervals</li>
                <ul>
                    <li>3.2.1 Linear form and forms reducible to linear form</li>
                    <li>3.2.2 Quadratic form and forms reducible to quadratic form</li>
                </ul>
                <li>3.3 Interpolation with unequally spaced intervals</li>
            </ul>
            
            <h3>4. Numerical Differentiation and Integration (6 hours)</h3>
            <ul>
                <li>4.1 Numerical differentiation using polynomial interpolation formulas for equally spaced data</li>
                <li>4.1.2 Finding maxima and minima from equally spaced data</li>
                <li>4.2 Numerical integration</li>
                <ul>
                    <li>4.2.1 Newton-Cotes general quadrature formula</li>
                    <li>4.2.2 Trapezoidal rule, Simpson's 1/3 and 3/8 rules, Boole's rule, Weddle's rule</li>
                    <li>4.2.3 Romberg integration</li>
                    <li>4.2.4 Gauss-Legendre integration (up to 3-point formula)</li>
                </ul>
            </ul>
            
            <h3>5. Solution of Ordinary Differential Equations (ODE) (8 hours)</h3>
            <ul>
                <li>5.1 Initial value problems</li>
                <ul>
                    <li>5.1.1 Solution of first order equations: Taylor's series method, Euler's method, Runge-Kutta methods (second and fourth order)</li>
                    <li>5.1.2 Solution of system of first order ODEs via Runge-Kutta methods</li>
                    <li>5.1.3 Solution of second order ODEs via Runge-Kutta method</li>
                </ul>
                <li>5.2 Two-point boundary value problems</li>
                <ul>
                    <li>5.2.1 Shooting method</li>
                    <li>5.2.2 Finite difference method</li>
                </ul>
            </ul>
            
            <h3>6. Solution of Partial Differential Equations (7 hours)</h3>
            <ul>
                <li>6.2 Finite difference approximations of partial derivatives</li>
                <li>6.3 Solution of elliptic equations</li>
                <ul>
                    <li>6.3.1 Laplace equation</li>
                    <li>6.3.2 Poisson's equation</li>
                </ul>
                <li>6.4 Solution of parabolic and hyperbolic equations</li>
                <ul>
                    <li>6.4.1 One-dimensional heat equation: Bender-Schmidt method</li>
                </ul>
            </ul>
        </section>
        
        <section>
            <h2>Tutorial Details (15 hours)</h2>
            <ul>
                <li>Solution of non-linear equations</li>
                <li>Solution of system of linear algebraic equations</li>
                <li>Least square method of curve fitting</li>
                <li>Numerical differentiation</li>
                <li>Numerical integration</li>
                <li>Solution of ordinary differential equations (Initial value problems)</li>
                <li>Solution of ordinary differential equations (Boundary value problems)</li>
                <li>Solution of partial differential equations</li>
            </ul>
        </section>
        
        <section>
            <h2>Practical Sessions (45 hours)</h2>
            <ul>
                <li>Basic of programming in Python:</li>
                <ul>
                    <li>Basic input/output</li>
                    <li>Basic data types and data structures</li>
                    <li>Control flow</li>
                    <li>Functions and modules</li>
                    <li>Basic numerical and scientific computation</li>
                    <li>Graphical visualization</li>
                </ul>
                <li>Solution of Non-linear equations:</li>
                <ul>
                    <li>Bisection method</li>
                    <li>Secant method</li>
                    <li>Newton-Raphson</li>
                    <li>System of non-linear equations using Newton-Raphson method</li>
                </ul>
                <li>System of linear algebraic equations:</li>
                <ul>
                    <li>Gauss Jordan</li>
                    <li>Gauss with partial pivoting</li>
                    <li>Crout's method</li>
                    <li>Power method</li>
                </ul>
                <li>Newton's forward difference interpolation</li>
                <li>Solution of two-point boundary value problem using finite difference method</li>
                <li>Solution of partial differential equations using finite difference approach:</li>
                <ul>
                    <li>Poisson's equation using Gauss-Seidel iteration</li>
                    <li>One-dimensional heat equation using Crank-Nicholson method</li>
                </ul>
            </ul>
            <p><strong>Programming language to be used: Python</strong></p>
            <p><strong>Results to be visualized graphically wherever possible</strong></p>
            <p><strong>Practical report contents:</strong> Working principle, Pseudocode, Source code, Test Cases</p>
        </section>
        
        <section>
            <h2>Final Exam Pattern</h2>
            <table>
                <thead>
                    <tr>
                        <th>Chapter</th>
                        <th>Hours</th>
                        <th>Marks Distribution</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>7</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>8</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>9</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>6</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>8</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>7</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>45</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table>
            <p class="highlight">Note: There may be minor deviation in marks distribution.</p>
        </section>
        
        <section class="references">
            <h2>References</h2>
            <div class="reference-item">Chapra, S. C., Canale, R. P. (2010). Numerical Methods for Engineers (6th edition). McGraw-Hill.</div>
            <div class="reference-item">Kiusalaas, J. (2013). Numerical Methods in Engineering with Python 3 (3rd edition). Cambridge University Press.</div>
            <div class="reference-item">Grewal, B. S. (2017). Numerical Methods in Engineering & Science (11th edition). India: Khanna Publishers.</div>
            <div class="reference-item">Yakowitz, S., Szidarovszky, F. (1986). An Introduction to Numerical Computations (2nd edition). Macmillan.</div>
            <div class="reference-item">Kong, Q., Siauw T., Baye. Numerical Methods. Academic Press.</div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2023 Engineering Curriculum | Numerical Methods Syllabus</p>
        <p>Designed for students pursuing engineering education with focus on computational methods and numerical analysis</p>
    </footer>
</body>
</html>