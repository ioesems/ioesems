<?php
// Include the viewer/template which contains the header, navigation, styles, and footer scripts.
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/detailed_note_viewer.php';
?>



<!-- Chapter 1 -->
<div id="chapter_1">
    <h2>Chapter 1: Introduction to Data Communication</h2>

    <div class="topic-card" id="1-1">
        <h3>1.1 Analog Data Communication, Data Representation, Data Flows</h3>
        <p>Data is the entity which conveys meaning based on agreed rules or communication protocols. It represents the
            information we want to send. For example, the binary sequence "01000001" has no meaning unless both sender
            and receiver agree it represents the ASCII character 'A'.</p>

        <div class="definition">
            <strong>Analog Data:</strong> Information that has continuous (infinite) values within a time interval.
            Examples include sound waves and analog clock movements.
        </div>

        <div class="definition">
            <strong>Digital Data:</strong> Information that has a finite number of values within a certain time period.
            Examples include digital clocks and computer memory storage.
        </div>

        <p><strong>Data Representation:</strong> Information today comes in different forms:</p>
        <ul>
            <li><strong>Text:</strong> Represented as bits or sequences of bits using encoding schemes like ASCII or
                Unicode.</li>
            <li><strong>Numbers:</strong> Represented by bit patterns to simplify mathematical operations.</li>
            <li><strong>Images:</strong> Composed of a matrix of pixels, where each pixel is assigned a bit pattern.
            </li>
            <li><strong>Audio:</strong> Refers to the recording of sound.</li>
            <li><strong>Video:</strong> Refers to broadcasting pictures or movies, either as a continuous entity or a
                combination of images arranged to convey motion.</li>
        </ul>

        <p><strong>Data Flow (Transmission Modes):</strong></p>
        <ul>
            <li><strong>Simplex Mode:</strong> Unidirectional communication. Example: Keyboard (only sends) or Monitor
                (only receives).</li>
            <li><strong>Half-Duplex Mode:</strong> Bidirectional but not simultaneous. Example: Walkie-talkie.</li>
            <li><strong>Full-Duplex Mode:</strong> Simultaneous bidirectional communication. Example: Telephone
                conversation.</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig1/AS:903533083209728@1592495699390/Types-of-data-flow.png"
            alt="Data Flow Transmission Modes">
        <div class="image-caption">Figure: Simplex, Half-duplex, and Full-duplex transmission modes</div>
    </div>

    <div class="topic-card" id="1-2">
        <h3>1.2 Evolution of Data Communication</h3>
        <p>Data communication has evolved from simple analog systems to complex digital networks. Early systems used
            analog signals for voice communication over copper wires. The development of digital technology enabled more
            efficient, reliable, and secure data transmission.</p>
        <p>Key milestones include:</p>
        <ul>
            <li>Telegraph systems (19th century)</li>
            <li>Telephone networks (late 19th century)</li>
            <li>Development of digital computers (mid-20th century)</li>
            <li>ARPANET and the birth of the Internet (1960s-1970s)</li>
            <li>Standardization with OSI model and TCP/IP (1980s)</li>
            <li>Wireless revolution and mobile data (1990s-present)</li>
        </ul>

        <img src="https://www.researchgate.net/publication/348509465/figure/fig1/AS:980397246992385@1610685384750/Evolution-of-data-communication.png"
            alt="Evolution of Data Communication">
        <div class="image-caption">Figure: Evolution of data communication technologies</div>
    </div>

    <div class="topic-card" id="1-3">
        <h3>1.3 Communication Model and Data Communication Model</h3>
        <p>A data communications system consists of five components:</p>
        <ol>
            <li><strong>Message:</strong> The information (data) to be communicated (text, numbers, pictures, audio, and
                video).</li>
            <li><strong>Sender:</strong> The device that sends the data message (computer, workstation, telephone
                handset, video camera, and so on).</li>
            <li><strong>Receiver:</strong> The device that receives the message (computer, workstation, telephone
                handset, television, and so on).</li>
            <li><strong>Transmission medium:</strong> The physical path by which a message travels from sender to
                receiver (twisted-pair wire, coaxial cable, fiber-optic cable, and radio waves).</li>
            <li><strong>Protocol:</strong> A set of rules that govern data communications. It represents an agreement
                between the communicating devices.</li>
        </ol>

        <p><strong>Analog Communication System Components:</strong></p>
        <ul>
            <li><strong>Input Transducer:</strong> Converts information into electrical energy.</li>
            <li><strong>Transmitter:</strong> Converts electrical signal for channel transmission (performs modulation).
            </li>
            <li><strong>Communication Channel:</strong> Medium for signal transmission.</li>
            <li><strong>Noise and Distortion:</strong> External signals combining with message signal.</li>
            <li><strong>Receiver:</strong> Extracts information from received signal (performs demodulation).</li>
            <li><strong>Output Transducer:</strong> Converts electrical energy back to original signal (speakers,
                motors, LEDs).</li>
        </ul>

        <img src="https://www.electrical4u.com/wp-content/uploads/2013/10/data-communication-system-block-diagram.png"
            alt="Data Communication Model">
        <div class="image-caption">Figure: Basic data communication system model</div>
    </div>

    <div class="topic-card" id="1-4">
        <h3>1.4 Networks (LAN, WAN), Simplified Network Architecture, OSI Model</h3>
        <p><strong>Computer Network:</strong> A system connecting multiple computers to share information and resources.
        </p>

        <p><strong>Types of Networks:</strong></p>
        <ul>
            <li><strong>PAN (Personal Area Network):</strong> Connects devices within a short range around one person
                (smartphones, tablets, wearables).</li>
            <li><strong>LAN (Local Area Network):</strong> Connects computers within a limited area (office, building).
            </li>
            <li><strong>CAN (Campus Area Network):</strong> Larger than LAN but smaller than MAN (school or college
                campus).</li>
            <li><strong>MAN (Metropolitan Area Network):</strong> Connects computers over a city or metropolitan area.
            </li>
            <li><strong>WAN (Wide Area Network):</strong> Connects computers over large geographical distances
                (Internet).</li>
        </ul>

        <p><strong>Simplified Network Architecture Components:</strong></p>
        <ul>
            <li><strong>Computers (Workstations):</strong> End-user devices connected via switch.</li>
            <li><strong>Switch:</strong> Central device connecting computers in LAN (Layer 2 of OSI).</li>
            <li><strong>Server:</strong> Handles services like file sharing, print services, authentication.</li>
            <li><strong>Printer:</strong> Often connected to server for print job management.</li>
            <li><strong>Router:</strong> Connects internal LAN to Internet (Layer 3 of OSI).</li>
        </ul>

        <p><strong>OSI Model (7 Layers):</strong></p>
        <ol>
            <li><strong>Physical Layer:</strong> Actual physical connection, bit synchronization, transmission rate,
                physical topologies.</li>
            <li><strong>Data Link Layer:</strong> Error-free data transfer between nodes, framing, physical addressing
                (MAC), flow control.</li>
            <li><strong>Network Layer:</strong> Data transmission between hosts in different networks, routing, logical
                addressing (IP).</li>
            <li><strong>Transport Layer:</strong> Services to application layer, takes services from network layer,
                segmentation and reassembly, connection-oriented/connectionless service.</li>
            <li><strong>Session Layer:</strong> Establishment, management, and termination of sessions between devices,
                synchronization.</li>
            <li><strong>Presentation Layer:</strong> Translation, encryption/decryption, compression.</li>
            <li><strong>Application Layer:</strong> Interface for applications to access network, services like NVT,
                FTAM, mail services, directory services.</li>
        </ol>

        <img src="https://www.cloudflare.com/img/learning/network-layer/osi-model/osi-model-7-layers.png"
            alt="OSI Model">
        <div class="image-caption">Figure: The 7-layer OSI model</div>
    </div>

    <div class="topic-card" id="1-5">
        <h3>1.5 Data Communication and Networking for Today's Enterprise</h3>
        <p>Modern enterprises rely heavily on data communication and networking for their operations:</p>

        <p><strong>1. Internal Communication:</strong> Backbone of business operations using email, instant messaging,
            voice calls, and collaborative platforms (Microsoft Teams, Slack).</p>

        <p><strong>2. Cloud Computing & Remote Access:</strong> Essential for flexible work environments and distributed
            teams. Enables connection to cloud platforms (Google Workspace, Microsoft Azure, AWS).</p>

        <p><strong>3. Data Storage & Sharing:</strong> Supports centralized data storage and fast file sharing for
            smooth collaboration and secure access to business information.</p>

        <p><strong>4. Real-time Applications:</strong> Networks ensure low-latency connections for VoIP and video calls,
            enabling smooth communication for meetings and customer support.</p>

        <p><strong>5. IoT & Automation:</strong> Networking connects IoT devices (sensors, smart systems) enabling
            automation, monitoring, and improved efficiency in business processes.</p>

        <img src="https://www.cisco.com/c/dam/en_us/solutions/enterprise-networks/images/enterprise-network-architecture-diagram.png"
            alt="Enterprise Network">
        <div class="image-caption">Figure: Modern enterprise network architecture</div>
    </div>
