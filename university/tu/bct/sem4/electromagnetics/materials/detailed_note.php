<!-- <==================chapter 1 ==================> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 1: Introduction</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f5f5f5;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .chapter {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .chapter-title {
            font-size: 1.8em;
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-top: 0;
        }
        
        .section {
            margin-bottom: 25px;
        }
        
        .section-title {
            font-size: 1.4em;
            color: #2980b9;
            margin-top: 20px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        
        .section-content {
            margin-left: 15px;
            padding-bottom: 15px;
            display: block;
        }
        
        .equation {
            background: #f9f9f9;
            border-left: 4px solid #3498db;
            padding: 10px 15px;
            margin: 10px 0;
            font-family: 'Courier New', Courier, monospace;
            overflow-x: auto;
            white-space: pre-wrap;
        }
        
        .example {
            background: #e8f4fc;
            border: 1px solid #bde0fe;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }
        
        .navigation {
            background: #2c3e50;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .nav-item {
            display: inline-block;
        }
        
        .nav-link {
            color: #ecf0f1;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            background: #3498db;
        }
        
        .nav-link.active {
            background: #3498db;
        }
        
        .image-container {
            text-align: center;
            margin: 15px 0;
        }
        
        .image-caption {
            font-size: 0.9em;
            color: #7f8c8d;
            margin-top: 5px;
        }
        
        .problem {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }
        
        .problem-title {
            font-weight: bold;
            color: #e74c3c;
        }
        
        @media (max-width: 768px) {
            body {
                font-size: 13px;
            }
            
            .container {
                padding: 10px;
            }
            
            .chapter-title {
                font-size: 1.5em;
            }
            
            .section-title {
                font-size: 1.2em;
            }
            
            .nav-list {
                flex-direction: column;
            }
        }
        
        @media (max-width: 480px) {
            body {
                font-size: 12px;
            }
            
            .equation {
                font-size: 0.9em;
            }
            
            .section-content {
                margin-left: 5px;
            }
        }
        
        .math-inline {
            font-family: 'Cambria Math', 'Segoe UI Symbol', serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul class="nav-list">
                <li class="nav-item"><a href="#section1" class="nav-link active">1.1 Scalar and vector fields</a></li>
                <li class="nav-item"><a href="#section2" class="nav-link">1.2 Operations on scalar and vector fields</a></li>
                <li class="nav-item"><a href="#section3" class="nav-link">1.3 Co-ordinate systems</a></li>
            </ul>
        </div>
        
        <div id="chapter_1" class="chapter">
            <h1 class="chapter-title">1. Introduction (4 hours)</h1>
            
            <div id="section1" class="section">
                <h2 class="section-title" onclick="document.getElementById('section1-content').style.display = 'block'">1.1 Scalar and vector fields</h2>
                <div id="section1-content" class="section-content" style="display:block">
                    <p><strong>Scalar Quantity</strong></p>
                    <ul>
                        <li>The term scalar refers to a quantity whose value may be represented by a single (positive or negative) real number.</li>
                        <li>The x, y, and z used in basic algebra are scalars, and the quantities they represent are scalars</li>
                        <li>A body falling a distance "L" in a time "t", or the temperature "T" at any point in a bowl of soup whose coordinates are x, y, and z, then L, t, T, x, y, and z are all scalars.</li>
                        <li>Other scalar quantities are mass, density, pressure (but not force), volume, volume resistivity, and voltage.</li>
                    </ul>
                    
                    <p><strong>Vector Quantity</strong></p>
                    <ul>
                        <li>A vector quantity has both a magnitude and a direction in space.</li>
                        <li>Force, velocity, acceleration, and a straight line from the positive to the negative terminal of a storage battery are examples of vectors.</li>
                        <li>Each quantity is characterized by both a magnitude and a direction.</li>
                    </ul>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/400x200" alt="Vector Quantity Illustration" width="400">
                        <div class="image-caption">Figure: Vector quantity showing magnitude and direction</div>
                    </div>
                    
                    <p><strong>Vector Representation</strong></p>
                    <p>A vector A in Cartesian (or rectangular) coordinates may be represented as (Ax, Ay, Az) or (Ax ax + Ay ay + Az az)</p>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/400x200" alt="Cartesian Vector Representation" width="400">
                        <div class="image-caption">Figure: Vector representation in Cartesian coordinate system</div>
                    </div>
                    
                    <p><strong>Magnitude of a Vector</strong></p>
                    <p>The magnitude of A is a scalar quantity and written as A or ||A||, and is given by:</p>
                    
                    <div class="equation">
                        $$||\mathbf{A}|| = \sqrt{A_x^2 + A_y^2 + A_z^2}$$
                    </div>
                    
                    <p><strong>Unit Vector</strong></p>
                    <p>A unit vector aA along A is defined as a vector whose magnitude is unity (i.e., 1) and its direction is along A, that is:</p>
                    
                    <div class="equation">
                        $$\mathbf{a}_A = \frac{\mathbf{A}}{||\mathbf{A}||}$$
                    </div>
                    
                    <p>Note that ||aA|| = 1. Thus we may write A as:</p>
                    
                    <div class="equation">
                        $$\mathbf{A} = ||\mathbf{A}|| \mathbf{a}_A$$
                    </div>
                    
                    <p>which completely specifies A in terms of its magnitude A and its direction aA.</p>
                </div>
            </div>
            
            <div id="section2" class="section">
                <h2 class="section-title" onclick="document.getElementById('section2-content').style.display = 'block'">1.2 Operations on scalar and vector fields</h2>
                <div id="section2-content" class="section-content" style="display:block">
                    <p><strong>Vector Addition and Subtraction</strong></p>
                    <ul>
                        <li>Two vectors A and B can be added together to give another vector C; that is, C = A + B</li>
                        <li>Vector addition follow either parallelogram law of addition or head to tail rule</li>
                        <li>Let A = (Ax, Ay, Az) and B = (Bx, By, Bz), then:</li>
                    </ul>
                    
                    <div class="equation">
                        $$\mathbf{C} = (A_x+B_x)\mathbf{a}_x + (A_y+B_y)\mathbf{a}_y + (A_z+B_z)\mathbf{a}_z$$
                    </div>
                    
                    <p>Vector subtraction is similarly carried out as:</p>
                    
                    <div class="equation">
                        $$\mathbf{D} = \mathbf{A} - \mathbf{B} = \mathbf{A} + (-\mathbf{B})$$
                    </div>
                    
                    <div class="equation">
                        $$\mathbf{D} = (A_x-B_x)\mathbf{a}_x + (A_y-B_y)\mathbf{a}_y + (A_z-B_z)\mathbf{a}_z$$
                    </div>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/400x200" alt="Vector Addition" width="400">
                        <div class="image-caption">Figure: Vector addition using parallelogram law</div>
                    </div>
                    
                    <p><strong>Laws of Vector Algebra</strong></p>
                    
                    <div class="equation">
                        $$
                        \begin{array}{c|c|c}
                        \text{Law} & \text{Addition} & \text{Multiplication} \\
                        \hline
                        \text{Commutative} & \mathbf{A} + \mathbf{B} = \mathbf{B} + \mathbf{A} & k\mathbf{A} = \mathbf{A}k \\
                        \text{Associative} & \mathbf{A} + (\mathbf{B} + \mathbf{C}) = (\mathbf{A} + \mathbf{B}) + \mathbf{C} & k(l\mathbf{A}) = (kl)\mathbf{A} \\
                        \text{Distributive} & k(\mathbf{A} + \mathbf{B}) = k\mathbf{A} + k\mathbf{B} & \\
                        \end{array}
                        $$
                    </div>
                    
                    <p><strong>Position Vector</strong></p>
                    <p>A point P in Cartesian coordinates may be represented by (x, y, z).</p>
                    
                    <p><strong>Distance Vector</strong></p>
                    <p>The distance vector is the displacement from one point to another.</p>
                    
                    <div class="equation">
                        $$\mathbf{r}_{PQ} = \mathbf{r}_Q - \mathbf{r}_P = (x_Q - x_P)\mathbf{a}_x + (y_Q - y_P)\mathbf{a}_y + (z_Q - z_P)\mathbf{a}_z$$
                    </div>
                    
                    <p><strong>Vector Multiplication</strong></p>
                    
                    <p><strong>Scalar (or dot) product: A·B</strong></p>
                    <p>The dot product of two vectors A and B, written as A·B, is defined geometrically as the product of the magnitudes of A and B and the cosine of the smaller angle between them when they are drawn tail to tail.</p>
                    
                    <div class="equation">
                        $$\mathbf{A} \cdot \mathbf{B} = |\mathbf{A}||\mathbf{B}|\cos\theta_{AB}$$
                    </div>
                    
                    <p>where θAB is the smaller angle between A and B. The result of A·B is called either the scalar product because it is scalar, or the dot product due to the dot sign.</p>
                    
                    <p>Let A = (Ax, Ay, Az) and B = (Bx, By, Bz), then:</p>
                    
                    <div class="equation">
                        $$\mathbf{A} \cdot \mathbf{B} = A_xB_x + A_yB_y + A_zB_z$$
                    </div>
                    
                    <p>Two vectors A and B are said to be orthogonal (or perpendicular) with each other if A·B = 0.</p>
                    
                    <p>We know:</p>
                    
                    <div class="equation">
                        $$\mathbf{a}_x \cdot \mathbf{a}_y = \mathbf{a}_y \cdot \mathbf{a}_z = \mathbf{a}_z \cdot \mathbf{a}_x = 0$$
                    </div>
                    
                    <div class="equation">
                        $$\mathbf{a}_x \cdot \mathbf{a}_x = \mathbf{a}_y \cdot \mathbf{a}_y = \mathbf{a}_z \cdot \mathbf{a}_z = 1$$
                    </div>
                    
                    <p>Note that dot product obeys the following:</p>
                    <ul>
                        <li>Commutative law: A·B = B·A</li>
                        <li>Distributive law: A·(B + C) = A·B + A·C</li>
                        <li>A·A = ||A||² = A²</li>
                    </ul>
                    
                    <p><strong>Vector (or cross) product: A×B</strong></p>
                    <p>The cross product of two vectors A and B, written as A×B, is a vector quantity whose magnitude is the area of the parallelogram formed by A and B and is in the direction of advance of a right-handed screw as A is turned into B.</p>
                    
                    <div class="equation">
                        $$\mathbf{A} \times \mathbf{B} = |\mathbf{A}||\mathbf{B}|\sin\theta_{AB} \mathbf{a}_n$$
                    </div>
                    
                    <p>where an is a unit vector normal to the plane containing A and B. The direction of an is taken as the direction of the right thumb when the fingers of the right hand rotate from A to B.</p>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/400x200" alt="Cross Product Illustration" width="400">
                        <div class="image-caption">Figure: Cross product direction using right-hand rule</div>
                    </div>
                    
                    <p>Let A = (Ax, Ay, Az) and B = (Bx, By, Bz), then:</p>
                    
                    <div class="equation">
                        $$\mathbf{A} \times \mathbf{B} = (A_yB_z - A_zB_y)\mathbf{a}_x + (A_zB_x - A_xB_z)\mathbf{a}_y + (A_xB_y - A_yB_x)\mathbf{a}_z$$
                    </div>
                    
                    <p>We know:</p>
                    
                    <div class="equation">
                        $$\mathbf{a}_x \times \mathbf{a}_y = \mathbf{a}_z$$
                    </div>
                    
                    <div class="equation">
                        $$\mathbf{a}_y \times \mathbf{a}_z = \mathbf{a}_x$$
                    </div>
                    
                    <div class="equation">
                        $$\mathbf{a}_z \times \mathbf{a}_x = \mathbf{a}_y$$
                    </div>
                    
                    <p>Properties of cross product:</p>
                    <ul>
                        <li>It is not commutative: A×B ≠ B×A</li>
                        <li>It is anti-commutative: A×B = -B×A</li>
                        <li>It is not associative: A×(B×C) ≠ (A×B)×C</li>
                        <li>It is distributive: A×(B+C) = A×B + A×C</li>
                        <li>A×A = 0</li>
                    </ul>
                    
                    <p><strong>Scalar Triple Product</strong></p>
                    <p>Given three vectors A, B, and C, we define the scalar triple product as:</p>
                    
                    <div class="equation">
                        $$\mathbf{A} \cdot (\mathbf{B} \times \mathbf{C}) = \mathbf{B} \cdot (\mathbf{C} \times \mathbf{A}) = \mathbf{C} \cdot (\mathbf{A} \times \mathbf{B})$$
                    </div>
                    
                    <p>If A = (Ax, Ay, Az), B = (Bx, By, Bz), and C = (Cx, Cy, Cz), then A·(B×C) is the volume of a parallelogram having A, B, and C as edges and is easily obtained by finding the determinant of the 3×3 matrix formed by A, B, and C:</p>
                    
                    <div class="equation">
                        $$\mathbf{A} \cdot (\mathbf{B} \times \mathbf{C}) = 
                        \begin{vmatrix}
                        A_x & A_y & A_z \\
                        B_x & B_y & B_z \\
                        C_x & C_y & C_z
                        \end{vmatrix}$$
                    </div>
                    
                    <p><strong>Vector Triple Product</strong></p>
                    <p>For vectors A, B, and C, we define the vector triple product as:</p>
                    
                    <div class="equation">
                        $$\mathbf{A} \times (\mathbf{B} \times \mathbf{C}) = \mathbf{B}(\mathbf{A} \cdot \mathbf{C}) - \mathbf{C}(\mathbf{A} \cdot \mathbf{B})$$
                    </div>
                    
                    <p>It should be noted that, (A·B)C ≠ A(B·C) But, (A·B)C = C(A·B)</p>
                    
                    <p><strong>Components of a Vector</strong></p>
                    <p>A direct application of scalar product is its use in determining the projection (or component) of a vector in a given direction. The projection can be scalar or vector.</p>
                    
                    <p>Given a vector A, we define the scalar component AB of A along vector B as:</p>
                    
                    <div class="equation">
                        $$A_B = \mathbf{A} \cdot \mathbf{a}_B$$
                    </div>
                    
                    <p>where θAB is the smaller angle between A and B</p>
                    
                    <p>The vector component AB of A along B is simply the scalar component multiplied by a unit vector along B; that is:</p>
                    
                    <div class="equation">
                        $$\mathbf{A}_B = A_B \mathbf{a}_B = (\mathbf{A} \cdot \mathbf{a}_B)\mathbf{a}_B$$
                    </div>
                </div>
            </div>
            
            <div id="section3" class="section">
                <h2 class="section-title" onclick="document.getElementById('section3-content').style.display = 'block'">1.3 Co-ordinate systems (Cartesian, cylindrical and spherical) and conversions</h2>
                <div id="section3-content" class="section-content" style="display:block">
                    <p><strong>Rectangular or Cartesian Co-ordinate system</strong></p>
                    <p>If F be the vector with components Fx, Fy and Fz, the vector F in Cartesian coordinate system can be written as: F = Fx ax + Fy ay + Fz az.</p>
                    
                    <p>The ranges of the coordinate variables x, y, and z are:</p>
                    
                    <div class="equation">
                        $$-\infty < x < \infty, -\infty < y < \infty, -\infty < z < \infty$$
                    </div>
                    
                    <p><strong>Differential Length, Surface Area and Volume</strong></p>
                    
                    <p><strong>Differential length:</strong></p>
                    
                    <div class="equation">
                        $$d\mathbf{L} = dx\,\mathbf{a}_x + dy\,\mathbf{a}_y + dz\,\mathbf{a}_z$$
                    </div>
                    
                    <p><strong>Differential Surface Area</strong></p>
                    
                    <div class="equation">
                        $$d\mathbf{S} = dx\,dy\,\mathbf{a}_z$$
                    </div>
                    
                    <div class="equation">
                        $$d\mathbf{S} = dy\,dz\,\mathbf{a}_x$$
                    </div>
                    
                    <div class="equation">
                        $$d\mathbf{S} = dx\,dz\,\mathbf{a}_y$$
                    </div>
                    
                    <p><strong>Differential Volume</strong></p>
                    
                    <div class="equation">
                        $$dv = dx\,dy\,dz$$
                    </div>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/600x400" alt="Cartesian Coordinate System" width="600">
                        <div class="image-caption">Figure: Cartesian coordinate system showing differential elements</div>
                    </div>
                    
                    <p><strong>Cylindrical Coordinate System (ρ, φ, z)</strong></p>
                    <ul>
                        <li>Here, ρ is radius of cylinder, varies from 0 ≤ ρ ≤ ∞</li>
                        <li>Here, φ is an angle between the x-axis and the projection of line joining origin and point P in the z=0 plane, varies from 0 ≤ φ ≤ 2π</li>
                        <li>Here, z is height of the cylinder</li>
                    </ul>
                    
                    <p><strong>Unit Vectors</strong></p>
                    <p>The three unit vectors in cylindrical coordinates system are: aρ, aφ, and az.</p>
                    <ul>
                        <li>The unit vector aρ at a point P(ρ1, φ1, z1) is directed radially outward, normal to the cylindrical surface ρ = ρ1. It lies in the planes φ = φ1 and z = z1.</li>
                        <li>The unit vector aφ is normal to the plane φ = φ1, points in the direction of increasing φ, lies in the plane z = z1, and is tangent to the cylindrical surface ρ = ρ1.</li>
                        <li>The unit vector az is the same as the unit vector az of the rectangular coordinate system.</li>
                    </ul>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/600x400" alt="Cylindrical Coordinate System" width="600">
                        <div class="image-caption">Figure: Cylindrical coordinate system showing unit vectors</div>
                    </div>
                    
                    <p><strong>Relationship between Rectangular and Cylindrical Coordinate System</strong></p>
                    
                    <div class="equation">
                        $$x = \rho \cos\phi$$
                    </div>
                    
                    <div class="equation">
                        $$y = \rho \sin\phi$$
                    </div>
                    
                    <div class="equation">
                        $$z = z$$
                    </div>
                    
                    <p>The cylindrical variables in terms of x, y, and z are:</p>
                    
                    <div class="equation">
                        $$\rho = \sqrt{x^2 + y^2} \quad (\rho \geq 0)$$
                    </div>
                    
                    <div class="equation">
                        $$\phi = \tan^{-1}(y/x)$$
                    </div>
                    
                    <div class="equation">
                        $$z = z$$
                    </div>
                    
                    <p><strong>Vector A in cylindrical coordinate system</strong></p>
                    <p>The vector A(Aρ, Aφ, Az) in cylindrical coordinate system is represented as:</p>
                    
                    <div class="equation">
                        $$\mathbf{A} = A_\rho \mathbf{a}_\rho + A_\phi \mathbf{a}_\phi + A_z \mathbf{a}_z$$
                    </div>
                    
                    <p><strong>Differential Length, Area, and Volume in cylindrical co-ordinate system</strong></p>
                    <p>The differential volume unit in the cylindrical coordinate system.</p>
                    
                    <p>Here, dρ, ρ dφ, and dz are all elements of length.</p>
                    
                    <p><strong>Differential Length</strong></p>
                    <p>Differential Displacement is given as:</p>
                    
                    <div class="equation">
                        $$d\mathbf{L} = d\rho\,\mathbf{a}_\rho + \rho\,d\phi\,\mathbf{a}_\phi + dz\,\mathbf{a}_z$$
                    </div>
                    
                    <p><strong>Differential Surface Area</strong></p>
                    <p>Differential normal surface area is given by,</p>
                    
                    <div class="equation">
                        $$d\mathbf{S} = \rho\,d\phi\,dz\,\mathbf{a}_\rho$$
                    </div>
                    
                    <div class="equation">
                        $$d\mathbf{S} = d\rho\,dz\,\mathbf{a}_\phi$$
                    </div>
                    
                    <div class="equation">
                        $$d\mathbf{S} = d\rho\,d\phi\,\mathbf{a}_z$$
                    </div>
                    
                    <p><strong>Differential Volume</strong></p>
                    
                    <div class="equation">
                        $$dv = \rho\,d\rho\,d\phi\,dz$$
                    </div>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/600x400" alt="Cylindrical Differential Elements" width="600">
                        <div class="image-caption">Figure: Cylindrical differential elements showing differential volume</div>
                    </div>
                    
                    <p><strong>The Spherical Coordinate System (r, θ, φ)</strong></p>
                    <p>Any point P(r, θ, φ) and the point is the intersection of three mutually perpendicular surfaces namely a sphere, a cone and a plane.</p>
                    
                    <ul>
                        <li>r = radius of sphere, varies from 0 ≤ r ≤ ∞</li>
                        <li>θ = angle between the line joining origin and point P, and the z-axis, varies from 0 ≤ θ ≤ π</li>
                        <li>φ = angle between the x-axis and the projection of line joining origin and point P in the z=0 plane, varies from 0 ≤ φ ≤ 2π</li>
                    </ul>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/600x400" alt="Spherical Coordinate System" width="600">
                        <div class="image-caption">Figure: Spherical coordinate system showing unit vectors</div>
                    </div>
                    
                    <p><strong>Vector A in spherical coordinates</strong></p>
                    <p>A vector A in spherical coordinates may be written as (Ar, Aθ, Aφ) or Ar ar + Aθ aθ + Aφ aφ</p>
                    
                    <p><strong>Relationship between Cartesian and Spherical Coordinates</strong></p>
                    
                    <div class="equation">
                        $$x = r \sin\theta \cos\phi$$
                    </div>
                    
                    <div class="equation">
                        $$y = r \sin\theta \sin\phi$$
                    </div>
                    
                    <div class="equation">
                        $$z = r \cos\theta$$
                    </div>
                    
                    <div class="equation">
                        $$r = \sqrt{x^2 + y^2 + z^2}$$
                    </div>
                    
                    <div class="equation">
                        $$\theta = \cos^{-1}\left(\frac{z}{\sqrt{x^2 + y^2 + z^2}}\right)$$
                    </div>
                    
                    <div class="equation">
                        $$\phi = \tan^{-1}(y/x)$$
                    </div>
                    
                    <p><strong>Differential Length, Surface area and Volume in Spherical Coordinates</strong></p>
                    
                    <p><strong>Differential Displacement (Length)</strong></p>
                    
                    <div class="equation">
                        $$d\mathbf{L} = dr\,\mathbf{a}_r + r\,d\theta\,\mathbf{a}_\theta + r \sin\theta\,d\phi\,\mathbf{a}_\phi$$
                    </div>
                    
                    <p><strong>Differential Volume</strong></p>
                    
                    <div class="equation">
                        $$dv = r^2 \sin\theta\,dr\,d\theta\,d\phi$$
                    </div>
                    
                    <p><strong>Differential Surface area</strong></p>
                    
                    <div class="equation">
                        $$d\mathbf{S} = r^2 \sin\theta\,d\theta\,d\phi\,\mathbf{a}_r$$
                    </div>
                    
                    <div class="equation">
                        $$d\mathbf{S} = r \sin\theta\,dr\,d\phi\,\mathbf{a}_\theta$$
                    </div>
                    
                    <div class="equation">
                        $$d\mathbf{S} = r\,dr\,d\theta\,\mathbf{a}_\phi$$
                    </div>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/600x400" alt="Spherical Differential Elements" width="600">
                        <div class="image-caption">Figure: Spherical differential elements showing differential volume</div>
                    </div>
                    
                    <p><strong>Conversion between Coordinate Systems</strong></p>
                    
                    <p><strong>Cylindrical to Spherical</strong></p>
                    
                    <div class="equation">
                        $$r = \sqrt{\rho^2 + z^2}$$
                    </div>
                    
                    <div class="equation">
                        $$\theta = \cos^{-1}\left(\frac{z}{\sqrt{\rho^2 + z^2}}\right)$$
                    </div>
                    
                    <div class="equation">
                        $$\phi = \phi$$
                    </div>
                    
                    <p><strong>Spherical to Cylindrical</strong></p>
                    
                    <div class="equation">
                        $$\rho = r \sin\theta$$
                    </div>
                    
                    <div class="equation">
                        $$\phi = \phi$$
                    </div>
                    
                    <div class="equation">
                        $$z = r \cos\theta$$
                    </div>
                    
                    <p><strong>Vector Component Conversion</strong></p>
                    
                    <p><strong>Cylindrical to Cartesian</strong></p>
                    
                    <div class="equation">
                        $$A_x = A_\rho \cos\phi - A_\phi \sin\phi$$
                    </div>
                    
                    <div class="equation">
                        $$A_y = A_\rho \sin\phi + A_\phi \cos\phi$$
                    </div>
                    
                    <div class="equation">
                        $$A_z = A_z$$
                    </div>
                    
                    <p><strong>Cartesian to Cylindrical</strong></p>
                    
                    <div class="equation">
                        $$A_\rho = A_x \cos\phi + A_y \sin\phi$$
                    </div>
                    
                    <div class="equation">
                        $$A_\phi = -A_x \sin\phi + A_y \cos\phi$$
                    </div>
                    
                    <div class="equation">
                        $$A_z = A_z$$
                    </div>
                    
                    <p><strong>Spherical to Cartesian</strong></p>
                    
                    <div class="equation">
                        $$A_x = A_r \sin\theta \cos\phi + A_\theta \cos\theta \cos\phi - A_\phi \sin\phi$$
                    </div>
                    
                    <div class="equation">
                        $$A_y = A_r \sin\theta \sin\phi + A_\theta \cos\theta \sin\phi + A_\phi \cos\phi$$
                    </div>
                    
                    <div class="equation">
                        $$A_z = A_r \cos\theta - A_\theta \sin\theta$$
                    </div>
                    
                    <p><strong>Cartesian to Spherical</strong></p>
                    
                    <div class="equation">
                        $$A_r = A_x \sin\theta \cos\phi + A_y \sin\theta \sin\phi + A_z \cos\theta$$
                    </div>
                    
                    <div class="equation">
                        $$A_\theta = A_x \cos\theta \cos\phi + A_y \cos\theta \sin\phi - A_z \sin\theta$$
                    </div>
                    
                    <div class="equation">
                        $$A_\phi = -A_x \sin\phi + A_y \cos\phi$$
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!-- <==================chapter 2 ==================> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 2: Electric Field</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f5f5f5;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .chapter {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .chapter-title {
            font-size: 1.8em;
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-top: 0;
        }
        
        .section {
            margin-bottom: 25px;
        }
        
        .section-title {
            font-size: 1.4em;
            color: #2980b9;
            margin-top: 20px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        
        .section-content {
            margin-left: 15px;
            padding-bottom: 15px;
            display: block;
        }
        
        .equation {
            background: #f9f9f9;
            border-left: 4px solid #3498db;
            padding: 10px 15px;
            margin: 10px 0;
            font-family: 'Courier New', Courier, monospace;
            overflow-x: auto;
            white-space: pre-wrap;
        }
        
        .example {
            background: #e8f4fc;
            border: 1px solid #bde0fe;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }
        
        .navigation {
            background: #2c3e50;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .nav-item {
            display: inline-block;
        }
        
        .nav-link {
            color: #ecf0f1;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            background: #3498db;
        }
        
        .nav-link.active {
            background: #3498db;
        }
        
        .image-container {
            text-align: center;
            margin: 15px 0;
        }
        
        .image-caption {
            font-size: 0.9em;
            color: #7f8c8d;
            margin-top: 5px;
        }
        
        .problem {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }
        
        .problem-title {
            font-weight: bold;
            color: #e74c3c;
        }
        
        @media (max-width: 768px) {
            body {
                font-size: 13px;
            }
            
            .container {
                padding: 10px;
            }
            
            .chapter-title {
                font-size: 1.5em;
            }
            
            .section-title {
                font-size: 1.2em;
            }
            
            .nav-list {
                flex-direction: column;
            }
        }
        
        @media (max-width: 480px) {
            body {
                font-size: 12px;
            }
            
            .equation {
                font-size: 0.9em;
            }
            
            .section-content {
                margin-left: 5px;
            }
        }
        
        .math-inline {
            font-family: 'Cambria Math', 'Segoe UI Symbol', serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul class="nav-list">
                <li class="nav-item"><a href="#section1" class="nav-link active">2.1 Coulomb's law</a></li>
                <li class="nav-item"><a href="#section2" class="nav-link">2.2 Electric field intensity</a></li>
                <li class="nav-item"><a href="#section3" class="nav-link">2.3 Electric flux density</a></li>
                <li class="nav-item"><a href="#section4" class="nav-link">2.4 Gauss's law and applications</a></li>
                <li class="nav-item"><a href="#section5" class="nav-link">2.5 Physical significance of divergence</a></li>
                <li class="nav-item"><a href="#section6" class="nav-link">2.6 Electric potential</a></li>
                <li class="nav-item"><a href="#section7" class="nav-link">2.7 Energy density in electrostatic field</a></li>
                <li class="nav-item"><a href="#section8" class="nav-link">2.8 Electric properties of material medium</a></li>
                <li class="nav-item"><a href="#section9" class="nav-link">2.9 Free and bound charges</a></li>
                <li class="nav-item"><a href="#section10" class="nav-link">2.10 Current and continuity equation</a></li>
                <li class="nav-item"><a href="#section11" class="nav-link">2.11 Boundary value problems</a></li>
            </ul>
        </div>
        
        <div id="chapter_2" class="chapter">
            <h1 class="chapter-title">2. Electric Field (15 hours)</h1>
            
            <div id="section1" class="section">
                <h2 class="section-title" onclick="document.getElementById('section1-content').style.display = 'block'">2.1 Coulomb's law</h2>
                <div id="section1-content" class="section-content" style="display:block">
                    <p><strong>Coulomb's Law</strong></p>
                    
                    <p>Coulomb stated that the force between two very small objects (like charges) separated in a vacuum or free space by a distance, which is large compared to their size, is proportional to the product of charges on each and inversely proportional to the square of the distance between them:</p>
                    
                    <div class="equation">
                        $$F \propto \frac{Q_1 Q_2}{R^2}$$
                    </div>
                    
                    <p>Combining both:</p>
                    
                    <div class="equation">
                        $$F = K\frac{Q_1 Q_2}{R^2}$$
                    </div>
                    
                    <p>where K is a proportionality constant:</p>
                    
                    <div class="equation">
                        $$K = \frac{1}{4\pi\epsilon_0} \quad \text{where} \quad \epsilon_0 = 8.854 \times 10^{-12} \, \text{F/m}$$
                    </div>
                    
                    <p>For any other medium:</p>
                    
                    <div class="equation">
                        $$K = \frac{1}{4\pi\epsilon} \quad \text{where} \quad \epsilon = \epsilon_r \epsilon_0$$
                    </div>
                    
                    <p>The final scalar expression for Coulomb's law in vacuum or free space is:</p>
                    
                    <div class="equation">
                        $$F = \frac{Q_1 Q_2}{4\pi\epsilon_0 R^2}$$
                    </div>
                    
                    <p>where:</p>
                    <ul>
                        <li>$Q_1$ and $Q_2$ are the positive or negative quantities of charge</li>
                        <li>$R$ is the separation between the charges</li>
                        <li>$K$ is a proportionality constant</li>
                    </ul>
                    
                    <p>Also, $K = 9 \times 10^9 \frac{N\cdot m^2}{C^2}$</p>
                    
                    <p><strong>Vector Form of Coulomb's Law</strong></p>
                    
                    <p>Let us consider that the force acts along the line joining the two charges and is repulsive if the charges are alike in sign or attractive if they are of opposite sign. Let the vector $\mathbf{r}_1$ locate $Q_1$, whereas $\mathbf{r}_2$ locates $Q_2$.</p>
                    
                    <p>Then the vector $\mathbf{R}_{12} = \mathbf{r}_2 - \mathbf{r}_1$ represents the directed line segment from $Q_1$ to $Q_2$, as shown in figure below. The vector $\mathbf{F}_2$ is the force on $Q_2$ and is shown for the case where $Q_1$ and $Q_2$ have the same sign.</p>
                    
                    <div class="image-container">
                        <img src="https://i.imgur.com/9zXjD0a.png" alt="Coulomb's Law Diagram" width="400">
                        <div class="image-caption">Figure: If $Q_1$ and $Q_2$ have like signs, the vector force $\mathbf{F}_2$ on $Q_2$ is in the same direction as the vector $\mathbf{R}_{12}$</div>
                    </div>
                    
                    <p>The vector form of Coulomb's law is:</p>
                    
                    <div class="equation">
                        $$\mathbf{F}_2 = \frac{Q_1 Q_2}{4\pi\epsilon_0 R^2} \mathbf{a}_{R_{12}}$$
                    </div>
                    
                    <p>where $\mathbf{a}_{R_{12}}$ is a unit vector in the direction of $\mathbf{R}_{12}$, given as:</p>
                    
                    <div class="equation">
                        $$\mathbf{a}_{R_{12}} = \frac{\mathbf{r}_2 - \mathbf{r}_1}{|\mathbf{r}_2 - \mathbf{r}_1|}$$
                    </div>
                    
                    <p>Thus:</p>
                    
                    <div class="equation">
                        $$\mathbf{F}_2 = \frac{Q_1 Q_2}{4\pi\epsilon_0 R^2} \frac{\mathbf{r}_2 - \mathbf{r}_1}{|\mathbf{r}_2 - \mathbf{r}_1|}$$
                    </div>
                </div>
            </div>
            
            <div id="section2" class="section">
                <h2 class="section-title" onclick="document.getElementById('section2-content').style.display = 'block'">2.2 Electric field intensity</h2>
                <div id="section2-content" class="section-content" style="display:block">
                    <p><strong>Electric Field Intensity</strong></p>
                    
                    <p>If we now consider one charge fixed in position, say $Q_1$, and move a second charge named "test charge" $Q$ slowly around the first charge. There exists everywhere a force on this second charge; in other words, this second charge is displaying the existence of a force field that is associated with charge, $Q_1$. The force on it is given by Coulomb's law as:</p>
                    
                    <div class="equation">
                        $$\mathbf{F} = \frac{Q_1 Q}{4\pi\epsilon_0 R^2} \mathbf{a}_R$$
                    </div>
                    
                    <p>Electric Field Intensity is defined as a force per unit charge $\mathbf{E}_1$ arising from $Q_1$:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{\mathbf{F}}{Q} = \frac{Q_1}{4\pi\epsilon_0 R^2} \mathbf{a}_R$$
                    </div>
                    
                    <div class="image-container">
                        <img src="https://i.imgur.com/1jLqUwH.png" alt="Electric Field Intensity" width="400">
                        <div class="image-caption">Figure: Defining an Electric Field Intensity "$\mathbf{E}$"</div>
                    </div>
                    
                    <p>$\mathbf{E}_1$ is interpreted as the vector force, arising from charge $Q_1$ that acts on a unit positive test charge. More generally, we write the defining expression:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \lim_{Q \to 0} \frac{\mathbf{F}}{Q}$$
                    </div>
                    
                    <p>Thus, "$\mathbf{E}$" is a vector function, also known as the electric field intensity and is evaluated at the test charge location that arises from all other charges in the vicinity—meaning the electric field arising from the test charge itself is not included in $\mathbf{E}$. The unit of Electric field intensity is "N/C"or"V/m". Thus, the electric field intensity in general would be,</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{Q}{4\pi\epsilon_0 R^2} \mathbf{a}_R$$
                    </div>
                    
                    <p>Here, $R$ is the magnitude of the vector $\mathbf{R}$, the directed line segment from the point at which the point charge $Q$ is located to the point at which $\mathbf{E}$ is desired, and $\mathbf{a}_R$ is a unit vector in the $\mathbf{R}$ direction</p>
                    
                    <p><strong>Electric Field Intensity in Spherical Coordinate system</strong></p>
                    
                    <p>If we arbitrarily locate $Q$ at the center of a spherical coordinate system then the unit vector $\mathbf{a}_R$ becomes the radial unit vector $\mathbf{a}_r$, and $R$ becomes $r$ (radius of the sphere). Hence:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{Q}{4\pi\epsilon_0 r^2} \mathbf{a}_r$$
                    </div>
                    
                    <p><strong>Electric Field Intensity due to a point charge</strong></p>
                    
                    <p>Let us consider a point charge "$Q$" is located at $(x', y', z')$ and $(x, y, z)$ be the point where electric field intensity is to be determined.</p>
                    
                    <div class="image-container">
                        <img src="https://i.imgur.com/4dWYc6T.png" alt="Point Charge Diagram" width="400">
                        <div class="image-caption">Figure: The vector $\mathbf{r}'$ locates the point charge $Q$, the vector $\mathbf{r}$ identifies the general point in space $P(x,y,z)$, and the vector $\mathbf{R}$ from $Q$ to $P(x,y,z)$ is then $\mathbf{R} = \mathbf{r} - \mathbf{r}'$</div>
                    </div>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{Q}{4\pi\epsilon_0 R^2} \mathbf{a}_R = \frac{Q}{4\pi\epsilon_0 R^2} \frac{\mathbf{R}}{R} = \frac{Q}{4\pi\epsilon_0 |\mathbf{R}|^3} \mathbf{R}$$
                    </div>
                    
                    <p>where:</p>
                    
                    <div class="equation">
                        $$\mathbf{r}' = x'\mathbf{a}_x + y'\mathbf{a}_y + z'\mathbf{a}_z, \quad \mathbf{r} = x\mathbf{a}_x + y\mathbf{a}_y + z\mathbf{a}_z$$
                    </div>
                    
                    <div class="equation">
                        $$\mathbf{R} = \mathbf{r} - \mathbf{r}' = (x - x')\mathbf{a}_x + (y - y')\mathbf{a}_y + (z - z')\mathbf{a}_z$$
                    </div>
                    
                    <div class="equation">
                        $$|\mathbf{R}| = \sqrt{(x - x')^2 + (y - y')^2 + (z - z')^2}$$
                    </div>
                    
                    <p>Thus, the expression of electric field intensity is reduced to:</p>
                    
                    <div class="equation">
                        $$\mathbf{E}(\mathbf{r}) = \frac{Q}{4\pi\epsilon_0 |\mathbf{r} - \mathbf{r}'|^3} (\mathbf{r} - \mathbf{r}')$$
                    </div>
                    
                    <p>Electric Field Intensity for a charge "$Q$" at the origin, since $(x', y', z')$ would be $(0, 0, 0)$:</p>
                    
                    <div class="equation">
                        $$\mathbf{E}(\mathbf{r}) = \frac{Q}{4\pi\epsilon_0 (x^2 + y^2 + z^2)^{3/2}} (x\mathbf{a}_x + y\mathbf{a}_y + z\mathbf{a}_z)$$
                    </div>
                    
                    <p><strong>Electric Field Intensity due to "n" point charges</strong></p>
                    
                    <div class="image-container">
                        <img src="https://i.imgur.com/4dWYc6T.png" alt="Multiple Charges Diagram" width="400">
                        <div class="image-caption">Figure: The vector addition of the total electric field intensity at P due to $Q_1$ and $Q_2$ is made possible by the linearity of Coulomb's law</div>
                    </div>
                    
                    <p>For simplicity, we have shown two point charges in the figure. First we determine "$\mathbf{E}$" at P due to these charges and then generalized for "n" number of charges:</p>
                    
                    <div class="equation">
                        $$\mathbf{E}_1 = \frac{Q_1}{4\pi\epsilon_0 |\mathbf{r} - \mathbf{r}_1|^2} \mathbf{a}_{R_{1p}}$$
                    </div>
                    
                    <div class="equation">
                        $$\mathbf{E}_2 = \frac{Q_2}{4\pi\epsilon_0 |\mathbf{r} - \mathbf{r}_2|^2} \mathbf{a}_{R_{2p}}$$
                    </div>
                    
                    <div class="equation">
                        $$\mathbf{E} = \mathbf{E}_1 + \mathbf{E}_2 = \frac{Q_1}{4\pi\epsilon_0 |\mathbf{r} - \mathbf{r}_1|^2} \mathbf{a}_{R_{1p}} + \frac{Q_2}{4\pi\epsilon_0 |\mathbf{r} - \mathbf{r}_2|^2} \mathbf{a}_{R_{2p}}$$
                    </div>
                    
                    <p>If there are n point charges, then:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \sum_{m=1}^{n} \frac{Q_m}{4\pi\epsilon_0 |\mathbf{r} - \mathbf{r}_m|^2} \mathbf{a}_{R_{mp}}$$
                    </div>
                    
                    <p><strong>Charge Distributions</strong></p>
                    
                    <p><strong>1. Line Charge Distributions</strong></p>
                    
                    <p>If charge is distributed over a finite or infinite line (Curved or Straight), this is called line charge distribution. Line charge density is defined as $\rho_L = \frac{dQ}{dL}$, and unit is "C/m". So, we can write as:</p>
                    
                    <div class="equation">
                        $$dQ = \rho_L dL$$
                    </div>
                    
                    <p>Each differential charge "$dQ$" along the line produces a differential electric field and is given by:</p>
                    
                    <div class="equation">
                        $$d\mathbf{E} = \frac{\rho_L dL}{4\pi\epsilon_0 R^2} \mathbf{a}_R$$
                    </div>
                    
                    <p><strong>2. Surface Charge Distributions</strong></p>
                    
                    <p>If charge is distributed over a finite or infinite sheet, this is called surface charge distribution. Surface charge density is defined as $\rho_s = \frac{dQ}{dS}$, and unit is "C/m$^2$". So, we can write as:</p>
                    
                    <div class="equation">
                        $$dQ = \rho_s dS$$
                    </div>
                    
                    <p>Each differential charge "$dQ$" along the surface produces a differential electric field and is given by:</p>
                    
                    <div class="equation">
                        $$d\mathbf{E} = \frac{\rho_s dS}{4\pi\epsilon_0 R^2} \mathbf{a}_R$$
                    </div>
                    
                    <p><strong>3. Volume Charge Distributions</strong></p>
                    
                    <p>If charge is distributed throughout a specified volume, this is called volume charge distribution. Volume charge density is defined as $\rho_v = \frac{dQ}{dV}$, and unit is "C/m$^3$". So, we can write as:</p>
                    
                    <div class="equation">
                        $$dQ = \rho_v dV$$
                    </div>
                    
                    <p>Each differential charge "$dQ$" along the volume produces a differential electric field and is given by:</p>
                    
                    <div class="equation">
                        $$d\mathbf{E} = \frac{\rho_v dV}{4\pi\epsilon_0 R^2} \mathbf{a}_R$$
                    </div>
                    
                    <p><strong>Electric field due to an infinitely long line charge</strong></p>
                    
                    <div class="image-container">
                        <img src="https://i.imgur.com/4mQYjLk.png" alt="Infinite Line Charge" width="400">
                        <div class="image-caption">Figure: A uniform infinite line charge extending along z-axis</div>
                    </div>
                    
                    <p>Let us consider a uniform infinite line charge is placed on z-axis having line charge density "$\rho_L$". Let $P(0, y, 0)$ be the point on the y axis where the value of electric field intensity has to be calculated. Since the electric field does not vary with $\phi$ and $z$, "$P$" is a general point. Let "$\rho$" be the perpendicular distance from the point of interest "$P$" to the line charge.</p>
                    
                    <div class="equation">
                        $$d\mathbf{E} = \frac{dQ}{4\pi\epsilon_0 R^2} \mathbf{a}_R = \frac{dQ}{4\pi\epsilon_0 R^3} \mathbf{R}$$
                    </div>
                    
                    <p>where:</p>
                    
                    <div class="equation">
                        $$\mathbf{R} = \rho\mathbf{a}_\rho - z\mathbf{a}_z, \quad |\mathbf{R}| = \sqrt{\rho^2 + z^2}$$
                    </div>
                    
                    <p>So:</p>
                    
                    <div class="equation">
                        $$d\mathbf{E} = \frac{dQ (\rho\mathbf{a}_\rho - z\mathbf{a}_z)}{4\pi\epsilon_0 (\rho^2 + z^2)^{3/2}}$$
                    </div>
                    
                    <p>Similarly for another element:</p>
                    
                    <div class="equation">
                        $$d\mathbf{E} = \frac{dQ (\rho\mathbf{a}_\rho + z\mathbf{a}_z)}{4\pi\epsilon_0 (\rho^2 + z^2)^{3/2}}$$
                    </div>
                    
                    <p>So, total electric field intensity is sum of $d\mathbf{E}_1 + d\mathbf{E}_2$:</p>
                    
                    <div class="equation">
                        $$d\mathbf{E} = d\mathbf{E}_1 + d\mathbf{E}_2 = \frac{dQ}{4\pi\epsilon_0 (\rho^2 + z^2)^{3/2}} [\rho\mathbf{a}_\rho - z\mathbf{a}_z + \rho\mathbf{a}_\rho + z\mathbf{a}_z] = \frac{2\rho dQ \mathbf{a}_\rho}{4\pi\epsilon_0 (\rho^2 + z^2)^{3/2}}$$
                    </div>
                    
                    <p>Finally, electric field intensity at point $P$ due to infinitely long line charge can be obtained by integrating $d\mathbf{E}$ from $-\infty$ to $+\infty$:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \int_{-\infty}^{\infty} d\mathbf{E} = \int_{-\infty}^{\infty} \frac{2\rho \rho_L dz \mathbf{a}_\rho}{4\pi\epsilon_0 (\rho^2 + z^2)^{3/2}} = \frac{\rho_L}{2\pi\epsilon_0 \rho} \mathbf{a}_\rho$$
                    </div>
                    
                    <p>It should be noted that, if the line charge is not along Z-axis, $\rho$ is the perpendicular distance from the line to the point of interest, and $\mathbf{a}_\rho$ is a unit vector along that distance directed from the line charge to the field point.</p>
                    
                    <p><strong>Electric Field Intensity due to Infinite Sheet of Charge</strong></p>
                    
                    <div class="image-container">
                        <img src="https://i.imgur.com/3yJqWUz.png" alt="Infinite Sheet of Charge" width="400">
                        <div class="image-caption">Figure: An infinite sheet of charge in the yz-plane</div>
                    </div>
                    
                    <p>Let us consider an infinite sheet of charge having a uniform charge density $\rho_s$ (C/m$^2$) placed in yz plane, i.e, $x=0$ plane. Here, electric field varies along with x-axis only as y and z components arising from differential elements of charge symmetrically located with respect to the point will get canceled. Hence, only $E_x$ is present.</p>
                    
                    <p>Let $P(x, 0, 0)$ be the point on x-axis where the value of electric field intensity is to be determined. For this, we divide the sheet into differential width strip each having width "$dy$" and evaluate field at point $P$ due to a strip and then we integrate to find the electric field intensity due to the infinite sheet of charge.</p>
                    
                    <p>Small value of electric field due to the strip is:</p>
                    
                    <div class="equation">
                        $$d\mathbf{E} = \frac{\rho_s dy}{2\pi\epsilon_0 \sqrt{x^2 + y^2}} \mathbf{a}_R$$
                    </div>
                    
                    <p>As only x-component is present:</p>
                    
                    <div class="equation">
                        $$dE_x = d\mathbf{E} \cdot \mathbf{a}_x = \frac{\rho_s dy}{2\pi\epsilon_0 \sqrt{x^2 + y^2}} \cos\theta$$
                    </div>
                    
                    <p>where:</p>
                    
                    <div class="equation">
                        $$\cos\theta = \frac{x}{\sqrt{x^2 + y^2}}$$
                    </div>
                    
                    <p>So:</p>
                    
                    <div class="equation">
                        $$dE_x = \frac{\rho_s x dy}{2\pi\epsilon_0 (x^2 + y^2)}$$
                    </div>
                    
                    <p>Total electric field due to entire infinite sheet can be calculated as:</p>
                    
                    <div class="equation">
                        $$E_x = \int_{-\infty}^{\infty} dE_x = \int_{-\infty}^{\infty} \frac{\rho_s x dy}{2\pi\epsilon_0 (x^2 + y^2)} = \frac{\rho_s}{2\epsilon_0}$$
                    </div>
                    
                    <p>In vector form:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{\rho_s}{2\epsilon_0} \mathbf{a}_n$$
                    </div>
                    
                    <p>where $\mathbf{a}_n$ is unit vector normal to the sheet and directed away from it.</p>
                    
                    <p>If $P$ is at $(-x, 0, 0)$, then:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = -\frac{\rho_s}{2\epsilon_0} \mathbf{a}_n$$
                    </div>
                    
                    <p>In general we can write as:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{\rho_s}{2\epsilon_0} \mathbf{a}_n$$
                    </div>
                    
                    <p>where $\mathbf{a}_n$ is unit vector normal to the sheet and directed away from it.</p>
                    
                    <p><strong>Parallel Plate Capacitor</strong></p>
                    
                    <div class="image-container">
                        <img src="https://i.imgur.com/3yJqWUz.png" alt="Parallel Plate Capacitor" width="400">
                        <div class="image-caption">Figure: Arrangement of two infinite sheets of charge resulting a capacitor</div>
                    </div>
                    
                    <p>Let us consider two infinite sheets of charge placed on $x=0$ and $x=a$ plane as shown in figure above. Let $+\rho_s$ and $-\rho_s$ be the surface charge density on these sheets. This arrangement makes a parallel plate capacitor with air as a dielectric. Let $\mathbf{E}_+$ and $\mathbf{E}_-$ be the electric field due to infinite sheets having positive and negative charges respectively.</p>
                    
                    <p>In the region $x < 0$:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{\rho_s}{2\epsilon_0}(-\mathbf{a}_x) + \frac{\rho_s}{2\epsilon_0}(\mathbf{a}_x) = 0$$
                    </div>
                    
                    <p>In the region $x > a$:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{\rho_s}{2\epsilon_0}(\mathbf{a}_x) + \frac{\rho_s}{2\epsilon_0}(-\mathbf{a}_x) = 0$$
                    </div>
                    
                    <p>In the region $0 < x < a$:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{\rho_s}{2\epsilon_0}(\mathbf{a}_x) + \frac{\rho_s}{2\epsilon_0}(\mathbf{a}_x) = \frac{\rho_s}{\epsilon_0} \mathbf{a}_x$$
                    </div>
                    
                    <p>Hence, the electric field exists only in between the capacitor.</p>
                </div>
            </div>
            
            <div id="section3" class="section">
                <h2 class="section-title" onclick="document.getElementById('section3-content').style.display = 'block'">2.3 Electric flux density</h2>
                <div id="section3-content" class="section-content" style="display:block">
                    <p><strong>Electric Flux Density</strong></p>
                    
                    <p>Electric flux density (D) is defined as:</p>
                    
                    <div class="equation">
                        $$\mathbf{D} = \epsilon_0 \mathbf{E}$$
                    </div>
                    
                    <p>For materials with permittivity $\epsilon$:</p>
                    
                    <div class="equation">
                        $$\mathbf{D} = \epsilon \mathbf{E}$$
                    </div>
                    
                    <p><strong>Gauss's Law</strong></p>
                    
                    <p>Gauss's law states that the total electric flux through a closed surface is equal to the total charge enclosed by that surface divided by the permittivity of free space:</p>
                    
                    <div class="equation">
                        $$\oint_S \mathbf{D} \cdot d\mathbf{S} = Q_{enc}$$
                    </div>
                    
                    <p>or in terms of electric field intensity:</p>
                    
                    <div class="equation">
                        $$\oint_S \epsilon_0 \mathbf{E} \cdot d\mathbf{S} = Q_{enc}$$
                    </div>
                    
                    <p><strong>Physical Significance</strong></p>
                    
                    <ul>
                        <li>Electric flux density $\mathbf{D}$ is a measure of the electric field in terms of charge distribution</li>
                        <li>It is independent of the medium</li>
                        <li>It is related to the free charges only</li>
                        <li>It has units of C/m²</li>
                    </ul>
                    
                    <p><strong>Gauss's Law Applications</strong></p>
                    
                    <p>Gauss's law is particularly useful for calculating electric fields for symmetric charge distributions:</p>
                    
                    <p><strong>1. Spherical Symmetry</strong></p>
                    
                    <p>For a point charge or uniformly charged sphere:</p>
                    
                    <div class="equation">
                        $$\oint_S \mathbf{D} \cdot d\mathbf{S} = D_r \cdot 4\pi r^2 = Q_{enc}$$
                    </div>
                    
                    <p>So:</p>
                    
                    <div class="equation">
                        $$D_r = \frac{Q_{enc}}{4\pi r^2} \quad \text{and} \quad \mathbf{E} = \frac{Q_{enc}}{4\pi\epsilon_0 r^2} \mathbf{a}_r$$
                    </div>
                    
                    <p><strong>2. Cylindrical Symmetry</strong></p>
                    
                    <p>For an infinite line charge with charge density $\rho_L$:</p>
                    
                    <div class="equation">
                        $$\oint_S \mathbf{D} \cdot d\mathbf{S} = D_\rho \cdot 2\pi \rho L = \rho_L L$$
                    </div>
                    
                    <p>So:</p>
                    
                    <div class="equation">
                        $$D_\rho = \frac{\rho_L}{2\pi \rho} \quad \text{and} \quad \mathbf{E} = \frac{\rho_L}{2\pi\epsilon_0 \rho} \mathbf{a}_\rho$$
                    </div>
                    
                    <p><strong>3. Planar Symmetry</strong></p>
                    
                    <p>For an infinite sheet of charge with surface charge density $\rho_s$:</p>
                    
                    <div class="equation">
                        $$\oint_S \mathbf{D} \cdot d\mathbf{S} = D_n \cdot 2A = \rho_s A$$
                    </div>
                    
                    <p>So:</p>
                    
                    <div class="equation">
                        $$D_n = \frac{\rho_s}{2} \quad \text{and} \quad \mathbf{E} = \frac{\rho_s}{2\epsilon_0} \mathbf{a}_n$$
                    </div>
                    
                    <p><strong>Parallel Plate Capacitor</strong></p>
                    
                    <p>For two parallel plates with surface charge densities $+\rho_s$ and $-\rho_s$:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{\rho_s}{\epsilon_0} \mathbf{a}_n \quad \text{for} \quad 0 < x < a$$
                    </div>
                    
                    <p>and zero outside the plates.</p>
                    
                    <p><strong>Example: Electric Field due to a Uniformly Charged Sphere</strong></p>
                    
                    <p>For a sphere of radius $a$ with uniform volume charge density $\rho_v$:</p>
                    
                    <ul>
                        <li>Inside the sphere ($r < a$):
                            <div class="equation">
                                $$\mathbf{E} = \frac{\rho_v r}{3\epsilon_0} \mathbf{a}_r$$
                            </div>
                        </li>
                        <li>Outside the sphere ($r > a$):
                            <div class="equation">
                                $$\mathbf{E} = \frac{\rho_v a^3}{3\epsilon_0 r^2} \mathbf{a}_r = \frac{Q}{4\pi\epsilon_0 r^2} \mathbf{a}_r$$
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div id="section4" class="section">
                <h2 class="section-title" onclick="document.getElementById('section4-content').style.display = 'block'">2.4 Gauss's law and applications</h2>
                <div id="section4-content" class="section-content" style="display:block">
                    <p><strong>Gauss's Law</strong></p>
                    
                    <p>Gauss's law is one of Maxwell's equations and states that the total electric flux through a closed surface is equal to the total charge enclosed by that surface divided by the permittivity of free space:</p>
                    
                    <div class="equation">
                        $$\oint_S \mathbf{D} \cdot d\mathbf{S} = Q_{enc}$$
                    </div>
                    
                    <p>where:</p>
                    <ul>
                        <li>$\mathbf{D}$ is the electric flux density (C/m²)</li>
                        <li>$d\mathbf{S}$ is the differential surface element</li>
                        <li>$Q_{enc}$ is the total charge enclosed by the surface</li>
                    </ul>
                    
                    <p>In differential form, Gauss's law is:</p>
                    
                    <div class="equation">
                        $$\nabla \cdot \mathbf{D} = \rho_v$$
                    </div>
                    
                    <p>where $\rho_v$ is the volume charge density.</p>
                    
                    <p><strong>Applications of Gauss's Law</strong></p>
                    
                    <p>Gauss's law is particularly useful for calculating electric fields for symmetric charge distributions:</p>
                    
                    <p><strong>1. Spherical Symmetry</strong></p>
                    
                    <p>For a point charge or uniformly charged sphere:</p>
                    
                    <div class="equation">
                        $$\oint_S \mathbf{D} \cdot d\mathbf{S} = D_r \cdot 4\pi r^2 = Q_{enc}$$
                    </div>
                    
                    <p>So:</p>
                    
                    <div class="equation">
                        $$D_r = \frac{Q_{enc}}{4\pi r^2} \quad \text{and} \quad \mathbf{E} = \frac{Q_{enc}}{4\pi\epsilon_0 r^2} \mathbf{a}_r$$
                    </div>
                    
                    <p><strong>2. Cylindrical Symmetry</strong></p>
                    
                    <p>For an infinite line charge with charge density $\rho_L$:</p>
                    
                    <div class="equation">
                        $$\oint_S \mathbf{D} \cdot d\mathbf{S} = D_\rho \cdot 2\pi \rho L = \rho_L L$$
                    </div>
                    
                    <p>So:</p>
                    
                    <div class="equation">
                        $$D_\rho = \frac{\rho_L}{2\pi \rho} \quad \text{and} \quad \mathbf{E} = \frac{\rho_L}{2\pi\epsilon_0 \rho} \mathbf{a}_\rho$$
                    </div>
                    
                    <p><strong>3. Planar Symmetry</strong></p>
                    
                    <p>For an infinite sheet of charge with surface charge density $\rho_s$:</p>
                    
                    <div class="equation">
                        $$\oint_S \mathbf{D} \cdot d\mathbf{S} = D_n \cdot 2A = \rho_s A$$
                    </div>
                    
                    <p>So:</p>
                    
                    <div class="equation">
                        $$D_n = \frac{\rho_s}{2} \quad \text{and} \quad \mathbf{E} = \frac{\rho_s}{2\epsilon_0} \mathbf{a}_n$$
                    </div>
                    
                    <p><strong>Parallel Plate Capacitor</strong></p>
                    
                    <p>For two parallel plates with surface charge densities $+\rho_s$ and $-\rho_s$:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{\rho_s}{\epsilon_0} \mathbf{a}_n \quad \text{between the plates}$$
                    </div>
                    
                    <p>and zero outside the plates.</p>
                    
                    <p><strong>Example Problem:</strong></p>
                    
                    <p>Given a uniform line charge of 20 nC/m along the z-axis, find the electric field at point $P(3,4,0)$.</p>
                    
                    <p><strong>Solution:</strong></p>
                    
                    <p>Distance from line charge to point $P$:</p>
                    
                    <div class="equation">
                        $$\rho = \sqrt{3^2 + 4^2} = 5 \, \text{m}$$
                    </div>
                    
                    <p>Electric field magnitude:</p>
                    
                    <div class="equation">
                        $$E = \frac{\rho_L}{2\pi\epsilon_0 \rho} = \frac{20 \times 10^{-9}}{2\pi \times 8.854 \times 10^{-12} \times 5} = 71.96 \, \text{V/m}$$
                    </div>
                    
                    <p>Direction is radial from the z-axis to point $P$, so:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{3}{5}\mathbf{a}_x + \frac{4}{5}\mathbf{a}_y \times 71.96 = 43.18\mathbf{a}_x + 57.57\mathbf{a}_y \, \text{V/m}$$
                    </div>
                </div>
            </div>
            
            <div id="section5" class="section">
                <h2 class="section-title" onclick="document.getElementById('section5-content').style.display = 'block'">2.5 Physical significance of divergence, divergence theorem</h2>
                <div id="section5-content" class="section-content" style="display:block">
                    <p><strong>Physical Significance of Divergence</strong></p>
                    
                    <p>The divergence of a vector field at a point is a measure of the magnitude of a source or sink at that point. For electric fields, the divergence of the electric flux density $\mathbf{D}$ is equal to the volume charge density $\rho_v$:</p>
                    
                    <div class="equation">
                        $$\nabla \cdot \mathbf{D} = \rho_v$$
                    </div>
                    
                    <p>This means that:</p>
                    <ul>
                        <li>Positive divergence indicates a source of electric flux (positive charge)</li>
                        <li>Negative divergence indicates a sink of electric flux (negative charge)</li>
                        <li>Zero divergence indicates no net source or sink of electric flux (no charge)</li>
                    </ul>
                    
                    <p><strong>Divergence Theorem</strong></p>
                    
                    <p>The divergence theorem relates the volume integral of the divergence of a vector field to the surface integral of the vector field over the closed surface bounding the volume:</p>
                    
                    <div class="equation">
                        $$\int_V (\nabla \cdot \mathbf{F}) \, dV = \oint_S \mathbf{F} \cdot d\mathbf{S}$$
                    </div>
                    
                    <p>For electric fields, this becomes:</p>
                    
                    <div class="equation">
                        $$\int_V (\nabla \cdot \mathbf{D}) \, dV = \oint_S \mathbf{D} \cdot d\mathbf{S}$$
                    </div>
                    
                    <p>which is equivalent to Gauss's law since $\nabla\cdot\mathbf{D} = \rho_v$ and $\int_V \rho_v \, dV = Q_{enc}$.</p>
                    
                    <p><strong>Physical Interpretation</strong></p>
                    
                    <p>The divergence theorem states that the total outward flux of a vector field through a closed surface is equal to the volume integral of the divergence of that field throughout the enclosed volume.</p>
                    
                    <p>In the context of electric fields, it means that the total electric flux leaving a closed surface is equal to the total charge enclosed within that surface.</p>
                    
                    <p><strong>Example: Calculating Divergence in Cartesian Coordinates</strong></p>
                    
                    <p>For a vector field $\mathbf{F} = x^2\mathbf{a}_x + y^2\mathbf{a}_y + z^2\mathbf{a}_z$:</p>
                    
                    <div class="equation">
                        $$\nabla \cdot \mathbf{F} = \frac{\partial F_x}{\partial x} + \frac{\partial F_y}{\partial y} + \frac{\partial F_z}{\partial z} = 2x + 2y + 2z$$
                    </div>
                    
                    <p><strong>Example: Using Divergence Theorem</strong></p>
                    
                    <p>Let $\mathbf{D} = 2xy \mathbf{a}_x + x^2 \mathbf{a}_y$ C/m². Find the total flux through a cube with sides of length 1 m centered at the origin.</p>
                    
                    <p><strong>Solution:</strong></p>
                    
                    <p>Using divergence theorem:</p>
                    
                    <div class="equation">
                        $$\oint_S \mathbf{D} \cdot d\mathbf{S} = \int_V (\nabla \cdot \mathbf{D}) \, dV$$
                    </div>
                    
                    <p>First, find divergence:</p>
                    
                    <div class="equation">
                        $$\nabla \cdot \mathbf{D} = \frac{\partial}{\partial x}(2xy) + \frac{\partial}{\partial y}(x^2) = 2y + 0 = 2y$$
                    </div>
                    
                    <p>Then integrate over the cube volume:</p>
                    
                    <div class="equation">
                        $$\int_{-0.5}^{0.5} \int_{-0.5}^{0.5} \int_{-0.5}^{0.5} 2y \, dx\,dy\,dz = 2 \int_{-0.5}^{0.5} y \, dy \int_{-0.5}^{0.5} dx \int_{-0.5}^{0.5} dz = 2 \cdot 0 \cdot 1 \cdot 1 = 0$$
                    </div>
                    
                    <p>This makes sense because the positive and negative contributions from the y-component cancel out.</p>
                </div>
            </div>
            
            <div id="section6" class="section">
                <h2 class="section-title" onclick="document.getElementById('section6-content').style.display = 'block'">2.6 Electric potential, potential gradient</h2>
                <div id="section6-content" class="section-content" style="display:block">
                    <p><strong>Electric Potential</strong></p>
                    
                    <p>The electric potential at a point is defined as the work done per unit charge in bringing a positive test charge from infinity to that point without acceleration.</p>
                    
                    <p>For a point charge $Q$:</p>
                    
                    <div class="equation">
                        $$V = \frac{Q}{4\pi\epsilon_0 r}$$
                    </div>
                    
                    <p>For multiple point charges:</p>
                    
                    <div class="equation">
                        $$V = \sum_{m=1}^{n} \frac{Q_m}{4\pi\epsilon_0 |\mathbf{r} - \mathbf{r}_m|}$$
                    </div>
                    
                    <p>For continuous charge distributions:</p>
                    
                    <div class="equation">
                        $$V = \frac{1}{4\pi\epsilon_0} \int \frac{\rho_v \, dV}{|\mathbf{r} - \mathbf{r}'|}$$
                    </div>
                    
                    <p>For line charges:</p>
                    
                    <div class="equation">
                        $$V = \frac{1}{4\pi\epsilon_0} \int \frac{\rho_L \, dL}{|\mathbf{r} - \mathbf{r}'|}$$
                    </div>
                    
                    <p>For surface charges:</p>
                    
                    <div class="equation">
                        $$V = \frac{1}{4\pi\epsilon_0} \int \frac{\rho_s \, dS}{|\mathbf{r} - \mathbf{r}'|}$$
                    </div>
                    
                    <p><strong>Electric Potential Difference</strong></p>
                    
                    <p>The potential difference between two points $A$ and $B$ is:</p>
                    
                    <div class="equation">
                        $$V_{AB} = V_A - V_B = -\int_B^A \mathbf{E} \cdot d\mathbf{l}$$
                    </div>
                    
                    <p>where the integral is taken along any path from $B$ to $A$.</p>
                    
                    <p><strong>Potential Gradient</strong></p>
                    
                    <p>The electric field is related to the potential by the negative gradient:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = -\nabla V$$
                    </div>
                    
                    <p>In Cartesian coordinates:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = -\left( \frac{\partial V}{\partial x} \mathbf{a}_x + \frac{\partial V}{\partial y} \mathbf{a}_y + \frac{\partial V}{\partial z} \mathbf{a}_z \right)$$
                    </div>
                    
                    <p>In cylindrical coordinates:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = -\left( \frac{\partial V}{\partial \rho} \mathbf{a}_\rho + \frac{1}{\rho} \frac{\partial V}{\partial \phi} \mathbf{a}_\phi + \frac{\partial V}{\partial z} \mathbf{a}_z \right)$$
                    </div>
                    
                    <p>In spherical coordinates:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = -\left( \frac{\partial V}{\partial r} \mathbf{a}_r + \frac{1}{r} \frac{\partial V}{\partial \theta} \mathbf{a}_\theta + \frac{1}{r \sin\theta} \frac{\partial V}{\partial \phi} \mathbf{a}_\phi \right)$$
                    </div>
                    
                    <p><strong>Equipotential Surfaces</strong></p>
                    
                    <p>Equipotential surfaces are surfaces where the potential is constant. The electric field is always perpendicular to equipotential surfaces.</p>
                    
                    <p>For a point charge, equipotential surfaces are concentric spheres.</p>
                    
                    <p><strong>Example: Electric Potential due to a Dipole</strong></p>
                    
                    <p>For an electric dipole with charges $+Q$ and $-Q$ separated by distance $d$:</p>
                    
                    <div class="equation">
                        $$V = \frac{Qd \cos\theta}{4\pi\epsilon_0 r^2} = \frac{\mathbf{p} \cdot \mathbf{a}_r}{4\pi\epsilon_0 r^2}$$
                    </div>
                    
                    <p>where $\theta$ is the angle between the dipole axis and the line from the dipole center to the point of interest, and $r$ is the distance from the dipole center.</p>
                    
                    <p><strong>Example Problem:</strong></p>
                    
                    <p>Given a uniform line charge of 20 nC/m along the z-axis, find the potential difference between points $A(2,0,0)$ and $B(4,0,0)$.</p>
                    
                    <p><strong>Solution:</strong></p>
                    
                    <p>Electric field due to line charge:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{\rho_L}{2\pi\epsilon_0 \rho} \mathbf{a}_\rho$$
                    </div>
                    
                    <p>Potential difference:</p>
                    
                    <div class="equation">
                        $$V_{AB} = -\int_B^A \mathbf{E} \cdot d\mathbf{l} = -\int_4^2 \frac{\rho_L}{2\pi\epsilon_0 \rho} d\rho = \frac{\rho_L}{2\pi\epsilon_0} \ln\left(\frac{4}{2}\right) = \frac{20 \times 10^{-9}}{2\pi \times 8.854 \times 10^{-12}} \ln(2) = 249.2 \, \text{V}$$
                    </div>
                </div>
            </div>
            
            <div id="section7" class="section">
                <h2 class="section-title" onclick="document.getElementById('section7-content').style.display = 'block'">2.7 Energy density in electrostatic field</h2>
                <div id="section7-content" class="section-content" style="display:block">
                    <p><strong>Energy Density in Electrostatic Field</strong></p>
                    
                    <p>The energy stored in an electrostatic field is given by:</p>
                    
                    <div class="equation">
                        $$W_E = \frac{1}{2} \int_V \mathbf{D} \cdot \mathbf{E} \, dV = \frac{1}{2} \int_V \epsilon E^2 \, dV$$
                    </div>
                    
                    <p>where:</p>
                    <ul>
                        <li>$\epsilon$ is the permittivity of the medium</li>
                        <li>$E$ is the electric field intensity</li>
                        <li>$\mathbf{D}$ is the electric flux density</li>
                    </ul>
                    
                    <p>The energy density (energy per unit volume) is:</p>
                    
                    <div class="equation">
                        $$w_E = \frac{1}{2} \mathbf{D} \cdot \mathbf{E} = \frac{1}{2} \epsilon E^2$$
                    </div>
                    
                    <p><strong>Derivation of Energy Expression</strong></p>
                    
                    <p>Consider bringing charges from infinity to form a charge distribution. The work done in bringing each charge element $dQ$ to its position is:</p>
                    
                    <div class="equation">
                        $$dW = V \, dQ$$
                    </div>
                    
                    <p>where $V$ is the potential at that point due to all other charges.</p>
                    
                    <p>For a continuous charge distribution:</p>
                    
                    <div class="equation">
                        $$W = \frac{1}{2} \int_V \rho_v V \, dV$$
                    </div>
                    
                    <p>Using Gauss's law ($\nabla\cdot\mathbf{D} = \rho_v$) and vector identity:</p>
                    
                    <div class="equation">
                        $$\nabla \cdot (V\mathbf{D}) = V(\nabla \cdot \mathbf{D}) + \mathbf{D} \cdot (\nabla V)$$
                    </div>
                    
                    <p>and the fact that $\mathbf{E} = -\nabla V$, we get:</p>
                    
                    <div class="equation">
                        $$W = \frac{1}{2} \int_V \mathbf{D} \cdot \mathbf{E} \, dV$$
                    </div>
                    
                    <p><strong>Example: Energy Stored in a Parallel Plate Capacitor</strong></p>
                    
                    <p>For a parallel plate capacitor with plate area $S$, separation $d$, and potential difference $V$:</p>
                    
                    <div class="equation">
                        $$E = \frac{V}{d} \quad \text{and} \quad \mathbf{D} = \epsilon \mathbf{E} = \frac{\epsilon V}{d}$$
                    </div>
                    
                    <p>Energy stored:</p>
                    
                    <div class="equation">
                        $$W_E = \frac{1}{2} \int_V \epsilon E^2 \, dV = \frac{1}{2} \epsilon \left(\frac{V}{d}\right)^2 S d = \frac{1}{2} \epsilon \frac{S}{d} V^2 = \frac{1}{2} C V^2$$
                    </div>
                    
                    <p>where $C = \epsilon S/d$ is the capacitance of the parallel plate capacitor.</p>
                    
                    <p><strong>Example: Energy Stored in a Spherical Capacitor</strong></p>
                    
                    <p>For a spherical capacitor with inner radius $a$, outer radius $b$, and charge $Q$:</p>
                    
                    <div class="equation">
                        $$E = \frac{Q}{4\pi\epsilon_0 r^2} \quad \text{for} \quad a < r < b$$
                    </div>
                    
                    <p>Energy stored:</p>
                    
                    <div class="equation">
                        $$W_E = \frac{1}{2} \int_a^b \epsilon_0 \left(\frac{Q}{4\pi\epsilon_0 r^2}\right)^2 4\pi r^2 dr = \frac{Q^2}{8\pi\epsilon_0} \int_a^b \frac{dr}{r^2} = \frac{Q^2}{8\pi\epsilon_0} \left(\frac{1}{a} - \frac{1}{b}\right)$$
                    </div>
                </div>
            </div>
            
            <div id="section8" class="section">
                <h2 class="section-title" onclick="document.getElementById('section8-content').style.display = 'block'">2.8 Electric properties of material medium</h2>
                <div id="section8-content" class="section-content" style="display:block">
                    <p><strong>Electric Properties of Material Medium</strong></p>
                    
                    <p>When an electric field is applied to a material, the behavior depends on whether the material is a conductor or a dielectric.</p>
                    
                    <p><strong>Conductors</strong></p>
                    
                    <p>Properties of perfect conductors:</p>
                    <ul>
                        <li>No charge and no electric field may exist at any point within a conducting material</li>
                        <li>The conductor surface is an equipotential surface</li>
                        <li>The tangential component of an electric external field is zero</li>
                        <li>The normal component of electric flux density is equal to surface charge density on the conductor surface</li>
                    </ul>
                    
                    <p><strong>Dielectrics</strong></p>
                    
                    <p>Dielectric materials are insulators that can be polarized by an electric field. They store electric energy by means of a shift in the relative positions of the internal bound positive and negative charges against the normal molecular and atomic forces.</p>
                    
                    <p><strong>Polarization</strong></p>
                    
                    <p>Polarization is the phenomenon where the positive and negative charges in a dielectric shift positions slightly in response to an external electric field. The direction of polarization is from negative to positive charges.</p>
                    
                    <p>The dipole moment $\mathbf{p}$ is given by:</p>
                    
                    <div class="equation">
                        $$\mathbf{p} = Q \mathbf{d}$$
                    </div>
                    
                    <p>where $Q$ is the positive charge and $d$ is the vector from negative to positive charge.</p>
                    
                    <p>The polarization vector $\mathbf{P}$ is defined as the dipole moment per unit volume:</p>
                    
                    <div class="equation">
                        $$\mathbf{P} = \lim_{\Delta V \to 0} \frac{\sum \mathbf{p}_i}{\Delta V}$$
                    </div>
                    
                    <p>For isotropic dielectric materials, the linear relationship between $\mathbf{P}$ and $\mathbf{E}$ is:</p>
                    
                    <div class="equation">
                        $$\mathbf{P} = \chi_e \epsilon_0 \mathbf{E}$$
                    </div>
                    
                    <p>where $\chi_e$ (chi) is the electric susceptibility of the material (dimensionless).</p>
                    
                    <p><strong>Electric Displacement Field</strong></p>
                    
                    <p>The electric displacement field $\mathbf{D}$ is defined as:</p>
                    
                    <div class="equation">
                        $$\mathbf{D} = \epsilon_0 \mathbf{E} + \mathbf{P}$$
                    </div>
                    
                    <p>Substituting the expression for $\mathbf{P}$:</p>
                    
                    <div class="equation">
                        $$\mathbf{D} = \epsilon_0 \mathbf{E} + \chi_e \epsilon_0 \mathbf{E} = \epsilon_0 (1 + \chi_e) \mathbf{E} = \epsilon \mathbf{E}$$
                    </div>
                    
                    <p>where $\epsilon = \epsilon_r \epsilon_0$ is the permittivity of the material, and $\epsilon_r = 1 + \chi_e$ is the relative permittivity or dielectric constant.</p>
                    
                    <p><strong>Relative Permittivity</strong></p>
                    
                    <p>Relative permittivity ($\epsilon_r$) is a dimensionless quantity that measures how much the electric field is reduced inside the material compared to vacuum.</p>
                    
                    <p>For vacuum, $\epsilon_r = 1$</p>
                    <p>For air, $\epsilon_r \approx 1$</p>
                    <p>For glass, $\epsilon_r \approx 5-10$</p>
                    <p>For water, $\epsilon_r \approx 80$</p>
                    
                    <p><strong>Electric Dipole</strong></p>
                    
                    <p>An electric dipole consists of two equal and opposite charges separated by a small distance. The dipole moment $\mathbf{p} = Q\mathbf{d}$ points from the negative charge to the positive charge.</p>
                    
                    <p>For a dipole at the origin, the potential at a point $(r, \theta)$ is:</p>
                    
                    <div class="equation">
                        $$V = \frac{Qd \cos\theta}{4\pi\epsilon_0 r^2} = \frac{\mathbf{p} \cdot \mathbf{a}_r}{4\pi\epsilon_0 r^2}$$
                    </div>
                    
                    <p>and the electric field is:</p>
                    
                    <div class="equation">
                        $$\mathbf{E} = \frac{p}{4\pi\epsilon_0 r^3} (2\cos\theta \mathbf{a}_r + \sin\theta \mathbf{a}_\theta)$$
                    </div>
                </div>
            </div>
            
            <div id="section9" class="section">
                <h2 class="section-title" onclick="document.getElementById('section9-content').style.display = 'block'">2.9 Free and bound charges, polarization, relative permittivity, electric dipole, electric boundary conditions</h2>
                <div id="section9-content" class="section-content" style="display:block">
                    <p><strong>Free and Bound Charges</strong></p>
                    
                    <p><strong>Free charges</strong> are charges that can move freely within a material (e.g., electrons in a conductor).</p>
                    
                    <p><strong>Bound charges</strong> are charges that are bound to atoms or molecules and cannot move freely (e.g., charges in a dielectric material).</p>
                    
                    <p>In dielectric materials, bound charges are responsible for polarization when an electric field is applied.</p>
                    
                    <p><strong>Polarization</strong></p>
                    
                    <p>Polarization is the process by which a dielectric material becomes polarized in the presence of an electric field. The polarization vector $\mathbf{P}$ is defined as the dipole moment per unit volume.</p>
                    
                    <p><strong>Bound Surface Charge Density</strong></p>
                    
                    <p>When a dielectric is polarized, bound charges appear on the surface of the dielectric:</p>
                    
                    <div class="equation">
                        $$\rho_{s,b} = \mathbf{P} \cdot \mathbf{a}_n$$
                    </div>
                    
                    <p>where $\mathbf{a}_n$ is the unit normal vector pointing outward from the dielectric.</p>
                    
                    <p><strong>Bound Volume Charge Density</strong></p>
                    
                    <p>Bound charges can also appear in the volume of the dielectric:</p>
                    
                    <div class="equation">
                        $$\rho_{v,b} = -\nabla \cdot \mathbf{P}$$
                    </div>
                    
                    <p><strong>Relative Permittivity</strong></p>
                    
                    <p>Relative permittivity ($\epsilon_r$) is a measure of how much the electric field is reduced inside the material compared to vacuum. It is related to the susceptibility by:</p>
                    
                    <div class="equation">
                        $$\epsilon_r = 1 + \chi_e$$
                    </div>
                    
                    <p>It is also called the dielectric constant.</p>
                    
                    <p><strong>Electric Dipole</strong></p>
                    
                    <p>An electric dipole consists of two equal and opposite charges separated by a small distance. The dipole moment $\mathbf{p} = Q\mathbf{d}$ points from the negative charge to the positive charge.</p>
                    
                    <p><strong>Electric Boundary Conditions</strong></p>
                    
                    <p><strong>Boundary Conditions at Dielectric-Dielectric Interface</strong></p>
                    
                    <p>At the interface between two dielectrics with permittivities $\epsilon_1$ and $\epsilon_2$:</p>
                    
                    <p><strong>Tangential Components:</strong></p>
                    
                    <div class="equation">
                        $$E_{t1} = E_{t2}$$
                    </div>
                    
                    <p>or</p>
                    
                    <div class="equation">
                        $$\frac{D_{t1}}{\epsilon_1} = \frac{D_{t2}}{\epsilon_2}$$
                    </div>
                    
                    <p><strong>Normal Components:</strong></p>
                    
                    <div class="equation">
                        $$D_{n1} = D_{n2} \quad \text{(if no free surface charge)}$$
                    </div>
                    
                    <p>or</p>
                    
                    <div class="equation">
                        $$\epsilon_1 E_{n1} = \epsilon_2 E_{n2}$$
                    </div>
                    
                    <p><strong>Boundary Conditions at Conductor-Free Space Interface</strong></p>
                    
                    <p>At the interface between a conductor and free space:</p>
                    
                    <ul>
                        <li>Tangential component of $\mathbf{E}$: $E_t = 0$</li>
                        <li>Normal component of $\mathbf{D}$: $D_n = \rho_s$</li>
                        <li>Normal component of $\mathbf{E}$: $E_n = \rho_s/\epsilon_0$</li>
                    </ul>
                    
                    <p><strong>Refraction of Electric Field at Dielectric Interface</strong></p>
                    
                    <p>When an electric field crosses a dielectric interface, it refracts according to:</p>
                    
                    <div class="equation">
                        $$\tan\theta_1 = \frac{\epsilon_1}{\epsilon_2} \tan\theta_2$$
                    </div>
                    
                    <p>where $\theta_1$ and $\theta_2$ are the angles between the electric field and the normal to the interface in the two media.</p>
                    
                    <div class="image-container">
                        <img src="https://i.imgur.com/2qYjKcD.png" alt="Refraction of Electric Field" width="400">
                        <div class="image-caption">Figure: Refraction of $\mathbf{D}$ at a dielectric interface</div>
                    </div>
                    
                    <p><strong>Example Problem:</strong></p>
                    
                    <p>Consider two dielectric regions with $\epsilon_1 = 3.2\epsilon_0$ for $z < 0$ and $\epsilon_2 = 2\epsilon_0$ for $z > 0$. Given $\mathbf{D}_1 = -30\mathbf{a}_x + 50\mathbf{a}_y + 70\mathbf{a}_z$ nC/m², find:</p>
                    <ul>
                        <li>$\mathbf{D}_2$</li>
                        <li>Angle between $\mathbf{D}_1$ and normal</li>
                        <li>Angle between $\mathbf{D}_2$ and normal</li>
                    </ul>
                    
                    <p><strong>Solution:</strong></p>
                    
                    <p>Normal component of $\mathbf{D}_1$:</p>
                    
                    <div class="equation">
                        $$D_{n1} = \mathbf{D}_1 \cdot \mathbf{a}_z = 70 \, \text{nC/m}^2$$
                    </div>
                    
                    <p>Since $D_{n1} = D_{n2}$:</p>
                    
                    <div class="equation">
                        $$D_{n2} = 70 \, \text{nC/m}^2$$
                    </div>
                    
                    <p>Tangential component of $\mathbf{D}_1$:</p>
                    
                    <div class="equation">
                        $$D_{t1} = -30\mathbf{a}_x + 50\mathbf{a}_y \, \text{nC/m}^2$$
                    </div>
                    
                    <p>Since $\mathbf{D}_t = \epsilon\mathbf{E}_t$ and $\mathbf{E}_t$ is continuous:</p>
                    
                    <div class="equation">
                        $$\frac{D_{t1}}{\epsilon_1} = \frac{D_{t2}}{\epsilon_2} \quad \Rightarrow \quad D_{t2} = D_{t1} \frac{\epsilon_2}{\epsilon_1} = (-30\mathbf{a}_x + 50\mathbf{a}_y) \frac{2}{3.2} = (-18.75\mathbf{a}_x + 31.25\mathbf{a}_y) \, \text{nC/m}^2$$
                    </div>
                    
                    <p>So $\mathbf{D}_2 = -18.75\mathbf{a}_x + 31.25\mathbf{a}_y + 70\mathbf{a}_z$ nC/m²</p>
                    
                    <p>Angle between $\mathbf{D}_1$ and normal:</p>
                    
                    <div class="equation">
                        $$\theta_1 = \cos^{-1}\left(\frac{D_{n1}}{|\mathbf{D}_1|}\right) = \cos^{-1}\left(\frac{70}{\sqrt{(-30)^2 + 50^2 + 70^2}}\right) = \cos^{-1}\left(\frac{70}{91.1}\right) = 39.79^\circ$$
                    </div>
                    
                    <p>Angle between $\mathbf{D}_2$ and normal:</p>
                    
                    <div class="equation">
                        $$\theta_2 = \cos^{-1}\left(\frac{D_{n2}}{|\mathbf{D}_2|}\right) = \cos^{-1}\left(\frac{70}{\sqrt{(-18.75)^2 + 31.25^2 + 70^2}}\right) = \cos^{-1}\left(\frac{70}{78.9}\right) = 27.47^\circ$$
                    </div>
                </div>
            </div>
            
            <div id="section10" class="section">
                <h2 class="section-title" onclick="document.getElementById('section10-content').style.display = 'block'">2.10 Current, current density, conservation of charge, relaxation time continuity equation</h2>
                <div id="section10-content" class="section-content" style="display:block">
                    <p><strong>Current and Current Density</strong></p>
                    
                    <p><strong>Electric Current</strong> is the rate of movement of charge passing a given reference point. The unit of current is the ampere (A), defined as one coulomb per second.</p>
                    
                    <div class="equation">
                        $$I = \frac{dQ}{dt}$$
                    </div>
                    
                    <p><strong>Current Density</strong> is defined as the current passing through a unit surface area. It is a vector quantity with direction of current flow and unit A/m².</p>
                    
                    <div class="equation">
                        $$\mathbf{J} = \rho_v \mathbf{v}$$
                    </div>
                    
                    <p>where $\rho_v$ is the volume charge density and $\mathbf{v}$ is the velocity of charges.</p>
                    
                    <p>The total current is:</p>
                    
                    <div class="equation">
                        $$I = \int_S \mathbf{J} \cdot d\mathbf{S}$$
                    </div>
                    
                    <p><strong>Principle of Conservation of Charge</strong></p>
                    
                    <p>The principle of conservation of charge states that charges can be neither created nor destroyed, although equal amounts of positive and negative charge may be simultaneously created or lost.</p>
                    
                    <p><strong>Continuity Equation</strong></p>
                    
                    <p>The continuity equation is based on the principle of conservation of charge. For a closed surface:</p>
                    
                    <div class="equation">
                        $$\oint_S \mathbf{J} \cdot d\mathbf{S} = -\frac{dQ}{dt}$$
                    </div>
                    
                    <p>In differential form:</p>
                    
                    <div class="equation">
                        $$\nabla \cdot \mathbf{J} = -\frac{\partial \rho_v}{\partial t}$$
                    </div>
                    
                    <p><strong>Relaxation Time Constant</strong></p>
                    
                    <p>For a conductor, any charge placed inside the conductor moves toward the surface and eventually appears on the surface. The time constant that shows how fast the charges decay at a point within the conductor is called the relaxation time constant (RTC).</p>
                    
                    <p>For a conductor with conductivity $\sigma$ and permittivity $\epsilon$:</p>
                    
                    <div class="equation">
                        $$\tau = \frac{\epsilon}{\sigma}$$
                    </div>
                    
                    <p>When $t = \tau$, the charge density decays to 37% of its initial value.</p>
                    
                    <p><strong>Point Form of Ohm's Law</strong></p>
                    
                    <p>Ohm's law in point form relates current density to electric field:</p>
                    
                    <div class="equation">
                        $$\mathbf{J} = \sigma \mathbf{E}$$
                    </div>
                    
                    <p>where $\sigma$ is the conductivity of the material.</p>
                    
                    <p><strong>Example: Relaxation Time Constant</strong></p>
                    
                    <p>For copper ($\sigma = 5.8 \times 10^7$ S/m, $\epsilon = \epsilon_0 = 8.854 \times 10^{-12}$ F/m):</p>
                    
                    <div class="equation">
                        $$\tau = \frac{\epsilon_0}{\sigma} = \frac{8.854 \times 10^{-12}}{5.8 \times 10^7} = 1.53 \times 10^{-19} \, \text{s}$$
                    </div>
                    
                    <p>This extremely short time constant shows that charges in a conductor quickly redistribute to the surface.</p>
                    
                    <p><strong>Example: Current Density</strong></p>
                    
                    <p>Consider a wire of cross-sectional area $A = 1$ mm² carrying a current $I = 10$ A. The current density is:</p>
                    
                    <div class="equation">
                        $$J = \frac{I}{A} = \frac{10}{1 \times 10^{-6}} = 10^7 \, \text{A/m}^2$$
                    </div>
                    
                    <p>If the wire is made of copper with conductivity $\sigma = 5.8 \times 10^7$ S/m, the electric field is:</p>
                    
                    <div class="equation">
                        $$E = \frac{J}{\sigma} = \frac{10^7}{5.8 \times 10^7} = 0.172 \, \text{V/m}$$
                    </div>
                </div>
            </div>
            
            <div id="section11" class="section">
                <h2 class="section-title" onclick="document.getElementById('section11-content').style.display = 'block'">2.11 Boundary value problems, Laplace and Poisson equations and their solutions, uniqueness theorem</h2>
                <div id="section11-content" class="section-content" style="display:block">
                    <p><strong>Poisson's and Laplace's Equations</strong></p>
                    
                    <p><strong>Poisson's Equation</strong></p>
                    
                    <p>From the point form of Gauss's law ($\nabla\cdot\mathbf{D} = \rho_v$) and $\mathbf{D} = \epsilon\mathbf{E}$, and $\mathbf{E} = -\nabla V$:</p>
                    
                    <div class="equation">
                        $$\nabla \cdot (\epsilon \mathbf{E}) = \rho_v$$
                    </div>
                    
                    <div class="equation">
                        $$\nabla \cdot (-\epsilon \nabla V) = \rho_v$$
                    </div>
                    
                    <div class="equation">
                        $$-\epsilon \nabla^2 V = \rho_v$$
                    </div>
                    
                    <div class="equation">
                        $$\nabla^2 V = -\frac{\rho_v}{\epsilon}$$
                    </div>
                    
                    <p>This is Poisson's equation, which is true for a homogeneous region in which $\epsilon$ is constant.</p>
                    
                    <p><strong>Laplace's Equation</strong></p>
                    
                    <p>If there is no volume charge density ($\rho_v = 0$), Poisson's equation reduces to Laplace's equation:</p>
                    
                    <div class="equation">
                        $$\nabla^2 V = 0$$
                    </div>
                    
                    <p><strong>Laplace's Equation in Different Coordinate Systems</strong></p>
                    
                    <p><strong>Cartesian Coordinates:</strong></p>
                    
                    <div class="equation">
                        $$\frac{\partial^2 V}{\partial x^2} + \frac{\partial^2 V}{\partial y^2} + \frac{\partial^2 V}{\partial z^2} = 0$$
                    </div>
                    
                    <p><strong>Cylindrical Coordinates:</strong></p>
                    
                    <div class="equation">
                        $$\frac{1}{\rho} \frac{\partial}{\partial \rho} \left(\rho \frac{\partial V}{\partial \rho}\right) + \frac{1}{\rho^2} \frac{\partial^2 V}{\partial \phi^2} + \frac{\partial^2 V}{\partial z^2} = 0$$
                    </div>
                    
                    <p><strong>Spherical Coordinates:</strong></p>
                    
                    <div class="equation">
                        $$\frac{1}{r^2} \frac{\partial}{\partial r} \left(r^2 \frac{\partial V}{\partial r}\right) + \frac{1}{r^2 \sin\theta} \frac{\partial}{\partial \theta} \left(\sin\theta \frac{\partial V}{\partial \theta}\right) + \frac{1}{r^2 \sin^2\theta} \frac{\partial^2 V}{\partial \phi^2} = 0$$
                    </div>
                    
                    <p><strong>Uniqueness Theorem</strong></p>
                    
                    <p>The uniqueness theorem states that the solution to Laplace's or Poisson's equation is unique if the potential is specified on all boundaries of the region.</p>
                    
                    <p><strong>Proof for Laplace's Equation</strong></p>
                    
                    <p>Assume two solutions $V_1$ and $V_2$ exist for Laplace's equation with the same boundary conditions.</p>
                    
                    <p>Let $V = V_1 - V_2$. Then $\nabla^2 V = 0$ and $V = 0$ on all boundaries.</p>
                    
                    <p>Using vector identity:</p>
                    
                    <div class="equation">
                        $$\nabla \cdot (V \nabla V) = V \nabla^2 V + (\nabla V) \cdot (\nabla V)$$
                    </div>
                    
                    <p>Integrating over volume:</p>
                    
                    <div class="equation">
                        $$\int_V \nabla \cdot (V \nabla V) \, dV = \int_V V \nabla^2 V \, dV + \int_V (\nabla V) \cdot (\nabla V) \, dV$$
                    </div>
                    
                    <p>Using divergence theorem on left side and $\nabla^2 V = 0$:</p>
                    
                    <div class="equation">
                        $$\oint_S V \nabla V \cdot d\mathbf{S} = \int_V |\nabla V|^2 \, dV$$
                    </div>
                    
                    <p>Since $V = 0$ on all boundaries, left side is zero:</p>
                    
                    <div class="equation">
                        $$\int_V |\nabla V|^2 \, dV = 0$$
                    </div>
                    
                    <p>This implies $\nabla V = 0$ everywhere, so $V = \text{constant}$. But since $V = 0$ on boundaries, the constant must be zero, so $V_1 = V_2$.</p>
                    
                    <p><strong>Boundary Value Problems</strong></p>
                    
                    <p><strong>One-Dimensional Boundary Value Problems</strong></p>
                    
                    <p><strong>Parallel Plate Capacitor</strong></p>
                    
                    <p>Consider a parallel plate capacitor with potential $V_0$ on one plate and zero on the other. Laplace's equation in one dimension:</p>
                    
                    <div class="equation">
                        $$\frac{d^2 V}{dx^2} = 0$$
                    </div>
                    
                    <p>Integrating twice:</p>
                    
                    <div class="equation">
                        $$V = Ax + B$$
                    </div>
                    
                    <p>Applying boundary conditions $V(0) = 0$ and $V(d) = V_0$:</p>
                    
                    <div class="equation">
                        $$V = \frac{V_0}{d} x$$
                    </div>
                    
                    <p><strong>Coaxial Capacitor</strong></p>
                    
                    <p>For a coaxial capacitor with inner radius $a$, outer radius $b$, and potential $V_0$ between them:</p>
                    
                    <div class="equation">
                        $$\frac{1}{\rho} \frac{d}{d\rho} \left(\rho \frac{dV}{d\rho}\right) = 0$$
                    </div>
                    
                    <p>Solving:</p>
                    
                    <div class="equation">
                        $$V = A \ln \rho + B$$
                    </div>
                    
                    <p>Applying boundary conditions $V(a) = V_0$ and $V(b) = 0$:</p>
                    
                    <div class="equation">
                        $$V = V_0 \frac{\ln(b/\rho)}{\ln(b/a)}$$
                    </div>
                    
                    <p><strong>Spherical Capacitor</strong></p>
                    
                    <p>For a spherical capacitor with inner radius $a$, outer radius $b$, and potential $V_0$ between them:</p>
                    
                    <div class="equation">
                        $$\frac{1}{r^2} \frac{d}{dr} \left(r^2 \frac{dV}{dr}\right) = 0$$
                    </div>
                    
                    <p>Solving:</p>
                    
                    <div class="equation">
                        $$V = \frac{A}{r} + B$$
                    </div>
                    
                    <p>Applying boundary conditions $V(a) = V_0$ and $V(b) = 0$:</p>
                    
                    <div class="equation">
                        $$V = V_0 \frac{(1/r - 1/b)}{(1/a - 1/b)}$$
                    </div>
                    
                    <p><strong>Capacitance Calculation</strong></p>
                    
                    <p>For a parallel plate capacitor:</p>
                    
                    <div class="equation">
                        $$C = \frac{\epsilon S}{d}$$
                    </div>
                    
                    <p>For a coaxial capacitor:</p>
                    
                    <div class="equation">
                        $$C = \frac{2\pi \epsilon L}{\ln(b/a)}$$
                    </div>
                    
                    <p>For a spherical capacitor:</p>
                    
                    <div class="equation">
                        $$C = \frac{4\pi \epsilon}{(1/a - 1/b)}$$
                    </div>
                    
                    <p><strong>Example Problem: Parallel Plate Capacitor</strong></p>
                    
                    <p>Find the capacitance of a parallel plate capacitor with plate area 0.1 m², separation 1 mm, and dielectric with $\epsilon_r = 5$.</p>
                    
                    <p><strong>Solution:</strong></p>
                    
                    <div class="equation">
                        $$C = \frac{\epsilon S}{d} = \frac{5 \times 8.854 \times 10^{-12} \times 0.1}{0.001} = 4.427 \times 10^{-9} \, \text{F} = 4.427 \, \text{nF}$$
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<!-- <==================chapter 3 ==================> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 3: Magnetic Field</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f5f5f5;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .chapter {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .chapter-title {
            font-size: 1.8em;
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-top: 0;
        }
        
        .section {
            margin-bottom: 25px;
        }
        
        .section-title {
            font-size: 1.4em;
            color: #2980b9;
            margin-top: 20px;
            margin-bottom: 10px;
            cursor: pointer;
        }
        
        .section-content {
            margin-left: 15px;
            padding-bottom: 15px;
            display: block;
        }
        
        .equation {
            background: #f9f9f9;
            border-left: 4px solid #3498db;
            padding: 10px 15px;
            margin: 10px 0;
            font-family: 'Courier New', Courier, monospace;
            overflow-x: auto;
            white-space: pre-wrap;
        }
        
        .example {
            background: #e8f4fc;
            border: 1px solid #bde0fe;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }
        
        .navigation {
            background: #2c3e50;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .nav-item {
            display: inline-block;
        }
        
        .nav-link {
            color: #ecf0f1;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            background: #3498db;
        }
        
        .nav-link.active {
            background: #3498db;
        }
        
        .image-container {
            text-align: center;
            margin: 15px 0;
        }
        
        .image-caption {
            font-size: 0.9em;
            color: #7f8c8d;
            margin-top: 5px;
        }
        
        .problem {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }
        
        .problem-title {
            font-weight: bold;
            color: #e74c3c;
        }
        
        @media (max-width: 768px) {
            body {
                font-size: 13px;
            }
            
            .container {
                padding: 10px;
            }
            
            .chapter-title {
                font-size: 1.5em;
            }
            
            .section-title {
                font-size: 1.2em;
            }
            
            .nav-list {
                flex-direction: column;
            }
        }
        
        @media (max-width: 480px) {
            body {
                font-size: 12px;
            }
            
            .equation {
                font-size: 0.9em;
            }
            
            .section-content {
                margin-left: 5px;
            }
        }
        
        .math-inline {
            font-family: 'Cambria Math', 'Segoe UI Symbol', serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul class="nav-list">
                <li class="nav-item"><a href="#section1" class="nav-link active">3.1 Biot-Savart's law</a></li>
                <li class="nav-item"><a href="#section2" class="nav-link">3.2 Magnetic field intensity</a></li>
                <li class="nav-item"><a href="#section3" class="nav-link">3.3 Ampere's circuital law</a></li>
                <li class="nav-item"><a href="#section4" class="nav-link">3.4 Magnetic flux density</a></li>
                <li class="nav-item"><a href="#section5" class="nav-link">3.5 Physical significance of curl</a></li>
                <li class="nav-item"><a href="#section6" class="nav-link">3.6 Scalar and magnetic vector potential</a></li>
                <li class="nav-item"><a href="#section7" class="nav-link">3.7 Magnetic properties of material medium</a></li>
                <li class="nav-item"><a href="#section8" class="nav-link">3.8 Magnetic force and torque</a></li>
                <li class="nav-item"><a href="#section9" class="nav-link">3.9 Magnetic boundary condition</a></li>
            </ul>
        </div>
        
        <div id="chapter_3" class="chapter">
            <h1 class="chapter-title">3. Magnetic Field (9 hours)</h1>
            
            <div id="section1" class="section">
                <h2 class="section-title" onclick="document.getElementById('section1-content').style.display = 'block'">3.1 Biot-Savart's law</h2>
                <div id="section1-content" class="section-content" style="display:block">
                    <p><strong>Biot-Savart's Law</strong></p>
                    
                    <p>Biot-Savart's law describes the magnetic field produced by a steady current. It is analogous to Coulomb's law for electric fields. The law states that the magnetic field intensity dH at a point P due to a current element Idl is:</p>
                    
                    <div class="equation">
                        $$d\mathbf{H} = \frac{I d\mathbf{l} \times \mathbf{a}_R}{4\pi R^2}$$
                    </div>
                    
                    <p>or equivalently:</p>
                    
                    <div class="equation">
                        $$d\mathbf{B} = \frac{\mu_0 I d\mathbf{l} \times \mathbf{a}_R}{4\pi R^2}$$
                    </div>
                    
                    <p>where:</p>
                    <ul>
                        <li>I is the current</li>
                        <li>dl is the differential length vector of the current element</li>
                        <li>R is the distance from the current element to point P</li>
                        <li>a<sub>R</sub> is the unit vector in the direction from the current element to point P</li>
                        <li>μ<sub>0</sub> is the permeability of free space (4π × 10<sup>-7</sup> H/m)</li>
                    </ul>
                    
                    <p>The total magnetic field at point P due to a current-carrying conductor is obtained by integrating over the entire conductor:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = \int \frac{I d\mathbf{l} \times \mathbf{a}_R}{4\pi R^2}$$
                    </div>
                    
                    <p><strong>Physical Significance</strong></p>
                    <ul>
                        <li>The magnetic field is proportional to the current and inversely proportional to the square of the distance</li>
                        <li>The direction of the field is perpendicular to both the current element and the line connecting the current element to the point of interest (right-hand rule)</li>
                        <li>The law is applicable only for steady currents (magnetostatics)</li>
                    </ul>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/400x200" alt="Biot-Savart Law" width="400">
                        <div class="image-caption">Figure: Current element Idl producing magnetic field at point P</div>
                    </div>
                    
                    <p><strong>Example: Magnetic Field due to an Infinitely Long Straight Wire</strong></p>
                    
                    <p>For an infinitely long straight wire carrying current I, the magnetic field at a distance ρ from the wire is:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = \frac{I}{2\pi\rho} \mathbf{a}_\phi$$
                    </div>
                    
                    <p>or in terms of magnetic flux density:</p>
                    
                    <div class="equation">
                        $$\mathbf{B} = \frac{\mu_0 I}{2\pi\rho} \mathbf{a}_\phi$$
                    </div>
                    
                    <p>This is derived by integrating Biot-Savart's law over the entire length of the wire.</p>
                </div>
            </div>
            
            <div id="section2" class="section">
                <h2 class="section-title" onclick="document.getElementById('section2-content').style.display = 'block'">3.2 Magnetic field intensity</h2>
                <div id="section2-content" class="section-content" style="display:block">
                    <p><strong>Magnetic Field Intensity (H)</strong></p>
                    
                    <p>Magnetic field intensity H is a vector quantity that describes the magnetic field in terms of its ability to produce magnetic flux in a medium. Its unit is A/m.</p>
                    
                    <p>The relationship between magnetic field intensity H and magnetic flux density B is:</p>
                    
                    <div class="equation">
                        $$\mathbf{B} = \mu \mathbf{H}$$
                    </div>
                    
                    <p>where μ is the permeability of the medium, given by μ = μ<sub>0</sub>μ<sub>r</sub>, with μ<sub>0</sub> being the permeability of free space and μ<sub>r</sub> being the relative permeability of the medium.</p>
                    
                    <p><strong>Properties of Magnetic Field Intensity</strong></p>
                    <ul>
                        <li>It is a vector quantity with both magnitude and direction</li>
                        <li>Its direction follows the right-hand rule (thumb in direction of current, fingers curl in direction of H)</li>
                        <li>It is independent of the medium</li>
                        <li>It is measured in amperes per meter (A/m)</li>
                    </ul>
                    
                    <p><strong>Magnetic Field due to Different Current Distributions</strong></p>
                    
                    <p><strong>1. Infinitely Long Straight Wire:</strong></p>
                    
                    <div class="equation">
                        $$\mathbf{H} = \frac{I}{2\pi\rho} \mathbf{a}_\phi$$
                    </div>
                    
                    <p><strong>2. Circular Loop of Current:</strong></p>
                    
                    <p>At the center of a circular loop of radius a carrying current I:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = \frac{I}{2a} \mathbf{a}_z$$
                    </div>
                    
                    <p>At a point along the axis of the loop at distance z from the center:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = \frac{I a^2}{2(a^2+z^2)^{3/2}} \mathbf{a}_z$$
                    </div>
                    
                    <p><strong>3. Solenoid:</strong></p>
                    
                    <p>Inside a long solenoid with n turns per unit length carrying current I:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = nI \mathbf{a}_z$$
                    </div>
                    
                    <p>Outside the solenoid, H ≈ 0.</p>
                    
                    <p><strong>4. Toroid:</strong></p>
                    
                    <p>Inside a toroid with N turns carrying current I and radius r:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = \frac{NI}{2\pi r} \mathbf{a}_\phi$$
                    </div>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/400x200" alt="Magnetic Field of a Solenoid" width="400">
                        <div class="image-caption">Figure: Magnetic field lines of a solenoid</div>
                    </div>
                </div>
            </div>
            
            <div id="section3" class="section">
                <h2 class="section-title" onclick="document.getElementById('section3-content').style.display = 'block'">3.3 Ampere's circuital law and its application</h2>
                <div id="section3-content" class="section-content" style="display:block">
                    <p><strong>Ampere's Circuital Law</strong></p>
                    
                    <p>Ampere's circuital law states that the line integral of the magnetic field intensity H around any closed path is equal to the total current enclosed by that path:</p>
                    
                    <div class="equation">
                        $$\oint_C \mathbf{H} \cdot d\mathbf{l} = I_{enc}$$
                    </div>
                    
                    <p>where:</p>
                    <ul>
                        <li>H is the magnetic field intensity</li>
                        <li>dl is the differential length vector along the closed path</li>
                        <li>I<sub>enc</sub> is the total current enclosed by the path</li>
                    </ul>
                    
                    <p>In differential form, Ampere's law is:</p>
                    
                    <div class="equation">
                        $$\nabla \times \mathbf{H} = \mathbf{J}$$
                    </div>
                    
                    <p>where J is the current density.</p>
                    
                    <p><strong>Applications of Ampere's Law</strong></p>
                    
                    <p>Ampere's law is particularly useful for calculating magnetic fields for symmetric current distributions:</p>
                    
                    <p><strong>1. Infinitely Long Straight Wire</strong></p>
                    
                    <p>For an infinitely long straight wire carrying current I, we choose a circular path of radius ρ centered on the wire:</p>
                    
                    <div class="equation">
                        $$\oint \mathbf{H} \cdot d\mathbf{l} = H_\phi \cdot 2\pi\rho = I$$
                    </div>
                    
                    <p>Solving for H:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = \frac{I}{2\pi\rho} \mathbf{a}_\phi$$
                    </div>
                    
                    <p><strong>2. Infinite Current Sheet</strong></p>
                    
                    <p>For an infinite current sheet with surface current density K (A/m) in the y-direction:</p>
                    
                    <div class="equation">
                        $$\oint \mathbf{H} \cdot d\mathbf{l} = 2H_x L = K L$$
                    </div>
                    
                    <p>Solving for H:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = \frac{K}{2} \mathbf{a}_x \quad \text{(above the sheet)} \\
                        \mathbf{H} = -\frac{K}{2} \mathbf{a}_x \quad \text{(below the sheet)}$$
                    </div>
                    
                    <p><strong>3. Solenoid</strong></p>
                    
                    <p>For a solenoid with n turns per unit length carrying current I:</p>
                    
                    <div class="equation">
                        $$\oint \mathbf{H} \cdot d\mathbf{l} = H L = n I L$$
                    </div>
                    
                    <p>Solving for H:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = n I \mathbf{a}_z$$
                    </div>
                    
                    <p><strong>4. Toroid</strong></p>
                    
                    <p>For a toroid with N turns carrying current I and radius r:</p>
                    
                    <div class="equation">
                        $$\oint \mathbf{H} \cdot d\mathbf{l} = H \cdot 2\pi r = N I$$
                    </div>
                    
                    <p>Solving for H:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = \frac{N I}{2\pi r} \mathbf{a}_\phi$$
                    </div>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/400x200" alt="Ampere's Law Application" width="400">
                        <div class="image-caption">Figure: Ampere's circuital law applied to a toroid</div>
                    </div>
                </div>
            </div>
            
            <div id="section4" class="section">
                <h2 class="section-title" onclick="document.getElementById('section4-content').style.display = 'block'">3.4 Magnetic flux density</h2>
                <div id="section4-content" class="section-content" style="display:block">
                    <p><strong>Magnetic Flux Density (B)</strong></p>
                    
                    <p>Magnetic flux density B, also called magnetic induction, is the measure of the strength and direction of a magnetic field. Its unit is tesla (T) or weber per square meter (Wb/m²).</p>
                    
                    <p>The relationship between magnetic flux density B and magnetic field intensity H is:</p>
                    
                    <div class="equation">
                        $$\mathbf{B} = \mu \mathbf{H}$$
                    </div>
                    
                    <p>where μ is the permeability of the medium (μ = μ<sub>0</sub>μ<sub>r</sub>), μ<sub>0</sub> = 4π × 10<sup>-7</sup> H/m is the permeability of free space, and μ<sub>r</sub> is the relative permeability of the medium.</p>
                    
                    <p><strong>Magnetic Flux</strong></p>
                    
                    <p>Magnetic flux Φ through a surface S is defined as:</p>
                    
                    <div class="equation">
                        $$\Phi = \int_S \mathbf{B} \cdot d\mathbf{S}$$
                    </div>
                    
                    <p>The unit of magnetic flux is weber (Wb).</p>
                    
                    <p><strong>Gauss's Law for Magnetism</strong></p>
                    
                    <p>Gauss's law for magnetism states that the net magnetic flux through any closed surface is zero:</p>
                    
                    <div class="equation">
                        $$\oint_S \mathbf{B} \cdot d\mathbf{S} = 0$$
                    </div>
                    
                    <p>In differential form:</p>
                    
                    <div class="equation">
                        $$\nabla \cdot \mathbf{B} = 0$$
                    </div>
                    
                    <p>This implies that magnetic monopoles do not exist - magnetic field lines always form closed loops.</p>
                    
                    <p><strong>Example: Magnetic Flux through a Surface</strong></p>
                    
                    <p>Calculate the magnetic flux through a rectangular surface of width w and length l placed perpendicular to a uniform magnetic field B.</p>
                    
                    <p><strong>Solution:</strong></p>
                    
                    <div class="equation">
                        $$\Phi = \int_S \mathbf{B} \cdot d\mathbf{S} = B \cdot w \cdot l$$
                    </div>
                    
                    <p>since B is perpendicular to the surface and uniform.</p>
                    
                    <p><strong>Example: Magnetic Flux due to a Long Straight Wire</strong></p>
                    
                    <p>Find the magnetic flux through a rectangular loop of width w and length l placed near an infinitely long straight wire carrying current I.</p>
                    
                    <p><strong>Solution:</strong></p>
                    
                    <p>The magnetic field due to the wire at distance ρ is:</p>
                    
                    <div class="equation">
                        $$B = \frac{\mu_0 I}{2\pi\rho}$$
                    </div>
                    
                    <p>The magnetic flux through the loop is:</p>
                    
                    <div class="equation">
                        $$\Phi = \int_{a}^{a+w} \frac{\mu_0 I l}{2\pi\rho} d\rho = \frac{\mu_0 I l}{2\pi} \ln\left(\frac{a+w}{a}\right)$$
                    </div>
                </div>
            </div>
            
            <div id="section5" class="section">
                <h2 class="section-title" onclick="document.getElementById('section5-content').style.display = 'block'">3.5 Physical significance of curl, Stoke's theorem</h2>
                <div id="section5-content" class="section-content" style="display:block">
                    <p><strong>Physical Significance of Curl</strong></p>
                    
                    <p>The curl of a vector field is a measure of the rotation or circulation of the field at a point. For magnetic fields, the curl of H is related to the current density:</p>
                    
                    <div class="equation">
                        $$\nabla \times \mathbf{H} = \mathbf{J}$$
                    </div>
                    
                    <p>This means:</p>
                    <ul>
                        <li>A non-zero curl indicates the presence of current density at that point</li>
                        <li>The direction of the curl is given by the right-hand rule (fingers curl in direction of circulation, thumb points in direction of curl)</li>
                        <li>The magnitude of the curl is proportional to the strength of the circulation</li>
                    </ul>
                    
                    <p><strong>Stoke's Theorem</strong></p>
                    
                    <p>Stoke's theorem relates the surface integral of the curl of a vector field to the line integral of the vector field around the boundary of the surface:</p>
                    
                    <div class="equation">
                        $$\oint_C \mathbf{F} \cdot d\mathbf{l} = \int_S (\nabla \times \mathbf{F}) \cdot d\mathbf{S}$$
                    </div>
                    
                    <p>For magnetic fields, this becomes:</p>
                    
                    <div class="equation">
                        $$\oint_C \mathbf{H} \cdot d\mathbf{l} = \int_S (\nabla \times \mathbf{H}) \cdot d\mathbf{S} = \int_S \mathbf{J} \cdot d\mathbf{S} = I_{enc}$$
                    </div>
                    
                    <p>which is Ampere's circuital law.</p>
                    
                    <p><strong>Physical Interpretation</strong></p>
                    
                    <p>Stoke's theorem states that the circulation of a vector field around a closed path is equal to the total flux of the curl of that field through any surface bounded by the path.</p>
                    
                    <p>In the context of magnetic fields, it means that the line integral of H around a closed path is equal to the total current passing through any surface bounded by that path.</p>
                    
                    <p><strong>Example: Calculating Curl in Cartesian Coordinates</strong></p>
                    
                    <p>For a vector field F = x²a<sub>x</sub> + y²a<sub>y</sub> + z²a<sub>z</sub>:</p>
                    
                    <div class="equation">
                        $$\nabla \times \mathbf{F} = \begin{vmatrix}
                        \mathbf{a}_x & \mathbf{a}_y & \mathbf{a}_z \\
                        \frac{\partial}{\partial x} & \frac{\partial}{\partial y} & \frac{\partial}{\partial z} \\
                        x^2 & y^2 & z^2
                        \end{vmatrix} = 0$$
                    </div>
                    
                    <p>This makes sense because there is no circulation in this field.</p>
                    
                    <p><strong>Example: Curl of Magnetic Field due to a Straight Wire</strong></p>
                    
                    <p>For a straight wire along the z-axis carrying current I, the magnetic field is:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = \frac{I}{2\pi\rho} \mathbf{a}_\phi$$
                    </div>
                    
                    <p>The curl in cylindrical coordinates is:</p>
                    
                    <div class="equation">
                        $$\nabla \times \mathbf{H} = \frac{1}{\rho} \begin{vmatrix}
                        \mathbf{a}_\rho & \rho\mathbf{a}_\phi & \mathbf{a}_z \\
                        \frac{\partial}{\partial \rho} & \frac{\partial}{\partial \phi} & \frac{\partial}{\partial z} \\
                        0 & \frac{I}{2\pi} & 0
                        \end{vmatrix} = \frac{I}{2\pi\rho^2} \mathbf{a}_z$$
                    </div>
                    
                    <p>But since J = I/(πρ²) for uniform current density, we have ∇×H = J, which satisfies Ampere's law.</p>
                </div>
            </div>
            
            <div id="section6" class="section">
                <h2 class="section-title" onclick="document.getElementById('section6-content').style.display = 'block'">3.6 Scalar and magnetic vector potential</h2>
                <div id="section6-content" class="section-content" style="display:block">
                    <p><strong>Magnetic Vector Potential (A)</strong></p>
                    
                    <p>Since ∇·B = 0, we can define a magnetic vector potential A such that:</p>
                    
                    <div class="equation">
                        $$\mathbf{B} = \nabla \times \mathbf{A}$$
                    </div>
                    
                    <p>The magnetic vector potential A has the following properties:</p>
                    <ul>
                        <li>It is a vector quantity</li>
                        <li>It is not unique (can add gradient of any scalar function to A without changing B)</li>
                        <li>It is useful for calculating magnetic fields in complex geometries</li>
                        <li>It has units of weber per meter (Wb/m)</li>
                    </ul>
                    
                    <p>For magnetostatics, the vector potential A satisfies:</p>
                    
                    <div class="equation">
                        $$\nabla^2 \mathbf{A} = -\mu \mathbf{J}$$
                    </div>
                    
                    <p>where J is the current density.</p>
                    
                    <p><strong>Scalar Magnetic Potential (V<sub>m</sub>)</strong></p>
                    
                    <p>For regions where J = 0, we can define a scalar magnetic potential V<sub>m</sub> such that:</p>
                    
                    <div class="equation">
                        $$\mathbf{H} = -\nabla V_m$$
                    </div>
                    
                    <p>In regions with no current, the scalar magnetic potential satisfies Laplace's equation:</p>
                    
                    <div class="equation">
                        $$\nabla^2 V_m = 0$$
                    </div>
                    
                    <p>However, V<sub>m</sub> is not single-valued in regions with current, so it is only used in current-free regions.</p>
                    
                    <p><strong>Calculation of Vector Potential</strong></p>
                    
                    <p>For a current distribution, the vector potential can be calculated as:</p>
                    
                    <div class="equation">
                        $$\mathbf{A} = \frac{\mu}{4\pi} \int \frac{\mathbf{J} dV}{R}$$
                    </div>
                    
                    <p>where R is the distance from the current element to the point of interest.</p>
                    
                    <p><strong>Example: Vector Potential of a Straight Wire</strong></p>
                    
                    <p>For an infinitely long straight wire along the z-axis carrying current I:</p>
                    
                    <div class="equation">
                        $$\mathbf{A} = -\frac{\mu I}{2\pi} \ln\rho \mathbf{a}_z$$
                    </div>
                    
                    <p>From this, we can calculate B = ∇×A:</p>
                    
                    <div class="equation">
                        $$\mathbf{B} = \nabla \times \mathbf{A} = \frac{\mu I}{2\pi\rho} \mathbf{a}_\phi$$
                    </div>
                    
                    <p>which matches the known result for the magnetic field of a straight wire.</p>
                    
                    <div class="problem">
                        <div class="problem-title">Example Problem:</div>
                        <p>Calculate the vector potential and magnetic field due to a circular loop of radius a carrying current I at a point on the axis of the loop.</p>
                        
                        <p><strong>Solution:</strong></p>
                        <p>For a circular loop in the xy-plane:</p>
                        
                        <div class="equation">
                            $$\mathbf{A} = \frac{\mu I a}{4\pi} \int_0^{2\pi} \frac{a d\phi \mathbf{a}_\phi}{\sqrt{a^2+z^2}} = \frac{\mu I a^2}{2(a^2+z^2)^{3/2}} \mathbf{a}_z$$
                        </div>
                        
                        <p>Then B = ∇×A:</p>
                        
                        <div class="equation">
                            $$\mathbf{B} = \frac{\mu I a^2}{2(a^2+z^2)^{3/2}} \mathbf{a}_z$$
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="section7" class="section">
                <h2 class="section-title" onclick="document.getElementById('section7-content').style.display = 'block'">3.7 Magnetic properties of material medium</h2>
                <div id="section7-content" class="section-content" style="display:block">
                    <p><strong>Magnetic Properties of Material Medium</strong></p>
                    
                    <p>When a magnetic field is applied to a material, the behavior depends on the type of material. Materials are classified based on their magnetic properties:</p>
                    
                    <p><strong>Diamagnetic Materials</strong></p>
                    <ul>
                        <li>Have relative permeability μ<sub>r</sub> slightly less than 1 (typically 0.9999 to 0.99999)</li>
                        <li>Develop a magnetization opposite to the applied field</li>
                        <li>Examples: copper, silver, gold, bismuth, water</li>
                        <li>Weakly repelled by magnetic fields</li>
                    </ul>
                    
                    <p><strong>Paramagnetic Materials</strong></p>
                    <ul>
                        <li>Have relative permeability μ<sub>r</sub> slightly greater than 1 (typically 1.00001 to 1.001)</li>
                        <li>Develop a magnetization in the same direction as the applied field</li>
                        <li>Examples: aluminum, platinum, oxygen, sodium</li>
                        <li>Weakly attracted by magnetic fields</li>
                    </ul>
                    
                    <p><strong>Ferromagnetic Materials</strong></p>
                    <ul>
                        <li>Have relative permeability μ<sub>r</sub> much greater than 1 (typically 100 to 100,000)</li>
                        <li>Develop strong magnetization in the same direction as the applied field</li>
                        <li>Exhibit hysteresis (magnetization lags behind applied field)</li>
                        <li>Examples: iron, nickel, cobalt, and their alloys</li>
                        <li>Strongly attracted by magnetic fields</li>
                    </ul>
                    
                    <p><strong>Magnetization (M)</strong></p>
                    
                    <p>Magnetization M is defined as the magnetic moment per unit volume:</p>
                    
                    <div class="equation">
                        $$\mathbf{M} = \lim_{\Delta V \to 0} \frac{\sum \mathbf{m}_i}{\Delta V}$$
                    </div>
                    
                    <p>where m<sub>i</sub> is the magnetic moment of the i-th dipole.</p>
                    
                    <p>The relationship between B, H, and M is:</p>
                    
                    <div class="equation">
                        $$\mathbf{B} = \mu_0 (\mathbf{H} + \mathbf{M})$$
                    </div>
                    
                    <p>For linear isotropic materials:</p>
                    
                    <div class="equation">
                        $$\mathbf{M} = \chi_m \mathbf{H}$$
                    </div>
                    
                    <p>where χ<sub>m</sub> is the magnetic susceptibility (dimensionless).</p>
                    
                    <p>Then:</p>
                    
                    <div class="equation">
                        $$\mathbf{B} = \mu_0 (1 + \chi_m) \mathbf{H} = \mu_0 \mu_r \mathbf{H}$$
                    </div>
                    
                    <p>where μ<sub>r</sub> = 1 + χ<sub>m</sub> is the relative permeability.</p>
                    
                    <p><strong>Boundary Conditions for Magnetic Fields</strong></p>
                    
                    <p>At the interface between two media with permeabilities μ<sub>1</sub> and μ<sub>2</sub>:</p>
                    
                    <ul>
                        <li>Normal component of B is continuous: B<sub>n1</sub> = B<sub>n2</sub></li>
                        <li>Tangential component of H is continuous if no surface current: H<sub>t1</sub> = H<sub>t2</sub></li>
                    </ul>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/400x200" alt="Magnetic Properties of Materials" width="400">
                        <div class="image-caption">Figure: Magnetic field lines in different materials</div>
                    </div>
                </div>
            </div>
            
            <div id="section8" class="section">
                <h2 class="section-title" onclick="document.getElementById('section8-content').style.display = 'block'">3.8 Magnetic force, magnetic torque, magnetic moment, magnetization</h2>
                <div id="section8-content" class="section-content" style="display:block">
                    <p><strong>Magnetic Force</strong></p>
                    
                    <p>The magnetic force on a moving charge is given by the Lorentz force equation:</p>
                    
                    <div class="equation">
                        $$\mathbf{F} = q(\mathbf{v} \times \mathbf{B})$$
                    </div>
                    
                    <p>For a current-carrying conductor of length L carrying current I:</p>
                    
                    <div class="equation">
                        $$\mathbf{F} = I \int d\mathbf{l} \times \mathbf{B}$$
                    </div>
                    
                    <p>For a straight conductor of length L in a uniform magnetic field B:</p>
                    
                    <div class="equation">
                        $$\mathbf{F} = I \mathbf{L} \times \mathbf{B}$$
                    </div>
                    
                    <p><strong>Magnetic Torque</strong></p>
                    
                    <p>The torque on a current loop in a magnetic field is given by:</p>
                    
                    <div class="equation">
                        $$\mathbf{\tau} = \mathbf{m} \times \mathbf{B}$$
                    </div>
                    
                    <p>where m is the magnetic moment of the loop.</p>
                    
                    <p>For a planar loop of area A carrying current I:</p>
                    
                    <div class="equation">
                        $$\mathbf{m} = I \mathbf{A}$$
                    </div>
                    
                    <p>where A is the vector area of the loop (magnitude A, direction normal to the loop surface).</p>
                    
                    <p><strong>Magnetic Moment</strong></p>
                    
                    <p>The magnetic moment of a current loop is defined as:</p>
                    
                    <div class="equation">
                        $$\mathbf{m} = I \mathbf{A}$$
                    </div>
                    
                    <p>where I is the current and A is the vector area of the loop.</p>
                    
                    <p>For a solenoid with N turns and area A:</p>
                    
                    <div class="equation">
                        $$\mathbf{m} = N I \mathbf{A}$$
                    </div>
                    
                    <p><strong>Magnetization</strong></p>
                    
                    <p>Magnetization M is defined as the magnetic moment per unit volume:</p>
                    
                    <div class="equation">
                        $$\mathbf{M} = \lim_{\Delta V \to 0} \frac{\sum \mathbf{m}_i}{\Delta V}$$
                    </div>
                    
                    <p>For a material with uniform magnetization, the bound surface current density is:</p>
                    
                    <div class="equation">
                        $$\mathbf{K}_b = \mathbf{M} \times \mathbf{a}_n$$
                    </div>
                    
                    <p>and the bound volume current density is:</p>
                    
                    <div class="equation">
                        $$\mathbf{J}_b = \nabla \times \mathbf{M}$$
                    </div>
                    
                    <p><strong>Example: Force on a Current-Carrying Conductor</strong></p>
                    
                    <p>A straight conductor of length 0.5 m carrying current 10 A is placed in a uniform magnetic field of 0.2 T perpendicular to the conductor. Find the force on the conductor.</p>
                    
                    <p><strong>Solution:</strong></p>
                    
                    <div class="equation">
                        $$F = I L B = 10 \times 0.5 \times 0.2 = 1 \, \text{N}$$
                    </div>
                    
                    <p>The direction is given by the right-hand rule.</p>
                    
                    <p><strong>Example: Torque on a Current Loop</strong></p>
                    
                    <p>A circular loop of radius 0.1 m carrying current 5 A is placed in a uniform magnetic field of 0.3 T. Find the maximum torque on the loop.</p>
                    
                    <p><strong>Solution:</strong></p>
                    
                    <p>Magnetic moment:</p>
                    
                    <div class="equation">
                        $$m = I A = 5 \times \pi (0.1)^2 = 0.05\pi \, \text{A}\cdot\text{m}^2$$
                    </div>
                    
                    <p>Maximum torque (when θ = 90°):</p>
                    
                    <div class="equation">
                        $$\tau = m B = 0.05\pi \times 0.3 = 0.015\pi \approx 0.047 \, \text{N}\cdot\text{m}$$
                    </div>
                </div>
            </div>
            
            <div id="section9" class="section">
                <h2 class="section-title" onclick="document.getElementById('section9-content').style.display = 'block'">3.9 Magnetic boundary condition</h2>
                <div id="section9-content" class="section-content" style="display:block">
                    <p><strong>Magnetic Boundary Conditions</strong></p>
                    
                    <p>At the interface between two media with different magnetic properties, the magnetic field must satisfy certain boundary conditions derived from Maxwell's equations.</p>
                    
                    <p><strong>Normal Component of B</strong></p>
                    
                    <p>The normal component of magnetic flux density B is continuous across the boundary:</p>
                    
                    <div class="equation">
                        $$B_{n1} = B_{n2}$$
                    </div>
                    
                    <p>or equivalently:</p>
                    
                    <div class="equation">
                        $$\mu_1 H_{n1} = \mu_2 H_{n2}$$
                    </div>
                    
                    <p>This can be derived from Gauss's law for magnetism: ∇·B = 0.</p>
                    
                    <p><strong>Tangential Component of H</strong></p>
                    
                    <p>The tangential component of magnetic field intensity H is continuous across the boundary if there is no surface current:</p>
                    
                    <div class="equation">
                        $$H_{t1} = H_{t2}$$
                    </div>
                    
                    <p>or equivalently:</p>
                    
                    <div class="equation">
                        $$\frac{B_{t1}}{\mu_1} = \frac{B_{t2}}{\mu_2}$$
                    </div>
                    
                    <p>If there is a surface current K (A/m), then:</p>
                    
                    <div class="equation">
                        $$H_{t1} - H_{t2} = K$$
                    </div>
                    
                    <p>This can be derived from Ampere's circuital law: ∮H·dl = I<sub>enc</sub>.</p>
                    
                    <p><strong>Boundary Conditions Summary</strong></p>
                    
                    <p>For two media with permeabilities μ<sub>1</sub> and μ<sub>2</sub>:</p>
                    
                    <ul>
                        <li>Normal component of B: B<sub>n1</sub> = B<sub>n2</sub></li>
                        <li>Tangential component of H: H<sub>t1</sub> = H<sub>t2</sub> (if no surface current)</li>
                        <li>Normal component of H: H<sub>n1</sub> ≠ H<sub>n2</sub> (generally)</li>
                        <li>Tangential component of B: B<sub>t1</sub> ≠ B<sub>t2</sub> (generally)</li>
                    </ul>
                    
                    <p><strong>Refraction of Magnetic Field at Interface</strong></p>
                    
                    <p>When a magnetic field crosses a boundary between two media, it refracts according to:</p>
                    
                    <div class="equation">
                        $$\tan\theta_1 = \frac{\mu_1}{\mu_2} \tan\theta_2$$
                    </div>
                    
                    <p>where θ<sub>1</sub> and θ<sub>2</sub> are the angles between the magnetic field and the normal to the interface in the two media.</p>
                    
                    <div class="image-container">
                        <img src="https://via.placeholder.com/400x200" alt="Magnetic Boundary Conditions" width="400">
                        <div class="image-caption">Figure: Refraction of magnetic field at a dielectric interface</div>
                    </div>
                    
                    <p><strong>Example Problem</strong></p>
                    
                    <p>Consider two magnetic media with μ<sub>1</sub> = 5μ<sub>0</sub> for z < 0 and μ<sub>2</sub> = 2μ<sub>0</sub> for z > 0. Given B<sub>1</sub> = -30a<sub>x</sub> + 50a<sub>y</sub> + 70a<sub>z</sub> mT, find:</p>
                    <ul>
                        <li>B<sub>2</sub></li>
                        <li>Angle between B<sub>1</sub> and normal</li>
                        <li>Angle between B<sub>2</sub> and normal</li>
                    </ul>
                    
                    <p><strong>Solution:</strong></p>
                    
                    <p>Normal component of B<sub>1</sub>:</p>
                    
                    <div class="equation">
                        $$B_{n1} = \mathbf{B}_1 \cdot \mathbf{a}_z = 70 \, \text{mT}$$
                    </div>
                    
                    <p>Since B<sub>n1</sub> = B<sub>n2</sub>:</p>
                    
                    <div class="equation">
                        $$B_{n2} = 70 \, \text{mT}$$
                    </div>
                    
                    <p>Tangential component of B<sub>1</sub>:</p>
                    
                    <div class="equation">
                        $$B_{t1} = -30\mathbf{a}_x + 50\mathbf{a}_y \, \text{mT}$$
                    </div>
                    
                    <p>Since H<sub>t</sub> is continuous (no surface current):</p>
                    
                    <div class="equation">
                        $$\frac{B_{t1}}{\mu_1} = \frac{B_{t2}}{\mu_2} \quad \Rightarrow \quad B_{t2} = B_{t1} \frac{\mu_2}{\mu_1} = (-30\mathbf{a}_x + 50\mathbf{a}_y) \frac{2}{5} = (-12\mathbf{a}_x + 20\mathbf{a}_y) \, \text{mT}$$
                    </div>
                    
                    <p>So B<sub>2</sub> = -12a<sub>x</sub> + 20a<sub>y</sub> + 70a<sub>z</sub> mT</p>
                    
                    <p>Angle between B<sub>1</sub> and normal:</p>
                    
                    <div class="equation">
                        $$\theta_1 = \cos^{-1}\left(\frac{B_{n1}}{|\mathbf{B}_1|}\right) = \cos^{-1}\left(\frac{70}{\sqrt{(-30)^2 + 50^2 + 70^2}}\right) = \cos^{-1}\left(\frac{70}{91.1}\right) = 39.79^\circ$$
                    </div>
                    
                    <p>Angle between B<sub>2</sub> and normal:</p>
                    
                    <div class="equation">
                        $$\theta_2 = \cos^{-1}\left(\frac{B_{n2}}{|\mathbf{B}_2|}\right) = \cos^{-1}\left(\frac{70}{\sqrt{(-12)^2 + 20^2 + 70^2}}\right) = \cos^{-1}\left(\frac{70}{74.3}\right) = 20.21^\circ$$
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<!-- <==========================chapter 4 ==========================> -->
