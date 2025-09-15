<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electromagnetics Syllabus - Detailed Course Outline | Engineering Curriculum</title>
    <meta name="description" content="Comprehensive syllabus for Electromagnetics course covering vector fields, electric and magnetic fields, Maxwell's equations, wave propagation, transmission lines for engineering students.">
    <meta name="keywords" content="electromagnetics syllabus, engineering syllabus, electromagnetic theory, wave propagation, transmission lines, Maxwell's equations, engineering physics">
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
        <h1>Electromagnetics Syllabus</h1>
        <div class="subtitle">Comprehensive Engineering Course Outline for Year II, Part II</div>
    </header>
    
    <main>
        <section>
            <h2>Course Objectives</h2>
            <p>The objective of this course is to provide students with a basic mathematical concepts related to electromagnetic time invariant and time variant fields including wave and their transmission on different media.</p>
        </section>
        
        <section>
            <h2>Topics Covered</h2>
            
            <h3>1. Introduction (4 hours)</h3>
            <ul>
                <li>1.1 Scalar and vector fields</li>
                <li>1.2 Operations on scalar and vector fields</li>
                <li>1.3 Co-ordinate systems (Cartesian, cylindrical and spherical) and conversions</li>
            </ul>
            
            <h3>2. Electric Field (15 hours)</h3>
            <ul>
                <li>2.1 Coulomb's law</li>
                <li>2.2 Electric field intensity</li>
                <li>2.3 Electric flux density</li>
                <li>2.4 Gauss's law and applications</li>
                <li>2.5 Physical significance of divergence, divergence theorem</li>
                <li>2.6 Electric potential, potential gradient</li>
                <li>2.7 Energy density in electrostatic field</li>
                <li>2.8 Electric properties of material medium</li>
                <li>2.9 Free and bound charges, polarization, relative permittivity, electric dipole, electric boundary conditions</li>
                <li>2.10 Current, current density, conservation of charge, relaxation time continuity equation</li>
                <li>2.11 Boundary value problems, Laplace and Poisson equations and their solutions, uniqueness theorem</li>
            </ul>
            
            <h3>3. Magnetic Field (9 hours)</h3>
            <ul>
                <li>3.1 Biot-Savart's law</li>
                <li>3.2 Magnetic field intensity</li>
                <li>3.3 Ampere's circuital law and its application</li>
                <li>3.4 Magnetic flux density</li>
                <li>3.5 Physical significance of curl, Stoke's theorem</li>
                <li>3.6 Scalar and magnetic vector potential</li>
                <li>3.7 Magnetic properties of material medium</li>
                <li>3.8 Magnetic force, magnetic torque, magnetic moment, magnetization</li>
                <li>3.9 Magnetic boundary condition</li>
            </ul>
            
            <h3>4. Time Varying Fields (4 hours)</h3>
            <ul>
                <li>4.1 Faraday's law, transformer EMF, motional EMF</li>
                <li>4.2 Displacement current</li>
                <li>4.3 Maxwell's equations in integral and point forms</li>
            </ul>
            
            <h3>5. Plane Waves (9 hours)</h3>
            <ul>
                <li>5.1 Wave propagation in lossless and lossy dielectric</li>
                <li>5.2 Plane waves in free space, lossless dielectric, good conductor</li>
                <li>5.3 Power and Poynting theorem average power density</li>
                <li>5.4 Reflection of plane wave at normal incidence</li>
                <li>5.5 Standing wave and SWR</li>
                <li>5.6 Input intrinsic impedance</li>
            </ul>
            
            <h3>6. Transmission Lines (4 hours)</h3>
            <ul>
                <li>6.1 Transmission line equations (Taking analogy from wave equations)</li>
                <li>6.2 Lossless, lossy and distortionless transmission lines</li>
                <li>6.3 Input impedance, reflection coefficient, standing wave ratio</li>
            </ul>
        </section>
        
        <section>
            <h2>Tutorial Details (15 hours)</h2>
            <ul>
                <li>Conversion of coordinate systems (cartesian to cylindrical vice versa, cylindrical to spherical and vice versa)</li>
                <li>Electric field intensity and flux density (Coulomb's law, Gauss law, divergence, electric potential and energy density)</li>
                <li>Boundary condition, electric dipole, and boundary value problems</li>
                <li>Magnetic fields (Biot-savart law, Ampere circuit law, Stoke's theorem, magnetic force and torque)</li>
                <li>Time varying fields (Transformer/motional EMF, displacement current)</li>
                <li>Wave propagation equations in lossy and lossless medium (Poynting theorem, standing wave ratio and intrinsic impedance)</li>
                <li>Transmission line (Lossless, lossy and distortionless)</li>
            </ul>
        </section>
        
        <section>
            <h2>Practical Sessions (15 hours)</h2>
            <ul>
                <li>Teledeltos (Electro-conductive) paper mapping of electrostatic fields</li>
                <li>Determination of dielectric constant, display of a magnetic hysteresis loop</li>
                <li>Studies of wave propagation on a terminated parameter transmission line</li>
                <li> Microwave sources, detectors, transmission lines</li>
                <li>Standing wave patterns on transmission lines, reflections, power measurements on transmission lines, reflections</li>
                <li>Familiarizations of electric and magnetic fields measurements</li>
                <li>Simulation tool</li>
            </ul>
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
                        <td>4</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>15</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>9</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>9</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>4</td>
                        <td>4</td>
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
            <div class="reference-item">Hayt, W. H. (2001). Engineering Electromagnetics. McGraw-Hill Book Company.</div>
            <div class="reference-item">Kraus, J. D. (1973). Electromagnetics. McGraw-Hill Book Company.</div>
            <div class="reference-item">Rao, N. N. (1990). Elements of Engineering Electromagnetics. Prentice Hall.</div>
            <div class="reference-item">David K. Cheng, (1989). Field and wave Electromagnetics. Addison-westey.</div>
            <div class="reference-item">Sadiku, M. N. O. (2010). Elements of Electromagnetics. Oxford University Press.</div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2023 Engineering Curriculum | Electromagnetics Syllabus</p>
        <p>Designed for students pursuing engineering education with focus on electromagnetic theory and wave propagation</p>
    </footer>
</body>
</html>