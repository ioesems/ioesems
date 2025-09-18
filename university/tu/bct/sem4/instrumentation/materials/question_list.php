<?php
// Define subject title
$subject_title = "Instrumentation I & II Question Bank - Tribhuvan University";

// Define questions array with mathematical expressions and diagrams
$questions = [
    [
        'chapter' => 1,
        'title' => 'Introduction (Analog/Digital, Microprocessor Systems)',
        'questions' => [
            [
                'text' => 'Point out the difference between analog and digital measurement system. Explain the functional elements of an Instrumentation system with block diagram. [2081 Chaitra]',
                'year' => '2081 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Define instrumentation system with example. Explain its different components with the help of a block diagram. [2080 Chaitra]',
                'year' => '2080 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'What is Instrumentation system? Describe the operation of the functional components of Instrumentation system with the help of block diagram. [2079 Chaitra]',
                'year' => '2079 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Define measurement and measurement system. Draw the block diagram of measurement system showing each component of measurement system and also explain the functions of each block. [2078 Chaitra]',
                'year' => '2078 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain briefly the concept of DMA. Draw circuit Diagram of an interfacing circuit containing 4 KB ROM and 8 KB RAM. Assuming Base address in 4000H. You also need to draw write and read cycle timing diagram. [2069 Chaitra]',
                'year' => '2069 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'One thing that is common on embedded real time systems is they include some type of processor. They range anywhere from serial program input devices to a full-fledged PC on a chip or board. At some point you need to decide on the type of processor to use. As an engineer, how can you choose it? Are there any rational reasons for picking one over another, or all the selection is based on personal bias? What are the situational factors imposing the selection of a micro-processor or micro-controller for a design? Discuss in brief. [2072 Chaitra]',
                'year' => '2072 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Define a microprocessor-based instrumentation system. Differentiate between open loop and closed loop microprocessor based instrumentation. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain the basic modes of data transfer techniques available between microprocessor and peripheral devices. Mention the features of Microprocessor Based Instrumentation system. [2076 Chaitra]',
                'year' => '2076 Chaitra',
                'has_diagram' => false
            ]
        ]
    ],
    [
        'chapter' => 2,
        'title' => 'Theory of Measurement (Static/Dynamic, Errors, Bridges)',
        'questions' => [
            [
                'text' => 'What are the different parameters to define the static performance of an instrument? Distinguish between accuracy and precision of an instrument with a suitable example. Also define sensitivity. [2081 Chaitra]',
                'year' => '2081 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain the difference between static and dynamic characteristics of measurement system. Briefly explain following static performance parameter: i) Accuracy ii) Precision iii) Sensitivity iv) Resolution v) Linearity. [2080 Chaitra]',
                'year' => '2080 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Using statistical evaluation of random errors or data of measurement, explain how probable error in a measurement can be obtained. Find out the probable error of the observation given in table (Current readings: 9.97A-1x, 9.98A-3x, 9.99A-13x, 10.00A-23x, 10.01A-15x, 10.02A-4x, 10.03A-1x). [2078 Chaitra]',
                'year' => '2078 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain how probable error can be calculated with the help of statistical analysis in a measurement system. Following readings were obtained in respect of a capacitor: 1.003uF, 0.998uF, 1.001uF, 1.009uF, 1.005uF, 0.991uF, 0.996uF, 0.997uF, 1.008uF, & 0.994uF. Calculate: (i) Arithmetic mean (ii) Deviation from mean (iii) Standard deviation. [2077 Chaitra]',
                'year' => '2077 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'How do you define error in a measurement system? How the Gaussian curves can be used to explain the normal distribution of random errors in a measurement? [2076 Bhadra]',
                'year' => '2076 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'A balanced AC bridge has the following constants: Arm AB: R=1000Ω in parallel with C=0.5uF; Arm BC: R=1000Ω in series with C=0.5uF; Arm CD: R=200Ω in series with L=30mH. Find the constant of arm DA. Express the result as a pure R in parallel with pure L or C. Given frequency=1kHz. [2081 Chaitra]',
                'year' => '2081 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'An AC bridge circuit is working at 1000 Hz. Arm AB has 0.2 uF pure capacitance, arm BC has 500Ω pure resistance, arm CD contains an unknown impedance, and arm DA has 300Ω resistance in parallel with 0.1 uF capacitor. Find the constants of arm CD considering it as a series circuit. [2080 Chaitra]',
                'year' => '2080 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'An AC bridge working at 500 Hz has following parameters: Arm AB: R=500Ω in parallel with L=30 mH; Arm BC: R=1000 Ω in parallel with C=0.5uF; Arms CD: R=800 Ω in series with C=0.9 uF. Determine the parameters of the remaining arm for the bridge to be balanced. [2079 Chaitra]',
                'year' => '2079 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Which bridge is used for the measurement of unknown inductance of a coil having high quality factor? Explain how the measurement is done with the help of selected bridge and also explain the reasons behind the selection. [2076 Bhadra]',
                'year' => '2076 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain quality factor in Maxwells bridge. Why Maxwell bridge cannot be used for the measurement of inductance having quality factor less than 1 and greater than 10? [2075 Bhadra]',
                'year' => '2075 Bhadra',
                'has_diagram' => false
            ]
        ]
    ],
    [
        'chapter' => 3,
        'title' => 'Transducer (Principles, Types, Sensors & Actuators)',
        'questions' => [
            [
                'text' => 'Explain why a capacitive sensor based on the change in separation distance (d) exhibits a non-linear relationship. How can a linear relationship between the input and output of a capacitive sensor be achieved? Derive the necessary expressions. [2081 Chaitra]',
                'year' => '2081 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'What is piezo electric transducer? What are the materials used in such transducer? Define voltage sensitivity, charge sensitivity and derive the expression for the output voltage developed due to applied force. [2081 Chaitra]',
                'year' => '2081 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'What is piezo-electric transducer? Define the voltage sensitivity and charge sensitivity. Give the equivalent circuit for piezoelectric transducer. Derive the expression for the output voltage by making suitable assumptions. [2072 Magh]',
                'year' => '2072 Magh',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain the construction and working principle of a linear variable differential transformer. [2078 Chaitra]',
                'year' => '2078 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain how magnitude and direction of displacement can be measured using linear variable differential transformer. [2080 Chaitra]',
                'year' => '2080 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain working principle of capacitive sensor. Also explain how linear relation between output & input can be obtained in the case of capacitive sensor working on principle of change in separation distance. [2076 Baisakh]',
                'year' => '2076 Baisakh',
                'has_diagram' => false
            ],
            [
                'text' => 'Define transducer with example. Explain the working principle of strain gauge and derive the expression for the gauge factor. [2077 Chaitra]',
                'year' => '2077 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'A capacitive transducer is made up of two concentric cylindrical electrodes. The outer diameter of the inner electrode is 3 mm and the dielectric medium is air. The inner dia of the outer electrode is 3.1 mm. Calculate the dielectric stress when a voltage of 100V is applied across the electrode. Is it within the safe limit? The length of the electrode is 20 mm. Calculate the change in capacitance if the electrode is moved through a distance of 2 mm. The breakdown strength of air is 3KV/mm. [2081 Chaitra]',
                'year' => '2081 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'A linear resistance potentiometer is 50 mm long and is uniformly wound with a wire of total resistance 5000Ω. Under normal condition, the slider is at the centre of the potentiometer. Determine the linear displacement when the resistance of the POT as measured by a wheatstone bridge is 1850Ω. If it is possible to measure a minimum value of 5Ω resistance with the above arrangement determine the resolution of the POT in mm. [2080 Chaitra]',
                'year' => '2080 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Show how "Loading effect" causes a non-linear relationship between the input and output in a measurement made by a potentiometer. Also write the methods to reduce loading effect. [2079 Chaitra]',
                'year' => '2079 Chaitra',
                'has_diagram' => false
            ]
        ]
    ],
    [
        'chapter' => 4,
        'title' => 'Interfacing of Instrumentation System (PPI, ADC/DAC, Microcontrollers)',
        'questions' => [
            [
                'text' => 'Describe different modes of data transfer of parallel interface. Draw the block diagram of 8255 with both Port A and port B in mode 1 input showing all control signals and describe mode 1 input operation with status word. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Design an interfacing circuit to interface 8-bit DAC with microprocessor using 8255A PPI at base address 80H. Also, write a program for the 8085 microprocessor to generate a square wave signal at the output of DAC. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Figure shows an interfacing circuit using 8255A in Mode 1. Port A is designated as the input port for a keyboard with interrupt I/O and Port B is designated as the output port for a printer with status check I/O. a) Find the port addresses by analyzing the decode logic. b) Determine the control word to set up Port A as input and Port B as output in Mode 1. c) Determine the BSR control word to enable INT EA. d) Determine the masking byte to verify the OBF line in status check I/O. e) Write subroutine to accept characters from keyboard and send character to printer. [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => true,
                'diagram_path' => 'images/8255_keyboard_printer.png',
                'diagram_alt' => '8255A interfacing circuit for keyboard and printer in Mode 1'
            ],
            [
                'text' => 'Interface a parallel bus centronics printer with 8085 microprocessor using 8255A in mode 1 output configuration. a) Draw the necessary interfacing circuit required for this purpose using 8255 PPI in handshake mode. b) Determine port address as per your chip select logic. c) Determine the control word required for printing operation. d) Draw the timing waveform for transferring data to the printer. e) Write an ALP to print characters whose ASCII code is available in memory location from 9000H. [2075 Chaitra]',
                'year' => '2075 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Show the interfacing circuit diagram of an 8-bit ADC using status check I/O method. Generate the address words for STB, DR (Data Read) and Reading data from ADC. Write subroutine to accept data from ADC and store in memory. [2080 Bhadra]',
                'year' => '2080 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Design an interfacing circuit diagram for an 8 bit ADC using interrupt. Explain it with the suitable program. [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false
            ],
            [
                'text' => 'A microprocessor kit has an onboard 8255. Interface to the 8255 eight single-pole-double-throw(SPDT) switches numbered S0 to S7 and a seven segment common anode LED display. Draw the complete circuit setup. Define clearly the functions of all ports. Write a program to initialize 8255, detect a switch closure, and display the value of the switch number on the LED display. [2074 Ashwin]',
                'year' => '2074 Ashwin',
                'has_diagram' => false
            ],
            [
                'text' => 'The A/D converter that is being used in your project is suffering from differential nonlinearity and harmonic distortion. Instead of purchasing a new converter, you are required to use the defective converter. Discuss technical measures that can be implemented to mitigate the aforementioned errors. [2074 Ashwin]',
                'year' => '2074 Ashwin',
                'has_diagram' => false
            ],
            [
                'text' => 'What are the different types dynamic errors in ADC and DAC? What will be the control word for interfacing as shown figure below? Also write the subroutine program to read the digital data from ADC. [Diagram: CLK, INT, ALE, START, EOC, AGND, DGND, Vref=2.5V, Vin(+), Vin(-)] [2074 Chaitra]',
                'year' => '2074 Chaitra',
                'has_diagram' => true,
                'diagram_path' => 'images/adc_interface.png',
                'diagram_alt' => 'ADC interfacing circuit with control signals'
            ],
            [
                'text' => 'Consider a 6 bit DAC with a resistance of 320 kΩ in LSB position. The converter is designed with WRN. The reference voltage is 10V, the output of the resistive network is connected to an operational amplifier with a feedback resistance of 5 kΩ. What is the analog output for a binary input of 111010? [2081 Chaitra]',
                'year' => '2081 Chaitra',
                'has_diagram' => false
            ]
        ]
    ],
    [
        'chapter' => 5,
        'title' => 'Connectivity Technology (Wired/Wireless, DAQ, IoT)',
        'questions' => [
            [
                'text' => 'Compare between RS232, RS422 and RS423 in various aspects. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'What are the problems that might occur when you attempt to connect together two RS232 devices which are both configured as DTE. How can you solve this problem? Explain in brief with a suitable diagram. [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => true,
                'diagram_path' => 'images/rs232_dte_null_modem.png',
                'diagram_alt' => 'Null modem connection for two DTE devices'
            ],
            [
                'text' => 'Explain the transferring of serial data using asynchronous transfer. One character is formed with 7-bit ASCII code, 1-bit start, 2-bit stop and 1-bit parity. [2075 Chaitra]',
                'year' => '2075 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Differentiate between USB 1.0 and USB 2.0. Explain the functions of USB Host, USB Hub and USB Device. Discuss different packets used in USB Protocol. [2075 Chaitra]',
                'year' => '2075 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'List the characteristics of Bluetooth. Explain the components of data logger with the help of block diagram. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain Bluetooth protocol architecture with suitable block diagram. [2080 Baishakh]',
                'year' => '2080 Baishakh',
                'has_diagram' => false
            ],
            [
                'text' => 'Signals from three different transducers need to be recorded in a data logger. The analog signals supplied by the three transducers are dual polarity(-50 mV to 50 mV) having frequencies of 5 KHz, 10 KHz and 15 KHz. Explain the design of the following stages of the data logger: (a) Input scanner stage (b) Signal conditioner stage if the 8-bit ADC used accepts only positive polarity signals ranging from 0 Volts to 5 Volts. [2074 Ashwin]',
                'year' => '2074 Ashwin',
                'has_diagram' => false
            ],
            [
                'text' => 'Design a data logging and storage system that is capable of receiving and storing signals from optical fibers, satellites and Bluetooth devices. Provide the block diagram of the overall system. [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false
            ],
            [
                'text' => 'Suppose you have designed a data logger system for your agricultural farm which are located at 3 different cities Pokhara, Biratnagar and Mustang. You need to log rainfall information, wind speed, humidity of soil and temperature from these 3 farms and transmit to your office in Kathmandu. Draw a complete block diagram for this system listing out the hardware needed, and suitable transmission technique. [2080 Bhadra]',
                'year' => '2080 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'What is spread spectrum frequency hopping in Bluetooth? Write the application of Bluetooth. What is data logger? Explain the operation of data logger along with its block diagram. [2073 Shrawan]',
                'year' => '2073 Shrawan',
                'has_diagram' => false
            ]
        ]
    ],
    [
        'chapter' => 6,
        'title' => 'Circuit Design (Noise, PCB, Reliability)',
        'questions' => [
            [
                'text' => 'An op-amp circuit is receiving noise interference from a nearby digital switching circuit. The digital circuit switches logic levels between 4.5V and 1.0V within 10 ns. Its current changes from 0 to 10 mA within 100 ns. Now, calculate the pseudo impedance and find the noise interference types. Also, discuss on the preventing measures of such noise coupling mechanisms. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain the term energy coupling in an electrical circuit. Describe about inductive coupling with remedies. [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false
            ],
            [
                'text' => 'Describe any three mechanisms of noise coupling. Explain briefly on prevention of noise coupling. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain different types of filtering mechanisms used to reduce conductive noise coupling on the basis of frequency, mode, and amplitude. [2076 Chaitra]',
                'year' => '2076 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'What do you mean by reliability in a circuit design? Discuss how the reliability can be achieved by incorporating fault tolerance methods. [2075 Chaitra]',
                'year' => '2075 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Discuss different types of fault tolerance schemes used for circuit design. [2078 Bhadra]',
                'year' => '2078 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'What are the general rules for placement of components in a circuit? Describe grounding in terms of circuit layout. [2080 Baishakh]',
                'year' => '2080 Baishakh',
                'has_diagram' => false
            ],
            [
                'text' => 'What are the factors that need to be considered while routing the signal traces in circuit layout. How do you avoid crosstalk while making layout of the circuit? [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain ground, returns and shields in the context of circuit layout. [2078 Bhadra]',
                'year' => '2078 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Write an importance of decoupling, ground bounce, crosstalk and impedance matching in designing circuit. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false
            ]
        ]
    ],
    [
        'chapter' => 7,
        'title' => 'Software for Instrumentation (SDLC, Models, Testing)',
        'questions' => [
            [
                'text' => 'The Prototype Model is a Software Development approach useful for projects with vague or changing requirements. Justify the statement with the help of diagrams and examples. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Good design and programming practices can make programs more readable and understandable. How can this be achieved? Explain in detail. [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false
            ],
            [
                'text' => 'What is white box testing and black-box testing? [2080 Bhadra]',
                'year' => '2080 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'What do you mean by software reliability? Explain prototyping model for software development. [2080 Baishakh]',
                'year' => '2080 Baishakh',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain about Embedded and Real Time Software used to run and control various modern instruments. As an instrumentation engineer, discuss the different approaches of coupling and cohesion technique to define tasks and design an integrated module. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Draw the complete block diagram for prototype model in software development process and explain its component in brief. [2078 Bhadra]',
                'year' => '2078 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain spiral software development model with its advantages and disadvantages. Describe cohesion and coupling. [2076 Chaitra]',
                'year' => '2076 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Define roll back recovery with suitable example. Explain the spiral model software development cycle. [2075 Chaitra]',
                'year' => '2075 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain Prototyping Model for software development in brief. Explain different phases of introduction of bugs in software. [2069 Chaitra]',
                'year' => '2069 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'What are the different phases of bugs in software development? Explain the different types of techniques used for software testing. [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false
            ]
        ]
    ],
    [
        'chapter' => 8,
        'title' => 'Electrical Equipment (Meters, Wattmeter, Frequency Meter)',
        'questions' => [
            [
                'text' => 'Explain the construction and working principle of a single phase electrodynamometer type of wattmeter and derive the expression of deflection torque for both AC and DC operation. [2081 Chaitra]',
                'year' => '2081 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain the operating principle of electrical resonance type frequency meter in detail. [2081 Chaitra]',
                'year' => '2081 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Describe the construction and working principle of a single phase induction type energy meter. Show that the total number of revolutions made by disc during particular time is proportional to the energy consumed. [2075 Baisakh]',
                'year' => '2075 Baisakh',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain the working principle of instrument transformer. Also explain why the secondary winding of current transformer should never be kept open circuited while primary is energized? [2075 Baisakh]',
                'year' => '2075 Baisakh',
                'has_diagram' => false
            ],
            [
                'text' => 'What is wattmeter? Write its types. Explain the wattmeter which can measure ac as well as dc power with the help of construction and working principle. [2074 Bhadra]',
                'year' => '2074 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain the requirement of a sample and hold circuit. Explain its operation and discuss its characteristic waveform to illustrate its specifications. [2073 Bhadra]',
                'year' => '2073 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'State and explain Nyquist criterion. Also explain the phenomenon of aliasing and the way to eliminate it. [2071 Bhadra]',
                'year' => '2071 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'List out different types of frequency meter. Explain the constructional detail and working principle of any one of them to measure frequency. [2070 Bhadra]',
                'year' => '2070 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Mention the different types of energy meter. Also show that the deflection torque is directly proportional to the power consumed by the load. [2069 Poush]',
                'year' => '2069 Poush',
                'has_diagram' => false
            ],
            [
                'text' => 'Describe the construction details and working of a single phase electro-dynamometer type of wattmeter. Also derive the expression for deflection for ac operation. [2068 Bhadra]',
                'year' => '2068 Bhadra',
                'has_diagram' => false
            ]
        ]
    ],
    [
        'chapter' => 9,
        'title' => 'Latest Trends (IoT, Smart Sensors, Industry 4.0)',
        'questions' => [
            [
                'text' => 'Explain the satellite communication system with the help of a block diagram. What are advantages, and disadvantages? [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Why do we need digital to analog conversion? [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false
            ],
            [
                'text' => 'Highlight the advantages of optical fiber transmission over conventional data transmission system. [2079 Chaitra]',
                'year' => '2079 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Why analog signal needs to be converted to digital? What are the selection criteria for selecting ADC? [2078 Kartik]',
                'year' => '2078 Kartik',
                'has_diagram' => false
            ],
            [
                'text' => 'What is spread spectrum frequency hopping in Bluetooth? [2073 Shrawan]',
                'year' => '2073 Shrawan',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain the features of instrumentation amplifier and derive the expression for its Gain. [2080 Chaitra]',
                'year' => '2080 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'What is Data Acquisition system? Also explain the different component of analog data-acquisition system. [2077 Chaitra]',
                'year' => '2077 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'What do you understand by communication of data in an instrumentation system? Explain the principle of optical fibre data communication system and highlight its advantages over conventional data communication system. [2070 Bhadra]',
                'year' => '2070 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'What is an electrical transducer? How can it be classified? Also explain how direction and magnitude of displacement can be measured with Linear variable differential transformer(LVDT). [2070 Magh]',
                'year' => '2070 Magh',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain different network topologies of Bluetooth device with appropriate diagrams. [2069 Chaitra]',
                'year' => '2069 Chaitra',
                'has_diagram' => false
            ]
        ]
    ],
    [
        'chapter' => 10,
        'title' => 'Application of Modern Instrumentation System (Case Studies)',
        'questions' => [
            [
                'text' => 'Draw and explain the block diagram of the industrial process control system involved in your case study. Identify the limitations of the existing system. How it can be improved? Explain your recommendation system with the help of a block diagram. Also, list the advantages of implementing the recommendation system. [2081 Bhadra]',
                'year' => '2081 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain the control mechanism of the industrial process control system involved in your case study with the help of block diagram. What was your recommendation for further improvement of the current system? Explain why the management should implement your recommendation. Do you foresee any problems after implementing this control system? [2081 Baishakh]',
                'year' => '2081 Baishakh',
                'has_diagram' => false
            ],
            [
                'text' => 'Draw the complete block diagram of the industrial process control involved in your case study. Explain what were the shortcomings/flaws in the existing design. What changes did you recommend for making it more cost effective and more automated? Explain the benefits that the management would achieve after implementing your design. Mention the probable problems you might face after system implementation. [2080 Bhadra]',
                'year' => '2080 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'What have you learned from case study? Draw the complete block diagram of the industrial process control involved in your case study. What are the critical factors effecting the production you have noticed in the visited industry and what measure you can suggest for the same? What problems you might face after implementing your suggested process control system? [2080 Baishakh]',
                'year' => '2080 Baishakh',
                'has_diagram' => false
            ],
            [
                'text' => 'Case study is related to the basic measurement requirements, accuracy and specific hardware employed, environmental conditions under which the instruments must operate, signal processing, transmission and output devices. Regarding your case study visit; draw a block diagram of the existing control system and mention the problems found in the existing system. You should also draw an interfacing diagram for solving the problem with discussing merits and demerits of your recommended system in terms of cost, manpower and plant automation. [2079 Bhadra]',
                'year' => '2079 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Draw the complete block diagram of industrial process control system involved in your case study. Explain why you want to implement this control system over existing one in terms of cost, manpower and plant automation. What problems you might face after implementing this control system. [2078 Bhadra]',
                'year' => '2078 Bhadra',
                'has_diagram' => false
            ],
            [
                'text' => 'Answer the following questions with regard to your case study: a) Describe the existing work flow mechanism of the industrial instrumentation system. b) What are the critical factors affecting the production of existing system and what measures you can recommend for mitigating those factors? c) Design a proposed system using microprocessor/microcontroller, input/output devices, interfacing process, communication protocols, data converters and handshake signals with neatly labeled block diagram. d) List out the different advantages of the proposed plan in terms of technology, production rate, quality assurance, cost-benefit and return on investment(ROI). [2076 Chaitra]',
                'year' => '2076 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Explain your industrial visit carried out on your case study in terms of existing system circumstances, problem identification and analysis, recommendation plan, requirement and feasibility analysis of the recommended plan and rollback plan if necessary. Also list out the different advantages of the proposed plan in terms of technology, production rate, quality assurance, cost-benefit and return on investment(ROI) for the particular industry. [2075 Chaitra]',
                'year' => '2075 Chaitra',
                'has_diagram' => false
            ],
            [
                'text' => 'Answer the following questions with regard to your case study: a) Discuss the main architectural differences between the existing system and the proposed system. b) Does your proposed system use a microcontroller or a microprocessor? Justify your choice, and make a neatly labeled block diagram of your proposed system. c) In your proposed system, explain in detail the interfacing process of peripheral devices with the microcontroller or microprocessor in terms of data format, data rate, data converters, communication protocols, timing diagrams, and handshaking signals. d) List the technical drawbacks present in your proposed design. [2074 Ashwin]',
                'year' => '2074 Ashwin',
                'has_diagram' => false
            ],
            [
                'text' => 'Recommend the changes that you deem necessary in the visited industry during your case study. Explain the reasons why management should implement these changes? Assume that you have a senior reporting Computer/Electronics engineering closely looking at work from the system development level, apart from convincing the management team at the visited industry to implement new system, you also need to convince the senior engineer technically so that your recommendation will be implemented. How do you want to achieve this technically? Debate on your technical design to replace the current system and also relate probable problems you might face after system implementation. [2068 Chaitra]',
                'year' => '2068 Chaitra',
                'has_diagram' => false
            ]
        ]
    ]
];

// Include the viewer module
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/question_list_viewer.php';
?>