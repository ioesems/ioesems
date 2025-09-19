<?php
// Define subject title
$subject_title = "Electromagnetics Question Bank with Solutions";

// Define questions array with solutions
$questions = [
    [
        'chapter' => 1,
        'title' => 'Vector Calculus & Coordinate Systems',
        'questions' => [
            [
                'text' => 'Transform the vector \\(\\vec{F} = 4\\hat{a}_x - 2\\hat{a}_y + 4\\hat{a}_z\\) at point \\(P(10, -8, 6)\\) from Cartesian to cylindrical coordinates.',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/vector_transformation.png',
                'diagram_alt' => 'Diagram showing vector transformation between Cartesian and cylindrical coordinate systems',
                'solution' => 'To transform from Cartesian to cylindrical coordinates, we use the following relationships:<br><br>' .
                             'The cylindrical coordinates are related to Cartesian coordinates by:<br>' .
                             '\\(\\rho = \\sqrt{x^2 + y^2}\\), \\(\\phi = \\tan^{-1}(y/x)\\), \\(z = z\\)<br><br>' .
                             'The unit vectors transform as:<br>' .
                             '\\(\\hat{a}_\\rho = \\cos\\phi \\hat{a}_x + \\sin\\phi \\hat{a}_y\\)<br>' .
                             '\\(\\hat{a}_\\phi = -\\sin\\phi \\hat{a}_x + \\cos\\phi \\hat{a}_y\\)<br>' .
                             '\\(\\hat{a}_z = \\hat{a}_z\\)<br><br>' .
                             'At point P(10, -8, 6):<br>' .
                             '\\(\\rho = \\sqrt{10^2 + (-8)^2} = \\sqrt{164} = 12.806\\)<br>' .
                             '\\(\\phi = \\tan^{-1}(-8/10) = \\tan^{-1}(-0.8) = -38.66^\\circ\\)<br><br>' .
                             'The transformation matrix is:<br>' .
                             '\\(\\begin{bmatrix} F_\\rho \\\\ F_\\phi \\\\ F_z \\end{bmatrix} = ' .
                             '\\begin{bmatrix} \\cos\\phi & \\sin\\phi & 0 \\\\ -\\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix}' .
                             '\\begin{bmatrix} F_x \\\\ F_y \\\\ F_z \\end{bmatrix}\\)<br><br>' .
                             'Substituting values:<br>' .
                             '\\(F_\\rho = 4\\cos(-38.66^\\circ) + (-2)\\sin(-38.66^\\circ) = 4(0.781) + (-2)(-0.625) = 3.124 + 1.25 = 4.374\\)<br>' .
                             '\\(F_\\phi = 4(-\\sin(-38.66^\\circ)) + (-2)\\cos(-38.66^\\circ) = 4(0.625) + (-2)(0.781) = 2.5 - 1.562 = 0.938\\)<br>' .
                             '\\(F_z = 4\\)<br><br>' .
                             'Therefore, in cylindrical coordinates:<br>' .
                             '\\(\\vec{F} = 4.374\\hat{a}_\\rho + 0.938\\hat{a}_\\phi + 4\\hat{a}_z\\)',
                'solution_has_diagram' => true,
                'solution_diagram_path' => 'images/vector_transformation_solution.png',
                'solution_diagram_alt' => 'Step-by-step vector transformation process',
                'notes' => 'Remember that the transformation depends on the location of the point, not just the vector components. The angle φ is measured from the positive x-axis, and the transformation matrix rotates the coordinate system to align with the cylindrical coordinates at that specific point.',
                'formulas' => [
                    '\\(\\rho = \\sqrt{x^2 + y^2}\\)',
                    '\\(\\phi = \\tan^{-1}(y/x)\\)',
                    '\\(\\begin{bmatrix} \\hat{a}_\\rho \\\\ \\hat{a}_\\phi \\\\ \\hat{a}_z \\end{bmatrix} = \\begin{bmatrix} \\cos\\phi & \\sin\\phi & 0 \\\\ -\\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix} \\begin{bmatrix} \\hat{a}_x \\\\ \\hat{a}_y \\\\ \\hat{a}_z \\end{bmatrix}\\)'
                ]
            ],
            [
                'text' => 'Given a point \\(P(-2, 6, 3)\\) and vector field \\(\\vec{E} = y\\hat{a}_x + (xy+z)\\hat{a}_y\\), express P and E in spherical coordinates.',
                'year' => '2023 Sample',
                'has_diagram' => false,
                'solution' => 'To transform from Cartesian to spherical coordinates, we need to find the spherical coordinates of point P and then transform the vector field components.<br><br>' .
                             'For point P(-2, 6, 3):<br>' .
                             '\\(r = \\sqrt{x^2 + y^2 + z^2} = \\sqrt{(-2)^2 + 6^2 + 3^2} = \\sqrt{4 + 36 + 9} = \\sqrt{49} = 7\\)<br>' .
                             '\\(\\theta = \\cos^{-1}(z/r) = \\cos^{-1}(3/7) = \\cos^{-1}(0.4286) = 64.62^\\circ\\)<br>' .
                             '\\(\\phi = \\tan^{-1}(y/x) = \\tan^{-1}(6/(-2)) = \\tan^{-1}(-3) = 108.43^\\circ\\) (since x<0, y>0, second quadrant)<br><br>' .
                             'The vector field transformation uses the matrix:<br>' .
                             '\\(\\begin{bmatrix} E_r \\\\ E_\\theta \\\\ E_\\phi \\end{bmatrix} = ' .
                             '\\begin{bmatrix} \\sin\\theta\\cos\\phi & \\sin\\theta\\sin\\phi & \\cos\\theta \\\\ \\cos\\theta\\cos\\phi & \\cos\\theta\\sin\\phi & -\\sin\\theta \\\\ -\\sin\\phi & \\cos\\phi & 0 \\end{bmatrix}' .
                             '\\begin{bmatrix} E_x \\\\ E_y \\\\ E_z \\end{bmatrix}\\)<br><br>' .
                             'At point P(-2, 6, 3), the vector field components are:<br>' .
                             '\\(E_x = y = 6\\)<br>' .
                             '\\(E_y = xy + z = (-2)(6) + 3 = -12 + 3 = -9\\)<br>' .
                             '\\(E_z = 0\\)<br><br>' .
                             'Substituting the angles and field components:<br>' .
                             '\\(E_r = 6\\sin(64.62^\\circ)\\cos(108.43^\\circ) + (-9)\\sin(64.62^\\circ)\\sin(108.43^\\circ) + 0\\)<br>' .
                             '\\(E_r = 6(0.903)(-0.316) + (-9)(0.903)(0.949) = -1.71 - 7.70 = -9.41\\)<br><br>' .
                             '\\(E_\\theta = 6\\cos(64.62^\\circ)\\cos(108.43^\\circ) + (-9)\\cos(64.62^\\circ)\\sin(108.43^\\circ) + 0\\)<br>' .
                             '\\(E_\\theta = 6(0.429)(-0.316) + (-9)(0.429)(0.949) = -0.81 - 3.66 = -4.47\\)<br><br>' .
                             '\\(E_\\phi = 6(-\\sin(108.43^\\circ)) + (-9)\\cos(108.43^\\circ) + 0\\)<br>' .
                             '\\(E_\\phi = 6(-0.949) + (-9)(-0.316) = -5.69 + 2.84 = -2.85\\)<br><br>' .
                             'Therefore, in spherical coordinates at point P:<br>' .
                             'Point P: \\((r, \\theta, \\phi) = (7, 64.62^\\circ, 108.43^\\circ)\\)<br>' .
                             'Vector field: \\(\\vec{E} = -9.41\\hat{a}_r - 4.47\\hat{a}_\\theta - 2.85\\hat{a}_\\phi\\)',
                'solution_has_diagram' => false,
                'notes' => 'Note that the vector field transformation depends on the location where the field is evaluated. The transformation matrix is different for each point in space because the spherical coordinate unit vectors change direction depending on position.',
                'formulas' => [
                    '\\(r = \\sqrt{x^2 + y^2 + z^2}\\)',
                    '\\(\\theta = \\cos^{-1}(z/r)\\)',
                    '\\(\\phi = \\tan^{-1}(y/x)\\)',
                    '\\(\\begin{bmatrix} \\hat{a}_r \\\\ \\hat{a}_\\theta \\\\ \\hat{a}_\\phi \\end{bmatrix} = \\begin{bmatrix} \\sin\\theta\\cos\\phi & \\sin\\theta\\sin\\phi & \\cos\\theta \\\\ \\cos\\theta\\cos\\phi & \\cos\\theta\\sin\\phi & -\\sin\\theta \\\\ -\\sin\\phi & \\cos\\phi & 0 \\end{bmatrix} \\begin{bmatrix} \\hat{a}_x \\\\ \\hat{a}_y \\\\ \\hat{a}_z \\end{bmatrix}\\)'
                ]
            ]
        ]
    ],
    [
        'chapter' => 2,
        'title' => 'Electrostatics',
        'questions' => [
            [
                'text' => 'A point charge \\(q = 5 \\times 10^{-9}\\) C is located at the origin. Find the electric field \\(\\vec{E}\\) at point \\(P(3, 4, 5)\\) using Coulomb\'s law: \\(\\vec{E} = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{r^2} \\hat{r}\\), where \\(\\epsilon_0 = 8.854 \\times 10^{-12}\\) F/m.',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/point_charge.png',
                'diagram_alt' => 'Point charge at origin with field point P(3,4,5)',
                'solution' => 'To find the electric field at point P(3, 4, 5) due to a point charge at the origin:<br><br>' .
                             'First, find the distance r from the origin to point P:<br>' .
                             '\\(r = \\sqrt{x^2 + y^2 + z^2} = \\sqrt{3^2 + 4^2 + 5^2} = \\sqrt{9 + 16 + 25} = \\sqrt{50} = 7.071\\) m<br><br>' .
                             'The unit vector \\(\\hat{r}\\) in the direction from the origin to P is:<br>' .
                             '\\(\\hat{r} = \\frac{\\vec{r}}{r} = \\frac{3\\hat{a}_x + 4\\hat{a}_y + 5\\hat{a}_z}{7.071} = 0.424\\hat{a}_x + 0.566\\hat{a}_y + 0.707\\hat{a}_z\\)<br><br>' .
                             'Now apply Coulomb\'s law:<br>' .
                             '\\(\\vec{E} = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{r^2} \\hat{r}\\)<br>' .
                             'where \\(\\frac{1}{4\\pi\\epsilon_0} = 9 \\times 10^9\\) N·m²/C²<br><br>' .
                             'Substituting values:<br>' .
                             '\\(\\vec{E} = (9 \\times 10^9) \\frac{5 \\times 10^{-9}}{(7.071)^2} (0.424\\hat{a}_x + 0.566\\hat{a}_y + 0.707\\hat{a}_z)\\)<br>' .
                             '\\(\\vec{E} = (9 \\times 10^9) \\frac{5 \\times 10^{-9}}{50} (0.424\\hat{a}_x + 0.566\\hat{a}_y + 0.707\\hat{a}_z)\\)<br>' .
                             '\\(\\vec{E} = (0.9) (0.424\\hat{a}_x + 0.566\\hat{a}_y + 0.707\\hat{a}_z)\\)<br>' .
                             '\\(\\vec{E} = 0.382\\hat{a}_x + 0.509\\hat{a}_y + 0.636\\hat{a}_z\\) V/m<br><br>' .
                             'The magnitude of the electric field is:<br>' .
                             '\\(|\\vec{E}| = \\sqrt{(0.382)^2 + (0.509)^2 + (0.636)^2} = \\sqrt{0.146 + 0.259 + 0.404} = \\sqrt{0.809} = 0.899\\) V/m<br><br>' .
                             'This makes sense because:<br>' .
                             '\\(|\\vec{E}| = \\frac{1}{4\\pi\\epsilon_0} \\frac{|q|}{r^2} = (9 \\times 10^9) \\frac{5 \\times 10^{-9}}{50} = 0.9\\) V/m',
                'solution_has_diagram' => true,
                'solution_diagram_path' => 'images/point_charge_solution.png',
                'solution_diagram_alt' => 'Electric field vector at point P showing components',
                'notes' => 'Remember that the electric field due to a positive point charge points away from the charge. The field strength decreases with the square of the distance from the charge. Always check that your unit vector points in the correct direction (from source to field point for positive charges).',
                'formulas' => [
                    '\\(\\vec{E} = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{r^2} \\hat{r}\\)',
                    '\\(\\frac{1}{4\\pi\\epsilon_0} = 9 \\times 10^9\\) N·m²/C²',
                    '\\(\\hat{r} = \\frac{\\vec{r}}{|\\vec{r}|}\\)',
                    '\\(|\\vec{E}| = \\frac{1}{4\\pi\\epsilon_0} \\frac{|q|}{r^2}\\)'
                ]
            ],
            [
                'text' => 'An infinite line charge with density \\(\\rho_l = 2 \\times 10^{-9}\\) C/m lies along the z-axis. Find the electric field at point \\(P(4, 0, 3)\\) using Gauss\'s law.',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/line_charge.png',
                'diagram_alt' => 'Infinite line charge along z-axis with point P at (4,0,3)',
                'solution' => 'For an infinite line charge along the z-axis, we use Gauss\'s law with a cylindrical Gaussian surface.<br><br>' .
                             'The electric field due to an infinite line charge is radial and depends only on the perpendicular distance from the line:<br>' .
                             '\\(\\vec{E} = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} \\hat{a}_\\rho\\)<br><br>' .
                             'At point P(4, 0, 3), the perpendicular distance from the z-axis is:<br>' .
                             '\\(\\rho = \\sqrt{x^2 + y^2} = \\sqrt{4^2 + 0^2} = 4\\) m<br><br>' .
                             'The direction \\(\\hat{a}_\\rho\\) at point P(4, 0, 3) is in the direction of increasing ρ, which is radially outward from the z-axis. In Cartesian coordinates at this point:<br>' .
                             '\\(\\hat{a}_\\rho = \\cos\\phi \\hat{a}_x + \\sin\\phi \\hat{a}_y\\)<br>' .
                             'Since P is at (4, 0, 3), φ = 0°, so:<br>' .
                             '\\(\\hat{a}_\\rho = \\cos(0) \\hat{a}_x + \\sin(0) \\hat{a}_y = \\hat{a}_x\\)<br><br>' .
                             'Now calculate the magnitude:<br>' .
                             '\\(|\\vec{E}| = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} = \\frac{2 \\times 10^{-9}}{2\\pi(8.854 \\times 10^{-12})(4)}\\)<br>' .
                             '\\(|\\vec{E}| = \\frac{2 \\times 10^{-9}}{2.22 \\times 10^{-10}} = 9.01\\) V/m<br><br>' .
                             'Therefore, the electric field at P(4, 0, 3) is:<br>' .
                             '\\(\\vec{E} = 9.01 \\hat{a}_x\\) V/m<br><br>' .
                             'Note that the z-coordinate (z=3) doesn\'t affect the result because the line charge is infinite and uniform along the z-axis, making the field independent of z.',
                'solution_has_diagram' => false,
                'notes' => 'For infinite line charges, the electric field is always perpendicular to the line and depends only on the radial distance. The field strength decreases as 1/ρ (not 1/ρ² like point charges). This is because the "amount of charge" effectively increases with distance when you consider the cylindrical symmetry.',
                'formulas' => [
                    '\\(\\vec{E} = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} \\hat{a}_\\rho\\)',
                    '\\(\\rho = \\sqrt{x^2 + y^2}\\)',
                    '\\(\\hat{a}_\\rho = \\cos\\phi \\hat{a}_x + \\sin\\phi \\hat{a}_y\\)'
                ]
            ]
        ]
    ],
    [
        'chapter' => 3,
        'title' => 'Magnetostatics',
        'questions' => [
            [
                'text' => 'A current filament \\(I = 5\\) A flows along the z-axis from \\(z = -\\infty\\) to \\(z = \\infty\\). Find the magnetic field intensity \\(\\vec{H}\\) at point \\(P(3, 4, 0)\\) using the Biot-Savart law.',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/biot_savart.png',
                'diagram_alt' => 'Current filament along z-axis with point P in xy-plane',
                'solution' => 'For an infinite straight current filament along the z-axis, we can use Ampere\'s law (which is derived from Biot-Savart law) to find the magnetic field.<br><br>' .
                             'The magnetic field intensity due to an infinite straight current is:<br>' .
                             '\\(\\vec{H} = \\frac{I}{2\\pi\\rho} \\hat{a}_\\phi\\)<br><br>' .
                             'At point P(3, 4, 0), the perpendicular distance from the z-axis is:<br>' .
                             '\\(\\rho = \\sqrt{x^2 + y^2} = \\sqrt{3^2 + 4^2} = \\sqrt{25} = 5\\) m<br><br>' .
                             'The direction \\(\\hat{a}_\\phi\\) is azimuthal (circling around the z-axis). Using the right-hand rule (thumb in direction of current, fingers curl in direction of field), at point P(3, 4, 0):<br>' .
                             '\\(\\hat{a}_\\phi = -\\sin\\phi \\hat{a}_x + \\cos\\phi \\hat{a}_y\\)<br><br>' .
                             'First, find φ:<br>' .
                             '\\(\\phi = \\tan^{-1}(y/x) = \\tan^{-1}(4/3) = 53.13^\\circ\\)<br><br>' .
                             'Now calculate the components:<br>' .
                             '\\(\\hat{a}_\\phi = -\\sin(53.13^\\circ) \\hat{a}_x + \\cos(53.13^\\circ) \\hat{a}_y = -0.8 \\hat{a}_x + 0.6 \\hat{a}_y\\)<br><br>' .
                             'The magnitude of H is:<br>' .
                             '\\(|\\vec{H}| = \\frac{I}{2\\pi\\rho} = \\frac{5}{2\\pi(5)} = \\frac{5}{31.42} = 0.159\\) A/m<br><br>' .
                             'Therefore, the magnetic field intensity at P(3, 4, 0) is:<br>' .
                             '\\(\\vec{H} = 0.159(-0.8 \\hat{a}_x + 0.6 \\hat{a}_y) = -0.127 \\hat{a}_x + 0.095 \\hat{a}_y\\) A/m<br><br>' .
                             'We can verify this using the Biot-Savart law directly:<br>' .
                             '\\(d\\vec{H} = \\frac{I}{4\\pi} \\frac{d\\vec{l} \\times \\hat{R}}{R^2}\\)<br>' .
                             'For a current element \\(Id\\vec{l} = Idz \\hat{a}_z\\) at position (0,0,z) and field point at (3,4,0), the vector \\(\\vec{R} = 3\\hat{a}_x + 4\\hat{a}_y - z\\hat{a}_z\\)<br>' .
                             'The cross product \\(d\\vec{l} \\times \\vec{R} = (Idz \\hat{a}_z) \\times (3\\hat{a}_x + 4\\hat{a}_y - z\\hat{a}_z) = Idz(3\\hat{a}_y - 4\\hat{a}_x)\\)<br>' .
                             'Integrating from -∞ to ∞ gives the same result as above.',
                'solution_has_diagram' => true,
                'solution_diagram_path' => 'images/biot_savart_solution.png',
                'solution_diagram_alt' => 'Magnetic field lines circling around current filament',
                'notes' => 'The magnetic field due to a straight current filament forms concentric circles around the wire. The field strength decreases as 1/ρ. The direction follows the right-hand rule: if you point your thumb in the direction of current, your fingers curl in the direction of the magnetic field.',
                'formulas' => [
                    '\\(\\vec{H} = \\frac{I}{2\\pi\\rho} \\hat{a}_\\phi\\)',
                    '\\(\\hat{a}_\\phi = -\\sin\\phi \\hat{a}_x + \\cos\\phi \\hat{a}_y\\)',
                    '\\(d\\vec{H} = \\frac{I}{4\\pi} \\frac{d\\vec{l} \\times \\hat{R}}{R^2}\\)'
                ]
            ]
        ]
    ]
];

// Include the viewer module
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/question_with_solution_viewer.php';

?>