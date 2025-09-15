<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Communication Syllabus - Detailed Course Outline | Engineering Curriculum</title>
    <meta name="description" content="Comprehensive syllabus for Data Communication course covering principles, protocols, transmission media, signal encoding, multiplexing, switching, and wireless communications for engineering students.">
    <meta name="keywords" content="data communication syllabus, engineering syllabus, communication protocols, transmission media, signal encoding, multiplexing, switching, wireless communications">
    <style>
        :root {
            --primary-green: #228B22;
            --secondary-green: #32CD32;
            --accent-yellow: #FFD700;
            --light-yellow: #FFFFE0;
            --dark-text: #333333;
            --light-text: #FFFFFF;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: var(--light-yellow);
            color: var(--dark-text);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: var(--light-text);
            padding: 25px 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: var(--accent-yellow);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        main {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
        }
        
        section {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border-left: 4px solid var(--accent-yellow);
            transition: transform 0.3s ease;
        }
        
        section:hover {
            transform: translateY(-5px);
        }
        
        h2 {
            color: var(--primary-green);
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 8px;
            margin-bottom: 15px;
            font-size: 1.8rem;
        }
        
        h3 {
            color: var(--secondary-green);
            margin-top: 15px;
            font-size: 1.4rem;
        }
        
        ul, ol {
            padding-left: 20px;
            margin: 10px 0;
        }
        
        li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }
        
        li:before {
            content: "•";
            color: var(--accent-yellow);
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: var(--primary-green);
            color: white;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .highlight {
            background-color: var(--accent-yellow);
            padding: 2px 5px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        .references {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 15px;
            border-radius: 5px;
        }
        
        .reference-item {
            margin-bottom: 8px;
            padding-left: 15px;
            position: relative;
        }
        
        .reference-item:before {
            content: "•";
            color: var(--secondary-green);
            position: absolute;
            left: 0;
        }
        
        footer {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            border-radius: 8px;
        }
        
        @media (max-width: 768px) {
            main {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            header {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Data Communication Syllabus</h1>
        <div class="subtitle">Comprehensive Engineering Course Outline for Year II, Part II</div>
    </header>
    
    <main>
        <section>
            <h2>Course Objectives</h2>
            <p>The objective of this course is to provide students with a solid foundation in the principles and theories of data communication, including key terminology, protocols, and standards. Also support to explore the various types of transmission media, including guided and unguided media, and their characteristics, advantages, and disadvantages. Furthermore, it introduces the methods of data encoding, error detection techniques, and their implications for effective data transmission.</p>
        </section>
        
        <section>
            <h2>Topics Covered</h2>
            
            <h3>1. Introduction (4 hours)</h3>
            <ul>
                <li>1.1 Analog data communication, data representation, data flows</li>
                <li>1.2 Evolution of data communication</li>
                <li>1.3 A communication model, data communication model</li>
                <li>1.4 Networks (LAN, WAN), simplified network architecture, the OSI model</li>
                <li>1.5 Data communication and networking for today enterprise</li>
            </ul>
            
            <h3>2. Data Communication Fundamentals (5 hours)</h3>
            <ul>
                <li>2.1 Analog and digital data</li>
                <li>2.2 Analog signals, periodic and aperiodic signals, periodic signals characteristics (Time, frequency domain)</li>
                <li>2.3 Introduction to Fourier series representation of periodic signal, Fourier transform representation of aperiodic signals, digital signals and its characteristics</li>
                <li>2.4 Analog and digital transmission, transmission mode, transmission impairments (Attenuation, distortion, noise)</li>
                <li>2.5 Data rate limits channel capacity, Nyquist bandwidth, Shannon capacity formula</li>
                <li>2.6 Performance of network (Bandwidth, throughput, latency, jitter)</li>
            </ul>
            
            <h3>3. Transmission Media and Data compression (9 hours)</h3>
            <ul>
                <li>3.1 Guided transmission media: co-axial cable, twisted pair, optical fiber</li>
                <li>3.2 Unguided transmission media: Radio waves, microwaves, infrared</li>
                <li>3.3 Antenna basics, satellite communication</li>
                <li>3.4 Wireless propagation (Introduction to groundwave propagation, sky wave propagation and line of sight propagation), frequency bands</li>
                <li>3.5 Error detection and correction: Parity, check sum, cyclic redundancy check, hamming code</li>
                <li>3.6 Data compression: Lossy and lossless</li>
            </ul>
            
            <h3>4. Signal Encoding Technique (15 hours)</h3>
            <ul>
                <li>4.1 Digital data, digital signal: RZ, NRZ, AMI, Manchester, differential Manchester, B8ZS, HDB3 for data transmission</li>
            </ul>
            
            <h3>5. Multiplexing and Switching (8 hours)</h3>
            <ul>
                <li>5.1 Access introduction to multiplexing, application of multiplexing</li>
                <li>5.2 Frequency division multiple access</li>
                <li>5.3 Time division multiple access</li>
                <li>5.4 Asymmetric digital subscriber line, XDSL</li>
                <li>5.5 Spread spectrum: DSSS, FHSS, CDMA</li>
                <li>5.6 Intro switcher communication network, connection oriented and connectionless</li>
                <li>5.7 Switching devices. Types, importance and application</li>
                <li>5.8 Circuit switching network: Circuit switching concepts, message switching</li>
                <li>5.9 Packet switching: Virtual circuit switching, datagram switching</li>
            </ul>
            
            <h3>6. Cellular Wireless Communications and Latest Trends (4 hours)</h3>
            <ul>
                <li>6.1 Overview of 1G, 2G, 3G and 4G</li>
                <li>6.2 Cellular technology fundamental terminology: cell, frequency-reuse, cluster, adjacent cell interference, co-channel interference, handoff strategies, architecture of GSM basics</li>
                <li>6.3 Introduction to 5G networks, software defined networking, IoT communication, cloud computing and virtualization in data communication</li>
            </ul>
        </section>
        
        <section>
            <h2>Tutorial Details (15 hours)</h2>
            <ul>
                <li>Tutorials on different protocols in data communication TCP/IP, HTTP/HTTPS, FTP</li>
                <li>Explore the function of open systems interconnection (OSI) model, which defines seven layers of data communication</li>
                <li>Discover data communication devices and its application</li>
                <li>Identify the application of used network topologies in scenario</li>
                <li>Collecting ideas on some security aspects of communication on present enterprises system</li>
            </ul>
        </section>
        
        <section>
            <h2>Practical Sessions (22.5 hours)</h2>
            <ul>
                <li>Signal analysis using MATLAB simulation environment</li>
                <li>Analog modulation generation and reconstruction</li>
                <li>Pulse modulation generation and reconstruction</li>
                <li>Conversion of given binary sequence into different line coding</li>
                <li>Digital modulation (ASK, FSK, PSK) generation and reconstruction</li>
            </ul>
        </section>
        
        <section>
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
                        <td>Total</td>
                        <td>45</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table>
            <p class="highlight">Note: There may be minor deviation in marks distribution.</p>
        </section>
        
        <section class="references">
            <h2>References</h2>
            <div class="reference-item">Stallings, W. (2007). Data and Computer Communications. India: Pearson Education.</div>
            <div class="reference-item">Forouzan, B. A., Fegan, S. C. (2007). Data Communications and Networking (McGraw-Hill Forouzan Networking). United Kingdom: McGraw Hill Higher Education.</div>
            <div class="reference-item">Tanenbaum, A. S., Wetherall, D. (2011). Computer Networks. India: Pearson Prentice Hall.</div>
            <div class="reference-item">Rappaport, T. S. (2024). Wireless Communications: Principles and Practice. United Kingdom: Cambridge University Press.</div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2023 Engineering Curriculum | Data Communication Syllabus</p>
        <p>Designed for students pursuing engineering education with focus on data communication and networking</p>
    </footer>
</body>
</html>