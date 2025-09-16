<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 2: Theory of Measurement - Exam Summary</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.8;
            color: #2d4a2b;
            background: linear-gradient(135deg, #f9fbe7 0%, #f0f4c3 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }
        .header {
            text-align: center;
            padding: 40px 0;
            background: linear-gradient(135deg, #4a7c59 0%, #6b8e23 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="80" r="3" fill="rgba(255,255,255,0.1)"/></svg>');
        }
        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }
        .header .subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            font-weight: 300;
            position: relative;
            z-index: 1;
        }
        .toc {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border: 2px solid #d4a574;
            border-radius: 15px;
            padding: 30px;
            margin: 30px;
            box-shadow: 0 5px 15px rgba(212, 165, 116, 0.2);
        }
        .toc h2 {
            color: #8b4513;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-align: center;
        }
        .toc ul {
            list-style: none;
            color: #6b4e2c;
        }
        .toc li {
            margin: 8px 0;
            padding: 8px 15px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 8px;
            border-left: 4px solid #6b8e23;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .toc li:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateX(5px);
        }
        .section {
            margin: 40px 30px;
            padding: 30px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: 15px;
            border: 1px solid #e9ecef;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        .section h2 {
            color: #4a7c59;
            font-size: 2rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #6b8e23;
        }
        .section h3 {
            color: #2d4a2b;
            font-size: 1.5rem;
            margin: 25px 0 15px 0;
            padding: 10px 15px;
            background: linear-gradient(135deg, #e8f5e8 0%, #d4f4dd 100%);
            border-radius: 8px;
            border-left: 4px solid #6b8e23;
        }
        .section h4 {
            color: #4a7c59;
            font-size: 1.3rem;
            margin: 20px 0 10px 0;
        }
        .section p {
            margin: 15px 0;
            text-align: justify;
            font-size: 1.1rem;
        }
        .diagram {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 2px solid #6b8e23;
            border-radius: 12px;
            padding: 20px;
            margin: 25px 0;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .diagram-title {
            color: #4a7c59;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .circuit-diagram {
            width: 100%;
            height: 200px;
            background: white;
            border-radius: 8px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #666;
            position: relative;
            margin: 15px 0;
        }
        .formula {
            background: linear-gradient(135deg, #fff9e6 0%, #ffecb3 100%);
            border: 2px solid #d4a574;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        .formula-text {
            font-size: 1.3rem;
            font-weight: bold;
            color: #8b4513;
            font-family: 'Courier New', monospace;
        }
        .example-box {
            background: linear-gradient(135deg, #e8f5e8 0%, #d4f4dd 100%);
            border: 2px solid #4a7c59;
            border-radius: 12px;
            padding: 25px;
            margin: 25px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
        .example-box h4 {
            color: #2d4a2b;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background: linear-gradient(135deg, #4a7c59 0%, #6b8e23 100%);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: bold;
        }
        .table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e9ecef;
        }
        .table tr:nth-child(even) {
            background: #f8f9fa;
        }
        .table tr:hover {
            background: #e8f5e8;
            transition: all 0.3s ease;
        }
        .highlight {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            padding: 3px 8px;
            border-radius: 4px;
            color: #8b4513;
            font-weight: bold;
        }
        .note {
            background: linear-gradient(135deg, #cce5ff 0%, #b3d9ff 100%);
            border: 2px solid #6699cc;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border-left: 5px solid #0066cc;
        }
        .note h4 {
            color: #003366;
            margin-bottom: 10px;
        }
        .exam-tip {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border: 2px solid #d4a574;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border-left: 5px solid #8b4513;
        }
        .exam-tip h4 {
            color: #8b4513;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .key-point {
            background: linear-gradient(135deg, #d4f4dd 0%, #b8e6c1 100%);
            border: 2px solid #4a7c59;
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
            font-weight: bold;
            color: #2d4a2b;
        }
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 15px;
            }
            .header h1 {
                font-size: 2rem;
            }
            .section {
                padding: 20px;
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Chapter 2: Theory of Measurement</h1>
            <p class="subtitle">Exam-Focused Summary for Students</p>
        </header>
        <div class="toc">
            <h2>Table of Contents</h2>
            <ul>
                <li onclick="scrollToSection('introduction')">2.1 Static Performance Parameters</li>
                <li onclick="scrollToSection('dynamic')">2.2 Dynamic Performance Parameters</li>
                <li onclick="scrollToSection('errors')">2.3 Error in Measurement</li>
                <li onclick="scrollToSection('statistical')">2.4 Statistical Analysis of Error</li>
                <li onclick="scrollToSection('resistance')">2.5 Measurement of Resistance</li>
                <li onclick="scrollToSection('bridges')">2.6 AC/DC Bridges</li>
            </ul>
        </div>
        <section class="section" id="introduction">
            <h2>2.1 Static Performance Parameters</h2>
            <p>Static characteristics describe instrument performance when the measured variable changes slowly or is constant.</p>
            <div class="key-point">EXAM TIP: These are the MOST IMPORTANT concepts for any measurement system. Memorize definitions, formulas, and relationships.</div>
            <h3>Accuracy</h3>
            <p>Accuracy is the closeness of a measured value to the true value. Low accuracy means large deviation from the true value.</p>
            <div class="formula">
                <div class="formula-text">Error = True Value - Measured Value</div>
            </div>
            <p>Accuracy can be specified in three ways:</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Point Accuracy:</strong> Accuracy at one specific point on the scale.</li>
                <li><strong>Percentage of Scale Range:</strong> Accuracy expressed as percentage of the full scale (e.g., ±2% of 100V = ±2V).</li>
                <li><strong>Percentage of True Value:</strong> Most meaningful (e.g., ±0.5% of actual reading).</li>
            </ul>
            <h3>Precision</h3>
            <p>Precision is the measure of reproducibility - how close repeated measurements are to each other under the same conditions.</p>
            <div class="note">
                <h4>Accuracy vs Precision:</h4>
                <p>A precise instrument may not be accurate (consistent but wrong), but an accurate instrument must be precise (correct and consistent).</p>
            </div>
            <div class="diagram">
                <div class="diagram-title">Accuracy vs Precision</div>
                <div class="circuit-diagram">
                    <svg width="600" height="200" viewBox="0 0 600 200">
                        <!-- Target 1: High Accuracy, High Precision -->
                        <circle cx="100" cy="100" r="40" fill="none" stroke="#2d4a2b" stroke-width="2"/>
                        <circle cx="100" cy="100" r="25" fill="none" stroke="#2d4a2b" stroke-width="1"/>
                        <circle cx="100" cy="100" r="10" fill="none" stroke="#2d4a2b" stroke-width="1"/>
                        <circle cx="100" cy="100" r="2" fill="#cc3333"/>
                        <!-- Clustered points on center -->
                        <circle cx="98" cy="102" r="2" fill="#6699cc"/>
                        <circle cx="102" cy="98" r="2" fill="#6699cc"/>
                        <circle cx="100" cy="103" r="2" fill="#6699cc"/>
                        <circle cx="99" cy="97" r="2" fill="#6699cc"/>
                        <text x="100" y="160" text-anchor="middle" fill="#2d4a2b" font-size="11" font-weight="bold">High Accuracy</text>
                        <text x="100" y="175" text-anchor="middle" fill="#2d4a2b" font-size="11" font-weight="bold">High Precision</text>
                        <!-- Target 2: Low Accuracy, High Precision -->
                        <circle cx="250" cy="100" r="40" fill="none" stroke="#2d4a2b" stroke-width="2"/>
                        <circle cx="250" cy="100" r="25" fill="none" stroke="#2d4a2b" stroke-width="1"/>
                        <circle cx="250" cy="100" r="10" fill="none" stroke="#2d4a2b" stroke-width="1"/>
                        <circle cx="250" cy="100" r="2" fill="#cc3333"/>
                        <!-- Clustered points away from center -->
                        <circle cx="235" cy="85" r="2" fill="#6699cc"/>
                        <circle cx="238" cy="88" r="2" fill="#6699cc"/>
                        <circle cx="232" cy="82" r="2" fill="#6699cc"/>
                        <circle cx="240" cy="80" r="2" fill="#6699cc"/>
                        <text x="250" y="160" text-anchor="middle" fill="#2d4a2b" font-size="11" font-weight="bold">Low Accuracy</text>
                        <text x="250" y="175" text-anchor="middle" fill="#2d4a2b" font-size="11" font-weight="bold">High Precision</text>
                        <!-- Target 3: High Accuracy, Low Precision -->
                        <circle cx="400" cy="100" r="40" fill="none" stroke="#2d4a2b" stroke-width="2"/>
                        <circle cx="400" cy="100" r="25" fill="none" stroke="#2d4a2b" stroke-width="1"/>
                        <circle cx="400" cy="100" r="10" fill="none" stroke="#2d4a2b" stroke-width="1"/>
                        <circle cx="400" cy="100" r="2" fill="#cc3333"/>
                        <!-- Scattered points around center -->
                        <circle cx="395" cy="105" r="2" fill="#6699cc"/>
                        <circle cx="405" cy="95" r="2" fill="#6699cc"/>
                        <circle cx="390" cy="110" r="2" fill="#6699cc"/>
                        <circle cx="410" cy="90" r="2" fill="#6699cc"/>
                        <text x="400" y="160" text-anchor="middle" fill="#2d4a2b" font-size="11" font-weight="bold">High Accuracy</text>
                        <text x="400" y="175" text-anchor="middle" fill="#2d4a2b" font-size="11" font-weight="bold">Low Precision</text>
                        <!-- Target 4: Low Accuracy, Low Precision -->
                        <circle cx="550" cy="100" r="40" fill="none" stroke="#2d4a2b" stroke-width="2"/>
                        <circle cx="550" cy="100" r="25" fill="none" stroke="#2d4a2b" stroke-width="1"/>
                        <circle cx="550" cy="100" r="10" fill="none" stroke="#2d4a2b" stroke-width="1"/>
                        <circle cx="550" cy="100" r="2" fill="#cc3333"/>
                        <!-- Scattered points -->
                        <circle cx="535" cy="120" r="2" fill="#6699cc"/>
                        <circle cx="565" cy="85" r="2" fill="#6699cc"/>
                        <circle cx="575" cy="115" r="2" fill="#6699cc"/>
                        <circle cx="525" cy="90" r="2" fill="#6699cc"/>
                        <text x="550" y="160" text-anchor="middle" fill="#2d4a2b" font-size="11" font-weight="bold">Low Accuracy</text>
                        <text x="550" y="175" text-anchor="middle" fill="#2d4a2b" font-size="11" font-weight="bold">Low Precision</text>
                    </svg>
                </div>
            </div>
            <h3>Sensitivity</h3>
            <p>Sensitivity is the ratio of change in output to change in input. It represents the smallest change in input that the instrument can detect.</p>
            <div class="formula">
                <div class="formula-text">Sensitivity = ΔOutput / ΔInput</div>
            </div>
            <div class="example-box">
                <h4>Example:</h4>
                <p>A Wheatstone Bridge requires a change in resistance of 7Ω in the unknown arm to produce a change in deflection of 3mm of the galvanometer.</p>
                <div class="formula">
                    <div class="formula-text">Sensitivity = 3mm / 7Ω = 0.428 mm/Ω</div>
                </div>
                <div class="formula">
                    <div class="formula-text">Deflection Factor = 1/Sensitivity = 7Ω/3mm = 2.33 Ω/mm</div>
                </div>
            </div>
            <h3>Linearity</h3>
            <p>Linearity is the ability of an instrument to reproduce input characteristics symmetrically and linearly. It's measured as the maximum deviation from an idealized straight line.</p>
            <div class="formula">
                <div class="formula-text">% Non-linearity = (Max. deviation from idealized straight line / Full scale reading) × 100%</div>
            </div>
            <h3>Resolution</h3>
            <p>Resolution is the smallest change in input that produces a detectable change in output.</p>
            <div class="example-box">
                <h4>Example 1 (Analog):</h4>
                <p>A voltmeter has 100 scale divisions and can measure up to 100V. Each division can be read to ½ division.</p>
                <div class="formula">
                    <div class="formula-text">Resolution = 0.5V (since 1 division = 1V, ½ division = 0.5V)</div>
                </div>
                <h4>Example 2 (Digital):</h4>
                <p>A 3½ digit DVM can measure up to 19.99V.</p>
                <div class="formula">
                    <div class="formula-text">Resolution = 0.01V (since smallest change is 1 count, and 1999 counts = 19.99V, so 1 count = 0.01V)</div>
                </div>
            </div>
            <h3>Repeatability & Reproducibility</h3>
            <p><strong>Repeatability:</strong> Closeness of output readings when the same input is applied repetitively over a short period under the same conditions.</p>
            <p><strong>Reproducibility:</strong> Closeness of output readings when the same input is measured at different times, under different conditions, or by different instruments.</p>
        </section>
        <section class="section" id="dynamic">
            <h2>2.2 Dynamic Performance Parameters</h2>
            <p>Dynamic characteristics describe instrument performance when the measured variable changes rapidly with time.</p>
            <div class="key-point">EXAM TIP: Dynamic characteristics are crucial for systems measuring rapidly changing quantities like vibration, pressure pulsations, etc.</div>
            <h3>Speed of Response</h3>
            <p>The speed at which an instrument responds to changes in the measured quantity. It's usually specified as the time taken to reach steady-state conditions after a step input.</p>
            <h3>Measuring Lag</h3>
            <p>The delay in the response of an instrument to changes in the measured quantity. This becomes significant in high-speed measurements.</p>
            <h3>Dynamic Error</h3>
            <p>The difference between the true value of a time-varying quantity and the value indicated by the instrument (assuming static error is zero).</p>
            <h3>Fidelity</h3>
            <p>The degree to which an instrument accurately reproduces the changes in the measured variable without dynamic error. Ideally, a system should have 100% fidelity.</p>
            <h3>Bandwidth</h3>
            <p>The range of frequencies for which the instrument's dynamic sensitivity is satisfactory (usually within ±2% of its static sensitivity).</p>
            <h3>Time Constant</h3>
            <p>For first-order systems, the time constant is the time taken for the output to reach 63.2% of its final value after a step input. Smaller time constants indicate faster response.</p>
            <div class="diagram">
                <div class="diagram-title">Step Response Showing Time Constant</div>
                <div class="circuit-diagram">
                    <svg width="500" height="200" viewBox="0 0 500 200">
                        <!-- Axes -->
                        <line x1="50" y1="150" x2="450" y2="150" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="50" y1="150" x2="50" y2="30" stroke="#2d4a2b" stroke-width="2"/>
                        <!-- Step input -->
                        <line x1="50" y1="150" x2="100" y2="150" stroke="#d4a574" stroke-width="3"/>
                        <line x1="100" y1="150" x2="100" y2="50" stroke="#d4a574" stroke-width="3"/>
                        <line x1="100" y1="50" x2="450" y2="50" stroke="#d4a574" stroke-width="3"/>
                        <text x="275" y="40" text-anchor="middle" fill="#8b4513" font-size="12">Input Step</text>
                        <!-- System response -->
                        <path d="M100,150 C150,120 200,80 250,65 C300,55 350,52 400,51 C450,50 450,50 450,50" stroke="#4a7c59" stroke-width="3" fill="none"/>
                        <text x="350" y="80" text-anchor="middle" fill="#4a7c59" font-size="12">System Response</text>
                        <!-- Time constant marker -->
                        <line x1="200" y1="150" x2="200" y2="85" stroke="#cc3333" stroke-width="2" stroke-dasharray="5,5"/>
                        <line x1="50" y1="85" x2="200" y2="85" stroke="#cc3333" stroke-width="2" stroke-dasharray="5,5"/>
                        <text x="125" y="75" text-anchor="middle" fill="#cc3333" font-size="12">63.2%</text>
                        <text x="200" y="170" text-anchor="middle" fill="#cc3333" font-size="12">Time Constant (τ)</text>
                        <!-- 100% line -->
                        <line x1="50" y1="50" x2="100" y2="50" stroke="#2d4a2b" stroke-width="1" stroke-dasharray="5,5"/>
                        <text x="30" y="55" text-anchor="end" fill="#2d4a2b" font-size="12">100%</text>
                        <!-- Labels -->
                        <text x="250" y="180" text-anchor="middle" fill="#2d4a2b" font-size="12">Time</text>
                        <text x="15" y="90" text-anchor="middle" fill="#2d4a2b" font-size="12" transform="rotate(-90, 15, 90)">Response</text>
                    </svg>
                </div>
            </div>
        </section>
        <section class="section" id="errors">
            <h2>2.3 Error in Measurement</h2>
            <p>An error is the difference between the measured value and the true value of a quantity.</p>
            <div class="formula">
                <div class="formula-text">Error = True Value - Measured Value</div>
            </div>
            <div class="key-point">EXAM TIP: Understand the types of errors and how to calculate them. Numerical problems are common.</div>
            <h3>Types of Errors</h3>
            <h4>1. Gross Errors</h4>
            <p>These are human errors due to carelessness in reading, recording, or calculating. Examples include misreading a scale or recording 23 as 28.</p>
            <p><strong>How to minimize:</strong> Take multiple readings, use multiple observers, and double-check calculations.</p>
            <h4>2. Random Errors</h4>
            <p>These occur irregularly due to unpredictable fluctuations in experimental conditions (temperature, voltage, vibrations, etc.). They can be reduced by taking multiple readings and using statistical analysis.</p>
            <h4>3. Systematic Errors</h4>
            <p>These are consistent, repeatable errors associated with faulty equipment or flawed experimental design. They can be categorized as:</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Instrumental Errors:</strong> Due to faulty construction, calibration, or misuse of instruments (e.g., zero error).</li>
                <li><strong>Environmental Errors:</strong> Due to external conditions like temperature, pressure, humidity, or magnetic fields.</li>
                <li><strong>Observational Errors:</strong> Due to observer bias, parallax error, or improper setting of equipment.</li>
            </ul>
            <h3>Error Calculations</h3>
            <div class="formula">
                <div class="formula-text">Absolute Error = |True Value - Measured Value|</div>
            </div>
            <div class="formula">
                <div class="formula-text">Relative Error = Absolute Error / True Value</div>
            </div>
            <div class="formula">
                <div class="formula-text">Percentage Error = (Absolute Error / True Value) × 100%</div>
            </div>
            <div class="example-box">
                <h4>Example: Loading Effect Error</h4>
                <p>A voltmeter with sensitivity of 15kΩ/V reads 80V on a 100V scale when connected across an unknown resistor. The current through the resistor is 2mA.</p>
                <p><strong>Solution:</strong></p>
                <p>Voltmeter resistance, R<sub>v</sub> = 15kΩ/V × 100V = 1500kΩ</p>
                <p>True resistance, R<sub>true</sub> = 80V / 2mA = 40kΩ</p>
                <p>Apparent resistance (with voltmeter loading), R<sub>app</sub> = 40kΩ || 1500kΩ = (40×1500)/(40+1500) = 38.96kΩ</p>
                <p>% Error due to loading = [(38.96 - 40) / 40] × 100% = -2.6%</p>
            </div>
            <div class="exam-tip">
                <h4>Common Exam Problem:</h4>
                <p>A voltmeter with 2% accuracy on its 0-50V scale measures 15V and 42V. Calculate possible percentage errors.</p>
                <p><strong>Solution:</strong> Absolute error = 2% of 50V = 1V</p>
                <p>For 15V reading: % error = (1/15) × 100% = 6.67%</p>
                <p>For 42V reading: % error = (1/42) × 100% = 2.38%</p>
                <p><strong>Key Insight:</strong> The percentage error is larger for smaller readings on the same scale.</p>
            </div>
        </section>
        <section class="section" id="statistical">
            <h2>2.4 Statistical Analysis of Error in Measurement</h2>
            <p>Statistical analysis is used to estimate errors when random errors are dominant. It involves taking multiple readings and applying statistical methods.</p>
            <div class="key-point">EXAM TIP: Be prepared to calculate mean, standard deviation, and probable error from a set of measurements.</div>
            <h3>Arithmetic Mean</h3>
            <p>The average of all readings, which is the most probable value.</p>
            <div class="formula">
                <div class="formula-text">x̄ = (x₁ + x₂ + x₃ + ... + x<sub>n</sub>) / n</div>
            </div>
            <h3>Deviation</h3>
            <p>The difference between each reading and the arithmetic mean.</p>
            <div class="formula">
                <div class="formula-text">dᵢ = xᵢ - x̄</div>
            </div>
            <h3>Standard Deviation (σ)</h3>
            <p>A measure of the spread of data points around the mean.</p>
            <div class="formula">
                <div class="formula-text">σ = √[Σ(xᵢ - x̄)² / (n-1)] for n < 20 (sample)</div>
            </div>
            <div class="formula">
                <div class="formula-text">σ = √[Σ(xᵢ - x̄)² / n] for n ≥ 20 (population)</div>
            </div>
            <h3>Variance</h3>
            <p>The square of the standard deviation.</p>
            <div class="formula">
                <div class="formula-text">Variance = σ²</div>
            </div>
            <h3>Probable Error</h3>
            <p>The range within which there's a 50% chance that the true value lies.</p>
            <div class="formula">
                <div class="formula-text">Probable Error (p.e.) = ±0.6745σ</div>
            </div>
            <div class="formula">
                <div class="formula-text">Probable Error of Mean = p.e. / √(n-1)</div>
            </div>
            <div class="example-box">
                <h4>Example Problem:</h4>
                <p>The following 10 observations were recorded: 41.7, 42.0, 41.8, 42.0, 42.1, 41.9, 42.0, 41.9, 42.5, 41.8</p>
                <p><strong>Find:</strong> a) Mean, b) Standard deviation, c) Probable error of one reading, d) Probable error of mean, e) Range</p>
                <p><strong>Solution:</strong></p>
                <p>a) Mean = (41.7+42.0+41.8+42.0+42.1+41.9+42.0+41.9+42.5+41.8)/10 = 41.97</p>
                <p>b) Standard deviation = √[Σ(xᵢ - x̄)² / (n-1)] = √[0.401/9] = 0.211</p>
                <p>c) Probable error of one reading = ±0.6745 × 0.211 = ±0.142</p>
                <p>d) Probable error of mean = ±0.142 / √9 = ±0.047</p>
                <p>e) Range = 42.5 - 41.7 = 0.8</p>
            </div>
            <h3>Normal Distribution (Gaussian Curve)</h3>
            <p>When random errors are predominant, measurements follow a normal distribution where the mean is the most probable value.</p>
            <div class="diagram">
                <div class="diagram-title">Normal Distribution Curve</div>
                <div class="circuit-diagram">
                    <svg width="500" height="250" viewBox="0 0 500 250">
                        <!-- Normal distribution curve -->
                        <path d="M50,200 C100,100 250,50 400,100 C450,120 450,200 450,200 L50,200 Z" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <!-- Mean line -->
                        <line x1="250" y1="50" x2="250" y2="200" stroke="#cc3333" stroke-width="2"/>
                        <text x="250" y="40" text-anchor="middle" fill="#cc3333" font-size="12">Mean (x̄)</text>
                        <!-- Standard deviation lines -->
                        <line x1="175" y1="85" x2="175" y2="200" stroke="#d4a574" stroke-width="2" stroke-dasharray="5,5"/>
                        <line x1="325" y1="85" x2="325" y2="200" stroke="#d4a574" stroke-width="2" stroke-dasharray="5,5"/>
                        <text x="175" y="75" text-anchor="middle" fill="#d4a574" font-size="10">x̄-σ</text>
                        <text x="325" y="75" text-anchor="middle" fill="#d4a574" font-size="10">x̄+σ</text>
                        <!-- 2σ lines -->
                        <line x1="100" y1="130" x2="100" y2="200" stroke="#d4a574" stroke-width="2" stroke-dasharray="5,5"/>
                        <line x1="400" y1="130" x2="400" y2="200" stroke="#d4a574" stroke-width="2" stroke-dasharray="5,5"/>
                        <text x="100" y="120" text-anchor="middle" fill="#d4a574" font-size="10">x̄-2σ</text>
                        <text x="400" y="120" text-anchor="middle" fill="#d4a574" font-size="10">x̄+2σ</text>
                        <!-- 3σ lines -->
                        <line x1="75" y1="160" x2="75" y2="200" stroke="#d4a574" stroke-width="2" stroke-dasharray="5,5"/>
                        <line x1="425" y1="160" x2="425" y2="200" stroke="#d4a574" stroke-width="2" stroke-dasharray="5,5"/>
                        <text x="75" y="150" text-anchor="middle" fill="#d4a574" font-size="10">x̄-3σ</text>
                        <text x="425" y="150" text-anchor="middle" fill="#d4a574" font-size="10">x̄+3σ</text>
                        <!-- Area percentages -->
                        <text x="250" y="100" text-anchor="middle" fill="#2d4a2b" font-size="12">68.28%</text>
                        <text x="250" y="140" text-anchor="middle" fill="#2d4a2b" font-size="12">95.46%</text>
                        <text x="250" y="170" text-anchor="middle" fill="#2d4a2b" font-size="12">99.72%</text>
                        <!-- Axes -->
                        <line x1="50" y1="200" x2="450" y2="200" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="50" y1="200" x2="50" y2="30" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="250" y="230" text-anchor="middle" fill="#2d4a2b" font-size="12">Measured Value</text>
                        <text x="15" y="115" text-anchor="middle" fill="#2d4a2b" font-size="12" transform="rotate(-90, 15, 115)">Frequency</text>
                    </svg>
                </div>
            </div>
            <div class="note">
                <h4>Key Statistical Facts:</h4>
                <ul style="color: #003366; margin-left: 20px;">
                    <li>±1σ covers 68.28% of measurements</li>
                    <li>±2σ covers 95.46% of measurements</li>
                    <li>±3σ covers 99.72% of measurements</li>
                    <li>Probable error (50% confidence) = ±0.6745σ</li>
                </ul>
            </div>
        </section>
        <section class="section" id="resistance">
            <h2>2.5 Measurement of Resistance</h2>
            <p>Resistances are classified based on their values:</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Low Resistance:</strong> 1Ω and below</li>
                <li><strong>Medium Resistance:</strong> 1Ω to 100kΩ</li>
                <li><strong>High Resistance:</strong> 100kΩ and above</li>
            </ul>
            <div class="key-point">EXAM TIP: Know which measurement method is appropriate for each resistance range.</div>
            <h3>Measurement of Medium Resistance</h3>
            <h4>Ammeter-Voltmeter Method</h4>
            <p>The simplest method: R = V/I</p>
            <p>There are two connection methods, each with its own error source:</p>
            <div class="diagram">
                <div class="diagram-title">Ammeter-Voltmeter Connections</div>
                <div style="display: flex; justify-content: space-around; margin: 20px 0;">
                    <div style="text-align: center; width: 45%;">
                        <div class="circuit-diagram" style="height: 150px;">
                            <svg width="300" height="150" viewBox="0 0 300 150">
                                <!-- Case 1: Voltmeter across both -->
                                <rect x="50" y="50" width="60" height="30" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                                <text x="80" y="70" text-anchor="middle" fill="#8b4513" font-size="10">Ammeter</text>
                                <rect x="130" y="50" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                                <text x="160" y="70" text-anchor="middle" fill="#2d4a2b" font-size="10">R<sub>x</sub></text>
                                <rect x="130" y="10" width="60" height="30" fill="#cce5ff" stroke="#6699cc" stroke-width="2"/>
                                <text x="160" y="30" text-anchor="middle" fill="#003366" font-size="10">Voltmeter</text>
                                <line x1="20" y1="65" x2="50" y2="65" stroke="#2d4a2b" stroke-width="2"/>
                                <line x1="110" y1="65" x2="130" y2="65" stroke="#2d4a2b" stroke-width="2"/>
                                <line x1="190" y1="65" x2="250" y2="65" stroke="#2d4a2b" stroke-width="2"/>
                                <line x1="160" y1="40" x2="160" y2="50" stroke="#2d4a2b" stroke-width="2"/>
                                <line x1="160" y1="80" x2="160" y2="90" stroke="#2d4a2b" stroke-width="2"/>
                                <text x="150" y="130" text-anchor="middle" fill="#2d4a2b" font-size="10">Case 1: Measures R<sub>x</sub> + R<sub>A</sub></text>
                            </svg>
                        </div>
                    </div>
                    <div style="text-align: center; width: 45%;">
                        <div class="circuit-diagram" style="height: 150px;">
                            <svg width="300" height="150" viewBox="0 0 300 150">
                                <!-- Case 2: Voltmeter across resistor only -->
                                <rect x="50" y="50" width="60" height="30" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                                <text x="80" y="70" text-anchor="middle" fill="#8b4513" font-size="10">Ammeter</text>
                                <rect x="130" y="50" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                                <text x="160" y="70" text-anchor="middle" fill="#2d4a2b" font-size="10">R<sub>x</sub></text>
                                <rect x="190" y="10" width="60" height="30" fill="#cce5ff" stroke="#6699cc" stroke-width="2"/>
                                <text x="220" y="30" text-anchor="middle" fill="#003366" font-size="10">Voltmeter</text>
                                <line x1="20" y1="65" x2="50" y2="65" stroke="#2d4a2b" stroke-width="2"/>
                                <line x1="110" y1="65" x2="130" y2="65" stroke="#2d4a2b" stroke-width="2"/>
                                <line x1="190" y1="65" x2="250" y2="65" stroke="#2d4a2b" stroke-width="2"/>
                                <line x1="220" y1="40" x2="220" y2="50" stroke="#2d4a2b" stroke-width="2"/>
                                <text x="150" y="130" text-anchor="middle" fill="#2d4a2b" font-size="10">Case 2: Measures R<sub>x</sub> only</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Wheatstone Bridge</h4>
            <p>The most accurate method for medium resistance measurement.</p>
            <div class="diagram">
                <div class="diagram-title">Wheatstone Bridge Circuit</div>
                <div class="circuit-diagram">
                    <svg width="400" height="300" viewBox="0 0 400 300">
                        <!-- Bridge arms -->
                        <rect x="100" y="80" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="130" y="100" text-anchor="middle" fill="#2d4a2b" font-size="10">R₁</text>
                        <rect x="240" y="80" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="270" y="100" text-anchor="middle" fill="#2d4a2b" font-size="10">R₂</text>
                        <rect x="100" y="190" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="130" y="210" text-anchor="middle" fill="#2d4a2b" font-size="10">R₃</text>
                        <rect x="240" y="190" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="270" y="210" text-anchor="middle" fill="#2d4a2b" font-size="10">R<sub>x</sub></text>
                        <!-- Galvanometer -->
                        <circle cx="200" cy="150" r="20" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                        <text x="200" y="155" text-anchor="middle" fill="#8b4513" font-size="10">G</text>
                        <!-- Voltage source -->
                        <circle cx="180" cy="40" r="20" fill="#cce5ff" stroke="#6699cc" stroke-width="2"/>
                        <text x="180" y="45" text-anchor="middle" fill="#003366" font-size="10">V</text>
                        <!-- Connections -->
                        <line x1="180" y1="60" x2="180" y2="80" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="180" y1="220" x2="180" y2="260" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="160" y1="95" x2="240" y2="95" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="160" y1="205" x2="240" y2="205" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="130" y1="110" x2="130" y2="130" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="130" y1="170" x2="130" y2="190" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="270" y1="110" x2="270" y2="130" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="270" y1="170" x2="270" y2="190" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="130" y1="130" x2="180" y2="150" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="130" y1="170" x2="180" y2="150" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="270" y1="130" x2="220" y2="150" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="270" y1="170" x2="220" y2="150" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="200" y="280" text-anchor="middle" fill="#2d4a2b" font-size="12">At balance: R₁/R₂ = R₃/R<sub>x</sub></text>
                        <text x="200" y="295" text-anchor="middle" fill="#2d4a2b" font-size="12">∴ R<sub>x</sub> = (R₂ × R₃) / R₁</text>
                    </svg>
                </div>
            </div>
            <h3>Measurement of High Resistance</h3>
            <p>Methods include:</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Direct Deflection Method:</strong> Using a sensitive galvanometer in series with the unknown resistance.</li>
                <li><strong>Loss of Charge Method:</strong> Measuring the rate of discharge of a capacitor through the unknown resistance.</li>
                <li><strong>Megohm Bridge:</strong> A specialized bridge circuit for high resistance measurement.</li>
                <li><strong>Megger:</strong> A portable instrument specifically designed for measuring insulation resistance (typically in megaohms).</li>
            </ul>
            <div class="diagram">
                <div class="diagram-title">Megger (Megohmmeter) Circuit</div>
                <div class="circuit-diagram">
                    <svg width="400" height="250" viewBox="0 0 400 250">
                        <!-- Hand-cranked generator -->
                        <rect x="50" y="80" width="60" height="40" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                        <text x="80" y="105" text-anchor="middle" fill="#8b4513" font-size="10">Generator</text>
                        <circle cx="30" cy="100" r="15" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="30" y="105" text-anchor="middle" fill="#2d4a2b" font-size="8">Crank</text>
                        <!-- Current coil and pressure coil -->
                        <rect x="130" y="60" width="80" height="30" fill="#cce5ff" stroke="#6699cc" stroke-width="2"/>
                        <text x="170" y="80" text-anchor="middle" fill="#003366" font-size="9">Current Coil</text>
                        <rect x="130" y="110" width="80" height="30" fill="#cce5ff" stroke="#6699cc" stroke-width="2"/>
                        <text x="170" y="130" text-anchor="middle" fill="#003366" font-size="9">Pressure Coil</text>
                        <!-- Permanent magnet and moving coil -->
                        <rect x="230" y="70" width="100" height="60" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="280" y="95" text-anchor="middle" fill="#2d4a2b" font-size="10">Moving Coil</text>
                        <text x="280" y="115" text-anchor="middle" fill="#2d4a2b" font-size="10">Mechanism</text>
                        <!-- Scale -->
                        <rect x="240" y="150" width="80" height="30" fill="#fff9e6" stroke="#d4a574" stroke-width="2"/>
                        <text x="280" y="170" text-anchor="middle" fill="#8b4513" font-size="10">Megaohm Scale</text>
                        <!-- Unknown resistance -->
                        <rect x="150" y="180" width="100" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="200" y="200" text-anchor="middle" fill="#2d4a2b" font-size="10">R<sub>x</sub> (Unknown)</text>
                        <!-- Connections -->
                        <line x1="110" y1="100" x2="130" y2="75" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="110" y1="100" x2="130" y2="125" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="210" y1="75" x2="230" y2="80" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="210" y1="125" x2="230" y2="120" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="280" y1="130" x2="280" y2="150" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="200" y1="180" x2="200" y2="150" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="200" y1="210" x2="200" y2="230" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="110" y1="230" x2="200" y2="230" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="110" y1="100" x2="110" y2="230" stroke="#2d4a2b" stroke-width="2"/>
                        <!-- Terminals -->
                        <circle cx="80" cy="230" r="5" fill="#cc3333" stroke="#cc3333" stroke-width="1"/>
                        <circle cx="320" cy="230" r="5" fill="#cc3333" stroke="#cc3333" stroke-width="1"/>
                        <text x="80" y="245" text-anchor="middle" fill="#2d4a2b" font-size="10">Line</text>
                        <text x="320" y="245" text-anchor="middle" fill="#2d4a2b" font-size="10">Earth</text>
                    </svg>
                </div>
            </div>
        </section>
        <section class="section" id="bridges">
            <h2>2.6 AC/DC Bridges</h2>
            <p>Bridges are precision instruments for measuring resistance, inductance, and capacitance by comparing unknown values with known standards.</p>
            <div class="key-point">EXAM TIP: Bridges are fundamental in electrical measurements. Understand balance conditions and be able to solve numerical problems.</div>
            <h3>DC Bridges</h3>
            <h4>Wheatstone Bridge</h4>
            <p>As discussed in section 2.5, used for medium resistance measurement.</p>
            <div class="formula">
                <div class="formula-text">At balance: R₁/R₂ = R₃/R<sub>x</sub> or R₁R<sub>x</sub> = R₂R₃</div>
            </div>
            <h4>Kelvin Bridge</h4>
            <p>A modified Wheatstone bridge for measuring low resistances (below 1Ω), eliminating errors due to lead and contact resistances.</p>
            <div class="diagram">
                <div class="diagram-title">Kelvin Bridge Circuit</div>
                <div class="circuit-diagram">
                    <svg width="500" height="300" viewBox="0 0 500 300">
                        <!-- Main ratio arms -->
                        <rect x="100" y="60" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="130" y="80" text-anchor="middle" fill="#2d4a2b" font-size="10">P</text>
                        <rect x="340" y="60" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="370" y="80" text-anchor="middle" fill="#2d4a2b" font-size="10">Q</text>
                        <!-- Galvanometer connection -->
                        <circle cx="250" cy="100" r="15" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                        <text x="250" y="105" text-anchor="middle" fill="#8b4513" font-size="9">G</text>
                        <!-- Standard and unknown resistances -->
                        <rect x="100" y="180" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="130" y="200" text-anchor="middle" fill="#2d4a2b" font-size="10">S</text>
                        <rect x="340" y="180" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="370" y="200" text-anchor="middle" fill="#2d4a2b" font-size="10">R</text>
                        <!-- Link resistance -->
                        <rect x="200" y="140" width="100" height="20" fill="#fff3cd" stroke="#d4a574" stroke-width="1"/>
                        <text x="250" y="155" text-anchor="middle" fill="#8b4513" font-size="8">r (link)</text>
                        <!-- Connections -->
                        <line x1="160" y1="75" x2="235" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="265" y1="100" x2="340" y2="75" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="160" y1="195" x2="235" y2="150" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="265" y1="150" x2="340" y2="195" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="130" y1="90" x2="130" y2="180" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="370" y1="90" x2="370" y2="180" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="130" y1="210" x2="130" y2="250" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="370" y1="210" x2="370" y2="250" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="130" y1="250" x2="370" y2="250" stroke="#2d4a2b" stroke-width="2"/>
                        <!-- Voltage source -->
                        <circle cx="250" cy="30" r="20" fill="#cce5ff" stroke="#6699cc" stroke-width="2"/>
                        <text x="250" y="35" text-anchor="middle" fill="#003366" font-size="10">V</text>
                        <line x1="250" y1="50" x2="250" y2="60" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="250" y1="60" x2="130" y2="60" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="250" y1="60" x2="370" y2="60" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="250" y="280" text-anchor="middle" fill="#2d4a2b" font-size="12">At balance: R/S = P/Q</text>
                    </svg>
                </div>
            </div>
            <h3>AC Bridges</h3>
            <p>AC bridges measure inductance, capacitance, and impedance. The general balance condition is:</p>
            <div class="formula">
                <div class="formula-text">Z₁Z₄ = Z₂Z₃</div>
            </div>
            <p>For complex impedances, this means both magnitude and phase must balance:</p>
            <div class="formula">
                <div class="formula-text">|Z₁||Z₄| = |Z₂||Z₃| and ∠Z₁ + ∠Z₄ = ∠Z₂ + ∠Z₃</div>
            </div>
            <h4>Maxwell's Bridge</h4>
            <p>Used for measuring medium inductance (Q between 1 and 10).</p>
            <div class="diagram">
                <div class="diagram-title">Maxwell's Bridge Circuit</div>
                <div class="circuit-diagram">
                    <svg width="400" height="300" viewBox="0 0 400 300">
                        <!-- Bridge arms -->
                        <rect x="80" y="60" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="110" y="80" text-anchor="middle" fill="#2d4a2b" font-size="9">R₁</text>
                        <rect x="80" y="70" width="60" height="20" fill="#cce5ff" stroke="#6699cc" stroke-width="1"/>
                        <text x="110" y="85" text-anchor="middle" fill="#003366" font-size="7">C₁</text>
                        <rect x="260" y="60" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="290" y="80" text-anchor="middle" fill="#2d4a2b" font-size="9">R₂</text>
                        <rect x="80" y="190" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="110" y="210" text-anchor="middle" fill="#2d4a2b" font-size="9">R₃</text>
                        <rect x="260" y="180" width="60" height="40" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                        <text x="290" y="195" text-anchor="middle" fill="#8b4513" font-size="9">L<sub>x</sub></text>
                        <text x="290" y="215" text-anchor="middle" fill="#8b4513" font-size="9">R<sub>x</sub></text>
                        <!-- Galvanometer -->
                        <circle cx="200" cy="150" r="15" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                        <text x="200" y="155" text-anchor="middle" fill="#8b4513" font-size="9">G</text>
                        <!-- AC Source -->
                        <circle cx="200" cy="30" r="20" fill="#cce5ff" stroke="#6699cc" stroke-width="2"/>
                        <text x="200" y="35" text-anchor="middle" fill="#003366" font-size="10">AC</text>
                        <!-- Connections -->
                        <line x1="200" y1="50" x2="200" y2="60" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="200" y1="60" x2="140" y2="60" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="200" y1="60" x2="260" y2="60" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="140" y1="75" x2="200" y2="135" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="260" y1="75" x2="215" y2="135" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="140" y1="205" x2="200" y2="165" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="260" y1="200" x2="215" y2="165" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="110" y1="90" x2="110" y2="190" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="290" y1="90" x2="290" y2="180" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="110" y1="220" x2="290" y2="220" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="200" y="250" text-anchor="middle" fill="#2d4a2b" font-size="11">At balance:</text>
                        <text x="200" y="265" text-anchor="middle" fill="#2d4a2b" font-size="11">R<sub>x</sub> = R₂R₃/R₁</text>
                        <text x="200" y="280" text-anchor="middle" fill="#2d4a2b" font-size="11">L<sub>x</sub> = R₂R₃C₁</text>
                    </svg>
                </div>
            </div>
            <h4>Schering Bridge</h4>
            <p>Used for measuring capacitance and dissipation factor.</p>
            <div class="diagram">
                <div class="diagram-title">Schering Bridge Circuit</div>
                <div class="circuit-diagram">
                    <svg width="400" height="300" viewBox="0 0 400 300">
                        <!-- Bridge arms -->
                        <rect x="80" y="180" width="60" height="40" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                        <text x="110" y="195" text-anchor="middle" fill="#8b4513" font-size="9">C<sub>x</sub></text>
                        <text x="110" y="215" text-anchor="middle" fill="#8b4513" font-size="9">r<sub>x</sub></text>
                        <rect x="260" y="190" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="290" y="210" text-anchor="middle" fill="#2d4a2b" font-size="9">R₃</text>
                        <rect x="80" y="60" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="110" y="80" text-anchor="middle" fill="#2d4a2b" font-size="9">R₁</text>
                        <rect x="80" y="70" width="60" height="20" fill="#cce5ff" stroke="#6699cc" stroke-width="1"/>
                        <text x="110" y="85" text-anchor="middle" fill="#003366" font-size="7">C₁</text>
                        <rect x="260" y="60" width="60" height="30" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="290" y="80" text-anchor="middle" fill="#2d4a2b" font-size="9">R₄</text>
                        <rect x="260" y="70" width="60" height="20" fill="#cce5ff" stroke="#6699cc" stroke-width="1"/>
                        <text x="290" y="85" text-anchor="middle" fill="#003366" font-size="7">C₄</text>
                        <!-- Galvanometer -->
                        <circle cx="200" cy="150" r="15" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                        <text x="200" y="155" text-anchor="middle" fill="#8b4513" font-size="9">G</text>
                        <!-- AC Source -->
                        <circle cx="200" cy="30" r="20" fill="#cce5ff" stroke="#6699cc" stroke-width="2"/>
                        <text x="200" y="35" text-anchor="middle" fill="#003366" font-size="10">AC</text>
                        <!-- Connections -->
                        <line x1="200" y1="50" x2="200" y2="60" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="200" y1="60" x2="140" y2="60" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="200" y1="60" x2="260" y2="60" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="140" y1="75" x2="200" y2="135" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="260" y1="75" x2="215" y2="135" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="140" y1="200" x2="200" y2="165" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="260" y1="205" x2="215" y2="165" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="110" y1="90" x2="110" y2="180" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="290" y1="90" x2="290" y2="190" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="110" y1="220" x2="290" y2="220" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="200" y="250" text-anchor="middle" fill="#2d4a2b" font-size="11">At balance:</text>
                        <text x="200" y="265" text-anchor="middle" fill="#2d4a2b" font-size="11">C<sub>x</sub> = C₁(R₄/R₃)</text>
                        <text x="200" y="280" text-anchor="middle" fill="#2d4a2b" font-size="11">r<sub>x</sub> = R₃(C₄/C₁)</text>
                    </svg>
                </div>
            </div>
            <div class="example-box">
                <h4>Example Problem:</h4>
                <p>An AC bridge has the following constants: Arm AB: R=1000Ω in parallel with C=0.5μF, Arm BC: R=1000Ω in series with C=0.5μF, Arm CD: L=30mH in series with R=200Ω. Find the constants of arm DA to balance the bridge.</p>
                <p><strong>Solution:</strong> For balance, Z₁Z₄ = Z₂Z₃</p>
                <p>This requires solving complex impedance equations. The approach is to express each arm as a complex impedance, then equate real and imaginary parts.</p>
                <p>After calculations: R<sub>DA</sub> = 200Ω, C<sub>DA</sub> = 0.5μF</p>
            </div>
        </section>
        <script>
            function scrollToSection(id) {
                const element = document.getElementById(id);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' });
                }
            }
        </script>
    </div>
