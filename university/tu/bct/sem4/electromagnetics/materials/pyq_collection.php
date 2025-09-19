<?php
// Define subject title
$subject_title = "Electromagnetics Previous Year Questions Collection";

// Define questions array organized by year
$questions_by_year = [
    '2081 Bhadra' => [
        [
            'text' => 'At point P(-3,-4, 5), express that vector that extends from P to Q(2, 0,-1) in spherical coordinates.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Find E at P(6, 8, 10) caused by a point charge of 30 nC at the origin, a uniform line charge ρ_l = 40 pC/m on the z-axis and a uniform surface charge density ρ_s = 57.2 pC/m² on the plane x = 9.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for the Maxwell\'s equation in point form.',
            'chapter' => 'Maxwell\'s Equations',
            'has_diagram' => false
        ],
        [
            'text' => 'Find the equation of a streamline that passes through the point P(1,4,-2) in the field E = -8xy a_x + 4x² a_y.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive an expression for the magnetic field intensity produced by an infinitely long filament carrying current using Biot and Savart Law.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'What is curl? State and Prove Stokes theorem.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'A square loop of wire in the z= 0 plane with co-ordinates(1,0,0)(1,2,0)(3,2,0) and (3,0,0) carrying 2mA is placed in the field of an infinite filament on the y axis with current of 15A in a_y direction. Determine the total force on the loop.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive an expression for standing wave for both electric and magnetic field. Also indicate where on the z-axis you\'ll get the maximum and minimum value of electric field intensity E. Assume that the boundary is at z= 0, the region z< 0 is a perfect dielectric and the region z> 0 may be of any material.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A 1 MHz uniform plane wave with an amplitude of 25 V/m is propagating along a_x direction in a material for which ε_r= 4, μ_r= 9 and σ= 0. Find: a) The velocity of propagation. b) The phase constant. c) The intrinsic impedance. d) E(t) if E_y= 0 and E_z= 25V/m at P(10, 10, 10) at 100 ns. e) H(t)',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Use boundary condition to find E2 in the medium 2 with boundary located at plane z=0. Medium 1 is perfect dielectric characterized by ε_r1=2.5, medium 2 is perfect dielectric characterized by ε_r2=5, electric field in medium 1 is E1=6a_x+3a_y+3a_z V/m. Also find the angles made by electric field E2 with the boundary interface.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Find capacitance per unit length of a co-axial cable using Laplace equation.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain Faradays law. Derive the relation of the motional emf and displacement current.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'The parameters of a certain transmission line operating at 6 x 10⁸ rad/s are L= 0.4 μH/m, C=40 pF/m, G= 80 mS/m, and R= 20 Ω/m. Find γ, α, β, λ, and Z₀.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on types of antenna and, antenna parameters.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2081 Baishakh' => [
        [
            'text' => 'The Magnetic field Intensity in a certain region is given by H = 20a_ρ - 10a_φ + 3a_z A/m. Transform this field vector into Cartesian co-ordinate at P(x:5, y:0, z:-1).',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'A point charge of 6μC located at origin, uniform line charge density of 180nC/m lies along x-axis and uniform sheet charge of 25nC/m² lies on z=0 plane. Find E at point(1,2,4).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Differentiate between divergence and gradient. Let V = 5ρ cosφ in free space. (i) Find the volume charge density at point A(0.5,60°,1). (iii) Find the surface charge density on a conductor surface passing through the point B(2,30°,1).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define curvilinear square method for calculating capacitance. A square grid shown in figure below within a given potential. Find the potential at point a, b, c, d, e, f, g, h and i using iteration method, Complete it using single iteration only.',
            'chapter' => 'Electrostatics',
            'has_diagram' => true,
            'diagram_path' => 'images/2081_baishakh_q4.png',
            'diagram_alt' => 'Square grid for curvilinear square method'
        ],
        [
            'text' => 'Justify the maxwell\'s equation: ∮B·dl=0 with necessary remarks. Derive an expression of magnetic field intensity for an infinite filament carrying a direct current I.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define Biot Savart\'s law. Let the permittivity be 5μH/m in region A where x<0, and 20μH/m in region B where x>0. If there is a surface current density K=150a_y-200a_x A/m at x=0 and if H=300a_x-400a_y+500a_z A/m, find H in region A and region B.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define Poynting vector. Using this deduce the time average power density for a dissipative medium.',
            'chapter' => 'Plane Waves',
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
        ],
        [
            'text' => 'A standard air-filled rectangular waveguide with dimensions 8.636cm x 4.318cm is fed by a 4GHz carrier from a coaxial cable. Determine if a TE10 mode will be propagating or not.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'What are the parameters of antenna? List out the types of Antenna.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2080 Bhadra' => [
        [
            'text' => 'Express a scalar potential field V = x² + 2y² + 3z² in spherical coordinates. Find the value of V at a point(2,60°,90°).',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for an electric field intensity due to an infinite line charge using Gauss\'s Law. Find electric flux density at point P(6, 5, 4) due to a uniform line charge of 6μC/m at x= 4, y=2, point charge 10nC at Q(3, 2,4) and uniform surface charge density of 0.4nC/m² at x: 3.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Two uniform charges 8 nC/m are located at x= 1, y= 2 and x=-1, y= 2 in free space respectively. If the potential at origin is 100 V. Find V at P(4, 1,3).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive Poisson Equation. Find the capacitance of parallel plate capacitor by solving Laplace equation with potential difference between the plates as V₀.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Evaluate both sides of Stokes\'s theorem for the field E = 12 sinθ a_φ and the surface r=4, 0<θ< 90°, 0≤φ≤ 90°. Let the surface have the a_r direction.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Differentiate Scalar Magnetic Potential and Vector Magnetic Potential. Given magnetic vector potential A = -ρ²/4 a_z Wb/m. Calculate the total magnetic flux crossing the surface φ=π, 1<ρ<2, 0<z<5.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'List out point form of Maxwell\'s equations in phasor form for time varying case. Using these equations, derive the electric field component of a uniform plane wave travelling in the perfect dielectric medium.',
            'chapter' => 'Maxwell\'s Equations',
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
            'has_diagram' => false
        ],
        [
            'text' => 'What are the advantages of waveguides over transmission line? Consider a rectangular waveguide of dimension a=1.07 cm, b=0.43 cm. Find the cutoff frequency for TM11 mode.(ε_r=2, μ=μ₀)',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes about antenna and its parameters.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2080 Baishakh' => [
        [
            'text' => 'Transform the vector F into the cylindrical co-ordinate system. F = r a_r - (x + y) a_y + 6 a_z at point P(x: 10,y:-8,z=6)',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Define electric flux density. Given the field D = -2ρ sin2φ a_ρ + sin2φ a_φ, evaluate both sides of the divergence theorem for the region bounded by 1 < ρ < 2, 0 < φ < 90°, 0 < z < 1.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State Divergence\'s Theorem. A current density in certain region is given as J = (400 sin θ / r²) a_r A/m². Find the total current flowing through that portion of the spherical surface r = 0.8 bounded by 0.1π < θ < 0.3π, 0 < φ < 2π.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Find the equation for Energy Density in the electrostatic field.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define curl. Evaluate both side of stoke\'s Theorem for H = 8xy² a_x + 4x²y a_y A/m and rectangular path P(2,3,4) to Q(4,3,4) to R(4,3,1) to S(2,3,1) to P.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'State Biot-Savart\'s law. A filamentary current of 10A is directed in from infinity to the origin on the positive x-axis and then back out to infinity along the positive z-axis. Use the Biot-Savart\'s law to determine H at P(0,1,0).',
            'chapter' => 'Magnetostatics',
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
        ],
        [
            'text' => 'Explain the different modes of propagation supported by waveguides. A rectangular waveguide has a cross-section of 2.5 cm x 1.2 cm. Determine if the signal of 5 GHz propagates in the dominant mode.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'What are the parameters of antenna? List out the types of Antenna.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2079 Bhadra' => [
        [
            'text' => 'Transform the vector F into the cylindrical co-ordinate system. F = 1(r a_x - y a_y + 6 a_z) at point P(x: 10,y:-8,z=6)',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Define electric dipole moment. Two uniform line charges, 8 nC/m each, are located at x= 1, z= 2 and at x=-1, y=2 in free space. If the potential at origin is 100 V, find V at P(4, 1, 3).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State Gauss\'s Law. The region y< 0 contains a dielectric material for which ε_r1= 2.5, while the region y> 0 is characterized by ε_r2=4. Let E1 = 40a_x + 50a_y + 70a_z V/m, find the electric field intensities, flux densities in region 2 and the angle θ₁.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive Poisson\'s equation. Assuming that the potential V in the cylindrical coordinate system is the function of ρ only, solve the Laplacian equation by integration method and derive the expression for the capacitance of co-axial capacitor using the same solution of V.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State Stoke\'s theorem. Evaluate both sides of stroke\'s theorem for the field H = 8xy² a_x - 5y²z a_y A/m and the rectangular path around the region 2<x≤5, -1<y<1, z=0. Let the positive direction of dS be a_z.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Define Ampere\'s circuital law. Determine H at P2(0.4, 0.3, 0) in the field of an 8 A filamentary current directed inward from infinity to the origin on the positive x-axis and then back out to infinity along the y axis.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain motional induction with necessary derivations. Correct the equation ∇ × E = 0 with necessary arguments and derivation for time varying fields.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for electric and magnetic fields for a uniform plane wave propagating in a dissipative medium.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A uniform plane wave in free space is given by E_s = (25∠30°) e^(-j350z) a_x V/m. Determine phase constant, frequency of the wave, intrinsic impedance, E, and the magnitude E of at z=25mm and t=4ps.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Define the secondary parameters of a transmission line. A lossless transmission line with Z₀= 50 ohm has a length of 0.4λ. The operating frequency is 100 MHz and it is terminated with a load Z_L= 40+ j10. Find: a) Reflection Coefficient (Γ) b) Standing wave ratio on the line(SWR) c) Input impedance(Z_in)',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'Differentiate between TE and TM modes, Consider a rectangular waveguide with ε_r= 4, μ_r= μ_0 with dimensions a=2.08 cm, b= 0.54 cm. Find the cutoff frequency for TE11 mode and the dominant mode.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short note on antenna and its types.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2078 Bhadra' => [
        [
            'text' => 'Given a point P(-2, 6, 3) and vector field E = y a_x + (xy+z) a_y, express P and E in spherical co-ordinate system.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'A point charge of 6μC located at origin, uniform line charge density of 180nC/m lies along x-axis and uniform sheet charge of 25 nC/m² lies on z=0 plane. Find E at point(1,2,4).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for an electric field intensity due to an infinitely long line charge with charge density ρ_l by using Gauss\'s law. Find the volume charge density that is associated with the field D = xy² a_x + x²y a_y + z a_z C/m².',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State continuity equation. Given the vector current density, J = 10ρ² a_ρ - 4ρ sin²φ a_φ mA/m². Determine the current flowing outward the circular band ρ=5, 0<φ<2π, 2<z<2.8.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Differentiate between scalar magnetic potential and vector magnetic potential. If a vector magnetic potential is A = -(5z/ρ) a_φ Wb/m, calculate total magnetic flux crossing the surface φ=π/2, 1<ρ<5 m and 0<z<5m.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'The region y<0(region 1) is air and y>0 (region 2) has μ_r= 10. if there is a uniform magnetic field H = 5a_x + 6a_y + 7a_z A/m in region 1, find B and H in region 2.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Correct the equation ∇ × E = 0 for time varying field with necessary derivation. Also modify the equation ∇ × H = J with necessary arguments and derivation for time varying field.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'A uniform plane wave in free space is given by E_s = (25∠30°) e^(-j350z) a_x V/m. Determine phase constant, frequency of the wave, intrinsic impedance, E, and the magnitude E of at z=25mm and t=4ps.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for electric and magnetic fields for a uniform plane wave propagating in a free space.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A lossless transmission line is 80 cm long and operates at a frequency 1 GHz. The line parameters are L= 0.5 μH/m and C= 200 pF/m. Find the characteristic impedance, the phase constant, the velocity on the line, and the input impedance for Z_L= 100Ω.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on TE and TM modes of rectangular waveguide. An air filled rectangular waveguide has cross-section of 2.3 cm x 1.2 cm. Calculate the cut-off frequency of the dominant mode(TE10).',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes about antenna and its parameters.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2078 Kartik' => [
        [
            'text' => 'Transform a vector field F = 4a_x + 2a_y + 4a_z into cylindrical coordinate system at a point P(2, 3, 5).',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'A plane x=2 carries a surface charge density: 0.1 nC/m² and a uniform line charge density 10nC/m along x-axis and a point charge of 10nC is at origin. Calculate E at (1,2,3).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Evaluate the both sides of divergence theorem in the field D = 2xy a_x + x² a_y C/m² and the rectangular parallelopiped formed by all three planes x=0 and 1, y=0 and 2, and z= 0 and 1.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'If potential field in free space is V = ρ sinφ cosφ V and point P is located at(2, 90°, 0°), find: (a) E (b) direction of E at P (c) energy density at P.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Find the vector magnetic field intensity in linear coordinates at P(2,1,3) caused by a filament of 12 amperes(A) in a a_z direction on the z-axis and extending from z= 0 to z= 4.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Consider a boundary at z=0 which carries current K = (10a_x + 20a_y) A/m. Region 1 (z<0) is filled with material whose μ_r=2 and region 2 (z>0) is filled with material whose μ_r= 4. If B1 = 5a_x + 5a_y mT, find B2 and H2.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define Poynting vector. Using this deduce the time average power density for a dissipative medium.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A uniform plane wave E = 15cos(2 x 10^8 t + βx) a_y A/m has a magnetic field component in a medium characterized by σ=0, ε=4ε₀, μ=μ₀. Find a) Direction of Propagation, impedance η b) Magnitude of H c) Phase constant β, Wavelength λ, velocity v, intrinsic impedance η.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A uniform plane wave, in air, is partially reflected from the surface of a material whose properties are unknown. Measurement of the electric field in the region in front of the interface yields a 1.5 m spacing between maxima, with the first maximum occurring 0.75 m from the interface. A standing wave ratio of 5 is measured. Determine the intrinsic impedance of the unknown material.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A 50 Ω lossless transmission line is 0.4 λ long. The line is terminated with a load Z_L=40+ j30 Ω. If the operating frequency is 300 MHz, find a) reflection coefficient(Γ) b) standing wave ratio(s) and c) input impedance(Z_in).',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain why TEM-wave doesn\'t exist in a rectangular waveguide? A rectangular waveguide has dimensions a= 1 cm & b=2 cm. The medium within the waveguides has ε_r= 1, μ_r= 1, σ= 0. Find whether or not the signal with the frequency of 500 MHz will be transmitted in the TE10 mode.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'What are the parameters of antenna? List out the different types of antenna you have studied.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2076 Chaitra' => [
        [
            'text' => 'Transform the vector A = 4a_x - 2a_y - 4a_z into spherical co-ordinates at a point P(x=-2, y=-3, z= 4).',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'An infinite uniform line charge ρ_L= 2nC/m lies along the x-axis in free space, while point charges of 8nC each are located at(0, 0, 1) and (0, 0, -1). (a) Find E at(2,3,-4).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define uniqueness theorem. Find the energy stored in free space for the region 2mm< r< 3mm, 0<θ<90°, 0<φ<90°, given the potential field V = 200/r - 300/r² V.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Using the continuity equation elaborate the concept of Relaxation Time constant (RTC) with necessary derivations. Let J = 4/r² a_r A/m² be the current density in a given region. At t= 10ms, calculate the amount of current passing through surface r=2m, 0<z<3m, 0<φ<2π.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State and prove the Stoke\'s Theorem. Calculate the value of the vector current density in cylindrical coordinates at P(1.5,90°,0.5) if H = 3/(r² + 0.25) a_φ.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Define scalar magnetic potential. The region y<0(region 1) is air and y>0(region 2) has μ_r= 3. If there is a uniform magnetic field B = 5a_x + 6a_y + 7.5a_z μT in region 2, find B and H in region 1.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'List out the Maxwell\'s equations phasor form for time varying case in free space. A conducting bar can slide freely over two conducting rails placed at x= 0 and x= 10cm. Calculate the induced voltage in the bar if the bar slides at a velocity v=16a_y m/s and B_z=3a_z mWb/m².',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'A uniform plane wave in free space is given by E_s = {250∠30° a_x} e^(-j310z) V/m. Determine phase constant, frequency of the wave, intrinsic impedance, H and the magnitude H of at z=25mm and t=4ps.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'In a certain region, ε=10⁻¹¹ F/m and μ=10⁻⁵ H/m. If B_x = 10⁻⁴ cos 10⁵t sin 10⁻³y T find: a) Find E b) Find the total magnetic flux passing through the surface x= 0, 0< y< 40m, 0<z<2m at t=1 μs.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A transmission line operating at 120MHz has R=20Ω/m, L= 0.3μH/m, C= 63pF/m and G= 0. Find: a) Propagation coefficient(γ) b) Velocity of wave propagation on the line(v) c) Characteristic impedance(Z₀).',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'A rectangular waveguide has dimension a=4cm and b=2 cm. Determine the cut-off frequency and range of frequencies over which the guide will support single mode.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on antenna and its types.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2075 Ashwin' => [
        [
            'text' => 'Given points A(ρ= 5, φ= 70°, z=-3) and B(ρ= 2, φ= 30°, z= 1), find: (a) a unit vector in cylindrical coordinates at A directed toward B; (b) a unit vector in spherical coordinates at A directed toward B.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Two uniform line charges, each 20 nC/m, are located at y= 1, z= ±1 m. Find the total charge within the surface of a sphere having a radius of 2 m, if it is centered at P(3, 1, 0).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define Energy Density in electrostatic field.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'The conducting planes 2x+ 3y= 12 and 2x+ 3y= 18 are at potentials of 100 V and 0, respectively. Let ε= ε₀ and find V at P(5, 2, 6); (b) E at P(5,2,6).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Let a filamentary current of 5mA be directed from infinity to the origin on the positive z axis and then back out to infinity along the positive x axis. Find H at P(0, 1,0).',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State Ampere\'s circuital law. Let the permeability be 5 μH/m in region A where x<0, and 20 μH/m in region B where x>0. If there is a surface current density K=150a_y-200a_x A/m at x=0, and if H1=300a_x-400a_y+ 500a_z A/m, find: (a) |H_t2| (b) |H_n1| (c) angle between H1 and H_n1.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State and explain the Maxwell\'s equation in differential and integral form. Also define the displacement current and depth of penetration.',
            'chapter' => 'Maxwell\'s Equations',
            'has_diagram' => false
        ],
        [
            'text' => 'Establish the relation for Helmholtz\'s equation for electromagnetic wave propagation.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'State and prove Poynting\'s theorem.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A load Z_L=80+ j100Ω is located at z= 0 on a lossless 50-Ω line. The operating frequency is 200 MHz, and the wavelength on the line is 2 m. (a) If the line is 1.5 m in length, what is the input impedance? (b) What is the distance from the load to the nearest voltage maximum?',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'A rectangular waveguide has dimensions a=2cm and b=1cm. Determine the range of frequencies over which the guide will operate single mode (TE10).',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on: a) TE mode and TM mode b) Antenna Properties',
            'chapter' => 'Waveguides, Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2075 Chaitra' => [
        [
            'text' => 'Find the vector that extends from A(-3,-4,6) to B(-5,2,-8) and express it in cylindrical coordinate system.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'A point charge of 12nC is located at the origin. Four uniform line charges are located in the x=0 plane as follows: 80nC/m at y=-1 and -50 nC/m at y=-2 and -4 m. Find the electric flux density D at P(0,-3,2).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Let the region z<0 be composed of a uniform dielectric material for which ε_r1=1.2, while the region z>0 is characterized by ε_r2=2. Let D1=-30a_x+50a_y+70a_z nC/m² and find: a) D_t1 (Tangential component of D in Region 1); b) Polarization(P1); c) D_n2 (Normal component of D in Region 2) d) E_t2 (Tangential component of E in Region 2).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the Poisson\'s and Laplace\'s equations. Assuming, that the potential V in the cylindrical coordinate system is the function of ρ only. Solve the Laplace\'s equation by Integration method and derive the expression for the capacitance of the Spherical capacitor using the same solution of V.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the equation for magnetic field intensity in different regions due to a co-axial cable carrying a uniform current I in the inner conductor and -I in the outer conductor.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Find the vector magnetic field intensity H in cartesian coordinate at P(-1.5,-4, 3) caused by a current filament of 12A in the a_z direction on the z-axis and extending from z=-3 to z=3.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define curl and give the physical interpretation of the curl with a suitable example.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'A uniform plane wave in free space is propagating in a_z direction at a frequency of 5 MHz. If E=200 cos(ωt+βy) a_x V/m, write the expressions for electric and magnetic fields, i.e., E(x,y,z) and H(x,y,z) in instantaneous and phasor forms.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive an expression for Standing Wave Ratio(SWR) indicating where on the z-axis you\'ll get the maximum and minimum value of electric field intensity E. Assume that the boundary is at z=0, the region z<0 is a perfect dielectric and the region z>0 may be of any material.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Find the amplitude of the displacement current density in an air space within a large power distribution bus where H= (10^6/ρ) cos(377t+1.2566x 10^-6 z) a_φ A/m.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'A lossless 50-Ω line is 1.5λ long and is terminated with a pure resistance of 100Ω. The load voltage is 40∠30° V. Find: (a) the average power delivered to the load; (b) the magnitude of the minimum voltage on the line.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'What are the advantages and disadvantages of waveguides when you compare it with transmission lines? Explain the transverse electric(TE) and transverse magnetic(TM) modes used in rectangular waveguides.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Give the definition of an antenna and explain the properties of any one type of antenna that you have studied during your electromagnetics course.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2074 Ashwin' => [
        [
            'text' => 'Express in cartesian components: (a) the vector at A(ρ=4,φ= 40°, z=-2) that extends to B(ρ= 5,φ=-110°, z= 2); (b) a unit vector at B directed toward A.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive an Electric Field Intensity(E) in between the two co-axial cylindrical conductors, the inner of radius \'a\' and outer of radius \'b\', each infinite in extent and assuming a surface charge density ρ_s on the outer surface of the inner conductor. An infinite uniform line charge ρ_L= 2 nC/m lies along the x-axis in free space, while the point charge of 8nC each are located at(0, 0, 1). Find E at (2,3,-4).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the integral and point forms of continuity equation. In a certain region, J = 1/r² cosθ a_r - r sinθ a_φ, A/m². Find the current crossing the surface defined by θ=30°, 0<φ<2π, 0<r<2.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Given the field, D = 5sin(θ)cos(φ) a_r nC/m², find: (a) the volume charge density; (b) the total charge contained in the region r<2 m; (c) the value of D at the surface r=2.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Differentiate between scalar and vector magnetic potential. Derive the expression for magnetic boundary conditions.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State Stroke\'s theorem. Evaluate both sides of Stroke\'s theorem for the field H = 10sinθ a_φ A/m in free space for the conical surface defined by θ= 20°, 0 ≤ φ ≤ 2π, 0< r ≤ 5. Let the surface have the a_r direction.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Find the capacitance of a spherical capacitor using Laplace\'s equation.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Write point form of all the Maxwell\'s Equations in phasor domain for perfect dielectric material. Use these equations to derive the magnetic field component of a uniform plane wave travelling in the perfect dielectric medium.',
            'chapter' => 'Maxwell\'s Equations',
            'has_diagram' => false
        ],
        [
            'text' => 'Let E(z,t)= 800cos(10^7 πt-βz) a_x V/m and H(z,t)= 3.8cos(10^7 πt-βz) a_y A/m represents a uniform plane wave propagating at a velocity of 1.4 x10^8 m/s in perfect dielectric. Find a) β b) f c) η d) μ_r e) ε_r.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'The velocity of propagation in a lossless transmission line 2.5x10^8 m/s. If the capacitance of the line is 30 pF/m, find: a) Inductance of the line b) Characteristic impedance c) Phase constant at 100 MHz d) Reflection coefficient if the line is terminated with a resistive load of 50Ω.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'What are the advantages of waveguides over transmission lines? A rectangular waveguide has a cross-section of 2.5 cm x 1.2 cm. Find the cut-off frequencies of dominant mode and TE(1,1).',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on: Antenna properties.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2073 Ashwin' => [
        [
            'text' => 'Convert the vector F = F_x a_x + F_y a_y + F_z a_z to both spherical coordinate system.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Find the electric field intensity in all three regions due to an infinite sheet parallel plate capacitor having surface charge density ρ_s C/m² and -ρ_s C/m² and placed at y= 0 and y= b respectively. Let a uniform line charge density, 3 nC/m, at y= 3; uniform surface charge density, 0.2nC/m² at x=2. Find E at the origin.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'What is dipole? Derive the equation for potential and electric field due to dipole at a distant point P.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive Poisson\'s equation. By solving Laplace\'s equation, find the capacitance of a parallel plate capacitor with potential difference between the plates equals V₀.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Verify Stoke\'s theorem for the field H = (1/r² cos(θ/2)) a_φ + 5r cosθ a_θ A/m in free space for the conical surface defined by θ= 20°, 0 ≤ φ ≤ 2π, 0< r ≤ 5. Let the positive direction of ds be a_r.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Consider a boundary at z= 0 for which H1=2a_x-3a_y+4a_z A/m, μ1= 4 μH/m(z> 0), μ2=7 μH/m(z<0) and K=80a_x A/m at z=0. Find H2.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain how Ampere\'s law conflict with continuity equation and how it is corrected?',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for electric and magnetic fields for a uniform plane wave propagating in a perfect dielectric medium.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A 9.4 GHz uniform plane wave is propagating in a medium with ε_r=2.25, μ_r= 1. If the magnetic field intensity is 7 mA/m and the material is lossless, find i) Velocity of propagation ii) The wavelength iii) Phase constant iv) Intrinsic impedance v) Magnitude of electric field intensity.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A lossless line having an air dielectric has a characteristics impedance of 400 Ω. The line is operating at 200 MHz and Z_L=200- j200 Ω. Find(a) SWR(b) Z_in if the line is 1 m long;(c) the distance from the load to the nearest voltage maximum.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'Differentiate between transmission line and waveguide. A rectangular waveguide having cross-section of 2 cmx 1 cm is filled with a lossless medium characterized by ε= 4ε₀ and μ_r= 1. Calculate the cut-off frequency of the dominant mode.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on antenna and its properties.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2072 Chaitra' => [
        [
            'text' => 'A field vector is given by an expression F = (1/ρ)(a_ρ - a_φ + a_z), transform this vector in cylindrical coordinate system at point(2, 30°, 6).',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Define electric dipole and polarization. The region z<0 contains a dielectric material for which ε_r1= 2.5 while the region z>0 is characterized by ε_r2= 4. Let E1 = 20a_x + 30a_y - 40a_z V/m. Find E2 and D2 in region 2.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State the uniqueness theorem and prove this theorem for Laplace\'s equation.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'A current density in certain region is given by J = 20 sin θ a_r A/m², Find: i) The average value of J over the surface r=1, 0<θ<π/2, 0<φ<π/2. ii) ∇·J at r=1, θ=45°, φ=30°.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Show that ∇×E=0 for static electric field. The region y<0 (Region 1) is air and y>0 (Region 2) has μ_r= 10. If there is a uniform magnetic field H=5a_x+6a_y+ 7a_z A/m in region 1, find B and H in region 2.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Find the amplitude of the displacement current density in a metallic conductor at 60 Hz, if ε=ε₀, μ=μ₀, σ=5.8x10^7 S/m, and J= sin(377t-117.1z) a_x MA/m².',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the phenomena when a plane wave is incident normally on the interface between two different Medias. Derive the expression for reflection and transmission coefficient.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A uniform plane wave in non-magnetic medium has H = 50cos(10^8t + 2z) a_y A/m. Find: i) The direction of Propagation ii) Phase constant β, wavelength λ, velocity v, relative permittivity ε_r, intrinsic impedance η.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Determine the primary constants(R, L, C and G) of a transmission line when the measurement on the line at 1 KHz gave the following results: Z₀=710∠-16°, α= 0.01 neper/m and β=0.035 rad/m.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the modes supported by a rectangular waveguide. Calculate the cut off frequencies of the first four propagating modes for an air filled copper waveguide with dimension a=2.5cm, b= 1.2cm.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on antenna and its types.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2071 Chaitra' => [
        [
            'text' => 'Express the uniform vector field F = 5a_z in (a) cylindrical components (b) spherical components.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for the electric field intensity due to an infinitely long line charge with uniform charge density ρ_L by using Gauss\'s law. A uniform line charge density of 20 nC/m is located at y=3 and z=5. Find E at P(5,6,1).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive an expression to calculate the potential due to a dipole in terms of the dipole moment p of a dipole for which p=3a_x-5a_y+10a_z nC·m is located at the point (1,2,-4). Find E at P.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Assuming that the potential V in the cylindrical coordinate system is function of ρ only, solve the Laplace\'s equation and derive the expression for the capacitance of coaxial capacitor of length L. using the same solution of V. Assume the inner conductor of radius a is at the potential to the conductor of radius b.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State and derive expression for stoke\'s theorem. Evaluate the closed line integral of H from P1(5,4,1) to P2(5,6,1) to P3(0,6,1) to P4(0,4,1) to P1 using straight line segments, if H = 0.1y³ a_x + 0.4x a_z A/m.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Define scalar magnetic potential and show that it satisfies the Laplace\'s equation. Given the vector magnetic potential A = -(x²+y²+z²) a_z Wb/m, calculate the total magnetic flux crossing the surface φ=π/2, 1<ρ<2 m and 0<z<5 m.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'How does ∇×H= J conflict with continuity equation in time varying fields? How is this conflict rectified in such fields?',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for electric and magnetic fields for a uniform plane wave propagating in a perfect dielectric space.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A lossless dielectric material has σ=0, μ_r=1, ε_r=4. An electromagnetic wave has magnetic field expressed as H = -0.1cos(ωt-z) a_x + 0.5sin(ωt- z) a_y A/m. Find: a) Angular frequency(ω) b) Wave impedance(η) c) E.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Consider a two-wire 40 Ω line(Z₀= 40Ω) connecting the source of 80 V, 400 kHz with series resistance 10 Ω to the load of Z_L=60Ω. The line is 75 m long and the velocity on the line is 2.5x10^8 m/s. Find the voltage V_in at input end and V_L at output end of the transmission line.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'Why does a hollow rectangular waveguide not support TEM mode? A rectangular air-filled waveguide has a cross-section of 45x90 mm. Find the cut-off frequencies of the first four propagating modes.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on antenna and its types.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2070 Chaitra' => [
        [
            'text' => 'Transform the Vector F = y a_x + x a_y + z a_z, into cylindrical co-ordinates at a point P(2,45°,5).',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Along the z-axis there is a uniform line of charge with ρ_L= 4n C/m and in the x= 1 plane there is a surface charge with ρ_s= 20 nC/m². Find the Electric Flux Density at (0.5,0,0).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define Uniqueness theorem. Assuming that the potential V in the cylindrical coordinate system is the function of \'ρ\' only, solve the Laplacian Equation by integration method and derive the expression for the Capacitance of the co-axial capacitor using the same solution of V.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define Electric Dipole and Polarization. Consider the region y< 0 be composed of a uniform dielectric material for which the relative permittivity(ε_r) is 3.2 while the region y> 0 is characterized by ε_r=2. Let the flux density in region 1 be D1=-30a_x+50a_y+70a_z nC/m². Find: a) Magnitude of Flux density and Electric fields intensity at region 2. b) Polarization(P) in region 1 and region 2.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State Ampere\'s circuital law and stoke\'s theorem. Derive an expression for magnetic field intensity(H) due to infinite current carrying filament using Biot Savart\'s Law.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Differentiate between scalar and vector magnetic potential. The magnetic field intensity in a certain region of space is given by H = (x+z) a_x + z² a_z A/m. Find the total current passing through the surface z= 4, 1< x< 2, 3< y< 5, in the a_z direction.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State Faraday\'s law and correct the equation ∇×E= 0 for time varying field with necessary derivation. Also modify the equation ∇×H=J with necessary derivations for time varying field.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive an expression for input intrinsic impedance using the concept of reflection of uniform plane waves.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Find the amplitude of displacement current density inside a typical metallic conductor where f= 1KHz, σ= 5x10^7 mho/m, ε_r= 1 and the conduction current density is J= 10^7 sin(6283t-4442z) a_y A/m².',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'Write all the Maxwell equations for the time varying field point form as well as integral form.',
            'chapter' => 'Maxwell\'s Equations',
            'has_diagram' => false
        ],
        [
            'text' => 'A lossless transmission line with Z₀= 50 Ω with length 1.5 m connects a voltage V_s= 60∠0° V source to a terminal load of Z_L=(50+j50) Ω. If the operating frequency f= 100 MHz, generator impedance Z_g= 50 Ω and speed of wave equal to the speed of the light. Find the distance of the first voltage maximum from the load. What is the power delivered to the load?',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'What are the techniques that can be taken to match the transmission line with mismatched load? Explain any one.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on: a) Modes in rectangular wave guide b) Antenna and its types.',
            'chapter' => 'Waveguides, Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2069 Chaitra' => [
        [
            'text' => 'Given a point P(-3,4,5), express the vector that extends from P to Q(2, 0,-1) in(a) Rectangular coordinates(b) Cylindrical coordinates(c) Spherical coordinates.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Verify the divergence theorem(evaluate both sides of the divergence theorem) for the function F = r² sinθ a_r + 3r cosθ a_θ + r sinθ cosφ a_φ, over the surface of quarter of a hemisphere defined by: 0< r≤3, 0< θ≤ π/2, 0< φ≤π/2.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Given the potential field V= 100x²/(x²+4) volts in free space: a) Find D at the surface, z=0 b) Show that the z=0 surface is an equipotential surface c) Assume that the z=0 surface is a conductor and find the total charge on that portion of the conductor defined by 0<x<2, -3< y< 0.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State the uniqueness theorem and prove this theorem using Poisson\'s equation.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State Ampere\'s circuital law with relevant examples. The magnetic field intensity is given in a certain region of space by H = (x/z²) a_x + (y/z) a_y A/m. Find the total current passing through the surface z=4, 1< x< 2, 3< y< 5, in the a_z direction.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define scalar and vector magnetic potential. Derive the expression for the magnetic field intensity at a point due to an infinite filament carrying a dc current I, placed on the z-axis, using the concept of vector magnetic potential.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define displacement current. Assume that dry soil has conductivity equal to 10⁻⁴ S/m, ε_r= 3, and μ= μ₀. Determine the frequency at which the ratio of the magnitudes of the conduction current density and displacement current density is unity.',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for electric field for a uniform plane wave propagating in a free space.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Write Poynting\'s Theorem. An EM wave travels in free space with the electric field component E=(10a_x+5a_y) cos(ωt+2y-4z) [V/m]. Find(a) ω and λ (b) the magnetic field component (c) the time average power in the wave.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A lossless transmission line with Z₀= 50Ω is 30m long and operates at 1MHz. The line is terminated with a load Z_L=(60+j40) Ω. If velocity(v)= 3x10^8m/s on the line. Find(a) the reflection coefficient, (b) the standing wave ratio and the input impedance.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the modes supported by Rectangular waveguide. Define cutoff frequency and dominant mode for rectangular waveguide.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on: a) Antenna types and properties b) Quarter wave transformer.',
            'chapter' => 'Waveguides, Transmission Lines',
            'has_diagram' => false
        ]
    ],
    
    '2068 Chaitra' => [
        [
            'text' => 'Transform vector F = ρ sinφ a_φ at point(1, 45°, 2) in cylindrical co-ordinate system to a vector in spherical co-ordinate system.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'The region X<0 is composed of a uniform dielectric material for which ε_r1= 3.2, while the region X>0 is characterized by ε_r2= 2. The electric flux density at region X<0 is D1=-30 a_x+ 50 a_y+ 70 a_z nC/m² then find polarization(P) and electric field intensity(E) in both regions.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define an electric dipole. Derive expression for electric field because of electric dipole at a distance far that is large compared to the separation between charges in the dipole.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Define Relaxation Time Constant and derive an expression for the continuity equation.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the equations for magnetic field intensity for infinite long coaxial transmission line carrying direct current I and return current -I in positive and negative Z-direction respectively.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'A current carrying square loop with vertices A(0,1,2), B(0,2,2), C(0,2,-2), D(0,1,-2) is carrying a dc current of 20A in the direction along A-B-C-D-A. Find magnetic field intensity H at centre of the current carrying loop.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Elaborate the significance of a curl of a vector field.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expressions for the electric field E and magnetic field H for the wave propagation in free space.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'The phasor component of electric field intensity in free space is given by E_s = (100∠45°) e^(-j5z) a_x V/m. Determine frequency of the wave, wave impedance, H_s, and magnitude of E at z= 10mm, t= 20μs.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on: (a) Loss tangent (b) Skin depth and (c) Displacement current density.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain impedance matching using both quarter wave transformer and single stub methods.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain in brief the modes supported by rectangular waveguides. Consider a rectangular waveguide with ε_r=2, μ= μ₀ with dimensions a= 1.07cm, b= 0.43cm. Find the cut off frequency for TM11 mode and the dominant mode.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ],
        [
            'text' => 'Define antenna and list different types of antenna.',
            'chapter' => 'Antennas',
            'has_diagram' => false
        ]
    ],
    
    '2067 Mangsir' => [
        [
            'text' => 'Transform A_c = x a_x + x a_y at point(1,2,3) in Cartesian co-ordinate system to A_cy in cylindrical co ordinate system.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'Use Gauss\'s law to determine electric field intensity because of infinite line charge with uniform charge density ρ_L.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Find potential at a point P(2,3,3) due to a 1nC charge located at Q(3,4,4), 1nC/m uniform line charge located at x=2, y= 1 if potential at(3,4,5) is 0V.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'For a given co-axial cable with inner conductor of radius \'a\', outer conductor with inner radius \'b\' and outer radius \'c\' with current in the inner conductor \'I\' and current in the outer conductor \'-I\', determine ∇ × H for 0 ≤ r ≤ a, a ≤ r ≤ b, b ≤ r ≤ c.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive expressions for α and β if medium is characterized by permittivity ε, permeability μ and conductivity σ.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A uniform plane wave propagating in free space has E= 2 cos(10^7 πt-βz) a_x, determine β and H.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'A z-polarized uniform plane wave with frequency 100MHz propagates in air in the positive x-direction and impinges normally on a perfectly conducting plane at x= 0. Assuming the amplitude of the electric field vector to be 3mV/m, determine phasor and instantaneous expressions for a) Incident electric and magnetic field vectors b) Reflected electric and magnetic field vectors.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'Derive the expression for input impedance of a transmission line with characteristic impedance Z₀, excited by source V with source impedance Z_g and terminated in load Z_L.',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ],
        [
            'text' => 'Define transverse magnetic mode. A rectangular waveguide has dimensions, a= 5cm and b= 3cm, The medium within the waveguide has ε_r=1, μ_r=1; σ=0 and conducting walls of wave guide are perfect conductors. Determine the cutoff frequency for TM11 mode.',
            'chapter' => 'Waveguides',
            'has_diagram' => false
        ]
    ],
    
    '2067 Shrawan' => [
        [
            'text' => 'a) Transform a point(x, y, z) in rectangular co-ordinates to a point(r, θ,φ) in spherical co-ordinate and vice-versa. b) Transform the vector F = y a_x - x a_y + z a_z into cylindrical co-ordinates.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'State Coulomb\'s law with an example. Derive an expression for electric field intensity (+E) at a point due to an infinite line charge having uniform charge density ρ_L. An infinitely long uniform line charge is located at y= 3, z=5. If ρ_L= 30 nC/m, find E at(i) P_A(0,0,0)(ii) P_B(0,6, 1)(iii) P_C(5, 6, 1).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State and explain Gauss\'s law. Define divergence and write down its physical significance as it applies to electric fields. Consider a co-axial cable of length 50cm having inner radius of 1mm and an outer radius of 4mm with the space between the conductors filled with air. Total charge on the inner conductor is 30 nC. Find(i) the charge density on the inner conductor and outer conductor(ii) E (iii) D.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Deduce how potential gradient can be used to determine the electric field intensity. What do you understand by electric dipole moment? Given the potential field V=2x²y- 5z and a point P(-4, 3, 6), find at P(i) V(ii) E (iii) a_E(iv) D(v) ρ_v.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain how the conductivity of metals and semi-conductor changes with increase in temperature. Derive the point form of continuity equation.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State Bio-Savart\'s law. Derive the equation for magnetic field intensity due to a co-axial cable carrying a uniformly distributed dc current I in the inner conductor and -I in the outer conductor. Given H = (3r²/ sin θ) a_r + 5r cos θ a_θ A/m in free space. Find the total current in the a_φ direction through the conical surface θ=20°, 0< φ<2π, 0<r< 5.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain how displacement current differs from conduction current. What do you understand by the term magnetization? What does the relative permeability of a substance indicate?',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'A 9.4 GHz uniform plane wave is propagating in polyethylene(ε_r= 2.25, μ_r= 1). If the magnitude of the magnetic field intensity is 7 mA/m and the material is lossless, find(i) velocity of propagation(v)(ii) the wavelength(λ)(iii) the phase constant(β) (iv) the intrinsic impedance(η)(v) the magnitude of electric field intensity.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'What is a distortionless transmission line? Why are telephone lines required to be distortionless? A radar dish antenna is to be covered with a transparent plastic(ε_r= 2.25, μ_r=1) to protect it from weather without any reflection of the signal back to the antenna. What should be the minimum thickness of the plastic cover if the operating frequency of antenna is 10 GHz?',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ]
    ],
    
    '2067 Chaitra' => [
        [
            'text' => 'Transform a point(x, y, z) in rectangular co-ordinates to a point(r, θ,φ) in spherical co-ordinate and vice-versa. Transform the vector F = y a_x - x a_y + z a_z into cylindrical co-ordinates.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false
        ],
        [
            'text' => 'State Coulomb\'s law with an example. Derive an expression for electric field intensity (+E) at a point due to an infinite line charge having uniform charge density ρ_L. An infinitely long uniform line charge is located at y= 3, z=5. If ρ_L= 30 nC/m, find E at(i) P_A(0,0,0)(ii) P_B(0,6, 1)(iii) P_C(5, 6, 1).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State and explain Gauss\'s law. Define divergence and write down its physical significance as it applies to electric fields. Consider a co-axial cable of length 50cm having inner radius of 1mm and an outer radius of 4mm with the space between the conductors filled with air. Total charge on the inner conductor is 30 nC. Find(i) the charge density on the inner conductor and outer conductor(ii) E (iii) D.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Deduce how potential gradient can be used to determine the electric field intensity. What do you understand by electric dipole moment? Given the potential field V=2x²y- 5z and a point P(-4, 3, 6), find at P(i) V(ii) E (iii) a_E(iv) D(v) ρ_v.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain how the conductivity of metals and semi-conductor changes with increase in temperature. Derive the point form of continuity equation.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'State Bio-Savart\'s law. Derive the equation for magnetic field intensity due to a co-axial cable carrying a uniformly distributed dc current I in the inner conductor and -I in the outer conductor. Given H = (3r²/ sin θ) a_r + 5r cos θ a_θ A/m in free space. Find the total current in the a_φ direction through the conical surface θ=20°, 0< φ<2π, 0<r< 5.',
            'chapter' => 'Magnetostatics',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain how displacement current differs from conduction current. What do you understand by the term magnetization? What does the relative permeability of a substance indicate?',
            'chapter' => 'Time Varying Fields',
            'has_diagram' => false
        ],
        [
            'text' => 'A 9.4 GHz uniform plane wave is propagating in polyethylene(ε_r= 2.25, μ_r= 1). If the magnitude of the magnetic field intensity is 7 mA/m and the material is lossless, find(i) velocity of propagation(v)(ii) the wavelength(λ)(iii) the phase constant(β) (iv) the intrinsic impedance(η)(v) the magnitude of electric field intensity.',
            'chapter' => 'Plane Waves',
            'has_diagram' => false
        ],
        [
            'text' => 'What is a distortionless transmission line? Why are telephone lines required to be distortionless? A radar dish antenna is to be covered with a transparent plastic(ε_r= 2.25, μ_r=1) to protect it from weather without any reflection of the signal back to the antenna. What should be the minimum thickness of the plastic cover if the operating frequency of antenna is 10 GHz?',
            'chapter' => 'Transmission Lines',
            'has_diagram' => false
        ]
    ]
];

// Include the viewer module
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/pyq_collection_viewer.php';
?>