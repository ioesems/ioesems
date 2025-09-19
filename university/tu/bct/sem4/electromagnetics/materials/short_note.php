<?php
// Include the viewer/template which contains the header, navigation, styles, and footer scripts.
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/detailed_note_viewer.php';
?>


<!-- <==================chapter 1 ==================> -->

<div id="chapter_1">
    <h1>1. Introduction (4 hours)</h1>

    <li></li><a href="#1_1" class="topic-link">1.1 Scalar and vector fields</a></li>
    <li></li><a href="#1_2" class="topic-link">1.2 Operations on scalar and vector fields</a></li>
    <li></li><a href="#1_3" class="topic-link">1.3 Co-ordinate systems (Cartesian, cylindrical and spherical) and
        conversions</a></li>

    <div id="1_1" class="section">
        <h2>1.1 Scalar and vector fields</h2>
        <p>In electromagnetics, physical quantities are often represented as fields — functions that assign a value to
            every point in space. These fields can be classified as scalar or vector fields.</p>

        <h3>Scalar Quantity</h3>
        <p>A scalar quantity is fully described by a single real number (positive or negative) representing its
            magnitude. Examples include:</p>
        <ul>
            <li>Temperature (T)</li>
            <li>Mass</li>
            <li>Density</li>
            <li>Pressure</li>
            <li>Volume</li>
            <li>Voltage</li>
        </ul>
        <p>Scalars are denoted by simple italic letters like \(T\), \(V\), \(\rho\).</p>

        <h3>Vector Quantity</h3>
        <p>A vector quantity has both magnitude and direction in space. Examples include:</p>
        <ul>
            <li>Force</li>
            <li>Velocity</li>
            <li>Acceleration</li>
            <li>Electric field \(\mathbf{E}\)</li>
            <li>Magnetic field \(\mathbf{H}\)</li>
        </ul>
        <p>Vectors are typically denoted by boldface letters (\(\mathbf{A}\), \(\mathbf{B}\)) or with an arrow above
            (\(\vec{A}\)).</p>

        <h3>Vector Representation</h3>
        <p>In Cartesian coordinates, a vector \(\mathbf{A}\) can be represented as:</p>
        <div class="math-container">
            \[
            \mathbf{A} = A_x \mathbf{a}_x + A_y \mathbf{a}_y + A_z \mathbf{a}_z
            \]
        </div>
        <p>where \(A_x\), \(A_y\), and \(A_z\) are the components of \(\mathbf{A}\) along the x, y, and z axes, and
            \(\mathbf{a}_x\), \(\mathbf{a}_y\), \(\mathbf{a}_z\) are the unit vectors in those directions.</p>

        <h3>Magnitude of a Vector</h3>
        <p>The magnitude (or norm) of vector \(\mathbf{A}\) is a scalar given by:</p>
        <div class="math-container">
            \[
            |\mathbf{A}| = A = \sqrt{A_x^2 + A_y^2 + A_z^2}
            \]
        </div>

        <h3>Unit Vector</h3>
        <p>A unit vector in the direction of \(\mathbf{A}\) is:</p>
        <div class="math-container">
            \[
            \mathbf{a}_A = \frac{\mathbf{A}}{|\mathbf{A}|}
            \]
        </div>
        <p>Unit vectors have magnitude 1 and indicate direction only.</p>

        <h3>Position and Distance Vectors</h3>
        <p>A position vector \(\mathbf{r}_P\) describes the location of point P with coordinates (x, y, z):</p>
        <div class="math-container">
            \[
            \mathbf{r}_P = x\mathbf{a}_x + y\mathbf{a}_y + z\mathbf{a}_z
            \]
        </div>
        <p>The distance vector from point P to point Q is:</p>
        <div class="math-container">
            \[
            \mathbf{r}_{PQ} = \mathbf{r}_Q - \mathbf{r}_P = (x_Q - x_P)\mathbf{a}_x + (y_Q - y_P)\mathbf{a}_y + (z_Q -
            z_P)\mathbf{a}_z
            \]
        </div>
    </div>

    <div id="1_2" class="section">
        <h2>1.2 Operations on scalar and vector fields</h2>
        <p>Vector algebra defines several operations that can be performed on vectors and scalars.</p>

        <h3>Vector Addition and Subtraction</h3>
        <p>Vector addition follows the parallelogram law or head-to-tail rule:</p>
        <div class="math-container">
            \[
            \mathbf{C} = \mathbf{A} + \mathbf{B} = (A_x + B_x)\mathbf{a}_x + (A_y + B_y)\mathbf{a}_y + (A_z +
            B_z)\mathbf{a}_z
            \]
        </div>
        <p>Vector subtraction is defined as:</p>
        <div class="math-container">
            \[
            \mathbf{D} = \mathbf{A} - \mathbf{B} = \mathbf{A} + (-\mathbf{B}) = (A_x - B_x)\mathbf{a}_x + (A_y -
            B_y)\mathbf{a}_y + (A_z - B_z)\mathbf{a}_z
            \]
        </div>

        <h3>Laws of Vector Algebra</h3>
        <table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%;">
            <tr>
                <th>Law</th>
                <th>Addition</th>
                <th>Multiplication</th>
            </tr>
            <tr>
                <td>Commutative</td>
                <td>\(\mathbf{A} + \mathbf{B} = \mathbf{B} + \mathbf{A}\)</td>
                <td>\(k\mathbf{A} = \mathbf{A}k\)</td>
            </tr>
            <tr>
                <td>Associative</td>
                <td>\(\mathbf{A} + (\mathbf{B} + \mathbf{C}) = (\mathbf{A} + \mathbf{B}) + \mathbf{C}\)</td>
                <td>\(k(l\mathbf{A}) = (kl)\mathbf{A}\)</td>
            </tr>
            <tr>
                <td>Distributive</td>
                <td>\(k(\mathbf{A} + \mathbf{B}) = k\mathbf{A} + k\mathbf{B}\)</td>
                <td></td>
            </tr>
        </table>

        <h3>Scalar (Dot) Product</h3>
        <p>The dot product of two vectors \(\mathbf{A}\) and \(\mathbf{B}\) is a scalar:</p>
        <div class="math-container">
            \[
            \mathbf{A} \cdot \mathbf{B} = AB\cos\theta_{AB}
            \]
        </div>
        <p>where \(\theta_{AB}\) is the angle between the vectors. In component form:</p>
        <div class="math-container">
            \[
            \mathbf{A} \cdot \mathbf{B} = A_xB_x + A_yB_y + A_zB_z
            \]
        </div>
        <p>Properties:</p>
        <ul>
            <li>Commutative: \(\mathbf{A} \cdot \mathbf{B} = \mathbf{B} \cdot \mathbf{A}\)</li>
            <li>Distributive: \(\mathbf{A} \cdot (\mathbf{B} + \mathbf{C}) = \mathbf{A} \cdot \mathbf{B} + \mathbf{A}
                \cdot \mathbf{C}\)</li>
            <li>\(\mathbf{A} \cdot \mathbf{A} = A^2\)</li>
        </ul>
        <p>Two vectors are orthogonal (perpendicular) if \(\mathbf{A} \cdot \mathbf{B} = 0\).</p>

        <h3>Vector (Cross) Product</h3>
        <p>The cross product of two vectors \(\mathbf{A}\) and \(\mathbf{B}\) is a vector:</p>
        <div class="math-container">
            \[
            \mathbf{A} \times \mathbf{B} = AB\sin\theta_{AB} \mathbf{a}_n
            \]
        </div>
        <p>where \(\mathbf{a}_n\) is a unit vector perpendicular to the plane containing \(\mathbf{A}\) and
            \(\mathbf{B}\), following the right-hand rule. In component form:</p>
        <div class="math-container">
            \[
            \mathbf{A} \times \mathbf{B} = \begin{vmatrix}
            \mathbf{a}_x & \mathbf{a}_y & \mathbf{a}_z \\
            A_x & A_y & A_z \\
            B_x & B_y & B_z
            \end{vmatrix} = (A_yB_z - A_zB_y)\mathbf{a}_x + (A_zB_x - A_xB_z)\mathbf{a}_y + (A_xB_y -
            A_yB_x)\mathbf{a}_z
            \]
        </div>
        <p>Properties:</p>
        <ul>
            <li>Anti-commutative: \(\mathbf{A} \times \mathbf{B} = -\mathbf{B} \times \mathbf{A}\)</li>
            <li>Distributive: \(\mathbf{A} \times (\mathbf{B} + \mathbf{C}) = \mathbf{A} \times \mathbf{B} + \mathbf{A}
                \times \mathbf{C}\)</li>
            <li>\(\mathbf{A} \times \mathbf{A} = \mathbf{0}\)</li>
        </ul>

        <h3>Scalar Triple Product</h3>
        <p>The scalar triple product of three vectors \(\mathbf{A}\), \(\mathbf{B}\), and \(\mathbf{C}\) is:</p>
        <div class="math-container">
            \[
            \mathbf{A} \cdot (\mathbf{B} \times \mathbf{C}) = \mathbf{B} \cdot (\mathbf{C} \times \mathbf{A}) =
            \mathbf{C} \cdot (\mathbf{A} \times \mathbf{B})
            \]
        </div>
        <p>This represents the volume of the parallelepiped formed by the three vectors and can be calculated as the
            determinant:</p>
        <div class="math-container">
            \[
            \mathbf{A} \cdot (\mathbf{B} \times \mathbf{C}) = \begin{vmatrix}
            A_x & A_y & A_z \\
            B_x & B_y & B_z \\
            C_x & C_y & C_z
            \end{vmatrix}
            \]
        </div>

        <h3>Vector Triple Product</h3>
        <p>The vector triple product is given by:</p>
        <div class="math-container">
            \[
            \mathbf{A} \times (\mathbf{B} \times \mathbf{C}) = \mathbf{B}(\mathbf{A} \cdot \mathbf{C}) -
            \mathbf{C}(\mathbf{A} \cdot \mathbf{B})
            \]
        </div>

        <h3>Component of a Vector</h3>
        <p>The scalar component of vector \(\mathbf{A}\) along vector \(\mathbf{B}\) is:</p>
        <div class="math-container">
            \[
            A_B = \mathbf{A} \cdot \mathbf{a}_B
            \]
        </div>
        <p>where \(\mathbf{a}_B\) is the unit vector in the direction of \(\mathbf{B}\). The vector component of
            \(\mathbf{A}\) along \(\mathbf{B}\) is:</p>
        <div class="math-container">
            \[
            \mathbf{A}_B = (\mathbf{A} \cdot \mathbf{a}_B)\mathbf{a}_B
            \]
        </div>
    </div>

    <div id="1_3" class="section">
        <h2>1.3 Co-ordinate systems (Cartesian, cylindrical and spherical) and conversions</h2>
        <p>Three coordinate systems are commonly used in electromagnetics: Cartesian, cylindrical, and spherical. Each
            is suited to problems with specific symmetries.</p>

        <h3>Cartesian (Rectangular) Coordinate System</h3>
        <p>In the Cartesian system, a point is represented by coordinates \((x, y, z)\), where:</p>
        <ul>
            <li>\(-\infty < x < \infty\)</li>
            <li>\(-\infty < y < \infty\)</li>
            <li>\(-\infty < z < \infty\)</li>
        </ul>
        <p>A vector \(\mathbf{F}\) is expressed as:</p>
        <div class="math-container">
            \[
            \mathbf{F} = F_x \mathbf{a}_x + F_y \mathbf{a}_y + F_z \mathbf{a}_z
            \]
        </div>
        <p>Differential elements:</p>
        <ul>
            <li>Differential length: \(d\mathbf{l} = dx\,\mathbf{a}_x + dy\,\mathbf{a}_y + dz\,\mathbf{a}_z\)</li>
            <li>Differential surface area: \(d\mathbf{S} = dy\,dz\,\mathbf{a}_x\) or \(dx\,dz\,\mathbf{a}_y\) or
                \(dx\,dy\,\mathbf{a}_z\)</li>
            <li>Differential volume: \(dv = dx\,dy\,dz\)</li>
        </ul>

        <h3>Cylindrical Coordinate System</h3>
        <p>In the cylindrical system, a point is represented by \((\rho, \phi, z)\), where:</p>
        <ul>
            <li>\(\rho\): radial distance from z-axis (\(0 \leq \rho < \infty\))</li>
            <li>\(\phi\): azimuthal angle from x-axis (\(0 \leq \phi < 2\pi\))</li>
            <li>\(z\): height (\(-\infty < z < \infty\))</li>
        </ul>
        <p>A vector \(\mathbf{A}\) is expressed as:</p>
        <div class="math-container">
            \[
            \mathbf{A} = A_\rho \mathbf{a}_\rho + A_\phi \mathbf{a}_\phi + A_z \mathbf{a}_z
            \]
        </div>
        <p>Relationship with Cartesian coordinates:</p>
        <div class="math-container">
            \[
            x = \rho \cos\phi, \quad y = \rho \sin\phi, \quad z = z
            \]
        </div>
        <div class="math-container">
            \[
            \rho = \sqrt{x^2 + y^2}, \quad \phi = \tan^{-1}\left(\frac{y}{x}\right), \quad z = z
            \]
        </div>
        <p>Differential elements:</p>
        <ul>
            <li>Differential length: \(d\mathbf{l} = d\rho\,\mathbf{a}_\rho + \rho\,d\phi\,\mathbf{a}_\phi +
                dz\,\mathbf{a}_z\)</li>
            <li>Differential surface area: \(d\mathbf{S} = \rho\,d\phi\,dz\,\mathbf{a}_\rho\) or
                \(d\rho\,dz\,\mathbf{a}_\phi\) or \(\rho\,d\rho\,d\phi\,\mathbf{a}_z\)</li>
            <li>Differential volume: \(dv = \rho\,d\rho\,d\phi\,dz\)</li>
        </ul>

        <h3>Spherical Coordinate System</h3>
        <p>In the spherical system, a point is represented by \((r, \theta, \phi)\), where:</p>
        <ul>
            <li>\(r\): radial distance from origin (\(0 \leq r < \infty\))</li>
            <li>\(\theta\): polar angle from z-axis (\(0 \leq \theta \leq \pi\))</li>
            <li>\(\phi\): azimuthal angle from x-axis (\(0 \leq \phi < 2\pi\))</li>
        </ul>
        <p>A vector \(\mathbf{A}\) is expressed as:</p>
        <div class="math-container">
            \[
            \mathbf{A} = A_r \mathbf{a}_r + A_\theta \mathbf{a}_\theta + A_\phi \mathbf{a}_\phi
            \]
        </div>
        <p>Relationship with Cartesian coordinates:</p>
        <div class="math-container">
            \[
            x = r \sin\theta \cos\phi, \quad y = r \sin\theta \sin\phi, \quad z = r \cos\theta
            \]
        </div>
        <div class="math-container">
            \[
            r = \sqrt{x^2 + y^2 + z^2}, \quad \theta = \cos^{-1}\left(\frac{z}{\sqrt{x^2 + y^2 + z^2}}\right), \quad
            \phi = \tan^{-1}\left(\frac{y}{x}\right)
            \]
        </div>
        <p>Differential elements:</p>
        <ul>
            <li>Differential length: \(d\mathbf{l} = dr\,\mathbf{a}_r + r\,d\theta\,\mathbf{a}_\theta +
                r\sin\theta\,d\phi\,\mathbf{a}_\phi\)</li>
            <li>Differential surface area: \(d\mathbf{S} = r^2\sin\theta\,d\theta\,d\phi\,\mathbf{a}_r\) or
                \(r\sin\theta\,dr\,d\phi\,\mathbf{a}_\theta\) or \(r\,dr\,d\theta\,\mathbf{a}_\phi\)</li>
            <li>Differential volume: \(dv = r^2\sin\theta\,dr\,d\theta\,d\phi\)</li>
        </ul>

        <h3>Coordinate Conversions</h3>
        <h4>Cylindrical to Spherical</h4>
        <div class="math-container">
            \[
            r = \sqrt{\rho^2 + z^2}, \quad \theta = \cos^{-1}\left(\frac{z}{\sqrt{\rho^2 + z^2}}\right), \quad \phi =
            \phi
            \]
        </div>

        <h4>Spherical to Cylindrical</h4>
        <div class="math-container">
            \[
            \rho = r \sin\theta, \quad \phi = \phi, \quad z = r \cos\theta
            \]
        </div>

        <h3>Vector Component Conversions</h3>
        <p>When converting vectors between coordinate systems, both the components and unit vectors must be transformed.
        </p>
        <p><strong>Example:</strong> Convert unit vector \(\mathbf{a}_x\) to spherical coordinates:</p>
        <div class="math-container">
            \[
            \mathbf{a}_x = (\mathbf{a}_x \cdot \mathbf{a}_r)\mathbf{a}_r + (\mathbf{a}_x \cdot
            \mathbf{a}_\theta)\mathbf{a}_\theta + (\mathbf{a}_x \cdot \mathbf{a}_\phi)\mathbf{a}_\phi
            \]
        </div>
        <div class="math-container">
            \[
            \mathbf{a}_x = \sin\theta \cos\phi\,\mathbf{a}_r + \cos\theta \cos\phi\,\mathbf{a}_\theta -
            \sin\phi\,\mathbf{a}_\phi
            \]
        </div>

        <h3>Numerical Examples</h3>
        <p><strong>Example 1:</strong> Given vectors \(\mathbf{A} = 3\mathbf{a}_x + 4\mathbf{a}_y + \mathbf{a}_z\) and
            \(\mathbf{B} = 2\mathbf{a}_y - 5\mathbf{a}_z\), find the angle between them.</p>
        <p>Solution: Use the dot product formula:</p>
        <div class="math-container">
            \[
            \mathbf{A} \cdot \mathbf{B} = (3)(0) + (4)(2) + (1)(-5) = 8 - 5 = 3
            \]
        </div>
        <div class="math-container">
            \[
            |\mathbf{A}| = \sqrt{3^2 + 4^2 + 1^2} = \sqrt{26}, \quad |\mathbf{B}| = \sqrt{0^2 + 2^2 + (-5)^2} =
            \sqrt{29}
            \]
        </div>
        <div class="math-container">
            \[
            \cos\theta = \frac{\mathbf{A} \cdot \mathbf{B}}{|\mathbf{A}||\mathbf{B}|} = \frac{3}{\sqrt{26}\sqrt{29}}
            \approx 0.109
            \]
        </div>
        <div class="math-container">
            \[
            \theta \approx \cos^{-1}(0.109) \approx 83.7^\circ
            \]
        </div>

        <p><strong>Example 2:</strong> Transform vector \(\mathbf{A} = y\mathbf{a}_x + (x+y)\mathbf{a}_z\) at point
            P(-2, 6, 3) to cylindrical coordinates.</p>
        <p>Solution: First find cylindrical coordinates of P:</p>
        <div class="math-container">
            \[
            \rho = \sqrt{(-2)^2 + 6^2} = \sqrt{40} \approx 6.32, \quad \phi = \tan^{-1}\left(\frac{6}{-2}\right) =
            180^\circ - \tan^{-1}(3) \approx 108.43^\circ, \quad z = 3
            \]
        </div>
        <p>At P, \(\mathbf{A} = 6\mathbf{a}_x + 4\mathbf{a}_z\). Now find components:</p>
        <div class="math-container">
            \[
            A_\rho = \mathbf{A} \cdot \mathbf{a}_\rho = 6\mathbf{a}_x \cdot \mathbf{a}_\rho + 4\mathbf{a}_z \cdot
            \mathbf{a}_\rho = 6\cos\phi + 0 = 6\cos(108.43^\circ) \approx -1.897
            \]
        </div>
        <div class="math-container">
            \[
            A_\phi = \mathbf{A} \cdot \mathbf{a}_\phi = 6\mathbf{a}_x \cdot \mathbf{a}_\phi + 4\mathbf{a}_z \cdot
            \mathbf{a}_\phi = -6\sin\phi + 0 = -6\sin(108.43^\circ) \approx -5.69
            \]
        </div>
        <div class="math-container">
            \[
            A_z = 4
            \]
        </div>
        <p>So, \(\mathbf{A} \approx -1.897\mathbf{a}_\rho - 5.69\mathbf{a}_\phi + 4\mathbf{a}_z\) in cylindrical
            coordinates.</p>
    </div>
