<!-- <==========cahpter1 start===========> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 1: Introduction to Data Communication</title>
    <style>
        :root {
            --primary-green: #2e8b57;
            --secondary-green: #3cb371;
            --accent-yellow: #ffd700;
            --light-yellow: #fffacd;
            --text-dark: #333333;
            --text-light: #555555;
            --border-color: #3cb371;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            color: var(--text-dark);
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(46, 139, 87, 0.1);
            overflow: hidden;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            text-align: center;
            padding: 40px 20px;
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
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            font-weight: 700;
        }
        
        h2 {
            color: var(--primary-green);
            border-bottom: 3px solid var(--accent-yellow);
            padding-bottom: 10px;
            margin: 30px 0 20px 0;
            font-size: 2rem;
            position: relative;
        }
        
        h2::after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--accent-yellow);
        }
        
        h3 {
            color: var(--secondary-green);
            margin: 25px 0 15px 0;
            font-size: 1.6rem;
        }
        
        p {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }
        
        .highlight {
            background-color: var(--light-yellow);
            border-left: 5px solid var(--accent-yellow);
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
            font-weight: 500;
        }
        
        .key-feature {
            background-color: rgba(60, 179, 113, 0.1);
            border-left: 4px solid var(--secondary-green);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        .disadvantage {
            background-color: rgba(255, 217, 0, 0.1);
            border-left: 4px solid var(--accent-yellow);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        ul, ol {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        li {
            margin-bottom: 8px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: var(--secondary-green);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        
        tr:nth-child(even) {
            background-color: var(--light-yellow);
        }
        
        tr:hover {
            background-color: #fff8dc;
        }
        
        .figure-container {
            text-align: center;
            margin: 30px 0;
            padding: 15px;
            background-color: var(--light-yellow);
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }
        
        .figure-caption {
            font-style: italic;
            color: var(--text-light);
            margin-top: 10px;
            font-size: 0.9rem;
        }
        
        .summary-section {
            background-color: rgba(46, 139, 87, 0.05);
            border: 2px dashed var(--secondary-green);
            border-radius: 10px;
            padding: 25px;
            margin: 40px 0;
        }
        
        .summary-title {
            color: var(--primary-green);
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 10px;
        }
        
        .exam-tip {
            background-color: #fff8dc;
            border: 2px solid var(--accent-yellow);
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            font-weight: 600;
            color: #d35400;
            text-align: center;
        }
        
        .concept-box {
            background-color: #f0f7f0;
            border: 1px solid var(--secondary-green);
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
        }
        
        code {
            background-color: #f0f0f0;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: 'Courier New', Courier, monospace;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-light);
            font-size: 0.9rem;
            border-top: 1px solid #eee;
            margin-top: 40px;
        }
        
        .section-divider {
            height: 2px;
            background: linear-gradient(to right, transparent, var(--accent-yellow), transparent);
            margin: 40px 0;
        }
        
        @media (max-width: 768px) {
            h1 { font-size: 2.2rem; }
            h2 { font-size: 1.8rem; }
            h3 { font-size: 1.4rem; }
            p { font-size: 1rem; }
            th, td { padding: 8px; }
            .figure-container { padding: 10px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Chapter 1: Introduction to Data Communication</h1>
            <p>Foundations: Data, Signals, Systems, OSI Model & Network Types</p>
        </header>

        <section>
            <h2>What is Data Communication?</h2>
            <p>Data communication is the exchange of data between two or more devices using a transmission medium such as wires, fiber optics, or radio waves.</p>
            
            <div class="key-feature">
                <strong>Core Definition:</strong> Data communication involves the transfer of information (data) from a source device to a destination device through a communication channel.
            </div>
            
            <p>A complete data communication system has five essential components:</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Component</th>
                        <th>Description</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Message</strong></td>
                        <td>The data or information to be communicated</td>
                        <td>Text, numbers, images, audio, video</td>
                    </tr>
                    <tr>
                        <td><strong>Sender</strong></td>
                        <td>The device that sends the message</td>
                        <td>Computer, smartphone, camera</td>
                    </tr>
                    <tr>
                        <td><strong>Receiver</strong></td>
                        <td>The device that receives the message</td>
                        <td>Computer, TV, printer</td>
                    </tr>
                    <tr>
                        <td><strong>Transmission Medium</strong></td>
                        <td>The physical path between sender and receiver</td>
                        <td>Twisted pair, fiber optic, Wi-Fi</td>
                    </tr>
                    <tr>
                        <td><strong>Protocol</strong></td>
                        <td>A set of rules governing data exchange</td>
                        <td>TCP/IP, HTTP, Ethernet</td>
                    </tr>
                </tbody>
            </table>

            <div class="section-divider"></div>

            <h2>Data and Signals</h2>
            <p>Data is raw, unprocessed facts. To be transmitted, data must be converted into a signal — a physical quantity that varies with time.</p>
            
            <h3>Data Types</h3>
            <table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Examples</th>
                        <th>Representation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Analog Data</strong></td>
                        <td>Continuous values within an interval</td>
                        <td>Sound, temperature, pressure</td>
                        <td>Smooth waveforms</td>
                    </tr>
                    <tr>
                        <td><strong>Digital Data</strong></td>
                        <td>Discrete values (finite set)</td>
                        <td>Text, integers, binary files</td>
                        <td>Binary sequence (0s and 1s)</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>Signal Types</h3>
            <table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Waveform</th>
                        <th>Key Characteristics</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Analog Signal</strong></td>
                        <td>Continuous variation in amplitude over time</td>
                        <td>Smooth sine/cosine curve</td>
                        <td>Infinite possible values, susceptible to noise</td>
                    </tr>
                    <tr>
                        <td><strong>Digital Signal</strong></td>
                        <td>Discrete levels representing binary states</td>
                        <td>Square wave (0V / Vcc)</td>
                        <td>Finite values (usually 0 and 1), robust against noise</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/600x200?text=Analog+vs+Digital+Signal+Waveforms" alt="Analog vs Digital Signal Waveforms" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Analog signal (smooth) vs Digital signal (step-like)</p>
            </div>
            
            <div class="highlight">
                <strong>Conversion Process:</strong><br>
                Analog Data → Analog Signal (Modulation)<br>
                Digital Data → Digital Signal (Encoding)<br>
                Analog Data → Digital Signal (PCM)<br>
                Digital Data → Analog Signal (Digital Modulation)
            </div>

            <div class="section-divider"></div>

            <h2>Data Representation</h2>
            <p>Modern data comes in multiple forms, each requiring specific encoding for transmission.</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Data Type</th>
                        <th>Representation Method</th>
                        <th>Standard/Code</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Text</strong></td>
                        <td>Bit sequences</td>
                        <td>ASCII, Unicode</td>
                    </tr>
                    <tr>
                        <td><strong>Numbers</strong></td>
                        <td>Binary representation</td>
                        <td>Binary, BCD, Two's Complement</td>
                    </tr>
                    <tr>
                        <td><strong>Images</strong></td>
                        <td>Matrix of pixels</td>
                        <td>Each pixel = bit pattern (RGB values)</td>
                    </tr>
                    <tr>
                        <td><strong>Audio</strong></td>
                        <td>Sampled analog waveform</td>
                        <td>PCM, MP3</td>
                    </tr>
                    <tr>
                        <td><strong>Video</strong></td>
                        <td>Sequence of images (frames)</td>
                        <td>MPEG, H.264</td>
                    </tr>
                </tbody>
            </table>

            <div class="section-divider"></div>

            <h2>Transmission Modes: How Data Flows</h2>
            <p>Defines the direction of data flow between two devices.</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Mode</th>
                        <th>Direction</th>
                        <th>Bandwidth Use</th>
                        <th>Advantages</th>
                        <th>Disadvantages</th>
                        <th>Examples</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Simplex</strong></td>
                        <td>One-way only</td>
                        <td>Full bandwidth in one direction</td>
                        <td>Simple, low cost</td>
                        <td>No feedback, no interaction</td>
                        <td>Keyboard → Monitor, Radio broadcast</td>
                    </tr>
                    <tr>
                        <td><strong>Half-Duplex</strong></td>
                        <td>Two-way, but not simultaneously</td>
                        <td>Full bandwidth used alternately</td>
                        <td>Efficient use of single channel</td>
                        <td>Delay due to switching direction</td>
                        <td>Walkie-talkie, old Ethernet hubs</td>
                    </tr>
                    <tr>
                        <td><strong>Full-Duplex</strong></td>
                        <td>Two-way simultaneously</td>
                        <td>Two channels (or multiplexed)</td>
                        <td>Real-time communication, fastest</td>
                        <td>Requires two paths or advanced tech</td>
                        <td>Telephone, modern Ethernet, mobile networks</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/600x150?text=Simplex,+Half-Duplex,+Full-Duplex+Diagrams" alt="Transmission Modes Diagram" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Simplex (one arrow), Half-Duplex (two arrows, alternating), Full-Duplex (two arrows, simultaneous)</p>
            </div>

            <div class="section-divider"></div>

            <h2>Analog vs Digital Communication Systems</h2>
            
            <h3>Analog Communication System</h3>
            <div class="figure-container">
                <img src="https://via.placeholder.com/700x300?text=Analog+Communication+System+Block+Diagram" alt="Analog Communication System" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Block diagram of Analog Communication System</p>
            </div>
            
            <ol>
                <li><strong>Input Transducer:</strong> Converts physical quantity (sound, image) into electrical signal (e.g., microphone).</li>
                <li><strong>Transmitter:</strong> Modulates the signal onto a carrier wave (AM/FM/PM) for long-distance transmission.</li>
                <li><strong>Channel:</strong> Transmission medium (cable, air).</li>
                <li><strong>Noise & Distortion:</strong> External interference corrupts the signal.</li>
                <li><strong>Receiver:</strong> Demodulates the signal to recover the original baseband signal.</li>
                <li><strong>Output Transducer:</strong> Converts electrical signal back to physical form (e.g., speaker, LED).</li>
            </ol>
            
            <h3>Digital Communication System</h3>
            <div class="figure-container">
                <img src="https://via.placeholder.com/700x300?text=Digital+Communication+System+Block+Diagram" alt="Digital Communication System" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Block diagram of Digital Communication System</p>
            </div>
            
            <ol>
                <li><strong>Source:</strong> Generates information (analog or digital).</li>
                <li><strong>Source Encoder:</strong> Removes redundancy to compress data (e.g., JPEG, MP3).</li>
                <li><strong>Channel Encoder:</strong> Adds redundant bits for error detection/correction (e.g., Hamming code, CRC).</li>
                <li><strong>Modulator:</strong> Converts digital signal to analog for transmission (e.g., QPSK, QAM).</li>
                <li><strong>Channel:</strong> Physical medium with noise.</li>
                <li><strong>Demodulator:</strong> Converts analog signal back to digital.</li>
                <li><strong>Channel Decoder:</strong> Uses redundancy to detect and correct errors.</li>
                <li><strong>Source Decoder:</strong> Reconstructs original data from compressed format.</li>
                <li><strong>Output Device:</strong> Displays or uses the data (screen, speaker).</li>
            </ol>
            
            <h3>Comparison: Analog vs Digital Communication</h3>
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Analog Communication</th>
                        <th>Digital Communication</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Signal Type</strong></td>
                        <td>Continuous (sine wave)</td>
                        <td>Discrete (square wave)</td>
                    </tr>
                    <tr>
                        <td><strong>Noise Immunity</strong></td>
                        <td>Poor — noise accumulates</td>
                        <td>High — regeneration possible</td>
                    </tr>
                    <tr>
                        <td><strong>Security</strong></td>
                        <td>Low — easy to intercept</td>
                        <td>High — encryption possible</td>
                    </tr>
                    <tr>
                        <td><strong>Error Detection</strong></td>
                        <td>Not possible</td>
                        <td>Possible (CRC, Hamming)</td>
                    </tr>
                    <tr>
                        <td><strong>Bandwidth Usage</strong></td>
                        <td>Lower</td>
                        <td>Higher</td>
                    </tr>
                    <tr>
                        <td><strong>Cost & Complexity</strong></td>
                        <td>Lower complexity</td>
                        <td>Higher complexity, needs ADC/DAC</td>
                    </tr>
                    <tr>
                        <td><strong>Flexibility</strong></td>
                        <td>Fixed hardware</td>
                        <td>Software-defined, programmable</td>
                    </tr>
                    <tr>
                        <td><strong>Applications</strong></td>
                        <td>AM/FM radio, analog TV</td>
                        <td>Internet, mobile phones, VoIP, streaming</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="key-feature">
                <strong>Why Digital Dominates Today:</strong> Despite higher bandwidth needs, digital systems offer superior reliability, security, error correction, and compatibility with computing technology.
            </div>

            <div class="section-divider"></div>

            <h2>The OSI Model: Seven-Layer Architecture</h2>
            <p>The Open Systems Interconnection (OSI) model is a conceptual framework that standardizes the functions of a telecommunication or computing system into seven abstraction layers.</p>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/600x400?text=OSI+Model+7+Layers" alt="OSI Model Layers" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: The 7 Layers of the OSI Model</p>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>Layer</th>
                        <th>Name</th>
                        <th>Function</th>
                        <th>Protocols/Data Unit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>7</td>
                        <td><strong>Application</strong></td>
                        <td>Network services for applications</td>
                        <td>HTTP, FTP, SMTP, DNS</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><strong>Presentation</strong></td>
                        <td>Data translation, encryption, compression</td>
                        <td>SSL/TLS, JPEG, MPEG, ASCII/EBCDIC</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><strong>Session</strong></td>
                        <td>Manages connections between applications</td>
                        <td>NetBIOS, RPC, SIP</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><strong>Transport</strong></td>
                        <td>End-to-end delivery, flow control, error recovery</td>
                        <td>TCP, UDP</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><strong>Network</strong></td>
                        <td>Logical addressing, routing, packet forwarding</td>
                        <td>IP, ICMP, OSPF</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong>Data Link</strong></td>
                        <td>Physical addressing, framing, error detection</td>
                        <td>Ethernet, PPP, MAC address</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><strong>Physical</strong></td>
                        <td>Transmits raw bits over physical medium</td>
                        <td>UTP, coaxial, fiber, Wi-Fi, Bluetooth</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="highlight">
                <strong>Memory Tip:</strong> "Please Do Not Throw Sausage Pizza Away"<br>
                (Physical, Data Link, Network, Transport, Session, Presentation, Application)
            </div>
            
            <h3>Layer Responsibilities Summary</h3>
            <ul>
                <li><strong>Layers 1–2 (Hardware):</strong> Deal with physical connection and local delivery</li>
                <li><strong>Layer 3 (Network):</strong> Handles logical addressing (IP) and routing across networks</li>
                <li><strong>Layers 4–7 (Software):</strong> Handle end-to-end communication, application interfaces</li>
            </ul>

            <div class="section-divider"></div>

            <h2>Computer Networks: Types and Scope</h2>
            <p>Networks are classified based on geographical coverage.</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Network Type</th>
                        <th>Abbreviation</th>
                        <th>Range</th>
                        <th>Typical Use Case</th>
                        <th>Technology</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Personal Area Network</strong></td>
                        <td>PAN</td>
                        <td>~10 meters</td>
                        <td>Connecting personal devices</td>
                        <td>Bluetooth, NFC, USB</td>
                    </tr>
                    <tr>
                        <td><strong>Local Area Network</strong></td>
                        <td>LAN</td>
                        <td>Up to 1 km</td>
                        <td>Office, home, school</td>
                        <td>Ethernet, Wi-Fi</td>
                    </tr>
                    <tr>
                        <td><strong>Campus Area Network</strong></td>
                        <td>CAN</td>
                        <td>1–5 km</td>
                        <td>University, corporate campus</td>
                        <td>Ethernet, Wi-Fi, fiber backbone</td>
                    </tr>
                    <tr>
                        <td><strong>Metropolitan Area Network</strong></td>
                        <td>MAN</td>
                        <td>5–50 km</td>
                        <td>City-wide connectivity</td>
                        <td>WiMAX, cable TV infrastructure</td>
                    </tr>
                    <tr>
                        <td><strong>Wide Area Network</strong></td>
                        <td>WAN</td>
                        <td>Global</td>
                        <td>Internet, inter-city links</td>
                        <td>Fiber optics, satellite, microwave</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/700x300?text=Types+of+Networks:+PAN+to+WAN" alt="Network Types Comparison" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Scale comparison of PAN, LAN, CAN, MAN, WAN</p>
            </div>

            <div class="section-divider"></div>

            <h2>Simplified Network Architecture</h2>
            <p>A typical small business or home network consists of these core components:</p>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/700x400?text=Simplified+Network+Architecture" alt="Simplified Network Architecture" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Simplified Network Architecture</p>
            </div>
            
            <ol>
                <li><strong>Computers (Workstations):</strong> End-user devices accessing resources.</li>
                <li><strong>Switch:</strong> Connects devices in a LAN. Operates at Layer 2 (Data Link). Forwards frames using MAC addresses. Reduces collisions compared to hubs.</li>
                <li><strong>Server:</strong> Centralized resource provider (files, printers, authentication). Often connected directly to the switch or router.</li>
                <li><strong>Printer:</strong> Shared peripheral, often connected to server for centralized management.</li>
                <li><strong>Router:</strong> Connects LAN to external networks (e.g., Internet). Operates at Layer 3 (Network). Routes packets using IP addresses. Provides NAT and firewall features.</li>
            </ol>
            
            <div class="key-feature">
                <strong>Flow:</strong> Internal traffic (PC ↔ Server) → Switch<br>
                External traffic (PC ↔ Internet) → Switch → Router → Internet
            </div>

            <div class="section-divider"></div>

            <h2>Modern Enterprise Networking Trends</h2>
            <p>Today’s networks support complex, distributed environments:</p>
            
            <ul>
                <li><strong>Internal Communication:</strong> Email, instant messaging (Slack, Teams), VoIP</li>
                <li><strong>Cloud Computing & Remote Access:</strong> Secure access to Google Workspace, Microsoft 365, AWS from anywhere</li>
                <li><strong>Data Storage & Sharing:</strong> Centralized NAS/SAN systems for collaboration</li>
                <li><strong>Real-Time Applications:</strong> Low-latency video conferencing (Zoom, Meet), live streaming</li>
                <li><strong>IoT & Automation:</strong> Connecting sensors, smart lighting, HVAC systems for efficiency</li>
            </ul>

            <div class="summary-section">
                <h2 class="summary-title">Exam Summary: Key Takeaways</h2>
                
                <p><strong>Data & Signals:</strong></p>
                <ul>
                    <li><strong>Analog Data:</strong> Continuous values (sound, temp)</li>
                    <li><strong>Digital Data:</strong> Discrete values (text, binary)</li>
                    <li><strong>Analog Signal:</strong> Smooth wave — vulnerable to noise</li>
                    <li><strong>Digital Signal:</strong> Square wave — robust, regenerable</li>
                </ul>
                
                <p><strong>Transmission Modes:</strong></p>
                <ul>
                    <li><strong>Simplex:</strong> One-way (keyboard → monitor)</li>
                    <li><strong>Half-Duplex:</strong> Two-way, alternating (walkie-talkie)</li>
                    <li><strong>Full-Duplex:</strong> Two-way, simultaneous (phone call)</li>
                </ul>
                
                <p><strong>Analog vs Digital Systems:</strong></p>
                <ul>
                    <li><strong>Analog:</strong> Simpler, less bandwidth, poor noise immunity, no error correction</li>
                    <li><strong>Digital:</strong> Complex, more bandwidth, excellent noise immunity, supports encryption & error correction</li>
                </ul>
                
                <p><strong>OSI Model (Memorize Order!):</strong></p>
                <ul>
                    <li><strong>Layer 7:</strong> Application — User interface (HTTP, FTP)</li>
                    <li><strong>Layer 6:</strong> Presentation — Translation, encryption (JPEG, SSL)</li>
                    <li><strong>Layer 5:</strong> Session — Connection management (SIP)<



<!-- <==========cahpter2 start===========> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 2: Data Communication Fundamentals</title>
    <style>
        :root {
            --primary-green: #2e8b57;
            --secondary-green: #3cb371;
            --accent-yellow: #ffd700;
            --light-yellow: #fffacd;
            --text-dark: #333333;
            --text-light: #555555;
            --border-color: #3cb371;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            color: var(--text-dark);
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(46, 139, 87, 0.1);
            overflow: hidden;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            text-align: center;
            padding: 40px 20px;
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
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            font-weight: 700;
        }
        
        h2 {
            color: var(--primary-green);
            border-bottom: 3px solid var(--accent-yellow);
            padding-bottom: 10px;
            margin: 30px 0 20px 0;
            font-size: 2rem;
            position: relative;
        }
        
        h2::after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--accent-yellow);
        }
        
        h3 {
            color: var(--secondary-green);
            margin: 25px 0 15px 0;
            font-size: 1.6rem;
        }
        
        p {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }
        
        .highlight {
            background-color: var(--light-yellow);
            border-left: 5px solid var(--accent-yellow);
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
            font-weight: 500;
        }
        
        .key-feature {
            background-color: rgba(60, 179, 113, 0.1);
            border-left: 4px solid var(--secondary-green);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        .disadvantage {
            background-color: rgba(255, 217, 0, 0.1);
            border-left: 4px solid var(--accent-yellow);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        ul, ol {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        li {
            margin-bottom: 8px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: var(--secondary-green);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        
        tr:nth-child(even) {
            background-color: var(--light-yellow);
        }
        
        tr:hover {
            background-color: #fff8dc;
        }
        
        .figure-container {
            text-align: center;
            margin: 30px 0;
            padding: 15px;
            background-color: var(--light-yellow);
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }
        
        .figure-caption {
            font-style: italic;
            color: var(--text-light);
            margin-top: 10px;
            font-size: 0.9rem;
        }
        
        .summary-section {
            background-color: rgba(46, 139, 87, 0.05);
            border: 2px dashed var(--secondary-green);
            border-radius: 10px;
            padding: 25px;
            margin: 40px 0;
        }
        
        .summary-title {
            color: var(--primary-green);
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 10px;
        }
        
        .exam-tip {
            background-color: #fff8dc;
            border: 2px solid var(--accent-yellow);
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            font-weight: 600;
            color: #d35400;
            text-align: center;
        }
        
        .math-equation {
            background-color: #f8f9fa;
            border-left: 4px solid var(--secondary-green);
            padding: 15px 20px;
            margin: 20px 0;
            font-family: 'Cambria Math', serif;
            font-size: 1.1rem;
            text-align: center;
            border-radius: 0 8px 8px 0;
            line-height: 1.8;
        }
        
        code {
            background-color: #f0f0f0;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: 'Courier New', Courier, monospace;
        }
        
        .concept-box {
            background-color: #f0f7f0;
            border: 1px solid var(--secondary-green);
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-light);
            font-size: 0.9rem;
            border-top: 1px solid #eee;
            margin-top: 40px;
        }
        
        .section-divider {
            height: 2px;
            background: linear-gradient(to right, transparent, var(--accent-yellow), transparent);
            margin: 40px 0;
        }
        
        @media (max-width: 768px) {
            h1 { font-size: 2.2rem; }
            h2 { font-size: 1.8rem; }
            h3 { font-size: 1.4rem; }
            p { font-size: 1rem; }
            th, td { padding: 8px; }
            .figure-container { padding: 10px; }
            .math-equation { font-size: 1rem; padding: 12px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Chapter 2: Data Communication Fundamentals</h1>
            <p>Signals, Systems, Fourier Analysis & Data Rate Limits</p>
        </header>

        <section>
            <h2>Introduction to Signals in Data Communication</h2>
            <p>In data communication, information is transmitted as physical quantities called <strong>signals</strong>. These signals carry data between devices over transmission media.</p>
            
            <div class="key-feature">
                <strong>Core Definition:</strong> A signal is a physical quantity that varies with time, space, or any other independent variable and contains information.
            </div>
            
            <p>Signals are broadly classified based on their nature and representation:</p>
            
            <h3>Analog vs Digital Signals</h3>
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Analog Signal</th>
                        <th>Digital Signal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Definition</strong></td>
                        <td>Continuous variation in amplitude or frequency</td>
                        <td>Discrete levels (typically 0 and 1)</td>
                    </tr>
                    <tr>
                        <td><strong>Representation</strong></td>
                        <td>Mathematical function: x(t)</td>
                        <td>Sequence of bits: x[n]</td>
                    </tr>
                    <tr>
                        <td><strong>Bandwidth</strong></td>
                        <td>Infinite (theoretically)</td>
                        <td>Finite (depends on bit rate)</td>
                    </tr>
                    <tr>
                        <td><strong>Noise Immunity</strong></td>
                        <td>Low — noise distorts waveform</td>
                        <td>High — regeneration possible</td>
                    </tr>
                    <tr>
                        <td><strong>Example</strong></td>
                        <td>Human voice, radio wave</td>
                        <td>Computer data, digital audio</td>
                    </tr>
                </tbody>
            </table>

            <div class="section-divider"></div>

            <h2>Classification of Signals</h2>
            
            <h3>1. Continuous-Time vs Discrete-Time Signals</h3>
            <div class="concept-box">
                <p><strong>Continuous-Time Signal (CTS):</strong> Defined for every instant of time t ∈ (-∞, ∞). Represented as x(t).</p>
                <p><strong>Discrete-Time Signal (DTS):</strong> Defined only at discrete instants nT, where n is integer and T is sampling interval. Represented as x[n].</p>
            </div>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/600x200?text=Continuous+vs+Discrete+Signal+Waveforms" alt="Continuous vs Discrete Signal" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Continuous-time (smooth curve) vs Discrete-time (dots) signal representation</p>
            </div>
            
            <h3>2. Periodic vs Aperiodic Signals</h3>
            <div class="math-equation">
                \text{Periodic: } x(t) = x(t + T_0) \quad \text{for all } t \\
                \text{where } T_0 = \text{fundamental period}
            </div>
            
            <div class="concept-box">
                <p><strong>Periodic Signal:</strong> Repeats itself after fixed interval T₀. Examples: sine, square, triangular waves.</p>
                <p><strong>Aperiodic (Non-periodic) Signal:</strong> Does not repeat. Examples: speech, noise, single pulse.</p>
            </div>
            
            <h3>3. Energy vs Power Signals</h3>
            <div class="math-equation">
                \text{Energy Signal: } E = \int_{-\infty}^{\infty} |x(t)|^2 dt \quad \text{where } 0 < E < \infty \\
                \text{Power Signal: } P = \lim_{T \to \infty} \frac{1}{2T} \int_{-T}^{T} |x(t)|^2 dt \quad \text{where } 0 < P < \infty
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Energy Signal</th>
                        <th>Power Signal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Total Energy</strong></td>
                        <td>Finite and non-zero</td>
                        <td>Infinite</td>
                    </tr>
                    <tr>
                        <td><strong>Average Power</strong></td>
                        <td>Zero</td>
                        <td>Finite and non-zero</td>
                    </tr>
                    <tr>
                        <td><strong>Examples</strong></td>
                        <td>Single pulse, decaying exponential</td>
                        <td>Sine wave, square wave, noise</td>
                    </tr>
                    <tr>
                        <td><strong>Application</strong></td>
                        <td>Pulse communications</td>
                        <td>Continuous transmission (voice, video)</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>4. Deterministic vs Random Signals</h3>
            <ul>
                <li><strong>Deterministic:</strong> Can be described by mathematical equation. Predictable future values. (e.g., sin(t), e⁻ᵗ)</li>
                <li><strong>Random:</strong> Cannot be expressed by equation. Values are probabilistic. (e.g., thermal noise, interference)</li>
            </ul>
            
            <h3>5. Even and Odd Signals</h3>
            <div class="math-equation">
                \text{Even: } x(-t) = x(t) \quad \text{(symmetric about y-axis)} \\
                \text{Odd: } x(-t) = -x(t) \quad \text{(antisymmetric about origin)}
            </div>
            <p>Any signal can be decomposed into even and odd parts: x(t) = xₑ(t) + xₒ(t)</p>

            <div class="section-divider"></div>

            <h2>Special Signal Functions</h2>
            
            <h3>Unit Step Function u(t)</h3>
            <div class="math-equation">
                u(t) = 
                \begin{cases} 
                1 & t \geq 0 \\
                0 & t < 0 
                \end{cases}
            </div>
            <p>Used to represent signals that turn on at t=0.</p>
            
            <h3>Unit Impulse Function δ(t)</h3>
            <div class="math-equation">
                \delta(t) = 
                \begin{cases} 
                \infty & t = 0 \\
                0 & t \neq 0 
                \end{cases}
                \quad \text{and} \quad \int_{-\infty}^{\infty} \delta(t) dt = 1
            </div>
            <p>Models instantaneous events (e.g., lightning strike, switch closure).</p>
            
            <h3>Sinc Function</h3>
            <div class="math-equation">
                \text{sinc}(t) = \frac{\sin(\pi t)}{\pi t} \quad \text{with sinc(0) = 1}
            </div>
            <p>Crucial in signal reconstruction and ideal low-pass filtering.</p>
            
            <h3>Rectangular Pulse Π(t)</h3>
            <div class="math-equation">
                \Pi(t) = 
                \begin{cases} 
                1 & |t| < \frac{1}{2} \\
                0 & \text{otherwise}
                \end{cases}
            </div>
            <p>Represents finite-duration pulses used in digital transmission.</p>

            <div class="section-divider"></div>

            <h2>Systems in Communication</h2>
            <p>A system processes input signals to produce output signals. Key classifications:</p>
            
            <h3>Static vs Dynamic Systems</h3>
            <table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Static (Memoryless)</strong></td>
                        <td>Output depends only on current input</td>
                        <td>y(t) = 5x(t)</td>
                    </tr>
                    <tr>
                        <td><strong>Dynamic (With Memory)</strong></td>
                        <td>Output depends on past/future inputs</td>
                        <td>y(t) = x(t-1) + x(t)</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>Linear vs Non-linear Systems</h3>
            <div class="key-feature">
                <strong>Linearity Condition (Superposition):</strong><br>
                If x₁(t) → y₁(t) and x₂(t) → y₂(t), then ax₁(t) + bx₂(t) → ay₁(t) + by₂(t)
            </div>
            <p>Most communication systems (filters, amplifiers) are designed to be linear.</p>
            
            <h3>Time-Invariant vs Time-Variant Systems</h3>
            <div class="key-feature">
                <strong>Time-Invariance:</strong> Delaying input delays output by same amount.<br>
                If x(t) → y(t), then x(t−t₀) → y(t−t₀)
            </div>
            <p>Most physical systems (cables, antennas) are time-invariant.</p>
            
            <h3>Causal vs Non-Causal Systems</h3>
            <ul>
                <li><strong>Causal:</strong> Output depends only on present and past inputs. Realizable in real-time.</li>
                <li><strong>Non-Causal:</strong> Output depends on future inputs. Only theoretical or offline processing.</li>
            </ul>
            
            <h3>Stable vs Unstable Systems</h3>
            <div class="key-feature">
                <strong>BIBO Stability:</strong> Bounded Input → Bounded Output<br>
                If |x(t)| ≤ Mₓ < ∞ ⇒ |y(t)| ≤ Mᵧ < ∞
            </div>
            <p>Essential for practical systems to avoid saturation or oscillation.</p>

            <div class="section-divider"></div>

            <h2>Fourier Analysis: The Foundation of Signal Processing</h2>
            <p>Fourier analysis allows us to represent signals in the frequency domain, revealing their spectral composition.</p>
            
            <h3>Fourier Series: For Periodic Signals</h3>
            <p>Any periodic signal x(t) with period T₀ can be expressed as a sum of sinusoids:</p>
            
            <div class="math-equation">
                x(t) = a_0 + \sum_{n=1}^{\infty} \left[ a_n \cos(n\omega_0 t) + b_n \sin(n\omega_0 t) \right]
            </div>
            <p>Where ω₀ = 2π/T₀ is the fundamental angular frequency.</p>
            
            <h4>Trigonometric Coefficients:</h4>
            <div class="math-equation">
                a_0 = \frac{1}{T_0} \int_{T_0} x(t) dt \quad \text{(DC component)} \\
                a_n = \frac{2}{T_0} \int_{T_0} x(t) \cos(n\omega_0 t) dt \\
                b_n = \frac{2}{T_0} \int_{T_0} x(t) \sin(n\omega_0 t) dt
            </div>
            
            <h4>Dirichlet Conditions (Must be satisfied for convergence):</h4>
            <ol>
                <li>Finite number of maxima/minima in one period</li>
                <li>Finite number of discontinuities in one period</li>
                <li>Absolute integrable over one period: ∫|x(t)|dt < ∞</li>
            </ol>
            
            <h4>Exponential Fourier Series (More Compact):</h4>
            <div class="math-equation">
                x(t) = \sum_{n=-\infty}^{\infty} c_n e^{j n \omega_0 t} \\
                \text{where } c_n = \frac{1}{T_0} \int_{T_0} x(t) e^{-j n \omega_0 t} dt
            </div>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/600x250?text=Fourier+Series:+Square+Wave,+Sawtooth,+Triangle" alt="Fourier Series Waveforms" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Fourier series approximation of square, sawtooth, and triangle waves</p>
            </div>
            
            <h3>Fourier Transform: For Aperiodic Signals</h3>
            <p>Extends Fourier series to non-repeating signals. Converts time-domain to frequency-domain.</p>
            
            <div class="math-equation">
                X(\omega) = \int_{-\infty}^{\infty} x(t) e^{-j\omega t} dt \quad \text{(Forward FT)} \\
                x(t) = \frac{1}{2\pi} \int_{-\infty}^{\infty} X(\omega) e^{j\omega t} d\omega \quad \text{(Inverse FT)}
            </div>
            
            <h4>Existence Conditions:</h4>
            <ol>
                <li>∫|x(t)|dt < ∞ (absolute integrable)</li>
                <li>Finitely many discontinuities</li>
                <li>Finitely many maxima/minima</li>
            </ol>
            
            <h4>Key Example: Exponential Decay</h4>
            <div class="math-equation">
                x(t) = e^{-at}u(t), a > 0 \quad \Rightarrow \quad X(\omega) = \frac{1}{a + j\omega}
            </div>
            <div class="figure-container">
                <img src="https://via.placeholder.com/500x200?text=Magnitude+%26+Phase+Spectrum+of+e%5E-at" alt="Magnitude and Phase Spectrum" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Magnitude |X(ω)| = 1/√(a²+ω²); Phase ∠X(ω) = -tan⁻¹(ω/a)</p>
            </div>
            
            <h4>Properties of Fourier Transform:</h4>
            <table>
                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Time Domain</th>
                        <th>Frequency Domain</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Linearity</td>
                        <td>ax₁(t) + bx₂(t)</td>
                        <td>aX₁(ω) + bX₂(ω)</td>
                    </tr>
                    <tr>
                        <td>Time Shifting</td>
                        <td>x(t - t₀)</td>
                        <td>X(ω)e^{-j\omega t_0}</td>
                    </tr>
                    <tr>
                        <td>Frequency Shifting</td>
                        <td>x(t)e^{j\omega_0 t}</td>
                        <td>X(ω - ω₀)</td>
                    </tr>
                    <tr>
                        <td>Time Scaling</td>
                        <td>x(at)</td>
                        <td>\frac{1}{|a|} X\left(\frac{\omega}{a}\right)</td>
                    </tr>
                    <tr>
                        <td>Differentiation</td>
                        <td>\frac{dx(t)}{dt}</td>
                        <td>j\omega X(\omega)</td>
                    </tr>
                    <tr>
                        <td>Convolution</td>
                        <td>x₁(t) * x₂(t)</td>
                        <td>X₁(ω) · X₂(ω)</td>
                    </tr>
                </tbody>
            </table>

            <div class="section-divider"></div>

            <h2>Data Rate Limits: Nyquist and Shannon</h2>
            <p>Two fundamental theorems define the maximum achievable data rate in a communication channel.</p>
            
            <h3>Nyquist Bit Rate (Noiseless Channel)</h3>
            <div class="math-equation">
                C = 2B \log_2 L
            </div>
            <p>Where:<br>
            <strong>C</strong> = Maximum bit rate (bps)<br>
            <strong>B</strong> = Bandwidth (Hz)<br>
            <strong>L</strong> = Number of signal levels</p>
            
            <div class="key-feature">
                <strong>Insight:</strong> Doubling bandwidth doubles capacity. Doubling signal levels increases capacity by log₂(L).<br>
                For binary (L=2): C = 2B → Matches baseband intuition.
            </div>
            
            <h4>Example Calculations:</h4>
            <table>
                <thead>
                    <tr>
                        <th>Scenario</th>
                        <th>Bandwidth</th>
                        <th>Levels (L)</th>
                        <th>Max Bit Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Telephone Line (Binary)</td>
                        <td>3000 Hz</td>
                        <td>2</td>
                        <td>6000 bps</td>
                    </tr>
                    <tr>
                        <td>4-Level Signaling</td>
                        <td>3000 Hz</td>
                        <td>4</td>
                        <td>12,000 bps</td>
                    </tr>
                    <tr>
                        <td>Target: 265 kbps</td>
                        <td>20 kHz</td>
                        <td>98.7</td>
                        <td>Not possible (use 128 levels → 280 kbps)</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>Shannon Capacity (Noisy Channel)</h3>
            <div class="math-equation">
                C = B \log_2 (1 + \text{SNR})
            </div>
            <p>Where:<br>
            <strong>C</strong> = Channel capacity (bps)<br>
            <strong>B</strong> = Bandwidth (Hz)<br>
            <strong>SNR</strong> = Signal-to-Noise Ratio (linear scale, not dB)</p>
            
            <div class="key-feature">
                <strong>Insight:</strong> This is the absolute theoretical limit. No coding or modulation can exceed it.<br>
                Increasing SNR has diminishing returns. Increasing bandwidth always helps.
            </div>
            
            <h4>Converting SNR from dB to Linear:</h4>
            <div class="math-equation">
                \text{SNR}_{\text{linear}} = 10^{\text{SNR}_{\text{dB}} / 10}
            </div>
            
            <h4>Example Calculations:</h4>
            <table>
                <thead>
                    <tr>
                        <th>Scenario</th>
                        <th>Bandwidth</th>
                        <th>SNR (dB)</th>
                        <th>SNR (Linear)</th>
                        <th>Capacity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Telephone Line</td>
                        <td>3000 Hz</td>
                        <td>35 dB</td>
                        <td>3162</td>
                        <td>34,860 bps</td>
                    </tr>
                    <tr>
                        <td>Wi-Fi 5 GHz</td>
                        <td>2 MHz</td>
                        <td>36 dB</td>
                        <td>3981</td>
                        <td>24 Mbps</td>
                    </tr>
                    <tr>
                        <td>High SNR Approx.</td>
                        <td>B</td>
                        <td>SNR_dB</td>
                        <td>≈ SNR</td>
                        <td>C ≈ B × (SNR_dB / 3)</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>Using Both Limits Together</h3>
            <div class="highlight">
                <strong>Practical Design Rule:</strong><br>
                1. Use Shannon to find upper bound (C_max)<br>
                2. Use Nyquist to determine required signal levels (L) for desired rate R (R ≤ C_max)<br>
                <br>
                Example: B = 1 MHz, SNR = 63 → C_max = 6 Mbps<br>
                To achieve R = 4 Mbps: 4×10⁶ = 2×10⁶ × log₂(L) → L = 4 → 2 bits/symbol
            </div>

            <div class="section-divider"></div>

            <h2>Performance Metrics in Data Communication</h2>
            
            <h3>Bandwidth</h3>
            <ul>
                <li><strong>Bandwidth in Hertz (Hz):</strong> Range of frequencies a channel can pass. (e.g., telephone line: 300–3400 Hz → 3.1 kHz)</li>
                <li><strong>Bandwidth in Bits per Second (bps):</strong> Data rate capability of a link. (e.g., Ethernet: 100 Mbps)</li>
            </ul>
            
            <div class="highlight">
                <strong>Relationship:</strong> Higher bandwidth in Hz enables higher bit rate in bps — but limited by SNR (Shannon).
            </div>
            
            <h3>Throughput</h3>
            <div class="key-feature">
                <strong>Definition:</strong> Actual data rate achieved over a network under real conditions.
            </div>
            <p>Throughput ≤ Bandwidth due to protocol overhead, congestion, errors, etc.</p>
            
            <div class="math-equation">
                \text{Throughput} = \frac{\text{Total data transferred}}{\text{Time taken}}
            </div>
            
            <h4>Example:</h4>
            <p>Network bandwidth = 10 Mbps, transmits 12,000 frames/min, each 10,000 bits → Throughput = (12,000 × 10,000)/60 = 2 Mbps</p>
            
            <h3>Latency (Delay)</h3>
            <p>Total time for a message to travel from source to destination. Four components:</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Formula</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Propagation Time</strong></td>
                        <td>Time for bit to travel distance d</td>
                        <td>t_p = d / v<br>v = propagation speed (~2×10⁸ m/s in cable)</td>
                    </tr>
                    <tr>
                        <td><strong>Transmission Time</strong></td>
                        <td>Time to push all bits onto link</td>
                        <td>t_t = L / B<br>L = message size (bits), B = bandwidth (bps)</td>
                    </tr>
                    <tr>
                        <td><strong>Queuing Time</strong></td>
                        <td>Time waiting in router buffers</td>
                        <td>Variable — depends on network load</td>
                    </tr>
                    <tr>
                        <td><strong>Processing Delay</strong></td>
                        <td>Time to check header, decide route</td>
                        <td>Small (microseconds)</td>
                    </tr>
                </tbody>
            </table>
            
            <h4>Example Comparison:</h4>
            <table>
                <thead>
                    <tr>
                        <th>Message</th>
                        <th>Size</th>
                        <th>Bandwidth</th>
                        <th>Distance</th>
                        <th>Propagation Time</th>
                        <th>Transmission Time</th>
                        <th>Dominant Delay</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Email</td>
                        <td>2.5 KB</td>
                        <td>1 Gbps</td>
                        <td>12,000 km</td>
                        <td>50 ms</td>
                        <td>0.02 ms</td>
                        <td>Propagation</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td>5 MB</td>
                        <td>1 Mbps</td>
                        <td>12,000 km</td>
                        <td>50 ms</td>
                        <td>40 s</td>
                        <td>Transmission</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>Bandwidth-Delay Product</h3>
            <div class="math-equation">
                \text{BDP} = \text{Bandwidth} \times \text{Delay} \quad (\text{in bits})
            </div>
            <p>Represents the maximum number of bits "in flight" on a link at any time.</p>
            
            <div class="key-feature">
                <strong>Significance:</strong> Determines buffer size needed for efficient protocols like TCP.<br>
                To fully utilize a link, send data bursts of size ≥ 2 × BDP (for full-duplex).
            </div>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/500x200?text=Bandwidth-Delay+Product+Illustration" alt="Bandwidth-Delay Product" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: BDP represents how many bits fill the pipe</p>
            </div>
            
            <h3>Jitter</h3>
            <div class="disadvantage">
                <strong>Definition:</strong> Variation in packet delay across a stream.<br>
                <strong>Impact:</strong> Degrades real-time applications (VoIP, video streaming).<br>
                <strong>Causes:</strong> Network congestion, variable queuing, routing changes.
            </div>

            <div class="section-divider"></div>

            <h2>Summary of Key Formulas</h2>
            <div class="summary-section">
                <h3>Essential Equations for Exams</h3>
                
                <h4>Signal Classification</h4>
                <ul>
                    <li>Periodic: x(t) = x(t + T₀)</li>
                    <li>Energy: E = ∫|x(t)|² dt</li>
                    <li>Power: P = lim(T→∞) (1/2T) ∫|x(t)|² dt</li>
                </ul>
                
                <h4>Fourier Analysis</h4>
                <ul>
                    <li>Fourier Series: x(t) = Σ [aₙ cos(nω₀t) + bₙ sin(nω₀t)]</li>
                    <li>Fourier Transform: X(ω) = ∫ x(t)e⁻ʲʷᵗ dt</li>
                    <li>Time Shift: x(t-t₀) → X(ω)e⁻ʲʷᵗ⁰</li>
                    <li>Differentiation: dx/dt → jωX(ω)</li>
                </ul>
                
                <h4>Data Rate Limits</h4>
                <ul>
                    <li><strong>Nyquist (Noiseless):</strong> C = 2B log₂L</li>
                    <li><strong>Shannon (Noisy):</strong> C = B log₂(1 + SNR)</li>
                    <li><strong>SNR(dB) to Linear:</strong> SNR = 10^(SNR_dB/10)</li>
                </ul>
                
                <h4>Performance Metrics</h4>
                <ul>
                    <li>Propagation Time: tₚ = d / v</li>
                    <li>Transmission Time: tₜ = L / B</li>
                    <li>Bandwidth-Delay Product: BDP = B × (tₚ + tₜ)</li>
                    <li>Throughput = Total bits / Total time</li>
                </ul>
            </div>

            <div class="exam-tip">
                💡 EXAM TIP: Master these HIGH-YIELD topics:<br>
                1. Know the difference between Nyquist and Shannon — when to use which?<br>
                2. Practice converting SNR from dB to linear and vice versa.<br>
                3. Understand why BDP matters for TCP window sizing.<br>
                4. Be able to sketch magnitude/phase spectra of simple signals (e.g., e⁻ᵗu(t)).<br>
                5. Recognize Dirichlet conditions — they’re often asked in theory questions!<br>
                <br>
                You WILL see numerical problems on Nyquist/Shannon — practice 5 examples!
            </div>

            <div class="section-divider"></div>

            <h2>Conclusion</h2>
            <p>This chapter forms the bedrock of data communication theory. Understanding signals, their spectral properties via Fourier analysis, and the fundamental limits imposed by bandwidth and noise is essential for designing and analyzing any communication system — from a simple serial port to a 5G cellular network.</p>
            
            <p>The transition from analog to digital signals, the role of modulation, and the trade-offs between data rate, reliability, and bandwidth all stem from these foundational principles.</p>

            <footer>
                <p>Prepared for Exam Success • Based on Chapter 2: Data Communication Fundamentals</p>
                <p>© 2023 Department of Electronics and Computer Engineering, Pulchowk Campus</p>
            </footer>
        </section>
    </div>
</body>
</html>



<!-- <==========cahpter3 start===========> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 3: Transmission Media and Data Compression</title>
    <style>
        :root {
            --primary-green: #2e8b57;
            --secondary-green: #3cb371;
            --accent-yellow: #ffd700;
            --light-yellow: #fffacd;
            --text-dark: #333333;
            --text-light: #555555;
            --border-color: #3cb371;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            color: var(--text-dark);
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(46, 139, 87, 0.1);
            overflow: hidden;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            text-align: center;
            padding: 40px 20px;
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
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            font-weight: 700;
        }
        
        h2 {
            color: var(--primary-green);
            border-bottom: 3px solid var(--accent-yellow);
            padding-bottom: 10px;
            margin: 30px 0 20px 0;
            font-size: 2rem;
            position: relative;
        }
        
        h2::after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--accent-yellow);
        }
        
        h3 {
            color: var(--secondary-green);
            margin: 25px 0 15px 0;
            font-size: 1.6rem;
        }
        
        p {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }
        
        .highlight {
            background-color: var(--light-yellow);
            border-left: 5px solid var(--accent-yellow);
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
            font-weight: 500;
        }
        
        .key-feature {
            background-color: rgba(60, 179, 113, 0.1);
            border-left: 4px solid var(--secondary-green);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        .disadvantage {
            background-color: rgba(255, 217, 0, 0.1);
            border-left: 4px solid var(--accent-yellow);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        ul, ol {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        li {
            margin-bottom: 8px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: var(--secondary-green);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        
        tr:nth-child(even) {
            background-color: var(--light-yellow);
        }
        
        tr:hover {
            background-color: #fff8dc;
        }
        
        .figure-container {
            text-align: center;
            margin: 30px 0;
            padding: 15px;
            background-color: var(--light-yellow);
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }
        
        .figure-caption {
            font-style: italic;
            color: var(--text-light);
            margin-top: 10px;
            font-size: 0.9rem;
        }
        
        .summary-section {
            background-color: rgba(46, 139, 87, 0.05);
            border: 2px dashed var(--secondary-green);
            border-radius: 10px;
            padding: 25px;
            margin: 40px 0;
        }
        
        .summary-title {
            color: var(--primary-green);
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 10px;
        }
        
        .exam-tip {
            background-color: #fff8dc;
            border: 2px solid var(--accent-yellow);
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            font-weight: 600;
            color: #d35400;
            text-align: center;
        }
        
        .tech-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 8px;
            background-color: var(--secondary-green);
            border-radius: 50%;
            vertical-align: middle;
        }
        
        code {
            background-color: #f0f0f0;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: 'Courier New', Courier, monospace;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-light);
            font-size: 0.9rem;
            border-top: 1px solid #eee;
            margin-top: 40px;
        }
        
        .section-divider {
            height: 2px;
            background: linear-gradient(to right, transparent, var(--accent-yellow), transparent);
            margin: 40px 0;
        }
        
        @media (max-width: 768px) {
            h1 { font-size: 2.2rem; }
            h2 { font-size: 1.8rem; }
            h3 { font-size: 1.4rem; }
            p { font-size: 1rem; }
            th, td { padding: 8px; }
            .figure-container { padding: 10px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Chapter 3: Transmission Media and Data Compression</h1>
            <p>Comprehensive Exam Preparation Guide</p>
        </header>

        <section>
            <h2>Introduction to Transmission Media</h2>
            <p>Transmission media are the physical pathways through which data travels from sender to receiver. They form the foundation of any communication system and operate below the Physical Layer of the OSI model.</p>
            
            <div class="key-feature">
                <strong>Core Definition:</strong> Transmission media, also called communication channels, carry information as electrical or electromagnetic signals.
            </div>
            
            <p>They are broadly classified into two categories:</p>
            <ul>
                <li><strong>Guided (Wired/Bounded) Media</strong> — Signals confined within a physical conductor</li>
                <li><strong>Unguided (Wireless/Unbounded) Media</strong> — Signals propagate through air or vacuum</li>
            </ul>

            <div class="section-divider"></div>

            <h2>Electromagnetic Spectrum Overview</h2>
            <p>The electromagnetic spectrum organizes radio waves by frequency/wavelength, determining their propagation characteristics and applications in telecommunications.</p>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/800x300?text=Electromagnetic+Spectrum+Chart" alt="Electromagnetic Spectrum" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Electromagnetic Spectrum for Telecommunications (ELF to EHF)</p>
            </div>
            
            <p>Key bands relevant to wireless communications:</p>
            <ul>
                <li><strong>VLF/LF/MF:</strong> Ground wave propagation — AM radio, maritime</li>
                <li><strong>HF:</strong> Sky wave propagation — long-distance radio, military</li>
                <li><strong>VHF/UHF:</strong> Line-of-sight — FM radio, TV, cellular</li>
                <li><strong>SHF/EHF:</strong> Microwave — satellite, radar, Wi-Fi, 5G</li>
            </ul>

            <div class="section-divider"></div>

            <h2>Guided (Wired) Transmission Media</h2>
            <p>Guided media use physical cables to transmit signals. They offer high speed, security, and reliability over short to medium distances.</p>
            
            <h3>1. Twisted Pair Cable</h3>
            <p>Consists of two insulated copper wires twisted together to cancel electromagnetic interference (EMI).</p>
            
            <h4>Types:</h4>
            <ul>
                <li><strong>UTP (Unshielded Twisted Pair):</strong> No shielding, low cost, used in Ethernet (Cat 5/6/7). Common in homes/offices.</li>
                <li><strong>STP (Shielded Twisted Pair):</strong> Metal foil/braid shield around pairs, better noise immunity, used in industrial settings.</li>
            </ul>
            
            <h4>Categories & Performance:</h4>
            <table>
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Max Data Rate</th>
                        <th>Typical Use</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cat 3</td>
                        <td>10 Mbps</td>
                        <td>Old voice networks</td>
                    </tr>
                    <tr>
                        <td>Cat 5</td>
                        <td>100 Mbps</td>
                        <td>Fast Ethernet</td>
                    </tr>
                    <tr>
                        <td>Cat 5e</td>
                        <td>1 Gbps</td>
                        <td>Modern LANs</td>
                    </tr>
                    <tr>
                        <td>Cat 6</td>
                        <td>10 Gbps (up to 55m)</td>
                        <td>High-speed LANs</td>
                    </tr>
                    <tr>
                        <td>Cat 6a/7</td>
                        <td>10 Gbps (100m)</td>
                        <td>Data centers</td>
                    </tr>
                </tbody>
            </table>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>Inexpensive and easy to install</li>
                    <li>Flexible and pliable</li>
                    <li>Good performance over short distances</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>High attenuation (signal loss over distance)</li>
                    <li>Susceptible to EMI and crosstalk (especially UTP)</li>
                    <li>Lower bandwidth compared to fiber</li>
                    <li>Requires frequent maintenance</li>
                </ul>
            </div>

            <h3>2. Coaxial Cable</h3>
            <p>Consists of a central copper conductor, surrounded by insulation, a braided metal shield, and an outer plastic jacket.</p>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/400x200?text=Coaxial+Cable+Layers" alt="Coaxial Cable Layers" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Layers of Coaxial Cable</p>
            </div>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>Better shielding than twisted pair → higher noise immunity</li>
                    <li>Supports higher data rates (up to 1–2 Gbps over 1 km)</li>
                    <li>Can carry both analog and digital signals</li>
                    <li>Less expensive than fiber optics</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>More expensive than twisted pair</li>
                    <li>Bulkier and harder to install</li>
                    <li>Single point of failure affects entire segment</li>
                    <li>Limited scalability</li>
                </ul>
            </div>
            
            <h4>Applications:</h4>
            <ul>
                <li>Cable TV distribution</li>
                <li>Legacy Ethernet (10BASE2/10BASE5)</li>
                <li>Radio frequency signal transmission</li>
            </ul>

            <h3>3. Optical Fiber</h3>
            <p>Uses thin strands of glass or plastic to transmit data as pulses of light. Offers unmatched bandwidth and distance.</p>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/500x200?text=Optical+Fiber+Structure" alt="Optical Fiber Structure" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Core, Cladding, and Buffer Layers of Optical Fiber</p>
            </div>
            
            <h4>Structure:</h4>
            <ol>
                <li><strong>Core:</strong> Central glass strand (high refractive index)</li>
                <li><strong>Cladding:</strong> Outer layer (lower refractive index) — traps light via total internal reflection</li>
                <li><strong>Buffer Coating:</strong> Protective plastic layer</li>
            </ol>
            
            <h4>Types of Fiber:</h4>
            <table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Core Diameter</th>
                        <th>Light Source</th>
                        <th>Bandwidth</th>
                        <th>Distance</th>
                        <th>Use Case</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Single-Mode Fiber (SMF)</strong></td>
                        <td>8–10 μm</td>
                        <td>Laser Diode</td>
                        <td>Up to 100+ Gbps</td>
                        <td>Up to 100+ km</td>
                        <td>Long-haul telecom, backbone</td>
                    </tr>
                    <tr>
                        <td><strong>Multi-Mode Step Index</strong></td>
                        <td>50–100 μm</td>
                        <td>LED</td>
                        <td>Up to 100 Mbps</td>
                        <td>Up to 2 km</td>
                        <td>LANs, campus networks</td>
                    </tr>
                    <tr>
                        <td><strong>Multi-Mode Graded Index</strong></td>
                        <td>50–100 μm</td>
                        <td>LED/Laser</td>
                        <td>Up to 2 Gbps</td>
                        <td>Up to 100 km</td>
                        <td>High-speed LANs, data centers</td>
                    </tr>
                </tbody>
            </table>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>Extremely high bandwidth (Tbps potential)</li>
                    <li>Very low attenuation — signals travel 100+ km without repeaters</li>
                    <li>Immune to EMI and crosstalk</li>
                    <li>Highly secure — very difficult to tap without detection</li>
                    <li>Lightweight and small size</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Expensive installation and termination</li>
                    <li>Fragile — requires careful handling</li>
                    <li>Specialized equipment needed for splicing and testing</li>
                    <li>Difficult to repair in field conditions</li>
                </ul>
            </div>
            
            <h4>Applications:</h4>
            <ul>
                <li>Internet backbone and long-haul trunks</li>
                <li>Metropolitan area networks (MANs)</li>
                <li>Cable TV and FTTH (Fiber to the Home)</li>
                <li>High-speed data centers</li>
                <li>Undersea communication cables</li>
            </ul>

            <div class="section-divider"></div>

            <h2>Unguided (Wireless) Transmission Media</h2>
            <p>Unguided media transmit signals through air or space without physical conductors. Ideal for mobility and large-area coverage.</p>
            
            <h3>1. Radio Waves</h3>
            <p>Frequency range: 3 kHz – 1 GHz</p>
            
            <div class="key-feature">
                <strong>Characteristics:</strong> Omnidirectional (radiates in all directions), penetrates walls, susceptible to interference.
            </div>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>No line-of-sight required</li>
                    <li>Excellent wall penetration</li>
                    <li>Long-range coverage</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Low bandwidth</li>
                    <li>Prone to interference from other devices</li>
                    <li>Poor security — easily intercepted</li>
                    <li>High attenuation over distance</li>
                </ul>
            </div>
            
            <h4>Applications:</h4>
            <ul>
                <li>AM/FM radio broadcasting</li>
                <li>Television broadcasting</li>
                <li>Cordless phones</li>
                <li>Mobile networks (sub-6 GHz bands)</li>
                <li>RFID systems</li>
            </ul>

            <h3>2. Microwaves</h3>
            <p>Frequency range: 1 GHz – 300 GHz</p>
            
            <div class="key-feature">
                <strong>Characteristics:</strong> Unidirectional (requires precise alignment), line-of-sight propagation, high bandwidth.
            </div>
            
            <h4>Two Types:</h4>
            <ul>
                <li><strong>Terrestrial Microwave:</strong> Ground-based towers (4–6 GHz, 21–23 GHz)</li>
                <li><strong>Satellite Microwave:</strong> Uses orbiting satellites as relays</li>
            </ul>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>Very high bandwidth — supports high data rates</li>
                    <li>Cost-effective for long distances vs laying cable</li>
                    <li>No land acquisition needed</li>
                    <li>Works over oceans and rugged terrain</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Line-of-sight required — blocked by buildings, trees, rain</li>
                    <li>Atmospheric absorption (rain fade at >10 GHz)</li>
                    <li>Eavesdropping risk</li>
                    <li>High tower costs for long-distance links</li>
                </ul>
            </div>
            
            <h4>Applications:</h4>
            <ul>
                <li>Point-to-point backhaul for cellular networks</li>
                <li>Satellite communication (C-band, Ku-band, Ka-band)</li>
                <li>Radar systems</li>
                <li>Wi-Fi (5 GHz, 6 GHz)</li>
            </ul>

            <h3>3. Infrared Communication</h3>
            <p>Frequency range: 300 GHz – 400 GHz (just below visible light)</p>
            
            <div class="key-feature">
                <strong>Characteristics:</strong> Short-range, unidirectional, cannot penetrate walls, high security.
            </div>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>High security — contained within room</li>
                    <li>No interference with RF systems</li>
                    <li>Simple, low-cost implementation</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Very short range (typically <10 m)</li>
                    <li>Requires direct line-of-sight</li>
                    <li>Blocked by obstacles</li>
                    <li>Affected by bright ambient light</li>
                </ul>
            </div>
            
            <h4>Applications:</h4>
            <ul>
                <li>TV remote controls</li>
                <li>IrDA (Infrared Data Association) — old laptops/PDAs</li>
                <li>Short-range device pairing</li>
            </ul>

            <div class="section-divider"></div>

            <h2>Propagation Modes of Radio Waves</h2>
            <p>How radio waves travel depends on frequency and environment.</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Mode</th>
                        <th>Frequency Range</th>
                        <th>Range</th>
                        <th>Propagation Mechanism</th>
                        <th>Applications</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Ground Wave</strong></td>
                        <td>30 kHz – 2 MHz</td>
                        <td>100–1000 km</td>
                        <td>Follows Earth’s curvature via diffraction</td>
                        <td>AM radio, maritime comms</td>
                    </tr>
                    <tr>
                        <td><strong>Sky Wave</strong></td>
                        <td>3 MHz – 30 MHz</td>
                        <td>300–3000+ km</td>
                        <td>Reflected by ionosphere</td>
                        <td>International shortwave radio, military</td>
                    </tr>
                    <tr>
                        <td><strong>Line-of-Sight (LOS)</strong></td>
                        <td>>30 MHz</td>
                        <td>Up to 70 km (terrestrial)</td>
                        <td>Direct path; affected by Earth’s curvature</td>
                        <td>Cellular, Wi-Fi, microwave, satellite</td>
                    </tr>
                </tbody>
            </table>
            
            <h4>LOS Distance Formula:</h4>
            <div class="highlight">
                d = √(2×h<sub>t</sub>) + √(2×h<sub>r</sub>)<br>
                Where:<br>
                d = Maximum LOS distance (km)<br>
                h<sub>t</sub>, h<sub>r</sub> = Height of transmitter and receiver antennas (m)
            </div>
            
            <h4>Ionospheric Reflection — MUF:</h4>
            <div class="highlight">
                MUF = f<sub>c</sub> × sec(θ)<br>
                Where:<br>
                f<sub>c</sub> = Critical frequency (depends on ionospheric electron density)<br>
                θ = Angle of incidence
            </div>
            <p>If transmission frequency > MUF → signal penetrates ionosphere → lost to space.</p>

            <div class="section-divider"></div>

            <h2>Antenna Fundamentals</h2>
            <p>An antenna is a transducer that converts electrical signals into electromagnetic waves (transmitting) and vice versa (receiving).</p>
            
            <h3>Basic Parameters:</h3>
            <ul>
                <li><strong>Frequency (f):</strong> Number of oscillations per second (Hz)</li>
                <li><strong>Wavelength (λ):</strong> λ = c/f, where c = speed of light (3×10⁸ m/s)</li>
                <li><strong>Impedance Matching:</strong> Antenna impedance must match transmission line (typically 50Ω or 75Ω) for maximum power transfer</li>
                <li><strong>VSWR (Voltage Standing Wave Ratio):</strong> Measures mismatch. Ideal = 1:1. >1.5:1 indicates poor matching</li>
                <li><strong>Bandwidth:</strong> Range of frequencies over which antenna performs effectively</li>
                <li><strong>Resonant Frequency:</strong> Frequency at which antenna radiates most efficiently</li>
            </ul>
            
            <h3>Radiation Patterns:</h3>
            <p>Graphical representation of how an antenna radiates energy in 3D space.</p>
            
            <h4>Types of Radiation Patterns:</h4>
            <table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Omnidirectional</strong></td>
                        <td>Equal radiation in all horizontal directions</td>
                        <td>Dipole, whip antenna</td>
                    </tr>
                    <tr>
                        <td><strong>Directional</strong></td>
                        <td>Focuses energy in one main direction</td>
                        <td>Yagi-Uda, parabolic dish</td>
                    </tr>
                    <tr>
                        <td><strong>Isotropic (Theoretical)</strong></td>
                        <td>Perfect sphere — radiates equally in all directions</td>
                        <td>Reference standard (not physically realizable)</td>
                    </tr>
                </tbody>
            </table>
            
            <h4>Lobes:</h4>
            <ul>
                <li><strong>Main Lobe:</strong> Direction of maximum radiation</li>
                <li><strong>Side Lobes:</strong> Unwanted radiation in other directions — reduces efficiency</li>
                <li><strong>Back Lobe:</strong> Radiation opposite to main lobe</li>
            </ul>
            
            <h3>Directivity & Gain:</h3>
            <div class="highlight">
                Directivity (D) = Power density in desired direction / Average power density in all directions<br>
                Gain (G) = Efficiency × Directivity = η<sub>e</sub> × D
            </div>
            <p><strong>Unit:</strong> dBi — decibels relative to isotropic radiator</p>
            <p>Gain accounts for losses — always ≤ directivity.</p>
            
            <h3>Common Antenna Types:</h3>
            <table>
                <thead>
                    <tr>
                        <th>Antenna Type</th>
                        <th>Application</th>
                        <th>Key Feature</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dipole</td>
                        <td>Radio/TV broadcast</td>
                        <td>Omnidirectional, simple</td>
                    </tr>
                    <tr>
                        <td>Monopole</td>
                        <td>Mobile phones, car radios</td>
                        <td>Half-dipole over ground plane</td>
                    </tr>
                    <tr>
                        <td>Yagi-Uda</td>
                        <td>TV reception, ham radio</td>
                        <td>Directional, parasitic elements</td>
                    </tr>
                    <tr>
                        <td>Horn</td>
                        <td>Microwave, radar</td>
                        <td>High gain, wide bandwidth</td>
                    </tr>
                    <tr>
                        <td>Parabolic Dish</td>
                        <td>Satellite TV, deep-space</td>
                        <td>Very high gain, narrow beam</td>
                    </tr>
                    <tr>
                        <td>Helical</td>
                        <td>Satellite, GPS</td>
                        <td>Circular polarization</td>
                    </tr>
                    <tr>
                        <td>Patch (Microstrip)</td>
                        <td>Wi-Fi routers, IoT</td>
                        <td>Compact, planar, PCB-integrated</td>
                    </tr>
                    <tr>
                        <td>Phased Array</td>
                        <td>5G, radar, military</td>
                        <td>Electronic beam steering</td>
                    </tr>
                </tbody>
            </table>

            <div class="section-divider"></div>

            <h2>Error Detection and Correction</h2>
            <p>Essential for ensuring data integrity over noisy channels.</p>
            
            <h3>Types of Errors:</h3>
            <ul>
                <li><strong>Single-bit error:</strong> One bit flipped</li>
                <li><strong>Burst error:</strong> Multiple consecutive bits corrupted</li>
                <li><strong>Multiple-bit error:</strong> Non-consecutive bits corrupted</li>
            </ul>
            
            <h3>Error Detection Techniques:</h3>
            
            <h4>1. Parity Check</h4>
            <div class="highlight">
                Add extra bit to make number of 1s even (even parity) or odd (odd parity).
            </div>
            <p><strong>Limitation:</strong> Can only detect single-bit errors. Fails if even number of bits flip.</p>
            
            <h4>2. Cyclic Redundancy Check (CRC)</h4>
            <div class="key-feature">
                <ul>
                    <li>Uses polynomial division</li>
                    <li>Sender divides data by generator polynomial → appends remainder (CRC bits)</li>
                    <li>Receiver divides received data by same polynomial</li>
                    <li>If remainder = 0 → no error detected</li>
                </ul>
            </div>
            <p><strong>Advantages:</strong> Detects all single, double, and burst errors up to length of CRC.</p>
            
            <h4>3. Checksum</h4>
            <div class="highlight">
                Steps:<br>
                1. Divide data into fixed-size segments (e.g., 16-bit)<br>
                2. Sum all segments using binary addition<br>
                3. Take 1’s complement of sum → this is checksum<br>
                4. Sender sends data + checksum<br>
                5. Receiver adds all segments (including checksum)<br>
                6. If result = all 1s → no error
            </div>
            <p><strong>Example:</strong> Data = 1001 1101 → Segments: 1001, 1101 → Sum = 10110 → Carry = 1 → 0110 + 1 = 0111 → 1’s complement = 1000 → Checksum = 1000</p>

            <h3>Error Correction Techniques:</h3>
            
            <h4>1. Backward Error Correction (Retransmission)</h4>
            <div class="highlight">
                Receiver detects error → requests retransmission. Used in TCP, file transfers.
            </div>
            <p><strong>Pros:</strong> Simple, reliable</p>
            <p><strong>Cons:</strong> High latency — not suitable for real-time apps</p>
            
            <h4>2. Forward Error Correction (FEC)</h4>
            <div class="highlight">
                Sender adds redundant bits → receiver corrects errors without retransmission. Used in real-time video/audio, satellite, 5G.
            </div>
            
            <h3>Hamming Code (FEC Example)</h3>
            <p>Corrects single-bit errors and detects double-bit errors.</p>
            
            <h4>Steps to Encode (Data: 1011):</h4>
            <ol>
                <li>Determine parity bits: For 4 data bits → need 3 parity bits (r=3 since 2³ ≥ 4+3+1)</li>
                <li>Place data and parity bits: Positions 1,2,4 = parity; 3,5,6,7 = data → [P1 P2 D3 P4 D2 D1 D0] = [? ? 1 ? 0 1 1]</li>
                <li>Calculate parity bits (even parity):<br>
                    P1 (pos 1,3,5,7): 1,0,1 → even → P1=0<br>
                    P2 (pos 2,3,6,7): 1,1,1 → odd → P2=1<br>
                    P4 (pos 4,5,6,7): 0,1,1 → even → P4=0<br>
                </li>
                <li>Final code: 0 1 1 0 0 1 1</li>
            </ol>
            
            <h4>Error Detection & Correction:</h4>
            <p>Suppose bit 5 flips: Received = 0 1 1 0 1 1 1</p>
            <div class="highlight">
                Recalculate parity:<br>
                P1: 0,1,1,1 → 3 ones → odd → error → flag 1<br>
                P2: 1,1,1,1 → 4 ones → even → OK → flag 0<br>
                P4: 0,1,1,1 → 3 ones → odd → error → flag 1<br>
                Error position = P4 P2 P1 = 1 0 1 = 5 → Flip bit 5 → corrected!
            </div>

            <div class="section-divider"></div>

            <h2>Data Compression: Lossy vs Lossless</h2>
            <p>Reduces data size to save storage and bandwidth.</p>
            
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
                        <td><strong>Definition</strong></td>
                        <td>Original data fully recoverable</td>
                        <td>Some data permanently discarded</td>
                    </tr>
                    <tr>
                        <td><strong>Reversibility</strong></td>
                        <td>Yes — perfect reconstruction</td>
                        <td>No — irreversible</td>
                    </tr>
                    <tr>
                        <td><strong>Compression Ratio</strong></td>
                        <td>Low to moderate (2:1 to 5:1)</td>
                        <td>High (10:1 to 100:1)</td>
                    </tr>
                    <tr>
                        <td><strong>Quality Impact</strong></td>
                        <td>No degradation</td>
                        <td>Reduced quality</td>
                    </tr>
                    <tr>
                        <td><strong>Used For</strong></td>
                        <td>Text, programs, financial data, medical images</td>
                        <td>Audio, video, photos, streaming</td>
                    </tr>
                    <tr>
                        <td><strong>Algorithms</strong></td>
                        <td>Huffman, LZW, Run-Length Encoding</td>
                        <td>JPEG, MP3, MPEG, DCT, DWT</td>
                    </tr>
                    <tr>
                        <td><strong>Examples</strong></td>
                        <td>PNG, ZIP, FLAC, PDF, FFV1</td>
                        <td>JPEG, MP3, MP4, AVI, H.264</td>
                    </tr>
                </tbody>
            </table>
            
            <h4>Key Concepts:</h4>
            <ul>
                <li><strong>Lossless:</strong> Finds statistical redundancy (repeated patterns, runs of zeros)</li>
                <li><strong>Lossy:</strong> Uses perceptual coding — removes data humans can’t perceive (high-frequency sounds, subtle color changes, redundant frames)</li>
                <li><strong>Transform Coding:</strong> Converts data to frequency domain (DCT in JPEG) → quantize less important coefficients → discard</li>
            </ul>

            <div class="summary-section">
                <h2 class="summary-title">Exam Summary: Key Takeaways</h2>
                <p><strong>Guided Media:</strong></p>
                <ul>
                    <li><strong>Twisted Pair:</strong> Cheap, short-range, UTP/STP, Cat 5/6/7 — Ethernet</li>
                    <li><strong>Coaxial:</strong> Better shielding than twisted pair, used in cable TV — legacy LAN</li>
                    <li><strong>Optical Fiber:</strong> Highest bandwidth, longest distance, immune to EMI — backbone of internet</li>
                </ul>
                
                <p><strong>Unguided Media:</strong></p>
                <ul>
                    <li><strong>Radio Waves:</strong> Omnidirectional, penetrates walls — AM/FM, cellular sub-6GHz</li>
                    <li><strong>Microwaves:</strong> Line-of-sight, high bandwidth — satellite, 5G mmWave, point-to-point</li>
                    <li><strong>Infrared:</strong> Short-range, secure, blocked by walls — remotes, IrDA</li>
                </ul>
                
                <p><strong>Propagation Modes:</strong></p>
                <ul>
                    <li><strong>Ground Wave:</strong> LF/MF — AM radio</li>
                    <li><strong>Sky Wave:</strong> HF — international radio, MUF critical</li>
                    <li><strong>LOS:</strong> VHF+ — cellular, Wi-Fi, satellite</li>
                    <li>LOS Distance: d = √(2hₜ) + √(2hᵣ)</li>
                </ul>
                
                <p><strong>Antennas:</strong></p>
                <ul>
                    <li>Gain = Efficiency × Directivity (dBi)</li>
                    <li>Main lobe = desired direction; side/back lobes = waste</li>
                    <li>Directional antennas (Yagi, dish) for long-range; omnidirectional (dipole) for broadcast</li>
                    <li>Phased arrays enable beamforming in 5G</li>
                </ul>
                
                <p><strong>Error Detection & Correction:</strong></p>
                <ul>
                    <li><strong>CRC:</strong> Gold standard for detection — uses polynomial division</li>
                    <li><strong>Checksum:</strong> Simple sum + 1’s complement — used in IP/TCP headers</li>
                    <li><strong>Hamming Code:</strong> Corrects 1-bit errors — know encoding steps and error location calculation</li>
                    <li><strong>FEC vs Retransmission:</strong> FEC = real-time (video); Retransmission = non-realtime (file transfer)</li>
                </ul>
                
                <p><strong>Data Compression:</strong></p>
                <ul>
                    <li><strong>Lossless:</strong> Text, code, medical — PNG, ZIP, FLAC</li>
                    <li><strong>Lossy:</strong> Audio/video — JPEG, MP3, MP4</li>
                    <li>Lossy uses DCT/DWT to remove imperceptible data</li>
                </ul>
            </div>

            <div class="exam-tip">
                💡 EXAM TIP: Focus on comparing guided media (fiber vs coax vs twisted pair), knowing the key differences between ground/sky/LOS propagation, understanding Hamming code step-by-step encoding and decoding, and memorizing the difference between lossy and lossless compression with examples. These are HIGH-YIELD topics!
            </div>

            <footer>
                <p>Prepared for Exam Success • Based on Chapter 3: Transmission Media and Data Compression</p>
                <p>© 2023 Department of Electronics and Computer Engineering, Pulchowk Campus</p>
            </footer>
        </section>
    </div>
</body>
</html>

<!-- <=========================chapter4 start =============> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 4: Signal Encoding Techniques</title>
    <style>
        :root {
            --primary-green: #2e8b57;
            --secondary-green: #3cb371;
            --accent-yellow: #ffd700;
            --light-yellow: #fffacd;
            --text-dark: #333333;
            --text-light: #555555;
            --border-color: #3cb371;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            color: var(--text-dark);
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(46, 139, 87, 0.1);
            overflow: hidden;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            text-align: center;
            padding: 40px 20px;
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
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            font-weight: 700;
        }
        
        h2 {
            color: var(--primary-green);
            border-bottom: 3px solid var(--accent-yellow);
            padding-bottom: 10px;
            margin: 30px 0 20px 0;
            font-size: 2rem;
            position: relative;
        }
        
        h2::after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--accent-yellow);
        }
        
        h3 {
            color: var(--secondary-green);
            margin: 25px 0 15px 0;
            font-size: 1.6rem;
        }
        
        p {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }
        
        .highlight {
            background-color: var(--light-yellow);
            border-left: 5px solid var(--accent-yellow);
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
            font-weight: 500;
        }
        
        .key-feature {
            background-color: rgba(60, 179, 113, 0.1);
            border-left: 4px solid var(--secondary-green);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        .disadvantage {
            background-color: rgba(255, 217, 0, 0.1);
            border-left: 4px solid var(--accent-yellow);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        ul, ol {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        li {
            margin-bottom: 8px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: var(--secondary-green);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        
        tr:nth-child(even) {
            background-color: var(--light-yellow);
        }
        
        tr:hover {
            background-color: #fff8dc;
        }
        
        .figure-container {
            text-align: center;
            margin: 30px 0;
            padding: 15px;
            background-color: var(--light-yellow);
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }
        
        .figure-caption {
            font-style: italic;
            color: var(--text-light);
            margin-top: 10px;
            font-size: 0.9rem;
        }
        
        .summary-section {
            background-color: rgba(46, 139, 87, 0.05);
            border: 2px dashed var(--secondary-green);
            border-radius: 10px;
            padding: 25px;
            margin: 40px 0;
        }
        
        .summary-title {
            color: var(--primary-green);
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 10px;
        }
        
        .exam-tip {
            background-color: #fff8dc;
            border: 2px solid var(--accent-yellow);
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            font-weight: 600;
            color: #d35400;
            text-align: center;
        }
        
        .tech-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 8px;
            background-color: var(--secondary-green);
            border-radius: 50%;
            vertical-align: middle;
        }
        
        code {
            background-color: #f0f0f0;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: 'Courier New', Courier, monospace;
        }
        
        .math-equation {
            background-color: #f8f9fa;
            border-left: 4px solid var(--secondary-green);
            padding: 12px 15px;
            margin: 20px 0;
            font-family: 'Cambria Math', serif;
            font-size: 1.1rem;
            text-align: center;
            border-radius: 0 8px 8px 0;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-light);
            font-size: 0.9rem;
            border-top: 1px solid #eee;
            margin-top: 40px;
        }
        
        .section-divider {
            height: 2px;
            background: linear-gradient(to right, transparent, var(--accent-yellow), transparent);
            margin: 40px 0;
        }
        
        @media (max-width: 768px) {
            h1 { font-size: 2.2rem; }
            h2 { font-size: 1.8rem; }
            h3 { font-size: 1.4rem; }
            p { font-size: 1rem; }
            th, td { padding: 8px; }
            .figure-container { padding: 10px; }
            .math-equation { font-size: 1rem; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Chapter 4: Signal Encoding Techniques</h1>
            <p>Comprehensive Exam Preparation Guide</p>
        </header>

        <section>
            <h2>Introduction to Modulation and Encoding</h2>
            <p>Signal encoding is the process of converting data (analog or digital) into a form suitable for transmission over a physical medium. It bridges the gap between information and the communication channel.</p>
            
            <div class="key-feature">
                <strong>Core Definition:</strong> Encoding transforms symbols, characters, or data into electrical signals (voltage pulses, radio waves) for transmission. Modulation specifically refers to modifying a carrier wave's properties to carry information.
            </div>
            
            <p>There are four fundamental types of data-to-signal conversion:</p>
            <ul>
                <li><strong>Analog Data → Analog Signals</strong>: Modulation techniques like AM, FM, PM</li>
                <li><strong>Analog Data → Digital Signals</strong>: Pulse Code Modulation (PCM)</li>
                <li><strong>Digital Data → Analog Signals</strong>: ASK, FSK, PSK, QAM</li>
                <li><strong>Digital Data → Digital Signals</strong>: Unipolar, Polar, Biphase, Bipolar encoding</li>
            </ul>

            <div class="section-divider"></div>

            <h2>Modulation: Why Do We Need It?</h2>
            <p>Baseband signals (original low-frequency signals like voice or data) cannot be transmitted efficiently over long distances due to:</p>
            <ul>
                <li>Large antenna size requirements (antenna length ≈ λ/4)</li>
                <li>Signal distortion and attenuation over distance</li>
                <li>Interference between multiple signals</li>
                <li>Inability to use multiplexing effectively</li>
            </ul>
            
            <p>Modulation solves these by superimposing the baseband signal onto a high-frequency carrier wave.</p>
            
            <h3>Advantages of Modulation:</h3>
            <div class="key-feature">
                <ul>
                    <li>Reduces antenna size (higher frequency = shorter wavelength)</li>
                    <li>Enables multiplexing (FDM, TDM)</li>
                    <li>Increases communication range</li>
                    <li>Improves reception quality and noise immunity</li>
                    <li>Allows bandwidth adjustment for different applications</li>
                    <li>Prevents signal mixing</li>
                </ul>
            </div>

            <div class="section-divider"></div>

            <h2>Analog Data → Analog Signals: Continuous Wave Modulation</h2>
            <p>A high-frequency sinusoidal carrier wave (c(t) = A<sub>c</sub> cos(2πf<sub>c</sub>t)) has its parameters modified by the message signal m(t).</p>
            
            <h3>1. Amplitude Modulation (AM)</h3>
            <p>The amplitude of the carrier varies proportionally to the instantaneous amplitude of the modulating signal.</p>
            
            <div class="math-equation">
                s(t) = A<sub>c</sub>[1 + μ·m(t)] · cos(2πf<sub>c</sub>t)<br>
                Where:<br>
                A<sub>c</sub> = Carrier amplitude<br>
                μ = Modulation index (0 ≤ μ ≤ 1)<br>
                m(t) = Normalized message signal
            </div>
            
            <h4>Modulation Index (μ):</h4>
            <ul>
                <li><strong>μ = 1 (100% modulation):</strong> Ideal case. Maximum power efficiency without distortion.</li>
                <li><strong>μ < 1 (Under-modulation):</strong> Weak signal, poor SNR.</li>
                <li><strong>μ > 1 (Over-modulation):</strong> Severe distortion, envelope loss.</li>
            </ul>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/600x200?text=AM+Waveforms:+Message,+Carrier,+Modulated" alt="AM Waveforms" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: AM Waveform showing Message, Carrier, and Modulated Signal</p>
            </div>
            
            <h4>Bandwidth of AM:</h4>
            <div class="math-equation">
                BW<sub>AM</sub> = 2f<sub>m</sub><br>
                Where f<sub>m</sub> = Highest frequency in the message signal
            </div>
            
            <h4>Power Calculations:</h4>
            <div class="math-equation">
                P<sub>c</sub> = A<sub>c</sub>² / 2R<br>
                P<sub>usb</sub> = P<sub>lsb</sub> = (μ² · P<sub>c</sub>) / 4<br>
                P<sub>AM</sub> = P<sub>c</sub> + P<sub>usb</sub> + P<sub>lsb</sub> = P<sub>c</sub>(1 + μ²/2)
            </div>
            <p>At μ=1, P<sub>AM</sub> = 1.5 × P<sub>c</sub>. <strong>Two-thirds of power is wasted in the carrier!</strong></p>
            
            <h4>Disadvantages of AM:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Low power efficiency (most power in carrier)</li>
                    <li>Large bandwidth requirement</li>
                    <li>Poor noise immunity</li>
                    <li>Susceptible to interference</li>
                </ul>
            </div>
            
            <h3>2. Double Sideband Suppressed Carrier (DSB-SC)</h3>
            <p>The carrier is removed entirely, leaving only the two sidebands.</p>
            
            <div class="math-equation">
                s(t) = A<sub>c</sub>·m(t)·cos(2πf<sub>c</sub>t)
            </div>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>50% power saving vs AM (no carrier)</li>
                    <li>Same bandwidth as AM</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Complex demodulation requires coherent detector (needs exact carrier replica)</li>
                    <li>Cannot use simple envelope detector</li>
                </ul>
            </div>
            
            <h3>3. Single Sideband Suppressed Carrier (SSB-SC)</h3>
            <p>Only one sideband (USB or LSB) is transmitted, eliminating the other sideband and the carrier.</p>
            
            <div class="math-equation">
                BW<sub>SSB</sub> = f<sub>m</sub>
            </div>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>Halves bandwidth compared to AM</li>
                    <li>Maximum power efficiency (all power in useful sideband)</li>
                    <li>Less noise and interference</li>
                    <li>More channels fit in same spectrum</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Very complex transmitter and receiver design</li>
                    <li>Requires extremely stable oscillators</li>
                    <li>Difficult filtering to remove unwanted sideband</li>
                </ul>
            </div>
            
            <h3>4. Vestigial Sideband Suppressed Carrier (VSB-SC)</h3>
            <p>A compromise between DSB-SC and SSB-SC. One full sideband and a portion (vestige) of the other are transmitted.</p>
            
            <div class="math-equation">
                BW<sub>VSB</sub> = f<sub>m</sub> + f<sub>v</sub><br>
                Where f<sub>v</sub> = Vestige bandwidth (small)
            </div>
            
            <h4>Applications:</h4>
            <ul>
                <li>Television broadcasting (video signal)</li>
                <li>Where low-frequency components must be preserved</li>
            </ul>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>Bandwidth less than DSB-SC</li>
                    <li>Easier filter design than SSB</li>
                    <li>Preserves low-frequency content</li>
                    <li>Good phase characteristics</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Bandwidth greater than SSB</li>
                    <li>Demodulation more complex than AM</li>
                </ul>
            </div>

            <div class="section-divider"></div>

            <h2>Analog Data → Analog Signals: Angle Modulation</h2>
            <p>The angle (phase or frequency) of the carrier is varied with the message signal.</p>
            
            <h3>1. Frequency Modulation (FM)</h3>
            <p>The instantaneous frequency of the carrier changes proportionally to the amplitude of the message signal.</p>
            
            <div class="math-equation">
                f_i(t) = f_c + k_f \cdot m(t)<br>
                s(t) = A_c \cos\left(2\pi f_c t + 2\pi k_f \int_0^t m(\tau) d\tau\right)
            </div>
            
            <h4>Modulation Index (β):</h4>
            <div class="math-equation">
                β = Δf / f_m<br>
                Where:<br>
                Δf = Maximum frequency deviation<br>
                f_m = Highest modulating frequency
            </div>
            
            <h4>Narrowband FM (NBFM):</h4>
            <div class="key-feature">
                <ul>
                    <li>β << 1 (typically < 0.3)</li>
                    <li>Bandwidth ≈ 2f<sub>m</sub> (like AM)</li>
                    <li>Used in mobile communications (police radios, taxis)</li>
                </ul>
            </div>
            
            <h4>Wideband FM (WBFM):</h4>
            <div class="key-feature">
                <ul>
                    <li>β >> 1 (typically > 5)</li>
                    <li>Bandwidth ≈ 2(β + 1)f<sub>m</sub> (Carson’s Rule)</li>
                    <li>Excellent noise immunity</li>
                    <li>Used in FM radio broadcasting (88–108 MHz)</li>
                </ul>
            </div>
            
            <h4>Advantages of FM:</h4>
            <div class="key-feature">
                <ul>
                    <li>High noise immunity (amplitude noise can be clipped)</li>
                    <li>Constant amplitude allows efficient power amplifiers</li>
                    <li>Greater fidelity than AM</li>
                </ul>
            </div>
            
            <h4>Disadvantages of FM:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Requires much larger bandwidth than AM</li>
                    <li>More complex transmitters and receivers</li>
                    <li>Line-of-sight propagation limits range</li>
                </ul>
            </div>
            
            <h3>2. Phase Modulation (PM)</h3>
            <p>The instantaneous phase of the carrier changes proportionally to the message signal.</p>
            
            <div class="math-equation">
                \phi_i(t) = k_p \cdot m(t)<br>
                s(t) = A_c \cos\left(2\pi f_c t + k_p \cdot m(t)\right)
            </div>
            
            <h4>Key Insight:</h4>
            <div class="highlight">
                FM and PM are closely related. FM is the integral of PM, and PM is the derivative of FM. The modulation index β<sub>PM</sub> = k<sub>p</sub>·A<sub>m</sub>.
            </div>
            
            <h4>Application:</h4>
            <ul>
                <li>Military communications</li>
                <li>Some digital systems (as part of QPSK/QAM)</li>
            </ul>

            <div class="section-divider"></div>

            <h2>Analog Data → Digital Signals: Pulse Code Modulation (PCM)</h2>
            <p>PCM is the standard method used in digital telephony (PSTN) to convert analog voice signals into digital bitstreams.</p>
            
            <h3>Three Key Steps:</h3>
            
            <h4>1. Sampling:</h4>
            <p>Converting a continuous-time signal into discrete samples.</p>
            <div class="math-equation">
                f_s ≥ 2f_m \quad \text{(Nyquist Sampling Theorem)}
            </div>
            <p>Where f<sub>s</sub> = sampling rate, f<sub>m</sub> = maximum signal frequency.<br>
            For voice (4 kHz max): f<sub>s</sub> = 8 kHz (8000 samples/sec)</p>
            
            <h4>2. Quantization:</h4>
            <p>Mapping infinite possible amplitude values to a finite set of levels.</p>
            <div class="highlight">
                If n bits are used → 2<sup>n</sup> quantization levels.<br>
                Example: 8-bit PCM → 256 levels → Step size = Range / 256
            </div>
            <p>Quantization introduces error → <strong>Quantization Noise</strong>.</p>
            
            <h4>3. Encoding:</h4>
            <p>Each quantized sample is converted into a binary code (e.g., 8-bit binary number).</p>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/600x300?text=PCM+Sampling,+Quantization,+Encoding" alt="PCM Process" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: PCM Encoding Process</p>
            </div>
            
            <h4>Bit Rate Calculation:</h4>
            <div class="math-equation">
                R_b = f_s \times n \quad \text{bits per second}
            </div>
            <p>For voice: 8 kHz × 8 bits = 64 kbps (Standard DS0 channel)</p>
            
            <h4>Advantages of PCM:</h4>
            <div class="key-feature">
                <ul>
                    <li>High quality and noise immunity</li>
                    <li>Easy regeneration (digital repeaters)</li>
                    <li>Compatible with digital networks</li>
                    <li>Can multiplex with other digital data</li>
                </ul>
            </div>
            
            <h4>Disadvantages of PCM:</h4>
            <div class="disadvantage">
                <ul>
                    <li>High bit rate required (64 kbps per voice channel)</li>
                    <li>Large bandwidth consumption</li>
                    <li>Complex ADC/DAC circuits needed</li>
                </ul>
            </div>

            <div class="section-divider"></div>

            <h2>Digital Data → Digital Signals: Line Coding</h2>
            <p>Representing binary data (0s and 1s) as voltage levels on a wire for transmission over a digital channel (e.g., computer to printer).</p>
            
            <h3>1. Unipolar Encoding</h3>
            <p>Uses only positive voltage (or zero) to represent bits.</p>
            <ul>
                <li>Binary 1 → Positive voltage</li>
                <li>Binary 0 → Zero voltage</li>
            </ul>
            
            <div class="disadvantage">
                <ul>
                    <li><strong>DC Component:</strong> Non-zero average voltage → blocks transformers/capacitors</li>
                    <li><strong>Synchronization Problem:</strong> Long strings of 0s cause clock drift</li>
                </ul>
            </div>
            
            <h3>2. Polar Encoding</h3>
            <p>Uses both positive and negative voltages.</p>
            
            <h4>NRZ-L (Non-Return-to-Zero, Level):</h4>
            <ul>
                <li>Binary 0 → Positive voltage</li>
                <li>Binary 1 → Negative voltage</li>
                <li>No return to zero during bit interval</li>
            </ul>
            
            <h4>NRZ-I (Non-Return-to-Zero, Invert):</h4>
            <ul>
                <li>Binary 0 → No change in level</li>
                <li>Binary 1 → Transition (inversion) at start of bit</li>
            </ul>
            <div class="key-feature">
                <strong>Advantage:</strong> Better synchronization than NRZ-L due to transitions on 1s.
            </div>
            
            <h4>RZ (Return-to-Zero):</h4>
            <ul>
                <li>Binary 1 → Positive pulse for half bit period, then back to zero</li>
                <li>Binary 0 → Negative pulse for half bit period, then back to zero</li>
            </ul>
            <div class="disadvantage">
                <ul>
                    <li>Requires double bandwidth (two transitions per bit)</li>
                </ul>
            </div>
            
            <h3>3. Biphase Encoding</h3>
            <p>Uses a transition in the middle of each bit for synchronization.</p>
            
            <h4>Manchester Encoding:</h4>
            <ul>
                <li>Binary 1 → Low-to-High transition in middle</li>
                <li>Binary 0 → High-to-Low transition in middle</li>
            </ul>
            <div class="key-feature">
                <strong>Advantages:</strong> No DC component, excellent self-clocking, easy detection.
            </div>
            
            <h4>Differential Manchester:</h4>
            <ul>
                <li>Always a transition in the middle of the bit</li>
                <li>Binary 1 → NO transition at start of bit</li>
                <li>Binary 0 → Transition at start of bit</li>
            </ul>
            <div class="key-feature">
                <strong>Advantage:</strong> More robust than Manchester against polarity inversion.
            </div>
            
            <h3>4. Bipolar Encoding</h3>
            <p>Uses three levels: positive, negative, and zero.</p>
            
            <h4>AMI (Alternate Mark Inversion):</h4>
            <ul>
                <li>Binary 0 → Zero voltage</li>
                <li>Binary 1 → Alternating positive and negative pulses</li>
            </ul>
            <div class="disadvantage">
                <ul>
                    <li>Long strings of 0s → no transitions → loss of synchronization</li>
                </ul>
            </div>
            
            <h4>B8ZS (Bipolar with 8-Zero Substitution):</h4>
            <div class="highlight">
                Replaces eight consecutive zeros with a special pattern based on last 1's polarity:<br>
                If last 1 was + → 000+-0-+<br>
                If last 1 was - → 000-+0+-
            </div>
            <p>Used in North America T1 lines.</p>
            
            <h4>HDB3 (High-Density Bipolar 3):</h4>
            <div class="highlight">
                Replaces four consecutive zeros with a pattern based on count of 1s since last substitution and polarity.<br>
                Used in European E1 lines.
            </div>

            <div class="section-divider"></div>

            <h2>Digital Data → Analog Signals: Digital Modulation</h2>
            <p>Mapping digital bits to analog waveform characteristics (amplitude, frequency, phase).</p>
            
            <h3>1. Amplitude Shift Keying (ASK)</h3>
            <p>Amplitude of carrier varies with bit value.</p>
            <div class="math-equation">
                s(t) = 
                \begin{cases} 
                A_c \cos(2\pi f_c t) & \text{for } 1 \\
                0 & \text{for } 0 
                \end{cases}
            </div>
            <p>Also called On-Off Keying (OOK).</p>
            
            <div class="disadvantage">
                <ul>
                    <li>Simple but very susceptible to noise</li>
                    <li>Low spectral efficiency</li>
                    <li>Used in low-cost RF links, optical fiber (LEDs)</li>
                </ul>
            </div>
            
            <h3>2. Frequency Shift Keying (FSK)</h3>
            <p>Frequency of carrier shifts between two values.</p>
            <div class="math-equation">
                s(t) = 
                \begin{cases} 
                A_c \cos(2\pi f_1 t) & \text{for } 1 \\
                A_c \cos(2\pi f_0 t) & \text{for } 0 
                \end{cases}
            </div>
            
            <div class="math-equation">
                BW_{FSK} ≈ |f_1 - f_0| + 2B
            </div>
            <p>Where B = bit rate.</p>
            
            <div class="key-feature">
                <strong>Advantages:</strong> Better noise immunity than ASK, non-coherent detection possible.
            </div>
            
            <div class="disadvantage">
                <ul>
                    <li>Requires more bandwidth than PSK</li>
                    <li>Used in modems, wireless LANs, RFID</li>
                </ul>
            </div>
            
            <h3>3. Phase Shift Keying (PSK)</h3>
            <p>Phase of carrier shifts to represent bits.</p>
            
            <h4>Binary PSK (BPSK):</h4>
            <div class="math-equation">
                s(t) = 
                \begin{cases} 
                A_c \cos(2\pi f_c t) & \text{for } 0 \\
                -A_c \cos(2\pi f_c t) & \text{for } 1 
                \end{cases}
            </div>
            <p>Uses 2 phases: 0° and 180°.</p>
            
            <div class="key-feature">
                <strong>Advantages:</strong> Best noise performance among basic schemes, constant envelope.
            </div>
            
            <h4>Quadrature PSK (QPSK):</h4>
            <p>Encodes 2 bits per symbol using 4 phases: 45°, 135°, 225°, 315°.</p>
            <div class="math-equation">
                Bit Rate = 2 × Symbol Rate
            </div>
            <div class="key-feature">
                <strong>Advantages:</strong> Doubles data rate vs BPSK at same bandwidth, widely used in Wi-Fi, satellite, cellular.
            </div>
            
            <h3>4. Quadrature Amplitude Modulation (QAM)</h3>
            <p>Combines ASK and PSK — varies both amplitude and phase simultaneously.</p>
            
            <div class="math-equation">
                s(t) = I(t) \cos(2\pi f_c t) - Q(t) \sin(2\pi f_c t)
            </div>
            <p>I(t) and Q(t) are independent amplitude levels representing bits.</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Modulation Order</th>
                        <th>Bits per Symbol</th>
                        <th>Applications</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>4-QAM</td>
                        <td>2</td>
                        <td>Basic QPSK</td>
                    </tr>
                    <tr>
                        <td>16-QAM</td>
                        <td>4</td>
                        <td>Cable modems, Wi-Fi 4/5</td>
                    </tr>
                    <tr>
                        <td>64-QAM</td>
                        <td>6</td>
                        <td>Wi-Fi 5/6, 4G LTE</td>
                    </tr>
                    <tr>
                        <td>256-QAM</td>
                        <td>8</td>
                        <td>Wi-Fi 6E/7, 5G NR</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/400x400?text=QAM+Constellation+Diagrams" alt="QAM Constellation Diagrams" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Constellation diagrams for 4-QAM, 16-QAM, 64-QAM</p>
            </div>
            
            <div class="key-feature">
                <strong>Advantages:</strong> Highest spectral efficiency, supports high data rates.
            </div>
            
            <div class="disadvantage">
                <ul>
                    <li>Very sensitive to noise and distortion</li>
                    <li>Requires precise synchronization and linear amplifiers</li>
                    <li>Complex demodulation</li>
                </ul>
            </div>

            <div class="section-divider"></div>

            <h2>Pulse Modulation: Analog Digital Hybrid</h2>
            <p>Uses pulse trains as carriers, varying their properties based on analog signal.</p>
            
            <h3>1. Pulse Amplitude Modulation (PAM)</h3>
            <p>Amplitude of pulses varies with message signal amplitude.</p>
            <div class="key-feature">
                <strong>Use Case:</strong> First step in PCM system. Natural PAM reconstructs signal via LPF.
            </div>
            
            <h3>2. Pulse Width Modulation (PWM) / Pulse Duration Modulation (PDM)</h3>
            <p>Width/duration of pulses varies with message amplitude.</p>
            <div class="key-feature">
                <strong>Use Case:</strong> Motor speed control, audio amplifiers, LED dimming.
            </div>
            
            <h3>3. Pulse Position Modulation (PPM)</h3>
            <p>Position (timing) of pulse within time slot varies with message amplitude.</p>
            <div class="key-feature">
                <strong>Use Case:</strong> Optical communications, remote controls (low power).
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>Parameter Varied</th>
                        <th>PAM</th>
                        <th>PWM</th>
                        <th>PPM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Variable</strong></td>
                        <td>Amplitude</td>
                        <td>Width</td>
                        <td>Position</td>
                    </tr>
                    <tr>
                        <td><strong>Bandwidth</strong></td>
                        <td>Depends on pulse width</td>
                        <td>Depends on rise time</td>
                        <td>Depends on rise time</td>
                    </tr>
                    <tr>
                        <td><strong>Transmitter Power</strong></td>
                        <td>Varies with amplitude</td>
                        <td>Varies with amplitude & width</td>
                        <td>Constant</td>
                    </tr>
                </tbody>
            </table>

            <div class="section-divider"></div>

            <div class="summary-section">
                <h2 class="summary-title">Exam Summary: Key Takeaways</h2>
                
                <p><strong>Analog → Analog Modulation:</strong></p>
                <ul>
                    <li><strong>AM:</strong> Simple, inefficient (carrier waste), BW=2f<sub>m</sub>, μ≤1</li>
                    <li><strong>DSB-SC:</strong> No carrier, 50% power saving, needs coherent detection</li>
                    <li><strong>SSB-SC:</strong> Half bandwidth of AM, most efficient, hard to implement</li>
                    <li><strong>VSB-SC:</strong> Compromise for TV — preserves low freq, easier filtering</li>
                    <li><strong>FM:</strong> High noise immunity, wide BW, β = Δf/f<sub>m</sub> — NBFM (β<<1), WBFM (β>>1)</li>
                    <li><strong>PM:</strong> Similar to FM, β<sub>PM</sub> = k<sub>p</sub>A<sub>m</sub></li>
                </ul>
                
                <p><strong>Analog → Digital: PCM</strong></p>
                <ul>
                    <li>Three steps: Sampling (f<sub>s</sub> ≥ 2f<sub>m</sub>), Quantization (n bits → 2<sup>n</sup> levels), Encoding (binary)</li>
                    <li>Standard voice: 8 kHz × 8 bits = 64 kbps</li>
                    <li>Quantization noise → increased bits reduce it</li>
                </ul>
                
                <p><strong>Digital → Digital: Line Coding</strong></p>
                <ul>
                    <li><strong>Unipolar:</strong> DC problem, bad sync</li>
                    <li><strong>NRZ-L/I:</strong> No DC if balanced, I better for sync</li>
                    <li><strong>RZ:</strong> Self-sync, double BW</li>
                    <li><strong>Manchester:</strong> Best overall — no DC, self-clocking</li>
                    <li><strong>AMI/B8ZS/HDB3:</strong> Bipolar codes — solve long 0s problem</li>
                </ul>
                
                <p><strong>Digital → Analog: Digital Modulation</strong></p>
                <ul>
                    <li><strong>ASK:</strong> Simple, noisy — used in LEDs, RF</li>
                    <li><strong>FSK:</strong> Better noise immunity than ASK — modems, RFID</li>
                    <li><strong>BPSK:</strong> Most robust — lowest BER, used in deep space</li>
                    <li><strong>QPSK:</strong> 2 bits/symbol — backbone of Wi-Fi, LTE, satellite</li>
                    <li><strong>QAM:</strong> Highest efficiency — 64-QAM (6 bps/Hz), 256-QAM (8 bps/Hz) — 5G, Wi-Fi 6/7</li>
                    <li>Constellation diagrams show symbol points — closer points = more error-prone</li>
                </ul>
                
                <p><strong>Pulse Modulation:</strong></p>
                <ul>
                    <li>PAM: Amplitude variation — precursor to PCM</li>
                    <li>PWM: Width variation — motor control</li>
                    <li>PPM: Timing variation — low-power optical comms</li>
                </ul>
            </div>

            <div class="exam-tip">
                💡 EXAM TIP: Focus on comparing modulation types — especially AM vs FM power efficiency, PCM sampling theorem (fs≥2fm), differences between NRZ-I and Manchester, why QAM is superior to PSK, and how B8ZS fixes AMI's 0-run problem. Know formulas for bandwidth (AM, FM, FSK) and bit rate (PCM). These are HIGH-YIELD!
            </div>

            <footer>
                <p>Prepared for Exam Success • Based on Chapter 4: Signal Encoding Techniques</p>
                <p>© 2023 Department of Electronics and Computer Engineering, Pulchowk Campus</p>
            </footer>
        </section>
    </div>
</body>
</html>





<!-- <====================chapter5 start====================> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 5: Multiplexing and Switching</title>
    <style>
        :root {
            --primary-green: #2e8b57;
            --secondary-green: #3cb371;
            --accent-yellow: #ffd700;
            --light-yellow: #fffacd;
            --text-dark: #333333;
            --text-light: #555555;
            --border-color: #3cb371;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            color: var(--text-dark);
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(46, 139, 87, 0.1);
            overflow: hidden;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            text-align: center;
            padding: 40px 20px;
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
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            font-weight: 700;
        }
        
        h2 {
            color: var(--primary-green);
            border-bottom: 3px solid var(--accent-yellow);
            padding-bottom: 10px;
            margin: 30px 0 20px 0;
            font-size: 2rem;
            position: relative;
        }
        
        h2::after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--accent-yellow);
        }
        
        h3 {
            color: var(--secondary-green);
            margin: 25px 0 15px 0;
            font-size: 1.6rem;
        }
        
        p {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }
        
        .highlight {
            background-color: var(--light-yellow);
            border-left: 5px solid var(--accent-yellow);
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
            font-weight: 500;
        }
        
        .key-feature {
            background-color: rgba(60, 179, 113, 0.1);
            border-left: 4px solid var(--secondary-green);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        .disadvantage {
            background-color: rgba(255, 217, 0, 0.1);
            border-left: 4px solid var(--accent-yellow);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        ul, ol {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        li {
            margin-bottom: 8px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: var(--secondary-green);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        
        tr:nth-child(even) {
            background-color: var(--light-yellow);
        }
        
        tr:hover {
            background-color: #fff8dc;
        }
        
        .figure-container {
            text-align: center;
            margin: 30px 0;
            padding: 15px;
            background-color: var(--light-yellow);
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }
        
        .figure-caption {
            font-style: italic;
            color: var(--text-light);
            margin-top: 10px;
            font-size: 0.9rem;
        }
        
        .summary-section {
            background-color: rgba(46, 139, 87, 0.05);
            border: 2px dashed var(--secondary-green);
            border-radius: 10px;
            padding: 25px;
            margin: 40px 0;
        }
        
        .summary-title {
            color: var(--primary-green);
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 10px;
        }
        
        .exam-tip {
            background-color: #fff8dc;
            border: 2px solid var(--accent-yellow);
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            font-weight: 600;
            color: #d35400;
            text-align: center;
        }
        
        .tech-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 8px;
            background-color: var(--secondary-green);
            border-radius: 50%;
            vertical-align: middle;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-light);
            font-size: 0.9rem;
            border-top: 1px solid #eee;
            margin-top: 40px;
        }
        
        .section-divider {
            height: 2px;
            background: linear-gradient(to right, transparent, var(--accent-yellow), transparent);
            margin: 40px 0;
        }
        
        code {
            background-color: #f0f0f0;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: 'Courier New', Courier, monospace;
        }
        
        @media (max-width: 768px) {
            h1 { font-size: 2.2rem; }
            h2 { font-size: 1.8rem; }
            h3 { font-size: 1.4rem; }
            p { font-size: 1rem; }
            th, td { padding: 8px; }
            .figure-container { padding: 10px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Chapter 5: Multiplexing and Switching</h1>
            <p>Comprehensive Exam Preparation Guide</p>
        </header>

        <section>
            <h2>Introduction to Multiplexing</h2>
            <p>Multiplexing (or muxing) is a fundamental technique in communication systems that combines multiple analog or digital signals into a single signal over a shared medium — maximizing scarce resources like bandwidth.</p>
            
            <div class="key-feature">
                <strong>Core Purpose:</strong> Share a single physical channel among multiple users or signals to improve efficiency and reduce cost.
            </div>
            
            <p>A device that performs multiplexing is called a <strong>Multiplexer (MUX)</strong>, and the reverse process at the receiver is called <strong>Demultiplexing (DEMUX)</strong>.</p>
            
            <h3>Types of Multiplexing Techniques:</h3>
            <ul>
                <li><strong>Frequency Division Multiplexing (FDM)</strong></li>
                <li><strong>Wavelength Division Multiplexing (WDM)</strong></li>
                <li><strong>Space Division Multiplexing (SDM)</strong></li>
                <li><strong>Time Division Multiplexing (TDM)</strong></li>
            </ul>

            <div class="section-divider"></div>

            <h2>Introduction to Multiple Access</h2>
            <p>Multiple Access allows multiple users to share a finite communication channel simultaneously with minimal performance degradation.</p>
            
            <div class="key-feature">
                <strong>Key Difference from Multiplexing:</strong> While multiplexing combines signals at a central point, multiple access enables distributed user access to a shared medium.
            </div>
            
            <h3>Common Multiple Access Techniques:</h3>
            <ul>
                <li><strong>FDMA</strong> – Frequency Division Multiple Access</li>
                <li><strong>TDMA</strong> – Time Division Multiple Access</li>
                <li><strong>CDMA</strong> – Code Division Multiple Access</li>
                <li><strong>FHMA</strong> – Frequency Hopping Multiple Access</li>
            </ul>
            
            <h3>Narrowband vs Wideband Systems:</h3>
            <ul>
                <li><strong>Narrowband:</strong> Channel bandwidth << Coherence bandwidth (e.g., FDMA in AMPS: 30 kHz per voice call)</li>
                <li><strong>Wideband:</strong> Channel bandwidth >> Coherence bandwidth (e.g., CDMA, LTE)</li>
            </ul>

            <div class="section-divider"></div>

            <h2>Comparison: Multiplexing vs Multiple Access</h2>
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Multiplexing</th>
                        <th>Multiple Access</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Objective</strong></td>
                        <td>Combine multiple signals for transmission</td>
                        <td>Allow multiple users to access a shared medium</td>
                    </tr>
                    <tr>
                        <td><strong>Operation Layer</strong></td>
                        <td>Physical Layer</td>
                        <td>Data Link Layer</td>
                    </tr>
                    <tr>
                        <td><strong>Control Mechanism</strong></td>
                        <td>Centralized (MUX/DEMUX)</td>
                        <td>Distributed (users coordinate via access method)</td>
                    </tr>
                    <tr>
                        <td><strong>User Coordination</strong></td>
                        <td>Not required</td>
                        <td>Required (to avoid collisions)</td>
                    </tr>
                    <tr>
                        <td><strong>Examples</strong></td>
                        <td>TDM, FDM</td>
                        <td>TDMA, FDMA, CDMA</td>
                    </tr>
                </tbody>
            </table>

            <div class="section-divider"></div>

            <h2>Frequency Division Multiple Access (FDMA)</h2>
            <p>FDMA is the foundational technology behind 1G systems like AMPS. Each user is assigned a unique frequency band (sub-band).</p>
            
            <h4>Key Features:</h4>
            <div class="key-feature">
                <ul>
                    <li>Each user gets a dedicated frequency sub-band (e.g., 30 kHz in AMPS)</li>
                    <li>Continuous transmission — transmitter always active</li>
                    <li>Uses <strong>Frequency Division Duplexing (FDD)</strong>: Separate uplink & downlink frequencies</li>
                    <li>No synchronization needed</li>
                    <li>Low complexity compared to TDMA/CDMA</li>
                    <li>Tight filtering required to reduce adjacent channel interference</li>
                </ul>
            </div>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>Simple implementation</li>
                    <li>Low overhead (no framing/synchronization bits)</li>
                    <li>Constant latency</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Inefficient use of bandwidth (idle channels remain unused)</li>
                    <li>Requires duplexers (expensive hardware in mobile units)</li>
                    <li>Fixed capacity per channel — cannot adapt to traffic demand</li>
                    <li>Prone to adjacent channel interference if filters are imperfect</li>
                </ul>
            </div>

            <div class="section-divider"></div>

            <h2>Time Division Multiple Access (TDMA)</h2>
            <p>TDMA shares a single carrier frequency by dividing time into slots. Each user transmits in their assigned time slot.</p>
            
            <h4>Key Features:</h4>
            <div class="key-feature">
                <ul>
                    <li>Single carrier frequency shared by multiple users</li>
                    <li>Bursty transmission — transmitter ON only during assigned slot</li>
                    <li>Uses <strong>Time Division Duplexing (TDD)</strong>: Same frequency, different times for Tx/Rx</li>
                    <li>Guard intervals between slots prevent overlap</li>
                    <li>Supports dynamic slot allocation (can assign more slots to high-priority users)</li>
                    <li>Enables Mobile Assisted Handoff (MAHO) during idle slots</li>
                </ul>
            </div>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>Higher spectral efficiency than FDMA</li>
                    <li>Lower power consumption (transmitter off between slots)</li>
                    <li>Flexible bandwidth allocation</li>
                    <li>Improved handoff capability</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>High synchronization overhead required</li>
                    <li>Guard time reduces effective bandwidth</li>
                    <li>Complex timing control needed</li>
                    <li>Latency introduced due to waiting for next slot</li>
                </ul>
            </div>

            <div class="section-divider"></div>

            <h2>Synchronous TDMA vs Statistical TDMA</h2>
            <table>
                <thead>
                    <tr>
                        <th>Aspect</th>
                        <th>Synchronous TDMA</th>
                        <th>Statistical TDMA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Slot Allocation</strong></td>
                        <td>Fixed, pre-assigned regardless of activity</td>
                        <td>Dynamically assigned based on demand</td>
                    </tr>
                    <tr>
                        <td><strong>Slot Utilization</strong></td>
                        <td>Inefficient (idle slots wasted)</td>
                        <td>Efficient (only active users get slots)</td>
                    </tr>
                    <tr>
                        <td><strong>Traffic Suitability</strong></td>
                        <td>Constant traffic (e.g., voice)</td>
                        <td>Bursty traffic (e.g., internet data)</td>
                    </tr>
                    <tr>
                        <td><strong>Bandwidth Efficiency</strong></td>
                        <td>Low during idle periods</td>
                        <td>High — on-demand allocation</td>
                    </tr>
                    <tr>
                        <td><strong>System Complexity</strong></td>
                        <td>Low (simple hardware)</td>
                        <td>High (requires scheduler)</td>
                    </tr>
                    <tr>
                        <td><strong>Delay/Latency</strong></td>
                        <td>Predictable, low</td>
                        <td>Variable (depends on scheduling)</td>
                    </tr>
                    <tr>
                        <td><strong>Examples</strong></td>
                        <td>GSM (2G), legacy TDM</td>
                        <td>4G/5G, modern LAN/WAN protocols</td>
                    </tr>
                </tbody>
            </table>

            <div class="section-divider"></div>

            <h2>TDM Hierarchy (North American & International Standards)</h2>
            <p>TDM hierarchies define how multiple voice/data channels are combined into higher-speed streams.</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Level</th>
                        <th>Standard</th>
                        <th>Channels</th>
                        <th>Bit Rate</th>
                        <th>Use Case</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>T1 / J1 / E1</td>
                        <td>North America / Japan / Europe</td>
                        <td>24</td>
                        <td>1.544 Mbps</td>
                        <td>Digitally encoded voice (64 kbps each)</td>
                    </tr>
                    <tr>
                        <td>T2 / J2 / E2</td>
                        <td></td>
                        <td>96</td>
                        <td>6.312 Mbps</td>
                        <td>Copper twisted pair (up to 500 miles)</td>
                    </tr>
                    <tr>
                        <td>T3 / J3 / E3</td>
                        <td></td>
                        <td>672</td>
                        <td>44.736 Mbps</td>
                        <td>Coaxial cable, DS-3</td>
                    </tr>
                    <tr>
                        <td>T4 / J4 / E4</td>
                        <td></td>
                        <td>4032</td>
                        <td>274.176 Mbps</td>
                        <td>Long-haul backbone</td>
                    </tr>
                </tbody>
            </table>
            
            <div class="highlight">
                <strong>Note:</strong> Higher levels (T3, T4) can be generated directly from non-T1 sources (e.g., TV signals → DS-3). Not all levels are derived from lower ones.
            </div>

            <div class="section-divider"></div>

            <h2>Code Division Multiple Access (CDMA)</h2>
            <p>CDMA allows all users to transmit simultaneously over the entire frequency spectrum using unique spreading codes.</p>
            
            <h4>Key Features:</h4>
            <div class="key-feature">
                <ul>
                    <li>All users share full bandwidth (wideband system)</li>
                    <li>Each user assigned a unique pseudo-random (PN) code</li>
                    <li>Signal spread using PN code → transmitted</li>
                    <li>Receiver uses same code to "de-spread" and recover original data</li>
                    <li>Soft capacity limit — no fixed number of users</li>
                    <li>Uses both FDD and TDD</li>
                    <li>RAKE receiver combats multipath fading</li>
                </ul>
            </div>
            
            <h4>CDMA Working Example (4 Stations):</h4>
            <p>Assume stations M, N, O, P transmit data bits: <code>[1, -1, 1, 1]</code> (polar signaling: 1 = +1, 0 = -1)</p>
            <p>Assigned orthogonal codes:</p>
            <ul>
                <li>M: C1 = [1, 1, -1, -1]</li>
                <li>N: C2 = [1, -1, -1, 1]</li>
                <li>O: C3 = [1, -1, 1, -1]</li>
                <li>P: C4 = [1, 1, 1, -1]</li>
            </ul>
            
            <p><strong>Transmission:</strong> Multiply data bit by code → sum all results</p>
            <div class="highlight">
                Transmitted Signal = [1×C1] + [-1×C2] + [1×C3] + [1×C4]<br>
                = [1,1,-1,-1] + [-1,1,1,-1] + [1,-1,1,-1] + [1,1,1,-1]<br>
                = [2, 2, 2, -2]
            </div>
            
            <p><strong>Reception (for Station M):</strong> Multiply received signal by own code</p>
            <div class="highlight">
                R1 = [2,2,2,-2] • [1,1,-1,-1] = [2,2,-2,2]<br>
                Sum = 2+2-2+2 = 4 → Divide by 4 → 4/4 = <strong>1</strong> → Original bit = 1 ✓
            </div>
            
            <h4>Orthogonality Check:</h4>
            <div class="highlight">
                C_i • C_j = 0 (if i ≠ j)<br>
                C_i • C_i = N (number of users)
            </div>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>Higher capacity than FDMA/TDMA</li>
                    <li>Soft handoff (seamless transition between base stations)</li>
                    <li>Resistance to jamming and interference</li>
                    <li>No strict timing/frequency coordination needed</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li><strong>Self-Jamming:</strong> Codes aren’t perfectly orthogonal → interference between users</li>
                    <li><strong>Near-Far Problem:</strong> Strong nearby signal drowns weak distant signal → requires precise power control</li>
                    <li>Complex receiver design (RAKE, despreading)</li>
                    <li>Higher computational load</li>
                </ul>
            </div>

            <div class="section-divider"></div>

            <h2>Spread Spectrum Techniques</h2>
            <p>Spread spectrum spreads the signal over a bandwidth wider than necessary for information transmission, improving security and resistance to interference.</p>
            
            <h3>Direct Sequence Spread Spectrum (DSSS)</h3>
            <div class="key-feature">
                <ul>
                    <li>Data multiplied by high-rate pseudo-noise (PN) "chipping" code</li>
                    <li>Chip rate >> data rate</li>
                    <li>Used in: CDMA cellular, IEEE 802.11b Wi-Fi, GPS</li>
                </ul>
            </div>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>High resistance to narrowband interference</li>
                    <li>Enhanced security (hard to intercept without code)</li>
                    <li>Good multipath performance</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Requires wide bandwidth</li>
                    <li>Vulnerable to wideband jamming</li>
                </ul>
            </div>
            
            <h3>Frequency Hopping Spread Spectrum (FHSS)</h3>
            <div class="key-feature">
                <ul>
                    <li>Transmitter hops across many frequencies using a pseudo-random sequence</li>
                    <li>Both Tx and Rx must synchronize hopping pattern</li>
                    <li>Used in: Bluetooth, military comms, cordless phones</li>
                </ul>
            </div>
            
            <h4>Fast FHSS vs Slow FHSS:</h4>
            <table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Characteristics</th>
                        <th>Pros</th>
                        <th>Cons</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Fast FHSS</strong></td>
                        <td>Multiple hops per data bit</td>
                        <td>High interference/jamming resistance, better security</td>
                        <td>Complex synchronization</td>
                    </tr>
                    <tr>
                        <td><strong>Slow FHSS</strong></td>
                        <td>One hop per multiple bits (e.g., 1 hop per byte)</td>
                        <td>Easier to implement, lower overhead</td>
                        <td>Less secure, vulnerable to narrowband interference</td>
                    </tr>
                </tbody>
            </table>

            <div class="section-divider"></div>

            <h2>Switching Devices in Data Communication</h2>
            <p>Switching devices direct data flow between network nodes. They operate at different OSI layers.</p>
            
            <table>
                <thead>
                    <tr>
                        <th>Device</th>
                        <th>OSI Layer</th>
                        <th>Function</th>
                        <th>Intelligence</th>
                        <th>Security</th>
                        <th>Cost</th>
                        <th>Example Use</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Hub</strong></td>
                        <td>Layer 1 (Physical)</td>
                        <td>Broadcasts data to all ports</td>
                        <td>None</td>
                        <td>None</td>
                        <td>Cheapest</td>
                        <td>Small home labs (outdated)</td>
                    </tr>
                    <tr>
                        <td><strong>Switch</strong></td>
                        <td>Layer 2 (Data Link)</td>
                        <td>Forwards based on MAC address</td>
                        <td>Medium (MAC filtering)</td>
                        <td>Moderate (VLAN, port security)</td>
                        <td>Moderate</td>
                        <td>Office LAN, data centers</td>
                    </tr>
                    <tr>
                        <td><strong>Router</strong></td>
                        <td>Layer 3 (Network)</td>
                        <td>Routes based on IP address</td>
                        <td>High (IP routing, ACLs)</td>
                        <td>High (NAT, Firewall, VPN)</td>
                        <td>Costlier</td>
                        <td>Home Wi-Fi router, ISP networks</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>Managed vs Unmanaged Switches:</h3>
            <ul>
                <li><strong>Managed:</strong> Configurable (VLANs, QoS, monitoring) — used in enterprises</li>
                <li><strong>Unmanaged:</strong> Plug-and-play — simple home setups</li>
            </ul>

            <div class="section-divider"></div>

            <h2>Switching Techniques</h2>
            <h3>1. Circuit Switching</h3>
            <p>Establishes a dedicated physical path before communication begins (like traditional telephone calls).</p>
            
            <div class="key-feature">
                <ul>
                    <li>Dedicated end-to-end path</li>
                    <li>Path reserved for duration of call</li>
                    <li>No routing decisions after setup</li>
                </ul>
            </div>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>Dedicated bandwidth → constant delay</li>
                    <li>Guaranteed quality for real-time applications</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Long setup time (e.g., 10+ seconds for international calls)</li>
                    <li>Inefficient — channel idle when not transmitting</li>
                    <li>Expensive — dedicated resources per call</li>
                </ul>
            </div>
            
            <h3>2. Message Switching</h3>
            <p>Store-and-forward technique where entire messages are routed node-to-node.</p>
            
            <div class="key-feature">
                <ul>
                    <li>Message stored fully at each node before forwarding</li>
                    <li>No dedicated path</li>
                    <li>Used historically (telegraph networks)</li>
                </ul>
            </div>
            
            <h4>Advantages:</h4>
            <div class="key-feature">
                <ul>
                    <li>High channel utilization</li>
                    <li>Can prioritize messages</li>
                    <li>Supports broadcast</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>High delay due to storage</li>
                    <li>Requires large disk storage at nodes</li>
                    <li>Not suitable for interactive/real-time apps (voice/video)</li>
                </ul>
            </div>
            
            <h3>3. Packet Switching</h3>
            <p>Breaks messages into small packets. Each packet routed independently. Dominant in modern networks (Internet).</p>
            
            <h4>Two Types:</h4>
            
            <h5>1. Datagram Packet Switching</h5>
            <div class="key-feature">
                <ul>
                    <li>Connectionless</li>
                    <li>Each packet has full source/destination address</li>
                    <li>Packets may take different paths → arrive out of order</li>
                    <li>No resource reservation</li>
                </ul>
            </div>
            
            <h5>2. Virtual Circuit Packet Switching</h5>
            <div class="key-feature">
                <ul>
                    <li>Connection-oriented</li>
                    <li>Path established before data transfer (call setup)</li>
                    <li>Each packet carries short virtual circuit identifier (VCI)</li>
                    <li>Packets follow same path → arrive in order</li>
                    <li>Resources reserved along path</li>
                </ul>
            </div>
            
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
                        <td><strong>Connection Type</strong></td>
                        <td>Connectionless</td>
                        <td>Connection-oriented</td>
                    </tr>
                    <tr>
                        <td><strong>Routing</strong></td>
                        <td>Per-packet (dynamic)</td>
                        <td>Pre-established path</td>
                    </tr>
                    <tr>
                        <td><strong>Packet Order</strong></td>
                        <td>May arrive out of order</td>
                        <td>Arrive in order</td>
                    </tr>
                    <tr>
                        <td><strong>Header Size</strong></td>
                        <td>Larger (full addresses)</td>
                        <td>Smaller (VCI only)</td>
                    </tr>
                    <tr>
                        <td><strong>Reliability</strong></td>
                        <td>Lower</td>
                        <td>Higher</td>
                    </tr>
                    <tr>
                        <td><strong>Efficiency</strong></td>
                        <td>High</td>
                        <td>Lower (due to setup)</td>
                    </tr>
                    <tr>
                        <td><strong>Delay</strong></td>
                        <td>Higher</td>
                        <td>Lower</td>
                    </tr>
                    <tr>
                        <td><strong>Implementation Cost</strong></td>
                        <td>Low</td>
                        <td>High</td>
                    </tr>
                    <tr>
                        <td><strong>Example</strong></td>
                        <td>IP (Internet)</td>
                        <td>X.25, ATM, Frame Relay</td>
                    </tr>
                </tbody>
            </table>
            
            <h4>Advantages of Packet Switching:</h4>
            <div class="key-feature">
                <ul>
                    <li>High link utilization (statistical multiplexing)</li>
                    <li>Robust — packets rerouted around failures</li>
                    <li>Cost-effective (no dedicated path)</li>
                    <li>Scalable for bursty traffic</li>
                </ul>
            </div>
            
            <h4>Disadvantages:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Complex protocols (TCP/IP stack)</li>
                    <li>Variable delay (jitter)</li>
                    <li>Packets may be lost/dropped under congestion</li>
                    <li>Not ideal for ultra-low-latency voice/video without QoS</li>
                </ul>
            </div>

            <div class="section-divider"></div>

            <h2>IP Addresses and Routing</h2>
            <p>An IP address uniquely identifies a device on a network for communication.</p>
            
            <h3>IPv4 vs IPv6:</h3>
            <table>
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>IPv4</th>
                        <th>IPv6</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Address Size</strong></td>
                        <td>32-bit</td>
                        <td>128-bit</td>
                    </tr>
                    <tr>
                        <td><strong>Format</strong></td>
                        <td>Dotted decimal (e.g., 192.168.1.1)</td>
                        <td>Hexadecimal groups (e.g., 2001:db8::ff00:42:8329)</td>
                    </tr>
                    <tr>
                        <td><strong>Total Addresses</strong></td>
                        <td>~4.3 billion</td>
                        <td>~3.4 × 10³⁸</td>
                    </tr>
                    <tr>
                        <td><strong>Current Status</strong></td>
                        <td>Exhausted</td>
                        <td>Future standard</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>IP Address Structure:</h3>
            <p>192.168.1.15 → <strong>Network ID: 192.168.1</strong> | <strong>Host ID: 15</strong></p>
            
            <h3>Types of Routing:</h3>
            <ul>
                <li><strong>Static Routing:</strong> Manually configured by admin. No adaptation. Simple but inflexible.</li>
                <li><strong>Dynamic Routing:</strong> Uses protocols like OSPF, BGP. Adapts to topology changes automatically.</li>
                <li><strong>Default Routing:</strong> Send all unknown traffic to a default gateway.</li>
            </ul>
            
            <h3>Routing Steps (Simplified):</h3>
            <ol>
                <li>Device creates packet with Source IP and Destination IP (e.g., google.com → 142.250.190.78)</li>
                <li>Checks if destination is local network → if yes, send directly</li>
                <li>If not, sends to <strong>default gateway</strong> (router)</li>
                <li>Router checks its routing table → forwards to next hop</li>
                <li>Each router repeats until final hop delivers to destination</li>
                <li>Response follows reverse path</li>
            </ol>

            <div class="summary-section">
                <h2 class="summary-title">Exam Summary: Key Takeaways</h2>
                <p><strong>Multiplexing vs Multiple Access:</strong></p>
                <ul>
                    <li>Multiplexing: Combines signals at one point (FDM, TDM)</li>
                    <li>Multiple Access: Allows users to share medium (FDMA, TDMA, CDMA)</li>
                </ul>
                
                <p><strong>FDMA:</strong></p>
                <ul>
                    <li>1G tech, FDD, continuous transmission, low complexity</li>
                    <li>Wastes bandwidth, needs duplexers</li>
                </ul>
                
                <p><strong>TDMA:</strong></p>
                <ul>
                    <li>2G tech (GSM), TDD, bursty transmission</li>
                    <li>Higher efficiency than FDMA, enables MAHO</li>
                    <li>Requires sync, guard bands</li>
                </ul>
                
                <p><strong>CDMA:</strong></p>
                <ul>
                    <li>All users share full spectrum with unique codes</li>
                    <li>Soft handoff, soft capacity, RAKE receiver</li>
                    <li>Near-far problem → requires power control</li>
                    <li>Self-jamming due to imperfect orthogonality</li>
                </ul>
                
                <p><strong>Spread Spectrum:</strong></p>
                <ul>
                    <li>DSSS: Used in CDMA, Wi-Fi 802.11b — high interference resistance</li>
                    <li>FHSS: Used in Bluetooth — frequency hopping</li>
                    <li>Fast FHSS: More secure, complex; Slow FHSS: Simpler, less secure</li>
                </ul>
                
                <p><strong>Switching Devices:</strong></p>
                <ul>
                    <li>Hub (L1): Broadcasts — outdated</li>
                    <li>Switch (L2): MAC-based forwarding — enterprise standard</li>
                    <li>Router (L3): IP-based routing — connects networks</li>
                </ul>
                
                <p><strong>Switching Techniques:</strong></p>
                <ul>
                    <li>Circuit: Dedicated path — phone system — inefficient</li>
                    <li>Message: Store-and-forward — obsolete for real-time</li>
                    <li>Packet: Dominant today — datagram (IP) vs virtual circuit (ATM)</li>
                </ul>
                
                <p><strong>IP Addressing & Routing:</strong></p>
                <ul>
                    <li>IPv4: 32-bit, exhausted; IPv6: 128-bit, future-proof</li>
                    <li>Static routing: Manual; Dynamic routing: Adaptive (OSPF/BGP)</li>
                    <li>Default route: Catch-all path</li>
                </ul>
            </div>

            <div class="exam-tip">
                💡 EXAM TIP: Focus on comparing FDMA, TDMA, CDMA — especially their advantages/disadvantages. Understand the CDMA math example (orthogonal codes, multiplication, division by N). Know the difference between datagram and virtual circuit switching. Memorize TDM hierarchy levels (T1, T3, E1, etc.) and their bit rates. These are HIGH-YIELD topics!
            </div>
        </section>
    </div>
</body>
</html>

<!-- ========== CHAPTER 6 INSERTED HERE ========== -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 6: Cellular Wireless Communications & Latest Trends</title>
    <style>
        :root {
            --primary-green: #2e8b57;
            --secondary-green: #3cb371;
            --accent-yellow: #ffd700;
            --light-yellow: #fffacd;
            --text-dark: #333333;
            --text-light: #555555;
            --border-color: #3cb371;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            color: var(--text-dark);
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(46, 139, 87, 0.1);
            overflow: hidden;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            text-align: center;
            padding: 40px 20px;
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
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            font-weight: 700;
        }
        
        h2 {
            color: var(--primary-green);
            border-bottom: 3px solid var(--accent-yellow);
            padding-bottom: 10px;
            margin: 30px 0 20px 0;
            font-size: 2rem;
            position: relative;
        }
        
        h2::after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 80px;
            height: 3px;
            background: var(--accent-yellow);
        }
        
        h3 {
            color: var(--secondary-green);
            margin: 25px 0 15px 0;
            font-size: 1.6rem;
        }
        
        p {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }
        
        .highlight {
            background-color: var(--light-yellow);
            border-left: 5px solid var(--accent-yellow);
            padding: 15px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
            font-weight: 500;
        }
        
        .key-feature {
            background-color: rgba(60, 179, 113, 0.1);
            border-left: 4px solid var(--secondary-green);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        .disadvantage {
            background-color: rgba(255, 217, 0, 0.1);
            border-left: 4px solid var(--accent-yellow);
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        ul, ol {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        li {
            margin-bottom: 8px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: var(--secondary-green);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        
        tr:nth-child(even) {
            background-color: var(--light-yellow);
        }
        
        tr:hover {
            background-color: #fff8dc;
        }
        
        .figure-container {
            text-align: center;
            margin: 30px 0;
            padding: 15px;
            background-color: var(--light-yellow);
            border-radius: 8px;
            border: 1px solid var(--border-color);
        }
        
        .figure-caption {
            font-style: italic;
            color: var(--text-light);
            margin-top: 10px;
            font-size: 0.9rem;
        }
        
        .summary-section {
            background-color: rgba(46, 139, 87, 0.05);
            border: 2px dashed var(--secondary-green);
            border-radius: 10px;
            padding: 25px;
            margin: 40px 0;
        }
        
        .summary-title {
            color: var(--primary-green);
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 10px;
        }
        
        .exam-tip {
            background-color: #fff8dc;
            border: 2px solid var(--accent-yellow);
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            font-weight: 600;
            color: #d35400;
            text-align: center;
        }
        
        .tech-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 8px;
            background-color: var(--secondary-green);
            border-radius: 50%;
            vertical-align: middle;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-light);
            font-size: 0.9rem;
            border-top: 1px solid #eee;
            margin-top: 40px;
        }
        
        .section-divider {
            height: 2px;
            background: linear-gradient(to right, transparent, var(--accent-yellow), transparent);
            margin: 40px 0;
        }
        
        @media (max-width: 768px) {
            h1 { font-size: 2.2rem; }
            h2 { font-size: 1.8rem; }
            h3 { font-size: 1.4rem; }
            p { font-size: 1rem; }
            th, td { padding: 8px; }
            .figure-container { padding: 10px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Chapter 6: Cellular Wireless Communications & Latest Trends</h1>
            <p>Comprehensive Exam Preparation Guide</p>
        </header>

        <section>
            <h2>Evolution of Wireless Technology</h2>
            <p>The evolution of wireless communication has revolutionized how we connect and interact with the world. This progression from analog voice systems to ultra-fast digital networks represents one of the most significant technological advancements of the modern era.</p>
            
            <div class="highlight">
                <strong>Key Insight:</strong> Each generation (1G to 5G) introduced fundamental improvements in speed, capacity, security, and functionality, enabling new applications and transforming society.
            </div>

            <h3>1G – First Generation Mobile Communication System</h3>
            <p>Deployed by Nippon Telephone and Telegraph (NTT) in Tokyo in 1979, 1G marked the beginning of mobile telephony.</p>
            
            <h4>Popular 1G Systems:</h4>
            <ul>
                <li>Advanced Mobile Phone System (AMPS)</li>
                <li>Nordic Mobile Phone System (NMTS)</li>
                <li>Total Access Communication System (TACS)</li>
                <li>European Total Access Communication System (ETACS)</li>
            </ul>
            
            <h4>Key Features:</h4>
            <div class="key-feature">
                <ul>
                    <li><strong>Frequency:</strong> 800 MHz and 900 MHz</li>
                    <li><strong>Bandwidth:</strong> 10 MHz (666 duplex channels at 30 KHz each)</li>
                    <li><strong>Technology:</strong> Analogue switching</li>
                    <li><strong>Modulation:</strong> Frequency Modulation (FM)</li>
                    <li><strong>Service:</strong> Voice only</li>
                    <li><strong>Access Technique:</strong> Frequency Division Multiple Access (FDMA)</li>
                </ul>
            </div>
            
            <h4>Disadvantages of 1G:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Poor voice quality due to interference</li>
                    <li>Poor battery life</li>
                    <li>Large sized cell phones (not convenient to carry)</li>
                    <li>Less security (calls could be decoded using an FM demodulator)</li>
                    <li>Limited number of users and cell coverage</li>
                    <li>Roaming was not possible between similar systems</li>
                </ul>
            </div>

            <h3>2G – Second Generation Communication System (GSM)</h3>
            <p>Second generation introduced digital technology for wireless transmission, known as Global System for Mobile Communications (GSM). This became the foundation for future wireless standards.</p>
            
            <h4>Key Features of 2G:</h4>
            <div class="key-feature">
                <ul>
                    <li><strong>Uplink:</strong> 933-960 MHz | <strong>Downlink:</strong> 890-915 MHz (basic 900 MHz band)</li>
                    <li>Digital system (switching)</li>
                    <li>SMS services possible</li>
                    <li>Roaming capability</li>
                    <li>Enhanced security with encrypted voice transmission</li>
                    <li>First internet access at lower data rates</li>
                </ul>
            </div>
            
            <h4>Disadvantages of 2G:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Low data rate (maximum 14.4-64 kbps)</li>
                    <li>Limited mobility</li>
                    <li>Limited features on mobile devices</li>
                    <li>Limited number of users and hardware capability</li>
                </ul>
            </div>

            <h3>2.5G and 2.75G Systems</h3>
            <p>To address 2G's low data rates, enhancements were developed:</p>
            <ul>
                <li><strong>GPRS (General Packet Radio Service):</strong> Enabled data rates up to 171 kbps</li>
                <li><strong>EDGE (Enhanced Data GSM Evolution):</strong> Improved data rates up to 473.6 kbps</li>
                <li><strong>CDMA2000:</strong> Enhanced CDMA networks with up to 384 kbps data rate</li>
            </ul>

            <h3>3G – Third Generation Communication System</h3>
            <p>Introduced UMTS (Universal Mobile Telecommunications System) with a data rate of 384 kbps, enabling video calling for the first time on mobile devices.</p>
            
            <p>This generation saw the rise of smartphones and mobile applications for multimedia chat, email, video calling, games, social media, and healthcare.</p>
            
            <h4>Key Features of 3G:</h4>
            <div class="key-feature">
                <ul>
                    <li>Higher data rate</li>
                    <li>Video calling capability</li>
                    <li>Enhanced security and broader coverage</li>
                    <li>Mobile app support</li>
                    <li>Multimedia message support</li>
                    <li>Location tracking and maps</li>
                    <li>Better web browsing</li>
                    <li>TV streaming</li>
                    <li>High-quality 3D games</li>
                </ul>
            </div>
            
            <h3>3.5G to 3.75 Systems</h3>
            <p>Enhancements to existing 3G networks:</p>
            <ul>
                <li><strong>HSDPA (High Speed Downlink Packet Access):</strong> Increased downlink speeds</li>
                <li><strong>HSUPA (High Speed Uplink Packet Access):</strong> Improved uplink speeds</li>
                <li><strong>3.5G:</strong> Up to 2 Mbps data rate</li>
                <li><strong>3.75G (HSPA+):</strong> Improved version of HSPA</li>
                <li><strong>3.9G (LTE - Long Term Evolution):</strong> Precursor to 4G</li>
            </ul>
            
            <h4>Disadvantages of 3G Systems:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Expensive spectrum licenses</li>
                    <li>Costly infrastructure, equipment, and implementation</li>
                    <li>Higher bandwidth requirements</li>
                    <li>Costly mobile devices</li>
                    <li>Compatibility issues with older 2G systems and frequency bands</li>
                </ul>
            </div>

            <h3>4G – Fourth Generation Communication System</h3>
            <p>Developed by IEEE as an enhanced version of 3G, 4G offers higher data rates and advanced multimedia capabilities using LTE and LTE Advanced technologies.</p>
            
            <p>Key innovation: All services including voice are transmitted over IP packets (VoLTE).</p>
            
            <h4>Key Features of 4G:</h4>
            <div class="key-feature">
                <ul>
                    <li>Much higher data rate up to 1 Gbps</li>
                    <li>Enhanced security and mobility</li>
                    <li>Reduced latency for mission-critical applications</li>
                    <li>High-definition video streaming and gaming</li>
                    <li>Voice over LTE network (VoLTE) using IP packets</li>
                    <li>Complex modulation schemes and carrier aggregation</li>
                    <li>Integration of WiMAX technology</li>
                </ul>
            </div>
            
            <h4>Disadvantages of 4G:</h4>
            <div class="disadvantage">
                <ul>
                    <li>Expensive hardware and infrastructure</li>
                    <li>Costly spectrum allocation</li>
                    <li>Requires high-end mobile devices compatible with 4G</li>
                    <li>Wide deployment and upgrade is time-consuming</li>
                </ul>
            </div>

            <h3>5G – Fifth Generation Communication System</h3>
            <p>5G represents a quantum leap in mobile communications, designed to deliver ultra-fast internet and transform connectivity for IoT and critical applications.</p>
            
            <h4>Deployment Modes:</h4>
            <ul>
                <li><strong>Non-Standalone (NSA):</strong> Uses both LTE and 5G-NR spectrum; control signaling connects to LTE core network</li>
                <li><strong>Standalone (SA):</strong> Dedicated 5G core network with higher bandwidth 5G-NR spectrum</li>
            </ul>
            
            <h4>Key Features of 5G Technology:</h4>
            <div class="key-feature">
                <ul>
                    <li>Ultra-fast mobile internet: ≥20 Gbps downlink, ≥10 Gbps uplink per base station</li>
                    <li>Maximum latency of just 4ms (vs. 20ms for LTE)</li>
                    <li>Total cost reduction for data</li>
                    <li>Higher security and reliable network</li>
                    <li>Supports up to 1 million devices per square kilometer (ideal for IoT)</li>
                    <li>Optimized for lower power consumption, enhancing battery life</li>
                    <li>Uses advanced technologies like small cells and beamforming</li>
                </ul>
            </div>
            
            <h4>Technologies Behind 5G:</h4>
            <div class="key-feature">
                <h5>Millimeter Waves (mmWaves):</h5>
                <p>Radio frequency bands from 24 GHz to 100 GHz. Higher frequencies enable gigabit-level performance but have limited range and are easily blocked by buildings, trees, rain, and even human bodies.</p>
                
                <h5>Massive MIMO:</h5>
                <p>Multiple Input Multiple Output using multiple antennas at both transmitter (base station) and receiver (smartphone). Increases capacity by serving multiple users simultaneously and improves spectral efficiency.</p>
                
                <h5>Beamforming:</h5>
                <p>A technique using antenna arrays to focus radio signals in specific directions instead of broadcasting in all directions. The system calculates the optimal signal path to each user and steers the beam directly toward them—like a flashlight beam instead of a bare bulb.</p>
            </div>

            <div class="section-divider"></div>

            <h2>Cellular Technology Fundamental Terminologies</h2>
            <p>The cellular concept solved two major problems of early wireless systems: limited user capacity and spectral congestion.</p>
            
            <h3>What is a Cell?</h3>
            <p>A cell is the basic geographic unit in a cellular network. The signal strength from a Base Station (BS) decays with distance. The region where signal strength exceeds a minimum threshold (x dB) is the coverage area or "footprint" of a cell.</p>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/600x400?text=Hexagonal+Cell+Structure" alt="Hexagonal Cell Structure" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Hexagonal Cell Structure and Cluster</p>
            </div>
            
            <p>While circular coverage areas create overlaps and gaps, hexagonal geometry is used because it:</p>
            <ul>
                <li>Can cover an entire area without gaps or overlaps</li>
                <li>Is the most circular regular polygon (minimizes edge effects)</li>
                <li>Provides maximum coverage area for a given distance from center to edge</li>
                <li>Allows for efficient frequency reuse patterns</li>
            </ul>

            <h3>What is a Cluster?</h3>
            <p>A cluster is a group of cells that collectively use all available channels once. Each cell in a cluster uses a unique set of frequencies, and the same frequency sets can be reused in non-adjacent clusters.</p>
            
            <p>Typical cluster sizes: 4, 7, 12, or 21 cells.</p>
            
            <p><strong>Relationship:</strong> Smaller cluster size = more channels per cell = higher capacity, but increased risk of interference.</p>
            
            <p><strong>Cluster Size Formula:</strong></p>
            <div class="highlight">
                N = i² + ij + j²<br>
                Where i and j are non-negative integers
            </div>
            
            <p><strong>Steps to determine cluster geometry:</strong></p>
            <ol>
                <li>Move i number of cells along one axis</li>
                <li>Turn 60 degrees anti-clockwise and move j number of cells</li>
            </ol>

            <h3>Frequency Reuse</h3>
            <p>Frequency reuse is the scheme of allocating and reusing channels throughout a coverage region. It's the foundation of commercial wireless systems.</p>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/600x400?text=Frequency+Reuse+Pattern" alt="Frequency Reuse Pattern" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Cells with the same letter use the same set of channels</p>
            </div>
            
            <p><strong>Key Principles:</strong></p>
            <ul>
                <li>Each cell gets a subset of available channels</li>
                <li>Adjacent cells use different frequencies</li>
                <li>Same frequencies can be reused in cells far enough apart</li>
            </ul>
            
            <p><strong>Mathematical Relationship:</strong></p>
            <div class="highlight">
                S = k × N<br>
                Where:<br>
                S = Total number of duplex channels<br>
                k = Channels allocated to each cell<br>
                N = Cluster size (number of cells)<br>
                <br>
                Frequency Reuse Factor = 1/N
            </div>
            
            <p>For example, if N=7 (cluster of 7 cells), frequency reuse factor = 1/7.</p>
            
            <h3>Reuse Distance (D)</h3>
            <table>
                <thead>
                    <tr>
                        <th>Cluster Size (N)</th>
                        <th>Reuse Distance (D)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>19</td>
                        <td>7.55R</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>6R</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>4.6R</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>3.46R</td>
                    </tr>
                </tbody>
            </table>
            <p><em>Note: R = Cell radius</em></p>

            <h3>Interference</h3>
            <p>Interference is a major factor affecting cellular system performance. Sources include:</p>
            <ul>
                <li>Another mobile inside the same cell</li>
                <li>An ongoing call in a neighboring cell</li>
                <li>Other base stations transmitting in the same frequency band</li>
                <li>Non-cellular systems accidentally transmitting in cellular bands</li>
            </ul>
            
            <p>Effects:</p>
            <ul>
                <li>Voice signals → Cross talk (unwanted background noise)</li>
                <li>Control channels → Missed and blocked calls</li>
            </ul>
            
            <h4>Two Major Types of Interference:</h4>
            
            <h5>Co-Channel Interference (CCI):</h5>
            <div class="highlight">
                Occurs when the same radio channel is reused in different cells that are too close together. Caused by insufficient geographical separation between co-channel cells.
            </div>
            
            <h5>Adjacent Channel Interference (ACI):</h5>
            <div class="highlight">
                Occurs when signals from neighboring radio channels leak into the desired channel due to imperfect receiver filters. Happens when channels are too close in frequency within the same cluster.
            </div>
            
            <p><strong>Minimization Techniques:</strong></p>
            <ul>
                <li>Use careful filtering</li>
                <li>Maximize frequency separation between channels assigned to the same cell</li>
                <li>Avoid contiguous channel allocation</li>
            </ul>

            <div class="section-divider"></div>

            <h2>Handoff Strategies</h2>
            <p>Handoff (or handover) is the process of transferring an ongoing call or data session from one Base Station to another as a mobile user moves between cells.</p>
            
            <h3>Need for Handoff:</h3>
            <ul>
                <li>Enables mobility while maintaining connection</li>
                <li>Prevents service interruption during movement</li>
                <li>Manages network congestion (when cell reaches capacity)</li>
                <li>Follows "make before break" principle: new connection established before old one is terminated</li>
            </ul>
            
            <h3>Handoff Operation:</h3>
            <ol>
                <li>Identifying a new base station</li>
                <li>Reallocating voice and control channels with the new base station</li>
            </ol>
            
            <h3>Handoff Threshold:</h3>
            <div class="highlight">
                Δ = P<sub>r,handoff</sub> - P<sub>r,min usable</sub><br>
                Where:<br>
                P<sub>r,handoff</sub> = Signal strength at which handoff is initiated (-90dBm to -100dBm)<br>
                P<sub>r,min usable</sub> = Minimum usable signal strength
            </div>
            
            <p><strong>Balance required:</strong></p>
            <ul>
                <li>Too large margin → Unnecessary handoffs burden MSC</li>
                <li>Too small margin → Insufficient time to complete handoff → Call drops</li>
            </ul>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/600x400?text=Handoff+Situation" alt="Handoff Situation" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Handoff situation (Call properly transferred to BS2)</p>
            </div>
            
            <h3>Dwell Time</h3>
            <p>The time a caller remains within a cell without handoff. Depends on:</p>
            <ul>
                <li>Propagation conditions</li>
                <li>Interference levels</li>
                <li>Distance from base station</li>
                <li>Speed of the mobile device</li>
            </ul>
            
            <h3>Handoff Measurement Methods:</h3>
            
            <h5>1G Systems (Base Station Controlled):</h5>
            <ul>
                <li>Base stations monitor RSSI (Received Signal Strength Indication) of their own reserve channels</li>
                <li>Extra receivers at each base station measure signal strengths from neighboring cells</li>
                <li>All measurements reported to MSC for handoff decision</li>
            </ul>
            
            <h5>2G Systems (Mobile Assisted Handoff - MAHO):</h5>
            <div class="highlight">
                Mobile stations measure received power from neighboring base stations and report results to serving base station. Handoff occurs when neighbor's signal exceeds current cell's signal.
            </div>
            <p><strong>Advantages:</strong> Faster handoff decisions, reduced MSC load, ideal for micro-cellular networks.</p>
            
            <h3>Intersystem Handoff</h3>
            <p>Occurs when a mobile moves from one cellular system (managed by one MSC) to another system (managed by a different MSC).</p>
            
            <p><strong>Challenges:</strong></p>
            <ul>
                <li>Local call may become long-distance</li>
                <li>Requires coordination between different network operators</li>
                <li>Authentication and billing complications</li>
            </ul>
            
            <h3>Prioritizing Handoff Calls</h3>
            <p>Handoff failures are more disruptive than new call blocking. Therefore, systems prioritize handoff requests:</p>
            
            <h5>Method 1: Guard Channel Concept</h5>
            <div class="highlight">
                Reserve a portion of channels exclusively for handoff calls. Reduces total carried traffic but improves handoff success rate.
            </div>
            
            <h5>Method 2: Queuing of Handoff Calls</h5>
            <div class="highlight">
                When a handoff request arrives but no channels are available, the request is queued. The queue length and delay are calculated based on traffic patterns.
            </div>
            <p><strong>Limitation:</strong> Large delays may cause signal strength to fall below minimum threshold, leading to forced termination anyway.</p>
            
            <h3>Practical Handoff Considerations: Microcells and Umbrella Cell Concept</h3>
            <p>Users vary in speed:</p>
            <ul>
                <li><strong>High-speed users:</strong> Require frequent handoffs</li>
                <li><strong>Low-speed users:</strong> May never need handoffs</li>
            </ul>
            
            <p><strong>Problem:</strong> High-speed users moving between very small cells overload the MSC.</p>
            
            <p><strong>Solution: Umbrella Cell Concept</strong></p>
            <div class="figure-container">
                <img src="https://via.placeholder.com/600x400?text=Umbrella+Cell+Concept" alt="Umbrella Cell Concept" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: Umbrella Cell Concept - Macrocell covers multiple microcells</p>
            </div>
            <ul>
                <li>Small cells (microcells) serve low-speed users</li>
                <li>Larger macrocell (umbrella cell) serves high-speed users</li>
                <li>Different antenna heights and power levels</li>
            </ul>
            
            <p><strong>Benefits:</strong></p>
            <ul>
                <li>Minimizes handoffs for high-speed users</li>
                <li>Handles simultaneous traffic of high and low-speed users efficiently</li>
            </ul>

            <div class="section-divider"></div>

            <h2>IoT Communication</h2>
            <p>Internet of Things (IoT) refers to the network of physical devices embedded with sensors, software, and connectivity to exchange data with other devices and systems over the internet.</p>
            
            <h3>Components of IoT Communication:</h3>
            <ul>
                <li><strong>Devices (Things):</strong> Sensors and actuators</li>
                <li><strong>Communication Protocols:</strong> Rules for data exchange</li>
                <li><strong>Networks:</strong> Wireless/wired connections</li>
                <li><strong>Platforms/Servers:</strong> Process, store, and act on data</li>
            </ul>
            
            <h3>Types of IoT Communication:</h3>
            
            <h5>1. Human to Machine (H2M):</h5>
            <p>Human provides input (speech, text, image) → Device processes → Responds via text/visual display</p>
            <p><strong>Examples:</strong> Facial recognition, Biometric attendance, Speech recognition</p>
            
            <h5>2. Machine to Machine (M2M):</h5>
            <p>Direct communication between machines without human intervention</p>
            <p><strong>Examples:</strong> Smart washing machine sending completion alerts, Automated inventory systems</p>
            
            <h5>3. Machine to Human (M2H):</h5>
            <p>Machine triggers information to humans regardless of human presence</p>
            <p><strong>Examples:</strong> Fire alarms, Fitness bands alerting heart rate abnormalities</p>
            
            <h5>4. Machine to Cloud (M2C):</h5>
            <p>IoT devices send data to cloud platforms for storage, analysis, and remote access</p>
            <p><strong>Examples:</strong> Smart temperature sensor in cold storage warehouse</p>
            
            <h3>Communication Technologies Used in IoT:</h3>
            <table>
                <thead>
                    <tr>
                        <th>Technology</th>
                        <th>Range</th>
                        <th>Use Case</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Short-Range:</strong></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bluetooth (BLE)</td>
                        <td>10–100 meters</td>
                        <td>Wearables, smart home</td>
                    </tr>
                    <tr>
                        <td>Zigbee</td>
                        <td>10–100 meters</td>
                        <td>Home automation, sensors</td>
                    </tr>
                    <tr>
                        <td>Wi-Fi</td>
                        <td>~100 meters</td>
                        <td>Cameras, appliances</td>
                    </tr>
                    <tr>
                        <td>NFC/RFID</td>
                        <td>Few cm to meters</td>
                        <td>Contactless payments, tracking</td>
                    </tr>
                    <tr>
                        <td><strong>Long-Range:</strong></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Cellular (3G/4G/5G)</td>
                        <td>Km-level</td>
                        <td>Smart cars, asset tracking</td>
                    </tr>
                    <tr>
                        <td>LoRaWAN</td>
                        <td>2–15 km</td>
                        <td>Smart agriculture, remote sensors</td>
                    </tr>
                    <tr>
                        <td>NB-IoT / LTE-M</td>
                        <td>Km-level</td>
                        <td>Smart meters, smart cities</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>Features of IoT Communication:</h3>
            <ul>
                <li>Low Power Consumption — Optimized for battery-operated devices</li>
                <li>Low Bandwidth Usage — Sends small data packets efficiently</li>
                <li>Scalability — Supports millions of connected devices</li>
                <li>Reliability — Ensures consistent and accurate data transfer</li>
                <li>Security — Uses encryption and authentication</li>
                <li>Interoperability — Works across different devices and platforms</li>
                <li>Real-time Communication — Enables instant data exchange</li>
                <li>Multiple Protocol Support — MQTT, CoAP, HTTP</li>
            </ul>
            
            <h3>Applications of IoT Communication:</h3>
            <ul>
                <li><strong>Smart Homes:</strong> Lights, thermostats, security systems</li>
                <li><strong>Healthcare:</strong> Remote patient monitoring</li>
                <li><strong>Industry (IIoT):</strong> Predictive maintenance, automation</li>
                <li><strong>Agriculture:</strong> Soil moisture sensors, livestock tracking</li>
                <li><strong>Transportation:</strong> Fleet management, smart traffic</li>
            </ul>

            <div class="section-divider"></div>

            <h2>Application of 5G in IoT</h2>
            <p>5G transforms IoT by providing the necessary speed, capacity, and reliability for massive deployments.</p>
            
            <div class="figure-container">
                <img src="https://via.placeholder.com/800x500?text=5G+in+IoT+Architecture" alt="5G in IoT Architecture" style="max-width: 100%; border-radius: 8px;">
                <p class="figure-caption">Figure: 5G in IoT Ecosystem (Source: https://doi.org/10.3991/ijim.v17i17.42805)</p>
            </div>
            
            <h3>Central Node: 5G-Waiter/Server</h3>
            <p>Acts as the central communication and processing hub, routing data between IoT components using high-speed, low-latency 5G connectivity.</p>
            
            <h3>Connected IoT Applications (Edge Nodes):</h3>
            <ol>
                <li><strong>Clever Healthcare:</strong> Real-time remote patient monitoring, telemedicine, AI diagnostics enabled by 5G's low latency</li>
                <li><strong>Smart Conveyance System:</strong> Autonomous vehicles, vehicle-to-infrastructure (V2I) communication, intelligent traffic management</li>
                <li><strong>Smart Undeveloped (Smart Agriculture/Rural Development):</strong> IoT sensors for soil, weather, crop monitoring</li>
                <li><strong>Smart Engineering:</strong> Industrial IoT (Industry 4.0), predictive maintenance, smart manufacturing</li>
                <li><strong>Smart Network:</strong> Infrastructure layer with 5G base stations, routers, and network slicing for different services</li>
                <li><strong>Smart Home-grown:</strong> IoT-based automation in homes/farms (appliances, lighting, irrigation, energy management)</li>
                <li><strong>Users Retrieving Data Distantly:</strong> Remote access to IoT data via mobile apps, dashboards, or cloud services</li>
            </ol>

            <div class="summary-section">
                <h2 class="summary-title">Exam Summary: Key Takeaways</h2>
                <p><strong>Generational Evolution:</strong></p>
                <ul>
                    <li><strong>1G:</strong> Analog voice-only, FDMA, poor security</li>
                    <li><strong>2G:</strong> Digital, SMS, GSM/CDMA, 14.4-64 kbps</li>
                    <li><strong>2.5G/2.75G:</strong> GPRS (171 kbps), EDGE (473.6 kbps), CDMA2000 (384 kbps)</li>
                    <li><strong>3G:</strong> UMTS, video calling, 384 kbps, smartphone revolution</li>
                    <li><strong>3.5G/3.75G:</strong> HSDPA/HSUPA/HSPA+, up to 2 Mbps</li>
                    <li><strong>4G:</strong> LTE/LTE-A, VoIP/VoLTE, 1 Gbps, all-IP network</li>
                    <li><strong>5G:</strong> mmWave, Massive MIMO, Beamforming, ≤4ms latency, 20 Gbps, 1M devices/km², IoT enabler</li>
                </ul>
                
                <p><strong>Cellular Concepts:</strong></p>
                <ul>
                    <li>Cell = Coverage area around base station</li>
                    <li>Hexagonal geometry preferred for efficient coverage</li>
                    <li>Cluster = Group of cells using all channels once</li>
                    <li>Frequency reuse = Same frequencies reused in non-adjacent cells</li>
                    <li>Reuse factor = 1/N (N = cluster size)</li>
                    <li>Co-channel interference = Same frequency in nearby cells</li>
                    <li>Adjacent channel interference = Neighboring frequencies leaking</li>
                </ul>
                
                <p><strong>Handoff:</strong></p>
                <ul>
                    <li>Essential for mobility</li>
                    <li>MAHO (Mobile Assisted Handoff) used in 2G+</li>
                    <li>Guard channels and queuing improve handoff success</li>
                    <li>Umbrella cell concept handles mixed traffic (high/low speed)</li>
                </ul>
                
                <p><strong>IoT Communication:</strong></p>
                <ul>
                    <li>Four types: H2M, M2M, M2H, M2C</li>
                    <li>Short-range: Bluetooth, Zigbee, Wi-Fi, NFC</li>
                    <li>Long-range: Cellular (3G/4G/5G), LoRaWAN, NB-IoT/LTE-M</li>
                    <li>Key features: Low power, low bandwidth, scalability, security</li>
                    <li>5G enables massive IoT deployments with ultra-reliable low-latency communication</li>
                </ul>
                
                <p><strong>5G Technologies:</strong></p>
                <ul>
                    <li><strong>Millimeter Waves:</strong> 24-100 GHz, high capacity but short range</li>
                    <li><strong>Massive MIMO:</strong> Multiple antennas increase capacity and spectral efficiency</li>
                    <li><strong>Beamforming:</strong> Focuses signals directionally like a flashlight</li>
                </ul>
            </div>

            <div class="exam-tip">
                💡 EXAM TIP: Focus on comparing generations (what each introduced), understanding frequency reuse calculations (N=i²+ij+j²), knowing the difference between CCI and ACI, and memorizing key 5G specifications (speed, latency, devices/km²).
            </div>

            <footer>
                <p>Prepared for Exam Success • Based on Chapter 6: Cellular Wireless Communications and Latest Trends</p>
                <p>© 2023 Department of Electronics and Computer Engineering, Pulchowk Campus</p>
            </footer>
        </section>
    </div>
</body>
</html>

<!-- https://chat.qwen.ai/c/f8b1140f-9fd7-44b7-bd7a-22795536ce58 -->