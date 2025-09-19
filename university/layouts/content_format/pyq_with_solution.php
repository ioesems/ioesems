<?php
// Define subject title
$subject_title = "Electromagnetics Previous Year Questions with Solutions";

// Define questions array organized by year
$questions_by_year = [
    '2081 Bhadra' => [
        [
            'text' => 'At point P(-3,-4, 5), express that vector that extends from P to Q(2, 0,-1) in spherical coordinates.',
            'chapter' => 'Introduction',
            'has_diagram' => false,
            'solution' => 'To express the vector from P(-3,-4,5) to Q(2,0,-1) in spherical coordinates, we first find the vector in Cartesian coordinates:<br><br>' .
                         'Vector \\(\\vec{PQ} = Q - P = (2-(-3))\\hat{a}_x + (0-(-4))\\hat{a}_y + (-1-5)\\hat{a}_z = 5\\hat{a}_x + 4\\hat{a}_y - 6\\hat{a}_z\\)<br><br>' .
                         'Now, we need to transform this vector to spherical coordinates at point P(-3,-4,5).<br><br>' .
                         'First, find the spherical coordinates of point P:<br>' .
                         '\\(r = \\sqrt{x^2 + y^2 + z^2} = \\sqrt{(-3)^2 + (-4)^2 + 5^2} = \\sqrt{9 + 16 + 25} = \\sqrt{50} = 7.071\\)<br>' .
                         '\\(\\theta = \\cos^{-1}(z/r) = \\cos^{-1}(5/7.071) = \\cos^{-1}(0.707) = 45^\\circ\\)<br>' .
                         '\\(\\phi = \\tan^{-1}(y/x) = \\tan^{-1}((-4)/(-3)) = \\tan^{-1}(1.333) = 53.13^\\circ\\) (third quadrant, so add 180°)<br>' .
                         '\\(\\phi = 53.13^\\circ + 180^\\circ = 233.13^\\circ\\)<br><br>' .
                         'The transformation matrix from Cartesian to spherical coordinates is:<br>' .
                         '\\(\\begin{bmatrix} A_r \\\\ A_\\theta \\\\ A_\\phi \\end{bmatrix} = ' .
                         '\\begin{bmatrix} \\sin\\theta\\cos\\phi & \\sin\\theta\\sin\\phi & \\cos\\theta \\\\ \\cos\\theta\\cos\\phi & \\cos\\theta\\sin\\phi & -\\sin\\theta \\\\ -\\sin\\phi & \\cos\\phi & 0 \\end{bmatrix}' .
                         '\\begin{bmatrix} A_x \\\\ A_y \\\\ A_z \\end{bmatrix}\\)<br><br>' .
                         'Substituting the values:<br>' .
                         '\\(A_r = 5\\sin(45^\\circ)\\cos(233.13^\\circ) + 4\\sin(45^\\circ)\\sin(233.13^\\circ) - 6\\cos(45^\\circ)\\)<br>' .
                         '\\(A_r = 5(0.707)(-0.6) + 4(0.707)(-0.8) - 6(0.707) = -2.121 - 2.262 - 4.242 = -8.625\\)<br><br>' .
                         '\\(A_\\theta = 5\\cos(45^\\circ)\\cos(233.13^\\circ) + 4\\cos(45^\\circ)\\sin(233.13^\\circ) - 6(-\\sin(45^\\circ))\\)<br>' .
                         '\\(A_\\theta = 5(0.707)(-0.6) + 4(0.707)(-0.8) + 6(0.707) = -2.121 - 2.262 + 4.242 = -0.141\\)<br><br>' .
                         '\\(A_\\phi = 5(-\\sin(233.13^\\circ)) + 4\\cos(233.13^\\circ) + 0\\)<br>' .
                         '\\(A_\\phi = 5(0.8) + 4(-0.6) = 4 - 2.4 = 1.6\\)<br><br>' .
                         'Therefore, the vector in spherical coordinates is:<br>' .
                         '\\(\\vec{PQ} = -8.625\\hat{a}_r - 0.141\\hat{a}_\\theta + 1.6\\hat{a}_\\phi\\)',
            'solution_has_diagram' => false,
            'notes' => 'Remember that when transforming vectors between coordinate systems, the transformation depends on the location where the vector is defined. The transformation matrix is different for each point in space because the spherical coordinate unit vectors change direction depending on position.',
            'formulas' => [
                '\\(r = \\sqrt{x^2 + y^2 + z^2}\\)',
                '\\(\\theta = \\cos^{-1}(z/r)\\)',
                '\\(\\phi = \\tan^{-1}(y/x)\\) (adjust for quadrant)',
                '\\(\\begin{bmatrix} \\hat{a}_r \\\\ \\hat{a}_\\theta \\\\ \\hat{a}_\\phi \\end{bmatrix} = \\begin{bmatrix} \\sin\\theta\\cos\\phi & \\sin\\theta\\sin\\phi & \\cos\\theta \\\\ \\cos\\theta\\cos\\phi & \\cos\\theta\\sin\\phi & -\\sin\\theta \\\\ -\\sin\\phi & \\cos\\phi & 0 \\end{bmatrix} \\begin{bmatrix} \\hat{a}_x \\\\ \\hat{a}_y \\\\ \\hat{a}_z \\end{bmatrix}\\)'
            ]
        ],
        [
            'text' => 'Find E at P(6, 8, 10) caused by a point charge of 30 nC at the origin, a uniform line charge ρ_l = 40 pC/m on the z-axis and a uniform surface charge density ρ_s = 57.2 pC/m² on the plane x = 9.',
            'chapter' => 'Electric Field',
            'has_diagram' => true,
            'diagram_path' => 'images/2081_bhadra_q2.png',
            'diagram_alt' => 'Point P(6,8,10) with point charge at origin, line charge on z-axis, and surface charge on plane x=9',
            'solution' => 'To find the total electric field at P(6,8,10), we use the principle of superposition and calculate the field due to each source separately.<br><br>' .
                         '<strong>1. Field due to point charge at origin:</strong><br>' .
                         'Distance from origin to P: \\(r = \\sqrt{6^2 + 8^2 + 10^2} = \\sqrt{36 + 64 + 100} = \\sqrt{200} = 14.142\\) m<br>' .
                         'Unit vector: \\(\\hat{r} = \\frac{6\\hat{a}_x + 8\\hat{a}_y + 10\\hat{a}_z}{14.142} = 0.424\\hat{a}_x + 0.566\\hat{a}_y + 0.707\\hat{a}_z\\)<br>' .
                         'Field: \\(\\vec{E}_1 = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{r^2} \\hat{r} = (9 \\times 10^9) \\frac{30 \\times 10^{-9}}{200} (0.424\\hat{a}_x + 0.566\\hat{a}_y + 0.707\\hat{a}_z)\\)<br>' .
                         '\\(\\vec{E}_1 = 1.35(0.424\\hat{a}_x + 0.566\\hat{a}_y + 0.707\\hat{a}_z) = 0.572\\hat{a}_x + 0.764\\hat{a}_y + 0.954\\hat{a}_z\\) V/m<br><br>' .
                         '<strong>2. Field due to line charge on z-axis:</strong><br>' .
                         'Perpendicular distance from z-axis: \\(\\rho = \\sqrt{6^2 + 8^2} = \\sqrt{100} = 10\\) m<br>' .
                         'Unit vector: \\(\\hat{a}_\\rho = \\frac{6\\hat{a}_x + 8\\hat{a}_y}{10} = 0.6\\hat{a}_x + 0.8\\hat{a}_y\\)<br>' .
                         'Field: \\(\\vec{E}_2 = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} \\hat{a}_\\rho = \\frac{40 \\times 10^{-12}}{2\\pi(8.854 \\times 10^{-12})(10)} (0.6\\hat{a}_x + 0.8\\hat{a}_y)\\)<br>' .
                         '\\(\\vec{E}_2 = \\frac{40 \\times 10^{-12}}{5.56 \\times 10^{-10}} (0.6\\hat{a}_x + 0.8\\hat{a}_y) = 0.072(0.6\\hat{a}_x + 0.8\\hat{a}_y) = 0.043\\hat{a}_x + 0.058\\hat{a}_y\\) V/m<br><br>' .
                         '<strong>3. Field due to surface charge on plane x=9:</strong><br>' .
                         'For an infinite plane, \\(\\vec{E}_3 = \\frac{\\rho_s}{2\\epsilon_0} \\hat{a}_n\\)<br>' .
                         'Since the plane is at x=9 and point P is at x=6 (x<9), the normal vector points in the negative x-direction: \\(\\hat{a}_n = -\\hat{a}_x\\)<br>' .
                         '\\(\\vec{E}_3 = \\frac{57.2 \\times 10^{-12}}{2(8.854 \\times 10^{-12})} (-\\hat{a}_x) = 3.23(-\\hat{a}_x) = -3.23\\hat{a}_x\\) V/m<br><br>' .
                         '<strong>Total field:</strong><br>' .
                         '\\(\\vec{E} = \\vec{E}_1 + \\vec{E}_2 + \\vec{E}_3 = (0.572 + 0.043 - 3.23)\\hat{a}_x + (0.764 + 0.058)\\hat{a}_y + 0.954\\hat{a}_z\\)<br>' .
                         '\\(\\vec{E} = -2.615\\hat{a}_x + 0.822\\hat{a}_y + 0.954\\hat{a}_z\\) V/m',
            'solution_has_diagram' => true,
            'solution_diagram_path' => 'images/2081_bhadra_q2_solution.png',
            'solution_diagram_alt' => 'Electric field components from each source at point P',
            'notes' => 'When calculating fields from multiple sources, always use superposition. For the infinite plane, the field direction depends on which side of the plane the observation point is located. The field from a point charge decreases as 1/r², from a line charge as 1/ρ, and from a plane is constant.',
            'formulas' => [
                'Point charge: \\(\\vec{E} = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{r^2} \\hat{r}\\)',
                'Line charge: \\(\\vec{E} = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} \\hat{a}_\\rho\\)',
                'Surface charge: \\(\\vec{E} = \\frac{\\rho_s}{2\\epsilon_0} \\hat{a}_n\\)',
                'Superposition: \\(\\vec{E}_{total} = \\vec{E}_1 + \\vec{E}_2 + \\vec{E}_3 + ...\\)'
            ]
        ],
        [
            'text' => 'Derive the expression for the Maxwell\'s equation in point form.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => false,
            'solution' => 'Maxwell\'s equations in point (differential) form are derived from their integral forms using the divergence theorem and Stokes\' theorem.<br><br>' .
                         '<strong>1. Gauss\'s Law for Electricity:</strong><br>' .
                         'Integral form: \\(\\oint_S \\vec{D} \\cdot d\\vec{S} = Q_{enc} = \\iiint_V \\rho_v dV\\)<br>' .
                         'Using divergence theorem: \\(\\oint_S \\vec{D} \\cdot d\\vec{S} = \\iiint_V (\\nabla \\cdot \\vec{D}) dV\\)<br>' .
                         'Therefore: \\(\\iiint_V (\\nabla \\cdot \\vec{D}) dV = \\iiint_V \\rho_v dV\\)<br>' .
                         'For this to hold for any volume V: \\(\\nabla \\cdot \\vec{D} = \\rho_v\\)<br><br>' .
                         '<strong>2. Gauss\'s Law for Magnetism:</strong><br>' .
                         'Integral form: \\(\\oint_S \\vec{B} \\cdot d\\vec{S} = 0\\)<br>' .
                         'Using divergence theorem: \\(\\iiint_V (\\nabla \\cdot \\vec{B}) dV = 0\\)<br>' .
                         'For this to hold for any volume V: \\(\\nabla \\cdot \\vec{B} = 0\\)<br><br>' .
                         '<strong>3. Faraday\'s Law:</strong><br>' .
                         'Integral form: \\(\\oint_C \\vec{E} \\cdot d\\vec{l} = -\\frac{d}{dt} \\iint_S \\vec{B} \\cdot d\\vec{S}\\)<br>' .
                         'Using Stokes\' theorem: \\(\\oint_C \\vec{E} \\cdot d\\vec{l} = \\iint_S (\\nabla \\times \\vec{E}) \\cdot d\\vec{S}\\)<br>' .
                         'Therefore: \\(\\iint_S (\\nabla \\times \\vec{E}) \\cdot d\\vec{S} = -\\frac{d}{dt} \\iint_S \\vec{B} \\cdot d\\vec{S} = \\iint_S \\left(-\\frac{\\partial \\vec{B}}{\\partial t}\\right) \\cdot d\\vec{S}\\)<br>' .
                         'For this to hold for any surface S: \\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\)<br><br>' .
                         '<strong>4. Ampere\'s Law with Maxwell\'s Addition:</strong><br>' .
                         'Integral form: \\(\\oint_C \\vec{H} \\cdot d\\vec{l} = I_{enc} + \\frac{d}{dt} \\iint_S \\vec{D} \\cdot d\\vec{S}\\)<br>' .
                         'Where \\(I_{enc} = \\iint_S \\vec{J} \\cdot d\\vec{S}\\)<br>' .
                         'Using Stokes\' theorem: \\(\\oint_C \\vec{H} \\cdot d\\vec{l} = \\iint_S (\\nabla \\times \\vec{H}) \\cdot d\\vec{S}\\)<br>' .
                         'Therefore: \\(\\iint_S (\\nabla \\times \\vec{H}) \\cdot d\\vec{S} = \\iint_S \\vec{J} \\cdot d\\vec{S} + \\frac{d}{dt} \\iint_S \\vec{D} \\cdot d\\vec{S} = \\iint_S \\left(\\vec{J} + \\frac{\\partial \\vec{D}}{\\partial t}\\right) \\cdot d\\vec{S}\\)<br>' .
                         'For this to hold for any surface S: \\(\\nabla \\times \\vec{H} = \\vec{J} + \\frac{\\partial \\vec{D}}{\\partial t}\\)<br><br>' .
                         '<strong>Summary of Maxwell\'s Equations in Point Form:</strong><br>' .
                         '1. \\(\\nabla \\cdot \\vec{D} = \\rho_v\\)<br>' .
                         '2. \\(\\nabla \\cdot \\vec{B} = 0\\)<br>' .
                         '3. \\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\)<br>' .
                         '4. \\(\\nabla \\times \\vec{H} = \\vec{J} + \\frac{\\partial \\vec{D}}{\\partial t}\\)',
            'solution_has_diagram' => false,
            'notes' => 'These four equations form the foundation of classical electromagnetics. They describe how electric and magnetic fields are generated and altered by charges, currents, and changes in the fields themselves. The key mathematical tools used in the derivation are the divergence theorem (relating surface integrals to volume integrals) and Stokes\' theorem (relating line integrals to surface integrals).',
            'formulas' => [
                'Gauss\'s Law: \\(\\nabla \\cdot \\vec{D} = \\rho_v\\)',
                'No Magnetic Monopoles: \\(\\nabla \\cdot \\vec{B} = 0\\)',
                'Faraday\'s Law: \\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\)',
                'Ampere-Maxwell Law: \\(\\nabla \\times \\vec{H} = \\vec{J} + \\frac{\\partial \\vec{D}}{\\partial t}\\)'
            ]
        ]
    ],
    
    '2081 Baishakh' => [
        [
            'text' => 'The Magnetic field Intensity in a certain region is given by H = 20a_ρ - 10a_φ + 3a_z A/m. Transform this field vector into Cartesian co-ordinate at P(x:5, y:0, z:-1).',
            'chapter' => 'Introduction',
            'has_diagram' => false,
            'solution' => 'To transform the magnetic field intensity from cylindrical to Cartesian coordinates at point P(5,0,-1):<br><br>' .
                         'First, find φ at point P(5,0,-1):<br>' .
                         '\\(\\phi = \\tan^{-1}(y/x) = \\tan^{-1}(0/5) = 0^\\circ\\)<br><br>' .
                         'The transformation matrix from cylindrical to Cartesian coordinates is:<br>' .
                         '\\(\\begin{bmatrix} H_x \\\\ H_y \\\\ H_z \\end{bmatrix} = ' .
                         '\\begin{bmatrix} \\cos\\phi & -\\sin\\phi & 0 \\\\ \\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix}' .
                         '\\begin{bmatrix} H_\\rho \\\\ H_\\phi \\\\ H_z \\end{bmatrix}\\)<br><br>' .
                         'Substituting φ = 0°:<br>' .
                         '\\(\\begin{bmatrix} H_x \\\\ H_y \\\\ H_z \\end{bmatrix} = ' .
                         '\\begin{bmatrix} \\cos0^\\circ & -\\sin0^\\circ & 0 \\\\ \\sin0^\\circ & \\cos0^\\circ & 0 \\\\ 0 & 0 & 1 \\end{bmatrix}' .
                         '\\begin{bmatrix} 20 \\\\ -10 \\\\ 3 \\end{bmatrix} = ' .
                         '\\begin{bmatrix} 1 & 0 & 0 \\\\ 0 & 1 & 0 \\\\ 0 & 0 & 1 \\end{bmatrix}' .
                         '\\begin{bmatrix} 20 \\\\ -10 \\\\ 3 \\end{bmatrix}\\)<br><br>' .
                         'Therefore:<br>' .
                         '\\(H_x = 20\\)<br>' .
                         '\\(H_y = -10\\)<br>' .
                         '\\(H_z = 3\\)<br><br>' .
                         'So in Cartesian coordinates:<br>' .
                         '\\(\\vec{H} = 20\\hat{a}_x - 10\\hat{a}_y + 3\\hat{a}_z\\) A/m',
            'solution_has_diagram' => false,
            'notes' => 'Note that at point P(5,0,-1), which is on the positive x-axis, φ = 0°. This makes the transformation particularly simple since cos(0°) = 1 and sin(0°) = 0. In general, you would need to calculate φ based on the x and y coordinates of the point, being careful about the quadrant.',
            'formulas' => [
                '\\(\\phi = \\tan^{-1}(y/x)\\)',
                '\\(\\begin{bmatrix} \\hat{a}_x \\\\ \\hat{a}_y \\\\ \\hat{a}_z \\end{bmatrix} = \\begin{bmatrix} \\cos\\phi & -\\sin\\phi & 0 \\\\ \\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix} \\begin{bmatrix} \\hat{a}_\\rho \\\\ \\hat{a}_\\phi \\\\ \\hat{a}_z \\end{bmatrix}\\)'
            ]
        ],
        [
            'text' => 'A point charge of 6μC located at origin, uniform line charge density of 180nC/m lies along x-axis and uniform sheet charge of 25nC/m² lies on z=0 plane. Find E at point(1,2,4).',
            'chapter' => 'Electric Field',
            'has_diagram' => true,
            'diagram_path' => 'images/2081_baishakh_q2.png',
            'diagram_alt' => 'Point P(1,2,4) with point charge at origin, line charge on x-axis, and surface charge on z=0 plane',
            'solution' => 'To find the total electric field at P(1,2,4), we use superposition and calculate the field due to each source separately.<br><br>' .
                         '<strong>1. Field due to point charge at origin:</strong><br>' .
                         'Distance from origin to P: \\(r = \\sqrt{1^2 + 2^2 + 4^2} = \\sqrt{1 + 4 + 16} = \\sqrt{21} = 4.583\\) m<br>' .
                         'Unit vector: \\(\\hat{r} = \\frac{1\\hat{a}_x + 2\\hat{a}_y + 4\\hat{a}_z}{4.583} = 0.218\\hat{a}_x + 0.436\\hat{a}_y + 0.873\\hat{a}_z\\)<br>' .
                         'Field: \\(\\vec{E}_1 = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{r^2} \\hat{r} = (9 \\times 10^9) \\frac{6 \\times 10^{-6}}{21} (0.218\\hat{a}_x + 0.436\\hat{a}_y + 0.873\\hat{a}_z)\\)<br>' .
                         '\\(\\vec{E}_1 = 2571.4(0.218\\hat{a}_x + 0.436\\hat{a}_y + 0.873\\hat{a}_z) = 560.6\\hat{a}_x + 1121.2\\hat{a}_y + 2245.3\\hat{a}_z\\) V/m<br><br>' .
                         '<strong>2. Field due to line charge on x-axis:</strong><br>' .
                         'The line charge is along the x-axis, so we need the perpendicular distance from the x-axis to point P(1,2,4).<br>' .
                         'This distance is in the yz-plane: \\(\\rho = \\sqrt{y^2 + z^2} = \\sqrt{2^2 + 4^2} = \\sqrt{20} = 4.472\\) m<br>' .
                         'The direction is perpendicular to the x-axis in the direction of the projection of P onto the yz-plane: \\(\\hat{a}_\\rho = \\frac{2\\hat{a}_y + 4\\hat{a}_z}{4.472} = 0.447\\hat{a}_y + 0.894\\hat{a}_z\\)<br>' .
                         'Field: \\(\\vec{E}_2 = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} \\hat{a}_\\rho = \\frac{180 \\times 10^{-9}}{2\\pi(8.854 \\times 10^{-12})(4.472)} (0.447\\hat{a}_y + 0.894\\hat{a}_z)\\)<br>' .
                         '\\(\\vec{E}_2 = \\frac{180 \\times 10^{-9}}{2.49 \\times 10^{-10}} (0.447\\hat{a}_y + 0.894\\hat{a}_z) = 722.9(0.447\\hat{a}_y + 0.894\\hat{a}_z) = 323.1\\hat{a}_y + 646.2\\hat{a}_z\\) V/m<br><br>' .
                         '<strong>3. Field due to surface charge on z=0 plane:</strong><br>' .
                         'For an infinite plane, \\(\\vec{E}_3 = \\frac{\\rho_s}{2\\epsilon_0} \\hat{a}_n\\)<br>' .
                         'Since the plane is at z=0 and point P is at z=4 (z>0), the normal vector points in the positive z-direction: \\(\\hat{a}_n = \\hat{a}_z\\)<br>' .
                         '\\(\\vec{E}_3 = \\frac{25 \\times 10^{-9}}{2(8.854 \\times 10^{-12})} \\hat{a}_z = 1411.8\\hat{a}_z\\) V/m<br><br>' .
                         '<strong>Total field:</strong><br>' .
                         '\\(\\vec{E} = \\vec{E}_1 + \\vec{E}_2 + \\vec{E}_3 = 560.6\\hat{a}_x + (1121.2 + 323.1)\\hat{a}_y + (2245.3 + 646.2 + 1411.8)\\hat{a}_z\\)<br>' .
                         '\\(\\vec{E} = 560.6\\hat{a}_x + 1444.3\\hat{a}_y + 4303.3\\hat{a}_z\\) V/m',
            'solution_has_diagram' => true,
            'solution_diagram_path' => 'images/2081_baishakh_q2_solution.png',
            'solution_diagram_alt' => 'Electric field components from each source at point P(1,2,4)',
            'notes' => 'This problem demonstrates the superposition principle for electric fields. Note that for the line charge along the x-axis, the perpendicular distance is calculated in the yz-plane, and the field direction is radial from the x-axis in that plane. For the infinite plane at z=0, the field is uniform and perpendicular to the plane, with direction depending on which side of the plane the observation point is located.',
            'formulas' => [
                'Point charge: \\(\\vec{E} = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{r^2} \\hat{r}\\)',
                'Line charge: \\(\\vec{E} = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} \\hat{a}_\\rho\\)',
                'Surface charge: \\(\\vec{E} = \\frac{\\rho_s}{2\\epsilon_0} \\hat{a}_n\\)',
                'Superposition: \\(\\vec{E}_{total} = \\vec{E}_1 + \\vec{E}_2 + \\vec{E}_3\\)'
            ]
        ]
    ],
    
    '2080 Bhadra' => [
        [
            'text' => 'Express a scalar potential field V = x² + 2y² + 3z² in spherical coordinates. Find the value of V at a point(2,60°,90°).',
            'chapter' => 'Electric Field',
            'has_diagram' => false,
            'solution' => 'To express the scalar potential field V = x² + 2y² + 3z² in spherical coordinates, we substitute the relationships between Cartesian and spherical coordinates:<br><br>' .
                         'Cartesian to spherical coordinate transformations:<br>' .
                         '\\(x = r\\sin\\theta\\cos\\phi\\)<br>' .
                         '\\(y = r\\sin\\theta\\sin\\phi\\)<br>' .
                         '\\(z = r\\cos\\theta\\)<br><br>' .
                         'Substituting into V:<br>' .
                         '\\(V = (r\\sin\\theta\\cos\\phi)^2 + 2(r\\sin\\theta\\sin\\phi)^2 + 3(r\\cos\\theta)^2\\)<br>' .
                         '\\(V = r^2\\sin^2\\theta\\cos^2\\phi + 2r^2\\sin^2\\theta\\sin^2\\phi + 3r^2\\cos^2\\theta\\)<br>' .
                         '\\(V = r^2\\sin^2\\theta(\\cos^2\\phi + 2\\sin^2\\phi) + 3r^2\\cos^2\\theta\\)<br><br>' .
                         'We can simplify using trigonometric identities:<br>' .
                         '\\(\\cos^2\\phi + 2\\sin^2\\phi = \\cos^2\\phi + \\sin^2\\phi + \\sin^2\\phi = 1 + \\sin^2\\phi\\)<br><br>' .
                         'Therefore:<br>' .
                         '\\(V = r^2\\sin^2\\theta(1 + \\sin^2\\phi) + 3r^2\\cos^2\\theta\\)<br>' .
                         '\\(V = r^2[\\sin^2\\theta(1 + \\sin^2\\phi) + 3\\cos^2\\theta]\\)<br><br>' .
                         'Now, find V at point (r=2, θ=60°, φ=90°):<br>' .
                         '\\(\\sin\\theta = \\sin60^\\circ = \\sqrt{3}/2 = 0.866\\)<br>' .
                         '\\(\\cos\\theta = \\cos60^\\circ = 0.5\\)<br>' .
                         '\\(\\sin\\phi = \\sin90^\\circ = 1\\)<br>' .
                         '\\(\\cos\\phi = \\cos90^\\circ = 0\\)<br><br>' .
                         'Substituting:<br>' .
                         '\\(V = (2)^2[(0.866)^2(1 + (1)^2) + 3(0.5)^2]\\)<br>' .
                         '\\(V = 4[0.75(1 + 1) + 3(0.25)]\\)<br>' .
                         '\\(V = 4[0.75(2) + 0.75]\\)<br>' .
                         '\\(V = 4[1.5 + 0.75]\\)<br>' .
                         '\\(V = 4[2.25]\\)<br>' .
                         '\\(V = 9\\) volts',
            'solution_has_diagram' => false,
            'notes' => 'When transforming scalar fields between coordinate systems, we simply substitute the coordinate transformation equations. Unlike vector fields, scalar fields don\'t require transformation matrices because they don\'t have direction. The value of a scalar field at a point is the same regardless of the coordinate system used to describe that point.',
            'formulas' => [
                'Cartesian to Spherical: \\(x = r\\sin\\theta\\cos\\phi\\), \\(y = r\\sin\\theta\\sin\\phi\\), \\(z = r\\cos\\theta\\)',
                'Trigonometric Identity: \\(\\cos^2\\phi + \\sin^2\\phi = 1\\)'
            ]
        ],
        [
            'text' => 'Evaluate both sides of Stokes\'s theorem for the field E = 12 sinθ a_φ and the surface r=4, 0<θ< 90°, 0≤φ≤ 90°. Let the surface have the a_r direction.',
            'chapter' => 'Magnetic Field',
            'has_diagram' => true,
            'diagram_path' => 'images/2080_bhadra_q2.png',
            'diagram_alt' => 'Spherical surface r=4 with 0<θ<90°, 0≤φ≤90°',
            'solution' => 'Stokes\' theorem states that \\(\\oint_C \\vec{F} \\cdot d\\vec{l} = \\iint_S (\\nabla \\times \\vec{F}) \\cdot d\\vec{S}\\). We need to evaluate both sides for \\(\\vec{E} = 12\\sin\\theta \\hat{a}_\\phi\\) on the given surface.<br><br>' .
                         '<strong>Right-hand side (Surface integral):</strong><br>' .
                         'First, find \\(\\nabla \\times \\vec{E}\\) in spherical coordinates:<br>' .
                         'For \\(\\vec{E} = E_\\phi \\hat{a}_\\phi = 12\\sin\\theta \\hat{a}_\\phi\\), the curl is:<br>' .
                         '\\(\\nabla \\times \\vec{E} = \\frac{1}{r\\sin\\theta} \\left[ \\frac{\\partial}{\\partial \\theta} (\\sin\\theta E_\\phi) \\right] \\hat{a}_r - \\frac{1}{r} \\left[ \\frac{\\partial}{\\partial r} (r E_\\phi) \\right] \\hat{a}_\\theta + 0\\hat{a}_\\phi\\)<br>' .
                         'Since \\(E_\\phi = 12\\sin\\theta\\) is independent of r:<br>' .
                         '\\(\\nabla \\times \\vec{E} = \\frac{1}{r\\sin\\theta} \\left[ \\frac{\\partial}{\\partial \\theta} (\\sin\\theta \\cdot 12\\sin\\theta) \\right] \\hat{a}_r - \\frac{1}{r} \\left[ \\frac{\\partial}{\\partial r} (r \\cdot 12\\sin\\theta) \\right] \\hat{a}_\\theta\\)<br>' .
                         '\\(\\nabla \\times \\vec{E} = \\frac{1}{r\\sin\\theta} \\left[ \\frac{\\partial}{\\partial \\theta} (12\\sin^2\\theta) \\right] \\hat{a}_r - \\frac{1}{r} \\left[ 12\\sin\\theta \\right] \\hat{a}_\\theta\\)<br>' .
                         '\\(\\nabla \\times \\vec{E} = \\frac{1}{r\\sin\\theta} \\left[ 24\\sin\\theta\\cos\\theta \\right] \\hat{a}_r - \\frac{12\\sin\\theta}{r} \\hat{a}_\\theta\\)<br>' .
                         '\\(\\nabla \\times \\vec{E} = \\frac{24\\cos\\theta}{r} \\hat{a}_r - \\frac{12\\sin\\theta}{r} \\hat{a}_\\theta\\)<br><br>' .
                         'Now, \\(d\\vec{S} = r^2\\sin\\theta d\\theta d\\phi \\hat{a}_r\\) (since surface has \\(\\hat{a}_r\\) direction)<br>' .
                         'So \\((\\nabla \\times \\vec{E}) \\cdot d\\vec{S} = \\left( \\frac{24\\cos\\theta}{r} \\right) (r^2\\sin\\theta d\\theta d\\phi) = 24r\\cos\\theta\\sin\\theta d\\theta d\\phi\\)<br><br>' .
                         'Integrate over the surface (r=4, 0≤θ≤π/2, 0≤φ≤π/2):<br>' .
                         '\\(\\iint_S (\\nabla \\times \\vec{E}) \\cdot d\\vec{S} = \\int_{\\phi=0}^{\\pi/2} \\int_{\\theta=0}^{\\pi/2} 24(4)\\cos\\theta\\sin\\theta d\\theta d\\phi\\)<br>' .
                         '\\(= 96 \\int_{0}^{\\pi/2} d\\phi \\int_{0}^{\\pi/2} \\cos\\theta\\sin\\theta d\\theta\\)<br>' .
                         'Let \\(u = \\sin\\theta\\), then \\(du = \\cos\\theta d\\theta\\), when θ=0, u=0; θ=π/2, u=1<br>' .
                         '\\(= 96 \\left[ \\phi \\right]_{0}^{\\pi/2} \\int_{0}^{1} u du = 96 \\left( \\frac{\\pi}{2} \\right) \\left[ \\frac{u^2}{2} \\right]_{0}^{1} = 96 \\left( \\frac{\\pi}{2} \\right) \\left( \\frac{1}{2} \\right) = 24\\pi\\)<br><br>' .
                         '<strong>Left-hand side (Line integral):</strong><br>' .
                         'The boundary C of the surface consists of 4 parts:<br>' .
                         '1. θ=0, φ from 0 to π/2 (but sinθ=0, so E=0)<br>' .
                         '2. φ=π/2, θ from 0 to π/2<br>' .
                         '3. θ=π/2, φ from π/2 to 0<br>' .
                         '4. φ=0, θ from π/2 to 0<br><br>' .
                         'Only parts 2 and 4 contribute since E=0 when θ=0 or θ=π/2.<br>' .
                         'For part 2 (φ=π/2, θ from 0 to π/2):<br>' .
                         '\\(d\\vec{l} = r d\\theta \\hat{a}_\\theta + r\\sin\\theta d\\phi \\hat{a}_\\phi\\), but dφ=0, so \\(d\\vec{l} = 4 d\\theta \\hat{a}_\\theta\\)<br>' .
                         '\\(\\vec{E} \\cdot d\\vec{l} = (12\\sin\\theta \\hat{a}_\\phi) \\cdot (4 d\\theta \\hat{a}_\\theta) = 0\\) (since \\(\\hat{a}_\\phi \\cdot \\hat{a}_\\theta = 0\\))<br><br>' .
                         'For part 4 (φ=0, θ from π/2 to 0):<br>' .
                         '\\(d\\vec{l} = 4 d\\theta \\hat{a}_\\theta\\) (dφ=0)<br>' .
                         '\\(\\vec{E} \\cdot d\\vec{l} = (12\\sin\\theta \\hat{a}_\\phi) \\cdot (4 d\\theta \\hat{a}_\\theta) = 0\\)<br><br>' .
                         'Wait, this suggests the line integral is 0, but that contradicts our surface integral result. Let\'s re-examine.<br><br>' .
                         'Actually, we need to consider the correct boundary. For the surface r=4, 0≤θ≤π/2, 0≤φ≤π/2, the boundary consists of curves at θ=0, θ=π/2, φ=0, and φ=π/2. But when we traverse the boundary, we need to maintain the right-hand rule with respect to the surface normal (\\(\\hat{a}_r\\)).<br><br>' .
                         'The correct boundary traversal is:<br>' .
                         '1. From (r=4, θ=π/2, φ=0) to (r=4, θ=π/2, φ=π/2) along θ=π/2<br>' .
                         '2. From (r=4, θ=π/2, φ=π/2) to (r=4, θ=0, φ=π/2) along φ=π/2<br>' .
                         '3. From (r=4, θ=0, φ=π/2) to (r=4, θ=0, φ=0) along θ=0<br>' .
                         '4. From (r=4, θ=0, φ=0) to (r=4, θ=π/2, φ=0) along φ=0<br><br>' .
                         'Now, \\(\\vec{E} = 12\\sin\\theta \\hat{a}_\\phi\\), so it only has a φ-component.<br>' .
                         'For segments 1 and 3 (constant θ), \\(d\\vec{l} = r\\sin\\theta d\\phi \\hat{a}_\\phi\\)<br>' .
                         'For segments 2 and 4 (constant φ), \\(d\\vec{l} = r d\\theta \\hat{a}_\\theta\\)<br><br>' .
                         'Segment 1 (θ=π/2, φ: 0→π/2):<br>' .
                         '\\(\\vec{E} \\cdot d\\vec{l} = (12\\sin(\\pi/2) \\hat{a}_\\phi) \\cdot (4\\sin(\\pi/2) d\\phi \\hat{a}_\\phi) = 12(1)(4)(1) d\\phi = 48 d\\phi\\)<br>' .
                         '\\(\\int_{0}^{\\pi/2} 48 d\\phi = 48 \\left[ \\phi \\right]_{0}^{\\pi/2} = 48(\\pi/2) = 24\\pi\\)<br><br>' .
                         'Segment 2 (φ=π/2, θ: π/2→0):<br>' .
                         '\\(\\vec{E} \\cdot d\\vec{l} = (12\\sin\\theta \\hat{a}_\\phi) \\cdot (4 d\\theta \\hat{a}_\\theta) = 0\\)<br><br>' .
                         'Segment 3 (θ=0, φ: π/2→0):<br>' .
                         '\\(\\vec{E} \\cdot d\\vec{l} = (12\\sin(0) \\hat{a}_\\phi) \\cdot (4\\sin(0) d\\phi \\hat{a}_\\phi) = 0\\)<br><br>' .
                         'Segment 4 (φ=0, θ: 0→π/2):<br>' .
                         '\\(\\vec{E} \\cdot d\\vec{l} = (12\\sin\\theta \\hat{a}_\\phi) \\cdot (4 d\\theta \\hat{a}_\\theta) = 0\\)<br><br>' .
                         'Total line integral = 24π + 0 + 0 + 0 = 24π<br><br>' .
                         '<strong>Conclusion:</strong><br>' .
                         'Both sides equal 24π, thus verifying Stokes\' theorem.',
            'solution_has_diagram' => true,
            'solution_diagram_path' => 'images/2080_bhadra_q2_solution.png',
            'solution_diagram_alt' => 'Boundary of spherical surface showing the four segments for line integral',
            'notes' => 'Stokes\' theorem relates a surface integral of the curl of a vector field to a line integral of the vector field around the boundary of the surface. The key is to correctly identify the boundary and traverse it according to the right-hand rule with respect to the surface normal. In spherical coordinates, be careful with the differential length elements, which depend on the position.',
            'formulas' => [
                'Stokes\' Theorem: \\(\\oint_C \\vec{F} \\cdot d\\vec{l} = \\iint_S (\\nabla \\times \\vec{F}) \\cdot d\\vec{S}\\)',
                'Curl in Spherical Coordinates: \\(\\nabla \\times \\vec{F} = \\frac{1}{r\\sin\\theta} \\left[ \\frac{\\partial}{\\partial \\theta} (\\sin\\theta F_\\phi) - \\frac{\\partial F_\\theta}{\\partial \\phi} \\right] \\hat{a}_r + \\frac{1}{r} \\left[ \\frac{1}{\\sin\\theta} \\frac{\\partial F_r}{\\partial \\phi} - \\frac{\\partial}{\\partial r} (r F_\\phi) \\right] \\hat{a}_\\theta + \\frac{1}{r} \\left[ \\frac{\\partial}{\\partial r} (r F_\\theta) - \\frac{\\partial F_r}{\\partial \\theta} \\right] \\hat{a}_\\phi\\)',
                'Differential Length: \\(d\\vec{l} = dr\\hat{a}_r + r d\\theta\\hat{a}_\\theta + r\\sin\\theta d\\phi\\hat{a}_\\phi\\)',
                'Differential Surface: \\(d\\vec{S} = r^2\\sin\\theta d\\theta d\\phi \\hat{a}_r\\) (for constant r surface)'
            ]
        ]
    ]
];

// Include the viewer module
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/pyq_with_solution_viewer.php';

?>