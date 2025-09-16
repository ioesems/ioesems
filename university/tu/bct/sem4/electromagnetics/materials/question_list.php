<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electromagnetics Question Bank</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        .navbar-toggle {
            display: none;
            background-color: #333;
            color: white;
            padding: 15px;
            cursor: pointer;
            text-align: center;
        }

        .sidebar {
            background-color: #f4f4f4;
            padding: 20px;
            width: 250px;
            box-sizing: border-box;
            position: fixed;
            height: 100%;
            overflow-y: auto;
            transition: transform 0.3s ease;
        }

        .sidebar h2 {
            margin-top: 0;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            margin: 10px 0;
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            display: block;
            padding: 8px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            box-sizing: border-box;
        }

        .chapter-section {
            margin-bottom: 40px;
        }

        .chapter-section h2 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .question {
            margin: 15px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 4px solid #007BFF;
            border-radius: 4px;
        }

        .question .year {
            font-weight: bold;
            color: #d9534f;
            float: right;
        }

        @media (max-width: 768px) {
            .navbar-toggle {
                display: block;
            }

            .sidebar {
                position: fixed;
                top: 0;
                left: -250px;
                z-index: 1000;
                height: 100%;
                transform: translateX(0);
            }

            .sidebar.active {
                transform: translateX(250px);
            }

            .content {
                margin-left: 0;
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="navbar-toggle" onclick="toggleSidebar()">☰ Chapters</div>

    <div class="sidebar" id="sidebar">
        <h2>Chapters</h2>
        <ul>
            <li><a href="#chapter1">1. Introduction</a></li>
            <li><a href="#chapter2">2. Electric Field</a></li>
            <li><a href="#chapter3">3. Magnetic Field</a></li>
            <li><a href="#chapter4">4. Time Varying Fields</a></li>
            <li><a href="#chapter5">5. Plane Waves</a></li>
            <li><a href="#chapter6">6. Transmission Lines</a></li>
        </ul>
    </div>

    <div class="content">

        <div class="chapter-section" id="chapter1">
            <h2>1. Introduction</h2>
            <div class="question">At point P(-3,-4, 5), express that vector that extends from P to Q(2, 0,-1) in spherical coordinates. <span class="year">2081 Bhadra</span></div>
            <div class="question">Transform the vector F into the cylindrical co-ordinate system. F = 4ax - 2ay + 4az at point P(x: 10,y:-8,z=6) <span class="year">2079 Bhadra</span></div>
            <div class="question">Given a point P(-2, 6, 3) and vector field E = ya_x + (xy+z)a_y, express P and E in spherical co-ordinate system. <span class="year">2078 Bhadra</span></div>
            <div class="question">Transform a vector field F = 4a_x + 2a_y + 4a_z into cylindrical coordinate system at a point P(2, 3, 5). <span class="year">2078 Kartik</span></div>
            <div class="question">Transform the vector A = 4a_x - 2a_y - 4a_z into spherical co-ordinates at a point P(x=-2, y=-3, z= 4). <span class="year">2076 Chaitra</span></div>
            <div class="question">Given points A(ρ= 5, φ= 70°, z=-3) and B(ρ= 2, φ= 30°, z= 1), find: (a) a unit vector in cylindrical coordinates at A directed toward B; (b) a unit vector in spherical coordinates at A directed toward B. <span class="year">2075 Ashwin</span></div>
            <div class="question">Express in cartesian components: (a) the vector at A(ρ=4,φ= 40°, z=-2) that extends to B(ρ= 5,φ=-110°, z= 2); (b) a unit vector at B directed toward A. <span class="year">2075 Ashwin</span></div>
            <div class="question">Convert the vector F = F_x a_x + F_y a_y + F_z a_z to both spherical coordinate system. <span class="year">2074 Ashwin</span></div>
            <div class="question">Express the uniform vector field F = 5a_z in (a) cylindrical components (b) spherical components. <span class="year">2072 Chaitra</span></div>
            <div class="question">Transform the Vector F = y a_x + x a_y + z a_z into cylindrical co-ordinates at a point P(2,45°,5). <span class="year">2070 Chaitra</span></div>
            <div class="question">Given a point P(-3,4,5), express the vector that extends from P to Q(2, 0,-1) in(a) Rectangular coordinates(b) Cylindrical coordinates(c) Spherical coordinates. <span class="year">2069 Chaitra</span></div>
            <div class="question">Transform vector F = ρ sinφ a_ρ at point(1, 45°, 2) in cylindrical co-ordinate system to a vector in spherical co-ordinate system. <span class="year">2068 Chaitra</span></div>
            <div class="question">Express the vector field W = (x-y) a_z in cylindrical and spherical co- ordinates. <span class="year">2066 Baishakh</span></div>
            <div class="question">Transform A_c = x a_x + x a_y at point(1,2,3) in Cartesian co-ordinate system to A_cy in cylindrical co ordinate system. <span class="year">2067 Mangsir</span></div>
            <div class="question">Transform the vector F = y a_x - x a_y + z a_z into cylindrical co-ordinates. <span class="year">2067 Shrawan</span></div>
        </div>

        <div class="chapter-section" id="chapter2">
            <h2>2. Electric Field</h2>
            <div class="question">Find E at P(6, 8, 10) caused by a point charge of 30 nC at the origin, a uniform line charge ρ_l = 40 pC/m on the z-axis and a uniform surface charge density ρ_s = 57.2 pC/m² on the plane x = 9. <span class="year">2081 Bhadra</span></div>
            <div class="question">Find the equation of a streamline that passes through the point P(1,4,-2) in the field E = -8xy a_x + 4x² a_y. <span class="year">2081 Bhadra</span></div>
            <div class="question">The Magnetic field Intensity in a certain region is given by H = 20a_ρ - 10a_φ + 3a_z A/m. Transform this field vector into Cartesian co-ordinate at P(x:5, y:0, z:-1). <span class="year">2081 Baishakh</span></div>
            <div class="question">A point charge of 6μC located at origin, uniform line charge density of 180nC/m lies along x-axis and uniform sheet charge of 25nC/m² lies on z=0 plane. Find E at point(1,2,4). <span class="year">2081 Baishakh</span></div>
            <div class="question">Differentiate between divergence and gradient. Let V = 5ρ cosφ in free space. (i) Find the volume charge density at point A(0.5,60°,1). (iii) Find the surface charge density on a conductor surface passing through the point B(2,30°,1). <span class="year">2081 Baishakh</span></div>
            <div class="question">Express a scalar potential field V = x² + 2y² + 3z² in spherical coordinates. Find the value of V at a point(2,60°,90°). <span class="year">2080 Bhadra</span></div>
            <div class="question">Derive the expression for an electric field intensity due to an infinite line charge using Gauss's Law. Find electric flux density at point P(6, 5, 4) due to a uniform line charge of 6μC/m at x= 4, y=2, point charge 10nC at Q(3, 2,4) and uniform surface charge density of 0.4nC/m² at x: 3. <span class="year">2080 Bhadra</span></div>
            <div class="question">Two uniform charges 8 nC/m are located at x= 1, y= 2 and x=-1, y= 2 in free space respectively. If the potential at origin is 100 V. Find V at P(4, 1,3). <span class="year">2080 Bhadra</span></div>
            <div class="question">Derive Poisson Equation. Find the capacitance of parallel plate capacitor by solving Laplace equation with potential difference between the plates as V₀. <span class="year">2080 Bhadra</span></div>
            <div class="question">Define electric flux density. Given the field D = -2ρ sin2φ a_ρ + sin2φ a_φ, evaluate both sides of the divergence theorem for the region bounded by 1 < ρ < 2, 0 < φ < 90°, 0 < z < 1. <span class="year">2080 Baishakh</span></div>
            <div class="question">State Divergence's Theorem. A current density in certain region is given as J = (400 sin θ / r²) a_r A/m². Find the total current flowing through that portion of the spherical surface r = 0.8 bounded by 0.1π < θ < 0.3π, 0 < φ < 2π. <span class="year">2080 Baishakh</span></div>
            <div class="question">Find the equation for Energy Density in the electrostatic field. <span class="year">2080 Baishakh</span></div>
            <div class="question">Define electric dipole moment. Two uniform line charges, 8 nC/m each, are located at x= 1, z= 2 and at x=-1, y=2 in free space. If the potential at origin is 100 V, find V at P(4, 1, 3). <span class="year">2079 Bhadra</span></div>
            <div class="question">State Gauss's Law. The region y< 0 contains a dielectric material for which ε_r1= 2.5, while the region y> 0 is characterized by ε_r2=4. Let E1 = 40a_x + 50a_y + 70a_z V/m, find the electric field intensities, flux densities in region 2 and the angle θ₁. <span class="year">2079 Bhadra</span></div>
            <div class="question">Derive Poisson's equation. Assuming that the potential V in the cylindrical coordinate system is the function of ρ only, solve the Laplacian equation by integration method and derive the expression for the capacitance of co-axial capacitor using the same solution of V. <span class="year">2079 Bhadra</span></div>
            <div class="question">A point charge of 6μC located at origin, uniform line charge density of 180nC/m lies along x-axis and uniform sheet charge of 25 nC/m² lies on z=0 plane. Find E at point(1,2,4). <span class="year">2078 Bhadra</span></div>
            <div class="question">Derive the expression for an electric field intensity due to an infinitely long line charge with charge density ρ_l by using Gauss's law. Find the volume charge density that is associated with the field D = xy² a_x + x²y a_y + z a_z C/m². <span class="year">2078 Bhadra</span></div>
            <div class="question">State continuity equation. Given the vector current density, J = 10ρ² a_ρ - 4ρ sin²φ a_φ mA/m². Determine the current flowing outward the circular band ρ=5, 0<φ<2π, 2<z<2.8. <span class="year">2078 Bhadra</span></div>
            <div class="question">Evaluate the both sides of divergence theorem in the field D = 2xy a_x + x² a_y C/m² and the rectangular parallelopiped formed by the planes x=0 and 1, y=0 and 2, and z= 0 and 3. <span class="year">2078 Kartik</span></div>
            <div class="question">If potential field in free space is V = (5/r) sinθ cosφ V and point P is located at (2, 90°, 0°), find: (a) E (b) direction of E at P (c) energy density at P. <span class="year">2078 Kartik</span></div>
            <div class="question">An infinite uniform line charge ρ_L = 2nC/m lies along the x-axis in free space, while point charges of 8nC each are located at (0, 0, 1) and (0, 0, -1). (a) Find E at (2,3,-4). <span class="year">2076 Chaitra</span></div>
            <div class="question">Define uniqueness theorem. Find the energy stored in free space for the region 2mm < r < 3mm, 0 < θ < 90°, 0 < φ < 90°, given the potential field V = (200/r) - (300/r²) V. <span class="year">2076 Chaitra</span></div>
            <div class="question">Using the continuity equation elaborate the concept of Relaxation Time constant (RTC) with necessary derivations. Let J = (4/r) a_r A/m² be the current density in a given region. At t= 10ms, calculate the amount of current passing through surface r=2m, 0 < θ < π, 0 < φ < 2π. <span class="year">2076 Chaitra</span></div>
            <div class="question">State and prove the Stoke's Theorem. Calculate the value of the vector current density: in cylindrical coordinates at P(ρ=1.5, φ=90°, z=0.5) if H = (3/ρ) a_φ - (cos0.2φ) a_z. <span class="year">2076 Chaitra</span></div>
            <div class="question">Two uniform line charges, each 20 nC/m, are located at y= 1, z= ±1 m. Find the total charge within the surface of a sphere having a radius of 2 m, if it is centered at P(3, 1, 0). <span class="year">2075 Ashwin</span></div>
            <div class="question">Define Energy Density in electrostatic field. <span class="year">2075 Ashwin</span></div>
            <div class="question">The conducting planes 2x+ 3y= 12 and 2x+ 3y= 18 are at potentials of 100 V and 0, respectively. Let ε = ε₀ and find V and E at P(5, 2, 6). <span class="year">2075 Ashwin</span></div>
            <div class="question">Find the vector that extends from A(-3,-4,6) to B(-5,2,-8) and express it in cylindrical coordinate system. <span class="year">2075 Chaitra</span></div>
            <div class="question">A point charge of 12nC is located at the origin. Four uniform line charges are located in the x=0 plane as follows: 80 nC/m at y=-1 and -4 m, -50 nC/m at y=-2 and -3 m. Find the electric flux density D at P(0,-3,2). <span class="year">2075 Chaitra</span></div>
            <div class="question">Let the region z<0 be composed of a uniform dielectric material for which ε_r1=1.2, while the region z>0 is characterized by ε_r2=2. Let D1 = -30a_x + 50a_y + 70a_z nC/m² and find: a) D_t (Tangential component of D in Region 1); b) Polarization(P1); c) D_n (Normal component of E in Region 2) d) E_t (Tangential component of E in Region 2) <span class="year">2075 Chaitra</span></div>
            <div class="question">Derive the Possion's and Laplace's equations. Assuming, that the potential V in the cylindrical coordinate system is the function of ρ only. Solve the Laplace's equation by Integration method and derive the expression for the capacitance of the Spherical capacitor using the solution of V. <span class="year">2075 Chaitra</span></div>
            <div class="question">Derive an Electric Field Intensity(E) in between the two co-axial cylindrical conductors, the inner of radius 'a' and outer of radius 'b', each infinite in extent and assuming a surface charge density ρ_s on the outer surface of the inner conductor. An infinite uniform line charge ρ_L = 2 nC/m lies along the x-axis in free space, while the point charge of 8nC each are located at (0, 0, 1). Find E at (2,3,-4). <span class="year">2075 Ashwin</span></div>
            <div class="question">Derive the integral and point forms of continuity equation. In a certain region, J = r cosθ a_r - r sinθ a_θ A/m². Find the current crossing the surface defined by θ=30°, 0<φ<2π, 0<r<2. <span class="year">2075 Ashwin</span></div>
            <div class="question">Given the field, D = 5 sin(φ) cos(θ) a_r C/m², find: (a) the volume charge density; (b) the total charge contained in the region r<2 m; (c) the value of D at the surface r=2. <span class="year">2075 Ashwin</span></div>
            <div class="question">Find the electric field intensity in all three regions due to an infinite sheet parallel plate capacitor having surface charge density ρ_s C/m² and -ρ_s C/m² and placed at y= 0 and y= b respectively. Let a uniform line charge density, 3 nC/m, at y= 3; uniform surface charge density, 0.2nC/m² at x=2. Find E at the origin. <span class="year">2074 Ashwin</span></div>
            <div class="question">What is dipole? Derive the equation for potential and electric field due to dipole at a distant point P. <span class="year">2074 Ashwin</span></div>
            <div class="question">Derive Poisson's equation. By solving Laplace's equation, find the capacitance of a parallel plate capacitor with potential difference between the plates equals V₀. <span class="year">2074 Ashwin</span></div>
            <div class="question">Define electric dipole and polarization. The region z < 0 contains a dielectric material for which ε_r = 2.5 while the region z > 0 is characterized by ε_r = 4. Let E1 = 10a_x + 5a_y + 3a_z V/m. Find E2 and the angles made by electric field E2 with the boundary interface. <span class="year">2074 Ashwin</span></div>
            <div class="question">State the uniqueness theorem and prove this theorem for Laplace's equation. <span class="year">2074 Ashwin</span></div>
            <div class="question">Define electric dipole and polarization. Consider the region y< 0 be composed of a uniform dielectric material for which the relative permittivity(ε_r) is 3.2 while the region y> 0 is characterized by ε_r=2. Let the flux density in region 1 be D1 = -30a_x + 50a_y + 70a_z nC/m². Find: a) Magnitude of Flux density and Electric fields intensity at region 2. b) Polarization(P) in region 1 and region 2 <span class="year">2070 Chaitra</span></div>
            <div class="question">Given the potential field V = 100x²/(x²+4) volts in free space: Find D at the surface, z=0; Show that the z=0 surface is an equipotential surface; Assume that the z=0 surface is a conductor and find the total charge on that portion of the conductor defined by 0 < x < 2, -3 < y < 0. <span class="year">2069 Chaitra</span></div>
            <div class="question">State the uniqueness theorem and prove this theorem using Poisson's equation. <span class="year">2069 Chaitra</span></div>
            <div class="question">The region X<0 is composed of a uniform dielectric material for which ε_r1= 3.2, while the region X>0 is characterized by ε_r2= 2. The electric flux density at region X<0 is D1 = -30a_x + 50a_y + 70a_z nC/m² then find polarization(P) and electric field intensity(E) in both regions. <span class="year">2068 Chaitra</span></div>
            <div class="question">Define an electric dipole. Derive expression for electric field because of electric dipole at a distance far that is large compared to the separation between charges in the dipole. <span class="year">2068 Chaitra</span></div>
            <div class="question">Define Relaxation Time Constant and derive an expression for the continuity equation. <span class="year">2068 Chaitra</span></div>
            <div class="question">A uniform sheet of charge ρ_s = 40ε₀ C/m² is located in the plane x=0 in free space. A uniform line charge ρ_L = 0.6 nC/m lies along the line X= 9, y=4 in free space. find the potential at point P(6, 8,-3) if V= 10V at A(2,9,3). <span class="year">2066 Baishakh</span></div>
            <div class="question">What is physical significance of div D? Explain the importance of potential in the electro static field. <span class="year">2066 Baishakh</span></div>
            <div class="question">Find potential at a point P(2,3,3) due to a 1nC charge located at Q(3,4,4), 1nC/m uniform line charge located at x=2, y= 1 if potential at(3,4,5) is 0V. <span class="year">2067 Mangsir</span></div>
            <div class="question">State and explain Gauss's law. Define divergence and write down its physical significance as it applies to electric fields. <span class="year">2067 Shrawan</span></div>
            <div class="question">Deduce how potential gradient can be used to determine the electric field intensity. What do you understand by electric dipole moment? <span class="year">2067 Shrawan</span></div>
            <div class="question">Explain how the conductivity of metals and semi-conductor changes with increase in temperature. Derive the point form of continuity equation. <span class="year">2067 Shrawan</span></div>
        </div>

        <div class="chapter-section" id="chapter3">
            <h2>3. Magnetic Field</h2>
            <div class="question">Derive the expression for the Maxwell's equation in point form. <span class="year">2081 Bhadra</span></div>
            <div class="question">Derive an expression for the magnetic field intensity produced by an infinitely long filament carrying current using Biot and Savart Law. <span class="year">2081 Bhadra</span></div>
            <div class="question">What is curl? State and Prove Stokes theorem. <span class="year">2081 Bhadra</span></div>
            <div class="question">A square loop of wire in the z= 0 plane with co-ordinates(1,0,0)(1,2,0)(3,2,0) and (3,0,0) carrying 2mA is placed in the field of an infinite filament on the y axis with current of 15A in a_y direction. Determine the total force on the loop. <span class="year">2081 Bhadra</span></div>
            <div class="question">Justify the maxwell's equation: ∮B·dl=0 with necessary remarks. Derive an expression of magnetic field intensity for an infinite filament carrying a direct current I. <span class="year">2081 Baishakh</span></div>
            <div class="question">Evaluate both sides of Stokes's theorem for the field E = 12 sinθ a_φ and the surface r=4, 0<θ< 90°, 0≤φ≤ 90°. Let the surface have the a_r direction. <span class="year">2080 Bhadra</span></div>
            <div class="question">Differentiate Scalar Magnetic Potential and Vector Magnetic Potential. Given magnetic vector potential A = -ρ²/4 a_z Wb/m. Calculate the total magnetic flux crossing the surface φ=π, 1<ρ<2, 0<z<5. <span class="year">2080 Bhadra</span></div>
            <div class="question">Define curl. Evaluate both side of stoke's Theorem for H = 8xy² a_x + 4x²y a_y A/m and rectangular path P(2,3,4) to Q(4,3,4) to R(4,3,1) to S(2,3,1) to P. <span class="year">2080 Baishakh</span></div>
            <div class="question">State Biot-Savart's law. A filamentary current of 10A is directed in from infinity to the origin on the positive x-axis and then back out to infinity along the positive z-axis. Use the Biot-Savart's law to determine H at P(0,1,0). <span class="year">2080 Baishakh</span></div>
            <div class="question">Differentiate between scalar magnetic potential and vector magnetic potential. If a vector magnetic potential is A = -(5z/ρ) a_φ Wb/m, calculate total magnetic flux crossing the surface φ=π/2, 1<ρ<5 m and 0<z<5m. <span class="year">2078 Bhadra</span></div>
            <div class="question">The region y<0(region 1) is air and y>0 (region 2) has μ_r= 10. if there is a uniform magnetic field H = 5a_x + 6a_y + 7a_z A/m in region 1, find B and H in region 2. <span class="year">2078 Bhadra</span></div>
            <div class="question">Find the vector magnetic field intensity H in cylindrical coordinates at P(2, π/3, 3) caused by a filament of 12 amperes(A) in a a_z direction on the z-axis and extending from z= 0 to z= 4. <span class="year">2078 Kartik</span></div>
            <div class="question">Consider a boundary at z=0 which carries current K = (i_x + i_y) A/m. Region 1 (z>0) is filled with material whose μ_r=1 and region 2 (z<0) is filled with material whose μ_r= 4. if B1 = 5a_x + 5a_y mT, find H1 and H2. <span class="year">2078 Kartik</span></div>
            <div class="question">Define scalar magnetic potential. The region y<0(region 1) is air and y>0(region 2) has μ_r= 3. If there is a uniform magnetic field B = 5a_x + 6a_y + 7.5a_z μT in region 2, find B and H in region 1. <span class="year">2076 Chaitra</span></div>
            <div class="question">Let a filamentary current of 5mA be directed from infinity to the origin on the positive z axis and then back out to infinity along the positive x axis. Find H at P(0, 1,0). <span class="year">2075 Ashwin</span></div>
            <div class="question">State Ampere's circuital law. Let the permittivity be 5 μH/m in region A where x<0, and 20 μH/m in region B where x>0. If there is a surface current density, K=150a_y - 200a_z A/m at x=0 and if H_A = 300a_x - 400a_y + 500a_z A/m, find: (a) |H_tB| (b) |H_NB| (c) angle between H_A and H_NB. <span class="year">2075 Ashwin</span></div>
            <div class="question">Derive the equation for magnetic field intensity in different regions due to a co-axial cable carrying a uniformly distributed dc current I in the inner conductor and -I in the outer conductor. <span class="year">2075 Chaitra</span></div>
            <div class="question">Find the vector magnetic field intensity H in cartesian coordinate at P(-1.5,-4, 3) caused by a current filament of 12A in the a_z direction on the z-axis and extending from z=-3 to z=3. <span class="year">2075 Chaitra</span></div>
            <div class="question">Define curl and give the physical interpretation of the curl with a suitable example. <span class="year">2075 Chaitra</span></div>
            <div class="question">Differentiate between scalar and vector magnetic potential. Derive the expression for magnetic boundary conditions. <span class="year">2075 Ashwin</span></div>
            <div class="question">State Stroke's theorem. Evaluate both sides of Stroke's theorem for the field H = 10 sinθ a_φ and the surface r= 3, 0 ≤ φ ≤ 2π, 0< θ< 90°. Let the surface have the a_r direction. <span class="year">2075 Ashwin</span></div>
            <div class="question">Verify Stoke's theorem for the field H = (1/ρ²) (z cosφ a_ρ + 5ρ a_φ) A/m in free space for the conical surface defined by θ= 20°, 0 ≤ φ ≤ π, 0< r ≤ 5. Let the positive direction of ds be a_r. <span class="year">2074 Ashwin</span></div>
            <div class="question">Consider a boundary at z= 0 for which B1 = 2a_x - 3a_y + a_z μT, μ1= 4 μH/m(z> 0), μ2=7 μH/m(z<0) and K = 80a_x A/m at z=0. Find B2. <span class="year">2074 Ashwin</span></div>
            <div class="question">The magnetic field intensity in a certain region of space is given by H = (20 sin θ / r²) a_r A/m. Find: i) The average value of J over the surface r=1, 0<θ<π/2, 0<φ<π/2. ii) ∇·J at P(0.5, 60°, 1). <span class="year">2074 Ashwin</span></div>
            <div class="question">Show that ∇×E=0 for static electric field. The region y<0(Region 1) is air and y>0 (Region 2) has μ_r= 10. if there is a uniform magnetic field H = 5a_x + 6a_y + 7a_z A/m in region 1, find B and H in region 2. <span class="year">2074 Ashwin</span></div>
            <div class="question">State Ampere's circuital law and stoke's theorem. Derive an expression for magnetic field intensity(H) due to infinite current carrying filament using Biot Savart's Law. <span class="year">2070 Chaitra</span></div>
            <div class="question">Differentiate between scalar and vector magnetic potential. The magnetic field intensity in a certain region of space is given by H = (y + z) a_y + 2z a_z A/m. Find the total current passing through the surface y= 2, π/4< φ < π/2, 3< z<5, in the a_y direction. <span class="year">2070 Chaitra</span></div>
            <div class="question">The magnetic field intensity is given in a certain region of space by H = (x / y²) a_x + (2 / z) a_y A/m. Find the total current passing through the surface z=4, 1< x< 2, 3< y< 5, in the a_z direction. <span class="year">2069 Chaitra</span></div>
            <div class="question">Define scalar and vector magnetic potential. Derive the expression for the magnetic field intensity at a point due to an infinite filament carrying a dc current I, placed on the z-axis, using the concept of vector magnetic potential. <span class="year">2069 Chaitra</span></div>
            <div class="question">Define scalar and vector magnetic potential. Derive the expression for magnetic field intensity for an infinite filament carrying a direct current I using the concept of scalar magnetic potential. <span class="year">2068 Chaitra</span></div>
            <div class="question">A current carrying square loop with vertices A(0,1,2), B(0,2,2), C(0,2,-2), D(0,1,-2) is carrying a dc current of 20A in the direction along A-B-C-D-A. Find magnetic field intensity H at centre of the current carrying loop. <span class="year">2068 Chaitra</span></div>
            <div class="question">Elaborate the significance of a curl of a vector field. <span class="year">2068 Chaitra</span></div>
            <div class="question">The condition triangle loop (shown in figure) carries a current of 10A. Find H at (0, 0, 5) due to side 1 of the loop. [Vertices: (0,1,0), (2,0,0)] <span class="year">2066 Baishakh</span></div>
            <div class="question">State Maxwell's fourth equation. <span class="year">2066 Baishakh</span></div>
            <div class="question">State and prove the Stokes theorem. <span class="year">2066 Baishakh</span></div>
            <div class="question">For a given co-axial cable with inner conductor of radius 'a', outer conductor with inner radius 'b' and outer radius 'c' with current in the inner conductor 'I' and current in the outer conductor '-I', determine ∇ × H for 0 ≤ r ≤ a, a ≤ r ≤ b, b ≤ r ≤ c. <span class="year">2067 Mangsir</span></div>
            <div class="question">State Bio-Savart's law. Derive the equation for magnetic field intensity due to a co-axial cable carrying a uniformly distributed dc current I in the inner conductor and -I in the outer conductor. <span class="year">2067 Shrawan</span></div>
            <div class="question">Given H = (3r² / sin θ) a_r + 54r cos θ a_θ A/m in free space. Find the total current in the a_φ direction through the conical surface θ=20°, 0< φ<2π, 0<r< 5. <span class="year">2067 Shrawan</span></div>
        </div>

        <div class="chapter-section" id="chapter4">
            <h2>4. Time Varying Fields</h2>
            <div class="question">Explain Faradays law. Derive the relation of the motional emf and displacement current. <span class="year">2081 Bhadra</span></div>
            <div class="question">Define Poynting vector. Using this deduce the time average power density for a dissipative medium. <span class="year">2081 Baishakh</span></div>
            <div class="question">A conductor with cross-sectional area of 10cm² carries conduction current J_c = 0.2 sin10⁹ t a_z A/m². Given that σ = 2.5x10⁶ S/m, and ε = ε₀. Calculate the magnitude of the displacement current density. <span class="year">2081 Baishakh</span></div>
            <div class="question">List out point form of Maxwell's equations in phasor form for time varying case. Using these equations, derive the electric field component of a uniform plane wave travelling in the perfect dielectric medium. <span class="year">2080 Bhadra</span></div>
            <div class="question">State Faraday's law of electromagnetic induction. Explain motional induction and transformer induction with necessary expressions. <span class="year">2080 Baishakh</span></div>
            <div class="question">Correct the equation ∇ × E = 0 with necessary arguments and derivation for time varying fields. <span class="year">2080 Baishakh</span></div>
            <div class="question">Correct the equation ∇ × E = 0 for time varying field with necessary derivation. Also modify the equation ∇ × H = J with necessary arguments and derivation for time varying field. <span class="year">2079 Bhadra</span></div>
            <div class="question">Explain motional induction with necessary derivations. Correct the equation ∇ × E = 0 with necessary arguments and derivation for time varying fields. <span class="year">2078 Bhadra</span></div>
            <div class="question">How does ∇×H = J conflict with continuity equation in time varying fields? How is this conflict rectified in such fields? <span class="year">2075 Chaitra</span></div>
            <div class="question">Explain how Ampere's law conflict with continuity equation and how it is corrected? Derive conduction and displacement current in a capacitor. <span class="year">2074 Ashwin</span></div>
            <div class="question">Define displacement current. Assume that dry soil has conductivity equal to 10⁻⁴ S/m, ε_r = 3, and μ = μ₀. Determine the frequency at which the ratio of the magnitudes of the conduction current density and displacement current density is unity. <span class="year">2072 Chaitra</span></div>
            <div class="question">Explain the significance of a curl of a vector field. Define displacement current. <span class="year">2068 Chaitra</span></div>
            <div class="question">Distinguish between conduction and displacement currents. <span class="year">2066 Baishakh</span></div>
            <div class="question">Explain how displacement current differs from conduction current. What do you understand by the term magnetization? What does the relative permeability of a substance indicate? <span class="year">2067 Shrawan</span></div>
            <div class="question">Write all the Maxwell equations for the time varying field point form as well as integral form. <span class="year">2070 Chaitra</span></div>
            <div class="question">State and prove Poynting's theorem. <span class="year">2075 Ashwin</span></div>
        </div>

        <div class="chapter-section" id="chapter5">
            <h2>5. Plane Waves</h2>
            <div class="question">Derive an expression for standing wave for both electric and magnetic field. Also indicate where on the z-axis you'll get the maximum and minimum value of electric field intensity E. Assume that the boundary is at z= 0, the region z< 0 is a perfect dielectric and the region z> 0 may be of any material. <span class="year">2081 Bhadra</span></div>
            <div class="question">A 1 MHz uniform plane wave with an amplitude of 25 V/m is propagating along a_x direction in a material for which ε_r= 4, μ_r= 9 and σ= 0. Find: a) The velocity of propagation. b) The phase constant. c) The intrinsic impedance. d) E(t) if E_y= 0 and E_z= 25V/m at P(10, 10, 10) at 100 ns. e) H(t) <span class="year">2081 Bhadra</span></div>
            <div class="question">Use boundary condition to find E2 in the medium 2 with boundary located at plane z=0. Medium 1 is perfect dielectric characterized by ε_r1=2.5, medium 2 is perfect dielectric characterized by ε_r2=5, electric field in medium 1 is E1=6a_x+3a_y+3a_z V/m. Also find the angles made by electric field E2 with the boundary interface. <span class="year">2081 Bhadra</span></div>
            <div class="question">A uniform plane wave in free space is given by Magnetic field intensity H in phasor form as: H_s = 4a_y e^(j30°) e^(-j250z) A/m. Find: a) Angular frequency(ω). b) Wavelength(λ) and intrinsic impedance(η). c) Electric field intensity E(x,y,z,t) at z=50mm and t=4μs. <span class="year">2081 Baishakh</span></div>
            <div class="question">A 9.375 GHz uniform plane wave is propagating in polyethylene(ε_r=2.26, μ_r=1). If the amplitude of the electric field intensity is 500 V/m and the material is assumed to be lossless: Find the phase constant, wavelength, velocity of propagation and intrinsic impedance. <span class="year">2080 Bhadra</span></div>
            <div class="question">Explain the term Skin Depth. Using Poynting Vector deduce the time average power density for a perfect dielectric. <span class="year">2080 Bhadra</span></div>
            <div class="question">Derive an expression for electric field and magnetic field for a uniform plane wave propagating in a free space. <span class="year">2080 Baishakh</span></div>
            <div class="question">Determine skin depth, propagation constant and velocity of wave at 1 MHz in good conductor with conductivity of 1.9x 10⁷ mho per meter. <span class="year">2080 Baishakh</span></div>
            <div class="question">Derive an expression for electric and magnetic fields for a uniform plane wave propagating in a dissipative medium. <span class="year">2079 Bhadra</span></div>
            <div class="question">A uniform plane wave in free space is given by E_s = (25∠30°)e^(-j30z) a_y V/m. Determine phase constant, frequency of the wave, intrinsic impedance, H_s, and the magnitude E of at z=25mm and t=4ps. <span class="year">2079 Bhadra</span></div>
            <div class="question">Derive the expression for electric and magnetic fields for a uniform plane wave propagating in a free space. <span class="year">2078 Bhadra</span></div>
            <div class="question">A uniform plane wave in free space is given by E_s = (25∠30°)e^(-j30z) a_y V/m. Determine phase constant, frequency of the wave, intrinsic impedance, H_s, and the magnitude E of at z=25mm and t=4ps. <span class="year">2078 Bhadra</span></div>
            <div class="question">Let E(z,t) = 1800 cos(10⁷πt - βz) a_x V/m and H(z,t) = 3.8 cos(10⁷πt - βz) a_y A/m represents a uniform plane wave propagating at a velocity of 1.4 x10⁸ m/s in perfect dielectric. Find a) β b) f c) η d) μ_r e) ε_r. <span class="year">2075 Ashwin</span></div>
            <div class="question">A 9.4 GHz uniform plane wave is propagating in a medium with ε_r=2.25, μ_r= 1. If the magnetic field intensity is 7 mA/m and the material is lossless, find i) Velocity of propagation ii) The wavelength iii) Phase constant iv) Intrinsic impedance v) Magnitude of electric field intensity <span class="year">2074 Ashwin</span></div>
            <div class="question">A uniform plane wave propagating in free space has E = 2 cos(10⁷πt - βz) a_x, determine β and H. <span class="year">2067 Mangsir</span></div>
            <div class="question">A uniform plane wave in non-magnetic medium has E = 50 cos(10⁹t + 2z) a_y V/m. Find: i) The direction of Propagation ii) Phase constant β, wavelength λ, velocity v, relative permittivity ε_r, intrinsic impedance η iii) H <span class="year">2074 Ashwin</span></div>
            <div class="question">Explain the phenomena when a plane wave is incident normally on the interface between two different Medias. Derive the expression for reflection and transmission coefficient. <span class="year">2074 Ashwin</span></div>
            <div class="question">Derive the expression for electric and magnetic fields for a uniform plane wave propagating in a perfect dielectric medium. <span class="year">2072 Chaitra</span></div>
            <div class="question">A lossless dielectric material has σ=0, μ_r=1, ε_r=4. An electromagnetic wave has magnetic field expressed as H = -0.1 cos(ωt - z) a_x + 0.5 sin(ωt - z) a_y A/m. Find: a) Angular frequency(ω) b) Wave impedance(η) c) E <span class="year">2072 Chaitra</span></div>
            <div class="question">Derive the expressions for the electric field E and magnetic field H for the wave propagation in free space. <span class="year">2068 Chaitra</span></div>
            <div class="question">The phasor component of electric field intensity in free space is given by E_s = (100∠45°)e^(-j5z) a_y V/m. Determine frequency of the wave, wave impedance, H_s, and magnitude of E at z= 10mm, t= 20μs. <span class="year">2068 Chaitra</span></div>
            <div class="question">Write short notes on: (a) Loss tangent (b) Skin depth and (c) Displacement current density. <span class="year">2068 Chaitra</span></div>
            <div class="question">For a non-magnetic materials having ε_r= 2.25 and σ= 10⁴ mho/m, find the numeric values at 5MHz for: a) The loss tangent b) The attenuation constant c) The phase constant d) The intrinsic impedance <span class="year">2066 Baishakh</span></div>
            <div class="question">A z-polarized uniform plane wave with frequency 100MHz propagates in air in the positive x-direction and impinges normally on a perfectly conducting plane at x= 0. Assuming the amplitude of the electric field vector to be 3mV/m, determine phasor and instantaneous expressions for a) Incident electric and magnetic field vectors b) Reflected electric and magnetic field vectors <span class="year">2067 Mangsir</span></div>
            <div class="question">Derive expressions for α and β if medium is characterized by permittivity ε, permeability μ and conductivity σ. <span class="year">2067 Mangsir</span></div>
            <div class="question">A 9.4 GHz uniform plane wave is propagating in polyethylene(ε_r= 2.25, μ_r= 1). If the magnitude of the magnetic field intensity is 7 mA/m and the material is lossless, find(i) velocity of propagation(v)(ii) the wavelength(λ)(iii) the phase constant(β) (iv) the intrinsic impedance(η)(v) the magnitude of electric field intensity. <span class="year">2067 Shrawan</span></div>
        </div>

        <div class="chapter-section" id="chapter6">
            <h2>6. Transmission Lines</h2>
            <div class="question">The parameters of a certain transmission line operating at 6 x 10⁸ rad/s are L= 0.4 μH/m, C=40 pF/m, G= 80 mS/m, and R= 20 Ω/m. Find γ, α, β, λ, and Z₀. <span class="year">2081 Bhadra</span></div>
            <div class="question">The parameters of a certain transmission line operating at 6x10⁸ rad/s are L= 0.4μH/m, C=40pF/m, G= 80mS/m, and R=20Ω/m. Find γ, α, and Z₀(characteristic impedance). <span class="year">2081 Baishakh</span></div>
            <div class="question">A lossless 60 Ω line is 1.8λ long and is terminated with pure resistance of 80 Ω. The load voltage is 15∠30° V. (i) Average power delivered to load (ii) Magnitude of minimum voltage on the line. <span class="year">2080 Bhadra</span></div>
            <div class="question">A 200Ω transmission line is lossless, 0.25 λ long and is terminated in Z_L= 400Ω. The line has the generator with 80∠0° V in series with 100Ω connected to the input. (a) Find the load voltage (b) Find the voltage at the midpoint of the line. <span class="year">2080 Baishakh</span></div>
            <div class="question">Define the secondary parameters of a transmission line. A lossless transmission line with Z₀= 50 ohm has a length of 0.4λ. The operating frequency is 100 MHz and it is terminated with a load Z_L= 40+ j10. Find: a) Reflection Coefficient (Γ) b) Standing wave ratio on the line(SWR) c) Input impedance(Z_in) <span class="year">2079 Bhadra</span></div>
            <div class="question">A lossless transmission line is 80 cm long and operates at a frequency 1 GHz. The line parameters are L= 0.5 μH/m and C= 200 pF/m. Find the characteristic impedance, the phase constant, the velocity on the line, and the input impedance for Z_L= 100Ω. <span class="year">2078 Bhadra</span></div>
            <div class="question">The velocity of propagation in a lossless transmission line 2.5x10⁸ m/s. If the capacitance of the line is 30 pF/m, find: a) Inductance of the line b) Characteristic impedance c) Phase constant at 100 MHz d) Reflection coefficient if the line is terminated with a resistive load of 50Ω <span class="year">2075 Ashwin</span></div>
            <div class="question">A lossless line having an air dielectric has a characteristics impedance of 400 Ω. The line is operating at 200 MHz and Z_L=200- j200 Ω. Find(a) SWR(b) Z_in if the line is 1 m long;(c) the distance from the load to the nearest voltage maximum. <span class="year">2074 Ashwin</span></div>
            <div class="question">Determine the primary constants(R, L, C and G) on the transmission line when the measurement on the line at 1 KHz gave the following results: Z₀=710∠-16°, α= 0.01 neper/m and β=0.035 rad/m. <span class="year">2074 Ashwin</span></div>
            <div class="question">A lossless 50-Ω line is 1.5λ long and is terminated with a pure resistance of 100Ω. The load voltage is 40∠18° V. Find:(a) the average power delivered to the load;(b) the magnitude of the minimum voltage on the line. <span class="year">2075 Chaitra</span></div>
            <div class="question">A two-wire 40 Ω line(Z₀= 40Ω) connecting the source of 80 V, 400 kHz with series resistance 10 Ω to the load of Z_L=60Ω. The line is 75 m long and the velocity on the line is 2.5x10⁸ m/s. Find the voltage V_in at input end and V_L at output end of the transmission line. <span class="year">2072 Chaitra</span></div>
            <div class="question">A lossless transmission line with Z₀= 50 Ω with length 1.5 m connects a voltage V_s= 60∠0° V source to a terminal load of Z_L=(50+j50) Ω. If the operating frequency f= 100 MHz, generator impedance Z_g= 50 Ω and speed of wave equal to the speed of the light. Find the distance of the first voltage maximum from the load. What is the power delivered to the load? <span class="year">2070 Chaitra</span></div>
            <div class="question">What are the techniques that can be taken to match the transmission line with mismatched load? Explain any one. <span class="year">2070 Chaitra</span></div>
            <div class="question">A lossless transmission line with Z₀= 50Ω is 30m long and operates at 1MHz. The line is terminated with a load Z_L=(60+j40) Ω. If velocity(v)= 3x10⁸m/s on the line. Find(a) the reflection coefficient,(b) the standing wave ratio and the input impedance. <span class="year">2069 Chaitra</span></div>
            <div class="question">Explain impedance matching using both quarter wave transformer and single stub methods. <span class="year">2068 Chaitra</span></div>
            <div class="question">Derive the expression for input impedance of a transmission line with characteristic impedance, Z₀, excited by source, V with source impedance Z_g and terminated in load Z_L. <span class="year">2067 Mangsir</span></div>
        </div>

    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
        }

        // Close sidebar if clicked outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggleButton = document.querySelector('.navbar-toggle');
            const isClickInsideSidebar = sidebar.contains(event.target);
            const isClickOnToggleButton = toggleButton.contains(event.target);

            if (window.innerWidth <= 768 && !isClickInsideSidebar && !isClickOnToggleButton && sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });
    </script>

</body>
</html>