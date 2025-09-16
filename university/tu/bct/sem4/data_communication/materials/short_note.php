<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Communication Syllabus - Complete Chapter Navigation | Engineering Curriculum</title>
    <meta name="description" content="Comprehensive syllabus for Data Communication course covering principles, protocols, transmission media, signal encoding, multiplexing, switching, and wireless communications for engineering students.">
    <meta name="keywords" content="data communication syllabus, engineering syllabus, communication protocols, transmission media, signal encoding, multiplexing, switching, wireless communications, cellular networks, 5G, IoT">
    
    <style>
        :root {
            --primary-green: #2e8b57;
            --secondary-green: #3cb371;
            --accent-yellow: #ffd700;
            --light-yellow: #fffacd;
            --text-dark: #333333;
            --text-light: #ffffff;
            --border-color: #3cb371;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light-yellow);
            color: var(--text-dark);
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: var(--text-light);
            padding: 30px 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(46, 139, 87, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        header::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--accent-yellow);
        }
        
        h1 {
            font-size: 2.8rem;
            margin-bottom: 8px;
            color: var(--accent-yellow);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            font-weight: 700;
        }
        
        .subtitle {
            font-size: 1.4rem;
            opacity: 0.9;
            font-weight: 400;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Main Navigation Section */
        .syllabus-nav {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            border-left: 5px solid var(--accent-yellow);
        }
        
        .syllabus-nav h2 {
            color: var(--primary-green);
            border-bottom: 3px solid var(--accent-yellow);
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 2rem;
            position: relative;
        }
        
        .syllabus-nav h2::after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--accent-yellow);
        }
        
        .nav-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .nav-item {
            margin-bottom: 15px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid var(--secondary-green);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .nav-item:hover {
            transform: translateX(5px);
            background-color: var(--light-yellow);
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }
        
        .nav-item h3 {
            color: var(--primary-green);
            margin-bottom: 8px;
            font-size: 1.4rem;
        }
        
        .nav-item ul {
            margin-left: 20px;
            margin-top: 8px;
            padding-left: 15px;
        }
        
        .nav-item li {
            margin-bottom: 6px;
            color: var(--text-dark);
            font-size: 1.05rem;
            position: relative;
            padding-left: 18px;
        }
        
        .nav-item li:before {
            content: "•";
            color: var(--accent-yellow);
            font-weight: bold;
            position: absolute;
            left: 0;
            top: 0;
        }
        
        .nav-item strong {
            color: var(--primary-green);
        }
        
        /* Content Sections */
        .content-section {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.05);
            border-left: 5px solid var(--accent-yellow);
            transition: transform 0.3s ease;
        }
        
        .content-section:hover {
            transform: translateY(-5px);
        }
        
        .content-section h2 {
            color: var(--primary-green);
            border-bottom: 3px solid var(--accent-yellow);
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 2rem;
            position: relative;
        }
        
        .content-section h2::after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--accent-yellow);
        }
        
        .content-section h3 {
            color: var(--secondary-green);
            margin-top: 20px;
            margin-bottom: 12px;
            font-size: 1.6rem;
        }
        
        .content-section p {
            margin-bottom: 15px;
            font-size: 1.1rem;
            line-height: 1.7;
        }
        
        .content-section ul, .content-section ol {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        .content-section li {
            margin-bottom: 8px;
            font-size: 1.05rem;
            position: relative;
            padding-left: 20px;
        }
        
        .content-section li:before {
            content: "•";
            color: var(--accent-yellow);
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .content-section table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }
        
        .content-section th, .content-section td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        .content-section th {
            background-color: var(--secondary-green);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        
        .content-section tr:nth-child(even) {
            background-color: var(--light-yellow);
        }
        
        .content-section tr:hover {
            background-color: #fff8dc;
        }
        
        .highlight {
            background-color: var(--light-yellow);
            border-left: 5px solid var(--accent-yellow);
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
            font-weight: 500;
            font-size: 1.1rem;
        }
        
        .references {
            background-color: #f0f7f0;
            border: 2px dashed var(--secondary-green);
            border-radius: 10px;
            padding: 25px;
            margin: 30px 0;
        }
        
        .references h2 {
            color: var(--primary-green);
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        
        .reference-item {
            margin-bottom: 10px;
            padding-left: 15px;
            position: relative;
            font-size: 1.05rem;
        }
        
        .reference-item:before {
            content: "•";
            color: var(--secondary-green);
            position: absolute;
            left: 0;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: var(--text-light);
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            border-radius: 8px;
            font-size: 1rem;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.2rem;
            }
            
            .subtitle {
                font-size: 1.2rem;
            }
            
            .syllabus-nav h2,
            .content-section h2 {
                font-size: 1.8rem;
            }
            
            .content-section h3,
            .nav-item h3 {
                font-size: 1.3rem;
            }
            
            .nav-item,
            .content-section,
            .references,
            .syllabus-nav {
                padding: 20px;
            }
            
            .content-section p,
            .content-section li,
            .nav-item li,
            .reference-item {
                font-size: 1rem;
            }
            
            .content-section table,
            .content-section th,
            .content-section td {
                padding: 8px;
                font-size: 0.9rem;
            }
            
            .content-section th {
                font-size: 0.85rem;
            }
            
            .nav-item ul {
                margin-left: 15px;
                padding-left: 10px;
            }
            
            .nav-item li:before,
            .reference-item:before {
                font-size: 1.2rem;
            }
        }
        
        @media (max-width: 480px) {
            h1 {
                font-size: 1.8rem;
            }
            
            .subtitle {
                font-size: 1.1rem;
            }
            
            .container {
                padding: 10px;
            }
            
            .syllabus-nav,
            .content-section,
            .references {
                padding: 15px;
            }
            
            .content-section h2,
            .syllabus-nav h2 {
                font-size: 1.6rem;
            }
            
            .content-section h3,
            .nav-item h3 {
                font-size: 1.2rem;
            }
            
            .content-section p,
            .content-section li,
            .nav-item li,
            .reference-item {
                font-size: 0.95rem;
            }
            
            .highlight {
                font-size: 1rem;
                padding: 12px;
            }
        }
        
        /* Anchor Links for Navigation */
        .anchor-link {
            display: block;
            margin-top: 15px;
            color: var(--accent-yellow);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .anchor-link:hover {
            text-decoration: underline;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <header>
        <h1>Data Communication Syllabus</h1>
        <div class="subtitle">Comprehensive Engineering Course Outline for Year II, Part II</div>
    </header>

    <div class="container">
        <!-- MAIN SYLLABUS NAVIGATION -->
        <section class="syllabus-nav">
            <h2>Course Structure & Chapter Navigation</h2>
            <ul class="nav-list">
                <li class="nav-item">
                    <h3>1. Introduction (4 hours)</h3>
                    <ul>
                        <li>1.1 Analog data communication, data representation, data flows</li>
                        <li>1.2 Evolution of data communication</li>
                        <li>1.3 A communication model, data communication model</li>
                        <li>1.4 Networks (LAN, WAN), simplified network architecture, the OSI model</li>
                        <li>1.5 Data communication and networking for today enterprise</li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <h3>2. Data Communication Fundamentals (5 hours)</h3>
                    <ul>
                        <li>2.1 Analog and digital data</li>
                        <li>2.2 Analog signals, periodic and aperiodic signals, periodic signals characteristics (Time, frequency domain)</li>
                        <li>2.3 Introduction to Fourier series representation of periodic signal, Fourier transform representation of aperiodic signals, digital signals and its characteristics</li>
                        <li>2.4 Analog and digital transmission, transmission mode, transmission impairments (Attenuation, distortion, noise)</li>
                        <li>2.5 Data rate limits channel capacity, Nyquist bandwidth, Shannon capacity formula</li>
                        <li>2.6 Performance of network (Bandwidth, throughput, latency, jitter)</li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <h3>3. Transmission Media and Data Compression (9 hours)</h3>
                    <ul>
                        <li>3.1 Guided transmission media: co-axial cable, twisted pair, optical fiber</li>
                        <li>3.2 Unguided transmission media: Radio waves, microwaves, infrared</li>
                        <li>3.3 Antenna basics, satellite communication</li>
                        <li>3.4 Wireless propagation (Introduction to groundwave propagation, sky wave propagation and line of sight propagation), frequency bands</li>
                        <li>3.5 Error detection and correction: Parity, check sum, cyclic redundancy check, hamming code</li>
                        <li>3.6 Data compression: Lossy and lossless</li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <h3>4. Signal Encoding Techniques (15 hours)</h3>
                    <ul>
                        <li>4.1 Digital data, digital signal: RZ, NRZ, AMI, Manchester, differential Manchester, B8ZS, HDB3 for data transmission</li>
                        <li>4.2 Analog data to analog signals: AM, FM, PM, DSBSC, SSBSC, VSBSC</li>
                        <li>4.3 Analog data to digital signals: PCM, Delta Modulation</li>
                        <li>4.4 Digital data to analog signals: ASK, FSK, PSK, QAM</li>
                        <li>4.5 Pulse modulation: PAM, PWM, PPM</li>
                        <li>4.6 Spread spectrum: DSSS, FHSS, CDMA</li>
                        <li>4.7 Constellation diagrams and modulation efficiency</li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <h3>5. Multiplexing and Switching (8 hours)</h3>
                    <ul>
                        <li>5.1 Introduction to multiplexing, application of multiplexing</li>
                        <li>5.2 Frequency division multiple access (FDMA)</li>
                        <li>5.3 Time division multiple access (TDMA): Synchronous vs Statistical</li>
                        <li>5.4 Asymmetric digital subscriber line (ADSL), XDSL</li>
                        <li>5.5 Spread spectrum: DSSS, FHSS, CDMA</li>
                        <li>5.6 Introduction to switching: Connection-oriented vs connectionless</li>
                        <li>5.7 Switching devices: Types, importance and application (Hub, Switch, Router)</li>
                        <li>5.8 Circuit switching: Concepts, message switching</li>
                        <li>5.9 Packet switching: Virtual circuit switching, datagram switching</li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <h3>6. Cellular Wireless Communications and Latest Trends (4 hours)</h3>
                    <ul>
                        <li>6.1 Overview of 1G, 2G, 3G, 4G, 5G evolution</li>
                        <li>6.2 Cellular technology fundamentals: Cell, cluster, frequency reuse, adjacent channel interference, co-channel interference</li>
                        <li>6.3 Handoff strategies: Mobile assisted handoff (MAHO), guard channels, umbrella cell concept</li>
                        <li>6.4 Architecture of GSM basics</li>
                        <li>6.5 Introduction to 5G networks: mmWave, Massive MIMO, Beamforming</li>
                        <li>6.6 Software Defined Networking (SDN), Network Function Virtualization (NFV)</li>
                        <li>6.7 IoT communication: H2M, M2M, M2H, M2C, technologies (Bluetooth, LoRaWAN, NB-IoT)</li>
                        <li>6.8 Cloud computing and virtualization in data communication</li>
                    </ul>
                </li>
            </ul>
        </section>

        <!-- CHAPTER 1 -->
        <section class="content-section" id="chapter1">
            <h2>Chapter 1: Introduction</h2>
            <p>This chapter introduces foundational concepts of data communication systems, including terminology, models, network types, and the OSI reference model.</p>
            
            <h3>1.1 Analog Data Communication, Data Representation, Data Flows</h3>
            <p>Data is the entity conveying meaning based on agreed rules. It exists in two forms:</p>
            <ul>
                <li><strong>Analog Data:</strong> Continuous values within an interval (e.g., sound, temperature).</li>
                <li><strong>Digital Data:</strong> Discrete finite values (e.g., text, binary files).</li>
            </ul>
            <p>Data must be converted into signals (electrical/optical) for transmission. Common representations include ASCII/Unicode for text, pixel matrices for images, and PCM for audio.</p>
            
            <h3>1.2 Evolution of Data Communication</h3>
            <p>From telegraph systems to modern high-speed digital networks, data communication has evolved through key milestones: analog telephony → digital switching → packet switching → broadband internet → mobile wireless → IoT/cloud integration.</p>
            
            <h3>1.3 Communication Model</h3>
            <p>A data communication system consists of five components:</p>
            <ol>
                <li><strong>Message:</strong> Information to be transmitted (text, audio, video).</li>
                <li><strong>Sender:</strong> Device generating data (computer, phone).</li>
                <li><strong>Receiver:</strong> Device receiving data.</li>
                <li><strong>Transmission Medium:</strong> Physical path (cable, air, fiber).</li>
                <li><strong>Protocol:</strong> Rules governing data exchange (TCP/IP, HTTP).</li>
            </ol>
            
            <h3>1.4 Networks and OSI Model</h3>
            <p><strong>Network Types:</strong></p>
            <ul>
                <li><strong>PAN:</strong> Personal Area Network (Bluetooth, USB)</li>
                <li><strong>LAN:</strong> Local Area Network (Home/office Wi-Fi)</li>
                <li><strong>CAN:</strong> Campus Area Network (University)</li>
                <li><strong>MAN:</strong> Metropolitan Area Network (City-wide)</li>
                <li><strong>WAN:</strong> Wide Area Network (Internet)</li>
            </ul>
            
            <p><strong>OSI Model (7 Layers):</strong></p>
            <table>
                <thead>
                    <tr>
                        <th>Layer</th>
                        <th>Name</th>
                        <th>Function</th>
                        <th>Example Protocols</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>7</td>
                        <td>Application</td>
                        <td>User interface, services</td>
                        <td>HTTP, FTP, SMTP</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Presentation</td>
                        <td>Data translation, encryption, compression</td>
                        <td>SSL/TLS, JPEG, ASCII</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Session</td>
                        <td>Connection management, synchronization</td>
                        <td>SIP, NetBIOS</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Transport</td>
                        <td>End-to-end delivery, flow control</td>
                        <td>TCP, UDP</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Network</td>
                        <td>Logical addressing, routing</td>
                        <td>IP, ICMP</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Data Link</td>
                        <td>Physical addressing, framing</td>
                        <td>Ethernet, MAC</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Physical</td>
                        <td>Raw bit transmission</td>
                        <td>UTP, Fiber, Wi-Fi</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>1.5 Data Communication in Today's Enterprise</h3>
            <p>Modern enterprises rely on:</p>
            <ul>
                <li>Internal communication (email, Teams, Slack)</li>
                <li>Cloud computing & remote access</li>
                <li>Data storage & sharing</li>
                <li>Real-time applications (VoIP, video conferencing)</li>
                <li>IoT & automation systems</li>
            </ul>
            
            <div class="highlight">
                <strong>Key Exam Tip:</strong> Memorize the 7 OSI layers using the mnemonic: “Please Do Not Throw Sausage Pizza Away” (Physical → Application).
            </div>
        </section>

        <!-- CHAPTER 2 -->
        <section class="content-section" id="chapter2">
            <h2>Chapter 2: Data Communication Fundamentals</h2>
            <p>This chapter covers the mathematical and physical foundations of signal representation, analysis, and performance metrics.</p>
            
            <h3>2.1 Analog and Digital Data</h3>
            <p><strong>Analog Data:</strong> Continuous variation over time (e.g., voice waveform).<br>
            <strong>Digital Data:</strong> Discrete values represented as binary bits (0s and 1s).</p>
            
            <h3>2.2 Signals and Characteristics</h3>
            <p><strong>Analog Signal:</strong> Continuous function x(t) representing voltage/current variation.<br>
            <strong>Digital Signal:</strong> Discrete step-function with defined levels.</p>
            
            <p><strong>Periodic Signal:</strong> Repeats after fixed interval T: x(t) = x(t + T)<br>
            <strong>Aperiodic Signal:</strong> Non-repeating (e.g., speech, noise).</p>
            
            <h3>2.3 Fourier Analysis</h3>
            <p><strong>Fourier Series:</strong> Represents periodic signals as sum of sinusoids:<br>
            <code>x(t) = a₀ + Σ[aₙ·cos(nω₀t) + bₙ·sin(nω₀t)]</code></p>
            
            <p><strong>Fourier Transform:</strong> Converts aperiodic signals to frequency domain:<br>
            <code>X(ω) = ∫x(t)e⁻ʲʷᵗ dt</code></p>
            
            <p><strong>Dirichlet Conditions:</strong> Required for convergence:
            <ul>
                <li>Finitely many maxima/minima</li>
                <li>Finitely many discontinuities</li>
                <li>Absolute integrable: ∫|x(t)|dt < ∞</li>
            </ul>
            </p>
            
            <h3>2.4 Analog and Digital Transmission</h3>
            <p><strong>Transmission Modes:</strong></p>
            <ul>
                <li><strong>Simplex:</strong> One-way (keyboard → monitor)</li>
                <li><strong>Half-Duplex:</strong> Two-way, alternating (walkie-talkie)</li>
                <li><strong>Full-Duplex:</strong> Simultaneous two-way (telephone)</li>
            </ul>
            
            <p><strong>Transmission Impairments:</strong></p>
            <ul>
                <li><strong>Attenuation:</strong> Signal loss over distance</li>
                <li><strong>Distortion:</strong> Change in signal shape</li>
                <li><strong>Noise:</strong> Unwanted signals (thermal, intermodulation)</li>
            </ul>
            
            <h3>2.5 Data Rate Limits</h3>
            <p><strong>Nyquist Bit Rate (Noiseless Channel):</strong><br>
            <code>C = 2B log₂L</code><br>
            Where: B = bandwidth (Hz), L = number of signal levels</p>
            
            <p><strong>Shannon Capacity (Noisy Channel):</strong><br>
            <code>C = B log₂(1 + SNR)</code><br>
            Where: SNR = Signal-to-Noise Ratio (linear scale)</p>
            
            <p><strong>SNR(dB) to Linear:</strong><br>
            <code>SNR_linear = 10^(SNR_dB / 10)</code></p>
            
            <h3>2.6 Network Performance Metrics</h3>
            <table>
                <thead>
                    <tr>
                        <th>Metric</th>
                        <th>Description</th>
                        <th>Formula</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bandwidth (Hz)</td>
                        <td>Frequency range of channel</td>
                        <td>f_max - f_min</td>
                    </tr>
                    <tr>
                        <td>Throughput</td>
                        <td>Actual data rate achieved</td>
                        <td>Total bits / Time taken</td>
                    </tr>
                    <tr>
                        <td>Latency</td>
                        <td>Total delay from source to destination</td>
                        <td>Propagation + Transmission + Queuing + Processing</td>
                    </tr>
                    <tr>
                        <td>Propagation Time</td>
                        <td>Time for bit to travel distance d</td>
                        <td>t_p = d / v (v ≈ 2×10⁸ m/s)</td>
                    </tr>
                    <tr>
                        <td>Transmission Time</td>
                        <td>Time to push entire message onto link</td>
                        <td>t_t = L / B (L = size in bits, B = bandwidth)</td>
                    </tr>
                    <tr>
                        <td>Bandwidth-Delay Product</td>
                        <td>Max bits "in flight" on link</td>
                        <td>BDP = Bandwidth × Delay</td>
                    </tr>
                    <tr>
                        <td>Jitter</td>
                        <td>Variation in packet delay</td>
                        <td>Standard deviation of inter-packet delays</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="highlight">
                <strong>Exam Focus:</strong> Practice converting SNR from dB to linear and applying both Nyquist and Shannon formulas. Understand when each applies.
            </div>
        </section>

        <!-- CHAPTER 3 -->
        <section class="content-section" id="chapter3">
            <h2>Chapter 3: Transmission Media and Data Compression</h2>
            <p>This chapter explores physical transmission mediums and techniques to reduce data size efficiently.</p>
            
            <h3>3.1 Guided Transmission Media</h3>
            <p><strong>Twisted Pair:</strong> Copper wires twisted to cancel EMI. Categories: Cat 5 (100 Mbps), Cat 6 (1 Gbps+). UTP (unshielded) common; STP (shielded) for noisy environments.</p>
            
            <p><strong>Coaxial Cable:</strong> Central conductor, insulator, braided shield, outer jacket. Used in cable TV and legacy LANs. Bandwidth up to 2 Gbps over 1 km.</p>
            
            <p><strong>Optical Fiber:</strong> Glass/plastic strands transmitting light. Three types:</p>
            <ul>
                <li><strong>Single-mode:</strong> Narrow core (8–10 μm), laser source, long-distance (>100 km), high bandwidth (>100 Gbps)</li>
                <li><strong>Multi-mode Step Index:</strong> Wider core, LED source, short distance (<2 km), modal dispersion</li>
                <li><strong>Multi-mode Graded Index:</strong> Gradually decreasing refractive index, reduces modal dispersion, supports up to 2 Gbps over 100 km</li>
            </ul>
            
            <h3>3.2 Unguided Transmission Media</h3>
            <p><strong>Radio Waves (3 kHz – 1 GHz):</strong> Omnidirectional, penetrates walls. Used in AM/FM radio, cellular sub-6GHz.</p>
            
            <p><strong>Microwaves (1 GHz – 300 GHz):</strong> Directional, line-of-sight. Used in terrestrial microwave links and satellite comms.</p>
            
            <p><strong>Infrared (300 GHz – 400 GHz):</strong> Short-range, unidirectional, secure. Used in remotes, IrDA.</p>
            
            <h3>3.3 Antenna Basics and Satellite Communication</h3>
            <p><strong>Antenna Parameters:</strong></p>
            <ul>
                <li>Frequency (f), Wavelength (λ = c/f)</li>
                <li>Impedance Matching (Z = √(R² + (X_L - X_C)²))</li>
                <li>VSWR = (1 + |Γ|)/(1 - |Γ|) — Ideal = 1:1</li>
                <li>Directivity D = 4π·U_max / P_rad</li>
                <li>Gain G = η_e · D (η_e = efficiency)</li>
            </ul>
            
            <p><strong>Satellite Orbits:</strong></p>
            <table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Altitude</th>
                        <th>Orbital Period</th>
                        <th>Latency</th>
                        <th>Use Case</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GEO</td>
                        <td>35,786 km</td>
                        <td>24 hrs</td>
                        <td>~600 ms</td>
                        <td>TV broadcasting, weather</td>
                    </tr>
                    <tr>
                        <td>MEO</td>
                        <td>2,000–20,000 km</td>
                        <td>2–12 hrs</td>
                        <td>~100–200 ms</td>
                        <td>GPS, Galileo</td>
                    </tr>
                    <tr>
                        <td>LEO</td>
                        <td>160–2,000 km</td>
                        <td>90–120 min</td>
                        <td>~30–50 ms</td>
                        <td>Starlink, Earth imaging</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>3.4 Wireless Propagation</h3>
            <p><strong>Ground Wave:</strong> Follows Earth’s curvature. Frequencies: 30 kHz – 2 MHz. Used in AM radio.</p>
            
            <p><strong>Sky Wave:</strong> Reflected by ionosphere. Frequencies: 3–30 MHz. Used in international HF radio.</p>
            
            <p><strong>Line-of-Sight (LOS):</strong> Direct path. Frequencies: >30 MHz. Used in cellular, Wi-Fi, satellite.</p>
            
            <p><strong>LOS Distance Formula:</strong><br>
            <code>d = √(2hₜ) + √(2hᵣ)</code> (d in km, h in meters)</p>
            
            <h3>3.5 Error Detection and Correction</h3>
            <p><strong>Parity Check:</strong> Adds one bit to make number of 1s even/odd. Detects single-bit errors only.</p>
            
            <p><strong>Checksum:</strong> Sum segments, take 1’s complement. Used in IP/TCP headers.</p>
            
            <p><strong>Cyclic Redundancy Check (CRC):</strong> Uses polynomial division. Most reliable for burst error detection.</p>
            
            <p><strong>Hamming Code:</strong> Corrects single-bit errors. For m data bits, need r parity bits where 2ʳ ≥ m + r + 1.</p>
            
            <h3>3.6 Data Compression</h3>
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Lossless Compression</th>
                        <th>Lossy Compression</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Reversibility</td>
                        <td>Yes</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>Quality</td>
                        <td>No degradation</td>
                        <td>Reduced quality</td>
                    </tr>
                    <tr>
                        <td>Compression Ratio</td>
                        <td>Low (2:1 to 5:1)</td>
                        <td>High (10:1 to 100:1)</td>
                    </tr>
                    <tr>
                        <td>Applications</td>
                        <td>Text, programs, medical images</td>
                        <td>Audio, video, photos</td>
                    </tr>
                    <tr>
                        <td>Algorithms</td>
                        <td>Huffman, LZW, Run-Length</td>
                        <td>JPEG, MP3, MPEG, DCT</td>
                    </tr>
                    <tr>
                        <td>Examples</td>
                        <td>PNG, ZIP, FLAC, FFV1</td>
                        <td>JPEG, MP3, MP4</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="highlight">
                <strong>Exam Tip:</strong> Know Hamming code encoding steps (find r, assign positions, calculate parity bits, detect/correct errors). Master difference between lossy and lossless.
            </div>
        </section>

        <!-- CHAPTER 4 -->
        <section class="content-section" id="chapter4">
            <h2>Chapter 4: Signal Encoding Techniques</h2>
            <p>This chapter details how data is encoded into signals for transmission across various media.</p>
            
            <h3>4.1 Digital Data to Digital Signal (Line Coding)</h3>
            <p><strong>Unipolar:</strong> 1 = positive voltage, 0 = zero. Problem: DC component, poor sync.</p>
            
            <p><strong>NRZ-L:</strong> 0 = high, 1 = low (or vice versa). No transition at bit boundary.</p>
            
            <p><strong>NRZ-I:</strong> 0 = no change, 1 = transition. Better synchronization.</p>
            
            <p><strong>RZ:</strong> Transition in middle of bit. Double bandwidth required.</p>
            
            <p><strong>Manchester:</strong> 1 = low-to-high transition, 0 = high-to-low. Self-clocking, no DC.</p>
            
            <p><strong>Differential Manchester:</strong> Always transition in middle. 0 = transition at start, 1 = no transition.</p>
            
            <p><strong>AMI (Alternate Mark Inversion):</strong> 0 = zero, 1 = alternating + and - pulses. Eliminates DC.</p>
            
            <p><strong>B8ZS (North America):</strong> Replaces 8 consecutive zeros with pattern: 000+-0-+ or 000-+0+- depending on last 1 polarity.</p>
            
            <p><strong>HDB3 (Europe):</strong> Replaces 4 consecutive zeros with pattern based on count of 1s since last substitution.</p>
            
            <h3>4.2 Analog Data to Analog Signals (Modulation)</h3>
            <p><strong>Amplitude Modulation (AM):</strong> s(t) = A_c[1 + μ·m(t)]·cos(2πf_c t)<br>
            Bandwidth = 2f_m<br>
            Power: P_AM = P_c(1 + μ²/2)<br>
            μ = 1 → 100% modulation</p>
            
            <p><strong>DSB-SC:</strong> Suppresses carrier. Power saved: 2/3 of AM.</p>
            
            <p><strong>SSB-SC:</strong> Transmits only one sideband. Bandwidth = f_m. Highest efficiency.</p>
            
            <p><strong>VSB-SC:</strong> Transmits one sideband + vestige of other. Used in TV broadcasting.</p>
            
            <p><strong>FM:</strong> f_i = f_c + k_f·m(t)<br>
            β = Δf / f_m<br>
            NBFM: β << 1, BW ≈ 2f_m<br>
            WBFM: β >> 1, BW ≈ 2(β+1)f_m</p>
            
            <p><strong>PM:</strong> φ_i = k_p·m(t)<br>
            s(t) = A_c cos(2πf_c t + k_p·m(t))</p>
            
            <h3>4.3 Analog Data to Digital Signals (PCM)</h3>
            <p>Three Steps:</p>
            <ol>
                <li><strong>Sampling:</strong> f_s ≥ 2f_m (Nyquist theorem)</li>
                <li><strong>Quantization:</strong> Map infinite amplitudes to discrete levels (n bits → 2ⁿ levels)</li>
                <li><strong>Encoding:</strong> Convert quantized levels to binary</li>
            </ol>
            <p>Bit rate = f_s × n. For voice: 8 kHz × 8 bits = 64 kbps.</p>
            
            <h3>4.4 Digital Data to Analog Signals (Digital Modulation)</h3>
            <p><strong>ASK:</strong> Amplitude varies (0 = off, 1 = on). Simple but noise-sensitive.</p>
            
            <p><strong>FSK:</strong> Frequency shifts (f₁ for 1, f₀ for 0). Better noise immunity than ASK.</p>
            
            <p><strong>PSK:</strong> Phase changes. BPSK: 0° = 0, 180° = 1. Robust, low BER.</p>
            
            <p><strong>QPSK:</strong> 4 phases → 2 bits per symbol. Bandwidth efficient.</p>
            
            <p><strong>QAM:</strong> Combines amplitude and phase. Higher order = more bits/symbol:</p>
            <ul>
                <li>4-QAM = 2 bits</li>
                <li>16-QAM = 4 bits</li>
                <li>64-QAM = 6 bits</li>
                <li>256-QAM = 8 bits</li>
            </ul>
            <p>Used in Wi-Fi 6/7, 5G, cable modems.</p>
            
            <h3>4.5 Pulse Modulation</h3>
            <p><strong>PAM:</strong> Pulse amplitude varies with analog signal. Basis for PCM.</p>
            
            <p><strong>PWM/PDM:</strong> Pulse width/duration varies. Used in motor control.</p>
            
            <p><strong>PPM:</strong> Pulse position varies. Used in optical comms, low-power applications.</p>
            
            <h3>4.6 Spread Spectrum</h3>
            <p><strong>DSSS:</strong> Multiplies data with pseudo-random chip sequence. Used in CDMA, Wi-Fi 802.11b.</p>
            
            <p><strong>FHSS:</strong> Jumps between frequencies. Used in Bluetooth, military comms.</p>
            
            <p><strong>Fast FHSS:</strong> Multiple hops per bit → better security</p>
            <p><strong>Slow FHSS:</strong> One hop per byte → simpler implementation</p>
            
            <div class="highlight">
                <strong>Exam Focus:</strong> Be able to encode/decode Hamming code. Know formulas for AM, FM, Nyquist, Shannon. Compare modulation schemes (ASK vs FSK vs PSK). Understand constellation diagrams for QAM.
            </div>
        </section>

        <!-- CHAPTER 5 -->
        <section class="content-section" id="chapter5">
            <h2>Chapter 5: Multiplexing and Switching</h2>
            <p>This chapter covers methods for sharing communication channels and directing data traffic.</p>
            
            <h3>5.1 Multiplexing Overview</h3>
            <p>Multiplexing combines multiple signals into one for shared medium use.</p>
            <ul>
                <li><strong>FDM:</strong> Frequency Division Multiplexing — separate frequency bands</li>
                <li><strong>TDM:</strong> Time Division Multiplexing — separate time slots</li>
                <li><strong>WDM:</strong> Wavelength Division Multiplexing — optical fiber version of FDM</li>
            </ul>
            
            <h3>5.2 FDMA</h3>
            <p>Each user gets dedicated frequency band. Continuous transmission. Used in 1G (AMPS).</p>
            <p>Advantages: Simple, low overhead, no sync needed.</p>
            <p>Disadvantages: Inefficient bandwidth use, requires duplexers, prone to adjacent channel interference.</p>
            
            <h3>5.3 TDMA</h3>
            <p>Multiple users share same frequency using time slots. Burst transmission. Used in 2G (GSM).</p>
            <p>Advantages: Efficient bandwidth use, enables MAHO, lower power consumption.</p>
            <p>Disadvantages: Requires precise synchronization, guard times reduce efficiency.</p>
            
            <h3>5.4 Asymmetric DSL (ADSL/XDSL)</h3>
            <p>Uses existing telephone lines. Separates voice (0–4 kHz) and data (>25 kHz) via filters.</p>
            <p>Asymmetric: Download speed > Upload speed.</p>
            
            <h3>5.5 Spread Spectrum (CDMA)</h3>
            <p>All users transmit simultaneously over full spectrum using unique spreading codes.</p>
            <p>Key Features:</p>
            <ul>
                <li>Soft capacity limit — performance degrades gradually with more users</li>
                <li>Soft handoff — seamless transition between base stations</li>
                <li>RAKE receiver combats multipath</li>
                <li>Self-jamming due to imperfect orthogonality</li>
                <li>Near-far problem — requires precise power control</li>
            </ul>
            
            <p><strong>CDMA Example:</strong> Four stations with orthogonal codes [1,1,-1,-1], [1,-1,-1,1], etc. Transmit: multiply data by code, sum results. Receive: multiply received signal by own code, divide by N.</p>
            
            <h3>5.6 Switching Concepts</h3>
            <p><strong>Connection-Oriented:</strong> Path established before data transfer (virtual circuit)</p>
            <p><strong>Connectionless:</strong> Each packet routed independently (datagram)</p>
            
            <h3>5.7 Switching Devices</h3>
            <table>
                <thead>
                    <tr>
                        <th>Device</th>
                        <th>OSI Layer</th>
                        <th>Function</th>
                        <th>Intelligence</th>
                        <th>Security</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hub</td>
                        <td>1 (Physical)</td>
                        <td>Broadcasts to all ports</td>
                        <td>None</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Switch</td>
                        <td>2 (Data Link)</td>
                        <td>Forwards by MAC address</td>
                        <td>Medium</td>
                        <td>Moderate (VLAN)</td>
                    </tr>
                    <tr>
                        <td>Router</td>
                        <td>3 (Network)</td>
                        <td>Routes by IP address</td>
                        <td>High</td>
                        <td>High (ACL, Firewall)</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>5.8 Circuit Switching</h3>
            <p>Dedicated path established end-to-end before communication. Used in traditional telephony.</p>
            <p>Advantages: Constant latency, guaranteed bandwidth.</p>
            <p>Disadvantages: Long setup time, inefficient resource use, expensive.</p>
            
            <h3>5.9 Packet Switching</h3>
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Datagram Network</th>
                        <th>Virtual Circuit Network</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Connection Type</td>
                        <td>Connectionless</td>
                        <td>Connection-oriented</td>
                    </tr>
                    <tr>
                        <td>Routing</td>
                        <td>Per-packet, dynamic</td>
                        <td>Pre-established path</td>
                    </tr>
                    <tr>
                        <td>Packet Order</td>
                        <td>May arrive out of order</td>
                        <td>Arrive in order</td>
                    </tr>
                    <tr>
                        <td>Header Size</td>
                        <td>Larger (full addresses)</td>
                        <td>Smaller (VCI only)</td>
                    </tr>
                    <tr>
                        <td>Reliability</td>
                        <td>Lower</td>
                        <td>Higher</td>
                    </tr>
                    <tr>
                        <td>Delay</td>
                        <td>Higher</td>
                        <td>Lower</td>
                    </tr>
                    <tr>
                        <td>Implementation Cost</td>
                        <td>Low</td>
                        <td>High</td>
                    </tr>
                    <tr>
                        <td>Example</td>
                        <td>IP (Internet)</td>
                        <td>X.25, ATM, Frame Relay</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="highlight">
                <strong>Exam Tip:</strong> Compare FDMA, TDMA, CDMA thoroughly. Know TDM hierarchy (T1, E1, T3). Understand why packet switching dominates Internet. Memorize differences between datagram and virtual circuit.
            </div>
        </section>

        <!-- CHAPTER 6 -->
        <section class="content-section" id="chapter6">
            <h2>Chapter 6: Cellular Wireless Communications and Latest Trends</h2>
            <p>This chapter explores mobile communication evolution and modern trends like 5G and IoT.</p>
            
            <h3>6.1 Evolution of Wireless Generations</h3>
            <table>
                <thead>
                    <tr>
                        <th>Generation</th>
                        <th>Technology</th>
                        <th>Data Rate</th>
                        <th>Key Feature</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1G</td>
                        <td>AMPS, NMTS</td>
                        <td>Analog Voice</td>
                        <td>FDMA, voice-only</td>
                    </tr>
                    <tr>
                        <td>2G</td>
                        <td>GSM, CDMA</td>
                        <td>14.4–64 kbps</td>
                        <td>Digital, SMS, roaming</td>
                    </tr>
                    <tr>
                        <td>2.5G</td>
                        <td>GPRS</td>
                        <td>Up to 171 kbps</td>
                        <td>Packet-switched data</td>
                    </tr>
                    <tr>
                        <td>2.75G</td>
                        <td>EDGE</td>
                        <td>Up to 473.6 kbps</td>
                        <td>Enhanced data rates</td>
                    </tr>
                    <tr>
                        <td>3G</td>
                        <td>UMTS, CDMA2000</td>
                        <td>384 kbps</td>
                        <td>Video calling, mobile internet</td>
                    </tr>
                    <tr>
                        <td>3.5G</td>
                        <td>HSPA</td>
                        <td>Up to 2 Mbps</td>
                        <td>High-speed downlink</td>
                    </tr>
                    <tr>
                        <td>4G</td>
                        <td>LTE, LTE-A</td>
                        <td>Up to 1 Gbps</td>
                        <td>All-IP network, VoLTE</td>
                    </tr>
                    <tr>
                        <td>5G</td>
                        <td>NR (New Radio)</td>
                        <td>≥20 Gbps</td>
                        <td>Ultra-low latency, massive IoT</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>6.2 Cellular Technology Fundamentals</h3>
            <p><strong>Cell:</strong> Coverage area around base station. Hexagonal geometry used for optimal coverage without gaps.</p>
            
            <p><strong>Cluster:</strong> Group of cells that collectively use all available frequencies once. Cluster size N = i² + ij + j² (i,j ≥ 0).</p>
            
            <p><strong>Frequency Reuse:</strong> Same frequencies reused in non-adjacent cells. Reuse factor = 1/N.</p>
            
            <p><strong>Reuse Distance D:</strong> Minimum distance between cells using same frequency. For N=7, D≈4.6R.</p>
            
            <p><strong>Interference Types:</strong></p>
            <ul>
                <li><strong>Co-Channel Interference (CCI):</strong> Same frequency used in nearby cells</li>
                <li><strong>Adjacent Channel Interference (ACI):</strong> Leakage from neighboring channels</li>
            </ul>
            
            <p><strong>Handoff Strategies:</strong></p>
            <ul>
                <li><strong>Guard Channels:</strong> Reserve some channels exclusively for handoffs</li>
                <li><strong>Queuing:</strong> Queue handoff requests if no channel available</li>
                <li><strong>Mobile Assisted Handoff (MAHO):</strong> Mobile measures neighbor signals → faster decisions</li>
                <li><strong>Umbrella Cell Concept:</strong> Macrocell covers high-speed users, microcells cover low-speed users</li>
            </ul>
            
            <h3>6.3 5G Technologies</h3>
            <p><strong>Millimeter Waves (mmWave):</strong> 24–100 GHz. High bandwidth, short range, blocked by obstacles.</p>
            
            <p><strong>Massive MIMO:</strong> Uses dozens of antennas at base station to serve multiple users simultaneously → increases capacity.</p>
            
            <p><strong>Beamforming:</strong> Focuses RF energy directionally toward users → improves signal strength and reduces interference.</p>
            
            <p><strong>Deployment Modes:</strong></p>
            <ul>
                <li><strong>Non-Standalone (NSA):</strong> Uses LTE core + 5G-NR radio</li>
                <li><strong>Standalone (SA):</strong> Dedicated 5G core network</li>
            </ul>
            
            <h3>6.4 IoT Communication</h3>
            <p><strong>Types:</strong></p>
            <ul>
                <li><strong>H2M:</strong> Human to Machine (voice recognition)</li>
                <li><strong>M2M:</strong> Machine to Machine (smart meter sending data)</li>
                <li><strong>M2H:</strong> Machine to Human (fire alarm triggering)</li>
                <li><strong>M2C:</strong> Machine to Cloud (sensor uploading to cloud)</li>
            </ul>
            
            <p><strong>Communication Technologies:</strong></p>
            <ul>
                <li><strong>Short-range:</strong> Bluetooth BLE, Zigbee, Wi-Fi, NFC</li>
                <li><strong>Long-range:</strong> Cellular (NB-IoT, LTE-M), LoRaWAN</li>
            </ul>
            
            <p><strong>Features:</strong> Low power, low bandwidth, scalability, reliability, security, interoperability.</p>
            
            <h3>6.5 Emerging Trends</h3>
            <p><strong>Software Defined Networking (SDN):</strong> Separates control plane (software) from data plane (hardware) → centralized network management.</p>
            
            <p><strong>Network Function Virtualization (NFV):</strong> Replaces hardware appliances (routers, firewalls) with software running on standard servers.</p>
            
            <p><strong>Cloud Computing:</strong> Enables remote access to computing resources, storage, and applications via internet.</p>
            
            <div class="highlight">
                <strong>Final Exam Focus:</strong> Memorize 1G→5G features. Understand cellular concepts (cluster, reuse, handoff). Know 5G key tech (mmWave, Massive MIMO, beamforming). Be able to explain IoT types and technologies. SDN/NFV are critical for future exams!
            </div>
        </section>

        <!-- TUTORIALS AND PRACTICAL -->
        <section class="content-section">
            <h2>Tutorial Details (15 hours)</h2>
            <ul>
                <li>Tutorials on different protocols in data communication: TCP/IP, HTTP/HTTPS, FTP</li>
                <li>Explore the function of Open Systems Interconnection (OSI) model — define seven layers</li>
                <li>Discover data communication devices and their applications (hub, switch, router, modem)</li>
                <li>Identify the application of used network topologies in real-world scenarios</li>
                <li>Collect ideas on security aspects of communication in present enterprise systems</li>
            </ul>
        </section>

        <section class="content-section">
            <h2>Practical Sessions (22.5 hours)</h2>
            <ul>
                <li>Signal analysis using MATLAB simulation environment</li>
                <li>Analog modulation generation and reconstruction (AM, FM)</li>
                <li>Pulse modulation generation and reconstruction (PAM, PWM, PPM)</li>
                <li>Conversion of given binary sequence into different line coding (NRZ, Manchester, AMI)</li>
                <li>Digital modulation (ASK, FSK, PSK) generation and reconstruction</li>
            </ul>
        </section>

        <!-- FINAL EXAM PATTERN -->
        <section class="content-section">
            <h2>Final Exam Pattern</h2>
            <table>
                <thead>
                    <tr>
                        <th>Chapter</th>
                        <th>Hours</th>
                        <th>Marks Distribution</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>5</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>9</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>15</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>8</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>45</strong></td>
                        <td><strong>60</strong></td>
                    </tr>
                </tbody>
            </table>
            <p class="highlight">Note: There may be minor deviation in marks distribution. Chapter 4 (Signal Encoding) carries highest weightage — focus here!</p>
        </section>

        <!-- REFERENCES -->
        <section class="references">
            <h2>References</h2>
            <div class="reference-item">Stallings, W. (2007). Data and Computer Communications. India: Pearson Education.</div>
            <div class="reference-item">Forouzan, B. A., Fegan, S. C. (2007). Data Communications and Networking (McGraw-Hill Forouzan Networking). United Kingdom: McGraw Hill Higher Education.</div>
            <div class="reference-item">Tanenbaum, A. S., Wetherall, D. (2011). Computer Networks. India: Pearson Prentice Hall.</div>
            <div class="reference-item">Rappaport, T. S. (2024). Wireless Communications: Principles and Practice. United Kingdom: Cambridge University Press.</div>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 Department of Electronics and Computer Engineering, Pulchowk Campus</p>
        <p>Designed for Engineering Students — Optimized for Mobile & Desktop Viewing</p>
    </footer>
</body>
</html>