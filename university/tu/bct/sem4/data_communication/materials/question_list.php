<?php
// Define subject title
$subject_title = "Data Communication (CT 602) Question Bank";

// Define questions array
$questions = [
    [
        'chapter' => 1,
        'title' => 'Introduction',
        'questions' => [
            [
                'text' => 'Prepare a generic block diagram of a digital communication system representing communications between an air traffic controller and an in flight pilot in a cockpit.',
                'year' => '2081 Bhadra'
            ],
            [
                'text' => 'Explain the digital data communication system working in full duplex mode using a block diagram. Define the transmission performance parameters in a data communication system.',
                'year' => '2081 Baishakh'
            ],
            [
                'text' => 'Define transmission performance parameters in data communication system. Explain digital communication system with appropriate generic block diagram.',
                'year' => '2080 Bhadra'
            ],
            [
                'text' => 'Define data and signal. Elaborate the advantages of digital communication system as compared to analog communications system.',
                'year' => '2080 Baishakh'
            ],
            [
                'text' => 'Draw a generic block diagram of a digital communication system used in mobile telephony and explain each block. Compare analog and digital communication system with examples.',
                'year' => '2076 Chaitra'
            ]
        ]
    ],
    [
        'chapter' => 2,
        'title' => 'Data Communication Fundamentals',
        'questions' => [
            [
                'text' => 'Explain the basic causes of transmission impairments in communication system.',
                'year' => '2081 Bhadra'
            ],
            [
                'text' => 'Define energy and power signal with examples. Check whether the following system is linear, causal and time invariant or not: y(t) = logx(t).',
                'year' => '2081 Baishakh'
            ],
            [
                'text' => 'Define a causal system and a stable system with example. Evaluate power and energy of a signal given as x(t) = e^(-2t)u(t). Justify whether it is energy signal or power signal.',
                'year' => '2080 Bhadra'
            ],
            [
                'text' => 'Determine whether or not the following CT signal is periodic. If the signal is periodic, determine its fundamental period: x(t) = 3cos(4t + π/3).',
                'year' => '2080 Baishakh'
            ],
            [
                'text' => 'How Nyquist theorem applied for a noiseless channel? Calculate number of discrete signal content in the channel if a channel has a spectrum of 3 to 4 MHz with signal to noise ratio of 24 dB.',
                'year' => '2078 Kartik'
            ],
            [
                'text' => 'State and explain Shannon-Hartley channel capacity theorem with example. Briefly discuss about the measures that are used to characterize the performance of a channel.',
                'year' => '2075 Ashwin'
            ]
        ]
    ],
    [
        'chapter' => 3,
        'title' => 'Transmission Media and Data compression',
        'questions' => [
            [
                'text' => 'Explain the different modes of data transmission in optical fiber. List out and mention the protocols of different categories of twisted pair cables.',
                'year' => '2081 Bhadra'
            ],
            [
                'text' => 'Compare coaxial cable with optical fibre. Evaluate the maximum capacity of a channel through which a signal with power of 10 dBW is transmitted. (Assume that the noise power spectral density is given as 5 mW/Hz).',
                'year' => '2080 Baishakh'
            ],
            [
                'text' => 'Encode "SaReGaMaPaDhaNiSa" using Huffman Encoding and calculate its transmission efficiency.',
                'year' => '2081 Bhadra'
            ],
            [
                'text' => 'Compress "Ghurnne Mech Mathi Andho Manche" using Huffman coding to determine efficiency redundancy and compare it with entropy.',
                'year' => '2081 Baishakh'
            ],
            [
                'text' => 'Encode "Jasta lai tastai dhido lai nistai" using Huffman encoder. Also demonstrate how it is decoded.',
                'year' => '2078 Bhadra'
            ],
            [
                'text' => 'Demonstrate how checksum is used to detect errors while sending a data word of 12, 15, 15, 14, 5, 2.',
                'year' => '2078 Bhadra'
            ],
            [
                'text' => 'Demonstrate how CRC works to detect errors in data communication.',
                'year' => '2076 Chaitra'
            ]
        ]
    ],
    [
        'chapter' => 4,
        'title' => 'Signal Encoding Technique',
        'questions' => [
            [
                'text' => 'Encode the given bit sequence 11000000000101 using any suitable two of polar and two of bipolar encoders.',
                'year' => '2081 Bhadra'
            ],
            [
                'text' => 'Explain the importance of Scrambling in the digital data encoding process. Encode the binary pattern 101000011101 using polar RZ, NRZ-I, AMI and Manchester line coding techniques.',
                'year' => '2081 Baishakh'
            ],
            [
                'text' => 'Encode 111000000000000011 using B8ZS and HDB3 encoders.',
                'year' => '2078 Bhadra'
            ],
            [
                'text' => 'List different types of digital-to-analog line encoding techniques. Give an example of QAM-32 in its constellation diagram.',
                'year' => '2079 Chaitra'
            ],
            [
                'text' => 'Encode the bit stream 10010110001 using the following encoding schemes: (i) Polar NRZ-L (ii) Polar NRZ-I (iii) Differential Manchester.',
                'year' => '2075 Ashwin'
            ],
            [
                'text' => 'Consider AM signal as m(t) = 5[1+2cos(2π×1000t)] cos(2π×10^6t). Determine modulation index, total power delivered.',
                'year' => '2080 Baishakh'
            ]
        ]
    ],
    [
        'chapter' => 5,
        'title' => 'Multiplexing and Switching',
        'questions' => [
            [
                'text' => 'Write down the applications of multiplexing. Describe FHSS and DSSS with necessary diagrams.',
                'year' => '2081 Baishakh'
            ],
            [
                'text' => 'What is multiplexing? Why statistical TDM is preferred than synchronous TDM?',
                'year' => '2080 Bhadra'
            ],
            [
                'text' => 'Differentiate between circuit switching and Packet switching used in computer networks with an example.',
                'year' => '2080 Baishakh'
            ],
            [
                'text' => 'Explain the mechanism of frequency Hopping spread spectrum (FHSS). Also, compare FDM and FHSS using suitable time-frequency graph.',
                'year' => '2078 Kartik'
            ],
            [
                'text' => 'Define Frequency division Multiplexing. Explain the FDM Multiplexing and demultiplexing process with neat diagrams.',
                'year' => '2079 Chaitra'
            ],
            [
                'text' => 'What is multiplexing and why we need it? Explain FDM hierarchy in telephone system.',
                'year' => '2074 Chaitra'
            ]
        ]
    ],
    [
        'chapter' => 6,
        'title' => 'Cellular Wireless Communications and Latest Trends',
        'questions' => [
            // The provided PDF questions do not directly map to 5G, SDN, or IoT as specified in Chapter 6 of the syllabus.
            // The closest relevant topics are CDMA and spread spectrum, which are covered under Chapter 5 (Multiplexing).
            // Therefore, this section is left empty or can be populated with the most relevant available questions.
            [
                'text' => 'Write short notes on: CDMA.',
                'year' => '2081 Bhadra'
            ],
            [
                'text' => 'Explain how CDMA works with example.',
                'year' => '2078 Bhadra'
            ],
            [
                'text' => 'Explain the "near-far problem" in CDMA. How can it be solved?',
                'year' => '2078 Kartik'
            ]
        ]
    ]
];

// Include the viewer module
// include '../question_list_viewer.php';
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/question_list_viewer.php';
?>