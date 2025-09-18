<?php
// Define subject title
$subject_title = "Data Communication (CT 602) Previous Year Questions with Solutions";

// Define questions array organized by year
$questions_by_year = [
    '2081 Bhadra' => [
        [
            'text' => 'Prepare a generic block diagram of a digital communication system representing communications between an air traffic controller and an in flight pilot in a cockpit.',
            'chapter' => 'Introduction',
            'has_diagram' => false,
            'solution' => 'A digital communication system for air traffic control consists of the following key blocks:<br><br>' .
                         '<b>1. Information Source:</b> The air traffic controller\'s voice or data input.<br>' .
                         '<b>2. Source Encoder:</b> Converts analog voice to digital format (PCM) and compresses data to remove redundancy.<br>' .
                         '<b>3. Channel Encoder:</b> Adds error detection/correction bits (e.g., Hamming code, CRC) to combat channel noise.<br>' .
                         '<b>4. Digital Modulator:</b> Modulates digital data onto a high-frequency carrier (e.g., QPSK, 16-QAM) for transmission via radio waves.<br>' .
                         '<b>5. Channel:</b> The wireless medium (typically VHF radio band 118–137 MHz) with impairments like noise and fading.<br>' .
                         '<b>6. Digital Demodulator:</b> Recovers the digital bitstream from the received modulated signal.<br>' .
                         '<b>7. Channel Decoder:</b> Detects and corrects errors using the added redundancy.<br>' .
                         '<b>8. Source Decoder:</b> Converts digital signal back to analog voice for the pilot’s headset.<br>' .
                         '<b>9. Output Transducer:</b> Headphones or speakers in the cockpit.<br><br>' .
                         'The system operates in full-duplex mode, allowing simultaneous two-way communication. Security and reliability are critical, so robust modulation and strong error correction are employed.',
            'solution_has_diagram' => false,
            'notes' => 'In aviation, VHF AM (Amplitude Modulation) is traditionally used rather than digital modulation for voice, but modern systems are transitioning to digital (VDL Mode 2/3/4). The block diagram remains conceptually similar, with modulation/demodulation adapted to the specific scheme.',
            'formulas' => []
        ],
        [
            'text' => 'Explain the basic causes of transmission impairments in communication system.',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false,
            'solution' => 'Transmission impairments are factors that degrade the quality of a signal as it travels through a communication medium. The three main causes are:<br><br>' .
                         '<b>1. Attenuation:</b> The loss of signal strength (energy) as it propagates through the medium. It occurs due to resistance in the medium (e.g., cable) or spreading of the signal (e.g., radio waves). Attenuation increases with distance and frequency. It is measured in decibels (dB).<br>' .
                         'Solution: Use amplifiers (analog) or repeaters (digital) to boost the signal.<br><br>' .
                         '<b>2. Distortion:</b> The alteration of the original shape or frequency components of the signal. This can happen when different frequency components of a signal travel at different speeds (delay distortion) or when unwanted signals combine with the original signal.<br>' .
                         'Solution: Use equalizers to compensate for delay distortion and proper shielding to reduce interference.<br><br>' .
                         '<b>3. Noise:</b> Any unwanted energy that interferes with the signal. Types of noise include:<br>' .
                         '• <i>Thermal noise:</i> Random motion of electrons in conductors (present in all electronic devices).<br>' .
                         '• <i>Intermodulation noise:</i> Signals at different frequencies sharing a medium interact to produce new frequencies.<br>' .
                         '• <i>Crosstalk:</i> Signal from one wire leaks into another adjacent wire.<br>' .
                         '• <i>Impulse noise:</i> Irregular pulses or spikes of short duration (e.g., from lightning or power lines).<br>' .
                         'Solution: Use shielding, proper grounding, and error detection/correction techniques.',
            'solution_has_diagram' => false,
            'notes' => 'Attenuation is unavoidable but can be managed. Distortion can often be corrected if the characteristics of the medium are known. Noise is the most challenging impairment, especially impulse noise in digital systems, which can corrupt multiple bits.',
            'formulas' => [
                'Attenuation (dB) = 10 log₁₀ (P_out / P_in)',
                'Signal-to-Noise Ratio (SNR) = 10 log₁₀ (P_signal / P_noise) dB'
            ]
        ],
        [
            'text' => 'Encode the given bit sequence 11000000000101 using any suitable two of polar and two of bipolar encoders.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false,
            'solution' => 'Bit sequence: 1 1 0 0 0 0 0 0 0 0 0 1 0 1<br><br>' .
                         '<b>Polar NRZ-L:</b><br>' .
                         '1 = +V, 0 = -V<br>' .
                         'Waveform: + + - - - - - - - - - + - +<br><br>' .
                         '<b>Polar RZ:</b><br>' .
                         '1 = +V for first half, 0 for second half; 0 = -V for first half, 0 for second half<br>' .
                         'Waveform: [+/0] [+/0] [-/0] [-/0] [-/0] [-/0] [-/0] [-/0] [-/0] [-/0] [-/0] [+/0] [-/0] [+/0]<br><br>' .
                         '<b>Bipolar AMI (Alternate Mark Inversion):</b><br>' .
                         '0 = 0V; 1 = alternates between +V and -V<br>' .
                         'Assume first 1 is +V: + - 0 0 0 0 0 0 0 0 0 + 0 -<br><br>' .
                         '<b>Bipolar Pseudoternary:</b><br>' .
                         '1 = 0V; 0 = alternates between +V and -V<br>' .
                         'First 0 after start is +V: 0 0 + - + - + - + - + 0 + 0',
            'solution_has_diagram' => false,
            'notes' => 'NRZ-L is simple but has DC component and synchronization issues for long 0/1 runs. RZ solves sync by returning to zero but uses more bandwidth. AMI eliminates DC and provides sync via transitions but requires scrambling (B8ZS/HDB3) for long 0 runs. Pseudoternary is the inverse of AMI.',
            'formulas' => []
        ]
    ],
    
    '2081 Baishakh' => [
        [
            'text' => 'Explain the digital data communication system working in full duplex mode using a block diagram. Define the transmission performance parameters in a data communication system.',
            'chapter' => 'Introduction',
            'has_diagram' => false,
            'solution' => '<b>Full-Duplex Digital Communication System:</b><br>' .
                         'In full-duplex mode, data flows in both directions simultaneously. This is achieved using:<br>' .
                         '- Two separate physical channels (e.g., fiber pairs), or<br>' .
                         '- Frequency Division Duplexing (FDD) using different carrier frequencies for transmit/receive, or<br>' .
                         '- Time Division Duplexing (TDD) with precise timing to alternate transmission slots.<br><br>' .
                         '<b>Block Diagram Components (Bidirectional):</b><br>' .
                         'Each end (e.g., Station A and Station B) has:<br>' .
                         '• Transmitter Chain: Source → Source Encoder → Channel Encoder → Modulator<br>' .
                         '• Receiver Chain: Demodulator → Channel Decoder → Source Decoder → Output<br>' .
                         '• Duplexing Mechanism: Filters (FDD) or Switches/Timing (TDD) to separate Tx/Rx signals.<br><br>' .
                         '<b>Transmission Performance Parameters:</b><br>' .
                         '1. <b>Bandwidth:</b> The maximum data rate the channel can support (Hz or bps).<br>' .
                         '2. <b>Throughput:</b> Actual data transfer rate achieved (bps), often less than bandwidth due to overhead.<br>' .
                         '3. <b>Latency (Delay):</b> Total time for a bit to travel from source to destination (ms). Includes propagation, transmission, processing, and queuing delays.<br>' .
                         '4. <b>Jitter:</b> Variation in latency for packets in a stream (critical for real-time audio/video).<br>' .
                         '5. <b>Bit Error Rate (BER):</b> Ratio of erroneous bits received to total bits transmitted.<br>' .
                         '6. <b>Signal-to-Noise Ratio (SNR):</b> Ratio of signal power to noise power (dB), directly impacts BER and max data rate.',
            'solution_has_diagram' => false,
            'notes' => 'Full-duplex is essential for interactive applications like phone calls or video conferencing. Performance parameters are interrelated; e.g., increasing bandwidth can improve throughput but may not reduce latency, which is governed by distance and processing speed.',
            'formulas' => [
                'Shannon Capacity: C = B log₂(1 + SNR)',
                'Nyquist Bit Rate: R = 2B log₂(M) for M-level signaling',
                'Latency = Propagation Delay + Transmission Delay + Processing Delay + Queuing Delay'
            ]
        ],
        [
            'text' => 'Define energy and power signal with examples. Check whether the following system is linear, causal and time invariant or not: y(t) = logx(t)',
            'chapter' => 'Data Communication Fundamentals',
            'has_diagram' => false,
            'solution' => '<b>Energy and Power Signals:</b><br>' .
                         '• <b>Energy Signal:</b> A signal with finite total energy (0 < E < ∞) and zero average power. Example: A single rectangular pulse x(t) = 1 for |t| < 1, 0 otherwise. E = ∫|x(t)|²dt = 2, P = 0.<br>' .
                         '• <b>Power Signal:</b> A signal with finite average power (0 < P < ∞) and infinite total energy. Example: A periodic sine wave x(t) = sin(t). P = 1/2, E = ∞.<br><br>' .
                         '<b>System Analysis: y(t) = logx(t)</b><br>' .
                         '• <b>Linearity:</b> Check superposition: y₁(t) = logx₁(t), y₂(t) = logx₂(t). For input a·x₁(t) + b·x₂(t), output = log(a·x₁(t) + b·x₂(t)) ≠ a·logx₁(t) + b·logx₂(t). ∴ <b>Non-linear</b>.<br>' .
                         '• <b>Causality:</b> Output y(t) at time t depends only on input x(t) at the same time t. It does not depend on future values x(t+τ). ∴ <b>Causal</b>.<br>' .
                         '• <b>Time Invariance:</b> Let y₁(t) = logx(t). For delayed input x(t - t₀), output = logx(t - t₀) = y₁(t - t₀). ∴ <b>Time-Invariant</b>.',
            'solution_has_diagram' => false,
            'notes' => 'The logarithmic system is non-linear because log(a + b) ≠ log(a) + log(b). Most real-world systems (e.g., amplifiers, modulators) are non-linear. Causality is essential for real-time systems. Time-invariance simplifies analysis using Fourier/Laplace transforms.',
            'formulas' => [
                'Energy: E = ∫<sub>-∞</sub><sup>∞</sup> |x(t)|² dt',
                'Average Power: P = lim<sub>T→∞</sub> (1/(2T)) ∫<sub>-T</sub><sup>T</sup> |x(t)|² dt'
            ]
        ]
    ],
    
    '2080 Bhadra' => [
        [
            'text' => 'Define transmission performance parameters in data communication system. Explain digital communication system with appropriate generic block diagram.',
            'chapter' => 'Introduction',
            'has_diagram' => false,
            'solution' => '<b>Transmission Performance Parameters:</b><br>' .
                         '1. <b>Bandwidth:</b> The range of frequencies a channel can transmit, or the maximum data rate (in bps) it can support.<br>' .
                         '2. <b>Throughput:</b> The actual rate of successful message delivery over a communication channel (bps).<br>' .
                         '3. <b>Latency (Delay):</b> The time taken for a packet to travel from source to destination. Includes:<br>' .
                         '&nbsp;&nbsp;&nbsp;&nbsp;• Propagation delay (distance/speed)<br>' .
                         '&nbsp;&nbsp;&nbsp;&nbsp;• Transmission delay (packet size/bandwidth)<br>' .
                         '&nbsp;&nbsp;&nbsp;&nbsp;• Processing delay (time to process packet)<br>' .
                         '&nbsp;&nbsp;&nbsp;&nbsp;• Queuing delay (time waiting in buffers)<br>' .
                         '4. <b>Jitter:</b> The variation in delay of received packets.<br>' .
                         '5. <b>Bit Error Rate (BER):</b> The ratio of bits received in error to the total number of bits transmitted.<br>' .
                         '6. <b>Signal-to-Noise Ratio (SNR):</b> The ratio of signal power to noise power, usually expressed in decibels (dB).<br><br>' .
                         '<b>Digital Communication System Block Diagram:</b><br>' .
                         '1. <b>Source:</b> Generates the message (voice, data, video).<br>' .
                         '2. <b>Source Encoder:</b> Compresses the message to remove redundancy (e.g., Huffman coding for text, PCM for voice).<br>' .
                         '3. <b>Channel Encoder:</b> Adds redundancy for error detection and correction (e.g., Hamming code, CRC).<br>' .
                         '4. <b>Modulator:</b> Converts digital signal to analog for transmission over analog channel (e.g., QPSK, 16-QAM).<br>' .
                         '5. <b>Channel:</b> The transmission medium (twisted pair, coaxial, fiber, wireless) with noise and attenuation.<br>' .
                         '6. <b>Demodulator:</b> Recovers the digital signal from the received analog signal.<br>' .
                         '7. <b>Channel Decoder:</b> Detects and corrects errors using the added redundancy.<br>' .
                         '8. <b>Source Decoder:</b> Decompresses the message to its original form.<br>' .
                         '9. <b>Destination:</b> The intended recipient of the message.',
            'solution_has_diagram' => false,
            'notes' => 'The source encoder and decoder work together to compress and decompress data, improving efficiency. The channel encoder and decoder work together to ensure data integrity. The modulator and demodulator (together called a modem) adapt the signal for the physical channel.',
            'formulas' => [
                'Shannon Capacity: C = B log₂(1 + SNR)',
                'Nyquist Rate: R = 2B for binary signaling',
                'BER = (Number of bits received in error) / (Total number of bits transmitted)'
            ]
        ],
        [
            'text' => 'What is multiplexing? Why statistical TDM is preferred than synchronous TDM?',
            'chapter' => 'Multiplexing and Switching',
            'has_diagram' => false,
            'solution' => '<b>Multiplexing</b> is a technique that allows multiple signals to share a single communication channel or medium. It increases efficiency and reduces cost by maximizing the utilization of the available bandwidth.<br><br>' .
                         '<b>Synchronous TDM (STDM):</b><br>' .
                         '• Time slots are pre-assigned to each input source, regardless of whether they have data to send.<br>' .
                         '• If a source has no data, its time slot remains empty (wasted).<br>' .
                         '• Suitable for constant bit-rate traffic like voice.<br>' .
                         '• Simple to implement but inefficient for bursty data.<br><br>' .
                         '<b>Statistical TDM (STDM or Asynchronous TDM):</b><br>' .
                         '• Time slots are dynamically allocated to sources that have data to send.<br>' .
                         '• Each slot contains an address field to identify the source.<br>' .
                         '• No wasted slots — bandwidth is used only when needed.<br>' .
                         '• More efficient for bursty data traffic like computer data.<br>' .
                         '• Requires more complex buffering and addressing.<br><br>' .
                         '<b>Why Statistical TDM is Preferred:</b><br>' .
                         'Statistical TDM is preferred over synchronous TDM for data communication because most data traffic is bursty (not constant). Statistical TDM dynamically allocates bandwidth only to active users, leading to much higher channel utilization and efficiency. Synchronous TDM wastes bandwidth by reserving slots for inactive users.',
            'solution_has_diagram' => false,
            'notes' => 'Statistical TDM is more complex because it requires buffer memory to store data until a slot is available and addressing to identify the source. However, the increased efficiency makes it ideal for modern data networks where traffic is highly variable.',
            'formulas' => [
                'Efficiency of STDM = (Actual data transmitted) / (Total capacity)',
                'Overhead in Statistical TDM = (Address bits + Control bits) / (Total bits per slot)'
            ]
        ]
    ],
    
    '2080 Baishakh' => [
        [
            'text' => 'Define data and signal. Elaborate the advantages of digital communication system as compared to analog communications system. Explain the basic causes of transmission impairments in communication system.',
            'chapter' => 'Introduction',
            'has_diagram' => false,
            'solution' => '<b>Data:</b> Data is any entity that conveys meaning based on agreed-upon rules. It is the information we want to send (e.g., text, numbers, images, audio, video).<br>' .
                         '<b>Signal:</b> A signal is the electrical, electronic, or optical representation of data that is transmitted over a communication channel. It is a function of time (e.g., voltage vs. time).<br><br>' .
                         '<b>Advantages of Digital over Analog Communication:</b><br>' .
                         '1. <b>Better Noise Immunity:</b> Digital signals are less affected by noise and distortion. Regenerative repeaters can recreate the original signal.<br>' .
                         '2. <b>Error Detection and Correction:</b> Digital systems can detect and correct errors using techniques like CRC and Hamming codes.<br>' .
                         '3. <b>Security:</b> Digital data can be easily encrypted for secure transmission.<br>' .
                         '4. <b>Integration:</b> Digital systems can easily integrate voice, video, and data on the same network.<br>' .
                         '5. <b>Flexibility:</b> Digital hardware (e.g., software-defined radios) is more flexible and easier to upgrade.<br>' .
                         '6. <b>Lower Cost:</b> Advances in digital ICs have made digital systems cheaper and more reliable.<br><br>' .
                         '<b>Basic Causes of Transmission Impairments:</b><br>' .
                         '1. <b>Attenuation:</b> Loss of signal strength over distance. Solved using amplifiers or repeaters.<br>' .
                         '2. <b>Distortion:</b> Change in the shape of the signal due to different frequency components traveling at different speeds (delay distortion) or nonlinearities in the system.<br>' .
                         '3. <b>Noise:</b> Unwanted signals that interfere with the original signal. Types include thermal noise, intermodulation noise, crosstalk, and impulse noise.',
            'solution_has_diagram' => false,
            'notes' => 'While digital systems have many advantages, they require more bandwidth than analog systems for the same information. They also require synchronization and analog-to-digital conversion, which adds complexity.',
            'formulas' => [
                'SNR (dB) = 10 log₁₀ (P_signal / P_noise)',
                'Attenuation (dB) = 10 log₁₀ (P_out / P_in)'
            ]
        ],
        [
            'text' => 'Consider AM signal as m(t) = 5[1+2cos(2π×1000t)] cos(2π×10⁶t). Determine modulation index, total power delivered.',
            'chapter' => 'Signal Encoding Technique',
            'has_diagram' => false,
            'solution' => 'The standard AM equation is: s(t) = A<sub>c</sub>[1 + μ cos(2πf<sub>m</sub>t)] cos(2πf<sub>c</sub>t)<br>' .
                         'Given: m(t) = 5[1 + 2cos(2π×1000t)] cos(2π×10⁶t)<br><br>' .
                         'By comparison:<br>' .
                         'Carrier amplitude A<sub>c</sub> = 5 V<br>' .
                         'Modulation index μ = 2<br>' .
                         'Message frequency f<sub>m</sub> = 1000 Hz<br>' .
                         'Carrier frequency f<sub>c</sub> = 10⁶ Hz = 1 MHz<br><br>' .
                         '<b>Modulation Index:</b> μ = 2 (or 200%)<br>' .
                         'Note: μ > 1 indicates over-modulation, which causes distortion and envelope detection failure.<br><br>' .
                         '<b>Total Power:</b><br>' .
                         'P<sub>total</sub> = P<sub>c</sub> (1 + μ²/2) where P<sub>c</sub> = A<sub>c</sub>² / (2R). Assuming R=1Ω for simplicity:<br>' .
                         'P<sub>c</sub> = (5)² / 2 = 25 / 2 = 12.5 W<br>' .
                         'P<sub>total</sub> = 12.5 × (1 + 2²/2) = 12.5 × (1 + 4/2) = 12.5 × (1 + 2) = 12.5 × 3 = 37.5 W<br><br>' .
                         'Power distribution:<br>' .
                         'Carrier Power: 12.5 W<br>' .
                         'Upper Sideband Power: (μ²/4) × P<sub>c</sub> = (4/4) × 12.5 = 12.5 W<br>' .
                         'Lower Sideband Power: 12.5 W<br>' .
                         'Total Sideband Power: 25 W',
            'solution_has_diagram' => false,
            'notes' => 'Over-modulation (μ>1) is generally avoided in AM broadcasting because it causes severe distortion. The total power is dominated by the carrier (which carries no information) and the sidebands. DSB-SC or SSB would be more power-efficient for this signal.',
            'formulas' => [
                'AM Signal: s(t) = A<sub>c</sub>[1 + μ cos(2πf<sub>m</sub>t)] cos(2πf<sub>c</sub>t)',
                'Modulation Index: μ = A<sub>m</sub> / A<sub>c</sub>',
                'Total Power: P<sub>total</sub> = P<sub>c</sub> (1 + μ²/2)',
                'Carrier Power: P<sub>c</sub> = A<sub>c</sub>² / (2R)'
            ]
        ]
    ]
];

// Include the viewer module
// include '../pyq_with_solution_viewer.php';

include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/pyq_with_solution_viewer.php';

?>