</div>

<!-- Chapter 2 -->
<div id="chapter_">
    <h2>Chapter 2: Data Communication Fundamentals</h2>

    <div class="topic-card" id="2-1">
        <h3>2.1 Analog and Digital Data</h3>
        <p><strong>Analog Data:</strong> Information represented by continuous signals that can take any value within a
            range. Analog data uses values that change very smoothly over time.</p>
        <p><em>Examples:</em> Sound waves, analog clock (smoothly moving seconds hand), temperature sensors, microphone
            output.</p>

        <p><strong>Digital Data:</strong> Information represented by discrete values, typically binary (0s and 1s).
            Digital data jumps from one value to another in a step-by-step sequence.</p>
        <p><em>Examples:</em> Digital clock (jumps between seconds), computer memory storage, digital images.</p>

        <div class="comparison-table">
            <table>
                <tr>
                    <th>Characteristic</th>
                    <th>Analog Data</th>
                    <th>Digital Data</th>
                </tr>
                <tr>
                    <td>Values</td>
                    <td>Continuous, infinite values</td>
                    <td>Discrete, finite values</td>
                </tr>
                <tr>
                    <td>Representation</td>
                    <td>Smoothly varying signals</td>
                    <td>Step-by-step sequence</td>
                </tr>
                <tr>
                    <td>Examples</td>
                    <td>Sound, analog clock, temperature</td>
                    <td>Digital clock, computer data</td>
                </tr>
                <tr>
                    <td>Noise Immunity</td>
                    <td>Poor</td>
                    <td>Good</td>
                </tr>
            </table>
        </div>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig2/AS:903533083217920@1592495699462/Analog-vs-Digital-Signal.png"
            alt="Analog vs Digital Data">
        <div class="image-caption">Figure: Comparison between analog and digital data</div>
    </div>

    <div class="topic-card" id="2-2">
        <h3>2.2 Analog Signals, Periodic and Aperiodic Signals</h3>
        <p><strong>Signal:</strong> A function representing the variation of a physical quantity with respect to another
            parameter (usually time). Signals are electrical, electronic, or optical representations of data.</p>

        <p><strong>Analog Signal:</strong> A continuous signal where one time-varying quantity represents another
            time-based variable. When plotted on a voltage vs. time graph, it produces a smooth and continuous curve.
        </p>

        <p><strong>Periodic Signal:</strong> A signal that repeats itself after a specific interval of time (period T).
            Mathematically: x(t) = x(t + KT₀) for all integer K and positive value T₀.</p>
        <p><em>Examples:</em> Sine waves, cosine waves, square waves.</p>

        <p><strong>Aperiodic (Non-periodic) Signal:</strong> A signal that does not repeat itself after any specific
            interval. These are often random signals that cannot be represented by simple mathematical equations.</p>
        <p><em>Examples:</em> Sound signals from radio, noise signals.</p>

        <p><strong>Special Types of Signals:</strong></p>
        <ul>
            <li><strong>Harmonic Signal:</strong> x(t) = A cos(2πft + θ)</li>
            <li><strong>Unit Step Function:</strong> u(t) = 1 for t ≥ 0, 0 for t < 0</li>
            <li><strong>Signum Function:</strong> sgn(t) = 1 for t > 0, -1 for t < 0, 0 for t=0</li>
            <li><strong>Impulse Function:</strong> Mathematical model for phenomena occurring in very short periods.
            </li>
            <li><strong>Sinc Signal:</strong> sinc(t) = sin(πt)/πt for t ≠ 0, 1 for t = 0</li>
            <li><strong>Rectangular Signal:</strong> Produces a rectangular pulse with specific width and height.</li>
        </ul>

        <img src="https://www.gaussianwaves.com/gaussianwaves/wp-content/uploads/2013/11/Periodic_and_aperiodic_signals.png"
            alt="Periodic and Aperiodic Signals">
        <div class="image-caption">Figure: Examples of periodic and aperiodic signals</div>
    </div>

    <div class="topic-card" id="2-3">
        <h3>2.3 Fourier Series and Fourier Transform</h3>
        <p><strong>Fourier Series:</strong> A mathematical representation that expresses any periodic signal as an
            infinite sum of sine and cosine functions (or complex exponentials). Developed by Jean-Baptiste Joseph
            Fourier.</p>

        <p>The Fourier series F(x) is represented as:<br>
            F(x) = a/2 + a₁cos(x) + b₁sin(x) + a₂cos(2x) + b₂sin(2x) + ... + aₙcos(nx) + bₙsin(nx) + ...</p>

        <p><strong>Dirichlet Conditions for Fourier Series:</strong> For a periodic function to be represented as a
            convergent Fourier series, it must:</p>
        <ol>
            <li>Have a finite number of maxima and minima over its time period.</li>
            <li>Have a finite number of discontinuities over its time period.</li>
            <li>Be absolutely integrable over its time period.</li>
        </ol>

        <p><strong>Fourier Transform:</strong> An extension of Fourier series to non-periodic (aperiodic) signals. It
            transforms signals between time domain and frequency domain.</p>

        <p>While Fourier series is applicable only to periodic signals and produces a discrete spectrum, Fourier
            transform can handle aperiodic signals and produces a continuous spectrum.</p>

        <p><strong>Properties of Fourier Transform:</strong></p>
        <ul>
            <li>Linearity</li>
            <li>Time shifting</li>
            <li>Frequency shifting</li>
            <li>Scaling</li>
            <li>Convolution</li>
            <li>Differentiation</li>
            <li>Integration</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Wei-Chang-32/publication/333585354/figure/fig1/AS:766359978946560@1559769193470/Fourier-transform-of-a-signal.png"
            alt="Fourier Transform">
        <div class="image-caption">Figure: Fourier transform converting a time-domain signal to frequency domain</div>
    </div>

    <div class="topic-card" id="2-4">
        <h3>2.4 Analog and Digital Transmission, Transmission Mode, Transmission Impairments</h3>
        <p><strong>Analog Transmission:</strong> Transmission of analog signals without regard to their content. Can be
            used to transmit analog or digital data. Analog transmission of digital data requires modulation.</p>

        <p><strong>Digital Transmission:</strong> Transmission of digital signals (discrete values). Requires digital
            data to be transmitted as digital signals. Generally more robust against noise.</p>

        <p><strong>Transmission Modes:</strong> (Also covered in Chapter 1)</p>
        <ul>
            <li>Simplex: One direction only</li>
            <li>Half-duplex: Both directions, but not simultaneously</li>
            <li>Full-duplex: Both directions simultaneously</li>
        </ul>

        <p><strong>Transmission Impairments:</strong> Factors that degrade signal quality during transmission:</p>
        <ol>
            <li><strong>Attenuation:</strong> Loss of signal strength as it propagates through the medium. Can be
                compensated by amplifiers or repeaters.</li>
            <li><strong>Distortion:</strong> Change in the shape of the signal due to different frequency components
                traveling at different speeds (dispersion).</li>
            <li><strong>Noise:</strong> Unwanted signals interfering with the original signal. Types include thermal
                noise, intermodulation noise, crosstalk, and impulse noise.</li>
        </ol>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig3/AS:903533083217922@1592495699526/Transmission-Impairments.png"
            alt="Transmission Impairments">
        <div class="image-caption">Figure: Types of transmission impairments affecting signal quality</div>
    </div>

    <div class="topic-card" id="2-5">
        <h3>2.5 Data Rate Limits, Nyquist and Shannon Formulas</h3>
        <p><strong>Nyquist Bandwidth Formula:</strong> For a noiseless channel, the maximum data rate is determined by
            bandwidth and number of signal levels.</p>
        <p>C = 2B log₂M</p>
        <p>Where:<br>
            C = Channel capacity (bits per second)<br>
            B = Bandwidth (Hz)<br>
            M = Number of signal levels</p>

        <p><strong>Shannon Capacity Formula:</strong> For a noisy channel, the maximum data rate is determined by
            bandwidth and signal-to-noise ratio.</p>
        <p>C = B log₂(1 + SNR)</p>
        <p>Where:<br>
            C = Channel capacity (bits per second)<br>
            B = Bandwidth (Hz)<br>
            SNR = Signal-to-Noise Ratio</p>

        <p>The Shannon formula gives the theoretical maximum data rate for a given bandwidth and noise level. In
            practice, actual data rates are lower due to various implementation limitations.</p>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig4/AS:903533083217923@1592495699580/Nyquist-vs-Shannon.png"
            alt="Nyquist vs Shannon">
        <div class="image-caption">Figure: Comparison between Nyquist and Shannon capacity formulas</div>
    </div>

    <div class="topic-card" id="2-6">
        <h3>2.6 Network Performance Metrics</h3>
        <p>Key metrics for evaluating network performance:</p>

        <p><strong>Bandwidth:</strong> The maximum data transfer rate of a network or Internet connection. Measured in
            bits per second (bps), typically Mbps or Gbps. Represents the capacity of the communication channel.</p>

        <p><strong>Throughput:</strong> The actual rate at which data is successfully transferred over a network.
            Usually lower than bandwidth due to protocol overhead, network congestion, and other factors.</p>

        <p><strong>Latency (Delay):</strong> The time it takes for a packet to travel from source to destination.
            Includes propagation delay, transmission delay, processing delay, and queuing delay. Critical for real-time
            applications.</p>

        <p><strong>Jitter:</strong> The variation in latency over time. High jitter can cause problems for real-time
            applications like VoIP and video conferencing, as packets may arrive at irregular intervals.</p>

        <p><strong>Other Metrics:</strong></p>
        <ul>
            <li><strong>Packet Loss:</strong> Percentage of packets that fail to reach their destination.</li>
            <li><strong>Error Rate:</strong> Number of corrupted bits divided by total number of bits sent.</li>
            <li><strong>Availability:</strong> Percentage of time the network is operational.</li>
            <li><strong>Reliability:</strong> Ability of the network to deliver packets without loss or corruption.</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig5/AS:903533083217924@1592495699634/Network-Performance-Metrics.png"
            alt="Network Performance Metrics">
        <div class="image-caption">Figure: Key network performance metrics visualization</div>
    </div>
