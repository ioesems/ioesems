<?php
// Define subject title
$subject_title = "Data Communication (CT 602) Question Bank with Solutions";

// Define questions array with solutions
$questions = [
    [
        'chapter' => 1,
        'title' => 'Introduction',
        'questions' => [
            [
                'text' => 'Prepare a generic block diagram of a digital communication system representing communications between an air traffic controller and an in flight pilot in a cockpit.',
                'year' => '2081 Bhadra',
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
                'text' => 'Explain the digital data communication system working in full duplex mode using a block diagram. Define the transmission performance parameters in a data communication system.',
                'year' => '2081 Baishakh',
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
            ]
        ]
    ],
    [
        'chapter' => 2,
        'title' => 'Data Communication Fundamentals',
        'questions' => [
            [
                'text' => 'Define energy and power signal with examples. Check whether the following system is linear, causal and time invariant or not: y(t) = logx(t).',
                'year' => '2081 Baishakh',
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
            ],
            [
                'text' => 'Determine whether or not the following CT signal is periodic. If the signal is periodic, determine its fundamental period: x(t) = 3cos(4t + π/3).',
                'year' => '2080 Baishakh',
                'has_diagram' => false,
                'solution' => 'A continuous-time (CT) signal x(t) is periodic if there exists a positive constant T such that x(t) = x(t + T) for all t.<br><br>' .
                             'For a cosine function x(t) = A cos(ω₀t + φ), it is periodic with fundamental period T₀ = 2π / |ω₀|.<br><br>' .
                             'Given: x(t) = 3cos(4t + π/3)<br>' .
                             'Here, angular frequency ω₀ = 4 rad/s.<br>' .
                             'Fundamental period T₀ = 2π / ω₀ = 2π / 4 = π/2 seconds.<br><br>' .
                             'Verification: x(t + T₀) = 3cos(4(t + π/2) + π/3) = 3cos(4t + 2π + π/3) = 3cos(4t + π/3 + 2π) = 3cos(4t + π/3) = x(t).<br><br>' .
                             '∴ The signal is periodic with fundamental period T₀ = π/2 seconds.',
                'solution_has_diagram' => false,
                'notes' => 'The phase shift (π/3) does not affect periodicity or the fundamental period; only the frequency (ω₀) matters. For a sum of sinusoids, the signal is periodic only if the ratio of their frequencies is rational.',
                'formulas' => [
                    'For x(t) = A cos(ω₀t + φ): Period T₀ = 2π / |ω₀|',
                    'General periodicity condition: x(t) = x(t + T) for some T > 0'
                ]
            ]
        ]
    ],
    [
        'chapter' => 3,
        'title' => 'Transmission Media and Data compression',
        'questions' => [
            [
                'text' => 'Explain the different modes of data transmission in optical fiber. List out and mention the protocols of different categories of twisted pair cables.',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => '<b>Modes of Optical Fiber Transmission:</b><br>' .
                             '1. <b>Single-Mode Fiber (SMF):</b> Core diameter ~9µm. Only the fundamental mode propagates. Uses laser source. Low dispersion, high bandwidth (up to 100 Gbps), long distances (100+ km). Used in telecom backbones.<br>' .
                             '2. <b>Multi-Mode Step-Index Fiber:</b> Core diameter ~50-100µm. Multiple modes travel different path lengths, causing modal dispersion. Uses LED source. Limited bandwidth/distance. Used in short links.<br>' .
                             '3. <b>Multi-Mode Graded-Index Fiber:</b> Core has refractive index that decreases radially. Modes follow curved paths with nearly equal travel times, reducing modal dispersion. Better performance than step-index.<br><br>' .
                             '<b>Twisted Pair Cable Categories & Protocols:</b><br>' .
                             '• <b>Category 3 (Cat 3):</b> Up to 10 Mbps. Used for 10BASE-T Ethernet and telephone.<br>' .
                             '• <b>Category 5 (Cat 5):</b> Up to 100 Mbps. Used for 100BASE-TX (Fast Ethernet).<br>' .
                             '• <b>Category 5e (Cat 5e):</b> Up to 1 Gbps. Enhanced crosstalk performance. Used for 1000BASE-T (Gigabit Ethernet).<br>' .
                             '• <b>Category 6 (Cat 6):</b> Up to 1 Gbps (or 10 Gbps for short runs). Better insulation. Used for 1000BASE-T and 10GBASE-T.<br>' .
                             '• <b>Category 6a (Cat 6a):</b> Up to 10 Gbps over 100m. Augmented for alien crosstalk reduction.<br>' .
                             '• <b>Category 7/7a (Cat 7/7a):</b> Up to 10 Gbps (or 40 Gbps for Cat 7a). Shielded (S/FTP). Used for 10GBASE-T and beyond.<br>' .
                             '• <b>Category 8 (Cat 8):</b> Up to 40 Gbps over 30m. Used in data centers for 25GBASE-T and 40GBASE-T.',
                'solution_has_diagram' => false,
                'notes' => 'Single-mode fiber is preferred for long-haul and high-speed applications. Twisted pair categories are defined by the Telecommunications Industry Association (TIA). Higher categories support higher frequencies and data rates with better noise immunity.',
                'formulas' => []
            ],
            [
                'text' => 'Encode "SaReGaMaPaDhaNiSa" using Huffman Encoding and calculate its transmission efficiency.',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => 'Step 1: Calculate frequency of each character in "SaReGaMaPaDhaNiSa" (18 characters):<br>' .
                             'S: 2, a: 6, R: 1, e: 1, G: 1, M: 2, P: 2, D: 1, h: 2, N: 1, i: 1<br><br>' .
                             'Step 2: Build Huffman Tree (combine lowest frequencies first):<br>' .
                             'Final codes (one possible assignment):<br>' .
                             'a: 0<br>' .
                             'S: 100<br>' .
                             'M: 101<br>' .
                             'P: 110<br>' .
                             'h: 1110<br>' .
                             'R: 111100<br>' .
                             'e: 111101<br>' .
                             'G: 111110<br>' .
                             'D: 1111110<br>' .
                             'N: 11111110<br>' .
                             'i: 11111111<br><br>' .
                             'Step 3: Encode the string:<br>' .
                             '"SaReGaMaPaDhaNiSa" = 100 0 111100 111101 111110 0 101 0 110 0 1111110 1110 0 11111110 11111111 100 0<br>' .
                             'Total bits = 3+1+6+6+6+1+3+1+3+1+7+4+1+8+8+3+1 = 64 bits<br><br>' .
                             'Step 4: Calculate Efficiency:<br>' .
                             'Fixed-length code (4 bits/symbol for 11 symbols): 18 chars × 4 bits = 72 bits<br>' .
                             'Huffman code: 64 bits<br>' .
                             'Efficiency = (Fixed-length bits) / (Huffman bits) × 100% = 72 / 64 × 100% = 112.5%<br>' .
                             '(Note: Efficiency >100% means Huffman is better than the fixed-length benchmark)<br>' .
                             'Entropy H = -Σ pᵢ log₂(pᵢ) ≈ 2.73 bits/symbol<br>' .
                             'Average Huffman length L = 64 / 18 ≈ 3.56 bits/symbol<br>' .
                             'Coding Efficiency = H / L × 100% ≈ 2.73 / 3.56 × 100% ≈ 76.7%',
                'solution_has_diagram' => false,
                'notes' => 'Huffman coding is lossless and optimal for symbol-by-symbol encoding. Efficiency is often measured against entropy (theoretical minimum). The code assignment is not unique; different trees can yield different codes with the same average length. The string has high redundancy (many \'a\'s), making compression effective.',
                'formulas' => [
                    'Entropy: H = -Σ pᵢ log₂(pᵢ)',
                    'Average Code Length: L = Σ pᵢ lᵢ',
                    'Coding Efficiency: η = H / L × 100%'
                ]
            ]
        ]
    ],
    [
        'chapter' => 4,
        'title' => 'Signal Encoding Technique',
        'questions' => [
            [
                'text' => 'Encode the given bit sequence 11000000000101 using any suitable two of polar and two of bipolar encoders.',
                'year' => '2081 Bhadra',
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
            ],
            [
                'text' => 'Consider AM signal as m(t) = 5[1+2cos(2π×1000t)] cos(2π×10⁶t). Determine modulation index, total power delivered.',
                'year' => '2080 Baishakh',
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
    ],
    [
        'chapter' => 5,
        'title' => 'Multiplexing and Switching',
        'questions' => [
            [
                'text' => 'Write down the applications of multiplexing. Describe FHSS and DSSS with necessary diagrams.',
                'year' => '2081 Baishakh',
                'has_diagram' => false,
                'solution' => '<b>Applications of Multiplexing:</b><br>' .
                             '• Telephony: Combine thousands of voice calls onto a single fiber (TDM/WDM).<br>' .
                             '• Broadcasting: Transmit multiple TV/radio channels over one frequency band (FDM).<br>' .
                             '• Computer Networks: Share a single link among many users (TDM in Ethernet, CDMA in cellular).<br>' .
                             '• Satellite Communication: Multiple earth stations share transponder bandwidth (FDM/TDM).<br>' .
                             '• IoT: Many sensors share a wireless channel (FHSS in Bluetooth, DSSS in Zigbee).<br><br>' .
                             '<b>Frequency Hopping Spread Spectrum (FHSS):</b><br>' .
                             '• Transmitter and receiver synchronize to hop between many carrier frequencies in a pseudo-random sequence.<br>' .
                             '• Each data bit is transmitted on a different frequency.<br>' .
                             '• Resistant to narrowband interference and eavesdropping.<br>' .
                             '• Used in Bluetooth, military comms.<br>' .
                             '• Diagram: Shows time vs. frequency, with signal "hopping" between different frequency slots.<br><br>' .
                             '<b>Direct Sequence Spread Spectrum (DSSS):</b><br>' .
                             '• Each data bit is multiplied by a high-rate pseudo-random code (chipping code).<br>' .
                             '• Spreads the signal over a wide bandwidth.<br>' .
                             '• Receiver correlates with same code to de-spread and recover data.<br>' .
                             '• Resistant to narrowband interference; allows multiple access (CDMA).<br>' .
                             '• Used in GPS, CDMA cellular, Wi-Fi (802.11b).<br>' .
                             '• Diagram: Shows data signal, PN code, and resulting spread spectrum signal with much wider bandwidth.',
                'solution_has_diagram' => false,
                'notes' => 'FHSS is like a radio that rapidly changes stations in a pre-arranged pattern. DSSS is like speaking in a coded language that only the intended listener understands. Both techniques spread the signal energy over a wider bandwidth than the original data, trading bandwidth for robustness and security.',
                'formulas' => [
                    'Processing Gain (DSSS) = Bandwidth<sub>spread</sub> / Bandwidth<sub>data</sub> = Chip Rate / Data Rate',
                    'Number of Hops (FHSS) = Total Bandwidth / Channel Bandwidth'
                ]
            ],
            [
                'text' => 'Differentiate between circuit switching and Packet switching used in computer networks with an example.',
                'year' => '2080 Baishakh',
                'has_diagram' => false,
                'solution' => '<table border="1" cellpadding="5">' .
                             '<tr><th>Feature</th><th>Circuit Switching</th><th>Packet Switching</th></tr>' .
                             '<tr><td><b>Connection</b></td><td>Dedicated path established before data transfer (call setup).</td><td>No dedicated path; each packet routed independently.</td></tr>' .
                             '<tr><td><b>Resource Allocation</b></td><td>Fixed bandwidth reserved for entire session.</td><td>Bandwidth shared dynamically; statistical multiplexing.</td></tr>' .
                             '<tr><td><b>Data Transfer</b></td><td>Continuous stream; no addressing needed after setup.</td><td>Data broken into packets; each packet has full address.</td></tr>' .
                             '<tr><td><b>Delay</b></td><td>Constant delay after setup; no queuing.</td><td>Variable delay due to queuing and routing.</td></tr>' .
                             '<tr><td><b>Reliability</b></td><td>Guaranteed bandwidth; no congestion after setup.</td><td>Can handle congestion via routing; packets may be lost/delayed.</td></tr>' .
                             '<tr><td><b>Efficiency</b></td><td>Inefficient for bursty data (idle during silence).</td><td>Efficient; bandwidth used only when data is sent.</td></tr>' .
                             '<tr><td><b>Example</b></td><td>Traditional telephone network (PSTN).</td><td>Internet (IP), Ethernet.</td></tr>' .
                             '</table><br>' .
                             '<b>Example Scenario:</b> Sending a 1MB file.<br>' .
                             '• <b>Circuit Switching:</b> A 1 Mbps channel is reserved for 8 seconds. Even if you send data in bursts, the channel sits idle between bursts, wasting bandwidth.<br>' .
                             '• <b>Packet Switching:</b> File is split into 1000 packets of 1KB each. Packets are sent as needed, sharing the link with other users. If one packet is lost, only that packet is retransmitted.',
                'solution_has_diagram' => false,
                'notes' => 'Circuit switching is like reserving a private railway carriage for your entire journey. Packet switching is like sending individual letters via the postal service, where each letter finds its own way to the destination. The Internet\'s success is largely due to the efficiency and robustness of packet switching.',
                'formulas' => []
            ]
        ]
    ],
    [
        'chapter' => 6,
        'title' => 'Cellular Wireless Communications and Latest Trends',
        'questions' => [
            [
                'text' => 'Write short notes on: CDMA.',
                'year' => '2081 Bhadra',
                'has_diagram' => false,
                'solution' => '<b>Code Division Multiple Access (CDMA):</b><br>' .
                             'CDMA is a channel access method where multiple users share the same frequency band simultaneously by assigning each user a unique pseudo-random code.<br><br>' .
                             '<b>Principle:</b> Each user\'s data is multiplied by a high-rate spreading code (e.g., Walsh code). The spread signals are transmitted together. The receiver correlates the received signal with the desired user\'s code to extract their data. Signals with other codes appear as noise.<br><br>' .
                             '<b>Advantages:</b><br>' .
                             '• Soft capacity: More users gradually increase noise floor (no hard limit).<br>' .
                             '• Resistance to interference and multipath fading (using RAKE receiver).<br>' .
                             '• Enhanced privacy (signals appear as noise without the code).<br>' .
                             '• Soft handoff: Mobile can communicate with multiple base stations simultaneously.<br><br>' .
                             '<b>Disadvantages:</b><br>' .
                             '• Near-far problem: Strong signals can drown out weak ones (solved by power control).<br>' .
                             '• Self-jamming: Imperfect code orthogonality causes interference.<br>' .
                             '• Complex receivers required.<br><br>' .
                             '<b>Example:</b> In a 4-user system with codes C1=[1,1,1,1], C2=[1,-1,1,-1], C3=[1,1,-1,-1], C4=[1,-1,-1,1], user 1 sending \'1\' transmits [1,1,1,1]. The receiver multiplies received signal by C1 and sums: (1+1+1+1)/4 = 1 to recover the bit.',
                'solution_has_diagram' => false,
                'notes' => 'CDMA was a key technology in 3G cellular systems (cdmaOne, CDMA2000, WCDMA). It contrasts with FDMA (different frequencies) and TDMA (different time slots). The processing gain (spreading factor) determines the system\'s resistance to interference.',
                'formulas' => [
                    'Received Signal: r = Σ (data<sub>i</sub> × code<sub>i</sub>) + noise',
                    'Decoding: data<sub>j</sub> = (r • code<sub>j</sub>) / N, where N is code length'
                ]
            ],
            [
                'text' => 'Explain the "near-far problem" in CDMA. How can it be solved?',
                'year' => '2078 Kartik',
                'has_diagram' => false,
                'solution' => '<b>Near-Far Problem:</b><br>' .
                             'In CDMA, all users transmit on the same frequency simultaneously. If one user (near the base station) transmits with high power, and another user (far from the base station) transmits with low power, the strong signal can overwhelm the weak signal at the receiver. The receiver cannot correlate properly with the far user\'s code because the near user\'s signal acts as high-power noise, drowning out the desired signal.<br><br>' .
                             '<b>Solution: Power Control</b><br>' .
                             'The base station continuously monitors the received power from each mobile. It sends commands to each mobile to adjust its transmit power:<br>' .
                             '• If received power is too high → command to decrease power.<br>' .
                             '• If received power is too low → command to increase power.<br>' .
                             'The goal is to make the received power from all users approximately equal at the base station receiver.<br><br>' .
                             'This is implemented as:<br>' .
                             '• <b>Open-loop power control:</b> Mobile estimates path loss based on received pilot signal strength and sets initial transmit power.<br>' .
                             '• <b>Closed-loop power control:</b> Base station sends frequent (e.g., 800 Hz) power adjustment commands (±1 dB) to fine-tune the mobile\'s power.<br><br>' .
                             'Effective power control is critical for CDMA system capacity and performance.',
                'solution_has_diagram' => false,
                'notes' => 'Without power control, a CDMA cell\'s capacity would be limited by the strongest (nearest) user. Power control allows the system to support many users at different distances. This is a unique challenge for CDMA not faced by FDMA or TDMA systems.',
                'formulas' => [
                    'Received Power ∝ Transmit Power / Distanceⁿ (n = path loss exponent, typically 2-4)',
                    'Target Received Power: P<sub>rx,target</sub> = Noise Floor + Required SNR'
                ]
            ]
        ]
    ]
];

// Include the viewer module
// include '../question_with_solution_viewer.php';
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/question_with_solution_viewer.php';
?>