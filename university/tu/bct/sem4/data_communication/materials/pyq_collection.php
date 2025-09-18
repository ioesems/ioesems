<?php
// Define subject title
$subject_title = "Data Communication (CT 602) Previous Year Questions Collection";

// Define questions array organized by year
$questions_by_year = [
    '2081 Bhadra' => [
        [
            'text' => 'Prepare a generic block diagram of a digital communication system representing communications between an air traffic controller and an in flight pilot in a cockpit.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the basic causes of transmission impairments in communication system.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Define a linear system and a time invariant system. Evaluate the odd and even component of a signal defined as: x(t) = e^(-2t)u(t).',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Considering the combinations of at least seven mathematical operations in an equation, prepare a signal flow diagram of any system.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Compare and contrast Fourier series and Fourier transform. Mention the conditions and properties of Fourier transformation.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the different modes of data transmission in optical fiber. List out and mention the protocols of different categories of twisted pair cables.',
            'chapter' => 'Transmission Media and Data compression',
            'has_diagram' => false
        ],
        [
            'text' => 'A bandlimited signal with maximum frequency 1 KHz is sampled at the rate of Nyquist frequency. It is quantized into 128 levels and encoded. Calculate: Bandwidth of the channel required to transmit the data through a channel with SNR of 0 dB.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'Encode the given bit sequence 11000000000101 using any suitable two of polar and two of bipolar encoders.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'Prepare Code Tree, State Space and Trellis diagrams of 1/2 rate convolutional channel coding for a message bit of 1101; and demonstrate how Viterbi Decoding corrects a single bit error.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'Encode "SaReGaMaPaDhaNiSa" using Huffman Encoding and calculate its transmission efficiency. What would be the code sequence if the recipient has wrongly received the message like "SaReSaRePaDhaNiSa"?',
            'chapter' => 'Data compression',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on: (Any Three) a) CDMA b) Packet switching c) CRC-4 d) 16-QAM e) E1 Hierarchy',
            'chapter' => 'Multiplexing and Switching / Cellular Wireless',
            'has_diagram' => false
        ]
    ],
    
    '2081 Baishakh' => [
        [
            'text' => 'Explain the digital data communication system working in full duplex mode using a block diagram. Define the transmission performance parameters in a data communication system.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Define energy and power signal with examples. Check whether the following system is linear, causal and time invariant or not: y(t) = logx(t)',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'State the properties of Fourier Transform. Convolve the following signals graphically.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the importance of Scrambling in the digital data encoding process. Encode the binary pattern 101000011101 using polar RZ, NRZ-I, AMI and Manchester line coding techniques.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain 16-QAM with constellation diagram.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'Compress "Ghurnne Mech Mathi Andho Manche" using Huffman coding to determine efficiency redundancy and compare it with entropy.',
            'chapter' => 'Data compression',
            'has_diagram' => false
        ],
        [
            'text' => 'Write down the applications of multiplexing. Describe FHSS and DSSS with necessary diagrams.',
            'chapter' => 'Multiplexing and Switching',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain CRC-4 generator and decoder with example for both no-error and with-error cases.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'With suitable example demonstrate how convolutional code corrects errors.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on: (Any Two) a) Difference between circuit switching and packet switching b) Code division Multiple Access (CDMA) c) Shannon\'s channel capacity theorem.',
            'chapter' => 'Multiplexing and Switching / Cellular Wireless',
            'has_diagram' => false
        ]
    ],
    
    '2080 Bhadra' => [
        [
            'text' => 'Define transmission performance parameters in data communication system. Explain digital communication system with appropriate generic block diagram.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Define a causal system and a stable system with example. Evaluate power and energy of a signal given as x(t) = e^(-2t)u(t). Justify whether it is energy signal or power signal.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Define LTI system. Convolve the following signals graphically.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain different types of pulse modulation techniques with necessary diagrams.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain briefly about 8-QAM with constellation diagram.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'Determine the CDMA encoded transmitting message for four users using Walsh Hadamard codes, where user A, B, C and D are transmitting 1, 0, silent, 1 respectively.',
            'chapter' => 'Multiplexing and Switching',
            'has_diagram' => false
        ],
        [
            'text' => 'What is multiplexing? Why statistical TDM is preferred than synchronous TDM?',
            'chapter' => 'Multiplexing and Switching',
            'has_diagram' => false
        ],
        [
            'text' => 'Define Hamming distance and Minimum hamming distance with an example. What are the error detection and error correction capabilities of block codes? Explain.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'Obtain all code words for a (6, 3) block code from the systematic generator matrix given below.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'Using a suitable example, explain state, tree and trellis diagrams for 1/2 code rate and 4 states.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'Write short notes on: (Any Two) a) Datagram packet switching vs Virtual circuit packet switching b) E1 and T1 Hierarchies c) Modes of operation of optical fiber',
            'chapter' => 'Multiplexing and Switching / Transmission Media',
            'has_diagram' => false
        ]
    ],
    
    '2080 Baishakh' => [
        [
            'text' => 'Define data and signal. Elaborate the advantages of digital communication system as compared to analog communications system. Explain the basic causes of transmission impairments in communication system.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Determine whether or not the following CT signal is periodic. If the signal is periodic, determine its fundamental period: x(t) = 3cos(4t + π/3).',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Test the linearity of the systems: y(t) = x²(t) and y(t) = 3x(t) + 5.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Test the systems static or dynamic: y(t) = 2x(t) and y(t) = 2x(t) - 3x(t-3).',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Find the output response of an LTI system when input x(t) = e^(-t) u(t) and impulse response h(t) = e^(-2t) u(t).',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Find magnitude and phase spectrum of x(t) = 4 + 2cos3t + 4sin11t.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Discuss any four properties of Fourier Transform.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Compare coaxial cable with optical fibre. Evaluate the maximum capacity of a channel through which a signal with power of 10 dBW is transmitted. (Assume that the noise power spectral density is given as 5 mW/Hz).',
            'chapter' => 'Transmission Media',
            'has_diagram' => false
        ],
        [
            'text' => 'Consider AM signal as m(t) = 5[1+2cos(2π×1000t)] cos(2π×10⁶t). Determine modulation index, total power delivered.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'Define PCM technique used to convert analog signal into digital data. In a PCM system, a bandlimited signal with maximum frequency 4 kHz is sampled at the rate of Nyquist frequency. It is quantized into 256 levels and encoded. Calculate: (i) Minimum data rate available at the output of the encoder. (ii) Bandwidth of the channel required to transmit the data through a channel of 15 dB SNR.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'What are the basic factors to be considered while line coding? Encode pattern 100000000100001 using B8ZS and HDB3 encoding.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the major bandwidth utilization techniques used in data communication. Explain Frequency Hopped Multiple Access (FHMA) technique using its transmitter and receiver blocks.',
            'chapter' => 'Multiplexing and Switching',
            'has_diagram' => false
        ],
        [
            'text' => 'Differentiate between circuit switching and Packet switching used in computer networks with an example.',
            'chapter' => 'Multiplexing and Switching',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain error detection and correction mechanism with trellis diagram.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'Differentiate convolutional code and block code.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ]
    ],
    
    '2078 Bhadra' => [
        [
            'text' => 'Differentiate between energy and power signals with examples. Determine if the following system is stable: y(t) = x(t) + x(t-1)',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'List and describe all data communication parameters that describe the performance of the system.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain how we plot line spectrums of a continuous time signal and illustrate an example.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Encode 111000000000000011 using B8ZS and HDB3 encoders.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'Demonstrate how checksum is used to detect errors while sending a data word of 12, 15, 15, 14, 5, 2.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the working principle of FHSS technique.',
            'chapter' => 'Multiplexing and Switching',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain how CDMA works with example.',
            'chapter' => 'Multiplexing and Switching',
            'has_diagram' => false
        ],
        [
            'text' => 'What are linear block codes? Design a code word of a C(8, 4) block code with any suitable generation matrix.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'Encode "Jasta lai tastai dhido lai nistai" using Huffman encoder. Also demonstrate how it is decoded.',
            'chapter' => 'Data compression',
            'has_diagram' => false
        ],
        [
            'text' => 'Describe with short notes on: (Any Two!) a) Double-sideband AM b) Hamming codes c) Packet switching versus message switching d) X.25 protocol',
            'chapter' => 'Signal Encoding Technique / Error Detection / Multiplexing',
            'has_diagram' => false
        ]
    ],
    
    '2078 Kartik' => [
        [
            'text' => 'Differentiate data and signal with two examples of each.',
            'chapter' => 'Introduction',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the procedure of converting an analog signal to digital. Also, briefly explain each steps involved.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'Define periodic and non-periodic signals with examples.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Test the stability of the system h(t) = e^(at).u(t)',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Test the given function y(t) = t.x(t) for causality, non causality and anti causality.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'How Nyquist theorem applied for a noiseless channel? Calculate number of discrete signal content in the channel if a channel has a spectrum of 3 to 4 MHz with signal to noise ratio of 24 dB.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the operation of CRC-4 with example of error detection.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain line coding: Polar RZ and bipolar AMI line coding scheme with example and compare them.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false
        ],
        [
            'text' => 'How is source coding different from channel coding?',
            'chapter' => 'Data compression / Error Detection',
            'has_diagram' => false
        ],
        [
            'text' => 'Under what conditions does a linear code become a cyclic code? Explain with the help of an example.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the concept of convolutional code with the help of a state-transition diagram.',
            'chapter' => 'Error Detection and Correction',
            'has_diagram' => false
        ],
        [
            'text' => 'Write down the Huffman Algorithm clearly and find an efficient code word and efficiency that can be assign to the symbols using Huffman Algorithm for "Kun Mandir Ma Janchhau Yatta".',
            'chapter' => 'Data compression',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the mechanism of frequency Hopping spread spectrum (FHSS). Also, compare FDM and FHSS using suitable time-frequency graph.',
            'chapter' => 'Multiplexing and Switching',
            'has_diagram' => false
        ],
        [
            'text' => 'Explain the "near-far problem" in CDMA. How can it be solved?',
            'chapter' => 'Multiplexing and Switching',
            'has_diagram' => false
        ]
    ]
];

// Include the viewer module
// include '../pyq_collection_viewer.php';
 include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/pyq_collection_viewer.php'; 

?>