</div>

<!-- Chapter 3 -->
<div id="chapter_3">
    <h2>Chapter 3: Transmission Media and Data Compression</h2>

    <div class="topic-card" id="3-1">
        <h3>3.1 Guided Transmission Media</h3>
        <p>Guided transmission media (bounded media) provide a physical path for signal transmission. They include:</p>

        <p><strong>Twisted Pair Cable:</strong> Consists of pairs of insulated copper wires twisted together to reduce
            electromagnetic interference. Two types:</p>
        <ul>
            <li><strong>UTP (Unshielded Twisted Pair):</strong> Common in Ethernet installations. Categories: Cat 3 (10
                Mbps), Cat 5 (100 Mbps), Cat 6 (1 Gbps), etc.</li>
            <li><strong>STP (Shielded Twisted Pair):</strong> Has additional shielding to reduce interference. Used in
                telephone networks and environments with high EMI.</li>
        </ul>

        <p><strong>Coaxial Cable:</strong> Copper cable with better shielding than twisted pair. Consists of central
            copper conductor, insulating material, braided mesh, and protective sheath. Used in cable TV and older
            Ethernet networks.</p>

        <p><strong>Optical Fiber:</strong> Thin glass or plastic threads that transmit data using light waves.
            Components: core, cladding, buffer coating. Types:</p>
        <ul>
            <li><strong>Single-mode:</strong> Narrow core, uses laser light source, low dispersion, long distances (up
                to 100 km).</li>
            <li><strong>Multi-mode step index:</strong> Wider core, uses LED source, higher dispersion, shorter
                distances.</li>
            <li><strong>Multi-mode graded index:</strong> Core with varying refractive index, reduces modal dispersion.
            </li>
        </ul>

        <div class="comparison-table">
            <table>
                <tr>
                    <th>Characteristic</th>
                    <th>Twisted Pair</th>
                    <th>Coaxial Cable</th>
                    <th>Optical Fiber</th>
                </tr>
                <tr>
                    <td>Bandwidth</td>
                    <td>Moderate</td>
                    <td>High</td>
                    <td>Very High</td>
                </tr>
                <tr>
                    <td>Distance</td>
                    <td>Short</td>
                    <td>Moderate</td>
                    <td>Very Long</td>
                </tr>
                <tr>
                    <td>EMI Immunity</td>
                    <td>Poor (UTP), Moderate (STP)</td>
                    <td>Good</td>
                    <td>Excellent</td>
                </tr>
                <tr>
                    <td>Security</td>
                    <td>Poor</td>
                    <td>Moderate</td>
                    <td>Excellent</td>
                </tr>
                <tr>
                    <td>Cost</td>
                    <td>Low</td>
                    <td>Moderate</td>
                    <td>High</td>
                </tr>
            </table>
        </div>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig6/AS:903533083217925@1592495699690/Guided-Media.png"
            alt="Guided Transmission Media">
        <div class="image-caption">Figure: Different types of guided transmission media</div>
    </div>

    <div class="topic-card" id="3-2">
        <h3>3.2 Unguided Transmission Media</h3>
        <p>Unguided transmission media (wireless) transmit signals through air without physical conductors. They
            include:</p>

        <p><strong>Radio Waves:</strong> Electromagnetic waves with frequencies between 3 KHz and 1 GHz. Omnidirectional
            propagation. Applications: AM/FM radio, television, cordless phones.</p>

        <p><strong>Microwaves:</strong> Electromagnetic waves with frequencies between 1 GHz and 300 GHz.
            Unidirectional, line-of-sight propagation. Two types:</p>
        <ul>
            <li><strong>Terrestrial Microwave:</strong> Ground-based transmission between towers. Used for long-distance
                telephone and data transmission.</li>
            <li><strong>Satellite Microwave:</strong> Communication via satellites orbiting Earth. Enables global
                communication.</li>
        </ul>

        <p><strong>Infrared:</strong> Waves with frequencies between 300 GHz and 400 THz. Short-distance, line-of-sight
            communication. Cannot penetrate walls. Applications: remote controls, short-range data transfer.</p>

        <div class="comparison-table">
            <table>
                <tr>
                    <th>Characteristic</th>
                    <th>Radio Waves</th>
                    <th>Microwaves</th>
                    <th>Infrared</th>
                </tr>
                <tr>
                    <td>Frequency Range</td>
                    <td>3 KHz - 1 GHz</td>
                    <td>1 GHz - 300 GHz</td>
                    <td>300 GHz - 400 THz</td>
                </tr>
                <tr>
                    <td>Propagation</td>
                    <td>Omnidirectional</td>
                    <td>Directional, Line-of-sight</td>
                    <td>Line-of-sight</td>
                </tr>
                <tr>
                    <td>Distance</td>
                    <td>Long</td>
                    <td>Long (terrestrial), Global (satellite)</td>
                    <td>Short</td>
                </tr>
                <tr>
                    <td>Penetration</td>
                    <td>Can penetrate walls</td>
                    <td>Cannot penetrate walls</td>
                    <td>Cannot penetrate walls</td>
                </tr>
                <tr>
                    <td>Applications</td>
                    <td>Radio, TV broadcasting</td>
                    <td>Satellite comms, radar</td>
                    <td>Remote controls, IrDA</td>
                </tr>
            </table>
        </div>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig7/AS:903533083217926@1592495699746/Unguided-Media.png"
            alt="Unguided Transmission Media">
        <div class="image-caption">Figure: Different types of unguided transmission media</div>
    </div>

    <div class="topic-card" id="3-3">
        <h3>3.3 Antenna Basics, Satellite Communication</h3>
        <p><strong>Antenna:</strong> A transducer that converts electrical power into electromagnetic waves
            (transmitting) and vice versa (receiving).</p>

        <p><strong>Antenna Parameters:</strong></p>
        <ul>
            <li><strong>Frequency:</strong> Rate of wave repetition (Hz).</li>
            <li><strong>Wavelength:</strong> Distance between consecutive wave peaks (λ = c/f).</li>
            <li><strong>Impedance Matching:</strong> Ensuring transmitter and receiver impedances match for maximum
                power transfer.</li>
            <li><strong>VSWR (Voltage Standing Wave Ratio):</strong> Indicates how well antenna is matched to
                transmission line (ideal = 1:1).</li>
            <li><strong>Bandwidth:</strong> Range of frequencies over which antenna can operate effectively.</li>
            <li><strong>Radiation Pattern:</strong> Graphical representation of how antenna radiates energy in different
                directions.</li>
            <li><strong>Directivity:</strong> Measure of how focused antenna's radiation is in a particular direction.
            </li>
            <li><strong>Gain:</strong> Ratio of radiation intensity in a given direction to that of isotropic radiator.
            </li>
        </ul>

        <p><strong>Satellite Communication:</strong> Uses orbiting artificial satellites as relay stations to receive,
            amplify, and retransmit signals between ground stations.</p>

        <p><strong>Satellite Orbits:</strong></p>
        <ul>
            <li><strong>GEO (Geostationary Earth Orbit):</strong> ~35,786 km altitude, fixed position relative to Earth,
                24-hour orbital period. Used for weather forecasting, TV broadcasting.</li>
            <li><strong>MEO (Medium Earth Orbit):</strong> ~2,000-20,000 km altitude, 2-12 hour orbital period. Used for
                GPS, navigation systems.</li>
            <li><strong>LEO (Low Earth Orbit):</strong> ~160-2,000 km altitude, 90-120 minute orbital period. Used for
                Earth observation, Starlink broadband.</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig8/AS:903533083217927@1592495699802/Satellite-Orbits.png"
            alt="Satellite Orbits">
        <div class="image-caption">Figure: Different satellite orbits (GEO, MEO, LEO)</div>
    </div>

    <div class="topic-card" id="3-4">
        <h3>3.4 Wireless Propagation</h3>
        <p>Three main modes of radio wave propagation:</p>

        <p><strong>Ground Wave Propagation:</strong> Waves travel along Earth's surface. Effective at low frequencies
            (30 kHz to 2 MHz). Used for AM radio broadcasting, maritime communication. Range: 100-1000 km.</p>

        <p><strong>Sky Wave Propagation:</strong> Waves reflected by ionosphere layer. Used in HF band (3-30 MHz).
            Long-range communication (300-3000+ km). Applications: international broadcasting, military communication.
        </p>

        <p><strong>Line-of-Sight (LOS) Propagation:</strong> Waves travel in straight line from transmitter to receiver.
            Requires unobstructed path. Works in VHF, UHF, SHF, EHF bands (>30 MHz). Applications: TV broadcasting,
            cellular telecom, radar.</p>

        <div class="comparison-table">
            <table>
                <tr>
                    <th>Feature</th>
                    <th>Ground Wave</th>
                    <th>Sky Wave</th>
                    <th>Line-of-Sight</th>
                </tr>
                <tr>
                    <td>Frequency Range</td>
                    <td>30 kHz - 2 MHz</td>
                    <td>3 MHz - 30 MHz</td>
                    <td>> 30 MHz</td>
                </tr>
                <tr>
                    <td>Distance</td>
                    <td>100 - 500 km</td>
                    <td>500 - 3000+ km</td>
                    <td>Up to 70 km (terrestrial)</td>
                </tr>
                <tr>
                    <td>Medium Interaction</td>
                    <td>Follows Earth's surface</td>
                    <td>Reflected by ionosphere</td>
                    <td>Straight-line</td>
                </tr>
                <tr>
                    <td>Main Use</td>
                    <td>AM radio, maritime</td>
                    <td>International radio, HF</td>
                    <td>TV, satellite, Wi-Fi</td>
                </tr>
            </table>
        </div>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig9/AS:903533083217928@1592495699858/Wireless-Propagation-Modes.png"
            alt="Wireless Propagation Modes">
        <div class="image-caption">Figure: Ground wave, sky wave, and line-of-sight propagation</div>
    </div>

    <div class="topic-card" id="3-5">
        <h3>3.5 Error Detection and Correction</h3>
        <p>Essential for ensuring data integrity during transmission over noisy channels.</p>

        <p><strong>Types of Errors:</strong></p>
        <ul>
            <li>Single-bit error: Only one bit corrupted</li>
            <li>Multiple-bit error: More than one bit corrupted</li>
            <li>Burst error: Consecutive bits corrupted</li>
        </ul>

        <p><strong>Error Detection Techniques:</strong></p>
        <ul>
            <li><strong>Parity Check:</strong> Adds extra bit to make number of 1s even (even parity) or odd (odd
                parity). Can detect single-bit errors.</li>
            <li><strong>Checksum:</strong> Divides data into segments, adds them, takes 1's complement. Receiver
                performs same operation to verify.</li>
            <li><strong>CRC (Cyclic Redundancy Check):</strong> Performs binary division using predetermined divisor,
                appends remainder to data. Most reliable method.</li>
        </ul>

        <p><strong>Error Correction Techniques:</strong></p>
        <ul>
            <li><strong>Hamming Code:</strong> Block code capable of detecting up to two simultaneous bit errors and
                correcting single-bit errors. Adds redundant bits at specific positions.</li>
            <li><strong>Backward Error Correction:</strong> Receiver requests retransmission when error detected.</li>
            <li><strong>Forward Error Correction:</strong> Receiver corrects errors using error-correcting codes without
                retransmission.</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig10/AS:903533083217929@1592495699914/Error-Detection-and-Correction.png"
            alt="Error Detection and Correction">
        <div class="image-caption">Figure: Error detection and correction techniques</div>
    </div>

    <div class="topic-card" id="3-6">
        <h3>3.6 Data Compression: Lossy and Lossless</h3>
        <p>Data compression reduces the number of bits needed to represent information, saving storage space and
            transmission bandwidth.</p>

        <p><strong>Lossless Compression:</strong> Allows exact reconstruction of original data. No information is lost.
            Used for text, program code, critical data.</p>
        <p><em>Techniques:</em> Run-length encoding, Lempel-Ziv-Welch (LZW), Huffman coding, Arithmetic encoding</p>
        <p><em>File Formats:</em> PNG, FLAC, ZIP, GIF</p>

        <p><strong>Lossy Compression:</strong> Discards some data during compression, typically imperceptible to humans.
            Used for audio, video, images where some quality loss is acceptable.</p>
        <p><em>Techniques:</em> Transform coding, Discrete Cosine Transform, Discrete Wavelet Transform</p>
        <p><em>File Formats:</em> JPEG, MP3, MP4, MPEG</p>

        <div class="comparison-table">
            <table>
                <tr>
                    <th>Feature</th>
                    <th>Lossless Compression</th>
                    <th>Lossy Compression</th>
                </tr>
                <tr>
                    <td>Data Recovery</td>
                    <td>Original data fully recreated</td>
                    <td>Original data cannot be fully recovered</td>
                </tr>
                <tr>
                    <td>Quality</td>
                    <td>No quality degradation</td>
                    <td>Some quality degradation</td>
                </tr>
                <tr>
                    <td>Compression Ratio</td>
                    <td>Lower</td>
                    <td>Higher</td>
                </tr>
                <tr>
                    <td>Applications</td>
                    <td>Text, code, critical data</td>
                    <td>Audio, video, images</td>
                </tr>
                <tr>
                    <td>Examples</td>
                    <td>PNG, FLAC, ZIP</td>
                    <td>JPEG, MP3, MP4</td>
                </tr>
            </table>
        </div>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig11/AS:903533083217930@1592495699970/Lossy-vs-Lossless-Compression.png"
            alt="Lossy vs Lossless Compression">
        <div class="image-caption">Figure: Comparison between lossy and lossless compression</div>
    </div>