</body>
</html>


<!-- chapter3 start  -->

<!-- chap 3 as chap 2    -->

<div>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 3: Transducers - Exam Summary</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.8;
            color: #2d4a2b;
            background: linear-gradient(135deg, #f9fbe7 0%, #f0f4c3 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }
        .header {
            text-align: center;
            padding: 40px 0;
            background: linear-gradient(135deg, #4a7c59 0%, #6b8e23 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="80" r="3" fill="rgba(255,255,255,0.1)"/></svg>');
        }
        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }
        .header .subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            font-weight: 300;
            position: relative;
            z-index: 1;
        }
        .toc {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border: 2px solid #d4a574;
            border-radius: 15px;
            padding: 30px;
            margin: 30px;
            box-shadow: 0 5px 15px rgba(212, 165, 116, 0.2);
        }
        .toc h2 {
            color: #8b4513;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-align: center;
        }
        .toc ul {
            list-style: none;
            color: #6b4e2c;
        }
        .toc li {
            margin: 8px 0;
            padding: 8px 15px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 8px;
            border-left: 4px solid #6b8e23;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .toc li:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateX(5px);
        }
        .section {
            margin: 40px 30px;
            padding: 30px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: 15px;
            border: 1px solid #e9ecef;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        .section h2 {
            color: #4a7c59;
            font-size: 2rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #6b8e23;
        }
        .section h3 {
            color: #2d4a2b;
            font-size: 1.5rem;
            margin: 25px 0 15px 0;
            padding: 10px 15px;
            background: linear-gradient(135deg, #e8f5e8 0%, #d4f4dd 100%);
            border-radius: 8px;
            border-left: 4px solid #6b8e23;
        }
        .section h4 {
            color: #4a7c59;
            font-size: 1.3rem;
            margin: 20px 0 10px 0;
        }
        .section p {
            margin: 15px 0;
            text-align: justify;
            font-size: 1.1rem;
        }
        .diagram {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 2px solid #6b8e23;
            border-radius: 12px;
            padding: 20px;
            margin: 25px 0;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .diagram-title {
            color: #4a7c59;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .circuit-diagram {
            width: 100%;
            height: 200px;
            background: white;
            border-radius: 8px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #666;
            position: relative;
            margin: 15px 0;
        }
        .formula {
            background: linear-gradient(135deg, #fff9e6 0%, #ffecb3 100%);
            border: 2px solid #d4a574;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        .formula-text {
            font-size: 1.3rem;
            font-weight: bold;
            color: #8b4513;
            font-family: 'Courier New', monospace;
        }
        .example-box {
            background: linear-gradient(135deg, #e8f5e8 0%, #d4f4dd 100%);
            border: 2px solid #4a7c59;
            border-radius: 12px;
            padding: 25px;
            margin: 25px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
        .example-box h4 {
            color: #2d4a2b;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background: linear-gradient(135deg, #4a7c59 0%, #6b8e23 100%);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: bold;
        }
        .table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e9ecef;
        }
        .table tr:nth-child(even) {
            background: #f8f9fa;
        }
        .table tr:hover {
            background: #e8f5e8;
            transition: all 0.3s ease;
        }
        .highlight {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            padding: 3px 8px;
            border-radius: 4px;
            color: #8b4513;
            font-weight: bold;
        }
        .note {
            background: linear-gradient(135deg, #cce5ff 0%, #b3d9ff 100%);
            border: 2px solid #6699cc;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border-left: 5px solid #0066cc;
        }
        .note h4 {
            color: #003366;
            margin-bottom: 10px;
        }
        .exam-tip {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border: 2px solid #d4a574;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border-left: 5px solid #8b4513;
        }
        .exam-tip h4 {
            color: #8b4513;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .key-point {
            background: linear-gradient(135deg, #d4f4dd 0%, #b8e6c1 100%);
            border: 2px solid #4a7c59;
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
            font-weight: bold;
            color: #2d4a2b;
        }
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 15px;
            }
            .header h1 {
                font-size: 2rem;
            }
            .section {
                padding: 20px;
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Chapter 3: Transducers</h1>
            <p class="subtitle">Exam-Focused Summary for Students</p>
        </header>
        <div class="toc">
            <h2>Table of Contents</h2>
            <ul>
                <li onclick="scrollToSection('introduction')">3.1 Introduction to Transducers</li>
                <li onclick="scrollToSection('sensor')">3.2 Introduction to Sensors</li>
                <li onclick="scrollToSection('types')">3.3 Types of Sensors</li>
                <li onclick="scrollToSection('actuator')">3.4 Introduction to Actuators</li>
            </ul>
        </div>
        <section class="section" id="introduction">
            <h2>3.1 Introduction to Transducers</h2>
            <p>A <span class="highlight">transducer</span> is a device that converts one form of energy into another. In instrumentation, it typically converts a physical quantity (non-electrical) into an electrical signal.</p>
            <div class="key-point">EXAM TIP: Understand the definition, workflow, and classification of transducers. These are fundamental concepts frequently tested.</div>
            <h3>Workflow of a Typical Transducer</h3>
            <ol style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Sensing:</strong> Detects physical change (pressure, temperature, force, motion) via a sensor element.</li>
                <li><strong>Signal Conversion:</strong> Converts detected quantity into electrical signal (resistance, voltage, current changes).</li>
                <li><strong>Amplification (if needed):</strong> Strengthens weak signals for processing (e.g., using op-amps).</li>
                <li><strong>Signal Transmission:</strong> Sends signal to control system (PLC, microcontroller) often as standardized 4-20mA or 0-10V.</li>
                <li><strong>Processing and Action:</strong> Control system interprets signal and triggers actions (adjust valve, control motor, sound alarm).</li>
            </ol>
            <h3>Basic Requirements for Transducer Selection</h3>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Ruggedness:</strong> Withstand overload with safety protection.</li>
                <li><strong>Linearity:</strong> Input-output characteristics should be linear and symmetrical.</li>
                <li><strong>Repeatability:</strong> Reproduce same output under identical conditions (fixed temp, pressure, humidity).</li>
                <li><strong>No Residual Deformation:</strong> No permanent deformation after long-term input application.</li>
                <li><strong>No Hysteresis:</strong> Same output regardless of whether input is increasing or decreasing.</li>
                <li><strong>High Output Signal Quality:</strong> High signal-to-noise ratio with sufficient amplitude.</li>
                <li><strong>High Reliability & Stability:</strong> Minimal error under varying environmental conditions.</li>
                <li><strong>Good Dynamic Response:</strong> Output faithfully follows input over time (analyze via frequency response).</li>
            </ul>
            <h3>Classification of Transducers</h3>
            <h4>1. Based on External Power Source</h4>
            <div class="advantages">
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Active Transducers</h4>
                    <p>Self-generating, no external power needed.</p>
                    <ul style="color: #2d4a2b;">
                        <li><strong>Examples:</strong> Thermocouples, piezoelectric crystals, photovoltaic cells, tachogenerators</li>
                        <li>Convert energy directly from measured quantity</li>
                    </ul>
                </div>
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Passive Transducers</h4>
                    <p>Require external power source (excitation).</p>
                    <ul style="color: #2d4a2b;">
                        <li><strong>Examples:</strong> Strain gauges, RTDs, capacitive sensors, LVDTs</li>
                        <li>Modify electrical parameters (R, L, C)</li>
                        <li>Output is modulated version of excitation signal</li>
                    </ul>
                </div>
            </div>
            <h4>2. Based on Transduction Phenomenon</h4>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Transducers:</strong> Convert non-electrical → electrical quantity.</li>
                <li><strong>Inverse Transducers:</strong> Convert electrical → non-electrical quantity (actuators).</li>
                <li><strong>Example:</strong> Piezoelectric crystal - voltage applied → changes dimension (used in control systems).</li>
            </ul>
            <h4>3. Based on Physical Phenomenon</h4>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Primary Transducer:</strong> Sensing element that responds to physical change.</li>
                <li><strong>Secondary Transducer:</strong> Converts primary's output (mechanical) into electrical output.</li>
                <li><strong>Example:</strong> Bourdon tube (primary) converts pressure → displacement, then LVDT (secondary) converts displacement → voltage.</li>
            </ul>
            <h4>4. Based on Quantity Measured</h4>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li>Temperature transducers (thermocouples)</li>
                <li>Pressure transducers (diaphragms)</li>
                <li>Displacement transducers (LVDT)</li>
                <li>Humidity transducers</li>
            </ul>
            <h4>5. Based on Output Type</h4>
            <div class="advantages">
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Analog Transducers</h4>
                    <p>Continuous output signal over time.</p>
                    <ul style="color: #2d4a2b;">
                        <li><strong>Examples:</strong> LVDT, thermocouple, strain gauge, thermistor</li>
                        <li>Output is continuous function of time</li>
                    </ul>
                </div>
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Digital Transducers</h4>
                    <p>Discrete output in form of pulses (digital representation).</p>
                    <ul style="color: #2d4a2b;">
                        <li><strong>Examples:</strong> Shaft encoders, digital tachometers, Hall effect sensors, limit switches</li>
                        <li>Output is binary (logic "1" or "0")</li>
                    </ul>
                </div>
            </div>
            <h4>6. Based on Physical Principle</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Principle</th>
                        <th>Examples</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Resistive</strong></td>
                        <td>Change in resistance</td>
                        <td>Potentiometer, strain gauge, thermistor, RTD</td>
                    </tr>
                    <tr>
                        <td><strong>Inductive</strong></td>
                        <td>Change in inductance</td>
                        <td>LVDT, RVDT</td>
                    </tr>
                    <tr>
                        <td><strong>Capacitive</strong></td>
                        <td>Change in capacitance</td>
                        <td>Capacitive displacement sensor</td>
                    </tr>
                    <tr>
                        <td><strong>Piezoelectric</strong></td>
                        <td>Pressure generates voltage</td>
                        <td>Piezo sensors, accelerometers</td>
                    </tr>
                    <tr>
                        <td><strong>Thermoelectric</strong></td>
                        <td>Temperature generates voltage</td>
                        <td>Thermocouples</td>
                    </tr>
                    <tr>
                        <td><strong>Hall Effect</strong></td>
                        <td>Magnetic field generates voltage</td>
                        <td>Hall effect sensors</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="section" id="sensor">
            <h2>3.2 Introduction to Sensors</h2>
            <p>A <span class="highlight">sensor</span> is a device that detects and responds to a specific input (light, temperature, pressure, motion) and converts it into a measurable output signal.</p>
            <div class="key-point">EXAM TIP: Understand the difference between sensors and transducers. Sensor is the detecting element; transducer includes sensor plus signal conditioning circuitry.</div>
            <h3>Sensor vs Transducer</h3>
            <p>A sensor detects a physical phenomenon and produces an output signal proportional to the measured quantity. This output may not be immediately usable (e.g., resistance change in thermistor).</p>
            <p>A transducer often incorporates a sensor as its primary element, plus additional circuitry to convert the sensor's output into a standardized electrical signal. In many cases, the terms are used interchangeably.</p>
            <h3>Working Principles</h3>
            <h4>Resistive Sensors</h4>
            <p>Convert physical quantity into change in resistance.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Potentiometer:</strong> Variable resistor, output voltage proportional to wiper position.</li>
                <li><strong>Strain Gauge:</strong> Resistance changes with mechanical deformation (ΔR/R = GF × ε).</li>
                <li><strong>Thermistor:</strong> Resistance changes with temperature (high sensitivity, non-linear).</li>
                <li><strong>RTD:</strong> Resistance changes with temperature (platinum, highly linear).</li>
            </ul>
            <h4>Capacitive Sensors</h4>
            <p>Convert physical quantity into change in capacitance (C = εA/d).</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Distance Change:</strong> Vary distance between plates (d).</li>
                <li><strong>Area Change:</strong> Vary overlapping area of plates (A).</li>
                <li><strong>Dielectric Change:</strong> Vary dielectric constant (ε) between plates.</li>
            </ul>
            <h4>Piezoelectric Sensors</h4>
            <p>Generate electrical charge when subjected to mechanical stress (active transducer).</p>
            <div class="formula">
                <div class="formula-text">Q = d × F</div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #6b4e2c;">Where Q is charge (Coulombs), d is charge sensitivity (C/N), F is force (Newtons)</p>
            </div>
            <p>The effect is reversible: applying voltage causes dimensional change.</p>
            <h3>Generations of Sensors</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Generation</th>
                        <th>Period</th>
                        <th>Characteristics</th>
                        <th>Examples</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1st Gen</strong></td>
                        <td>Mid-20th C to 1970s</td>
                        <td>Stand-alone, analog output, large size, no intelligence</td>
                        <td>Thermistors, thermocouples, strain gauges</td>
                    </tr>
                    <tr>
                        <td><strong>2nd Gen</strong></td>
                        <td>1980s-2000s</td>
                        <td>Integration, digital output, self-calibration, miniaturization, MEMS</td>
                        <td>MEMS accelerometers, LM35 temperature sensor</td>
                    </tr>
                    <tr>
                        <td><strong>3rd Gen</strong></td>
                        <td>2000s-Present</td>
                        <td>Advanced integration, IoT connectivity, distributed processing, AI at edge</td>
                        <td>Smart home sensors, industrial IoT sensors</td>
                    </tr>
                    <tr>
                        <td><strong>4th Gen</strong></td>
                        <td>Emerging</td>
                        <td>Autonomous operation, self-organization, predictive capabilities, energy harvesting</td>
                        <td>Autonomous robots, smart city infrastructure</td>
                    </tr>
                    <tr>
                        <td><strong>5th Gen</strong></td>
                        <td>Future</td>
                        <td>Quantum sensing, cognitive/self-aware, bio-cybernetic interfaces, ethical by design</td>
                        <td>Quantum gravity sensors, disease-detecting bio-sensors</td>
                    </tr>
                </tbody>
            </table>
            <h3>Numerical Problems</h3>
            <div class="example-box">
                <h4>Problem 1: Potentiometer Displacement</h4>
                <p>A linear resistance potentiometer is 50mm long with 10,000Ω resistance. Slider is normally at center. Find displacement when resistance is (a) 3850Ω (b) 7560Ω. Find resolution if minimum measurable resistance is 10Ω.</p>
                <p><strong>Solution:</strong></p>
                <p>Normal resistance = 10,000/2 = 5,000Ω</p>
                <p>Resistance per mm = 10,000/50 = 200 Ω/mm</p>
                <p>(a) Displacement = (5,000 - 3,850)/200 = 1,150/200 = 5.75mm</p>
                <p>(b) Displacement = (7,560 - 5,000)/200 = 2,560/200 = 12.8mm</p>
                <p>Resolution = 10Ω × (1mm/200Ω) = 0.05mm</p>
            </div>
            <div class="example-box">
                <h4>Problem 2: Capacitive Transducer</h4>
                <p>A capacitive transducer uses two quartz diaphragms (area 750mm²) separated by 3.5mm. Pressure of 900kN/m² produces 0.6mm deflection. Initial capacitance is 370pF. Find capacitance after pressure application.</p>
                <p><strong>Solution:</strong></p>
                <p>C ∝ 1/d, so C₂ = C₁ × (d₁/d₂)</p>
                <p>d₁ = 3.5mm, d₂ = 3.5 - 0.6 = 2.9mm</p>
                <p>C₂ = 370pF × (3.5/2.9) = 446.55pF</p>
            </div>
            <div class="example-box">
                <h4>Problem 3: Piezoelectric Transducer</h4>
                <p>A barium titanate pickup (5mm×5mm×1.25mm) has 5N force applied. Charge sensitivity is 150pC/N, permittivity is 12.5×10⁻⁹F/m, modulus of elasticity is 12×10⁶N/m². Calculate strain, charge, and capacitance.</p>
                <p><strong>Solution:</strong></p>
                <p>Area A = 25×10⁻⁶m²</p>
                <p>Stress = Force/Area = 5N/25×10⁻⁶m² = 0.2×10⁶N/m²</p>
                <p>Strain = Stress/Young's Modulus = 0.2×10⁶/12×10⁶ = 0.0167</p>
                <p>Charge Q = d×F = 150×10⁻¹²C/N × 5N = 750pC</p>
                <p>Voltage sensitivity g = d/ε = 150×10⁻¹²/12.5×10⁻⁹ = 12×10⁻³ V·m/N</p>
                <p>Voltage E₀ = g×t×Stress = 12×10⁻³×1.25×10⁻³×0.2×10⁶ = 3V</p>
                <p>Capacitance Cp = Q/E₀ = 750×10⁻¹²C/3V = 250pF</p>
            </div>
        </section>
        <section class="section" id="types">
            <h2>3.3 Types of Sensors</h2>
            <p>Sensors can be classified based on what they measure and their operating principles.</p>
            <div class="key-point">EXAM TIP: Be familiar with different sensor types, their working principles, and applications. This is important for both theory and practical applications.</div>
            <h3>Electrical Sensors</h3>
            <p>Measure electrical quantities or use electrical principles to measure physical quantities.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Voltage/Current Sensors:</strong> Measure electrical parameters</li>
                <li><strong>Resistance-based Sensors:</strong> RTDs, thermistors, strain gauges</li>
                <li><strong>Capacitance-based Sensors:</strong> Proximity, level, humidity sensors</li>
                <li><strong>Inductance-based Sensors:</strong> LVDTs, proximity sensors</li>
            </ul>
            <h3>Chemical Sensors</h3>
            <p>Detect and measure chemical substances or reactions.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Breathalyzers:</strong> Detect alcohol content in breath</li>
                <li><strong>pH Sensors:</strong> Measure acidity/alkalinity</li>
                <li><strong>Gas Sensors:</strong> Detect specific gases (CO, CO₂, methane)</li>
                <li><strong>Ion-selective Electrodes:</strong> Measure specific ion concentrations</li>
            </ul>
            <h3>Biological Sensors</h3>
            <p>Use biological elements to detect specific biological substances.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Glucose Sensors:</strong> Measure blood glucose levels (diabetes management)</li>
                <li><strong>DNA Sensors:</strong> Detect specific DNA sequences</li>
                <li><strong>Enzyme-based Sensors:</strong> Use enzymes to catalyze reactions for detection</li>
                <li><strong>Immunosensors:</strong> Use antibodies to detect antigens</li>
            </ul>
            <h3>Acoustic Sensors</h3>
            <p>Detect and measure sound waves or vibrations.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Microphones:</strong> Convert sound waves to electrical signals</li>
                <li><strong>Ultrasonic Sensors:</strong> Use high-frequency sound for distance measurement, object detection</li>
                <li><strong>Hydrophones:</strong> Underwater sound detection</li>
                <li><strong>Vibration Sensors:</strong> Detect mechanical vibrations</li>
            </ul>
            <h3>Optical Sensors</h3>
            <p>Use light to detect and measure physical quantities.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Photodiodes/Phototransistors:</strong> Detect light intensity</li>
                <li><strong>Fiber Optic Sensors:</strong> Use light transmission through fibers for various measurements</li>
                <li><strong>IR Sensors:</strong> Detect infrared radiation (temperature, proximity)</li>
                <li><strong>Image Sensors:</strong> CCD/CMOS sensors in cameras</li>
            </ul>
            <h3>Motion Sensors</h3>
            <p>Detect movement or position changes.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>PIR (Passive Infrared) Sensors:</strong> Detect motion via infrared radiation changes</li>
                <li><strong>Accelerometers:</strong> Measure acceleration forces</li>
                <li><strong>Gyroscopes:</strong> Measure angular velocity</li>
                <li><strong>Video Motion Sensors:</strong> Use camera and image processing to detect motion</li>
                <li><strong>Encoders:</strong> Measure position/speed of rotating shafts</li>
            </ul>
            <h3>Sensor Characteristics</h3>
            <h4>Static Characteristics</h4>
            <p>Describe sensor performance under steady-state conditions:</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Sensitivity:</strong> Ratio of output change to input change</li>
                <li><strong>Linearity:</strong> How closely output follows straight line vs. input</li>
                <li><strong>Accuracy:</strong> Closeness to true value</li>
                <li><strong>Precision:</strong> Repeatability of measurements</li>
                <li><strong>Resolution:</strong> Smallest detectable change in input</li>
                <li><strong>Range/Span:</strong> Min/max values sensor can measure</li>
                <li><strong>Threshold:</strong> Minimum input to produce detectable output</li>
                <li><strong>Drift:</strong> Change in output over time with constant input</li>
                <li><strong>Stability:</strong> Ability to maintain performance over time</li>
                <li><strong>Repeatability:</strong> Same output for same input under same conditions</li>
            </ul>
            <h4>Dynamic Characteristics</h4>
            <p>Describe sensor performance with time-varying inputs:</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Dynamic Error:</strong> Difference between true value and indicated value for time-varying input</li>
                <li><strong>Fidelity:</strong> Ability to reproduce input changes without distortion</li>
                <li><strong>Speed of Response:</strong> Time to reach steady-state after input change</li>
                <li><strong>Bandwidth:</strong> Frequency range where sensitivity is within acceptable limits</li>
                <li><strong>Time Constant:</strong> Time to reach 63.2% of final value after step input</li>
            </ul>
        </section>
        <section class="section" id="actuator">
            <h2>3.4 Introduction to Actuators</h2>
            <p>An <span class="highlight">actuator</span> is a device that converts energy (hydraulic, pneumatic, electrical) into mechanical motion to perform work.</p>
            <div class="key-point">EXAM TIP: Understand the difference between sensors (input devices) and actuators (output devices). Actuators are inverse transducers.</div>
            <h3>Difference Between Sensor and Actuator</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Aspect</th>
                        <th>Sensor</th>
                        <th>Actuator</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Function</strong></td>
                        <td>Detects physical changes</td>
                        <td>Creates physical movement</td>
                    </tr>
                    <tr>
                        <td><strong>Direction</strong></td>
                        <td>Input device (to system)</td>
                        <td>Output device (from system)</td>
                    </tr>
                    <tr>
                        <td><strong>Energy Conversion</strong></td>
                        <td>Physical → Electrical</td>
                        <td>Electrical/Hydraulic/Pneumatic → Mechanical</td>
                    </tr>
                    <tr>
                        <td><strong>Examples</strong></td>
                        <td>Temperature sensor, pressure sensor</td>
                        <td>Motor, solenoid, hydraulic cylinder</td>
                    </tr>
                </tbody>
            </table>
            <h3>Types of Actuators</h3>
            <h4>1. Hydraulic Actuators</h4>
            <p>Convert hydraulic energy (pressurized fluid) into mechanical motion.</p>
            <div class="advantages">
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Advantages</h4>
                    <ul style="color: #2d4a2b;">
                        <li>Generate extremely large forces</li>
                        <li>Precise control at low speeds</li>
                        <li>Robust and self-lubricating</li>
                        <li>High efficiency and power-to-size ratio</li>
                    </ul>
                </div>
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Disadvantages</h4>
                    <ul style="color: #2d4a2b;">
                        <li>Requires large infrastructure (pumps, tanks, lines)</li>
                        <li>Leakage can cause performance loss</li>
                        <li>High maintenance</li>
                        <li>Not suitable for clean environments</li>
                    </ul>
                </div>
            </div>
            <h4>2. Pneumatic Actuators</h4>
            <p>Convert pneumatic energy (compressed air) into mechanical motion.</p>
            <div class="advantages">
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Advantages</h4>
                    <ul style="color: #2d4a2b;">
                        <li>Low cost</li>
                        <li>Safe at extreme temperatures</li>
                        <li>Low maintenance, durable, long life</li>
                        <li>Quick start/stop motion</li>
                    </ul>
                </div>
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Disadvantages</h4>
                    <ul style="color: #2d4a2b;">
                        <li>Loss of pressure reduces efficiency</li>
                        <li>Compressor must run continuously</li>
                        <li>Air can be polluted, requires maintenance</li>
                    </ul>
                </div>
            </div>
            <h4>3. Electrical Actuators</h4>
            <p>Convert electrical energy into mechanical motion (most common type).</p>
            <div class="advantages">
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Advantages</h4>
                    <ul style="color: #2d4a2b;">
                        <li>Wide range of applications</li>
                        <li>Low noise, no fluid leaks (safe)</li>
                        <li>Re-programmable, high precision positioning</li>
                        <li>Easy to control and interface with electronics</li>
                    </ul>
                </div>
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Disadvantages</h4>
                    <ul style="color: #2d4a2b;">
                        <li>Can be expensive</li>
                        <li>Performance depends on environmental conditions</li>
                        <li>May require complex control circuitry</li>
                    </ul>
                </div>
            </div>
            <p><strong>Components:</strong> Drive system (DC/AC/stepper motors), switching devices (relays, transistors)</p>
            <h4>4. Mechanical Actuators</h4>
            <p>Convert rotary motion into linear motion using mechanical components.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Examples:</strong> Crankshafts, pulleys, chains, gears, rails</li>
                <li><strong>Applications:</strong> Simple mechanisms, manual controls</li>
                <li><strong>Emerging Types:</strong> Soft actuators, shape memory polymers, light-activated polymers</li>
            </ul>
            <h3>Characteristics of Actuators</h3>
            <ol style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Accuracy:</strong> Ability to reach exact commanded position, speed, or force</li>
                <li><strong>Repeatability:</strong> Ability to return to same position/output with same command</li>
                <li><strong>Speed (Response Time):</strong> Time to respond to input signal</li>
                <li><strong>Force/Torque Output:</strong> Mechanical power generated (force for linear, torque for rotary)</li>
                <li><strong>Range of Motion:</strong> Maximum linear distance or angular displacement</li>
                <li><strong>Control Capability:</strong> Ease of control (PWM, voltage, digital input), open/closed loop</li>
                <li><strong>Power Consumption:</strong> Amount of input energy required</li>
                <li><strong>Efficiency:</strong> Ratio of useful mechanical output to total energy input</li>
                <li><strong>Reliability & Durability:</strong> Performance over time without failure</li>
                <li><strong>Environmental Tolerance:</strong> Performance under various temperature, humidity, dust conditions</li>
            </ol>
            <div class="exam-tip">
                <h4>Exam Focus:</h4>
                <p>Be prepared to compare different types of actuators and explain their applications. Understand the characteristics that make one actuator more suitable than another for specific applications.</p>
            </div>
        </section>
        <script>
            function scrollToSection(id) {
                const element = document.getElementById(id);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' });
                }
            }
        </script>
    </div>
</body>
</html>
</div>


<==============chapter4 start============>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 4: Interfacing of Instrumentation System - Exam Summary</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.8;
            color: #2d4a2b;
            background: linear-gradient(135deg, #f9fbe7 0%, #f0f4c3 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }
        .header {
            text-align: center;
            padding: 40px 0;
            background: linear-gradient(135deg, #4a7c59 0%, #6b8e23 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="80" r="3" fill="rgba(255,255,255,0.1)"/></svg>');
        }
        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }
        .header .subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            font-weight: 300;
            position: relative;
            z-index: 1;
        }
        .toc {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border: 2px solid #d4a574;
            border-radius: 15px;
            padding: 30px;
            margin: 30px;
            box-shadow: 0 5px 15px rgba(212, 165, 116, 0.2);
        }
        .toc h2 {
            color: #8b4513;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-align: center;
        }
        .toc ul {
            list-style: none;
            color: #6b4e2c;
        }
        .toc li {
            margin: 8px 0;
            padding: 8px 15px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 8px;
            border-left: 4px solid #6b8e23;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .toc li:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateX(5px);
        }
        .section {
            margin: 40px 30px;
            padding: 30px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: 15px;
            border: 1px solid #e9ecef;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        .section h2 {
            color: #4a7c59;
            font-size: 2rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #6b8e23;
        }
        .section h3 {
            color: #2d4a2b;
            font-size: 1.5rem;
            margin: 25px 0 15px 0;
            padding: 10px 15px;
            background: linear-gradient(135deg, #e8f5e8 0%, #d4f4dd 100%);
            border-radius: 8px;
            border-left: 4px solid #6b8e23;
        }
        .section h4 {
            color: #4a7c59;
            font-size: 1.3rem;
            margin: 20px 0 10px 0;
        }
        .section p {
            margin: 15px 0;
            text-align: justify;
            font-size: 1.1rem;
        }
        .diagram {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 2px solid #6b8e23;
            border-radius: 12px;
            padding: 20px;
            margin: 25px 0;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .diagram-title {
            color: #4a7c59;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .circuit-diagram {
            width: 100%;
            height: 200px;
            background: white;
            border-radius: 8px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #666;
            position: relative;
            margin: 15px 0;
        }
        .formula {
            background: linear-gradient(135deg, #fff9e6 0%, #ffecb3 100%);
            border: 2px solid #d4a574;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        .formula-text {
            font-size: 1.3rem;
            font-weight: bold;
            color: #8b4513;
            font-family: 'Courier New', monospace;
        }
        .example-box {
            background: linear-gradient(135deg, #e8f5e8 0%, #d4f4dd 100%);
            border: 2px solid #4a7c59;
            border-radius: 12px;
            padding: 25px;
            margin: 25px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
        .example-box h4 {
            color: #2d4a2b;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background: linear-gradient(135deg, #4a7c59 0%, #6b8e23 100%);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: bold;
        }
        .table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e9ecef;
        }
        .table tr:nth-child(even) {
            background: #f8f9fa;
        }
        .table tr:hover {
            background: #e8f5e8;
            transition: all 0.3s ease;
        }
        .highlight {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            padding: 3px 8px;
            border-radius: 4px;
            color: #8b4513;
            font-weight: bold;
        }
        .note {
            background: linear-gradient(135deg, #cce5ff 0%, #b3d9ff 100%);
            border: 2px solid #6699cc;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border-left: 5px solid #0066cc;
        }
        .note h4 {
            color: #003366;
            margin-bottom: 10px;
        }
        .exam-tip {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border: 2px solid #d4a574;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border-left: 5px solid #8b4513;
        }
        .exam-tip h4 {
            color: #8b4513;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .key-point {
            background: linear-gradient(135deg, #d4f4dd 0%, #b8e6c1 100%);
            border: 2px solid #4a7c59;
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
            font-weight: bold;
            color: #2d4a2b;
        }
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 15px;
            }
            .header h1 {
                font-size: 2rem;
            }
            .section {
                padding: 20px;
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Chapter 4: Interfacing of Instrumentation System</h1>
            <p class="subtitle">Exam-Focused Summary for Students</p>
        </header>
        <div class="toc">
            <h2>Table of Contents</h2>
            <ul>
                <li onclick="scrollToSection('communication')">4.1 Communication Channels & Parallel Data Transfer</li>
                <li onclick="scrollToSection('8255')">4.2 Programmable Peripheral Interface (8255)</li>
                <li onclick="scrollToSection('adc-dac')">4.3 ADC and DAC Interfacing</li>
                <li onclick="scrollToSection('atmega328p')">4.4 ATmega328P Microcontroller</li>
                <li onclick="scrollToSection('stm32')">4.5 STM32 Microcontroller</li>
            </ul>
        </div>
        <section class="section" id="communication">
            <h2>4.1 Communication Channels & Parallel Data Transfer</h2>
            <p>Communication channels enable data transfer between microprocessors and peripherals. Understanding different communication modes is essential for effective system design.</p>
            <div class="key-point">EXAM TIP: Know the differences between simplex, half-duplex, and full-duplex communication. Understand parallel vs serial communication advantages.</div>
            <h3>Types of Communication Channels</h3>
            <div class="advantages">
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Simplex</h4>
                    <p>Data flows in one direction only.</p>
                    <ul style="color: #2d4a2b;">
                        <li><strong>Example:</strong> Radio broadcast, TV transmission</li>
                        <li>Transmitter → Receiver (one way)</li>
                    </ul>
                </div>
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Half-Duplex</h4>
                    <p>Data flows in both directions, but not simultaneously.</p>
                    <ul style="color: #2d4a2b;">
                        <li><strong>Example:</strong> Walkie-talkies</li>
                        <li>Transmitter ↔ Receiver (alternating)</li>
                    </ul>
                </div>
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Full-Duplex</h4>
                    <p>Data flows in both directions simultaneously.</p>
                    <ul style="color: #2d4a2b;">
                        <li><strong>Example:</strong> Telephone conversation</li>
                        <li>Transmitter ↔ Receiver (simultaneous)</li>
                    </ul>
                </div>
            </div>
            <h3>Parallel Communication</h3>
            <p>Parallel communication transfers multiple bits simultaneously over multiple wires. It's faster than serial communication but requires more physical connections.</p>
            <div class="note">
                <h4>Advantages of Parallel Communication:</h4>
                <ul style="color: #003366; margin-left: 20px;">
                    <li>High data transfer rates</li>
                    <li>Suitable for short-distance communication</li>
                    <li>Ideal for high-speed devices like printers</li>
                </ul>
            </div>
            <h3>Methods of Parallel Data Transfer</h3>
            <h4>1. Simple I/O</h4>
            <p>Direct connection between microprocessor and peripheral without handshaking.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Input Example:</strong> Connect switch to I/O port line and read port</li>
                <li><strong>Output Example:</strong> Connect LED to output port pin and output logical level</li>
            </ul>
            <h4>2. Simple Strobe I/O</h4>
            <p>Uses a strobe signal to indicate when valid data is present.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Example:</strong> Keyboard sends ASCII code with strobe signal</li>
                <li>Microprocessor waits until device is ready (simple wait I/O)</li>
            </ul>
            <h4>3. Single Handshake</h4>
            <p>Peripheral sends data with STB signal, microprocessor reads data and sends ACK signal.</p>
            <div class="diagram">
                <div class="diagram-title">Single Handshake Data Transfer</div>
                <div class="circuit-diagram">
                    <svg width="600" height="200" viewBox="0 0 600 200">
                        <!-- Peripheral -->
                        <rect x="50" y="60" width="120" height="60" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="110" y="90" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">Peripheral</text>
                        <!-- Microprocessor -->
                        <rect x="430" y="60" width="120" height="60" fill="#cce5ff" stroke="#6699cc" stroke-width="2" rx="8"/>
                        <text x="490" y="90" text-anchor="middle" fill="#003366" font-size="12" font-weight="bold">Microprocessor</text>
                        <!-- Data lines -->
                        <line x1="170" y1="75" x2="430" y2="75" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="170" y1="85" x2="430" y2="85" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="170" y1="95" x2="430" y2="95" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="170" y1="105" x2="430" y2="105" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="300" y="65" text-anchor="middle" fill="#2d4a2b" font-size="10">Data Lines (8 bits)</text>
                        <!-- STB line -->
                        <line x1="170" y1="130" x2="430" y2="130" stroke="#cc3333" stroke-width="2"/>
                        <text x="300" y="120" text-anchor="middle" fill="#cc3333" font-size="12" font-weight="bold">STB (Strobe)</text>
                        <!-- ACK line -->
                        <line x1="170" y1="150" x2="430" y2="150" stroke="#d4a574" stroke-width="2"/>
                        <text x="300" y="165" text-anchor="middle" fill="#d4a574" font-size="12" font-weight="bold">ACK (Acknowledge)</text>
                        <!-- Arrows -->
                        <path d="M300 130 L320 130" stroke="#cc3333" stroke-width="2" marker-end="url(#arrowhead)"/>
                        <path d="M280 150 L300 150" stroke="#d4a574" stroke-width="2" marker-end="url(#arrowhead)"/>
                        <defs>
                            <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="9" refY="3.5" orient="auto">
                                <polygon points="0 0, 10 3.5, 0 7" fill="#cc3333"/>
                            </marker>
                        </defs>
                    </svg>
                </div>
            </div>
            <h4>4. Double Handshake</h4>
            <p>More sophisticated coordination between sending and receiving systems.</p>
            <ol style="margin-left: 30px; color: #2d4a2b;">
                <li>Peripheral asserts STB low to ask if microprocessor is ready</li>
                <li>Microprocessor raises ACK high to indicate readiness</li>
                <li>Peripheral sends data and raises STB high</li>
                <li>Microprocessor reads data and drops ACK low</li>
            </ol>
        </section>
        <section class="section" id="8255">
            <h2>4.2 Programmable Peripheral Interface (8255)</h2>
            <p>The 8255A is a versatile programmable peripheral interface chip designed for use with 8085 and 8086 microprocessors. It provides 24 I/O lines that can be configured as needed.</p>
            <div class="key-point">EXAM TIP: Understand the 8255 architecture, control word format, and different operating modes. Be prepared to write control words and simple programs.</div>
            <h3>8255 Architecture</h3>
            <p>The 8255 has three 8-bit ports (Port A, Port B, Port C) that can be configured for input or output operations.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Port A (PA0-PA7):</strong> 8-bit bidirectional I/O port</li>
                <li><strong>Port B (PB0-PB7):</strong> 8-bit bidirectional I/O port</li>
                <li><strong>Port C (PC0-PC7):</strong> 8-bit bidirectional I/O port, can be split into two 4-bit ports (PC0-PC3 and PC4-PC7)</li>
            </ul>
            <h3>Operating Modes</h3>
            <h4>Mode 0: Simple I/O Mode</h4>
            <p>Basic input/output operation without handshaking.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li>Any port can be input or output</li>
                <li>Outputs are latched, inputs are not latched</li>
                <li>16 different I/O configurations possible</li>
            </ul>
            <h4>Mode 1: Strobed I/O Mode</h4>
            <p>Handshake or strobed I/O with handshaking signals.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li>Port A and Port B use lines from Port C for handshaking</li>
                <li>Both inputs and outputs are latched</li>
                <li>Supports interrupt generation</li>
            </ul>
            <h4>Mode 2: Bidirectional I/O Mode</h4>
            <p>Bidirectional bus I/O with handshaking signals (Port A only).</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li>Used in Group A only</li>
                <li>Port A is 8-bit bidirectional, Port C (PC3-PC7) is 5-bit control port</li>
                <li>Supports interrupt generation and enable/disable functions</li>
            </ul>
            <h3>Control Word Format</h3>
            <div class="diagram">
                <div class="diagram-title">8255 Control Word Format</div>
                <div class="circuit-diagram">
                    <svg width="600" height="250" viewBox="0 0 600 250">
                        <!-- Control word bits -->
                        <rect x="50" y="80" width="500" height="40" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                        <!-- Bit divisions -->
                        <line x1="550" y1="80" x2="550" y2="120" stroke="#d4a574" stroke-width="2"/>
                        <line x1="500" y1="80" x2="500" y2="120" stroke="#d4a574" stroke-width="2"/>
                        <line x1="450" y1="80" x2="450" y2="120" stroke="#d4a574" stroke-width="2"/>
                        <line x1="400" y1="80" x2="400" y2="120" stroke="#d4a574" stroke-width="2"/>
                        <line x1="350" y1="80" x2="350" y2="120" stroke="#d4a574" stroke-width="2"/>
                        <line x1="300" y1="80" x2="300" y2="120" stroke="#d4a574" stroke-width="2"/>
                        <line x1="250" y1="80" x2="250" y2="120" stroke="#d4a574" stroke-width="2"/>
                        <line x1="200" y1="80" x2="200" y2="120" stroke="#d4a574" stroke-width="2"/>
                        <line x1="150" y1="80" x2="150" y2="120" stroke="#d4a574" stroke-width="2"/>
                        <line x1="100" y1="80" x2="100" y2="120" stroke="#d4a574" stroke-width="2"/>
                        <!-- Bit numbers -->
                        <text x="75" y="70" text-anchor="middle" fill="#d4a574" font-size="12">D7</text>
                        <text x="125" y="70" text-anchor="middle" fill="#d4a574" font-size="12">D6</text>
                        <text x="175" y="70" text-anchor="middle" fill="#d4a574" font-size="12">D5</text>
                        <text x="225" y="70" text-anchor="middle" fill="#d4a574" font-size="12">D4</text>
                        <text x="275" y="70" text-anchor="middle" fill="#d4a574" font-size="12">D3</text>
                        <text x="325" y="70" text-anchor="middle" fill="#d4a574" font-size="12">D2</text>
                        <text x="375" y="70" text-anchor="middle" fill="#d4a574" font-size="12">D1</text>
                        <text x="425" y="70" text-anchor="middle" fill="#d4a574" font-size="12">D0</text>
                        <!-- Bit descriptions -->
                        <text x="75" y="140" text-anchor="middle" fill="#8b4513" font-size="10">Mode Set<br>Flag<br>(1=I/O)</text>
                        <text x="150" y="140" text-anchor="middle" fill="#8b4513" font-size="10">Group A<br>Mode<br>Selection</text>
                        <text x="225" y="140" text-anchor="middle" fill="#8b4513" font-size="10">Port A<br>1=Input<br>0=Output</text>
                        <text x="275" y="140" text-anchor="middle" fill="#8b4513" font-size="10">Port C<br>Upper<br>1=Input<br>0=Output</text>
                        <text x="325" y="140" text-anchor="middle" fill="#8b4513" font-size="10">Group B<br>Mode<br>Selection</text>
                        <text x="375" y="140" text-anchor="middle" fill="#8b4513" font-size="10">Port B<br>1=Input<br>0=Output</text>
                        <text x="425" y="140" text-anchor="middle" fill="#8b4513" font-size="10">Port C<br>Lower<br>1=Input<br>0=Output</text>
                        <!-- Mode selection details -->
                        <text x="150" y="170" text-anchor="middle" fill="#2d4a2b" font-size="9">00=Mode 0<br>01=Mode 1<br>1x=Mode 2</text>
                        <text x="325" y="170" text-anchor="middle" fill="#2d4a2b" font-size="9">0=Mode 0<br>1=Mode 1</text>
                    </svg>
                </div>
            </div>
            <h3>Bit Set/Reset (BSR) Mode</h3>
            <p>BSR mode allows individual bits of Port C to be set or reset independently.</p>
            <div class="formula">
                <div class="formula-text">D7 = 0 for BSR mode</div>
            </div>
            <div class="example-box">
                <h4>Example: BSR Control Word</h4>
                <p>To set PC7 and reset PC3:</p>
                <ul style="color: #2d4a2b;">
                    <li><strong>Set PC7:</strong> D7=0, D3-D1=111 (select bit 7), D0=1 (set) → Control word = 0FH</li>
                    <li><strong>Reset PC3:</strong> D7=0, D3-D1=011 (select bit 3), D0=0 (reset) → Control word = 06H</li>
                </ul>
            </div>
            <h3>Programming Examples</h3>
            <div class="example-box">
                <h4>Example 1: Mode 0 Configuration</h4>
                <p>Configure Port A as input and Port B as output.</p>
                <p><strong>Control Word:</strong> 90H (10010000 in binary)</p>
                <p><strong>Assembly Code:</strong></p>
                <pre style="background: #f8f9fa; padding: 15px; border-radius: 8px; font-family: monospace; font-size: 14px;">
MVI A, 90H    ; Load control word
OUT 63H       ; Write to control register
IN 60H        ; Read from Port A
OUT 61H       ; Write to Port B
RET
                </pre>
            </div>
            <div class="example-box">
                <h4>Example 2: Mode 1 Configuration</h4>
                <p>Set up Port A as input and Port B as output in Mode 1.</p>
                <p><strong>Control Word:</strong> B4H (10110100 in binary)</p>
                <p><strong>BSR Word to enable INTEA:</strong> 09H (set PC4)</p>
                <p><strong>Assembly Code:</strong></p>
                <pre style="background: #f8f9fa; padding: 15px; border-radius: 8px; font-family: monospace; font-size: 14px;">
MVI A, B4H    ; Initialize control word
OUT FFH       ; Write to control register
MVI A, 09H    ; Set INTEA (PC4)
OUT FFH       ; Write BSR word
EI            ; Enable interrupts
                </pre>
            </div>
        </section>
        <section class="section" id="adc-dac">
            <h2>4.3 ADC and DAC Interfacing</h2>
            <p>Analog-to-Digital Converters (ADC) and Digital-to-Analog Converters (DAC) are essential for interfacing analog sensors and actuators with digital microprocessors.</p>
            <div class="key-point">EXAM TIP: Understand ADC and DAC parameters, interfacing methods, and be able to calculate resolution and output values.</div>
            <h3>Analog-to-Digital Converter (ADC)</h3>
            <p>ADC converts analog signals (voltage, current) into digital values that can be processed by microprocessors.</p>
            <h4>ADC Parameters</h4>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Resolution:</strong> Smallest change in analog input that can be detected</li>
                <li><strong>Conversion Time:</strong> Time required to convert analog signal to digital output</li>
                <li><strong>Accuracy:</strong> Difference between actual output and expected output</li>
                <li><strong>Linearity:</strong> How well output is linear function of input</li>
            </ul>
            <div class="formula">
                <div class="formula-text">Resolution = Full Scale Range / 2<sup>n</sup></div>
                <p style="margin-top: 10px; font-size: 0.9rem; color: #6b4e2c;">Where n is number of bits</p>
            </div>
            <h4>ADC Interfacing Methods</h4>
            <div class="advantages">
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Status Check Method</h4>
                    <p>Microprocessor polls ADC status line to check if conversion is complete.</p>
                    <ul style="color: #2d4a2b;">
                        <li>Simple implementation</li>
                        <li>Uses one output port for START signal</li>
                        <li>Uses one input port to check DR (Data Ready) line</li>
                    </ul>
                </div>
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Interrupt Method</h4>
                    <p>ADC generates interrupt when conversion is complete.</p>
                    <ul style="color: #2d4a2b;">
                        <li>More efficient for microprocessor</li>
                        <li>Microprocessor can perform other tasks while waiting</li>
                        <li>Requires interrupt handling capability</li>
                    </ul>
                </div>
            </div>
            <div class="example-box">
                <h4>Example: 8-bit ADC Interfacing</h4>
                <p>Interface an 8-bit ADC with 0-5V range. Calculate digital output for 3V input.</p>
                <p><strong>Solution:</strong></p>
                <p>Resolution = 5V / 256 = 0.01953V per step</p>
                <p>Digital output for 3V = 3V / 0.01953V ≈ 153 (decimal) = 99H (hexadecimal)</p>
            </div>
            <h3>Digital-to-Analog Converter (DAC)</h3>
            <p>DAC converts digital values into analog signals (voltage, current) for controlling analog devices.</p>
            <h4>DAC Parameters</h4>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Resolution:</strong> Determined by number of bits in input binary word</li>
                <li><strong>Full Scale Output:</strong> Maximum output voltage (always 1 LSB less than named value)</li>
                <li><strong>Accuracy:</strong> Difference between actual and expected output voltage</li>
                <li><strong>Linearity:</strong> Output should be linear function of input code</li>
                <li><strong>Settling Time:</strong> Time for output to stabilize after input change</li>
            </ul>
            <h4>DAC Types</h4>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Current Output:</strong> Fastest type, output is current proportional to digital input</li>
                <li><strong>Voltage Output:</strong> Slower due to current-to-voltage conversion delay</li>
                <li><strong>Multiplying Type:</strong> Reference voltage can be varied, useful for gain control</li>
            </ul>
            <div class="example-box">
                <h4>Example: DAC Output Calculation</h4>
                <p>A 8-bit DAC is calibrated for 0-10V range. Calculate output voltage for input 10000000₂ (128 decimal).</p>
                <p><strong>Solution:</strong></p>
                <p>Resolution = 10V / 256 = 0.03906V per step</p>
                <p>Output voltage = 128 × 0.03906V = 5V</p>
                <p><strong>For maximum input (11111111₂ = 255 decimal):</strong></p>
                <p>Output voltage = 255 × 0.03906V = 9.961V (1 LSB less than 10V)</p>
            </div>
            <h4>Interfacing 10-bit DAC with 8-bit Microprocessor</h4>
            <p>Since microprocessors typically have 8-bit data buses, interfacing higher resolution DACs requires special techniques.</p>
            <div class="diagram">
                <div class="diagram-title">Interfacing 10-bit DAC with 8085</div>
                <div class="circuit-diagram">
                    <svg width="600" height="300" viewBox="0 0 600 300">
                        <!-- Microprocessor -->
                        <rect x="50" y="100" width="120" height="80" fill="#cce5ff" stroke="#6699cc" stroke-width="2" rx="8"/>
                        <text x="110" y="130" text-anchor="middle" fill="#003366" font-size="12" font-weight="bold">8085</text>
                        <text x="110" y="150" text-anchor="middle" fill="#003366" font-size="10">Microprocessor</text>
                        <!-- Address Decoder -->
                        <rect x="200" y="80" width="100" height="40" fill="#fff3cd" stroke="#d4a574" stroke-width="2" rx="5"/>
                        <text x="250" y="105" text-anchor="middle" fill="#8b4513" font-size="10">Address</text>
                        <text x="250" y="120" text-anchor="middle" fill="#8b4513" font-size="10">Decoder</text>
                        <!-- Latches -->
                        <rect x="200" y="140" width="100" height="40" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2" rx="5"/>
                        <text x="250" y="165" text-anchor="middle" fill="#2d4a2b" font-size="10">Latch for</text>
                        <text x="250" y="180" text-anchor="middle" fill="#2d4a2b" font-size="10">Lower 8 bits</text>
                        <rect x="200" y="200" width="100" height="40" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2" rx="5"/>
                        <text x="250" y="225" text-anchor="middle" fill="#2d4a2b" font-size="10">Latch for</text>
                        <text x="250" y="240" text-anchor="middle" fill="#2d4a2b" font-size="10">Upper 2 bits</text>
                        <!-- DAC -->
                        <rect x="350" y="120" width="120" height="60" fill="#fff9e6" stroke="#d4a574" stroke-width="2" rx="8"/>
                        <text x="410" y="145" text-anchor="middle" fill="#8b4513" font-size="12" font-weight="bold">10-bit DAC</text>
                        <text x="410" y="165" text-anchor="middle" fill="#8b4513" font-size="10">AD7522</text>
                        <!-- Connections -->
                        <line x1="170" y1="120" x2="200" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="170" y1="140" x2="200" y2="160" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="170" y1="160" x2="200" y2="220" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="300" y1="100" x2="350" y2="130" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="300" y1="160" x2="350" y2="150" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="300" y1="220" x2="350" y2="170" stroke="#2d4a2b" stroke-width="2"/>
                        <!-- Control lines -->
                        <line x1="110" y1="180" x2="110" y2="220" stroke="#cc3333" stroke-width="2"/>
                        <line x1="110" y1="220" x2="250" y2="220" stroke="#cc3333" stroke-width="2"/>
                        <text x="180" y="210" text-anchor="middle" fill="#cc3333" font-size="10">Control Lines</text>
                        <line x1="250" y1="220" x2="250" y2="240" stroke="#cc3333" stroke-width="2"/>
                        <line x1="250" y1="240" x2="350" y2="240" stroke="#cc3333" stroke-width="2"/>
                        <line x1="350" y1="240" x2="350" y2="180" stroke="#cc3333" stroke-width="2"/>
                        <text x="300" y="255" text-anchor="middle" fill="#cc3333" font-size="10">LDAC</text>
                    </svg>
                </div>
            </div>
            <div class="example-box">
                <h4>Example: Loading 10-bit Value into DAC</h4>
                <p>Load maximum input (all 10 bits = 1) into DAC using assembly code.</p>
                <pre style="background: #f8f9fa; padding: 15px; border-radius: 8px; font-family: monospace; font-size: 14px;">
LXI B, 03FFH  ; Load 10-bit value (all 1's) in BC register
LXI H, 8000H  ; Load address for lower 8 bits
MOV M, C      ; Load lower 8 bits (D7-D0) into DAC
INX H         ; Point to address for upper 2 bits
MOV M, B      ; Load upper 2 bits (D9-D8) and trigger conversion
HLT
                </pre>
            </div>
        </section>
        <section class="section" id="atmega328p">
            <h2>4.4 ATmega328P Microcontroller</h2>
            <p>The ATmega328P is a low-power CMOS 8-bit microcontroller based on the AVR enhanced RISC architecture, commonly used in Arduino boards.</p>
            <div class="key-point">EXAM TIP: Understand the ATmega328P architecture, features, and pin configuration. Know how to interface sensors and actuators with Arduino.</div>
            <h3>ATmega328P Features</h3>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Architecture:</strong> Harvard architecture (separate program and data memory)</li>
                <li><strong>Memory:</strong> 32KB Flash, 2KB SRAM, 1KB EEPROM</li>
                <li><strong>Clock Speed:</strong> Up to 16MHz</li>
                <li><strong>Throughput:</strong> 1 MIPS per MHz</li>
                <li><strong>I/O Pins:</strong> 23 programmable I/O lines</li>
                <li><strong>Timers:</strong> Two 8-bit, one 16-bit timer/counter</li>
                <li><strong>PWM:</strong> 6 PWM channels</li>
                <li><strong>ADC:</strong> 6-channel 10-bit ADC</li>
                <li><strong>Communication:</strong> USART, SPI, I2C interfaces</li>
                <li><strong>Operating Voltage:</strong> 2.7V to 5.5V</li>
            </ul>
            <h3>ATmega328P Architecture</h3>
            <div class="diagram">
                <div class="diagram-title">ATmega328P Block Diagram</div>
                <div class="circuit-diagram">
                    <svg width="600" height="400" viewBox="0 0 600 400">
                        <!-- CPU Core -->
                        <rect x="250" y="50" width="100" height="60" fill="#cce5ff" stroke="#6699cc" stroke-width="2" rx="8"/>
                        <text x="300" y="75" text-anchor="middle" fill="#003366" font-size="12" font-weight="bold">AVR CPU</text>
                        <text x="300" y="95" text-anchor="middle" fill="#003366" font-size="10">Core</text>
                        <!-- Program Memory -->
                        <rect x="100" y="150" width="120" height="60" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="160" y="175" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">Program</text>
                        <text x="160" y="195" text-anchor="middle" fill="#2d4a2b" font-size="10">Memory (32KB)</text>
                        <!-- Data Memory -->
                        <rect x="380" y="150" width="120" height="60" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="440" y="175" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">Data</text>
                        <text x="440" y="195" text-anchor="middle" fill="#2d4a2b" font-size="10">Memory (2KB)</text>
                        <!-- EEPROM -->
                        <rect x="250" y="150" width="80" height="60" fill="#fff3cd" stroke="#d4a574" stroke-width="2" rx="8"/>
                        <text x="290" y="175" text-anchor="middle" fill="#8b4513" font-size="12" font-weight="bold">EEPROM</text>
                        <text x="290" y="195" text-anchor="middle" fill="#8b4513" font-size="10">(1KB)</text>
                        <!-- I/O Ports -->
                        <rect x="50" y="250" width="100" height="60" fill="#fff9e6" stroke="#d4a574" stroke-width="2" rx="8"/>
                        <text x="100" y="275" text-anchor="middle" fill="#8b4513" font-size="12" font-weight="bold">Port B</text>
                        <text x="100" y="295" text-anchor="middle" fill="#8b4513" font-size="10">(Digital I/O)</text>
                        <rect x="180" y="250" width="100" height="60" fill="#fff9e6" stroke="#d4a574" stroke-width="2" rx="8"/>
                        <text x="230" y="275" text-anchor="middle" fill="#8b4513" font-size="12" font-weight="bold">Port C</text>
                        <text x="230" y="295" text-anchor="middle" fill="#8b4513" font-size="10">(ADC + I/O)</text>
                        <rect x="310" y="250" width="100" height="60" fill="#fff9e6" stroke="#d4a574" stroke-width="2" rx="8"/>
                        <text x="360" y="275" text-anchor="middle" fill="#8b4513" font-size="12" font-weight="bold">Port D</text>
                        <text x="360" y="295" text-anchor="middle" fill="#8b4513" font-size="10">(Digital I/O)</text>
                        <!-- Peripherals -->
                        <rect x="440" y="250" width="110" height="60" fill="#d4f4dd" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="495" y="275" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">Peripherals</text>
                        <text x="495" y="295" text-anchor="middle" fill="#2d4a2b" font-size="10">Timers, USART, SPI</text>
                        <!-- Connections -->
                        <line x1="300" y1="110" x2="300" y2="150" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="160" y1="150" x2="300" y2="110" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="440" y1="150" x2="300" y2="110" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="100" y1="250" x2="300" y2="110" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="230" y1="250" x2="300" y2="110" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="360" y1="250" x2="300" y2="110" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="495" y1="250" x2="300" y2="110" stroke="#2d4a2b" stroke-width="2"/>
                    </svg>
                </div>
            </div>
            <h3>Pin Configuration (28-pin PDIP)</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Pin</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PC6</td>
                        <td>Port C bit 6, Reset pin</td>
                    </tr>
                    <tr>
                        <td>2-9</td>
                        <td>PD0-PD7</td>
                        <td>Port D (Digital I/O, USART, Interrupts)</td>
                    </tr>
                    <tr>
                        <td>10-16</td>
                        <td>PC0-PC5</td>
                        <td>Port C (ADC0-ADC5, Digital I/O)</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>AVCC</td>
                        <td>Analog supply voltage</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>AREF</td>
                        <td>Analog reference voltage</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>AGND</td>
                        <td>Analog ground</td>
                    </tr>
                    <tr>
                        <td>20-23</td>
                        <td>PB0-PB3</td>
                        <td>Port B (Digital I/O, SPI, PWM)</td>
                    </tr>
                    <tr>
                        <td>24-27</td>
                        <td>PB4-PB7</td>
                        <td>Port B (Digital I/O, SPI, PWM)</td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>VCC</td>
                        <td>Digital supply voltage</td>
                    </tr>
                </tbody>
            </table>
            <h3>Sensor/Actuator Interfacing with Arduino</h3>
            <h4>Analog Sensors</h4>
            <p>Connect to analog input pins (A0-A5). Use analogRead() function to get values (0-1023 for 10-bit ADC).</p>
            <div class="example-box">
                <h4>Example: Temperature Sensor with Arduino</h4>
                <pre style="background: #f8f9fa; padding: 15px; border-radius: 8px; font-family: monospace; font-size: 14px;">
// Temperature sensor connected to A0
int sensorPin = A0;
int sensorValue = 0;
float voltage = 0.0;
float temperature = 0.0;

void setup() {
  Serial.begin(9600);
}

void loop() {
  sensorValue = analogRead(sensorPin);
  voltage = sensorValue * (5.0 / 1023.0);
  temperature = (voltage - 0.5) * 100; // for LM35 sensor
  Serial.print("Temperature: ");
  Serial.print(temperature);
  Serial.println(" C");
  delay(1000);
}
                </pre>
            </div>
            <h4>Digital Sensors</h4>
            <p>Connect to digital I/O pins. Use digitalRead() for input, digitalWrite() for output.</p>
            <h4>Communication Protocols</h4>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>I2C (Two-wire Interface):</strong> Uses SDA (data) and SCL (clock) pins</li>
                <li><strong>SPI (Serial Peripheral Interface):</strong> Uses MOSI, MISO, SCK, and SS pins</li>
                <li><strong>UART/USART:</strong> Uses TX and RX pins for serial communication</li>
            </ul>
            <h4>Interrupt-based Interfacing</h4>
            <p>Use attachInterrupt() function to trigger functions on external events.</p>
            <div class="example-box">
                <h4>Example: Interrupt with Push Button</h4>
                <pre style="background: #f8f9fa; padding: 15px; border-radius: 8px; font-family: monospace; font-size: 14px;">
const int buttonPin = 2;     // Interrupt pin 0
const int ledPin = 13;
volatile int buttonState = 0;

void setup() {
  pinMode(ledPin, OUTPUT);
  attachInterrupt(digitalPinToInterrupt(buttonPin), toggleLED, CHANGE);
}

void loop() {
  // Main loop can do other tasks
}

void toggleLED() {
  buttonState = !buttonState;
  digitalWrite(ledPin, buttonState);
}
                </pre>
            </div>
        </section>
        <section class="section" id="stm32">
            <h2>4.5 STM32 Microcontroller</h2>
            <p>STM32 is a family of 32-bit microcontrollers from STMicroelectronics based on ARM Cortex-M processor cores, offering high performance for demanding applications.</p>
            <div class="key-point">EXAM TIP: Understand the ARM Cortex-M architecture, STM32 features, and differences between 8-bit and 32-bit microcontrollers.</div>
            <h3>STM32 Features</h3>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Core:</strong> ARM Cortex-M (M0, M0+, M3, M4, M7, M33, M55)</li>
                <li><strong>Performance:</strong> Up to 600+ MHz, DSP and FPU capabilities</li>
                <li><strong>Memory:</strong> Up to 2MB Flash, 1MB RAM</li>
                <li><strong>Peripherals:</strong> Advanced timers, multiple communication interfaces</li>
                <li><strong>ADC:</strong> Up to 16-bit resolution, multiple channels</li>
                <li><strong>DAC:</strong> 12-bit resolution</li>
                <li><strong>Low Power:</strong> Multiple power modes for energy efficiency</li>
                <li><strong>Security:</strong> Hardware encryption, memory protection</li>
            </ul>
            <h3>ARM Cortex-M4 Core</h3>
            <p>The Cortex-M4 processor is optimized for digital signal processing and floating-point operations.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Architecture:</strong> 3-stage pipeline Harvard architecture</li>
                <li><strong>Performance:</strong> 1.25 DMIPS/MHz</li>
                <li><strong>FPU:</strong> IEEE754-compliant single-precision floating-point unit</li>
                <li><strong>DSP:</strong> Single-cycle MAC, SIMD instructions</li>
                <li><strong>Interrupts:</strong> Nested Vectored Interrupt Controller (NVIC) with up to 256 priority levels</li>
                <li><strong>Memory Protection:</strong> Optional Memory Protection Unit (MPU)</li>
            </ul>
            <h3>STM32 Architecture</h3>
            <div class="diagram">
                <div class="diagram-title">STM32 Block Diagram</div>
                <div class="circuit-diagram">
                    <svg width="600" height="450" viewBox="0 0 600 450">
                        <!-- Cortex-M Core -->
                        <rect x="250" y="30" width="120" height="70" fill="#cce5ff" stroke="#6699cc" stroke-width="2" rx="8"/>
                        <text x="310" y="55" text-anchor="middle" fill="#003366" font-size="12" font-weight="bold">ARM Cortex-M</text>
                        <text x="310" y="75" text-anchor="middle" fill="#003366" font-size="10">Core (M4/M7)</text>
                        <text x="310" y="95" text-anchor="middle" fill="#003366" font-size="10">with FPU & DSP</text>
                        <!-- Flash Memory -->
                        <rect x="80" y="130" width="140" height="60" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="150" y="155" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">Flash Memory</text>
                        <text x="150" y="175" text-anchor="middle" fill="#2d4a2b" font-size="10">Up to 2MB</text>
                        <!-- RAM -->
                        <rect x="380" y="130" width="140" height="60" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="450" y="155" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">RAM</text>
                        <text x="450" y="175" text-anchor="middle" fill="#2d4a2b" font-size="10">Up to 1MB</text>
                        <!-- Peripherals -->
                        <rect x="50" y="230" width="160" height="60" fill="#d4f4dd" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="130" y="255" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">Timers & PWM</text>
                        <text x="130" y="275" text-anchor="middle" fill="#2d4a2b" font-size="10">Advanced Control</text>
                        <rect x="220" y="230" width="160" height="60" fill="#d4f4dd" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="300" y="255" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">Communication</text>
                        <text x="300" y="275" text-anchor="middle" fill="#2d4a2b" font-size="10">USART, SPI, I2C, USB</text>
                        <rect x="390" y="230" width="160" height="60" fill="#d4f4dd" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="470" y="255" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">Analog Peripherals</text>
                        <text x="470" y="275" text-anchor="middle" fill="#2d4a2b" font-size="10">12-bit ADC, 12-bit DAC</text>
                        <!-- System Components -->
                        <rect x="150" y="330" width="120" height="60" fill="#fff3cd" stroke="#d4a574" stroke-width="2" rx="8"/>
                        <text x="210" y="355" text-anchor="middle" fill="#8b4513" font-size="12" font-weight="bold">NVIC</text>
                        <text x="210" y="375" text-anchor="middle" fill="#8b4513" font-size="10">Interrupt Controller</text>
                        <rect x="330" y="330" width="120" height="60" fill="#fff3cd" stroke="#d4a574" stroke-width="2" rx="8"/>
                        <text x="390" y="355" text-anchor="middle" fill="#8b4513" font-size="12" font-weight="bold">MPU</text>
                        <text x="390" y="375" text-anchor="middle" fill="#8b4513" font-size="10">Memory Protection</text>
                        <!-- Connections -->
                        <line x1="310" y1="100" x2="310" y2="130" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="150" y1="130" x2="310" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="450" y1="130" x2="310" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="130" y1="230" x2="310" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="300" y1="230" x2="310" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="470" y1="230" x2="310" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="210" y1="330" x2="310" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="390" y1="330" x2="310" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                    </svg>
                </div>
            </div>
            <h3>Core Peripherals</h3>
            <h4>Nested Vectored Interrupt Controller (NVIC)</h4>
            <p>Provides low-latency interrupt processing with up to 256 priority levels.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li>Hardware stacking of registers</li>
                <li>No assembler stubs required for interrupt handlers</li>
                <li>Fast execution of interrupt service routines</li>
            </ul>
            <h4>System Control Block (SCB)</h4>
            <p>Programmer's model interface to the processor for system implementation and control.</p>
            <h4>Memory Protection Unit (MPU)</h4>
            <p>Defines memory attributes for different regions to improve system reliability.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li>Up to 8 different memory regions</li>
                <li>Optional predefined background region</li>
                <li>Prevents unauthorized access to critical memory areas</li>
            </ul>
            <h4>Floating-Point Unit (FPU)</h4>
            <p>Provides IEEE754-compliant operations on single-precision floating-point values.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li>Single-cycle floating-point operations</li>
                <li>Supports complex mathematical calculations</li>
                <li>Essential for DSP and control applications</li>
            </ul>
            <div class="note">
                <h4>Key Differences: ATmega328P vs STM32</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>ATmega328P</th>
                            <th>STM32</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Architecture</td>
                            <td>8-bit AVR</td>
                            <td>32-bit ARM Cortex-M</td>
                        </tr>
                        <tr>
                            <td>Clock Speed</td>
                            <td>Up to 16MHz</td>
                            <td>Up to 600+ MHz</td>
                        </tr>
                        <tr>
                            <td>Memory</td>
                            <td>32KB Flash, 2KB RAM</td>
                            <td>Up to 2MB Flash, 1MB RAM</td>
                        </tr>
                        <tr>
                            <td>ADC Resolution</td>
                            <td>10-bit</td>
                            <td>Up to 16-bit</td>
                        </tr>
                        <tr>
                            <td>FPU</td>
                            <td>No</td>
                            <td>Yes (in M4/M7)</td>
                        </tr>
                        <tr>
                            <td>Applications</td>
                            <td>Simple embedded systems</td>
                            <td>Complex, high-performance systems</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <script>
            function scrollToSection(id) {
                const element = document.getElementById(id);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' });
                }
            }
        </script>
    </div>
</body>
</html>


<!-- <==========chapter5 start=================>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5: Connectivity Technology in Instrumentation Systems - Exam Summary</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.8;
            color: #2d4a2b;
            background: linear-gradient(135deg, #f9fbe7 0%, #f0f4c3 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }
        .header {
            text-align: center;
            padding: 40px 0;
            background: linear-gradient(135deg, #4a7c59 0%, #6b8e23 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="80" r="3" fill="rgba(255,255,255,0.1)"/></svg>');
        }
        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }
        .header .subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            font-weight: 300;
            position: relative;
            z-index: 1;
        }
        .toc {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border: 2px solid #d4a574;
            border-radius: 15px;
            padding: 30px;
            margin: 30px;
            box-shadow: 0 5px 15px rgba(212, 165, 116, 0.2);
        }
        .toc h2 {
            color: #8b4513;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-align: center;
        }
        .toc ul {
            list-style: none;
            color: #6b4e2c;
        }
        .toc li {
            margin: 8px 0;
            padding: 8px 15px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 8px;
            border-left: 4px solid #6b8e23;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .toc li:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateX(5px);
        }
        .section {
            margin: 40px 30px;
            padding: 30px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: 15px;
            border: 1px solid #e9ecef;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        .section h2 {
            color: #4a7c59;
            font-size: 2rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #6b8e23;
        }
        .section h3 {
            color: #2d4a2b;
            font-size: 1.5rem;
            margin: 25px 0 15px 0;
            padding: 10px 15px;
            background: linear-gradient(135deg, #e8f5e8 0%, #d4f4dd 100%);
            border-radius: 8px;
            border-left: 4px solid #6b8e23;
        }
        .section h4 {
            color: #4a7c59;
            font-size: 1.3rem;
            margin: 20px 0 10px 0;
        }
        .section p {
            margin: 15px 0;
            text-align: justify;
            font-size: 1.1rem;
        }
        .diagram {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: 2px solid #6b8e23;
            border-radius: 12px;
            padding: 20px;
            margin: 25px 0;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .diagram-title {
            color: #4a7c59;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .circuit-diagram {
            width: 100%;
            height: 200px;
            background: white;
            border-radius: 8px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #666;
            position: relative;
            margin: 15px 0;
        }
        .formula {
            background: linear-gradient(135deg, #fff9e6 0%, #ffecb3 100%);
            border: 2px solid #d4a574;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        .formula-text {
            font-size: 1.3rem;
            font-weight: bold;
            color: #8b4513;
            font-family: 'Courier New', monospace;
        }
        .example-box {
            background: linear-gradient(135deg, #e8f5e8 0%, #d4f4dd 100%);
            border: 2px solid #4a7c59;
            border-radius: 12px;
            padding: 25px;
            margin: 25px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
        .example-box h4 {
            color: #2d4a2b;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background: linear-gradient(135deg, #4a7c59 0%, #6b8e23 100%);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: bold;
        }
        .table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e9ecef;
        }
        .table tr:nth-child(even) {
            background: #f8f9fa;
        }
        .table tr:hover {
            background: #e8f5e8;
            transition: all 0.3s ease;
        }
        .highlight {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            padding: 3px 8px;
            border-radius: 4px;
            color: #8b4513;
            font-weight: bold;
        }
        .note {
            background: linear-gradient(135deg, #cce5ff 0%, #b3d9ff 100%);
            border: 2px solid #6699cc;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border-left: 5px solid #0066cc;
        }
        .note h4 {
            color: #003366;
            margin-bottom: 10px;
        }
        .exam-tip {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border: 2px solid #d4a574;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border-left: 5px solid #8b4513;
        }
        .exam-tip h4 {
            color: #8b4513;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .key-point {
            background: linear-gradient(135deg, #d4f4dd 0%, #b8e6c1 100%);
            border: 2px solid #4a7c59;
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
            font-weight: bold;
            color: #2d4a2b;
        }
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 15px;
            }
            .header h1 {
                font-size: 2rem;
            }
            .section {
                padding: 20px;
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Chapter 5: Connectivity Technology in Instrumentation Systems</h1>
            <p class="subtitle">Exam-Focused Summary for Students</p>
        </header>
        <div class="toc">
            <h2>Table of Contents</h2>
            <ul>
                <li onclick="scrollToSection('introduction')">5.1 Introduction to Wired and Wireless Communication</li>
                <li onclick="scrollToSection('uart')">5.2 UART Communication</li>
                <li onclick="scrollToSection('i2c')">5.3 I2C Communication Protocol</li>
                <li onclick="scrollToSection('spi')">5.4 SPI Communication Protocol</li>
                <li onclick="scrollToSection('can')">5.5 CAN Communication Protocol</li>
                <li onclick="scrollToSection('wireless')">5.6 Wireless Communication Technologies</li>
                <li onclick="scrollToSection('data')">5.7 Data Acquisition Systems</li>
            </ul>
        </div>
        <section class="section" id="introduction">
            <h2>5.1 Introduction to Wired and Wireless Communication</h2>
            <p>Connectivity technologies enable communication between different components in instrumentation systems, allowing for data transfer, control, and monitoring.</p>
            <div class="key-point">EXAM TIP: Understand the fundamental differences between wired and wireless communication systems, including their advantages and disadvantages.</div>
            <h3>Wired Communication Systems</h3>
            <p>Wired networks use physical cables (copper wire, twisted pair, or fiber optic) to carry electrical signals from one point to another.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Examples:</strong> Ethernet LAN, T1 lines, fiber optic communication</li>
                <li><strong>Advantages:</strong> High reliability, security, bandwidth, and low latency</li>
                <li><strong>Disadvantages:</strong> Limited mobility, installation complexity, higher infrastructure cost</li>
            </ul>
            <h3>Wireless Communication Systems</h3>
            <p>Wireless networks use electromagnetic waves (radio frequency or infrared) to transmit data without physical cables.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Examples:</strong> Cellular networks, Wi-Fi, Bluetooth, Zigbee, LoRa</li>
                <li><strong>Advantages:</strong> Mobility, flexibility, easier installation, lower infrastructure cost</li>
                <li><strong>Disadvantages:</strong> Susceptible to interference, security concerns, limited bandwidth, higher latency</li>
            </ul>
            <div class="note">
                <h4>Key Applications:</h4>
                <ul style="color: #003366; margin-left: 20px;">
                    <li><strong>Industrial Automation:</strong> Monitoring and control of machinery and processes</li>
                    <li><strong>Environmental Monitoring:</strong> Remote sensing of temperature, humidity, pollution levels</li>
                    <li><strong>Healthcare:</strong> Patient monitoring, medical device connectivity</li>
                    <li><strong>Smart Homes:</strong> Control of lighting, security, HVAC systems</li>
                    <li><strong>Transportation:</strong> Vehicle tracking, traffic management</li>
                </ul>
            </div>
        </section>
        <section class="section" id="uart">
            <h2>5.2 UART Communication</h2>
            <p>UART (Universal Asynchronous Receiver Transmitter) is a hardware communication protocol that uses asynchronous serial communication with configurable speed.</p>
            <div class="key-point">EXAM TIP: Understand UART data format, baud rate, and how start/stop bits work. Be prepared for numerical problems involving data transmission rates.</div>
            <h3>UART Basics</h3>
            <p>UART is a simple, widely used protocol for serial communication between devices.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Asynchronous:</strong> No clock signal is shared between devices</li>
                <li><strong>Two-wire interface:</strong> TX (transmit) and RX (receive) lines</li>
                <li><strong>Configurable:</strong> Baud rate, data bits, parity, and stop bits</li>
                <li><strong>Common baud rates:</strong> 9600, 19200, 38400, 57600, 115200 bps</li>
            </ul>
            <h3>UART Data Format</h3>
            <div class="diagram">
                <div class="diagram-title">UART Data Frame Format</div>
                <div class="circuit-diagram">
                    <svg width="600" height="150" viewBox="0 0 600 150">
                        <!-- Start bit -->
                        <rect x="50" y="50" width="40" height="50" fill="#ffcccc" stroke="#cc6666" stroke-width="2"/>
                        <text x="70" y="80" text-anchor="middle" fill="#cc3333" font-size="12">Start</text>
                        <text x="70" y="40" text-anchor="middle" fill="#cc3333" font-size="10">0</text>
                        <!-- Data bits -->
                        <rect x="90" y="50" width="40" height="50" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="110" y="80" text-anchor="middle" fill="#2d4a2b" font-size="12">D0</text>
                        <rect x="130" y="50" width="40" height="50" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="150" y="80" text-anchor="middle" fill="#2d4a2b" font-size="12">D1</text>
                        <rect x="170" y="50" width="40" height="50" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="190" y="80" text-anchor="middle" fill="#2d4a2b" font-size="12">D2</text>
                        <rect x="210" y="50" width="40" height="50" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="230" y="80" text-anchor="middle" fill="#2d4a2b" font-size="12">D3</text>
                        <rect x="250" y="50" width="40" height="50" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="270" y="80" text-anchor="middle" fill="#2d4a2b" font-size="12">D4</text>
                        <rect x="290" y="50" width="40" height="50" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="310" y="80" text-anchor="middle" fill="#2d4a2b" font-size="12">D5</text>
                        <rect x="330" y="50" width="40" height="50" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="350" y="80" text-anchor="middle" fill="#2d4a2b" font-size="12">D6</text>
                        <rect x="370" y="50" width="40" height="50" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="390" y="80" text-anchor="middle" fill="#2d4a2b" font-size="12">D7</text>
                        <!-- Parity bit -->
                        <rect x="410" y="50" width="40" height="50" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                        <text x="430" y="80" text-anchor="middle" fill="#8b4513" font-size="12">Parity</text>
                        <!-- Stop bit -->
                        <rect x="450" y="50" width="40" height="50" fill="#cce5ff" stroke="#6699cc" stroke-width="2"/>
                        <text x="470" y="80" text-anchor="middle" fill="#003366" font-size="12">Stop</text>
                        <text x="470" y="40" text-anchor="middle" fill="#003366" font-size="10">1</text>
                        <!-- Labels -->
                        <text x="250" y="20" text-anchor="middle" fill="#2d4a2b" font-size="14">UART Data Frame (8 data bits, 1 parity bit, 1 stop bit)</text>
                    </svg>
                </div>
            </div>
            <h3>UART Configuration</h3>
            <p>Before communication, both devices must be configured with the same parameters:</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Baud Rate:</strong> Speed of data transmission (bits per second)</li>
                <li><strong>Data Bits:</strong> Number of bits in data field (5, 6, 7, or 8 bits)</li>
                <li><strong>Parity:</strong> Error detection method (None, Even, Odd)</li>
                <li><strong>Stop Bits:</strong> Number of stop bits (1, 1.5, or 2 bits)</li>
            </ul>
            <div class="advantages">
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Advantages of UART</h4>
                    <ul style="color: #2d4a2b;">
                        <li>Simple hardware interface (only 2 wires)</li>
                        <li>Configurable data format and speed</li>
                        <li>Full-duplex communication possible</li>
                        <li>Error detection using parity bit</li>
                        <li>Widely supported in microcontrollers</li>
                    </ul>
                </div>
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Disadvantages of UART</h4>
                    <ul style="color: #2d4a2b;">
                        <li>Lower speed compared to parallel communication</li>
                        <li>Overhead from start, stop, and parity bits</li>
                        <li>Requires precise baud rate matching</li>
                        <li>Limited to point-to-point communication</li>
                        <li>No built-in addressing for multiple devices</li>
                    </ul>
                </div>
            </div>
            <div class="example-box">
                <h4>Example: UART Data Transmission Rate</h4>
                <p>Calculate the actual data transmission rate for a UART configured with 9600 baud, 8 data bits, 1 parity bit, and 1 stop bit.</p>
                <p><strong>Solution:</strong></p>
                <p>Total bits per frame = 1(start) + 8(data) + 1(parity) + 1(stop) = 11 bits</p>
                <p>Actual data rate = (8 data bits / 11 total bits) × 9600 bps = 6981.8 bps</p>
                <p><strong>Note:</strong> Only about 73% of the bandwidth is used for actual data.</p>
            </div>
        </section>
        <section class="section" id="i2c">
            <h2>5.3 I2C Communication Protocol</h2>
            <p>I2C (Inter-Integrated Circuit), also known as TWI (Two-Wire Interface), is a synchronous, multi-master, multi-slave, packet-switched, single-ended, serial communication bus invented by Philips Semiconductor in 1982.</p>
            <div class="key-point">EXAM TIP: Understand I2C protocol, addressing, start/stop conditions, and ACK/NACK. Be prepared to draw timing diagrams and solve problems related to data transmission.</div>
            <h3>I2C Basics</h3>
            <p>I2C uses only two bidirectional open-drain lines:</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>SDA (Serial Data Line):</strong> Carries data between devices</li>
                <li><strong>SCL (Serial Clock Line):</strong> Carries clock signal generated by master</li>
            </ul>
            <p>Both lines require pull-up resistors to VCC since devices can only pull the lines low.</p>
            <h3>I2C Data Transmission</h3>
            <div class="diagram">
                <div class="diagram-title">I2C Communication Timing Diagram</div>
                <div class="circuit-diagram">
                    <svg width="800" height="300" viewBox="0 0 800 300">
                        <!-- SCL line -->
                        <text x="20" y="50" text-anchor="start" fill="#2d4a2b" font-size="12">SCL:</text>
                        <line x1="50" y1="50" x2="750" y2="50" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="100" y1="50" x2="100" y2="30" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="150" y1="50" x2="150" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="200" y1="30" x2="200" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="250" y1="30" x2="250" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="300" y1="30" x2="300" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="350" y1="30" x2="350" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="400" y1="30" x2="400" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="450" y1="30" x2="450" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="500" y1="30" x2="500" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="550" y1="30" x2="550" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="600" y1="30" x2="600" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="650" y1="30" x2="650" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="700" y1="30" x2="700" y2="50" stroke="#2d4a2b" stroke-width="2"/>
                        <!-- SDA line -->
                        <text x="20" y="120" text-anchor="start" fill="#2d4a2b" font-size="12">SDA:</text>
                        <line x1="50" y1="120" x2="750" y2="120" stroke="#2d4a2b" stroke-width="2"/>
                        <!-- Start condition -->
                        <line x1="100" y1="120" x2="100" y2="100" stroke="#cc3333" stroke-width="2"/>
                        <line x1="100" y1="100" x2="150" y2="100" stroke="#cc3333" stroke-width="2"/>
                        <text x="125" y="90" text-anchor="middle" fill="#cc3333" font-size="10">START</text>
                        <!-- Address bits -->
                        <line x1="150" y1="100" x2="150" y2="140" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="150" y1="140" x2="200" y2="140" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="175" y="160" text-anchor="middle" fill="#2d4a2b" font-size="10">A6</text>
                        <line x1="200" y1="140" x2="200" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="200" y1="100" x2="250" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="225" y="90" text-anchor="middle" fill="#2d4a2b" font-size="10">A5</text>
                        <line x1="250" y1="100" x2="250" y2="140" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="250" y1="140" x2="300" y2="140" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="275" y="160" text-anchor="middle" fill="#2d4a2b" font-size="10">A4</text>
                        <line x1="300" y1="140" x2="300" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="300" y1="100" x2="350" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="325" y="90" text-anchor="middle" fill="#2d4a2b" font-size="10">A3</text>
                        <line x1="350" y1="100" x2="350" y2="140" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="350" y1="140" x2="400" y2="140" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="375" y="160" text-anchor="middle" fill="#2d4a2b" font-size="10">A2</text>
                        <line x1="400" y1="140" x2="400" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="400" y1="100" x2="450" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="425" y="90" text-anchor="middle" fill="#2d4a2b" font-size="10">A1</text>
                        <line x1="450" y1="100" x2="450" y2="140" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="450" y1="140" x2="500" y2="140" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="475" y="160" text-anchor="middle" fill="#2d4a2b" font-size="10">A0</text>
                        <line x1="500" y1="140" x2="500" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="500" y1="100" x2="550" y2="100" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="525" y="90" text-anchor="middle" fill="#2d4a2b" font-size="10">R/W</text>
                        <!-- ACK bit -->
                        <line x1="550" y1="100" x2="550" y2="140" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="550" y1="140" x2="600" y2="140" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="575" y="160" text-anchor="middle" fill="#2d4a2b" font-size="10">ACK</text>
                        <!-- Stop condition -->
                        <line x1="600" y1="140" x2="600" y2="100" stroke="#cc3333" stroke-width="2"/>
                        <line x1="600" y1="100" x2="650" y2="100" stroke="#cc3333" stroke-width="2"/>
                        <line x1="650" y1="100" x2="650" y2="120" stroke="#cc3333" stroke-width="2"/>
                        <text x="625" y="90" text-anchor="middle" fill="#cc3333" font-size="10">STOP</text>
                    </svg>
                </div>
            </div>
            <h3>I2C Protocol Features</h3>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Multi-master capability:</strong> Multiple masters can control the bus</li>
                <li><strong>Arbitration:</strong> When multiple masters try to transmit simultaneously, the one with lower address wins</li>
                <li><strong>Clock stretching:</strong> Slaves can hold SCL low to slow down communication</li>
                <li><strong>ACK/NACK:</strong> Receiver acknowledges each byte by pulling SDA low</li>
                <li><strong>Addressing:</strong> 7-bit or 10-bit addressing (up to 128 or 1024 devices)</li>
                <li><strong>Speed modes:</strong> Standard (100 kbps), Fast (400 kbps), Fast+ (1 Mbps), High-speed (3.4 Mbps)</li>
            </ul>
            <div class="advantages">
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Advantages of I2C</h4>
                    <ul style="color: #2d4a2b;">
                        <li>Only 2 wires needed (SDA and SCL)</li>
                        <li>Supports multiple masters and slaves</li>
                        <li>Built-in ACK/NACK for error detection</li>
                        <li>Simple hardware implementation</li>
                        <li>Widely adopted standard</li>
                    </ul>
                </div>
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Disadvantages of I2C</h4>
                    <ul style="color: #2d4a2b;">
                        <li>Slower than SPI</li>
                        <li>Limited distance (typically a few meters)</li>
                        <li>Half-duplex communication</li>
                        <li>Complex protocol with many rules</li>
                        <li>Pull-up resistors required</li>
                    </ul>
                </div>
            </div>
            <div class="example-box">
                <h4>Example: I2C Addressing</h4>
                <p>A master wants to write to a slave with 7-bit address 0x48. Show the first byte transmitted on the I2C bus.</p>
                <p><strong>Solution:</strong></p>
                <p>7-bit address = 0x48 = 01001000₂</p>
                <p>For write operation, R/W bit = 0</p>
                <p>Transmitted byte = 01001000₂ + 0 = 01001000₂ = 0x48</p>
                <p><strong>Note:</strong> The R/W bit is appended as the least significant bit (LSB).</p>
            </div>
        </section>
        <section class="section" id="spi">
            <h2>5.4 SPI Communication Protocol</h2>
            <p>SPI (Serial Peripheral Interface) is a synchronous serial communication interface specification used for short-distance communication, primarily in embedded systems.</p>
            <div class="key-point">EXAM TIP: Understand SPI protocol, master/slave configuration, clock polarity/phase modes, and compare with I2C. Be prepared to draw timing diagrams.</div>
            <h3>SPI Basics</h3>
            <p>SPI typically uses four signals:</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>SCLK (Serial Clock):</strong> Clock signal generated by master</li>
                <li><strong>MOSI (Master Out Slave In):</strong> Data from master to slave</li>
                <li><strong>MISO (Master In Slave Out):</strong> Data from slave to master</li>
                <li><strong>SS/CS (Slave Select/Chip Select):</strong> Active-low signal to select slave</li>
            </ul>
            <h3>SPI Configuration</h3>
            <div class="diagram">
                <div class="diagram-title">SPI Master-Slave Connection</div>
                <div class="circuit-diagram">
                    <svg width="700" height="300" viewBox="0 0 700 300">
                        <!-- Master -->
                        <rect x="100" y="50" width="150" height="80" fill="#cce5ff" stroke="#6699cc" stroke-width="2" rx="8"/>
                        <text x="175" y="80" text-anchor="middle" fill="#003366" font-size="14" font-weight="bold">SPI MASTER</text>
                        <text x="175" y="100" text-anchor="middle" fill="#003366" font-size="12">(Microcontroller)</text>
                        <!-- Slave 1 -->
                        <rect x="400" y="50" width="150" height="80" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="475" y="80" text-anchor="middle" fill="#2d4a2b" font-size="14" font-weight="bold">SPI SLAVE 1</text>
                        <text x="475" y="100" text-anchor="middle" fill="#2d4a2b" font-size="12">(Sensor/Display)</text>
                        <!-- Slave 2 -->
                        <rect x="400" y="170" width="150" height="80" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="475" y="200" text-anchor="middle" fill="#2d4a2b" font-size="14" font-weight="bold">SPI SLAVE 2</text>
                        <text x="475" y="220" text-anchor="middle" fill="#2d4a2b" font-size="12">(Memory/ADC)</text>
                        <!-- SCLK connection -->
                        <line x1="250" y1="70" x2="400" y2="70" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="250" y1="70" x2="400" y2="190" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="325" y="60" text-anchor="middle" fill="#2d4a2b" font-size="12">SCLK</text>
                        <!-- MOSI connection -->
                        <line x1="250" y1="90" x2="400" y2="90" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="250" y1="90" x2="400" y2="210" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="325" y="80" text-anchor="middle" fill="#2d4a2b" font-size="12">MOSI</text>
                        <!-- MISO connection -->
                        <line x1="250" y1="110" x2="400" y2="110" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="250" y1="110" x2="400" y2="230" stroke="#2d4a2b" stroke-width="2"/>
                        <text x="325" y="100" text-anchor="middle" fill="#2d4a2b" font-size="12">MISO</text>
                        <!-- SS1 connection -->
                        <line x1="250" y1="130" x2="400" y2="130" stroke="#cc3333" stroke-width="2"/>
                        <text x="325" y="120" text-anchor="middle" fill="#cc3333" font-size="12">SS1</text>
                        <!-- SS2 connection -->
                        <line x1="250" y1="150" x2="400" y2="250" stroke="#cc3333" stroke-width="2"/>
                        <text x="325" y="190" text-anchor="middle" fill="#cc3333" font-size="12">SS2</text>
                        <!-- Arrows -->
                        <path d="M300 90 L320 90" stroke="#2d4a2b" stroke-width="2" marker-end="url(#arrowhead)"/>
                        <path d="M320 110 L300 110" stroke="#2d4a2b" stroke-width="2" marker-end="url(#arrowhead)"/>
                        <defs>
                            <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="9" refY="3.5" orient="auto">
                                <polygon points="0 0, 10 3.5, 0 7" fill="#2d4a2b"/>
                            </marker>
                        </defs>
                    </svg>
                </div>
            </div>
            <h3>SPI Modes</h3>
            <p>SPI has four modes based on clock polarity (CPOL) and clock phase (CPHA):</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Mode</th>
                        <th>CPOL</th>
                        <th>CPHA</th>
                        <th>Clock Idle State</th>
                        <th>Data Capture</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>0</strong></td>
                        <td>0</td>
                        <td>0</td>
                        <td>Low</td>
                        <td>Leading edge</td>
                    </tr>
                    <tr>
                        <td><strong>1</strong></td>
                        <td>0</td>
                        <td>1</td>
                        <td>Low</td>
                        <td>Trailing edge</td>
                    </tr>
                    <tr>
                        <td><strong>2</strong></td>
                        <td>1</td>
                        <td>0</td>
                        <td>High</td>
                        <td>Leading edge</td>
                    </tr>
                    <tr>
                        <td><strong>3</strong></td>
                        <td>1</td>
                        <td>1</td>
                        <td>High</td>
                        <td>Trailing edge</td>
                    </tr>
                </tbody>
            </table>
            <div class="advantages">
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Advantages of SPI</h4>
                    <ul style="color: #2d4a2b;">
                        <li>Full-duplex communication</li>
                        <li>Higher speeds than I2C (up to tens of Mbps)</li>
                        <li>Simple protocol with no addressing</li>
                        <li>No need for pull-up resistors</li>
                        <li>Flexible data size (not limited to 8 bits)</li>
                    </ul>
                </div>
                <div class="advantage-card">
                    <h4 style="color: #2d4a2b;">Disadvantages of SPI</h4>
                    <ul style="color: #2d4a2b;">
                        <li>More pins required (minimum 4 per slave)</li>
                        <li>No built-in error checking</li>
                        <li>No standardization (different implementations)</li>
                        <li>Only one master allowed</li>
                        <li>More complex wiring for multiple slaves</li>
                    </ul>
                </div>
            </div>
            <div class="note">
                <h4>SPI vs I2C Comparison:</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>SPI</th>
                            <th>I2C</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Wires</strong></td>
                            <td>4+ (SCLK, MOSI, MISO, SS per slave)</td>
                            <td>2 (SCL, SDA)</td>
                        </tr>
                        <tr>
                            <td><strong>Speed</strong></td>
                            <td>High (up to 50+ Mbps)</td>
                            <td>Medium (up to 3.4 Mbps)</td>
                        </tr>
                        <tr>
                            <td><strong>Duplex</strong></td>
                            <td>Full-duplex</td>
                            <td>Half-duplex</td>
                        </tr>
                        <tr>
                            <td><strong>Multi-master</strong></td>
                            <td>No</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td><strong>Error checking</strong></td>
                            <td>No</td>
                            <td>ACK/NACK</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="section" id="can">
            <h2>5.5 CAN Communication Protocol</h2>
            <p>CAN (Controller Area Network) is a robust vehicle bus standard designed to allow microcontrollers and devices to communicate with each other without a host computer.</p>
            <div class="key-point">EXAM TIP: Understand CAN protocol, message format, arbitration, and applications in automotive and industrial systems.</div>
            <h3>CAN Basics</h3>
            <p>CAN is a message-based protocol designed for automotive and industrial applications:</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Peer-to-peer network:</strong> No master device</li>
                <li><strong>Multi-master capability:</strong> Any node can transmit when bus is free</li>
                <li><strong>Arbitration:</strong> Based on message ID (lower ID has higher priority)</li>
                <li><strong>Error detection:</strong> CRC, ACK, frame check</li>
                <li><strong>Speed:</strong> Up to 1 Mbps (40m max) or 125 kbps (500m max)</li>
            </ul>
            <h3>CAN Message Format</h3>
            <div class="diagram">
                <div class="diagram-title">CAN Message Frame Format</div>
                <div class="circuit-diagram">
                    <svg width="800" height="250" viewBox="0 0 800 250">
                        <!-- SOF -->
                        <rect x="50" y="80" width="30" height="40" fill="#ffcccc" stroke="#cc6666" stroke-width="2"/>
                        <text x="65" y="105" text-anchor="middle" fill="#cc3333" font-size="10">SOF</text>
                        <!-- ID -->
                        <rect x="80" y="80" width="120" height="40" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2"/>
                        <text x="140" y="105" text-anchor="middle" fill="#2d4a2b" font-size="10">11-bit ID</text>
                        <!-- RTR -->
                        <rect x="200" y="80" width="30" height="40" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                        <text x="215" y="105" text-anchor="middle" fill="#8b4513" font-size="10">RTR</text>
                        <!-- IDE -->
                        <rect x="230" y="80" width="30" height="40" fill="#fff3cd" stroke="#d4a574" stroke-width="2"/>
                        <text x="245" y="105" text-anchor="middle" fill="#8b4513" font-size="10">IDE</text>
                        <!-- DLC -->
                        <rect x="260" y="80" width="40" height="40" fill="#cce5ff" stroke="#6699cc" stroke-width="2"/>
                        <text x="280" y="105" text-anchor="middle" fill="#003366" font-size="10">DLC</text>
                        <!-- Data -->
                        <rect x="300" y="80" width="160" height="40" fill="#d4f4dd" stroke="#4a7c59" stroke-width="2"/>
                        <text x="380" y="105" text-anchor="middle" fill="#2d4a2b" font-size="10">0-8 Data Bytes</text>
                        <!-- CRC -->
                        <rect x="460" y="80" width="80" height="40" fill="#fff9e6" stroke="#d4a574" stroke-width="2"/>
                        <text x="500" y="105" text-anchor="middle" fill="#8b4513" font-size="10">15-bit CRC</text>
                        <!-- ACK -->
                        <rect x="540" y="80" width="30" height="40" fill="#cce5ff" stroke="#6699cc" stroke-width="2"/>
                        <text x="555" y="105" text-anchor="middle" fill="#003366" font-size="10">ACK</text>
                        <!-- EOF -->
                        <rect x="570" y="80" width="60" height="40" fill="#ffcccc" stroke="#cc6666" stroke-width="2"/>
                        <text x="600" y="105" text-anchor="middle" fill="#cc3333" font-size="10">7-bit EOF</text>
                        <!-- Labels -->
                        <text x="400" y="40" text-anchor="middle" fill="#2d4a2b" font-size="14">CAN Standard Frame Format</text>
                    </svg>
                </div>
            </div>
            <h3>CAN Protocol Features</h3>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Message-based:</strong> Messages identified by ID, not addresses</li>
                <li><strong>Non-destructive arbitration:</strong> Higher priority messages win without data loss</li>
                <li><strong>Error detection:</strong> CRC, ACK, frame format, bit monitoring</li>
                <li><strong>Fault confinement:</strong> Nodes with too many errors are automatically disconnected</li>
                <li><strong>Multi-cast reception:</strong> All nodes receive all messages, filter by ID</li>
            </ul>
            <div class="example-box">
                <h4>Example: CAN Arbitration</h4>
                <p>Two nodes try to transmit simultaneously: Node A with ID 0x100 and Node B with ID 0x200. Which node wins arbitration?</p>
                <p><strong>Solution:</strong></p>
                <p>ID 0x100 = 000100000000₂</p>
                <p>ID 0x200 = 001000000000₂</p>
                <p>Comparing bit by bit from left (MSB):</p>
                <p>First 2 bits: both 00</p>
                <p>Third bit: Node A = 0, Node B = 1</p>
                <p>Since 0 dominates 1 in CAN, Node A wins arbitration and continues transmitting.</p>
                <p>Node B stops transmitting and becomes a receiver.</p>
            </div>
            <div class="note">
                <h4>CAN Applications:</h4>
                <ul style="color: #003366; margin-left: 20px;">
                    <li><strong>Automotive:</strong> Engine control, ABS, airbags, infotainment</li>
                    <li><strong>Industrial:</strong> Factory automation, robotics, PLCs</li>
                    <li><strong>Medical:</strong> Patient monitoring, operating room equipment</li>
                    <li><strong>Aerospace:</strong> Avionics, flight control systems</li>
                    <li><strong>Building Automation:</strong> HVAC, elevators, security systems</li>
                </ul>
            </div>
        </section>
        <section class="section" id="wireless">
            <h2>5.6 Wireless Communication Technologies</h2>
            <p>Wireless technologies enable communication without physical cables, providing flexibility and mobility in instrumentation systems.</p>
            <div class="key-point">EXAM TIP: Understand different wireless technologies, their characteristics, and applications. Be able to compare them for specific use cases.</div>
            <h3>Bluetooth</h3>
            <p>Bluetooth is a wireless technology standard for exchanging data over short distances using UHF radio waves.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Frequency:</strong> 2.4 GHz ISM band</li>
                <li><strong>Range:</strong> 10m (Class 2), up to 100m (Class 1)</li>
                <li><strong>Data Rate:</strong> 1-3 Mbps (Bluetooth 4.0+)</li>
                <li><strong>Topology:</strong> Piconet (1 master + 7 active slaves), Scatternet</li>
                <li><strong>Applications:</strong> Wireless headphones, keyboards, medical devices, IoT</li>
            </ul>
            <h3>Zigbee</h3>
            <p>Zigbee is a specification for high-level communication protocols using small, low-power digital radios based on IEEE 802.15.4.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Frequency:</strong> 2.4 GHz (global), 915 MHz (Americas), 868 MHz (Europe)</li>
                <li><strong>Range:</strong> 10-100m</li>
                <li><strong>Data Rate:</strong> 20-250 kbps</li>
                <li><strong>Topology:</strong> Star, Mesh, Cluster Tree</li>
                <li><strong>Applications:</strong> Home automation, industrial control, smart energy</li>
            </ul>
            <h3>LoRa/LoRaWAN</h3>
            <p>LoRa (Long Range) is a spread spectrum modulation technique derived from chirp spread spectrum (CSS) technology.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Frequency:</strong> Sub-GHz bands (868 MHz EU, 915 MHz US, 433 MHz Asia)</li>
                <li><strong>Range:</strong> 2-15 km (urban), up to 45 km (rural)</li>
                <li><strong>Data Rate:</strong> 0.3-50 kbps</li>
                <li><strong>Topology:</strong> Star-of-stars</li>
                <li><strong>Applications:</strong> Smart cities, agriculture, asset tracking, environmental monitoring</li>
            </ul>
            <h3>NFC (Near Field Communication)</h3>
            <p>NFC is a set of communication protocols that enable two electronic devices to communicate when they are within 4 cm of each other.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Frequency:</strong> 13.56 MHz</li>
                <li><strong>Range:</strong> < 10 cm</li>
                <li><strong>Data Rate:</strong> 106-424 kbps</li>
                <li><strong>Modes:</strong> Peer-to-peer, Read/write, Card emulation</li>
                <li><strong>Applications:</strong> Contactless payments, access control, smart posters</li>
            </ul>
            <div class="note">
                <h4>Wireless Technology Comparison:</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Technology</th>
                            <th>Range</th>
                            <th>Data Rate</th>
                            <th>Power</th>
                            <th>Applications</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Bluetooth</strong></td>
                            <td>10-100m</td>
                            <td>1-3 Mbps</td>
                            <td>Medium</td>
                            <td>Audio, peripherals, IoT</td>
                        </tr>
                        <tr>
                            <td><strong>Zigbee</strong></td>
                            <td>10-100m</td>
                            <td>20-250 kbps</td>
                            <td>Low</td>
                            <td>Home automation, industrial</td>
                        </tr>
                        <tr>
                            <td><strong>LoRa</strong></td>
                            <td>2-45 km</td>
                            <td>0.3-50 kbps</td>
                            <td>Very Low</td>
                            <td>Smart cities, agriculture</td>
                        </tr>
                        <tr>
                            <td><strong>NFC</strong></td>
                            <td>< 10 cm</td>
                            <td>106-424 kbps</td>
                            <td>Very Low</td>
                            <td>Payments, access control</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="exam-tip">
                <h4>Exam Focus:</h4>
                <p>Be prepared to select the appropriate wireless technology for specific applications based on range, data rate, power consumption, and topology requirements.</p>
            </div>
        </section>
        <section class="section" id="data">
            <h2>5.7 Data Acquisition Systems</h2>
            <p>A Data Acquisition System (DAQ) is a system that collects, processes, and stores data from sensors and other measurement devices.</p>
            <div class="key-point">EXAM TIP: Understand DAQ system components, data logger characteristics, and data storage concepts.</div>
            <h3>DAQ System Components</h3>
            <div class="diagram">
                <div class="diagram-title">Data Acquisition System Block Diagram</div>
                <div class="circuit-diagram">
                    <svg width="800" height="350" viewBox="0 0 800 350">
                        <!-- Sensors -->
                        <rect x="50" y="50" width="100" height="60" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="100" y="75" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">Sensors</text>
                        <text x="100" y="95" text-anchor="middle" fill="#2d4a2b" font-size="10">Temp, Pressure, etc.</text>
                        <!-- Signal Conditioning -->
                        <rect x="200" y="50" width="120" height="60" fill="#fff3cd" stroke="#d4a574" stroke-width="2" rx="8"/>
                        <text x="260" y="75" text-anchor="middle" fill="#8b4513" font-size="12" font-weight="bold">Signal</text>
                        <text x="260" y="95" text-anchor="middle" fill="#8b4513" font-size="10">Conditioning</text>
                        <!-- Multiplexer -->
                        <rect x="370" y="50" width="100" height="60" fill="#cce5ff" stroke="#6699cc" stroke-width="2" rx="8"/>
                        <text x="420" y="75" text-anchor="middle" fill="#003366" font-size="12" font-weight="bold">Multiplexer</text>
                        <text x="420" y="95" text-anchor="middle" fill="#003366" font-size="10">Channel Selector</text>
                        <!-- ADC -->
                        <rect x="520" y="50" width="100" height="60" fill="#d4f4dd" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="570" y="75" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">ADC</text>
                        <text x="570" y="95" text-anchor="middle" fill="#2d4a2b" font-size="10">Analog to Digital</text>
                        <!-- Microcontroller -->
                        <rect x="200" y="150" width="120" height="60" fill="#cce5ff" stroke="#6699cc" stroke-width="2" rx="8"/>
                        <text x="260" y="175" text-anchor="middle" fill="#003366" font-size="12" font-weight="bold">Microcontroller</text>
                        <text x="260" y="195" text-anchor="middle" fill="#003366" font-size="10">Control & Processing</text>
                        <!-- Data Storage -->
                        <rect x="370" y="150" width="100" height="60" fill="#fff9e6" stroke="#d4a574" stroke-width="2" rx="8"/>
                        <text x="420" y="175" text-anchor="middle" fill="#8b4513" font-size="12" font-weight="bold">Data Storage</text>
                        <text x="420" y="195" text-anchor="middle" fill="#8b4513" font-size="10">Memory/SD Card</text>
                        <!-- Interface -->
                        <rect x="520" y="150" width="100" height="60" fill="#e8f5e8" stroke="#4a7c59" stroke-width="2" rx="8"/>
                        <text x="570" y="175" text-anchor="middle" fill="#2d4a2b" font-size="12" font-weight="bold">Interface</text>
                        <text x="570" y="195" text-anchor="middle" fill="#2d4a2b" font-size="10">USB/WiFi/Ethernet</text>
                        <!-- Computer -->
                        <rect x="670" y="150" width="100" height="60" fill="#ffcccc" stroke="#cc6666" stroke-width="2" rx="8"/>
                        <text x="720" y="175" text-anchor="middle" fill="#cc3333" font-size="12" font-weight="bold">Computer</text>
                        <text x="720" y="195" text-anchor="middle" fill="#cc3333" font-size="10">Display/Analysis</text>
                        <!-- Connections -->
                        <line x1="150" y1="80" x2="200" y2="80" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="320" y1="80" x2="370" y2="80" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="470" y1="80" x2="520" y2="80" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="570" y1="110" x2="570" y2="150" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="320" y1="180" x2="370" y2="180" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="470" y1="180" x2="520" y2="180" stroke="#2d4a2b" stroke-width="2"/>
                        <line x1="620" y1="180" x2="670" y2="180" stroke="#2d4a2b" stroke-width="2"/>
                        <!-- Control lines -->
                        <line x1="260" y1="110" x2="260" y2="150" stroke="#cc3333" stroke-width="2" stroke-dasharray="5,5"/>
                        <line x1="420" y1="110" x2="420" y2="150" stroke="#cc3333" stroke-width="2" stroke-dasharray="5,5"/>
                        <text x="260" y="130" text-anchor="middle" fill="#cc3333" font-size="10">Control</text>
                    </svg>
                </div>
            </div>
            <h3>Data Logger Characteristics</h3>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Modularity:</strong> Can be expanded with additional channels or modules</li>
                <li><strong>Reliability:</strong> Must operate continuously without failure</li>
                <li><strong>Accuracy:</strong> High precision in measurements</li>
                <li><strong>Management Tool:</strong> Software for configuration, monitoring, and analysis</li>
                <li><strong>Easy to Use:</strong> Intuitive interface for setup and operation</li>
            </ul>
            <h3>Data Storage Concepts</h3>
            <h4>Storage Types</h4>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Primary Storage:</strong> Fast, volatile (RAM, cache)</li>
                <li><strong>Secondary Storage:</strong> Non-volatile, moderate speed (HDD, SSD, flash)</li>
                <li><strong>Tertiary Storage:</strong> Non-volatile, slow access (tape libraries, optical jukeboxes)</li>
            </ul>
            <h4>Data Compression</h4>
            <p>Process of encoding information using fewer bits than the original representation.</p>
            <ul style="margin-left: 30px; color: #2d4a2b;">
                <li><strong>Lossless:</strong> Original data can be perfectly reconstructed</li>
                <li><strong>Lossy:</strong> Some data is lost, but file size is significantly reduced</li>
                <li><strong>Trade-offs:</strong> Compression ratio vs. processing time vs. quality</li>
            </ul>
            <h4>RAID (Redundant Array of Independent Disks)</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>RAID Level</th>
                        <th>Description</th>
                        <th>Advantages</th>
                        <th>Disadvantages</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>RAID 0</strong></td>
                        <td>Striping without parity</td>
                        <td>High performance, full capacity</td>
                        <td>No redundancy, high risk</td>
                    </tr>
                    <tr>
                        <td><strong>RAID 1</strong></td>
                        <td>Mirroring</td>
                        <td>High reliability, fast read</td>
                        <td>50% capacity loss, slow write</td>
                    </tr>
                    <tr>
                        <td><strong>RAID 5</strong></td>
                        <td>Block-level striping with distributed parity</td>
                        <td>Good performance, fault tolerance, efficient storage</td>
                        <td>Complex controller, slow write</td>
                    </tr>
                    <tr>
                        <td><strong>RAID 6</strong></td>
                        <td>Block-level striping with double distributed parity</td>
                        <td>Can survive two disk failures</td>
                        <td>Higher cost, slower write</td>
                    </tr>
                </tbody>
            </table>
            <div class="exam-tip">
                <h4>Exam Focus:</h4>
                <p>Understand the components of a DAQ system and how they work together. Be prepared to explain the purpose of each component and how data flows through the system.</p>
            </div>
        </section>
        <script>
            function scrollToSection(id) {
                const element = document.getElementById(id);
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' });
                }
            }
        </script>
    </div>
</body>
</html>



<!-- <==========chapter6 start=================>-->







<!-- https://claude.ai/chat/8d17df5b-cc6c-4093-9764-87811967c4d5 -->
 <!-- https://chat.qwen.ai/c/44d7f928-2b8e-474e-a04a-6cb916bf6fe2 -->