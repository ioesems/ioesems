<?php
header("Content-Type: text/html; charset=utf-8");

// ===== PAGE METADATA =====
$pageTitle = "Data Communication Syllabus";
$subtitle = "Comprehensive Engineering Course Outline for Year II, Part II";

// ===== COURSE OBJECTIVES =====
$courseObjectives = "The objective of this course is to provide students with a solid foundation in the principles and theories of data communication, including key terminology, protocols, and standards. Also support to explore the various types of transmission media, including guided and unguided media, and their characteristics, advantages, and disadvantages. Furthermore, it introduces the methods of data encoding, error detection techniques, and their implications for effective data transmission.";

// ===== TOPICS COVERED =====
$topics = [
    [
        'title' => '1. Introduction (4 hours)',
        'items' => [
            '1.1 Analog data communication, data representation, data flows',
            '1.2 Evolution of data communication',
            '1.3 A communication model, data communication model',
            '1.4 Networks (LAN, WAN), simplified network architecture, the OSI model',
            '1.5 Data communication and networking for today enterprise'
        ]
    ],
    [
        'title' => '2. Data Communication Fundamentals (5 hours)',
        'items' => [
            '2.1 Analog and digital data',
            '2.2 Analog signals, periodic and aperiodic signals, periodic signals characteristics (Time, frequency domain)',
            '2.3 Introduction to Fourier series representation of periodic signal, Fourier transform representation of aperiodic signals, digital signals and its characteristics',
            '2.4 Analog and digital transmission, transmission mode, transmission impairments (Attenuation, distortion, noise)',
            '2.5 Data rate limits channel capacity, Nyquist bandwidth, Shannon capacity formula',
            '2.6 Performance of network (Bandwidth, throughput, latency, jitter)'
        ]
    ],
    [
        'title' => '3. Transmission Media and Data compression (9 hours)',
        'items' => [
            '3.1 Guided transmission media: co-axial cable, twisted pair, optical fiber',
            '3.2 Unguided transmission media: Radio waves, microwaves, infrared',
            '3.3 Antenna basics, satellite communication',
            '3.4 Wireless propagation (Introduction to groundwave propagation, sky wave propagation and line of sight propagation), frequency bands',
            '3.5 Error detection and correction: Parity, check sum, cyclic redundancy check, hamming code',
            '3.6 Data compression: Lossy and lossless'
        ]
    ],
    [
        'title' => '4. Signal Encoding Technique (15 hours)',
        'items' => [
            '4.1 Analog data, analog signals: Modulation and its need, AM, FM, PM',
            '4.2 Analog data, digital signals: PAM, PWM, PPM, PCM, DPCM, DM',
            '4.3 Digital data, analog signal: ASK, FSK, PSK, QPSK, QAM',
            '4.4 Digital data, digital signal: RZ, NRZ, AMI, Manchester, differential Manchester, B8ZS, HDB3 for data transmission'
        ]
    ],
    [
        'title' => '5. Multiplexing and Switching (8 hours)',
        'items' => [
            '5.1 Access introduction to multiplexing, application of multiplexing',
            '5.2 Frequency division multiple access',
            '5.3 Time division multiple access',
            '5.4 Asymmetric digital subscriber line, XDSL',
            '5.5 Spread spectrum: DSSS, FHSS, CDMA',
            '5.6 Intro switcher communication network, connection oriented and connectionless',
            '5.7 Switching devices. Types, importance and application',
            '5.8 Circuit switching network: Circuit switching concepts, message switching',
            '5.9 Packet switching: Virtual circuit switching, datagram switching'
        ]
    ],
    [
        'title' => '6. Cellular Wireless Communications and Latest Trends (4 hours)',
        'items' => [
            '6.1 Overview of 1G, 2G, 3G and 4G',
            '6.2 Cellular technology fundamental terminology: cell, frequency-reuse, cluster, adjacent cell interference, co-channel interference, handoff strategies, architecture of GSM basics',
            '6.3 Introduction to 5G networks, software defined networking, IoT communication, cloud computing and virtualization in data communication'
        ]
    ]
];

// ===== TUTORIALS =====
$tutorialHours = 15;
$tutorials = [
    'Tutorials on different protocols in data communication TCP/IP, HTTP/HTTPS, FTP',
    'Explore the function of open systems interconnection (OSI) model, which defines seven layers of data communication',
    'Discover data communication devices and its application',
    'Identify the application of used network topologies in scenario',
    'Collecting ideas on some security aspects of communication on present enterprises system'
];

// ===== PRACTICAL SESSIONS =====
$practicalHours = 22.5;
$practicals = [
    'Signal analysis using MATLAB simulation environment',
    'Analog modulation generation and reconstruction',
    'Pulse modulation generation and reconstruction',
    'Conversion of given binary sequence into different line coding',
    'Digital modulation (ASK, FSK, PSK) generation and reconstruction'
];

// ===== EXAM PATTERN =====
$examPattern = [
    ['chapter' => '1', 'hours' => '4', 'marks' => '5'],
    ['chapter' => '2', 'hours' => '5', 'marks' => '8'],
    ['chapter' => '3', 'hours' => '9', 'marks' => '11'],
    ['chapter' => '4', 'hours' => '15', 'marks' => '20'],
    ['chapter' => '5', 'hours' => '8', 'marks' => '10'],
    ['chapter' => '6', 'hours' => '4', 'marks' => '5']
];
$totalHours = 45;
$totalMarks = 60;

// ===== REFERENCES =====
$references = [
    'Stallings, W. (2007). Data and Computer Communications. India: Pearson Education.',
    'Forouzan, B. A., Fegan, S. C. (2007). Data Communications and Networking (McGraw-Hill Forouzan Networking). United Kingdom: McGraw Hill Higher Education.',
    'Tanenbaum, A. S., Wetherall, D. (2011). Computer Networks. India: Pearson Prentice Hall.',
    'Rappaport, T. S. (2024). Wireless Communications: Principles and Practice. United Kingdom: Cambridge University Press.'
];

// ⚠️ DO NOT MODIFY BELOW THIS LINE — connects to viewer
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/syllabus_viewer.php';
?>