</div>

<!-- Chapter 4 -->
<div id="chapter_4">
    <h2>Chapter 4: Signal Encoding Techniques</h2>

    <div class="topic-card" id="4-1">
        <h3>4.1 Digital Data to Digital Signal Encoding</h3>
        <p>Encoding is the process of converting digital data into digital signals for transmission. Various encoding
            schemes exist:</p>

        <p><strong>Unipolar Encoding:</strong> Uses only one voltage level (positive). Binary 1 encoded as positive
            voltage, binary 0 as zero voltage. Problems: DC component and synchronization issues.</p>

        <p><strong>Polar Encoding:</strong> Uses two voltage levels (positive and negative).</p>
        <ul>
            <li><strong>NRZ-L (Non-Return-to-Zero Level):</strong> Signal level depends on bit value (positive for 0,
                negative for 1, or vice versa).</li>
            <li><strong>NRZ-I (Non-Return-to-Zero Invert):</strong> Signal inversion represents binary 1, no change
                represents binary 0.</li>
            <li><strong>RZ (Return-to-Zero):</strong> Signal returns to zero in the middle of each bit interval. Uses
                three voltage levels.</li>
        </ul>

        <p><strong>Biphase Encoding:</strong> Signal changes at middle of bit interval.</p>
        <ul>
            <li><strong>Manchester:</strong> Negative-to-positive transition = binary 1, positive-to-negative transition
                = binary 0.</li>
            <li><strong>Differential Manchester:</strong> Transition at beginning of interval = binary 0, no transition
                = binary 1. Transition at middle used for synchronization.</li>
        </ul>

        <p><strong>Bipolar Encoding:</strong> Uses three voltage levels (positive, negative, zero).</p>
        <ul>
            <li><strong>AMI (Alternate Mark Inversion):</strong> Binary 0 = zero voltage, binary 1 = alternating
                positive and negative voltages.</li>
            <li><strong>B8ZS (Bipolar 8-Zero Substitution):</strong> Replaces eight consecutive zeros with a special
                pattern to maintain synchronization.</li>
            <li><strong>HDB3 (High-Density Bipolar 3):</strong> Replaces four consecutive zeros with a special pattern
                based on polarity of previous 1 and number of 1s since last substitution.</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig12/AS:903533083217931@1592495700026/Digital-Data-to-Digital-Signal-Encoding.png"
            alt="Digital Encoding Techniques">
        <div class="image-caption">Figure: Various digital data to digital signal encoding techniques</div>
    </div>
