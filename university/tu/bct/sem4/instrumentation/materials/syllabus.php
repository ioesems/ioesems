<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumentation Syllabus - Detailed Course Outline | Engineering Curriculum</title>
    <meta name="description" content="Comprehensive syllabus for Instrumentation course covering measurement theory, transducers, interfacing, circuit design, and modern instrumentation systems for engineering students.">
    <meta name="keywords" content="instrumentation syllabus, engineering syllabus, measurement systems, transducers, instrumentation design, microprocessor interfacing, sensor technology">
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
        <h1>Instrumentation Syllabus</h1>
        <div class="subtitle">Comprehensive Engineering Course Outline for Year II, Part II</div>
    </header>
    
    <main>
        <section>
            <h2>Course Objectives</h2>
            <p>The objective of this course is to provide comprehensive understanding on methods and instruments for a wide range of measurement problems and systems. It also covers application of transducers in the microprocessor, microcontroller and their interfacing to design instrumentation systems.</p>
        </section>
        
        <section>
            <h2>Topics Covered</h2>
            
            <h3>1. Introduction (2 hours)</h3>
            <ul>
                <li>1.1 Analog and digital instrument: Definition, block diagram; characteristics</li>
                <li>1.2 Microprocessor-based systems: open vs closed loop, benefits, features and applications in instrumentation design</li>
                <li>1.3 Microcomputer on instrumentation design</li>
            </ul>
            
            <h3>2. Theory of Measurement (6 hours)</h3>
            <ul>
                <li>2.1 Static performance parameters: Accuracy, precision, sensitivity, resolution and linearity</li>
                <li>2.2 Dynamic performance parameters: Response time, frequency response and bandwidth</li>
                <li>2.3 Error in measurement</li>
                <li>2.4 Statistical analysis of error in measurement</li>
                <li>2.5 Measurement of resistance (Low, medium and high)</li>
                <li>2.6 DC/AC bridge (Wheatstone bridge, Maxwell's bridge, Schering bridge)</li>
            </ul>
            
            <h3>3. Transducer (8 hours)</h3>
            <ul>
                <li>3.1 Transducer, workflow of a transducer in typical system, transducer classification</li>
                <li>3.2 Sensor and its working principle (Resistive, capacitive and piezoelectric), generation of sensor, classification of sensor (Analog sensor, digital sensor)</li>
                <li>3.3 Types of sensors (Electrical sensor, chemical sensor, biological sensor, acoustic sensor, optical sensor and other motion sensor), characteristic of sensors</li>
                <li>3.4 Actuator, classification of actuators (Hydraulic, mechanical, electric), characteristic of actuator</li>
            </ul>
            
            <h3>4. Interfacing of Instrumentation System (14 hours)</h3>
            <ul>
                <li>4.1 Microprocessor and microcontroller and their selection criteria</li>
                <li>4.2 The PPI, 8255 and interfacing of peripherals (LED, 7 segment, dip switches, 8/10-bit ADC, 8/10-bit DAC using mode 0 and mode 1) with 8085 microprocessor</li>
                <li>4.3 Microcontrollers (Atmega328, STM32): Architecture, pin configuration, and connectivity</li>
                <li>4.4 Sensor/Actuator interfacing with Atmega328p (Arduino): Analog and digital sensors, implementation of communication protocols, interrupt based</li>
            </ul>
            
            <h3>5. Connectivity Technology in Instrumentation System (6 hours)</h3>
            <ul>
                <li>5.1 Wired and wireless communication system</li>
                <li>5.2 Wired connectivity: UART, I2C, SPI, CAN</li>
                <li>5.3 Wireless sensor network and its technology</li>
                <li>5.4 RF modem, Bluetooth, Wi-Fi, NFC, ZIGBEE and LORA</li>
                <li>5.5 Thermal management: Heat dissipation technique, heat sink and storage, cloud</li>
                <li>5.6 Data acquisition system (Data loggers, data archiving based data acquisition system)</li>
            </ul>
            
            <h3>6. Circuit Design (4 hours)</h3>
            <ul>
                <li>6.1 Converting requirement into design, reliability and fault tolerance</li>
                <li>6.2 High-speed design: Bandwidth, decoupling, crosstalk, impedance matching</li>
                <li>6.3 PCB design: component placement, trace routing, signal integrity, and ground loops</li>
                <li>6.4 Noise and noise coupling mechanism, noise prevention, filtering, ferrite beads, decoupling capacitors, and ESD & its prevention</li>
            </ul>
            
            <h3>7. Software for Instrumentation Application (6 hours)</h3>
            <ul>
                <li>7.1 Overview of software engineering</li>
                <li>7.2 Types of software</li>
                <li>7.3 Software development life cycle (SDLC), software process models (waterfall model, prototype model, incremental model, agile model)</li>
                <li>7.4 Software reliability vs hardware reliability</li>
                <li>7.5 Software bugs, software testing, different levels of testing</li>
            </ul>
            
            <h3>8. Electrical Equipment (6 hours)</h3>
            <ul>
                <li>8.1 Voltmeter and ammeter: Types and working principle</li>
                <li>8.2 Energy meter: Types and working principle</li>
                <li>8.3 Frequency meter: Types and working principle</li>
                <li>8.4 Wattmeter: Types and working principle</li>
            </ul>
            
            <h3>9. Latest Trends (3 hours)</h3>
            <ul>
                <li>9.1 Internet of things (IoT): Simple architecture, characteristics, advantages</li>
                <li>9.2 Smart sensors</li>
                <li>9.3 Importance of cloud computing in instrumentation system</li>
                <li>9.4 Instrumentation in industry 4.0</li>
            </ul>
            
            <h3>10. Application of Modern Instrumentation System (5 hours)</h3>
            <ul>
                <li>10.1 Instrumentation for power station including all electrical and non-electrical parameters</li>
                <li>10.2 Instrumentation for wire and cable manufacturing and bottling plant</li>
                <li>10.3 Instrumentations for a beverage manufacturing and bottling plant</li>
                <li>10.4 Instrumentations required for a biomedical application in a medical clinic or hospital</li>
                <li>10.5 Instrumentation system design using a processor (Microprocessor, microcontroller or others)</li>
            </ul>
        </section>
        
        <section>
            <h2>Tutorial Details (15 hours)</h2>
            <ul>
                <li>Understanding the fundamentals of Op-amps central to analog instrumentation. Learn how to filter, amplify, and modify analog signals for signal conditioning is essential since they are</li>
                <li>How ADCs and DACs work and how to select the right one for your application</li>
                <li>Interfacing of ADC on any application of your interest</li>
                <li>Application for the protocol UART, I2C, SPI in Arduino</li>
                <li>Design a simple temperature sensing system using a thermistor or thermocouple, op-amp, and analog display</li>
                <li>Explain the generation of PWM signals in Atmega328p for controlling</li>
            </ul>
        </section>
        
        <section>
            <h2>Practical Sessions (22.5 hours)</h2>
            <ul>
                <li>Measurement and accuracy testing: Analog and digital meters</li>
                <li>Use of LabVIEW, Proteus, MATLAB or others for modeling instrumentation systems</li>
                <li>Use of resistive, capacitive & inductive transducers / sensors / actuators</li>
                <li>Review of assembly programming and simple I/O interfacing with 8085 and 8255</li>
                <li>Interfacing of LEDs, seven segment display and motors</li>
                <li>Interfacing of ADC and DAC</li>
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
                        <td>2</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>6</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>8</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>14</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>6</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>4</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>6</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>6</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>3</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>60</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table>
            <p class="highlight">Note: There may be minor deviation in marks distribution.</p>
        </section>
        
        <section class="references">
            <h2>References</h2>
            <div class="reference-item">Hall, D. V. (1999). Microprocessor and interfacing, programming and Hardware. Tata McGraw Hill</div>
            <div class="reference-item">Goankar, R. S. (2000). Microprocessor Architecture, programming and Application with 8085. Prentice Hall</div>
            <div class="reference-item">Hart, J. D. (1996). Electronic Instrument Design: Architecting for the Life Cycle. Oxford University press, Inc.</div>
            <div class="reference-item">Sawhney, A. K. (1999). Electronic Measurement and Instrumentation. Dhanpat Rai and Sons</div>
            <div class="reference-item">Gupta, J. B. (2008). A course in Electrical and Electronics Measurement and Instrumentation, Kataria and Sons</div>
            <div class="reference-item">De Silva, C. W., Sensors and Actuators: control system instrumentation. CRC Press Taylor and French Group Boca Raton</div>
            <div class="reference-item">Misra, S., Roy, C. and Mukherjee, A. (2020). Introduction to Industrial Internet of Things and Industry 4.0. CRC press</div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2023 Engineering Curriculum | Instrumentation Syllabus</p>
        <p>Designed for students pursuing engineering education with focus on measurement systems and instrumentation design</p>
    </footer>
</body>
</html>