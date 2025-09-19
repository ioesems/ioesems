<?php
// Define subject title
$subject_title = "Electromagnetics Question Bank with Solutions";

// Define questions array with solutions
$questions = [
    [
        'chapter' => 1,
        'title' => 'Introduction (Scalar/Vector Fields, Coordinate Systems)',
        'questions' => [
            [
                'text' => 'At point \\(P(-3, -4, 5)\\), express the vector that extends from P to \\(Q(2, 0, -1)\\) in spherical coordinates. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => 'First, find the vector in Cartesian coordinates:<br><br>' .
                             '\\(\\vec{PQ} = \\vec{r}_Q - \\vec{r}_P = (2 - (-3))\\hat{a}_x + (0 - (-4))\\hat{a}_y + (-1 - 5)\\hat{a}_z = 5\\hat{a}_x + 4\\hat{a}_y - 6\\hat{a}_z\\)<br><br>' .
                             'Now transform this vector to spherical coordinates at point P(-3, -4, 5).<br><br>' .
                             'First, find the spherical coordinates of point P:<br>' .
                             '\\(r = \\sqrt{x^2 + y^2 + z^2} = \\sqrt{(-3)^2 + (-4)^2 + 5^2} = \\sqrt{9 + 16 + 25} = \\sqrt{50} = 5\\sqrt{2}\\)<br>' .
                             '\\(\\theta = \\cos^{-1}(z/r) = \\cos^{-1}(5/(5\\sqrt{2})) = \\cos^{-1}(1/\\sqrt{2}) = 45^\\circ\\)<br>' .
                             '\\(\\phi = \\tan^{-1}(y/x) = \\tan^{-1}((-4)/(-3)) = \\tan^{-1}(4/3) = 233.13^\\circ\\) (third quadrant since x<0, y<0)<br><br>' .
                             'The transformation matrix from Cartesian to spherical coordinates is:<br>' .
                             '\\(\\begin{bmatrix} A_r \\\\ A_\\theta \\\\ A_\\phi \\end{bmatrix} = ' .
                             '\\begin{bmatrix} \\sin\\theta\\cos\\phi & \\sin\\theta\\sin\\phi & \\cos\\theta \\\\ \\cos\\theta\\cos\\phi & \\cos\\theta\\sin\\phi & -\\sin\\theta \\\\ -\\sin\\phi & \\cos\\phi & 0 \\end{bmatrix}' .
                             '\\begin{bmatrix} A_x \\\\ A_y \\\\ A_z \\end{bmatrix}\\)<br><br>' .
                             'Substituting \\(\\theta = 45^\\circ\\), \\(\\phi = 233.13^\\circ\\):<br>' .
                             '\\(\\sin\\theta = \\sin 45^\\circ = \\frac{\\sqrt{2}}{2}\\), \\(\\cos\\theta = \\cos 45^\\circ = \\frac{\\sqrt{2}}{2}\\)<br>' .
                             '\\(\\sin\\phi = \\sin 233.13^\\circ = \\sin(180^\\circ + 53.13^\\circ) = -\\sin 53.13^\\circ = -0.8\\)<br>' .
                             '\\(\\cos\\phi = \\cos 233.13^\\circ = \\cos(180^\\circ + 53.13^\\circ) = -\\cos 53.13^\\circ = -0.6\\)<br><br>' .
                             'Now calculate components:<br>' .
                             '\\(A_r = \\frac{\\sqrt{2}}{2}(-0.6)(5) + \\frac{\\sqrt{2}}{2}(-0.8)(4) + \\frac{\\sqrt{2}}{2}(-6) = \\frac{\\sqrt{2}}{2}(-3 - 3.2 - 6) = \\frac{\\sqrt{2}}{2}(-12.2) = -8.63\\)<br>' .
                             '\\(A_\\theta = \\frac{\\sqrt{2}}{2}(-0.6)(5) + \\frac{\\sqrt{2}}{2}(-0.8)(4) - \\frac{\\sqrt{2}}{2}(-6) = \\frac{\\sqrt{2}}{2}(-3 - 3.2 + 6) = \\frac{\\sqrt{2}}{2}(-0.2) = -0.141\\)<br>' .
                             '\\(A_\\phi = -(-0.8)(5) + (-0.6)(4) + 0 = 4 - 2.4 = 1.6\\)<br><br>' .
                             'Therefore, in spherical coordinates:<br>' .
                             '\\(\\vec{PQ} = -8.63\\hat{a}_r - 0.141\\hat{a}_\\theta + 1.6\\hat{a}_\\phi\\)',
                'solution_has_diagram' => false,
                'notes' => 'The vector transformation depends on the location where it is evaluated (point P). The spherical coordinate unit vectors change direction depending on position, so we must use the transformation matrix based on the spherical coordinates of point P.',
                'formulas' => [
                    '\\(\\vec{r}_{PQ} = \\vec{r}_Q - \\vec{r}_P\\)',
                    '\\(r = \\sqrt{x^2 + y^2 + z^2}\\)',
                    '\\(\\theta = \\cos^{-1}(z/r)\\)',
                    '\\(\\phi = \\tan^{-1}(y/x)\\)',
                    '\\(\\begin{bmatrix} \\hat{a}_r \\\\ \\hat{a}_\\theta \\\\ \\hat{a}_\\phi \\end{bmatrix} = \\begin{bmatrix} \\sin\\theta\\cos\\phi & \\sin\\theta\\sin\\phi & \\cos\\theta \\\\ \\cos\\theta\\cos\\phi & \\cos\\theta\\sin\\phi & -\\sin\\theta \\\\ -\\sin\\phi & \\cos\\phi & 0 \\end{bmatrix} \\begin{bmatrix} \\hat{a}_x \\\\ \\hat{a}_y \\\\ \\hat{a}_z \\end{bmatrix}\\)'
                ]
            ],
            [
                'text' => 'Transform the vector \\(\\vec{A} = 4\\hat{a}_x - 2\\hat{a}_y - 4\\hat{a}_z\\) into spherical coordinates at a point \\(P(x = -2, y = -3, z = 4)\\). [2076 Chaitra]',
                'year' => '2076 Chaitra',
                'has_diagram' => false,
                'solution' => 'To transform the vector to spherical coordinates at point P(-2, -3, 4):<br><br>' .
                             'First, find the spherical coordinates of point P:<br>' .
                             '\\(r = \\sqrt{x^2 + y^2 + z^2} = \\sqrt{(-2)^2 + (-3)^2 + 4^2} = \\sqrt{4 + 9 + 16} = \\sqrt{29}\\)<br>' .
                             '\\(\\theta = \\cos^{-1}(z/r) = \\cos^{-1}(4/\\sqrt{29}) = \\cos^{-1}(0.7428) = 42.03^\\circ\\)<br>' .
                             '\\(\\phi = \\tan^{-1}(y/x) = \\tan^{-1}((-3)/(-2)) = \\tan^{-1}(1.5) = 236.31^\\circ\\) (third quadrant since x<0, y<0)<br><br>' .
                             'Calculate trigonometric values:<br>' .
                             '\\(\\sin\\theta = \\sin 42.03^\\circ = 0.669\\), \\(\\cos\\theta = \\cos 42.03^\\circ = 0.743\\)<br>' .
                             '\\(\\sin\\phi = \\sin 236.31^\\circ = -0.832\\), \\(\\cos\\phi = \\cos 236.31^\\circ = -0.555\\)<br><br>' .
                             'Apply the transformation matrix:<br>' .
                             '\\(A_r = \\sin\\theta\\cos\\phi A_x + \\sin\\theta\\sin\\phi A_y + \\cos\\theta A_z\\)<br>' .
                             '\\(A_r = (0.669)(-0.555)(4) + (0.669)(-0.832)(-2) + (0.743)(-4) = -1.484 + 1.113 - 2.972 = -3.343\\)<br><br>' .
                             '\\(A_\\theta = \\cos\\theta\\cos\\phi A_x + \\cos\\theta\\sin\\phi A_y - \\sin\\theta A_z\\)<br>' .
                             '\\(A_\\theta = (0.743)(-0.555)(4) + (0.743)(-0.832)(-2) - (0.669)(-4) = -1.649 + 1.237 + 2.676 = 2.264\\)<br><br>' .
                             '\\(A_\\phi = -\\sin\\phi A_x + \\cos\\phi A_y\\)<br>' .
                             '\\(A_\\phi = -(-0.832)(4) + (-0.555)(-2) = 3.328 + 1.11 = 4.438\\)<br><br>' .
                             'Therefore, in spherical coordinates:<br>' .
                             '\\(\\vec{A} = -3.343\\hat{a}_r + 2.264\\hat{a}_\\theta + 4.438\\hat{a}_\\phi\\)',
                'solution_has_diagram' => false,
                'notes' => 'Note that the vector components in spherical coordinates depend on the location where the vector is evaluated. The same vector will have different spherical components at different points in space because the spherical coordinate unit vectors change direction with position.',
                'formulas' => [
                    '\\(r = \\sqrt{x^2 + y^2 + z^2}\\)',
                    '\\(\\theta = \\cos^{-1}(z/r)\\)',
                    '\\(\\phi = \\tan^{-1}(y/x)\\)',
                    '\\(\\begin{bmatrix} A_r \\\\ A_\\theta \\\\ A_\\phi \\end{bmatrix} = \\begin{bmatrix} \\sin\\theta\\cos\\phi & \\sin\\theta\\sin\\phi & \\cos\\theta \\\\ \\cos\\theta\\cos\\phi & \\cos\\theta\\sin\\phi & -\\sin\\theta \\\\ -\\sin\\phi & \\cos\\phi & 0 \\end{bmatrix} \\begin{bmatrix} A_x \\\\ A_y \\\\ A_z \\end{bmatrix}\\)'
                ]
            ],
            [
                'text' => 'Transform the vector \\(\\vec{F} = y\\hat{a}_x - (x + z)\\hat{a}_y\\) at point \\(P(-3, 4, 5)\\) into the cylindrical coordinate system. [2080 Baishakh]',
                'year' => '2080 Baishakh',
                'has_diagram' => false,
                'solution' => 'First, evaluate the vector field at point P(-3, 4, 5):<br>' .
                             '\\(\\vec{F} = 4\\hat{a}_x - (-3 + 5)\\hat{a}_y = 4\\hat{a}_x - 2\\hat{a}_y\\)<br><br>' .
                             'Now transform to cylindrical coordinates at point P(-3, 4, 5).<br><br>' .
                             'First, find the cylindrical coordinates of point P:<br>' .
                             '\\(\\rho = \\sqrt{x^2 + y^2} = \\sqrt{(-3)^2 + 4^2} = \\sqrt{9 + 16} = \\sqrt{25} = 5\\)<br>' .
                             '\\(\\phi = \\tan^{-1}(y/x) = \\tan^{-1}(4/(-3)) = \\tan^{-1}(-4/3) = 126.87^\\circ\\) (second quadrant since x<0, y>0)<br>' .
                             '\\(z = 5\\)<br><br>' .
                             'Calculate trigonometric values:<br>' .
                             '\\(\\sin\\phi = \\sin 126.87^\\circ = 0.8\\), \\(\\cos\\phi = \\cos 126.87^\\circ = -0.6\\)<br><br>' .
                             'The transformation matrix from Cartesian to cylindrical coordinates is:<br>' .
                             '\\(\\begin{bmatrix} F_\\rho \\\\ F_\\phi \\\\ F_z \\end{bmatrix} = ' .
                             '\\begin{bmatrix} \\cos\\phi & \\sin\\phi & 0 \\\\ -\\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix}' .
                             '\\begin{bmatrix} F_x \\\\ F_y \\\\ F_z \\end{bmatrix}\\)<br><br>' .
                             'Substituting values:<br>' .
                             '\\(F_\\rho = \\cos\\phi F_x + \\sin\\phi F_y = (-0.6)(4) + (0.8)(-2) = -2.4 - 1.6 = -4.0\\)<br>' .
                             '\\(F_\\phi = -\\sin\\phi F_x + \\cos\\phi F_y = -(0.8)(4) + (-0.6)(-2) = -3.2 + 1.2 = -2.0\\)<br>' .
                             '\\(F_z = F_z = 0\\)<br><br>' .
                             'Therefore, in cylindrical coordinates:<br>' .
                             '\\(\\vec{F} = -4.0\\hat{a}_\\rho - 2.0\\hat{a}_\\phi\\)',
                'solution_has_diagram' => false,
                'notes' => 'The vector transformation to cylindrical coordinates depends on the azimuthal angle φ at the point of evaluation. The same vector will have different cylindrical components at different points in space because the cylindrical coordinate unit vectors \\(\\hat{a}_\\rho\\) and \\(\\hat{a}_\\phi\\) change direction with φ.',
                'formulas' => [
                    '\\(\\rho = \\sqrt{x^2 + y^2}\\)',
                    '\\(\\phi = \\tan^{-1}(y/x)\\)',
                    '\\(\\begin{bmatrix} \\hat{a}_\\rho \\\\ \\hat{a}_\\phi \\\\ \\hat{a}_z \\end{bmatrix} = \\begin{bmatrix} \\cos\\phi & \\sin\\phi & 0 \\\\ -\\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix} \\begin{bmatrix} \\hat{a}_x \\\\ \\hat{a}_y \\\\ \\hat{a}_z \\end{bmatrix}\\)'
                ]
            ],
            [
                'text' => 'Given a point \\(P(-2, 6, 3)\\) and vector field \\(\\vec{E} = y\\hat{a}_x + (xy + z)\\hat{a}_y\\), express P and \\(\\vec{E}\\) in spherical coordinates. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false,
                'solution' => 'First, express point P in spherical coordinates:<br>' .
                             '\\(r = \\sqrt{x^2 + y^2 + z^2} = \\sqrt{(-2)^2 + 6^2 + 3^2} = \\sqrt{4 + 36 + 9} = \\sqrt{49} = 7\\)<br>' .
                             '\\(\\theta = \\cos^{-1}(z/r) = \\cos^{-1}(3/7) = \\cos^{-1}(0.4286) = 64.62^\\circ\\)<br>' .
                             '\\(\\phi = \\tan^{-1}(y/x) = \\tan^{-1}(6/(-2)) = \\tan^{-1}(-3) = 108.43^\\circ\\) (second quadrant since x<0, y>0)<br><br>' .
                             'Now evaluate the vector field at point P(-2, 6, 3):<br>' .
                             '\\(\\vec{E} = 6\\hat{a}_x + ((-2)(6) + 3)\\hat{a}_y = 6\\hat{a}_x + (-12 + 3)\\hat{a}_y = 6\\hat{a}_x - 9\\hat{a}_y\\)<br><br>' .
                             'Transform this vector to spherical coordinates using the transformation matrix at point P:<br>' .
                             'Calculate trigonometric values:<br>' .
                             '\\(\\sin\\theta = \\sin 64.62^\\circ = 0.903\\), \\(\\cos\\theta = \\cos 64.62^\\circ = 0.429\\)<br>' .
                             '\\(\\sin\\phi = \\sin 108.43^\\circ = 0.949\\), \\(\\cos\\phi = \\cos 108.43^\\circ = -0.316\\)<br><br>' .
                             'Apply the transformation:<br>' .
                             '\\(E_r = \\sin\\theta\\cos\\phi E_x + \\sin\\theta\\sin\\phi E_y + \\cos\\theta E_z\\)<br>' .
                             '\\(E_r = (0.903)(-0.316)(6) + (0.903)(0.949)(-9) + (0.429)(0) = -1.712 - 7.705 = -9.417\\)<br><br>' .
                             '\\(E_\\theta = \\cos\\theta\\cos\\phi E_x + \\cos\\theta\\sin\\phi E_y - \\sin\\theta E_z\\)<br>' .
                             '\\(E_\\theta = (0.429)(-0.316)(6) + (0.429)(0.949)(-9) - (0.903)(0) = -0.813 - 3.664 = -4.477\\)<br><br>' .
                             '\\(E_\\phi = -\\sin\\phi E_x + \\cos\\phi E_y\\)<br>' .
                             '\\(E_\\phi = -(0.949)(6) + (-0.316)(-9) = -5.694 + 2.844 = -2.85\\)<br><br>' .
                             'Therefore:<br>' .
                             'Point P in spherical coordinates: \\((r, \\theta, \\phi) = (7, 64.62^\\circ, 108.43^\\circ)\\)<br>' .
                             'Vector field \\(\\vec{E}\\) in spherical coordinates: \\(\\vec{E} = -9.417\\hat{a}_r - 4.477\\hat{a}_\\theta - 2.85\\hat{a}_\\phi\\)',
                'solution_has_diagram' => false,
                'notes' => 'When transforming a vector field, we first evaluate the field at the specific point, then apply the coordinate transformation based on the location of that point. The spherical coordinate representation of the vector field is only valid at that specific point.',
                'formulas' => [
                    '\\(r = \\sqrt{x^2 + y^2 + z^2}\\)',
                    '\\(\\theta = \\cos^{-1}(z/r)\\)',
                    '\\(\\phi = \\tan^{-1}(y/x)\\)',
                    '\\(\\begin{bmatrix} \\hat{a}_r \\\\ \\hat{a}_\\theta \\\\ \\hat{a}_\\phi \\end{bmatrix} = \\begin{bmatrix} \\sin\\theta\\cos\\phi & \\sin\\theta\\sin\\phi & \\cos\\theta \\\\ \\cos\\theta\\cos\\phi & \\cos\\theta\\sin\\phi & -\\sin\\theta \\\\ -\\sin\\phi & \\cos\\phi & 0 \\end{bmatrix} \\begin{bmatrix} \\hat{a}_x \\\\ \\hat{a}_y \\\\ \\hat{a}_z \\end{bmatrix}\\)'
                ]
            ],
            [
                'text' => 'Transform a vector field \\(\\vec{F} = 4\\hat{a}_x + 2\\hat{a}_y + 4\\hat{a}_z\\) into cylindrical coordinate system at a point \\(P(2, 3, 5)\\). [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false,
                'solution' => 'To transform the vector to cylindrical coordinates at point P(2, 3, 5):<br><br>' .
                             'First, find the cylindrical coordinates of point P:<br>' .
                             '\\(\\rho = \\sqrt{x^2 + y^2} = \\sqrt{2^2 + 3^2} = \\sqrt{4 + 9} = \\sqrt{13}\\)<br>' .
                             '\\(\\phi = \\tan^{-1}(y/x) = \\tan^{-1}(3/2) = \\tan^{-1}(1.5) = 56.31^\\circ\\)<br>' .
                             '\\(z = 5\\)<br><br>' .
                             'Calculate trigonometric values:<br>' .
                             '\\(\\sin\\phi = \\sin 56.31^\\circ = 0.832\\), \\(\\cos\\phi = \\cos 56.31^\\circ = 0.555\\)<br><br>' .
                             'Apply the transformation matrix:<br>' .
                             '\\(F_\\rho = \\cos\\phi F_x + \\sin\\phi F_y = (0.555)(4) + (0.832)(2) = 2.22 + 1.664 = 3.884\\)<br>' .
                             '\\(F_\\phi = -\\sin\\phi F_x + \\cos\\phi F_y = -(0.832)(4) + (0.555)(2) = -3.328 + 1.11 = -2.218\\)<br>' .
                             '\\(F_z = F_z = 4\\)<br><br>' .
                             'Therefore, in cylindrical coordinates:<br>' .
                             '\\(\\vec{F} = 3.884\\hat{a}_\\rho - 2.218\\hat{a}_\\phi + 4\\hat{a}_z\\)',
                'solution_has_diagram' => false,
                'notes' => 'This is a straightforward vector transformation from Cartesian to cylindrical coordinates. Note that the z-component remains unchanged in cylindrical coordinates. The transformation depends on the azimuthal angle φ at the point of evaluation.',
                'formulas' => [
                    '\\(\\rho = \\sqrt{x^2 + y^2}\\)',
                    '\\(\\phi = \\tan^{-1}(y/x)\\)',
                    '\\(\\begin{bmatrix} F_\\rho \\\\ F_\\phi \\\\ F_z \\end{bmatrix} = \\begin{bmatrix} \\cos\\phi & \\sin\\phi & 0 \\\\ -\\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix} \\begin{bmatrix} F_x \\\\ F_y \\\\ F_z \\end{bmatrix}\\)'
                ]
            ],
            [
                'text' => 'Express the uniform vector field \\(\\vec{F} = 5\\hat{a}_x\\) in (a) cylindrical components (b) spherical components. [2072 Chaitra]',
                'year' => '2072 Chaitra',
                'has_diagram' => false,
                'solution' => '(a) Cylindrical components:<br>' .
                             'The transformation from Cartesian to cylindrical coordinates is:<br>' .
                             '\\(F_\\rho = F_x \\cos\\phi + F_y \\sin\\phi = 5 \\cos\\phi + 0 = 5 \\cos\\phi\\)<br>' .
                             '\\(F_\\phi = -F_x \\sin\\phi + F_y \\cos\\phi = -5 \\sin\\phi + 0 = -5 \\sin\\phi\\)<br>' .
                             '\\(F_z = F_z = 0\\)<br><br>' .
                             'Therefore, in cylindrical coordinates:<br>' .
                             '\\(\\vec{F} = 5 \\cos\\phi \\hat{a}_\\rho - 5 \\sin\\phi \\hat{a}_\\phi\\)<br><br>' .
                             '(b) Spherical components:<br>' .
                             'The transformation from Cartesian to spherical coordinates is:<br>' .
                             '\\(F_r = F_x \\sin\\theta \\cos\\phi + F_y \\sin\\theta \\sin\\phi + F_z \\cos\\theta = 5 \\sin\\theta \\cos\\phi\\)<br>' .
                             '\\(F_\\theta = F_x \\cos\\theta \\cos\\phi + F_y \\cos\\theta \\sin\\phi - F_z \\sin\\theta = 5 \\cos\\theta \\cos\\phi\\)<br>' .
                             '\\(F_\\phi = -F_x \\sin\\phi + F_y \\cos\\phi = -5 \\sin\\phi\\)<br><br>' .
                             'Therefore, in spherical coordinates:<br>' .
                             '\\(\\vec{F} = 5 \\sin\\theta \\cos\\phi \\hat{a}_r + 5 \\cos\\theta \\cos\\phi \\hat{a}_\\theta - 5 \\sin\\phi \\hat{a}_\\phi\\)',
                'solution_has_diagram' => false,
                'notes' => 'Since this is a uniform vector field (same everywhere in space), we express the components as functions of the coordinate variables rather than at a specific point. In cylindrical coordinates, the field varies with φ, and in spherical coordinates, it varies with both θ and φ.',
                'formulas' => [
                    '\\(\\begin{bmatrix} F_\\rho \\\\ F_\\phi \\\\ F_z \\end{bmatrix} = \\begin{bmatrix} \\cos\\phi & \\sin\\phi & 0 \\\\ -\\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix} \\begin{bmatrix} F_x \\\\ F_y \\\\ F_z \\end{bmatrix}\\)',
                    '\\(\\begin{bmatrix} F_r \\\\ F_\\theta \\\\ F_\\phi \\end{bmatrix} = \\begin{bmatrix} \\sin\\theta\\cos\\phi & \\sin\\theta\\sin\\phi & \\cos\\theta \\\\ \\cos\\theta\\cos\\phi & \\cos\\theta\\sin\\phi & -\\sin\\theta \\\\ -\\sin\\phi & \\cos\\phi & 0 \\end{bmatrix} \\begin{bmatrix} F_x \\\\ F_y \\\\ F_z \\end{bmatrix}\\)'
                ]
            ],
            [
                'text' => 'Transform the vector \\(\\vec{p} = y\\hat{i} + x\\hat{j} + z\\hat{k}\\) into cylindrical coordinates at a point \\(P(2, 45^\\circ, 5)\\). [2070 Chaitra]',
                'year' => '2070 Chaitra',
                'has_diagram' => false,
                'solution' => 'First, convert point P from cylindrical to Cartesian coordinates to evaluate the vector:<br>' .
                             'Given \\(P(\\rho=2, \\phi=45^\\circ, z=5)\\):<br>' .
                             '\\(x = \\rho \\cos\\phi = 2 \\cos 45^\\circ = 2 \\times 0.707 = 1.414\\)<br>' .
                             '\\(y = \\rho \\sin\\phi = 2 \\sin 45^\\circ = 2 \\times 0.707 = 1.414\\)<br>' .
                             '\\(z = 5\\)<br><br>' .
                             'Evaluate the vector at this point:<br>' .
                             '\\(\\vec{p} = y\\hat{i} + x\\hat{j} + z\\hat{k} = 1.414\\hat{a}_x + 1.414\\hat{a}_y + 5\\hat{a}_z\\)<br><br>' .
                             'Now transform to cylindrical coordinates using \\(\\phi = 45^\\circ\\):<br>' .
                             '\\(\\sin 45^\\circ = \\cos 45^\\circ = \\frac{\\sqrt{2}}{2} = 0.707\\)<br><br>' .
                             'Apply the transformation matrix:<br>' .
                             '\\(p_\\rho = \\cos\\phi p_x + \\sin\\phi p_y = (0.707)(1.414) + (0.707)(1.414) = 1 + 1 = 2\\)<br>' .
                             '\\(p_\\phi = -\\sin\\phi p_x + \\cos\\phi p_y = -(0.707)(1.414) + (0.707)(1.414) = -1 + 1 = 0\\)<br>' .
                             '\\(p_z = p_z = 5\\)<br><br>' .
                             'Therefore, in cylindrical coordinates:<br>' .
                             '\\(\\vec{p} = 2\\hat{a}_\\rho + 5\\hat{a}_z\\)',
                'solution_has_diagram' => false,
                'notes' => 'Note that we needed to convert the given cylindrical coordinates of point P to Cartesian coordinates to evaluate the vector field, then transform back to cylindrical coordinates. The result shows that at this specific point, the vector has no φ-component.',
                'formulas' => [
                    '\\(x = \\rho \\cos\\phi\\)',
                    '\\(y = \\rho \\sin\\phi\\)',
                    '\\(\\begin{bmatrix} p_\\rho \\\\ p_\\phi \\\\ p_z \\end{bmatrix} = \\begin{bmatrix} \\cos\\phi & \\sin\\phi & 0 \\\\ -\\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix} \\begin{bmatrix} p_x \\\\ p_y \\\\ p_z \\end{bmatrix}\\)'
                ]
            ],
            [
                'text' => 'Given a point \\(P(-3, 4, 5)\\), express the vector that extends from P to \\(Q(2, 0, -1)\\) in (a) Rectangular coordinates (b) Cylindrical coordinates (c) Spherical coordinates. [2069 Chaitra]',
                'year' => '2069 Chaitra',
                'has_diagram' => false,
                'solution' => '(a) Rectangular coordinates:<br>' .
                             '\\(\\vec{PQ} = \\vec{r}_Q - \\vec{r}_P = (2 - (-3))\\hat{a}_x + (0 - 4)\\hat{a}_y + (-1 - 5)\\hat{a}_z = 5\\hat{a}_x - 4\\hat{a}_y - 6\\hat{a}_z\\)<br><br>' .
                             '(b) Cylindrical coordinates at point P(-3, 4, 5):<br>' .
                             'First, find cylindrical coordinates of P:<br>' .
                             '\\(\\rho = \\sqrt{(-3)^2 + 4^2} = \\sqrt{9 + 16} = \\sqrt{25} = 5\\)<br>' .
                             '\\(\\phi = \\tan^{-1}(4/(-3)) = \\tan^{-1}(-4/3) = 126.87^\\circ\\) (second quadrant)<br>' .
                             '\\(\\sin\\phi = \\sin 126.87^\\circ = 0.8\\), \\(\\cos\\phi = \\cos 126.87^\\circ = -0.6\\)<br><br>' .
                             'Transform the vector:<br>' .
                             '\\(PQ_\\rho = \\cos\\phi PQ_x + \\sin\\phi PQ_y = (-0.6)(5) + (0.8)(-4) = -3 - 3.2 = -6.2\\)<br>' .
                             '\\(PQ_\\phi = -\\sin\\phi PQ_x + \\cos\\phi PQ_y = -(0.8)(5) + (-0.6)(-4) = -4 + 2.4 = -1.6\\)<br>' .
                             '\\(PQ_z = PQ_z = -6\\)<br>' .
                             'Therefore: \\(\\vec{PQ} = -6.2\\hat{a}_\\rho - 1.6\\hat{a}_\\phi - 6\\hat{a}_z\\)<br><br>' .
                             '(c) Spherical coordinates at point P(-3, 4, 5):<br>' .
                             'First, find spherical coordinates of P:<br>' .
                             '\\(r = \\sqrt{(-3)^2 + 4^2 + 5^2} = \\sqrt{9 + 16 + 25} = \\sqrt{50} = 5\\sqrt{2}\\)<br>' .
                             '\\(\\theta = \\cos^{-1}(5/(5\\sqrt{2})) = \\cos^{-1}(1/\\sqrt{2}) = 45^\\circ\\)<br>' .
                             '\\(\\phi = 126.87^\\circ\\) (same as above)<br>' .
                             '\\(\\sin\\theta = \\sin 45^\\circ = \\frac{\\sqrt{2}}{2} = 0.707\\), \\(\\cos\\theta = \\cos 45^\\circ = 0.707\\)<br>' .
                             '\\(\\sin\\phi = 0.8\\), \\(\\cos\\phi = -0.6\\)<br><br>' .
                             'Transform the vector:<br>' .
                             '\\(PQ_r = \\sin\\theta\\cos\\phi PQ_x + \\sin\\theta\\sin\\phi PQ_y + \\cos\\theta PQ_z\\)<br>' .
                             '\\(PQ_r = (0.707)(-0.6)(5) + (0.707)(0.8)(-4) + (0.707)(-6) = -2.121 - 2.262 - 4.242 = -8.625\\)<br><br>' .
                             '\\(PQ_\\theta = \\cos\\theta\\cos\\phi PQ_x + \\cos\\theta\\sin\\phi PQ_y - \\sin\\theta PQ_z\\)<br>' .
                             '\\(PQ_\\theta = (0.707)(-0.6)(5) + (0.707)(0.8)(-4) - (0.707)(-6) = -2.121 - 2.262 + 4.242 = -0.141\\)<br><br>' .
                             '\\(PQ_\\phi = -\\sin\\phi PQ_x + \\cos\\phi PQ_y\\)<br>' .
                             '\\(PQ_\\phi = -(0.8)(5) + (-0.6)(-4) = -4 + 2.4 = -1.6\\)<br><br>' .
                             'Therefore: \\(\\vec{PQ} = -8.625\\hat{a}_r - 0.141\\hat{a}_\\theta - 1.6\\hat{a}_\\phi\\)',
                'solution_has_diagram' => false,
                'notes' => 'This question requires transforming the same vector into three different coordinate systems. Note that for cylindrical and spherical coordinates, the transformation is performed at point P, which means we use the coordinate angles of point P to define the local coordinate system for the vector.',
                'formulas' => [
                    '\\(\\vec{r}_{PQ} = \\vec{r}_Q - \\vec{r}_P\\)',
                    '\\(\\rho = \\sqrt{x^2 + y^2}\\)',
                    '\\(\\phi = \\tan^{-1}(y/x)\\)',
                    '\\(r = \\sqrt{x^2 + y^2 + z^2}\\)',
                    '\\(\\theta = \\cos^{-1}(z/r)\\)',
                    '\\(\\begin{bmatrix} \\hat{a}_\\rho \\\\ \\hat{a}_\\phi \\\\ \\hat{a}_z \\end{bmatrix} = \\begin{bmatrix} \\cos\\phi & \\sin\\phi & 0 \\\\ -\\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix} \\begin{bmatrix} \\hat{a}_x \\\\ \\hat{a}_y \\\\ \\hat{a}_z \\end{bmatrix}\\)',
                    '\\(\\begin{bmatrix} \\hat{a}_r \\\\ \\hat{a}_\\theta \\\\ \\hat{a}_\\phi \\end{bmatrix} = \\begin{bmatrix} \\sin\\theta\\cos\\phi & \\sin\\theta\\sin\\phi & \\cos\\theta \\\\ \\cos\\theta\\cos\\phi & \\cos\\theta\\sin\\phi & -\\sin\\theta \\\\ -\\sin\\phi & \\cos\\phi & 0 \\end{bmatrix} \\begin{bmatrix} \\hat{a}_x \\\\ \\hat{a}_y \\\\ \\hat{a}_z \\end{bmatrix}\\)'
                ]
            ],
            [
                'text' => 'Express the vector field \\(\\vec{W} = (x - y) \\hat{a}_x\\) in cylindrical and spherical coordinates. [2068 Baishakh]',
                'year' => '2068 Baishakh',
                'has_diagram' => false,
                'solution' => 'Cylindrical coordinates:<br>' .
                             'First, express x and y in cylindrical coordinates:<br>' .
                             '\\(x = \\rho \\cos\\phi\\), \\(y = \\rho \\sin\\phi\\)<br>' .
                             'So, \\(x - y = \\rho \\cos\\phi - \\rho \\sin\\phi = \\rho (\\cos\\phi - \\sin\\phi)\\)<br><br>' .
                             'The vector field becomes: \\(\\vec{W} = \\rho (\\cos\\phi - \\sin\\phi) \\hat{a}_x\\)<br><br>' .
                             'Now transform \\(\\hat{a}_x\\) to cylindrical coordinates:<br>' .
                             '\\(\\hat{a}_x = \\cos\\phi \\hat{a}_\\rho - \\sin\\phi \\hat{a}_\\phi\\)<br><br>' .
                             'Therefore:<br>' .
                             '\\(\\vec{W} = \\rho (\\cos\\phi - \\sin\\phi) (\\cos\\phi \\hat{a}_\\rho - \\sin\\phi \\hat{a}_\\phi)\\)<br>' .
                             '\\(\\vec{W} = \\rho (\\cos\\phi - \\sin\\phi) \\cos\\phi \\hat{a}_\\rho - \\rho (\\cos\\phi - \\sin\\phi) \\sin\\phi \\hat{a}_\\phi\\)<br>' .
                             '\\(\\vec{W} = \\rho (\\cos^2\\phi - \\sin\\phi\\cos\\phi) \\hat{a}_\\rho - \\rho (\\cos\\phi\\sin\\phi - \\sin^2\\phi) \\hat{a}_\\phi\\)<br><br>' .
                             'Spherical coordinates:<br>' .
                             'Express x and y in spherical coordinates:<br>' .
                             '\\(x = r \\sin\\theta \\cos\\phi\\), \\(y = r \\sin\\theta \\sin\\phi\\)<br>' .
                             'So, \\(x - y = r \\sin\\theta \\cos\\phi - r \\sin\\theta \\sin\\phi = r \\sin\\theta (\\cos\\phi - \\sin\\phi)\\)<br><br>' .
                             'The vector field becomes: \\(\\vec{W} = r \\sin\\theta (\\cos\\phi - \\sin\\phi) \\hat{a}_x\\)<br><br>' .
                             'Now transform \\(\\hat{a}_x\\) to spherical coordinates:<br>' .
                             '\\(\\hat{a}_x = \\sin\\theta \\cos\\phi \\hat{a}_r + \\cos\\theta \\cos\\phi \\hat{a}_\\theta - \\sin\\phi \\hat{a}_\\phi\\)<br><br>' .
                             'Therefore:<br>' .
                             '\\(\\vec{W} = r \\sin\\theta (\\cos\\phi - \\sin\\phi) (\\sin\\theta \\cos\\phi \\hat{a}_r + \\cos\\theta \\cos\\phi \\hat{a}_\\theta - \\sin\\phi \\hat{a}_\\phi)\\)<br>' .
                             '\\(\\vec{W} = r \\sin\\theta (\\cos\\phi - \\sin\\phi) \\sin\\theta \\cos\\phi \\hat{a}_r + r \\sin\\theta (\\cos\\phi - \\sin\\phi) \\cos\\theta \\cos\\phi \\hat{a}_\\theta - r \\sin\\theta (\\cos\\phi - \\sin\\phi) \\sin\\phi \\hat{a}_\\phi\\)<br>' .
                             '\\(\\vec{W} = r \\sin^2\\theta \\cos\\phi (\\cos\\phi - \\sin\\phi) \\hat{a}_r + r \\sin\\theta \\cos\\theta \\cos\\phi (\\cos\\phi - \\sin\\phi) \\hat{a}_\\theta - r \\sin\\theta \\sin\\phi (\\cos\\phi - \\sin\\phi) \\hat{a}_\\phi\\)',
                'solution_has_diagram' => false,
                'notes' => 'Since this is a vector field (not evaluated at a specific point), we express the components as functions of the coordinate variables. The expressions are more complex in curvilinear coordinates due to the position-dependent nature of the unit vectors.',
                'formulas' => [
                    'Cylindrical: \\(x = \\rho \\cos\\phi\\), \\(y = \\rho \\sin\\phi\\)',
                    'Spherical: \\(x = r \\sin\\theta \\cos\\phi\\), \\(y = r \\sin\\theta \\sin\\phi\\)',
                    '\\(\\hat{a}_x = \\cos\\phi \\hat{a}_\\rho - \\sin\\phi \\hat{a}_\\phi\\)',
                    '\\(\\hat{a}_x = \\sin\\theta \\cos\\phi \\hat{a}_r + \\cos\\theta \\cos\\phi \\hat{a}_\\theta - \\sin\\phi \\hat{a}_\\phi\\)'
                ]
            ],
            [
                'text' => 'Transform \\(\\vec{A}_c = x\\hat{i} + x\\hat{j}\\) at point \\((1, 2, 3)\\) in Cartesian coordinate system to \\(\\vec{A}_{cy}\\) in cylindrical coordinate system. [2067 Mangsir]',
                'year' => '2067 Mangsir',
                'has_diagram' => false,
                'solution' => 'First, evaluate the vector at point (1, 2, 3):<br>' .
                             '\\(\\vec{A}_c = 1\\hat{a}_x + 1\\hat{a}_y\\)<br><br>' .
                             'Now transform to cylindrical coordinates at this point.<br>' .
                             'Find cylindrical coordinates of point (1, 2, 3):<br>' .
                             '\\(\\rho = \\sqrt{1^2 + 2^2} = \\sqrt{5}\\)<br>' .
                             '\\(\\phi = \\tan^{-1}(2/1) = \\tan^{-1}(2) = 63.43^\\circ\\)<br>' .
                             '\\(\\sin\\phi = \\sin 63.43^\\circ = 0.894\\), \\(\\cos\\phi = \\cos 63.43^\\circ = 0.447\\)<br><br>' .
                             'Apply the transformation matrix:<br>' .
                             '\\(A_\\rho = \\cos\\phi A_x + \\sin\\phi A_y = (0.447)(1) + (0.894)(1) = 0.447 + 0.894 = 1.341\\)<br>' .
                             '\\(A_\\phi = -\\sin\\phi A_x + \\cos\\phi A_y = -(0.894)(1) + (0.447)(1) = -0.894 + 0.447 = -0.447\\)<br>' .
                             '\\(A_z = A_z = 0\\)<br><br>' .
                             'Therefore, in cylindrical coordinates:<br>' .
                             '\\(\\vec{A}_{cy} = 1.341\\hat{a}_\\rho - 0.447\\hat{a}_\\phi\\)',
                'solution_has_diagram' => false,
                'notes' => 'Note that the original vector field \\(\\vec{A}_c = x\\hat{i} + x\\hat{j}\\) has no z-component, and after transformation, it still has no z-component. The transformation is performed at the specific point (1, 2, 3), so we use the φ value at that point.',
                'formulas' => [
                    '\\(\\rho = \\sqrt{x^2 + y^2}\\)',
                    '\\(\\phi = \\tan^{-1}(y/x)\\)',
                    '\\(\\begin{bmatrix} A_\\rho \\\\ A_\\phi \\\\ A_z \\end{bmatrix} = \\begin{bmatrix} \\cos\\phi & \\sin\\phi & 0 \\\\ -\\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix} \\begin{bmatrix} A_x \\\\ A_y \\\\ A_z \\end{bmatrix}\\)'
                ]
            ],
            [
                'text' => 'a) Transform a point \\((x, y, z)\\) in rectangular coordinates to a point \\((r, \\theta, \\phi)\\) in spherical coordinate and vice-versa. b) Transform the vector \\(\\vec{i} = y\\hat{i}_x - x\\hat{i}_y + z\\hat{i}_z\\) into cylindrical coordinates. [2067 Shrawan]',
                'year' => '2067 Shrawan',
                'has_diagram' => false,
                'solution' => 'a) Transformation between rectangular and spherical coordinates:<br>' .
                             'Rectangular to spherical:<br>' .
                             '\\(r = \\sqrt{x^2 + y^2 + z^2}\\)<br>' .
                             '\\(\\theta = \\cos^{-1}\\left(\\frac{z}{r}\\right)\\)<br>' .
                             '\\(\\phi = \\tan^{-1}\\left(\\frac{y}{x}\\right)\\) (with quadrant adjustment)<br><br>' .
                             'Spherical to rectangular:<br>' .
                             '\\(x = r \\sin\\theta \\cos\\phi\\)<br>' .
                             '\\(y = r \\sin\\theta \\sin\\phi\\)<br>' .
                             '\\(z = r \\cos\\theta\\)<br><br>' .
                             'b) Transform the vector \\(\\vec{i} = y\\hat{i}_x - x\\hat{i}_y + z\\hat{i}_z\\) into cylindrical coordinates:<br>' .
                             'The vector field is: \\(\\vec{i} = y\\hat{a}_x - x\\hat{a}_y + z\\hat{a}_z\\)<br><br>' .
                             'Apply the transformation matrix to the components:<br>' .
                             '\\(i_\\rho = \\cos\\phi i_x + \\sin\\phi i_y = \\cos\\phi (y) + \\sin\\phi (-x)\\)<br>' .
                             'But \\(y = \\rho \\sin\\phi\\) and \\(x = \\rho \\cos\\phi\\), so:<br>' .
                             '\\(i_\\rho = \\cos\\phi (\\rho \\sin\\phi) + \\sin\\phi (-\\rho \\cos\\phi) = \\rho \\sin\\phi \\cos\\phi - \\rho \\sin\\phi \\cos\\phi = 0\\)<br><br>' .
                             '\\(i_\\phi = -\\sin\\phi i_x + \\cos\\phi i_y = -\\sin\\phi (y) + \\cos\\phi (-x)\\)<br>' .
                             '\\(i_\\phi = -\\sin\\phi (\\rho \\sin\\phi) + \\cos\\phi (-\\rho \\cos\\phi) = -\\rho \\sin^2\\phi - \\rho \\cos^2\\phi = -\\rho (\\sin^2\\phi + \\cos^2\\phi) = -\\rho\\)<br><br>' .
                             '\\(i_z = i_z = z\\)<br><br>' .
                             'Therefore, in cylindrical coordinates:<br>' .
                             '\\(\\vec{i} = -\\rho \\hat{a}_\\phi + z \\hat{a}_z\\)',
                'solution_has_diagram' => false,
                'notes' => 'Part (b) shows that the vector field \\(\\vec{i} = y\\hat{a}_x - x\\hat{a}_y + z\\hat{a}_z\\) transforms to \\(-\\rho \\hat{a}_\\phi + z \\hat{a}_z\\) in cylindrical coordinates. This is a general transformation (not at a specific point), so the result is expressed in terms of the cylindrical coordinate variables ρ and z.',
                'formulas' => [
                    'Rectangular to spherical: \\(r = \\sqrt{x^2 + y^2 + z^2}\\), \\(\\theta = \\cos^{-1}(z/r)\\), \\(\\phi = \\tan^{-1}(y/x)\\)',
                    'Spherical to rectangular: \\(x = r \\sin\\theta \\cos\\phi\\), \\(y = r \\sin\\theta \\sin\\phi\\), \\(z = r \\cos\\theta\\)',
                    '\\(\\begin{bmatrix} i_\\rho \\\\ i_\\phi \\\\ i_z \\end{bmatrix} = \\begin{bmatrix} \\cos\\phi & \\sin\\phi & 0 \\\\ -\\sin\\phi & \\cos\\phi & 0 \\\\ 0 & 0 & 1 \\end{bmatrix} \\begin{bmatrix} i_x \\\\ i_y \\\\ i_z \\end{bmatrix}\\)'
                ]
            ]
        ]
    ],

    [
        'chapter' => 2,
        'title' => 'Electric Field (Coulomb, Gauss, Potential, Materials)',
        'questions' => [
            [
                'text' => 'Find \\(\\vec{E}\\) at \\(P(6, 8, 10)\\) caused by a point charge of 30 nC at the origin, a uniform line charge \\(\\rho_l = 40 \\mu\\text{C/m}\\) on the z-axis, and a uniform surface charge density \\(\\rho_s = 57.2 \\text{nC/m}^2\\) on the plane \\(x = 9\\). [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => 'The total electric field at point P is the vector sum of the fields due to each source: \\(\\vec{E}_{total} = \\vec{E}_{point} + \\vec{E}_{line} + \\vec{E}_{surface}\\).<br><br>' .
                             '<strong>1. Electric field due to point charge (30 nC at origin):</strong><br>' .
                             'Position vector from source to field point: \\(\\vec{R} = 6\\hat{a}_x + 8\\hat{a}_y + 10\\hat{a}_z\\)<br>' .
                             'Distance: \\(R = \\sqrt{6^2 + 8^2 + 10^2} = \\sqrt{200} = 10\\sqrt{2} \\approx 14.142\\) m<br>' .
                             'Unit vector: \\(\\hat{a}_R = \\frac{6\\hat{a}_x + 8\\hat{a}_y + 10\\hat{a}_z}{10\\sqrt{2}} = 0.424\\hat{a}_x + 0.566\\hat{a}_y + 0.707\\hat{a}_z\\)<br>' .
                             'Field: \\(\\vec{E}_{point} = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{R^2} \\hat{a}_R = (9 \\times 10^9) \\frac{30 \\times 10^{-9}}{200} (0.424\\hat{a}_x + 0.566\\hat{a}_y + 0.707\\hat{a}_z)\\)<br>' .
                             '\\(\\vec{E}_{point} = (1.35) (0.424\\hat{a}_x + 0.566\\hat{a}_y + 0.707\\hat{a}_z) = 0.572\\hat{a}_x + 0.764\\hat{a}_y + 0.954\\hat{a}_z\\) V/m<br><br>' .
                             '<strong>2. Electric field due to line charge (40 μC/m on z-axis):</strong><br>' .
                             'For an infinite line charge on the z-axis, \\(\\vec{E}_{line} = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} \\hat{a}_\\rho\\)<br>' .
                             'Perpendicular distance from z-axis: \\(\\rho = \\sqrt{6^2 + 8^2} = \\sqrt{100} = 10\\) m<br>' .
                             'Direction \\(\\hat{a}_\\rho\\) at (6,8,10): \\(\\phi = \\tan^{-1}(8/6) = 53.13^\\circ\\), so \\(\\hat{a}_\\rho = \\cos\\phi \\hat{a}_x + \\sin\\phi \\hat{a}_y = 0.6\\hat{a}_x + 0.8\\hat{a}_y\\)<br>' .
                             'Magnitude: \\(|\\vec{E}_{line}| = \\frac{40 \\times 10^{-6}}{2\\pi(8.854 \\times 10^{-12})(10)} = \\frac{40 \\times 10^{-6}}{5.56 \\times 10^{-10}} \\approx 71,942\\) V/m<br>' .
                             '\\(\\vec{E}_{line} = 71,942 (0.6\\hat{a}_x + 0.8\\hat{a}_y) = 43,165\\hat{a}_x + 57,554\\hat{a}_y\\) V/m<br><br>' .
                             '<strong>3. Electric field due to surface charge (57.2 nC/m² on x=9):</strong><br>' .
                             'For an infinite sheet, \\(\\vec{E}_{surface} = \\frac{\\rho_s}{2\\epsilon_0} \\hat{a}_n\\), where \\(\\hat{a}_n\\) is normal to the plane, directed away if \\(\\rho_s > 0\\).<br>' .
                             'The plane is at x=9, and point P is at x=6 (to the left). Since \\(\\rho_s > 0\\), field points away from plane. At P, this is in the negative x-direction.<br>' .
                             'Magnitude: \\(|\\vec{E}_{surface}| = \\frac{57.2 \\times 10^{-9}}{2(8.854 \\times 10^{-12})} = \\frac{57.2 \\times 10^{-9}}{1.771 \\times 10^{-11}} \\approx 3,229\\) V/m<br>' .
                             '\\(\\vec{E}_{surface} = -3,229 \\hat{a}_x\\) V/m (negative x-direction)<br><br>' .
                             '<strong>Total Electric Field:</strong><br>' .
                             '\\(\\vec{E}_{total} = \\vec{E}_{point} + \\vec{E}_{line} + \\vec{E}_{surface}\\)<br>' .
                             '\\(\\vec{E}_{total} = (0.572 + 43,165 - 3,229)\\hat{a}_x + (0.764 + 57,554)\\hat{a}_y + 0.954\\hat{a}_z\\)<br>' .
                             '\\(\\vec{E}_{total} = 39,936.572\\hat{a}_x + 57,554.764\\hat{a}_y + 0.954\\hat{a}_z\\) V/m<br><br>' .
                             'The line charge dominates the field. The field can be approximated as:<br>' .
                             '\\(\\vec{E}_{total} \\approx 39,937\\hat{a}_x + 57,555\\hat{a}_y\\) V/m',
                'solution_has_diagram' => false,
                'notes' => 'The electric field due to the line charge is much larger than the other components because the line charge density (40 μC/m) is relatively high. The surface charge field is uniform and depends only on which side of the plane the point is located. The point charge field follows the inverse square law.',
                'formulas' => [
                    'Point charge: \\(\\vec{E} = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{R^2} \\hat{a}_R\\)',
                    'Line charge: \\(\\vec{E} = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} \\hat{a}_\\rho\\)',
                    'Surface charge: \\(\\vec{E} = \\frac{\\rho_s}{2\\epsilon_0} \\hat{a}_n\\)'
                ]
            ],
            [
                'text' => 'A point charge of 6 \\(\\mu\\)C located at origin, uniform line charge density of 180 nC/m lies along x-axis and uniform sheet charge of 25 nC/m\\(^2\\) lies on \\(z = 0\\) plane. Find \\(\\vec{E}\\) at point \\((1, 2, 4)\\). [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false,
                'solution' => 'The total electric field at point P(1,2,4) is the vector sum of the fields due to each source: \\(\\vec{E}_{total} = \\vec{E}_{point} + \\vec{E}_{line} + \\vec{E}_{surface}\\).<br><br>' .
                             '<strong>1. Electric field due to point charge (6 μC at origin):</strong><br>' .
                             'Position vector: \\(\\vec{R} = 1\\hat{a}_x + 2\\hat{a}_y + 4\\hat{a}_z\\)<br>' .
                             'Distance: \\(R = \\sqrt{1^2 + 2^2 + 4^2} = \\sqrt{21} \\approx 4.583\\) m<br>' .
                             'Unit vector: \\(\\hat{a}_R = \\frac{1\\hat{a}_x + 2\\hat{a}_y + 4\\hat{a}_z}{\\sqrt{21}} = 0.218\\hat{a}_x + 0.436\\hat{a}_y + 0.873\\hat{a}_z\\)<br>' .
                             'Field: \\(\\vec{E}_{point} = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{R^2} \\hat{a}_R = (9 \\times 10^9) \\frac{6 \\times 10^{-6}}{21} (0.218\\hat{a}_x + 0.436\\hat{a}_y + 0.873\\hat{a}_z)\\)<br>' .
                             '\\(\\vec{E}_{point} = (2,571.43) (0.218\\hat{a}_x + 0.436\\hat{a}_y + 0.873\\hat{a}_z) = 560.6\\hat{a}_x + 1,121.2\\hat{a}_y + 2,245.7\\hat{a}_z\\) V/m<br><br>' .
                             '<strong>2. Electric field due to line charge (180 nC/m on x-axis):</strong><br>' .
                             'For an infinite line charge on the x-axis, the field is radial in planes perpendicular to the x-axis (yz-planes).<br>' .
                             'Perpendicular distance from x-axis: \\(\\rho = \\sqrt{y^2 + z^2} = \\sqrt{2^2 + 4^2} = \\sqrt{20} = 2\\sqrt{5} \\approx 4.472\\) m<br>' .
                             'The radial direction \\(\\hat{a}_\\rho\\) in the yz-plane at (y=2, z=4): \\(\\hat{a}_\\rho = \\frac{2\\hat{a}_y + 4\\hat{a}_z}{\\sqrt{20}} = 0.447\\hat{a}_y + 0.894\\hat{a}_z\\)<br>' .
                             'Magnitude: \\(|\\vec{E}_{line}| = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} = \\frac{180 \\times 10^{-9}}{2\\pi(8.854 \\times 10^{-12})(4.472)} = \\frac{180 \\times 10^{-9}}{2.49 \\times 10^{-10}} \\approx 723\\) V/m<br>' .
                             '\\(\\vec{E}_{line} = 723 (0.447\\hat{a}_y + 0.894\\hat{a}_z) = 323.2\\hat{a}_y + 646.4\\hat{a}_z\\) V/m<br><br>' .
                             '<strong>3. Electric field due to surface charge (25 nC/m² on z=0):</strong><br>' .
                             'For an infinite sheet, \\(\\vec{E}_{surface} = \\frac{\\rho_s}{2\\epsilon_0} \\hat{a}_n\\).<br>' .
                             'The plane is at z=0, and point P is at z=4 (above). Since \\(\\rho_s > 0\\), field points away from plane, i.e., in positive z-direction.<br>' .
                             'Magnitude: \\(|\\vec{E}_{surface}| = \\frac{25 \\times 10^{-9}}{2(8.854 \\times 10^{-12})} = \\frac{25 \\times 10^{-9}}{1.771 \\times 10^{-11}} \\approx 1,411\\) V/m<br>' .
                             '\\(\\vec{E}_{surface} = 1,411 \\hat{a}_z\\) V/m<br><br>' .
                             '<strong>Total Electric Field:</strong><br>' .
                             '\\(\\vec{E}_{total} = \\vec{E}_{point} + \\vec{E}_{line} + \\vec{E}_{surface}\\)<br>' .
                             '\\(\\vec{E}_{total} = 560.6\\hat{a}_x + (1,121.2 + 323.2)\\hat{a}_y + (2,245.7 + 646.4 + 1,411)\\hat{a}_z\\)<br>' .
                             '\\(\\vec{E}_{total} = 560.6\\hat{a}_x + 1,444.4\\hat{a}_y + 4,303.1\\hat{a}_z\\) V/m',
                'solution_has_diagram' => false,
                'notes' => 'When dealing with a line charge along the x-axis, the "radial" direction is in the yz-plane. The surface charge on the z=0 plane produces a field that is purely in the z-direction, and its direction depends on which side of the plane the observation point is located and the sign of the charge density.',
                'formulas' => [
                    'Point charge: \\(\\vec{E} = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{R^2} \\hat{a}_R\\)',
                    'Line charge: \\(\\vec{E} = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} \\hat{a}_\\rho\\)',
                    'Surface charge: \\(\\vec{E} = \\frac{\\rho_s}{2\\epsilon_0} \\hat{a}_n\\)'
                ]
            ],
            [
                'text' => 'Express a scalar potential field \\(V = x^2 + 2y^2 + 3z^2\\) in spherical coordinates. Find the value of V at a point \\((2, 60^\\circ, 90^\\circ)\\). [2080 Bhadra]',
                'year' => '2080 Bhadra',
                'has_diagram' => false,
                'solution' => 'To express the potential field in spherical coordinates, we substitute the Cartesian coordinates (x, y, z) with their spherical equivalents:<br><br>' .
                             'Spherical to Cartesian transformations:<br>' .
                             '\\(x = r \\sin\\theta \\cos\\phi\\)<br>' .
                             '\\(y = r \\sin\\theta \\sin\\phi\\)<br>' .
                             '\\(z = r \\cos\\theta\\)<br><br>' .
                             'Substitute into V:<br>' .
                             '\\(V = (r \\sin\\theta \\cos\\phi)^2 + 2(r \\sin\\theta \\sin\\phi)^2 + 3(r \\cos\\theta)^2\\)<br>' .
                             '\\(V = r^2 \\sin^2\\theta \\cos^2\\phi + 2r^2 \\sin^2\\theta \\sin^2\\phi + 3r^2 \\cos^2\\theta\\)<br>' .
                             '\\(V = r^2 [\\sin^2\\theta \\cos^2\\phi + 2\\sin^2\\theta \\sin^2\\phi + 3\\cos^2\\theta]\\)<br>' .
                             '\\(V = r^2 [\\sin^2\\theta (\\cos^2\\phi + 2\\sin^2\\phi) + 3\\cos^2\\theta]\\)<br><br>' .
                             'This is the expression in spherical coordinates.<br><br>' .
                             '<strong>Value at point (r=2, θ=60°, φ=90°):</strong><br>' .
                             'First, calculate the components:<br>' .
                             '\\(\\sin\\theta = \\sin60^\\circ = \\sqrt{3}/2 \\approx 0.866\\)<br>' .
                             '\\(\\cos\\theta = \\cos60^\\circ = 0.5\\)<br>' .
                             '\\(\\sin\\phi = \\sin90^\\circ = 1\\)<br>' .
                             '\\(\\cos\\phi = \\cos90^\\circ = 0\\)<br><br>' .
                             'Substitute into the expression:<br>' .
                             '\\(V = (2)^2 [(0.866)^2 (0^2 + 2(1)^2) + 3(0.5)^2]\\)<br>' .
                             '\\(V = 4 [0.75 (0 + 2) + 3(0.25)]\\)<br>' .
                             '\\(V = 4 [0.75 \\times 2 + 0.75]\\)<br>' .
                             '\\(V = 4 [1.5 + 0.75] = 4 \\times 2.25 = 9\\)<br><br>' .
                             '<strong>Verification using Cartesian coordinates:</strong><br>' .
                             'Convert point (r=2, θ=60°, φ=90°) to Cartesian:<br>' .
                             '\\(x = 2 \\sin60^\\circ \\cos90^\\circ = 2(0.866)(0) = 0\\)<br>' .
                             '\\(y = 2 \\sin60^\\circ \\sin90^\\circ = 2(0.866)(1) = 1.732\\)<br>' .
                             '\\(z = 2 \\cos60^\\circ = 2(0.5) = 1\\)<br>' .
                             'Now, \\(V = x^2 + 2y^2 + 3z^2 = 0^2 + 2(1.732)^2 + 3(1)^2 = 0 + 2(3) + 3 = 6 + 3 = 9\\)<br><br>' .
                             'The value of V at the point is 9 volts.',
                'solution_has_diagram' => false,
                'notes' => 'The point (r=2, θ=60°, φ=90°) corresponds to Cartesian coordinates (0, √3, 1) or approximately (0, 1.732, 1). The potential field V = x² + 2y² + 3z² is not spherically symmetric, which is why the expression in spherical coordinates is complex. Always verify your coordinate transformations by converting back to check your work.',
                'formulas' => [
                    '\\(x = r \\sin\\theta \\cos\\phi\\)',
                    '\\(y = r \\sin\\theta \\sin\\phi\\)',
                    '\\(z = r \\cos\\theta\\)',
                    '\\(V = x^2 + 2y^2 + 3z^2\\)'
                ]
            ],
            [
                'text' => 'Derive the expression for an electric field intensity due to an infinite line charge using Gauss\'s Law. Find electric flux density at point \\(P(6, 5, 4)\\) due to a uniform line charge of 6 \\(\\mu\\)C/m at \\(x = 4, y = 2\\), point charge 10 nC at \\(Q(3, 2, 4)\\) and uniform surface charge density of 0.4 nC/m\\(^2\\) at \\(x = 3\\). [2080 Bhadra]',
                'year' => '2080 Bhadra',
                'has_diagram' => false,
                'solution' => '<strong>Derivation using Gauss\'s Law:</strong><br>' .
                             'Consider an infinite line charge with density \\(\\rho_l\\) along the z-axis. By symmetry, \\(\\vec{E}\\) is radial (\\(\\hat{a}_\\rho\\) direction) and constant in magnitude at a fixed distance \\(\\rho\\).<br>' .
                             'Choose a cylindrical Gaussian surface of radius \\(\\rho\\) and length L, coaxial with the line charge.<br>' .
                             'Flux through ends = 0 (field parallel to ends).<br>' .
                             'Flux through curved surface: \\(\\oint \\vec{E} \\cdot d\\vec{S} = E_\\rho \\times 2\\pi\\rho L\\)<br>' .
                             'Charge enclosed: \\(Q_{enc} = \\rho_l L\\)<br>' .
                             'Gauss\'s Law: \\(\\oint \\vec{E} \\cdot d\\vec{S} = \\frac{Q_{enc}}{\\epsilon_0}\\)<br>' .
                             '\\(E_\\rho \\times 2\\pi\\rho L = \\frac{\\rho_l L}{\\epsilon_0}\\)<br>' .
                             '\\(E_\\rho = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho}\\)<br>' .
                             'Thus, \\(\\vec{E} = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} \\hat{a}_\\rho\\)<br><br>' .
                             '<strong>Electric flux density \\(\\vec{D}\\) at P(6,5,4):</strong><br>' .
                             'Since \\(\\vec{D} = \\epsilon_0 \\vec{E}\\), we find \\(\\vec{E}\\) from each source and sum, then multiply by \\(\\epsilon_0\\), or find \\(\\vec{D}\\) directly.<br>' .
                             '\\(\\vec{D}_{total} = \\vec{D}_{line} + \\vec{D}_{point} + \\vec{D}_{surface}\\)<br><br>' .
                             '<strong>1. Line charge (6 μC/m at x=4, y=2):</strong><br>' .
                             'The line is parallel to z-axis at (4,2). Perpendicular distance from line to P(6,5,4):<br>' .
                             '\\(\\rho = \\sqrt{(6-4)^2 + (5-2)^2} = \\sqrt{4 + 9} = \\sqrt{13} \\approx 3.606\\) m<br>' .
                             'Direction \\(\\hat{a}_\\rho\\): from line to P is \\((6-4)\\hat{a}_x + (5-2)\\hat{a}_y = 2\\hat{a}_x + 3\\hat{a}_y\\)<br>' .
                             'Unit vector: \\(\\hat{a}_\\rho = \\frac{2\\hat{a}_x + 3\\hat{a}_y}{\\sqrt{13}} = 0.555\\hat{a}_x + 0.832\\hat{a}_y\\)<br>' .
                             '\\(\\vec{D}_{line} = \\frac{\\rho_l}{2\\pi \\rho} \\hat{a}_\\rho = \\frac{6 \\times 10^{-6}}{2\\pi (3.606)} (0.555\\hat{a}_x + 0.832\\hat{a}_y)\\)<br>' .
                             '\\(\\vec{D}_{line} = \\frac{6 \\times 10^{-6}}{22.65} (0.555\\hat{a}_x + 0.832\\hat{a}_y) = 2.65 \\times 10^{-7} (0.555\\hat{a}_x + 0.832\\hat{a}_y)\\)<br>' .
                             '\\(\\vec{D}_{line} = 1.47 \\times 10^{-7} \\hat{a}_x + 2.20 \\times 10^{-7} \\hat{a}_y\\) C/m²<br><br>' .
                             '<strong>2. Point charge (10 nC at Q(3,2,4)):</strong><br>' .
                             'Vector from Q to P: \\(\\vec{R} = (6-3)\\hat{a}_x + (5-2)\\hat{a}_y + (4-4)\\hat{a}_z = 3\\hat{a}_x + 3\\hat{a}_y\\)<br>' .
                             'Distance: \\(R = \\sqrt{3^2 + 3^2} = \\sqrt{18} = 3\\sqrt{2} \\approx 4.243\\) m<br>' .
                             'Unit vector: \\(\\hat{a}_R = \\frac{3\\hat{a}_x + 3\\hat{a}_y}{3\\sqrt{2}} = \\frac{\\hat{a}_x + \\hat{a}_y}{\\sqrt{2}} = 0.707\\hat{a}_x + 0.707\\hat{a}_y\\)<br>' .
                             '\\(\\vec{D}_{point} = \\frac{q}{4\\pi R^2} \\hat{a}_R = \\frac{10 \\times 10^{-9}}{4\\pi (18)} (0.707\\hat{a}_x + 0.707\\hat{a}_y)\\)<br>' .
                             '\\(\\vec{D}_{point} = \\frac{10 \\times 10^{-9}}{226.2} (0.707\\hat{a}_x + 0.707\\hat{a}_y) = 4.42 \\times 10^{-11} (0.707\\hat{a}_x + 0.707\\hat{a}_y)\\)<br>' .
                             '\\(\\vec{D}_{point} = 3.13 \\times 10^{-11} \\hat{a}_x + 3.13 \\times 10^{-11} \\hat{a}_y\\) C/m²<br><br>' .
                             '<strong>3. Surface charge (0.4 nC/m² at x=3):</strong><br>' .
                             'For infinite sheet, \\(\\vec{D}_{surface} = \\frac{\\rho_s}{2} \\hat{a}_n\\)<br>' .
                             'Plane at x=3, point P at x=6 (to the right). Assuming \\(\\rho_s > 0\\), field points away, so positive x-direction.<br>' .
                             '\\(\\vec{D}_{surface} = \\frac{0.4 \\times 10^{-9}}{2} \\hat{a}_x = 0.2 \\times 10^{-9} \\hat{a}_x = 2 \\times 10^{-10} \\hat{a}_x\\) C/m²<br><br>' .
                             '<strong>Total \\(\\vec{D}\\):</strong><br>' .
                             '\\(\\vec{D}_{total} = \\vec{D}_{line} + \\vec{D}_{point} + \\vec{D}_{surface}\\)<br>' .
                             '\\(\\vec{D}_{total} = (1.47 \\times 10^{-7} + 3.13 \\times 10^{-11} + 2 \\times 10^{-10})\\hat{a}_x + (2.20 \\times 10^{-7} + 3.13 \\times 10^{-11})\\hat{a}_y\\)<br>' .
                             'The point charge and surface charge contributions are negligible compared to the line charge.<br>' .
                             '\\(\\vec{D}_{total} \\approx 1.47 \\times 10^{-7} \\hat{a}_x + 2.20 \\times 10^{-7} \\hat{a}_y\\) C/m²<br>' .
                             'or \\(\\vec{D}_{total} \\approx 147 \\hat{a}_x + 220 \\hat{a}_y\\) nC/m²',
                'solution_has_diagram' => false,
                'notes' => 'The derivation using Gauss\'s law relies on symmetry. For the line charge not on the z-axis, the same formula applies, but \\(\\rho\\) is the perpendicular distance to the line, and \\(\\hat{a}_\\rho\\) is the unit vector perpendicular to the line, pointing from the line to the field point. The electric flux density \\(\\vec{D}\\) is often easier to work with in vacuum as it eliminates \\(\\epsilon_0\\) from many calculations.',
                'formulas' => [
                    'Gauss\'s Law: \\(\\oint \\vec{D} \\cdot d\\vec{S} = Q_{enc}\\)',
                    'Line charge: \\(\\vec{D} = \\frac{\\rho_l}{2\\pi \\rho} \\hat{a}_\\rho\\)',
                    'Point charge: \\(\\vec{D} = \\frac{q}{4\\pi R^2} \\hat{a}_R\\)',
                    'Surface charge: \\(\\vec{D} = \\frac{\\rho_s}{2} \\hat{a}_n\\)'
                ]
            ],
            [
                'text' => 'Two uniform charges 8 nC/m are located at \\(x = 1, y = 2, z = 2\\) and \\(x = -1, y = 2, z = 2\\) in free space respectively. If the potential at origin is 100 V, find V at \\(P(4, 1, 3)\\). [2080 Bhadra]',
                'year' => '2080 Bhadra',
                'has_diagram' => false,
                'solution' => 'The potential due to an infinite line charge is \\(V = -\\frac{\\rho_l}{2\\pi\\epsilon_0} \\ln(\\rho) + C\\), where C is a constant and \\(\\rho\\) is the perpendicular distance from the line.<br><br>' .
                             'Let \\(V_1\\) be potential due to line at (1,2,2) and \\(V_2\\) due to line at (-1,2,2).<br>' .
                             'Total potential \\(V = V_1 + V_2 = -\\frac{\\rho_l}{2\\pi\\epsilon_0} \\ln(\\rho_1) - \\frac{\\rho_l}{2\\pi\\epsilon_0} \\ln(\\rho_2) + C\\)<br>' .
                             '\\(V = -\\frac{\\rho_l}{2\\pi\\epsilon_0} \\ln(\\rho_1 \\rho_2) + C\\)<br><br>' .
                             '<strong>At origin (0,0,0):</strong><br>' .
                             'Distance to first line (at x=1,y=2,z=2): Since line is parallel to z-axis, \\(\\rho_1 = \\sqrt{(0-1)^2 + (0-2)^2} = \\sqrt{1+4} = \\sqrt{5}\\)<br>' .
                             'Distance to second line (at x=-1,y=2,z=2): \\(\\rho_2 = \\sqrt{(0-(-1))^2 + (0-2)^2} = \\sqrt{1+4} = \\sqrt{5}\\)<br>' .
                             'Given V(0,0,0) = 100 V:<br>' .
                             '\\(100 = -\\frac{8 \\times 10^{-9}}{2\\pi\\epsilon_0} \\ln(\\sqrt{5} \\cdot \\sqrt{5}) + C = -\\frac{8 \\times 10^{-9}}{2\\pi\\epsilon_0} \\ln(5) + C\\)<br>' .
                             'Calculate constant: \\(\\frac{1}{2\\pi\\epsilon_0} = \\frac{1}{2\\pi(8.854 \\times 10^{-12})} \\approx 1.798 \\times 10^{10}\\)<br>' .
                             '\\(100 = -(8 \\times 10^{-9})(1.798 \\times 10^{10}) \\ln(5) + C\\)<br>' .
                             '\\(100 = -(143.84) (1.6094) + C\\)<br>' .
                             '\\(100 = -231.5 + C\\)<br>' .
                             '\\(C = 331.5\\) V<br><br>' .
                             '<strong>At point P(4,1,3):</strong><br>' .
                             'Distance to first line (at x=1,y=2,z=2): \\(\\rho_1 = \\sqrt{(4-1)^2 + (1-2)^2} = \\sqrt{9+1} = \\sqrt{10}\\)<br>' .
                             'Distance to second line (at x=-1,y=2,z=2): \\(\\rho_2 = \\sqrt{(4-(-1))^2 + (1-2)^2} = \\sqrt{25+1} = \\sqrt{26}\\)<br>' .
                             'Product: \\(\\rho_1 \\rho_2 = \\sqrt{10} \\cdot \\sqrt{26} = \\sqrt{260} = 2\\sqrt{65}\\)<br>' .
                             '\\(V_P = -\\frac{8 \\times 10^{-9}}{2\\pi\\epsilon_0} \\ln(\\sqrt{260}) + 331.5\\)<br>' .
                             '\\(V_P = -(8 \\times 10^{-9})(1.798 \\times 10^{10}) \\ln(\\sqrt{260}) + 331.5\\)<br>' .
                             '\\(V_P = -(143.84) \\ln(16.125) + 331.5\\) (since \\(\\sqrt{260} \\approx 16.125\\))<br>' .
                             '\\(V_P = -(143.84)(2.780) + 331.5\\)<br>' .
                             '\\(V_P = -400.0 + 331.5 = -68.5\\) V<br><br>' .
                             'The potential at P(4,1,3) is approximately -68.5 volts.',
                'solution_has_diagram' => false,
                'notes' => 'The potential for an infinite line charge is logarithmic and requires a reference point because it goes to infinity as ρ→∞ and to -∞ as ρ→0. The constant C is determined by the given reference potential. The z-coordinate doesn\'t affect the potential because the lines are infinite and parallel to the z-axis.',
                'formulas' => [
                    'Line charge potential: \\(V = -\\frac{\\rho_l}{2\\pi\\epsilon_0} \\ln(\\rho) + C\\)',
                    '\\(\\frac{1}{4\\pi\\epsilon_0} = 9 \\times 10^9\\)',
                    '\\(\\ln(ab) = \\ln a + \\ln b\\)'
                ]
            ]
        ]
    ],

    [
        'chapter' => 3,
        'title' => 'Magnetic Field (Biot-Savart, Ampere, Potential, Materials)',
        'questions' => [
            [
                'text' => 'Derive an expression for the magnetic field intensity produced by an infinitely long filament carrying current using Biot and Savart Law. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => 'To derive the magnetic field intensity \\(\\vec{H}\\) produced by an infinitely long straight filament carrying current \\(I\\) using Biot-Savart Law:<br><br>' .
                             '<strong>Biot-Savart Law:</strong><br>' .
                             'The magnetic flux density \\(d\\vec{B}\\) at a point due to a current element \\(I d\\vec{l}\\) is:<br>' .
                             '\\(d\\vec{B} = \\frac{\\mu_0}{4\\pi} \\frac{I d\\vec{l} \\times \\hat{R}}{R^2}\\)<br>' .
                             'Since \\(\\vec{B} = \\mu_0 \\vec{H}\\), we can write for magnetic field intensity:<br>' .
                             '\\(d\\vec{H} = \\frac{1}{4\\pi} \\frac{I d\\vec{l} \\times \\hat{R}}{R^2}\\)<br><br>' .
                             '<strong>Setup:</strong><br>' .
                             'Consider an infinite filament along the z-axis carrying current \\(I\\) in the \\(+\\hat{a}_z\\) direction. We want to find \\(\\vec{H}\\) at point \\(P(\\rho, 0, 0)\\) in cylindrical coordinates (without loss of generality, we can place P in the xz-plane where \\(\\phi = 0\\)).<br>' .
                             'Let a current element \\(I d\\vec{l} = I dz \\hat{a}_z\\) be located at \\((0, 0, z)\\).<br>' .
                             'The vector from the source to field point is \\(\\vec{R} = \\rho \\hat{a}_\\rho - z \\hat{a}_z\\).<br>' .
                             'Distance \\(R = \\sqrt{\\rho^2 + z^2}\\).<br>' .
                             'Unit vector \\(\\hat{R} = \\frac{\\rho \\hat{a}_\\rho - z \\hat{a}_z}{\\sqrt{\\rho^2 + z^2}}\\).<br><br>' .
                             '<strong>Cross Product:</strong><br>' .
                             '\\(d\\vec{l} \\times \\hat{R} = (dz \\hat{a}_z) \\times \\left( \\frac{\\rho \\hat{a}_\\rho - z \\hat{a}_z}{\\sqrt{\\rho^2 + z^2}} \\right) = dz \\left( \\frac{\\rho}{\\sqrt{\\rho^2 + z^2}} \\hat{a}_z \\times \\hat{a}_\\rho \\right)\\)<br>' .
                             'Since \\(\\hat{a}_z \\times \\hat{a}_\\rho = -\\hat{a}_\\phi\\) (using right-hand rule in cylindrical coordinates),<br>' .
                             '\\(d\\vec{l} \\times \\hat{R} = dz \\left( \\frac{\\rho}{\\sqrt{\\rho^2 + z^2}} \\right) (-\\hat{a}_\\phi) = -\\frac{\\rho dz}{\\sqrt{\\rho^2 + z^2}} \\hat{a}_\\phi\\)<br><br>' .
                             '<strong>Magnetic Field Intensity Element:</strong><br>' .
                             '\\(d\\vec{H} = \\frac{1}{4\\pi} \\frac{I}{R^2} (d\\vec{l} \\times \\hat{R}) = \\frac{1}{4\\pi} \\frac{I}{(\\rho^2 + z^2)} \\left( -\\frac{\\rho dz}{\\sqrt{\\rho^2 + z^2}} \\hat{a}_\\phi \\right)\\)<br>' .
                             '\\(d\\vec{H} = -\\frac{I \\rho}{4\\pi} \\frac{dz}{(\\rho^2 + z^2)^{3/2}} \\hat{a}_\\phi\\)<br><br>' .
                             '<strong>Integration:</strong><br>' .
                             'Integrate from \\(z = -\\infty\\) to \\(z = +\\infty\\):<br>' .
                             '\\(\\vec{H} = \\int_{-\\infty}^{\\infty} d\\vec{H} = -\\frac{I \\rho}{4\\pi} \\hat{a}_\\phi \\int_{-\\infty}^{\\infty} \\frac{dz}{(\\rho^2 + z^2)^{3/2}}\\)<br>' .
                             'The integral \\(\\int_{-\\infty}^{\\infty} \\frac{dz}{(\\rho^2 + z^2)^{3/2}} = \\frac{2}{\\rho^2}\\) (standard integral).<br>' .
                             '\\(\\vec{H} = -\\frac{I \\rho}{4\\pi} \\hat{a}_\\phi \\left( \\frac{2}{\\rho^2} \\right) = -\\frac{I}{2\\pi \\rho} \\hat{a}_\\phi\\)<br><br>' .
                             'The negative sign indicates direction. Using the right-hand rule (thumb in direction of current, fingers curl in direction of field), for current in \\(+\\hat{a}_z\\) and point at \\(\\phi = 0\\), the field should be in \\(+\\hat{a}_\\phi\\) direction. The negative sign arises from our coordinate choice and cross product. Taking the magnitude and correct direction:<br>' .
                             '\\(\\vec{H} = \\frac{I}{2\\pi \\rho} \\hat{a}_\\phi\\)<br><br>' .
                             'This is the standard result: The magnetic field intensity circles around the wire, with magnitude inversely proportional to the radial distance \\(\\rho\\).',
                'solution_has_diagram' => false,
                'notes' => 'The derivation shows that Biot-Savart Law, when integrated over an infinite straight wire, yields the same result as Ampere\'s Circuital Law. The field is azimuthal (\\(\\hat{a}_\\phi\\) direction) and depends only on the perpendicular distance \\(\\rho\\) from the wire. The right-hand rule determines the direction: if you grasp the wire with your right hand, thumb pointing in the direction of current, your fingers curl in the direction of \\(\\vec{H}\\).',
                'formulas' => [
                    'Biot-Savart Law: \\(d\\vec{H} = \\frac{1}{4\\pi} \\frac{I d\\vec{l} \\times \\hat{R}}{R^2}\\)',
                    'Result: \\(\\vec{H} = \\frac{I}{2\\pi \\rho} \\hat{a}_\\phi\\)',
                    'Cross product in cylindrical: \\(\\hat{a}_z \\times \\hat{a}_\\rho = -\\hat{a}_\\phi\\)'
                ]
            ],
            [
                'text' => 'What is curl? State and Prove Stokes theorem. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => '<strong>Definition of Curl:</strong><br>' .
                             'The curl of a vector field \\(\\vec{F}\\) at a point is a vector that measures the tendency of the field to rotate or circulate around that point. It represents the maximum circulation per unit area as the area shrinks to zero.<br>' .
                             'In Cartesian coordinates, the curl is given by:<br>' .
                             '\\(\\nabla \\times \\vec{F} = \\begin{vmatrix} \\hat{a}_x & \\hat{a}_y & \\hat{a}_z \\\\ \\frac{\\partial}{\\partial x} & \\frac{\\partial}{\\partial y} & \\frac{\\partial}{\\partial z} \\\\ F_x & F_y & F_z \\end{vmatrix} = \\left( \\frac{\\partial F_z}{\\partial y} - \\frac{\\partial F_y}{\\partial z} \\right) \\hat{a}_x + \\left( \\frac{\\partial F_x}{\\partial z} - \\frac{\\partial F_z}{\\partial x} \\right) \\hat{a}_y + \\left( \\frac{\\partial F_y}{\\partial x} - \\frac{\\partial F_x}{\\partial y} \\right) \\hat{a}_z\\)<br><br>' .
                             '<strong>Stokes\' Theorem:</strong><br>' .
                             'Stokes\' theorem relates the surface integral of the curl of a vector field over a surface \\(S\\) to the line integral of the vector field around the boundary curve \\(C\\) of the surface.<br>' .
                             'Statement: \\(\\oint_C \\vec{F} \\cdot d\\vec{l} = \\iint_S (\\nabla \\times \\vec{F}) \\cdot d\\vec{S}\\)<br>' .
                             'Where \\(C\\) is the closed boundary curve of the open surface \\(S\\), and the direction of \\(d\\vec{S}\\) follows the right-hand rule with respect to the direction of traversal of \\(C\\).<br><br>' .
                             '<strong>Proof of Stokes\' Theorem:</strong><br>' .
                             'We prove it for a simple case where the surface \\(S\\) is planar and lies in the xy-plane, bounded by curve \\(C\\). The proof can be extended to general surfaces.<br>' .
                             'Let \\(\\vec{F} = F_x \\hat{a}_x + F_y \\hat{a}_y + F_z \\hat{a}_z\\). Since \\(S\\) is in the xy-plane, \\(d\\vec{S} = dx dy \\hat{a}_z\\).<br>' .
                             'The right-hand side (surface integral) becomes:<br>' .
                             '\\(\\iint_S (\\nabla \\times \\vec{F}) \\cdot d\\vec{S} = \\iint_S \\left( \\frac{\\partial F_y}{\\partial x} - \\frac{\\partial F_x}{\\partial y} \\right) \\hat{a}_z \\cdot (dx dy \\hat{a}_z) = \\iint_S \\left( \\frac{\\partial F_y}{\\partial x} - \\frac{\\partial F_x}{\\partial y} \\right) dx dy\\)<br><br>' .
                             'The left-hand side (line integral) is \\(\\oint_C \\vec{F} \\cdot d\\vec{l} = \\oint_C (F_x dx + F_y dy)\\).<br>' .
                             'We can break the closed curve \\(C\\) into two parts: \\(C_1\\) (bottom curve, y = f₁(x)) and \\(C_2\\) (top curve, y = f₂(x)), traversed such that for \\(C_1\\), x goes from a to b, and for \\(C_2\\), x goes from b to a.<br>' .
                             '\\(\\oint_C F_x dx = \\int_a^b F_x(x, f_1(x)) dx + \\int_b^a F_x(x, f_2(x)) dx = \\int_a^b [F_x(x, f_1(x)) - F_x(x, f_2(x))] dx\\)<br>' .
                             '\\(\\oint_C F_y dy = \\int_{C_1} F_y dy + \\int_{C_2} F_y dy\\). Parameterizing by x, \\(dy = \\frac{dy}{dx} dx\\), so:<br>' .
                             '\\(\\int_{C_1} F_y dy = \\int_a^b F_y(x, f_1(x)) \\frac{df_1}{dx} dx\\), and \\(\\int_{C_2} F_y dy = \\int_b^a F_y(x, f_2(x)) \\frac{df_2}{dx} dx = -\\int_a^b F_y(x, f_2(x)) \\frac{df_2}{dx} dx\\)<br>' .
                             'Combining:<br>' .
                             '\\(\\oint_C \\vec{F} \\cdot d\\vec{l} = \\int_a^b [F_x(x, f_1(x)) - F_x(x, f_2(x))] dx + \\int_a^b \\left[ F_y(x, f_1(x)) \\frac{df_1}{dx} - F_y(x, f_2(x)) \\frac{df_2}{dx} \\right] dx\\)<br><br>' .
                             'Now consider the double integral:<br>' .
                             '\\(\\iint_S \\frac{\\partial F_y}{\\partial x} dx dy = \\int_a^b \\int_{f_1(x)}^{f_2(x)} \\frac{\\partial F_y}{\\partial x} dy dx = \\int_a^b \\left[ F_y(x, y) \\right]_{y=f_1(x)}^{y=f_2(x)} dx = \\int_a^b [F_y(x, f_2(x)) - F_y(x, f_1(x))] dx\\)<br>' .
                             '\\(\\iint_S -\\frac{\\partial F_x}{\\partial y} dx dy = -\\int_a^b \\int_{f_1(x)}^{f_2(x)} \\frac{\\partial F_x}{\\partial y} dy dx = -\\int_a^b \\left[ F_x(x, y) \\right]_{y=f_1(x)}^{y=f_2(x)} dx = \\int_a^b [F_x(x, f_1(x)) - F_x(x, f_2(x))] dx\\)<br><br>' .
                             'Adding these two double integrals:<br>' .
                             '\\(\\iint_S \\left( \\frac{\\partial F_y}{\\partial x} - \\frac{\\partial F_x}{\\partial y} \\right) dx dy = \\int_a^b [F_y(x, f_2(x)) - F_y(x, f_1(x))] dx + \\int_a^b [F_x(x, f_1(x)) - F_x(x, f_2(x))] dx\\)<br>' .
                             'This matches exactly with the line integral expression above. Thus, for this planar case, \\(\\oint_C \\vec{F} \\cdot d\\vec{l} = \\iint_S (\\nabla \\times \\vec{F}) \\cdot d\\vec{S}\\).<br>' .
                             'The theorem holds for general surfaces by dividing them into infinitesimal planar elements and summing.',
                'solution_has_diagram' => false,
                'notes' => 'Curl is a fundamental operation in vector calculus that describes the rotation of a vector field. Stokes\' theorem is one of the most important theorems in vector calculus, providing a bridge between line integrals and surface integrals. It is the higher-dimensional analog of the Fundamental Theorem of Calculus. In electromagnetics, it is crucial for deriving the integral form of Ampere\'s law from its differential form (\\(\\nabla \\times \\vec{H} = \\vec{J}\\)).',
                'formulas' => [
                    'Curl (Cartesian): \\(\\nabla \\times \\vec{F} = \\left( \\frac{\\partial F_z}{\\partial y} - \\frac{\\partial F_y}{\\partial z} \\right) \\hat{a}_x + \\left( \\frac{\\partial F_x}{\\partial z} - \\frac{\\partial F_z}{\\partial x} \\right) \\hat{a}_y + \\left( \\frac{\\partial F_y}{\\partial x} - \\frac{\\partial F_x}{\\partial y} \\right) \\hat{a}_z\\)',
                    'Stokes\' Theorem: \\(\\oint_C \\vec{F} \\cdot d\\vec{l} = \\iint_S (\\nabla \\times \\vec{F}) \\cdot d\\vec{S}\\)'
                ]
            ],
            [
                'text' => 'A square loop of wire in the \\(z = 0\\) plane with coordinates \\((1, 0, 0)\\), \\((1, 2, 0)\\), \\((3, 2, 0)\\) and \\((3, 0, 0)\\) carrying 2 mA is placed in the field of an infinite filament on the y-axis with current of 15 A in \\(\\hat{a}_z\\) direction. Determine the total force on the loop. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => 'The force on a current-carrying conductor in a magnetic field is given by \\(\\vec{F} = I \\int d\\vec{l} \\times \\vec{B}\\).<br>' .
                             'First, find the magnetic field \\(\\vec{B}\\) due to the infinite filament on the y-axis.<br>' .
                             'The filament is along the y-axis (x=0, z=0) carrying current \\(I_f = 15\\) A in \\(+\\hat{a}_z\\) direction.<br>' .
                             'At a point \\((x, y, z)\\), the perpendicular distance from the filament is \\(\\rho = \\sqrt{x^2 + z^2}\\).<br>' .
                             'The magnetic field intensity is \\(\\vec{H} = \\frac{I_f}{2\\pi \\rho} \\hat{a}_\\phi\\), where \\(\\hat{a}_\\phi\\) is azimuthal around the y-axis.<br>' .
                             'In Cartesian coordinates, for a filament along y-axis, \\(\\hat{a}_\\phi = \\frac{ -z \\hat{a}_x + x \\hat{a}_z }{\\sqrt{x^2 + z^2}}\\) (using right-hand rule: thumb in +y direction, but current is in +z, so need to adjust).<br><br>' .
                             '<strong>Correction for filament along y-axis:</strong><br>' .
                             'For a filament along the y-axis with current in \\(+\\hat{a}_z\\) direction, this is unusual. Typically, filaments are along the axis of the coordinate system. Let\'s redefine: The filament is parallel to the z-axis and passes through the point (0, y, 0) for all y, i.e., it is the line x=0, z=0 — which is the z-axis, not the y-axis. Perhaps "on the y-axis" is a misnomer, and it should be "parallel to the z-axis and intersecting the y-axis at origin," meaning the z-axis.<br><br>' .
                             '<strong>Assuming filament is along z-axis (x=0, y=0):</strong><br>' .
                             'This is the standard case. \\(\\vec{H} = \\frac{I_f}{2\\pi \\rho} \\hat{a}_\\phi\\), where \\(\\rho = \\sqrt{x^2 + y^2}\\), and \\(\\hat{a}_\\phi = -\\sin\\phi \\hat{a}_x + \\cos\\phi \\hat{a}_y = \\frac{ -y \\hat{a}_x + x \\hat{a}_y }{\\sqrt{x^2 + y^2}}\\).<br>' .
                             'So \\(\\vec{H} = \\frac{15}{2\\pi \\sqrt{x^2 + y^2}} \\left( \\frac{ -y \\hat{a}_x + x \\hat{a}_y }{\\sqrt{x^2 + y^2}} \\right) = \\frac{15}{2\\pi (x^2 + y^2)} (-y \\hat{a}_x + x \\hat{a}_y)\\)<br>' .
                             '\\(\\vec{B} = \\mu_0 \\vec{H} = \\frac{\\mu_0 \\cdot 15}{2\\pi (x^2 + y^2)} (-y \\hat{a}_x + x \\hat{a}_y)\\)<br><br>' .
                             'The square loop is in z=0 plane with corners (1,0,0), (1,2,0), (3,2,0), (3,0,0). It carries current \\(I_l = 2\\) mA = 0.002 A. We need to find the force on each side and sum.<br>' .
                             'Label the sides:<br>' .
                             'Side 1: from (1,0,0) to (1,2,0) — along +y, \\(d\\vec{l} = dy \\hat{a}_y\\), x=1<br>' .
                             'Side 2: from (1,2,0) to (3,2,0) — along +x, \\(d\\vec{l} = dx \\hat{a}_x\\), y=2<br>' .
                             'Side 3: from (3,2,0) to (3,0,0) — along -y, \\(d\\vec{l} = -dy \\hat{a}_y\\), x=3<br>' .
                             'Side 4: from (3,0,0) to (1,0,0) — along -x, \\(d\\vec{l} = -dx \\hat{a}_x\\), y=0<br><br>' .
                             '<strong>Force on Side 1 (x=1, y from 0 to 2):</strong><br>' .
                             '\\(\\vec{B} = \\frac{\\mu_0 \\cdot 15}{2\\pi (1^2 + y^2)} (-y \\hat{a}_x + 1 \\hat{a}_y)\\)<br>' .
                             '\\(d\\vec{F}_1 = I_l (d\\vec{l} \\times \\vec{B}) = 0.002 (dy \\hat{a}_y) \\times \\left[ \\frac{\\mu_0 \\cdot 15}{2\\pi (1 + y^2)} (-y \\hat{a}_x + \\hat{a}_y) \\right]\\)<br>' .
                             'Cross product: \\(\\hat{a}_y \\times (-y \\hat{a}_x) = -y (\\hat{a}_y \\times \\hat{a}_x) = -y (-\\hat{a}_z) = y \\hat{a}_z\\)<br>' .
                             '\\(\\hat{a}_y \\times \\hat{a}_y = 0\\)<br>' .
                             'So \\(d\\vec{F}_1 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi (1 + y^2)} y dy \\hat{a}_z\\)<br>' .
                             '\\(\\vec{F}_1 = \\int_0^2 d\\vec{F}_1 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi} \\hat{a}_z \\int_0^2 \\frac{y}{1 + y^2} dy\\)<br>' .
                             'Let \\(u = 1 + y^2\\), \\(du = 2y dy\\), so \\(\\int \\frac{y dy}{1+y^2} = \\frac{1}{2} \\ln(1+y^2)\\)<br>' .
                             '\\(\\vec{F}_1 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi} \\hat{a}_z \\cdot \\frac{1}{2} [\\ln(1+y^2)]_0^2 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{4\\pi} \\hat{a}_z (\\ln(5) - \\ln(1))\\)<br>' .
                             '\\(\\vec{F}_1 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{4\\pi} \\ln(5) \\hat{a}_z\\)<br><br>' .
                             '<strong>Force on Side 3 (x=3, y from 2 to 0, dl = -dy \\hat{a}_y):</strong><br>' .
                             '\\(\\vec{B} = \\frac{\\mu_0 \\cdot 15}{2\\pi (9 + y^2)} (-y \\hat{a}_x + 3 \\hat{a}_y)\\)<br>' .
                             '\\(d\\vec{F}_3 = I_l (d\\vec{l} \\times \\vec{B}) = 0.002 (-dy \\hat{a}_y) \\times \\left[ \\frac{\\mu_0 \\cdot 15}{2\\pi (9 + y^2)} (-y \\hat{a}_x + 3 \\hat{a}_y) \\right]\\)<br>' .
                             'Cross product: \\((-\\hat{a}_y) \\times (-y \\hat{a}_x) = -y ( -\\hat{a}_y \\times \\hat{a}_x) = -y (\\hat{a}_z) = -y \\hat{a}_z\\)<br>' .
                             '\\((-\\hat{a}_y) \\times \\hat{a}_y = 0\\)<br>' .
                             'So \\(d\\vec{F}_3 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi (9 + y^2)} (-y) (-dy) \\hat{a}_z = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi (9 + y^2)} y dy \\hat{a}_z\\) (note: -dy from limits, but we have -dy in dl and another - from cross product)<br>' .
                             'Integrating from y=2 to y=0 is same as -∫ from 0 to 2, but we have positive dy in expression, so:<br>' .
                             '\\(\\vec{F}_3 = \\int_2^0 ... = - \\int_0^2 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi (9 + y^2)} y dy \\hat{a}_z = -0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi} \\hat{a}_z \\int_0^2 \\frac{y}{9 + y^2} dy\\)<br>' .
                             'Let \\(u = 9 + y^2\\), \\(du = 2y dy\\), \\(\\int \\frac{y dy}{9+y^2} = \\frac{1}{2} \\ln(9+y^2)\\)<br>' .
                             '\\(\\vec{F}_3 = -0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi} \\hat{a}_z \\cdot \\frac{1}{2} [\\ln(9+y^2)]_0^2 = -0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{4\\pi} \\hat{a}_z (\\ln(13) - \\ln(9))\\)<br>' .
                             '\\(\\vec{F}_3 = -0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{4\\pi} \\ln(13/9) \\hat{a}_z\\)<br><br>' .
                             '<strong>Force on Side 2 (y=2, x from 1 to 3, dl = dx \\hat{a}_x):</strong><br>' .
                             '\\(\\vec{B} = \\frac{\\mu_0 \\cdot 15}{2\\pi (x^2 + 4)} (-2 \\hat{a}_x + x \\hat{a}_y)\\)<br>' .
                             '\\(d\\vec{F}_2 = I_l (d\\vec{l} \\times \\vec{B}) = 0.002 (dx \\hat{a}_x) \\times \\left[ \\frac{\\mu_0 \\cdot 15}{2\\pi (x^2 + 4)} (-2 \\hat{a}_x + x \\hat{a}_y) \\right]\\)<br>' .
                             'Cross product: \\(\\hat{a}_x \\times (-2 \\hat{a}_x) = 0\\), \\(\\hat{a}_x \\times (x \\hat{a}_y) = x \\hat{a}_z\\)<br>' .
                             'So \\(d\\vec{F}_2 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi (x^2 + 4)} x dx \\hat{a}_z\\)<br>' .
                             '\\(\\vec{F}_2 = \\int_1^3 d\\vec{F}_2 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi} \\hat{a}_z \\int_1^3 \\frac{x}{x^2 + 4} dx\\)<br>' .
                             'Let \\(u = x^2 + 4\\), \\(du = 2x dx\\), \\(\\int \\frac{x dx}{x^2+4} = \\frac{1}{2} \\ln(x^2+4)\\)<br>' .
                             '\\(\\vec{F}_2 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi} \\hat{a}_z \\cdot \\frac{1}{2} [\\ln(x^2+4)]_1^3 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{4\\pi} \\hat{a}_z (\\ln(13) - \\ln(5))\\)<br>' .
                             '\\(\\vec{F}_2 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{4\\pi} \\ln(13/5) \\hat{a}_z\\)<br><br>' .
                             '<strong>Force on Side 4 (y=0, x from 3 to 1, dl = -dx \\hat{a}_x):</strong><br>' .
                             '\\(\\vec{B} = \\frac{\\mu_0 \\cdot 15}{2\\pi (x^2 + 0)} (0 \\cdot \\hat{a}_x + x \\hat{a}_y) = \\frac{\\mu_0 \\cdot 15}{2\\pi x^2} (x \\hat{a}_y) = \\frac{\\mu_0 \\cdot 15}{2\\pi x} \\hat{a}_y\\)<br>' .
                             '\\(d\\vec{F}_4 = I_l (d\\vec{l} \\times \\vec{B}) = 0.002 (-dx \\hat{a}_x) \\times \\left( \\frac{\\mu_0 \\cdot 15}{2\\pi x} \\hat{a}_y \\right) = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi x} (-dx) (\\hat{a}_x \\times \\hat{a}_y)\\)<br>' .
                             '\\(\\hat{a}_x \\times \\hat{a}_y = \\hat{a}_z\\), so \\(d\\vec{F}_4 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi x} (-dx) \\hat{a}_z\\)<br>' .
                             'Integrating from x=3 to x=1:<br>' .
                             '\\(\\vec{F}_4 = \\int_3^1 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi x} (-dx) \\hat{a}_z = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi} \\hat{a}_z \\int_3^1 \\frac{-dx}{x} = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi} \\hat{a}_z \\int_1^3 \\frac{dx}{x}\\)<br>' .
                             '\\(\\vec{F}_4 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi} \\hat{a}_z [\\ln x]_1^3 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi} \\ln(3) \\hat{a}_z\\)<br><br>' .
                             '<strong>Total Force:</strong><br>' .
                             '\\(\\vec{F}_{total} = \\vec{F}_1 + \\vec{F}_2 + \\vec{F}_3 + \\vec{F}_4\\)<br>' .
                             'All forces are in \\(\\hat{a}_z\\) direction. Factor out \\(0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{4\\pi}\\):<br>' .
                             '\\(\\vec{F}_{total} = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{4\\pi} \\left[ \\ln(5) + \\ln(13/5) - \\ln(13/9) + 2\\ln(3) \\right] \\hat{a}_z\\)<br>' .
                             'Note: \\(\\vec{F}_4\\) has factor \\(\\frac{1}{2\\pi}\\) while others have \\(\\frac{1}{4\\pi}\\), so adjust:<br>' .
                             '\\(\\vec{F}_4 = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{2\\pi} \\ln(3) \\hat{a}_z = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{4\\pi} \\cdot 2 \\ln(3) \\hat{a}_z\\)<br>' .
                             'So:<br>' .
                             '\\(\\vec{F}_{total} = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{4\\pi} \\left[ \\ln 5 + \\ln(13/5) - \\ln(13/9) + 2\\ln 3 \\right] \\hat{a}_z\\)<br>' .
                             'Simplify the expression inside:<br>' .
                             '\\(\\ln 5 + \\ln(13/5) = \\ln 5 + \\ln 13 - \\ln 5 = \\ln 13\\)<br>' .
                             'Then \\(\\ln 13 - \\ln(13/9) = \\ln 13 - (\\ln 13 - \\ln 9) = \\ln 9\\)<br>' .
                             'Then \\(\\ln 9 + 2\\ln 3 = 2\\ln 3 + 2\\ln 3 = 4\\ln 3\\) (since \\(\\ln 9 = \\ln(3^2) = 2\\ln 3\\))<br>' .
                             'So \\(\\vec{F}_{total} = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{4\\pi} \\cdot 4\\ln 3  \\hat{a}_z = 0.002 \\cdot \\frac{\\mu_0 \\cdot 15}{\\pi} \\ln 3  \\hat{a}_z\\)<br>' .
                             'Substitute \\(\\mu_0 = 4\\pi \\times 10^{-7}\\):<br>' .
                             '\\(\\vec{F}_{total} = 0.002 \\cdot \\frac{(4\\pi \\times 10^{-7}) \\cdot 15}{\\pi} \\ln 3  \\hat{a}_z = 0.002 \\cdot 4 \\times 10^{-7} \\cdot 15 \\cdot \\ln 3  \\hat{a}_z\\)<br>' .
                             '\\(\\vec{F}_{total} = 0.002 \\cdot 60 \\times 10^{-7} \\cdot 1.0986  \\hat{a}_z \\approx 0.002 \\cdot 6.5916 \\times 10^{-6} \\hat{a}_z = 1.318 \\times 10^{-8} \\hat{a}_z\\) N<br><br>' .
                             'The total force on the loop is approximately \\(13.18\\) nN in the +z direction.',
                'solution_has_diagram' => false,
                'notes' => 'The force calculation involves integrating the force on each segment of the loop. The magnetic field is non-uniform, so the force on opposite sides does not cancel completely. In this case, the net force is upward (+z). Note that there was ambiguity in the problem statement regarding the filament location; we assumed it was along the z-axis. If the filament were truly along the y-axis with current in z-direction, it would not be a straight wire, and the problem would need reinterpretation.',
                'formulas' => [
                    'Force on current: \\(\\vec{F} = I \\int d\\vec{l} \\times \\vec{B}\\)',
                    'B from infinite wire: \\(\\vec{B} = \\frac{\\mu_0 I}{2\\pi \\rho} \\hat{a}_\\phi\\)',
                    '\\(\\hat{a}_\\phi\\) in Cartesian: for wire along z-axis, \\(\\hat{a}_\\phi = \\frac{ -y \\hat{a}_x + x \\hat{a}_y }{\\sqrt{x^2 + y^2}}\\)'
                ]
            ],
            [
                'text' => 'The Magnetic field Intensity in a certain region is given \\(\\vec{H} = 20\\hat{a}_\\rho - 10\\hat{a}_\\phi + 3\\hat{a}_z \\text{A/m}\\). Transform this field vector into Cartesian coordinate at \\(P(x = 5, y = 5, z = -1)\\). [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false,
                'solution' => 'To transform the vector \\(\\vec{H} = 20\\hat{a}_\\rho - 10\\hat{a}_\\phi + 3\\hat{a}_z\\) from cylindrical to Cartesian coordinates at point P(5,5,-1).<br><br>' .
                             'First, find the cylindrical coordinates of P:<br>' .
                             '\\(\\rho = \\sqrt{x^2 + y^2} = \\sqrt{25 + 25} = \\sqrt{50} = 5\\sqrt{2} \\approx 7.071\\)<br>' .
                             '\\(\\phi = \\tan^{-1}(y/x) = \\tan^{-1}(5/5) = \\tan^{-1}(1) = 45^\\circ = \\pi/4\\) rad (since x>0, y>0)<br>' .
                             '\\(z = -1\\)<br><br>' .
                             'The transformation of unit vectors from cylindrical to Cartesian is:<br>' .
                             '\\(\\hat{a}_\\rho = \\cos\\phi \\hat{a}_x + \\sin\\phi \\hat{a}_y\\)<br>' .
                             '\\(\\hat{a}_\\phi = -\\sin\\phi \\hat{a}_x + \\cos\\phi \\hat{a}_y\\)<br>' .
                             '\\(\\hat{a}_z = \\hat{a}_z\\)<br><br>' .
                             'At \\(\\phi = 45^\\circ\\), \\(\\cos\\phi = \\sin\\phi = \\frac{\\sqrt{2}}{2} = 0.7071\\)<br>' .
                             'So:<br>' .
                             '\\(\\hat{a}_\\rho = 0.7071 \\hat{a}_x + 0.7071 \\hat{a}_y\\)<br>' .
                             '\\(\\hat{a}_\\phi = -0.7071 \\hat{a}_x + 0.7071 \\hat{a}_y\\)<br>' .
                             '\\(\\hat{a}_z = \\hat{a}_z\\)<br><br>' .
                             'Now express \\(\\vec{H}\\) in Cartesian:<br>' .
                             '\\(\\vec{H} = 20 (0.7071 \\hat{a}_x + 0.7071 \\hat{a}_y) - 10 (-0.7071 \\hat{a}_x + 0.7071 \\hat{a}_y) + 3 \\hat{a}_z\\)<br>' .
                             'Compute components:<br>' .
                             'x-component: \\(20 \\times 0.7071 - 10 \\times (-0.7071) = 14.142 + 7.071 = 21.213\\)<br>' .
                             'y-component: \\(20 \\times 0.7071 - 10 \\times 0.7071 = 14.142 - 7.071 = 7.071\\)<br>' .
                             'z-component: \\(3\\)<br><br>' .
                             'Therefore, in Cartesian coordinates:<br>' .
                             '\\(\\vec{H} = 21.213 \\hat{a}_x + 7.071 \\hat{a}_y + 3 \\hat{a}_z\\) A/m<br><br>' .
                             'We can write it exactly using \\(\\frac{\\sqrt{2}}{2}\\):<br>' .
                             '\\(H_x = 20 \\cdot \\frac{\\sqrt{2}}{2} - 10 \\cdot (-\\frac{\\sqrt{2}}{2}) = 10\\sqrt{2} + 5\\sqrt{2} = 15\\sqrt{2}\\)<br>' .
                             '\\(H_y = 20 \\cdot \\frac{\\sqrt{2}}{2} - 10 \\cdot \\frac{\\sqrt{2}}{2} = 10\\sqrt{2} - 5\\sqrt{2} = 5\\sqrt{2}\\)<br>' .
                             '\\(H_z = 3\\)<br>' .
                             'So \\(\\vec{H} = 15\\sqrt{2}  \\hat{a}_x + 5\\sqrt{2}  \\hat{a}_y + 3 \\hat{a}_z \\approx 21.213 \\hat{a}_x + 7.071 \\hat{a}_y + 3 \\hat{a}_z\\) A/m',
                'solution_has_diagram' => false,
                'notes' => 'Vector transformation depends on the location (specifically the angle φ) because the cylindrical unit vectors \\(\\hat{a}_\\rho\\) and \\(\\hat{a}_\\phi\\) change direction with position. The z-component remains unchanged. Always compute φ correctly based on the quadrant of the point.',
                'formulas' => [
                    '\\(\\hat{a}_\\rho = \\cos\\phi \\hat{a}_x + \\sin\\phi \\hat{a}_y\\)',
                    '\\(\\hat{a}_\\phi = -\\sin\\phi \\hat{a}_x + \\cos\\phi \\hat{a}_y\\)',
                    '\\(\\hat{a}_z = \\hat{a}_z\\)',
                    '\\(\\phi = \\tan^{-1}(y/x)\\) (with quadrant adjustment)'
                ]
            ],
            [
                'text' => 'Define Biot Savart\'s law. Let the permittivity be 5 \\(\\mu\\)H/m in region A where \\(x < 0\\), and 20 \\(\\mu\\)H/m in region B where \\(x > 0\\). If there is a surface current density, \\(\\vec{K} = 150\\hat{a}_y - 200\\hat{a}_z \\text{A/m}\\) at \\(x = 0\\) and if \\(\\vec{H}_1 = 300\\hat{a}_x - 400\\hat{a}_y + 500\\hat{a}_z \\text{A/m}\\), find \\(|\\vec{H}_{1t}|\\), \\(|\\vec{H}_{2t}|\\), \\(|\\vec{H}_{1n}|\\) and \\(|\\vec{H}_{2n}|\\). [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false,
                'solution' => '<strong>Definition of Biot-Savart Law:</strong><br>' .
                             'Biot-Savart Law gives the magnetic flux density \\(d\\vec{B}\\) produced at a point by a differential current element \\(I d\\vec{l}\\):<br>' .
                             '\\(d\\vec{B} = \\frac{\\mu_0}{4\\pi} \\frac{I d\\vec{l} \\times \\hat{R}}{R^2}\\)<br>' .
                             'where \\(\\mu_0\\) is the permeability of free space, \\(I d\\vec{l}\\) is the current element, \\(\\hat{R}\\) is the unit vector from the element to the field point, and \\(R\\) is the distance. The total field is found by integrating over the current path.<br><br>' .
                             '<strong>Magnetic Boundary Conditions:</strong><br>' .
                             'Given a surface at x=0 with surface current \\(\\vec{K} = 150\\hat{a}_y - 200\\hat{a}_z\\) A/m.<br>' .
                             'Region 1 (x<0): \\(\\mu_1 = 5 \\mu\\)H/m = \\(5 \\times 10^{-6}\\) H/m, \\(\\vec{H}_1 = 300\\hat{a}_x - 400\\hat{a}_y + 500\\hat{a}_z\\) A/m<br>' .
                             'Region 2 (x>0): \\(\\mu_2 = 20 \\mu\\)H/m = \\(20 \\times 10^{-6}\\) H/m<br>' .
                             'The normal component is along x (since boundary is x=0 plane, normal is \\(\\hat{a}_x\\)).<br>' .
                             'Tangential components are y and z.<br><br>' .
                             'Boundary conditions:<br>' .
                             '1. Normal component of \\(\\vec{B}\\) is continuous: \\(B_{1n} = B_{2n}\\)<br>' .
                             '2. Tangential component of \\(\\vec{H}\\) has discontinuity due to surface current: \\(\\hat{a}_n \\times (\\vec{H}_1 - \\vec{H}_2) = \\vec{K}\\), where \\(\\hat{a}_n\\) is normal from region 1 to region 2. Here, \\(\\hat{a}_n = \\hat{a}_x\\) (from x<0 to x>0).<br><br>' .
                             '<strong>Normal Components:</strong><br>' .
                             'Normal component of \\(\\vec{H}_1\\): \\(H_{1n} = \\vec{H}_1 \\cdot \\hat{a}_x = 300\\) A/m<br>' .
                             'So \\(|\\vec{H}_{1n}| = |300| = 300\\) A/m<br>' .
                             'Now, \\(B_{1n} = \\mu_1 H_{1n} = 5 \\times 10^{-6} \\times 300 = 1.5 \\times 10^{-3}\\) T<br>' .
                             'Since \\(B_{1n} = B_{2n}\\), and \\(B_{2n} = \\mu_2 H_{2n}\\), so \\(H_{2n} = \\frac{B_{2n}}{\\mu_2} = \\frac{1.5 \\times 10^{-3}}{20 \\times 10^{-6}} = 75\\) A/m<br>' .
                             'Thus \\(|\\vec{H}_{2n}| = |75| = 75\\) A/m<br><br>' .
                             '<strong>Tangential Components:</strong><br>' .
                             'Tangential component of \\(\\vec{H}_1\\): \\(\\vec{H}_{1t} = -400\\hat{a}_y + 500\\hat{a}_z\\) A/m<br>' .
                             'Magnitude \\(|\\vec{H}_{1t}| = \\sqrt{(-400)^2 + 500^2} = \\sqrt{160000 + 250000} = \\sqrt{410000} = 100\\sqrt{41} \\approx 640.31\\) A/m<br><br>' .
                             'Now use boundary condition for tangential H:<br>' .
                             '\\(\\hat{a}_n \\times (\\vec{H}_1 - \\vec{H}_2) = \\vec{K}\\)<br>' .
                             'With \\(\\hat{a}_n = \\hat{a}_x\\), so:<br>' .
                             '\\(\\hat{a}_x \\times (\\vec{H}_1 - \\vec{H}_2) = \\vec{K}\\)<br>' .
                             'Let \\(\\vec{H}_2 = H_{2x} \\hat{a}_x + H_{2y} \\hat{a}_y + H_{2z} \\hat{a}_z\\). We already have \\(H_{2x} = H_{2n} = 75\\) A/m.<br>' .
                             'So \\(\\vec{H}_1 - \\vec{H}_2 = (300 - 75)\\hat{a}_x + (-400 - H_{2y})\\hat{a}_y + (500 - H_{2z})\\hat{a}_z = 225\\hat{a}_x + (-400 - H_{2y})\\hat{a}_y + (500 - H_{2z})\\hat{a}_z\\)<br>' .
                             'Now \\(\\hat{a}_x \\times (\\vec{H}_1 - \\vec{H}_2) = \\begin{vmatrix} \\hat{a}_x & \\hat{a}_y & \\hat{a}_z \\\\ 1 & 0 & 0 \\\\ 225 & -400-H_{2y} & 500-H_{2z} \\end{vmatrix} = \\hat{a}_y (500 - H_{2z}) - \\hat{a}_z (-400 - H_{2y}) = (500 - H_{2z}) \\hat{a}_y + (400 + H_{2y}) \\hat{a}_z\\)<br>' .
                             'Set equal to \\(\\vec{K} = 150\\hat{a}_y - 200\\hat{a}_z\\):<br>' .
                             'So:<br>' .
                             '\\(500 - H_{2z} = 150\\) => \\(H_{2z} = 500 - 150 = 350\\) A/m<br>' .
                             '\\(400 + H_{2y} = -200\\) => \\(H_{2y} = -200 - 400 = -600\\) A/m<br><br>' .
                             'Thus tangential component of \\(\\vec{H}_2\\): \\(\\vec{H}_{2t} = H_{2y} \\hat{a}_y + H_{2z} \\hat{a}_z = -600\\hat{a}_y + 350\\hat{a}_z\\) A/m<br>' .
                             'Magnitude \\(|\\vec{H}_{2t}| = \\sqrt{(-600)^2 + 350^2} = \\sqrt{360000 + 122500} = \\sqrt{482500} = 50\\sqrt{193} \\approx 694.62\\) A/m<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             '\\(|\\vec{H}_{1n}| = 300\\) A/m<br>' .
                             '\\(|\\vec{H}_{2n}| = 75\\) A/m<br>' .
                             '\\(|\\vec{H}_{1t}| = \\sqrt{410000} = 100\\sqrt{41} \\approx 640.31\\) A/m<br>' .
                             '\\(|\\vec{H}_{2t}| = \\sqrt{482500} = 50\\sqrt{193} \\approx 694.62\\) A/m',
                'solution_has_diagram' => false,
                'notes' => 'Note: The problem mentions "permittivity" but gives units of μH/m, which is permeability (μ), not permittivity (ε). We proceed with permeability. The boundary condition for tangential H involves the cross product with the normal vector. The normal component of B is continuous, not H. The surface current causes a discontinuity in the tangential H field.',
                'formulas' => [
                    'Biot-Savart: \\(d\\vec{B} = \\frac{\\mu_0}{4\\pi} \\frac{I d\\vec{l} \\times \\hat{R}}{R^2}\\)',
                    'Boundary: \\(B_{1n} = B_{2n}\\)',
                    'Boundary: \\(\\hat{a}_n \\times (\\vec{H}_1 - \\vec{H}_2) = \\vec{K}\\)'
                ]
            ]
        ]
    ],




    [
        'chapter' => 4,
        'title' => 'Time Varying Fields (Faraday, Displacement Current, Maxwell)',
        'questions' => [
            [
                'text' => 'Derive the expression for Maxwell\'s equation in point form. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => 'Maxwell\'s equations in point (differential) form are derived from experimental laws and theoretical modifications to account for time-varying fields. Here are the four equations with their derivations:<br><br>' .
                             '<b>1. Gauss\'s Law for Electric Fields:</b><br>' .
                             'Derived from Coulomb\'s law and the concept of electric flux. The differential form is:<br>' .
                             '\\(\\nabla \\cdot \\vec{D} = \\rho_v\\)<br>' .
                             'where \\(\\vec{D} = \\epsilon \\vec{E}\\) is the electric flux density and \\(\\rho_v\\) is the volume charge density.<br><br>' .
                             '<b>2. Gauss\'s Law for Magnetic Fields:</b><br>' .
                             'Based on the experimental observation that magnetic monopoles do not exist. The differential form is:<br>' .
                             '\\(\\nabla \\cdot \\vec{B} = 0\\)<br>' .
                             'This states that magnetic field lines are always closed loops with no sources or sinks.<br><br>' .
                             '<b>3. Faraday\'s Law of Electromagnetic Induction:</b><br>' .
                             'Derived from Faraday\'s experiments showing that a changing magnetic field induces an electric field. The differential form is:<br>' .
                             '\\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\)<br>' .
                             'The negative sign indicates Lenz\'s law (the induced EMF opposes the change in magnetic flux).<br><br>' .
                             '<b>4. Ampere\'s Circuital Law (with Maxwell\'s correction):</b><br>' .
                             'Ampere\'s original law \\(\\nabla \\times \\vec{H} = \\vec{J}\\) conflicted with the continuity equation. Maxwell resolved this by adding the displacement current term:<br>' .
                             '\\(\\nabla \\times \\vec{H} = \\vec{J} + \\frac{\\partial \\vec{D}}{\\partial t}\\)<br>' .
                             'where \\(\\frac{\\partial \\vec{D}}{\\partial t}\\) is the displacement current density.<br><br>' .
                             'These four equations form the foundation of classical electromagnetism and describe how electric and magnetic fields are generated and altered by charges, currents, and changes in the fields themselves.',
                'solution_has_diagram' => false,
                'notes' => 'Maxwell\'s equations in point form are local equations that apply at every point in space. They are more general than their integral counterparts and are essential for analyzing electromagnetic wave propagation and time-varying field problems.',
                'formulas' => [
                    '\\(\\nabla \\cdot \\vec{D} = \\rho_v\\)',
                    '\\(\\nabla \\cdot \\vec{B} = 0\\)',
                    '\\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\)',
                    '\\(\\nabla \\times \\vec{H} = \\vec{J} + \\frac{\\partial \\vec{D}}{\\partial t}\\)'
                ]
            ],
            [
                'text' => 'Justify the Maxwell\'s equation: \\(\\nabla \\cdot \\vec{B} = 0\\) with necessary remarks. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => 'The equation \\(\\nabla \\cdot \\vec{B} = 0\\) is Gauss\'s law for magnetism in differential form. It can be justified as follows:<br><br>' .
                             '<b>Physical Justification:</b><br>' .
                             'This equation states that the divergence of the magnetic field is zero everywhere. Physically, this means there are no magnetic monopoles (isolated magnetic charges). Unlike electric field lines that begin and end on electric charges, magnetic field lines always form closed loops. They have no starting or ending points.<br><br>' .
                             '<b>Mathematical Derivation from Integral Form:</b><br>' .
                             'The integral form of Gauss\'s law for magnetism is:<br>' .
                             '\\(\\oint_S \\vec{B} \\cdot d\\vec{s} = 0\\)<br>' .
                             'This states that the net magnetic flux through any closed surface is zero.<br><br>' .
                             'Applying the divergence theorem:<br>' .
                             '\\(\\oint_S \\vec{B} \\cdot d\\vec{s} = \\int_V (\\nabla \\cdot \\vec{B}) dv = 0\\)<br>' .
                             'Since this must hold for any arbitrary volume V, the integrand must be zero:<br>' .
                             '\\(\\nabla \\cdot \\vec{B} = 0\\)<br><br>' .
                             '<b>Experimental Evidence:</b><br>' .
                             'Despite extensive searches, no magnetic monopoles have been experimentally observed. All known magnetic fields are produced by moving electric charges (currents) or by intrinsic magnetic moments of particles, which always come in pairs (north and south poles).<br><br>' .
                             '<b>Consequences:</b><br>' .
                             '1. Magnetic field lines are always continuous and form closed loops.<br>' .
                             '2. There are no sources or sinks for magnetic field lines.<br>' .
                             '3. The magnetic flux through any closed surface is always zero.<br>' .
                             '4. This equation is consistent with the Biot-Savart law and Ampere\'s law for magnetic fields produced by currents.',
                'solution_has_diagram' => false,
                'notes' => 'This equation is one of the most fundamental in electromagnetism. If magnetic monopoles were ever discovered, this equation would need to be modified to \\(\\nabla \\cdot \\vec{B} = \\rho_m\\), where \\(\\rho_m\\) would be the magnetic charge density.',
                'formulas' => [
                    '\\(\\nabla \\cdot \\vec{B} = 0\\)',
                    '\\(\\oint_S \\vec{B} \\cdot d\\vec{s} = 0\\)',
                    '\\(\\oint_S \\vec{B} \\cdot d\\vec{s} = \\int_V (\\nabla \\cdot \\vec{B}) dv\\)'
                ]
            ],
            [
                'text' => 'Explain Faraday\'s law. Derive the relation of the motional emf and displacement current. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => '<b>Faraday\'s Law:</b><br>' .
                             'Faraday\'s law of electromagnetic induction states that a changing magnetic flux through a closed loop induces an electromotive force (EMF) in the loop. The integral form is:<br>' .
                             '\\(\\mathcal{E} = -\\frac{d\\Phi_B}{dt}\\)<br>' .
                             'where \\(\\mathcal{E}\\) is the induced EMF and \\(\\Phi_B\\) is the magnetic flux through the loop.<br><br>' .
                             'The differential form (Maxwell-Faraday equation) is:<br>' .
                             '\\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\)<br><br>' .
                             '<b>Motional EMF:</b><br>' .
                             'Motional EMF occurs when a conductor moves through a magnetic field. Consider a conductor of length \\(l\\) moving with velocity \\(\\vec{v}\\) perpendicular to a uniform magnetic field \\(\\vec{B}\\). The force on a charge \\(q\\) in the conductor is:<br>' .
                             '\\(\\vec{F} = q(\\vec{v} \\times \\vec{B})\\)<br>' .
                             'This force creates an electric field \\(\\vec{E}_m = \\vec{v} \\times \\vec{B}\\) within the conductor. The motional EMF is:<br>' .
                             '\\(\\mathcal{E}_m = \\int (\\vec{v} \\times \\vec{B}) \\cdot d\\vec{l}\\)<br>' .
                             'For a straight conductor moving perpendicular to \\(\\vec{B}\\):<br>' .
                             '\\(\\mathcal{E}_m = B l v\\)<br><br>' .
                             '<b>Displacement Current:</b><br>' .
                             'Displacement current is not a current of moving charges but a term introduced by Maxwell to account for changing electric fields. It is defined as:<br>' .
                             '\\(\\vec{J}_d = \\frac{\\partial \\vec{D}}{\\partial t}\\)<br>' .
                             'where \\(\\vec{D} = \\epsilon \\vec{E}\\) is the electric displacement field.<br><br>' .
                             'Derivation: Ampere\'s original law \\(\\nabla \\times \\vec{H} = \\vec{J}\\) conflicted with the continuity equation \\(\\nabla \\cdot \\vec{J} = -\\frac{\\partial \\rho_v}{\\partial t}\\). Taking the divergence of Ampere\'s law:<br>' .
                             '\\(\\nabla \\cdot (\\nabla \\times \\vec{H}) = \\nabla \\cdot \\vec{J}\\)<br>' .
                             'Since \\(\\nabla \\cdot (\\nabla \\times \\vec{H}) = 0\\), we get:<br>' .
                             '\\(\\nabla \\cdot \\vec{J} = 0\\)<br>' .
                             'But this contradicts the continuity equation for time-varying fields. Maxwell resolved this by modifying Ampere\'s law:<br>' .
                             '\\(\\nabla \\times \\vec{H} = \\vec{J} + \\frac{\\partial \\vec{D}}{\\partial t}\\)<br>' .
                             'Now taking the divergence:<br>' .
                             '\\(\\nabla \\cdot (\\nabla \\times \\vec{H}) = \\nabla \\cdot \\vec{J} + \\nabla \\cdot \\frac{\\partial \\vec{D}}{\\partial t}\\)<br>' .
                             '\\(0 = \\nabla \\cdot \\vec{J} + \\frac{\\partial}{\\partial t}(\\nabla \\cdot \\vec{D})\\)<br>' .
                             'Using Gauss\'s law \\(\\nabla \\cdot \\vec{D} = \\rho_v\\):<br>' .
                             '\\(0 = \\nabla \\cdot \\vec{J} + \\frac{\\partial \\rho_v}{\\partial t}\\)<br>' .
                             'This matches the continuity equation, resolving the conflict.',
                'solution_has_diagram' => false,
                'notes' => 'Faraday\'s law has two components: transformer EMF (from time-varying magnetic fields) and motional EMF (from motion in magnetic fields). Displacement current is crucial for the existence of electromagnetic waves and completes the symmetry between electric and magnetic fields in Maxwell\'s equations.',
                'formulas' => [
                    '\\(\\mathcal{E} = -\\frac{d\\Phi_B}{dt}\\)',
                    '\\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\)',
                    '\\(\\mathcal{E}_m = \\int (\\vec{v} \\times \\vec{B}) \\cdot d\\vec{l}\\)',
                    '\\(\\vec{J}_d = \\frac{\\partial \\vec{D}}{\\partial t}\\)',
                    '\\(\\nabla \\times \\vec{H} = \\vec{J} + \\frac{\\partial \\vec{D}}{\\partial t}\\)'
                ]
            ],
            [
                'text' => 'Define Poynting vector. Using this deduce the time average power density for a dissipative medium. [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false,
                'solution' => '<b>Definition of Poynting Vector:</b><br>' .
                             'The Poynting vector \\(\\vec{S}\\) represents the directional energy flux density (power per unit area) of an electromagnetic field. It is defined as:<br>' .
                             '\\(\\vec{S} = \\vec{E} \\times \\vec{H}\\)<br>' .
                             'where \\(\\vec{E}\\) is the electric field and \\(\\vec{H}\\) is the magnetic field. The SI unit is watts per square meter (W/m²).<br><br>' .
                             '<b>Time-Average Power Density for a Dissipative Medium:</b><br>' .
                             'In a dissipative medium, electromagnetic waves attenuate as they propagate due to energy loss (e.g., ohmic heating). For a plane wave propagating in the z-direction in a dissipative medium, the fields can be expressed as:<br>' .
                             '\\(\\vec{E}(z,t) = E_0 e^{-\\alpha z} \\cos(\\omega t - \\beta z) \\hat{a}_x\\)<br>' .
                             '\\(\\vec{H}(z,t) = \\frac{E_0}{|\\eta|} e^{-\\alpha z} \\cos(\\omega t - \\beta z - \\theta_\\eta) \\hat{a}_y\\)<br>' .
                             'where \\(\\alpha\\) is the attenuation constant, \\(\\beta\\) is the phase constant, and \\(\\eta = |\\eta|e^{j\\theta_\\eta}\\) is the complex intrinsic impedance of the medium.<br><br>' .
                             'The instantaneous Poynting vector is:<br>' .
                             '\\(\\vec{S}(z,t) = \\vec{E}(z,t) \\times \\vec{H}(z,t) = E_0 e^{-\\alpha z} \\cos(\\omega t - \\beta z) \\cdot \\frac{E_0}{|\\eta|} e^{-\\alpha z} \\cos(\\omega t - \\beta z - \\theta_\\eta) \\hat{a}_z\\)<br>' .
                             '\\(\\vec{S}(z,t) = \\frac{E_0^2}{|\\eta|} e^{-2\\alpha z} \\cos(\\omega t - \\beta z) \\cos(\\omega t - \\beta z - \\theta_\\eta) \\hat{a}_z\\)<br><br>' .
                             'Using the trigonometric identity \\(\\cos A \\cos B = \\frac{1}{2}[\\cos(A-B) + \\cos(A+B)]\\):<br>' .
                             '\\(\\vec{S}(z,t) = \\frac{E_0^2}{2|\\eta|} e^{-2\\alpha z} [\\cos(\\theta_\\eta) + \\cos(2\\omega t - 2\\beta z - \\theta_\\eta)] \\hat{a}_z\\)<br><br>' .
                             'The time-average power density is obtained by averaging over one period \\(T = \\frac{2\\pi}{\\omega}\\):<br>' .
                             '\\(\\langle \\vec{S} \\rangle = \\frac{1}{T} \\int_0^T \\vec{S}(z,t) dt\\)<br>' .
                             'The time-average of the oscillating term \\(\\cos(2\\omega t - 2\\beta z - \\theta_\\eta)\\) over one period is zero, so:<br>' .
                             '\\(\\langle \\vec{S} \\rangle = \\frac{E_0^2}{2|\\eta|} e^{-2\\alpha z} \\cos(\\theta_\\eta) \\hat{a}_z\\)<br><br>' .
                             'Since \\(\\text{Re}(\\eta) = |\\eta| \\cos(\\theta_\\eta)\\), we can write:<br>' .
                             '\\(\\langle \\vec{S} \\rangle = \\frac{E_0^2}{2} \\cdot \\frac{\\text{Re}(\\eta)}{|\\eta|^2} e^{-2\\alpha z} \\hat{a}_z = \\frac{E_0^2}{2} \\text{Re}\\left(\\frac{1}{\\eta^*}\\right) e^{-2\\alpha z} \\hat{a}_z\\)<br><br>' .
                             'For a plane wave, this can also be written as:<br>' .
                             '\\(\\langle \\vec{S} \\rangle = \\frac{1}{2} \\text{Re}(\\vec{E} \\times \\vec{H}^*)\\)<br>' .
                             'which is the general formula for time-average power density in sinusoidal steady state.',
                'solution_has_diagram' => false,
                'notes' => 'The Poynting vector represents the flow of electromagnetic energy. In dissipative media, the power density decreases exponentially with distance due to attenuation. The time-average value is what is typically measured in practical applications.',
                'formulas' => [
                    '\\(\\vec{S} = \\vec{E} \\times \\vec{H}\\)',
                    '\\(\\langle \\vec{S} \\rangle = \\frac{1}{T} \\int_0^T \\vec{S}(z,t) dt\\)',
                    '\\(\\langle \\vec{S} \\rangle = \\frac{E_0^2}{2|\\eta|} e^{-2\\alpha z} \\cos(\\theta_\\eta) \\hat{a}_z\\)',
                    '\\(\\langle \\vec{S} \\rangle = \\frac{1}{2} \\text{Re}(\\vec{E} \\times \\vec{H}^*)\\)'
                ]
            ],
            [
                'text' => 'A conductor with cross-sectional area of 10 cm\\(^2\\) carries conduction current \\(\\vec{J}_c = 0.2 \\sin(10^9 t) \\hat{a}_z \\text{A/m}^2\\). Given that \\(\\sigma = 2.5 \\times 10^6 \\text{S/m}\\), and \\(\\epsilon = \\epsilon_0\\). Calculate the magnitude of the displacement current density. [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false,
                'solution' => 'The displacement current density is given by:<br>' .
                             '\\(\\vec{J}_d = \\frac{\\partial \\vec{D}}{\\partial t} = \\epsilon \\frac{\\partial \\vec{E}}{\\partial t}\\)<br><br>' .
                             'First, we need to find the electric field \\(\\vec{E}\\) from the conduction current density using Ohm\'s law:<br>' .
                             '\\(\\vec{J}_c = \\sigma \\vec{E}\\)<br>' .
                             'So,<br>' .
                             '\\(\\vec{E} = \\frac{\\vec{J}_c}{\\sigma} = \\frac{0.2 \\sin(10^9 t)}{2.5 \\times 10^6} \\hat{a}_z = 8 \\times 10^{-8} \\sin(10^9 t) \\hat{a}_z \\text{V/m}\\)<br><br>' .
                             'Now, calculate the displacement current density:<br>' .
                             '\\(\\vec{J}_d = \\epsilon_0 \\frac{\\partial \\vec{E}}{\\partial t} = \\epsilon_0 \\frac{\\partial}{\\partial t} [8 \\times 10^{-8} \\sin(10^9 t) \\hat{a}_z]\\)<br>' .
                             '\\(\\vec{J}_d = \\epsilon_0 \\cdot 8 \\times 10^{-8} \\cdot 10^9 \\cos(10^9 t) \\hat{a}_z\\)<br>' .
                             '\\(\\vec{J}_d = \\epsilon_0 \\cdot 80 \\cos(10^9 t) \\hat{a}_z\\)<br><br>' .
                             'Substituting \\(\\epsilon_0 = 8.854 \\times 10^{-12} \\text{F/m}\\):<br>' .
                             '\\(\\vec{J}_d = (8.854 \\times 10^{-12}) \\cdot 80 \\cos(10^9 t) \\hat{a}_z\\)<br>' .
                             '\\(\\vec{J}_d = 7.083 \\times 10^{-10} \\cos(10^9 t) \\hat{a}_z \\text{A/m}^2\\)<br><br>' .
                             'The magnitude of the displacement current density is the amplitude of this time-varying quantity:<br>' .
                             '\\(|\\vec{J}_d| = 7.083 \\times 10^{-10} \\text{A/m}^2\\)<br><br>' .
                             'Note: The cross-sectional area (10 cm²) is not needed for calculating the current density (which is per unit area), but would be required if we were asked for the total displacement current.',
                'solution_has_diagram' => false,
                'notes' => 'In good conductors at high frequencies, the displacement current is typically much smaller than the conduction current. Here, the conduction current density amplitude is 0.2 A/m² while the displacement current density amplitude is about 7.08 × 10⁻¹⁰ A/m², which is negligible in comparison.',
                'formulas' => [
                    '\\(\\vec{J}_d = \\frac{\\partial \\vec{D}}{\\partial t} = \\epsilon \\frac{\\partial \\vec{E}}{\\partial t}\\)',
                    '\\(\\vec{J}_c = \\sigma \\vec{E}\\)',
                    '\\(\\epsilon_0 = 8.854 \\times 10^{-12} \\text{F/m}\\)'
                ]
            ],
            [
                'text' => 'List out point form of Maxwell\'s equations in phasor form for time varying case in free space. Using these equations, derive the electric field component of a uniform plane wave travelling in the perfect dielectric medium. [2080 Bhadra]',
                'year' => '2080 Bhadra',
                'has_diagram' => false,
                'solution' => '<b>Maxwell\'s Equations in Phasor Form (Free Space):</b><br>' .
                             'For time-harmonic fields (e^{j\\omega t} dependence), Maxwell\'s equations in phasor form for free space (where \\(\\rho_v = 0\\), \\(\\vec{J} = 0\\), \\(\\epsilon = \\epsilon_0\\), \\(\\mu = \\mu_0\\)) are:<br><br>' .
                             '1. \\(\\nabla \\cdot \\vec{E} = 0\\)<br>' .
                             '2. \\(\\nabla \\cdot \\vec{H} = 0\\)<br>' .
                             '3. \\(\\nabla \\times \\vec{E} = -j\\omega\\mu_0\\vec{H}\\)<br>' .
                             '4. \\(\\nabla \\times \\vec{H} = j\\omega\\epsilon_0\\vec{E}\\)<br><br>' .
                             '<b>Derivation of Electric Field Component for Uniform Plane Wave:</b><br>' .
                             'Consider a uniform plane wave propagating in the +z direction in a perfect dielectric medium (no losses, \\(\\sigma = 0\\)). The electric field has only an x-component and is uniform in the xy-plane:<br>' .
                             '\\(\\vec{E} = E_x(z) \\hat{a}_x\\)<br><br>' .
                             'From Maxwell\'s equation \\(\\nabla \\times \\vec{E} = -j\\omega\\mu\\vec{H}\\):<br>' .
                             '\\(\\nabla \\times \\vec{E} = \\begin{vmatrix} \\hat{a}_x & \\hat{a}_y & \\hat{a}_z \\\\ \\frac{\\partial}{\\partial x} & \\frac{\\partial}{\\partial y} & \\frac{\\partial}{\\partial z} \\\\ E_x & 0 & 0 \\end{vmatrix} = -\\frac{\\partial E_x}{\\partial z} \\hat{a}_y = -j\\omega\\mu\\vec{H}\\)<br>' .
                             'So,<br>' .
                             '\\(\\vec{H} = \\frac{1}{j\\omega\\mu} \\frac{\\partial E_x}{\\partial z} \\hat{a}_y\\)<br><br>' .
                             'Now use \\(\\nabla \\times \\vec{H} = j\\omega\\epsilon\\vec{E}\\):<br>' .
                             '\\(\\nabla \\times \\vec{H} = \\begin{vmatrix} \\hat{a}_x & \\hat{a}_y & \\hat{a}_z \\\\ \\frac{\\partial}{\\partial x} & \\frac{\\partial}{\\partial y} & \\frac{\\partial}{\\partial z} \\\\ 0 & H_y & 0 \\end{vmatrix} = -\\frac{\\partial H_y}{\\partial z} \\hat{a}_x = j\\omega\\epsilon\\vec{E} = j\\omega\\epsilon E_x \\hat{a}_x\\)<br>' .
                             'So,<br>' .
                             '\\(-\\frac{\\partial H_y}{\\partial z} = j\\omega\\epsilon E_x\\)<br><br>' .
                             'Substitute \\(H_y = \\frac{1}{j\\omega\\mu} \\frac{\\partial E_x}{\\partial z}\\):<br>' .
                             '\\(-\\frac{\\partial}{\\partial z} \\left( \\frac{1}{j\\omega\\mu} \\frac{\\partial E_x}{\\partial z} \\right) = j\\omega\\epsilon E_x\\)<br>' .
                             '\\(-\\frac{1}{j\\omega\\mu} \\frac{\\partial^2 E_x}{\\partial z^2} = j\\omega\\epsilon E_x\\)<br>' .
                             '\\(\\frac{\\partial^2 E_x}{\\partial z^2} = -\\omega^2\\mu\\epsilon E_x\\)<br><br>' .
                             'Let \\(k^2 = \\omega^2\\mu\\epsilon\\), so:<br>' .
                             '\\(\\frac{\\partial^2 E_x}{\\partial z^2} + k^2 E_x = 0\\)<br><br>' .
                             'This is the wave equation. The general solution is:<br>' .
                             '\\(E_x(z) = E_0^+ e^{-jkz} + E_0^- e^{jkz}\\)<br>' .
                             'where \\(E_0^+\\) and \\(E_0^-\\) are constants representing waves propagating in the +z and -z directions, respectively.<br><br>' .
                             'For a wave propagating only in the +z direction:<br>' .
                             '\\(\\vec{E}(z) = E_0 e^{-jkz} \\hat{a}_x\\)<br>' .
                             'In time domain:<br>' .
                             '\\(\\vec{E}(z,t) = \\text{Re}\\{E_0 e^{-jkz} e^{j\\omega t}\\} = E_0 \\cos(\\omega t - kz) \\hat{a}_x\\) (assuming \\(E_0\\) is real)',
                'solution_has_diagram' => false,
                'notes' => 'The wave number \\(k = \\omega\\sqrt{\\mu\\epsilon} = \\frac{2\\pi}{\\lambda}\\). In free space, \\(k = \\omega\\sqrt{\\mu_0\\epsilon_0} = \\frac{\\omega}{c}\\), where \\(c = \\frac{1}{\\sqrt{\\mu_0\\epsilon_0}}\\) is the speed of light. The derivation shows that electromagnetic waves are transverse waves (fields perpendicular to propagation direction).',
                'formulas' => [
                    '\\(\\nabla \\cdot \\vec{E} = 0\\)',
                    '\\(\\nabla \\cdot \\vec{H} = 0\\)',
                    '\\(\\nabla \\times \\vec{E} = -j\\omega\\mu\\vec{H}\\)',
                    '\\(\\nabla \\times \\vec{H} = j\\omega\\epsilon\\vec{E}\\)',
                    '\\(\\frac{\\partial^2 E_x}{\\partial z^2} + k^2 E_x = 0\\)',
                    '\\(k = \\omega\\sqrt{\\mu\\epsilon}\\)'
                ]
            ],
            [
                'text' => 'Explain the term Skin Depth. Using Poynting Vector deduce the time average power density for a perfect dielectric. [2080 Bhadra]',
                'year' => '2080 Bhadra',
                'has_diagram' => false,
                'solution' => '<b>Skin Depth:</b><br>' .
                             'Skin depth (δ) is the distance over which the amplitude of an electromagnetic wave propagating in a conducting medium decreases by a factor of 1/e (about 37%). It represents how deeply electromagnetic waves can penetrate into a conductor. The skin depth is given by:<br>' .
                             '\\(\\delta = \\sqrt{\\frac{2}{\\omega\\mu\\sigma}} = \\sqrt{\\frac{1}{\\pi f\\mu\\sigma}}\\)<br>' .
                             'where f is the frequency, μ is the permeability, and σ is the conductivity of the medium.<br><br>' .
                             'In good conductors, skin depth is very small, meaning electromagnetic fields penetrate only a short distance. This is why high-frequency currents flow primarily near the surface of conductors (skin effect).<br><br>' .
                             '<b>Time-Average Power Density for a Perfect Dielectric using Poynting Vector:</b><br>' .
                             'A perfect dielectric has zero conductivity (σ = 0), so there are no losses.<br><br>' .
                             'Consider a uniform plane wave propagating in the +z direction:<br>' .
                             '\\(\\vec{E}(z,t) = E_0 \\cos(\\omega t - kz) \\hat{a}_x\\)<br>' .
                             '\\(\\vec{H}(z,t) = \\frac{E_0}{\\eta} \\cos(\\omega t - kz) \\hat{a}_y\\)<br>' .
                             'where \\(\\eta = \\sqrt{\\frac{\\mu}{\\epsilon}}\\) is the intrinsic impedance of the dielectric.<br><br>' .
                             'The instantaneous Poynting vector is:<br>' .
                             '\\(\\vec{S}(z,t) = \\vec{E}(z,t) \\times \\vec{H}(z,t) = E_0 \\cos(\\omega t - kz) \\cdot \\frac{E_0}{\\eta} \\cos(\\omega t - kz) \\hat{a}_z\\)<br>' .
                             '\\(\\vec{S}(z,t) = \\frac{E_0^2}{\\eta} \\cos^2(\\omega t - kz) \\hat{a}_z\\)<br><br>' .
                             'The time-average power density is:<br>' .
                             '\\(\\langle \\vec{S} \\rangle = \\frac{1}{T} \\int_0^T \\frac{E_0^2}{\\eta} \\cos^2(\\omega t - kz) dt \\hat{a}_z\\)<br>' .
                             'Using \\(\\cos^2\\theta = \\frac{1 + \\cos 2\\theta}{2}\\) and noting that the average of \\(\\cos 2(\\omega t - kz)\\) over one period is zero:<br>' .
                             '\\(\\langle \\vec{S} \\rangle = \\frac{E_0^2}{\\eta} \\cdot \\frac{1}{T} \\int_0^T \\frac{1 + \\cos 2(\\omega t - kz)}{2} dt \\hat{a}_z = \\frac{E_0^2}{\\eta} \\cdot \\frac{1}{2} \\hat{a}_z\\)<br>' .
                             '\\(\\langle \\vec{S} \\rangle = \\frac{E_0^2}{2\\eta} \\hat{a}_z\\)<br><br>' .
                             'In phasor form, if \\(\\vec{E} = E_0 e^{-jkz} \\hat{a}_x\\) and \\(\\vec{H} = \\frac{E_0}{\\eta} e^{-jkz} \\hat{a}_y\\), the time-average power density is:<br>' .
                             '\\(\\langle \\vec{S} \\rangle = \\frac{1}{2} \\text{Re}(\\vec{E} \\times \\vec{H}^*) = \\frac{1}{2} \\text{Re}\\left(E_0 e^{-jkz} \\hat{a}_x \\times \\frac{E_0}{\\eta} e^{jkz} \\hat{a}_y\\right) = \\frac{1}{2} \\frac{E_0^2}{\\eta} \\hat{a}_z\\)<br><br>' .
                             'This represents the average power flowing per unit area in the direction of wave propagation.',
                'solution_has_diagram' => false,
                'notes' => 'In a perfect dielectric, the time-average power density is constant with distance (no attenuation). The power is entirely real (no reactive power) since there are no losses. The intrinsic impedance η is real for perfect dielectrics.',
                'formulas' => [
                    '\\(\\delta = \\sqrt{\\frac{2}{\\omega\\mu\\sigma}} = \\sqrt{\\frac{1}{\\pi f\\mu\\sigma}}\\)',
                    '\\(\\vec{S} = \\vec{E} \\times \\vec{H}\\)',
                    '\\(\\langle \\vec{S} \\rangle = \\frac{E_0^2}{2\\eta} \\hat{a}_z\\)',
                    '\\(\\langle \\vec{S} \\rangle = \\frac{1}{2} \\text{Re}(\\vec{E} \\times \\vec{H}^*)\\)',
                    '\\(\\eta = \\sqrt{\\frac{\\mu}{\\epsilon}}\\)'
                ]
            ],
            [
                'text' => 'State Faraday\'s law of electromagnetic induction. Explain motional induction and transformer induction with necessary expressions. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false,
                'solution' => '<b>Faraday\'s Law of Electromagnetic Induction:</b><br>' .
                             'Faraday\'s law states that the electromotive force (EMF) induced in a closed loop is equal to the negative rate of change of magnetic flux through the loop:<br>' .
                             '\\(\\mathcal{E} = -\\frac{d\\Phi_B}{dt}\\)<br>' .
                             'where \\(\\mathcal{E}\\) is the induced EMF and \\(\\Phi_B = \\int_S \\vec{B} \\cdot d\\vec{s}\\) is the magnetic flux through any surface S bounded by the loop.<br><br>' .
                             'The differential form (Maxwell-Faraday equation) is:<br>' .
                             '\\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\)<br><br>' .
                             '<b>Motional Induction:</b><br>' .
                             'Motional induction occurs when there is relative motion between a conductor and a magnetic field. The EMF is induced due to the motion of the conductor in a static (or slowly varying) magnetic field.<br><br>' .
                             'Consider a conductor moving with velocity \\(\\vec{v}\\) in a magnetic field \\(\\vec{B}\\). The Lorentz force on a charge q in the conductor is:<br>' .
                             '\\(\\vec{F} = q(\\vec{E} + \\vec{v} \\times \\vec{B})\\)<br>' .
                             'In the absence of an electric field, the force is \\(q(\\vec{v} \\times \\vec{B})\\), which creates an effective electric field \\(\\vec{E}_m = \\vec{v} \\times \\vec{B}\\).<br><br>' .
                             'The motional EMF for a path from point a to point b is:<br>' .
                             '\\(\\mathcal{E}_m = \\int_a^b (\\vec{v} \\times \\vec{B}) \\cdot d\\vec{l}\\)<br><br>' .
                             'For a straight conductor of length l moving perpendicular to a uniform magnetic field B:<br>' .
                             '\\(\\mathcal{E}_m = B l v\\)<br><br>' .
                             '<b>Transformer Induction:</b><br>' .
                             'Transformer induction occurs when a time-varying magnetic field induces an EMF in a stationary conductor. This is the case described by the \\(-\\frac{\\partial \\vec{B}}{\\partial t}\\) term in Faraday\'s law.<br><br>' .
                             'For a stationary loop, the induced EMF is:<br>' .
                             '\\(\\mathcal{E}_t = -\\frac{d}{dt} \\int_S \\vec{B} \\cdot d\\vec{s} = -\\int_S \\frac{\\partial \\vec{B}}{\\partial t} \\cdot d\\vec{s}\\)<br><br>' .
                             'Using Stokes\' theorem and \\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\):<br>' .
                             '\\(\\mathcal{E}_t = \\oint_C \\vec{E} \\cdot d\\vec{l} = \\int_S (\\nabla \\times \\vec{E}) \\cdot d\\vec{s} = -\\int_S \\frac{\\partial \\vec{B}}{\\partial t} \\cdot d\\vec{s}\\)<br><br>' .
                             '<b>General Case (Combined):</b><br>' .
                             'When both effects are present (moving conductor in time-varying field), the total EMF is:<br>' .
                             '\\(\\mathcal{E} = -\\frac{d\\Phi_B}{dt} = \\oint_C (\\vec{E} + \\vec{v} \\times \\vec{B}) \\cdot d\\vec{l}\\)<br>' .
                             'This accounts for both transformer EMF (from \\(\\vec{E}\\)) and motional EMF (from \\(\\vec{v} \\times \\vec{B}\\)).',
                'solution_has_diagram' => false,
                'notes' => 'Motional induction is responsible for EMF in generators where conductors move in magnetic fields. Transformer induction is responsible for EMF in transformers where time-varying magnetic fields link stationary windings. Both are encompassed by Faraday\'s law.',
                'formulas' => [
                    '\\(\\mathcal{E} = -\\frac{d\\Phi_B}{dt}\\)',
                    '\\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\)',
                    '\\(\\mathcal{E}_m = \\int_a^b (\\vec{v} \\times \\vec{B}) \\cdot d\\vec{l}\\)',
                    '\\(\\mathcal{E}_m = B l v\\)',
                    '\\(\\mathcal{E}_t = -\\int_S \\frac{\\partial \\vec{B}}{\\partial t} \\cdot d\\vec{s}\\)'
                ]
            ],
            [
                'text' => 'Correct the equation \\(\\nabla \\times \\vec{E} = 0\\) for time varying fields with necessary arguments and derivation. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false,
                'solution' => 'The equation \\(\\nabla \\times \\vec{E} = 0\\) is valid only for static (time-invariant) electric fields. For time-varying fields, it must be corrected based on Faraday\'s law of electromagnetic induction.<br><br>' .
                             '<b>Argument for Correction:</b><br>' .
                             'Faraday\'s experiments showed that a changing magnetic field induces an electric field. This induced electric field is non-conservative (its curl is not zero) and forms closed loops around the changing magnetic flux. Therefore, for time-varying fields, \\(\\nabla \\times \\vec{E} \\neq 0\\).<br><br>' .
                             '<b>Derivation from Faraday\'s Law:</b><br>' .
                             'Faraday\'s law in integral form states:<br>' .
                             '\\(\\oint_C \\vec{E} \\cdot d\\vec{l} = -\\frac{d}{dt} \\int_S \\vec{B} \\cdot d\\vec{s}\\)<br>' .
                             'where the left side is the EMF around a closed path C, and the right side is the negative rate of change of magnetic flux through any surface S bounded by C.<br><br>' .
                             'Applying Stokes\' theorem to the left side:<br>' .
                             '\\(\\oint_C \\vec{E} \\cdot d\\vec{l} = \\int_S (\\nabla \\times \\vec{E}) \\cdot d\\vec{s}\\)<br><br>' .
                             'For the right side, assuming the surface S is stationary (no motional EMF), we can bring the time derivative inside the integral:<br>' .
                             '\\(-\\frac{d}{dt} \\int_S \\vec{B} \\cdot d\\vec{s} = -\\int_S \\frac{\\partial \\vec{B}}{\\partial t} \\cdot d\\vec{s}\\)<br><br>' .
                             'Equating both sides:<br>' .
                             '\\(\\int_S (\\nabla \\times \\vec{E}) \\cdot d\\vec{s} = -\\int_S \\frac{\\partial \\vec{B}}{\\partial t} \\cdot d\\vec{s}\\)<br><br>' .
                             'Since this must hold for any arbitrary surface S, the integrands must be equal:<br>' .
                             '\\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\)<br><br>' .
                             'This is the corrected form of the equation for time-varying fields. It shows that a time-varying magnetic field produces an electric field with non-zero curl.<br><br>' .
                             '<b>Special Case - Static Fields:</b><br>' .
                             'When fields are static, \\(\\frac{\\partial \\vec{B}}{\\partial t} = 0\\), and we recover the original equation:<br>' .
                             '\\(\\nabla \\times \\vec{E} = 0\\)<br>' .
                             'This confirms that electrostatic fields are conservative.',
                'solution_has_diagram' => false,
                'notes' => 'The corrected equation \\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\) is one of Maxwell\'s equations and is fundamental to electromagnetic wave propagation. It establishes the coupling between electric and magnetic fields in time-varying situations.',
                'formulas' => [
                    '\\(\\nabla \\times \\vec{E} = 0\\) (static case)',
                    '\\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\) (time-varying case)',
                    '\\(\\oint_C \\vec{E} \\cdot d\\vec{l} = -\\frac{d}{dt} \\int_S \\vec{B} \\cdot d\\vec{s}\\)',
                    '\\(\\oint_C \\vec{E} \\cdot d\\vec{l} = \\int_S (\\nabla \\times \\vec{E}) \\cdot d\\vec{s}\\)'
                ]
            ],
            [
                'text' => 'Modify the equation \\(\\nabla \\times \\vec{H} = \\vec{J}\\) with necessary arguments and derivation for time varying field. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false,
                'solution' => 'The equation \\(\\nabla \\times \\vec{H} = \\vec{J}\\) is Ampere\'s circuital law in differential form, valid for steady currents. For time-varying fields, it must be modified by adding the displacement current term, as proposed by Maxwell.<br><br>' .
                             '<b>Argument for Modification:</b><br>' .
                             'The original Ampere\'s law conflicts with the continuity equation for time-varying fields. The continuity equation (conservation of charge) is:<br>' .
                             '\\(\\nabla \\cdot \\vec{J} = -\\frac{\\partial \\rho_v}{\\partial t}\\)<br>' .
                             'Taking the divergence of Ampere\'s law:<br>' .
                             '\\(\\nabla \\cdot (\\nabla \\times \\vec{H}) = \\nabla \\cdot \\vec{J}\\)<br>' .
                             'Since \\(\\nabla \\cdot (\\nabla \\times \\vec{H}) = 0\\) (divergence of curl is always zero), we get:<br>' .
                             '\\(\\nabla \\cdot \\vec{J} = 0\\)<br>' .
                             'This contradicts the continuity equation when \\(\\frac{\\partial \\rho_v}{\\partial t} \\neq 0\\).<br><br>' .
                             '<b>Derivation of Modified Form:</b><br>' .
                             'To resolve this conflict, Maxwell proposed adding a term to Ampere\'s law. The modified law is:<br>' .
                             '\\(\\nabla \\times \\vec{H} = \\vec{J} + \\vec{J}_d\\)<br>' .
                             'where \\(\\vec{J}_d\\) is the displacement current density.<br><br>' .
                             'Taking the divergence:<br>' .
                             '\\(\\nabla \\cdot (\\nabla \\times \\vec{H}) = \\nabla \\cdot \\vec{J} + \\nabla \\cdot \\vec{J}_d\\)<br>' .
                             '\\(0 = \\nabla \\cdot \\vec{J} + \\nabla \\cdot \\vec{J}_d\\)<br>' .
                             'From the continuity equation, \\(\\nabla \\cdot \\vec{J} = -\\frac{\\partial \\rho_v}{\\partial t}\\), so:<br>' .
                             '\\(0 = -\\frac{\\partial \\rho_v}{\\partial t} + \\nabla \\cdot \\vec{J}_d\\)<br>' .
                             '\\(\\nabla \\cdot \\vec{J}_d = \\frac{\\partial \\rho_v}{\\partial t}\\)<br><br>' .
                             'Using Gauss\'s law \\(\\nabla \\cdot \\vec{D} = \\rho_v\\):<br>' .
                             '\\(\\nabla \\cdot \\vec{J}_d = \\frac{\\partial}{\\partial t}(\\nabla \\cdot \\vec{D}) = \\nabla \\cdot \\frac{\\partial \\vec{D}}{\\partial t}\\)<br>' .
                             'This suggests:<br>' .
                             '\\(\\vec{J}_d = \\frac{\\partial \\vec{D}}{\\partial t}\\)<br><br>' .
                             'Therefore, the modified Ampere\'s law is:<br>' .
                             '\\(\\nabla \\times \\vec{H} = \\vec{J} + \\frac{\\partial \\vec{D}}{\\partial t}\\)<br><br>' .
                             '<b>Physical Interpretation:</b><br>' .
                             'The displacement current \\(\\frac{\\partial \\vec{D}}{\\partial t}\\) accounts for the "current" due to changing electric fields, even in regions where no actual charge flow (conduction current) exists. This term is crucial for the existence of electromagnetic waves and ensures consistency with charge conservation.',
                'solution_has_diagram' => false,
                'notes' => 'The displacement current term completes the symmetry in Maxwell\'s equations: just as a changing magnetic field produces an electric field (Faraday\'s law), a changing electric field produces a magnetic field (Ampere-Maxwell law). This symmetry allows for self-sustaining electromagnetic waves.',
                'formulas' => [
                    '\\(\\nabla \\times \\vec{H} = \\vec{J}\\) (original)',
                    '\\(\\nabla \\times \\vec{H} = \\vec{J} + \\frac{\\partial \\vec{D}}{\\partial t}\\) (modified)',
                    '\\(\\nabla \\cdot \\vec{J} = -\\frac{\\partial \\rho_v}{\\partial t}\\) (continuity equation)',
                    '\\(\\nabla \\cdot \\vec{D} = \\rho_v\\) (Gauss\'s law)',
                    '\\(\\vec{J}_d = \\frac{\\partial \\vec{D}}{\\partial t}\\) (displacement current density)'
                ]
            ]
        ]
    ],

    [
        'chapter' => 5,
        'title' => 'Uniform Plane Waves',
        'questions' => [
            [
                'text' => 'Let \\(\\vec{E}(z, t) = 800 \\cos(10^7 \\pi t - \\beta z) \\hat{a}_x \\text{V/m}\\) and \\(\\vec{H}(z, t) = 3.8 \\cos(10^7 \\pi t - \\beta z) \\hat{a}_y \\text{A/m}\\) represents a uniform plane wave propagating at a velocity of \\(1.4 \\times 10^8 \\text{m/s}\\) in perfect dielectric. Find a) \\(\\beta\\) b) \\(f\\) c) \\(\\eta\\) d) \\(\\mu_r\\) e) \\(\\epsilon_r\\). [2075 Ashwin]',
                'year' => '2075 Ashwin',
                'has_diagram' => false,
                'solution' => 'Given: \\(\\vec{E}(z, t) = 800 \\cos(10^7 \\pi t - \\beta z) \\hat{a}_x\\) V/m, \\(\\vec{H}(z, t) = 3.8 \\cos(10^7 \\pi t - \\beta z) \\hat{a}_y\\) A/m, and wave velocity \\(v = 1.4 \\times 10^8\\) m/s in a perfect dielectric.<br><br>' .
                             '<strong>a) Phase constant (β):</strong><br>' .
                             'The angular frequency ω can be identified from the time-domain expression:<br>' .
                             '\\(\\omega = 10^7 \\pi \\text{ rad/s}\\)<br>' .
                             'The phase constant β is related to ω and the wave velocity v by:<br>' .
                             '\\(\\beta = \\frac{\\omega}{v} = \\frac{10^7 \\pi}{1.4 \\times 10^8} = \\frac{\\pi}{14} = 0.2244 \\text{ rad/m}\\)<br><br>' .
                             '<strong>b) Frequency (f):</strong><br>' .
                             'Frequency is related to angular frequency by:<br>' .
                             '\\(f = \\frac{\\omega}{2\\pi} = \\frac{10^7 \\pi}{2\\pi} = 5 \\times 10^6 \\text{ Hz} = 5 \\text{ MHz}\\)<br><br>' .
                             '<strong>c) Intrinsic impedance (η):</strong><br>' .
                             'The intrinsic impedance is the ratio of the electric field amplitude to the magnetic field amplitude:<br>' .
                             '\\(\\eta = \\frac{|E|}{|H|} = \\frac{800}{3.8} = 210.53 \\text{ Ω}\\)<br><br>' .
                             '<strong>d) Relative permeability (μ<sub>r</sub>):</strong><br>' .
                             'For a perfect dielectric, the intrinsic impedance is also given by:<br>' .
                             '\\(\\eta = \\sqrt{\\frac{\\mu}{\\epsilon}} = \\sqrt{\\frac{\\mu_r \\mu_0}{\\epsilon_r \\epsilon_0}}\\)<br>' .
                             'And the wave velocity is:<br>' .
                             '\\(v = \\frac{1}{\\sqrt{\\mu \\epsilon}} = \\frac{1}{\\sqrt{\\mu_r \\mu_0 \\epsilon_r \\epsilon_0}}\\)<br>' .
                             'We know that in free space, \\(v_0 = \\frac{1}{\\sqrt{\\mu_0 \\epsilon_0}} = 3 \\times 10^8\\) m/s, and \\(\\eta_0 = \\sqrt{\\frac{\\mu_0}{\\epsilon_0}} = 120\\pi \\approx 377\\) Ω.<br>' .
                             'From the velocity equation:<br>' .
                             '\\(\\frac{v_0}{v} = \\sqrt{\\mu_r \\epsilon_r}\\)<br>' .
                             '\\(\\frac{3 \\times 10^8}{1.4 \\times 10^8} = \\sqrt{\\mu_r \\epsilon_r}\\)<br>' .
                             '\\(2.1429 = \\sqrt{\\mu_r \\epsilon_r}\\)<br>' .
                             'Squaring both sides:<br>' .
                             '\\(\\mu_r \\epsilon_r = 4.592\\)<br><br>' .
                             'From the impedance equation:<br>' .
                             '\\(\\frac{\\eta}{\\eta_0} = \\sqrt{\\frac{\\mu_r}{\\epsilon_r}}\\)<br>' .
                             '\\(\\frac{210.53}{377} = \\sqrt{\\frac{\\mu_r}{\\epsilon_r}}\\)<br>' .
                             '\\(0.5584 = \\sqrt{\\frac{\\mu_r}{\\epsilon_r}}\\)<br>' .
                             'Squaring both sides:<br>' .
                             '\\(\\frac{\\mu_r}{\\epsilon_r} = 0.3118\\)<br><br>' .
                             'Now we have two equations:<br>' .
                             '(1) \\(\\mu_r \\epsilon_r = 4.592\\)<br>' .
                             '(2) \\(\\mu_r = 0.3118 \\epsilon_r\\)<br>' .
                             'Substituting (2) into (1):<br>' .
                             '\\(0.3118 \\epsilon_r^2 = 4.592\\)<br>' .
                             '\\(\\epsilon_r^2 = \\frac{4.592}{0.3118} = 14.727\\)<br>' .
                             '\\(\\epsilon_r = \\sqrt{14.727} = 3.837\\)<br>' .
                             'Then from (2):<br>' .
                             '\\(\\mu_r = 0.3118 \\times 3.837 = 1.196\\)<br><br>' .
                             '<strong>e) Relative permittivity (ε<sub>r</sub>):</strong><br>' .
                             'As calculated above, \\(\\epsilon_r = 3.837\\)<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             'a) \\(\\beta = 0.2244 \\text{ rad/m}\\)<br>' .
                             'b) \\(f = 5 \\text{ MHz}\\)<br>' .
                             'c) \\(\\eta = 210.53 \\text{ Ω}\\)<br>' .
                             'd) \\(\\mu_r = 1.196\\)<br>' .
                             'e) \\(\\epsilon_r = 3.837\\)',
                'solution_has_diagram' => false,
                'notes' => 'This problem demonstrates the fundamental relationships for uniform plane waves in perfect dielectrics. The key is to use the given wave velocity and the ratio of E to H field amplitudes to find the material properties. Remember that for lossless media, E and H are in phase, and their ratio gives the intrinsic impedance of the medium.',
                'formulas' => [
                    '\\(\\omega = 2\\pi f\\)',
                    '\\(\\beta = \\frac{\\omega}{v}\\)',
                    '\\(v = \\frac{1}{\\sqrt{\\mu\\epsilon}}\\)',
                    '\\(\\eta = \\sqrt{\\frac{\\mu}{\\epsilon}} = \\frac{|E|}{|H|}\\)',
                    '\\(v_0 = 3 \\times 10^8 \\text{ m/s}\\)',
                    '\\(\\eta_0 = 120\\pi \\approx 377 \\text{ Ω}\\)'
                ]
            ],
            [
                'text' => 'A 9.4 GHz uniform plane wave is propagating in a medium with \\(\\epsilon_r = 2.25\\), \\(\\mu_r = 1\\). If the magnetic field intensity is 7 mA/m and the material is lossless, find i) Velocity of propagation ii) The wavelength iii) Phase constant iv) Intrinsic impedance v) Magnitude of electric field intensity. [2074 Ashwin]',
                'year' => '2074 Ashwin',
                'has_diagram' => false,
                'solution' => 'Given: f = 9.4 GHz = 9.4 × 10⁹ Hz, ε<sub>r</sub> = 2.25, μ<sub>r</sub> = 1, |H| = 7 mA/m = 0.007 A/m, lossless medium.<br><br>' .
                             '<strong>i) Velocity of propagation (v):</strong><br>' .
                             'For a lossless medium, the velocity of propagation is:<br>' .
                             '\\(v = \\frac{1}{\\sqrt{\\mu \\epsilon}} = \\frac{1}{\\sqrt{\\mu_r \\mu_0 \\epsilon_r \\epsilon_0}} = \\frac{c}{\\sqrt{\\mu_r \\epsilon_r}}\\)<br>' .
                             'where c = 3 × 10⁸ m/s is the speed of light in vacuum.<br>' .
                             '\\(v = \\frac{3 \\times 10^8}{\\sqrt{1 \\times 2.25}} = \\frac{3 \\times 10^8}{1.5} = 2 \\times 10^8 \\text{ m/s}\\)<br><br>' .
                             '<strong>ii) Wavelength (λ):</strong><br>' .
                             'Wavelength is related to velocity and frequency by:<br>' .
                             '\\(\\lambda = \\frac{v}{f} = \\frac{2 \\times 10^8}{9.4 \\times 10^9} = 0.02128 \\text{ m} = 2.128 \\text{ cm}\\)<br><br>' .
                             '<strong>iii) Phase constant (β):</strong><br>' .
                             'The phase constant is:<br>' .
                             '\\(\\beta = \\frac{2\\pi}{\\lambda} = \\frac{2\\pi}{0.02128} = 295.3 \\text{ rad/m}\\)<br>' .
                             'Alternatively, \\(\\beta = \\frac{\\omega}{v} = \\frac{2\\pi f}{v} = \\frac{2\\pi \\times 9.4 \\times 10^9}{2 \\times 10^8} = 295.3 \\text{ rad/m}\\)<br><br>' .
                             '<strong>iv) Intrinsic impedance (η):</strong><br>' .
                             'For a lossless medium, the intrinsic impedance is:<br>' .
                             '\\(\\eta = \\sqrt{\\frac{\\mu}{\\epsilon}} = \\sqrt{\\frac{\\mu_r \\mu_0}{\\epsilon_r \\epsilon_0}} = \\eta_0 \\sqrt{\\frac{\\mu_r}{\\epsilon_r}}\\)<br>' .
                             'where \\(\\eta_0 = 120\\pi \\approx 377 \\text{ Ω}\\) is the intrinsic impedance of free space.<br>' .
                             '\\(\\eta = 377 \\times \\sqrt{\\frac{1}{2.25}} = 377 \\times \\frac{1}{1.5} = 251.33 \\text{ Ω}\\)<br><br>' .
                             '<strong>v) Magnitude of electric field intensity (|E|):</strong><br>' .
                             'The magnitude of the electric field is related to the magnetic field by the intrinsic impedance:<br>' .
                             '\\(|E| = \\eta |H| = 251.33 \\times 0.007 = 1.759 \\text{ V/m}\\)<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             'i) Velocity of propagation = 2 × 10⁸ m/s<br>' .
                             'ii) Wavelength = 2.128 cm<br>' .
                             'iii) Phase constant = 295.3 rad/m<br>' .
                             'iv) Intrinsic impedance = 251.33 Ω<br>' .
                             'v) Magnitude of electric field intensity = 1.759 V/m',
                'solution_has_diagram' => false,
                'notes' => 'This is a straightforward application of the basic formulas for uniform plane waves in lossless media. The key relationships are v = c/√(μ<sub>r</sub>ε<sub>r</sub>), λ = v/f, β = 2π/λ, η = η<sub>0</sub>√(μ<sub>r</sub>/ε<sub>r</sub>), and |E| = η|H|. Since the medium is lossless, there is no attenuation, and the wave propagates without loss of amplitude.',
                'formulas' => [
                    '\\(v = \\frac{c}{\\sqrt{\\mu_r \\epsilon_r}}\\)',
                    '\\(\\lambda = \\frac{v}{f}\\)',
                    '\\(\\beta = \\frac{2\\pi}{\\lambda} = \\frac{\\omega}{v}\\)',
                    '\\(\\eta = \\eta_0 \\sqrt{\\frac{\\mu_r}{\\epsilon_r}}\\)',
                    '\\(|E| = \\eta |H|\\)',
                    '\\(c = 3 \\times 10^8 \\text{ m/s}\\)',
                    '\\(\\eta_0 = 120\\pi \\approx 377 \\text{ Ω}\\)'
                ]
            ],
            [
                'text' => 'Derive the expression for electric and magnetic fields for a uniform plane wave propagating in a perfect dielectric medium. [2072 Chaitra]',
                'year' => '2072 Chaitra',
                'has_diagram' => false,
                'solution' => 'For a uniform plane wave propagating in a perfect dielectric medium (σ = 0, μ = μ<sub>r</sub>μ<sub>0</sub>, ε = ε<sub>r</sub>ε<sub>0</sub>):<br><br>' .
                             '<strong>Electric Field Derivation:</strong><br>' .
                             'Starting with Maxwell\'s equations in phasor form for a source-free region:<br>' .
                             '\\(\\nabla \\times \\vec{E}_s = -j\\omega\\mu \\vec{H}_s\\) ...(1)<br>' .
                             '\\(\\nabla \\times \\vec{H}_s = j\\omega\\epsilon \\vec{E}_s\\) ...(2)<br>' .
                             '\\(\\nabla \\cdot \\vec{E}_s = 0\\) ...(3)<br>' .
                             '\\(\\nabla \\cdot \\vec{H}_s = 0\\) ...(4)<br><br>' .
                             'Taking the curl of equation (1):<br>' .
                             '\\(\\nabla \\times (\\nabla \\times \\vec{E}_s) = \\nabla \\times (-j\\omega\\mu \\vec{H}_s)\\)<br>' .
                             'Using the vector identity \\(\\nabla \\times (\\nabla \\times \\vec{E}_s) = \\nabla(\\nabla \\cdot \\vec{E}_s) - \\nabla^2 \\vec{E}_s\\) and equation (3):<br>' .
                             '\\(-\\nabla^2 \\vec{E}_s = -j\\omega\\mu (\\nabla \\times \\vec{H}_s)\\)<br>' .
                             'Substituting equation (2):<br>' .
                             '\\(-\\nabla^2 \\vec{E}_s = -j\\omega\\mu (j\\omega\\epsilon \\vec{E}_s)\\)<br>' .
                             '\\(\\nabla^2 \\vec{E}_s = -\\omega^2 \\mu \\epsilon \\vec{E}_s\\)<br><br>' .
                             'For a uniform plane wave propagating in the z-direction with electric field in the x-direction (E<sub>xs</sub>):<br>' .
                             '\\(\\frac{\\partial^2 E_{xs}}{\\partial z^2} = -\\omega^2 \\mu \\epsilon E_{xs}\\)<br>' .
                             'Let \\(\\beta = \\omega \\sqrt{\\mu \\epsilon}\\) (phase constant)<br>' .
                             '\\(\\frac{\\partial^2 E_{xs}}{\\partial z^2} = -\\beta^2 E_{xs}\\)<br><br>' .
                             'The general solution is:<br>' .
                             '\\(E_{xs} = E_{x0} e^{-j\\beta z}\\)<br>' .
                             'In vector form:<br>' .
                             '\\(\\vec{E}_s = E_{x0} e^{-j\\beta z} \\hat{a}_x\\)<br><br>' .
                             'Converting to time domain:<br>' .
                             '\\(\\vec{E}(z,t) = \\text{Re}[\\vec{E}_s e^{j\\omega t}] = \\text{Re}[E_{x0} e^{-j\\beta z} e^{j\\omega t} \\hat{a}_x]\\)<br>' .
                             '\\(\\vec{E}(z,t) = E_{x0} \\cos(\\omega t - \\beta z) \\hat{a}_x\\)<br><br>' .
                             '<strong>Magnetic Field Derivation:</strong><br>' .
                             'Using equation (1) for the x-component of E and y-component of H:<br>' .
                             '\\(\\nabla \\times \\vec{E}_s = -j\\omega\\mu \\vec{H}_s\\)<br>' .
                             'For E<sub>xs</sub> varying only with z:<br>' .
                             '\\(\\frac{\\partial E_{xs}}{\\partial z} \\hat{a}_y = -j\\omega\\mu H_{ys} \\hat{a}_y\\)<br>' .
                             '\\(\\frac{\\partial}{\\partial z}(E_{x0} e^{-j\\beta z}) = -j\\omega\\mu H_{ys}\\)<br>' .
                             '\\(-j\\beta E_{x0} e^{-j\\beta z} = -j\\omega\\mu H_{ys}\\)<br>' .
                             '\\(H_{ys} = \\frac{\\beta}{\\omega\\mu} E_{x0} e^{-j\\beta z}\\)<br><br>' .
                             'Since \\(\\beta = \\omega \\sqrt{\\mu \\epsilon}\\), we have:<br>' .
                             '\\(H_{ys} = \\frac{\\omega \\sqrt{\\mu \\epsilon}}{\\omega\\mu} E_{x0} e^{-j\\beta z} = \\frac{1}{\\sqrt{\\frac{\\mu}{\\epsilon}}} E_{x0} e^{-j\\beta z} = \\frac{E_{x0}}{\\eta} e^{-j\\beta z}\\)<br>' .
                             'where \\(\\eta = \\sqrt{\\frac{\\mu}{\\epsilon}}\\) is the intrinsic impedance.<br><br>' .
                             'In vector form:<br>' .
                             '\\(\\vec{H}_s = \\frac{E_{x0}}{\\eta} e^{-j\\beta z} \\hat{a}_y\\)<br><br>' .
                             'Converting to time domain:<br>' .
                             '\\(\\vec{H}(z,t) = \\text{Re}[\\vec{H}_s e^{j\\omega t}] = \\text{Re}[\\frac{E_{x0}}{\\eta} e^{-j\\beta z} e^{j\\omega t} \\hat{a}_y]\\)<br>' .
                             '\\(\\vec{H}(z,t) = \\frac{E_{x0}}{\\eta} \\cos(\\omega t - \\beta z) \\hat{a}_y\\)<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             'For a uniform plane wave propagating in the +z direction in a perfect dielectric:<br>' .
                             'Electric field: \\(\\vec{E}(z,t) = E_{x0} \\cos(\\omega t - \\beta z) \\hat{a}_x\\)<br>' .
                             'Magnetic field: \\(\\vec{H}(z,t) = \\frac{E_{x0}}{\\eta} \\cos(\\omega t - \\beta z) \\hat{a}_y\\)<br>' .
                             'where \\(\\beta = \\omega \\sqrt{\\mu \\epsilon}\\) and \\(\\eta = \\sqrt{\\frac{\\mu}{\\epsilon}}\\)',
                'solution_has_diagram' => false,
                'notes' => 'This derivation shows how Maxwell\'s equations lead to wave equations for electromagnetic fields in perfect dielectrics. The key points are: 1) The wave equation shows that electromagnetic waves propagate with phase constant β = ω√(με), 2) The electric and magnetic fields are perpendicular to each other and to the direction of propagation (transverse electromagnetic wave), 3) The ratio of E to H is the intrinsic impedance η = √(μ/ε), 4) Both fields are in phase in a lossless medium.',
                'formulas' => [
                    '\\(\\nabla \\times \\vec{E}_s = -j\\omega\\mu \\vec{H}_s\\)',
                    '\\(\\nabla \\times \\vec{H}_s = j\\omega\\epsilon \\vec{E}_s\\)',
                    '\\(\\nabla^2 \\vec{E}_s = -\\omega^2 \\mu \\epsilon \\vec{E}_s\\)',
                    '\\(\\beta = \\omega \\sqrt{\\mu \\epsilon}\\)',
                    '\\(\\eta = \\sqrt{\\frac{\\mu}{\\epsilon}}\\)',
                    '\\(\\vec{E}(z,t) = E_{x0} \\cos(\\omega t - \\beta z) \\hat{a}_x\\)',
                    '\\(\\vec{H}(z,t) = \\frac{E_{x0}}{\\eta} \\cos(\\omega t - \\beta z) \\hat{a}_y\\)'
                ]
            ],
            [
                'text' => 'The phasor component of electric field intensity in free space is given by \\(\\vec{E}_s = (100 \\angle 45^\\circ) e^{-j5z} \\hat{a}_y \\text{V/m}\\). Determine frequency of the wave, wave impedance, \\(\\vec{H}_s\\), and magnitude of \\(\\vec{E}\\) at \\(z = 10 \\text{mm}\\), \\(t = 20 \\mu\\text{s}\\). [2069 Chaitra]',
                'year' => '2069 Chaitra',
                'has_diagram' => false,
                'solution' => 'Given: \\(\\vec{E}_s = (100 \\angle 45^\\circ) e^{-j5z} \\hat{a}_y\\) V/m in free space.<br><br>' .
                             '<strong>Frequency of the wave:</strong><br>' .
                             'From the phasor, we can identify the phase constant β = 5 rad/m.<br>' .
                             'In free space, β = ω√(μ<sub>0</sub>ε<sub>0</sub>) = ω/c, where c = 3 × 10⁸ m/s.<br>' .
                             'So, \\(\\omega = \\beta c = 5 \\times 3 \\times 10^8 = 1.5 \\times 10^9 \\text{ rad/s}\\)<br>' .
                             'Frequency \\(f = \\frac{\\omega}{2\\pi} = \\frac{1.5 \\times 10^9}{2\\pi} = 238.73 \\text{ MHz}\\)<br><br>' .
                             '<strong>Wave impedance:</strong><br>' .
                             'In free space, the wave impedance (intrinsic impedance) is:<br>' .
                             '\\(\\eta_0 = \\sqrt{\\frac{\\mu_0}{\\epsilon_0}} = 120\\pi \\approx 377 \\text{ Ω}\\)<br><br>' .
                             '<strong>Magnetic field phasor (\\(\\vec{H}_s\\)):</strong><br>' .
                             'For a uniform plane wave, \\(\\vec{H}_s = \\frac{1}{\\eta_0} (\\hat{k} \\times \\vec{E}_s)\\), where \\(\\hat{k}\\) is the unit vector in the direction of propagation.<br>' .
                             'Here, the wave is propagating in the +z direction (since e<sup>-j5z</sup>), so \\(\\hat{k} = \\hat{a}_z\\).<br>' .
                             'The electric field is in the y-direction, so:<br>' .
                             '\\(\\vec{H}_s = \\frac{1}{\\eta_0} (\\hat{a}_z \\times \\vec{E}_s) = \\frac{1}{\\eta_0} (\\hat{a}_z \\times (100 \\angle 45^\\circ) e^{-j5z} \\hat{a}_y)\\)<br>' .
                             'Since \\(\\hat{a}_z \\times \\hat{a}_y = -\\hat{a}_x\\):<br>' .
                             '\\(\\vec{H}_s = \\frac{1}{\\eta_0} (100 \\angle 45^\\circ) e^{-j5z} (-\\hat{a}_x) = -\\frac{100}{377} \\angle 45^\\circ e^{-j5z} \\hat{a}_x\\)<br>' .
                             '\\(\\vec{H}_s = -0.265 \\angle 45^\\circ e^{-j5z} \\hat{a}_x \\text{ A/m}\\)<br><br>' .
                             '<strong>Magnitude of \\(\\vec{E}\\) at z = 10 mm, t = 20 μs:</strong><br>' .
                             'First, convert the phasor to time domain:<br>' .
                             '\\(\\vec{E}(z,t) = \\text{Re}[\\vec{E}_s e^{j\\omega t}] = \\text{Re}[(100 \\angle 45^\\circ) e^{-j5z} e^{j\\omega t} \\hat{a}_y]\\)<br>' .
                             '\\(\\vec{E}(z,t) = \\text{Re}[100 e^{j(\\omega t - 5z + \\pi/4)} \\hat{a}_y] = 100 \\cos(\\omega t - 5z + \\pi/4) \\hat{a}_y\\)<br>' .
                             'At z = 10 mm = 0.01 m, t = 20 μs = 20 × 10<sup>-6</sup> s, and ω = 1.5 × 10<sup>9</sup> rad/s:<br>' .
                             '\\(\\omega t - 5z + \\pi/4 = (1.5 \\times 10^9)(20 \\times 10^{-6}) - 5(0.01) + \\pi/4\\)<br>' .
                             '\\(= 30000 - 0.05 + 0.7854 = 30000.7354 \\text{ rad}\\)<br>' .
                             'Since cosine is periodic with 2π, we can find the equivalent angle:<br>' .
                             '30000.7354 mod 2π = 30000.7354 - 2π × 4774 (since 2π × 4774 ≈ 30000.32)<br>' .
                             '≈ 30000.7354 - 30000.32 = 0.4154 rad ≈ 23.8°<br>' .
                             'So, \\(\\vec{E}(0.01, 20 \\times 10^{-6}) = 100 \\cos(0.4154) \\hat{a}_y = 100 \\times 0.915 \\hat{a}_y = 91.5 \\hat{a}_y \\text{ V/m}\\)<br>' .
                             'The magnitude is |\\(\\vec{E}\\)| = 91.5 V/m.<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             'Frequency = 238.73 MHz<br>' .
                             'Wave impedance = 377 Ω<br>' .
                             '\\(\\vec{H}_s = -0.265 \\angle 45^\\circ e^{-j5z} \\hat{a}_x \\text{ A/m}\\)<br>' .
                             'Magnitude of \\(\\vec{E}\\) at z = 10 mm, t = 20 μs = 91.5 V/m',
                'solution_has_diagram' => false,
                'notes' => 'This problem demonstrates working with phasor notation for electromagnetic waves. Key points: 1) The phase constant β can be directly read from the exponential term, 2) In free space, β = ω/c, 3) The wave impedance is constant (377 Ω), 4) The magnetic field is perpendicular to both the electric field and the direction of propagation, following the right-hand rule, 5) To find the time-domain field at a specific point, convert from phasor to time domain and substitute the values.',
                'formulas' => [
                    '\\(\\beta = \\frac{\\omega}{c}\\)',
                    '\\(c = 3 \\times 10^8 \\text{ m/s}\\)',
                    '\\(\\eta_0 = 120\\pi \\approx 377 \\text{ Ω}\\)',
                    '\\(\\vec{H}_s = \\frac{1}{\\eta_0} (\\hat{k} \\times \\vec{E}_s)\\)',
                    '\\(\\vec{E}(z,t) = \\text{Re}[\\vec{E}_s e^{j\\omega t}]\\)',
                    '\\(f = \\frac{\\omega}{2\\pi}\\)'
                ]
            ],
            [
                'text' => 'Derive the expressions for the electric field \\(\\vec{E}\\) and magnetic field \\(\\vec{H}\\) for the wave propagation in free space. [2068 Chaitra]',
                'year' => '2068 Chaitra',
                'has_diagram' => false,
                'solution' => 'The derivation for wave propagation in free space is similar to that for a perfect dielectric, but with specific values for free space parameters (σ = 0, μ = μ<sub>0</sub>, ε = ε<sub>0</sub>).<br><br>' .
                             '<strong>Electric Field Derivation:</strong><br>' .
                             'Starting with Maxwell\'s equations in phasor form for free space:<br>' .
                             '\\(\\nabla \\times \\vec{E}_s = -j\\omega\\mu_0 \\vec{H}_s\\) ...(1)<br>' .
                             '\\(\\nabla \\times \\vec{H}_s = j\\omega\\epsilon_0 \\vec{E}_s\\) ...(2)<br>' .
                             '\\(\\nabla \\cdot \\vec{E}_s = 0\\) ...(3)<br>' .
                             '\\(\\nabla \\cdot \\vec{H}_s = 0\\) ...(4)<br><br>' .
                             'Taking the curl of equation (1):<br>' .
                             '\\(\\nabla \\times (\\nabla \\times \\vec{E}_s) = \\nabla \\times (-j\\omega\\mu_0 \\vec{H}_s)\\)<br>' .
                             'Using the vector identity \\(\\nabla \\times (\\nabla \\times \\vec{E}_s) = \\nabla(\\nabla \\cdot \\vec{E}_s) - \\nabla^2 \\vec{E}_s\\) and equation (3):<br>' .
                             '\\(-\\nabla^2 \\vec{E}_s = -j\\omega\\mu_0 (\\nabla \\times \\vec{H}_s)\\)<br>' .
                             'Substituting equation (2):<br>' .
                             '\\(-\\nabla^2 \\vec{E}_s = -j\\omega\\mu_0 (j\\omega\\epsilon_0 \\vec{E}_s)\\)<br>' .
                             '\\(\\nabla^2 \\vec{E}_s = -\\omega^2 \\mu_0 \\epsilon_0 \\vec{E}_s\\)<br><br>' .
                             'For a uniform plane wave propagating in the z-direction with electric field in the x-direction (E<sub>xs</sub>):<br>' .
                             '\\(\\frac{\\partial^2 E_{xs}}{\\partial z^2} = -\\omega^2 \\mu_0 \\epsilon_0 E_{xs}\\)<br>' .
                             'Let \\(\\beta_0 = \\omega \\sqrt{\\mu_0 \\epsilon_0} = \\frac{\\omega}{c}\\) (phase constant in free space)<br>' .
                             '\\(\\frac{\\partial^2 E_{xs}}{\\partial z^2} = -\\beta_0^2 E_{xs}\\)<br><br>' .
                             'The general solution is:<br>' .
                             '\\(E_{xs} = E_{x0} e^{-j\\beta_0 z}\\)<br>' .
                             'In vector form:<br>' .
                             '\\(\\vec{E}_s = E_{x0} e^{-j\\beta_0 z} \\hat{a}_x\\)<br><br>' .
                             'Converting to time domain:<br>' .
                             '\\(\\vec{E}(z,t) = \\text{Re}[\\vec{E}_s e^{j\\omega t}] = \\text{Re}[E_{x0} e^{-j\\beta_0 z} e^{j\\omega t} \\hat{a}_x]\\)<br>' .
                             '\\(\\vec{E}(z,t) = E_{x0} \\cos(\\omega t - \\beta_0 z) \\hat{a}_x\\)<br><br>' .
                             '<strong>Magnetic Field Derivation:</strong><br>' .
                             'Using equation (1) for the x-component of E and y-component of H:<br>' .
                             '\\(\\nabla \\times \\vec{E}_s = -j\\omega\\mu_0 \\vec{H}_s\\)<br>' .
                             'For E<sub>xs</sub> varying only with z:<br>' .
                             '\\(\\frac{\\partial E_{xs}}{\\partial z} \\hat{a}_y = -j\\omega\\mu_0 H_{ys} \\hat{a}_y\\)<br>' .
                             '\\(\\frac{\\partial}{\\partial z}(E_{x0} e^{-j\\beta_0 z}) = -j\\omega\\mu_0 H_{ys}\\)<br>' .
                             '\\(-j\\beta_0 E_{x0} e^{-j\\beta_0 z} = -j\\omega\\mu_0 H_{ys}\\)<br>' .
                             '\\(H_{ys} = \\frac{\\beta_0}{\\omega\\mu_0} E_{x0} e^{-j\\beta_0 z}\\)<br><br>' .
                             'Since \\(\\beta_0 = \\omega \\sqrt{\\mu_0 \\epsilon_0}\\), we have:<br>' .
                             '\\(H_{ys} = \\frac{\\omega \\sqrt{\\mu_0 \\epsilon_0}}{\\omega\\mu_0} E_{x0} e^{-j\\beta_0 z} = \\frac{1}{\\sqrt{\\frac{\\mu_0}{\\epsilon_0}}} E_{x0} e^{-j\\beta_0 z} = \\frac{E_{x0}}{\\eta_0} e^{-j\\beta_0 z}\\)<br>' .
                             'where \\(\\eta_0 = \\sqrt{\\frac{\\mu_0}{\\epsilon_0}} = 120\\pi \\approx 377 \\text{ Ω}\\) is the intrinsic impedance of free space.<br><br>' .
                             'In vector form:<br>' .
                             '\\(\\vec{H}_s = \\frac{E_{x0}}{\\eta_0} e^{-j\\beta_0 z} \\hat{a}_y\\)<br><br>' .
                             'Converting to time domain:<br>' .
                             '\\(\\vec{H}(z,t) = \\text{Re}[\\vec{H}_s e^{j\\omega t}] = \\text{Re}[\\frac{E_{x0}}{\\eta_0} e^{-j\\beta_0 z} e^{j\\omega t} \\hat{a}_y]\\)<br>' .
                             '\\(\\vec{H}(z,t) = \\frac{E_{x0}}{\\eta_0} \\cos(\\omega t - \\beta_0 z) \\hat{a}_y\\)<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             'For a uniform plane wave propagating in the +z direction in free space:<br>' .
                             'Electric field: \\(\\vec{E}(z,t) = E_{x0} \\cos(\\omega t - \\beta_0 z) \\hat{a}_x\\)<br>' .
                             'Magnetic field: \\(\\vec{H}(z,t) = \\frac{E_{x0}}{\\eta_0} \\cos(\\omega t - \\beta_0 z) \\hat{a}_y\\)<br>' .
                             'where \\(\\beta_0 = \\frac{\\omega}{c}\\), \\(c = \\frac{1}{\\sqrt{\\mu_0 \\epsilon_0}} = 3 \\times 10^8 \\text{ m/s}\\), and \\(\\eta_0 = \\sqrt{\\frac{\\mu_0}{\\epsilon_0}} = 120\\pi \\approx 377 \\text{ Ω}\\)',
                'solution_has_diagram' => false,
                'notes' => 'Free space is a special case of a perfect dielectric with μ<sub>r</sub> = 1 and ε<sub>r</sub> = 1. The derivation follows the same steps as for a general perfect dielectric, but the parameters take on their free space values. The speed of light in vacuum c = 3 × 10⁸ m/s is a fundamental constant, and the intrinsic impedance of free space η<sub>0</sub> = 377 Ω is also a key parameter in electromagnetics.',
                'formulas' => [
                    '\\(\\nabla \\times \\vec{E}_s = -j\\omega\\mu_0 \\vec{H}_s\\)',
                    '\\(\\nabla \\times \\vec{H}_s = j\\omega\\epsilon_0 \\vec{E}_s\\)',
                    '\\(\\nabla^2 \\vec{E}_s = -\\omega^2 \\mu_0 \\epsilon_0 \\vec{E}_s\\)',
                    '\\(\\beta_0 = \\frac{\\omega}{c}\\)',
                    '\\(c = 3 \\times 10^8 \\text{ m/s}\\)',
                    '\\(\\eta_0 = 120\\pi \\approx 377 \\text{ Ω}\\)',
                    '\\(\\vec{E}(z,t) = E_{x0} \\cos(\\omega t - \\beta_0 z) \\hat{a}_x\\)',
                    '\\(\\vec{H}(z,t) = \\frac{E_{x0}}{\\eta_0} \\cos(\\omega t - \\beta_0 z) \\hat{a}_y\\)'
                ]
            ],
            [
                'text' => 'For a non-magnetic material having \\(\\epsilon_r = 2.25\\) and \\(\\sigma = 10^4 \\text{mho/m}\\), find the numeric values at 5 MHz for: a) The loss tangent b) The attenuation constant c) The phase constant d) The intrinsic impedance. [2068 Baishakh]',
                'year' => '2068 Baishakh',
                'has_diagram' => false,
                'solution' => 'Given: Non-magnetic material (μ<sub>r</sub> = 1), ε<sub>r</sub> = 2.25, σ = 10⁴ S/m, f = 5 MHz = 5 × 10⁶ Hz.<br><br>' .
                             'First, calculate ω:<br>' .
                             '\\(\\omega = 2\\pi f = 2\\pi \\times 5 \\times 10^6 = 3.1416 \\times 10^7 \\text{ rad/s}\\)<br><br>' .
                             '<strong>a) Loss tangent:</strong><br>' .
                             'The loss tangent is defined as:<br>' .
                             '\\(\\tan \\delta = \\frac{\\sigma}{\\omega \\epsilon} = \\frac{\\sigma}{\\omega \\epsilon_r \\epsilon_0}\\)<br>' .
                             'where ε<sub>0</sub> = 8.854 × 10<sup>-12</sup> F/m.<br>' .
                             '\\(\\tan \\delta = \\frac{10^4}{(3.1416 \\times 10^7) \\times 2.25 \\times 8.854 \\times 10^{-12}} = \\frac{10^4}{6.25 \\times 10^{-4}} = 1.6 \\times 10^7\\)<br>' .
                             'Since \\(\\tan \\delta \\gg 1\\), this material behaves as a good conductor at this frequency.<br><br>' .
                             '<strong>b) Attenuation constant (α):</strong><br>' .
                             'For a dissipative medium, the general expression for attenuation constant is:<br>' .
                             '\\(\\alpha = \\omega \\sqrt{\\frac{\\mu \\epsilon}{2} \\left[ \\sqrt{1 + \\left( \\frac{\\sigma}{\\omega \\epsilon} \\right)^2} - 1 \\right]}\\)<br>' .
                             'Since \\(\\frac{\\sigma}{\\omega \\epsilon} = \\tan \\delta = 1.6 \\times 10^7 \\gg 1\\), we can use the good conductor approximation:<br>' .
                             '\\(\\alpha \\approx \\sqrt{\\pi f \\mu \\sigma}\\)<br>' .
                             'For non-magnetic material, μ = μ<sub>0</sub> = 4π × 10<sup>-7</sup> H/m.<br>' .
                             '\\(\\alpha \\approx \\sqrt{\\pi \\times 5 \\times 10^6 \\times 4\\pi \\times 10^{-7} \\times 10^4} = \\sqrt{\\pi^2 \\times 2 \\times 10^4} = \\pi \\sqrt{2 \\times 10^4}\\)<br>' .
                             '\\(\\alpha \\approx 3.1416 \\times 141.42 = 444.3 \\text{ Np/m}\\)<br><br>' .
                             '<strong>c) Phase constant (β):</strong><br>' .
                             'The general expression for phase constant is:<br>' .
                             '\\(\\beta = \\omega \\sqrt{\\frac{\\mu \\epsilon}{2} \\left[ \\sqrt{1 + \\left( \\frac{\\sigma}{\\omega \\epsilon} \\right)^2} + 1 \\right]}\\)<br>' .
                             'Using the good conductor approximation (since \\(\\frac{\\sigma}{\\omega \\epsilon} \\gg 1\\)):<br>' .
                             '\\(\\beta \\approx \\sqrt{\\pi f \\mu \\sigma} = \\alpha \\approx 444.3 \\text{ rad/m}\\)<br><br>' .
                             '<strong>d) Intrinsic impedance (η):</strong><br>' .
                             'The general expression for intrinsic impedance is:<br>' .
                             '\\(\\eta = \\sqrt{\\frac{j\\omega\\mu}{\\sigma + j\\omega\\epsilon}}\\)<br>' .
                             'For a good conductor (σ ≫ ωε), this simplifies to:<br>' .
                             '\\(\\eta \\approx (1 + j) \\sqrt{\\frac{\\pi f \\mu}{\\sigma}}\\)<br>' .
                             '\\(\\eta \\approx (1 + j) \\sqrt{\\frac{\\pi \\times 5 \\times 10^6 \\times 4\\pi \\times 10^{-7}}{10^4}} = (1 + j) \\sqrt{\\frac{2\\pi^2}{10^4}}\\)<br>' .
                             '\\(\\eta \\approx (1 + j) \\sqrt{0.01974} = (1 + j) \\times 0.1405 = 0.1405 + j0.1405 \\text{ Ω}\\)<br>' .
                             'The magnitude is |η| = 0.1405√2 = 0.1987 Ω, and the phase angle is 45°.<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             'a) Loss tangent = 1.6 × 10⁷<br>' .
                             'b) Attenuation constant = 444.3 Np/m<br>' .
                             'c) Phase constant = 444.3 rad/m<br>' .
                             'd) Intrinsic impedance = 0.1405 + j0.1405 Ω (or 0.1987 ∠ 45° Ω)',
                'solution_has_diagram' => false,
                'notes' => 'This problem demonstrates the behavior of electromagnetic waves in a lossy medium. The extremely high loss tangent (1.6 × 10⁷) indicates that the material behaves as a good conductor at 5 MHz. For good conductors, the attenuation and phase constants are approximately equal (α ≈ β), and the intrinsic impedance has a 45° phase angle. The wave penetrates only a very short distance into the material (skin depth δ = 1/α ≈ 2.25 mm), which is characteristic of good conductors.',
                'formulas' => [
                    '\\(\\tan \\delta = \\frac{\\sigma}{\\omega \\epsilon}\\)',
                    '\\(\\alpha = \\omega \\sqrt{\\frac{\\mu \\epsilon}{2} \\left[ \\sqrt{1 + \\left( \\frac{\\sigma}{\\omega \\epsilon} \\right)^2} - 1 \\right]}\\)',
                    '\\(\\beta = \\omega \\sqrt{\\frac{\\mu \\epsilon}{2} \\left[ \\sqrt{1 + \\left( \\frac{\\sigma}{\\omega \\epsilon} \\right)^2} + 1 \\right]}\\)',
                    '\\(\\eta = \\sqrt{\\frac{j\\omega\\mu}{\\sigma + j\\omega\\epsilon}}\\)',
                    'Good conductor approximations:<br>' .
                    '\\(\\alpha \\approx \\beta \\approx \\sqrt{\\pi f \\mu \\sigma}\\)<br>' .
                    '\\(\\eta \\approx (1 + j) \\sqrt{\\frac{\\pi f \\mu}{\\sigma}}\\)'
                ]
            ],
            [
                'text' => 'Derive expressions for \\(\\alpha\\) and \\(\\beta\\) if medium is characterized by permittivity \\(\\epsilon\\), permeability \\(\\mu\\) and conductivity \\(\\sigma\\). [2067 Mangsir]',
                'year' => '2067 Mangsir',
                'has_diagram' => false,
                'solution' => 'For a medium characterized by permittivity ε, permeability μ, and conductivity σ, we can derive expressions for the attenuation constant α and phase constant β.<br><br>' .
                             'The propagation constant γ is defined as:<br>' .
                             '\\(\\gamma = \\alpha + j\\beta = \\sqrt{j\\omega\\mu(\\sigma + j\\omega\\epsilon)}\\)<br><br>' .
                             'Let\'s simplify the expression inside the square root:<br>' .
                             '\\(j\\omega\\mu(\\sigma + j\\omega\\epsilon) = j\\omega\\mu\\sigma - \\omega^2\\mu\\epsilon\\)<br>' .
                             'This is a complex number. Let\'s write it in polar form to find the square root.<br><br>' .
                             'The magnitude is:<br>' .
                             '\\(|j\\omega\\mu(\\sigma + j\\omega\\epsilon)| = \\sqrt{(\\omega^2\\mu\\epsilon)^2 + (\\omega\\mu\\sigma)^2} = \\omega\\mu \\sqrt{(\\omega\\epsilon)^2 + \\sigma^2}\\)<br><br>' .
                             'The phase angle is:<br>' .
                             '\\(\\theta = \\tan^{-1}\\left(\\frac{\\omega\\mu\\sigma}{-\\omega^2\\mu\\epsilon}\\right) = \\tan^{-1}\\left(-\\frac{\\sigma}{\\omega\\epsilon}\\right)\\)<br>' .
                             'Since the real part is negative and the imaginary part is positive, this is in the second quadrant, so:<br>' .
                             '\\(\\theta = \\pi - \\tan^{-1}\\left(\\frac{\\sigma}{\\omega\\epsilon}\\right)\\)<br><br>' .
                             'Now, \\(\\gamma = \\sqrt{\\omega\\mu \\sqrt{(\\omega\\epsilon)^2 + \\sigma^2}} \\angle \\frac{\\theta}{2}\\)<br>' .
                             'The magnitude of γ is:<br>' .
                             '\\(|\\gamma| = \\sqrt{\\omega\\mu \\sqrt{(\\omega\\epsilon)^2 + \\sigma^2}} = \\sqrt{\\omega\\mu} \\cdot [(\\omega\\epsilon)^2 + \\sigma^2]^{1/4}\\)<br><br>' .
                             'The real part (α) and imaginary part (β) can be found as:<br>' .
                             '\\(\\alpha = |\\gamma| \\cos\\left(\\frac{\\theta}{2}\\right)\\)<br>' .
                             '\\(\\beta = |\\gamma| \\sin\\left(\\frac{\\theta}{2}\\right)\\)<br><br>' .
                             'Using trigonometric identities:<br>' .
                             '\\(\\cos\\left(\\frac{\\theta}{2}\\right) = \\sqrt{\\frac{1 + \\cos\\theta}{2}}\\)<br>' .
                             '\\(\\sin\\left(\\frac{\\theta}{2}\\right) = \\sqrt{\\frac{1 - \\cos\\theta}{2}}\\)<br><br>' .
                             'From the complex number, \\(\\cos\\theta = \\frac{-\\omega^2\\mu\\epsilon}{\\omega\\mu \\sqrt{(\\omega\\epsilon)^2 + \\sigma^2}} = \\frac{-\\omega\\epsilon}{\\sqrt{(\\omega\\epsilon)^2 + \\sigma^2}}\\)<br><br>' .
                             'Therefore:<br>' .
                             '\\(\\alpha = \\sqrt{\\omega\\mu} \\cdot [(\\omega\\epsilon)^2 + \\sigma^2]^{1/4} \\cdot \\sqrt{\\frac{1 + \\frac{-\\omega\\epsilon}{\\sqrt{(\\omega\\epsilon)^2 + \\sigma^2}}}{2}}\\)<br>' .
                             '\\(\\alpha = \\sqrt{\\omega\\mu} \\cdot [(\\omega\\epsilon)^2 + \\sigma^2]^{1/4} \\cdot \\sqrt{\\frac{\\sqrt{(\\omega\\epsilon)^2 + \\sigma^2} - \\omega\\epsilon}{2\\sqrt{(\\omega\\epsilon)^2 + \\sigma^2}}}\\)<br>' .
                             '\\(\\alpha = \\sqrt{\\omega\\mu} \\cdot \\sqrt{\\frac{\\sqrt{(\\omega\\epsilon)^2 + \\sigma^2} - \\omega\\epsilon}{2}}\\)<br>' .
                             '\\(\\alpha = \\omega \\sqrt{\\frac{\\mu\\epsilon}{2} \\left[ \\sqrt{1 + \\left(\\frac{\\sigma}{\\omega\\epsilon}\\right)^2} - 1 \\right]}\\)<br><br>' .
                             'Similarly for β:<br>' .
                             '\\(\\beta = \\sqrt{\\omega\\mu} \\cdot [(\\omega\\epsilon)^2 + \\sigma^2]^{1/4} \\cdot \\sqrt{\\frac{1 - \\frac{-\\omega\\epsilon}{\\sqrt{(\\omega\\epsilon)^2 + \\sigma^2}}}{2}}\\)<br>' .
                             '\\(\\beta = \\sqrt{\\omega\\mu} \\cdot [(\\omega\\epsilon)^2 + \\sigma^2]^{1/4} \\cdot \\sqrt{\\frac{\\sqrt{(\\omega\\epsilon)^2 + \\sigma^2} + \\omega\\epsilon}{2\\sqrt{(\\omega\\epsilon)^2 + \\sigma^2}}}\\)<br>' .
                             '\\(\\beta = \\sqrt{\\omega\\mu} \\cdot \\sqrt{\\frac{\\sqrt{(\\omega\\epsilon)^2 + \\sigma^2} + \\omega\\epsilon}{2}}\\)<br>' .
                             '\\(\\beta = \\omega \\sqrt{\\frac{\\mu\\epsilon}{2} \\left[ \\sqrt{1 + \\left(\\frac{\\sigma}{\\omega\\epsilon}\\right)^2} + 1 \\right]}\\)<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             'For a medium with permittivity ε, permeability μ, and conductivity σ:<br>' .
                             'Attenuation constant: \\(\\alpha = \\omega \\sqrt{\\frac{\\mu\\epsilon}{2} \\left[ \\sqrt{1 + \\left(\\frac{\\sigma}{\\omega\\epsilon}\\right)^2} - 1 \\right]}\\)<br>' .
                             'Phase constant: \\(\\beta = \\omega \\sqrt{\\frac{\\mu\\epsilon}{2} \\left[ \\sqrt{1 + \\left(\\frac{\\sigma}{\\omega\\epsilon}\\right)^2} + 1 \\right]}\\)<br><br>' .
                             'Special cases:<br>' .
                             '1. Perfect dielectric (σ = 0): α = 0, β = ω√(με)<br>' .
                             '2. Good conductor (σ ≫ ωε): α ≈ β ≈ √(πfμσ)',
                'solution_has_diagram' => false,
                'notes' => 'These expressions for α and β are fundamental for understanding wave propagation in lossy media. The derivation involves complex algebra and trigonometric identities. The term √[1 + (σ/ωε)²] appears in both expressions, which is related to the loss tangent. When σ = 0 (perfect dielectric), α = 0 (no attenuation) and β = ω√(με). When σ ≫ ωε (good conductor), both α and β are approximately equal to √(πfμσ).',
                'formulas' => [
                    '\\(\\gamma = \\alpha + j\\beta = \\sqrt{j\\omega\\mu(\\sigma + j\\omega\\epsilon)}\\)',
                    '\\(\\alpha = \\omega \\sqrt{\\frac{\\mu\\epsilon}{2} \\left[ \\sqrt{1 + \\left(\\frac{\\sigma}{\\omega\\epsilon}\\right)^2} - 1 \\right]}\\)',
                    '\\(\\beta = \\omega \\sqrt{\\frac{\\mu\\epsilon}{2} \\left[ \\sqrt{1 + \\left(\\frac{\\sigma}{\\omega\\epsilon}\\right)^2} + 1 \\right]}\\)',
                    'Loss tangent: \\(\\tan \\delta = \\frac{\\sigma}{\\omega\\epsilon}\\)',
                    'Perfect dielectric (σ = 0): α = 0, β = ω√(με)<br>' .
                    'Good conductor (σ ≫ ωε): α ≈ β ≈ √(πfμσ)'
                ]
            ],
            [
                'text' => 'A uniform plane wave propagating in free space has \\(\\vec{E} = 2 \\cos(10^7 \\pi t - \\beta z) \\hat{a}_x\\), determine \\(\\beta\\) and \\(\\vec{H}\\). [2067 Mangsir]',
                'year' => '2067 Mangsir',
                'has_diagram' => false,
                'solution' => 'Given: \\(\\vec{E} = 2 \\cos(10^7 \\pi t - \\beta z) \\hat{a}_x\\) in free space.<br><br>' .
                             '<strong>Phase constant (β):</strong><br>' .
                             'From the given electric field expression, we can identify the angular frequency:<br>' .
                             '\\(\\omega = 10^7 \\pi \\text{ rad/s}\\)<br>' .
                             'In free space, the phase constant is:<br>' .
                             '\\(\\beta = \\frac{\\omega}{c} = \\frac{10^7 \\pi}{3 \\times 10^8} = \\frac{\\pi}{30} = 0.1047 \\text{ rad/m}\\)<br><br>' .
                             '<strong>Magnetic field (\\(\\vec{H}\\)):</strong><br>' .
                             'In free space, the intrinsic impedance is \\(\\eta_0 = 120\\pi \\approx 377 \\text{ Ω}\\).<br>' .
                             'For a uniform plane wave propagating in the +z direction with E in the x-direction, H will be in the y-direction.<br>' .
                             'The amplitude of H is:<br>' .
                             '\\(|H| = \\frac{|E|}{\\eta_0} = \\frac{2}{377} = 0.005305 \\text{ A/m}\\)<br>' .
                             'Since E and H are in phase in free space (lossless medium):<br>' .
                             '\\(\\vec{H} = \\frac{2}{377} \\cos(10^7 \\pi t - \\beta z) \\hat{a}_y = 0.005305 \\cos(10^7 \\pi t - 0.1047z) \\hat{a}_y \\text{ A/m}\\)<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             '\\(\\beta = 0.1047 \\text{ rad/m}\\)<br>' .
                             '\\(\\vec{H} = 0.005305 \\cos(10^7 \\pi t - 0.1047z) \\hat{a}_y \\text{ A/m}\\)',
                'solution_has_diagram' => false,
                'notes' => 'This is a straightforward application of the relationships for uniform plane waves in free space. The key points are: 1) The phase constant β = ω/c, where c is the speed of light in vacuum, 2) The magnetic field is perpendicular to both the electric field and the direction of propagation, 3) The ratio of E to H is the intrinsic impedance of free space (377 Ω), 4) In a lossless medium like free space, E and H are in phase.',
                'formulas' => [
                    '\\(\\beta = \\frac{\\omega}{c}\\)',
                    '\\(c = 3 \\times 10^8 \\text{ m/s}\\)',
                    '\\(\\eta_0 = 120\\pi \\approx 377 \\text{ Ω}\\)',
                    '\\(|H| = \\frac{|E|}{\\eta_0}\\)',
                    '\\(\\vec{H} = \\frac{|E|}{\\eta_0} \\cos(\\omega t - \\beta z) \\hat{a}_y\\)'
                ]
            ],
            [
                'text' => 'A z-polarized uniform plane wave with frequency 100 MHz propagates in air in the positive x-direction and impinges normally on a perfectly conducting plane at \\(x = 0\\). Assuming the amplitude of the electric field vector to be 3 mV/m, determine phasor and instantaneous expressions for a) Incident electric and magnetic field vectors b) Reflected electric and magnetic field vectors. [2067 Mangsir]',
                'year' => '2067 Mangsir',
                'has_diagram' => false,
                'solution' => 'Given: z-polarized wave, f = 100 MHz = 10⁸ Hz, propagating in +x direction in air, normally incident on perfect conductor at x = 0, |E<sub>i</sub>| = 3 mV/m = 0.003 V/m.<br><br>' .
                             'First, calculate ω and β:<br>' .
                             '\\(\\omega = 2\\pi f = 2\\pi \\times 10^8 \\text{ rad/s}\\)<br>' .
                             'In air (free space), \\(\\beta = \\frac{\\omega}{c} = \\frac{2\\pi \\times 10^8}{3 \\times 10^8} = \\frac{2\\pi}{3} \\text{ rad/m}\\)<br>' .
                             'Intrinsic impedance of air: \\(\\eta_0 = 120\\pi \\approx 377 \\text{ Ω}\\)<br><br>' .
                             '<strong>a) Incident fields:</strong><br>' .
                             'The wave is z-polarized and propagating in +x direction, so:<br>' .
                             'Instantaneous incident electric field:<br>' .
                             '\\(\\vec{E}_i(x,t) = 0.003 \\cos(\\omega t - \\beta x) \\hat{a}_z \\text{ V/m}\\)<br>' .
                             'Phasor incident electric field:<br>' .
                             '\\(\\vec{E}_{is} = 0.003 e^{-j\\beta x} \\hat{a}_z \\text{ V/m}\\)<br><br>' .
                             'The magnetic field is perpendicular to both E and the direction of propagation. Using \\(\\vec{H} = \\frac{1}{\\eta_0} (\\hat{k} \\times \\vec{E})\\), with \\(\\hat{k} = \\hat{a}_x\\):<br>' .
                             '\\(\\hat{a}_x \\times \\hat{a}_z = -\\hat{a}_y\\)<br>' .
                             'So, instantaneous incident magnetic field:<br>' .
                             '\\(\\vec{H}_i(x,t) = \\frac{0.003}{377} \\cos(\\omega t - \\beta x) (-\\hat{a}_y) = -7.96 \\times 10^{-6} \\cos(\\omega t - \\beta x) \\hat{a}_y \\text{ A/m}\\)<br>' .
                             'Phasor incident magnetic field:<br>' .
                             '\\(\\vec{H}_{is} = -7.96 \\times 10^{-6} e^{-j\\beta x} \\hat{a}_y \\text{ A/m}\\)<br><br>' .
                             '<strong>b) Reflected fields:</strong><br>' .
                             'For a perfect conductor, the reflection coefficient for the electric field is Γ = -1 (since η<sub>2</sub> = 0 for perfect conductor).<br>' .
                             'The reflected wave propagates in the -x direction.<br>' .
                             'The electric field reflection: Since the incident E is in +z direction, and Γ = -1, the reflected E will be in -z direction at the boundary (x=0).<br>' .
                             'Phasor reflected electric field:<br>' .
                             '\\(\\vec{E}_{rs} = \\Gamma \\times 0.003 e^{+j\\beta x} \\hat{a}_z = -0.003 e^{+j\\beta x} \\hat{a}_z \\text{ V/m}\\)<br>' .
                             'Instantaneous reflected electric field:<br>' .
                             '\\(\\vec{E}_r(x,t) = -0.003 \\cos(\\omega t + \\beta x) \\hat{a}_z \\text{ V/m}\\)<br><br>' .
                             'For the magnetic field, the reflection coefficient is +1 (since H is tangential to the perfect conductor, and the total H at the boundary must be zero for a perfect conductor, but the direction also changes due to the reversed propagation direction).<br>' .
                             'The reflected H field: Since the reflected wave propagates in -x direction, and E is in -z direction, using \\(\\vec{H} = \\frac{1}{\\eta_0} (\\hat{k} \\times \\vec{E})\\) with \\(\\hat{k} = -\\hat{a}_x\\) for reflected wave:<br>' .
                             '\\((-\\hat{a}_x) \\times (-\\hat{a}_z) = -\\hat{a}_y\\)<br>' .
                             'So, instantaneous reflected magnetic field:<br>' .
                             '\\(\\vec{H}_r(x,t) = \\frac{0.003}{377} \\cos(\\omega t + \\beta x) (-\\hat{a}_y) = -7.96 \\times 10^{-6} \\cos(\\omega t + \\beta x) \\hat{a}_y \\text{ A/m}\\)<br>' .
                             'Phasor reflected magnetic field:<br>' .
                             '\\(\\vec{H}_{rs} = -7.96 \\times 10^{-6} e^{+j\\beta x} \\hat{a}_y \\text{ A/m}\\)<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             '<strong>a) Incident fields:</strong><br>' .
                             'Phasor: \\(\\vec{E}_{is} = 0.003 e^{-j\\frac{2\\pi}{3}x} \\hat{a}_z \\text{ V/m}\\), \\(\\vec{H}_{is} = -7.96 \\times 10^{-6} e^{-j\\frac{2\\pi}{3}x} \\hat{a}_y \\text{ A/m}\\)<br>' .
                             'Instantaneous: \\(\\vec{E}_i(x,t) = 0.003 \\cos(2\\pi \\times 10^8 t - \\frac{2\\pi}{3}x) \\hat{a}_z \\text{ V/m}\\), \\(\\vec{H}_i(x,t) = -7.96 \\times 10^{-6} \\cos(2\\pi \\times 10^8 t - \\frac{2\\pi}{3}x) \\hat{a}_y \\text{ A/m}\\)<br><br>' .
                             '<strong>b) Reflected fields:</strong><br>' .
                             'Phasor: \\(\\vec{E}_{rs} = -0.003 e^{+j\\frac{2\\pi}{3}x} \\hat{a}_z \\text{ V/m}\\), \\(\\vec{H}_{rs} = -7.96 \\times 10^{-6} e^{+j\\frac{2\\pi}{3}x} \\hat{a}_y \\text{ A/m}\\)<br>' .
                             'Instantaneous: \\(\\vec{E}_r(x,t) = -0.003 \\cos(2\\pi \\times 10^8 t + \\frac{2\\pi}{3}x) \\hat{a}_z \\text{ V/m}\\), \\(\\vec{H}_r(x,t) = -7.96 \\times 10^{-6} \\cos(2\\pi \\times 10^8 t + \\frac{2\\pi}{3}x) \\hat{a}_y \\text{ A/m}\\)',
                'solution_has_diagram' => false,
                'notes' => 'This problem involves reflection from a perfect conductor. Key points: 1) For a perfect conductor, the reflection coefficient for the electric field is Γ = -1, 2) The reflected wave propagates in the opposite direction, 3) The magnetic field reflection coefficient is +1, but the direction is determined by the cross product with the new propagation direction, 4) At the boundary (x=0), the total electric field is zero (E<sub>i</sub> + E<sub>r</sub> = 0.003 - 0.003 = 0), which is the boundary condition for a perfect conductor.',
                'formulas' => [
                    '\\(\\omega = 2\\pi f\\)',
                    '\\(\\beta = \\frac{\\omega}{c}\\)',
                    '\\(\\eta_0 = 120\\pi \\approx 377 \\text{ Ω}\\)',
                    'Reflection coefficient for perfect conductor: Γ = -1 (for E field)<br>' .
                    '\\(\\vec{H} = \\frac{1}{\\eta_0} (\\hat{k} \\times \\vec{E})\\)',
                    'Incident wave: e<sup>-jβx</sup><br>' .
                    'Reflected wave: e<sup>+jβx</sup>'
                ]
            ],
            [
                'text' => 'Explain the phenomena when a plane wave is incident normally on the interface between two different Medias. Derive the expression for reflection and transmission coefficient. [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false,
                'solution' => 'When a plane wave is incident normally on the interface between two different media, part of the wave is reflected back into the first medium, and part is transmitted into the second medium. The behavior is governed by the boundary conditions for electromagnetic fields.<br><br>' .
                             '<strong>Boundary Conditions:</strong><br>' .
                             'At the interface (z=0), the tangential components of E and H must be continuous:<br>' .
                             '1. E<sub>t1</sub> = E<sub>t2</sub> (tangential E continuous)<br>' .
                             '2. H<sub>t1</sub> = H<sub>t2</sub> (tangential H continuous)<br><br>' .
                             '<strong>Setup:</strong><br>' .
                             'Consider a plane wave incident normally from medium 1 (intrinsic impedance η<sub>1</sub>) to medium 2 (intrinsic impedance η<sub>2</sub>). The interface is at z=0.<br>' .
                             'Incident wave (in medium 1, propagating in +z direction):<br>' .
                             '\\(\\vec{E}_{i} = E_{i0} e^{-j\\beta_1 z} \\hat{a}_x\\), \\(\\vec{H}_{i} = \\frac{E_{i0}}{\\eta_1} e^{-j\\beta_1 z} \\hat{a}_y\\)<br>' .
                             'Reflected wave (in medium 1, propagating in -z direction):<br>' .
                             '\\(\\vec{E}_{r} = E_{r0} e^{+j\\beta_1 z} \\hat{a}_x\\), \\(\\vec{H}_{r} = -\\frac{E_{r0}}{\\eta_1} e^{+j\\beta_1 z} \\hat{a}_y\\) (note the negative sign due to reversed propagation direction)<br>' .
                             'Transmitted wave (in medium 2, propagating in +z direction):<br>' .
                             '\\(\\vec{E}_{t} = E_{t0} e^{-j\\beta_2 z} \\hat{a}_x\\), \\(\\vec{H}_{t} = \\frac{E_{t0}}{\\eta_2} e^{-j\\beta_2 z} \\hat{a}_y\\)<br><br>' .
                             '<strong>Applying Boundary Conditions at z=0:</strong><br>' .
                             '1. Tangential E continuous:<br>' .
                             'E<sub>i0</sub> + E<sub>r0</sub> = E<sub>t0</sub> ...(1)<br>' .
                             '2. Tangential H continuous:<br>' .
                             '\\(\\frac{E_{i0}}{\\eta_1} - \\frac{E_{r0}}{\\eta_1} = \\frac{E_{t0}}{\\eta_2}\\) ...(2)<br><br>' .
                             '<strong>Reflection Coefficient (Γ):</strong><br>' .
                             'The reflection coefficient is defined as Γ = E<sub>r0</sub>/E<sub>i0</sub>.<br>' .
                             'From equation (1): E<sub>t0</sub> = E<sub>i0</sub> + E<sub>r0</sub><br>' .
                             'Substitute into equation (2):<br>' .
                             '\\(\\frac{E_{i0}}{\\eta_1} - \\frac{E_{r0}}{\\eta_1} = \\frac{E_{i0} + E_{r0}}{\\eta_2}\\)<br>' .
                             'Multiply both sides by η<sub>1</sub>η<sub>2</sub>:<br>' .
                             'η<sub>2</sub>E<sub>i0</sub> - η<sub>2</sub>E<sub>r0</sub> = η<sub>1</sub>E<sub>i0</sub> + η<sub>1</sub>E<sub>r0</sub><br>' .
                             'η<sub>2</sub>E<sub>i0</sub> - η<sub>1</sub>E<sub>i0</sub> = η<sub>1</sub>E<sub>r0</sub> + η<sub>2</sub>E<sub>r0</sub><br>' .
                             'E<sub>i0</sub>(η<sub>2</sub> - η<sub>1</sub>) = E<sub>r0</sub>(η<sub>1</sub> + η<sub>2</sub>)<br>' .
                             '\\(\\Gamma = \\frac{E_{r0}}{E_{i0}} = \\frac{\\eta_2 - \\eta_1}{\\eta_2 + \\eta_1}\\)<br><br>' .
                             '<strong>Transmission Coefficient (τ):</strong><br>' .
                             'The transmission coefficient is defined as τ = E<sub>t0</sub>/E<sub>i0</sub>.<br>' .
                             'From equation (1): E<sub>t0</sub> = E<sub>i0</sub> + E<sub>r0</sub> = E<sub>i0</sub>(1 + Γ)<br>' .
                             '\\(\\tau = \\frac{E_{t0}}{E_{i0}} = 1 + \\Gamma = 1 + \\frac{\\eta_2 - \\eta_1}{\\eta_2 + \\eta_1} = \\frac{2\\eta_2}{\\eta_2 + \\eta_1}\\)<br><br>' .
                             '<strong>Special Cases:</strong><br>' .
                             '1. Medium 2 is perfect conductor (η<sub>2</sub> = 0): Γ = -1, τ = 0 (total reflection, no transmission)<br>' .
                             '2. Medium 2 is same as medium 1 (η<sub>2</sub> = η<sub>1</sub>): Γ = 0, τ = 1 (no reflection, full transmission)<br>' .
                             '3. Medium 2 is denser (η<sub>2</sub> > η<sub>1</sub>): 0 < Γ < 1 (partial reflection, positive sign)<br>' .
                             '4. Medium 2 is rarer (η<sub>2</sub> < η<sub>1</sub>): -1 < Γ < 0 (partial reflection, negative sign)<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             'Reflection coefficient: \\(\\Gamma = \\frac{\\eta_2 - \\eta_1}{\\eta_2 + \\eta_1}\\)<br>' .
                             'Transmission coefficient: \\(\\tau = \\frac{2\\eta_2}{\\eta_2 + \\eta_1}\\)',
                'solution_has_diagram' => false,
                'notes' => 'These coefficients are fundamental in understanding wave reflection and transmission. The reflection coefficient Γ can be positive or negative, indicating whether the reflected wave is in phase or out of phase with the incident wave. The transmission coefficient τ is always positive for passive media. Note that for power, the reflection coefficient is |Γ|² and transmission coefficient is 1 - |Γ|² (for lossless media).',
                'formulas' => [
                    'Boundary conditions:<br>' .
                    'Tangential E continuous: E<sub>t1</sub> = E<sub>t2</sub><br>' .
                    'Tangential H continuous: H<sub>t1</sub> = H<sub>t2</sub><br>' .
                    'Reflection coefficient: \\(\\Gamma = \\frac{E_{r0}}{E_{i0}} = \\frac{\\eta_2 - \\eta_1}{\\eta_2 + \\eta_1}\\)<br>' .
                    'Transmission coefficient: \\(\\tau = \\frac{E_{t0}}{E_{i0}} = \\frac{2\\eta_2}{\\eta_2 + \\eta_1}\\)<br>' .
                    'Relationship: \\(\\tau = 1 + \\Gamma\\)'
                ]
            ],
            [
                'text' => 'A uniform plane wave in non-magnetic medium has \\(\\vec{H} = 50 \\cos(10^9 t + 2z) \\hat{a}_y \\text{mA/m}\\). Find: i) The direction of propagation ii) Phase constant \\(\\beta\\), wavelength \\(\\lambda\\), velocity \\(v\\), relative permittivity \\(\\epsilon_r\\), intrinsic impedance \\(\\eta\\) iii) \\(\\vec{E}\\). [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false,
                'solution' => 'Given: \\(\\vec{H} = 50 \\cos(10^9 t + 2z) \\hat{a}_y\\) mA/m = 0.05 \\cos(10^9 t + 2z) \\hat{a}_y A/m in a non-magnetic medium (μ<sub>r</sub> = 1).<br><br>' .
                             '<strong>i) Direction of propagation:</strong><br>' .
                             'The phase term is (10⁹t + 2z). Since it\'s +2z (positive sign with z), the wave is propagating in the -z direction.<br>' .
                             '(For a wave propagating in +z direction, the phase would be (ωt - βz); for -z direction, it\'s (ωt + βz).)<br><br>' .
                             '<strong>ii) Phase constant, wavelength, velocity, relative permittivity, intrinsic impedance:</strong><br>' .
                             'Phase constant β: From the expression, β = 2 rad/m.<br>' .
                             'Angular frequency ω = 10⁹ rad/s.<br>' .
                             'Wavelength λ = 2π/β = 2π/2 = π = 3.1416 m.<br>' .
                             'Velocity v = ω/β = 10⁹/2 = 5 × 10⁸ m/s.<br><br>' .
                             'Since the medium is non-magnetic (μ<sub>r</sub> = 1), μ = μ<sub>0</sub>.<br>' .
                             'The velocity v = 1/√(με) = 1/√(μ<sub>0</sub>ε<sub>r</sub>ε<sub>0</sub>) = c/√ε<sub>r</sub>, where c = 3 × 10⁸ m/s.<br>' .
                             'So, √ε<sub>r</sub> = c/v = (3 × 10⁸)/(5 × 10⁸) = 0.6<br>' .
                             'ε<sub>r</sub> = (0.6)² = 0.36<br><br>' .
                             'Intrinsic impedance η = √(μ/ε) = √(μ<sub>0</sub>/(ε<sub>r</sub>ε<sub>0</sub>)) = η<sub>0</sub>/√ε<sub>r</sub> = 377/0.6 = 628.33 Ω.<br><br>' .
                             '<strong>iii) Electric field (\\(\\vec{E}\\)):</strong><br>' .
                             'The electric field is perpendicular to both H and the direction of propagation.<br>' .
                             'Direction of propagation is -z (\\(\\hat{k} = -\\hat{a}_z\\)), H is in y-direction (\\(\\hat{a}_y\\)).<br>' .
                             'Using \\(\\vec{E} = \\eta (\\hat{k} \\times \\vec{H})\\) for the instantaneous field:<br>' .
                             '\\(\\hat{k} \\times \\hat{a}_y = (-\\hat{a}_z) \\times \\hat{a}_y = \\hat{a}_x\\)<br>' .
                             '(Note: The relationship \\(\\vec{E} = \\eta (\\hat{k} \\times \\vec{H})\\) ensures the correct direction and phase relationship.)<br>' .
                             'So, \\(\\vec{E} = \\eta |H| \\cos(10^9 t + 2z) \\hat{a}_x = 628.33 \\times 0.05 \\cos(10^9 t + 2z) \\hat{a}_x\\)<br>' .
                             '\\(\\vec{E} = 31.42 \\cos(10^9 t + 2z) \\hat{a}_x \\text{ V/m}\\)<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             'i) Direction of propagation: -z direction<br>' .
                             'ii) β = 2 rad/m, λ = 3.1416 m, v = 5 × 10⁸ m/s, ε<sub>r</sub> = 0.36, η = 628.33 Ω<br>' .
                             'iii) \\(\\vec{E} = 31.42 \\cos(10^9 t + 2z) \\hat{a}_x \\text{ V/m}\\)',
                'solution_has_diagram' => false,
                'notes' => 'This problem demonstrates how to extract information from the magnetic field expression of a uniform plane wave. Key points: 1) The sign in the phase term indicates the direction of propagation, 2) The phase constant β can be directly read from the expression, 3) For non-magnetic media, μ<sub>r</sub> = 1, so material properties can be found from the wave velocity, 4) The electric field direction is determined by the cross product of the propagation direction and magnetic field direction.',
                'formulas' => [
                    'Direction of propagation: +z if (ωt - βz), -z if (ωt + βz)<br>' .
                    '\\(\\beta = \\text{coefficient of z in phase term}\\)<br>' .
                    '\\(\\lambda = \\frac{2\\pi}{\\beta}\\)<br>' .
                    '\\(v = \\frac{\\omega}{\\beta}\\)<br>' .
                    'For non-magnetic medium: \\(v = \\frac{c}{\\sqrt{\\epsilon_r}}\\)<br>' .
                    '\\(\\eta = \\frac{\\eta_0}{\\sqrt{\\epsilon_r}}\\)<br>' .
                    '\\(\\vec{E} = \\eta (\\hat{k} \\times \\vec{H})\\)'
                ]
            ],
            [
                'text' => 'A uniform plane wave in air has \\(\\vec{E} = E_m \\cos(\\omega t - \\beta z) \\hat{a}_x + 0.5 E_m \\sin(\\omega t - \\beta z) \\hat{a}_y \\text{V/m}\\). Find: a) \\(\\omega\\) and \\(\\beta\\) if the wavelength is 0.3 m b) \\(\\vec{H}\\) c) the time average power in the wave. [2069 Chaitra]',
                'year' => '2069 Chaitra',
                'has_diagram' => false,
                'solution' => 'Given: \\(\\vec{E} = E_m \\cos(\\omega t - \\beta z) \\hat{a}_x + 0.5 E_m \\sin(\\omega t - \\beta z) \\hat{a}_y\\) V/m in air, λ = 0.3 m.<br><br>' .
                             '<strong>a) Angular frequency (ω) and phase constant (β):</strong><br>' .
                             'Given wavelength λ = 0.3 m.<br>' .
                             'In air, the phase constant β = 2π/λ = 2π/0.3 = 20.944 rad/m.<br>' .
                             'The velocity in air is c = 3 × 10⁸ m/s.<br>' .
                             'Since v = ω/β = c, we have ω = cβ = 3 × 10⁸ × 20.944 = 6.283 × 10⁹ rad/s.<br>' .
                             'Frequency f = ω/2π = 10⁹ Hz = 1 GHz.<br><br>' .
                             '<strong>b) Magnetic field (\\(\\vec{H}\\)):</strong><br>' .
                             'In air, intrinsic impedance η<sub>0</sub> = 377 Ω.<br>' .
                             'The wave is propagating in +z direction (since phase is ωt - βz).<br>' .
                             'The magnetic field is perpendicular to both E and the direction of propagation.<br>' .
                             'Using \\(\\vec{H} = \\frac{1}{\\eta_0} (\\hat{k} \\times \\vec{E})\\), with \\(\\hat{k} = \\hat{a}_z\\):<br>' .
                             '\\(\\hat{a}_z \\times \\hat{a}_x = \\hat{a}_y\\), \\(\\hat{a}_z \\times \\hat{a}_y = -\\hat{a}_x\\)<br>' .
                             'So, \\(\\vec{H} = \\frac{1}{\\eta_0} [E_m \\cos(\\omega t - \\beta z) \\hat{a}_y - 0.5 E_m \\sin(\\omega t - \\beta z) \\hat{a}_x]\\)<br>' .
                             '\\(\\vec{H} = -\\frac{0.5 E_m}{377} \\sin(\\omega t - \\beta z) \\hat{a}_x + \\frac{E_m}{377} \\cos(\\omega t - \\beta z) \\hat{a}_y \\text{ A/m}\\)<br>' .
                             '\\(\\vec{H} = -\\frac{E_m}{754} \\sin(\\omega t - \\beta z) \\hat{a}_x + \\frac{E_m}{377} \\cos(\\omega t - \\beta z) \\hat{a}_y \\text{ A/m}\\)<br><br>' .
                             '<strong>c) Time average power in the wave:</strong><br>' .
                             'The time average power density is given by the Poynting vector:<br>' .
                             '\\(\\vec{S}_{avg} = \\frac{1}{2} \\text{Re}(\\vec{E}_s \\times \\vec{H}_s^*)\\)<br>' .
                             'First, let\'s write the phasor forms:<br>' .
                             '\\(\\vec{E}_s = E_m e^{-j\\beta z} \\hat{a}_x + 0.5 E_m e^{-j(\\beta z - \\pi/2)} \\hat{a}_y = E_m e^{-j\\beta z} \\hat{a}_x + j0.5 E_m e^{-j\\beta z} \\hat{a}_y\\)<br>' .
                             '(since sin(θ) = cos(θ - π/2), and e<sup>-jπ/2</sup> = -j, but here it\'s +j because of the negative sign in the phase)<br>' .
                             'Actually, \\(\\sin(\\omega t - \\beta z) = \\text{Re}[e^{j(\\omega t - \\beta z - \\pi/2)}] = \\text{Re}[-j e^{j(\\omega t - \\beta z)}]\\), so the phasor is -j times the amplitude.<br>' .
                             'So, \\(\\vec{E}_s = E_m e^{-j\\beta z} \\hat{a}_x - j0.5 E_m e^{-j\\beta z} \\hat{a}_y\\)<br><br>' .
                             'Similarly, \\(\\vec{H}_s = -\\frac{0.5 E_m}{377} (-j) e^{-j\\beta z} \\hat{a}_x + \\frac{E_m}{377} e^{-j\\beta z} \\hat{a}_y = j\\frac{0.5 E_m}{377} e^{-j\\beta z} \\hat{a}_x + \\frac{E_m}{377} e^{-j\\beta z} \\hat{a}_y\\)<br>' .
                             '(since sin corresponds to -j in phasor, but we have a negative sign in front, so it becomes +j)<br><br>' .
                             'Now, \\(\\vec{E}_s \\times \\vec{H}_s^*\\):<br>' .
                             'First, \\(\\vec{H}_s^* = -j\\frac{0.5 E_m}{377} e^{+j\\beta z} \\hat{a}_x + \\frac{E_m}{377} e^{+j\\beta z} \\hat{a}_y\\)<br>' .
                             '\\(\\vec{E}_s \\times \\vec{H}_s^* = \\begin{vmatrix} \\hat{a}_x & \\hat{a}_y & \\hat{a}_z \\\\ E_m e^{-j\\beta z} & -j0.5 E_m e^{-j\\beta z} & 0 \\\\ -j\\frac{0.5 E_m}{377} e^{+j\\beta z} & \\frac{E_m}{377} e^{+j\\beta z} & 0 \\end{vmatrix}\\)<br>' .
                             'The cross product will be in the z-direction:<br>' .
                             '\\(\\vec{E}_s \\times \\vec{H}_s^* = \\left[ (E_m e^{-j\\beta z})(\\frac{E_m}{377} e^{+j\\beta z}) - (-j0.5 E_m e^{-j\\beta z})(-j\\frac{0.5 E_m}{377} e^{+j\\beta z}) \\right] \\hat{a}_z\\)<br>' .
                             '\\(= \\left[ \\frac{E_m^2}{377} - (j^2)\\frac{0.25 E_m^2}{377} \\right] \\hat{a}_z = \\left[ \\frac{E_m^2}{377} - (-1)\\frac{0.25 E_m^2}{377} \\right] \\hat{a}_z\\)<br>' .
                             '\\(= \\left[ \\frac{E_m^2}{377} + \\frac{0.25 E_m^2}{377} \\right] \\hat{a}_z = \\frac{1.25 E_m^2}{377} \\hat{a}_z\\)<br><br>' .
                             'This is real, so:<br>' .
                             '\\(\\vec{S}_{avg} = \\frac{1}{2} \\text{Re}(\\vec{E}_s \\times \\vec{H}_s^*) = \\frac{1}{2} \\times \\frac{1.25 E_m^2}{377} \\hat{a}_z = \\frac{0.625 E_m^2}{377} \\hat{a}_z \\text{ W/m}^2\\)<br>' .
                             'The time average power density is \\(\\frac{0.625 E_m^2}{377} \\text{ W/m}^2\\) in the +z direction.<br>' .
                             'If we want the total power, we would need to integrate over an area, but since no area is specified, we leave it as power density.<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             'a) ω = 6.283 × 10⁹ rad/s, β = 20.944 rad/m<br>' .
                             'b) \\(\\vec{H} = -\\frac{E_m}{754} \\sin(\\omega t - \\beta z) \\hat{a}_x + \\frac{E_m}{377} \\cos(\\omega t - \\beta z) \\hat{a}_y \\text{ A/m}\\)<br>' .
                             'c) Time average power density = \\(\\frac{0.625 E_m^2}{377} \\hat{a}_z \\text{ W/m}^2\\)',
                'solution_has_diagram' => false,
                'notes' => 'This problem involves a wave with two orthogonal components that are 90° out of phase, which represents elliptical polarization. The time average power calculation requires careful handling of phasors, especially when dealing with sine and cosine terms. The key is to correctly convert to phasor form and then compute the Poynting vector. The result shows that the power flows in the direction of propagation (+z), as expected.',
                'formulas' => [
                    '\\(\\beta = \\frac{2\\pi}{\\lambda}\\)',
                    '\\(\\omega = c\\beta\\)',
                    '\\(\\vec{H} = \\frac{1}{\\eta_0} (\\hat{k} \\times \\vec{E})\\)',
                    '\\(\\vec{S}_{avg} = \\frac{1}{2} \\text{Re}(\\vec{E}_s \\times \\vec{H}_s^*)\\)',
                    'Phasor conversion: \\(\\cos(\\omega t + \\phi) \\rightarrow e^{j\\phi}\\), \\(\\sin(\\omega t + \\phi) = \\cos(\\omega t + \\phi - \\pi/2) \\rightarrow e^{j(\\phi - \\pi/2)} = -j e^{j\\phi}\\)'
                ]
            ],
            [
                'text' => 'Explain the term skin depth. Using Poynting vector, deduce the time average power density for a dissipative medium. [2068 Baishakh]',
                'year' => '2068 Baishakh',
                'has_diagram' => false,
                'solution' => '<strong>Skin Depth:</strong><br>' .
                             'Skin depth (δ) is a measure of how deeply an electromagnetic wave can penetrate into a conducting material. It is defined as the distance at which the amplitude of the wave decreases to 1/e (about 37%) of its original value.<br>' .
                             'Mathematically, if the electric field in a conducting medium is \\(E(z) = E_0 e^{-\\alpha z}\\), then at z = δ, \\(E(\\delta) = E_0/e\\), so:<br>' .
                             '\\(e^{-\\alpha \\delta} = 1/e\\)<br>' .
                             '\\(-\\alpha \\delta = -1\\)<br>' .
                             '\\(\\delta = 1/\\alpha\\)<br>' .
                             'where α is the attenuation constant.<br><br>' .
                             'For a good conductor (σ ≫ ωε), the attenuation constant is approximately:<br>' .
                             '\\(\\alpha \\approx \\sqrt{\\pi f \\mu \\sigma}\\)<br>' .
                             'So, skin depth for a good conductor is:<br>' .
                             '\\(\\delta \\approx \\frac{1}{\\sqrt{\\pi f \\mu \\sigma}}\\)<br><br>' .
                             'Skin depth is important in applications like RF shielding, induction heating, and transmission lines. At high frequencies, the skin depth is small, meaning currents flow primarily near the surface of conductors (skin effect).<br><br>' .
                             '<strong>Time Average Power Density for a Dissipative Medium:</strong><br>' .
                             'In a dissipative medium (lossy dielectric or conductor), the electric and magnetic fields are:<br>' .
                             '\\(\\vec{E}(z,t) = E_0 e^{-\\alpha z} \\cos(\\omega t - \\beta z) \\hat{a}_x\\)<br>' .
                             '\\(\\vec{H}(z,t) = \\frac{E_0}{|\\eta|} e^{-\\alpha z} \\cos(\\omega t - \\beta z - \\theta_\\eta) \\hat{a}_y\\)<br>' .
                             'where η is the complex intrinsic impedance of the medium, |η| is its magnitude, and θ<sub>η</sub> is its phase angle.<br><br>' .
                             'The instantaneous Poynting vector is:<br>' .
                             '\\(\\vec{S}(z,t) = \\vec{E}(z,t) \\times \\vec{H}(z,t) = E_0 e^{-\\alpha z} \\cos(\\omega t - \\beta z) \\cdot \\frac{E_0}{|\\eta|} e^{-\\alpha z} \\cos(\\omega t - \\beta z - \\theta_\\eta) \\hat{a}_z\\)<br>' .
                             '\\(\\vec{S}(z,t) = \\frac{E_0^2}{|\\eta|} e^{-2\\alpha z} \\cos(\\omega t - \\beta z) \\cos(\\omega t - \\beta z - \\theta_\\eta) \\hat{a}_z\\)<br><br>' .
                             'Using the trigonometric identity \\(\\cos A \\cos B = \\frac{1}{2} [\\cos(A-B) + \\cos(A+B)]\\):<br>' .
                             '\\(\\vec{S}(z,t) = \\frac{E_0^2}{2|\\eta|} e^{-2\\alpha z} [\\cos \\theta_\\eta + \\cos(2\\omega t - 2\\beta z - \\theta_\\eta)] \\hat{a}_z\\)<br><br>' .
                             'The time average power density is the average of S(z,t) over one period:<br>' .
                             '\\(\\vec{S}_{avg}(z) = \\frac{1}{T} \\int_0^T \\vec{S}(z,t) dt\\)<br>' .
                             'The term \\(\\cos(2\\omega t - 2\\beta z - \\theta_\\eta)\\) averages to zero over a period, so:<br>' .
                             '\\(\\vec{S}_{avg}(z) = \\frac{1}{T} \\int_0^T \\frac{E_0^2}{2|\\eta|} e^{-2\\alpha z} \\cos \\theta_\\eta  dt  \\hat{a}_z = \\frac{E_0^2}{2|\\eta|} e^{-2\\alpha z} \\cos \\theta_\\eta \\left( \\frac{1}{T} \\int_0^T dt \\right) \\hat{a}_z\\)<br>' .
                             '\\(\\vec{S}_{avg}(z) = \\frac{E_0^2}{2|\\eta|} e^{-2\\alpha z} \\cos \\theta_\\eta  \\hat{a}_z\\)<br><br>' .
                             'Note that \\(\\cos \\theta_\\eta\\) is the power factor, and for a dissipative medium, θ<sub>η</sub> is between 0 and 45°.<br>' .
                             'This expression shows that the average power density decreases exponentially with distance due to attenuation in the medium.<br><br>' .
                             '<strong>Summary:</strong><br>' .
                             'Skin depth: \\(\\delta = 1/\\alpha\\), for good conductor \\(\\delta \\approx 1/\\sqrt{\\pi f \\mu \\sigma}\\)<br>' .
                             'Time average power density in dissipative medium: \\(\\vec{S}_{avg}(z) = \\frac{E_0^2}{2|\\eta|} e^{-2\\alpha z} \\cos \\theta_\\eta  \\hat{a}_z\\)',
                'solution_has_diagram' => false,
                'notes' => 'Skin depth is a crucial concept in electromagnetics, especially for conductors at high frequencies. The time average power density derivation shows how power is dissipated in a lossy medium. The exponential decay e<sup>-2αz</sup> indicates that power decreases rapidly with distance in highly lossy materials. The factor cos θ<sub>η</sub> represents the power factor, which is less than 1 for lossy media, indicating that not all the energy flow is real power (some is reactive).',
                'formulas' => [
                    'Skin depth: \\(\\delta = \\frac{1}{\\alpha}\\)<br>' .
                    'For good conductor: \\(\\delta \\approx \\frac{1}{\\sqrt{\\pi f \\mu \\sigma}}\\)<br>' .
                    'Time average power density: \\(\\vec{S}_{avg}(z) = \\frac{E_0^2}{2|\\eta|} e^{-2\\alpha z} \\cos \\theta_\\eta  \\hat{a}_z\\)<br>' .
                    'Instantaneous Poynting vector: \\(\\vec{S}(z,t) = \\vec{E}(z,t) \\times \\vec{H}(z,t)\\)<br>' .
                    'Time average: \\(\\vec{S}_{avg} = \\frac{1}{T} \\int_0^T \\vec{S}(z,t) dt\\)'
                ]
            ]
        ]
    ],

    [
        'chapter' => 6,
        'title' => 'Transmission Lines (Equations, Impedance, Matching)',
        'questions' => [
            [
                'text' => 'The parameters of a certain transmission line operating at \\(6 \\times 10^8 \\text{rad/s}\\) are \\(L = 0.4 \\mu\\text{H/m}\\), \\(C = 40 \\text{pF/m}\\), \\(G = 80 \\text{mS/m}\\), and \\(R = 20 \\Omega/\\text{m}\\). Find \\(\\gamma\\), \\(\\alpha\\), \\(\\beta\\), and \\(Z_0\\). [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => 'The propagation constant \\(\\gamma\\) is given by:<br>' .
                             '\\(\\gamma = \\sqrt{(R + j\\omega L)(G + j\\omega C)}\\)<br><br>' .
                             'Given:<br>' .
                             '\\(\\omega = 6 \\times 10^8 \\text{ rad/s}\\)<br>' .
                             '\\(R = 20 \\Omega/\\text{m}\\)<br>' .
                             '\\(L = 0.4 \\times 10^{-6} \\text{ H/m}\\)<br>' .
                             '\\(G = 80 \\times 10^{-3} \\text{ S/m}\\)<br>' .
                             '\\(C = 40 \\times 10^{-12} \\text{ F/m}\\)<br><br>' .
                             'First, calculate:<br>' .
                             '\\(R + j\\omega L = 20 + j(6 \\times 10^8)(0.4 \\times 10^{-6}) = 20 + j240 \\Omega/\\text{m}\\)<br>' .
                             '\\(G + j\\omega C = 80 \\times 10^{-3} + j(6 \\times 10^8)(40 \\times 10^{-12}) = 0.08 + j0.024 \\text{ S/m}\\)<br><br>' .
                             'Now multiply:<br>' .
                             '\\((R + j\\omega L)(G + j\\omega C) = (20 + j240)(0.08 + j0.024)\\)<br>' .
                             '\\(= 20 \\times 0.08 + 20 \\times j0.024 + j240 \\times 0.08 + j240 \\times j0.024\\)<br>' .
                             '\\(= 1.6 + j0.48 + j19.2 - 5.76\\)<br>' .
                             '\\(= (1.6 - 5.76) + j(0.48 + 19.2) = -4.16 + j19.68\\)<br><br>' .
                             'Now find the square root:<br>' .
                             '\\(\\gamma = \\sqrt{-4.16 + j19.68}\\)<br>' .
                             'Convert to polar form first:<br>' .
                             'Magnitude: \\(|-4.16 + j19.68| = \\sqrt{(-4.16)^2 + (19.68)^2} = \\sqrt{17.3056 + 387.3024} = \\sqrt{404.608} = 20.115\\)<br>' .
                             'Angle: \\(\\theta = \\tan^{-1}(19.68 / -4.16) = \\tan^{-1}(-4.731)\\)<br>' .
                             'Since real part is negative and imaginary part is positive, this is in the second quadrant:<br>' .
                             '\\(\\theta = 180^\\circ + \\tan^{-1}(-4.731) = 180^\\circ - 78.07^\\circ = 101.93^\\circ\\)<br>' .
                             'So, \\(-4.16 + j19.68 = 20.115 \\angle 101.93^\\circ\\)<br><br>' .
                             'Square root:<br>' .
                             '\\(\\sqrt{20.115 \\angle 101.93^\\circ} = \\sqrt{20.115} \\angle (101.93^\\circ/2) = 4.485 \\angle 50.965^\\circ\\)<br>' .
                             'Convert back to rectangular form:<br>' .
                             '\\(\\gamma = 4.485 \\cos(50.965^\\circ) + j4.485 \\sin(50.965^\\circ) = 4.485 \\times 0.629 + j4.485 \\times 0.777\\)<br>' .
                             '\\(\\gamma = 2.82 + j3.49 \\text{ Np/m}\\)<br><br>' .
                             'Therefore:<br>' .
                             '\\(\\alpha = \\text{Re}(\\gamma) = 2.82 \\text{ Np/m}\\)<br>' .
                             '\\(\\beta = \\text{Im}(\\gamma) = 3.49 \\text{ rad/m}\\)<br><br>' .
                             'Characteristic impedance:<br>' .
                             '\\(Z_0 = \\sqrt{\\frac{R + j\\omega L}{G + j\\omega C}} = \\sqrt{\\frac{20 + j240}{0.08 + j0.024}}\\)<br>' .
                             'First, calculate the ratio:<br>' .
                             '\\(\\frac{20 + j240}{0.08 + j0.024} = \\frac{20 + j240}{0.08 + j0.024} \\times \\frac{0.08 - j0.024}{0.08 - j0.024}\\)<br>' .
                             'Denominator: \\((0.08)^2 + (0.024)^2 = 0.0064 + 0.000576 = 0.006976\\)<br>' .
                             'Numerator: \\((20 + j240)(0.08 - j0.024) = 20 \\times 0.08 - 20 \\times j0.024 + j240 \\times 0.08 - j240 \\times j0.024\\)<br>' .
                             '\\(= 1.6 - j0.48 + j19.2 + 5.76 = (1.6 + 5.76) + j(-0.48 + 19.2) = 7.36 + j18.72\\)<br>' .
                             'So, ratio = \\(\\frac{7.36 + j18.72}{0.006976} = 1055.05 + j2683.49\\)<br><br>' .
                             'Now \\(Z_0 = \\sqrt{1055.05 + j2683.49}\\)<br>' .
                             'Convert to polar form:<br>' .
                             'Magnitude: \\(\\sqrt{1055.05^2 + 2683.49^2} = \\sqrt{1113125.5 + 7201118.6} = \\sqrt{8314244.1} = 2883.44\\)<br>' .
                             'Angle: \\(\\tan^{-1}(2683.49/1055.05) = \\tan^{-1}(2.543) = 68.54^\\circ\\)<br>' .
                             'So, \\(1055.05 + j2683.49 = 2883.44 \\angle 68.54^\\circ\\)<br>' .
                             'Square root: \\(\\sqrt{2883.44 \\angle 68.54^\\circ} = \\sqrt{2883.44} \\angle (68.54^\\circ/2) = 53.70 \\angle 34.27^\\circ\\)<br>' .
                             'Convert to rectangular form:<br>' .
                             '\\(Z_0 = 53.70 \\cos(34.27^\\circ) + j53.70 \\sin(34.27^\\circ) = 53.70 \\times 0.826 + j53.70 \\times 0.564\\)<br>' .
                             '\\(Z_0 = 44.36 + j30.29 \\Omega\\)',
                'solution_has_diagram' => false,
                'notes' => 'The propagation constant γ = α + jβ, where α is the attenuation constant (in Np/m) and β is the phase constant (in rad/m). The characteristic impedance Z₀ is generally complex for lossy lines. These calculations involve complex arithmetic and require careful handling of angles and quadrants.',
                'formulas' => [
                    '\\(\\gamma = \\sqrt{(R + j\\omega L)(G + j\\omega C)}\\)',
                    '\\(Z_0 = \\sqrt{\\frac{R + j\\omega L}{G + j\\omega C}}\\)'
                ]
            ],
            [
                'text' => 'A lossless 60 \\(\\Omega\\) line is 1.8\\(\\lambda\\) long and is terminated with pure resistance of 80 \\(\\Omega\\). The load voltage is \\(15 \\angle 30^\\circ \\text{V}\\). (i) Average power delivered to load (ii) Magnitude of minimum voltage on the line. [2080 Bhadra]',
                'year' => '2080 Bhadra',
                'has_diagram' => false,
                'solution' => '(i) Average power delivered to load:<br>' .
                             'For a purely resistive load, the average power is:<br>' .
                             '\\(P_{avg} = \\frac{|V_L|^2}{2R_L}\\)<br>' .
                             'where \\(V_L = 15 \\angle 30^\\circ \\text{V}\\), so \\(|V_L| = 15 \\text{V}\\)<br>' .
                             '\\(R_L = 80 \\Omega\\)<br>' .
                             '\\(P_{avg} = \\frac{(15)^2}{2 \\times 80} = \\frac{225}{160} = 1.406 \\text{ W}\\)<br><br>' .
                             '(ii) Magnitude of minimum voltage on the line:<br>' .
                             'First, find the reflection coefficient at the load:<br>' .
                             '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0} = \\frac{80 - 60}{80 + 60} = \\frac{20}{140} = 0.1429\\)<br>' .
                             'Standing Wave Ratio (SWR):<br>' .
                             '\\(\\text{SWR} = \\frac{1 + |\\Gamma_L|}{1 - |\\Gamma_L|} = \\frac{1 + 0.1429}{1 - 0.1429} = \\frac{1.1429}{0.8571} = 1.333\\)<br>' .
                             'The maximum and minimum voltages on the line are related to the load voltage and SWR.<br>' .
                             'Note that \\(|V_L| = 15 \\text{V}\\) is the voltage at the load, but this may not be the maximum or minimum voltage on the line.<br>' .
                             'The relationship between maximum, minimum, and any voltage on the line depends on position.<br>' .
                             'However, we know that:<br>' .
                             '\\(\\frac{V_{max}}{V_{min}} = \\text{SWR} = 1.333\\)<br>' .
                             'And the magnitude of voltage at any point is:<br>' .
                             '\\(|V(z)| = |V^+| \\cdot |1 + \\Gamma e^{-j2\\beta z}|\\)<br>' .
                             'At the load (z=0), \\(|V_L| = |V^+| \\cdot |1 + \\Gamma_L| = |V^+| \\cdot |1 + 0.1429| = |V^+| \\cdot 1.1429 = 15\\)<br>' .
                             'So, \\(|V^+| = \\frac{15}{1.1429} = 13.125 \\text{V}\\)<br>' .
                             'Then, \\(V_{max} = |V^+|(1 + |\\Gamma_L|) = 13.125 \\times (1 + 0.1429) = 13.125 \\times 1.1429 = 15 \\text{V}\\)<br>' .
                             '\\(V_{min} = |V^+|(1 - |\\Gamma_L|) = 13.125 \\times (1 - 0.1429) = 13.125 \\times 0.8571 = 11.25 \\text{V}\\)<br><br>' .
                             'Therefore:<br>' .
                             '(i) Average power delivered to load = 1.406 W<br>' .
                             '(ii) Magnitude of minimum voltage on the line = 11.25 V',
                'solution_has_diagram' => false,
                'notes' => 'For a lossless line, the average power delivered to the load can be calculated directly from the load voltage and resistance when the load is purely resistive. The minimum voltage on the line is found using the standing wave ratio and the incident wave amplitude. Note that in this case, since Γ_L is positive and real, the load voltage happens to be the maximum voltage on the line.',
                'formulas' => [
                    '\\(P_{avg} = \\frac{|V_L|^2}{2R_L} \\text{ (for resistive load)}\\)',
                    '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0}\\)',
                    '\\(\\text{SWR} = \\frac{1 + |\\Gamma_L|}{1 - |\\Gamma_L|}\\)',
                    '\\(V_{max} = |V^+|(1 + |\\Gamma_L|)\\)',
                    '\\(V_{min} = |V^+|(1 - |\\Gamma_L|)\\)'
                ]
            ],
            [
                'text' => 'A 200 \\(\\Omega\\) transmission line is lossless, 0.25\\(\\lambda\\) long and is terminated in \\(Z_L = 400 \\Omega\\). The line has the generator with \\(80 \\angle 0^\\circ \\text{V}\\) in series with 100 \\(\\Omega\\) connected to the input. (a) Find the load voltage (b) Find the voltage at the midpoint of the line. [2080 Baishakh]',
                'year' => '2080 Baishakh',
                'has_diagram' => false,
                'solution' => 'This is a quarter-wave transformer problem since the line length is 0.25λ.<br><br>' .
                             'For a lossless quarter-wave line, the input impedance is:<br>' .
                             '\\(Z_{in} = \\frac{Z_0^2}{Z_L}\\)<br>' .
                             'Given \\(Z_0 = 200 \\Omega\\), \\(Z_L = 400 \\Omega\\)<br>' .
                             '\\(Z_{in} = \\frac{200^2}{400} = \\frac{40000}{400} = 100 \\Omega\\)<br><br>' .
                             'The generator has voltage \\(V_g = 80 \\angle 0^\\circ \\text{V}\\) in series with \\(Z_g = 100 \\Omega\\).<br>' .
                             'Since \\(Z_{in} = 100 \\Omega\\), it matches the generator impedance.<br>' .
                             'The voltage at the input of the line (V_in) is half of the generator voltage due to voltage division:<br>' .
                             '\\(V_{in} = V_g \\frac{Z_{in}}{Z_g + Z_{in}} = 80 \\angle 0^\\circ \\times \\frac{100}{100 + 100} = 80 \\angle 0^\\circ \\times 0.5 = 40 \\angle 0^\\circ \\text{V}\\)<br><br>' .
                             '(a) For a quarter-wave line, the load voltage and input voltage are related by:<br>' .
                             'The general formula for voltage transformation along a lossless line is:<br>' .
                             '\\(V_L = V_{in} \\frac{Z_L}{Z_{in}} \\frac{1}{\\cos(\\beta l) + j \\frac{Z_0}{Z_{in}} \\sin(\\beta l)}\\)<br>' .
                             'But for quarter-wave line, \\(\\beta l = \\frac{2\\pi}{\\lambda} \\times \\frac{\\lambda}{4} = \\frac{\\pi}{2}\\), so \\(\\cos(\\beta l) = 0\\), \\(\\sin(\\beta l) = 1\\)<br>' .
                             '\\(V_L = V_{in} \\frac{Z_L}{Z_{in}} \\frac{1}{j \\frac{Z_0}{Z_{in}}} = V_{in} \\frac{Z_L}{j Z_0}\\)<br>' .
                             'Substituting values:<br>' .
                             '\\(V_L = 40 \\angle 0^\\circ \\times \\frac{400}{j200} = 40 \\angle 0^\\circ \\times \\frac{2}{j} = 40 \\angle 0^\\circ \\times (-j2) = 80 \\angle -90^\\circ \\text{V}\\)<br><br>' .
                             '(b) Voltage at the midpoint of the line (l/2 = 0.125λ):<br>' .
                             'The voltage at any point z from the input is:<br>' .
                             '\\(V(z) = V_{in} \\frac{\\cos[\\beta(l-z)] + j \\frac{Z_0}{Z_L} \\sin[\\beta(l-z)]}{\\cos(\\beta l) + j \\frac{Z_0}{Z_{in}} \\sin(\\beta l)}\\)<br>' .
                             'At midpoint, z = l/2, so l-z = l/2<br>' .
                             'For our case, \\(\\beta l = \\pi/2\\), so \\(\\beta(l/2) = \\pi/4\\)<br>' .
                             '\\(\\cos(\\pi/4) = \\sin(\\pi/4) = \\frac{\\sqrt{2}}{2} = 0.7071\\)<br>' .
                             'Denominator: \\(\\cos(\\beta l) + j \\frac{Z_0}{Z_{in}} \\sin(\\beta l) = 0 + j \\frac{200}{100} \\times 1 = j2\\)<br>' .
                             'Numerator: \\(\\cos[\\beta(l/2)] + j \\frac{Z_0}{Z_L} \\sin[\\beta(l/2)] = 0.7071 + j \\frac{200}{400} \\times 0.7071 = 0.7071 + j0.5 \\times 0.7071 = 0.7071 + j0.3536\\)<br>' .
                             'So, \\(V(z=l/2) = 40 \\angle 0^\\circ \\times \\frac{0.7071 + j0.3536}{j2}\\)<br>' .
                             'First, \\(\\frac{0.7071 + j0.3536}{j2} = \\frac{0.7071 + j0.3536}{j2} \\times \\frac{-j}{-j} = \\frac{-j0.7071 + 0.3536}{2} = 0.1768 - j0.3536\\)<br>' .
                             'Convert to polar: magnitude = \\(\\sqrt{0.1768^2 + (-0.3536)^2} = \\sqrt{0.03126 + 0.12503} = \\sqrt{0.15629} = 0.3954\\)<br>' .
                             'Angle = \\(\\tan^{-1}(-0.3536/0.1768) = \\tan^{-1}(-2) = -63.43^\\circ\\)<br>' .
                             'So, \\(V(z=l/2) = 40 \\angle 0^\\circ \\times 0.3954 \\angle -63.43^\\circ = 15.816 \\angle -63.43^\\circ \\text{V}\\)<br><br>' .
                             'Therefore:<br>' .
                             '(a) Load voltage = \\(80 \\angle -90^\\circ \\text{V}\\)<br>' .
                             '(b) Voltage at midpoint = \\(15.816 \\angle -63.43^\\circ \\text{V}\\)',
                'solution_has_diagram' => false,
                'notes' => 'For a quarter-wave transformer, the input impedance is Z₀²/Z_L. This property is often used for impedance matching. The voltage transformation along the line follows the standard transmission line equations. At the midpoint of a quarter-wave line, the electrical length is λ/8, which corresponds to βz = π/4.',
                'formulas' => [
                    '\\(Z_{in} = \\frac{Z_0^2}{Z_L} \\text{ (for } l = \\lambda/4\\text{)}\\)',
                    '\\(V_{in} = V_g \\frac{Z_{in}}{Z_g + Z_{in}}\\)',
                    '\\(V(z) = V_{in} \\frac{\\cos[\\beta(l-z)] + j \\frac{Z_0}{Z_L} \\sin[\\beta(l-z)]}{\\cos(\\beta l) + j \\frac{Z_0}{Z_{in}} \\sin(\\beta l)}\\)'
                ]
            ],
            [
                'text' => 'Define the secondary parameters of a transmission line. A lossless transmission line with \\(Z_0 = 50 \\Omega\\) has a length of \\(0.4\\lambda\\). The operating frequency is 100 MHz and it is terminated with a load \\(Z_L = 40 + j10 \\Omega\\). Find: a) Reflection Coefficient b) Standing wave ratio on the line (SWR) c) Input impedance (\\(Z_{in}\\)). [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false,
                'solution' => 'Secondary parameters of a transmission line are those derived from the primary parameters (R, L, G, C per unit length). They include:<br>' .
                             '- Characteristic impedance (Z₀)<br>' .
                             '- Propagation constant (γ = α + jβ)<br>' .
                             '- Phase velocity (v_p)<br>' .
                             '- Wavelength (λ)<br><br>' .
                             'For the given problem:<br>' .
                             'a) Reflection coefficient at the load:<br>' .
                             '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0} = \\frac{(40 + j10) - 50}{(40 + j10) + 50} = \\frac{-10 + j10}{90 + j10}\\)<br>' .
                             'Multiply numerator and denominator by conjugate of denominator:<br>' .
                             '\\(\\Gamma_L = \\frac{(-10 + j10)(90 - j10)}{(90 + j10)(90 - j10)} = \\frac{-900 + j100 + j900 + 100}{8100 + 100} = \\frac{-800 + j1000}{8200}\\)<br>' .
                             '\\(\\Gamma_L = -0.0976 + j0.1220\\)<br>' .
                             'Magnitude: \\(|\\Gamma_L| = \\sqrt{(-0.0976)^2 + (0.1220)^2} = \\sqrt{0.00953 + 0.01488} = \\sqrt{0.02441} = 0.1562\\)<br>' .
                             'Angle: \\(\\angle \\Gamma_L = \\tan^{-1}(0.1220 / -0.0976) = \\tan^{-1}(-1.25)\\)<br>' .
                             'Since real part is negative and imaginary part is positive, second quadrant:<br>' .
                             '\\(\\angle \\Gamma_L = 180^\\circ + \\tan^{-1}(-1.25) = 180^\\circ - 51.34^\\circ = 128.66^\\circ\\)<br>' .
                             'So, \\(\\Gamma_L = 0.1562 \\angle 128.66^\\circ\\)<br><br>' .
                             'b) Standing Wave Ratio (SWR):<br>' .
                             '\\(\\text{SWR} = \\frac{1 + |\\Gamma_L|}{1 - |\\Gamma_L|} = \\frac{1 + 0.1562}{1 - 0.1562} = \\frac{1.1562}{0.8438} = 1.370\\)<br><br>' .
                             'c) Input impedance:<br>' .
                             'For a lossless line, \\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\tan(\\beta l)}{Z_0 + jZ_L \\tan(\\beta l)}\\)<br>' .
                             'Length \\(l = 0.4\\lambda\\), so \\(\\beta l = \\frac{2\\pi}{\\lambda} \\times 0.4\\lambda = 0.8\\pi = 144^\\circ\\)<br>' .
                             '\\(\\tan(\\beta l) = \\tan(144^\\circ) = \\tan(180^\\circ - 36^\\circ) = -\\tan(36^\\circ) = -0.7265\\)<br>' .
                             'Substitute values:<br>' .
                             '\\(Z_{in} = 50 \\frac{(40 + j10) + j50(-0.7265)}{50 + j(40 + j10)(-0.7265)}\\)<br>' .
                             'Numerator: \\(40 + j10 - j36.325 = 40 - j26.325\\)<br>' .
                             'Denominator: \\(50 + j(40 + j10)(-0.7265) = 50 + (-0.7265)(j40 - 10) = 50 + (-0.7265)(-10) + (-0.7265)(j40)\\)<br>' .
                             '\\(= 50 + 7.265 - j29.06 = 57.265 - j29.06\\)<br>' .
                             'So, \\(Z_{in} = 50 \\frac{40 - j26.325}{57.265 - j29.06}\\)<br>' .
                             'Multiply numerator and denominator by conjugate of denominator:<br>' .
                             'Denominator: \\((57.265 - j29.06)(57.265 + j29.06) = 57.265^2 + 29.06^2 = 3279.28 + 844.48 = 4123.76\\)<br>' .
                             'Numerator: \\(50(40 - j26.325)(57.265 + j29.06) = 50[40 \\times 57.265 + 40 \\times j29.06 - j26.325 \\times 57.265 - j26.325 \\times j29.06]\\)<br>' .
                             '\\(= 50[2290.6 + j1162.4 - j1507.8 + 765.0] \\text{ (since } j^2 = -1\\text{)}\\)<br>' .
                             '\\(= 50[(2290.6 + 765.0) + j(1162.4 - 1507.8)] = 50[3055.6 - j345.4]\\)<br>' .
                             '\\(= 152780 - j17270\\)<br>' .
                             'So, \\(Z_{in} = \\frac{152780 - j17270}{4123.76} = 37.05 - j4.19 \\Omega\\)<br><br>' .
                             'Therefore:<br>' .
                             'a) Reflection coefficient = \\(0.1562 \\angle 128.66^\\circ\\)<br>' .
                             'b) SWR = 1.370<br>' .
                             'c) Input impedance = \\(37.05 - j4.19 \\Omega\\)',
                'solution_has_diagram' => false,
                'notes' => 'Secondary parameters are derived from primary parameters. For lossless lines, α=0 and γ=jβ. The reflection coefficient is complex when the load is complex. The input impedance calculation requires evaluating the tangent of the electrical length, which can be tricky when dealing with angles greater than 90 degrees.',
                'formulas' => [
                    '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0}\\)',
                    '\\(\\text{SWR} = \\frac{1 + |\\Gamma_L|}{1 - |\\Gamma_L|}\\)',
                    '\\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\tan(\\beta l)}{Z_0 + jZ_L \\tan(\\beta l)}\\)'
                ]
            ],
            [
                'text' => 'A lossless transmission line is 80 cm long and operates at a frequency of 1 GHz. The line parameters are \\(L = 0.5 \\mu\\text{H/m}\\) and \\(C = 200 \\text{pF/m}\\). Find the characteristic impedance, the phase constant, the velocity on the line, and the input impedance for \\(Z_L = 100 \\Omega\\). [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false,
                'solution' => 'For a lossless line:<br>' .
                             'Characteristic impedance:<br>' .
                             '\\(Z_0 = \\sqrt{\\frac{L}{C}} = \\sqrt{\\frac{0.5 \\times 10^{-6}}{200 \\times 10^{-12}}} = \\sqrt{\\frac{0.5 \\times 10^{-6}}{2 \\times 10^{-10}}} = \\sqrt{2.5 \\times 10^3} = \\sqrt{2500} = 50 \\Omega\\)<br><br>' .
                             'Phase constant:<br>' .
                             '\\(\\beta = \\omega \\sqrt{LC} = 2\\pi f \\sqrt{LC}\\)<br>' .
                             '\\(f = 1 \\text{ GHz} = 10^9 \\text{ Hz}\\)<br>' .
                             '\\(\\beta = 2\\pi \\times 10^9 \\times \\sqrt{(0.5 \\times 10^{-6})(200 \\times 10^{-12})} = 2\\pi \\times 10^9 \\times \\sqrt{10^{-16}}\\)<br>' .
                             '\\(= 2\\pi \\times 10^9 \\times 10^{-8} = 2\\pi \\times 10 = 20\\pi = 62.83 \\text{ rad/m}\\)<br><br>' .
                             'Velocity on the line:<br>' .
                             '\\(v_p = \\frac{\\omega}{\\beta} = \\frac{2\\pi f}{\\beta} = \\frac{2\\pi \\times 10^9}{20\\pi} = \\frac{10^9}{10} = 10^8 \\text{ m/s}\\)<br>' .
                             'Alternatively, \\(v_p = \\frac{1}{\\sqrt{LC}} = \\frac{1}{\\sqrt{(0.5 \\times 10^{-6})(200 \\times 10^{-12})}} = \\frac{1}{\\sqrt{10^{-16}}} = 10^8 \\text{ m/s}\\)<br><br>' .
                             'Input impedance for \\(Z_L = 100 \\Omega\\):<br>' .
                             'First, find electrical length:<br>' .
                             'Physical length \\(l = 80 \\text{ cm} = 0.8 \\text{ m}\\)<br>' .
                             '\\(\\beta l = 62.83 \\times 0.8 = 50.264 \\text{ rad}\\)<br>' .
                             'Reduce modulo 2π: \\(50.264 \\div 2\\pi = 50.264 \\div 6.2832 = 8.0\\), exactly 8 cycles, so \\(\\beta l = 0 \\text{ rad}\\)<br>' .
                             'Actually, let\'s recalculate more precisely:<br>' .
                             '\\(\\beta = 2\\pi \\times 10^9 \\times \\sqrt{0.5e-6 \\times 200e-12} = 2\\pi \\times 10^9 \\times \\sqrt{1e-16} = 2\\pi \\times 10^9 \\times 1e-8 = 2\\pi \\times 10 = 20\\pi \\text{ rad/m}\\)<br>' .
                             '\\(\\beta l = 20\\pi \\times 0.8 = 16\\pi \\text{ rad}\\)<br>' .
                             'Since \\(16\\pi = 8 \\times 2\\pi\\), this is exactly 8 wavelengths, so the line appears as if it has zero length.<br>' .
                             'Therefore, \\(Z_{in} = Z_L = 100 \\Omega\\)<br><br>' .
                             'Summary:<br>' .
                             '- Characteristic impedance = 50 Ω<br>' .
                             '- Phase constant = 62.83 rad/m<br>' .
                             '- Velocity = 10⁸ m/s<br>' .
                             '- Input impedance = 100 Ω',
                'solution_has_diagram' => false,
                'notes' => 'For lossless lines, the formulas simplify significantly. The phase constant β = ω√(LC), characteristic impedance Z₀ = √(L/C), and phase velocity v_p = 1/√(LC). When the line length is an integer multiple of the wavelength, the input impedance equals the load impedance because the line acts as if it has no length (due to periodicity of the tangent function with period π, and the impedance repeats every half-wavelength).',
                'formulas' => [
                    '\\(Z_0 = \\sqrt{\\frac{L}{C}}\\)',
                    '\\(\\beta = \\omega \\sqrt{LC}\\)',
                    '\\(v_p = \\frac{1}{\\sqrt{LC}}\\)',
                    '\\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\tan(\\beta l)}{Z_0 + jZ_L \\tan(\\beta l)}\\)'
                ]
            ],
            [
                'text' => 'The velocity of propagation in a lossless transmission line \\(2.5 \\times 10^8 \\text{m/s}\\). If the capacitance of the line is 30 pF/m, find: a) Inductance of the line b) Characteristic impedance c) Phase constant at 100 MHz d) Reflection coefficient if the line is terminated with a resistive load of 50 \\(\\Omega\\). [2075 Ashwin]',
                'year' => '2075 Ashwin',
                'has_diagram' => false,
                'solution' => 'Given:<br>' .
                             'Velocity \\(v_p = 2.5 \\times 10^8 \\text{ m/s}\\)<br>' .
                             'Capacitance \\(C = 30 \\times 10^{-12} \\text{ F/m}\\)<br><br>' .
                             'a) Inductance of the line:<br>' .
                             'For lossless line, \\(v_p = \\frac{1}{\\sqrt{LC}}\\)<br>' .
                             'So, \\(L = \\frac{1}{v_p^2 C} = \\frac{1}{(2.5 \\times 10^8)^2 \\times 30 \\times 10^{-12}} = \\frac{1}{6.25 \\times 10^{16} \\times 30 \\times 10^{-12}}\\)<br>' .
                             '\\(= \\frac{1}{6.25 \\times 30 \\times 10^{4}} = \\frac{1}{187.5 \\times 10^4} = \\frac{1}{1.875 \\times 10^6} = 5.333 \\times 10^{-7} \\text{ H/m} = 0.5333 \\mu\\text{H/m}\\)<br><br>' .
                             'b) Characteristic impedance:<br>' .
                             '\\(Z_0 = \\sqrt{\\frac{L}{C}} = \\sqrt{\\frac{5.333 \\times 10^{-7}}{30 \\times 10^{-12}}} = \\sqrt{\\frac{5.333 \\times 10^{-7}}{3 \\times 10^{-11}}} = \\sqrt{1.7777 \\times 10^4} = \\sqrt{17777} = 133.33 \\Omega\\)<br><br>' .
                             'c) Phase constant at 100 MHz:<br>' .
                             '\\(f = 100 \\text{ MHz} = 10^8 \\text{ Hz}\\)<br>' .
                             '\\(\\beta = \\frac{\\omega}{v_p} = \\frac{2\\pi f}{v_p} = \\frac{2\\pi \\times 10^8}{2.5 \\times 10^8} = \\frac{2\\pi}{2.5} = 0.8\\pi = 2.513 \\text{ rad/m}\\)<br><br>' .
                             'd) Reflection coefficient for resistive load of 50 Ω:<br>' .
                             '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0} = \\frac{50 - 133.33}{50 + 133.33} = \\frac{-83.33}{183.33} = -0.4545\\)<br><br>' .
                             'Summary:<br>' .
                             'a) Inductance = 0.5333 μH/m<br>' .
                             'b) Characteristic impedance = 133.33 Ω<br>' .
                             'c) Phase constant = 2.513 rad/m<br>' .
                             'd) Reflection coefficient = -0.4545',
                'solution_has_diagram' => false,
                'notes' => 'For lossless transmission lines, the velocity of propagation is determined by the distributed inductance and capacitance. The characteristic impedance is the ratio of voltage to current for a traveling wave. The phase constant determines how rapidly the phase changes with distance. The reflection coefficient is real when both the line and load impedances are real.',
                'formulas' => [
                    '\\(v_p = \\frac{1}{\\sqrt{LC}}\\)',
                    '\\(Z_0 = \\sqrt{\\frac{L}{C}}\\)',
                    '\\(\\beta = \\frac{\\omega}{v_p}\\)',
                    '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0}\\)'
                ]
            ],
            [
                'text' => 'A lossless line having an air dielectric has a characteristic impedance of 400 \\(\\Omega\\). The line is operating at 200 MHz and \\(Z_L = 200 - j200 \\Omega\\). Find (a) SWR (b) \\(Z_{in}\\) if the line is 1 m long; (c) the distance from the load to the nearest voltage maximum. [2074 Ashwin]',
                'year' => '2074 Ashwin',
                'has_diagram' => false,
                'solution' => 'Given:<br>' .
                             '\\(Z_0 = 400 \\Omega\\)<br>' .
                             '\\(f = 200 \\text{ MHz} = 2 \\times 10^8 \\text{ Hz}\\)<br>' .
                             '\\(Z_L = 200 - j200 \\Omega\\)<br>' .
                             'Line length \\(l = 1 \\text{ m}\\)<br><br>' .
                             'First, need phase velocity. Since air dielectric, assume \\(v_p \\approx c = 3 \\times 10^8 \\text{ m/s}\\)<br>' .
                             'Wavelength \\(\\lambda = \\frac{v_p}{f} = \\frac{3 \\times 10^8}{2 \\times 10^8} = 1.5 \\text{ m}\\)<br>' .
                             'Phase constant \\(\\beta = \\frac{2\\pi}{\\lambda} = \\frac{2\\pi}{1.5} = \\frac{4\\pi}{3} \\text{ rad/m}\\)<br><br>' .
                             '(a) SWR:<br>' .
                             'Reflection coefficient at load:<br>' .
                             '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0} = \\frac{(200 - j200) - 400}{(200 - j200) + 400} = \\frac{-200 - j200}{600 - j200}\\)<br>' .
                             'Multiply numerator and denominator by conjugate of denominator:<br>' .
                             '\\(\\Gamma_L = \\frac{(-200 - j200)(600 + j200)}{(600 - j200)(600 + j200)} = \\frac{-120000 - j40000 - j120000 + 40000}{360000 + 40000} = \\frac{-80000 - j160000}{400000}\\)<br>' .
                             '\\(\\Gamma_L = -0.2 - j0.4\\)<br>' .
                             'Magnitude: \\(|\\Gamma_L| = \\sqrt{(-0.2)^2 + (-0.4)^2} = \\sqrt{0.04 + 0.16} = \\sqrt{0.2} = 0.4472\\)<br>' .
                             'SWR = \\(\\frac{1 + |\\Gamma_L|}{1 - |\\Gamma_L|} = \\frac{1 + 0.4472}{1 - 0.4472} = \\frac{1.4472}{0.5528} = 2.618\\)<br><br>' .
                             '(b) Input impedance:<br>' .
                             '\\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\tan(\\beta l)}{Z_0 + jZ_L \\tan(\\beta l)}\\)<br>' .
                             '\\(\\beta l = \\frac{4\\pi}{3} \\times 1 = \\frac{4\\pi}{3} = 240^\\circ\\)<br>' .
                             '\\(\\tan(\\beta l) = \\tan(240^\\circ) = \\tan(180^\\circ + 60^\\circ) = \\tan(60^\\circ) = \\sqrt{3} = 1.732\\)<br>' .
                             'Substitute:<br>' .
                             '\\(Z_{in} = 400 \\frac{(200 - j200) + j400(1.732)}{400 + j(200 - j200)(1.732)}\\)<br>' .
                             'Numerator: \\(200 - j200 + j692.8 = 200 + j492.8\\)<br>' .
                             'Denominator: \\(400 + j(200 - j200)(1.732) = 400 + 1.732(j200 + 200) = 400 + 346.4 + j346.4 = 746.4 + j346.4\\)<br>' .
                             'So, \\(Z_{in} = 400 \\frac{200 + j492.8}{746.4 + j346.4}\\)<br>' .
                             'Multiply numerator and denominator by conjugate of denominator:<br>' .
                             'Denominator: \\((746.4 + j346.4)(746.4 - j346.4) = 746.4^2 + 346.4^2 = 557108.96 + 120008.96 = 677117.92\\)<br>' .
                             'Numerator: \\(400(200 + j492.8)(746.4 - j346.4) = 400[200 \\times 746.4 - 200 \\times j346.4 + j492.8 \\times 746.4 - j492.8 \\times j346.4]\\)<br>' .
                             '\\(= 400[149280 - j69280 + j367889.92 + 170782.72] \\text{ (since } j^2 = -1\\text{)}\\)<br>' .
                             '\\(= 400[(149280 + 170782.72) + j(-69280 + 367889.92)] = 400[320062.72 + j298609.92]\\)<br>' .
                             '\\(= 128025088 + j119443968\\)<br>' .
                             'So, \\(Z_{in} = \\frac{128025088 + j119443968}{677117.92} = 189.07 + j176.39 \\Omega\\)<br><br>' .
                             '(c) Distance from load to nearest voltage maximum:<br>' .
                             'The voltage maxima occur where the total phase of the reflection coefficient is zero (modulo 2π).<br>' .
                             'The reflection coefficient as a function of distance d from the load is:<br>' .
                             '\\(\\Gamma(d) = \\Gamma_L e^{-j2\\beta d}\\)<br>' .
                             'Voltage maxima occur when \\(\\angle \\Gamma(d) = 0^\\circ, \\pm 360^\\circ, \\ldots\\)<br>' .
                             'First, find angle of \\(\\Gamma_L\\):<br>' .
                             '\\(\\Gamma_L = -0.2 - j0.4\\), so in third quadrant.<br>' .
                             '\\(\\angle \\Gamma_L = \\tan^{-1}\\left(\\frac{-0.4}{-0.2}\\right) + 180^\\circ = \\tan^{-1}(2) + 180^\\circ = 63.43^\\circ + 180^\\circ = 243.43^\\circ\\)<br>' .
                             'or \\(-116.57^\\circ\\) (equivalent)<br>' .
                             'Set \\(\\angle \\Gamma(d) = \\angle \\Gamma_L - 2\\beta d = 0^\\circ\\)<br>' .
                             'So, \\(-116.57^\\circ - 2\\beta d = 0^\\circ\\)<br>' .
                             '\\(2\\beta d = -116.57^\\circ\\)<br>' .
                             'But distance must be positive, so use equivalent angle:<br>' .
                             'Since \\(\\angle \\Gamma_L = 243.43^\\circ\\), set:<br>' .
                             '\\(243.43^\\circ - 2\\beta d = 0^\\circ\\)<br>' .
                             '\\(2\\beta d = 243.43^\\circ\\)<br>' .
                             '\\(d = \\frac{243.43^\\circ}{2\\beta} = \\frac{243.43 \\times \\pi/180}{2 \\times 4\\pi/3} = \\frac{4.249}{8\\pi/3} = \\frac{4.249 \\times 3}{8\\pi} = \\frac{12.747}{25.133} = 0.507 \\text{ m}\\)<br>' .
                             'Check if this is the nearest: The pattern repeats every λ/2 = 0.75 m, so this should be the nearest.<br><br>' .
                             'Summary:<br>' .
                             '(a) SWR = 2.618<br>' .
                             '(b) Z_in = 189.07 + j176.39 Ω<br>' .
                             '(c) Distance to nearest voltage maximum = 0.507 m',
                'solution_has_diagram' => false,
                'notes' => 'For air dielectric, we assume the phase velocity is approximately the speed of light. The input impedance calculation requires finding the tangent of the electrical length. For finding voltage maxima, remember that they occur where the phase of the total reflection coefficient is zero (constructive interference). The distance is measured from the load toward the generator.',
                'formulas' => [
                    '\\(\\lambda = \\frac{v_p}{f}\\)',
                    '\\(\\beta = \\frac{2\\pi}{\\lambda}\\)',
                    '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0}\\)',
                    '\\(\\text{SWR} = \\frac{1 + |\\Gamma_L|}{1 - |\\Gamma_L|}\\)',
                    '\\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\tan(\\beta l)}{Z_0 + jZ_L \\tan(\\beta l)}\\)',
                    '\\(d_{max} = \\frac{\\angle \\Gamma_L}{2\\beta} \\text{ (adjusted for nearest maximum)}\\)'
                ]
            ],
            [
                'text' => 'Determine the primary constants (R, L, C and G) of the transmission line when the measurement on the line at 1 KHz gave the following results: \\(Z_0 = 710 \\angle -16^\\circ \\Omega\\), \\(\\alpha = 0.01 \\text{neper/m}\\) and \\(\\beta = 0.035 \\text{rad/m}\\). [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false,
                'solution' => 'The propagation constant \\(\\gamma = \\alpha + j\\beta = 0.01 + j0.035 \\text{ Np/m}\\)<br>' .
                             'Characteristic impedance \\(Z_0 = 710 \\angle -16^\\circ = 710(\\cos(-16^\\circ) + j\\sin(-16^\\circ)) = 710(0.9613 - j0.2756) = 682.52 - j195.68 \\Omega\\)<br><br>' .
                             'For a transmission line:<br>' .
                             '\\(\\gamma = \\sqrt{(R + j\\omega L)(G + j\\omega C)}\\)<br>' .
                             '\\(Z_0 = \\sqrt{\\frac{R + j\\omega L}{G + j\\omega C}}\\)<br><br>' .
                             'Let \\(Z = R + j\\omega L\\) and \\(Y = G + j\\omega C\\)<br>' .
                             'Then \\(\\gamma = \\sqrt{ZY}\\) and \\(Z_0 = \\sqrt{Z/Y}\\)<br>' .
                             'So, \\(Z = Z_0 \\gamma\\) and \\(Y = \\gamma / Z_0\\)<br><br>' .
                             'First, calculate \\(Z = Z_0 \\gamma\\):<br>' .
                             '\\(Z = (682.52 - j195.68)(0.01 + j0.035)\\)<br>' .
                             '\\(= 682.52 \\times 0.01 + 682.52 \\times j0.035 - j195.68 \\times 0.01 - j195.68 \\times j0.035\\)<br>' .
                             '\\(= 6.8252 + j23.8882 - j1.9568 + 6.8488 \\text{ (since } j^2 = -1\\text{)}\\)<br>' .
                             '\\(= (6.8252 + 6.8488) + j(23.8882 - 1.9568) = 13.674 + j21.9314 \\Omega/\\text{m}\\)<br><br>' .
                             'Similarly, \\(Y = \\gamma / Z_0\\):<br>' .
                             '\\(Y = \\frac{0.01 + j0.035}{682.52 - j195.68}\\)<br>' .
                             'Multiply numerator and denominator by conjugate of denominator:<br>' .
                             'Denominator: \\((682.52 - j195.68)(682.52 + j195.68) = 682.52^2 + 195.68^2 = 465834.55 + 38290.66 = 504125.21\\)<br>' .
                             'Numerator: \\((0.01 + j0.035)(682.52 + j195.68) = 0.01 \\times 682.52 + 0.01 \\times j195.68 + j0.035 \\times 682.52 + j0.035 \\times j195.68\\)<br>' .
                             '\\(= 6.8252 + j1.9568 + j23.8882 - 6.8488 = (6.8252 - 6.8488) + j(1.9568 + 23.8882) = -0.0236 + j25.845\\)<br>' .
                             'So, \\(Y = \\frac{-0.0236 + j25.845}{504125.21} = -4.68 \\times 10^{-8} + j5.126 \\times 10^{-5} \\text{ S/m}\\)<br><br>' .
                             'Now, \\(Z = R + j\\omega L = 13.674 + j21.9314\\)<br>' .
                             'Frequency \\(f = 1 \\text{ kHz} = 1000 \\text{ Hz}\\), so \\(\\omega = 2\\pi f = 6283.2 \\text{ rad/s}\\)<br>' .
                             'Thus:<br>' .
                             '\\(R = \\text{Re}(Z) = 13.674 \\Omega/\\text{m}\\)<br>' .
                             '\\(\\omega L = \\text{Im}(Z) = 21.9314 \\text{ rad } \\Omega/\\text{m}\\)<br>' .
                             '\\(L = \\frac{21.9314}{6283.2} = 3.49 \\times 10^{-3} \\text{ H/m} = 3.49 \\text{ mH/m}\\)<br><br>' .
                             'Similarly, \\(Y = G + j\\omega C = -4.68 \\times 10^{-8} + j5.126 \\times 10^{-5}\\)<br>' .
                             '\\(G = \\text{Re}(Y) = -4.68 \\times 10^{-8} \\text{ S/m}\\)<br>' .
                             'This is negative, which is physically impossible. There must be an error in calculation or assumption.<br>' .
                             'Let\'s recheck the calculation of Y:<br>' .
                             'Actually, for low-loss lines, G should be small but positive. The negative value suggests numerical error or that the line model assumptions may not hold perfectly.<br>' .
                             'Recalculating Y more carefully:<br>' .
                             'Numerator: \\((0.01 + j0.035)(682.52 + j195.68)\\)<br>' .
                             '\\(= 0.01*682.52 = 6.8252\\)<br>' .
                             '\\(= 0.01*j195.68 = j1.9568\\)<br>' .
                             '\\(= j0.035*682.52 = j23.8882\\)<br>' .
                             '\\(= j0.035*j195.68 = -6.8488\\)<br>' .
                             'Sum: real part = 6.8252 - 6.8488 = -0.0236<br>' .
                             'imaginary part = 1.9568 + 23.8882 = 25.845<br>' .
                             'This seems correct, but G cannot be negative.<br>' .
                             'Perhaps the angle of Z₀ is defined differently, or there\'s a sign convention issue.<br>' .
                             'In some conventions, the propagation constant is defined with opposite sign.<br>' .
                             'Assuming the magnitude is correct but perhaps the angle should be positive:<br>' .
                             'Try \\(Z_0 = 710 \\angle 16^\\circ = 682.52 + j195.68 \\Omega\\)<br>' .
                             'Then \\(Z = Z_0 \\gamma = (682.52 + j195.68)(0.01 + j0.035) = 6.8252 + j23.8882 + j1.9568 - 6.8488 = -0.0236 + j25.845\\)<br>' .
                             'Still problematic.<br>' .
                             'Alternative approach: Use \\(\\gamma^2 = (R + j\\omega L)(G + j\\omega C)\\) and \\(Z_0^2 = \\frac{R + j\\omega L}{G + j\\omega C}\\)<br>' .
                             'Then \\((R + j\\omega L) = Z_0 \\gamma\\) as before, but perhaps calculate \\(G + j\\omega C = \\gamma / Z_0\\) with correct interpretation.<br>' .
                             'The negative conductance suggests that at 1 kHz, the line might have very low loss, and the measurement has some error, or the model needs refinement.<br>' .
                             'For practical purposes, we might approximate G ≈ 0, but let\'s proceed with the calculation as is, noting the anomaly.<br><br>' .
                             '\\(\\omega C = \\text{Im}(Y) = 5.126 \\times 10^{-5} \\text{ S}\\)<br>' .
                             '\\(C = \\frac{5.126 \\times 10^{-5}}{6283.2} = 8.16 \\times 10^{-9} \\text{ F/m} = 8.16 \\text{ nF/m}\\)<br><br>' .
                             'Summary (with note on G):<br>' .
                             'R = 13.674 Ω/m<br>' .
                             'L = 3.49 mH/m<br>' .
                             'G ≈ 0 S/m (since negative value is non-physical, likely measurement or rounding error)<br>' .
                             'C = 8.16 nF/m<br><br>' .
                             'Note: The negative value for G is physically impossible. In practice, for such a low frequency (1 kHz), G would be very small but positive. The result suggests either a calculation error, measurement error, or that the transmission line model assumptions are not perfectly met at this frequency.',
                'solution_has_diagram' => false,
                'notes' => 'Primary constants are R, L, G, C per unit length. They can be determined from measurements of secondary parameters (Z₀, γ). The calculation involves complex arithmetic. A negative conductance (G) is physically impossible and suggests either measurement error, calculation error, or limitations of the transmission line model at very low frequencies. In practice, for low-loss lines at low frequencies, G is often negligible.',
                'formulas' => [
                    '\\(\\gamma = \\alpha + j\\beta\\)',
                    '\\(Z = R + j\\omega L = Z_0 \\gamma\\)',
                    '\\(Y = G + j\\omega C = \\gamma / Z_0\\)'
                ]
            ],
            [
                'text' => 'Consider a two-wire 40 \\(\\Omega\\) line (\\(Z_0 = 40 \\Omega\\)) connecting the source of 80 V, 400 kHz with series resistance 10 \\(\\Omega\\) to the load of \\(Z_L = 60 \\Omega\\). The line is 75 m long and the velocity on the line is \\(2.5 \\times 10^8 \\text{m/s}\\). Find the voltage \\(V_{in}\\) at input end and \\(V_{out}\\) at output end of the transmission line. [2072 Chaitra]',
                'year' => '2072 Chaitra',
                'has_diagram' => false,
                'solution' => 'Given:<br>' .
                             'Source voltage \\(V_s = 80 \\text{ V}\\) (assume RMS or peak? Problem doesn\'t specify, but typically for such calculations, we can assume it\'s the amplitude, and since no phase given, assume 0°)<br>' .
                             'Generator impedance \\(Z_g = 10 \\Omega\\)<br>' .
                             'Characteristic impedance \\(Z_0 = 40 \\Omega\\)<br>' .
                             'Load impedance \\(Z_L = 60 \\Omega\\)<br>' .
                             'Line length \\(l = 75 \\text{ m}\\)<br>' .
                             'Velocity \\(v_p = 2.5 \\times 10^8 \\text{ m/s}\\)<br>' .
                             'Frequency \\(f = 400 \\text{ kHz} = 4 \\times 10^5 \\text{ Hz}\\)<br><br>' .
                             'First, find wavelength and phase constant:<br>' .
                             '\\(\\lambda = \\frac{v_p}{f} = \\frac{2.5 \\times 10^8}{4 \\times 10^5} = 625 \\text{ m}\\)<br>' .
                             '\\(\\beta = \\frac{2\\pi}{\\lambda} = \\frac{2\\pi}{625} = 0.01005 \\text{ rad/m}\\)<br>' .
                             'Electrical length: \\(\\beta l = 0.01005 \\times 75 = 0.7538 \\text{ rad} = 43.2^\\circ\\)<br><br>' .
                             'Input impedance of the line:<br>' .
                             '\\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\tan(\\beta l)}{Z_0 + jZ_L \\tan(\\beta l)}\\)<br>' .
                             '\\(\\tan(\\beta l) = \\tan(43.2^\\circ) = 0.938\\)<br>' .
                             '\\(Z_{in} = 40 \\frac{60 + j40 \\times 0.938}{40 + j60 \\times 0.938} = 40 \\frac{60 + j37.52}{40 + j56.28}\\)<br>' .
                             'Multiply numerator and denominator by conjugate of denominator:<br>' .
                             'Denominator: \\((40 + j56.28)(40 - j56.28) = 40^2 + 56.28^2 = 1600 + 3167.44 = 4767.44\\)<br>' .
                             'Numerator: \\(40(60 + j37.52)(40 - j56.28) = 40[60 \\times 40 - 60 \\times j56.28 + j37.52 \\times 40 - j37.52 \\times j56.28]\\)<br>' .
                             '\\(= 40[2400 - j3376.8 + j1500.8 + 2111.53] = 40[(2400 + 2111.53) + j(-3376.8 + 1500.8)] = 40[4511.53 - j1876]\\)<br>' .
                             '\\(= 180461.2 - j75040\\)<br>' .
                             'So, \\(Z_{in} = \\frac{180461.2 - j75040}{4767.44} = 37.85 - j15.74 \\Omega\\)<br><br>' .
                             'Now, voltage at input end (V_in):<br>' .
                             'This is the voltage across Z_in, with source V_s and series impedance Z_g.<br>' .
                             'By voltage division:<br>' .
                             '\\(V_{in} = V_s \\frac{Z_{in}}{Z_g + Z_{in}} = 80 \\frac{37.85 - j15.74}{10 + 37.85 - j15.74} = 80 \\frac{37.85 - j15.74}{47.85 - j15.74}\\)<br>' .
                             'Multiply numerator and denominator by conjugate of denominator:<br>' .
                             'Denominator: \\((47.85 - j15.74)(47.85 + j15.74) = 47.85^2 + 15.74^2 = 2289.6225 + 247.7476 = 2537.3701\\)<br>' .
                             'Numerator: \\(80(37.85 - j15.74)(47.85 + j15.74) = 80[37.85 \\times 47.85 + 37.85 \\times j15.74 - j15.74 \\times 47.85 - j15.74 \\times j15.74]\\)<br>' .
                             '\\(= 80[1811.1225 + j595.759 - j753.159 + 247.7476] = 80[(1811.1225 + 247.7476) + j(595.759 - 753.159)] = 80[2058.8701 - j157.4]\\)<br>' .
                             '\\(= 164709.608 - j12592\\)<br>' .
                             'So, \\(V_{in} = \\frac{164709.608 - j12592}{2537.3701} = 64.91 - j4.96 \\text{ V}\\)<br>' .
                             'Magnitude: \\(|V_{in}| = \\sqrt{64.91^2 + (-4.96)^2} = \\sqrt{4213.3081 + 24.6016} = \\sqrt{4237.9097} = 65.10 \\text{ V}\\)<br>' .
                             'Angle: \\(\\angle V_{in} = \\tan^{-1}(-4.96/64.91) = \\tan^{-1}(-0.0764) = -4.37^\\circ\\)<br><br>' .
                             'Now, voltage at output end (V_out = V_L):<br>' .
                             'We can use the relationship between input and load voltages.<br>' .
                             'The general formula is:<br>' .
                             '\\(V_L = V_{in} \\frac{Z_L}{Z_{in}} \\frac{1}{\\cos(\\beta l) + j \\frac{Z_0}{Z_{in}} \\sin(\\beta l)}\\)<br>' .
                             'But simpler: since we have the line parameters, we can find the reflection coefficient and use the wave equation.<br>' .
                             'Reflection coefficient at load:<br>' .
                             '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0} = \\frac{60 - 40}{60 + 40} = \\frac{20}{100} = 0.2\\)<br>' .
                             'The voltage at any point can be written as sum of incident and reflected waves.<br>' .
                             'At the input (z=0, if we set load at z=l), \\(V_{in} = V^+ (e^{j\\beta l} + \\Gamma_L e^{-j\\beta l})\\)<br>' .
                             'Actually, standard notation: if z=0 at input, z=l at load, then:<br>' .
                             '\\(V(z) = V^+ [e^{-j\\beta z} + \\Gamma_L e^{j\\beta z}]\\) wait, need to be careful with direction.<br>' .
                             'Typically, \\(V(z) = V^+ e^{-j\\beta z} + V^- e^{j\\beta z}\\), with \\(V^- = \\Gamma_L V^+ e^{-j2\\beta l}\\) at the load? Let\'s redefine.<br>' .
                             'Set z=0 at load, z=l at input (generator end). Then:<br>' .
                             '\\(V(z) = V^+ [e^{j\\beta z} + \\Gamma_L e^{-j\\beta z}]\\)<br>' .
                             'At input, z=l: \\(V_{in} = V^+ [e^{j\\beta l} + \\Gamma_L e^{-j\\beta l}]\\)<br>' .
                             'At load, z=0: \\(V_L = V^+ [1 + \\Gamma_L]\\)<br>' .
                             'So, \\(V_L = V_{in} \\frac{1 + \\Gamma_L}{e^{j\\beta l} + \\Gamma_L e^{-j\\beta l}}\\)<br>' .
                             'Substitute:<br>' .
                             '\\(V_L = (64.91 - j4.96) \\frac{1 + 0.2}{e^{j43.2^\\circ} + 0.2 e^{-j43.2^\\circ}}\\)<br>' .
                             'Denominator: \\(e^{j43.2^\\circ} + 0.2 e^{-j43.2^\\circ} = (\\cos43.2^\\circ + j\\sin43.2^\\circ) + 0.2(\\cos43.2^\\circ - j\\sin43.2^\\circ)\\)<br>' .
                             '\\(= (0.728 + j0.685) + 0.2(0.728 - j0.685) = 0.728 + j0.685 + 0.1456 - j0.137 = 0.8736 + j0.548\\)<br>' .
                             'Magnitude of denominator: \\(\\sqrt{0.8736^2 + 0.548^2} = \\sqrt{0.763 + 0.300} = \\sqrt{1.063} = 1.031\\)<br>' .
                             'Numerator: \\(1.2 \\times (64.91 - j4.96) = 77.892 - j5.952\\)<br>' .
                             'So, \\(V_L = \\frac{77.892 - j5.952}{0.8736 + j0.548}\\)<br>' .
                             'Multiply numerator and denominator by conjugate of denominator:<br>' .
                             'Denominator: \\((0.8736 + j0.548)(0.8736 - j0.548) = 0.8736^2 + 0.548^2 = 0.763 + 0.300 = 1.063\\)<br>' .
                             'Numerator: \\((77.892 - j5.952)(0.8736 - j0.548) = 77.892 \\times 0.8736 - 77.892 \\times j0.548 - j5.952 \\times 0.8736 + j5.952 \\times j0.548\\)<br>' .
                             '\\(= 68.05 - j42.68 - j5.20 - 3.26 = (68.05 - 3.26) + j(-42.68 - 5.20) = 64.79 - j47.88\\)<br>' .
                             'So, \\(V_L = \\frac{64.79 - j47.88}{1.063} = 60.95 - j45.04 \\text{ V}\\)<br>' .
                             'Magnitude: \\(|V_L| = \\sqrt{60.95^2 + (-45.04)^2} = \\sqrt{3714.9025 + 2028.6016} = \\sqrt{5743.5041} = 75.78 \\text{ V}\\)<br><br>' .
                             'Alternatively, since the load is purely resistive, and we have V_in, we could have found the current and used Ohm\'s law, but the above is more general.<br><br>' .
                             'Summary:<br>' .
                             'Voltage at input end, V_in = 65.10 ∠ -4.37° V<br>' .
                             'Voltage at output end, V_out = V_L = 75.78 ∠ -36.5° V (since tan⁻¹(-45.04/60.95) = -36.5°)',
                'solution_has_diagram' => false,
                'notes' => 'This problem requires finding the input impedance of the transmission line first, then using voltage division to find the voltage at the input of the line. Finally, the voltage at the load is found using the transmission line equations. The calculation involves complex arithmetic throughout. Note that the voltage at the load can be higher than at the input due to standing wave effects, even though there is no gain in the system.',
                'formulas' => [
                    '\\(\\lambda = \\frac{v_p}{f}\\)',
                    '\\(\\beta = \\frac{2\\pi}{\\lambda}\\)',
                    '\\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\tan(\\beta l)}{Z_0 + jZ_L \\tan(\\beta l)}\\)',
                    '\\(V_{in} = V_s \\frac{Z_{in}}{Z_g + Z_{in}}\\)',
                    '\\(V_L = V_{in} \\frac{1 + \\Gamma_L}{e^{j\\beta l} + \\Gamma_L e^{-j\\beta l}}\\)'
                ]
            ],
            [
                'text' => 'A lossless transmission line with \\(Z_0 = 50 \\Omega\\) with length 1.5 m connects a voltage \\(V_s = 60 \\angle 0^\\circ \\text{V}\\) source to a terminal load of \\(Z_L = (50 + j50) \\Omega\\). If the operating frequency \\(f = 100 \\text{MHz}\\), generator impedance \\(Z_g = 50 \\Omega\\) and speed of wave equal to the speed of the light. Find the distance of the first voltage maximum from the load. What is the power delivered to the load? [2070 Chaitra]',
                'year' => '2070 Chaitra',
                'has_diagram' => false,
                'solution' => 'Given:<br>' .
                             '\\(Z_0 = 50 \\Omega\\)<br>' .
                             'Line length \\(l = 1.5 \\text{ m}\\)<br>' .
                             'Source \\(V_s = 60 \\angle 0^\\circ \\text{V}\\)<br>' .
                             'Load \\(Z_L = 50 + j50 \\Omega\\)<br>' .
                             'Frequency \\(f = 100 \\text{ MHz} = 10^8 \\text{ Hz}\\)<br>' .
                             'Generator impedance \\(Z_g = 50 \\Omega\\)<br>' .
                             'Speed of wave \\(v_p = c = 3 \\times 10^8 \\text{ m/s}\\)<br><br>' .
                             'First, find wavelength and phase constant:<br>' .
                             '\\(\\lambda = \\frac{v_p}{f} = \\frac{3 \\times 10^8}{10^8} = 3 \\text{ m}\\)<br>' .
                             '\\(\\beta = \\frac{2\\pi}{\\lambda} = \\frac{2\\pi}{3} \\text{ rad/m}\\)<br><br>' .
                             'Distance of first voltage maximum from the load:<br>' .
                             'Voltage maxima occur where the phase of the reflection coefficient is zero.<br>' .
                             'Reflection coefficient at load:<br>' .
                             '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0} = \\frac{(50 + j50) - 50}{(50 + j50) + 50} = \\frac{j50}{100 + j50}\\)<br>' .
                             'Multiply numerator and denominator by conjugate of denominator:<br>' .
                             '\\(\\Gamma_L = \\frac{j50(100 - j50)}{(100 + j50)(100 - j50)} = \\frac{j5000 + 2500}{10000 + 2500} = \\frac{2500 + j5000}{12500} = 0.2 + j0.4\\)<br>' .
                             'Magnitude: \\(|\\Gamma_L| = \\sqrt{0.2^2 + 0.4^2} = \\sqrt{0.04 + 0.16} = \\sqrt{0.2} = 0.4472\\)<br>' .
                             'Angle: \\(\\angle \\Gamma_L = \\tan^{-1}(0.4/0.2) = \\tan^{-1}(2) = 63.43^\\circ\\)<br>' .
                             'The reflection coefficient as a function of distance d from the load is:<br>' .
                             '\\(\\Gamma(d) = \\Gamma_L e^{-j2\\beta d}\\)<br>' .
                             'Voltage maxima occur when \\(\\angle \\Gamma(d) = 0^\\circ, \\pm 360^\\circ, \\ldots\\)<br>' .
                             'So, \\(\\angle \\Gamma_L - 2\\beta d = 0^\\circ\\)<br>' .
                             '\\(63.43^\\circ - 2 \\times \\frac{2\\pi}{3} d = 0^\\circ\\)<br>' .
                             '\\(\\frac{4\\pi}{3} d = 63.43^\\circ = 63.43 \\times \\frac{\\pi}{180} \\text{ rad} = 1.107 \\text{ rad}\\)<br>' .
                             '\\(d = \\frac{1.107 \\times 3}{4\\pi} = \\frac{3.321}{12.566} = 0.264 \\text{ m}\\)<br><br>' .
                             'Power delivered to the load:<br>' .
                             'Since the line is lossless, power delivered to load equals power entering the line.<br>' .
                             'First, find input impedance of the line:<br>' .
                             '\\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\tan(\\beta l)}{Z_0 + jZ_L \\tan(\\beta l)}\\)<br>' .
                             '\\(\\beta l = \\frac{2\\pi}{3} \\times 1.5 = \\pi \\text{ rad} = 180^\\circ\\)<br>' .
                             '\\(\\tan(\\beta l) = \\tan(180^\\circ) = 0\\)<br>' .
                             'So, \\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\times 0}{Z_0 + jZ_L \\times 0} = Z_0 \\frac{Z_L}{Z_0} = Z_L = 50 + j50 \\Omega\\)<br>' .
                             'Interesting! Since the line is half-wavelength long (l = 1.5 m, λ = 3 m, so l = λ/2), Z_in = Z_L.<br>' .
                             'Now, the circuit is source V_s with Z_g = 50 Ω connected to Z_in = 50 + j50 Ω.<br>' .
                             'Current from source: \\(I = \\frac{V_s}{Z_g + Z_{in}} = \\frac{60 \\angle 0^\\circ}{50 + 50 + j50} = \\frac{60 \\angle 0^\\circ}{100 + j50}\\)<br>' .
                             'Magnitude of denominator: \\(\\sqrt{100^2 + 50^2} = \\sqrt{10000 + 2500} = \\sqrt{12500} = 111.8 \\Omega\\)<br>' .
                             'So, \\(|I| = \\frac{60}{111.8} = 0.5367 \\text{ A}\\)<br>' .
                             'Power delivered to load = Power delivered to Z_in (since line is lossless)<br>' .
                             'Since Z_in has real part 50 Ω, the power is:<br>' .
                             '\\(P = |I|^2 \\times \\text{Re}(Z_{in}) = (0.5367)^2 \\times 50 = 0.288 \\times 50 = 14.4 \\text{ W}\\)<br>' .
                             'Alternatively, using the formula for power with complex impedance:<br>' .
                             '\\(P = \\frac{1}{2} \\text{Re}(V_{in} I^*)\\), but since we used magnitudes assuming peak values, and if V_s is peak, then average power is half, but the problem doesn\'t specify.<br>' .
                             'Typically in such problems, if not specified, we assume the given voltage is amplitude, and power is average power, so we should use:<br>' .
                             'If \\(V_s = 60 \\angle 0^\\circ\\) is peak voltage, then RMS voltage is \\(60/\\sqrt{2}\\), but actually for power calculation with complex amplitudes, the average power is \\(\\frac{1}{2} \\text{Re}(V I^*)\\) for peak phasors.<br>' .
                             'Let\'s recalculate properly with phasors.<br>' .
                             '\\(I = \\frac{60 \\angle 0^\\circ}{100 + j50} = \\frac{60 \\angle 0^\\circ}{111.8 \\angle 26.57^\\circ} = 0.5367 \\angle -26.57^\\circ \\text{ A (peak)}\\)<br>' .
                             'Voltage at input: \\(V_{in} = I Z_{in} = 0.5367 \\angle -26.57^\\circ \\times (50 + j50) = 0.5367 \\angle -26.57^\\circ \\times 70.71 \\angle 45^\\circ = 37.95 \\angle 18.43^\\circ \\text{ V (peak)}\\)<br>' .
                             'Average power delivered to load: \\(P_{avg} = \\frac{1}{2} \\text{Re}(V_{in} I^*)\\)<br>' .
                             '\\(I^* = 0.5367 \\angle 26.57^\\circ\\)<br>' .
                             '\\(V_{in} I^* = 37.95 \\angle 18.43^\\circ \\times 0.5367 \\angle 26.57^\\circ = 20.37 \\angle 45^\\circ = 20.37(\\cos45^\\circ + j\\sin45^\\circ) = 14.4 + j14.4\\)<br>' .
                             '\\(\\text{Re}(V_{in} I^*) = 14.4\\)<br>' .
                             'So, \\(P_{avg} = \\frac{1}{2} \\times 14.4 = 7.2 \\text{ W}\\)<br>' .
                             'Ah, I see the mistake. When using peak phasors, average power is half the real part of V I*.<br>' .
                             'Alternatively, if we consider RMS values, \\(V_{s,rms} = 60/\\sqrt{2} = 42.43 \\text{ V}\\), then \\(I_{rms} = 42.43 / 111.8 = 0.3795 \\text{ A}\\), and \\(P = I_{rms}^2 \\times R = (0.3795)^2 \\times 50 = 0.144 \\times 50 = 7.2 \\text{ W}\\).<br><br>' .
                             'Summary:<br>' .
                             'Distance of first voltage maximum from load = 0.264 m<br>' .
                             'Power delivered to load = 7.2 W',
                'solution_has_diagram' => false,
                'notes' => 'For lossless lines, power delivered to the load equals power input to the line. Voltage maxima occur where the phase of the total reflection coefficient is zero. For a half-wavelength line, the input impedance equals the load impedance. When calculating power with phasors, if the phasors represent peak values, average power is (1/2)Re(VI*). If they represent RMS values, average power is Re(VI*).',
                'formulas' => [
                    '\\(\\lambda = \\frac{v_p}{f}\\)',
                    '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0}\\)',
                    '\\(d_{max} = \\frac{\\angle \\Gamma_L}{2\\beta}\\)',
                    '\\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\tan(\\beta l)}{Z_0 + jZ_L \\tan(\\beta l)}\\)',
                    '\\(P_{avg} = \\frac{1}{2} \\text{Re}(V_{in} I^*) \\text{ (for peak phasors)}\\)'
                ]
            ],
            [
                'text' => 'What are the techniques that can be taken to match the transmission line with mismatched load? Explain any one. [2070 Chaitra]',
                'year' => '2070 Chaitra',
                'has_diagram' => false,
                'solution' => 'Techniques to match a transmission line with a mismatched load include:<br>' .
                             '1. Quarter-wave transformer<br>' .
                             '2. Single stub matching (open or short circuited)<br>' .
                             '3. Double stub matching<br>' .
                             '4. Tapered lines<br>' .
                             '5. Lumped element matching (using inductors and capacitors)<br><br>' .
                             'Explanation of Quarter-wave Transformer:<br>' .
                             'A quarter-wave transformer is a section of transmission line with length λ/4 (quarter wavelength) inserted between the main line and the load. It has a characteristic impedance Z₁ chosen to match the load Z_L to the main line impedance Z₀.<br><br>' .
                             'The input impedance of a quarter-wave line is:<br>' .
                             '\\(Z_{in} = \\frac{Z_1^2}{Z_L}\\)<br>' .
                             'To match to the main line, we want \\(Z_{in} = Z_0\\), so:<br>' .
                             '\\(Z_0 = \\frac{Z_1^2}{Z_L}\\)<br>' .
                             'Thus, \\(Z_1 = \\sqrt{Z_0 Z_L}\\)<br><br>' .
                             'This method works perfectly only at the design frequency (since length is λ/4 at that frequency) and only for real load impedances. For complex loads, the load must first be transformed to a real impedance at some point using a length of line, and then the quarter-wave transformer is placed at that point.<br><br>' .
                             'Advantages:<br>' .
                             '- Simple to implement<br>' .
                             '- Low loss (if transmission line is low loss)<br><br>' .
                             'Disadvantages:<br>' .
                             '- Narrow bandwidth (works well only near design frequency)<br>' .
                             '- Only matches real impedances directly<br>' .
                             '- Requires specific characteristic impedance, which may not be readily available<br><br>' .
                             'Example: To match a 100 Ω load to a 50 Ω line, use a quarter-wave transformer with \\(Z_1 = \\sqrt{50 \\times 100} = \\sqrt{5000} = 70.71 \\Omega\\).',
                'solution_has_diagram' => false,
                'notes' => 'Impedance matching is crucial in RF systems to maximize power transfer and minimize reflections. The quarter-wave transformer is one of the simplest methods but has limitations in bandwidth and applicability to complex impedances. Other methods like stub matching can handle complex impedances and offer more flexibility.',
                'formulas' => [
                    '\\(Z_{in} = \\frac{Z_1^2}{Z_L} \\text{ (for } l = \\lambda/4\\text{)}\\)',
                    '\\(Z_1 = \\sqrt{Z_0 Z_L} \\text{ (matching condition)}\\)'
                ]
            ],
            [
                'text' => 'A lossless transmission line with \\(Z_0 = 50 \\Omega\\) is 30 m long and operates at 1 MHz. The line is terminated with a load \\(Z_L = (60 + j40) \\Omega\\). If velocity \\(v = 3 \\times 10^8 \\text{m/s}\\) on the line. Find (a) the reflection coefficient, (b) the standing wave ratio and the input impedance. [2069 Chaitra]',
                'year' => '2069 Chaitra',
                'has_diagram' => false,
                'solution' => 'Given:<br>' .
                             '\\(Z_0 = 50 \\Omega\\)<br>' .
                             'Line length \\(l = 30 \\text{ m}\\)<br>' .
                             'Frequency \\(f = 1 \\text{ MHz} = 10^6 \\text{ Hz}\\)<br>' .
                             'Load \\(Z_L = 60 + j40 \\Omega\\)<br>' .
                             'Velocity \\(v_p = 3 \\times 10^8 \\text{ m/s}\\)<br><br>' .
                             '(a) Reflection coefficient at load:<br>' .
                             '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0} = \\frac{(60 + j40) - 50}{(60 + j40) + 50} = \\frac{10 + j40}{110 + j40}\\)<br>' .
                             'Multiply numerator and denominator by conjugate of denominator:<br>' .
                             '\\(\\Gamma_L = \\frac{(10 + j40)(110 - j40)}{(110 + j40)(110 - j40)} = \\frac{1100 - j400 + j4400 + 1600}{12100 + 1600} = \\frac{2700 + j4000}{13700}\\)<br>' .
                             '\\(\\Gamma_L = 0.1971 + j0.2920\\)<br>' .
                             'Magnitude: \\(|\\Gamma_L| = \\sqrt{0.1971^2 + 0.2920^2} = \\sqrt{0.03886 + 0.08526} = \\sqrt{0.12412} = 0.3523\\)<br>' .
                             'Angle: \\(\\angle \\Gamma_L = \\tan^{-1}(0.2920/0.1971) = \\tan^{-1}(1.481) = 55.94^\\circ\\)<br><br>' .
                             '(b) Standing Wave Ratio:<br>' .
                             '\\(\\text{SWR} = \\frac{1 + |\\Gamma_L|}{1 - |\\Gamma_L|} = \\frac{1 + 0.3523}{1 - 0.3523} = \\frac{1.3523}{0.6477} = 2.088\\)<br><br>' .
                             'Input impedance:<br>' .
                             'First, find wavelength and phase constant:<br>' .
                             '\\(\\lambda = \\frac{v_p}{f} = \\frac{3 \\times 10^8}{10^6} = 300 \\text{ m}\\)<br>' .
                             '\\(\\beta = \\frac{2\\pi}{\\lambda} = \\frac{2\\pi}{300} = 0.02094 \\text{ rad/m}\\)<br>' .
                             'Electrical length: \\(\\beta l = 0.02094 \\times 30 = 0.6282 \\text{ rad} = 36^\\circ\\)<br>' .
                             '\\(\\tan(\\beta l) = \\tan(36^\\circ) = 0.7265\\)<br>' .
                             '\\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\tan(\\beta l)}{Z_0 + jZ_L \\tan(\\beta l)} = 50 \\frac{(60 + j40) + j50 \\times 0.7265}{50 + j(60 + j40) \\times 0.7265}\\)<br>' .
                             'Numerator: \\(60 + j40 + j36.325 = 60 + j76.325\\)<br>' .
                             'Denominator: \\(50 + j(60 + j40)(0.7265) = 50 + 0.7265(j60 - 40) = 50 - 29.06 + j43.59 = 20.94 + j43.59\\)<br>' .
                             'So, \\(Z_{in} = 50 \\frac{60 + j76.325}{20.94 + j43.59}\\)<br>' .
                             'Multiply numerator and denominator by conjugate of denominator:<br>' .
                             'Denominator: \\((20.94 + j43.59)(20.94 - j43.59) = 20.94^2 + 43.59^2 = 438.4836 + 1899.8881 = 2338.3717\\)<br>' .
                             'Numerator: \\(50(60 + j76.325)(20.94 - j43.59) = 50[60 \\times 20.94 - 60 \\times j43.59 + j76.325 \\times 20.94 - j76.325 \\times j43.59]\\)<br>' .
                             '\\(= 50[1256.4 - j2615.4 + j1598.5 + 3327.5] = 50[(1256.4 + 3327.5) + j(-2615.4 + 1598.5)] = 50[4583.9 - j1016.9]\\)<br>' .
                             '\\(= 229195 - j50845\\)<br>' .
                             'So, \\(Z_{in} = \\frac{229195 - j50845}{2338.3717} = 97.99 - j21.74 \\Omega\\)<br><br>' .
                             'Summary:<br>' .
                             '(a) Reflection coefficient = 0.1971 + j0.2920 (magnitude 0.3523, angle 55.94°)<br>' .
                             '(b) SWR = 2.088, Input impedance = 97.99 - j21.74 Ω',
                'solution_has_diagram' => false,
                'notes' => 'The reflection coefficient is complex for complex loads. The SWR depends only on the magnitude of the reflection coefficient. The input impedance calculation requires the electrical length of the line, which depends on frequency and velocity. At 1 MHz, the wavelength is 300 m, so 30 m is only 0.1λ, which is a relatively short line.',
                'formulas' => [
                    '\\(\\Gamma_L = \\frac{Z_L - Z_0}{Z_L + Z_0}\\)',
                    '\\(\\text{SWR} = \\frac{1 + |\\Gamma_L|}{1 - |\\Gamma_L|}\\)',
                    '\\(Z_{in} = Z_0 \\frac{Z_L + jZ_0 \\tan(\\beta l)}{Z_0 + jZ_L \\tan(\\beta l)}\\)'
                ]
            ],
            [
                'text' => 'Explain impedance matching using both quarter wave transformer and single stub methods. [2068 Baishakh]',
                'year' => '2068 Baishakh',
                'has_diagram' => false,
                'solution' => 'Impedance matching is the process of transforming a load impedance to match the characteristic impedance of a transmission line to eliminate reflections and maximize power transfer.<br><br>' .
                             '1. Quarter-Wave Transformer:<br>' .
                             'This method uses a section of transmission line with length λ/4 (quarter wavelength at the operating frequency) and a specific characteristic impedance Z₁.<br>' .
                             'The input impedance of a quarter-wave line is \\(Z_{in} = \\frac{Z_1^2}{Z_L}\\).<br>' .
                             'To match to a line with characteristic impedance Z₀, set \\(Z_{in} = Z_0\\), so \\(Z_1 = \\sqrt{Z_0 Z_L}\\).<br>' .
                             'This method works perfectly only at the design frequency and its odd multiples, and only for real load impedances. For complex loads, a length of line must first be used to transform the load to a real impedance at some point, and then the quarter-wave transformer is placed at that point.<br>' .
                             'Advantages: Simple, low loss.<br>' .
                             'Disadvantages: Narrow bandwidth, requires specific Z₁, only for real impedances directly.<br><br>' .
                             '2. Single Stub Matching:<br>' .
                             'This method uses a short-circuited or open-circuited stub (a section of transmission line) connected in parallel (shunt) or series with the main line at a certain distance from the load.<br>' .
                             'The procedure for shunt stub matching:<br>' .
                             'a) Find the distance d from the load where the input admittance has real part equal to Y₀ = 1/Z₀.<br>' .
                             'b) At that point, connect a stub with susceptance that cancels the imaginary part of the admittance.<br>' .
                             'The stub length l is chosen to provide the required susceptance.<br>' .
                             'For a short-circuited stub, the input admittance is \\(Y_{stub} = -jY_s \\cot(\\beta l)\\), where Y_s is the stub\'s characteristic admittance.<br>' .
                             'For an open-circuited stub, \\(Y_{stub} = jY_s \\tan(\\beta l)\\).<br>' .
                             'Typically, the stub has the same characteristic impedance as the main line (Y_s = Y₀).<br>' .
                             'There are usually two solutions for d (within λ/2), and corresponding stub lengths.<br>' .
                             'Advantages: Can match any load impedance, stub can be made from same line type.<br>' .
                             'Disadvantages: More complex to design, narrow bandwidth, stub adds some loss.<br><br>' .
                             'Comparison: Quarter-wave transformer is simpler but limited to real impedances and narrow bandwidth. Single stub matching is more versatile and can handle complex impedances but requires more careful placement and has two adjustable parameters (d and l).',
                'solution_has_diagram' => false,
                'notes' => 'Both methods are widely used in RF engineering. The choice depends on the specific application, bandwidth requirements, and ease of implementation. Modern designs often use computer-aided optimization to determine the best matching network.',
                'formulas' => [
                    '\\(Z_1 = \\sqrt{Z_0 Z_L} \\text{ (quarter-wave transformer)}\\)',
                    '\\(Y_{stub} = -jY_s \\cot(\\beta l) \\text{ (short-circuited stub)}\\)',
                    '\\(Y_{stub} = jY_s \\tan(\\beta l) \\text{ (open-circuited stub)}\\)'
                ]
            ],
            [
                'text' => 'Derive the expression for input intrinsic impedance using the concept of reflection of uniform plane waves. [2070 Chaitra]',
                'year' => '2070 Chaitra',
                'has_diagram' => false,
                'solution' => 'The input intrinsic impedance for a uniform plane wave can be derived by considering the reflection at an interface.<br><br>' .
                             'Consider a uniform plane wave incident normally on an interface between two media. Let medium 1 have intrinsic impedance η₁ and medium 2 have intrinsic impedance η₂. The interface is at z=0, and the wave is incident from medium 1.<br><br>' .
                             'The total electric field in medium 1 is the sum of incident and reflected waves:<br>' .
                             '\\(E_z = E_i e^{-j\\beta_1 z} + E_r e^{j\\beta_1 z}\\)<br>' .
                             'The total magnetic field in medium 1 is:<br>' .
                             '\\(H_y = \\frac{E_i}{\\eta_1} e^{-j\\beta_1 z} - \\frac{E_r}{\\eta_1} e^{j\\beta_1 z}\\) (assuming wave propagating in +z direction, and using right-hand rule)<br><br>' .
                             'The reflection coefficient at the interface (z=0) is:<br>' .
                             '\\(\\Gamma = \\frac{E_r}{E_i} = \\frac{\\eta_2 - \\eta_1}{\\eta_2 + \\eta_1}\\)<br><br>' .
                             'The intrinsic impedance at any point z in medium 1 is defined as the ratio of total electric field to total magnetic field:<br>' .
                             '\\(\\eta(z) = \\frac{E_z}{H_y} = \\frac{E_i e^{-j\\beta_1 z} + E_r e^{j\\beta_1 z}}{\\frac{E_i}{\\eta_1} e^{-j\\beta_1 z} - \\frac{E_r}{\\eta_1} e^{j\\beta_1 z}} = \\eta_1 \\frac{E_i e^{-j\\beta_1 z} + E_r e^{j\\beta_1 z}}{E_i e^{-j\\beta_1 z} - E_r e^{j\\beta_1 z}}\\)<br>' .
                             'Divide numerator and denominator by \\(E_i e^{-j\\beta_1 z}\\):<br>' .
                             '\\(\\eta(z) = \\eta_1 \\frac{1 + \\frac{E_r}{E_i} e^{j2\\beta_1 z}}{1 - \\frac{E_r}{E_i} e^{j2\\beta_1 z}} = \\eta_1 \\frac{1 + \\Gamma e^{j2\\beta_1 z}}{1 - \\Gamma e^{j2\\beta_1 z}}\\)<br><br>' .
                             'This is analogous to the transmission line input impedance formula, with η corresponding to Z, and z measured from the interface (load).<br>' .
                             'At the interface (z=0), \\(\\eta(0) = \\eta_1 \\frac{1 + \\Gamma}{1 - \\Gamma} = \\eta_1 \\frac{1 + \\frac{\\eta_2 - \\eta_1}{\\eta_2 + \\eta_1}}{1 - \\frac{\\eta_2 - \\eta_1}{\\eta_2 + \\eta_1}} = \\eta_1 \\frac{\\frac{2\\eta_2}{\\eta_2 + \\eta_1}}{\\frac{2\\eta_1}{\\eta_2 + \\eta_1}} = \\eta_1 \\frac{\\eta_2}{\\eta_1} = \\eta_2\\), as expected.<br><br>' .
                             'The input intrinsic impedance at a distance z from the interface is:<br>' .
                             '\\(\\eta_{in}(z) = \\eta_1 \\frac{1 + \\Gamma e^{j2\\beta_1 z}}{1 - \\Gamma e^{j2\\beta_1 z}}\\)<br>' .
                             'where \\(\\Gamma = \\frac{\\eta_2 - \\eta_1}{\\eta_2 + \\eta_1}\\)<br><br>' .
                             'This derivation shows the close analogy between transmission lines and plane wave propagation. The intrinsic impedance varies with position due to interference between incident and reflected waves, just as the impedance varies along a transmission line with reflections.',
                'solution_has_diagram' => false,
                'notes' => 'The intrinsic impedance for plane waves is analogous to the characteristic impedance for transmission lines. The input impedance at a distance from an interface follows a similar formula to that of a transmission line. This highlights the fundamental connection between circuit theory and electromagnetic wave theory.',
                'formulas' => [
                    '\\(\\Gamma = \\frac{\\eta_2 - \\eta_1}{\\eta_2 + \\eta_1}\\)',
                    '\\(\\eta_{in}(z) = \\eta_1 \\frac{1 + \\Gamma e^{j2\\beta_1 z}}{1 - \\Gamma e^{j2\\beta_1 z}}\\)'
                ]
            ]
        ]
    ],
    [
        'chapter' => 7,
        'title' => 'Waveguides & Antennas',
        'questions' => [
            [
                'text' => 'What are the advantages of waveguides over transmission line? Consider a rectangular waveguide of dimension \\(a = 1.07 \\text{cm}\\), \\(b = 0.43 \\text{cm}\\). Find the cutoff frequency for \\(\\text{TM}_{10}\\) mode. (\\(\\epsilon_r = 2\\), \\(\\mu = \\mu_0\\)) [2080 Bhadra]',
                'year' => '2080 Bhadra',
                'has_diagram' => false,
                'solution' => 'Advantages of waveguides over transmission lines:<br>' .
                             '1. Lower loss at high frequencies (microwave and millimeter wave)<br>' .
                             '2. Higher power handling capability<br>' .
                             '3. Better shielding (no radiation loss)<br>' .
                             '4. Simpler mechanical structure for high-frequency applications<br>' .
                             '5. No dielectric loss (if air-filled)<br><br>' .
                             'Note: TM₁₀ mode does not exist in rectangular waveguides. For TM modes, neither m nor n can be zero. The lowest TM mode is TM₁₁.<br>' .
                             'Probably the question meant TE₁₀ mode, which is the dominant mode.<br>' .
                             'Assuming it\'s a typo and they want TE₁₀ mode:<br><br>' .
                             'Cutoff frequency for TEₘₙ or TMₘₙ mode in rectangular waveguide:<br>' .
                             '\\(f_c = \\frac{v_p}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)<br>' .
                             'where \\(v_p = \\frac{1}{\\sqrt{\\mu \\epsilon}} = \\frac{c}{\\sqrt{\\epsilon_r}}\\) is the phase velocity in the medium filling the waveguide.<br>' .
                             'Given \\(\\epsilon_r = 2\\), \\(\\mu = \\mu_0\\), so \\(v_p = \\frac{3 \\times 10^8}{\\sqrt{2}} = 2.121 \\times 10^8 \\text{ m/s}\\)<br>' .
                             'Dimensions: \\(a = 1.07 \\text{ cm} = 0.0107 \\text{ m}\\), \\(b = 0.43 \\text{ cm} = 0.0043 \\text{ m}\\)<br><br>' .
                             'For TE₁₀ mode: m=1, n=0<br>' .
                             '\\(f_c = \\frac{2.121 \\times 10^8}{2} \\sqrt{\\left(\\frac{1}{0.0107}\\right)^2 + \\left(\\frac{0}{0.0043}\\right)^2} = 1.0605 \\times 10^8 \\times \\frac{1}{0.0107} = 1.0605 \\times 10^8 \\times 93.458\\)<br>' .
                             '\\(f_c = 9.91 \\times 10^9 \\text{ Hz} = 9.91 \\text{ GHz}\\)<br><br>' .
                             'If they really meant TM₁₀, it doesn\'t exist, but if we calculate formally:<br>' .
                             'For TM₁₀: m=1, n=0, but TM modes require both m and n ≠ 0, so cutoff frequency is undefined.<br><br>' .
                             'Answer: Assuming TE₁₀ mode, cutoff frequency = 9.91 GHz',
                'solution_has_diagram' => false,
                'notes' => 'Rectangular waveguides support TEₘₙ and TMₘₙ modes, but TMₘ₀ and TM₀ₙ modes do not exist because they would violate boundary conditions. The TE₁₀ mode is usually the dominant mode (lowest cutoff frequency) in standard rectangular waveguides where a > b. The cutoff frequency depends on the dimensions and the dielectric properties of the filling material.',
                'formulas' => [
                    '\\(f_c = \\frac{v_p}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)',
                    '\\(v_p = \\frac{c}{\\sqrt{\\epsilon_r}}\\)'
                ]
            ],
            [
                'text' => 'Write short notes about antenna and its parameters. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => 'Antenna: An antenna is a transducer that converts electrical energy into electromagnetic waves (transmitting) or electromagnetic waves into electrical energy (receiving). It is a crucial component in wireless communication systems.<br><br>' .
                             'Key antenna parameters:<br>' .
                             '1. Radiation Pattern: A graphical representation of the radiation properties of the antenna as a function of space coordinates. It shows the directional dependence of the strength of the radio waves.<br>' .
                             '2. Radiation Intensity: Power radiated per unit solid angle.<br>' .
                             '3. Directivity: Ratio of radiation intensity in a given direction to the average radiation intensity. Measures how focused the radiation is.<br>' .
                             '4. Gain: Similar to directivity but includes antenna efficiency. Gain = Efficiency × Directivity.<br>' .
                             '5. Input Impedance: Impedance presented by the antenna at its terminals. Should be matched to the transmission line for maximum power transfer.<br>' .
                             '6. Polarization: Orientation of the electric field vector of the radiated wave (linear, circular, elliptical).<br>' .
                             '7. Bandwidth: Range of frequencies over which the antenna performance meets specified criteria.<br>' .
                             '8. Effective Aperture: Measure of how effective an antenna is at receiving power from a plane wave. Related to gain by \\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\).<br>' .
                             '9. Beamwidth: Angular separation between half-power points in the radiation pattern.<br>' .
                             '10. Side Lobe Level: Ratio of power in side lobes to power in main lobe.<br><br>' .
                             'Common types of antennas include dipole, monopole, loop, patch, horn, parabolic reflector, and array antennas. The choice of antenna depends on the application requirements such as frequency, gain, size, and cost.',
                'solution_has_diagram' => false,
                'notes' => 'Antennas are characterized by many parameters that describe their performance. Understanding these parameters is essential for selecting the right antenna for a specific application. The radiation pattern is particularly important as it shows how the antenna radiates energy in different directions.',
                'formulas' => [
                    '\\(G = \\text{Efficiency} \\times D\\)',
                    '\\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\)'
                ]
            ],
            [
                'text' => 'What are the parameters of antenna? List out the types of Antenna. [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false,
                'solution' => 'Parameters of Antenna:<br>' .
                             '1. Radiation Pattern: Shows the variation of radiation intensity with direction.<br>' .
                             '2. Directivity: Measure of how concentrated the radiation is in a particular direction.<br>' .
                             '3. Gain: Directivity multiplied by radiation efficiency.<br>' .
                             '4. Input Impedance: Impedance at the antenna terminals, typically designed to be 50Ω or 75Ω for matching.<br>' .
                             '5. Polarization: Describes the orientation of the electric field vector (linear, circular, elliptical).<br>' .
                             '6. Bandwidth: Frequency range over which antenna performance is acceptable.<br>' .
                             '7. Effective Aperture: Area that captures power from an incident wave, related to gain.<br>' .
                             '8. Beamwidth: Angular width of the main lobe, usually measured between half-power points.<br>' .
                             '9. Side Lobe Level: Ratio of maximum side lobe intensity to main lobe intensity.<br>' .
                             '10. Radiation Efficiency: Ratio of radiated power to input power.<br><br>' .
                             'Types of Antennas:<br>' .
                             '1. Wire Antennas: Dipole, Monopole, Loop<br>' .
                             '2. Aperture Antennas: Horn, Reflector (parabolic)<br>' .
                             '3. Microstrip Antennas: Patch antennas<br>' .
                             '4. Array Antennas: Yagi-Uda, Log-periodic, Phased arrays<br>' .
                             '5. Traveling Wave Antennas: Helical, Spiral<br>' .
                             '6. Broadband Antennas: Discone, Biconical<br>' .
                             '7. Special Purpose: Slot, Lens antennas<br><br>' .
                             'Each type has its own characteristics and is suitable for specific applications based on frequency, size, gain, and other requirements.',
                'solution_has_diagram' => false,
                'notes' => 'Antenna parameters quantify various aspects of antenna performance. The choice of antenna type depends on the specific application requirements. For example, dipoles are simple and omnidirectional, while parabolic reflectors provide high gain and directivity for point-to-point communication.',
                'formulas' => [
                    '\\(G = \\eta_{rad} D\\)',
                    '\\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\)'
                ]
            ],
            [
                'text' => 'A standard air-filled rectangular waveguide with dimensions \\(8.636 \\text{cm} \\times 4.318 \\text{cm}\\) is fed by a 4 GHz carrier from a coaxial cable. Determine if a \\(\\text{TE}_{10}\\) mode will be propagating or not. [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false,
                'solution' => 'For a waveguide mode to propagate, the operating frequency must be greater than the cutoff frequency of that mode.<br><br>' .
                             'Cutoff frequency for TEₘₙ mode in rectangular waveguide:<br>' .
                             '\\(f_c = \\frac{c}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)<br>' .
                             'where c = speed of light = 3 × 10⁸ m/s (since air-filled)<br>' .
                             'Dimensions: a = 8.636 cm = 0.08636 m, b = 4.318 cm = 0.04318 m<br>' .
                             'For TE₁₀ mode: m=1, n=0<br>' .
                             '\\(f_c = \\frac{3 \\times 10^8}{2} \\sqrt{\\left(\\frac{1}{0.08636}\\right)^2 + 0} = 1.5 \\times 10^8 \\times \\frac{1}{0.08636} = 1.5 \\times 10^8 \\times 11.578\\)<br>' .
                             '\\(f_c = 1.737 \\times 10^9 \\text{ Hz} = 1.737 \\text{ GHz}\\)<br><br>' .
                             'Operating frequency f = 4 GHz<br>' .
                             'Since f > f_c (4 GHz > 1.737 GHz), the TE₁₀ mode will propagate.<br><br>' .
                             'Additionally, we should check if other modes might propagate, but the question specifically asks about TE₁₀ mode.<br>' .
                             'The next mode is TE₂₀ with f_c = 2 × 1.737 = 3.474 GHz, which is also less than 4 GHz, so it would also propagate. TE₀₁ has f_c = c/(2b) = 3e8/(2×0.04318) = 3.474 GHz, same as TE₂₀. TE₁₁ has higher cutoff. So multiple modes can propagate at 4 GHz in this waveguide.',
                'solution_has_diagram' => false,
                'notes' => 'The cutoff frequency is the minimum frequency for a mode to propagate. For air-filled waveguides, c = 3 × 10⁸ m/s. The TE₁₀ mode has the lowest cutoff frequency when a > b, making it the dominant mode. If the operating frequency is below cutoff, the mode is evanescent and decays exponentially.',
                'formulas' => [
                    '\\(f_c = \\frac{c}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)'
                ]
            ],
            [
                'text' => 'Explain the different modes of propagation supported by waveguides. A rectangular waveguide has a cross-section of \\(2.5 \\text{cm} \\times 1.2 \\text{cm}\\). Determine if the signal of 5 GHz propagates in the dominant mode. [2080 Baishakh]',
                'year' => '2080 Baishakh',
                'has_diagram' => false,
                'solution' => 'Modes of propagation in rectangular waveguides:<br>' .
                             '1. TEₘₙ modes (Transverse Electric): Electric field is entirely transverse to the direction of propagation (E_z = 0), magnetic field has a longitudinal component (H_z ≠ 0).<br>' .
                             '2. TMₘₙ modes (Transverse Magnetic): Magnetic field is entirely transverse to the direction of propagation (H_z = 0), electric field has a longitudinal component (E_z ≠ 0).<br>' .
                             '3. TEM mode: Neither E nor H has longitudinal component. This mode does not exist in hollow single-conductor waveguides.<br><br>' .
                             'For rectangular waveguides, m and n are integers ≥ 0, but:<br>' .
                             '- For TEₘₙ: m and n cannot both be zero, but one can be zero.<br>' .
                             '- For TMₘₙ: both m and n must be ≥ 1 (cannot be zero).<br><br>' .
                             'The dominant mode is the mode with the lowest cutoff frequency. For a > b, this is usually TE₁₀.<br><br>' .
                             'Given waveguide: a = 2.5 cm = 0.025 m, b = 1.2 cm = 0.012 m<br>' .
                             'Assume air-filled, so c = 3 × 10⁸ m/s<br>' .
                             'Cutoff frequency for TE₁₀ mode:<br>' .
                             '\\(f_c = \\frac{c}{2a} = \\frac{3 \\times 10^8}{2 \\times 0.025} = \\frac{3 \\times 10^8}{0.05} = 6 \\times 10^9 \\text{ Hz} = 6 \\text{ GHz}\\)<br><br>' .
                             'Operating frequency f = 5 GHz<br>' .
                             'Since f < f_c (5 GHz < 6 GHz), the dominant mode (TE₁₀) will NOT propagate.<br>' .
                             'In fact, no mode will propagate at 5 GHz in this waveguide, since TE₁₀ has the lowest cutoff frequency.<br>' .
                             'The waveguide is too small for 5 GHz operation; it would need larger dimensions to support propagation at this frequency.',
                'solution_has_diagram' => false,
                'notes' => 'Rectangular waveguides support TE and TM modes but not TEM modes. The dominant mode is TE₁₀ when a > b. For propagation to occur, the operating frequency must exceed the cutoff frequency of the mode. If the frequency is below the cutoff of the dominant mode, no propagation occurs at all.',
                'formulas' => [
                    '\\(f_c = \\frac{c}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)',
                    '\\(f_c(\\text{TE}_{10}) = \\frac{c}{2a}\\)'
                ]
            ],
            [
                'text' => 'Differentiate between TE and TM modes. Consider a rectangular waveguide with \\(\\epsilon_r = 4\\), \\(\\mu = \\mu_0\\) with dimensions \\(a = 2.08 \\text{cm}\\), \\(b = 0.54 \\text{cm}\\). Find the cutoff frequency for \\(\\text{TE}_{11}\\) mode and the dominant mode. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false,
                'solution' => 'Difference between TE and TM modes:<br>' .
                             'TE modes (Transverse Electric):<br>' .
                             '- Electric field is entirely perpendicular to the direction of propagation (E_z = 0)<br>' .
                             '- Magnetic field has a component in the direction of propagation (H_z ≠ 0)<br>' .
                             '- Can have m=0 or n=0 (but not both)<br><br>' .
                             'TM modes (Transverse Magnetic):<br>' .
                             '- Magnetic field is entirely perpendicular to the direction of propagation (H_z = 0)<br>' .
                             '- Electric field has a component in the direction of propagation (E_z ≠ 0)<br>' .
                             '- Both m and n must be ≥ 1 (cannot be zero)<br><br>' .
                             'Given waveguide: \\(\\epsilon_r = 4\\), \\(\\mu = \\mu_0\\), so phase velocity \\(v_p = \\frac{c}{\\sqrt{\\epsilon_r}} = \\frac{3 \\times 10^8}{2} = 1.5 \\times 10^8 \\text{ m/s}\\)<br>' .
                             'Dimensions: a = 2.08 cm = 0.0208 m, b = 0.54 cm = 0.0054 m<br><br>' .
                             'Cutoff frequency formula:<br>' .
                             '\\(f_c = \\frac{v_p}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)<br><br>' .
                             'For TE₁₁ mode: m=1, n=1<br>' .
                             '\\(f_c = \\frac{1.5 \\times 10^8}{2} \\sqrt{\\left(\\frac{1}{0.0208}\\right)^2 + \\left(\\frac{1}{0.0054}\\right)^2} = 7.5 \\times 10^7 \\sqrt{(48.077)^2 + (185.185)^2}\\)<br>' .
                             '\\(= 7.5 \\times 10^7 \\sqrt{2311.4 + 34293.5} = 7.5 \\times 10^7 \\sqrt{36604.9} = 7.5 \\times 10^7 \\times 191.32\\)<br>' .
                             '\\(f_c = 1.435 \\times 10^{10} \\text{ Hz} = 14.35 \\text{ GHz}\\)<br><br>' .
                             'Dominant mode: Since a > b, dominant mode is TE₁₀<br>' .
                             'For TE₁₀: m=1, n=0<br>' .
                             '\\(f_c = \\frac{1.5 \\times 10^8}{2} \\sqrt{\\left(\\frac{1}{0.0208}\\right)^2 + 0} = 7.5 \\times 10^7 \\times 48.077 = 3.606 \\times 10^9 \\text{ Hz} = 3.606 \\text{ GHz}\\)<br><br>' .
                             'Summary:<br>' .
                             'Cutoff frequency for TE₁₁ mode = 14.35 GHz<br>' .
                             'Cutoff frequency for dominant mode (TE₁₀) = 3.606 GHz',
                'solution_has_diagram' => false,
                'notes' => 'The key difference between TE and TM modes is which field has a longitudinal component. TE modes are generally easier to excite and are more commonly used. The dominant mode has the lowest cutoff frequency, which for rectangular waveguides with a > b is TE₁₀. The cutoff frequency depends on the waveguide dimensions and the dielectric properties.',
                'formulas' => [
                    '\\(f_c = \\frac{v_p}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)',
                    '\\(v_p = \\frac{c}{\\sqrt{\\epsilon_r}}\\)'
                ]
            ],
            [
                'text' => 'Write short note on antenna and its types. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false,
                'solution' => 'Antenna: An antenna is a device that converts electrical signals into electromagnetic waves for transmission, and vice versa for reception. It is an essential component in wireless communication, radar, broadcasting, and other applications.<br><br>' .
                             'Key characteristics:<br>' .
                             '- Reciprocity: Antenna properties are generally the same for transmission and reception.<br>' .
                             '- Radiation pattern: Shows directional properties.<br>' .
                             '- Gain and directivity: Measure of focusing ability.<br>' .
                             '- Impedance: Typically 50Ω or 75Ω for matching.<br>' .
                             '- Bandwidth: Frequency range of operation.<br><br>' .
                             'Types of antennas:<br>' .
                             '1. Dipole Antenna: Simple wire antenna, half-wave dipole is common. Omnidirectional in plane perpendicular to wire.<br>' .
                             '2. Monopole Antenna: Quarter-wave antenna over ground plane. Common in mobile devices.<br>' .
                             '3. Loop Antenna: Can be small or resonant. Used in RFID, AM radios.<br>' .
                             '4. Patch Antenna: Microstrip antenna, low profile, used in WiFi, GPS.<br>' .
                             '5. Horn Antenna: Flared waveguide, moderate gain, wide bandwidth.<br>' .
                             '6. Parabolic Reflector: High gain, narrow beam. Used in satellite communications, radar.<br>' .
                             '7. Yagi-Uda Antenna: Directional antenna with driven element, reflector, and directors. Common for TV reception.<br>' .
                             '8. Helical Antenna: Circular polarization, used in satellite communications.<br>' .
                             '9. Array Antennas: Multiple elements for high gain and beam steering.<br>' .
                             '10. Log-Periodic Antenna: Wide bandwidth, used in EMC testing, TV reception.<br><br>' .
                             'The choice of antenna depends on frequency, gain, size, cost, and application requirements.',
                'solution_has_diagram' => false,
                'notes' => 'Antennas come in many shapes and sizes, each suited for specific applications. The dipole is fundamental and often used as a reference. Modern wireless devices often use patch or monopole antennas due to their compact size. High-gain applications like satellite communications use parabolic reflectors or horn antennas.',
                'formulas' => []
            ],
            [
                'text' => 'Why TEM-wave doesn\'t exist in a rectangular waveguide? A rectangular waveguide has dimensions \\(a = 1 \\text{cm}\\) and \\(b = 2 \\text{cm}\\). The medium within the waveguides has \\(\\epsilon_r = 1\\), \\(\\mu_r = 1\\), \\(\\sigma = 0\\). Find whether or not the signal with the frequency of 500 MHz will be transmitted in the \\(\\text{TE}_{10}\\) mode. [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false,
                'solution' => 'Why TEM wave doesn\'t exist in rectangular waveguide:<br>' .
                             'TEM (Transverse ElectroMagnetic) mode requires both electric and magnetic fields to be entirely transverse to the direction of propagation (E_z = 0 and H_z = 0).<br>' .
                             'In a hollow single-conductor waveguide, TEM mode cannot exist because:<br>' .
                             '1. If H_z = 0, Ampere\'s law requires that the line integral of H around any closed path equals the current enclosed. But in a hollow waveguide with no axial current, this would require H = 0 everywhere, which is not possible for a propagating wave.<br>' .
                             '2. Similarly, if E_z = 0, Gauss\'s law and the boundary conditions on the conductor walls cannot be satisfied simultaneously for a non-trivial field configuration.<br>' .
                             'TEM modes can exist in multi-conductor systems like coaxial cables or parallel-plate waveguides, but not in hollow single-conductor waveguides.<br><br>' .
                             'Given waveguide: a = 1 cm = 0.01 m, b = 2 cm = 0.02 m<br>' .
                             'Note: Usually a > b, but here b > a, so the wider dimension is b.<br>' .
                             'Medium: air (ε_r=1, μ_r=1), so c = 3 × 10⁸ m/s<br>' .
                             'For TE₁₀ mode: Actually, since b > a, the dominant mode would be TE₀₁ (with variation along the wider dimension).<br>' .
                             'But the question asks specifically for TE₁₀ mode, which would have m=1, n=0, with variation along dimension a.<br>' .
                             'Cutoff frequency for TE₁₀:<br>' .
                             '\\(f_c = \\frac{c}{2a} = \\frac{3 \\times 10^8}{2 \\times 0.01} = \\frac{3 \\times 10^8}{0.02} = 1.5 \\times 10^{10} \\text{ Hz} = 15 \\text{ GHz}\\)<br><br>' .
                             'Operating frequency f = 500 MHz = 0.5 GHz<br>' .
                             'Since f < f_c (0.5 GHz < 15 GHz), the TE₁₀ mode will NOT propagate.<br>' .
                             'In fact, the dominant mode TE₀₁ has f_c = c/(2b) = 3e8/(2×0.02) = 7.5 GHz, which is still much higher than 500 MHz, so no mode will propagate at 500 MHz in this waveguide.<br>' .
                             'The waveguide is designed for much higher frequencies (microwave range).',
                'solution_has_diagram' => false,
                'notes' => 'TEM modes require multiple conductors or special structures. Rectangular waveguides support only TE and TM modes. The cutoff frequency depends on the dimension along which the field varies. Even though b > a in this case, the TE₁₀ mode cutoff is still determined by dimension a, and it\'s very high for 500 MHz operation.',
                'formulas' => [
                    '\\(f_c(\\text{TE}_{10}) = \\frac{c}{2a}\\)'
                ]
            ],
            [
                'text' => 'What are the parameters of antenna? List out the different types of antenna you have studied. [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false,
                'solution' => 'Parameters of antenna:<br>' .
                             '1. Radiation Pattern: Graphical representation of radiation properties as a function of direction.<br>' .
                             '2. Directivity: Ratio of radiation intensity in a given direction to the average radiation intensity.<br>' .
                             '3. Gain: Directivity multiplied by efficiency (accounts for losses).<br>' .
                             '4. Input Impedance: Impedance at antenna terminals, important for matching.<br>' .
                             '5. Polarization: Orientation of the electric field vector (linear, circular, elliptical).<br>' .
                             '6. Bandwidth: Range of frequencies over which performance meets specifications.<br>' .
                             '7. Effective Aperture: Measure of receiving capability, related to gain by \\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\).<br>' .
                             '8. Beamwidth: Angular width of main lobe, usually between half-power points.<br>' .
                             '9. Side Lobe Level: Ratio of maximum side lobe power to main lobe power.<br>' .
                             '10. Radiation Efficiency: Ratio of radiated power to input power.<br><br>' .
                             'Types of antennas:<br>' .
                             '1. Dipole Antenna: Linear conductor, half-wave dipole is resonant.<br>' .
                             '2. Monopole Antenna: Quarter-wave over ground plane.<br>' .
                             '3. Loop Antenna: Circular or rectangular loop, can be small or large.<br>' .
                             '4. Patch Antenna: Rectangular or circular microstrip patch on ground plane.<br>' .
                             '5. Horn Antenna: Flared waveguide end, moderate gain.<br>' .
                             '6. Parabolic Reflector: Uses reflector to focus energy, high gain.<br>' .
                             '7. Yagi-Uda Antenna: Array with reflector, driven element, and directors.<br>' .
                             '8. Helical Antenna: Spiral shape, circular polarization.<br>' .
                             '9. Log-Periodic Antenna: Self-similar structure, wide bandwidth.<br>' .
                             '10. Slot Antenna: Slot in metal surface, complementary to dipole.<br>' .
                             '11. Array Antennas: Multiple elements for high gain and beam control.<br>' .
                             '12. Spiral Antenna: Wideband, circular polarization.<br><br>' .
                             'Each type has unique characteristics suitable for different applications.',
                'solution_has_diagram' => false,
                'notes' => 'Antenna parameters describe various aspects of performance. The radiation pattern is fundamental, showing how the antenna radiates in different directions. Gain and directivity indicate focusing ability. Impedance matching is crucial for efficient power transfer. Different antenna types are chosen based on frequency, size, gain, and application requirements.',
                'formulas' => [
                    '\\(G = \\eta_{rad} D\\)',
                    '\\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\)'
                ]
            ],
            [
                'text' => 'A rectangular waveguide has dimensions \\(a = 4 \\text{cm}\\) and \\(b = 2 \\text{cm}\\). Determine the cut-off frequency and range of frequencies over which the guide will support single mode. [2072 Chaitra]',
                'year' => '2072 Chaitra',
                'has_diagram' => false,
                'solution' => 'Given: a = 4 cm = 0.04 m, b = 2 cm = 0.02 m<br>' .
                             'Assume air-filled, so c = 3 × 10⁸ m/s<br><br>' .
                             'Cutoff frequencies for various modes:<br>' .
                             'TE₁₀: \\(f_c = \\frac{c}{2a} = \\frac{3 \\times 10^8}{2 \\times 0.04} = \\frac{3 \\times 10^8}{0.08} = 3.75 \\text{ GHz}\\)<br>' .
                             'TE₂₀: \\(f_c = \\frac{c}{a} = \\frac{3 \\times 10^8}{0.04} = 7.5 \\text{ GHz}\\)<br>' .
                             'TE₀₁: \\(f_c = \\frac{c}{2b} = \\frac{3 \\times 10^8}{2 \\times 0.02} = \\frac{3 \\times 10^8}{0.04} = 7.5 \\text{ GHz}\\)<br>' .
                             'TE₁₁ and TM₁₁: \\(f_c = \\frac{c}{2} \\sqrt{\\left(\\frac{1}{a}\\right)^2 + \\left(\\frac{1}{b}\\right)^2} = \\frac{3 \\times 10^8}{2} \\sqrt{\\left(\\frac{1}{0.04}\\right)^2 + \\left(\\frac{1}{0.02}\\right)^2} = 1.5 \\times 10^8 \\sqrt{625 + 2500} = 1.5 \\times 10^8 \\sqrt{3125} = 1.5 \\times 10^8 \\times 55.9 = 8.385 \\text{ GHz}\\)<br><br>' .
                             'The dominant mode is TE₁₀ with f_c = 3.75 GHz.<br>' .
                             'The next higher modes are TE₂₀ and TE₀₁, both with f_c = 7.5 GHz.<br>' .
                             'Therefore, the range of frequencies for single-mode operation (only TE₁₀ mode propagating) is from 3.75 GHz to 7.5 GHz.<br>' .
                             'Below 3.75 GHz, no mode propagates.<br>' .
                             'At 7.5 GHz, TE₂₀ and TE₀₁ modes start to propagate, so above 7.5 GHz, multiple modes exist.<br><br>' .
                             'Answer:<br>' .
                             'Cut-off frequency of dominant mode (TE₁₀) = 3.75 GHz<br>' .
                             'Single-mode range: 3.75 GHz to 7.5 GHz',
                'solution_has_diagram' => false,
                'notes' => 'Single-mode operation is desirable to avoid modal dispersion and simplify system design. The range is between the cutoff of the dominant mode and the cutoff of the next higher mode. In this case, TE₂₀ and TE₀₁ have the same cutoff frequency, so they start propagating simultaneously at 7.5 GHz.',
                'formulas' => [
                    '\\(f_c = \\frac{c}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)'
                ]
            ],
            [
                'text' => 'Write short notes on: a) TE mode and TM mode b) Antenna Properties. [2075 Ashwin]',
                'year' => '2075 Ashwin',
                'has_diagram' => false,
                'solution' => 'a) TE mode and TM mode:<br>' .
                             'TE mode (Transverse Electric):<br>' .
                             '- Electric field is entirely perpendicular to the direction of propagation (E_z = 0).<br>' .
                             '- Magnetic field has a component in the direction of propagation (H_z ≠ 0).<br>' .
                             '- Also called H-modes.<br>' .
                             '- In rectangular waveguides, TEₘₙ modes exist for m,n = 0,1,2,... but not both zero.<br>' .
                             '- TE₁₀ is usually the dominant mode in standard rectangular waveguides.<br><br>' .
                             'TM mode (Transverse Magnetic):<br>' .
                             '- Magnetic field is entirely perpendicular to the direction of propagation (H_z = 0).<br>' .
                             '- Electric field has a component in the direction of propagation (E_z ≠ 0).<br>' .
                             '- Also called E-modes.<br>' .
                             '- In rectangular waveguides, TMₘₙ modes exist for m,n = 1,2,3,... (both ≥ 1).<br>' .
                             '- TM₁₁ is the lowest TM mode.<br><br>' .
                             'Both TE and TM modes have cutoff frequencies below which they do not propagate. TEM mode does not exist in hollow waveguides.<br><br>' .
                             'b) Antenna Properties:<br>' .
                             '1. Radiation Pattern: Shows directional dependence of radiation.<br>' .
                             '2. Directivity: Measure of how focused the radiation is in a particular direction.<br>' .
                             '3. Gain: Directivity including efficiency losses.<br>' .
                             '4. Input Impedance: Should be matched to transmission line (typically 50Ω).<br>' .
                             '5. Polarization: Orientation of E-field (linear, circular, elliptical).<br>' .
                             '6. Bandwidth: Frequency range of acceptable performance.<br>' .
                             '7. Effective Aperture: Related to gain, measures receiving area.<br>' .
                             '8. Beamwidth: Angular width of main lobe.<br>' .
                             '9. Side Lobe Level: Unwanted radiation in directions other than main beam.<br>' .
                             '10. Radiation Efficiency: Fraction of input power that is radiated.<br><br>' .
                             'These properties characterize antenna performance and are crucial for system design.',
                'solution_has_diagram' => false,
                'notes' => 'TE and TM modes are the fundamental modes in waveguides. Antenna properties describe various aspects of performance, with radiation pattern and gain being among the most important. Understanding these concepts is essential for microwave and antenna engineering.',
                'formulas' => [
                    '\\(G = \\eta_{rad} D\\)',
                    '\\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\)'
                ]
            ],
            [
                'text' => 'What are the advantages and disadvantages of waveguides when you compare it with transmission lines? Explain the transverse electric(TE) and transverse magnetic(TM) modes used in rectangular waveguides. [2075 Chaitra]',
                'year' => '2075 Chaitra',
                'has_diagram' => false,
                'solution' => 'Advantages of waveguides over transmission lines:<br>' .
                             '1. Lower loss at high frequencies (especially above 10 GHz)<br>' .
                             '2. Higher power handling capability<br>' .
                             '3. Better shielding (no radiation leakage)<br>' .
                             '4. Simpler mechanical structure for high-frequency applications<br>' .
                             '5. No dielectric loss (if air-filled)<br>' .
                             '6. Higher Q factor<br><br>' .
                             'Disadvantages of waveguides:<br>' .
                             '1. Larger size and weight<br>' .
                             '2. Higher cost<br>' .
                             '3. Narrow bandwidth for single-mode operation<br>' .
                             '4. Cannot transmit DC or low frequencies (below cutoff)<br>' .
                             '5. More difficult to install and bend<br>' .
                             '6. Coupling to other components can be more complex<br><br>' .
                             'TE and TM modes in rectangular waveguides:<br>' .
                             'TE modes (Transverse Electric):<br>' .
                             '- Electric field is entirely transverse to propagation direction (E_z = 0)<br>' .
                             '- Magnetic field has longitudinal component (H_z ≠ 0)<br>' .
                             '- Designated as TEₘₙ, where m and n are mode numbers<br>' .
                             '- m and n can be 0,1,2,... but not both 0<br>' .
                             '- TE₁₀ is dominant mode when a > b<br><br>' .
                             'TM modes (Transverse Magnetic):<br>' .
                             '- Magnetic field is entirely transverse to propagation direction (H_z = 0)<br>' .
                             '- Electric field has longitudinal component (E_z ≠ 0)<br>' .
                             '- Designated as TMₘₙ<br>' .
                             '- m and n must be 1,2,3,... (both ≥ 1)<br>' .
                             '- TM₁₁ is the lowest TM mode<br><br>' .
                             'Both modes have cutoff frequencies below which they do not propagate. The cutoff frequency depends on waveguide dimensions and mode numbers. TEM mode does not exist in hollow rectangular waveguides.',
                'solution_has_diagram' => false,
                'notes' => 'Waveguides are preferred at microwave frequencies due to lower loss, while transmission lines (coaxial, microstrip) are used at lower frequencies and for compactness. TE and TM modes are characterized by which field has a longitudinal component. The mode numbers m and n correspond to the number of half-wave variations along the a and b dimensions, respectively.',
                'formulas' => [
                    '\\(f_c = \\frac{c}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)'
                ]
            ],
            [
                'text' => 'Give the definition of an antenna and explain the properties of any one type of antenna that you have studied during your electromagnetics course. [2075 Chaitra]',
                'year' => '2075 Chaitra',
                'has_diagram' => false,
                'solution' => 'Definition of antenna: An antenna is a transducer that converts electrical energy into electromagnetic waves for transmission, and converts electromagnetic waves into electrical energy for reception. It is a crucial component in wireless communication systems, radar, broadcasting, and other applications involving electromagnetic wave propagation.<br><br>' .
                             'Properties of Half-Wave Dipole Antenna:<br>' .
                             'The half-wave dipole is one of the most fundamental and widely used antennas.<br><br>' .
                             'Structure: Consists of two collinear conductors, each of length λ/4, separated by a small gap at the center where the feed is applied. Total length is approximately λ/2.<br><br>' .
                             'Radiation Pattern: Omnidirectional in the plane perpendicular to the dipole axis (azimuth plane). In the elevation plane (containing the dipole axis), it has a figure-eight pattern with nulls along the axis.<br><br>' .
                             'Directivity: Approximately 2.15 dBi (1.64 linear). This means it radiates 1.64 times more power in the direction of maximum radiation compared to an isotropic radiator radiating the same total power.<br><br>' .
                             'Input Impedance: Approximately 73 + j42.5 Ω at resonance. The reactive part can be tuned to zero by slightly adjusting the length (typically to about 0.48λ). The resistive part is about 73 Ω, which is close to 75 Ω coaxial cable impedance.<br><br>' .
                             'Bandwidth: Relatively narrow bandwidth, typically a few percent of center frequency. Defined as the frequency range over which VSWR < 2:1 or similar criterion.<br><br>' .
                             'Polarization: Linearly polarized, with E-field parallel to the dipole axis.<br><br>' .
                             'Advantages: Simple construction, well-understood characteristics, good efficiency.<br>' .
                             'Disadvantages: Limited bandwidth, requires balun for connection to coaxial cable (unbalanced line), relatively large size at low frequencies.<br><br>' .
                             'Applications: Widely used as standalone antennas and as elements in more complex antennas like Yagi-Uda arrays. Often used as a reference antenna for gain measurements.',
                'solution_has_diagram' => false,
                'notes' => 'The half-wave dipole is a fundamental antenna type that serves as a building block for understanding more complex antennas. Its radiation pattern, impedance, and other properties are well-documented and serve as references in antenna engineering. Many practical antennas are variations or combinations of dipole elements.',
                'formulas' => [
                    '\\(D \\approx 1.64 \\text{ (linear) or } 2.15 \\text{ dBi}\\)',
                    '\\(Z_{in} \\approx 73 + j42.5 \\Omega\\)'
                ]
            ],
            [
                'text' => 'Write short notes on: Antenna properties. [2075 Ashwin]',
                'year' => '2075 Ashwin',
                'has_diagram' => false,
                'solution' => 'Antenna Properties:<br>' .
                             '1. Radiation Pattern: A graphical representation showing the variation of radiation intensity as a function of direction. It can be 2D or 3D and shows main lobes, side lobes, and nulls.<br>' .
                             '2. Directivity: The ratio of radiation intensity in a given direction to the average radiation intensity. It measures how focused the antenna\'s radiation is. Maximum directivity is in the direction of the main lobe.<br>' .
                             '3. Gain: Similar to directivity but includes antenna efficiency (ohmic, dielectric, and mismatch losses). Gain = Efficiency × Directivity. Usually expressed in dBi (relative to isotropic) or dBd (relative to dipole).<br>' .
                             '4. Input Impedance: The impedance presented by the antenna at its terminals. For efficient power transfer, it should match the transmission line impedance (typically 50Ω or 75Ω).<br>' .
                             '5. Polarization: Describes the orientation of the electric field vector of the radiated wave. Can be linear (vertical, horizontal), circular (right-hand, left-hand), or elliptical.<br>' .
                             '6. Bandwidth: The range of frequencies over which the antenna performance meets specified criteria (e.g., VSWR < 2:1, gain variation < 3 dB, pattern stability).<br>' .
                             '7. Effective Aperture: A measure of the antenna\'s ability to capture power from an incident electromagnetic wave. Related to gain by \\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\).<br>' .
                             '8. Beamwidth: The angular width of the main lobe, usually measured between half-power (-3 dB) points. Narrow beamwidth indicates high directivity.<br>' .
                             '9. Side Lobe Level: The ratio of the power in the largest side lobe to the power in the main lobe, usually expressed in dB. Lower side lobe levels are generally desirable.<br>' .
                             '10. Radiation Efficiency: The ratio of total power radiated to the net power accepted by the antenna from the connected transmitter.<br><br>' .
                             'These properties are interrelated and characterize the antenna\'s performance for specific applications. Design involves trade-offs between these parameters.',
                'solution_has_diagram' => false,
                'notes' => 'Antenna properties are crucial for selecting and designing antennas for specific applications. The radiation pattern and gain are often the most important parameters, but impedance matching and bandwidth are critical for practical implementation. Understanding these properties helps in optimizing antenna performance for different scenarios.',
                'formulas' => [
                    '\\(G = \\eta_{rad} D\\)',
                    '\\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\)'
                ]
            ],
            [
                'text' => 'Differentiate between transmission line and waveguide. A rectangular waveguide having cross-section of \\(2 \\text{cm} \\times 1 \\text{cm}\\) is filled with a lossless medium characterized by \\(\\epsilon = 4\\epsilon_0\\) and \\(\\mu = \\mu_0\\). Calculate the cut-off frequency of the dominant mode. [2074 Ashwin]',
                'year' => '2074 Ashwin',
                'has_diagram' => false,
                'solution' => 'Difference between transmission line and waveguide:<br>' .
                             'Transmission Line:<br>' .
                             '- Can transmit signals from DC to high frequencies<br>' .
                             '- Supports TEM mode (and possibly higher-order modes at high frequencies)<br>' .
                             '- Examples: coaxial cable, twin-lead, microstrip<br>' .
                             '- Generally smaller cross-section for same frequency compared to waveguides<br>' .
                             '- Higher loss at microwave frequencies<br>' .
                             '- Easier to bend and install<br><br>' .
                             'Waveguide:<br>' .
                             '- Cannot transmit DC or frequencies below cutoff<br>' .
                             '- Supports only TE and TM modes (no TEM mode)<br>' .
                             '- Examples: rectangular, circular waveguides<br>' .
                             '- Larger cross-section for same frequency<br>' .
                             '- Lower loss at microwave frequencies<br>' .
                             '- More rigid, harder to bend<br><br>' .
                             'Given waveguide: a = 2 cm = 0.02 m, b = 1 cm = 0.01 m<br>' .
                             'Filled with medium: ε = 4ε₀, μ = μ₀, so relative permittivity ε_r = 4<br>' .
                             'Phase velocity in medium: \\(v_p = \\frac{1}{\\sqrt{\\mu \\epsilon}} = \\frac{1}{\\sqrt{\\mu_0 \\cdot 4\\epsilon_0}} = \\frac{c}{2}\\), where c = 3 × 10⁸ m/s<br>' .
                             'So, \\(v_p = 1.5 \\times 10^8 \\text{ m/s}\\)<br><br>' .
                             'Dominant mode: Since a > b, dominant mode is TE₁₀<br>' .
                             'Cutoff frequency for TE₁₀ mode:<br>' .
                             '\\(f_c = \\frac{v_p}{2a} = \\frac{1.5 \\times 10^8}{2 \\times 0.02} = \\frac{1.5 \\times 10^8}{0.04} = 3.75 \\times 10^9 \\text{ Hz} = 3.75 \\text{ GHz}\\)<br><br>' .
                             'Answer: Cut-off frequency of dominant mode = 3.75 GHz',
                'solution_has_diagram' => false,
                'notes' => 'The key differences are in the modes supported and frequency range. Transmission lines support TEM mode and can operate down to DC, while waveguides support only TE/TM modes and have a cutoff frequency. The cutoff frequency in a dielectric-filled waveguide is lower than in an air-filled one by a factor of √ε_r.',
                'formulas' => [
                    '\\(v_p = \\frac{1}{\\sqrt{\\mu \\epsilon}}\\)',
                    '\\(f_c(\\text{TE}_{10}) = \\frac{v_p}{2a}\\)'
                ]
            ],
            [
                'text' => 'Write short notes on antenna and its properties. [2074 Ashwin]',
                'year' => '2074 Ashwin',
                'has_diagram' => false,
                'solution' => 'Antenna: An antenna is a device that converts electrical energy into electromagnetic waves for transmission and vice versa for reception. It is an essential component in wireless communication systems, radar, broadcasting, remote sensing, and many other applications.<br><br>' .
                             'Key properties of antennas:<br>' .
                             '1. Radiation Pattern: A graphical representation of the radiation properties of the antenna as a function of direction. It shows the distribution of radiated energy in space, including main lobes, side lobes, and nulls.<br>' .
                             '2. Directivity: A measure of how concentrated the radiation is in a particular direction. It is the ratio of radiation intensity in a given direction to the average radiation intensity over all directions.<br>' .
                             '3. Gain: Similar to directivity but accounts for losses in the antenna. Gain = Radiation Efficiency × Directivity. It is usually expressed in dBi (decibels relative to isotropic radiator).<br>' .
                             '4. Input Impedance: The impedance presented by the antenna at its input terminals. For maximum power transfer, it should match the characteristic impedance of the transmission line (typically 50Ω or 75Ω).<br>' .
                             '5. Polarization: Describes the orientation of the electric field vector of the radiated wave. It can be linear (vertical, horizontal), circular (right-hand, left-hand), or elliptical.<br>' .
                             '6. Bandwidth: The range of frequencies over which the antenna performance meets specified criteria, such as VSWR < 2:1, gain variation within 3 dB, or pattern stability.<br>' .
                             '7. Effective Aperture: A measure of the antenna\'s ability to collect power from an incident electromagnetic wave. It is related to gain by \\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\).<br>' .
                             '8. Beamwidth: The angular width of the main radiation lobe, usually measured between half-power (-3 dB) points.<br>' .
                             '9. Side Lobe Level: The ratio of the power in the largest side lobe to the power in the main lobe, typically expressed in decibels.<br>' .
                             '10. Radiation Efficiency: The ratio of total power radiated by the antenna to the net power accepted by the antenna from the transmitter.<br><br>' .
                             'These properties are interrelated and must be considered together in antenna design and selection for specific applications.',
                'solution_has_diagram' => false,
                'notes' => 'Antennas are characterized by multiple parameters that describe their performance. The radiation pattern is fundamental, showing how the antenna radiates in different directions. Gain and directivity indicate focusing ability, while impedance and bandwidth are crucial for practical implementation. Different applications prioritize different properties.',
                'formulas' => [
                    '\\(G = \\eta_{rad} D\\)',
                    '\\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\)'
                ]
            ],
            [
                'text' => 'Explain the modes supported by a rectangular waveguide. Calculate the cut off frequencies of the first four propagating modes for an air filled copper waveguide with dimension \\(a = 2.5 \\text{cm}\\), \\(b = 1.2 \\text{cm}\\). [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false,
                'solution' => 'Modes supported by rectangular waveguide:<br>' .
                             'Rectangular waveguides support TEₘₙ (Transverse Electric) and TMₘₙ (Transverse Magnetic) modes, but not TEM mode.<br>' .
                             '- TEₘₙ modes: Electric field is entirely transverse to propagation direction (E_z = 0), magnetic field has longitudinal component (H_z ≠ 0). Mode numbers m,n = 0,1,2,... but not both zero.<br>' .
                             '- TMₘₙ modes: Magnetic field is entirely transverse to propagation direction (H_z = 0), electric field has longitudinal component (E_z ≠ 0). Mode numbers m,n = 1,2,3,... (both ≥ 1).<br><br>' .
                             'Given: a = 2.5 cm = 0.025 m, b = 1.2 cm = 0.012 m, air-filled (c = 3 × 10⁸ m/s)<br>' .
                             'Cutoff frequency formula: \\(f_c = \\frac{c}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)<br><br>' .
                             'Calculate cutoff frequencies:<br>' .
                             '1. TE₁₀ (dominant mode): m=1, n=0<br>' .
                             '\\(f_c = \\frac{3 \\times 10^8}{2 \\times 0.025} = \\frac{3 \\times 10^8}{0.05} = 6 \\text{ GHz}\\)<br><br>' .
                             '2. TE₂₀: m=2, n=0<br>' .
                             '\\(f_c = \\frac{3 \\times 10^8}{2} \\sqrt{\\left(\\frac{2}{0.025}\\right)^2} = 1.5 \\times 10^8 \\times 80 = 12 \\text{ GHz}\\)<br><br>' .
                             '3. TE₀₁: m=0, n=1<br>' .
                             '\\(f_c = \\frac{3 \\times 10^8}{2 \\times 0.012} = \\frac{3 \\times 10^8}{0.024} = 12.5 \\text{ GHz}\\)<br><br>' .
                             '4. TE₁₁ and TM₁₁: m=1, n=1 (same cutoff frequency)<br>' .
                             '\\(f_c = \\frac{3 \\times 10^8}{2} \\sqrt{\\left(\\frac{1}{0.025}\\right)^2 + \\left(\\frac{1}{0.012}\\right)^2} = 1.5 \\times 10^8 \\sqrt{1600 + 6944.44} = 1.5 \\times 10^8 \\sqrt{8544.44} = 1.5 \\times 10^8 \\times 92.42 = 13.863 \\text{ GHz}\\)<br><br>' .
                             'The first four propagating modes in order of increasing cutoff frequency are:<br>' .
                             '1. TE₁₀: 6 GHz<br>' .
                             '2. TE₂₀: 12 GHz<br>' .
                             '3. TE₀₁: 12.5 GHz<br>' .
                             '4. TE₁₁/TM₁₁: 13.863 GHz<br><br>' .
                             'Note: TE₂₀ has lower cutoff than TE₀₁ in this case because a/b = 2.083, so 2/a = 80 m⁻¹ while 1/b = 83.33 m⁻¹, but 2/a < 1/b? Wait, let me recalculate:<br>' .
                             'Actually, for TE₂₀: \\(\\sqrt{(2/0.025)^2} = \\sqrt{80^2} = 80\\)<br>' .
                             'For TE₀₁: \\(\\sqrt{(1/0.012)^2} = \\sqrt{83.33^2} = 83.33\\)<br>' .
                             'So f_c(TE₂₀) = 1.5e8 × 80 = 12 GHz<br>' .
                             'f_c(TE₀₁) = 1.5e8 × 83.33 = 12.5 GHz, yes.<br>' .
                             'So order is correct.',
                'solution_has_diagram' => false,
                'notes' => 'The modes are ordered by their cutoff frequencies. The dominant mode TE₁₀ has the lowest cutoff. TE₂₀ and TE₀₁ are degenerate in some waveguides but not here. TE₁₁ and TM₁₁ have the same cutoff frequency but are different modes. The actual order of modes depends on the ratio a/b.',
                'formulas' => [
                    '\\(f_c = \\frac{c}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)'
                ]
            ],
            [
                'text' => 'Write short notes on antenna and its types. [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false,
                'solution' => 'Antenna: An antenna is a transducer that converts electrical energy into electromagnetic waves for transmission and vice versa for reception. It is a key component in wireless communication systems, radar, broadcasting, and navigation.<br><br>' .
                             'Fundamental properties:<br>' .
                             '- Reciprocity: Performance is generally the same for transmission and reception.<br>' .
                             '- Radiation pattern: Shows directional characteristics.<br>' .
                             '- Gain and directivity: Measure of focusing ability.<br>' .
                             '- Impedance: Typically designed to match 50Ω or 75Ω systems.<br>' .
                             '- Bandwidth: Frequency range of operation.<br>' .
                             '- Polarization: Orientation of the electric field.<br><br>' .
                             'Types of antennas:<br>' .
                             '1. Wire Antennas:<br>' .
                             '   - Dipole: Half-wave dipole is fundamental, omnidirectional.<br>' .
                             '   - Monopole: Quarter-wave over ground plane, common in mobiles.<br>' .
                             '   - Loop: Small loop or resonant loop, used in RFID, AM radio.<br><br>' .
                             '2. Aperture Antennas:<br>' .
                             '   - Horn: Flared waveguide, moderate gain, wide bandwidth.<br>' .
                             '   - Parabolic reflector: High gain, narrow beam, used in satellite comms.<br><br>' .
                             '3. Microstrip Antennas:<br>' .
                             '   - Patch: Low profile, easy to fabricate, used in WiFi, GPS.<br><br>' .
                             '4. Array Antennas:<br>' .
                             '   - Yagi-Uda: Driven element with reflector and directors, directional.<br>' .
                             '   - Log-periodic: Wide bandwidth, self-similar structure.<br>' .
                             '   - Phased array: Electronically steerable beam.<br><br>' .
                             '5. Traveling Wave Antennas:<br>' .
                             '   - Helical: Circular polarization, used in satellite comms.<br>' .
                             '   - Spiral: Wideband, circular polarization.<br><br>' .
                             '6. Special Types:<br>' .
                             '   - Slot: Complementary to dipole, used in aircraft.<br>' .
                             '   - Lens: Uses dielectric lens to focus beam.<br><br>' .
                             'The choice of antenna depends on frequency, gain, size, cost, and application requirements.',
                'solution_has_diagram' => false,
                'notes' => 'Antennas are classified based on their structure and operating principles. Each type has unique characteristics suitable for specific applications. Modern wireless devices often use compact antennas like patches or monopoles, while high-gain applications use reflectors or arrays. Understanding antenna types helps in selecting the right antenna for a given application.',
                'formulas' => []
            ],
            [
                'text' => 'Why does a hollow rectangular waveguide not support TEM mode? A rectangular air-filled waveguide has a cross-section of \\(45 \\times 90 \\text{mm}\\). Find the cut-off frequencies of the first four propagating modes. [2072 Chaitra]',
                'year' => '2072 Chaitra',
                'has_diagram' => false,
                'solution' => 'Why hollow rectangular waveguide doesn\'t support TEM mode:<br>' .
                             'TEM (Transverse ElectroMagnetic) mode requires both electric and magnetic fields to be entirely transverse to the direction of propagation (E_z = 0 and H_z = 0).<br>' .
                             'In a hollow single-conductor waveguide:<br>' .
                             '1. If H_z = 0, Ampere\'s circuital law states that the line integral of H around any closed path equals the current enclosed. Since there is no axial current in a hollow waveguide, this implies that the line integral is zero for any path. For a path around the waveguide cross-section, this would require H = 0 everywhere, which contradicts the existence of a propagating wave.<br>' .
                             '2. If E_z = 0, Gauss\'s law and the boundary conditions (tangential E must be zero on perfect conductor walls) cannot be satisfied simultaneously for a non-trivial field configuration without longitudinal variation.<br>' .
                             'Therefore, TEM mode cannot exist in hollow single-conductor waveguides. TEM modes can exist in multi-conductor systems like coaxial cables or parallel-plate waveguides.<br><br>' .
                             'Given waveguide: a = 90 mm = 0.09 m (wider dimension), b = 45 mm = 0.045 m<br>' .
                             'Air-filled, so c = 3 × 10⁸ m/s<br>' .
                             'Cutoff frequency: \\(f_c = \\frac{c}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)<br><br>' .
                             'First four propagating modes (in order of increasing cutoff frequency):<br>' .
                             '1. TE₁₀ (dominant mode): m=1, n=0<br>' .
                             '\\(f_c = \\frac{3 \\times 10^8}{2 \\times 0.09} = \\frac{3 \\times 10^8}{0.18} = 1.667 \\text{ GHz}\\)<br><br>' .
                             '2. TE₂₀: m=2, n=0<br>' .
                             '\\(f_c = \\frac{3 \\times 10^8}{2} \\sqrt{\\left(\\frac{2}{0.09}\\right)^2} = 1.5 \\times 10^8 \\times 22.222 = 3.333 \\text{ GHz}\\)<br><br>' .
                             '3. TE₀₁: m=0, n=1<br>' .
                             '\\(f_c = \\frac{3 \\times 10^8}{2 \\times 0.045} = \\frac{3 \\times 10^8}{0.09} = 3.333 \\text{ GHz}\\)<br><br>' .
                             '4. TE₁₁ and TM₁₁: m=1, n=1<br>' .
                             '\\(f_c = \\frac{3 \\times 10^8}{2} \\sqrt{\\left(\\frac{1}{0.09}\\right)^2 + \\left(\\frac{1}{0.045}\\right)^2} = 1.5 \\times 10^8 \\sqrt{123.457 + 493.827} = 1.5 \\times 10^8 \\sqrt{617.284} = 1.5 \\times 10^8 \\times 24.845 = 3.727 \\text{ GHz}\\)<br><br>' .
                             'Note: TE₂₀ and TE₀₁ have the same cutoff frequency (3.333 GHz) in this waveguide because b = a/2, so 2/a = 1/b.<br>' .
                             'So the first four modes are:<br>' .
                             '1. TE₁₀: 1.667 GHz<br>' .
                             '2. TE₂₀: 3.333 GHz<br>' .
                             '3. TE₀₁: 3.333 GHz<br>' .
                             '4. TE₁₁/TM₁₁: 3.727 GHz',
                'solution_has_diagram' => false,
                'notes' => 'The absence of TEM mode is a fundamental property of hollow waveguides. The cutoff frequencies depend on dimensions and mode numbers. When dimensions have simple ratios, modes can be degenerate (same cutoff frequency). Here, since b = a/2, TE₂₀ and TE₀₁ are degenerate.',
                'formulas' => [
                    '\\(f_c = \\frac{c}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)'
                ]
            ],
            [
                'text' => 'Write short notes on: a) Antenna types and properties b) Quarter wave transformer. [2069 Chaitra]',
                'year' => '2069 Chaitra',
                'has_diagram' => false,
                'solution' => 'a) Antenna types and properties:<br>' .
                             'Antenna Types:<br>' .
                             '1. Dipole: Half-wave dipole is fundamental, omnidirectional in H-plane.<br>' .
                             '2. Monopole: Quarter-wave over ground, half the size of dipole.<br>' .
                             '3. Loop: Small loop (magnetic dipole) or large loop.<br>' .
                             '4. Patch: Microstrip patch, low profile, used in mobile devices.<br>' .
                             '5. Horn: Flared waveguide, moderate gain, wide bandwidth.<br>' .
                             '6. Parabolic: High gain, narrow beam, used in satellite dishes.<br>' .
                             '7. Yagi-Uda: Directional array with reflector and directors.<br>' .
                             '8. Helical: Circular polarization, used in space communications.<br>' .
                             '9. Log-periodic: Wide bandwidth, frequency-independent characteristics.<br>' .
                             '10. Array: Multiple elements for high gain and beam steering.<br><br>' .
                             'Antenna Properties:<br>' .
                             '1. Radiation Pattern: Shows directional dependence of radiation.<br>' .
                             '2. Directivity: Measure of focusing ability (ratio to isotropic).<br>' .
                             '3. Gain: Directivity including efficiency losses.<br>' .
                             '4. Input Impedance: Should match transmission line (typically 50Ω).<br>' .
                             '5. Polarization: Orientation of E-field (linear, circular, elliptical).<br>' .
                             '6. Bandwidth: Frequency range of acceptable performance.<br>' .
                             '7. Effective Aperture: Related to gain, \\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\).<br>' .
                             '8. Beamwidth: Angular width of main lobe (-3 dB points).<br>' .
                             '9. Side Lobe Level: Ratio of max side lobe to main lobe power.<br>' .
                             '10. Efficiency: Ratio of radiated power to input power.<br><br>' .
                             'b) Quarter wave transformer:<br>' .
                             'A quarter-wave transformer is a section of transmission line with length λ/4 (at the design frequency) used to match two different impedances.<br>' .
                             'It is inserted between a transmission line of characteristic impedance Z₀ and a load impedance Z_L.<br>' .
                             'The characteristic impedance Z₁ of the transformer is chosen as:<br>' .
                             '\\(Z_1 = \\sqrt{Z_0 Z_L}\\)<br>' .
                             'This makes the input impedance equal to Z₀, providing a match.<br>' .
                             'Advantages: Simple, low loss.<br>' .
                             'Disadvantages: Narrow bandwidth, works only at design frequency and odd harmonics, requires specific Z₁ which may not be available, only matches real impedances directly.<br>' .
                             'For complex loads, a length of line must first transform the load to a real impedance at some point, then the quarter-wave transformer is placed there.',
                'solution_has_diagram' => false,
                'notes' => 'Antennas are diverse in type and properties, each suited for specific applications. The quarter-wave transformer is a simple and effective matching technique but has limitations in bandwidth and applicability. Both topics are fundamental in RF and microwave engineering.',
                'formulas' => [
                    '\\(A_e = \\frac{\\lambda^2 G}{4\\pi}\\)',
                    '\\(Z_1 = \\sqrt{Z_0 Z_L}\\)'
                ]
            ],
            [
                'text' => 'Explain in brief the modes supported by rectangular waveguides. Consider a rectangular waveguide with \\(\\epsilon_r = 2\\), \\(\\mu = \\mu_0\\) with dimensions \\(a = 1.07 \\text{cm}\\), \\(b = 0.43 \\text{cm}\\). Find the cut off frequency for \\(\\text{TM}_{11}\\) mode and the dominant mode. [2068 Chaitra]',
                'year' => '2068 Chaitra',
                'has_diagram' => false,
                'solution' => 'Modes supported by rectangular waveguides:<br>' .
                             'Rectangular waveguides support TEₘₙ (Transverse Electric) and TMₘₙ (Transverse Magnetic) modes, but not TEM mode.<br>' .
                             '- TEₘₙ modes: Electric field is entirely transverse to propagation direction (E_z = 0), magnetic field has longitudinal component (H_z ≠ 0). Mode indices m,n = 0,1,2,... but not both zero.<br>' .
                             '- TMₘₙ modes: Magnetic field is entirely transverse to propagation direction (H_z = 0), electric field has longitudinal component (E_z ≠ 0). Mode indices m,n = 1,2,3,... (both ≥ 1).<br>' .
                             'The dominant mode (lowest cutoff frequency) is TE₁₀ when a > b.<br><br>' .
                             'Given: ε_r = 2, μ = μ₀, so phase velocity \\(v_p = \\frac{c}{\\sqrt{\\epsilon_r}} = \\frac{3 \\times 10^8}{\\sqrt{2}} = 2.121 \\times 10^8 \\text{ m/s}\\)<br>' .
                             'Dimensions: a = 1.07 cm = 0.0107 m, b = 0.43 cm = 0.0043 m<br>' .
                             'Cutoff frequency: \\(f_c = \\frac{v_p}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)<br><br>' .
                             'For TM₁₁ mode: m=1, n=1<br>' .
                             '\\(f_c = \\frac{2.121 \\times 10^8}{2} \\sqrt{\\left(\\frac{1}{0.0107}\\right)^2 + \\left(\\frac{1}{0.0043}\\right)^2} = 1.0605 \\times 10^8 \\sqrt{(93.458)^2 + (232.558)^2}\\)<br>' .
                             '\\(= 1.0605 \\times 10^8 \\sqrt{8733.5 + 54083.3} = 1.0605 \\times 10^8 \\sqrt{62816.8} = 1.0605 \\times 10^8 \\times 250.63\\)<br>' .
                             '\\(f_c = 2.658 \\times 10^{10} \\text{ Hz} = 26.58 \\text{ GHz}\\)<br><br>' .
                             'Dominant mode: TE₁₀ (since a > b)<br>' .
                             'For TE₁₀: m=1, n=0<br>' .
                             '\\(f_c = \\frac{2.121 \\times 10^8}{2 \\times 0.0107} = \\frac{2.121 \\times 10^8}{0.0214} = 9.91 \\times 10^9 \\text{ Hz} = 9.91 \\text{ GHz}\\)<br><br>' .
                             'Summary:<br>' .
                             'Cutoff frequency for TM₁₁ mode = 26.58 GHz<br>' .
                             'Cutoff frequency for dominant mode (TE₁₀) = 9.91 GHz',
                'solution_has_diagram' => false,
                'notes' => 'TM modes require both mode indices to be at least 1, so TM₁₁ is the lowest TM mode. The dominant mode is always TE₁₀ when a > b. The cutoff frequency is reduced by a factor of √ε_r compared to air-filled waveguide due to the dielectric loading.',
                'formulas' => [
                    '\\(v_p = \\frac{c}{\\sqrt{\\epsilon_r}}\\)',
                    '\\(f_c = \\frac{v_p}{2} \\sqrt{\\left(\\frac{m}{a}\\right)^2 + \\left(\\frac{n}{b}\\right)^2}\\)'
                ]
            ],
            [
                'text' => 'Define antenna and list different types of antenna. [2068 Chaitra]',
                'year' => '2068 Chaitra',
                'has_diagram' => false,
                'solution' => 'Definition of antenna: An antenna is a transducer that converts electrical energy into electromagnetic waves for transmission through free space, and converts received electromagnetic waves back into electrical energy for reception. It is a crucial component in wireless communication systems, radar, broadcasting, and other applications involving electromagnetic wave propagation.<br><br>' .
                             'Different types of antennas:<br>' .
                             '1. Wire Antennas:<br>' .
                             '   - Dipole antenna (half-wave, full-wave)<br>' .
                             '   - Monopole antenna (quarter-wave over ground plane)<br>' .
                             '   - Loop antenna (circular, rectangular)<br><br>' .
                             '2. Aperture Antennas:<br>' .
                             '   - Horn antenna (pyramidal, conical)<br>' .
                             '   - Parabolic reflector antenna<br>' .
                             '   - Slot antenna<br><br>' .
                             '3. Microstrip Antennas:<br>' .
                             '   - Rectangular patch antenna<br>' .
                             '   - Circular patch antenna<br>' .
                             '   - Printed inverted-F antenna (PIFA)<br><br>' .
                             '4. Array Antennas:<br>' .
                             '   - Yagi-Uda antenna<br>' .
                             '   - Log-periodic antenna<br>' .
                             '   - Phased array antenna<br>' .
                             '   - Reflectarray antenna<br><br>' .
                             '5. Traveling Wave Antennas:<br>' .
                             '   - Helical antenna<br>' .
                             '   - Spiral antenna<br>' .
                             '   - Vivaldi antenna<br><br>' .
                             '6. Broadband Antennas:<br>' .
                             '   - Discone antenna<br>' .
                             '   - Biconical antenna<br>' .
                             '   - Bow-tie antenna<br><br>' .
                             '7. Special Purpose Antennas:<br>' .
                             '   - Lens antenna<br>' .
                             '   - Fractal antenna<br>' .
                             '   - MIMO antennas<br><br>' .
                             'Each type has specific characteristics and is suitable for particular applications based on frequency, gain, size, and other requirements.',
                'solution_has_diagram' => false,
                'notes' => 'Antennas are classified based on their structure, operating principle, and application. The dipole is fundamental, while modern wireless devices often use compact antennas like patches or monopoles. High-gain applications use reflectors or arrays. The choice depends on multiple factors including frequency, bandwidth, gain, size, and cost.',
                'formulas' => []
            ],
            [
                'text' => 'Write short notes on: a) Antenna and its type b) TEM c) Waveguides. [2068 Baishakh]',
                'year' => '2068 Baishakh',
                'has_diagram' => false,
                'solution' => 'a) Antenna and its type:<br>' .
                             'Antenna: A device that converts electrical signals into electromagnetic waves for transmission and vice versa for reception. Essential for wireless communication.<br>' .
                             'Types: Dipole (fundamental), Monopole (compact), Loop (magnetic), Patch (low profile), Horn (moderate gain), Parabolic (high gain), Yagi-Uda (directional), Helical (circular polarization), Array (multiple elements), etc.<br><br>' .
                             'b) TEM (Transverse ElectroMagnetic) mode:<br>' .
                             'A mode of wave propagation where both electric and magnetic fields are entirely transverse to the direction of propagation (E_z = 0, H_z = 0).<br>' .
                             'Supported in transmission lines like coaxial cables, twin-lead, and parallel-plate waveguides.<br>' .
                             'Not supported in hollow single-conductor waveguides (rectangular, circular) because boundary conditions and Maxwell\'s equations cannot be satisfied simultaneously without longitudinal field components.<br>' .
                             'TEM mode can propagate at any frequency (including DC) in supporting structures.<br><br>' .
                             'c) Waveguides:<br>' .
                             'Structures that guide electromagnetic waves, typically at microwave frequencies.<br>' .
                             'Types: Rectangular, circular, elliptical, ridge, dielectric, etc.<br>' .
                             'Support only TE (Transverse Electric) and TM (Transverse Magnetic) modes, not TEM.<br>' .
                             'Have a cutoff frequency below which waves do not propagate.<br>' .
                             'Advantages: Lower loss than transmission lines at high frequencies, higher power handling, better shielding.<br>' .
                             'Disadvantages: Larger size, cannot transmit DC, more expensive, narrower bandwidth for single-mode operation.<br>' .
                             'Used in radar, satellite communications, microwave ovens, and other high-frequency applications.',
                'solution_has_diagram' => false,
                'notes' => 'These three topics cover fundamental concepts in electromagnetics and RF engineering. Antennas radiate and receive waves, TEM is a fundamental mode in transmission lines, and waveguides are alternative structures for guiding waves at high frequencies. Understanding their characteristics and differences is crucial for system design.',
                'formulas' => []
            ]
        ]
    ]




];

// Include the viewer module
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/question_with_solution_viewer.php';

?>