</div>

<!-- Chapter 5 -->
<div id="chapter_5">
    <h2>Chapter 5: Multiplexing and Switching</h2>

    <div class="topic-card" id="5-1">
        <h3>5.1 Introduction to Multiplexing</h3>
        <p>Multiplexing combines multiple signals into one signal over a shared medium to efficiently use bandwidth.</p>

        <p><strong>Types of Multiplexing:</strong></p>
        <ul>
            <li><strong>FDM (Frequency Division Multiplexing):</strong> Divides bandwidth into frequency bands, each
                assigned to a different signal.</li>
            <li><strong>WDM (Wavelength Division Multiplexing):</strong> Similar to FDM but used in optical fiber, where
                different wavelengths carry different signals.</li>
            <li><strong>TDM (Time Division Multiplexing):</strong> Divides time into slots, each signal gets a specific
                time slot for transmission.</li>
            <li><strong>CDM (Code Division Multiplexing):</strong> Uses unique codes to differentiate between signals
                transmitted simultaneously on same frequency.</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig13/AS:903533083217932@1592495700082/Multiplexing-Techniques.png"
            alt="Multiplexing Techniques">
        <div class="image-caption">Figure: Different multiplexing techniques (FDM, TDM, WDM, CDM)</div>
    </div>

    <div class="topic-card" id="5-2">
        <h3>5.2 Frequency Division Multiple Access (FDMA)</h3>
        <p>FDMA allocates different frequency sub-bands to different users. Each user has exclusive access to their
            assigned frequency band.</p>

        <p><strong>Characteristics:</strong></p>
        <ul>
            <li>Continuous transmission</li>
            <li>No synchronization required</li>
            <li>Uses duplexers since transmitter and receiver operate simultaneously</li>
            <li>Used in 1G systems like AMPS (Advanced Mobile Phone System)</li>
            <li>Frequency Division Duplexing (FDD) - different frequencies for uplink and downlink</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig14/AS:903533083217933@1592495700138/FDMA.png"
            alt="FDMA">
        <div class="image-caption">Figure: Frequency Division Multiple Access (FDMA)</div>
    </div>

    <div class="topic-card" id="5-3">
        <h3>5.3 Time Division Multiple Access (TDMA)</h3>
        <p>TDMA shares a single carrier frequency among multiple users by assigning non-overlapping time slots to each
            user.</p>

        <p><strong>Characteristics:</strong></p>
        <ul>
            <li>Discontinuous transmission (bursts)</li>
            <li>Lower battery consumption (transmitter can be turned off)</li>
            <li>Requires synchronization</li>
            <li>Uses Time Division Duplexing (TDD) - different time slots for transmission and reception</li>
            <li>Used in 2G systems like GSM</li>
        </ul>

        <p><strong>Synchronous vs Statistical TDMA:</strong></p>
        <ul>
            <li><strong>Synchronous TDMA:</strong> Fixed time slot allocation regardless of activity (inefficient if
                users are idle)</li>
            <li><strong>Statistical TDMA:</strong> Dynamic time slot allocation based on actual data transmission needs
                (more efficient)</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig15/AS:903533083217934@1592495700194/TDMA.png"
            alt="TDMA">
        <div class="image-caption">Figure: Time Division Multiple Access (TDMA)</div>
    </div>

    <div class="topic-card" id="5-4">
        <h3>5.4 Asymmetric Digital Subscriber Line (ADSL)</h3>
        <p>ADSL is a type of DSL technology that provides faster download speeds than upload speeds over existing copper
            telephone lines.</p>

        <p><strong>Characteristics:</strong></p>
        <ul>
            <li>Asymmetric bandwidth (higher downstream than upstream)</li>
            <li>Uses FDM to separate voice (0-4 kHz) and data (25 kHz - 1.1 MHz)</li>
            <li>Typical speeds: 1.5-8 Mbps downstream, 16-640 Kbps upstream</li>
            <li>Distance sensitive (performance degrades with distance from central office)</li>
            <li>Uses DMT (Discrete Multi-Tone) modulation</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig16/AS:903533083217935@1592495700250/ADSL.png"
            alt="ADSL">
        <div class="image-caption">Figure: Asymmetric Digital Subscriber Line (ADSL) technology</div>
    </div>

    <div class="topic-card" id="5-5">
        <h3>5.5 Spread Spectrum: DSSS, FHSS, CDMA</h3>
        <p>Spread spectrum techniques spread the signal over a wider bandwidth than necessary, providing resistance to
            interference and improved security.</p>

        <p><strong>DSSS (Direct Sequence Spread Spectrum):</strong> Multiplies original data with high-rate
            pseudo-random noise code. Used in IEEE 802.11b Wi-Fi, GPS, CDMA cellular networks.</p>

        <p><strong>FHSS (Frequency Hopping Spread Spectrum):</strong> Carrier frequency changes according to
            pseudo-random sequence. Used in Bluetooth, military communications.</p>
        <ul>
            <li><strong>Fast-FHSS:</strong> One data bit spread over multiple frequencies</li>
            <li><strong>Slow-FHSS:</strong> Multiple bits transmitted before frequency hop</li>
        </ul>

        <p><strong>CDMA (Code Division Multiple Access):</strong> Multiple users share same frequency band
            simultaneously, differentiated by unique codes. Each user's signal appears as noise to others.</p>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig17/AS:903533083217936@1592495700306/Spread-Spectrum.png"
            alt="Spread Spectrum">
        <div class="image-caption">Figure: Spread spectrum techniques (DSSS, FHSS, CDMA)</div>
    </div>

    <div class="topic-card" id="5-6">
        <h3>5.6 Introduction to Switched Communication Networks</h3>
        <p>Switched networks establish temporary connections between communicating devices. Two main approaches:</p>

        <p><strong>Connection-Oriented:</strong> Establishes a dedicated path before data transfer (circuit switching,
            virtual circuit packet switching). Guarantees bandwidth and order of delivery.</p>

        <p><strong>Connectionless:</strong> Each packet contains full addressing information and is routed independently
            (datagram packet switching). More flexible but no delivery guarantees.</p>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig18/AS:903533083217937@1592495700362/Switched-Networks.png"
            alt="Switched Networks">
        <div class="image-caption">Figure: Connection-oriented vs connectionless networks</div>
    </div>

    <div class="topic-card" id="5-7">
        <h3>5.7 Switching Devices</h3>
        <p>Devices that direct data packets between network devices:</p>

        <p><strong>Hub:</strong> Physical layer device that broadcasts data to all ports. No intelligence, causes
            collisions.</p>

        <p><strong>Switch:</strong> Data link layer device that forwards data only to intended recipient using MAC
            addresses. Reduces collisions, improves performance.</p>

        <p><strong>Router:</strong> Network layer device that routes packets between different networks using IP
            addresses. Maintains routing tables.</p>

        <p><strong>Gateway:</strong> Device that connects networks with different protocols, performing protocol
            conversion.</p>

        <div class="comparison-table">
            <table>
                <tr>
                    <th>Feature/Device</th>
                    <th>Hub</th>
                    <th>Switch</th>
                    <th>Router</th>
                </tr>
                <tr>
                    <td>OSI Layer</td>
                    <td>Layer 1 (Physical)</td>
                    <td>Layer 2 (Data Link)</td>
                    <td>Layer 3 (Network)</td>
                </tr>
                <tr>
                    <td>Function</td>
                    <td>Broadcasts to all devices</td>
                    <td>Forwards to specific MAC</td>
                    <td>Routes between networks</td>
                </tr>
                <tr>
                    <td>Intelligence</td>
                    <td>None</td>
                    <td>Medium (MAC filtering)</td>
                    <td>High (routing logic)</td>
                </tr>
                <tr>
                    <td>Security</td>
                    <td>None</td>
                    <td>Moderate (VLAN, port security)</td>
                    <td>High (ACLs, NAT, Firewall)</td>
                </tr>
            </table>
        </div>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig19/AS:903533083217938@1592495700418/Switching-Devices.png"
            alt="Switching Devices">
        <div class="image-caption">Figure: Network switching devices (hub, switch, router)</div>
    </div>

    <div class="topic-card" id="5-8">
        <h3>5.8 Circuit Switching and Message Switching</h3>
        <p><strong>Circuit Switching:</strong> Establishes a dedicated physical path between sender and receiver before
            communication begins. Path remains dedicated until connection is terminated.</p>
        <p><em>Advantages:</em> Guaranteed bandwidth, predictable performance</p>
        <p><em>Disadvantages:</em> Inefficient (channel unused when idle), long setup time, expensive</p>
        <p><em>Example:</em> Traditional telephone network</p>

        <p><strong>Message Switching:</strong> No dedicated path. Messages stored and forwarded at each node. Entire
            message received before forwarding (store-and-forward).</p>
        <p><em>Advantages:</em> Efficient channel usage, traffic congestion reduction, message prioritization</p>
        <p><em>Disadvantages:</em> Not suitable for interactive applications, requires large storage at nodes, delays
            due to store-and-forward</p>
        <p><em>Example:</em> Email systems</p>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig20/AS:903533083217939@1592495700474/Circuit-and-Message-Switching.png"
            alt="Circuit and Message Switching">
        <div class="image-caption">Figure: Circuit switching vs message switching</div>
    </div>

    <div class="topic-card" id="5-9">
        <h3>5.9 Packet Switching</h3>
        <p>Packet switching divides messages into smaller packets for transmission. Combines advantages of circuit and
            message switching.</p>

        <p><strong>Datagram Switching:</strong> Each packet (datagram) treated independently. Packets may take different
            paths and arrive out of order. Connectionless service.</p>

        <p><strong>Virtual Circuit Switching:</strong> Establishes logical path before data transfer. All packets follow
            same path and arrive in order. Connection-oriented service.</p>

        <div class="comparison-table">
            <table>
                <tr>
                    <th>Feature</th>
                    <th>Datagram Network</th>
                    <th>Virtual Circuit Network</th>
                </tr>
                <tr>
                    <td>Connection</td>
                    <td>Connectionless</td>
                    <td>Connection-oriented</td>
                </tr>
                <tr>
                    <td>Path</td>
                    <td>Each packet chooses own path</td>
                    <td>All packets follow same path</td>
                </tr>
                <tr>
                    <td>Order</td>
                    <td>Packets may arrive out of order</td>
                    <td>Packets arrive in order</td>
                </tr>
                <tr>
                    <td>Reliability</td>
                    <td>Less reliable</td>
                    <td>Highly reliable</td>
                </tr>
                <tr>
                    <td>Efficiency</td>
                    <td>High efficiency</td>
                    <td>Lower efficiency</td>
                </tr>
            </table>
        </div>

        <p><strong>Advantages of Packet Switching:</strong></p>
        <ul>
            <li>Cost-effective (no need for massive storage)</li>
            <li>Improved delay characteristics</li>
            <li>Packets can be rerouted if problems occur</li>
            <li>Multiple users can share same channel</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig21/AS:903533083217940@1592495700530/Packet-Switching.png"
            alt="Packet Switching">
        <div class="image-caption">Figure: Packet switching (datagram and virtual circuit)</div>
    </div>
