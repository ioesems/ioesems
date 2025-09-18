<?php
// Define subject title
$subject_title = "Instrumentation I & II Previous Year Questions Collection";

// Define questions array organized by year
$questions_by_year = [
    '2081 Bhadra' => [
        [
            'text' => 'Draw the block diagram of a typical digital computer-based instrumentation system and explain it with advantages and disadvantages.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Describe different modes of data transfer of parallel interface. Draw the block diagram of 8255 with both Port A and port B in mode 1 input showing all control signals and describe mode 1 input operation with status word.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Compare between RS232, RS422 and RS423 in various aspects.',
            'chapter' => 'Connectivity Technology in Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Draw the interfacing circuit to interface 8-bit DAC with microprocessor using 8255A PPI at base address 80H. Also, write a program for the 8085 microprocessor to generate a square wave signal at the output of DAC.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the satellite communication system with the help of a block diagram. What are advantages, and disadvantages?',
            'chapter' => 'Connectivity Technology in Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'An op-amp circuit is receiving noise interference from a nearby digital switching circuit. The digital circuit switches logic levels between 4.5V and 1.0V within 10 ns. Its current changes from 0 to 10 mA within 100 ns. Now, calculate the pseudo impedance and find the noise interference types. Also, discuss on the preventing measures of such noise coupling mechanisms.',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'What are the factors that might affect the reliability of the circuit? Discuss different types of fault tolerance schemes used for circuit design.',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'List the guidelines to avoid crosstalk when routing signal to a PCB? Also provide Guidelines for the effective shield.',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'The Prototype Model is a Software Development approach useful for projects with vague or changing requirements. Justify the statement with the help of diagrams and examples.',
            'chapter' => 'Software for Instrumentation Application',
            'has_diagram' => false
        ],
        [
            'text' => 'Draw and explain the block diagram of the industrial process control system involved in your case study. Identify the limitations of the existing system. How it can be improved? Explain your recommendation system with the help of a block diagram. Also, list the advantages of implementing the recommendation system.',
            'chapter' => 'Application of Modern Instrumentation System',
            'has_diagram' => false
        ]
    ],
    
    '2081 Baishakh' => [
        [
            'text' => 'One thing that is common on embedded real time systems is they include some type of processor. They range anywhere from serial program input devices to a full-fledged PC on a chip or board. At some point you need to decide on the type of processor to use. As an engineer, how can you choose it? Are there any rational reasons for picking one over another, or all the selection is based on personal bias? What are the situational factors imposing the selection of a microprocessor or microcontroller for a design? Discuss in brief.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Figure shows an interfacing circuit using 8255A in Mode 1. Port A is designated as the input port for a keyboard with interrupt I/O and Port B is designated as the output port for a printer with status check I/O. a) Find the port addresses by analyzing the decode logic. b) Determine the control word to set up Port A as input and Port B as output in Mode 1. c) Determine the BSR control word to enable INT EA. d) Determine the masking byte to verify the OBF line in status check I/O. e) Write subroutine to accept characters from keyboard and send character to printer.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => true,
            'diagram_path' => 'images/2081_baishakh_q2.png',
            'diagram_alt' => '8255A interfacing circuit for keyboard and printer in Mode 1'
        ],
        [
            'text' => 'a) Describe the various error detection techniques used in serial data transmission. b) What are the problems that might occur when you attempt to connect together two RS232 devices which are both configured as DTE. How can you solve this problem? Explain in brief with a suitable diagram.',
            'chapter' => 'Connectivity Technology in Instrumentation System',
            'has_diagram' => true,
            'diagram_path' => 'images/2081_baishakh_q3b.png',
            'diagram_alt' => 'Null modem connection for two DTE devices'
        ],
        [
            'text' => 'Provide examples of A/D and D/A interfacing applications in real-world scenarios. Design an interfacing circuit diagram for an 8 bit ADC using interrupt. Explain it with the suitable program.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'a) Discuss in brief why digital communication system is preferred over analog communication. b) What is a data logger? Explain its application.',
            'chapter' => 'Connectivity Technology in Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'a) What is ESD? Mention some ideas how we can reduce the chance of ESD in our workplace. b) Explain the term energy coupling in an electrical circuit. Describe about inductive coupling with remedies.',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'a) What do you mean by reliability in a circuit design? Discuss how the reliability can be achieved by incorporating fault tolerance methods. b) Discuss about FPGA(Field Programmable Gate Array).',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'a) How are the components placed in a circuit layout? b) List any four methods of preventing crosstalk with necessary diagrams.',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'Good design and programming practices can make programs more readable and understandable. How can this be achieved? Explain in detail.',
            'chapter' => 'Software for Instrumentation Application',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the control mechanism of the industrial process control system involved in your case study with the help of block diagram. What was your recommendation for further improvement of the current system? Explain why the management should implement your recommendation. Do you foresee any problems after implementing this control system?',
            'chapter' => 'Application of Modern Instrumentation System',
            'has_diagram' => false
        ]
    ],
    
    '2081 Chaitra' => [
        [
            'text' => 'a) Point out the difference between analog and digital measurement system. Explain the functional elements of an Instrumentation system with block diagram. b) What are the different parameters to define the static performance of an instrument? Distinguish between accuracy and precision of an instrument with a suitable example. Also define sensitivity. c) A balanced AC bridge has the following constants. Arm AB: R=1000Ω in parallel with C=0.5uF Arm BC: R=1000Ω in series with C=0.5uF Arm CD: R=200Ω in series with L= 30mH Find the constant of arm DA. Express the result as a pure R in parallel with pure L or C. Given frequency=1kHz.',
            'chapter' => 'Theory of Measurement',
            'has_diagram' => false
        ],
        [
            'text' => 'a) Explain why a capacitive sensor based on the change in separation distance (d) exhibits a non-linear relationship. How can a linear relationship between the input and output of a capacitive sensor be achieved? Derive the necessary expressions. b) A capacitive transducer is made up of two concentric cylindrical electrodes. The outer diameter of the inner electrode is 3 mm and the dielectric medium is air. The inner dia of the outer electrode is 3.1 mm. Calculate the dielectric stress when a voltage of 100V is applied across the electrode. Is it within the safe limit? The length of the electrode is 20 mm. Calculate the change in capacitance if the electrode is moved through a distance of 2 mm. The breakdown strength of air is 3KV/mm. c) What is hall effect sensor? How the magnetic field is measured with the help of hall effect sensor? Also prove that hall effect is more pronounced in semiconductor than the metal.',
            'chapter' => 'Transducer',
            'has_diagram' => false
        ],
        [
            'text' => 'a) Why is an instrumentation amplifier preferred in precision measurement applications? Explain its unique features and derive the mathematical expression for its gain. b) Design an integrator circuit which will produce a ramp voltage of -30V/ms. c) Explain how analog to digital conversion can be achieved by using dual Ramp ADC.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'a) Consider a 6 bit DAC with a resistance of 320 kΩ in LSB position. The converter is designed with WRN. The reference voltage is 10 v, the output of the resistive network is connected to an operational amplifier with a feedback resistance of 5 kΩ. What is the analog output for a binary input of 111010? b) What is Sample and hold circuit? Discuss its operation with its basic circuit and waveform. What is its purpose of using S & H circuit in ADC? c) Given 12-bit, 10 v successive approximation ADC that has 20 us conversion time and is used without sample and hold circuit. Find the maximum rate of change of input signal and its maximum frequency that can be applied.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'a) Explain the construction and working principle of a single phase electrodynamometer type of wattmeter and derive the expression of deflection torque for both AC and DC operation. b) Explain the operating principle of electrical resonance type frequency meter in detail.',
            'chapter' => 'Electrical Equipment',
            'has_diagram' => false
        ]
    ],
    
    '2080 Bhadra' => [
        [
            'text' => 'Define instrumentation. Imagine you are designing an automated greenhouse system. Explain how a closed loop microprocessor-based system can control the temperature and humidity in the greenhouse efficiently.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Design an interfacing circuit to set up bidirectional data communication in the master-slave format between two 8085A microcomputers. Use the 8255A as the interfacing device between the master and the slave microcomputers. Write necessary program to transfer a block of data from master to slave. Also, make flowchart of the master and slave program.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'a) What are the advantages of serial data transmission over parallel data transmission? Differentiate between asynchronous and synchronous data transmission. b) Explain null modem connection.',
            'chapter' => 'Connectivity Technology in Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Show the interfacing circuit diagram of an 8-bit ADC using status check I/O method. Generate the address words for STB, DR (Data Read) and Reading data from ADC. Write subroutine to accept data from ADC and store in memory.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => true,
            'diagram_path' => 'images/2080_bhadra_q4.png',
            'diagram_alt' => 'ADC interfacing circuit with control signals'
        ],
        [
            'text' => 'a) Suppose you have designed a data logger system for your agricultural farm which are located at 3 different cities Pokhara, Biratnagar and Mustang. You need to log rainfall information, wind speed, humidity of soil and temperature from these 3 farms and transmit to your office in Kathmandu. Draw a complete block diagram for this system listing out the hardware needed, and suitable transmission technique. b) List advantages of digital communication system over analog communication system.',
            'chapter' => 'Connectivity Technology in Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'a) Explain the general rules for a circuit design in terms of grounding and shielding. b) An op-amp circuit is receiving noise interference from a nearby digital switching circuit. The digital circuit switches logic levels between 4.5 V and 1.0V within 10 ns. Its current changes from 0 to 10 mA within 100ns. What type of noise coupling has occurred in this scenario?',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'What is white box testing and black-box testing?',
            'chapter' => 'Software for Instrumentation Application',
            'has_diagram' => false
        ],
        [
            'text' => 'Draw the complete block diagram of the industrial process control involved in your case study. Explain what were the shortcomings/flaws in the existing design. What changes did you recommend for making it more cost effective and more automated? Explain the benefits that the management would achieve after implementing your design. Mention the probable problems you might face after system implementation.',
            'chapter' => 'Application of Modern Instrumentation System',
            'has_diagram' => false
        ]
    ],
    
    '2080 Chaitra' => [
        [
            'text' => 'Define instrumentation system with example. Explain its different components with the help of a block diagram.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the difference between static and dynamic characteristics of measurement system. Briefly explain following static performance parameter. i) Accuracy (ii) Precision (iii) Sensitivity (iv) Resolution (v) Linearity',
            'chapter' => 'Theory of Measurement',
            'has_diagram' => false
        ],
        [
            'text' => 'An AC bridge circuit is working at 1000 Hz. Arm AB has 0.2 uF pure capacitance, arm BC has 500Ω pure resistance, arm CD contains an unknown impedance, and arm DA has 300Ω resistance in parallel with 0.1 uF capacitor. Find the constants of arm CD considering it as a series circuit.',
            'chapter' => 'Theory of Measurement',
            'has_diagram' => false
        ],
        [
            'text' => 'What is piezo electric transducer? What are the materials used in such transducer? Define voltage sensitivity, charge sensitivity and derive the expression for the output voltage developed due to applied force.',
            'chapter' => 'Transducer',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain how magnitude and direction of displacement can be measured using linear variable differential transformer.',
            'chapter' => 'Transducer',
            'has_diagram' => false
        ],
        [
            'text' => 'A linear resistance potentiometer is 50 mm long and is uniformly wound with a wire of total resistance 5000Ω. Under normal condition, the slider is at the centre of the potentiometer. Determine the linear displacement when the resistance of the POT as measured by a wheatstone bridge is 1850Ω. If it is possible to measure a minimum value of 5Ω resistance with the above arrangement determine the resolution of the POT in mm.',
            'chapter' => 'Transducer',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the features of instrumentation amplifier and derive the expression for its Gain.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the operation of sample and hold circuit with the help of circuit diagram.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Design an Op-Amp summer circuit to obtain output voltage as Vout= -(V1+10V2+25V3). Use minimum value of resistance as 10kΩ.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain how analog to digital conversion is achieved by using Dual ramp ADC.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'What are the drawbacks of weighted resistor network? With suitable diagram explain the R-2R ladder digital to analog converter.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'What will be a 4-bit successive approximation digital output for an analog input of 4.287V if full range of converter ER is 5V.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Describe the construction and working principle of a single phase induction type energy meter.',
            'chapter' => 'Electrical Equipment',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the operating principle of electrical resonance type frequency meter in detail.',
            'chapter' => 'Electrical Equipment',
            'has_diagram' => false
        ]
    ],
    
    '2079 Bhadra' => [
        [
            'text' => 'a) Define a microprocessor-based instrumentation system. Differentiate between open loop and closed loop microprocessor based instrumentation. b) Describe direct memory access.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Design an interfacing circuit to set up bidirectional data communication in the master-slave format between two 8085A microcomputers. Use the 8255A as the interfacing between the master and the slave microcomputers. What will be the port addresses and control word. Write necessary program to transfer a block data from the master to the slave along with its flowchart diagram.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'a) Explain how communication takes place between PC(DB9 port) and printer(DB 25 port) using Null modern connection. b) What are common USB packet field? Explain different USB packets.',
            'chapter' => 'Connectivity Technology in Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Interface a suitable DAC using 8255 PPI to an 8085 microprocessor to generate a square wave oscillating between 0V and 5V having a frequency of 1 KHz. Describe the interfacing circuit along with the necessary program.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'List the characteristics of Bluetooth. Explain the components of data logger with the help of block diagram.',
            'chapter' => 'Connectivity Technology in Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Describe any three mechanisms of noise coupling. Explain briefly on prevention of noise coupling.',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'Write an importance of decoupling, ground bounce, cross talk and impedance matching in designing circuit.',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'What are the different types of boards for electronics prototyping? List out each circuit boards characteristics.',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain about Embedded and Real Time Software used to run and control various modern instruments. As an instrumentation engineer, discuss the different approaches of coupling and cohesion technique to define tasks and design an integrated module.',
            'chapter' => 'Software for Instrumentation Application',
            'has_diagram' => false
        ],
        [
            'text' => 'Case study is related to the basic measurement requirements, accuracy and specific hardware employed environmental conditions under which the instruments must operate. signal processing, transmission and output devices. Regarding your case study visit; draw a block diagram of the existing control system and mention the problems found in the existing system. You should also draw an interfacing diagram for solving the problem with discussing merits and demerits of your recommended system in terms of cost, manpower and plant automation.',
            'chapter' => 'Application of Modern Instrumentation System',
            'has_diagram' => false
        ]
    ],
    
    '2078 Bhadra' => [
        [
            'text' => 'Define instrumentation system. Compare status check I/O, Interrupt driven I/O and DMA.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Design an interfacing circuit to set up bidirectional data communication in the master-slave format between two 8085A microcomputers. Use the 8255A as the interfacing between the master and the slave microcomputers. What will be the port addresses and control word. Write necessary program to transfer a block of data from the master to the slave along with its flowchart diagram.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'a) Explain simplex, half duplex and full duplex operation of RS-232 serial standard. b) Describe different types of USB protocols along with the common USB packet fields.',
            'chapter' => 'Connectivity Technology in Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the principle involved while interfacing an 8-bit ADC using interrupt; including suitable block diagram, process flow diagram and necessary ALP subroutine.',
            'chapter' => 'Interfacing of Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'List the major characteristics of Bluetooth. Draw the block diagram of data acquisition system and explain each block.',
            'chapter' => 'Connectivity Technology in Instrumentation System',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the principle of energy coupling. Describe about capacitive coupling with remedies.',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'Discuss and differentiate between different types of fault tolerance schemes used in the purpose of circuit design.',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain ground, returns and shields in the context of circuit layout.',
            'chapter' => 'Circuit Design',
            'has_diagram' => false
        ],
        [
            'text' => 'a) Draw the complete block diagram for prototype model in software development process and explain its component in brief. b) Write about White box testing and Black box testing.',
            'chapter' => 'Software for Instrumentation Application',
            'has_diagram' => false
        ],
        [
            'text' => 'Draw the complete block diagram of industrial process control system involved in your case study. Explain why you want to implement this control system over existing one in terms of cost, manpower and plant automation. What problems you might face after implementing this control system.',
            'chapter' => 'Application of Modern Instrumentation System',
            'has_diagram' => false
        ]
    ]
];

// Include the viewer module
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/pyq_collection_viewer.php';
?>