</div>

<!-- <==================chapter 2 ==================> -->

<div id="chapter_2">
    <h1>2. Electric Field (15 hours)</h1>

    <li><a href="#2_1" class="topic-link">2.1 Coulomb's law</a></li>
    <li><a href="#2_2" class="topic-link">2.2 Electric field intensity</a></li>
    <li><a href="#2_3" class="topic-link">2.3 Electric flux density</a></li>
    <li><a href="#2_4" class="topic-link">2.4 Gauss's law and applications</a></li>
    <li><a href="#2_5" class="topic-link">2.5 Physical significance of divergence, divergence theorem</a></li>
    <li><a href="#2_6" class="topic-link">2.6 Electric potential, potential gradient</a></li>
    <li><a href="#2_7" class="topic-link">2.7 Energy density in electrostatic field</a></li>
    <li><a href="#2_8" class="topic-link">2.8 Electric properties of material medium</a></li>
    <li><a href="#2_9" class="topic-link">2.9 Free and bound charges, polarization, relative permittivity, electric
            dipole, electric boundary conditions</a></li>
    <li><a href="#2_10" class="topic-link">2.10 Current, current density, conservation of charge, relaxation time
            continuity equation</a></li>
    <li><a href="#2_11" class="topic-link">2.11 Boundary value problems, Laplace and Poisson equations and their
            solutions, uniqueness theorem</a></li>

    <div id="2_1" class="section">
        <h2>2.1 Coulomb's law</h2>
        <p>Coulomb's law describes the electrostatic force between two point charges. It states that the force between
            two stationary point charges is directly proportional to the product of their magnitudes and inversely
            proportional to the square of the distance between them.</p>

        <h3>Scalar Form</h3>
        <p>The scalar form of Coulomb's law is:</p>
        <div class="math-container">
            \[
            F = \frac{1}{4\pi\varepsilon_0} \frac{Q_1 Q_2}{R^2}
            \]
        </div>
        <p>where \(F\) is the magnitude of the force, \(Q_1\) and \(Q_2\) are the magnitudes of the charges, \(R\) is
            the distance between them, and \(\varepsilon_0\) is the permittivity of free space (\(\varepsilon_0 = 8.854
            \times 10^{-12}\) F/m).</p>

        <h3>Vector Form</h3>
        <p>The vector form of Coulomb's law gives the force on charge \(Q_2\) due to charge \(Q_1\):</p>
        <div class="math-container">
            \[
            \mathbf{F}_2 = \frac{1}{4\pi\varepsilon_0} \frac{Q_1 Q_2}{R^2} \mathbf{a}_{12}
            \]
        </div>
        <p>where \(\mathbf{a}_{12}\) is the unit vector pointing from \(Q_1\) to \(Q_2\).</p>

        <h3>Force Between Multiple Charges</h3>
        <p>For a system of multiple point charges, the total force on a charge is the vector sum of the forces due to
            each of the other charges (superposition principle).</p>
    </div>

    <div id="2_2" class="section">
        <h2>2.2 Electric field intensity</h2>
        <p>Electric field intensity \(\mathbf{E}\) is defined as the force per unit charge experienced by a small test
            charge placed at a point in space.</p>

        <h3>Definition</h3>
        <div class="math-container">
            \[
            \mathbf{E} = \lim_{Q_t \to 0} \frac{\mathbf{F}}{Q_t}
            \]
        </div>
        <p>where \(Q_t\) is the test charge. The unit of electric field intensity is N/C or V/m.</p>

        <h3>Electric Field Due to a Point Charge</h3>
        <p>For a point charge \(Q\) located at the origin, the electric field at a distance \(r\) is:</p>
        <div class="math-container">
            \[
            \mathbf{E} = \frac{Q}{4\pi\varepsilon_0 r^2} \mathbf{a}_r
            \]
        </div>
        <p>For a point charge located at position \(\mathbf{r}'\), the electric field at position \(\mathbf{r}\) is:</p>
        <div class="math-container">
            \[
            \mathbf{E}(\mathbf{r}) = \frac{Q}{4\pi\varepsilon_0 |\mathbf{r} - \mathbf{r}'|^3} (\mathbf{r} - \mathbf{r}')
            \]
        </div>

        <h3>Electric Field Due to Continuous Charge Distributions</h3>
        <p>For continuous charge distributions, the electric field is obtained by integration:</p>
        <ul>
            <li><strong>Line charge:</strong> \(\mathbf{E} = \int \frac{\rho_L dL}{4\pi\varepsilon_0 R^2} \mathbf{a}_R\)
            </li>
            <li><strong>Surface charge:</strong> \(\mathbf{E} = \int \frac{\rho_S dS}{4\pi\varepsilon_0 R^2}
                \mathbf{a}_R\)</li>
            <li><strong>Volume charge:</strong> \(\mathbf{E} = \int \frac{\rho_V dV}{4\pi\varepsilon_0 R^2}
                \mathbf{a}_R\)</li>
        </ul>

        <h3>Electric Field Due to an Infinite Line Charge</h3>
        <p>For an infinite line charge with density \(\rho_L\), the electric field at a perpendicular distance \(\rho\)
            is:</p>
        <div class="math-container">
            \[
            \mathbf{E} = \frac{\rho_L}{2\pi\varepsilon_0 \rho} \mathbf{a}_\rho
            \]
        </div>

        <h3>Electric Field Due to an Infinite Sheet of Charge</h3>
        <p>For an infinite sheet of charge with density \(\rho_S\), the electric field is:</p>
        <div class="math-container">
            \[
            \mathbf{E} = \frac{\rho_S}{2\varepsilon_0} \mathbf{a}_N
            \]
        </div>
        <p>where \(\mathbf{a}_N\) is the unit vector normal to the sheet and directed away from it.</p>
    </div>

    <div id="2_3" class="section">
        <h2>2.3 Electric flux density</h2>
        <p>Electric flux density \(\mathbf{D}\) is defined as:</p>
        <div class="math-container">
            \[
            \mathbf{D} = \varepsilon_0 \mathbf{E}
            \]
        </div>
        <p>in free space. The unit of \(\mathbf{D}\) is C/m². Electric flux density is useful because it is independent
            of the medium (in the absence of dielectric materials).</p>

        <h3>Relation to Electric Field</h3>
        <p>In a dielectric medium, the relationship is:</p>
        <div class="math-container">
            \[
            \mathbf{D} = \varepsilon \mathbf{E} = \varepsilon_0 \varepsilon_r \mathbf{E}
            \]
        </div>
        <p>where \(\varepsilon_r\) is the relative permittivity of the medium.</p>

        <h3>Electric Flux</h3>
        <p>The electric flux through a surface is given by:</p>
        <div class="math-container">
            \[
            \Psi = \int_S \mathbf{D} \cdot d\mathbf{S}
            \]
        </div>
        <p>The unit of electric flux is coulombs (C).</p>
    </div>

    <div id="2_4" class="section">
        <h2>2.4 Gauss's law and applications</h2>
        <p>Gauss's law states that the total electric flux through any closed surface is equal to the total charge
            enclosed by that surface.</p>

        <h3>Integral Form</h3>
        <div class="math-container">
            \[
            \oint_S \mathbf{D} \cdot d\mathbf{S} = Q_{\text{enclosed}}
            \]
        </div>

        <h3>Differential Form</h3>
        <div class="math-container">
            \[
            \nabla \cdot \mathbf{D} = \rho_V
            \]
        </div>

        <h3>Applications</h3>
        <p>Gauss's law is particularly useful for calculating electric fields when there is symmetry:</p>
        <ul>
            <li><strong>Point charge:</strong> Use a spherical Gaussian surface.</li>
            <li><strong>Infinite line charge:</strong> Use a cylindrical Gaussian surface.</li>
            <li><strong>Infinite sheet of charge:</strong> Use a pillbox Gaussian surface.</li>
            <li><strong>Uniformly charged sphere:</strong> Use spherical Gaussian surfaces inside and outside the
                sphere.</li>
        </ul>

        <h3>Example: Electric Field Due to a Uniformly Charged Sphere</h3>
        <p>For a sphere of radius \(a\) with uniform volume charge density \(\rho_V\):</p>
        <ul>
            <li>Inside the sphere (\(r < a\)): \(E=\frac{\rho_V r}{3\varepsilon_0}\)</li>
            <li>Outside the sphere (\(r > a\)): \(E = \frac{\rho_V a^3}{3\varepsilon_0 r^2}\)</li>
        </ul>
    </div>

    <div id="2_5" class="section">
        <h2>2.5 Physical significance of divergence, divergence theorem</h2>
        <p>The divergence of a vector field represents the net outward flux per unit volume at a point.</p>

        <h3>Physical Significance</h3>
        <p>For the electric flux density \(\mathbf{D}\), \(\nabla \cdot \mathbf{D}\) represents the volume charge
            density \(\rho_V\) at that point. Positive divergence indicates a source of flux (positive charge), while
            negative divergence indicates a sink (negative charge).</p>

        <h3>Divergence Theorem</h3>
        <p>The divergence theorem (also known as Gauss's theorem) states that the flux of a vector field through a
            closed surface is equal to the volume integral of the divergence of the field over the region enclosed by
            the surface:</p>
        <div class="math-container">
            \[
            \oint_S \mathbf{A} \cdot d\mathbf{S} = \int_V (\nabla \cdot \mathbf{A}) dV
            \]
        </div>
        <p>This theorem is fundamental in converting between integral and differential forms of physical laws.</p>
    </div>

    <div id="2_6" class="section">
        <h2>2.6 Electric potential, potential gradient</h2>
        <p>Electric potential is the work done per unit charge to bring a test charge from infinity to a point in an
            electric field.</p>

        <h3>Definition</h3>
        <div class="math-container">
            \[
            V = -\int_{\infty}^P \mathbf{E} \cdot d\mathbf{l}
            \]
        </div>
        <p>The potential difference between two points A and B is:</p>
        <div class="math-container">
            \[
            V_{AB} = V_A - V_B = -\int_B^A \mathbf{E} \cdot d\mathbf{l}
            \]
        </div>

        <h3>Potential Due to Point Charges</h3>
        <p>For a point charge \(Q\):</p>
        <div class="math-container">
            \[
            V = \frac{Q}{4\pi\varepsilon_0 r}
            \]
        </div>
        <p>For multiple point charges:</p>
        <div class="math-container">
            \[
            V = \sum_{m=1}^n \frac{Q_m}{4\pi\varepsilon_0 |\mathbf{r} - \mathbf{r}_m|}
            \]
        </div>

        <h3>Potential Gradient</h3>
        <p>The electric field is the negative gradient of the potential:</p>
        <div class="math-container">
            \[
            \mathbf{E} = -\nabla V
            \]
        </div>
        <p>In rectangular coordinates:</p>
        <div class="math-container">
            \[
            \nabla V = \frac{\partial V}{\partial x} \mathbf{a}_x + \frac{\partial V}{\partial y} \mathbf{a}_y +
            \frac{\partial V}{\partial z} \mathbf{a}_z
            \]
        </div>
        <p>In cylindrical coordinates:</p>
        <div class="math-container">
            \[
            \nabla V = \frac{\partial V}{\partial \rho} \mathbf{a}_\rho + \frac{1}{\rho} \frac{\partial V}{\partial
            \phi} \mathbf{a}_\phi + \frac{\partial V}{\partial z} \mathbf{a}_z
            \]
        </div>
        <p>In spherical coordinates:</p>
        <div class="math-container">
            \[
            \nabla V = \frac{\partial V}{\partial r} \mathbf{a}_r + \frac{1}{r} \frac{\partial V}{\partial \theta}
            \mathbf{a}_\theta + \frac{1}{r \sin \theta} \frac{\partial V}{\partial \phi} \mathbf{a}_\phi
            \]
        </div>
    </div>

    <div id="2_7" class="section">
        <h2>2.7 Energy density in electrostatic field</h2>
        <p>The energy stored in an electrostatic field can be calculated by considering the work done to assemble the
            charge distribution.</p>

        <h3>Energy in Terms of Charge and Potential</h3>
        <p>For a system of discrete point charges:</p>
        <div class="math-container">
            \[
            W_E = \frac{1}{2} \sum_{m=1}^n Q_m V_m
            \]
        </div>
        <p>For a continuous charge distribution:</p>
        <div class="math-container">
            \[
            W_E = \frac{1}{2} \int_V \rho_V V dV
            \]
        </div>

        <h3>Energy Density</h3>
        <p>The energy can also be expressed in terms of the electric field:</p>
        <div class="math-container">
            \[
            W_E = \frac{1}{2} \int_V \mathbf{D} \cdot \mathbf{E} dV = \frac{1}{2} \int_V \varepsilon E^2 dV
            \]
        </div>
        <p>The energy density (energy per unit volume) is:</p>
        <div class="math-container">
            \[
            w_E = \frac{1}{2} \mathbf{D} \cdot \mathbf{E} = \frac{1}{2} \varepsilon E^2
            \]
        </div>
    </div>

    <div id="2_8" class="section">
        <h2>2.8 Electric properties of material medium</h2>
        <p>Materials can be classified based on their electrical properties:</p>
        <ul>
            <li><strong>Conductors:</strong> Materials with high conductivity (\(\sigma\)) that allow free movement of
                charges.</li>
            <li><strong>Dielectrics (Insulators):</strong> Materials with low conductivity that can be polarized by an
                electric field.</li>
            <li><strong>Semiconductors:</strong> Materials with intermediate conductivity that can be controlled.</li>
        </ul>

        <h3>Conductivity</h3>
        <p>Conductivity \(\sigma\) is a measure of a material's ability to conduct electric current. Ohm's law in point
            form is:</p>
        <div class="math-container">
            \[
            \mathbf{J} = \sigma \mathbf{E}
            \]
        </div>
        <p>where \(\mathbf{J}\) is the current density.</p>
    </div>

    <div id="2_9" class="section">
        <h2>2.9 Free and bound charges, polarization, relative permittivity, electric dipole, electric boundary
            conditions</h2>

        <h3>Free and Bound Charges</h3>
        <p>Free charges are those that can move freely (e.g., electrons in a conductor). Bound charges are associated
            with atoms or molecules in dielectric materials and can only shift slightly under an electric field.</p>

        <h3>Polarization</h3>
        <p>When a dielectric is placed in an electric field, the molecules become polarized, creating electric dipoles.
            The polarization \(\mathbf{P}\) is defined as the dipole moment per unit volume:</p>
        <div class="math-container">
            \[
            \mathbf{P} = \lim_{\Delta v \to 0} \frac{\sum \mathbf{p}_i}{\Delta v}
            \]
        </div>
        <p>where \(\mathbf{p}_i = Q \mathbf{d}\) is the dipole moment of an individual dipole.</p>

        <h3>Relative Permittivity</h3>
        <p>For linear isotropic dielectrics, \(\mathbf{P} = \chi_e \varepsilon_0 \mathbf{E}\), where \(\chi_e\) is the
            electric susceptibility. The relative permittivity is:</p>
        <div class="math-container">
            \[
            \varepsilon_r = 1 + \chi_e
            \]
        </div>
        <p>The relationship between \(\mathbf{D}\), \(\mathbf{E}\), and \(\mathbf{P}\) is:</p>
        <div class="math-container">
            \[
            \mathbf{D} = \varepsilon_0 \mathbf{E} + \mathbf{P} = \varepsilon_0 \varepsilon_r \mathbf{E}
            \]
        </div>

        <h3>Electric Dipole</h3>
        <p>An electric dipole consists of two equal and opposite charges separated by a small distance. The dipole
            moment is \(\mathbf{p} = Q \mathbf{d}\), where \(\mathbf{d}\) is the vector from the negative to the
            positive charge.</p>

        <h3>Electric Boundary Conditions</h3>
        <p>At the interface between two different media:</p>
        <ul>
            <li><strong>Tangential component of E:</strong> \(E_{t1} = E_{t2}\)</li>
            <li><strong>Normal component of D:</strong> \(D_{n1} - D_{n2} = \rho_S\) (where \(\rho_S\) is the surface
                charge density)</li>
            <li>If no free surface charge exists, \(D_{n1} = D_{n2}\)</li>
        </ul>
        <p>For the interface between a conductor and a dielectric, the tangential component of \(\mathbf{E}\) is zero,
            and the normal component of \(\mathbf{D}\) equals the surface charge density on the conductor.</p>
    </div>

    <div id="2_10" class="section">
        <h2>2.10 Current, current density, conservation of charge, relaxation time continuity equation</h2>

        <h3>Current and Current Density</h3>
        <p>Electric current is the rate of flow of charge: \(I = \frac{dQ}{dt}\). Current density \(\mathbf{J}\) is
            current per unit area: \(dI = \mathbf{J} \cdot d\mathbf{S}\). For convection current, \(\mathbf{J} = \rho_v
            \mathbf{v}\), where \(\mathbf{v}\) is the velocity of charge carriers.</p>

        <h3>Conservation of Charge</h3>
        <p>Charge can neither be created nor destroyed. The continuity equation expresses this principle:</p>
        <div class="math-container">
            \[
            \nabla \cdot \mathbf{J} = -\frac{\partial \rho_v}{\partial t}
            \]
        </div>
        <p>In integral form:</p>
        <div class="math-container">
            \[
            \oint_S \mathbf{J} \cdot d\mathbf{S} = -\frac{dQ}{dt}
            \]
        </div>
        <p>For steady currents, \(\frac{\partial \rho_v}{\partial t} = 0\), so \(\nabla \cdot \mathbf{J} = 0\).</p>

        <h3>Relaxation Time</h3>
        <p>In a conductor, any charge placed inside will move to the surface. The relaxation time constant \(\tau\) is
            the time for the charge density to decay to \(1/e\) of its initial value:</p>
        <div class="math-container">
            \[
            \tau = \frac{\varepsilon}{\sigma}
            \]
        </div>
        <p>where \(\varepsilon\) is the permittivity and \(\sigma\) is the conductivity of the material.</p>
    </div>

    <div id="2_11" class="section">
        <h2>2.11 Boundary value problems, Laplace and Poisson equations and their solutions, uniqueness theorem</h2>

        <h3>Poisson's and Laplace's Equations</h3>
        <p>From Gauss's law and the relationship \(\mathbf{E} = -\nabla V\), we derive Poisson's equation:</p>
        <div class="math-container">
            \[
            \nabla^2 V = -\frac{\rho_v}{\varepsilon}
            \]
        </div>
        <p>When \(\rho_v = 0\), this reduces to Laplace's equation:</p>
        <div class="math-container">
            \[
            \nabla^2 V = 0
            \]
        </div>

        <h3>Laplace's Equation in Different Coordinate Systems</h3>
        <ul>
            <li><strong>Rectangular:</strong> \(\nabla^2 V = \frac{\partial^2 V}{\partial x^2} + \frac{\partial^2
                V}{\partial y^2} + \frac{\partial^2 V}{\partial z^2} = 0\)</li>
            <li><strong>Cylindrical:</strong> \(\nabla^2 V = \frac{1}{\rho} \frac{\partial}{\partial \rho} \left( \rho
                \frac{\partial V}{\partial \rho} \right) + \frac{1}{\rho^2} \frac{\partial^2 V}{\partial \phi^2} +
                \frac{\partial^2 V}{\partial z^2} = 0\)</li>
            <li><strong>Spherical:</strong> \(\nabla^2 V = \frac{1}{r^2} \frac{\partial}{\partial r} \left( r^2
                \frac{\partial V}{\partial r} \right) + \frac{1}{r^2 \sin \theta} \frac{\partial}{\partial \theta}
                \left( \sin \theta \frac{\partial V}{\partial \theta} \right) + \frac{1}{r^2 \sin^2 \theta}
                \frac{\partial^2 V}{\partial \phi^2} = 0\)</li>
        </ul>

        <h3>Uniqueness Theorem</h3>
        <p>The uniqueness theorem states that if a solution to Laplace's or Poisson's equation satisfies the given
            boundary conditions, it is the only solution. This is proven by assuming two solutions \(V_1\) and \(V_2\)
            and showing that their difference must be zero.</p>

        <h3>Boundary Value Problems</h3>
        <p>Boundary value problems involve solving Laplace's or Poisson's equation subject to specified boundary
            conditions. Common types include:</p>
        <ul>
            <li><strong>Dirichlet problem:</strong> Potential is specified on the boundary.</li>
            <li><strong>Neumann problem:</strong> Normal derivative of potential (related to surface charge density) is
                specified on the boundary.</li>
        </ul>

        <h3>Examples</h3>
        <p><strong>Parallel-plate capacitor:</strong> For plates at \(x=0\) (V=0) and \(x=d\) (V=V₀), the solution is
            \(V = \frac{V_0}{d} x\).</p>
        <p><strong>Coaxial capacitor:</strong> For inner conductor at \(\rho=a\) (V=V₀) and outer conductor at
            \(\rho=b\) (V=0), the solution is \(V = V_0 \frac{\ln(b/\rho)}{\ln(b/a)}\).</p>
        <p><strong>Spherical capacitor:</strong> For inner sphere at \(r=a\) (V=V₀) and outer sphere at \(r=b\) (V=0),
            the solution is \(V = V_0 \frac{(1/r - 1/b)}{(1/a - 1/b)}\).</p>
    </div>
</div>

<!-- <==================chapter 3 ==================> -->

<div id="chapter_3">
    <h1>3. Magnetic Field (9 hours)</h1>

    <li><a href="#3_1" class="topic-link">3.1 Biot-Savart's law</a></li>
    <li><a href="#3_2" class="topic-link">3.2 Magnetic field intensity</a></li>
    <li><a href="#3_3" class="topic-link">3.3 Ampere's circuital law and its application</a></li>
    <li><a href="#3_4" class="topic-link">3.4 Magnetic flux density</a></li>
    <li><a href="#3_5" class="topic-link">3.5 Physical significance of curl, Stoke's theorem</a></li>
    <li><a href="#3_6" class="topic-link">3.6 Scalar and magnetic vector potential</a></li>
    <li><a href="#3_7" class="topic-link">3.7 Magnetic properties of material medium</a></li>
    <li><a href="#3_8" class="topic-link">3.8 Magnetic force, magnetic torque, magnetic moment, magnetization</a></li>
    <li><a href="#3_9" class="topic-link">3.9 Magnetic boundary condition</a></li>

    <div id="3_1" class="section">
        <h2>3.1 Biot-Savart's law</h2>
        <p>Biot-Savart's law describes the magnetic field generated by a steady current. It is fundamental for
            calculating the magnetic field due to various current distributions.</p>

        <h3>Statement of Biot-Savart's Law</h3>
        <p>The magnetic field intensity \(d\mathbf{H}\) at a point P due to a differential current element \(I
            d\mathbf{l}\) is:</p>
        <div class="math-container">
            \[
            d\mathbf{H} = \frac{I d\mathbf{l} \times \mathbf{a}_R}{4\pi R^2}
            \]
        </div>
        <p>where:</p>
        <ul>
            <li>\(I\) is the steady current (A)</li>
            <li>\(d\mathbf{l}\) is the differential length vector in the direction of current (m)</li>
            <li>\(\mathbf{a}_R\) is the unit vector from the current element to point P</li>
            <li>\(R\) is the distance from the current element to point P (m)</li>
        </ul>

        <h3>Magnetic Field Due to an Infinitely Long Straight Conductor</h3>
        <p>For an infinitely long straight conductor carrying current \(I\), the magnetic field intensity at a
            perpendicular distance \(\rho\) is:</p>
        <div class="math-container">
            \[
            \mathbf{H} = \frac{I}{2\pi\rho} \mathbf{a}_\phi
            \]
        </div>
        <p>This result is derived by integrating the Biot-Savart law along the entire length of the conductor.</p>

        <h3>Example Calculation</h3>
        <p>A current filament of 5 A in the \(\mathbf{a}_y\) direction is parallel to the y-axis at \(x=2\) m, \(z=-2\)
            m. Find \(\mathbf{H}\) at the origin.</p>
        <p>Solution:</p>
        <div class="math-container">
            \[
            \mathbf{H} = \frac{I}{2\pi\rho} \mathbf{a}_\phi
            \]
        </div>
        <p>where \(\rho = \sqrt{(0-2)^2 + (0-(-2))^2} = \sqrt{8} = 2\sqrt{2}\) m</p>
        <div class="math-container">
            \[
            \mathbf{a}_\phi = \mathbf{a}_y \times \mathbf{a}_\rho = \mathbf{a}_y \times \frac{-2\mathbf{a}_x +
            2\mathbf{a}_z}{2\sqrt{2}} = \frac{\mathbf{a}_x + \mathbf{a}_z}{\sqrt{2}}
            \]
        </div>
        <div class="math-container">
            \[
            \mathbf{H} = \frac{5}{2\pi \cdot 2\sqrt{2}} \cdot \frac{\mathbf{a}_x + \mathbf{a}_z}{\sqrt{2}} =
            \frac{5}{8\pi} (\mathbf{a}_x + \mathbf{a}_z) \, \text{A/m}
            \]
        </div>
    </div>

    <div id="3_2" class="section">
        <h2>3.2 Magnetic field intensity</h2>
        <p>Magnetic field intensity \(\mathbf{H}\) is a vector quantity that describes the strength and direction of a
            magnetic field at a point in space.</p>

        <h3>Definition</h3>
        <p>Magnetic field intensity \(\mathbf{H}\) is related to the source currents and is measured in amperes per
            meter (A/m). In free space, it is related to the magnetic flux density \(\mathbf{B}\) by:</p>
        <div class="math-container">
            \[
            \mathbf{B} = \mu_0 \mathbf{H}
            \]
        </div>
        <p>where \(\mu_0 = 4\pi \times 10^{-7}\) H/m is the permeability of free space.</p>

        <h3>Magnetic Field Due to Various Current Distributions</h3>
        <ul>
            <li><strong>Infinitely long straight conductor:</strong> \(\mathbf{H} = \frac{I}{2\pi\rho} \mathbf{a}_\phi\)
            </li>
            <li><strong>Circular loop of radius \(a\) on xy-plane, centered at origin:</strong> At a point on the axis
                (z-axis), \(\mathbf{H} = \frac{Ia^2}{2(a^2+z^2)^{3/2}} \mathbf{a}_z\)</li>
            <li><strong>Solenoid with \(n\) turns per unit length:</strong> Inside the solenoid, \(\mathbf{H} = nI
                \mathbf{a}_z\) (approximately uniform)</li>
        </ul>

        <h3>Right-Hand Rule</h3>
        <p>The direction of the magnetic field around a current-carrying conductor can be determined using the
            right-hand rule: if you grasp the conductor with your right hand such that your thumb points in the
            direction of current, your fingers curl in the direction of the magnetic field.</p>
    </div>

    <div id="3_3" class="section">
        <h2>3.3 Ampere's circuital law and its application</h2>
        <p>Ampere's circuital law relates the integrated magnetic field around a closed loop to the electric current
            passing through the loop.</p>

        <h3>Statement of Ampere's Circuital Law</h3>
        <p>The line integral of the magnetic field intensity \(\mathbf{H}\) around any closed path is equal to the total
            current enclosed by that path:</p>
        <div class="math-container">
            \[
            \oint \mathbf{H} \cdot d\mathbf{l} = I_{\text{enclosed}}
            \]
        </div>
        <p>In differential form, this becomes:</p>
        <div class="math-container">
            \[
            \nabla \times \mathbf{H} = \mathbf{J}
            \]
        </div>
        <p>where \(\mathbf{J}\) is the current density.</p>

        <h3>Applications of Ampere's Law</h3>
        <h4>1. Infinitely Long Straight Conductor</h4>
        <p>Consider a circular path of radius \(\rho\) centered on the conductor. By symmetry, \(\mathbf{H}\) is
            constant and tangential along this path:</p>
        <div class="math-container">
            \[
            \oint \mathbf{H} \cdot d\mathbf{l} = H_\phi \cdot 2\pi\rho = I
            \]
        </div>
        <div class="math-container">
            \[
            H_\phi = \frac{I}{2\pi\rho} \quad \Rightarrow \quad \mathbf{H} = \frac{I}{2\pi\rho} \mathbf{a}_\phi
            \]
        </div>

        <h4>2. Coaxial Cable</h4>
        <p>Consider a coaxial cable with inner conductor radius \(a\), outer conductor inner radius \(b\), and outer
            radius \(c\). The inner conductor carries current \(I\) and the outer conductor carries current \(-I\).</p>
        <ul>
            <li><strong>Region 1 (\(\rho < a\)):</strong> \(H_\phi \cdot 2\pi\rho = I \frac{\rho^2}{a^2} \Rightarrow
                        \mathbf{H} = \frac{I\rho}{2\pi a^2} \mathbf{a}_\phi\)</li>
            <li><strong>Region 2 (\(a < \rho < b\)):</strong> \(H_\phi \cdot 2\pi\rho = I \Rightarrow \mathbf{H} =
                        \frac{I}{2\pi\rho} \mathbf{a}_\phi\)</li>
            <li><strong>Region 3 (\(b < \rho < c\)):</strong> \(H_\phi \cdot 2\pi\rho = I - I \frac{\rho^2-b^2}{c^2-b^2}
                        \Rightarrow \mathbf{H} = \frac{I}{2\pi\rho} \frac{c^2-\rho^2}{c^2-b^2} \mathbf{a}_\phi\)</li>
            <li><strong>Region 4 (\(\rho > c\)):</strong> \(H_\phi \cdot 2\pi\rho = 0 \Rightarrow \mathbf{H} = 0\)</li>
        </ul>
    </div>

    <div id="3_4" class="section">
        <h2>3.4 Magnetic flux density</h2>
        <p>Magnetic flux density \(\mathbf{B}\) is a measure of the strength of the magnetic field and is related to the
            force experienced by a moving charge.</p>

        <h3>Definition</h3>
        <p>The magnetic flux density \(\mathbf{B}\) is defined by the Lorentz force law:</p>
        <div class="math-container">
            \[
            \mathbf{F} = q(\mathbf{E} + \mathbf{v} \times \mathbf{B})
            \]
        </div>
        <p>where \(q\) is the charge, \(\mathbf{v}\) is its velocity, and \(\mathbf{E}\) is the electric field.</p>

        <h3>Relation to Magnetic Field Intensity</h3>
        <p>In free space:</p>
        <div class="math-container">
            \[
            \mathbf{B} = \mu_0 \mathbf{H}
            \]
        </div>
        <p>In a magnetic material:</p>
        <div class="math-container">
            \[
            \mathbf{B} = \mu \mathbf{H} = \mu_0 \mu_r \mathbf{H}
            \]
        </div>
        <p>where \(\mu_r\) is the relative permeability of the material.</p>

        <h3>Magnetic Flux</h3>
        <p>The magnetic flux \(\Phi\) through a surface is given by:</p>
        <div class="math-container">
            \[
            \Phi = \int_S \mathbf{B} \cdot d\mathbf{S}
            \]
        </div>
        <p>The unit of magnetic flux is the weber (Wb). The unit of magnetic flux density is tesla (T), where 1 T = 1
            Wb/m².</p>

        <h3>Gauss's Law for Magnetism</h3>
        <p>The net magnetic flux through any closed surface is zero:</p>
        <div class="math-container">
            \[
            \oint_S \mathbf{B} \cdot d\mathbf{S} = 0
            \]
        </div>
        <p>In differential form:</p>
        <div class="math-container">
            \[
            \nabla \cdot \mathbf{B} = 0
            \]
        </div>
        <p>This implies that there are no magnetic monopoles; magnetic field lines always form closed loops.</p>
    </div>

    <div id="3_5" class="section">
        <h2>3.5 Physical significance of curl, Stoke's theorem</h2>

        <h3>Physical Significance of Curl</h3>
        <p>The curl of a vector field represents the circulation density or the tendency of the field to rotate about a
            point. For the magnetic field, \(\nabla \times \mathbf{H} = \mathbf{J}\) indicates that current density is
            the source of the "circulation" of the magnetic field.</p>

        <h3>Stoke's Theorem</h3>
        <p>Stoke's theorem relates the surface integral of the curl of a vector field over a surface to the line
            integral of the vector field around the boundary of the surface:</p>
        <div class="math-container">
            \[
            \int_S (\nabla \times \mathbf{A}) \cdot d\mathbf{S} = \oint_C \mathbf{A} \cdot d\mathbf{l}
            \]
        </div>
        <p>This theorem is fundamental in converting between integral and differential forms of physical laws.</p>

        <h3>Application to Ampere's Law</h3>
        <p>Applying Stoke's theorem to Ampere's law:</p>
        <div class="math-container">
            \[
            \oint_C \mathbf{H} \cdot d\mathbf{l} = \int_S (\nabla \times \mathbf{H}) \cdot d\mathbf{S} = \int_S
            \mathbf{J} \cdot d\mathbf{S} = I_{\text{enclosed}}
            \]
        </div>
        <p>This shows the equivalence between the integral and differential forms of Ampere's law.</p>
    </div>

    <div id="3_6" class="section">
        <h2>3.6 Scalar and magnetic vector potential</h2>

        <h3>Magnetic Vector Potential</h3>
        <p>Since \(\nabla \cdot \mathbf{B} = 0\), we can define a magnetic vector potential \(\mathbf{A}\) such that:
        </p>
        <div class="math-container">
            \[
            \mathbf{B} = \nabla \times \mathbf{A}
            \]
        </div>
        <p>The magnetic vector potential \(\mathbf{A}\) for a current distribution is given by:</p>
        <div class="math-container">
            \[
            \mathbf{A} = \frac{\mu}{4\pi} \int \frac{\mathbf{J}}{R} dv
            \]
        </div>
        <p>For a line current:</p>
        <div class="math-container">
            \[
            \mathbf{A} = \frac{\mu I}{4\pi} \int \frac{d\mathbf{l}}{R}
            \]
        </div>

        <h3>Scalar Magnetic Potential</h3>
        <p>In regions where there is no current density (\(\mathbf{J} = 0\)), we can define a scalar magnetic potential
            \(V_m\) such that:</p>
        <div class="math-container">
            \[
            \mathbf{H} = -\nabla V_m
            \]
        </div>
        <p>This is analogous to the electric potential in electrostatics. However, it can only be used in current-free
            regions.</p>

        <h3>Poisson's Equation for Magnetic Vector Potential</h3>
        <p>Starting from \(\mathbf{B} = \nabla \times \mathbf{A}\) and \(\nabla \times \mathbf{H} = \mathbf{J}\), and
            assuming \(\nabla \cdot \mathbf{A} = 0\) (Coulomb gauge), we get:</p>
        <div class="math-container">
            \[
            \nabla^2 \mathbf{A} = -\mu \mathbf{J}
            \]
        </div>
        <p>This is Poisson's equation for the magnetic vector potential.</p>
    </div>

    <div id="3_7" class="section">
        <h2>3.7 Magnetic properties of material medium</h2>
        <p>Materials can be classified based on their magnetic properties:</p>
        <ul>
            <li><strong>Diamagnetic:</strong> \(\mu_r < 1\), weakly repelled by magnetic fields</li>
            <li><strong>Paramagnetic:</strong> \(\mu_r > 1\), weakly attracted by magnetic fields</li>
            <li><strong>Ferromagnetic:</strong> \(\mu_r \gg 1\), strongly attracted by magnetic fields and can retain
                magnetization</li>
        </ul>

        <h3>Magnetization</h3>
        <p>When a magnetic material is placed in an external magnetic field, it becomes magnetized. The magnetization
            \(\mathbf{M}\) is defined as the magnetic dipole moment per unit volume:</p>
        <div class="math-container">
            \[
            \mathbf{M} = \lim_{\Delta v \to 0} \frac{\sum \mathbf{m}_i}{\Delta v}
            \]
        </div>
        <p>where \(\mathbf{m}_i\) is the magnetic dipole moment of individual atoms or molecules.</p>

        <h3>Relation Between B, H, and M</h3>
        <p>The magnetic flux density \(\mathbf{B}\) is related to the magnetic field intensity \(\mathbf{H}\) and
            magnetization \(\mathbf{M}\) by:</p>
        <div class="math-container">
            \[
            \mathbf{B} = \mu_0 (\mathbf{H} + \mathbf{M})
            \]
        </div>
        <p>For linear isotropic materials, \(\mathbf{M} = \chi_m \mathbf{H}\), where \(\chi_m\) is the magnetic
            susceptibility. Then:</p>
        <div class="math-container">
            \[
            \mathbf{B} = \mu_0 (1 + \chi_m) \mathbf{H} = \mu_0 \mu_r \mathbf{H}
            \]
        </div>
        <p>where \(\mu_r = 1 + \chi_m\).</p>
    </div>

    <div id="3_8" class="section">
        <h2>3.8 Magnetic force, magnetic torque, magnetic moment, magnetization</h2>

        <h3>Magnetic Force on a Moving Charge</h3>
        <p>The magnetic force on a charge \(q\) moving with velocity \(\mathbf{v}\) in a magnetic field \(\mathbf{B}\)
            is:</p>
        <div class="math-container">
            \[
            \mathbf{F}_m = q(\mathbf{v} \times \mathbf{B})
            \]
        </div>
        <p>This force is perpendicular to both the velocity and the magnetic field, so it does no work on the charge.
        </p>

        <h3>Magnetic Force on a Current-Carrying Conductor</h3>
        <p>For a differential current element \(I d\mathbf{l}\) in a magnetic field \(\mathbf{B}\), the force is:</p>
        <div class="math-container">
            \[
            d\mathbf{F} = I d\mathbf{l} \times \mathbf{B}
            \]
        </div>
        <p>For a straight conductor of length \(l\) carrying current \(I\) in a uniform magnetic field \(\mathbf{B}\):
        </p>
        <div class="math-container">
            \[
            \mathbf{F} = I \mathbf{l} \times \mathbf{B}
            \]
        </div>

        <h3>Magnetic Torque</h3>
        <p>The torque on a current loop with magnetic moment \(\mathbf{m}\) in a magnetic field \(\mathbf{B}\) is:</p>
        <div class="math-container">
            \[
            \mathbf{T} = \mathbf{m} \times \mathbf{B}
            \]
        </div>

        <h3>Magnetic Moment</h3>
        <p>The magnetic moment \(\mathbf{m}\) of a planar current loop is:</p>
        <div class="math-container">
            \[
            \mathbf{m} = I \mathbf{S}
            \]
        </div>
        <p>where \(\mathbf{S}\) is the vector area of the loop (magnitude equal to the area and direction given by the
            right-hand rule).</p>

        <h3>Magnetization (Revisited)</h3>
        <p>As defined in section 3.7, magnetization \(\mathbf{M}\) is the magnetic dipole moment per unit volume. For a
            uniformly magnetized material, the equivalent surface current density is:</p>
        <div class="math-container">
            \[
            \mathbf{K}_m = \mathbf{M} \times \mathbf{a}_n
            \]
        </div>
        <p>where \(\mathbf{a}_n\) is the unit normal vector to the surface.</p>
    </div>

    <div id="3_9" class="section">
        <h2>3.9 Magnetic boundary condition</h2>
        <p>At the interface between two different magnetic media, the magnetic field must satisfy certain boundary
            conditions.</p>

        <h3>Boundary Conditions</h3>
        <p>Consider the interface between medium 1 and medium 2 with permeabilities \(\mu_1\) and \(\mu_2\),
            respectively.</p>

        <h4>1. Tangential Component of H</h4>
        <p>Applying Ampere's circuital law to a small rectangular loop straddling the boundary:</p>
        <div class="math-container">
            \[
            H_{t1} - H_{t2} = K_n
            \]
        </div>
        <p>where \(K_n\) is the surface current density normal to the plane of the loop. If there is no surface current
            (\(K_n = 0\)), then:</p>
        <div class="math-container">
            \[
            H_{t1} = H_{t2}
            \]
        </div>

        <h4>2. Normal Component of B</h4>
        <p>Applying Gauss's law for magnetism to a small pillbox straddling the boundary:</p>
        <div class="math-container">
            \[
            B_{n1} = B_{n2}
            \]
        </div>
        <p>since \(\oint \mathbf{B} \cdot d\mathbf{S} = 0\).</p>

        <h3>Refraction of Magnetic Field Lines</h3>
        <p>Let \(\theta_1\) and \(\theta_2\) be the angles that \(\mathbf{B}_1\) and \(\mathbf{B}_2\) make with the
            normal to the interface. Then:</p>
        <div class="math-container">
            \[
            \frac{\tan \theta_1}{\tan \theta_2} = \frac{\mu_1}{\mu_2}
            \]
        </div>
        <p>This shows that magnetic field lines bend when passing from one medium to another, similar to the refraction
            of light.</p>

        <h3>Example: Boundary Between Two Media</h3>
        <p>Consider the region \(z<0\) with \(\mu_{r1}=3.2\) and region \(z>0\) with \(\mu_{r2} = 2\). Let
                \(\mathbf{B}_1 = (-30\mathbf{a}_x + 50\mathbf{a}_y + 70\mathbf{a}_z) \times 10^{-9}\) T. Find
                \(\mathbf{B}_2\).</p>
        <p>Solution:</p>
        <p>Normal component: \(B_{n1} = B_{z1} = 70 \times 10^{-9}\) T, so \(B_{n2} = B_{z2} = 70 \times 10^{-9}\) T</p>
        <p>Tangential component: \(H_{t1} = H_{t2}\), so \(\frac{B_{t1}}{\mu_1} = \frac{B_{t2}}{\mu_2}\)</p>
        <div class="math-container">
            \[
            \mathbf{B}_{t1} = (-30\mathbf{a}_x + 50\mathbf{a}_y) \times 10^{-9} \, \text{T}
            \]
        </div>
        <div class="math-container">
            \[
            \mathbf{B}_{t2} = \frac{\mu_2}{\mu_1} \mathbf{B}_{t1} = \frac{2}{3.2} (-30\mathbf{a}_x + 50\mathbf{a}_y)
            \times 10^{-9} = (-18.75\mathbf{a}_x + 31.25\mathbf{a}_y) \times 10^{-9} \, \text{T}
            \]
        </div>
        <div class="math-container">
            \[
            \mathbf{B}_2 = \mathbf{B}_{t2} + \mathbf{B}_{n2} = (-18.75\mathbf{a}_x + 31.25\mathbf{a}_y + 70\mathbf{a}_z)
            \times 10^{-9} \, \text{T}
            \]
        </div>
    </div>
</div>

<!-- <==========================chapter 4 ==========================> -->

<div id="chapter_4">
    <h1>4. Time Varying Fields (4 hours)</h1>

    <li><a href="#4_1" class="topic-link">4.1 Faraday's law, transformer EMF, motional EMF</a></li>
    <li><a href="#4_2" class="topic-link">4.2 Displacement current</a></li>
    <li><a href="#4_3" class="topic-link">4.3 Maxwell's equations in integral and point forms</a></li>

    <div id="4_1" class="section">
        <h2>4.1 Faraday's law, transformer EMF, motional EMF</h2>
        <p>Faraday's Law of Electromagnetic Induction describes how a time-varying magnetic field induces an
            electromotive force (EMF) in a closed circuit. This phenomenon is fundamental to the operation of
            transformers, generators, and many other electrical devices.</p>

        <h3>Faraday's Law</h3>
        <p>Faraday's law states that the induced electromotive force (EMF) in any closed circuit is equal to the
            negative rate of change of the magnetic flux through the circuit. Mathematically, it is expressed as:</p>
        <div class="math-container">
            \[
            \mathcal{E} = -\frac{d\Phi_B}{dt}
            \]
        </div>
        <p>where \(\mathcal{E}\) is the induced EMF and \(\Phi_B\) is the magnetic flux.</p>

        <h3>Motional EMF</h3>
        <p>Motional EMF occurs when a conductor moves through a magnetic field. The motion causes the free charges in
            the conductor to experience a magnetic force, leading to charge separation and an induced EMF. This is
            commonly seen in electric generators.</p>

        <h3>Transformer EMF</h3>
        <p>Transformer EMF is induced due to a time-varying magnetic field in a stationary conductor. Unlike motional
            EMF, the conductor itself does not move; instead, the magnetic field changes with time. This principle is
            the basis for transformers, where alternating current in one coil induces a voltage in a nearby coil.</p>

        <h3>Net Induction</h3>
        <p>In practical scenarios, both motional and transformer EMFs can occur simultaneously. The total induced EMF is
            the sum of both components. This comprehensive view is essential for analyzing complex electromagnetic
            systems.</p>
    </div>

    <div id="4_2" class="section">
        <h2>4.2 Displacement current</h2>
        <p>The concept of displacement current was introduced by James Clerk Maxwell to resolve a conflict between
            Ampere's circuital law and the continuity equation for time-varying fields.</p>

        <h3>Conflict with Continuity Equation</h3>
        <p>Ampere's original circuital law states:</p>
        <div class="math-container">
            \[
            \oint \mathbf{H} \cdot d\mathbf{l} = I_{\text{enclosed}}
            \]
        </div>
        <p>However, taking the divergence of both sides and applying the divergence theorem leads to:</p>
        <div class="math-container">
            \[
            \nabla \cdot (\nabla \times \mathbf{H}) = 0 = \nabla \cdot \mathbf{J}
            \]
        </div>
        <p>This implies that \(\nabla \cdot \mathbf{J} = 0\), which contradicts the continuity equation for time-varying
            fields:</p>
        <div class="math-container">
            \[
            \nabla \cdot \mathbf{J} = -\frac{\partial \rho}{\partial t}
            \]
        </div>
        <p>where \(\rho\) is the charge density.</p>

        <h3>Resolution: Displacement Current</h3>
        <p>Maxwell resolved this conflict by modifying Ampere's law to include the displacement current term. The
            modified Ampere's law (also known as the Ampere-Maxwell law) is:</p>
        <div class="math-container">
            \[
            \oint \mathbf{H} \cdot d\mathbf{l} = I_{\text{enclosed}} + \frac{d}{dt} \int \mathbf{D} \cdot d\mathbf{a}
            \]
        </div>
        <p>In differential form, this becomes:</p>
        <div class="math-container">
            \[
            \nabla \times \mathbf{H} = \mathbf{J} + \frac{\partial \mathbf{D}}{\partial t}
            \]
        </div>
        <p>Here, \(\frac{\partial \mathbf{D}}{\partial t}\) is the displacement current density. This term accounts for
            the "current" associated with changing electric fields, even in regions where no actual charge is moving.
            This modification ensures that the law is consistent with the continuity equation and allows for the
            propagation of electromagnetic waves.</p>
    </div>

    <div id="4_3" class="section">
        <h2>4.3 Maxwell's equations in integral and point forms</h2>
        <p>Maxwell's equations are a set of four fundamental equations that describe how electric and magnetic fields
            are generated and altered by each other and by charges and currents. They form the foundation of classical
            electromagnetism, optics, and electric circuits.</p>

        <h3>Generalized Form of Maxwell's Equations</h3>
        <p>For time-varying fields, Maxwell's equations in integral and differential (point) forms are as follows:</p>

        <h4>1. Gauss's Law for Electricity</h4>
        <p><strong>Integral Form:</strong></p>
        <div class="math-container">
            \[
            \oint_S \mathbf{D} \cdot d\mathbf{a} = Q_{\text{enclosed}} = \int_V \rho \, dv
            \]
        </div>
        <p><strong>Differential Form:</strong></p>
        <div class="math-container">
            \[
            \nabla \cdot \mathbf{D} = \rho
            \]
        </div>
        <p>This law relates the electric flux through a closed surface to the charge enclosed within that surface.</p>

        <h4>2. Gauss's Law for Magnetism</h4>
        <p><strong>Integral Form:</strong></p>
        <div class="math-container">
            \[
            \oint_S \mathbf{B} \cdot d\mathbf{a} = 0
            \]
        </div>
        <p><strong>Differential Form:</strong></p>
        <div class="math-container">
            \[
            \nabla \cdot \mathbf{B} = 0
            \]
        </div>
        <p>This law states that there are no magnetic monopoles; magnetic field lines are always closed loops.</p>

        <h4>3. Faraday's Law of Induction</h4>
        <p><strong>Integral Form:</strong></p>
        <div class="math-container">
            \[
            \oint_C \mathbf{E} \cdot d\mathbf{l} = -\frac{d}{dt} \int_S \mathbf{B} \cdot d\mathbf{a}
            \]
        </div>
        <p><strong>Differential Form:</strong></p>
        <div class="math-container">
            \[
            \nabla \times \mathbf{E} = -\frac{\partial \mathbf{B}}{\partial t}
            \]
        </div>
        <p>This law describes how a time-varying magnetic field induces an electric field.</p>

        <h4>4. Ampere-Maxwell Law</h4>
        <p><strong>Integral Form:</strong></p>
        <div class="math-container">
            \[
            \oint_C \mathbf{H} \cdot d\mathbf{l} = I_{\text{enclosed}} + \frac{d}{dt} \int_S \mathbf{D} \cdot
            d\mathbf{a} = \int_S \mathbf{J} \cdot d\mathbf{a} + \frac{d}{dt} \int_S \mathbf{D} \cdot d\mathbf{a}
            \]
        </div>
        <p><strong>Differential Form:</strong></p>
        <div class="math-container">
            \[
            \nabla \times \mathbf{H} = \mathbf{J} + \frac{\partial \mathbf{D}}{\partial t}
            \]
        </div>
        <p>This law shows that magnetic fields can be generated by electric currents and by changing electric fields
            (displacement current).</p>

        <h3>Lorentz Force Equation</h3>
        <p>While not one of Maxwell's equations, the Lorentz force equation describes the force on a charged particle in
            an electromagnetic field and is essential for understanding the interaction of fields with matter:</p>
        <div class="math-container">
            \[
            \mathbf{F} = q(\mathbf{E} + \mathbf{v} \times \mathbf{B})
            \]
        </div>
        <p>where \(q\) is the charge of the particle, \(\mathbf{E}\) is the electric field, \(\mathbf{v}\) is the
            velocity of the particle, and \(\mathbf{B}\) is the magnetic field.</p>

        <h3>Phasor Form (for Sinusoidal Steady State)</h3>
        <p>For time-harmonic fields (fields varying sinusoidally with time), Maxwell's equations can be expressed in
            phasor form, which simplifies the analysis by converting differential equations in time to algebraic
            equations. In phasor notation, the time derivative \(\frac{\partial}{\partial t}\) is replaced by
            \(j\omega\), where \(\omega\) is the angular frequency.</p>
        <p>The phasor forms of the curl equations become:</p>
        <div class="math-container">
            \[
            \nabla \times \mathbf{E} = -j\omega \mathbf{B}
            \]
        </div>
        <div class="math-container">
            \[
            \nabla \times \mathbf{H} = \mathbf{J} + j\omega \mathbf{D}
            \]
        </div>
        <p>These equations are particularly useful in the analysis of electromagnetic waves and AC circuits.</p>
    </div>
</div>


<!-- <=-- <==========================chapter 5 ==========================> --> -->

<div id="chapter_5">
    <h1>5. Plane Waves (9 hours)</h1>

    <li><a href="#5_1" class="topic-link">5.1 Wave propagation in lossless and lossy dielectric</a></li>
    <li><a href="#5_2" class="topic-link">5.2 Plane waves in free space, lossless dielectric, good conductor</a></li>
    <li><a href="#5_3" class="topic-link">5.3 Power and Poynting theorem average power density</a></li>
    <li><a href="#5_4" class="topic-link">5.4 Reflection of plane wave at normal incidence</a></li>
    <li><a href="#5_5" class="topic-link">5.5 Standing wave and SWR</a></li>
    <li><a href="#5_6" class="topic-link">5.6 Input intrinsic impedance</a></li>

    <div id="5_1" class="section">
        <h2>5.1 Wave propagation in lossless and lossy dielectric</h2>
        <p>Plane waves are fundamental solutions to Maxwell's equations in homogeneous, isotropic media. Their behavior
            varies significantly depending on whether the medium is lossless (perfect dielectric) or lossy
            (dissipative).</p>

        <h3>Propagation Constant</h3>
        <p>The propagation constant, denoted by \(\gamma\), is a complex quantity that describes how a wave propagates
            through a medium. It is expressed as:</p>
        <div class="math-container">
            \[
            \gamma = \alpha + j\beta
            \]
        </div>
        <p>where \(\alpha\) is the attenuation constant (in Np/m) and \(\beta\) is the phase constant (in rad/m).</p>

        <h3>General Expression for Propagation Constant</h3>
        <p>For a general medium, the propagation constant is given by:</p>
        <div class="math-container">
            \[
            \gamma = \sqrt{j\omega\mu(\sigma + j\omega\varepsilon)}
            \]
        </div>
        <p>From this, the general expressions for attenuation and phase constants are:</p>
        <div class="math-container">
            \[
            \alpha = \omega \sqrt{\frac{\mu\varepsilon}{2} \left( \sqrt{1 + \left( \frac{\sigma}{\omega\varepsilon}
            \right)^2} - 1 \right)}
            \]
        </div>
        <div class="math-container">
            \[
            \beta = \omega \sqrt{\frac{\mu\varepsilon}{2} \left( \sqrt{1 + \left( \frac{\sigma}{\omega\varepsilon}
            \right)^2} + 1 \right)}
            \]
        </div>

        <h3>Wave Propagation in Lossless Dielectric</h3>
        <p>In a lossless dielectric, \(\sigma = 0\). This simplifies the expressions to:</p>
        <div class="math-container">
            \[
            \alpha = 0
            \]
        </div>
        <div class="math-container">
            \[
            \beta = \omega \sqrt{\mu\varepsilon}
            \]
        </div>
        <p>Since \(\alpha = 0\), there is no attenuation, and the wave propagates without loss. The phase constant
            \(\beta\) determines the wave's spatial frequency.</p>

        <h3>Wave Propagation in Lossy Dielectric</h3>
        <p>In a lossy dielectric, \(\sigma \neq 0\). Both attenuation and phase constants are non-zero, leading to:</p>
        <ul>
            <li>Exponential decay of the wave amplitude as it propagates (\(e^{-\alpha z}\)).</li>
            <li>Phase shift proportional to \(\beta z\).</li>
        </ul>
        <p>The electric field in a lossy dielectric can be expressed as:</p>
        <div class="math-container">
            \[
            E_x = E_{xo} e^{-\alpha z} \cos(\omega t - \beta z)
            \]
        </div>
    </div>

    <div id="5_2" class="section">
        <h2>5.2 Plane waves in free space, lossless dielectric, good conductor</h2>

        <h3>Plane Waves in Free Space</h3>
        <p>Free space is characterized by \(\sigma = 0\), \(\varepsilon = \varepsilon_0\), and \(\mu = \mu_0\). The
            propagation parameters are:</p>
        <div class="math-container">
            \[
            \alpha = 0, \quad \beta = \omega \sqrt{\mu_0 \varepsilon_0} = \frac{\omega}{c}
            \]
        </div>
        <p>where \(c = \frac{1}{\sqrt{\mu_0 \varepsilon_0}}\) is the speed of light in vacuum. The intrinsic impedance
            of free space is:</p>
        <div class="math-container">
            \[
            \eta_0 = \sqrt{\frac{\mu_0}{\varepsilon_0}} \approx 377 \, \Omega
            \]
        </div>
        <p>The electric and magnetic fields are related by:</p>
        <div class="math-container">
            \[
            H_y = \frac{E_x}{\eta_0}
            \]
        </div>

        <h3>Plane Waves in Lossless Dielectric</h3>
        <p>For a lossless dielectric, \(\sigma = 0\), \(\varepsilon = \varepsilon_r \varepsilon_0\), \(\mu = \mu_r
            \mu_0\). The parameters are:</p>
        <div class="math-container">
            \[
            \alpha = 0, \quad \beta = \omega \sqrt{\mu \varepsilon} = \omega \sqrt{\mu_r \mu_0 \varepsilon_r
            \varepsilon_0}
            \]
        </div>
        <div class="math-container">
            \[
            \eta = \sqrt{\frac{\mu}{\varepsilon}} = \sqrt{\frac{\mu_r \mu_0}{\varepsilon_r \varepsilon_0}} = \eta_0
            \sqrt{\frac{\mu_r}{\varepsilon_r}}
            \]
        </div>
        <p>The wave propagates without attenuation, and the intrinsic impedance depends on the relative permittivity and
            permeability.</p>

        <h3>Plane Waves in Good Conductors</h3>
        <p>For good conductors, \(\sigma \gg \omega \varepsilon\). The propagation constant simplifies to:</p>
        <div class="math-container">
            \[
            \alpha = \beta = \sqrt{\frac{\omega \mu \sigma}{2}}
            \]
        </div>
        <p>The intrinsic impedance is complex:</p>
        <div class="math-container">
            \[
            \eta = \sqrt{\frac{j\omega\mu}{\sigma + j\omega\varepsilon}} \approx \sqrt{\frac{j\omega\mu}{\sigma}} = (1 +
            j) \sqrt{\frac{\omega\mu}{2\sigma}}
            \]
        </div>
        <p>Its magnitude and phase are:</p>
        <div class="math-container">
            \[
            |\eta| = \sqrt{\frac{\omega\mu}{\sigma}}, \quad \angle \eta = 45^\circ
            \]
        </div>
        <p>The electric field in a good conductor is:</p>
        <div class="math-container">
            \[
            E_x = E_{xo} e^{-\alpha z} \cos(\omega t - \beta z)
            \]
        </div>
        <p>and the magnetic field is:</p>
        <div class="math-container">
            \[
            H_y = \frac{E_{xo}}{|\eta|} e^{-\alpha z} \cos(\omega t - \beta z - 45^\circ)
            \]
        </div>
        <p>Notice the 45° phase difference between E and H fields in conductors.</p>
    </div>

    <div id="5_3" class="section">
        <h2>5.3 Power and Poynting theorem average power density</h2>

        <h3>Poynting Vector</h3>
        <p>The Poynting vector, denoted by \(\mathbf{S}\), represents the instantaneous power density (power per unit
            area) carried by an electromagnetic wave. It is defined as:</p>
        <div class="math-container">
            \[
            \mathbf{S} = \mathbf{E} \times \mathbf{H} \quad \text{(W/m}^2\text{)}
            \]
        </div>
        <p>The direction of \(\mathbf{S}\) indicates the direction of power flow.</p>

        <h3>Poynting's Theorem</h3>
        <p>Poynting's theorem is a statement of energy conservation in electromagnetic fields. It can be derived from
            Maxwell's equations and is expressed as:</p>
        <div class="math-container">
            \[
            -\nabla \cdot (\mathbf{E} \times \mathbf{H}) = \mathbf{J} \cdot \mathbf{E} + \mathbf{E} \cdot \frac{\partial
            \mathbf{D}}{\partial t} + \mathbf{H} \cdot \frac{\partial \mathbf{B}}{\partial t}
            \]
        </div>
        <p>Integrating over a volume and applying the divergence theorem gives:</p>
        <div class="math-container">
            \[
            -\oint_{\text{surface}} (\mathbf{E} \times \mathbf{H}) \cdot d\mathbf{s} = \int_{\text{volume}} \mathbf{J}
            \cdot \mathbf{E} dv + \frac{\partial}{\partial t} \int_{\text{volume}} \left( \frac{1}{2} \mathbf{E} \cdot
            \mathbf{D} + \frac{1}{2} \mathbf{H} \cdot \mathbf{B} \right) dv
            \]
        </div>
        <p>This states that the net power flowing out of a closed surface equals the power dissipated within the volume
            plus the rate of change of stored electromagnetic energy.</p>

        <h3>Time-Average Power Density</h3>
        <p>For sinusoidal steady-state fields, we are often interested in the time-average power density. For a plane
            wave in a lossless medium:</p>
        <div class="math-container">
            \[
            \langle S_z \rangle = \frac{1}{T} \int_0^T S_z dt = \frac{1}{T} \int_0^T E_x H_y dt
            \]
        </div>
        <p>Substituting \(E_x = E_{xo} \cos(\omega t - \beta z)\) and \(H_y = \frac{E_{xo}}{\eta} \cos(\omega t - \beta
            z)\):</p>
        <div class="math-container">
            \[
            \langle S_z \rangle = \frac{E_{xo}^2}{\eta} \cdot \frac{1}{T} \int_0^T \cos^2(\omega t - \beta z) dt =
            \frac{E_{xo}^2}{2\eta}
            \]
        </div>
        <p>For a lossy medium, where \(E_x = E_{xo} e^{-\alpha z} \cos(\omega t - \beta z)\) and \(H_y =
            \frac{E_{xo}}{|\eta|} e^{-\alpha z} \cos(\omega t - \beta z - \theta_\eta)\):</p>
        <div class="math-container">
            \[
            \langle S_z \rangle = \frac{E_{xo}^2}{2|\eta|} e^{-2\alpha z} \cos \theta_\eta
            \]
        </div>
        <p>where \(\theta_\eta\) is the phase angle of the complex intrinsic impedance.</p>

        <h3>Loss Tangent</h3>
        <p>The loss tangent is a measure of how lossy a material is:</p>
        <div class="math-container">
            \[
            \tan \delta = \frac{\sigma}{\omega \varepsilon}
            \]
        </div>
        <p>It represents the ratio of conduction current density to displacement current density. A small loss tangent
            indicates a good dielectric, while a large loss tangent indicates a lossy material.</p>
    </div>

    <div id="5_4" class="section">
        <h2>5.4 Reflection of plane wave at normal incidence</h2>
        <p>When a uniform plane wave is incident normally on the boundary between two different media, part of the wave
            is reflected and part is transmitted.</p>

        <h3>Reflection and Transmission Coefficients</h3>
        <p>Consider a wave incident from medium 1 to medium 2. The reflection coefficient (\(\Gamma\)) is the ratio of
            the reflected electric field amplitude to the incident electric field amplitude:</p>
        <div class="math-container">
            \[
            \Gamma = \frac{E_{x01}^-}{E_{x01}^+} = \frac{\eta_2 - \eta_1}{\eta_2 + \eta_1}
            \]
        </div>
        <p>The transmission coefficient (\(\tau\)) is the ratio of the transmitted electric field amplitude to the
            incident electric field amplitude:</p>
        <div class="math-container">
            \[
            \tau = \frac{E_{x02}^+}{E_{x01}^+} = \frac{2\eta_2}{\eta_2 + \eta_1}
            \]
        </div>
        <p>These coefficients satisfy the relation: \(\tau = 1 + \Gamma\).</p>

        <h3>Perfect Conductor Boundary</h3>
        <p>When a wave is incident on a perfect conductor (\(\sigma \to \infty\)), the intrinsic impedance \(\eta_2 =
            0\). Therefore:</p>
        <div class="math-container">
            \[
            \Gamma = \frac{0 - \eta_1}{0 + \eta_1} = -1
            \]
        </div>
        <div class="math-container">
            \[
            \tau = \frac{2 \cdot 0}{0 + \eta_1} = 0
            \]
        </div>
        <p>This means the entire wave is reflected with a 180° phase shift, and no wave is transmitted into the
            conductor.</p>

        <h3>Field Expressions</h3>
        <p>In medium 1, the total electric field is the sum of incident and reflected waves:</p>
        <div class="math-container">
            \[
            E_{xs1} = E_{x01}^+ e^{-j\beta_1 z} + E_{x01}^- e^{+j\beta_1 z} = E_{x01}^+ (e^{-j\beta_1 z} + \Gamma
            e^{+j\beta_1 z})
            \]
        </div>
        <p>For a perfect conductor (\(\Gamma = -1\)):</p>
        <div class="math-container">
            \[
            E_{xs1} = E_{x01}^+ (e^{-j\beta_1 z} - e^{+j\beta_1 z}) = -2j E_{x01}^+ \sin(\beta_1 z)
            \]
        </div>
        <p>In time domain:</p>
        <div class="math-container">
            \[
            E_{x1} = 2 E_{x01}^+ \sin(\beta_1 z) \sin(\omega t)
            \]
        </div>
    </div>

    <div id="5_5" class="section">
        <h2>5.5 Standing wave and SWR</h2>
        <p>When a wave is reflected from a boundary, the interference between incident and reflected waves creates a
            standing wave pattern.</p>

        <h3>Standing Wave Formation</h3>
        <p>As derived in section 5.4, for a wave incident on a perfect conductor:</p>
        <div class="math-container">
            \[
            E_{x1} = 2 E_{x01}^+ \sin(\beta_1 z) \sin(\omega t)
            \]
        </div>
        <div class="math-container">
            \[
            H_{y1} = \frac{2 E_{x01}^+}{\eta_1} \cos(\beta_1 z) \cos(\omega t)
            \]
        </div>
        <p>These equations describe standing waves. The electric field is maximum where \(\sin(\beta_1 z) = \pm 1\) (at
            \(z = -\lambda/4, -3\lambda/4, \ldots\)) and zero where \(\sin(\beta_1 z) = 0\) (at \(z = 0, -\lambda/2,
            -\lambda, \ldots\)). Conversely, the magnetic field is maximum where \(\cos(\beta_1 z) = \pm 1\) and zero
            where \(\cos(\beta_1 z) = 0\). This shows that E and H fields are 90° out of phase in both time and space.
        </p>

        <h3>Standing Wave Ratio (SWR)</h3>
        <p>For a general case with reflection coefficient \(\Gamma\), the maximum and minimum electric field magnitudes
            are:</p>
        <div class="math-container">
            \[
            |E_{s1}|_{\text{max}} = |E_{x01}^+| (1 + |\Gamma|)
            \]
        </div>
        <div class="math-container">
            \[
            |E_{s1}|_{\text{min}} = |E_{x01}^+| (1 - |\Gamma|)
            \]
        </div>
        <p>The Standing Wave Ratio (SWR) is defined as:</p>
        <div class="math-container">
            \[
            \text{SWR} = \frac{|E_{s1}|_{\text{max}}}{|E_{s1}|_{\text{min}}} = \frac{1 + |\Gamma|}{1 - |\Gamma|}
            \]
        </div>
        <p>SWR ranges from 1 (no reflection, \(|\Gamma| = 0\)) to \(\infty\) (total reflection, \(|\Gamma| = 1\)).</p>

        <h3>Position of Maxima and Minima</h3>
        <p>The positions of electric field maxima and minima can be found from the phase of \(\Gamma\). If \(\Gamma =
            |\Gamma| e^{j\theta}\), then:</p>
        <div class="math-container">
            \[
            z_{\text{max}} = \frac{1}{2\beta_1} (\theta + 2n\pi) = \frac{\lambda}{4\pi} (\theta + 2n\pi) \quad (n = 0,
            \pm 1, \pm 2, \ldots)
            \]
        </div>
        <div class="math-container">
            \[
            z_{\text{min}} = \frac{1}{2\beta_1} (\theta + (2n+1)\pi) = \frac{\lambda}{4\pi} (\theta + (2n+1)\pi) \quad
            (n = 0, \pm 1, \pm 2, \ldots)
            \]
        </div>
    </div>

    <div id="5_6" class="section">
        <h2>5.6 Input intrinsic impedance</h2>
        <p>The input intrinsic impedance at any point in a medium is the ratio of the total electric field to the total
            magnetic field at that point.</p>

        <h3>General Expression</h3>
        <p>For a wave propagating in the z-direction in medium 1 with reflection at z=0:</p>
        <div class="math-container">
            \[
            E_{xs1} = E_{x01}^+ e^{-j\beta_1 z} + E_{x01}^- e^{+j\beta_1 z}
            \]
        </div>
        <div class="math-container">
            \[
            H_{ys1} = \frac{E_{x01}^+}{\eta_1} e^{-j\beta_1 z} - \frac{E_{x01}^-}{\eta_1} e^{+j\beta_1 z}
            \]
        </div>
        <p>The input impedance at position z is:</p>
        <div class="math-container">
            \[
            \eta_{\text{in}}(z) = \frac{E_{xs1}}{H_{ys1}} = \eta_1 \frac{E_{x01}^+ e^{-j\beta_1 z} + E_{x01}^-
            e^{+j\beta_1 z}}{E_{x01}^+ e^{-j\beta_1 z} - E_{x01}^- e^{+j\beta_1 z}}
            \]
        </div>
        <p>Using \(\Gamma = E_{x01}^- / E_{x01}^+\):</p>
        <div class="math-container">
            \[
            \eta_{\text{in}}(z) = \eta_1 \frac{e^{-j\beta_1 z} + \Gamma e^{+j\beta_1 z}}{e^{-j\beta_1 z} - \Gamma
            e^{+j\beta_1 z}}
            \]
        </div>

        <h3>At the Boundary (z=0)</h3>
        <p>At the boundary between medium 1 and medium 2 (z=0), the input impedance equals the intrinsic impedance of
            medium 2 due to continuity of tangential fields:</p>
        <div class="math-container">
            \[
            \eta_{\text{in}}(0) = \eta_2
            \]
        </div>

        <h3>For a Perfect Conductor</h3>
        <p>When medium 2 is a perfect conductor, \(\eta_2 = 0\) and \(\Gamma = -1\). The input impedance at any point z
            is:</p>
        <div class="math-container">
            \[
            \eta_{\text{in}}(z) = \eta_1 \frac{e^{-j\beta_1 z} - e^{+j\beta_1 z}}{e^{-j\beta_1 z} + e^{+j\beta_1 z}} =
            \eta_1 \frac{-2j\sin(\beta_1 z)}{2\cos(\beta_1 z)} = j\eta_1 \tan(\beta_1 z)
            \]
        </div>
        <p>This is purely imaginary, indicating that no real power is dissipated (as expected for lossless medium and
            perfect conductor boundary). The impedance varies periodically with distance from the boundary.</p>

        <h3>Quarter-Wave Transformer</h3>
        <p>At a distance \(z = -\lambda/4\) from the boundary:</p>
        <div class="math-container">
            \[
            \eta_{\text{in}}(-\lambda/4) = j\eta_1 \tan\left(\beta_1 \cdot \frac{-\lambda}{4}\right) = j\eta_1
            \tan\left(\frac{2\pi}{\lambda} \cdot \frac{-\lambda}{4}\right) = j\eta_1 \tan\left(-\frac{\pi}{2}\right) \to
            \infty
            \]
        </div>
        <p>This corresponds to an open circuit. Similarly, at \(z = -\lambda/2\), \(\eta_{\text{in}} = 0\),
            corresponding to a short circuit.</p>
    </div>
</div>


<!-- <=-- <==========================chapter 6 ==========================> -->

<div id="chapter_6">
    <h1>6. Transmission Lines (4 hours)</h1>

    <li><a href="#6_1" class="topic-link">6.1 Transmission line equations (Taking analogy from wave equations)</a></li>
    <li><a href="#6_2" class="topic-link">6.2 Lossless, lossy and distortionless transmission lines</a></li>
    <li><a href="#6_3" class="topic-link">6.3 Input impedance, reflection coefficient, standing wave ratio</a></li>

    <div id="6_1" class="section">
        <h2>6.1 Transmission line equations (Taking analogy from wave equations)</h2>
        <p>Transmission lines are structures that guide electromagnetic waves from one point to another. They are used
            in various applications including connecting transmitters to antennas, computer network connections, and
            power transmission over long distances.</p>

        <h3>Distributed Parameter Model</h3>
        <p>Unlike ordinary circuit analysis where physical dimensions are much smaller than the wavelength, transmission
            lines are characterized by distributed parameters because voltage and current can vary significantly in
            magnitude and phase over the length of the line. The distributed parameters per unit length are:</p>
        <ul>
            <li><strong>R</strong>: Resistance per unit length (Ω/m) - represents conductor losses</li>
            <li><strong>L</strong>: Inductance per unit length (H/m) - due to magnetic fields surrounding the conductors
            </li>
            <li><strong>G</strong>: Conductance per unit length (S/m) - represents dielectric losses</li>
            <li><strong>C</strong>: Capacitance per unit length (F/m) - due to electric field between conductors</li>
        </ul>

        <h3>Transmission Line Equations</h3>
        <p>Consider an infinitesimal section of a transmission line of length \(\Delta z\). Applying Kirchhoff's voltage
            law to the loop:</p>
        <div class="math-container">
            \[
            V(z,t) = R\Delta z \cdot I(z,t) + L\Delta z \cdot \frac{\partial I(z,t)}{\partial t} + V(z+\Delta z,t)
            \]
        </div>
        <p>Rearranging and taking the limit as \(\Delta z \to 0\):</p>
        <div class="math-container">
            \[
            \frac{\partial V(z,t)}{\partial z} = -RI(z,t) - L\frac{\partial I(z,t)}{\partial t}
            \]
        </div>
        <p>Similarly, applying Kirchhoff's current law at the node:</p>
        <div class="math-container">
            \[
            I(z,t) = G\Delta z \cdot V(z+\Delta z,t) + C\Delta z \cdot \frac{\partial V(z+\Delta z,t)}{\partial t} +
            I(z+\Delta z,t)
            \]
        </div>
        <p>Rearranging and taking the limit as \(\Delta z \to 0\):</p>
        <div class="math-container">
            \[
            \frac{\partial I(z,t)}{\partial z} = -GV(z,t) - C\frac{\partial V(z,t)}{\partial t}
            \]
        </div>

        <h3>Wave Equations for Transmission Lines</h3>
        <p>Taking the derivative of the first equation with respect to \(z\) and substituting the second equation:</p>
        <div class="math-container">
            \[
            \frac{\partial^2 V(z,t)}{\partial z^2} = -R\frac{\partial I(z,t)}{\partial z} - L\frac{\partial^2
            I(z,t)}{\partial z \partial t}
            \]
        </div>
        <div class="math-container">
            \[
            \frac{\partial^2 V(z,t)}{\partial z^2} = -R(-GV - C\frac{\partial V}{\partial t}) -
            L\frac{\partial}{\partial t}(-GV - C\frac{\partial V}{\partial t})
            \]
        </div>
        <div class="math-container">
            \[
            \frac{\partial^2 V(z,t)}{\partial z^2} = RG V + RC\frac{\partial V}{\partial t} + LG\frac{\partial
            V}{\partial t} + LC\frac{\partial^2 V}{\partial t^2}
            \]
        </div>
        <div class="math-container">
            \[
            \frac{\partial^2 V}{\partial z^2} = LC\frac{\partial^2 V}{\partial t^2} + (RC + LG)\frac{\partial
            V}{\partial t} + RGV
            \]
        </div>
        <p>Similarly, for current:</p>
        <div class="math-container">
            \[
            \frac{\partial^2 I}{\partial z^2} = LC\frac{\partial^2 I}{\partial t^2} + (RC + LG)\frac{\partial
            I}{\partial t} + RGI
            \]
        </div>

        <h3>Phasor Form</h3>
        <p>For sinusoidal steady-state analysis, we use phasor notation where \(V(z,t) = \text{Re}[V_s(z)e^{j\omega
            t}]\) and \(I(z,t) = \text{Re}[I_s(z)e^{j\omega t}]\). The transmission line equations become:</p>
        <div class="math-container">
            \[
            \frac{dV_s(z)}{dz} = -(R + j\omega L)I_s(z)
            \]
        </div>
        <div class="math-container">
            \[
            \frac{dI_s(z)}{dz} = -(G + j\omega C)V_s(z)
            \]
        </div>
        <p>Taking derivatives and substituting, we get the wave equations in phasor form:</p>
        <div class="math-container">
            \[
            \frac{d^2V_s(z)}{dz^2} = \gamma^2 V_s(z)
            \]
        </div>
        <div class="math-container">
            \[
            \frac{d^2I_s(z)}{dz^2} = \gamma^2 I_s(z)
            \]
        </div>
        <p>where \(\gamma = \sqrt{(R + j\omega L)(G + j\omega C)}\) is the propagation constant.</p>

        <h3>General Solution</h3>
        <p>The general solutions to the wave equations are:</p>
        <div class="math-container">
            \[
            V_s(z) = V_0^+ e^{-\gamma z} + V_0^- e^{\gamma z}
            \]
        </div>
        <div class="math-container">
            \[
            I_s(z) = I_0^+ e^{-\gamma z} + I_0^- e^{\gamma z}
            \]
        </div>
        <p>where \(V_0^+\) and \(V_0^-\) are the amplitudes of the forward and backward traveling voltage waves,
            respectively.</p>
    </div>

    <div id="6_2" class="section">
        <h2>6.2 Lossless, lossy and distortionless transmission lines</h2>

        <h3>Propagation Constant</h3>
        <p>The propagation constant \(\gamma\) is a complex quantity:</p>
        <div class="math-container">
            \[
            \gamma = \alpha + j\beta = \sqrt{(R + j\omega L)(G + j\omega C)}
            \]
        </div>
        <p>where \(\alpha\) is the attenuation constant (Np/m) and \(\beta\) is the phase constant (rad/m).</p>

        <h3>Characteristic Impedance</h3>
        <p>The characteristic impedance \(Z_0\) is the ratio of voltage to current for a wave traveling in one
            direction:</p>
        <div class="math-container">
            \[
            Z_0 = \sqrt{\frac{R + j\omega L}{G + j\omega C}}
            \]
        </div>

        <h3>Lossless Transmission Lines</h3>
        <p>For lossless transmission lines, \(R = 0\) and \(G = 0\). This simplifies the equations:</p>
        <div class="math-container">
            \[
            \gamma = j\beta = j\omega\sqrt{LC}
            \]
        </div>
        <div class="math-container">
            \[
            Z_0 = \sqrt{\frac{L}{C}}
            \]
        </div>
        <p>The phase velocity is:</p>
        <div class="math-container">
            \[
            v_p = \frac{\omega}{\beta} = \frac{1}{\sqrt{LC}}
            \]
        </div>
        <p>For lossless lines, there is no attenuation (\(\alpha = 0\)), and signals propagate without loss.</p>

        <h3>Low-Loss Transmission Lines</h3>
        <p>When \(R \ll \omega L\) and \(G \ll \omega C\), the line is considered low-loss. The propagation constant can
            be approximated as:</p>
        <div class="math-container">
            \[
            \gamma \approx \frac{R}{2}\sqrt{\frac{C}{L}} + \frac{G}{2}\sqrt{\frac{L}{C}} + j\omega\sqrt{LC}
            \]
        </div>
        <p>So the attenuation constant is:</p>
        <div class="math-container">
            \[
            \alpha \approx \frac{R}{2}\sqrt{\frac{C}{L}} + \frac{G}{2}\sqrt{\frac{L}{C}}
            \]
        </div>
        <p>And the characteristic impedance is approximately:</p>
        <div class="math-container">
            \[
            Z_0 \approx \sqrt{\frac{L}{C}}\left(1 + \frac{R}{2\omega L} - \frac{G}{2\omega C}\right)
            \]
        </div>

        <h3>Distortionless Transmission Lines</h3>
        <p>A distortionless line is one where the attenuation is independent of frequency and the phase shift is
            linearly dependent on frequency. This occurs when:</p>
        <div class="math-container">
            \[
            \frac{R}{L} = \frac{G}{C}
            \]
        </div>
        <p>Under this condition:</p>
        <div class="math-container">
            \[
            \gamma = \sqrt{RG} + j\omega\sqrt{LC}
            \]
        </div>
        <div class="math-container">
            \[
            \alpha = \sqrt{RG}, \quad \beta = \omega\sqrt{LC}
            \]
        </div>
        <div class="math-container">
            \[
            Z_0 = \sqrt{\frac{L}{C}}
            \]
        </div>
        <p>The phase velocity is constant:</p>
        <div class="math-container">
            \[
            v_p = \frac{\omega}{\beta} = \frac{1}{\sqrt{LC}}
            \]
        </div>
        <p>This ensures that all frequency components travel at the same speed, preventing signal distortion.</p>
    </div>

    <div id="6_3" class="section">
        <h2>6.3 Input impedance, reflection coefficient, standing wave ratio</h2>

        <h3>Reflection Coefficient</h3>
        <p>When a transmission line is terminated with a load impedance \(Z_L\) that is different from the
            characteristic impedance \(Z_0\), part of the incident wave is reflected back. The voltage reflection
            coefficient \(\Gamma\) at the load (z=0) is defined as the ratio of the reflected voltage wave to the
            incident voltage wave:</p>
        <div class="math-container">
            \[
            \Gamma = \frac{V_0^-}{V_0^+} = \frac{Z_L - Z_0}{Z_L + Z_0}
            \]
        </div>
        <p>The magnitude of \(\Gamma\) ranges from 0 to 1. When \(|\Gamma| = 0\), there is no reflection (matched load).
            When \(|\Gamma| = 1\), there is total reflection (open or short circuit).</p>

        <h3>Input Impedance</h3>
        <p>The input impedance \(Z_{in}\) at a distance \(l\) from the load is the ratio of total voltage to total
            current at that point:</p>
        <div class="math-container">
            \[
            Z_{in}(l) = \frac{V_s(-l)}{I_s(-l)} = Z_0 \frac{Z_L + Z_0 \tanh(\gamma l)}{Z_0 + Z_L \tanh(\gamma l)}
            \]
        </div>
        <p>For a lossless line (\(\gamma = j\beta\)):</p>
        <div class="math-container">
            \[
            Z_{in}(l) = Z_0 \frac{Z_L + jZ_0 \tan(\beta l)}{Z_0 + jZ_L \tan(\beta l)}
            \]
        </div>
        <p>Special cases:</p>
        <ul>
            <li><strong>Matched load</strong> (\(Z_L = Z_0\)): \(Z_{in} = Z_0\) (independent of length)</li>
            <li><strong>Short circuit</strong> (\(Z_L = 0\)): \(Z_{in} = jZ_0 \tan(\beta l)\)</li>
            <li><strong>Open circuit</strong> (\(Z_L = \infty\)): \(Z_{in} = -jZ_0 \cot(\beta l)\)</li>
            <li><strong>Quarter-wave transformer</strong> (\(l = \lambda/4\)): \(Z_{in} = \frac{Z_0^2}{Z_L}\)</li>
        </ul>

        <h3>Standing Waves</h3>
        <p>When there is reflection, the interference between incident and reflected waves creates a standing wave
            pattern. The total voltage on a lossless line is:</p>
        <div class="math-container">
            \[
            V_s(z) = V_0^+ (e^{-j\beta z} + \Gamma e^{j\beta z})
            \]
        </div>
        <p>The magnitude of voltage varies with position:</p>
        <div class="math-container">
            \[
            |V_s(z)| = |V_0^+| \sqrt{1 + |\Gamma|^2 + 2|\Gamma|\cos(2\beta z + \theta_\Gamma)}
            \]
        </div>
        <p>where \(\theta_\Gamma\) is the phase angle of \(\Gamma\).</p>

        <h3>Standing Wave Ratio (SWR)</h3>
        <p>The standing wave ratio (SWR) is defined as the ratio of maximum to minimum voltage magnitude on the line:
        </p>
        <div class="math-container">
            \[
            \text{SWR} = \frac{|V_s|_{\text{max}}}{|V_s|_{\text{min}}} = \frac{1 + |\Gamma|}{1 - |\Gamma|}
            \]
        </div>
        <p>SWR ranges from 1 (no reflection, \(|\Gamma| = 0\)) to \(\infty\) (total reflection, \(|\Gamma| = 1\)).</p>
        <p>The positions of voltage maxima and minima can be found from:</p>
        <div class="math-container">
            \[
            z_{\text{max}} = \frac{\theta_\Gamma}{2\beta} - \frac{n\pi}{\beta} \quad (n = 0, 1, 2, \ldots)
            \]
        </div>
        <div class="math-container">
            \[
            z_{\text{min}} = \frac{\theta_\Gamma}{2\beta} - \frac{(2n+1)\pi}{2\beta} \quad (n = 0, 1, 2, \ldots)
            \]
        </div>

        <h3>Impedance Matching</h3>
        <p>Impedance matching is important to maximize power transfer and minimize reflections. When the load is matched
            to the line (\(Z_L = Z_0\)), \(\Gamma = 0\) and SWR = 1, ensuring maximum power delivery to the load.</p>
        <p>One common matching technique is the quarter-wave transformer, which uses a section of transmission line with
            length \(\lambda/4\) and characteristic impedance \(Z_{01} = \sqrt{Z_0 Z_L}\) to match a real load \(Z_L\)
            to a line with characteristic impedance \(Z_0\).</p>
    </div>
</div>