</div>

<!-- Chapter 6 -->
<div id="chapter_6">
    <h2>Chapter 6: Cellular Wireless Communications and Latest Trends</h2>

    <div class="topic-card" id="6-1">
        <h3>6.1 Overview of 1G, 2G, 3G and 4G</h3>
        <p><strong>1G (First Generation):</strong> Analog cellular systems introduced in 1980s.</p>
        <p><em>Technologies:</em> AMPS, NMTS, TACS</p>
        <p><em>Features:</em> Voice only, FM modulation, FDMA, poor voice quality, limited security</p>

        <p><strong>2G (Second Generation):</strong> Digital systems introduced in 1990s.</p>
        <p><em>Technologies:</em> GSM (TDMA), CDMA</p>
        <p><em>Features:</em> Digital switching, SMS support, encrypted voice, roaming capability</p>

        <p><strong>2.5G/2.75G:</strong> Enhancements to support higher data rates.</p>
        <p><em>Technologies:</em> GPRS (171 Kbps), EDGE (473 Kbps), CDMA2000 (384 Kbps)</p>

        <p><strong>3G (Third Generation):</strong> Introduced in early 2000s with higher data rates supporting
            multimedia.</p>
        <p><em>Technologies:</em> UMTS (384 Kbps), supporting video calling, mobile internet, apps</p>

        <p><strong>3.5G/3.75G:</strong> Further enhancements to 3G.</p>
        <p><em>Technologies:</em> HSDPA/HSUPA (2 Mbps), HSPA+ (evolving to LTE)</p>

        <p><strong>4G (Fourth Generation):</strong> IP-based networks with much higher data rates.</p>
        <p><em>Technologies:</em> LTE, LTE Advanced (up to 1 Gbps)</p>
        <p><em>Features:</em> VoLTE, reduced latency, HD video streaming, high-quality gaming</p>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig22/AS:903533083217941@1592495700586/Cellular-Generations.png"
            alt="Cellular Generations">
        <div class="image-caption">Figure: Evolution from 1G to 4G cellular technologies</div>
    </div>

    <div class="topic-card" id="6-2">
        <h3>6.2 Cellular Technology Fundamentals</h3>
        <p><strong>Cell:</strong> Hexagonal area covered by a low-power transmitter (base station). Hexagonal shape used
            because it most closely approximates a circle while allowing complete coverage without gaps.</p>

        <p><strong>Cluster:</strong> Group of cells that together use all available channels. Cluster can be repeated to
            cover larger areas.</p>

        <p><strong>Frequency Reuse:</strong> Allocation and reuse of channels throughout coverage area. Same frequencies
            can be reused in non-adjacent cells to increase capacity.</p>
        <p>Frequency Reuse Factor = 1/N (where N is cluster size)</p>

        <p><strong>Interference:</strong></p>
        <ul>
            <li><strong>Co-channel Interference (CCI):</strong> Interference from cells using same frequency. Minimized
                by proper cell placement and frequency planning.</li>
            <li><strong>Adjacent Channel Interference (ACI):</strong> Interference from neighboring frequencies. Reduced
                by careful filtering and channel allocation.</li>
        </ul>

        <p><strong>Handoff (Handover):</strong> Process of transferring ongoing call/data session from one base station
            to another as user moves.</p>
        <ul>
            <li><strong>Intrasystem Handoff:</strong> Between cells within same system</li>
            <li><strong>Intersystem Handoff:</strong> Between different systems (different MSCs)</li>
        </ul>

        <p><strong>Handoff Strategies:</strong></p>
        <ul>
            <li><strong>Guard Channel Concept:</strong> Reserve channels exclusively for handoff requests</li>
            <li><strong>Queuing:</strong> Queue handoff requests when no channels available</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig23/AS:903533083217942@1592495700642/Cellular-Fundamentals.png"
            alt="Cellular Fundamentals">
        <div class="image-caption">Figure: Cellular concepts (cells, clusters, frequency reuse)</div>
    </div>

    <div class="topic-card" id="6-3">
        <h3>6.3 Introduction to 5G, SDN, IoT, Cloud Computing</h3>
        <p><strong>5G (Fifth Generation):</strong> Next-generation cellular technology offering ultra-fast speeds, low
            latency, and massive device connectivity.</p>
        <p><em>Key Features:</em></p>
        <ul>
            <li>Ultra-fast mobile internet (up to 20 Gbps downlink)</li>
            <li>Ultra-low latency (4ms vs 20ms for LTE)</li>
            <li>Supports up to 1 million devices per square kilometer</li>
            <li>Optimized for IoT and lower power consumption</li>
        </ul>

        <p><strong>Key 5G Technologies:</strong></p>
        <ul>
            <li><strong>Millimeter Waves (mmWave):</strong> High-frequency bands (24-100 GHz) for high data rates</li>
            <li><strong>Massive MIMO:</strong> Multiple antennas at transmitter and receiver to increase capacity</li>
            <li><strong>Beamforming:</strong> Focusing radio signals in specific directions rather than broadcasting
            </li>
            <li><strong>Small Cells:</strong> Low-power base stations for dense urban areas</li>
        </ul>

        <p><strong>SDN (Software Defined Networking):</strong> Network architecture that separates control plane from
            data plane, enabling centralized network management and programmability.</p>

        <p><strong>IoT (Internet of Things) Communication:</strong> Exchange of data between smart devices.</p>
        <ul>
            <li><strong>Types:</strong> H2M (Human to Machine), M2M (Machine to Machine), M2H (Machine to Human), M2C
                (Machine to Cloud)</li>
            <li><strong>Technologies:</strong> Short-range (Bluetooth, Zigbee, Wi-Fi), Long-range (Cellular, LoRaWAN,
                NB-IoT)</li>
        </ul>

        <p><strong>Cloud Computing and Virtualization:</strong> Delivery of computing services over the Internet.
            Virtualization creates virtual versions of computing resources.</p>
        <ul>
            <li>Enables on-demand access to computing resources</li>
            <li>Reduces need for on-premises infrastructure</li>
            <li>Supports scalability and flexibility</li>
        </ul>

        <img src="https://www.researchgate.net/profile/Mohammad-Azim-8/publication/342578351/figure/fig24/AS:903533083217943@1592495700698/5G-and-Emerging-Technologies.png"
            alt="5G and Emerging Technologies">
        <div class="image-caption">Figure: 5G and emerging technologies (SDN, IoT, Cloud Computing)</div>
    </div>
</div>