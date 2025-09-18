<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vector Coordinate Transformations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
        }
        h1, h2, h3 {
            color: #2c3e50;
        }
        .problem {
            background: #fff;
            border-left: 5px solid #3498db;
            padding: 15px;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .solution {
            background: #ecf0f1;
            padding: 15px;
            margin: 10px 0 20px 0;
            border-radius: 5px;
        }
        code {
            background: #f1f1f1;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: Consolas, Monaco, 'Andale Mono', monospace;
        }
        .year {
            font-size: 0.9em;
            color: #7f8c8d;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Vector Coordinate Transformations — Solved Problems</h1>

    <!-- Problem 1 -->
    <div class="problem">
        <h2>Problem 1: Vector from P to Q in Spherical Coordinates</h2>
        <p class="year">2069 Chaitra</p>
        <p>Given point P(-3, 4, 5), express the vector that extends from P to Q(2, 0, -1) in:</p>
        <p>(a) Rectangular coordinates<br>
           (b) Cylindrical coordinates<br>
           (c) Spherical coordinates</p>

        <div class="solution">
            <h3>Solution:</h3>
            <p><strong>Step 1: Rectangular Coordinates</strong></p>
            <p>Vector <code>PQ = Q - P = (2 - (-3), 0 - 4, -1 - 5) = (5, -4, -6)</code></p>
            <p>So, <code><strong>PQ = 5a_x - 4a_y - 6a_z</strong></code></p>

            <p><strong>Step 2: Convert to Cylindrical Coordinates</strong></p>
            <p>We need the unit vector transformations at point P(-3,4,5):</p>
            <p><code>ρ = √(x² + y²) = √(9 + 16) = 5</code><br>
               <code>φ = tan⁻¹(y/x) = tan⁻¹(4/-3) = 126.87° (since x<0, y>0 → 2nd quadrant)</code></p>
            <p>Transformation matrix:</p>
            <p><code>a_ρ = cosφ a_x + sinφ a_y</code><br>
               <code>a_φ = -sinφ a_x + cosφ a_y</code><br>
               <code>a_z = a_z</code></p>
            <p><code>cosφ = x/ρ = -3/5 = -0.6</code><br>
               <code>sinφ = y/ρ = 4/5 = 0.8</code></p>
            <p>So:</p>
            <p><code>PQ_ρ = PQ · a_ρ = 5*(-0.6) + (-4)*(0.8) = -3 - 3.2 = -6.2</code><br>
               <code>PQ_φ = PQ · a_φ = 5*(-0.8) + (-4)*(-0.6) = -4 + 2.4 = -1.6</code><br>
               <code>PQ_z = -6</code></p>
            <p>Thus, <code><strong>PQ = -6.2 a_ρ - 1.6 a_φ - 6 a_z</strong></code></p>

            <p><strong>Step 3: Convert to Spherical Coordinates</strong></p>
            <p>At point P(-3,4,5):</p>
            <p><code>r = √(x² + y² + z²) = √(9 + 16 + 25) = √50 = 5√2 ≈ 7.071</code><br>
               <code>θ = cos⁻¹(z/r) = cos⁻¹(5/(5√2)) = cos⁻¹(1/√2) = 45°</code><br>
               <code>φ = 126.87° (same as cylindrical)</code></p>
            <p>Transformation:</p>
            <p><code>a_r = sinθ cosφ a_x + sinθ sinφ a_y + cosθ a_z</code><br>
               <code>a_θ = cosθ cosφ a_x + cosθ sinφ a_y - sinθ a_z</code><br>
               <code>a_φ = -sinφ a_x + cosφ a_y</code></p>
            <p>Plug in θ=45°, φ=126.87°:</p>
            <p><code>sinθ = cosθ = √2/2 ≈ 0.7071</code><br>
               <code>cosφ = -0.6, sinφ = 0.8</code></p>
            <p>Compute components:</p>
            <p><code>PQ_r = PQ · a_r = 5*(0.7071*-0.6) + (-4)*(0.7071*0.8) + (-6)*(0.7071)</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= 5*(-0.4243) + (-4)*(0.5657) + (-6)*(0.7071)</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= -2.1215 - 2.2628 - 4.2426 = -8.6269</code></p>
            <p><code>PQ_θ = PQ · a_θ = 5*(0.7071*-0.6) + (-4)*(0.7071*0.8) + (-6)*(-0.7071)</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= 5*(-0.4243) + (-4)*(0.5657) + 4.2426</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= -2.1215 - 2.2628 + 4.2426 = -0.1417</code></p>
            <p><code>PQ_φ = PQ · a_φ = 5*(-0.8) + (-4)*(-0.6) = -4 + 2.4 = -1.6</code></p>
            <p>Thus, <code><strong>PQ = -8.627 a_r - 0.142 a_θ - 1.6 a_φ</strong></code> (approx)</p>
        </div>
    </div>

    <!-- Problem 2 -->
    <div class="problem">
        <h2>Problem 2: Transform F = y a_x - x a_y + z a_z to Cylindrical Coordinates</h2>
        <p class="year">2067 Shrawan</p>

        <div class="solution">
            <h3>Solution:</h3>
            <p>We are given vector field: <code>F = y a_x - x a_y + z a_z</code></p>
            <p>In cylindrical coordinates, we use the transformation relations:</p>
            <p><code>a_x = cosφ a_ρ - sinφ a_φ</code><br>
               <code>a_y = sinφ a_ρ + cosφ a_φ</code><br>
               <code>a_z = a_z</code></p>
            <p>Also, <code>x = ρ cosφ</code>, <code>y = ρ sinφ</code></p>
            <p>Substitute:</p>
            <p><code>F = (ρ sinφ)(cosφ a_ρ - sinφ a_φ) - (ρ cosφ)(sinφ a_ρ + cosφ a_φ) + z a_z</code></p>
            <p>Expand:</p>
            <p><code>F = ρ sinφ cosφ a_ρ - ρ sin²φ a_φ - ρ cosφ sinφ a_ρ - ρ cos²φ a_φ + z a_z</code></p>
            <p>Combine like terms:</p>
            <p><code>F = [ρ sinφ cosφ - ρ sinφ cosφ] a_ρ + [-ρ sin²φ - ρ cos²φ] a_φ + z a_z</code><br>
               <code>F = 0·a_ρ - ρ (sin²φ + cos²φ) a_φ + z a_z</code><br>
               <code>F = -ρ a_φ + z a_z</code></p>
            <p>Thus, the vector field in cylindrical coordinates is:</p>
            <p><code><strong>F = -ρ a_φ + z a_z</strong></code></p>
            <p>This is valid at any point — no specific point evaluation needed since it's a field transformation.</p>
        </div>
    </div>

    <!-- Problem 3 -->
    <div class="problem">
        <h2>Problem 3: Transform F = ρ sinφ a_ρ to Spherical Coordinates</h2>
        <p class="year">2068 Chaitra</p>
        <p>At point (ρ=1, φ=45°, z=2)</p>

        <div class="solution">
            <h3>Solution:</h3>
            <p>Given vector in cylindrical: <code>F = ρ sinφ a_ρ</code> at (1, 45°, 2)</p>
            <p>First, evaluate magnitude: <code>ρ=1, φ=45° → sinφ = √2/2 → F = 1*(√2/2) a_ρ = (√2/2) a_ρ</code></p>
            <p>Now convert point to spherical to find θ:</p>
            <p><code>r = √(ρ² + z²) = √(1 + 4) = √5</code><br>
               <code>θ = tan⁻¹(ρ/z) = tan⁻¹(1/2) ≈ 26.565°</code><br>
               <code>φ = 45°</code></p>
            <p>Now, to convert vector <code>a_ρ</code> to spherical components:</p>
            <p><code>a_ρ = sinθ a_r + cosθ a_θ</code><br>
               <code>a_φ = a_φ</code><br>
               <code>a_z = cosθ a_r - sinθ a_θ</code></p>
            <p>So, <code>F = (√2/2) a_ρ = (√2/2)(sinθ a_r + cosθ a_θ)</code></p>
            <p>Compute sinθ and cosθ:</p>
            <p><code>sinθ = ρ/r = 1/√5, cosθ = z/r = 2/√5</code></p>
            <p>Thus:</p>
            <p><code>F = (√2/2)[ (1/√5) a_r + (2/√5) a_θ ]</code><br>
               <code>F = (√2/(2√5)) a_r + (2√2/(2√5)) a_θ</code><br>
               <code>F = (√10/10) a_r + (√10/5) a_θ</code></p>
            <p>Numerically: √10 ≈ 3.162 → <code>F ≈ 0.3162 a_r + 0.6325 a_θ</code></p>
            <p><code><strong>F = \frac{\sqrt{10}}{10} a_r + \frac{\sqrt{10}}{5} a_θ</strong></code></p>
        </div>
    </div>

    <!-- Problem 4 -->
    <div class="problem">
        <h2>Problem 4: Transform F = 4a_x - 2a_y + 4a_z to Cylindrical at P(2,3,5)</h2>
        <p class="year">2078 Kartik</p>

        <div class="solution">
            <h3>Solution:</h3>
            <p>Point P(2,3,5) → <code>ρ = √(4+9) = √13, φ = tan⁻¹(3/2) ≈ 56.31°</code></p>
            <p><code>cosφ = 2/√13, sinφ = 3/√13</code></p>
            <p>Transformation:</p>
            <p><code>F_ρ = F · a_ρ = 4*cosφ + (-2)*sinφ = 4*(2/√13) - 2*(3/√13) = (8 - 6)/√13 = 2/√13</code><br>
               <code>F_φ = F · a_φ = 4*(-sinφ) + (-2)*cosφ = 4*(-3/√13) - 2*(2/√13) = (-12 - 4)/√13 = -16/√13</code><br>
               <code>F_z = 4</code></p>
            <p>Thus, <code><strong>F = \frac{2}{\sqrt{13}} a_ρ - \frac{16}{\sqrt{13}} a_φ + 4 a_z</strong></code></p>
            <p>Or approximately: <code>F ≈ 0.555 a_ρ - 4.438 a_φ + 4 a_z</code></p>
        </div>
    </div>

    <!-- Problem 5 -->
    <div class="problem">
        <h2>Problem 5: Transform A = 4a_x - 2a_y - 4a_z to Spherical at P(-2,-3,4)</h2>
        <p class="year">2076 Chaitra</p>

        <div class="solution">
            <h3>Solution:</h3>
            <p>Point P(-2,-3,4):</p>
            <p><code>r = √(4+9+16) = √29</code><br>
               <code>θ = cos⁻¹(z/r) = cos⁻¹(4/√29) ≈ cos⁻¹(0.7428) ≈ 42.03°</code><br>
               <code>φ = tan⁻¹(y/x) = tan⁻¹(-3/-2) = tan⁻¹(1.5) → since Q3, φ = 180° + 56.31° = 236.31°</code></p>
            <p><code>sinθ = √(x²+y²)/r = √13/√29, cosθ = 4/√29</code><br>
               <code>cosφ = x/ρ = -2/√13, sinφ = y/ρ = -3/√13</code></p>
            <p>Now compute components:</p>
            <p><code>A_r = A · a_r = 4*sinθ cosφ + (-2)*sinθ sinφ + (-4)*cosθ</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= sinθ [4cosφ - 2sinφ] - 4cosθ</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= (√13/√29)[4*(-2/√13) - 2*(-3/√13)] - 4*(4/√29)</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= (1/√29)[-8 + 6] - 16/√29 = (-2 - 16)/√29 = -18/√29</code></p>
            <p><code>A_θ = A · a_θ = 4*cosθ cosφ + (-2)*cosθ sinφ - (-4)*sinθ</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= cosθ [4cosφ - 2sinφ] + 4sinθ</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= (4/√29)[4*(-2/√13) - 2*(-3/√13)] + 4*(√13/√29)</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= (4/√29)[-8/√13 + 6/√13] + 4√13/√29</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= (4/√29)(-2/√13) + 4√13/√29 = (-8 + 52)/(√29 √13) = 44/√377</code></p>
            <p><code>A_φ = A · a_φ = 4*(-sinφ) + (-2)*cosφ = 4*(3/√13) - 2*(-2/√13) = 12/√13 + 4/√13 = 16/√13</code></p>
            <p>Thus, <code><strong>A = -\frac{18}{\sqrt{29}} a_r + \frac{44}{\sqrt{377}} a_θ + \frac{16}{\sqrt{13}} a_φ</strong></code></p>
        </div>
    </div>

    <!-- Problem 6 -->
    <div class="problem">
        <h2>Problem 6: Transform F = 4a_x - 2a_y + 4a_z to Cylindrical at P(10,-8,6)</h2>
        <p class="year">2079 Bhadra</p>

        <div class="solution">
            <h3>Solution:</h3>
            <p>Point P(10,-8,6) → <code>ρ = √(100+64) = √164 = 2√41, φ = tan⁻¹(-8/10) = tan⁻¹(-0.8)</code></p>
            <p>Since x>0, y<0 → 4th quadrant: φ ≈ -38.66° or 321.34°</p>
            <p><code>cosφ = 10/√164 = 10/(2√41) = 5/√41</code><br>
               <code>sinφ = -8/√164 = -8/(2√41) = -4/√41</code></p>
            <p>Compute components:</p>
            <p><code>F_ρ = 4*cosφ + (-2)*sinφ = 4*(5/√41) - 2*(-4/√41) = 20/√41 + 8/√41 = 28/√41</code><br>
               <code>F_φ = 4*(-sinφ) + (-2)*cosφ = 4*(4/√41) - 2*(5/√41) = 16/√41 - 10/√41 = 6/√41</code><br>
               <code>F_z = 4</code></p>
            <p>Thus, <code><strong>F = \frac{28}{\sqrt{41}} a_ρ + \frac{6}{\sqrt{41}} a_φ + 4 a_z</strong></code></p>
        </div>
    </div>

    <!-- Problem 7 -->
    <div class="problem">
        <h2>Problem 7: Express P(-2,6,3) and E = y a_x + (xy+z) a_y in Spherical</h2>
        <p class="year">2078 Bhadra</p>

        <div class="solution">
            <h3>Solution:</h3>
            <p><strong>Point P(-2,6,3):</strong></p>
            <p><code>r = √(4+36+9) = √49 = 7</code><br>
               <code>θ = cos⁻¹(3/7) ≈ 64.62°</code><br>
               <code>φ = tan⁻¹(6/-2) = tan⁻¹(-3) → Q2: φ = 180° - 71.57° = 108.43°</code></p>
            <p>So, <code><strong>P: (r=7, θ≈64.62°, φ≈108.43°)</strong></code></p>

            <p><strong>Vector Field E at P:</strong></p>
            <p>First, evaluate E at P: <code>E = 6 a_x + ((-2)(6)+3) a_y = 6 a_x - 9 a_y</code></p>
            <p>Now transform to spherical at P:</p>
            <p><code>sinθ = √(4+36)/7 = √40/7 = 2√10/7, cosθ = 3/7</code><br>
               <code>cosφ = -2/√40 = -1/√10, sinφ = 6/√40 = 3/√10</code></p>
            <p>Compute components:</p>
            <p><code>E_r = 6*sinθ cosφ + (-9)*sinθ sinφ = sinθ [6cosφ - 9sinφ]</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= (2√10/7)[6*(-1/√10) - 9*(3/√10)] = (2√10/7)(-6-27)/√10 = (2/7)(-33) = -66/7</code></p>
            <p><code>E_θ = 6*cosθ cosφ + (-9)*cosθ sinφ = cosθ [6cosφ - 9sinφ]</code><br>
               <code>&nbsp;&nbsp;&nbsp;&nbsp;= (3/7)[6*(-1/√10) - 9*(3/√10)] = (3/7)(-33/√10) = -99/(7√10)</code></p>
            <p><code>E_φ = 6*(-sinφ) + (-9)*cosφ = 6*(-3/√10) - 9*(-1/√10) = (-18 + 9)/√10 = -9/√10</code></p>
            <p>Thus, <code><strong>E = -\frac{66}{7} a_r - \frac{99}{7\sqrt{10}} a_θ - \frac{9}{\sqrt{10}} a_φ</strong></code></p>
        </div>
    </div>

    <!-- Problem 8 -->
    <div class="problem">
        <h2>Problem 8: Express W = (x-y) a_z in Cylindrical and Spherical</h2>
        <p class="year">2066 Baishakh</p>

        <div class="solution">
            <h3>Solution:</h3>
            <p>Given: <code>W = (x - y) a_z</code></p>
            <p><strong>Cylindrical:</strong></p>
            <p><code>x = ρ cosφ, y = ρ sinφ</code> → <code>W = ρ (cosφ - sinφ) a_z</code></p>
            <p>Since <code>a_z</code> is same in cylindrical, <code><strong>W = ρ (cosφ - sinφ) a_z</strong></code></p>

            <p><strong>Spherical:</strong></p>
            <p><code>x = r sinθ cosφ, y = r sinθ sinφ</code> → <code>W = r sinθ (cosφ - sinφ) a_z</code></p>
            <p>But <code>a_z = cosθ a_r - sinθ a_θ</code></p>
            <p>So, <code>W = r sinθ (cosφ - sinφ) (cosθ a_r - sinθ a_θ)</code><br>
               <code>W = r sinθ cosθ (cosφ - sinφ) a_r - r sin²θ (cosφ - sinφ) a_θ</code></p>
            <p>Thus, <code><strong>W = r \sin\theta \cos\theta (\cos\phi - \sin\phi) a_r - r \sin^2\theta (\cos\phi - \sin\phi) a_θ</strong></code></p>
        </div>
    </div>

    <!-- Problem 9 -->
    <div class="problem">
        <h2>Problem 9: Express Uniform Field F = 5a_z in Cylindrical and Spherical</h2>
        <p class="year">2072 Chaitra</p>

        <div class="solution">
            <h3>Solution:</h3>
            <p><strong>(a) Cylindrical Components:</strong></p>
            <p><code>a_z</code> is invariant → <code><strong>F = 5 a_z</strong></code></p>

            <p><strong>(b) Spherical Components:</strong></p>
            <p><code>a_z = cosθ a_r - sinθ a_θ</code></p>
            <p>So, <code><strong>F = 5 cosθ a_r - 5 sinθ a_θ</strong></code></p>
        </div>
    </div>

    <!-- Problem 10 -->
    <div class="problem">
        <h2>Problem 10: Transform F = y a_x + x a_y + z a_z to Cylindrical at P(2,45°,5)</h2>
        <p class="year">2070 Chaitra</p>

        <div class="solution">
            <h3>Solution:</h3>
            <p>Point P: ρ=2, φ=45°, z=5 → x = 2 cos45° = √2, y = 2 sin45° = √2</p>
            <p>Evaluate F at P: <code>F = √2 a_x + √2 a_y + 5 a_z</code></p>
            <p>Transform to cylindrical:</p>
            <p><code>cos45° = sin45° = √2/2</code></p>
            <p><code>F_ρ = √2 * cosφ + √2 * sinφ = √2*(√2/2) + √2*(√2/2) = 1 + 1 = 2</code><br>
               <code>F_φ = √2 * (-sinφ) + √2 * cosφ = √2*(-√2/2) + √2*(√2/2) = -1 + 1 = 0</code><br>
               <code>F_z = 5</code></p>
            <p>Thus, <code><strong>F = 2 a_ρ + 0 a_φ + 5 a_z = 2 a_ρ + 5 a_z</strong></code></p>
        </div>
    </div>

</body>
</html>