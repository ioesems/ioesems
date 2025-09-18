<?php
// Define subject title
$subject_title = "Electromagnetics Previous Year Questions Collection";

// Define questions array organized by year
$questions_by_year = [
    '2081 Bhadra' => [
        [
            'text' => 'At point P(-3,-4, 5), express that vector that extends from P to Q(2, 0,-1) in spherical coordinates.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Transform the vector F into the cylindrical co-ordinate system. F = 4a_x - 2a_y + 4a_z at point P(x: 10,y:-8,z=6)',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Find E at P(6, 8, 10) caused by a point charge of 30 nC at the origin, a uniform line charge ρ_l = 40 pC/m on the z-axis and a uniform surface charge density ρ_s = 57.2 pC/m² on the plane x = 9.',
            'chapter' => 'Electric Field',
            'has_diagram' => true,
            'diagram_path' => 'images/2081_bhadra_q3.png',
            'diagram_alt' => 'Point P(6,8,10) with point charge at origin, line charge on z-axis, and surface charge on plane x=9'
        ],
        [
            'text' => 'Find the equation of a streamline that passes through the point P(1,4,-2) in the field E = -8xy a_x + 4x² a_y.',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for the Maxwell\'s equation in point form.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive an expression for the magnetic field intensity produced by an infinitely long filament carrying current using Biot and Savart Law.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => false
        ],
        [
            'text' => 'What is curl? State and Prove Stokes theorem.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => false
        ],
        [
            'text' => 'A square loop of wire in the z= 0 plane with co-ordinates(1,0,0)(1,2,0)(3,2,0) and (3,0,0) carrying 2mA is placed in the field of an infinite filament on the y axis with current of 15A in a_y direction. Determine the total force on the loop.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => true,
            'diagram_path' => 'images/2081_bhadra_q8.png',
            'diagram_alt' => 'Square loop in xy-plane with infinite filament on y-axis'
        ],
        [
            'text' => 'Explain Faradays law. Derive the relation of the motional emf and displacement current.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive an expression for standing wave for both electric and magnetic field. Also indicate where on the z-axis you\'ll get the maximum and minimum value of electric field intensity E. Assume that the boundary is at z= 0, the region z< 0 is a perfect dielectric and the region z> 0 may be of any material.',
            'chapter' => 'Plane Waves',
            'has_diagram' => true,
            'diagram_path' => 'images/2081_bhadra_q10.png',
            'diagram_alt' => 'Standing wave pattern at dielectric boundary'
        ],
        [
            'text' => 'A 1 MHz uniform plane wave with an amplitude of 25 V/m is propagating along a_x direction in a material for which ε_r= 4, μ_r= 9 and σ= 0. Find: a) The velocity of propagation. b) The phase constant. c) The intrinsic impedance. d) E(t) if E_y= 0 and E_z= 25V/m at P(10, 10, 10) at 100 ns. e) H(t)',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'The parameters of a certain transmission line operating at 6 x 10⁸ rad/s are L= 0.4 μH/m, C=40 pF/m, G= 80 mS/m, and R= 20 Ω/m. Find γ, α, β, λ, and Z₀.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ]
    ],
    
    '2081 Baishakh' => [
        [
            'text' => 'The Magnetic field Intensity in a certain region is given by H = 20a_ρ - 10a_φ + 3a_z A/m. Transform this field vector into Cartesian co-ordinate at P(x:5, y:0, z:-1).',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'A point charge of 6μC located at origin, uniform line charge density of 180nC/m lies along x-axis and uniform sheet charge of 25nC/m² lies on z=0 plane. Find E at point(1,2,4).',
            'chapter' => 'Electric Field',
            'has_diagram' => true,
            'diagram_path' => 'images/2081_baishakh_q2.png',
            'diagram_alt' => 'Point P(1,2,4) with point charge at origin, line charge on x-axis, and surface charge on z=0 plane'
        ],
        [
            'text' => 'Differentiate between divergence and gradient. Let V = 5ρ cosφ in free space. (i) Find the volume charge density at point A(0.5,60°,1). (iii) Find the surface charge density on a conductor surface passing through the point B(2,30°,1).',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Justify the maxwell\'s equation: ∮B·dl=0 with necessary remarks. Derive an expression of magnetic field intensity for an infinite filament carrying a direct current I.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Define Poynting vector. Using this deduce the time average power density for a dissipative medium.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'A conductor with cross-sectional area of 10cm² carries conduction current J_c = 0.2 sin10⁹ t a_z A/m². Given that σ = 2.5x10⁶ S/m, and ε = ε₀. Calculate the magnitude of the displacement current density.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'A uniform plane wave in free space is given by Magnetic field intensity H in phasor form as: H_s = 4a_y e^(j30°) e^(-j250z) A/m. Find: a) Angular frequency(ω). b) Wavelength(λ) and intrinsic impedance(η). c) Electric field intensity E(x,y,z,t) at z=50mm and t=4μs.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'The parameters of a certain transmission line operating at 6x10⁸ rad/s are L= 0.4μH/m, C=40pF/m, G= 80mS/m, and R=20Ω/m. Find γ, α, and Z₀(characteristic impedance).',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ]
    ],
    
    '2080 Bhadra' => [
        [
            'text' => 'Express a scalar potential field V = x² + 2y² + 3z² in spherical coordinates. Find the value of V at a point(2,60°,90°).',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for an electric field intensity due to an infinite line charge using Gauss\'s Law. Find electric flux density at point P(6, 5, 4) due to a uniform line charge of 6μC/m at x= 4, y=2, point charge 10nC at Q(3, 2,4) and uniform surface charge density of 0.4nC/m² at x: 3.',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Two uniform charges 8 nC/m are located at x= 1, y= 2 and x=-1, y= 2 in free space respectively. If the potential at origin is 100 V. Find V at P(4, 1,3).',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive Poisson Equation. Find the capacitance of parallel plate capacitor by solving Laplace equation with potential difference between the plates as V₀.',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Evaluate both sides of Stokes\'s theorem for the field E = 12 sinθ a_φ and the surface r=4, 0<θ< 90°, 0≤φ≤ 90°. Let the surface have the a_r direction.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => true,
            'diagram_path' => 'images/2080_bhadra_q5.png',
            'diagram_alt' => 'Spherical surface r=4 with 0<θ<90°, 0≤φ≤90°'
        ],
        [
            'text' => 'Differentiate Scalar Magnetic Potential and Vector Magnetic Potential. Given magnetic vector potential A = -ρ²/4 a_z Wb/m. Calculate the total magnetic flux crossing the surface φ=π, 1<ρ<2, 0<z<5.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => false
        ],
        [
            'text' => 'List out point form of Maxwell\'s equations in phasor form for time varying case. Using these equations, derive the electric field component of a uniform plane wave travelling in the perfect dielectric medium.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'A 9.375 GHz uniform plane wave is propagating in polyethylene(ε_r=2.26, μ_r=1). If the amplitude of the electric field intensity is 500 V/m and the material is assumed to be lossless: Find the phase constant, wavelength, velocity of propagation and intrinsic impedance.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the term Skin Depth. Using Poynting Vector deduce the time average power density for a perfect dielectric.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A lossless 60 Ω line is 1.8λ long and is terminated with pure resistance of 80 Ω. The load voltage is 15∠30° V. (i) Average power delivered to load (ii) Magnitude of minimum voltage on the line.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => true,
            'diagram_path' => 'images/2080_bhadra_q10.png',
            'diagram_alt' => 'Transmission line with standing wave pattern'
        ]
    ],
    
    '2080 Baishakh' => [
        [
            'text' => 'Define electric flux density. Given the field D = -2ρ sin2φ a_ρ + sin2φ a_φ, evaluate both sides of the divergence theorem for the region bounded by 1 < ρ < 2, 0 < φ < 90°, 0 < z < 1.',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'State Divergence\'s Theorem. A current density in certain region is given as J = (400 sin θ / r²) a_r A/m². Find the total current flowing through that portion of the spherical surface r = 0.8 bounded by 0.1π < θ < 0.3π, 0 < φ < 2π.',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Find the equation for Energy Density in the electrostatic field.',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Define curl. Evaluate both side of stoke\'s Theorem for H = 8xy² a_x + 4x²y a_y A/m and rectangular path P(2,3,4) to Q(4,3,4) to R(4,3,1) to S(2,3,1) to P.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => true,
            'diagram_path' => 'images/2080_baishakh_q4.png',
            'diagram_alt' => 'Rectangular path in 3D space'
        ],
        [
            'text' => 'State Biot-Savart\'s law. A filamentary current of 10A is directed in from infinity to the origin on the positive x-axis and then back out to infinity along the positive z-axis. Use the Biot-Savart\'s law to determine H at P(0,1,0).',
            'chapter' => 'Magnetic Field',
            'has_diagram' => false
        ],
        [
            'text' => 'State Faraday\'s law of electromagnetic induction. Explain motional induction and transformer induction with necessary expressions.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'Correct the equation ∇ × E = 0 with necessary arguments and derivation for time varying fields.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive an expression for electric field and magnetic field for a uniform plane wave propagating in a free space.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Determine skin depth, propagation constant and velocity of wave at 1 MHz in good conductor with conductivity of 1.9x 10⁷ mho per meter.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A 200Ω transmission line is lossless, 0.25 λ long and is terminated in Z_L= 400Ω. The line has the generator with 80∠0° V in series with 100Ω connected to the input. (a) Find the load voltage (b) Find the voltage at the midpoint of the line.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ]
    ],
    
    '2079 Bhadra' => [
        [
            'text' => 'Given a point P(-2, 6, 3) and vector field E = ya_x + (xy+z)a_y, express P and E in spherical co-ordinate system.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Define electric dipole moment. Two uniform line charges, 8 nC/m each, are located at x= 1, z= 2 and at x=-1, y=2 in free space. If the potential at origin is 100 V, find V at P(4, 1, 3).',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'State Gauss\'s Law. The region y< 0 contains a dielectric material for which ε_r1= 2.5, while the region y> 0 is characterized by ε_r2=4. Let E1 = 40a_x + 50a_y + 70a_z V/m, find the electric field intensities, flux densities in region 2 and the angle θ₁.',
            'chapter' => 'Electric Field',
            'has_diagram' => true,
            'diagram_path' => 'images/2079_bhadra_q3.png',
            'diagram_alt' => 'Dielectric boundary at y=0 with different permittivities'
        ],
        [
            'text' => 'Derive Poisson\'s equation. Assuming that the potential V in the cylindrical coordinate system is the function of ρ only, solve the Laplacian equation by integration method and derive the expression for the capacitance of co-axial capacitor using the same solution of V.',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Correct the equation ∇ × E = 0 for time varying field with necessary derivation. Also modify the equation ∇ × H = J with necessary arguments and derivation for time varying field.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive an expression for electric and magnetic fields for a uniform plane wave propagating in a dissipative medium.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Define the secondary parameters of a transmission line. A lossless transmission line with Z₀= 50 ohm has a length of 0.4λ. The operating frequency is 100 MHz and it is terminated with a load Z_L= 40+ j10. Find: a) Reflection Coefficient (Γ) b) Standing wave ratio on the line(SWR) c) Input impedance(Z_in)',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ]
    ],
    
    '2078 Bhadra' => [
        [
            'text' => 'Transform a vector field F = 4a_x + 2a_y + 4a_z into cylindrical coordinate system at a point P(2, 3, 5).',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'A point charge of 6μC located at origin, uniform line charge density of 180nC/m lies along x-axis and uniform sheet charge of 25 nC/m² lies on z=0 plane. Find E at point(1,2,4).',
            'chapter' => 'Electric Field',
            'has_diagram' => true,
            'diagram_path' => 'images/2078_bhadra_q2.png',
            'diagram_alt' => 'Point P(1,2,4) with point charge at origin, line charge on x-axis, and surface charge on z=0 plane'
        ],
        [
            'text' => 'Derive the expression for an electric field intensity due to an infinitely long line charge with charge density ρ_l by using Gauss\'s law. Find the volume charge density that is associated with the field D = xy² a_x + x²y a_y + z a_z C/m².',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'State continuity equation. Given the vector current density, J = 10ρ² a_ρ - 4ρ sin²φ a_φ mA/m². Determine the current flowing outward the circular band ρ=5, 0<φ<2π, 2<z<2.8.',
            'chapter' => 'Electric Field',
            'has_diagram' => false
        ],
        [
            'text' => 'Differentiate between scalar magnetic potential and vector magnetic potential. If a vector magnetic potential is A = -(5z/ρ) a_φ Wb/m, calculate total magnetic flux crossing the surface φ=π/2, 1<ρ<5 m and 0<z<5m.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => false
        ],
        [
            'text' => 'The region y<0(region 1) is air and y>0 (region 2) has μ_r= 10. if there is a uniform magnetic field H = 5a_x + 6a_y + 7a_z A/m in region 1, find B and H in region 2.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => true,
            'diagram_path' => 'images/2078_bhadra_q6.png',
            'diagram_alt' => 'Magnetic boundary at y=0 with different permeabilities'
        ],
        [
            'text' => 'Explain motional induction with necessary derivations. Correct the equation ∇ × E = 0 with necessary arguments and derivation for time varying fields.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ]
    ]
];

// Include the viewer module
include '../pyq_collection_viewer.php';
?>