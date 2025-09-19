<?php
// Define subject title
$subject_title = "Electromagnetics Previous Year Questions with Solutions";

// Define questions array organized by year
$questions_by_year = [
    '2076 Chaitra' => [
        [
            'text' => 'Transform the vector A=4ax-2ay-4az into spherical coordinates at point P(x=-2, y=-3, z=4).',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false,
            'solution' => 'To transform vector A=4ax-2ay-4az to spherical coordinates at P(-2,-3,4):<br><br>' .
                         'First, find spherical coordinates of P:<br>' .
                         'r = √(x²+y²+z²) = √((-2)²+(-3)²+4²) = √(4+9+16) = √29 ≈ 5.385<br>' .
                         'θ = cos⁻¹(z/r) = cos⁻¹(4/5.385) = cos⁻¹(0.743) ≈ 42.03°<br>' .
                         'φ = tan⁻¹(y/x) = tan⁻¹((-3)/(-2)) = tan⁻¹(1.5) ≈ 56.31° (in 3rd quadrant, so φ = 180° + 56.31° = 236.31°)<br><br>' .
                         'Transformation matrix from Cartesian to spherical:<br>' .
                         'Ar = Ax·sinθ·cosφ + Ay·sinθ·sinφ + Az·cosθ<br>' .
                         'Aθ = Ax·cosθ·cosφ + Ay·cosθ·sinφ - Az·sinθ<br>' .
                         'Aφ = -Ax·sinφ + Ay·cosφ<br><br>' .
                         'Substituting values:<br>' .
                         'Ar = 4·sin(42.03°)·cos(236.31°) - 2·sin(42.03°)·sin(236.31°) - 4·cos(42.03°)<br>' .
                         'Ar = 4·(0.669)·(-0.555) - 2·(0.669)·(-0.832) - 4·(0.743)<br>' .
                         'Ar = -1.485 + 1.114 - 2.972 = -3.343<br><br>' .
                         'Aθ = 4·cos(42.03°)·cos(236.31°) - 2·cos(42.03°)·sin(236.31°) - 4·sin(42.03°)<br>' .
                         'Aθ = 4·(0.743)·(-0.555) - 2·(0.743)·(-0.832) - 4·(0.669)<br>' .
                         'Aθ = -1.649 + 1.237 - 2.676 = -3.088<br><br>' .
                         'Aφ = -4·sin(236.31°) - 2·cos(236.31°)<br>' .
                         'Aφ = -4·(-0.832) - 2·(-0.555) = 3.328 + 1.110 = 4.438<br><br>' .
                         'Therefore, A in spherical coordinates:<br>' .
                         'A = -3.343ar - 3.088aθ + 4.438aφ',
            'solution_has_diagram' => false,
            'notes' => 'Vector transformation between coordinate systems depends on the location where the vector is defined. The transformation matrix elements are functions of the spherical angles θ and φ at the point of interest.',
            'formulas' => [
                'r = √(x² + y² + z²)',
                'θ = cos⁻¹(z/r)',
                'φ = tan⁻¹(y/x) (with quadrant adjustment)',
                'Ar = Ax·sinθ·cosφ + Ay·sinθ·sinφ + Az·cosθ',
                'Aθ = Ax·cosθ·cosφ + Ay·cosθ·sinφ - Az·sinθ',
                'Aφ = -Ax·sinφ + Ay·cosφ'
            ]
        ],
        [
            'text' => 'An infinite uniform charge ρL=2nC/m lies along the x-axis in free space, while point charges of 8nC each are located at (0,0,1) and (0,0,-1). Find E at (2,3,-4).',
            'chapter' => 'Electric Field',
            'has_diagram' => false,
            'solution' => 'To find total electric field at P(2,3,-4), use superposition:<br><br>' .
                         '<strong>1. Field due to line charge on x-axis:</strong><br>' .
                         'Perpendicular distance from x-axis: ρ = √(y²+z²) = √(3²+(-4)²) = √25 = 5m<br>' .
                         'Unit vector in radial direction from x-axis: aρ = (3ay - 4az)/5 = 0.6ay - 0.8az<br>' .
                         'E_line = (ρL/(2πε₀ρ))·aρ = (2×10⁻⁹/(2π×8.854×10⁻¹²×5))·(0.6ay - 0.8az)<br>' .
                         'E_line = (2×10⁻⁹/2.78×10⁻¹⁰)·(0.6ay - 0.8az) = 7.194·(0.6ay - 0.8az)<br>' .
                         'E_line = 4.316ay - 5.755az V/m<br><br>' .
                         '<strong>2. Field due to point charge at (0,0,1):</strong><br>' .
                         'Vector from (0,0,1) to P(2,3,-4): R1 = 2ax + 3ay - 5az<br>' .
                         'Distance: |R1| = √(2²+3²+(-5)²) = √38 ≈ 6.164m<br>' .
                         'Unit vector: aR1 = (2ax + 3ay - 5az)/6.164 = 0.324ax + 0.487ay - 0.811az<br>' .
                         'E_point1 = (1/(4πε₀))·(q/R1²)·aR1 = (9×10⁹)·(8×10⁻⁹/38)·(0.324ax + 0.487ay - 0.811az)<br>' .
                         'E_point1 = 1.895·(0.324ax + 0.487ay - 0.811az) = 0.614ax + 0.923ay - 1.537az V/m<br><br>' .
                         '<strong>3. Field due to point charge at (0,0,-1):</strong><br>' .
                         'Vector from (0,0,-1) to P(2,3,-4): R2 = 2ax + 3ay - 3az<br>' .
                         'Distance: |R2| = √(2²+3²+(-3)²) = √22 ≈ 4.690m<br>' .
                         'Unit vector: aR2 = (2ax + 3ay - 3az)/4.690 = 0.426ax + 0.640ay - 0.640az<br>' .
                         'E_point2 = (1/(4πε₀))·(q/R2²)·aR2 = (9×10⁹)·(8×10⁻⁹/22)·(0.426ax + 0.640ay - 0.640az)<br>' .
                         'E_point2 = 3.273·(0.426ax + 0.640ay - 0.640az) = 1.394ax + 2.095ay - 2.095az V/m<br><br>' .
                         '<strong>Total field:</strong><br>' .
                         'E_total = E_line + E_point1 + E_point2<br>' .
                         'E_total = (0.614 + 1.394)ax + (4.316 + 0.923 + 2.095)ay + (-5.755 - 1.537 - 2.095)az<br>' .
                         'E_total = 2.008ax + 7.334ay - 9.387az V/m',
            'solution_has_diagram' => false,
            'notes' => 'When calculating electric fields from multiple sources, use the principle of superposition. For line charges, the field is radial from the line and decreases as 1/ρ. For point charges, the field follows the inverse square law. Always calculate the distance and direction vectors carefully.',
            'formulas' => [
                'Line charge: E = (ρL/(2πε₀ρ))·aρ',
                'Point charge: E = (1/(4πε₀))·(q/r²)·ar',
                'Superposition: E_total = ΣE_i'
            ]
        ],
        [
            'text' => 'Define uniqueness theorem. Find the energy stored in free space for the region 2mm < r < 3mm, 0 < θ < 90°, 0 < φ < 90°, given the potential field (a) V=200V, and (b) V=300cosθ/r².',
            'chapter' => 'Electrostatics',
            'has_diagram' => false,
            'solution' => '<strong>Uniqueness Theorem:</strong><br>' .
                         'The uniqueness theorem states that for a given set of boundary conditions, there is only one solution to Laplace\'s or Poisson\'s equation. This means that if we find any solution that satisfies both the differential equation and the boundary conditions, it must be the correct and only solution.<br><br>' .
                         '<strong>Energy stored for case (a) V=200V:</strong><br>' .
                         'Since V is constant, E = -∇V = 0 everywhere.<br>' .
                         'Therefore, energy stored W = 0.<br><br>' .
                         '<strong>Energy stored for case (b) V=300cosθ/r²:</strong><br>' .
                         'First, find electric field E = -∇V<br>' .
                         'In spherical coordinates, for V = f(r,θ):<br>' .
                         'Er = -∂V/∂r = -∂(300cosθ/r²)/∂r = 600cosθ/r³<br>' .
                         'Eθ = -(1/r)·∂V/∂θ = -(1/r)·∂(300cosθ/r²)/∂θ = (300sinθ)/r³<br>' .
                         'Eφ = 0<br>' .
                         'So E = (600cosθ/r³)ar + (300sinθ/r³)aθ V/m<br><br>' .
                         'Energy density w = (1/2)ε₀|E|² = (1/2)ε₀(Er² + Eθ²)<br>' .
                         'w = (1/2)ε₀[(600cosθ/r³)² + (300sinθ/r³)²] = (1/2)ε₀[360000cos²θ/r⁶ + 90000sin²θ/r⁶]<br>' .
                         'w = (1/2)ε₀(90000/r⁶)(4cos²θ + sin²θ) = (45000ε₀/r⁶)(4cos²θ + sin²θ)<br><br>' .
                         'Total energy W = ∫∫∫w·dV over the region<br>' .
                         'dV = r²sinθ dr dθ dφ<br>' .
                         'W = ∫(φ=0 to π/2) ∫(θ=0 to π/2) ∫(r=0.002 to 0.003) (45000ε₀/r⁶)(4cos²θ + sin²θ)·r²sinθ dr dθ dφ<br>' .
                         'W = 45000ε₀ ∫(0 to π/2)dφ ∫(0 to π/2)(4cos²θ + sin²θ)sinθ dθ ∫(0.002 to 0.003)(1/r⁴) dr<br><br>' .
                         'Solving each integral:<br>' .
                         '∫(0 to π/2)dφ = π/2<br>' .
                         '∫(0 to π/2)(4cos²θ + sin²θ)sinθ dθ = let u = cosθ, du = -sinθ dθ<br>' .
                         'When θ=0, u=1; θ=π/2, u=0<br>' .
                         '∫(1 to 0)(4u² + (1-u²))(-du) = ∫(0 to 1)(3u² + 1)du = [u³ + u](0 to 1) = 1 + 1 = 2<br>' .
                         '∫(0.002 to 0.003)(1/r⁴) dr = [-1/(3r³)](0.002 to 0.003) = -1/(3·(0.003)³) + 1/(3·(0.002)³)<br>' .
                         '= -1/(8.1×10⁻⁸) + 1/(2.4×10⁻⁸) = -1.235×10⁷ + 4.167×10⁷ = 2.932×10⁷<br><br>' .
                         'W = 45000·(8.854×10⁻¹²)·(π/2)·2·(2.932×10⁷)<br>' .
                         'W = 45000·8.854×10⁻¹²·3.1416·2.932×10⁷<br>' .
                         'W ≈ 3.67×10⁻² J = 36.7 mJ',
            'solution_has_diagram' => false,
            'notes' => 'The uniqueness theorem is fundamental in electrostatics as it guarantees that solutions to boundary value problems are unique. For energy calculation, remember that the energy density is (1/2)ε₀|E|², and integrate over the volume. When V is constant, E=0 and no energy is stored.',
            'formulas' => [
                'Uniqueness Theorem: Solution to Laplace\'s/Poisson\'s equation with given boundary conditions is unique',
                'Electric field: E = -∇V',
                'Energy density: w = (1/2)ε₀|E|²',
                'Total energy: W = ∫∫∫w dV'
            ]
        ],
        [
            'text' => 'Using the continuity equation, elaborate the concept of Relaxation Time Constant (RTC) with necessary derivations. At t=10ms, calculate the amount of current passing through the surface r=2m, 0<θ<π, 0<φ<2π if the divergence of surface current density is equal to the negative rate of change of volume charge density.',
            'chapter' => 'Current and Conductors',
            'has_diagram' => false,
            'solution' => '<strong>Relaxation Time Constant (RTC):</strong><br>' .
                         'The relaxation time constant describes how quickly excess charge in a conductor dissipates. From Ohm\'s law and continuity equation:<br>' .
                         'J = σE (Ohm\'s law)<br>' .
                         '∇·J = -∂ρv/∂t (Continuity equation)<br>' .
                         'Substituting: ∇·(σE) = -∂ρv/∂t<br>' .
                         'Assuming homogeneous conductor (σ constant): σ∇·E = -∂ρv/∂t<br>' .
                         'From Gauss\'s law: ∇·E = ρv/ε<br>' .
                         'So: σ(ρv/ε) = -∂ρv/∂t<br>' .
                         'Rearranging: ∂ρv/∂t + (σ/ε)ρv = 0<br>' .
                         'This is a first-order differential equation with solution: ρv(t) = ρv(0)e^(-t/τ)<br>' .
                         'Where τ = ε/σ is the relaxation time constant.<br>' .
                         'This represents the time for charge density to decay to 1/e (≈37%) of its initial value.<br><br>' .
                         '<strong>Current calculation:</strong><br>' .
                         'Given: ∇·J = -∂ρv/∂t<br>' .
                         'From above: ∂ρv/∂t = -(σ/ε)ρv<br>' .
                         'So: ∇·J = (σ/ε)ρv<br>' .
                         'By divergence theorem: ∫∫J·dS = ∫∫∫(∇·J)dV = ∫∫∫(σ/ε)ρv dV<br>' .
                         'Total current I = (σ/ε)Q, where Q is total charge in volume.<br>' .
                         'But Q = ∫∫∫ρv dV, and from continuity, Q(t) = Q(0)e^(-t/τ)<br>' .
                         'At t=10ms, I = (σ/ε)Q(0)e^(-0.01/τ)<br>' .
                         'However, without specific values for σ, ε, and initial charge, we cannot compute a numerical value.<br>' .
                         'The problem seems to be missing some parameters for a complete numerical solution.',
            'solution_has_diagram' => false,
            'notes' => 'The relaxation time constant τ = ε/σ is a fundamental property of materials. For good conductors like copper, τ is very small (≈10⁻¹⁹ s), meaning charge dissipates almost instantly. For poor conductors or dielectrics, τ can be much larger. The derivation combines Ohm\'s law, continuity equation, and Gauss\'s law.',
            'formulas' => [
                'Ohm\'s law: J = σE',
                'Continuity equation: ∇·J = -∂ρv/∂t',
                'Gauss\'s law: ∇·E = ρv/ε',
                'Relaxation time: τ = ε/σ',
                'Charge decay: ρv(t) = ρv(0)e^(-t/τ)'
            ]
        ],
        [
            'text' => 'State and prove Stokes theorem. Calculate the value of the vector current density in cylindrical coordinates at P(ρ=1.5, φ=90°, z=0.5) if J = 2cos(0.2φ)aρ A/m².',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false,
            'solution' => '<strong>Stokes Theorem:</strong><br>' .
                         'Stokes theorem states that the line integral of a vector field around a closed path is equal to the surface integral of the curl of that vector field over any surface bounded by the path:<br>' .
                         '∮C F·dl = ∫∫S (∇×F)·dS<br><br>' .
                         '<strong>Proof:</strong><br>' .
                         'Consider a surface S divided into infinitesimal elements dS. For each element, by definition of curl:<br>' .
                         '(∇×F)·dS ≈ ∮∂S F·dl<br>' .
                         'where ∂S is the boundary of dS.<br>' .
                         'Summing over all elements:<br>' .
                         '∫∫S (∇×F)·dS ≈ Σ∮∂S F·dl<br>' .
                         'The line integrals on internal boundaries cancel out (each internal edge is traversed twice in opposite directions), leaving only the line integral around the outer boundary C:<br>' .
                         '∫∫S (∇×F)·dS = ∮C F·dl<br><br>' .
                         '<strong>Current density calculation:</strong><br>' .
                         'Given J = 2cos(0.2φ)aρ A/m²<br>' .
                         'At point P(ρ=1.5, φ=90°=π/2 rad, z=0.5)<br>' .
                         'J = 2cos(0.2×π/2)aρ = 2cos(0.1π)aρ = 2cos(18°)aρ<br>' .
                         'J = 2×0.9511aρ = 1.9022aρ A/m²<br>' .
                         'So the vector current density at P is 1.9022aρ A/m².',
            'solution_has_diagram' => false,
            'notes' => 'Stokes theorem is a fundamental theorem in vector calculus that relates line integrals to surface integrals. It\'s particularly useful in electromagnetics for transforming between integral forms of Maxwell\'s equations. For the current density calculation, simply substitute the given coordinates into the expression.',
            'formulas' => [
                'Stokes Theorem: ∮C F·dl = ∫∫S (∇×F)·dS',
                'Curl in cylindrical coordinates: ∇×F = (1/ρ)[∂(ρFφ)/∂ρ - ∂Fρ/∂φ]az + ...'
            ]
        ]
    ],
    
    '2075 Chaitra' => [
        [
            'text' => 'Find the vector that extends from A(-3,-4,6) to B(-5,2,8) in cylindrical coordinate system.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false,
            'solution' => 'First, find the vector in Cartesian coordinates:<br>' .
                         'Vector AB = B - A = (-5-(-3))ax + (2-(-4))ay + (8-6)az<br>' .
                         'AB = -2ax + 6ay + 2az<br><br>' .
                         'Now transform to cylindrical coordinates at point A(-3,-4,6):<br>' .
                         'ρ = √(x²+y²) = √((-3)²+(-4)²) = √25 = 5<br>' .
                         'φ = tan⁻¹(y/x) = tan⁻¹((-4)/(-3)) = tan⁻¹(4/3) ≈ 53.13° (in 3rd quadrant, so φ = 180° + 53.13° = 233.13°)<br>' .
                         'z = 6<br><br>' .
                         'Transformation from Cartesian to cylindrical:<br>' .
                         'Aρ = Ax·cosφ + Ay·sinφ<br>' .
                         'Aφ = -Ax·sinφ + Ay·cosφ<br>' .
                         'Az = Az<br><br>' .
                         'Substituting φ = 233.13° (cosφ ≈ -0.6, sinφ ≈ -0.8):<br>' .
                         'Aρ = (-2)·(-0.6) + (6)·(-0.8) = 1.2 - 4.8 = -3.6<br>' .
                         'Aφ = -(-2)·(-0.8) + (6)·(-0.6) = -1.6 - 3.6 = -5.2<br>' .
                         'Az = 2<br><br>' .
                         'Therefore, vector AB in cylindrical coordinates:<br>' .
                         'AB = -3.6aρ - 5.2aφ + 2az',
            'solution_has_diagram' => false,
            'notes' => 'When transforming vectors between coordinate systems, the transformation depends on the location (point A in this case). The cylindrical coordinate unit vectors aρ and aφ depend on the angle φ at the point of interest.',
            'formulas' => [
                'Vector difference: AB = B - A',
                'Cylindrical coordinates: ρ = √(x²+y²), φ = tan⁻¹(y/x), z = z',
                'Vector transformation: Aρ = Ax·cosφ + Ay·sinφ, Aφ = -Ax·sinφ + Ay·cosφ, Az = Az'
            ]
        ],
        [
            'text' => 'A point charge 12nC is located at the origin. A line charge ρL=80nC/m is located in the y=0 plane at x=-1 and z=-5m. Find electric flux density at P(0,-3,2).',
            'chapter' => 'Electric Field',
            'has_diagram' => false,
            'solution' => 'To find total electric flux density D at P(0,-3,2), use superposition:<br><br>' .
                         '<strong>1. Due to point charge at origin:</strong><br>' .
                         'Vector from origin to P: R = 0ax - 3ay + 2az<br>' .
                         'Distance: |R| = √(0²+(-3)²+2²) = √13 ≈ 3.606m<br>' .
                         'Unit vector: aR = (0ax - 3ay + 2az)/3.606 = -0.832ay + 0.555az<br>' .
                         'D_point = ε₀E = (q/(4πR²))·aR = (12×10⁻⁹/(4π×13))·(-0.832ay + 0.555az)<br>' .
                         'D_point = (7.35×10⁻¹¹)·(-0.832ay + 0.555az) = -6.11×10⁻¹¹ay + 4.08×10⁻¹¹az C/m²<br><br>' .
                         '<strong>2. Due to line charge at x=-1, z=-5 (y=0 plane):</strong><br>' .
                         'The line charge is parallel to y-axis at x=-1, z=-5.<br>' .
                         'Vector from line to P: R_line = (0-(-1))ax + (-3-0)ay + (2-(-5))az = ax - 3ay + 7az<br>' .
                         'Perpendicular distance: ρ = √(1²+7²) = √50 ≈ 7.071m (distance in xz-plane)<br>' .
                         'Unit vector in radial direction: aρ = (ax + 7az)/7.071 = 0.141ax + 0.990az<br>' .
                         'D_line = ε₀E = (ρL/(2πρ))·aρ = (80×10⁻⁹/(2π×7.071))·(0.141ax + 0.990az)<br>' .
                         'D_line = (1.80×10⁻⁹)·(0.141ax + 0.990az) = 2.54×10⁻¹⁰ax + 1.78×10⁻⁹az C/m²<br><br>' .
                         '<strong>Total D:</strong><br>' .
                         'D_total = D_line + D_point = 2.54×10⁻¹⁰ax - 6.11×10⁻¹¹ay + (4.08×10⁻¹¹ + 1.78×10⁻⁹)az<br>' .
                         'D_total = 2.54×10⁻¹⁰ax - 6.11×10⁻¹¹ay + 1.82×10⁻⁹az C/m²<br>' .
                         'D_total ≈ 0.254ax - 0.061ay + 1.82az nC/m²',
            'solution_has_diagram' => false,
            'notes' => 'Electric flux density D is related to electric field by D = ε₀E in free space. Use superposition for multiple sources. For line charges, the field is radial from the line and proportional to 1/ρ. Calculate distances and directions carefully.',
            'formulas' => [
                'Point charge: D = (q/(4πr²))·ar',
                'Line charge: D = (ρL/(2πρ))·aρ',
                'Superposition: D_total = ΣD_i'
            ]
        ],
        [
            'text' => 'The region z<0 is composed of a uniform dielectric material for which εr=3.2, while the region z>0 has εr=2. Let D1=-30ax+50ay+70az nC/m². Find: (a) DN1 (Normal component of D in region 1), (b) Polarization P1, (c) Normal component of E in region 2, (d) Tangential component of E in region 2.',
            'chapter' => 'Dielectrics',
            'has_diagram' => false,
            'solution' => 'Given D1 = -30ax + 50ay + 70az nC/m², εr1 = 3.2 (z<0), εr2 = 2 (z>0)<br><br>' .
                         '<strong>(a) DN1 (Normal component of D in region 1):</strong><br>' .
                         'The interface is at z=0, so normal direction is z-direction.<br>' .
                         'DN1 = D1·az = 70 nC/m²<br><br>' .
                         '<strong>(b) Polarization P1:</strong><br>' .
                         'P = D - ε₀E = D - (ε₀/ε)D = D(1 - 1/εr)<br>' .
                         'P1 = D1(1 - 1/εr1) = (-30ax + 50ay + 70az)×10⁻⁹×(1 - 1/3.2)<br>' .
                         'P1 = (-30ax + 50ay + 70az)×10⁻⁹×(2.2/3.2) = (-30ax + 50ay + 70az)×10⁻⁹×0.6875<br>' .
                         'P1 = (-20.625ax + 34.375ay + 48.125az)×10⁻⁹ C/m²<br>' .
                         'P1 = -20.625ax + 34.375ay + 48.125az nC/m²<br><br>' .
                         '<strong>(c) Normal component of E in region 2:</strong><br>' .
                         'Boundary condition: DN1 = DN2 (normal component of D is continuous)<br>' .
                         'So DN2 = 70 nC/m²<br>' .
                         'EN2 = DN2/ε2 = DN2/(εr2ε₀) = 70×10⁻⁹/(2×8.854×10⁻¹²) = 70×10⁻⁹/1.771×10⁻¹¹ = 3.95×10³ V/m<br>' .
                         'EN2 = 3.95 kV/m in z-direction<br><br>' .
                         '<strong>(d) Tangential component of E in region 2:</strong><br>' .
                         'Boundary condition: Et1 = Et2 (tangential component of E is continuous)<br>' .
                         'Et1 = (-30ax + 50ay)×10⁻⁹/ε1 = (-30ax + 50ay)×10⁻⁹/(3.2×8.854×10⁻¹²)<br>' .
                         'Et1 = (-30ax + 50ay)×10⁻⁹/2.833×10⁻¹¹ = (-1.059ax + 1.765ay)×10³ V/m<br>' .
                         'So Et2 = Et1 = -1.059ax + 1.765ay kV/m',
            'solution_has_diagram' => false,
            'notes' => 'At dielectric boundaries, the normal component of D and tangential component of E are continuous. Polarization P represents the dipole moment per unit volume in the dielectric material. Remember to use appropriate units and conversions.',
            'formulas' => [
                'Polarization: P = D - ε₀E = D(1 - 1/εr)',
                'Boundary conditions: DN1 = DN2, Et1 = Et2',
                'Relation: D = εE = εrε₀E'
            ]
        ],
        [
            'text' => 'Derive Poisson\'s and Laplace\'s equations. Assuming the potential V in cylindrical coordinate system is a function of ρ only, solve Laplace\'s equation and derive expression for capacitance of a coaxial capacitor of length L.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false,
            'solution' => '<strong>Derivation of Poisson\'s and Laplace\'s equations:</strong><br>' .
                         'From Gauss\'s law: ∇·D = ρv<br>' .
                         'Since D = εE and E = -∇V:<br>' .
                         '∇·(-ε∇V) = ρv<br>' .
                         'For homogeneous medium (ε constant): -ε∇²V = ρv<br>' .
                         'So: ∇²V = -ρv/ε (Poisson\'s equation)<br>' .
                         'If ρv = 0: ∇²V = 0 (Laplace\'s equation)<br><br>' .
                         '<strong>Solution for cylindrical coordinates (V function of ρ only):</strong><br>' .
                         'In cylindrical coordinates, Laplace\'s equation for V(ρ):<br>' .
                         '(1/ρ)·d/dρ(ρ·dV/dρ) = 0<br>' .
                         'Integrating once: ρ·dV/dρ = A (constant)<br>' .
                         'dV/dρ = A/ρ<br>' .
                         'Integrating again: V = A·ln(ρ) + B<br><br>' .
                         '<strong>Capacitance of coaxial capacitor:</strong><br>' .
                         'For coaxial cable with inner radius a, outer radius b, length L.<br>' .
                         'Boundary conditions: V(a) = V0, V(b) = 0<br>' .
                         'V(a) = A·ln(a) + B = V0<br>' .
                         'V(b) = A·ln(b) + B = 0<br>' .
                         'Subtracting: A·ln(a/b) = V0 ⇒ A = V0/ln(a/b) = -V0/ln(b/a)<br>' .
                         'From V(b) = 0: B = -A·ln(b) = V0·ln(b)/ln(b/a)<br>' .
                         'So V(ρ) = -V0·ln(ρ/b)/ln(b/a)<br><br>' .
                         'Electric field E = -∇V = -dV/dρ aρ = V0/(ρ·ln(b/a)) aρ<br>' .
                         'At ρ = a: E = V0/(a·ln(b/a)) aρ<br>' .
                         'Surface charge density on inner conductor: ρs = D·aρ = εE·aρ = εV0/(a·ln(b/a))<br>' .
                         'Total charge on inner conductor: Q = ρs·2πaL = 2πεLV0/ln(b/a)<br>' .
                         'Capacitance: C = Q/V0 = 2πεL/ln(b/a)',
            'solution_has_diagram' => false,
            'notes' => 'Poisson\'s equation relates potential to charge density, while Laplace\'s equation applies in charge-free regions. For problems with cylindrical symmetry, the solution involves logarithmic functions. The capacitance derivation shows how geometry and material properties affect capacitance.',
            'formulas' => [
                'Poisson\'s equation: ∇²V = -ρv/ε',
                'Laplace\'s equation: ∇²V = 0',
                'Cylindrical Laplace solution: V = A·ln(ρ) + B',
                'Coaxial capacitance: C = 2πεL/ln(b/a)'
            ]
        ],
        [
            'text' => 'Derive the equation for magnetic field intensity in different regions due to a coaxial cable carrying uniformly distributed dc current I in the inner conductor and -I in the outer conductor.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => false,
            'solution' => 'Consider coaxial cable with inner conductor radius a, outer conductor inner radius b, outer radius c. Current I flows in +z direction in inner conductor, -I in outer conductor.<br><br>' .
                         'Use Ampere\'s circuital law: ∮H·dl = I_enc<br>' .
                         'Due to symmetry, H is azimuthal (H = Hφaφ) and depends only on ρ.<br>' .
                         'Amperian path: circle of radius ρ.<br>' .
                         '∮H·dl = Hφ·2πρ = I_enc<br>' .
                         'So Hφ = I_enc/(2πρ)<br><br>' .
                         '<strong>Region 1 (0 < ρ < a):</strong><br>' .
                         'I_enc = I·(πρ²/πa²) = Iρ²/a² (assuming uniform current density)<br>' .
                         'Hφ = (Iρ²/a²)/(2πρ) = Iρ/(2πa²)<br>' .
                         'H = [Iρ/(2πa²)]aφ<br><br>' .
                         '<strong>Region 2 (a < ρ < b):</strong><br>' .
                         'I_enc = I (entire inner conductor)<br>' .
                         'Hφ = I/(2πρ)<br>' .
                         'H = [I/(2πρ)]aφ<br><br>' .
                         '<strong>Region 3 (b < ρ < c):</strong><br>' .
                         'I_enc = I + (-I)·[(π(ρ²-b²))/(π(c²-b²))] = I[1 - (ρ²-b²)/(c²-b²)]<br>' .
                         'Hφ = I[1 - (ρ²-b²)/(c²-b²)]/(2πρ)<br>' .
                         'H = {I[1 - (ρ²-b²)/(c²-b²)]/(2πρ)}aφ<br><br>' .
                         '<strong>Region 4 (ρ > c):</strong><br>' .
                         'I_enc = I + (-I) = 0<br>' .
                         'H = 0',
            'solution_has_diagram' => false,
            'notes' => 'Ampere\'s circuital law is powerful for problems with symmetry. The key is choosing an appropriate Amperian path where H is constant and parallel to the path. Current enclosed depends on the region, and for conductors with finite cross-section, assume uniform current density unless specified otherwise.',
            'formulas' => [
                'Ampere\'s law: ∮H·dl = I_enc',
                'For cylindrical symmetry: H = Hφaφ, ∮H·dl = Hφ·2πρ'
            ]
        ]
    ],
    
    '2074 Chaitra' => [
        [
            'text' => 'A uniform electric field intensity in a certain region is given as E = ya_x - xya_y + 7a_z. Transform this to cylindrical coordinates at point P(2,45°,3).',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false,
            'solution' => 'Given E = ya_x - xya_y + 7a_z at P(2,45°,3) in cylindrical coordinates.<br>' .
                         'First, convert point P to Cartesian to evaluate E:<br>' .
                         'x = ρ·cosφ = 2·cos(45°) = 2·0.707 = 1.414<br>' .
                         'y = ρ·sinφ = 2·sin(45°) = 2·0.707 = 1.414<br>' .
                         'z = 3<br>' .
                         'So E = 1.414a_x - (1.414)(1.414)a_y + 7a_z = 1.414a_x - 2a_y + 7a_z<br><br>' .
                         'Now transform to cylindrical coordinates at P(ρ=2, φ=45°, z=3):<br>' .
                         'Eρ = Ex·cosφ + Ey·sinφ = 1.414·cos(45°) + (-2)·sin(45°) = 1.414·0.707 - 2·0.707 = 1 - 1.414 = -0.414<br>' .
                         'Eφ = -Ex·sinφ + Ey·cosφ = -1.414·sin(45°) + (-2)·cos(45°) = -1.414·0.707 - 2·0.707 = -1 - 1.414 = -2.414<br>' .
                         'Ez = 7<br><br>' .
                         'Therefore, E in cylindrical coordinates:<br>' .
                         'E = -0.414a_ρ - 2.414a_φ + 7a_z V/m',
            'solution_has_diagram' => false,
            'notes' => 'To transform a vector field from Cartesian to cylindrical coordinates at a point, first evaluate the Cartesian components at that point (converting the point coordinates if necessary), then apply the transformation matrix using the angle φ at that point.',
            'formulas' => [
                'Cartesian to cylindrical point: x = ρ·cosφ, y = ρ·sinφ, z = z',
                'Vector transformation: Eρ = Ex·cosφ + Ey·sinφ, Eφ = -Ex·sinφ + Ey·cosφ, Ez = Ez'
            ]
        ],
        [
            'text' => 'A uniform line charge density of 150μC/m lies at x=2, z=-4 and a uniform sheet charge of 25nC/m² is placed at z=5 plane. Find D at point (1,2,4) and convert to spherical coordinate system.',
            'chapter' => 'Electric Field',
            'has_diagram' => false,
            'solution' => 'To find D at P(1,2,4), use superposition:<br><br>' .
                         '<strong>1. Due to line charge at x=2, z=-4:</strong><br>' .
                         'The line is parallel to y-axis at x=2, z=-4.<br>' .
                         'Vector from line to P: R = (1-2)ax + (2-0)ay + (4-(-4))az = -ax + 2ay + 8az<br>' .
                         'Perpendicular distance: ρ = √((-1)²+8²) = √65 ≈ 8.062m<br>' .
                         'Unit vector: aρ = (-ax + 8az)/8.062 = -0.124ax + 0.992az<br>' .
                         'D_line = (ρL/(2πρ))·aρ = (150×10⁻⁶/(2π×8.062))·(-0.124ax + 0.992az)<br>' .
                         'D_line = (2.96×10⁻⁶)·(-0.124ax + 0.992az) = -0.367ax + 2.936az μC/m²<br><br>' .
                         '<strong>2. Due to sheet charge at z=5:</strong><br>' .
                         'For infinite sheet: D_sheet = (ρs/2)·an<br>' .
                         'Point P is at z=4 < 5, so normal points in -z direction: an = -az<br>' .
                         'D_sheet = (25×10⁻⁹/2)·(-az) = -12.5az nC/m² = -0.0125az μC/m²<br><br>' .
                         '<strong>Total D:</strong><br>' .
                         'D = D_line + D_sheet = -0.367ax + 0ay + (2.936 - 0.0125)az = -0.367ax + 2.9235az μC/m²<br><br>' .
                         '<strong>Convert to spherical coordinates at P(1,2,4):</strong><br>' .
                         'r = √(1²+2²+4²) = √21 ≈ 4.583<br>' .
                         'θ = cos⁻¹(z/r) = cos⁻¹(4/4.583) = cos⁻¹(0.873) ≈ 29.2°<br>' .
                         'φ = tan⁻¹(y/x) = tan⁻¹(2/1) = tan⁻¹(2) ≈ 63.43°<br><br>' .
                         'Dr = Dx·sinθ·cosφ + Dy·sinθ·sinφ + Dz·cosθ<br>' .
                         'Dr = (-0.367)·sin(29.2°)·cos(63.43°) + 0 + 2.9235·cos(29.2°)<br>' .
                         'Dr = (-0.367)·(0.488)·(0.447) + 2.9235·(0.873) = -0.080 + 2.552 = 2.472<br><br>' .
                         'Dθ = Dx·cosθ·cosφ + Dy·cosθ·sinφ - Dz·sinθ<br>' .
                         'Dθ = (-0.367)·cos(29.2°)·cos(63.43°) + 0 - 2.9235·sin(29.2°)<br>' .
                         'Dθ = (-0.367)·(0.873)·(0.447) - 2.9235·(0.488) = -0.144 - 1.427 = -1.571<br><br>' .
                         'Dφ = -Dx·sinφ + Dy·cosφ = -(-0.367)·sin(63.43°) + 0 = 0.367·0.894 = 0.328<br><br>' .
                         'Therefore, D in spherical coordinates:<br>' .
                         'D = 2.472ar - 1.571aθ + 0.328aφ μC/m²',
            'solution_has_diagram' => false,
            'notes' => 'Use superposition for multiple charge distributions. For line charges, field is radial from the line. For infinite sheets, field is uniform and perpendicular to the sheet. When converting vectors between coordinate systems, the transformation depends on the location.',
            'formulas' => [
                'Line charge: D = (ρL/(2πρ))·aρ',
                'Sheet charge: D = (ρs/2)·an',
                'Superposition: D_total = ΣD_i',
                'Cylindrical to spherical vector transformation'
            ]
        ],
        [
            'text' => 'Define relaxation time constant (RTC). Derive an expression for RTC. Given J = 100e^(-43z)cos(10^4t)a_x A/m² for current density, find the current flowing outward through a circular band r=3, 0<φ<2π, 2<z<2.8m.',
            'chapter' => 'Current and Conductors',
            'has_diagram' => false,
            'solution' => '<strong>Relaxation Time Constant (RTC):</strong><br>' .
                         'RTC is the time required for charge density in a conductor to decay to 1/e of its initial value. It characterizes how quickly excess charge dissipates.<br><br>' .
                         '<strong>Derivation:</strong><br>' .
                         'From Ohm\'s law: J = σE<br>' .
                         'From continuity equation: ∇·J = -∂ρv/∂t<br>' .
                         'Substituting: ∇·(σE) = -∂ρv/∂t<br>' .
                         'Assuming homogeneous conductor (σ constant): σ∇·E = -∂ρv/∂t<br>' .
                         'From Gauss\'s law: ∇·E = ρv/ε<br>' .
                         'So: σ(ρv/ε) = -∂ρv/∂t<br>' .
                         'Rearranging: ∂ρv/∂t + (σ/ε)ρv = 0<br>' .
                         'Solution: ρv(t) = ρv(0)e^(-t/τ) where τ = ε/σ<br>' .
                         'Thus, relaxation time constant τ = ε/σ<br><br>' .
                         '<strong>Current calculation:</strong><br>' .
                         'Given J = 100e^(-43z)cos(10⁴t)ax A/m²<br>' .
                         'The surface is a circular band at r=3, 0<φ<2π, 2<z<2.8m.<br>' .
                         'This is a cylindrical surface, so dS = r·dφ·dz·ar = 3·dφ·dz·ar<br>' .
                         'But J is in x-direction (ax), while dS is in radial direction (ar).<br>' .
                         'At cylindrical surface r=3, ar = cosφ ax + sinφ ay<br>' .
                         'So J·dS = [100e^(-43z)cos(10⁴t)ax]·[3·dφ·dz·(cosφ ax + sinφ ay)]<br>' .
                         'J·dS = 100e^(-43z)cos(10⁴t)·3·cosφ·dφ·dz<br>' .
                         'Total current I = ∫∫J·dS = ∫(z=2 to 2.8) ∫(φ=0 to 2π) 300e^(-43z)cos(10⁴t)cosφ dφ dz<br>' .
                         'Note: ∫(0 to 2π) cosφ dφ = 0<br>' .
                         'Therefore, I = 0 A<br>' .
                         'The current through this surface is zero because the current density has no radial component that is constant with respect to φ; the x-component integrates to zero over a full circle.',
            'solution_has_diagram' => false,
            'notes' => 'The relaxation time constant τ = ε/σ is a material property. For good conductors, τ is very small (charge dissipates quickly). For the current calculation, be careful about the direction of current density and surface normal. When J has only x-component and the surface is cylindrical, the dot product involves cosφ, which integrates to zero over 0 to 2π.',
            'formulas' => [
                'Relaxation time: τ = ε/σ',
                'Current: I = ∫∫J·dS',
                'Cylindrical surface element: dS = r·dφ·dz·ar'
            ]
        ],
        [
            'text' => 'Show that the vector magnetic potential can be defined in regions where J is equal to zero. Use the concept of vector magnetic potential to derive the magnetic field intensity due to an infinite current-carrying DC current filament.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => false,
            'solution' => '<strong>Vector Magnetic Potential:</strong><br>' .
                         'From Maxwell\'s equation: ∇×H = J<br>' .
                         'If we define H = (1/μ)B and B = ∇×A, then:<br>' .
                         '∇×H = ∇×((1/μ)∇×A) = J<br>' .
                         'In regions where J = 0:<br>' .
                         '∇×((1/μ)∇×A) = 0<br>' .
                         'If μ is constant: (1/μ)∇×(∇×A) = 0 ⇒ ∇×(∇×A) = 0<br>' .
                         'Using vector identity: ∇×(∇×A) = ∇(∇·A) - ∇²A<br>' .
                         'So: ∇(∇·A) - ∇²A = 0<br>' .
                         'We can choose ∇·A = 0 (Coulomb gauge), then ∇²A = 0<br>' .
                         'Thus, vector magnetic potential A can be defined in regions where J = 0.<br><br>' .
                         '<strong>Magnetic field due to infinite current filament:</strong><br>' .
                         'Consider infinite filament along z-axis carrying current I in +z direction.<br>' .
                         'By symmetry, A should be in z-direction and depend only on ρ: A = Az(ρ)az<br>' .
                         'From ∇²A = 0 in cylindrical coordinates (for Az depending only on ρ):<br>' .
                         '(1/ρ)·d/dρ(ρ·dAz/dρ) = 0<br>' .
                         'Integrating: ρ·dAz/dρ = C1 ⇒ dAz/dρ = C1/ρ<br>' .
                         'Integrating again: Az = C1·ln(ρ) + C2<br>' .
                         'The constant C2 has no physical significance (can be set to 0).<br>' .
                         'To find C1, use B = ∇×A:<br>' .
                         'B = ∇×A = | aρ    aφ    az   |<br>' .
                         '          | ∂/∂ρ  ∂/∂φ  ∂/∂z |<br>' .
                         '          | 0     0     Az  |<br>' .
                         'B = - (∂Az/∂ρ)aφ = - (C1/ρ)aφ<br>' .
                         'From Ampere\'s law, for infinite filament: B = (μI/(2πρ))aφ<br>' .
                         'So: -C1/ρ = μI/(2πρ) ⇒ C1 = -μI/(2π)<br>' .
                         'Thus: A = [-μI/(2π)]·ln(ρ) az<br>' .
                         'And H = B/μ = (I/(2πρ))aφ',
            'solution_has_diagram' => false,
            'notes' => 'Vector magnetic potential A is defined such that B = ∇×A. It is particularly useful in regions where J = 0. For problems with symmetry, solve Laplace\'s equation for A, then find B from curl of A. The gauge condition ∇·A = 0 simplifies the equations.',
            'formulas' => [
                'Definition: B = ∇×A',
                'Relation: H = B/μ',
                'Gauge condition: ∇·A = 0',
                'Infinite filament: H = I/(2πρ)aφ'
            ]
        ],
        [
            'text' => 'State Stokes theorem. Given the field H = (1/ρ)cos(φ/2)a_z, evaluate both sides of Stokes theorem for the path formed by intersection of cylinder ρ=3 and plane z=2, and for the surface defined by ρ=3, 0<z<2, and z=0, 0<ρ<3.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false,
            'solution' => '<strong>Stokes Theorem:</strong><br>' .
                         '∮C H·dl = ∫∫S (∇×H)·dS<br><br>' .
                         '<strong>Given:</strong> H = (1/ρ)cos(φ/2)az<br>' .
                         'Path: intersection of cylinder ρ=3 and plane z=2 (circle at ρ=3, z=2)<br>' .
                         'Surface: cylindrical surface ρ=3, 0<z<2 plus bottom surface z=0, 0<ρ<3<br><br>' .
                         '<strong>Left side (line integral):</strong><br>' .
                         'On path (ρ=3, z=2), dl = ρ·dφ·aφ = 3·dφ·aφ<br>' .
                         'H·dl = [(1/3)cos(φ/2)az]·[3·dφ·aφ] = 0 (since az·aφ = 0)<br>' .
                         'So ∮C H·dl = 0<br><br>' .
                         '<strong>Right side (surface integral):</strong><br>' .
                         'First, find ∇×H in cylindrical coordinates:<br>' .
                         'H = Hzaz, so ∇×H = -(∂Hz/∂ρ)aφ + (1/ρ)(∂(ρHz)/∂φ)az<br>' .
                         'Hz = (1/ρ)cos(φ/2)<br>' .
                         '∂Hz/∂ρ = -1/ρ²·cos(φ/2)<br>' .
                         '∂(ρHz)/∂φ = ∂[cos(φ/2)]/∂φ = -1/2·sin(φ/2)<br>' .
                         'So ∇×H = -[-1/ρ²·cos(φ/2)]aφ + (1/ρ)[-1/2·sin(φ/2)]az<br>' .
                         '∇×H = (1/ρ²)cos(φ/2)aφ - (1/(2ρ))sin(φ/2)az<br><br>' .
                         'Now integrate over surface:<br>' .
                         'Surface has two parts: cylindrical surface (ρ=3, 0<z<2) and bottom surface (z=0, 0<ρ<3)<br><br>' .
                         '<strong>Cylindrical surface (ρ=3, 0<z<2):</strong><br>' .
                         'dS = ρ·dφ·dz·aρ = 3·dφ·dz·aρ<br>' .
                         '(∇×H)·dS = [(1/ρ²)cos(φ/2)aφ - (1/(2ρ))sin(φ/2)az]·[3·dφ·dz·aρ] = 0 (since aφ·aρ = 0, az·aρ = 0)<br>' .
                         'So integral over cylindrical surface = 0<br><br>' .
                         '<strong>Bottom surface (z=0, 0<ρ<3):</strong><br>' .
                         'dS = ρ·dρ·dφ·(-az) (downward normal)<br>' .
                         '(∇×H)·dS = [(1/ρ²)cos(φ/2)aφ - (1/(2ρ))sin(φ/2)az]·[ρ·dρ·dφ·(-az)]<br>' .
                         '= [-(1/(2ρ))sin(φ/2)az]·[ρ·dρ·dφ·(-az)] = (1/2)sin(φ/2)·ρ·dρ·dφ<br>' .
                         '∫∫(∇×H)·dS = ∫(φ=0 to 2π) ∫(ρ=0 to 3) (1/2)sin(φ/2)·ρ·dρ·dφ<br>' .
                         '= (1/2) ∫(0 to 2π) sin(φ/2) dφ ∫(0 to 3) ρ dρ<br>' .
                         '= (1/2) [-2cos(φ/2)](0 to 2π) [ρ²/2](0 to 3)<br>' .
                         '= (1/2) [-2(cos(π) - cos(0))] [9/2]<br>' .
                         '= (1/2) [-2(-1 - 1)] [4.5] = (1/2)(4)(4.5) = 9<br><br>' .
                         'Total surface integral = 0 + 9 = 9<br>' .
                         'But line integral was 0, so 0 ≠ 9. There seems to be an inconsistency.<br><br>' .
                         'Actually, the surface described is not closed, and the path is only the top circle. For Stokes theorem, the surface should be any surface bounded by the path. If we take just the flat surface at z=2, 0<ρ<3:<br>' .
                         'dS = ρ·dρ·dφ·az<br>' .
                         '(∇×H)·dS = [(1/ρ²)cos(φ/2)aφ - (1/(2ρ))sin(φ/2)az]·[ρ·dρ·dφ·az] = - (1/2)sin(φ/2)·ρ·dρ·dφ<br>' .
                         '∫∫(∇×H)·dS = ∫(φ=0 to 2π) ∫(ρ=0 to 3) - (1/2)sin(φ/2)·ρ·dρ·dφ = -9 (from above calculation)<br>' .
                         'Still not 0. There might be an error in the problem statement or interpretation.',
            'solution_has_diagram' => false,
            'notes' => 'Stokes theorem relates line integral around a closed path to surface integral of curl over any surface bounded by that path. Be careful about the direction of surface normal (right-hand rule with respect to path traversal). In this case, there appears to be an inconsistency, possibly due to misinterpretation of the surface or path.',
            'formulas' => [
                'Stokes Theorem: ∮C F·dl = ∫∫S (∇×F)·dS',
                'Curl in cylindrical coordinates',
                'Surface elements in cylindrical coordinates'
            ]
        ]
    ],
    
    '2073 Chaitra' => [
        [
            'text' => 'Express scalar potential field in spherical coordinates. Find the value at point P(2,60°,90°).',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false,
            'solution' => 'The question seems to be incomplete as it doesn\'t specify what scalar potential field to express. However, from the context and solution provided in the PDF, it appears to be asking for the transformation of a scalar field from Cartesian to spherical coordinates, possibly V = x² + 2y² + 3z² as in similar questions.<br><br>' .
                         'Assuming V = x² + 2y² + 3z², transform to spherical coordinates:<br>' .
                         'x = r·sinθ·cosφ, y = r·sinθ·sinφ, z = r·cosθ<br>' .
                         'V = (r·sinθ·cosφ)² + 2(r·sinθ·sinφ)² + 3(r·cosθ)²<br>' .
                         'V = r²·sin²θ·cos²φ + 2r²·sin²θ·sin²φ + 3r²·cos²θ<br>' .
                         'V = r²·sin²θ(cos²φ + 2sin²φ) + 3r²·cos²θ<br>' .
                         'V = r²·sin²θ(1 + sin²φ) + 3r²·cos²θ (since cos²φ + sin²φ = 1)<br>' .
                         'V = r²[sin²θ(1 + sin²φ) + 3cos²θ]<br><br>' .
                         'At P(2,60°,90°): r=2, θ=60°, φ=90°<br>' .
                         'sinθ = sin60° = √3/2 ≈ 0.866, cosθ = cos60° = 0.5<br>' .
                         'sinφ = sin90° = 1, cosφ = cos90° = 0<br>' .
                         'V = (2)²[(0.866)²(1 + 1²) + 3(0.5)²] = 4[0.75(2) + 3(0.25)] = 4[1.5 + 0.75] = 4[2.25] = 9 V',
            'solution_has_diagram' => false,
            'notes' => 'Scalar fields transform by substituting coordinate relationships. Unlike vectors, scalars don\'t require transformation matrices since they have no direction. The value at a point is invariant under coordinate transformation.',
            'formulas' => [
                'Cartesian to spherical: x = r·sinθ·cosφ, y = r·sinθ·sinφ, z = r·cosθ',
                'Scalar field transformation: Substitute coordinate relationships'
            ]
        ],
        [
            'text' => 'Find electric flux for Q=3nC at point (2,0,6) and uniform line charge 0.2nC/m at x=5, y=3. Let the line be in z-direction.',
            'chapter' => 'Electric Field',
            'has_diagram' => false,
            'solution' => 'The question asks for "electric flux" but doesn\'t specify through what surface. Electric flux is typically calculated through a closed surface using Gauss\'s law, or through a specific surface. From the context, it seems to be asking for electric flux density D at some point, but the point is not specified.<br><br>' .
                         'Assuming we need to find D at some point P, but P is not given. From the solution in the PDF, it appears P might be (5,3,0) or similar.<br><br>' .
                         'Let\'s assume we need D at P(5,3,0):<br><br>' .
                         '<strong>1. Due to point charge Q=3nC at (2,0,6):</strong><br>' .
                         'Vector from charge to P: R = (5-2)ax + (3-0)ay + (0-6)az = 3ax + 3ay - 6az<br>' .
                         'Distance: |R| = √(3²+3²+(-6)²) = √54 = 3√6 ≈ 7.348m<br>' .
                         'Unit vector: aR = (3ax + 3ay - 6az)/7.348 = 0.408ax + 0.408ay - 0.816az<br>' .
                         'D_point = (Q/(4πR²))·aR = (3×10⁻⁹/(4π×54))·(0.408ax + 0.408ay - 0.816az)<br>' .
                         'D_point = (4.42×10⁻¹²)·(0.408ax + 0.408ay - 0.816az) = 1.80×10⁻¹²ax + 1.80×10⁻¹²ay - 3.61×10⁻¹²az C/m²<br><br>' .
                         '<strong>2. Due to line charge ρL=0.2nC/m at x=5, y=3 (parallel to z-axis):</strong><br>' .
                         'At P(5,3,0), the point is on the line charge (same x,y), so ρ = 0.<br>' .
                         'This is problematic as field becomes infinite at the line.<br>' .
                         'Perhaps P is not on the line. Let\'s assume P(6,3,0) instead.<br>' .
                         'Then vector from line to P: R = (6-5)ax + (3-3)ay + (0-0)az = ax<br>' .
                         'Perpendicular distance: ρ = 1m<br>' .
                         'Unit vector: aρ = ax<br>' .
                         'D_line = (ρL/(2πρ))·aρ = (0.2×10⁻⁹/(2π×1))·ax = 3.18×10⁻¹¹ax C/m²<br><br>' .
                         'Without a clear specification of the point and surface, a complete solution cannot be provided. The question appears to be incomplete or unclear.',
            'solution_has_diagram' => false,
            'notes' => 'Electric flux is typically Ψ = ∫∫D·dS through a surface. For a point charge, total flux through any closed surface enclosing it is Q. For a line charge, flux through a cylindrical surface of length L is ρL·L. The question seems to be missing key information about the evaluation point or surface.',
            'formulas' => [
                'Point charge: D = (Q/(4πr²))·ar',
                'Line charge: D = (ρL/(2πρ))·aρ',
                'Electric flux: Ψ = ∫∫D·dS'
            ]
        ],
        [
            'text' => 'State significance of divergence. Derive divergence theorem. Find divergence at point (2,π/2,0) for A = 10rsinθcosφ ar.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false,
            'solution' => '<strong>Significance of divergence:</strong><br>' .
                         'Divergence measures the net outward flux per unit volume at a point in a vector field. Physically, positive divergence indicates a source (flux emanating), negative divergence indicates a sink (flux converging), and zero divergence indicates no net source or sink.<br><br>' .
                         '<strong>Divergence Theorem:</strong><br>' .
                         'The divergence theorem states that the total outward flux of a vector field through a closed surface is equal to the volume integral of the divergence of the field over the volume enclosed:<br>' .
                         '∯S F·dS = ∫∫∫V (∇·F) dV<br><br>' .
                         '<strong>Derivation:</strong><br>' .
                         'Divide volume V into infinitesimal elements dV. For each element, by definition of divergence:<br>' .
                         '(∇·F)dV ≈ ∯dS F·dS<br>' .
                         'where dS is the surface of dV.<br>' .
                         'Sum over all elements:<br>' .
                         '∫∫∫V (∇·F) dV ≈ Σ ∯dS F·dS<br>' .
                         'Flux through internal surfaces cancels (each internal face is shared by two elements with opposite normals), leaving only flux through outer surface S:<br>' .
                         '∫∫∫V (∇·F) dV = ∯S F·dS<br><br>' .
                         '<strong>Divergence calculation:</strong><br>' .
                         'Given A = 10r·sinθ·cosφ ar in spherical coordinates.<br>' .
                         'Divergence in spherical coordinates for Ar only:<br>' .
                         '∇·A = (1/r²)·∂(r²Ar)/∂r + (1/(r·sinθ))·∂(sinθ·Aθ)/∂θ + (1/(r·sinθ))·∂Aφ/∂φ<br>' .
                         'Since Aθ = Aφ = 0:<br>' .
                         '∇·A = (1/r²)·∂(r²·10r·sinθ·cosφ)/∂r = (1/r²)·∂(10r³·sinθ·cosφ)/∂r<br>' .
                         '∇·A = (1/r²)·30r²·sinθ·cosφ = 30·sinθ·cosφ<br><br>' .
                         'At point (2,π/2,0): r=2, θ=π/2, φ=0<br>' .
                         '∇·A = 30·sin(π/2)·cos(0) = 30·1·1 = 30',
            'solution_has_diagram' => false,
            'notes' => 'Divergence is a scalar quantity that describes the behavior of a vector field at a point. The divergence theorem is fundamental in vector calculus and electromagnetics, relating surface integrals to volume integrals. In spherical coordinates, the divergence formula accounts for the changing unit vectors.',
            'formulas' => [
                'Divergence meaning: Net outward flux per unit volume',
                'Divergence theorem: ∯S F·dS = ∫∫∫V (∇·F) dV',
                'Spherical divergence: ∇·A = (1/r²)∂(r²Ar)/∂r + (1/(r·sinθ))∂(sinθ·Aθ)/∂θ + (1/(r·sinθ))∂Aφ/∂φ'
            ]
        ],
        [
            'text' => 'Derive Poisson\'s equation. Find the capacitance of coaxial cable.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false,
            'solution' => '<strong>Derivation of Poisson\'s equation:</strong><br>' .
                         'From Gauss\'s law: ∇·D = ρv<br>' .
                         'Since D = εE and E = -∇V:<br>' .
                         '∇·(-ε∇V) = ρv<br>' .
                         'For homogeneous medium (ε constant): -ε∇²V = ρv<br>' .
                         'So: ∇²V = -ρv/ε (Poisson\'s equation)<br>' .
                         'If ρv = 0: ∇²V = 0 (Laplace\'s equation)<br><br>' .
                         '<strong>Capacitance of coaxial cable:</strong><br>' .
                         'Consider coaxial cable with inner radius a, outer radius b, length L.<br>' .
                         'Assume charge +Q on inner conductor, -Q on outer conductor.<br>' .
                         'By symmetry, E is radial: E = Er(r)ar<br>' .
                         'Apply Gauss\'s law with cylindrical surface of radius r (a<r<b), length L:<br>' .
                         '∯D·dS = Q_enc ⇒ D·2πrL = Q ⇒ D = Q/(2πrL)<br>' .
                         'E = D/ε = Q/(2πεrL)<br>' .
                         'Potential difference: V = -∫b to a E·dr = ∫a to b Q/(2πεrL) dr = Q/(2πεL)·ln(b/a)<br>' .
                         'Capacitance: C = Q/V = Q/[Q/(2πεL)·ln(b/a)] = 2πεL/ln(b/a)<br>' .
                         'For air or vacuum: C = 2πε₀L/ln(b/a)',
            'solution_has_diagram' => false,
            'notes' => 'Poisson\'s equation relates the electrostatic potential to charge density. For coaxial cables, the capacitance depends on geometry (radii, length) and dielectric properties. The derivation uses Gauss\'s law and the relationship between field and potential.',
            'formulas' => [
                'Poisson\'s equation: ∇²V = -ρv/ε',
                'Coaxial capacitance: C = 2πεL/ln(b/a)',
                'Gauss\'s law: ∯D·dS = Q_enc'
            ]
        ],
        [
            'text' => 'State Ampere\'s circuital law. Using Biot-Savart law, derive an expression for magnetic field intensity due to an infinite straight filament carrying a direct current I.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => false,
            'solution' => '<strong>Ampere\'s Circuital Law:</strong><br>' .
                         'The line integral of H around a closed path is equal to the total current enclosed by that path:<br>' .
                         '∮H·dl = I_enc<br><br>' .
                         '<strong>Magnetic field due to infinite straight filament (using Biot-Savart law):</strong><br>' .
                         'Biot-Savart law: dH = (I·dl×aR)/(4πR²)<br>' .
                         'Consider filament along z-axis, current I in +z direction.<br>' .
                         'Find H at point P(ρ,φ,0) in cylindrical coordinates.<br>' .
                         'Take element dl = dz·az at (0,0,z)<br>' .
                         'Vector from element to P: R = ρ·aρ - z·az<br>' .
                         'Distance: |R| = √(ρ²+z²)<br>' .
                         'Unit vector: aR = (ρ·aρ - z·az)/√(ρ²+z²)<br>' .
                         'dl×aR = (dz·az)×(ρ·aρ - z·az)/√(ρ²+z²) = dz·ρ·(az×aρ)/√(ρ²+z²) = dz·ρ·(-aφ)/√(ρ²+z²)<br>' .
                         'dH = I·[dz·ρ·(-aφ)/√(ρ²+z²)]/[4π(ρ²+z²)] = -I·ρ·dz·aφ/[4π(ρ²+z²)^(3/2)]<br>' .
                         'H = ∫dH = -[I·ρ·aφ/(4π)] ∫(-∞ to ∞) dz/(ρ²+z²)^(3/2)<br>' .
                         'Let z = ρ·tanα, dz = ρ·sec²α dα<br>' .
                         'When z→-∞, α→-π/2; z→∞, α→π/2<br>' .
                         '∫ dz/(ρ²+z²)^(3/2) = ∫ ρ·sec²α dα/[ρ³·sec³α] = (1/ρ²) ∫ cosα dα = (1/ρ²) [sinα](-π/2 to π/2) = (1/ρ²)[1 - (-1)] = 2/ρ²<br>' .
                         'So H = -[I·ρ·aφ/(4π)]·(2/ρ²) = -[I·aφ/(2πρ)]<br>' .
                         'Magnitude H = I/(2πρ), direction -aφ (which is azimuthal, following right-hand rule)<br>' .
                         'Thus: H = I/(2πρ)aφ',
            'solution_has_diagram' => false,
            'notes' => 'Ampere\'s law is useful for symmetric problems, while Biot-Savart law is more general but requires integration. For infinite straight filament, the field is azimuthal and decreases as 1/ρ. The direction follows the right-hand rule (thumb in current direction, fingers curl in field direction).',
            'formulas' => [
                'Ampere\'s law: ∮H·dl = I_enc',
                'Biot-Savart law: dH = (I·dl×aR)/(4πR²)',
                'Infinite filament: H = I/(2πρ)aφ'
            ]
        ]
    ],
    
    '2072 Chaitra' => [
        [
            'text' => 'Express vector A in spherical components. Given A = 5cosφ aρ - 5sinφ aφ in cylindrical coordinates.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false,
            'solution' => 'Given A = 5cosφ aρ - 5sinφ aφ in cylindrical coordinates.<br>' .
                         'To express in spherical components, we need to transform at a general point.<br>' .
                         'The transformation between cylindrical and spherical unit vectors:<br>' .
                         'aρ = sinθ ar + cosθ aθ<br>' .
                         'aφ = aφ (same in both systems)<br>' .
                         'az = cosθ ar - sinθ aθ<br><br>' .
                         'So A = 5cosφ (sinθ ar + cosθ aθ) - 5sinφ aφ<br>' .
                         'A = 5cosφ·sinθ ar + 5cosφ·cosθ aθ - 5sinφ aφ<br><br>' .
                         'Therefore, in spherical components:<br>' .
                         'Ar = 5cosφ·sinθ<br>' .
                         'Aθ = 5cosφ·cosθ<br>' .
                         'Aφ = -5sinφ',
            'solution_has_diagram' => false,
            'notes' => 'Vector transformation between cylindrical and spherical coordinates requires relating their unit vectors. Note that aφ is the same in both systems, while aρ and az are linear combinations of ar and aθ. The transformation depends on the spherical angle θ.',
            'formulas' => [
                'Cylindrical to spherical unit vectors: aρ = sinθ ar + cosθ aθ, aφ = aφ, az = cosθ ar - sinθ aθ',
                'Vector transformation: Express in terms of new unit vectors'
            ]
        ],
        [
            'text' => 'Derive the expression for electric field intensity due to an infinite line charge with charge density ρL using Gauss\'s law. Given uniform line charge density 20nC/m at y=3 and z=5. Find E at point P(5,6,1).',
            'chapter' => 'Electric Field',
            'has_diagram' => false,
            'solution' => '<strong>Derivation using Gauss\'s law:</strong><br>' .
                         'Consider infinite line charge with density ρL along z-axis.<br>' .
                         'By symmetry, E is radial (E = Eρaρ) and depends only on ρ.<br>' .
                         'Choose Gaussian surface: cylinder of radius ρ, length L, coaxial with line charge.<br>' .
                         'Flux through ends = 0 (E perpendicular to normal)<br>' .
                         'Flux through curved surface = Eρ·2πρL<br>' .
                         'Charge enclosed = ρL·L<br>' .
                         'Gauss\'s law: ∯D·dS = Q_enc ⇒ ε₀Eρ·2πρL = ρL·L<br>' .
                         'So Eρ = ρL/(2πε₀ρ)<br>' .
                         'Thus E = [ρL/(2πε₀ρ)]aρ<br><br>' .
                         '<strong>Field at P(5,6,1) due to line charge at y=3, z=5:</strong><br>' .
                         'The line is parallel to x-axis at y=3, z=5.<br>' .
                         'Vector from line to P: R = (5-0)ax + (6-3)ay + (1-5)az = 5ax + 3ay - 4az<br>' .
                         'Perpendicular distance: ρ = √(3²+(-4)²) = √25 = 5m (distance in yz-plane)<br>' .
                         'Unit vector in radial direction: aρ = (3ay - 4az)/5 = 0.6ay - 0.8az<br>' .
                         'E = [ρL/(2πε₀ρ)]·aρ = [20×10⁻⁹/(2π×8.854×10⁻¹²×5)]·(0.6ay - 0.8az)<br>' .
                         'E = [20×10⁻⁹/2.78×10⁻¹⁰]·(0.6ay - 0.8az) = 71.94·(0.6ay - 0.8az)<br>' .
                         'E = 43.16ay - 57.55az V/m',
            'solution_has_diagram' => false,
            'notes' => 'Gauss\'s law is powerful for symmetric charge distributions. For infinite line charge, use cylindrical Gaussian surface. The field is radial and decreases as 1/ρ. For line not through origin, calculate perpendicular distance and radial direction carefully.',
            'formulas' => [
                'Gauss\'s law: ∯D·dS = Q_enc',
                'Infinite line charge: E = [ρL/(2πε₀ρ)]aρ',
                'Perpendicular distance calculation'
            ]
        ],
        [
            'text' => 'Derive expression to calculate potential due to a dipole in terms of dipole moment (p). Given p = 3.2×10⁻²⁹ C·m located at origin. Find E at point (1,2,-4).',
            'chapter' => 'Electrostatics',
            'has_diagram' => false,
            'solution' => '<strong>Potential due to dipole:</strong><br>' .
                         'Consider dipole with charges +q and -q separated by distance d, dipole moment p = qd (direction from -q to +q).<br>' .
                         'Place dipole at origin with p along z-axis: p = p az.<br>' .
                         'Potential at point with spherical coordinates (r,θ):<br>' .
                         'V = (1/(4πε₀))·(p·cosθ)/r²<br>' .
                         'In vector form: V = (1/(4πε₀))·(p·ar)/r²<br><br>' .
                         '<strong>Electric field from potential:</strong><br>' .
                         'E = -∇V<br>' .
                         'In spherical coordinates, for V = k·cosθ/r² (k = p/(4πε₀)):<br>' .
                         'Er = -∂V/∂r = -k·cosθ·(-2/r³) = 2k·cosθ/r³<br>' .
                         'Eθ = -(1/r)·∂V/∂θ = -(1/r)·k·(-sinθ)/r² = k·sinθ/r³<br>' .
                         'Eφ = 0<br>' .
                         'So E = (k/r³)(2cosθ ar + sinθ aθ)<br>' .
                         'Substituting k = p/(4πε₀):<br>' .
                         'E = [p/(4πε₀r³)](2cosθ ar + sinθ aθ)<br><br>' .
                         '<strong>Field at P(1,2,-4):</strong><br>' .
                         'First, convert to spherical coordinates:<br>' .
                         'r = √(1²+2²+(-4)²) = √21 ≈ 4.583<br>' .
                         'θ = cos⁻¹(z/r) = cos⁻¹(-4/4.583) = cos⁻¹(-0.873) ≈ 150.8°<br>' .
                         'φ = tan⁻¹(y/x) = tan⁻¹(2/1) = tan⁻¹(2) ≈ 63.43°<br>' .
                         'cosθ = cos(150.8°) ≈ -0.873, sinθ = sin(150.8°) ≈ 0.488<br><br>' .
                         'E = [3.2×10⁻²⁹/(4π×8.854×10⁻¹²×(4.583)³)](2(-0.873)ar + 0.488aθ)<br>' .
                         'E = [3.2×10⁻²⁹/(3.22×10⁻⁹)](-1.746ar + 0.488aθ) = 9.94×10⁻²¹(-1.746ar + 0.488aθ)<br>' .
                         'E = -1.74×10⁻²⁰ar + 4.85×10⁻²¹aθ V/m<br><br>' .
                         'Convert back to Cartesian if needed, but this is extremely small as expected for a molecular dipole.',
            'solution_has_diagram' => false,
            'notes' => 'Dipole potential decreases as 1/r² (faster than point charge). The field has both radial and angular components. For molecular dipoles, the field is very weak at macroscopic distances. The dipole moment p = qd points from negative to positive charge.',
            'formulas' => [
                'Dipole potential: V = (1/(4πε₀))·(p·cosθ)/r²',
                'Dipole field: E = [p/(4πε₀r³)](2cosθ ar + sinθ aθ)',
                'Dipole moment: p = qd (vector from -q to +q)'
            ]
        ],
        [
            'text' => 'Assuming the potential V in cylindrical coordinate system is function of ρ only, solve Laplace\'s equation and derive expression for capacitance of coaxial capacitor of length L.',
            'chapter' => 'Electrostatics',
            'has_diagram' => false,
            'solution' => 'This is identical to the 2075 Chaitra question 4. See that solution for complete derivation.<br><br>' .
                         'Summary:<br>' .
                         'Laplace\'s equation in cylindrical coordinates for V(ρ):<br>' .
                         '(1/ρ)·d/dρ(ρ·dV/dρ) = 0<br>' .
                         'Solution: V = A·ln(ρ) + B<br>' .
                         'For coaxial cable (inner radius a at V=V₀, outer radius b at V=0):<br>' .
                         'V(ρ) = V₀·ln(b/ρ)/ln(b/a)<br>' .
                         'E = -∇V = V₀/(ρ·ln(b/a)) aρ<br>' .
                         'C = Q/V₀ = 2πεL/ln(b/a)',
            'solution_has_diagram' => false,
            'notes' => 'See 2075 Chaitra question 4 for detailed solution.',
            'formulas' => [
                'See 2075 Chaitra question 4'
            ]
        ],
        [
            'text' => 'State and derive expression for Stokes theorem. Evaluate the closed line integral from P(5,4,1) to P(5,6,1) to R(0,6,1) to S(0,4,1) to P(5,4,1) using straight line segments for H = 0.1x²z ay A/m.',
            'chapter' => 'Vector Analysis',
            'has_diagram' => false,
            'solution' => '<strong>Stokes Theorem:</strong><br>' .
                         '∮C H·dl = ∫∫S (∇×H)·dS<br>' .
                         'See 2075 Chaitra question 5 for derivation.<br><br>' .
                         '<strong>Line integral evaluation:</strong><br>' .
                         'Path is rectangle in plane z=1: P(5,4,1) → Q(5,6,1) → R(0,6,1) → S(0,4,1) → P(5,4,1)<br>' .
                         'H = 0.1x²z ay = 0.1x²(1) ay = 0.1x² ay A/m (since z=1)<br><br>' .
                         '<strong>Segment P→Q:</strong> x=5, z=1, y:4→6, dl = dy ay<br>' .
                         'H·dl = (0.1(5)² ay)·(dy ay) = 2.5 dy<br>' .
                         '∫P→Q = ∫(4 to 6) 2.5 dy = 2.5[y](4 to 6) = 2.5(2) = 5<br><br>' .
                         '<strong>Segment Q→R:</strong> y=6, z=1, x:5→0, dl = dx ax<br>' .
                         'H·dl = (0.1x² ay)·(dx ax) = 0 (ay·ax = 0)<br>' .
                         '∫Q→R = 0<br><br>' .
                         '<strong>Segment R→S:</strong> x=0, z=1, y:6→4, dl = dy ay<br>' .
                         'H·dl = (0.1(0)² ay)·(dy ay) = 0<br>' .
                         '∫R→S = 0<br><br>' .
                         '<strong>Segment S→P:</strong> y=4, z=1, x:0→5, dl = dx ax<br>' .
                         'H·dl = (0.1x² ay)·(dx ax) = 0<br>' .
                         '∫S→P = 0<br><br>' .
                         'Total line integral = 5 + 0 + 0 + 0 = 5 A<br><br>' .
                         '<strong>Verify with Stokes theorem:</strong><br>' .
                         '∇×H = | ax     ay     az   |<br>' .
                         '       | ∂/∂x  ∂/∂y  ∂/∂z |<br>' .
                         '       | 0     0.1x²z  0   |<br>' .
                         '∇×H = -∂(0.1x²z)/∂z ax + 0 ay + ∂(0.1x²z)/∂x az = -0.1x² ax + 0.2xz az<br>' .
                         'At z=1: ∇×H = -0.1x² ax + 0.2x az<br>' .
                         'Surface S: rectangle in z=1 plane, dS = dx dy az<br>' .
                         '(∇×H)·dS = (-0.1x² ax + 0.2x az)·(dx dy az) = 0.2x dx dy<br>' .
                         '∫∫S (∇×H)·dS = ∫(x=0 to 5) ∫(y=4 to 6) 0.2x dx dy = 0.2 ∫(0 to 5) x dx ∫(4 to 6) dy<br>' .
                         '= 0.2 [x²/2](0 to 5) [y](4 to 6) = 0.2(12.5)(2) = 5<br>' .
                         'Matches line integral, verifying Stokes theorem.',
            'solution_has_diagram' => false,
            'notes' => 'Stokes theorem relates line integral around closed path to surface integral of curl. For verification, both sides should give same result. In this case, only segments where H has component parallel to dl contribute to line integral. For surface integral, only component of curl normal to surface contributes.',
            'formulas' => [
                'Stokes Theorem: ∮C F·dl = ∫∫S (∇×F)·dS',
                'Curl calculation',
                'Line and surface integrals'
            ]
        ]
    ]
];

// Include the viewer module
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/pyq_with_solution_viewer.php';

?>