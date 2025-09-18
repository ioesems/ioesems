<?php
// Include the viewer/template which contains the header, navigation, styles, and footer scripts.
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/detailed_note_viewer.php';
?>


<!-- <==================chapter 1 start ==================> -->
    <div id="chapter_1" class="chapter-container">
        <h1 class="chapter-title">Chapter 1: Introduction to Data Communication</h1>
        
        <div class="navigation">
            <ul class="nav-list">
                <li class="nav-item" onclick="document.getElementById('section1_1').scrollIntoView({behavior: 'smooth'})">1.1 Analog data communication, data representation, data flows</li>
                <li class="nav-item" onclick="document.getElementById('section1_2').scrollIntoView({behavior: 'smooth'})">1.2 Evolution of data communication</li>
                <li class="nav-item" onclick="document.getElementById('section1_3').scrollIntoView({behavior: 'smooth'})">1.3 A communication model, data communication model</li>
                <li class="nav-item" onclick="document.getElementById('section1_4').scrollIntoView({behavior: 'smooth'})">1.4 Networks (LAN, WAN), simplified network architecture, the OSI model</li>
                <li class="nav-item" onclick="document.getElementById('section1_5').scrollIntoView({behavior: 'smooth'})">1.5 Data communication and networking for today enterprise</li>
            </ul>
        </div>
        
        <!-- Section 1.1 -->
        <div id="section1_1" class="section">
            <h2 class="section-title">1.1 Analog data communication, data representation, data flows</h2>
            
            <div class="subsection-title">Data</div>
            <p>Data is the entity which conveys some meaning based on some manually agreed rules or communication. Data is the information what we had want to sent. For example if a sender sends 01000001 to receiver it has no meaning unless the receiver understand. But if it is said that an ASCII character, the receiver can understand it is A. Data is always transfer from the transmitter to receiver in the form signal. It is of Two types: a)Digital Data b)Analog Data</p>
            
            <div class="subsection-title">Analog Data</div>
            <p>Analog Data: Information that has sent has continuous(infinite) Values in some interval of time. Analog data use values that change very smoothly. A good example of this is an analog clock. An analog clock shows the time with a smoothly moving seconds hand. The change is continuous. Sound is also a good example of analog data. Sound waves change in a very smooth way. All analogue devices use analog data. Examples of analog devices include: Microphone, Headphones, Loud Speaker, Sensors(temperature, pressure etc)</p>
            
            <div class="subsection-title">Digital Data</div>
            <p>Digital Data: Information that has finite number of value within a certain time is digital data. Digital data jumps from one value to the next in a step by step sequence. A good example of this is a digital clock. A digital clock jumps from one second to another in clear steps. The change is not smooth or continuous. Information stored in memory of computer. All digital devices use digital data.</p>
            
            <img src="digital_data_storage.jpg" alt="Figure showing storing of digital data">
            <p class="image-caption">Fig: Storing the digital data</p>
            
            <div class="subsection-title">Signal</div>
            <p>A signal is a function that represent the variation of physical quantity with respect to any other parameter. A signal is the functional representation of a physical quantity or variable, and it contains information about the behavior of the physical quantity. A signal is represented as a function of an independent variable t. Most of the time t stand for time. The mathematical notation of a signal is x(t). When ever data has to be sent over communication medium it has to be converted into signal. Signal is an electric, electronic and optical representation of data which is sent over communication channel. There are the two types of signal a)Analog Signal b)Digital Signal</p>
            
            <div class="subsection-title">Analog Signal</div>
            <p>Analog signal is a continuous signal in which one time-varying quantity represents another time-based variable. These type of electronic signals are time-varying Minimum and maximum values which is either positive or negative. Analog Signal works on continuous data. When plotted on a voltage vs. time graph, an analog signal should produce a smooth and continuous curve. There should not be any discrete value changes. Electrical Signal Obtained from microphone photodetector cell example of analog signal.</p>
            
            <div class="subsection-title">Digital Signal</div>
            <p>A digital signal is a signal that represents data as a sequence of discrete values. A digital signal can only take on one value from a finite set of possible values at a given time. With digital signals, the physical quantity representing the information can be many things. Digital signals are used in all digital electronics, including computing equipment and data transmission devices. When plotted on a voltage vs. time graph, digital signals are one of two values, and are usually between 0V and VCC</p>
            
            <div class="subsection-title">Data Representation</div>
            <p>Information today comes in different form such as Text Number Images audio video.</p>
            <ul>
                <li><strong>Text:</strong> In data communication text is represented as bit, or sequence of bit. Different set of bit pattern have been designed to represent text symbols Each set of code and various coding technique are Unicode, ASCII etc.</li>
                <li><strong>Numbers:</strong> Number are also represented by bit pattern and used to simplify the mathematical operation.</li>
                <li><strong>Images:</strong> An image is composed of matrix of pixels, Where each pixel is small dot and is assigned a bit pattern.</li>
                <li><strong>Audio:</strong> It is refers to the recording of sound or image.</li>
                <li><strong>Video:</strong> It refers to the broadcasting of pictures or movie. Video can either be produced as continuous entity or the combination of images, each of entity arranged to convey the idea of motion.</li>
            </ul>
            
            <div class="subsection-title">Data Flow</div>
            <p>The way in which data is transmitted from one device to another device is known as transmission mode. Transmission mode between two device can be either simplex, half-duplex and full duplex depending upon Flow the data.</p>
            
            <div class="subsection-title">Simplex mode</div>
            <p>In Simplex mode, the communication is unidirectional, i.e., the data flow in one direction. A device can only send the data but cannot receive it or it can receive the data but cannot send the data. This transmission mode is not very popular as mainly communications require the two-way exchange of data. The simplex mode is used in the business field as in sales that do not require any corresponding reply. The radio station is a simplex channel as it transmits the signal to the listeners but never allows them to transmit back. Keyboard and Monitor are the examples of the simplex mode as a keyboard can only accept the data from the user and monitor can only be used to display the data on the screen.</p>
            
            <div class="subsection-title">Half-Duplex mode</div>
            <p>In a Half-duplex channel, direction can be reversed, i.e., the station can transmit and receive the data as well. Messages flow in both the directions, but not at the same time. The entire bandwidth of the communication channel is utilized in one direction at a time. In half-duplex mode, it is possible to perform the error detection, and if any error occurs, then the receiver requests the sender to retransmit the data. A Walkie-talkie is an example of the Half-duplex mode. In Walkie-talkie, one party speaks, and another party listens. After a pause, the other speaks and first party listens. Speaking simultaneously will create the distorted sound which cannot be understood.</p>
            
            <div class="subsection-title">Full-duplex mode</div>
            <p>In Full duplex mode, the communication is bi-directional, i.e., the data flow in both the directions. Both the stations can send and receive the message simultaneously. Full-duplex mode has two simplex channels. One channel has traffic moving in one direction, and another channel has traffic flowing in the opposite direction. The Full-duplex mode is the fastest mode of communication between devices. The most common example of the full-duplex mode is a telephone network. When two people are communicating with each other by a telephone line, both can talk and listen at the same time.</p>
        </div>
        
        <!-- Section 1.2 -->
        <div id="section1_2" class="section">
            <h2 class="section-title">1.2 Evolution of data communication</h2>
            
            <div class="subsection-title">Differences Between analog and digital communication system</div>
            <table>
                <tr>
                    <th>Category</th>
                    <th>Analog communication system</th>
                    <th>Digital Communication system</th>
                </tr>
                <tr>
                    <td>Definition</td>
                    <td>It uses analog signals for transmitting data from transmitter to the receiver.</td>
                    <td>It uses digital signals for transmitting data from transmitter to the receiver.</td>
                </tr>
                <tr>
                    <td>Signal</td>
                    <td>The analog signal is a continuous time varying signal.</td>
                    <td>Digital signal uses two bits for transmission of level 0(LOW) and 1 (HIGH).</td>
                </tr>
                <tr>
                    <td>Noise Immunity</td>
                    <td>Poor</td>
                    <td>Good</td>
                </tr>
                <tr>
                    <td>Signal representation</td>
                    <td>The analog signals are represented by a sine wave or cosine wave.</td>
                    <td>The digital signals are represented by a square wave.</td>
                </tr>
                <tr>
                    <td>Modulation</td>
                    <td>Amplitude and Angle Modulation</td>
                    <td>Pulse code modulation or PCM or DPCM etc</td>
                </tr>
                <tr>
                    <td>Data transmission</td>
                    <td>Less accurate</td>
                    <td>More accurate</td>
                </tr>
                <tr>
                    <td>Examples</td>
                    <td>Audio signals, speech signals, video signals, etc.</td>
                    <td>Clock signals</td>
                </tr>
                <tr>
                    <td>Applications</td>
                    <td>Radar. Telephony, etc.</td>
                    <td>Digital watches, Compact Disks, computers, etc.</td>
                </tr>
            </table>
            
            <div class="subsection-title">Advantages of Digital communication system over Analog</div>
            <ul>
                <li>In digital signals, the impact of noise interference, distortion is less.</li>
                <li>It facilitates video conferencing that saves time, money, and effort. We can perform video conferencing with someone or a group of people without any traveling. In video conferencing, we can see the facial expressions, which are helpful in reading the reaction of people.</li>
                <li>The correction and detection of errors are easy in digital communication, as there is a use of channel coding.</li>
                <li>The probability of cross-talk is very less in digital communication.</li>
                <li>The implementation of hardware is more flexible in digital communication.</li>
                <li>To maintain the secrecy of information, the signal processing functions like compression and encryption are employed in digital circuits.</li>
            </ul>
            
            <div class="subsection-title">Advantages of analog communication</div>
            <ul>
                <li>Analog signal uses less bandwidth as compared to the digital signal. It is due to the use of amplifier in the analog communication system, which improves the signal and reduces the distortion.</li>
                <li>It provides a more accurate method of representation due to its continuous nature.</li>
                <li>Audio signals are preferred for audio and video transmissions. It is because these signals can be easily modulated and demodulated using Amplitude Modulation and Demodulation.</li>
                <li>Analog signals are easy to process as compared to the digital signals.</li>
            </ul>
        </div>
        
        <!-- Section 1.3 -->
        <div id="section1_3" class="section">
            <h2 class="section-title">1.3 A communication model, data communication model</h2>
            
            <div class="subsection-title">Data Communication System Components</div>
            <p>Data communications are the exchange of data between two devices using one or multiple forms of transmission medium. i.e data communication is movement of data from one device or end-point to another device or end point through electrical or optical medium. A data communications system has five components:</p>
            <ol>
                <li><strong>Message:</strong> The message is the information(data) to be communicated. Popular forms of information include text, numbers, pictures, audio, and video.</li>
                <li><strong>Sender:</strong> The sender is the device that sends the data message. It can be a computer, workstation, telephone handset, video camera, and so on.</li>
                <li><strong>Receiver:</strong> The receiver is the device that receives the message. It can be a computer, workstation, telephone handset, television, and so on.</li>
                <li><strong>Transmission medium:</strong> The transmission medium is the physical path by which a message travels from sender to receiver. Some examples of transmission media include twisted-pair wire, coaxial cable, fiber-optic cable, and radio waves.</li>
                <li><strong>Protocol:</strong> A protocol is a set of rules that govern data communications. It represents an agreement between the communicating devices.</li>
            </ol>
            
            <div class="subsection-title">Analog Communication System</div>
            <p>The message is transmitted in the form of analog signal.</p>
            
            <img src="analog_communication_system.jpg" alt="Analog communication system block diagram">
            <p class="image-caption">Analog Communication System Diagram</p>
            
            <ul>
                <li><strong>Input transducer:</strong> The input transducer converts the information in the message signal into the electrical energy suitable for transmission. The sources of information are audio, television, computers, etc.</li>
                <li><strong>Transmitter:</strong> The transmitter converts the electrical signal into a form suitable for transmission for the channel. It performs modulation by superimposing the message signal on the high-frequency carrier signal.</li>
                <li><strong>Communication channel:</strong> Communication channel is a medium to transmit the electrical signal from transmitter to the receiver.</li>
                <li><strong>Noise and Distortion:</strong> It is external Signal Combine with the Message Signal.</li>
                <li><strong>Receiver:</strong> The receiver receives information from the channel. It extracts the necessary information from the signal required by the output transducer. The receiver performs the opposite of modulation and multiplexing, i.e., demodulation.</li>
                <li><strong>Output transducer:</strong> The output transducer works reversely as that of the input transducer. It converts the electrical energy into the original signal. The loudspeakers convert the electrical energy to sound. The motors convert the electrical energy into motion. The LEDs(Light Emitting Diodes) convert the electrical energy to light energy.</li>
            </ul>
            
            <div class="subsection-title">Digital Communication System</div>
            <p>In this the baseband message is to be transmitted in the form of a digital signal.</p>
            
            <img src="digital_communication_system.jpg" alt="Digital communication system block diagram">
            <p class="image-caption">Basic Block diagram of Digital communication system</p>
            
            <ul>
                <li><strong>Source:</strong> It is where the information to be transmitted is originates. Here the information may be available in the digital form or the analog form.</li>
                <li><strong>Source encoder:</strong> The main task of source encoding is to reduce redundancy so we can use bandwidth effectively. This helps in effective utilization of the bandwidth. It removes the redundant bits or unnecessary excess bits that is zeros from the input data.</li>
                <li><strong>Channel Encoder:</strong> The channel encoder, does the coding for error correction. During the transmission of the signal, due to the noise in the channel, the signal may get altered. Hence, the channel encoder provides some redundant bits to the message data in order to provide an error free data on the receiver side.</li>
                <li><strong>Modulator:</strong> To transmit information at longer distance we need to convert the low frequency digital signal into high frequency analog signal. Digital Modulator multiplies the digital signal we converted in last stage with high frequency carrier signal and convert it in high frequency analog signal so we can easily send it by antenna.</li>
                <li><strong>Demodulator:</strong> It will demodulate the signal that received by the receiver antenna. And again convert the high frequency analog signal digital signal.</li>
                <li><strong>Channel Decoder:</strong> The channel decoder, after detecting the sequence, does some error corrections. During the transmission, the signal might get distorted. This is corrected by adding some redundant bits to the signal. This addition of bits helps in the complete recovery of the original signal.</li>
                <li><strong>Source Decoder:</strong> Source decoder will convert the digital signal into the analog signal. And that will again converted into information signal by the speaker, television or any other device. It fully decodes the signal and extracts the actual signal.</li>
            </ul>
            
            <div class="subsection-title">Advantages of Digital Communication system</div>
            <ul>
                <li>It is Simple and cheaper because of integrated circuits became smaller, speedy and chep.</li>
                <li>More privacy and security through the use of encryption because, we can re-arrange digital data.</li>
                <li>Data correction, error detection and error correction is possible</li>
                <li>Flexible hardware implementation because, if hardware will change we can change the programing language.</li>
                <li>Easier and sufficient multiplexing by TDMA(Time-division multiple access) & CDMA(Code-Division Multiple Access)</li>
            </ul>
            
            <div class="subsection-title">Disadvantage of Digital Communication System</div>
            <ul>
                <li>High power consumption due to multiple stages and complex circuit as we show in the Digital Communication Block Diagram.</li>
                <li>Increased Bandwidth Analog and digital Converter requires for the conversion.</li>
                <li>Synchronization is compulsory, if we don't synchronize the data so there will be many errors in information</li>
            </ul>
        </div>
        
        <!-- Section 1.4 -->
        <div id="section1_4" class="section">
            <h2 class="section-title">1.4 Networks (LAN, WAN), simplified network architecture, the OSI model</h2>
            
            <div class="subsection-title">OSI Model</div>
            <p>The OSI(Open Systems Interconnection) Model is a set of rules that explains how different computer systems communicate over a network. OSI Model was developed by the International Organization for Standardization (ISO). The OSI Model consists of 7 layers and each layer has specific functions and responsibilities. This layered approach makes it easier for different devices and technologies to work together. OSI Model provides a clear structure for data transmission and managing network issues.</p>
            
            <div class="subsection-title">Layer 1 - Physical Layer</div>
            <p>The lowest layer of the OSI reference model is the Physical Layer. It is responsible for the actual physical connection between the devices. The physical layer contains information in the form of bits.</p>
            <ul>
                <li><strong>Bit Synchronization:</strong> The physical layer provides the synchronization of the bits by providing a clock.</li>
                <li><strong>Bit Rate Control:</strong> The Physical layer also defines the transmission rate i.e. the number of bits sent per second.</li>
                <li><strong>Physical Topologies:</strong> Physical layer specifies how the different, devices/nodes are arranged in a network.</li>
                <li><strong>Transmission Mode:</strong> Physical layer also defines how the data flows between the two connected devices.</li>
            </ul>
            
            <div class="subsection-title">Layer 2 - Data Link Layer (DLL)</div>
            <p>The main function of this layer is to make sure data transfer is error-free from one node to another, over the physical layer. When a packet arrives in a network, it is the responsibility of the DLL to transmit it to the Host using its MAC address.</p>
            <ul>
                <li><strong>Framing:</strong> Framing is a function of the data link layer. It provides a way for a sender to transmit a set of bits that are meaningful to the receiver.</li>
                <li><strong>Physical Addressing:</strong> After creating frames, the Data link layer adds physical addresses (MAC addresses) of the sender and/or receiver in the header of each frame.</li>
                <li><strong>Flow Control:</strong> The data rate must be constant on both sides else the data may get corrupted thus, flow control coordinates the amount of data that can be sent before receiving an acknowledgment.</li>
                <li><strong>Access Control:</strong> When a single communication channel is shared by multiple devices</li>
            </ul>
            
            <div class="subsection-title">Layer 3 - Network Layer</div>
            <p>The network layer works for the transmission of data from one host to the other located in different networks. It also takes care of packet routing i.e. selection of the shortest path to transmit the packet, from the number of routes available.</p>
            <ul>
                <li><strong>Routing:</strong> The network layer protocols determine which route is suitable from source to destination. This function of the network layer is known as routing.</li>
                <li><strong>Logical Addressing:</strong> To identify each device inter-network uniquely, the network layer defines an addressing scheme. The sender and receiver's IP addresses are placed in the header by the network layer</li>
            </ul>
            
            <div class="subsection-title">Layer 4 - Transport Layer</div>
            <p>The transport layer provides services to the application layer and takes services from the network layer. The data in the transport layer is referred to as Segments.</p>
            <ul>
                <li><strong>Segmentation and Reassembly:</strong> This layer accepts the message from the(session) layer and breaks the message into smaller units.</li>
                <li><strong>Services Provided by Transport Layer:</strong> Connection-Oriented Service, Connectionless Service</li>
            </ul>
            
            <div class="subsection-title">Layer 5 - Session Layer</div>
            <p>Session Layer in the OSI Model is responsible for the establishment of connections, management of connections, terminations of sessions between two devices. It also provides authentication and security.</p>
            <ul>
                <li><strong>Session Establishment, Maintenance, and Termination:</strong> The layer allows the two processes to establish, use, and terminate a connection.</li>
                <li><strong>Synchronization:</strong> This layer allows a process to add checkpoints that are considered synchronization points in the data.</li>
            </ul>
            
            <div class="subsection-title">Layer 6 - Presentation Layer</div>
            <p>The presentation layer is also called the Translation layer. The data from the application layer is extracted here and manipulated as per the required format to transmit over the network.</p>
            <ul>
                <li><strong>Translation:</strong> For example, ASCII to EBCDIC.</li>
                <li><strong>Encryption/ Decryption:</strong> Data encryption translates the data into another form or code. The encrypted data is known as the ciphertext, and the decrypted data is known as plain text. A key value is used for encrypting as well as decrypting data.</li>
                <li><strong>Compression:</strong> Reduces the number of bits that need to be transmitted on the network.</li>
            </ul>
            
            <div class="subsection-title">Layer 7 - Application Layer</div>
            <p>At the very top of the OSI Reference Model stack of layers. These applications produce the data to be transferred over the network. This layer also serves as a window for the application services to access the network and for displaying the received information to the user.</p>
            <ul>
                <li><strong>Network Virtual Terminal(NVT):</strong> It allows a user to log on to a remote host.</li>
                <li><strong>File Transfer Access and Management(FTAM):</strong> This application allows a user to access files in a remote host, retrieve files in a remote host, and manage or control files from a remote computer.</li>
                <li><strong>Mail Services:</strong> Provide email service.</li>
                <li><strong>Directory Services:</strong> This application provides distributed database sources and access for global information about various objects and services.</li>
            </ul>
            
            <img src="osi_model.jpg" alt="OSI Model diagram">
            <p class="image-caption">OSI Model Layers</p>
            
            <div class="subsection-title">Computer Network</div>
            <p>A computer network is a system that connects many independent computers to share information(data) and resources. The integration of computers and other different devices allows users to communicate more easily. A computer network is a collection of two or more computer systems that are linked together.</p>
            
            <div class="subsection-title">Types of Computer Networks</div>
            
            <div class="subsection-title">1. Personal Area Network (PAN)</div>
            <p>PAN is the most basic type of computer network. It is a type of network designed to connect devices within a short range, typically around one person. It allows your personal devices, like smartphones, tablets, laptops, and wearables, to communicate and share data with each other.</p>
            
            <div class="subsection-title">2. Local Area Network (LAN)</div>
            <p>LAN is the most frequently used network. A LAN is a computer network that connects computers through a common communication path, contained within a limited area, that is, locally. A LAN encompasses two or more computers connected over a server.</p>
            
            <div class="subsection-title">3. Campus Area Network (CAN)</div>
            <p>CAN is bigger than a LAN but smaller than a MAN. This is a type of computer network that is usually used in places like a school or colleges.</p>
            
            <div class="subsection-title">4. Metropolitan Area Network (MAN)</div>
            <p>A MAN is larger than a LAN but smaller than a WAN. This is the type of computer network that connects computers over a geographical distance through a shared communication path over a city, town, or metropolitan area.</p>
            
            <div class="subsection-title">5. Wide Area Network (WAN)</div>
            <p>WAN is a type of computer network that connects computers over a large geographical distance through a shared communication path. It is not restrained to a single location but extends over many locations. WAN can also be defined as a group of local area networks</p>
            
            <div class="subsection-title">Simplified Network Architecture</div>
            <p>A simplified network architecture is a basic model of how different devices in a small network are connected and communicate with each other. It helps in understanding the core components and their roles in a network</p>
            
            <ul>
                <li><strong>Computers(Workstations):</strong> There are multiple desktop computers connected to the network. These are the end-user devices used to access files, applications, and the internet. They are connected to the network through a switch.</li>
                <li><strong>Switch:</strong> The switch is a central device that connects all computers in the LAN. It operates at Layer 2(Data Link Layer) of the OSI model. It forwards data only to the specific device it's intended for, improving efficiency compared to a hub.</li>
                <li><strong>Server:</strong> The server is connected to the switch and handles various services such as file sharing, print services, or authentication. In this diagram, it is also connected to a printer, indicating that it likely acts as a print server. It can also manage access to shared resources and network applications.</li>
                <li><strong>Printer:</strong> The printer is directly connected to the server, not to the switch. This setup allows print jobs to be managed and queued by the server.</li>
                <li><strong>Router:</strong> The router connects the internal LAN to the Internet. It operates at Layer 3(Network Layer) of the OSI model. It routes data between the internal network and external networks(such as the Internet). The server is directly connected to the router, which is common when the server handles internet-based applications or services.</li>
            </ul>
            
            <img src="simplified_network.jpg" alt="Simplified network architecture diagram">
            <p class="image-caption">Simplified Network Architecture Diagram</p>
            
            <p>Internal communication(between computers or with the server/printer) is handled via the switch. Internet access is mediated through the router, which connects to the server. The server may act as a gateway for other computers to access the internet or shared resources like printers.</p>
        </div>
        
        <!-- Section 1.5 -->
        <div id="section1_5" class="section">
            <h2 class="section-title">1.5 Data communication and networking for today enterprise</h2>
            
            <div class="subsection-title">1. Internal Communication:</div>
            <p>Internal communication is the backbone of day-to-day business operations. Networking systems enable employees to connect across departments and geographic locations using tools such as email, instant messaging, voice calls, and collaborative platforms like Microsoft Teams or Slack.</p>
            
            <div class="subsection-title">2. Cloud Computing & Remote Access:</div>
            <p>With the rise of flexible work environments and distributed teams, cloud computing and remote access have become essential. Networking infrastructure allows users to connect to cloud platforms like Google Workspace.</p>
            
            <div class="subsection-title">3. Data Storage & Sharing:</div>
            <p>Enterprise networks support centralized data storage and fast file sharing, making collaboration smooth and ensuring secure access to business information.</p>
            
            <div class="subsection-title">4. Real-time Applications (VoIP, Video Conferencing):</div>
            <p>Networks ensure low-latency connections for VoIP and video calls, enabling smooth and clear real-time communication for meetings and customer support.</p>
            
            <div class="subsection-title">5. IoT & Automation:</div>
            <p>Networking connects IoT devices like sensors and smart systems, enabling automation, monitoring, and improved efficiency in business processes.</p>
        </div>
    </div>

<!-- <==================chapter 2 start ==================> -->
    <div id="chapter_2" class="chapter-container">
        <h1 class="chapter-title">Chapter 2: Data Communication Fundamentals</h1>
        
        <div class="navigation">
            <ul class="nav-list">
                <li class="nav-item" onclick="document.getElementById('section2_1').scrollIntoView({behavior: 'smooth'})">2.1 Analog and digital data</li>
                <li class="nav-item" onclick="document.getElementById('section2_2').scrollIntoView({behavior: 'smooth'})">2.2 Analog signals, periodic and aperiodic signals, periodic signals characteristics (Time, frequency domain)</li>
                <li class="nav-item" onclick="document.getElementById('section2_3').scrollIntoView({behavior: 'smooth'})">2.3 Introduction to Fourier series representation of periodic signal, Fourier transform representation of aperiodic signals, digital signals and its characteristics</li>
                <li class="nav-item" onclick="document.getElementById('section2_4').scrollIntoView({behavior: 'smooth'})">2.4 Analog and digital transmission, transmission mode, transmission impairments (Attenuation, distortion, noise)</li>
                <li class="nav-item" onclick="document.getElementById('section2_5').scrollIntoView({behavior: 'smooth'})">2.5 Data rate limits channel capacity, Nyquist bandwidth, Shannon capacity formula</li>
                <li class="nav-item" onclick="document.getElementById('section2_6').scrollIntoView({behavior: 'smooth'})">2.6 Performance of network (Bandwidth, throughput, latency, jitter)</li>
            </ul>
        </div>
        
        <!-- Section 2.1 -->
        <div id="section2_1" class="section">
            <h2 class="section-title">2.1 Analog and digital data</h2>
            
            <div class="subsection-title">Analog Data</div>
            <p>Analog data represents information in continuous form. It can take any value within a range and changes smoothly over time. Analog data is typically measured in physical quantities like voltage, temperature, pressure, or sound waves.</p>
            <ul>
                <li><strong>Characteristics:</strong> Continuous values, infinite possible values within a range</li>
                <li><strong>Examples:</strong> Human voice, temperature readings, analog clocks, radio waves</li>
            </ul>
            
            <div class="subsection-title">Digital Data</div>
            <p>Digital data represents information in discrete form. It has a finite number of distinct values and changes in steps rather than smoothly. Digital data is typically represented as binary digits (0s and 1s).</p>
            <ul>
                <li><strong>Characteristics:</strong> Discrete values, finite possible values</li>
                <li><strong>Examples:</strong> Computer files, digital clocks, binary code, digital images</li>
            </ul>
            
            <div class="subsection-title">Key Differences</div>
            <table>
                <tr>
                    <th>Characteristic</th>
                    <th>Analog Data</th>
                    <th>Digital Data</th>
                </tr>
                <tr>
                    <td>Form</td>
                    <td>Continuous</td>
                    <td>Discrete</td>
                </tr>
                <tr>
                    <td>Values</td>
                    <td>Infinite possible values</td>
                    <td>Finite possible values (typically 0 and 1)</td>
                </tr>
                <tr>
                    <td>Signal Representation</td>
                    <td>Sine wave</td>
                    <td>Square wave</td>
                </tr>
                <tr>
                    <td>Noise Immunity</td>
                    <td>Low (noise affects signal quality)</td>
                    <td>High (noise can be filtered out)</td>
                </tr>
                <tr>
                    <td>Storage</td>
                    <td>Difficult to store and reproduce accurately</td>
                    <td>Easier to store and reproduce without degradation</td>
                </tr>
                <tr>
                    <td>Processing</td>
                    <td>More complex for mathematical operations</td>
                    <td>Easier for mathematical operations and processing</td>
                </tr>
            </table>
            
            <img src="analog-digital-data.jpg" alt="Comparison of analog and digital data signals">
            <p class="image-caption">Figure: Comparison of analog and digital data signals. Analog signals are continuous while digital signals are discrete.</p>
        </div>
        
        <!-- Section 2.2 -->
        <div id="section2_2" class="section">
            <h2 class="section-title">2.2 Analog signals, periodic and aperiodic signals, periodic signals characteristics (Time, frequency domain)</h2>
            
            <div class="subsection-title">Analog Signals</div>
            <p>An analog signal is a continuous signal that represents physical measurements. It can take any value within a range and changes smoothly over time. Analog signals are typically represented as sine waves.</p>
            
            <div class="subsection-title">Periodic Signals</div>
            <p>A periodic signal is one that repeats itself at regular intervals. It has a specific period (T) and frequency (f = 1/T). The signal pattern repeats indefinitely.</p>
            <ul>
                <li><strong>Characteristics:</strong> Repetitive pattern, defined period and frequency</li>
                <li><strong>Examples:</strong> Sine waves, square waves, triangular waves</li>
            </ul>
            
            <div class="subsection-title">Aperiodic Signals</div>
            <p>An aperiodic signal does not repeat itself at regular intervals. It is non-repetitive and does not have a defined period.</p>
            <ul>
                <li><strong>Characteristics:</strong> Non-repetitive, no defined period</li>
                <li><strong>Examples:</strong> Speech signals, digital data streams, random noise</li>
            </ul>
            
            <div class="subsection-title">Energy and Power Signals</div>
            <p>Signals can be classified based on their energy and power properties:</p>
            
            <div class="subsection-title">Energy Signals</div>
            <p>A continuous time signal x(t) is said to be an energy signal if the total normalized energy of the signal is finite and non-zero (0 < E < ∞).</p>
            <div class="formula">
                E = ∫<sub>-∞</sub><sup>∞</sup> |x(t)|<sup>2</sup> dt
            </div>
            <p>For discrete time signals x(n), it is called an energy signal if its energy is finite.</p>
            
            <div class="subsection-title">Power Signals</div>
            <p>A continuous time signal x(t) is said to be a power signal if the normalized average power p is finite and non-zero (0 < P < ∞).</p>
            <div class="formula">
                P = lim<sub>T→∞</sub> (1/(2T)) ∫<sub>-T</sub><sup>T</sup> |x(t)|<sup>2</sup> dt
            </div>
            <p>For discrete time signals x(n), it is said to be a power signal if its power is finite (0 < P < ∞).</p>
            <div class="formula">
                P = lim<sub>N→∞</sub> (1/(2N+1)) Σ<sub>n=-N</sub><sup>N</sup> |x(n)|<sup>2</sup>
            </div>
            <p>Energy signals have finite energy but zero average power, while power signals have infinite energy but finite average power.</p>
            
            <div class="subsection-title">Deterministic and Random Signals</div>
            <p>Signals can also be classified based on predictability:</p>
            
            <div class="subsection-title">Deterministic Signals</div>
            <p>A signal is said to be deterministic if it is completely represented by a mathematical equation at any time. These signals are predictable and can be precisely calculated for any time value.</p>
            <ul>
                <li><strong>Examples:</strong> Sine wave, Square wave, Triangular wave, Exponential pulse</li>
            </ul>
            
            <div class="subsection-title">Random Signals</div>
            <p>A random signal cannot be represented by a mathematical equation. These signals are unpredictable and can only be described statistically.</p>
            <ul>
                <li><strong>Examples:</strong> Noise signal, Speech signal (to some extent), Thermal noise</li>
            </ul>
            
            <div class="subsection-title">Time Domain vs Frequency Domain</div>
            <p>Signals can be represented in two domains:</p>
            
            <div class="subsection-title">Time Domain Representation</div>
            <p>In time domain, the signal is represented as amplitude versus time. This shows how the signal changes over time.</p>
            <img src="time-domain-signal.jpg" alt="Time domain representation of a signal">
            <p class="image-caption">Figure: Time domain representation of a sine wave. The x-axis shows time and y-axis shows amplitude.</p>
            
            <div class="subsection-title">Frequency Domain Representation</div>
            <p>In frequency domain, the signal is represented as amplitude versus frequency. This shows what frequencies are present in the signal and their relative strengths.</p>
            <img src="frequency-domain-signal.jpg" alt="Frequency domain representation of a signal">
            <p class="image-caption">Figure: Frequency domain representation of a signal showing different frequency components.</p>
            
            <div class="subsection-title">Characteristics of Periodic Signals</div>
            <p>Periodic signals have several key characteristics:</p>
            <ul>
                <li><strong>Amplitude (A):</strong> The maximum value of the signal from the zero line. Represents signal strength.</li>
                <li><strong>Period (T):</strong> The time it takes for one complete cycle of the signal to occur. Measured in seconds.</li>
                <li><strong>Frequency (f):</strong> The number of cycles per second. f = 1/T. Measured in Hertz (Hz).</li>
                <li><strong>Phase (φ):</strong> The position of the waveform relative to time zero. Measured in degrees or radians.</li>
                <li><strong>Wavelength (λ):</strong> For electromagnetic waves, the distance between two consecutive peaks. λ = c/f, where c is the speed of light.</li>
            </ul>
        </div>
        
        <!-- Section 2.3 -->
        <div id="section2_3" class="section">
            <h2 class="section-title">2.3 Introduction to Fourier series representation of periodic signal, Fourier transform representation of aperiodic signals, digital signals and its characteristics</h2>
            
            <div class="subsection-title">Fourier Series Representation of Periodic Signals</div>
            <p>Fourier series is a mathematical tool used to represent periodic signals as a sum of sine and cosine waves of different frequencies, amplitudes, and phases. Any periodic signal can be decomposed into its constituent sinusoidal components.</p>
            
            <div class="formula">
                f(t) = a<sub>0</sub> + Σ [a<sub>n</sub>cos(nω<sub>0</sub>t) + b<sub>n</sub>sin(nω<sub>0</sub>t)]
            </div>
            
            <p>Where:</p>
            <ul>
                <li>a<sub>0</sub> = DC component (average value)</li>
                <li>a<sub>n</sub>, b<sub>n</sub> = Fourier coefficients</li>
                <li>ω<sub>0</sub> = fundamental frequency (2π/T)</li>
                <li>n = harmonic number</li>
            </ul>
            
            <div class="subsection-title">Fourier Transform Representation of Aperiodic Signals</div>
            <p>Fourier transform is used to represent aperiodic signals in the frequency domain. It converts a time-domain signal into its frequency components.</p>
            
            <div class="formula">
                F(ω) = ∫<sub>-∞</sub><sup>∞</sup> f(t)e<sup>-jωt</sup> dt
            </div>
            
            <p>Where:</p>
            <ul>
                <li>F(ω) = frequency domain representation</li>
                <li>f(t) = time domain signal</li>
                <li>ω = angular frequency</li>
            </ul>
            
            <div class="subsection-title">Digital Signals and its Characteristics</div>
            <p>Digital signals are discrete-time signals that take on only a finite number of values. They are typically binary (0s and 1s) but can have more levels.</p>
            
            <div class="subsection-title">Key Characteristics of Digital Signals</div>
            <ul>
                <li><strong>Bit Rate:</strong> Number of bits transmitted per second (bps). Determines data transmission speed.</li>
                <li><strong>Baud Rate:</strong> Number of signal changes per second. May be different from bit rate if multiple bits are encoded per signal change.</li>
                <li><strong>Signal Level:</strong> Number of distinct voltage levels used to represent data (e.g., 2 levels for binary, 4 levels for 2 bits per symbol).</li>
                <li><strong>Signal-to-Noise Ratio (SNR):</strong> Ratio of signal power to noise power, measured in decibels (dB).</li>
                <li><strong>Bandwidth:</strong> Range of frequencies occupied by the signal. Determines how much data can be transmitted.</li>
                <li><strong>Encoding Schemes:</strong> Methods for converting digital data to signals (e.g., NRZ, Manchester, AMI).</li>
            </ul>
            
            <div class="subsection-title">System Types in Data Communication</div>
            <p>In data communication systems, various system classifications are important for understanding how signals are processed and transmitted:</p>
            
            <div class="subsection-title">Static and Dynamic Systems</div>
            <p>Systems can be classified based on whether they depend on past inputs:</p>
            
            <div class="subsection-title">Static Systems (Memoryless Systems)</div>
            <p>A system is said to be static if its output depends only on the present input. It does not require memory to store past or future inputs.</p>
            <div class="formula">
                y(t) = sin(x(t))  // Output depends only on present input x(t)
            </div>
            <div class="formula">
                y(n) = x(n)cos(ω<sub>0</sub>n)  // Output depends only on present input x(n)
            </div>
            
            <div class="subsection-title">Dynamic Systems (Systems with Memory)</div>
            <p>A system is said to be dynamic if its output depends on past values of input (or future values in some cases). These systems require memory to store previous inputs.</p>
            <div class="formula">
                y(t) = x(t-1) + x(t)  // Output depends on present and past input
            </div>
            
            <div class="subsection-title">Linear and Non-linear Systems</div>
            <p>Systems can be classified based on whether they satisfy the superposition principle:</p>
            
            <div class="subsection-title">Linear Systems</div>
            <p>A system is said to be linear if it satisfies the superposition principle. For two inputs x<sub>1</sub>(t) and x<sub>2</sub>(t) with corresponding outputs y<sub>1</sub>(t) and y<sub>2</sub>(t), the system is linear if:</p>
            <div class="formula">
                a·x<sub>1</sub>(t) + b·x<sub>2</sub>(t) → a·y<sub>1</sub>(t) + b·y<sub>2</sub>(t)
            </div>
            <p>for any constants a and b.</p>
            
            <div class="subsection-title">Non-linear Systems</div>
            <p>A system that does not satisfy the superposition principle is called non-linear.</p>
            
            <div class="subsection-title">Time Variant and Time Invariant Systems</div>
            <p>Systems can be classified based on whether their behavior changes with time:</p>
            
            <div class="subsection-title">Time Invariant Systems</div>
            <p>A system is said to be time invariant if a time shift in the input produces a corresponding time shift in the output. For an input x(t) with output y(t), the system is time invariant if:</p>
            <div class="formula">
                x(t-t<sub>0</sub>) → y(t-t<sub>0</sub>)
            </div>
            
            <div class="subsection-title">Time Variant Systems</div>
            <p>A system is said to be time variant if a time shift in the input does not produce a corresponding time shift in the output.</p>
            
            <div class="subsection-title">Stable and Unstable Systems</div>
            <p>Systems can be classified based on their stability:</p>
            
            <div class="subsection-title">Stable Systems (BIBO Stable)</div>
            <p>A system is said to be stable if every bounded input produces a bounded output. This is also known as BIBO (Bounded Input Bounded Output) stability.</p>
            <p>If the input x(t) is bounded (|x(t)| ≤ K<sub>x</sub> for some finite K<sub>x</sub>), then the output y(t) must also be bounded (|y(t)| ≤ K<sub>y</sub> for some finite K<sub>y</sub>).</p>
            
            <div class="subsection-title">Unstable Systems</div>
            <p>A system is said to be unstable if it produces an unbounded output for a bounded input. If a system does not satisfy the BIBO stability condition, it is called unstable.</p>
            
            <div class="subsection-title">Causal and Non-causal Systems</div>
            <p>Systems can be classified based on whether they depend on future inputs:</p>
            
            <div class="subsection-title">Causal Systems</div>
            <p>A system is said to be causal if its output at any time depends only on present and past inputs, not on future inputs.</p>
            
            <div class="subsection-title">Non-causal Systems</div>
            <p>A system is said to be non-causal if its output at any time depends on future inputs.</p>
            
            <img src="digital-signal-characteristics.jpg" alt="Digital signal characteristics">
            <p class="image-caption">Figure: Digital signal showing bit rate, signal levels, and encoding scheme.</p>
        </div>
        
        <!-- Section 2.4 -->
        <div id="section2_4" class="section">
            <h2 class="section-title">2.4 Analog and digital transmission, transmission mode, transmission impairments (Attenuation, distortion, noise)</h2>
            
            <div class="subsection-title">Analog Transmission</div>
            <p>Analog transmission involves sending analog signals over a communication channel. The signal is transmitted as is without conversion to digital form.</p>
            <ul>
                <li><strong>Advantages:</strong> Simple implementation, less bandwidth for simple signals</li>
                <li><strong>Disadvantages:</strong> Susceptible to noise and distortion, no error correction</li>
                <li><strong>Applications:</strong> Traditional radio and TV broadcasting, analog telephone systems</li>
            </ul>
            
            <div class="subsection-title">Digital Transmission</div>
            <p>Digital transmission involves sending digital signals over a communication channel. The signal is converted to digital form before transmission.</p>
            <ul>
                <li><strong>Advantages:</strong> Noise immunity, error detection/correction, easier processing</li>
                <li><strong>Disadvantages:</strong> Requires more bandwidth, more complex equipment</li>
                <li><strong>Applications:</strong> Modern internet, digital TV, mobile communications</li>
            </ul>
            
            <div class="subsection-title">Transmission Modes</div>
            <p>Transmission modes define how data flows between devices:</p>
            
            <div class="subsection-title">Simplex Mode</div>
            <p>Communication is unidirectional. Data flows in only one direction.</p>
            <ul>
                <li><strong>Examples:</strong> Keyboard to computer, radio broadcast, TV broadcast</li>
                <li><strong>Characteristics:</strong> One-way communication, no feedback channel</li>
            </ul>
            
            <div class="subsection-title">Half-Duplex Mode</div>
            <p>Communication is bidirectional but not simultaneous. Data can flow in both directions but only one direction at a time.</p>
            <ul>
                <li><strong>Examples:</strong> Walkie-talkies, old Ethernet hubs</li>
                <li><strong>Characteristics:</strong> Two-way communication, but only one direction at a time</li>
            </ul>
            
            <div class="subsection-title">Full-Duplex Mode</div>
            <p>Communication is bidirectional and simultaneous. Data can flow in both directions at the same time.</p>
            <ul>
                <li><strong>Examples:</strong> Telephone network, modern Ethernet, mobile phones</li>
                <li><strong>Characteristics:</strong> Two-way communication simultaneously, requires two channels or frequency separation</li>
            </ul>
            
            <div class="subsection-title">Transmission Impairments</div>
            <p>Transmission impairments are issues that affect signal quality during transmission:</p>
            
            <div class="subsection-title">Attenuation</div>
            <p>Attenuation is the loss of signal strength as it travels through a medium. It occurs because the medium absorbs some of the signal energy.</p>
            <ul>
                <li><strong>Causes:</strong> Resistance in wires, absorption by medium</li>
                <li><strong>Measurement:</strong> Decibels (dB) per unit distance</li>
                <li><strong>Remedy:</strong> Signal amplifiers or repeaters</li>
            </ul>
            
            <div class="subsection-title">Distortion</div>
            <p>Distortion occurs when different frequency components of a signal travel at different speeds through a medium, causing the signal shape to change.</p>
            <ul>
                <li><strong>Types:</strong> 
                    <ul>
                        <li>Delay distortion: Different frequencies travel at different speeds</li>
                        <li>Amplitude distortion: Different frequencies have different attenuation</li>
                    </ul>
                </li>
                <li><strong>Remedy:</strong> Equalizers, proper channel design</li>
            </ul>
            
            <div class="subsection-title">Noise</div>
            <p>Noise is unwanted signals that interfere with the original signal. It can come from various sources.</p>
            <ul>
                <li><strong>Types:</strong>
                    <ul>
                        <li>Thermal noise: Random movement of electrons in conductors</li>
                        <li>Intermodulation noise: When signals at different frequencies share the same medium</li>
                        <li>Crosstalk: Unwanted coupling between channels</li>
                        <li>Impulse noise: Short bursts of high-amplitude noise</li>
                    </ul>
                </li>
                <li><strong>Remedy:</strong> Shielding, error detection/correction techniques</li>
            </ul>
        </div>
        
        <!-- Section 2.5 -->
        <div id="section2_5" class="section">
            <h2 class="section-title">2.5 Data rate limits channel capacity, Nyquist bandwidth, Shannon capacity formula</h2>
            
            <div class="subsection-title">Data Rate Limits and Channel Capacity</div>
            <p>Channel capacity is the maximum data rate that can be achieved over a communication channel. It depends on bandwidth and signal quality.</p>
            
            <div class="subsection-title">Nyquist Bandwidth Theorem</div>
            <p>The Nyquist theorem defines the maximum data rate for a noiseless channel:</p>
            
            <div class="formula">
                C = 2B log<sub>2</sub> L
            </div>
            
            <p>Where:</p>
            <ul>
                <li>C = Maximum data rate (bps)</li>
                <li>B = Bandwidth (Hz)</li>
                <li>L = Number of signal levels</li>
            </ul>
            
            <p><strong>Example:</strong> For a 3 kHz bandwidth channel with 2 signal levels (binary), maximum data rate = 2 × 3000 × log<sub>2</sub>2 = 6000 bps</p>
            
            <div class="subsection-title">Shannon Capacity Formula</div>
            <p>The Shannon capacity formula defines the maximum data rate for a noisy channel:</p>
            
            <div class="formula">
                C = B log<sub>2</sub>(1 + SNR)
            </div>
            
            <p>Where:</p>
            <ul>
                <li>C = Channel capacity (bps)</li>
                <li>B = Bandwidth (Hz)</li>
                <li>SNR = Signal-to-Noise Ratio (unitless)</li>
            </ul>
            
            <p><strong>Example:</strong> For a 3 kHz bandwidth channel with SNR of 31 (15 dB), capacity = 3000 × log<sub>2</sub>(1+31) = 3000 × 5 = 15,000 bps</p>
            
            <div class="subsection-title">Relationship Between Nyquist and Shannon</div>
            <p>The Nyquist theorem gives the theoretical maximum for a noiseless channel, while the Shannon formula gives the maximum for a noisy channel. The Shannon capacity is always less than or equal to the Nyquist capacity.</p>
            
            <img src="data-rate-limits.jpg" alt="Data rate limits and channel capacity">
            <p class="image-caption">Figure: Relationship between bandwidth, signal levels, and data rate in different channel conditions.</p>
        </div>
        
        <!-- Section 2.6 -->
        <div id="section2_6" class="section">
            <h2 class="section-title">2.6 Performance of network (Bandwidth, throughput, latency, jitter)</h2>
            
            <div class="subsection-title">Bandwidth</div>
            <p>Bandwidth is the maximum data transfer rate of a network or internet connection. It represents the capacity of the communication channel.</p>
            <ul>
                <li><strong>Definition:</strong> Range of frequencies that a channel can transmit (Hz)</li>
                <li><strong>Measurement:</strong> Bits per second (bps), kilobits per second (kbps), megabits per second (Mbps), gigabits per second (Gbps)</li>
                <li><strong>Factors affecting:</strong> Channel characteristics, modulation techniques, noise level</li>
                <li><strong>Example:</strong> A 100 Mbps Ethernet connection has a bandwidth of 100 megabits per second</li>
            </ul>
            
            <div class="subsection-title">Throughput</div>
            <p>Throughput is the actual data transfer rate achieved over a network. It's usually less than the bandwidth due to various factors.</p>
            <ul>
                <li><strong>Definition:</strong> Actual data transfer rate in a real-world scenario</li>
                <li><strong>Measurement:</strong> Bits per second (bps)</li>
                <li><strong>Factors affecting:</strong> Network congestion, protocol overhead, hardware limitations</li>
                <li><strong>Example:</strong> A network with 100 Mbps bandwidth might have a throughput of 75 Mbps due to overhead and congestion</li>
            </ul>
            
            <div class="subsection-title">Latency</div>
            <p>Latency is the time it takes for a data packet to travel from source to destination. It's also known as delay.</p>
            <ul>
                <li><strong>Definition:</strong> Time taken for data to travel from source to destination</li>
                <li><strong>Measurement:</strong> Milliseconds (ms)</li>
                <li><strong>Components:</strong>
                    <ul>
                        <li>Propagation delay: Time for signal to travel through medium</li>
                        <li>Transmission delay: Time to push all bits onto the medium</li>
                        <li>Processing delay: Time for routers to process packets</li>
                        <li>Queuing delay: Time spent in router queues</li>
                    </ul>
                </li>
                <li><strong>Example:</strong> Typical internet latency is 20-100 ms, while satellite communication can have 500+ ms latency</li>
            </ul>
            
            <div class="subsection-title">Jitter</div>
            <p>Jitter is the variation in latency between packets. It's particularly important for real-time applications like voice and video.</p>
            <ul>
                <li><strong>Definition:</strong> Variation in packet delay times</li>
                <li><strong>Measurement:</strong> Milliseconds (ms)</li>
                <li><strong>Causes:</strong> Network congestion, routing changes, variable processing times</li>
                <li><strong>Impact:</strong> Causes audio/video quality issues, packet loss in real-time applications</li>
                <li><strong>Remedy:</strong> Jitter buffers, quality of service (QoS) mechanisms</li>
            </ul>
            
            <div class="subsection-title">Relationship Between Network Performance Metrics</div>
            <p>These metrics are interconnected:</p>
            <ul>
                <li>High bandwidth doesn't guarantee high throughput if latency or jitter is high</li>
                <li>Low latency is critical for real-time applications, even with moderate bandwidth</li>
                <li>Jitter affects the quality of real-time communication more than throughput</li>
                <li>Network performance is often limited by the weakest link in the communication path</li>
            </ul>
            
            <img src="network-performance-metrics.jpg" alt="Network performance metrics relationship">
            <p class="image-caption">Figure: Relationship between bandwidth, throughput, latency, and jitter in a network.</p>
        </div>
    </div>

<!-- <==================chapter 3 start ==================> -->
    <div id="chapter_3" class="chapter-container">
        <h1 class="chapter-title">Chapter 3: Transmission Media and Data Compression</h1>
        
        <div class="navigation">
            <ul class="nav-list">
                <li class="nav-item" onclick="document.getElementById('section3_1').scrollIntoView({behavior: 'smooth'})">3.1 Guided transmission media: co-axial cable, twisted pair, optical fiber</li>
                <li class="nav-item" onclick="document.getElementById('section3_2').scrollIntoView({behavior: 'smooth'})">3.2 Unguided transmission media: Radio waves, microwaves, infrared</li>
                <li class="nav-item" onclick="document.getElementById('section3_3').scrollIntoView({behavior: 'smooth'})">3.3 Antenna basics, satellite communication</li>
                <li class="nav-item" onclick="document.getElementById('section3_4').scrollIntoView({behavior: 'smooth'})">3.4 Wireless propagation (Introduction to groundwave propagation, sky wave propagation and line of sight propagation), frequency bands</li>
                <li class="nav-item" onclick="document.getElementById('section3_5').scrollIntoView({behavior: 'smooth'})">3.5 Error detection and correction: Parity, check sum, cyclic redundancy check, hamming code</li>
                <li class="nav-item" onclick="document.getElementById('section3_6').scrollIntoView({behavior: 'smooth'})">3.6 Data compression: Lossy and lossless</li>
            </ul>
        </div>
        
        <!-- Section 3.1 -->
        <div id="section3_1" class="section">
            <h2 class="section-title">3.1 Guided transmission media: co-axial cable, twisted pair, optical fiber</h2>
            
            <div class="subsection-title">Guided Transmission Media</div>
            <p>Guided transmission media are also called bounded media or wired media. They comprise cables or wires through which data is transmitted. They are called guided since they provide a physical conduit from the sender device to the receiver device. The signal traveling through these media are bounded by the physical limits of the medium.</p>
            
            <p>Features:</p>
            <ul>
                <li>High Speed</li>
                <li>Secure</li>
                <li>Used for comparatively shorter distances</li>
            </ul>
            
            <p>The most popular guided media are:</p>
            <ul>
                <li>Twisted pair cable</li>
                <li>Coaxial cable</li>
                <li>Fiber optics</li>
            </ul>
            
            <div class="subsection-title">Twisted Pair Cable</div>
            <p>Twisted-pair cabling is a form of copper cabling that consists of one to four pairs of color-coded insulated stranded copper wires that are twisted together in pairs and enclosed in a protective outer sheath. It is capable of handling up to 100 Mbps.</p>
            
            <p>The twisted wires have interference cancelling properties. Thus, it is suitable for data and voice infrastructures over short distances as the cable reduces the effect of electromagnetic interference on electronic signals. It's also more pliable and easier to install than coaxial cable.</p>
            
            <div class="subsection-title">Types of Twisted Pair Cables</div>
            <p>Two types of twisted pair cables are used: shielded and unshielded.</p>
            
            <div class="subsection-title">Unshielded Twisted Pair (UTP)</div>
            <p>It is the more common of the two types and is used in Ethernet installations and is often utilized in applications for both residential and business.</p>
            <ul>
                <li>Category 3 to 10 Mbps</li>
                <li>Category 4 to 20 Mbps</li>
                <li>Category 5 to 100 Mbps</li>
            </ul>
            <p>UTP cables are less expensive but are prone to noise.</p>
            
            <div class="subsection-title">Shielded Twisted Pair (STP)</div>
            <p>Shielded cable has a fine wire mesh surrounding the wires to protect the transmission. It is used in telephone networks, as well as network and data communications to reduce outside interference and crosstalk and is designed to assist in grounding.</p>
            
            <div class="subsection-title">Advantages and Disadvantages of Twisted Pair Cable</div>
            <table>
                <tr>
                    <th>Advantages</th>
                    <th>Disadvantages</th>
                </tr>
                <tr>
                    <td>Cost-effective</td>
                    <td>Lower durability (must be routinely maintained)</td>
                </tr>
                <tr>
                    <td>Pliable and easy to install</td>
                    <td>Susceptible to EMI</td>
                </tr>
                <tr>
                    <td>Performs best over short distance</td>
                    <td>Higher attenuation</td>
                </tr>
            </table>
            
            <div class="subsection-title">Coaxial Cable</div>
            <p>Coaxial cables are copper cables with better shielding than twisted pair cables, so that transmitted signals may travel longer distances at higher speeds.</p>
            
            <p>A coaxial cable consists of these layers, starting from the innermost:</p>
            <ol>
                <li>Stiff copper wire as core</li>
                <li>Insulating material surrounding the core</li>
                <li>Closely woven braided mesh of conducting material surrounding the insulator</li>
                <li>Protective plastic sheath encasing the wire</li>
            </ol>
            
            <p>Distance between the outer conductor and inner conductor plus the type of material used for insulating the inner conductor determine the cable properties.</p>
            
            <p>It is used in television distribution and local area network.</p>
            
            <div class="subsection-title">Advantages and Disadvantages of Coaxial Cable</div>
            <table>
                <tr>
                    <th>Advantages</th>
                    <th>Disadvantages</th>
                </tr>
                <tr>
                    <td>Excellent noise immunity</td>
                    <td>Expensive as compared to twisted pair cables</td>
                </tr>
                <tr>
                    <td>Signals can travel longer distances at higher speeds, e.g., 1 to 2 Gbps for 1 Km cable</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Can be used for both analog and digital signals</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Inexpensive as compared to fiber optic cables</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Easy to install and maintain</td>
                    <td></td>
                </tr>
            </table>
            
            <div class="subsection-title">Optical Fiber</div>
            <p>Thin glass or plastic threads used to transmit data using light waves are called optical fiber.</p>
            
            <p>Light Emitting Diodes (LEDs) or Laser Diodes (LDs) emit light waves at the source, which is read by a detector at the other end. Optical fiber cable has a bundle of such threads or fibers bundled together in a protective covering.</p>
            
            <p>Each fiber is made up of these three layers, starting with the innermost layer:</p>
            <ol>
                <li>Core made of high-quality silica glass or plastic</li>
                <li>Cladding made of high-quality silica glass or plastic, with a lower refractive index than the core</li>
                <li>Protective outer covering called buffer</li>
            </ol>
            
            <p>Optical fiber is rapidly replacing copper wires in telephone lines, internet communication and even cable TV connections because transmitted data can travel very long distances without weakening.</p>
            
            <p>Single-mode fiber optic cable can have maximum segment length of 2 kms and bandwidth of up to 100 Mbps. Multi-mode fiber optic cable can have maximum segment length of 100 kms and bandwidth up to 2 Gbps.</p>
            
            <div class="subsection-title">Applications of Optical Fiber</div>
            <ul>
                <li>Long-haul trunks</li>
                <li>Metroplitan trunks</li>
                <li>Rural exchange trunks</li>
                <li>Subscriber loops</li>
                <li>LANs</li>
            </ul>
            
            <div class="subsection-title">Modes of Fiber Optic Transmission</div>
            <div class="subsection-title">Single Mode</div>
            <p>Only the fundamental zero-order mode is transmitted in a single-mode fiber. Single mode optical fiber has narrow core diameter. They typically using a laser as the light source. Because the single-mode fiber propagates only the fundamental mode, modal dispersion (the primary cause of pulse overlap) is eliminated. Thus, the bandwidth is much higher with a single-mode fiber than that of a multimode fiber. It is difficult and costly to fabricate.</p>
            
            <div class="subsection-title">Multi-mode Step Index</div>
            <p>The core of a step-index fiber has a uniform index of refraction right up to the cladding interface where the index changes in a step-like fashion. They typically use LEDs as the light source. Because different modes in a step-index fiber travel different path lengths in their journey through the fiber, data transmission distances must be kept short to avoid considerable modal dispersion problems. It is easier and cheap to fabricate.</p>
            
            <div class="subsection-title">Multi-mode Graded Index</div>
            <p>The core in a graded-index fiber has an index of refraction that radially decreases continuously from the center to the cladding interface. As a result, the light travels faster at the edge of the core than in the center. Different modes travel in curved paths with nearly equal travel times. This greatly reduces modal dispersion in the fiber.</p>
            
            <div class="subsection-title">Advantages and Disadvantages of Optical Fiber</div>
            <table>
                <tr>
                    <th>Advantages</th>
                    <th>Disadvantages</th>
                </tr>
                <tr>
                    <td>Bandwidth is higher than copper cables</td>
                    <td>The optical fiber cables are very difficult to merge & there will be a loss of the beam within the cable while scattering</td>
                </tr>
                <tr>
                    <td>Less power loss and allows data transmission for longer distances</td>
                    <td>These cables are more delicate than copper wires</td>
                </tr>
                <tr>
                    <td>The optical cable is resistance for electromagnetic interference</td>
                    <td></td>
                </tr>
                <tr>
                    <td>These cables are lighter, thinner, and occupy less area compare with metal wires</td>
                    <td></td>
                </tr>
                <tr>
                    <td>The optical fiber cable is very hard to tap because they don't produce electromagnetic energy. These cables are very secure while carrying or transmitting data</td>
                    <td></td>
                </tr>
            </table>
        </div>
        
        <!-- Section 3.2 -->
        <div id="section3_2" class="section">
            <h2 class="section-title">3.2 Unguided transmission media: Radio waves, microwaves, infrared</h2>
            
            <div class="subsection-title">Unguided Transmission Media</div>
            <p>Unguided/Unbound transmission media are the ways of transmitting data without using any cables. These media are not bounded by physical geography. This type of transmission is called Wireless communication.</p>
            
            <p>Features:</p>
            <ul>
                <li>The signal is broadcasted through air</li>
                <li>Less Secure</li>
                <li>Used for larger distances</li>
            </ul>
            
            <p>The most popular unguided media are:</p>
            <ul>
                <li>Radio wave</li>
                <li> microwave</li>
                <li>Infrared</li>
            </ul>
            
            <div class="subsection-title">Radio Waves</div>
            <p>Electromagnetic waves ranging in frequencies between 3 KHz and 1 GHz are normally called radio waves.</p>
            
            <p>Radio waves are omnidirectional. When an antenna transmits radio waves, they are propagated in all directions. This means that the sending and receiving antennas do not have to be aligned. A sending antenna send waves that can be received by any receiving antenna.</p>
            
            <p>The omnidirectional property has disadvantage, too. The radio waves transmitted by one antenna are susceptible to interference by another antenna that may send signal suing the same frequency or band. Also, they offer poor security and have high attenuation.</p>
            
            <p>Radio waves, particularly with those of low and medium frequencies, can penetrate walls. This characteristic can be both an advantage and a disadvantage. It is an advantage because, an AM radio can receive signals inside a building. It is a disadvantage because we cannot isolate a communication to just inside or outside a building.</p>
            
            <div class="subsection-title">Applications of Radio Waves</div>
            <p>The omnidirectional characteristics of radio waves make them useful for multicasting in which there is one sender but many receivers. AM and FM radio, television, maritime radio, cordless phones, and paging are examples of multicasting.</p>
            
            <div class="subsection-title">Microwaves</div>
            <p>Electromagnetic waves having frequencies between 1 and 300 GHz are called microwaves.</p>
            
            <p>Microwaves are unidirectional. When an antenna transmits microwaves, they can be narrowly focused. This means that the sending and receiving antennas need to be aligned.</p>
            
            <p>The following describes some characteristics of microwaves propagation:</p>
            <ul>
                <li>Microwave propagation is line-of-sight. Since the towers with the mounted antennas need to be in direct sight of each other, towers that are far apart need to be very tall.</li>
                <li>Very high-frequency microwaves cannot penetrate walls. This characteristic can be a disadvantage if receivers are inside the buildings.</li>
                <li>The microwave band is relatively wide, almost 299 GHz. Therefore, wider sub-bands can be assigned, and a high date rate is possible.</li>
                <li>Use of certain portions of the band requires permission from authorities.</li>
            </ul>
            
            <div class="subsection-title">Terrestrial Microwave Transmission</div>
            <p>Terrestrial Microwave transmission is a technology that transmits the focused beam of a radio signal from one ground-based microwave transmission antenna to another. Antennas are mounted on the towers to send a beam to another antenna which is km away.</p>
            
            <p>Characteristics of Microwave:</p>
            <ul>
                <li>Frequency range: The frequency range of terrestrial microwave is from 4-6 GHz to 21-23 GHz.</li>
                <li>Bandwidth: It supports the bandwidth from 1 to 10 Mbps.</li>
                <li>Short distance: It is inexpensive for short distance.</li>
                <li>Long distance: It is expensive as it requires a higher tower for a longer distance.</li>
                <li>Attenuation: Attenuation means loss of signal. It is variable and is affected by environmental conditions and antenna size.</li>
                <li>Security: These offers medium security</li>
            </ul>
            
            <div class="subsection-title">Advantages of Microwave</div>
            <ul>
                <li>Microwave transmission is cheaper than using cables.</li>
                <li>It is free from land acquisition as it does not require any land for the installation of cables.</li>
                <li>Microwave transmission provides an easy communication in terrains as the installation of cable in terrain is quite a difficult task.</li>
                <li>Communication over oceans can be achieved by using microwave transmission.</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of Microwave</div>
            <ul>
                <li>Eavesdropping: An eavesdropping creates insecure communication. Any malicious user can catch the signal in the air by using its own antenna.</li>
                <li>Susceptible to weather condition: A microwave transmission is susceptible to weather condition. This means that any environmental change such as rain, wind can distort the signal.</li>
            </ul>
            
            <div class="subsection-title">Satellite Microwave Transmission</div>
            <p>A satellite is a physical object that revolves around the earth at a known height. Satellite communication is more reliable nowadays as it offers more flexibility than cable and fiber optic systems.</p>
            
            <p>We can communicate with any point on the globe by using satellite communication.</p>
            
            <p>How Does Satellite work?</p>
            <p>The satellite accepts the signal that is transmitted from the earth station, and it amplifies the signal. The amplified signal is retransmitted to another earth station.</p>
            
            <p>The satellite is positioned in a geo-synchronous orbit, so that it is stationery relative to earth and always stays over the same point on the ground. This is usually done to allow ground stations to aim antenna at a fixed point in the sky.</p>
            
            <div class="subsection-title">Advantages Of Satellite Microwave Communication</div>
            <ul>
                <li>The coverage area of a satellite microwave is more than the terrestrial microwave.</li>
                <li>The transmission cost of the satellite is independent of the distance from the centre of the coverage area.</li>
            </ul>
            
            <div class="subsection-title">Disadvantages Of Satellite Microwave Communication</div>
            <ul>
                <li>Satellite designing and development requires more time and higher cost.</li>
                <li>The Satellite needs to be monitored and controlled on regular periods so that it remains in orbit.</li>
                <li>The life of the satellite is about 12-15 years. Due to this reason, another launch of the satellite must be planned before it becomes non-functional.</li>
            </ul>
            
            <div class="subsection-title">Infrared Communication</div>
            <p>Infrared waves are used for very short distance communication.</p>
            <p>These are unidirectional in nature.</p>
            <p>They cannot penetrate through any solid object and walls.</p>
            <p>Frequency range: 300 GHz to 400 GHz.</p>
            <p>These offers high security and also attenuation is low compared to radio waves and microwaves.</p>
            <p>Common applications include remote controls, short-range wireless data transfer (like in some printers), and infrared data associations (IrDA) for device pairing.</p>
        </div>
        
        <!-- Section 3.3 -->
        <div id="section3_3" class="section">
            <h2 class="section-title">3.3 Antenna basics, satellite communication</h2>
            
            <div class="subsection-title">Antenna Basics</div>
            <p>An Antenna is a transducer, which converts electrical power into electromagnetic waves and vice versa.</p>
            <ul>
                <li>A transmitting antenna is one, which converts electrical signals into electromagnetic waves and radiates them.</li>
                <li>A receiving antenna is one, which converts electromagnetic waves from the received beam into electrical signals.</li>
                <li>In two-way communication, the same antenna can be used for both transmission and reception.</li>
            </ul>
            
            <div class="subsection-title">How does an Antenna Works?</div>
            <p>An antenna works by using the principles of electromagnetism to convert electrical signals into electromagnetic (EM) waves, and vice versa.</p>
            
            <div class="subsection-title">Transmitting Mode:</div>
            <ul>
                <li>A high-frequency alternating current (AC) is fed into the antenna.</li>
                <li>This AC creates oscillating electric (E) field given by Maxwell's equation which in turn produces magnetic (H) field given by Faraday's law around the conductor.</li>
                <li>The changing electric and magnetic fields support each other and propagate away from the antenna as an electromagnetic wave.</li>
                <li>This wave travels through free space at the speed of light (≈ 3 × 10⁸ m/s).</li>
                <li>The antenna radiates this EM wave out into space.</li>
                <li>The shape and direction of this radiation depend on the antenna type and design.</li>
            </ul>
            
            <div class="subsection-title">Receiving Mode:</div>
            <p>A passing electromagnetic wave induces tiny voltage and current in the antenna due to Faraday's Law of Induction. The antenna converts this captured energy back into an electrical signal. The signal is then passed to a receiver circuit (like a radio or phone) for amplification and processing.</p>
            
            <div class="subsection-title">Basic Parameters of Antenna</div>
            
            <div class="subsection-title">Frequency</div>
            <p>The rate of repetition of a wave over a particular period of time, is called as frequency. A periodic wave repeats itself after every T seconds (time period). Frequency of periodic wave is nothing but the reciprocal of time period (T).</p>
            <div class="formula">f = 1/T</div>
            <p>The unit of frequency is Hertz, abbreviated as Hz.</p>
            
            <div class="subsection-title">Wavelength</div>
            <p>The distance between two consecutive maximum points (crests) or between two consecutive minimum points (troughs) is known as the wavelength.</p>
            <div class="formula">λ = c/f</div>
            
            <div class="subsection-title">Impedance Matching</div>
            <p>The approximate value of impedance of a transmitter, when equals the approximate value of the impedance of a receiver, or vice versa, it is termed as Impedance matching.</p>
            <div class="formula">Z = √(R² + (X_L - X_C)²)</div>
            <p>Impedance matching is necessary between the antenna and the circuitry. The impedance of the antenna, the transmission line, and the circuitry should match so that maximum power transfer takes place between the antenna and the receiver or the transmitter.</p>
            
            <div class="subsection-title">VSWR and Reflected Power</div>
            <p>The ratio of the maximum voltage to the minimum voltage in a standing wave is known as Voltage Standing Wave Ratio. It indicates how well the antenna is matched to the transmission line.</p>
            <p>If the impedance of the antenna, the transmission line and the circuitry do not match with each other, then the power will not be radiated effectively. Instead, some of the power is reflected back.</p>
            <p>If the reflection coefficient is given by Γ (Capital gamma), then the VSWR is defined by the following formula:</p>
            <div class="formula">VSWR = (1 + |Γ|) / (1 - |Γ|)</div>
            <p>The ideal value of VSWR should be 1:1 for effective radiation.</p>
            
            <div class="subsection-title">Bandwidth</div>
            <p>It is the band of frequencies between the higher and lower frequencies over which the antenna can properly radiate or receive energy.</p>
            <p>Often, the desired bandwidth is one of the determining parameters used to decide upon an antenna. For instance, many antenna types have very narrow bandwidths and cannot be used for wideband operation.</p>
            <p>The particular frequency within a frequency band, at which the signal strength is maximum, is called as resonant frequency. It is also called as center frequency (fC) of the band.</p>
            
            <div class="subsection-title">Radiation Pattern</div>
            <p>The pattern in which an antenna emits radio frequency energy is known as its radiation pattern.</p>
            <p>The radiation from an antenna represents how the antenna performs for a specific application in terms of radiation field strength, directivity, gain, phase, and radiation efficiency as a function of radial distance and angular position from the antenna.</p>
            <p>An antenna radiation pattern is the mathematical graphical representation of the radiation energy distribution into all directions of space and hence is three-dimensional, expressed in the spherical coordinate system.</p>
            
            <img src="https://via.placeholder.com/600x300?text=3D+Radiation+Pattern" alt="3D Radiation Pattern">
            <p class="image-caption">Figure: 3D radiation pattern of an antenna</p>
            
            <div class="subsection-title">Types of Radiation Pattern</div>
            <ul>
                <li>Far-Field Pattern (most common): It shows how the antenna radiates energy at large distances. It is used for communication systems.</li>
                <li>Near-Field Pattern: It describes the field close to the antenna. It is used in applications like RFID or medical devices.</li>
            </ul>
            
            <div class="subsection-title">Dimensions of Radiation Pattern</div>
            <p>Radiation patterns are typically shown in two dimensions:</p>
            <ul>
                <li>Azimuth Pattern (Horizontal Plane or XY Plane): View from the top Shows how power spreads around the antenna horizontally. Example: coverage area of a Wi-Fi router across a room.</li>
                <li>Elevation Pattern (Vertical Plane or YZ Plane): Side view Shows how power spreads above and below the antenna. Example: how a tower antenna beams its signal toward the horizon or sky.</li>
            </ul>
            
            <div class="subsection-title">Key shapes of radiation patterns</div>
            <table>
                <tr>
                    <th>Pattern Shape</th>
                    <th>Description</th>
                    <th>Example</th>
                </tr>
                <tr>
                    <td>Omnidirectional</td>
                    <td>Radiates equally in all directions in one plane (e.g., circular in horizontal)</td>
                    <td>Dipole, vertical whip antenna</td>
                </tr>
                <tr>
                    <td>Directional</td>
                    <td>Radiates more in one direction than others</td>
                    <td>Yagi-Uda, horn antenna</td>
                </tr>
                <tr>
                    <td>Isotropic (theoretical)</td>
                    <td>Radiates equally in all directions (perfect sphere)</td>
                    <td>Not physically possible, used as reference</td>
                </tr>
            </table>
            
            <div class="subsection-title">Lobe Formation</div>
            <p>The major part of the radiated field, which covers a larger area, is the main lobe or major lobe. This is the portion where maximum radiated energy exists. The direction of this lobe indicates the directivity of the antenna.</p>
            <p>The other parts of the pattern where the radiation is distributed side wards are known as side lobes or minor lobes. These are the areas where the power is wasted.</p>
            <p>There is other lobe, which is exactly opposite to the direction of main lobe. It is known as back lobe, which is also a minor lobe. A considerable amount of energy is wasted even here.</p>
            
            <div class="subsection-title">Directivity</div>
            <p>It is a measure of how focused an antenna's radiation is in a particular direction compared to an isotropic radiator (an ideal antenna that radiates equally in all directions).</p>
            <div class="formula">D = (Radiated power in a given direction) / (Average radiated power in all directions)</div>
            <p>Or, in terms of maximum power density:</p>
            <div class="formula">D = 4π · U(maximum) / P(rad)</div>
            <p>Where,</p>
            <ul>
                <li>U(maximum) = Maximum radiation intensity (watts per steradian, W/sr)</li>
                <li>P(rad) = Total radiated power (W)</li>
                <li>4π = Total solid angle in a sphere (steradians)</li>
            </ul>
            <p>To express directivity in decibels: DdBi = 10log10(D)</p>
            <p>"dBi" stands for "decibels over isotropic"</p>
            
            <div class="subsection-title">Gain</div>
            <p>Gain of an antenna is the ratio of the radiation intensity in a given direction to the radiation intensity that would be obtained if the power accepted by the antenna were radiated isotropically.</p>
            <p>Gain is usually measured in dB.</p>
            <p>Unlike directivity, antenna gain takes the losses that occur also into account and hence focuses on the efficiency.</p>
            <p>If ηe is the antenna's efficiency and D is the directivity, then gain (G) is given by:</p>
            <div class="formula">G = ηe · D</div>
            <p>The unit of gain is decibels or simply dB.</p>
            
            <div class="subsection-title">Types of Antennas</div>
            <table>
                <tr>
                    <th>Typical Applications</th>
                    <th>Description</th>
                    <th>Type of Antenna</th>
                </tr>
                <tr>
                    <td>Radio, TV broadcasting, simple RF systems</td>
                    <td>Two equal-length metal rods; basic, omnidirectional in horizontal plane</td>
                    <td>Dipole Antenna</td>
                </tr>
                <tr>
                    <td>Car radios, mobile phones, base stations</td>
                    <td>One conductor over a ground plane; half of a dipole</td>
                    <td>Monopole Antenna</td>
                </tr>
                <tr>
                    <td>RFID systems, AM receivers, direction finding</td>
                    <td>Wire loop(small or large); magnetic field-based radiation</td>
                    <td>Loop Antenna</td>
                </tr>
                <tr>
                    <td>TV antennas, ham radio, long-range communication</td>
                    <td>One driven element with parasitic directors and reflectors</td>
                    <td>Yagi-Uda Antenna</td>
                </tr>
                <tr>
                    <td>Microwave systems, radar, satellite feeds</td>
                    <td>Flared metal waveguide that directs radio waves</td>
                    <td>Horn Antenna</td>
                </tr>
                <tr>
                    <td>Satellite TV, deep-space communication, radar</td>
                    <td>Paraboloid reflector with a feed antenna at the focal point</td>
                    <td>Parabolic Dish</td>
                </tr>
                <tr>
                    <td>Satellite and space communication, GPS</td>
                    <td>Wire wound in helix, circular polarization</td>
                    <td>Helical Antenna</td>
                </tr>
                <tr>
                    <td>Mobile phones, Wi-Fi routers, GPS, IoT devices</td>
                    <td>Flat rectangular conductor on PCB, compact and planar</td>
                    <td>Patch (Microstrip)</td>
                </tr>
                <tr>
                    <td>Wideband TV antennas, EMI testing, frequency scanning</td>
                    <td>Multiple dipole elements of varying lengths, wide frequency range</td>
                    <td>Log-Periodic Antenna</td>
                </tr>
                <tr>
                    <td>5G systems, radar, military, satellite tracking</td>
                    <td>Array of elements with adjustable phases to steer beam electronically</td>
                    <td>Phased Array Antenna</td>
                </tr>
                <tr>
                    <td>Aircraft, microwave circuits, radar</td>
                    <td>Slot cut into a metal surface, radiates like a dipole</td>
                    <td>Slot Antenna</td>
                </tr>
                <tr>
                    <td>Surveillance, EMI testing, wideband communication</td>
                    <td>Flat spiral-shaped antenna with wideband performance</td>
                    <td>Spiral Antenna</td>
                </tr>
            </table>
            
            <div class="subsection-title">Satellite Communication</div>
            <p>A communication satellite is an orbiting artificial earth satellite that receives a communications signal from a transmitting ground station, amplifies and possibly processes it, then transmits it back to the earth for reception by one or more receiving ground stations.</p>
            <p>Communications information neither originates nor terminates at the satellite itself. The satellite is an active transmission relay, similar in function to relay towers used in terrestrial microwave communications.</p>
            <p>Today's communications satellites offer extensive capabilities in applications involving data, voice, and video, with services provided to fixed, broadcast, mobile, personal communications, and private networks users.</p>
            
            <div class="subsection-title">Evolution of Satellite Communication</div>
            <p>During early 1950s, both passive and active satellites were considered for the purpose of communications over a large distance.</p>
            
            <div class="subsection-title">Passive Satellites</div>
            <ul>
                <li>A satellite that only reflects signals from one Earth station to another or from several Earth stations to several others.</li>
                <li>It reflects the incident electromagnetic radiation without any modification or amplification.</li>
                <li>It can't generate power; they simply reflect the incident power.</li>
                <li>Earth Stations required high power to transmit signals.</li>
                <li>The large attenuation of the signal while traveling the large distance between the transmitter and the receiver via the satellite was one of the most serious problems.</li>
            </ul>
            
            <div class="subsection-title">Active Satellites</div>
            <ul>
                <li>In active satellites, it amplifies or modifies and retransmits the signal received from the earth.</li>
                <li>Satellites which can transmit power are called active satellite.</li>
                <li>Have several advantages over the passive satellites.</li>
                <li>Require lower power earth station.</li>
                <li>Directly controlled by operators from ground.</li>
                <li>Requirement of on-board power supply.</li>
                <li>Interruption of service due to failure of electronics components</li>
            </ul>
            
            <p>The satellite communications portion is broken down into two areas or segments: the space segment and the ground (or earth) segment.</p>
            
            <div class="subsection-title">Features of satellite communications</div>
            <ul>
                <li>Satellites used in satellite communications are usually in geostationary orbit. Some of them are placed in highly elliptical orbits.</li>
                <li>Satellite communications can provide global availability. It can not only land masses but also maritime areas as well. Large distances can thus be covered quiet easily.</li>
                <li>One of the main advantages provided by satellite communication is the superior reliability unlike other forms of communication. It does not need terrestrial infrastructure for operation.</li>
                <li>Satellite communication could provide superior performance as uniformity and speed are much more pronounced than other forms of communication.</li>
                <li>Scalability is higher in case of satellite communications.</li>
                <li>As it is less vulnerable than other forms of communication, it is highly used in defense departments.</li>
                <li>Satellite communications also provide weather information.</li>
                <li>It can be helpful during times of disasters as the services rarely fail.</li>
                <li>High amount of data can be transmitted with the help of satellites.</li>
            </ul>
            
            <div class="subsection-title">Satellite Communication - Advantages</div>
            <ul>
                <li>Flexibility</li>
                <li>Ease in installing new circuits</li>
                <li>Distances are easily covered and cost doesn't matter</li>
                <li>Broadcasting possibilities</li>
                <li>Each and every corner of earth is covered</li>
                <li>User can control the network</li>
            </ul>
            
            <div class="subsection-title">Satellite Communication - Disadvantages</div>
            <ul>
                <li>The initial costs such as segment and launch costs are too high.</li>
                <li>Congestion of frequencies</li>
                <li>Interference and propagation</li>
            </ul>
            
            <div class="subsection-title">Satellite Communication - Applications</div>
            <ul>
                <li>In Radio broadcasting.</li>
                <li>In TV broadcasting such as DTH.</li>
                <li>In Internet applications such as providing Internet connection for data transfer, GPS applications, Internet surfing, etc.</li>
                <li>For voice communications.</li>
                <li>For research and development sector, in many areas.</li>
                <li>In military applications and navigations.</li>
            </ul>
            
            <div class="subsection-title">Earth Orbits</div>
            <p>A satellite when launched into space, needs to be placed in a certain orbit to provide a particular way for its revolution, so as to maintain accessibility and serve its purpose whether scientific, military, or commercial. Such orbits which are assigned to satellites, with respect to earth are called Earth Orbits.</p>
            <p>The satellites in these orbits are Earth Orbit Satellites.</p>
            <p>The important kinds of Earth Orbits are:</p>
            <ul>
                <li>Geo Synchronous Earth Orbit (GEO)</li>
                <li>Medium Earth Orbit (MEO)</li>
                <li>Low Earth Orbit (LEO)</li>
            </ul>
            
            <div class="subsection-title">Geostationary Earth Orbit (GEO)</div>
            <p>A Geo-Synchronous Earth Orbit (GEO) satellite is one which is placed at an altitude of 22,300 miles above the Earth. This orbit is synchronized with a side real day (i.e., 23 hours 56 minutes).</p>
            <p>This orbit can have inclination and eccentricity. It may not be circular. This orbit can be tilted at the poles of the earth. But it appears stationary when observed from the Earth.</p>
            <p>The same geo-synchronous orbit, if it is circular and in the plane of equator, it is called as geo-stationary orbit.</p>
            <p>These satellites are placed at 35,900 kms (same as geosynchronous) above the Earth's Equator and they keep on rotating with respect to earth's direction (west to east). These satellites are considered stationary with respect to earth and hence the name implies.</p>
            <p>Geo-Stationary Earth Orbit Satellites are used for weather forecasting, satellite TV, satellite radio and other types of global communications.</p>
            
            <div class="subsection-title">Medium Earth Orbit (MEO)</div>
            <p>Medium Earth Orbit (MEO) satellite networks will orbit at distances of about 8000 miles from the earth's surface.</p>
            <p>Signals transmitted from a MEO satellite travel a shorter distance. This translates to improved signal strength at the receiving end.</p>
            <p>This shows that smaller, more lightweight receiving terminals can be used at the receiving end.</p>
            <p>Since the signal is travelling a shorter distance to and from the satellite, there is less transmission delay.</p>
            <p>Transmission delay can be defined as the time it takes for a signal to travel up to a satellite and back down to a receiving station.</p>
            <p>For real-time communications, the shorter the transmission delay, the better will be the communication system.</p>
            <p>As an example, if a GEO satellite requires 0.25 seconds for a round trip, then MEO satellite requires less than 0.1 seconds to complete the same trip. MEOs operates in the frequency range of 2 GHz and above.</p>
            
            <div class="subsection-title">Low Earth Orbit (LEO)</div>
            <p>The Low Earth Orbit (LEO) satellites are mainly classified into three categories namely, little LEOs, big LEOs, and Mega-LEOs. LEOs will orbit at a distance of 500 to 1000 miles above the earth's surface.</p>
            <p>This relatively short distance reduces transmission delay to only 0.05 seconds. This further reduces the need for sensitive and bulky receiving equipment.</p>
            <p>Little LEOs will operate in the 800 MHz (0.8 GHz) range. Big LEOs will operate in the 2 GHz or above range, and Mega-LEOs operates in the 20-30 GHz range.</p>
            <p>The higher frequencies associated with Mega-LEOs translates into more information carrying capacity and yields to the capability of real-time, low delay video transmission scheme.</p>
            
            <div class="subsection-title">Comparison between GEO, MEO and LEO</div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>GEO (Geostationary)</th>
                        <th>MEO (Medium Earth Orbit)</th>
                        <th>LEO (Low Earth Orbit)</th>
                    </tr>
                    <tr>
                        <td>Altitude</td>
                        <td>~35,786 km</td>
                        <td>~2,000 – 20,000 km</td>
                        <td>~160 – 2,000 km</td>
                    </tr>
                    <tr>
                        <td>Orbital Period</td>
                        <td>24 hours (matches Earth's rotation)</td>
                        <td>2 – 12 hours</td>
                        <td>~90 – 120 minutes</td>
                    </tr>
                    <tr>
                        <td>Position</td>
                        <td>Fixed over the equator</td>
                        <td>Moves relative to Earth</td>
                        <td>Moves quickly relative to Earth</td>
                    </tr>
                    <tr>
                        <td>Coverage Area</td>
                        <td>Very large (1 satellite covers 1/3 Earth)</td>
                        <td>Moderate</td>
                        <td>Small</td>
                    </tr>
                    <tr>
                        <td>Latency</td>
                        <td>High (~600 ms)</td>
                        <td>Medium (~100–200 ms)</td>
                        <td>Low (~30–50 ms)</td>
                    </tr>
                    <tr>
                        <td>Number of Satellites</td>
                        <td>Few (3 can cover most of the globe)</td>
                        <td>Dozens for full coverage</td>
                        <td>Hundreds to thousands for global coverage</td>
                    </tr>
                    <tr>
                        <td>Launch & Maintenance</td>
                        <td>Expensive and complex</td>
                        <td>Moderate cost</td>
                        <td>Less expensive and easier to launch</td>
                    </tr>
                    <tr>
                        <td>Applications</td>
                        <td>TV, weather forecasting, fixed satellite</td>
                        <td>Global Navigation Satellite System (GNSS)</td>
                        <td>Earth observation, IoT, Starlink broadband</td>
                    </tr>
                    <tr>
                        <td>Examples</td>
                        <td>INSAT (9), GOES (5), GSAT (15)</td>
                        <td>GPS (30), Galileo (24), GLONASS (23)</td>
                        <td>Starlink (6,731), OneWeb, Earth-imaging satellites</td>
                    </tr>
                    <tr>
                        <td>Advantages</td>
                        <td>Constant coverage, stable location</td>
                        <td>Better latency than GEO</td>
                        <td>Low latency, frequent revisit time</td>
                    </tr>
                    <tr>
                        <td>Disadvantages</td>
                        <td>High latency, signal loss at poles</td>
                        <td>Requires tracking and more satellites</td>
                        <td>Shorter lifespan, more frequent replacements</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <!-- Section 3.4 -->
        <div id="section3_4" class="section">
            <h2 class="section-title">3.4 Wireless propagation (Introduction to groundwave propagation, sky wave propagation and line of sight propagation), frequency bands</h2>
            
            <div class="subsection-title">Wireless Propagation</div>
            <p>Radio waves can propagate through air, water, various solid object and vacuum. The ability of radio waves to propagate through various materials depends on the wavelength and the frequency of the radio waves.</p>
            
            <p>There are three main modes of propagation of radio waves: ground wave, sky wave, and space wave.</p>
            
            <div class="subsection-title">Ground Wave Propagation</div>
            <p>This mode of propagation occurs when the transmitting waves travel along the earth's surface and are received at the receiving antenna is known as the Ground wave propagation.</p>
            
            <p>The range of the Ground wave Propagation depends on the frequency of the transmitted wave, the power of the transmitter, and the properties of the earth's surface and the earth's atmosphere.</p>
            
            <p>Most effective at low frequencies (30 kHz to 2 MHz).</p>
            <p>It is used for medium-range communication such as 100km to 1000km.</p>
            <p>Loses energy due to: Diffraction (bending over surface) and Absorption (by ground).</p>
            <p>Applications: AM Radio broadcasting, Submarine Communication, Long-range Navigation.</p>
            
            <p>The power received by the receiver is given by:</p>
            <div class="formula">Pr = Pt · Gt · Gr · λ² / (4πd)² · 10^(-αd)</div>
            <p>Where,</p>
            <ul>
                <li>Pr = Received Power</li>
                <li>Pt = Transmitted Power</li>
                <li>Gt, Gr = Transmit/Receive antenna gain</li>
                <li>λ = Wavelength</li>
                <li>d = distance</li>
                <li>α = Ground absorption constant</li>
            </ul>
            
            <div class="subsection-title">Sky Wave Propagation</div>
            <p>This mode of propagation occurs when the signal is transmitted by the transmitting antenna (Tx) is reflected by the ionosphere layer (sky) and received by the receiving antenna (Rx).</p>
            
            <p>Used in High Frequency (HF) band: 3 MHz to 30 MHz</p>
            <p>It is used for long-range communication (300–3000 km and beyond).</p>
            <p>Application: International broadcasting, Military communication, Long range aircraft/ship communication.</p>
            
            <p>The Maximum Usable Frequency (MUF) is given by:</p>
            <div class="formula">MUF = fc · sec(θ)</div>
            <p>Where, fc = 9√Nmax is Critical frequency (Nmax is the maximum electron density per m³).</p>
            <p>If transmission frequency > MUF → signal penetrates ionosphere instead of reflecting.</p>
            
            <div class="subsection-title">Line-of-Sight (LOS) Propagation</div>
            <p>This mode of propagation is used for short-range communication, typically within a few miles.</p>
            <p>The radio waves travel in a straight line from the transmitter to the receiver and require an unobstructed line of sight between the two.</p>
            <p>Works in VHF, UHF, SHF, EHF (30 MHz to GHz range)</p>
            <p>For satellite applications, signals are transmitted from an earth station antenna to the satellite antenna. For ground-based wireless links, communication occurs when both the transmit (Tx) and receive (Rx) antennas are within each other's line of sight.</p>
            <p>Applications: VHF/UHF television, Cellular telecom, FM broadcast, Radar</p>
            
            <p>For ideal conditions (no obstacles):</p>
            <div class="formula">d = √(2ht) + √(2hr)</div>
            <p>Where,</p>
            <ul>
                <li>d = Max LOS distance (in km)</li>
                <li>ht, hr = Heights of transmitter and receiver antennas (in meters)</li>
            </ul>
            
            <div class="subsection-title">Comparison between 3 modes of propagation</div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Ground Wave</th>
                        <th>Sky Wave</th>
                        <th>Line-of-Sight</th>
                    </tr>
                    <tr>
                        <td>Frequency Range</td>
                        <td>30 kHz – 2 MHz</td>
                        <td>3 MHz – 30 MHz</td>
                        <td>> 30 MHz</td>
                    </tr>
                    <tr>
                        <td>Distance</td>
                        <td>100 – 500 km</td>
                        <td>500 – 3000+ km</td>
                        <td>Up to 70 km (terrestrial)</td>
                    </tr>
                    <tr>
                        <td>Medium Interaction</td>
                        <td>Follows Earth's surface</td>
                        <td>Reflected by ionosphere</td>
                        <td>Straight-line</td>
                    </tr>
                    <tr>
                        <td>Affected by</td>
                        <td>Terrain, conductivity</td>
                        <td>Ionospheric conditions</td>
                        <td>Obstructions, Earth curvature</td>
                    </tr>
                    <tr>
                        <td>Main Use</td>
                        <td>AM, maritime, military</td>
                        <td>International radio, HF communication</td>
                        <td>TV, satellite, Wi-Fi</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <!-- Section 3.5 -->
        <div id="section3_5" class="section">
            <h2 class="section-title">3.5 Error detection and correction: Parity, check sum, cyclic redundancy check, hamming code</h2>
            
            <div class="subsection-title">Error Detection and Correction</div>
            <p>Error detection and correction are essential mechanisms in data communication systems to ensure data integrity during transmission over unreliable or noisy communication channels.</p>
            
            <div class="subsection-title">Types of Errors</div>
            <ul>
                <li><strong>Single bit error</strong> − In the received frame, only one bit has been corrupted, i.e. either changed from 0 to 1 or from 1 to 0.</li>
                <li><strong>Multiple bits error</strong> − In the received frame, more than one bit is corrupted.</li>
                <li><strong>Burst error</strong> − In the received frame, more than one consecutive bit is corrupted.</li>
            </ul>
            
            <p>Error control can be done in two ways:</p>
            <ul>
                <li><strong>Error detection</strong> − Error detection involves checking whether any error has occurred or not. The number of error bits and the type of error does not matter.</li>
                <li><strong>Error correction</strong> − Error correction involves ascertaining the exact number of bits that has been corrupted and the location of the corrupted bits.</li>
            </ul>
            
            <div class="subsection-title">Error Detection Techniques</div>
            <p>There are three main techniques for detecting errors in frames: Parity Check, Checksum, and Cyclic Redundancy Check (CRC).</p>
            
            <div class="subsection-title">Parity Check</div>
            <p>The parity check is done by adding an extra bit, called parity bit to the data to make a number of 1s either even in case of even parity or odd in case of odd parity.</p>
            
            <p>For example, if even parity is used and number of 1s is even then one bit with value 0 is added. This way number of 1s remains even. If the number of 1s is odd, to make it even a bit with value 1 is added.</p>
            
            <p>The receiver simply counts the number of 1s in a frame. If the count of 1s is even and even parity is used, the frame is considered to be not-corrupted and is accepted. If the count of 1s is odd and odd parity is used, the frame is still not corrupted.</p>
            
            <p>If a single bit flips in transit, the receiver can detect it by counting the number of 1s. But when more than one bits are erroneous, then it is very hard for the receiver to detect the error.</p>
            
            <div class="subsection-title">Cyclic Redundancy Check (CRC)</div>
            <p>Cyclic Redundancy Check (CRC) involves binary division of the data bits being sent by a predetermined divisor agreed upon by the communicating system. The divisor is generated using polynomials.</p>
            
            <p>Here, the sender performs binary division of the data segment by the divisor. It then appends the remainder called CRC bits to the end of the data segment. This makes the resulting data unit exactly divisible by the divisor.</p>
            
            <p>The receiver divides the incoming data unit by the divisor. If there is no remainder, the data unit is assumed to be correct and is accepted. Otherwise, it is understood that the data is corrupted and is therefore rejected.</p>
            
            <div class="subsection-title">Checksum</div>
            <p>The following steps are followed while implementing checksum:</p>
            <ol>
                <li>Divide the data into equal-sized segments (e.g., 8-bit, 16-bit).</li>
                <li>Add all segments using binary addition.</li>
                <li>Take the 1's complement of the sum → this is the checksum.</li>
                <li>Transmit the data along with the checksum.</li>
                <li>Receiver adds all received segments (including checksum):
                    <ul>
                        <li>If result is all 1s (i.e., no carry left), data is correct.</li>
                        <li>Else, error is detected</li>
                    </ul>
                </li>
            </ol>
            
            <p><strong>Example:</strong> Transmission of data 1001 1101</p>
            <p>Data 1 = 1001<br>
            Data 2 = 1101</p>
            
            <p>Step 1: Add the two segments<br>
            1001 + 1101 = 1 0110 ← 5-bit result (carry = 1)</p>
            
            <p>Step 2: Add carry to LSB<br>
            0110 + 0001 = 0111</p>
            
            <p>Step 3: Take 1's complement of the result<br>
            0111 → 1000<br>
            Checksum = 1000</p>
            
            <p>Transmission: 1001 1101 1000</p>
            
            <p>At receiver: Add all three data (original segments of data and checksum)</p>
            <p>Step 1: Take sum of 2 data segments<br>
            1001 + 1101 = 1 0110</p>
            
            <p>Step 2: The sum consists of carry so, 0110 + 1 = 0111</p>
            
            <p>Step 3: Now add sum and checksum<br>
            0111 + 1000 = 1111</p>
            
            <p>Since result is all 1s, there is no error detected.</p>
            
            <div class="subsection-title">Error Correction Techniques</div>
            <p>Error correction techniques find out the exact number of bits that have been corrupted and as well as their locations. There are two principal ways:</p>
            
            <div class="subsection-title">Backward Error Correction (Retransmission)</div>
            <p>If the receiver detects an error in the incoming frame, it requests the sender to retransmit the frame. It is a relatively simple technique. But it can be efficiently used only where retransmitting is not expensive as in fiber optics and the time for retransmission is low relative to the requirements of the application.</p>
            
            <div class="subsection-title">Forward Error Correction</div>
            <p>If the receiver detects some error in the incoming frame, it executes error-correcting code that generates the actual frame. This saves bandwidth required for retransmission. It is inevitable in real-time systems. However, if there are too many errors, the frames need to be retransmitted.</p>
            
            <p>The three main error correction codes are:</p>
            <ul>
                <li>Hamming Codes</li>
                <li>Binary Convolution Code</li>
                <li>Reed – Solomon Code</li>
            </ul>
            
            <div class="subsection-title">Hamming Code</div>
            <p>Hamming code is a block code that is capable of detecting up to two simultaneous bit errors and correcting single-bit errors.</p>
            
            <p>In this coding method, the source encodes the message by inserting redundant bits within the message.</p>
            
            <p>These redundant bits are extra bits that are generated and inserted at specific positions in the message itself to enable error detection and correction.</p>
            
            <p>When the destination receives this message, it performs recalculations to detect errors and find the bit position that has error.</p>
            
            <p><strong>Example:</strong> Encode 4 data bits: D3 D2 D1 D0 = 1 0 1 1</p>
            
            <p>Step 1: Determine Number of Parity Bits</p>
            <p>where, m = number of data bits (4) and r = number of parity bits</p>
            <p>Try: r = 3 → 2³ = 8 ≥ 4+3+1 = 8 which is true so we need 3 parity bits.</p>
            
            <p>Step 2: Assign Positions</p>
            <p>Total bits = m + r = 7 bits</p>
            <p>Positions (1-indexed):</p>
            <table>
                <tr>
                    <th>Position</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                </tr>
                <tr>
                    <td>Contents</td>
                    <td>P1</td>
                    <td>P2</td>
                    <td>D3</td>
                    <td>P4</td>
                    <td>D2</td>
                    <td>D1</td>
                    <td>D0</td>
                </tr>
                <tr>
                    <td>Contents</td>
                    <td>?</td>
                    <td>?</td>
                    <td>1</td>
                    <td>?</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </table>
            
            <p>Step 3: Calculate Parity Bits (Even Parity)</p>
            <p>Parity bit at position 1 (P1) checks bits: 1, 3, 5, 7<br>
            • Bits: P1, D3, D2, D0 → positions 1, 3, 5, 7 → ?, 1, 0, 1 → (1+0+1=2) → even → P1 = 0</p>
            
            <p>Parity bit at position 2 (P2) checks bits: 2, 3, 6, 7<br>
            • Bits: P2, D3, D1, D0 → positions 2, 3, 6, 7 → ?, 1, 1, 1 → (1+1+1=3) → odd → P2 = 1</p>
            
            <p>Parity bit at position 4 (P4) checks bits: 4, 5, 6, 7<br>
            • Bits: P4, D2, D1, D0 → positions 4, 5, 6, 7 → ?, 0, 1, 1 → (0+1+1=2) → even → P4 = 0</p>
            
            <p>Final Hamming Code:</p>
            <p>Transmitted Code = 0110011</p>
            <table>
                <tr>
                    <th>Position</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                </tr>
                <tr>
                    <td>Bit</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </table>
            
            <div class="subsection-title">Error Detection and Correction using generated Hamming Code</div>
            <p>Now suppose this code is transmitted and a bit gets flipped, say position 5 (bit 0 → 1):</p>
            <p>Received Code: 0110111</p>
            
            <p>To find the error:</p>
            <ol>
                <li>Recalculate parity bits based on received code.</li>
                <li>Compare calculated vs received parity.</li>
                <li>If parity checks fail, calculate error position by binary sum of wrong parity positions.</li>
            </ol>
            
            <p>Step 1: Recalculate parity checks:</p>
            <p>• P1 (positions 1,3,5,7): 0 + 1 + 1 + 1 = 3 → odd → Error → set bit 1</p>
            <p>• P2 (positions 2,3,6,7): 1 + 1 + 1 + 1 = 4 → even → OK → bit 0</p>
            <p>• P4 (positions 4,5,6,7): 0 + 1 + 1 + 1 = 3 → odd → Error → set bit 4</p>
            
            <p>Error Position = P4 P2 P1 = 1 0 1 = binary 101 = position 5</p>
            
            <p>Flip bit 5 back → error corrected!</p>
        </div>
        
        <!-- Section 3.6 -->
        <div id="section3_6" class="section">
            <h2 class="section-title">3.6 Data compression: Lossy and lossless</h2>
            
            <div class="subsection-title">Data Compression</div>
            <p>Data compression is the process of encoding information using fewer bits than the original representation.</p>
            <p>The goal is to reduce:</p>
            <ul>
                <li>Storage requirements</li>
                <li>Transmission time</li>
                <li>Bandwidth usage</li>
            </ul>
            
            <p>There are two types of compression that can be applied to files: Lossy compression and Lossless compression.</p>
            
            <div class="subsection-title">Lossy Compression</div>
            <p>Lossy compression is a type of data encoding and compression that intentionally discards some data during the compression process.</p>
            <p>Lossy compression removes data that is less noticeable to human perception, such as:</p>
            <ul>
                <li>High-frequency sounds</li>
                <li>Slight color differences</li>
                <li>Redundant video frames</li>
            </ul>
            <p>It focuses on perceptual coding — what humans can or cannot detect.</p>
            
            <p>Various lossy standards exist:</p>
            <ul>
                <li>The JPEG file format works on this principle, which is why JPEG files tend to be smaller in size.</li>
                <li>The MPEG file format compresses audio and video, making it more suitable for streaming media</li>
                <li>MP3 is a lossy format for audio, including music. It remove sounds that humans can't hear well.</li>
            </ul>
            
            <div class="subsection-title">Lossless Compression</div>
            <p>Lossless compression entails compressing that data so that when the compression is reversed, the original dataset is fully recreated.</p>
            <p>Lossless compression algorithms find patterns, repetitions, or statistical redundancy in the data and encode it more efficiently.</p>
            <p>There are some files that we would not want to lose data from. For example: text files, spreadsheets, financial records, emails.</p>
            
            <p>Various lossless standards exist:</p>
            <ul>
                <li>PDF allows lossless compression of text documents</li>
                <li>PNG is a lossless image file format</li>
            </ul>
            
            <div class="subsection-title">Trade-offs: Lossy vs Lossless</div>
            <div class="table-container">
                <table>
                    <tr>
                        <th></th>
                        <th>Lossy Compression</th>
                        <th>Lossless Compression</th>
                    </tr>
                    <tr>
                        <td>By using lossy compression, you can get rid of bytes that are regarded as unnoticeable.</td>
                        <td>✓</td>
                        <td>✗</td>
                    </tr>
                    <tr>
                        <td>After lossy compression, a file cannot be restored to its original form.</td>
                        <td>✓</td>
                        <td>✗</td>
                    </tr>
                    <tr>
                        <td>Quality suffers as a result of lossy compression. It leads to some level of data loss.</td>
                        <td>✓</td>
                        <td>✗</td>
                    </tr>
                    <tr>
                        <td>Lossy compression reduces the size of a file to a large extent.</td>
                        <td>✓</td>
                        <td>✗</td>
                    </tr>
                    <tr>
                        <td>Transform coding, Discrete Cosine Transform, Discrete Wavelet transform, fractal compression, etc.</td>
                        <td>✓</td>
                        <td>✗</td>
                    </tr>
                    <tr>
                        <td>Lossy compression is used to compress audio, video and images.</td>
                        <td>✓</td>
                        <td>✗</td>
                    </tr>
                    <tr>
                        <td>The data holding capacity of the lossy compression approach is quite significant.</td>
                        <td>✓</td>
                        <td>✗</td>
                    </tr>
                    <tr>
                        <td>Examples: JPEG (.jpg), MP3, MP4</td>
                        <td>✓</td>
                        <td>✗</td>
                    </tr>
                    <tr>
                        <td>Even unnoticeable bytes are retained with lossless compression.</td>
                        <td>✗</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>After lossless compression, a file can be restored to its original form.</td>
                        <td>✗</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>No quality degradation happens in lossless compression.</td>
                        <td>✗</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Lossless compression reduces the size but less as compared to lossy compression.</td>
                        <td>✗</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Run length encoding, Lempel-Ziv-Welch, Huffman Coding, Arithmetic encoding, etc.</td>
                        <td>✗</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Lossless compression is used to compress files containing text, program codes, and other such critical data.</td>
                        <td>✗</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Lossless compression has low data holding capacity as compared to lossy compression.</td>
                        <td>✗</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Examples: PNG, FLAC, FFV1</td>
                        <td>✗</td>
                        <td>✓</td>
                    </tr>
                </table>
            </div>
            
            <div class="subsection-title">Entropy Coding</div>
            <p>The design of a variable-length code such that its average codeword length approaches the entropy of DMS is often referred to as entropy coding.</p>
            
            <div class="subsection-title">Shannon-Fano Coding</div>
            <p>An efficient code can be obtained by the following simple procedure, known as Shannon-Fano algorithm:</p>
            <ol>
                <li>List the source symbols in order of decreasing probability.</li>
                <li>Partition the set into two sets that are as close to equiprobables as possible, and assign 0 to the upper set 1 to the lower set.</li>
                <li>Continue this process, each time partitioning the sets with as nearly equal probabilities as possible until further partitioning is not possible.</li>
            </ol>
            
            <p>Ane xample of Shannon-Fano encoding is shown in Table 16.6. Note in Shannon-Fano encoding the ambiguity may arise in the choice of approximately equiprobable sets.</p>
            
            <div class="subsection-title">Huffman Coding</div>
            <p>In general, Huffman encoding results in an optimum code. Thus, it is the code that has the highest efficiency. The Huffman encoding procedure is as follows:</p>
            <ol>
                <li>List the source symbols in order of decreasing probability.</li>
                <li>Combine the probabilities of the two symbols having the lowest probabilities, and reorder the resultant probabilities. This step is called reduction 1. The same procedure is repeated until there are two ordered probabilities remaining.</li>
                <li>Start encoding with the last reduction, which consist of exactly two ordered probabilities. Assign 0 as the first digit in the codewords for all the source symbols associated with the first probability; assign 1 to the second probability.</li>
                <li>Now go back and assign 0 and 1 to the second digit for the two probabilities that were combined in the previous reduction step, retaining all assignments made in Step 3.</li>
                <li>Keep regressing this way until the first column is reached.</li>
            </ol>
            
            <p>An example of Huffman encoding is shown in Table 16.7</p>
            
            <div class="subsection-title">Important Solved Examples</div>
            <p><strong>EXAMPLE 16.47:</strong> A DMS X has four symbols x₁, x₂, x₃ and x₄ with P(x₁)=P(x₂)=1/2 and P(x₃)= P(x₄)=1/4. Construct a Shannon-Fano code for X: show that this code has the optimum property that nᵢ = I(xᵢ) and that the code efficiency is 100 percent.</p>
            
            <p><strong>Solution:</strong> The Shannon-Fano code is constructed as follows:</p>
            <table>
                <tr>
                    <th>Step 1</th>
                    <th>Step 2</th>
                    <th>Step 3</th>
                    <th>Step 4</th>
                    <th>Code</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td>00</td>
                    <td></td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>01</td>
                    <td></td>
                    <td>01</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                    <td></td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>110</td>
                    <td></td>
                    <td>110</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1110</td>
                    <td></td>
                    <td>1110</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1111</td>
                    <td></td>
                    <td>1111</td>
                </tr>
            </table>
            
            <p>H(X)=2.36 b/symbol<br>
            L= 2.38 b/symbol<br>
            n= H(X)/L= 0.99</p>
            
            <p><strong>EXAMPLE 16.48:</strong> A DMS X has five equally likely symbols.</p>
            <ul>
                <li>(i) Construct a Shannon-Fano code for X, and calculate the efficiency of the code.</li>
                <li>(ii) Construct another Shannon-Fano code and compare the results.</li>
                <li>(iii) Repeat for the Huffman code and compare the results.</li>
            </ul>
            
            <p><strong>Solution:</strong> A Shannon-Fano code[by choosing two approximately equiprobable(0.4 versus 0.6) sets] is constructed as follows:</p>
            <table>
                <tr>
                    <th>Step 1</th>
                    <th>Step 2</th>
                    <th>Step 3</th>
                    <th>Code</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td>00</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td>01</td>
                    <td>01</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>110</td>
                    <td>110</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>111</td>
                    <td>111</td>
                </tr>
            </table>
            
            <p>H(X)=2.32 b/symbol<br>
            L=2.4 b/symbol<br>
            n=0.967=96.7%</p>
            
            <p>For Huffman code:</p>
            <table>
                <tr>
                    <th>Step 1</th>
                    <th>Step 2</th>
                    <th>Step 3</th>
                    <th>Step 4</th>
                    <th>Code</th>
                </tr>
                <tr>
                    <td>0.2</td>
                    <td>0.2</td>
                    <td>0.4</td>
                    <td>0.6</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>0.2</td>
                    <td>0.2</td>
                    <td>0.4</td>
                    <td>0.4</td>
                    <td>01</td>
                </tr>
                <tr>
                    <td>0.2</td>
                    <td>0.2</td>
                    <td>0.2</td>
                    <td>0.4</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>0.2</td>
                    <td>0.2</td>
                    <td>0.2</td>
                    <td>0.4</td>
                    <td>110</td>
                </tr>
                <tr>
                    <td>0.2</td>
                    <td>0.2</td>
                    <td>0.2</td>
                    <td>0.4</td>
                    <td>111</td>
                </tr>
            </table>
            
            <p>H(X)=2.32 b/symbol<br>
            L=2.2 b/symbol<br>
            n=0.956=95.6%</p>
        </div>
    </div>


<!-- <==================chapter 4 start ==================> -->
    <div id="chapter_4" class="chapter-container">
        <h1 class="chapter-title">Chapter 4: Signal Encoding Techniques</h1>
        
        <div class="navigation">
            <ul class="nav-list">
                <li class="nav-item" onclick="document.getElementById('section4_1').scrollIntoView({behavior: 'smooth'})">4.1 Analog data, analog signals: Modulation and its need, AM, FM, PM</li>
                <li class="nav-item" onclick="document.getElementById('section4_2').scrollIntoView({behavior: 'smooth'})">4.2 Analog data, digital signals: PAM, PWM, PPM, PCM, DPCM, DM</li>
                <li class="nav-item" onclick="document.getElementById('section4_3').scrollIntoView({behavior: 'smooth'})">4.3 Digital data, analog signal: ASK, FSK, PSK, QPSK, QAM</li>
                <li class="nav-item" onclick="document.getElementById('section4_4').scrollIntoView({behavior: 'smooth'})">4.4 Digital data, digital signal: RZ, NRZ, AMI, Manchester, differential Manchester, B8ZS, HDB3 for data transmission</li>
            </ul>
        </div>
        
        <!-- Section 4.1 -->
        <div id="section4_1" class="section">
            <h2 class="section-title">4.1 Analog data, analog signals: Modulation and its need, AM, FM, PM</h2>
            
            <div class="subsection-title">What is Modulation?</div>
            <p>A message carrying a signal has to get transmitted over a distance and for it to establish a reliable communication, it needs to take the help of a high frequency signal which should not affect the original characteristics of the message signal.</p>
            <p>The characteristics of the message signal, if changed, the message contained in it also alters. Hence, it is a must to take care of the message signal. A high frequency signal can travel up to a longer distance, without getting affected by external disturbances. We take the help of such high frequency signal which is called as a carrier signal to transmit our message signal. Such a process is simply called as Modulation.</p>
            <p>Modulation is the process of changing the parameters of the carrier signal, in accordance with the instantaneous values of the modulating signal.</p>
            
            <div class="subsection-title">Need for Modulation</div>
            <p>Baseband signals are incompatible for direct transmission. For such a signal, to travel longer distances, its strength has to be increased by modulating with a high frequency carrier wave, which doesn't affect the parameters of the modulating signal.</p>
            
            <div class="subsection-title">Advantages of Modulation</div>
            <ul>
                <li>Reduction of antenna size</li>
                <li>No signal mixing</li>
                <li>Increased communication range</li>
                <li>Multiplexing of signals</li>
                <li>Possibility of bandwidth adjustments</li>
                <li>Improved reception quality</li>
            </ul>
            
            <div class="subsection-title">Types of Signals in Modulation Process</div>
            <ul>
                <li><strong>Message or Modulating Signal:</strong> The signal which contains a message to be transmitted, is called as a message signal. It is a baseband signal, which has to undergo the process of modulation, to get transmitted. Hence, it is also called as the modulating signal.</li>
                <li><strong>Carrier Signal:</strong> The high frequency signal, which has a certain amplitude, frequency and phase but contains no information is called as a carrier signal. It is an empty signal and is used to carry the signal to the receiver after modulation.</li>
                <li><strong>Modulated Signal:</strong> The resultant signal after the process of modulation is called as a modulated signal. This signal is a combination of modulating signal and carrier signal.</li>
            </ul>
            
            <div class="subsection-title">Types of Modulation</div>
            <p>Depending upon the modulation techniques used, they are classified as shown in the following figure:</p>
            <ul>
                <li><strong>Continuous-wave Modulation:</strong> In continuous-wave modulation, a high frequency sine wave is used as a carrier wave. This is further divided into amplitude and angle modulation.</li>
                <li><strong>Pulse Modulation:</strong> In Pulse modulation, a periodic sequence of rectangular pulses, is used as a carrier wave. This is further divided into analog and digital modulation.</li>
            </ul>
            
            <div class="subsection-title">Amplitude Modulation (AM)</div>
            <p>The amplitude of the carrier signal varies in accordance with the instantaneous amplitude of the modulating signal. Which means, the amplitude of the carrier signal containing no information varies as per the amplitude of the signal containing information, at each instant.</p>
            
            <div class="formula">
                s(t) = A_c[1 + \mu \cos(2\pi f_m t)] \cos(2\pi f_c t)
            </div>
            
            <p>Where:</p>
            <ul>
                <li>A_c = Amplitude of carrier signal</li>
                <li>\mu = Modulation index</li>
                <li>f_m = Frequency of modulating signal</li>
                <li>f_c = Frequency of carrier signal</li>
            </ul>
            
            <div class="subsection-title">Modulation Index</div>
            <p>For a perfect modulation, the value of modulation index should be 1, which implies the percentage of modulation should be 100%.</p>
            <ul>
                <li><strong>Under-modulation:</strong> If the value of modulation index is less than 1 (e.g., 0.5), then the modulated output would look like the following figure. It is called as Under-modulation.</li>
                <li><strong>Over-modulation:</strong> If the value of the modulation index is greater than 1 (e.g., 1.5), then the wave will be an over-modulated wave.</li>
            </ul>
            
            <div class="subsection-title">Bandwidth of AM Wave</div>
            <p>Bandwidth (BW) is the difference between the highest and lowest frequencies of the signal.</p>
            <div class="formula">
                BW = 2f_m
            </div>
            
            <div class="subsection-title">Power Calculations of AM Wave</div>
            <p>Power of AM wave is equal to the sum of powers of carrier, upper sideband, and lower sideband frequency components.</p>
            <div class="formula">
                P_{total} = P_c \left(1 + \frac{\mu^2}{2}\right)
            </div>
            <p>Where:</p>
            <ul>
                <li>P_c = Carrier power</li>
                <li>\mu = Modulation index</li>
            </ul>
            <p>If the modulation index \mu=1 then the power of AM wave is equal to 1.5 times the carrier power. So, the power required for transmitting an AM wave is 1.5 times the carrier power for a perfect modulation.</p>
            
            <div class="subsection-title">DSBSC Modulation</div>
            <p>The modulated wave consists of the carrier wave and two sidebands. The modulated wave has the information only in the sidebands.</p>
            <p>Sideband is nothing but a band of frequencies, containing power, which are the lower and higher frequencies of the carrier frequency.</p>
            <p>Such a transmission is inefficient. Because, two-thirds of the power is being wasted in the carrier, which carries no information.</p>
            <p>If this carrier is suppressed and the saved power is distributed to the two sidebands, then such a process is called as Double Sideband Suppressed Carrier system or simply DSBSC.</p>
            
            <div class="subsection-title">SSBSC Modulation</div>
            <p>The DSBSC modulated signal has two sidebands. Since, the two sidebands carry the same information, there is no need to transmit both sidebands. We can eliminate one sideband.</p>
            <p>The process of suppressing one of the sidebands along with the carrier and transmitting a single sideband is called as Single Sideband Suppressed Carrier system or simply SSBSC.</p>
            
            <div class="subsection-title">Advantages of SSBSC</div>
            <ul>
                <li>Bandwidth or spectrum space occupied is lesser than AM and DSBSC waves</li>
                <li>Transmission of more number of signals is allowed</li>
                <li>Power is saved</li>
                <li>High power signal can be transmitted</li>
                <li>Less amount of noise is present</li>
                <li>Signal fading is less likely to occur</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of SSBSC</div>
            <ul>
                <li>The generation and detection of SSBSC wave is a complex process</li>
                <li>The quality of the signal gets affected unless the SSB transmitter and receiver have an excellent frequency stability</li>
            </ul>
            
            <div class="subsection-title">VSBSC Modulation</div>
            <p>To avoid loss of information, a technique is chosen, which is a compromise between DSBSC and SSBSC. This technique is known as Vestigial Side Band Suppressed Carrier (VSBSC) technique.</p>
            <p>VSBSC Modulation is the process, where a part of the signal called as vestige is modulated along with one sideband.</p>
            <p>Along with the upper sideband, a part of the lower sideband is also being transmitted in this technique.</p>
            
            <div class="subsection-title">Bandwidth of VSBSC Modulation</div>
            <div class="formula">
                \text{Bandwidth of VSBSC Modulated Wave} = f_m + f_v
            </div>
            <p>Where:</p>
            <ul>
                <li>f_m = Bandwidth of SSBSC modulated wave</li>
                <li>f_v = Vestige frequency</li>
            </ul>
            
            <div class="subsection-title">Advantages of VSBSC</div>
            <ul>
                <li>Highly efficient</li>
                <li>Reduction in bandwidth when compared to AM and DSBSC waves</li>
                <li>Filter design is easy, since high accuracy is not needed</li>
                <li>The transmission of low frequency components is possible, without any difficulty</li>
                <li>Possesses good phase characteristics</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of VSBSC</div>
            <ul>
                <li>Bandwidth is more when compared to SSBSC wave</li>
                <li>Demodulation is complex</li>
            </ul>
            
            <div class="subsection-title">Angle Modulation</div>
            <p>Angle Modulation is the process in which the frequency or the phase of the carrier signal varies according to the message signal.</p>
            <p>The standard equation of the angle modulated wave is:</p>
            <div class="formula">
                s(t) = A_c \cos\theta_i(t)
            </div>
            <p>Where:</p>
            <ul>
                <li>A_c is the amplitude of the modulated wave, which is the same as the amplitude of the carrier signal</li>
                <li>\theta_i(t) is the angle of the modulated wave</li>
            </ul>
            <p>Angle modulation is further divided into frequency modulation and phase modulation.</p>
            
            <div class="subsection-title">Frequency Modulation (FM)</div>
            <p>In amplitude modulation, the amplitude of the carrier signal varies. Whereas, in Frequency Modulation (FM), the frequency of the carrier signal varies in accordance with the instantaneous amplitude of the modulating signal.</p>
            <p>Hence, in frequency modulation, the amplitude and the phase of the carrier signal remains constant.</p>
            
            <div class="subsection-title">Narrowband FM</div>
            <p>Following are the features of Narrowband FM:</p>
            <ul>
                <li>This frequency modulation has a small bandwidth when compared to wideband FM</li>
                <li>The modulation index \beta is small, i.e., less than 1</li>
                <li>Its spectrum consists of the carrier, the upper sideband and the lower sideband</li>
                <li>This is used in mobile communications such as police wireless, ambulances, taxicabs, etc.</li>
            </ul>
            
            <div class="subsection-title">Wideband FM</div>
            <p>Following are the features of Wideband FM:</p>
            <ul>
                <li>This frequency modulation has infinite bandwidth</li>
                <li>The modulation index \beta is large, i.e., higher than 1</li>
                <li>Its spectrum consists of a carrier and infinite number of sidebands, which are located around it</li>
                <li>This is used in entertainment, broadcasting applications such as FM radio, TV, etc.</li>
            </ul>
            
            <div class="subsection-title">Phase Modulation (PM)</div>
            <p>In frequency modulation, the frequency of the carrier varies. Whereas, in Phase Modulation (PM), the phase of the carrier signal varies in accordance with the instantaneous amplitude of the modulating signal.</p>
            <p>So, in phase modulation, the amplitude and the frequency of the carrier signal remains constant.</p>
            
            <div class="formula">
                \phi_i = k_p m(t)
            </div>
            <p>Where:</p>
            <ul>
                <li>k_p is the phase sensitivity</li>
                <li>m(t) is the message signal</li>
            </ul>
            
            <div class="formula">
                s(t) = A_c \cos(2\pi f_c t + k_p m(t))
            </div>
            
            <p>If the modulating signal, m(t) = A_m \cos(2\pi f_m t), then the equation of PM wave will be:</p>
            <div class="formula">
                s(t) = A_c \cos(2\pi f_c t + \beta \cos(2\pi f_m t))
            </div>
            <p>Where:</p>
            <ul>
                <li>\beta = modulation index = \Delta\phi = k_p A_m</li>
                <li>\Delta\phi is phase deviation</li>
            </ul>
            
            <p>Phase modulation is used in mobile communication systems, while frequency modulation is used mainly for FM broadcasting.</p>
        </div>
        
        <!-- Section 4.2 -->
        <div id="section4_2" class="section">
            <h2 class="section-title">4.2 Analog data, digital signals: PAM, PWM, PPM, PCM, DPCM, DM</h2>
            
            <div class="subsection-title">Pulse Code Modulation (PCM)</div>
            <p>PCM is the standard method used in PSTN (Public Switched Telephone Network) to convert analog data into digital data and with PCM it is easy to combine digitized voice and digital data into a single, high speed digital signal and propagate it over a metallic and optical fiber cable.</p>
            
            <div class="subsection-title">Sampling</div>
            <p>Sampling process is used to convert continuous time signal to discrete time signals. The sufficient number of samples of signal must be taken, so that original signal can be represented by its samples completely and It should be possible to reconstruct the original signal from its samples.</p>
            
            <div class="subsection-title">Sampling Theorem</div>
            <p>A continuous time signal may be completely represented by its samples and recovered back if sampling frequency f_s ≥ 2f_m where:</p>
            <ul>
                <li>f_s is sampling frequency</li>
                <li>f_m is highest frequency present in signal</li>
            </ul>
            <p>If a signal is of 10Hz, its sampling frequency must be equal to or greater than 20Hz, so that it can be represented by its samples completely.</p>
            
            <div class="subsection-title">Nyquist Sampling Theorem</div>
            <p>It establish minimum sampling rate (f_s) that is equal to twice the highest audio input frequency. If f_s is less than two time f_m, an impairment called alias or fold over distortion occurs.</p>
            <div class="formula">
                f_s = 2f_m
            </div>
            
            <div class="subsection-title">Quantization</div>
            <p>Quantization is the process of converting an infinite number of possibilities to a finite number of conditions. Analog signals contain an infinite number of amplitude possibilities. Thus converting an analog signal to a PCM code with a limited number of combinations requires quantization.</p>
            <p>Quantization is the process of rounding off the amplitudes of flat top samples to a manageable no of levels. A PCM code would have only 8 bits, which equals to 2^8 or 256 combinations. So to convert samples of a sine wave to PCM require some rounding off.</p>
            
            <div class="subsection-title">Encoding</div>
            <p>Finally, the quantized values are encoded into a binary form to create the digital signal. This binary data represents the PCM signal, ready for processing, storage, or transmission.</p>
            
            <div class="subsection-title">Pulse Amplitude Modulation (PAM)</div>
            <p>Pulse Amplitude Modulation (PAM) is an analog modulating scheme in which the amplitude of the pulse carrier varies proportional to the instantaneous amplitude of the message signal.</p>
            <p>The pulse amplitude modulated signal, will follow the amplitude of the original signal, as the signal traces out the path of the whole wave.</p>
            <p>In natural PAM, a signal sampled at the Nyquist rate is reconstructed, by passing it through an efficient Low Pass Frequency (LPF).</p>
            
            <div class="subsection-title">Pulse Width Modulation (PWM)</div>
            <p>Pulse Width Modulation (PWM) or Pulse Duration Modulation (PDM) or Pulse Time Modulation (PTM) is an analog modulating scheme in which the duration or width or time of the pulse carrier varies proportional to the instantaneous amplitude of the message signal.</p>
            <p>The width of the pulse varies in this method, but the amplitude of the signal remains constant. Amplitude limiters are used to make the amplitude of the signal constant. These circuits clip off the amplitude, to a desired level and hence the noise is limited.</p>
            
            <div class="subsection-title">Comparison between Modulation Processes</div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Characteristic</th>
                        <th>PAM</th>
                        <th>PWM</th>
                        <th>PPM</th>
                    </tr>
                    <tr>
                        <td>Parameter varied</td>
                        <td>Amplitude is varied</td>
                        <td>Width is varied</td>
                        <td>Position is varied</td>
                    </tr>
                    <tr>
                        <td>Bandwidth</td>
                        <td>Bandwidth depends on the width of the pulse</td>
                        <td>Bandwidth depends on the rise time of the pulse</td>
                        <td>Bandwidth depends on the rise time of the pulse</td>
                    </tr>
                    <tr>
                        <td>Instantaneous transmitter power</td>
                        <td>Instantaneous transmitter power varies with the amplitude of the pulses</td>
                        <td>Instantaneous transmitter power varies with the amplitude and width of the pulses</td>
                        <td>Instantaneous transmitter power remains constant with the width of the pulses</td>
                    </tr>
                </table>
            </div>
            
            <div class="subsection-title">Delta Modulation (DM)</div>
            <p>Delta Modulation is a simplified form of DPCM (Differential Pulse Code Modulation) where only the difference between the current sample and the previous sample is encoded.</p>
            <p>It uses a 1-bit quantizer to encode the difference between successive samples.</p>
            <p>DM has advantages of simplicity and low bandwidth requirements, but it can suffer from slope overload distortion and granular noise.</p>
            
            <div class="subsection-title">Differential Pulse Code Modulation (DPCM)</div>
            <p>DPCM is a form of pulse code modulation where the difference between the current sample and the predicted value of the signal is encoded rather than the absolute value of the sample.</p>
            <p>This reduces the number of bits required to represent the signal as the differences are typically smaller than the absolute values.</p>
        </div>
        
        <!-- Section 4.3 -->
        <div id="section4_3" class="section">
            <h2 class="section-title">4.3 Digital data, analog signal: ASK, FSK, PSK, QPSK, QAM</h2>
            
            <div class="subsection-title">Digital Modulation Technique</div>
            <p>Digital modulation may be defined as mapping a sequence of input binary digits into a set of corresponding high frequency signal waveforms.</p>
            <p>These modulated waveforms may differ in either amplitude or frequency or phase or some combination of two signal parameters (Amplitude and phase or frequency and phase).</p>
            <p>The Modulating signal is in Digital form while the carrier signal is in the Analog form.</p>
            
            <div class="subsection-title">Amplitude Shift Keying (ASK)</div>
            <p>In ASK the strength of the signal is varied to represent binary 1 or 0. Both frequency and phase remain constant, while the amplitude changes.</p>
            <p>A digital modulation technique in which the amplitude of the carrier wave is altered according to the modulating signal (bitstream) is known as Amplitude Shift Keying (ASK).</p>
            <p>ASK is sometimes known as On-Off keying because the carrier wave swings between 0 and 1 according to the low and high level of input signal respectively.</p>
            <p>In ASK, frequency and phase of the carrier wave is kept constant and only the amplitude is varied according to the digitized modulating signal.</p>
            
            <div class="subsection-title">Constellation Diagram</div>
            <p>Constellation diagram is a graphical representation of the complex envelope of each possible symbol state</p>
            <p>The x-axis represents the in-phase component and the y-axis the quadrature component of the complex envelope.</p>
            <p>The distance between signals on a constellation diagram relates to how different the modulation waveforms are and how easily a receiver can differentiate between them.</p>
            
            <div class="subsection-title">Frequency Shift Keying (FSK)</div>
            <p>Frequency Shift Keying (FSK) is the digital modulation technique in which the frequency of the carrier signal varies according to the discrete digital changes. FSK is a scheme of frequency modulation.</p>
            
            <p>For Binary FSK (BFSK):</p>
            <ul>
                <li>Binary '1' → frequency = f₁</li>
                <li>Binary '0' → frequency = f₀</li>
            </ul>
            
            <p>The general expression of the FSK signal is:</p>
            <div class="formula">
                s(t) = \begin{cases} 
                A \cdot \cos(2\pi f_1 t), & \text{for binary 1} \\
                A \cdot \cos(2\pi f_0 t), & \text{for binary 0}
                \end{cases}
            </div>
            
            <div class="subsection-title">Phase Shift Keying (PSK)</div>
            <p>Phase Shift Keying is a type of digital modulation technique where we transmit the data by modulating the phase of the carrier signal. The modulation is carried out by changing the inputs at regular intervals of time.</p>
            <p>Phase Shift Keying (PSK) is a digital modulation scheme where the phase of the carrier signal is varied according to the digital data signal.</p>
            <p>A general PSK signal is given by:</p>
            <div class="formula">
                s(t) = A_c \cdot \cos(2\pi f_c t + \phi_i), \text{ for } 0 \leq t \leq T
            </div>
            <p>Where:</p>
            <ul>
                <li>A_c = Carrier amplitude</li>
                <li>f_c = Carrier frequency</li>
                <li>\phi_i = Phase shift for the i-th symbol</li>
                <li>T_b = Bit duration</li>
            </ul>
            
            <div class="subsection-title">Binary Phase Shift Keying (BPSK)</div>
            <p>In BPSK, 1 bit is represented by two phases:</p>
            <ul>
                <li>Bit 0 → Phase = 0</li>
                <li>Bit 1 → Phase = \pi</li>
            </ul>
            
            <p>So, the BPSK signal is:</p>
            <div class="formula">
                s(t) = A_c \cdot \cos(2\pi f_c t) \quad \text{(for bit 0)} \\
                s(t) = -A_c \cdot \cos(2\pi f_c t) \quad \text{(for bit 1)}
            </div>
            <p>Alternatively:</p>
            <div class="formula">
                s(t) = A_c \cdot m(t) \cdot \cos(2\pi f_c t)
            </div>
            
            <div class="subsection-title">Quadrature Phase Shift Keying (QPSK)</div>
            <p>Quadrature Phase Shift Keying (QPSK) is a digital modulation technique in which the phase of a carrier wave is varied to represent digital data. Unlike Binary PSK (BPSK), which uses two phases (0 and \pi), QPSK uses four distinct phases to encode two bits per symbol.</p>
            
            <div class="subsection-title">Quadrature Amplitude Modulation (QAM)</div>
            <p>Quadrature amplitude modulation (QAM) is modulation techniques that we can utilize in analog modulation concept and digital modulation concept. Depending upon the input signal form we can use it in either analog or digital modulation schemes.</p>
            <p>In QAM, we can modulate two individual signals and transmitted to the receiver level. And by using the two input signals, the channel bandwidth also increases. QAM can able to transmit two message signals over the same channel. This QAM technique also is known as "quadrature carrier multiplexing"</p>
            
            <p>QAM can be defined as it is a modulation technique that is used to combine two amplitude modulated waves into a single channel to increase the channel bandwidth</p>
            <p>Quadrature Amplitude Modulation (QAM) is a digital modulation technique that combines both amplitude modulation and phase modulation. It transmits information by varying both the amplitude of the in-phase (I) and quadrature (Q) components of a carrier signal.</p>
            
            <p>QAM uses two carriers that are 90° out of phase:</p>
            <ul>
                <li>One carrier is called the in-phase (I) component: \cos(2\pi f_c t)</li>
                <li>The other is the quadrature (Q) component: \sin(2\pi f_c t)</li>
            </ul>
            
            <p>The general QAM signal is given by:</p>
            <div class="formula">
                s(t) = I(t) \cdot \cos(2\pi f_c t) - Q(t) \cdot \sin(2\pi f_c t)
            </div>
            <p>Where:</p>
            <ul>
                <li>I(t) and Q(t) are amplitude levels determined by the digital symbol</li>
                <li>f_c is the carrier frequency</li>
            </ul>
            
            <div class="subsection-title">Modulation Order and Bit Capacity</div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>M-QAM</th>
                        <th>Bits per Symbol</th>
                    </tr>
                    <tr>
                        <td>4-QAM</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>16-QAM</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>64-QAM</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>256-QAM</td>
                        <td>8</td>
                    </tr>
                </table>
            </div>
            <p>QAM has higher order form of modulation and so it can carry major information.</p>
            
            <div class="subsection-title">Signal Constellation</div>
            <p>In QAM, symbols are represented as points on an I-Q plane (constellation diagram). Each point corresponds to a unique amplitude-phase combination.</p>
        </div>
        
        <!-- Section 4.4 -->
        <div id="section4_4" class="section">
            <h2 class="section-title">4.4 Digital data, digital signal: RZ, NRZ, AMI, Manchester, differential Manchester, B8ZS, HDB3 for data transmission</h2>
            
            <div class="subsection-title">Digital-to-Digital Encoding</div>
            <p>Digital-to-Digital Encoding is the representation of digital information by a digital signal. (e.g. computer-to-printer)</p>
            
            <div class="subsection-title">Unipolar Encoding</div>
            <p>Unipolar encoding is so named because it uses only one polarity. Therefore, only one of the two binary states is encoded, usually the 1. The other state, usually 0, is represented by zero voltage, or an idle line.</p>
            <p>Unipolar encoding uses only one level of value.</p>
            <p>1's encoded as positive, 0's are idle. Unipolar encoding is straight forward and inexpensive to implement. However, it has two problems that make it unusable: DC component and synchronisation.</p>
            
            <div class="subsection-title">DC Component</div>
            <p>Average amplitude is nonzero creates a direct current (DC) component, when a signal contains a DC component it cannot travel through media that cannot handle DC components: e.g. microwaves or transformers.</p>
            
            <div class="subsection-title">Synchronization</div>
            <p>When a signal is unvarying, the receiver cannot determine the beginning and ending of each bit. Therefore, Synchronization problem in unipolar encoding can occur whenever the data stream includes a long uninterrupted series of 1's or 0's.</p>
            
            <div class="subsection-title">Polar Encoding</div>
            <p>Polar encoding uses two voltage levels: one positive and one negative. In most polar encoding methods the average voltage level on the line is reduced and the DC component problem of unipolar encoding is alleviated.</p>
            
            <div class="subsection-title">Non-Return-to-Zero (NRZ) Encoding</div>
            <p>In NRZ encoding, the level of the signal is always either positive or negative. In NRZ system if the line is idle it means no transmission is occurring at all.</p>
            
            <div class="subsection-title">NRZ-L (Non-return-to-zero, Level)</div>
            <p>In NRZ-L the level of the signal is dependent upon the state of the bit.</p>
            <p>A positive voltage usually means the bit is 0, and negative voltage means the bit is a 1 (and vice versa).</p>
            
            <div class="subsection-title">NRZ-I (Non-return-to-zero, Invert)</div>
            <p>In NRZ-I, an inversion of the voltage level represents a 1 bit. It is the transition between a positive and a negative voltage, not the voltages themselves that represents a 1 bit. A 0 bit is represented by no change.</p>
            <p>An advantage of NRZ-I over NRZ-L is that because the signal changes every time a 1 bit is encountered, it provides some synchronisation.</p>
            <p>Each inversion allows the receiver to synchronise its timer to the actual arrival of the transmission.</p>
            
            <div class="subsection-title">RZ (Return-to-zero) Encoding</div>
            <p>To assure synchronisation, there must be a signal change for each bit. The receiver can use these changes to built up, update, and synchronise its clock.</p>
            <p>One solution is return to zero (RZ) encoding, which uses three Values: positive, negative, and zero</p>
            <p>The main disadvantage of RZ encoding is that it requires two signal changes to encode one bit and therefore occupies more bandwidth. But of the three alternatives discussed above, it is the most effective. Because a good encoded digital signal must contain a provision for synchronisation.</p>
            
            <div class="subsection-title">Biphase Encoding</div>
            <p>Probably the best existing solution to the problem of synchronisation is biphase encoding. In this method, the signal changes at the middle of the bit interval but does not return to zero. Instead it continues to the opposite pole. As in RZ, these mid-interval transitions allow for synchronisation.</p>
            <p>Biphase encoding is implemented in two different ways: Manchester and differential Manchester.</p>
            
            <div class="subsection-title">Manchester Encoding</div>
            <p>Manchester encoding uses the inversion at the middle of each bit interval for both synchronisation and bit representation. A negative-to-positive transition represents binary 1 and a positive-to-negative transition represents binary 0.</p>
            
            <div class="subsection-title">Differential Manchester Encoding</div>
            <p>In this method, the inversion at the middle of the bit is used for synchronisation, but the presence or absence of an additional transition at the beginning of the interval is used to identify the bit. A transition means binary 0 and no transition means binary 1. The bit representation is shown by the inversion and non-inversion at the beginning of the bit.</p>
            
            <div class="subsection-title">Bipolar Encoding</div>
            <p>Bipolar encoding uses three voltage levels: positive, negative and zero. The zero level is used to represent binary 0 positive and negative voltages represent alternating 1s. (If 1st one +ve, 2nd is -ve).</p>
            <p>Three types of bipolar encoding are popular use by the data communications industry: AMI, B8ZS, and HDB3.</p>
            
            <div class="subsection-title">Bipolar Alternate Mark Inversion (AMI)</div>
            <p>Bipolar AMI is the simplest type of bipolar encoding. The word mark comes from telegraphy and means 1.</p>
            <p>AMI means alternate 1 inversion. A neutral, zero voltage represents binary 0. Binary 1s are represented by alternating positive and negative voltages.</p>
            
            <div class="subsection-title">Bipolar 8-Zero Substitution (B8ZS)</div>
            <p>B8ZS is the convention adopted in North America to provide synchronisation of long strings of 0s. In most situations B8ZS functions identically to bipolar AMI. Bipolar AMI changes poles with every 1 it encounters. These changes provide the synchronisation needed by the receiver, but the signal does not change during a string of 0s, so synchronisation is lost.</p>
            <p>The solution provided by B8ZS is to force artificial signal changes, called violations. In B8ZS, if eight 0s come one after another, we change the pattern in one of two ways based on the polarity of previous 1.</p>
            <p>A code in which eight consecutive zeros are replaced with the sequence 000+-0-+ if the preceding pulse was + and with the sequence 000-+0+- of the preceding pulse was -, where + represents a positive pulse, - represents a negative pulse, and 0 represents no pulse.</p>
            
            <div class="subsection-title">Example of B8ZS Encoding</div>
            <p>Using B8ZS, encode the bit stream 10000000000100. Assume that the polarity of the previous 1 is positive.</p>
            <p>Answer: 1 000+ -0-+ 00100</p>
            
            <div class="subsection-title">High-Density Bipolar 3 (HDB3)</div>
            <p>In HDB3 if four 0s come one after another, we change the pattern in one of four ways based on the polarity of the previous 1 and the number of 1s since the last substitution.</p>
        </div>
    </div>


<!-- <==================chapter 5 start ==================> -->
    <div id="chapter_5" class="chapter-container">
        <h1 class="chapter-title">Chapter 5: Multiplexing and Switching</h1>
        
        <div class="navigation">
            <ul class="nav-list">
                <li class="nav-item" onclick="document.getElementById('section5_1').scrollIntoView({behavior: 'smooth'})">5.1 Access introduction to multiplexing, application of multiplexing</li>
                <li class="nav-item" onclick="document.getElementById('section5_2').scrollIntoView({behavior: 'smooth'})">5.2 Frequency division multiple access</li>
                <li class="nav-item" onclick="document.getElementById('section5_3').scrollIntoView({behavior: 'smooth'})">5.3 Time division multiple access</li>
                <li class="nav-item" onclick="document.getElementById('section5_4').scrollIntoView({behavior: 'smooth'})">5.4 Asymmetric digital subscriber line, XDSL</li>
                <li class="nav-item" onclick="document.getElementById('section5_5').scrollIntoView({behavior: 'smooth'})">5.5 Spread spectrum: DSSS, FHSS, CDMA</li>
                <li class="nav-item" onclick="document.getElementById('section5_6').scrollIntoView({behavior: 'smooth'})">5.6 Intro switcher communication network, connection oriented and connectionless</li>
                <li class="nav-item" onclick="document.getElementById('section5_7').scrollIntoView({behavior: 'smooth'})">5.7 Switching devices. Types, importance and application</li>
                <li class="nav-item" onclick="document.getElementById('section5_8').scrollIntoView({behavior: 'smooth'})">5.8 Circuit switching network: Circuit switching concepts, message switching</li>
                <li class="nav-item" onclick="document.getElementById('section5_9').scrollIntoView({behavior: 'smooth'})">5.9 Packet switching: Virtual circuit switching, datagram switching</li>
            </ul>
        </div>
        
        <!-- Section 5.1 -->
        <div id="section5_1" class="section">
            <h2 class="section-title">5.1 Access introduction to multiplexing, application of multiplexing</h2>
            
            <div class="subsection-title">Introduction to Multiplexing</div>
            <p>In communication systems and computer networks, multiplexing (sometimes contracted to muxing) is a method by which multiple analog or digital signals are combined into one signal over a shared medium.</p>
            <p>The aim is to share a scarce resource i.e. bandwidth. For example, in telecommunications, several telephone calls may be carried using one wire.</p>
            <p>Multiplexing divides the capacity of the communication channel into several logical channels, one for each message signal or data stream to be transferred.</p>
            <p>A reverse process, known as demultiplexing, extracts the original channels on the receiver end. A device that performs the multiplexing is called a multiplexer (MUX), and a device that performs the reverse process is called a demultiplexer (DEMUX or DMX).</p>
            <p>Multiplexing is an extremely important asset to communication processes and have greatly improved the way that we transmit and receive independent signals over AM and FM radio, telephone lines, and optical fibers.</p>
            
            <div class="subsection-title">Types of Multiplexing Techniques</div>
            <ul>
                <li>Frequency Division Multiplexing (FDM)</li>
                <li>Wavelength Division Multiplexing (WDM)</li>
                <li>Space Division Multiplexing (SDM)</li>
                <li>Time Division Multiplexing (TDM)</li>
            </ul>
            
            <div class="subsection-title">Applications of Multiplexing</div>
            <ul>
                <li>Telecommunications: Multiple phone calls over a single wire</li>
                <li>Cable TV: Multiple channels transmitted over a single coaxial cable</li>
                <li>Internet: Multiple data streams over a single network connection</li>
                <li>Wireless Communications: Multiple users sharing the same frequency band</li>
                <li>Fiber Optics: Multiple signals transmitted through a single optical fiber</li>
            </ul>
        </div>
        
        <!-- Section 5.2 -->
        <div id="section5_2" class="section">
            <h2 class="section-title">5.2 Frequency division multiple access</h2>
            
            <div class="subsection-title">Frequency Division Multiple Access (FDMA)</div>
            <p>FDMA is the basic technology for advanced mobile phone services.</p>
            
            <div class="subsection-title">Features of FDMA</div>
            <ul>
                <li>FDMA allots a different sub-band of frequency to each different user to access the network.</li>
                <li>If FDMA is not in use, the channel is left idle instead of allotting to the other users.</li>
                <li>Tight filtering is done here to reduce adjacent channel interference.</li>
                <li>The base station (BS) and mobile station (MS) transmit and receive simultaneously and continuously in FDMA.</li>
                <li>One frequency is used for Uplink and one for Downlink. This is called Frequency Division Duplexing (FDD).</li>
                <li>FDMA does not require synchronization or timing control.</li>
                <li>The bandwidths of FDMA channels are relatively narrow (30 kHz in AMPS) as each channel supports only one voice call at a time per carrier. That is, FDMA is usually implemented in narrowband systems.</li>
                <li>AMPS stands for Advanced Mobile Phone System which was a 1G network.</li>
            </ul>
            
            <div class="subsection-title">Advantages of FDMA</div>
            <ul>
                <li>The complexity of FDMA mobile systems is lower when compared to TDMA systems.</li>
                <li>Since FDMA is a continuous transmission scheme, fewer bits are needed for overhead purposes (such as synchronization and framing bits) as compared to TDMA.</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of FDMA</div>
            <ul>
                <li>The FDMA mobile unit uses duplexers since both the transmitter and receiver operate at the same time. This results in an increase in the cost of FDMA subscriber units and base stations.</li>
                <li>Inefficient use of bandwidth when channels are not fully utilized.</li>
            </ul>
        </div>
        
        <!-- Section 5.3 -->
        <div id="section5_3" class="section">
            <h2 class="section-title">5.3 Time division multiple access</h2>
            
            <div class="subsection-title">Time Division Multiple Access (TDMA)</div>
            <p>In the cases where continuous transmission is not required, TDMA is used instead of FDMA.</p>
            
            <div class="subsection-title">Features of TDMA</div>
            <ul>
                <li>TDMA shares a single carrier frequency with several users where each user makes use of non-overlapping time slots.</li>
                <li>Data transmission in TDMA is not continuous but occurs in bursts. This results in low battery consumption since subscriber transmitter can be turned off when not in use.</li>
                <li>Because of discontinuous transmissions in TDMA, the handoff process is much simpler for a subscriber unit, since it is able to listen for other base stations during idle time slots. An enhanced link control, such as that provided by mobile assisted handoff (MAHO) can be carried out by a subscriber by listening on an idle slot in the TDMA frame.</li>
                <li>TDMA uses different time slots for transmission and reception thus duplexers are not required. This type of duplexing is known as Time Division Duplexing (TDD).</li>
                <li>Guard times are utilized to allow synchronization of the receivers between different slots and frames.</li>
                <li>High synchronization overhead is required in TDMA systems because of burst transmissions. TDMA transmissions are slotted, and this requires the receivers to be synchronized for each data burst. In addition, guard slots are necessary to separate users, and this results in the TDMA systems having larger overheads as compared to FDMA.</li>
                <li>TDMA has an advantage that is possible to allocate different numbers of time slots per frame to different users.</li>
                <li>Bandwidth can be supplied on demand to different users by concatenating or reassigning time slot based on priority.</li>
            </ul>
            
            <div class="subsection-title">Synchronous TDMA vs Statistical TDMA</div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Aspect</th>
                        <th>Synchronous TDMA</th>
                        <th>Statistical TDMA</th>
                    </tr>
                    <tr>
                        <td>Time Slot Allocation</td>
                        <td>Fixed and pre-assigned to each user, regardless of activity.</td>
                        <td>Dynamically assigned based on actual data transmission needs.</td>
                    </tr>
                    <tr>
                        <td>Slot Utilization</td>
                        <td>Inefficient if some users are idle — slots go unused.</td>
                        <td>Efficient — only active users are given slots.</td>
                    </tr>
                    <tr>
                        <td>Traffic Type Suitability</td>
                        <td>Best for constant or predictable traffic (e.g., voice).</td>
                        <td>Ideal for bursty or variable data traffic (e.g., internet data).</td>
                    </tr>
                    <tr>
                        <td>Bandwidth Efficiency</td>
                        <td>Low efficiency during idle periods.</td>
                        <td>High efficiency; bandwidth is allocated based on demand.</td>
                    </tr>
                    <tr>
                        <td>System Complexity</td>
                        <td>Simple; no need for dynamic scheduling.</td>
                        <td>Complex; requires a scheduler to manage real-time allocation.</td>
                    </tr>
                    <tr>
                        <td>Delay/Latency</td>
                        <td>Predictable, low latency; good for real-time applications.</td>
                        <td>Variable latency due to scheduling and contention.</td>
                    </tr>
                    <tr>
                        <td>Collision Possibility</td>
                        <td>No collisions — exclusive access in time slots.</td>
                        <td>Minimal collisions — but scheduling overhead exists.</td>
                    </tr>
                    <tr>
                        <td>Overhead</td>
                        <td>Low protocol overhead.</td>
                        <td>Higher overhead due to slot request and allocation control.</td>
                    </tr>
                    <tr>
                        <td>Fairness</td>
                        <td>May be unfair during low traffic; idle users still get slots.</td>
                        <td>More fair in dynamic environments, prioritizes active users.</td>
                    </tr>
                    <tr>
                        <td>Implementation Cost</td>
                        <td>Lower (simpler hardware/software).</td>
                        <td>Higher (needs intelligent scheduling and buffer management).</td>
                    </tr>
                    <tr>
                        <td>Examples of Use</td>
                        <td>GSM (2G mobile), legacy TDM systems.</td>
                        <td>4G/5G networks, dynamic access networks, some LAN/WAN protocols.</td>
                    </tr>
                </table>
            </div>
            
            <div class="subsection-title">TDM Hierarchy</div>
            <p>There are basically two types of standards for TDM hierarchy:</p>
            <ul>
                <li>North American TDM: Adopted by North America, Canada and Japan</li>
                <li>European TDM (International): Adopted by all other regions</li>
            </ul>
            
            <p>North America and Canada identify the digital time division multiplexing (TDM) hierarchy as "T," as in T1, T3, and so on.</p>
            <p>Japan identifies the digital TDM hierarchy as "J," as in J1, J3, and so on.</p>
            <p>International identification of the digital TDM hierarchy is "E," as in E1, E3, and so on.</p>
            
            <div class="subsection-title">T Carrier Systems</div>
            <ul>
                <li><strong>T1 Carrier System:</strong> T1 carrier systems were designed to combine PCM and TDM Techniques for the transmission of 24 64Kbps channels with each channel Capable of Carrying Digitally encoded voice band telephone signals or data. The transmission bit rate (line speed) for a T1 carrier is 1.544 Mbps.</li>
                <li><strong>T2 Carrier System:</strong> T2 carriers time division multiplex 96 64-Kbps voice or data channels into a single 6.312 Mbps data signal for transmission over twisted pair copper wire up to 500 miles over a special metallic cable.</li>
                <li><strong>T3 Carrier system:</strong> T3 carriers Time division multiplex 672 64-kbps voice or data channels for transmission over a single coaxial cable. The transmission rate is 44.736 Mbps.</li>
                <li><strong>T4 Carrier System:</strong> T4 carriers time division multiplex 4032 64-kbps voice or data channels for transmitting over a single T4 coaxial cable up to 500 mile. The transmission rate is very high i.e., 274.16 Mbps.</li>
            </ul>
            
            <p>Note: The higher multiplexing level inputs are not always derived from lower-level multiplexer. For example, one analog television signal can be directly converted to DS-3 data stream (44.73 Mbps). Similarly, a DS stream can carry a mixture of information from variety of sources such as computer, television. Lower DS levels may be transmitted using twisted pair and higher ones over coaxial, fiber optic, microwave radio or via satellite.</p>
        </div>
        
        <!-- Section 5.4 -->
        <div id="section5_4" class="section">
            <h2 class="section-title">5.4 Asymmetric digital subscriber line, XDSL</h2>
            
            <div class="subsection-title">Asymmetric Digital Subscriber Line (ADSL)</div>
            <p>ADSL (Asymmetric Digital Subscriber Line) is a type of DSL technology that provides faster download speeds than upload speeds. It uses the existing telephone lines to transmit digital data at high speeds.</p>
            
            <div class="subsection-title">How ADSL Works</div>
            <p>ADSL uses frequency division multiplexing to separate voice and data signals on the same copper telephone line. It uses higher frequency bands for data transmission and lower frequency bands for voice communication. This allows simultaneous voice and data transmission without interference.</p>
            
            <div class="subsection-title">Key Features of ADSL</div>
            <ul>
                <li>Asymmetric data rates: Download speeds are typically much faster than upload speeds (e.g., 8 Mbps down, 1 Mbps up)</li>
                <li>Uses existing telephone infrastructure</li>
                <li>Does not interfere with regular telephone service</li>
                <li>Requires ADSL modem at both ends</li>
                <li>Typical range: Up to 5 km from the central office</li>
            </ul>
            
            <div class="subsection-title">XDSL Technologies</div>
            <p>XDSL is a generic term for various types of DSL technologies. The "X" represents different variants:</p>
            <ul>
                <li><strong>ADSL:</strong> Asymmetric DSL - Fast download, slower upload</li>
                <li><strong>SDSL:</strong> Symmetric DSL - Equal upload and download speeds</li>
                <li><strong>VDSL:</strong> Very high bit rate DSL - Higher speeds but shorter range</li>
                <li><strong>HDSL:</strong> High bit rate DSL - Symmetric, used for business applications</li>
                <li><strong>IDSL:</strong> ISDN DSL - Based on ISDN technology</li>
            </ul>
            
            <div class="subsection-title">Applications of XDSL</div>
            <ul>
                <li>Home broadband internet access</li>
                <li>Business internet connectivity</li>
                <li>Remote work and telecommuting</li>
                <li>Video streaming and online gaming</li>
                <li>VoIP (Voice over IP) services</li>
            </ul>
        </div>
        
        <!-- Section 5.5 -->
        <div id="section5_5" class="section">
            <h2 class="section-title">5.5 Spread spectrum: DSSS, FHSS, CDMA</h2>
            
            <div class="subsection-title">Spread Spectrum</div>
            <p>Spread spectrum is a method of transmitting radio signals over a wide range of frequencies. It spreads the signal over a broader bandwidth than the minimum required to send the information, which provides advantages such as increased resistance to interference, improved security, and enhanced privacy.</p>
            <p>A special code (pseudo noise) is used for spectrum spreading and the same code is to be used to despread the signal at the receiver.</p>
            
            <div class="subsection-title">Direct Sequence Spread Spectrum (DSSS)</div>
            <p>DSSS spreads the data signal over a wider frequency band by multiplying the original data with a high-rate pseudo-random noise (PN) code, known as a "chipping" code, and the bit rate of the chip is called as chip-rate.</p>
            <p>This process increases the bandwidth of the signal, making it more resistant to interference.</p>
            
            <div class="subsection-title">Key Characteristics of DSSS</div>
            <ul>
                <li>Interference Resistance: DSSS is effective against narrowband interference. The spreading of the signal allows the system to recover the original data even if parts of the signal are corrupted.</li>
                <li>Security: The use of a pseudo-random code makes unauthorized interception more challenging.</li>
                <li>Applications: DSSS is utilized in GPS, CDMA cellular networks, and IEEE 802.11b Wi-Fi standards.</li>
            </ul>
            
            <div class="subsection-title">Advantages of DSSS</div>
            <ul>
                <li>Higher data transmission rates (up to 11 Mbps) compared to FHSS.</li>
                <li>Better performance in environments with multipath propagation.</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of DSSS</div>
            <ul>
                <li>Requires a wider bandwidth, which can be a limitation in spectrum-constrained environments.</li>
                <li>More susceptible to wideband jamming.</li>
            </ul>
            
            <div class="subsection-title">Frequency Hopping Spread Spectrum (FHSS)</div>
            <p>In Frequency Hopping Spread Spectrum (FHSS), different carrier frequencies are modulated by the source signal i.e. M carrier frequencies are modulated by the signal.</p>
            <p>At one moment signal modulates one carrier frequency and at the subsequent moments, it modulates other carrier frequencies.</p>
            <p>Both the transmitter and receiver synchronize their frequency hopping patterns using a shared pseudo-random sequence.</p>
            
            <div class="subsection-title">Key Characteristics of FHSS</div>
            <ul>
                <li>Interference Resistance: FHSS is highly resistant to narrowband interference. Because the signal hops between many frequencies, any interference only affects a small fraction of the transmission time.</li>
                <li>Security: The pseudo-random hopping pattern makes it difficult for unauthorized users to intercept or jam the communication unless they know the exact hopping sequence.</li>
                <li>Applications: FHSS is commonly used in technologies such as Bluetooth, military communication systems, and some cordless phones.</li>
            </ul>
            
            <div class="subsection-title">Advantages of FHSS</div>
            <ul>
                <li>Robust against narrowband interference and jamming.</li>
                <li>Enhanced security due to frequency hopping.</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of FHSS</div>
            <ul>
                <li>Lower data transmission rates (up to 3 Mbps) compared to DSSS.</li>
                <li>Requires synchronization between transmitter and receiver.</li>
            </ul>
            
            <div class="subsection-title">Types of FHSS</div>
            <div class="subsection-title">Fast Frequency Hopping Spread Spectrum (Fast-FHSS)</div>
            <ul>
                <li>One data bit is spread over multiple frequencies.</li>
                <li>Increases resistance to interference and jamming.</li>
                <li>Offers higher security because the signal is less predictable.</li>
                <li>More complex synchronization between transmitter and receiver.</li>
                <li>Example: If you're sending one bit, but during its transmission, the system hops across 3 frequencies — that's Fast-FHSS.</li>
            </ul>
            
            <div class="subsection-title">Slow Frequency Hopping Spread Spectrum (Slow-FHSS)</div>
            <ul>
                <li>Multiple bits are transmitted before the next frequency hop.</li>
                <li>Easier to implement with simpler hardware.</li>
                <li>More efficient use of the channel (lower hopping overhead).</li>
                <li>Lower resistance to interference and jamming. Also, it is less secure compared to Fast-FHSS.</li>
                <li>Example: If you're sending a byte (8 bits), and the system hops frequency only once after sending all 8 bits — that's Slow-FHSS.</li>
            </ul>
            
            <div class="subsection-title">Code Division Multiple Access (CDMA)</div>
            <p>Code division multiple access technique is an example of multiple access where several transmitters use a single channel to send information simultaneously.</p>
            
            <div class="subsection-title">Features of CDMA</div>
            <ul>
                <li>In CDMA, every user uses the full available spectrum instead of getting allotted by separate frequency.</li>
                <li>While multiple codes occupy the same channel in CDMA, the users having same code can communicate with each other.</li>
                <li>CDMA offers more air-space capacity than TDMA.</li>
                <li>Unlike TDMA or FDMA, CDMA has soft capacity limit. Increasing the number of users in a CDMA raises the noise floor in a linear fashion.</li>
                <li>CDMA suffers from Self-jamming. Self-jamming arises form the fact that spreading sequences of different users are not exactly orthogonal as a result interference occurs while dispreading of a particular PN code.</li>
                <li>Near-far problem occurs at a CDMA receiver if an undesired user has a high detected power as compared to the desired user. Power control mechanism is used to counter near-far effect.</li>
            </ul>
            
            <div class="subsection-title">Example of 4 stations communicating with each other using CDMA</div>
            <p>Suppose there are four stations M, N, O, and P individually transmitting 1, 0, 1, 1. And each one is having a unique code sequence (C1, C2, C3, C4) where the codes are of orthogonal nature.</p>
            
            <p>To represent data bits and code bits we will use polar signaling thus:</p>
            <ul>
                <li>Binary 0 will be represented as -1</li>
                <li>Binary 1 will be represented as +1 (or 1)</li>
            </ul>
            
            <p>Thus, data vector i.e., (M, N, O, P) will be (1, -1, 1, 1).</p>
            
            <p>Parameter for choosing codes: The sum of resultant bits obtained from the multiplication of codes of any two stations must be 0.</p>
            
            <p>Suppose here, C1 * C4 = (1, 1, -1, -1) * (1, -1, 1, -1) = (1, -1, -1, 1)</p>
            <p>On addition of all 4 bits of resultant, we will get 0. Thus, codes are of orthogonal nature.</p>
            
            <p>The sum of resultant obtained when a code sequence is multiplied with itself must indicate the total number of stations transmitting.</p>
            <p>Suppose, C2 * C2 = (1, -1, -1, 1) * (1, -1, -1, 1) = (1, 1, 1, 1)</p>
            <p>So, 1+1+1+1 will give 4 as output. Hence, verifying that there are 4 stations transmitting at a time.</p>
            
            <p>Transmission: To perform DS-CDMA, first, data bits are to be multiplied separately with their respective code. Then, the bits will be transmitted combinedly over the channel.</p>
            
            <p>The complete bit sequence to be transmitted will be produced by adding the bits according to their positional sequence:</p>
            <p>The sequence transmitted over the channel will be: 2, 2, 2, -2.</p>
            
            <p>Reception: The receiver will get the above sequence. Now, to retrieve the actual information from this received (coded form) data, each receiving station must have the code sequence of their respective transmitting station.</p>
            
            <p>Here each receiver will get the original data sequence by multiplying the received bit sequence with its respective code stream.</p>
            
            <p>Hence, by summing every bit of the sequence and dividing it will the total number of transmitting stations one can get the originally transmitted data bit. So, calculating for each receiving station, we will get:</p>
            <ul>
                <li>R1 = [2+2+(-2)+2]/Number of stations = 4/4 = 1</li>
                <li>R2 = [2+(-2)+(-2)+(-2)]/Number of stations = -4/4 = -1</li>
                <li>R3 = [2+2+2+(-2)]/Number of stations = 4/4 = 1</li>
                <li>R4 = [2+(-2)+2+2]/Number of stations = 4/4 = 1</li>
            </ul>
            
            <p>According to polar signaling, 1 denotes binary 1 and -1 denotes binary 0. Therefore, the data bits received at each receiving station will be 1, 0, 1, 1.</p>
            <p>It can be clearly checked that the received bits are exactly the same as the one which was transmitted from the transmitting stations. Hence, in this way CDMA can be implemented.</p>
        </div>
        
        <!-- Section 5.6 -->
        <div id="section5_6" class="section">
            <h2 class="section-title">5.6 Intro switcher communication network, connection oriented and connectionless</h2>
            
            <div class="subsection-title">Introduction to Switching Communication Network</div>
            <p>Switching communication networks are systems that connect multiple devices and enable them to communicate with each other. Switching networks provide the infrastructure for data transmission between different points in a network.</p>
            
            <div class="subsection-title">Connection-Oriented vs Connectionless Services</div>
            
            <div class="subsection-title">Connection-Oriented Service</div>
            <p>A connection-oriented service requires a dedicated path to be established between the source and destination before data transmission begins. This path is maintained for the duration of the communication session.</p>
            
            <p>Characteristics of connection-oriented service:</p>
            <ul>
                <li>Requires a setup phase before data transfer</li>
                <li>Guaranteed delivery of data in order</li>
                <li>Provides reliability and error control</li>
                <li>Higher overhead due to connection setup and maintenance</li>
                <li>Examples: TCP, ATM, X.25</li>
            </ul>
            
            <div class="subsection-title">Connectionless Service</div>
            <p>A connectionless service does not require a dedicated path to be established before data transmission. Each data packet is treated independently and routed separately.</p>
            
            <p>Characteristics of connectionless service:</p>
            <ul>
                <li>No setup phase required</li>
                <li>Packets may arrive out of order</li>
                <li>No guarantee of delivery</li>
                <li>Lower overhead</li>
                <li>Examples: UDP, IP, Ethernet</li>
            </ul>
            
            <div class="subsection-title">Comparison</div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Connection-Oriented</th>
                        <th>Connectionless</th>
                    </tr>
                    <tr>
                        <td>Setup Phase</td>
                        <td>Required</td>
                        <td>Not required</td>
                    </tr>
                    <tr>
                        <td>Order of Delivery</td>
                        <td>Guaranteed</td>
                        <td>Not guaranteed</td>
                    </tr>
                    <tr>
                        <td>Reliability</td>
                        <td>High</td>
                        <td>Low</td>
                    </tr>
                    <tr>
                        <td>Overhead</td>
                        <td>High</td>
                        <td>Low</td>
                    </tr>
                    <tr>
                        <td>Latency</td>
                        <td>Higher due to setup</td>
                        <td>Lower</td>
                    </tr>
                    <tr>
                        <td>Examples</td>
                        <td>TCP, ATM, X.25</td>
                        <td>UDP, IP, Ethernet</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <!-- Section 5.7 -->
        <div id="section5_7" class="section">
            <h2 class="section-title">5.7 Switching devices. Types, importance and application</h2>
            
            <div class="subsection-title">Switching Devices in Data Communication</div>
            <p>Switching devices play a crucial role in networking and data communication by directing data packets between devices on a network. They manage traffic efficiently and help establish communication paths between sender and receiver.</p>
            
            <div class="subsection-title">Hub</div>
            <ul>
                <li>A hub is a device for connecting multiple Ethernet devices and making them act as a single network segment.</li>
                <li>It works in the physical layer of the OSI model.</li>
                <li>It has multiple inputs and output ports in which a signal introduced at the input of any port appears at the output of every port except the original incoming port.</li>
                <li>No intelligence—it doesn't check MAC addresses or filter traffic.</li>
                <li>Applications: Small home or office networks (now largely outdated), Temporary setups requiring simple connectivity.</li>
                <li>Types of Hubs:
                    <ul>
                        <li>Active Hub: Amplifies signal before broadcasting.</li>
                        <li>Passive Hub: Only serves as a connection point.</li>
                    </ul>
                </li>
                <li>Advantages: Simple and low-cost networking solution.</li>
                <li>Disadvantages: Lacks security, scalability and causes traffic collisions.</li>
            </ul>
            
            <div class="subsection-title">Switches</div>
            <ul>
                <li>A switch is the better version of a hub.</li>
                <li>A Switch is a networking device that connects devices in a LAN and uses MAC addresses to forward data only to the intended recipient.</li>
                <li>They may operate in the data link layer and network layer; a device that operates simultaneously at more than one of these layers is known as a multilayer switch.</li>
                <li>A Switch can check the errors before forwarding the data, which makes it more efficient and improves its performance.</li>
                <li>Applications: Enterprise LANs and campus networks, Data centers and network backbones, VLAN and QoS implementations.</li>
                <li>Types of Switches:
                    <ul>
                        <li>Managed Switch: Can be configured for VLANs, traffic monitoring, etc.</li>
                        <li>Unmanaged Switch: Plug-and-play, no configuration needed.</li>
                    </ul>
                </li>
                <li>Advantages: Enhances security, reduces network congestion and improves QoS. Supports advanced features like VLANs, port mirroring, and load balancing.</li>
            </ul>
            
            <div class="subsection-title">Router</div>
            <ul>
                <li>A Router is a device that connects multiple networks together and routes data packets based on their IP addresses.</li>
                <li>It operates at the Network Layer (Layer 3).</li>
                <li>It maintains a routing table to determine the best path for data.</li>
                <li>Forwards packets between different networks (e.g., LAN to WAN).</li>
                <li>Applications: Connecting LANs to the Internet, Wide Area Networks (WANs), Home, business, and ISP networks.</li>
                <li>Types:
                    <ul>
                        <li>Static routers – Static routers are configured manually and route data packets based on the information in a router table.</li>
                        <li>Dynamic routers – Dynamic routers use adaptive routing which is a process where a router can forward data by a different route.</li>
                    </ul>
                </li>
                <li>Advantages: Directs internet traffic across networks efficiently. Provides security through access control and firewalls. Supports VPN and Parental Control.</li>
            </ul>
            
            <div class="subsection-title">Comparison of Switching Devices</div>
            <div class="table-container">
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
                        <td>Broadcasts data to all devices</td>
                        <td>Forwards data to specific MAC address</td>
                        <td>Routes packets between networks</td>
                    </tr>
                    <tr>
                        <td>Data Handling</td>
                        <td>No filtering</td>
                        <td>Uses MAC address</td>
                        <td>Uses IP address</td>
                    </tr>
                    <tr>
                        <td>Intelligence</td>
                        <td>No</td>
                        <td>Medium (MAC-based filtering)</td>
                        <td>High (routing & IP logic)</td>
                    </tr>
                    <tr>
                        <td>Security</td>
                        <td>None</td>
                        <td>Moderate (VLAN, port security)</td>
                        <td>High (ACLs, NAT, Firewall)</td>
                    </tr>
                    <tr>
                        <td>Configuration</td>
                        <td>No configuration needed</td>
                        <td>May be managed or unmanaged</td>
                        <td>Needs configuration</td>
                    </tr>
                    <tr>
                        <td>Cost</td>
                        <td>Cheapest</td>
                        <td>Moderate</td>
                        <td>Costlier</td>
                    </tr>
                    <tr>
                        <td>Example</td>
                        <td>Connecting 3-4 PCs in a lab</td>
                        <td>Office LAN with printers & PCs</td>
                        <td>Home Wi-Fi router</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <!-- Section 5.8 -->
        <div id="section5_8" class="section">
            <h2 class="section-title">5.8 Circuit switching network: Circuit switching concepts, message switching</h2>
            
            <div class="subsection-title">Circuit Switching Concepts</div>
            <p>Circuit switching is a technique that directly connects the sender and the receiver in an unbroken path.</p>
            <p>Telephone switching equipment, for example, establishes a path that connects the caller's telephone to the receiver's telephone by making a physical connection.</p>
            <p>With this type of switching technique, once a connection is established, a dedicated path exists between both ends until the connection is terminated.</p>
            <p>Routing decisions must be made when the circuit is first established, but there are no decisions made after that time.</p>
            <p>Circuit switching in a network operates almost the same way as the telephone system works. A complete end-to-end path must exist before communication can take place.</p>
            <p>The computer initiating the data transfer must ask for a connection to the destination. Once the connection has been initiated and completed to the destination device, the destination device must acknowledge that it is ready and willing to carry on a transfer.</p>
            
            <div class="subsection-title">Advantages of Circuit Switching</div>
            <ul>
                <li>The communication channel (once established) is dedicated.</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of Circuit Switching</div>
            <ul>
                <li>Possible long wait to establish a connection (10 seconds, more on long-distance or international calls), during which no data can be transmitted.</li>
                <li>More expensive than any other switching techniques, because a dedicated path is required for each connection.</li>
                <li>Inefficient use of the communication channel, because the channel is not used when the connected systems are not using it.</li>
            </ul>
            
            <div class="subsection-title">Message Switching</div>
            <p>With message switching there is no need to establish a dedicated path between two stations.</p>
            <p>When a station sends a message, the destination address is appended to the message.</p>
            <p>The message is then transmitted through the network, in its entirety, from node to node.</p>
            <p>Each node receives the entire message, stores it in its entirety on disk, and then transmits the message to the next node.</p>
            <p>This type of network is called a store-and-forward network.</p>
            <p>A message-switching node is typically a general-purpose computer. The device needs sufficient secondary-storage capacity to store the incoming messages, which could be long.</p>
            <p>A time delay is introduced using this type of scheme due to store-and-forward time, plus the time required to find the next node in the transmission path.</p>
            
            <div class="subsection-title">Advantages of Message Switching</div>
            <ul>
                <li>Channel efficiency can be greater compared to circuit-switched systems, because more devices are sharing the channel.</li>
                <li>Traffic congestion can be reduced, because messages may be temporarily stored in route.</li>
                <li>Message priorities can be established due to store-and-forward technique.</li>
                <li>Message broadcasting can be achieved with the use of broadcast address appended in the message.</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of Message Switching</div>
            <ul>
                <li>Message switching is not compatible with interactive applications i.e., the applications that use voice and video.</li>
                <li>Store-and-forward devices are expensive, because they must have large disks to hold potentially long messages.</li>
            </ul>
        </div>
        
        <!-- Section 5.9 -->
        <div id="section5_9" class="section">
            <h2 class="section-title">5.9 Packet switching: Virtual circuit switching, datagram switching</h2>
            
            <div class="subsection-title">Packet Switching Concepts</div>
            <p>Packet switching can be seen as a solution that tries to combine the advantages of message and circuit switching and to minimize the disadvantages of both.</p>
            <p>There are two methods of packet switching: Datagram and virtual circuit.</p>
            <p>In both packet switching methods, a message is broken into small parts, called packets. Each packet is tagged with appropriate source and destination addresses known as IP address.</p>
            <p>Since packets have a strictly defined maximum length, they can be stored in main memory instead of disk; therefore, access delay and cost are minimized. Also, the transmission speeds, between nodes, are optimized.</p>
            <p>With current technology, packets are generally accepted onto the network on a first-come, first-served basis. If the network becomes overloaded, packets are delayed or discarded ("dropped").</p>
            
            <div class="subsection-title">Datagram Switching</div>
            <p>Datagram packet switching is a packet switching method that treats each packet, or datagram, as a separate entity.</p>
            <p>Each packet is routed via the network on its own. It is a service that does not require a connection.</p>
            <p>Because there is no specific channel for a connection session, there is no need to reserve resources. As a result, packets have a header with all the destination's information.</p>
            <p>The intermediate nodes assess a packet's header and select an appropriate link to a different node closer to the destination.</p>
            
            <div class="subsection-title">Virtual Circuit Switching</div>
            <p>An approach in which a path is built between the source and the final destination through which all packets are routed throughout a call is known as virtual circuit switching.</p>
            <p>Because the connection looks to the user to be an infatuated physical circuit, this path is referred to as a virtual circuit.</p>
            <p>Before the data transmission can commence, the source and destination must agree on a virtual circuit path.</p>
            <p>For the decision, all intermediary nodes between the two places add a routing entry to their routing database.</p>
            <p>Additional parameters, like the utmost packet size, also are exchanged between the source and destination during call setup. The virtual circuit is cleared after the info transfer is completed.</p>
            
            <div class="subsection-title">Comparison of Datagram and Virtual Circuit Networks</div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Feature</th>
                        <th>Datagram Network</th>
                        <th>Virtual Circuit Network</th>
                    </tr>
                    <tr>
                        <td>Service Type</td>
                        <td>Connection-less service. There is no need for reservation of resources as there is no dedicated path for a connection session.</td>
                        <td>Virtual circuits are connection-oriented, which means that there is a reservation of resources like buffers, bandwidth, etc. for the time during which the new setup VC is going to be used by a data transfer session.</td>
                    </tr>
                    <tr>
                        <td>Routing</td>
                        <td>All packets are free to use any available path. As a result, intermediate routers calculate routes on the go due to dynamically changing routing tables on routers.</td>
                        <td>The first sent packet reserves resources at each server along the path. Subsequent packets will follow the same path as the first sent packet for the connection time.</td>
                    </tr>
                    <tr>
                        <td>Order of Delivery</td>
                        <td>Data packets reach the destination in random order, which means they need not reach in the order in which they were sent out.</td>
                        <td>Packets reach in order to the destination as data follows the same path.</td>
                    </tr>
                    <tr>
                        <td>Header Information</td>
                        <td>Every packet is free to choose any path, and hence all the packets must be associated with a header containing information about the source and the upper layer data.</td>
                        <td>All the packets follow the same path and hence a global header is required only for the first packet of connection and other packets will not require it.</td>
                    </tr>
                    <tr>
                        <td>Reliability</td>
                        <td>Datagram networks are not as reliable as Virtual Circuits.</td>
                        <td>Virtual Circuits are highly reliable.</td>
                    </tr>
                    <tr>
                        <td>Efficiency and Delay</td>
                        <td>Efficiency high, delay more</td>
                        <td>Efficiency low and delay less</td>
                    </tr>
                    <tr>
                        <td>Implementation</td>
                        <td>It is always easy and cost-efficient to implement datagram networks as there is no need of reserving resources and making a dedicated path each time an application has to communicate.</td>
                        <td>Implementation of virtual circuits is costly as each time a new connection has to be set up with reservation of resources and extra information handling at routers.</td>
                    </tr>
                    <tr>
                        <td>Network Type</td>
                        <td>A Datagram based network is a true packet switched network. There is no fixed path for transmitting data.</td>
                        <td>A virtual circuit network uses a fixed path for a particular session, after which it breaks the connection and another path has to be set up for the next session.</td>
                    </tr>
                </table>
            </div>
            
            <div class="subsection-title">Advantages of Packet Switching</div>
            <ul>
                <li>Packet switching is cost effective, because switching devices do not need massive amount of secondary storage.</li>
                <li>Packet switching offers improved delay characteristics, because there are no long messages in the queue (maximum packet size is fixed).</li>
                <li>Packet can be rerouted if there is any problem, such as, busy or disabled links.</li>
                <li>The advantage of packet switching is that many network users can share the same channel at the same time. Packet switching can maximize link efficiency by making optimal use of link bandwidth.</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of Packet Switching</div>
            <ul>
                <li>Protocols for packet switching are typically more complex.</li>
                <li>It can add some initial costs in implementation.</li>
                <li>If packet is lost, sender needs to retransmit the data. Another disadvantage is that packet-switched systems still can't deliver the same quality as dedicated circuits in applications requiring very little delay – like voice conversations or moving images.</li>
            </ul>
        </div>
    </div>


<!-- <==================chapter 6 start ==================> -->
    <div id="chapter_6" class="chapter-container">
        <h1 class="chapter-title">Chapter 6: Cellular Wireless Communications and Latest Trends</h1>
        
        <div class="navigation">
            <ul class="nav-list">
                <li class="nav-item" onclick="document.getElementById('section6_1').scrollIntoView({behavior: 'smooth'})">6.1 Overview of 1G, 2G, 3G and 4G</li>
                <li class="nav-item" onclick="document.getElementById('section6_2').scrollIntoView({behavior: 'smooth'})">6.2 Cellular technology fundamental terminology</li>
                <li class="nav-item" onclick="document.getElementById('section6_3').scrollIntoView({behavior: 'smooth'})">6.3 Introduction to 5G networks, software defined networking, IoT communication</li>
            </ul>
        </div>
        
        <!-- Section 6.1 -->
        <div id="section6_1" class="section">
            <h2 class="section-title">6.1 Overview of 1G, 2G, 3G and 4G</h2>
            
            <div class="subsection-title">1G - First Generation Mobile Communication System</div>
            <p>The first generation of mobile network was deployed in Japan by Nippon Telephone and Telegraph company (NTT) in Tokyo during 1979. In the beginning of 1980s, it gained popularity in the US, Finland, UK and Europe. This system used analogue signals and it had many disadvantages due to technology limitations.</p>
            
            <p>Most popular 1G system during 1980s:</p>
            <ul>
                <li>Advanced Mobile Phone System (AMPS)</li>
                <li>Nordic Mobile Phone System (NMTS)</li>
                <li>Total Access Communication System (TACS)</li>
                <li>European Total Access Communication System (ETACS)</li>
            </ul>
            
            <div class="subsection-title">Key features of 1G system</div>
            <ul>
                <li>Frequency: 800 MHz and 900 MHz</li>
                <li>Bandwidth: 10 MHz (666 duplex channels with bandwidth of 30 KHz)</li>
                <li>Technology: Analogue switching</li>
                <li>Modulation: Frequency Modulation (FM)</li>
                <li>Mode of service: voice only</li>
                <li>Access technique: Frequency Division Multiple Access (FDMA)</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of 1G system</div>
            <ul>
                <li>Poor voice quality due to interference</li>
                <li>Poor battery life</li>
                <li>Large sized cell phones (not convenient to carry)</li>
                <li>Less security (calls could be decoded using an FM demodulator)</li>
                <li>Limited number of users and cell coverage</li>
                <li>Roaming was not possible between similar systems</li>
            </ul>
            
            <div class="subsection-title">2G - Second Generation Communication System GSM</div>
            <p>Second generation of mobile communication system introduced a new digital technology for wireless transmission also known as Global System for Mobile communication (GSM). GSM technology became the base standard for further development in wireless standards later.</p>
            <p>This standard was capable of supporting up to 14.4 to 64kbps (maximum) data rate which is sufficient for SMS and email services.</p>
            <p>Code Division Multiple Access (CDMA) system developed by Qualcomm also introduced and implemented in the mid 1990s. CDMA has more features than GSM in terms of spectral efficiency, number of users and data rate.</p>
            
            <div class="subsection-title">Key features of 2G system</div>
            <ul>
                <li>The uplink frequency range specified for GSM is 933-960 MHz (basic 900 MHz band only)</li>
                <li>The downlink frequency band 890-915 MHz (basic 900 MHz band only)</li>
                <li>Digital system (switching)</li>
                <li>SMS services is possible</li>
                <li>Roaming is possible</li>
                <li>Enhanced security</li>
                <li>Encrypted voice transmission</li>
                <li>First internet at lower data rate</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of 2G system</div>
            <ul>
                <li>Low data rate</li>
                <li>Limited mobility</li>
                <li>Less features on mobile devices</li>
                <li>Limited number of users and hardware capability</li>
            </ul>
            
            <div class="subsection-title">2.5G and 2.75G system</div>
            <p>In order to support higher data rate, General Packet Radio Service (GPRS) was introduced and successfully deployed. GPRS was capable of data rate up to 171kbps (maximum).</p>
            <p>EDGE – Enhanced Data GSM Evolution also developed to improve data rate for GSM networks. EDGE was capable to support up to 473.6kbps (maximum).</p>
            <p>Another popular technology CDMA2000 was also introduced to support higher data rate for CDMA networks. This technology has the ability to provide up to 384 kbps data rate (maximum).</p>
            
            <div class="subsection-title">3G - Third Generation Communication System</div>
            <p>Third generation mobile communication started with the introduction of UMTS – Universal Mobile Terrestrial/Telecommunication Systems. UMTS has the data rate of 384kbps, and it support video calling for the first time on mobile devices.</p>
            <p>After the introduction of 3G mobile communication system, smart phones became popular across the globe. Specific applications were developed for smartphones which handles multimedia chat, email, video calling, games, social media and healthcare.</p>
            
            <div class="subsection-title">Key features of 3G system</div>
            <ul>
                <li>Higher data rate</li>
                <li>Video calling</li>
                <li>Enhanced security, more number of users and coverage</li>
                <li>Mobile app support</li>
                <li>Multimedia message support</li>
                <li>Location tracking and maps</li>
                <li>Better web browsing</li>
                <li>TV streaming</li>
                <li>High quality 3D games</li>
            </ul>
            
            <div class="subsection-title">3.5G to 3.75 Systems</div>
            <p>In order to enhance data rate in existing 3G networks, another two technology improvements are introduced to network. HSDPA – High Speed Downlink Packet access and HSUPA – High Speed Uplink Packet Access, developed and deployed to the 3G networks. 3.5G network can support up to 2mbps data rate.</p>
            <p>3.75 system is an improved version of 3G network with HSPA+ High Speed Packet Access plus. Later this system will evolve into more powerful 3.9G system known as LTE (Long Term Evolution).</p>
            
            <div class="subsection-title">Disadvantages of 3G systems</div>
            <ul>
                <li>Expensive spectrum licenses</li>
                <li>Costly infrastructure, equipment and implementation</li>
                <li>Higher bandwidth requirements to support higher data rate</li>
                <li>Costly mobile devices</li>
                <li>Compatibility with older generation 2G system and frequency bands</li>
            </ul>
            
            <div class="subsection-title">4G - Fourth Generation Communication System</div>
            <p>4G systems are enhanced version of 3G networks developed by IEEE, offers higher data rate and capable to handle more advanced multimedia services. LTE and LTE advanced wireless technology used in 4th generation systems. Furthermore, it has compatibility with previous version thus easier deployment and upgrade of LTE and LTE advanced networks are possible.</p>
            <p>Simultaneous transmission of voice and data is possible with LTE system which significantly improve data rate. All services including voice services can be transmitted over IP packets. Complex modulation schemes and carrier aggregation is used to multiply uplink/downlink capacity.</p>
            <p>Wireless transmission technologies like WiMax are introduced in 4G system to enhance data rate and network performance.</p>
            
            <div class="subsection-title">Key features of 4G system</div>
            <ul>
                <li>Much higher data rate up to 1Gbps</li>
                <li>Enhanced security and mobility</li>
                <li>Reduced latency for mission critical applications</li>
                <li>High-definition video streaming and gaming</li>
                <li>Voice over LTE network VoLTE (use IP packets for voice)</li>
            </ul>
            
            <div class="subsection-title">Disadvantages of 4G system</div>
            <ul>
                <li>Expensive hardware and infrastructure</li>
                <li>Costly spectrum (most countries, frequency bands are too expensive)</li>
                <li>High end mobile devices compatible with 4G technology required, which is costly</li>
                <li>Wide deployment and upgrade is time consuming</li>
            </ul>
        </div>
        
        <!-- Section 6.2 -->
        <div id="section6_2" class="section">
            <h2 class="section-title">6.2 Cellular technology fundamental terminology</h2>
            
            <div class="subsection-title">Cellular Concept</div>
            <p>The design aim of early mobile wireless communication systems was to get a large number of users over a huge coverage area with a single, high-power transmitter and an antenna installed on a giant tower, transmitting a data on a single frequency spectrum.</p>
            <p>If a single transmitter/receiver are used with only a single base station, then sufficient power may not be present at huge distance from BS (Base Station). And if we use high power transmitter for large geographic area, it causes harm to environment.</p>
            <p>Also, if single transmitter was used, it was practically not possible to reuse the same frequency all over the system, because any effort to reuse the same frequency would result in interference.</p>
            <p>The cellular concept was a major breakthrough in order to solve the problems of limited user capacity and spectral congestion.</p>
            
            <p>Cellular Concept is a system-level idea in which a single high-power transmitter is replaced with multiple low-power transmitters, and small segment of the service area is being covered by each transmitter, which is referred to as a cell.</p>
            <p>Each cell uses a certain number of available channels, and a group of adjacent cells together use all the available channels. Such group is called a cluster.</p>
            <p>This cluster can repeat itself and hence same set of channels can be used again and again. Each cell has a low power transmitter with the coverage area equal to the area of the cell.</p>
            <p>In brief, Cellular Concept solves the problem of spectral congestion and user capacity (i.e., offer very high capacity in a limited spectrum)</p>
            
            <div class="subsection-title">What is a cell?</div>
            <p>The power of the radio signals transmitted by the BS decay as the signals travel away from it.</p>
            <p>A minimum amount of signal strength (let us say, x dB) is needed in order to be detected by the MS or mobile sets which may the hand-held personal units or those installed in the vehicles.</p>
            <p>The region over which the signal strength lies above this threshold value x dB is known as the coverage area of a BS and it must be a circular region, considering the BS to be isotropic radiator.</p>
            <p>Such a circle, which gives this actual radio coverage, is called the footprint of a cell.</p>
            
            <p>It might so happen that either there may be an overlap between any two such side-by-side circles or there might be a gap between the coverage areas of two adjacent circles. Such a circular geometry, therefore, cannot serve as a regular shape to describe cells.</p>
            <p>We need a regular shape for cellular design over a territory which can be served by 3 regular polygons, namely, equilateral triangle, square and regular hexagon, which can cover the entire area without any overlap and gaps. Along with its regularity, a cell must be designed such that it is most reliable too, i.e., it supports even the weakest mobile with occurs at the edges of the cell. For any distance between the center and the farthest point in the cell from it, a regular hexagon covers the maximum area.</p>
            <p>Hence, regular hexagonal geometry is used as the cells in mobile communication.</p>
            
            <img src="https://via.placeholder.com/600x300?text=Hexagonal+Cell+Structure" alt="Hexagonal Cell Structure">
            <p class="image-caption">Hexagonal Cell structure and Cluster</p>
            
            <div class="subsection-title">What is Cluster?</div>
            <p>A group of cells forms cluster when the entire available spectrum is divided equally among the cells. Cells in a group have a disjoint set of frequencies.</p>
            <p>The number of cells in a cluster must be determined so that the cluster can be repeated continuously within the coverage area of a service provider. The typical clusters contain 4,7,12 or 21 cells.</p>
            <p>The smaller the number of cells per cluster is, the bigger the number of channels per cell will be. The capacity of each cell will therefore be increased.</p>
            <p>However, a balance must be found in order to avoid interference that could occur between neighboring clusters.</p>
            
            <p>Only certain cluster sizes and cell layout are possible. The number of cells per cluster, N can only have values which satisfy:</p>
            <div class="formula">
                N = i² + ij + j²
            </div>
            <p>Where, i and j are non-negative integers.</p>
            <p>Step 1: Move i number of cells along i axis Step 2: Turn 60 degree anti-clockwise and move j number of cells</p>
            
            <div class="subsection-title">Frequency Reuse</div>
            <p>Frequency Reuse is the scheme in which allocation and reuse of channels throughout a coverage region is done.</p>
            <p>Each cellular base station is allocated a group of radio channels or Frequency sub-bands to be used within a small geographic area known as a cell. The shape of the cell is Hexagonal.</p>
            <p>The process of selecting and allocating the frequency sub-bands for all of the cellular base station within a system is called Frequency reuse or Frequency Planning.</p>
            <p>Frequency reuse is one of the fundamental concepts on which commercial wireless systems are based that involve the partitioning of RF radiating area into cells.</p>
            <p>To ensure that the mutual interference between users remains below a harmful level, adjacent cells use different frequencies. However, in cells that are separated further away, frequencies can be reused.</p>
            
            <div class="subsection-title">Silent Features of using Frequency Reuse</div>
            <ul>
                <li>Frequency reuse improve the spectral efficiency, channel capacity and signal Quality (QoS).</li>
                <li>The number of times a frequency can be reused is depended on the tolerance capacity of the radio channel from the nearby transmitter that is using the same frequencies.</li>
                <li>In Frequency Reuse scheme, total bandwidth is divided into different sub-bands that are used by cells.</li>
                <li>Frequency reuse scheme allow WiMAX system operators to reuse the same frequencies at different cell sites.</li>
            </ul>
            
            <p>Cell with the same letter uses the same set of channels group or frequencies sub-band.</p>
            <p>To find the total number of channel allocated to a cell:</p>
            <div class="formula">
                S = kN
            </div>
            <p>Where:</p>
            <ul>
                <li>S = Total number of duplex channels available to use</li>
                <li>k = Channels allocated to each cell (k < S)</li>
                <li>N = Total number of cells or Cluster Size</li>
            </ul>
            
            <p>Frequency Reuse Factor = 1/N</p>
            
            <p>In the above diagram cluster size is 7 (A, B, C, D, E, F, G) thus frequency reuse factor is 1/7.</p>
            
            <div class="table-container">
                <table>
                    <tr>
                        <th>Size (N)</th>
                        <th>Reuse distance (D)</th>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>7.55R</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>6R</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>4.6R</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>3.46R</td>
                    </tr>
                </table>
            </div>
            
            <div class="subsection-title">Interference</div>
            <p>Interference is one of the major factors affecting the performance of cellular radio systems.</p>
            <p>Sources of interference consist of:</p>
            <ul>
                <li>another mobile inside the same cell</li>
                <li>an ongoing call in a neighboring cell</li>
                <li>other base stations transmitting signal in the same frequency band</li>
                <li>any non-cellular system which accidentally transmits energy into the cellular frequency band</li>
            </ul>
            <p>Interference on voice signals could give rise to cross talk, where the caller hears interference in the background due to the presence of an unwanted transmission.</p>
            <p>Interference on control channels gives rise to missed and blocked calls.</p>
            <p>Interference has been accepted as a major obstruction in increasing the capacity of a system and is largely responsible for dropped calls in a network.</p>
            
            <div class="subsection-title">Co-Channel Interference (CCI)</div>
            <p>The channel reuse approach is very useful for increasing the efficiency of radio spectrum utilization, but it results in co-channel interference because the same radio channel is repeatedly used in different co-channel cells in a network. In this case, the quality of a received signal is very much affected both by the amount of radio coverage area and the co-channel interference.</p>
            <p>The cells when the same set of frequencies is used are called co-channel cells. Co-channel interference is the cross talk between two different radio transmitters using the same radio frequency.</p>
            <p>This type of interference is generally generated because channel sets have been allocated to two different cells that are not far enough geographically, and their signals are strong enough to cause interference to each other.</p>
            
            <div class="subsection-title">Adjacent Channel Interference</div>
            <p>Signals from neighboring radio channels, also called adjacent channel, leak into the particular channel, thus causing adjacent channel interference. Adjacent channel interference takes place due to the inability of a mobile phone to separate out the signals of adjacent channels allocated to neighboring cell sites (e.g., channel 101 in cell A, and channel 102 in cell B), where both A and B cells are present in the same reuse cluster.</p>
            <p>Imperfect receiver filters allow nearby frequencies to leak into the passband</p>
            
            <p>Adjacent channel interference can be reduced through careful and thorough filtering and efficient channel allocations.</p>
            <p>By maintaining the channel separation as large as possible in a given cell, the adjacent channel interference may well be minimized significantly.</p>
            <p>Hence, instead of allocating contiguous band of channels to each cell, channels are allocated such a way that the frequency separation between channels in a given cell should be maximized.</p>
            
            <div class="subsection-title">Handoff Strategies</div>
            <p>In cellular telecommunications, the terms handover or handoff refers to the process of transferring ongoing call or data connectivity from one Base Station to other Base Station.</p>
            <p>When a mobile moves into the different cell while the conversation is in progress then the MSC (Mobile Switching Center) transfer the call to a new channel belonging to the new Base Station.</p>
            <p>Handoff is necessary for preventing loss of interruption of service to a caller or a data session user.</p>
            <p>As the user (MS) moves away from the cell of one tower (BS), the signal strength of that BS reduces. However, the signal from another (now closer) BS grows, and a handoff is imminent.</p>
            
            <div class="subsection-title">Need of Handoff</div>
            <ul>
                <li>One of the building blocks of cellular communication is mobility, which refers to providing users with the freedom of movement while they still are connected to the network.</li>
                <li>Handoffs play a major role in allowing users to move across cells without the fear of being disconnected.</li>
                <li>It is also to be noted that a handoff may also be triggered when the number of subscribers in a particular cell has already reached the cell's maximum limit, keeping the network safe from the threat of being congested and overloaded.</li>
                <li>It can be assumed to be an example of "make before break" as a standby connection is supposed to be present before the switch is done.</li>
            </ul>
            
            <div class="subsection-title">Handoff operation</div>
            <ul>
                <li>Identifying a new base station</li>
                <li>Reallocating the voice and control channels with the new base station.</li>
            </ul>
            
            <div class="subsection-title">Handoff Threshold</div>
            <p>Minimum usable signal for acceptable voice quality (-90dBm to -100dBm).</p>
            <p>Handoff margin cannot be too large or too small.</p>
            <div class="formula">
                Δ = P<sub>r,handoff</sub> - P<sub>r,minimun usable</sub>
            </div>
            <ul>
                <li>If it is too large, unnecessary handoffs burden for the MSC.</li>
                <li>If it is too small, there may be insufficient time to complete handoff before a call is lost.</li>
            </ul>
            
            <img src="https://via.placeholder.com/600x300?text=Handoff+Situation" alt="Handoff Situation">
            <p class="image-caption">Handoff situation (Call properly transferred to BS2)</p>
            
            <p>This signal strength measurement must be optimized in order to avoid unwanted handoffs, while ensuring that wanted handoffs are completed before a call gets dropped.</p>
            <p>The time required to come to a decision if a handoff is needed, depends on the speed of the vehicle at which it is moving. Information about the speed of vehicle can also be calculated from the fading signal received at the base station.</p>
            <p>The time during which a caller remains within a cell, without any handoff to the neighboring cells, is called the dwell time.</p>
            <p>The dwell time of a call depends upon a number of factors i.e.,</p>
            <ul>
                <li>Propagation</li>
                <li>Interference</li>
                <li>distance between the caller and the base station</li>
                <li>several other time varying factors.</li>
            </ul>
            
            <div class="subsection-title">Handoff measurement</div>
            <p>In first generation cellular systems, signal strength computations are done by the base stations and monitored by the MSC. All the base stations regularly observe the signal strengths of its reserve channels to find out the relative location of each mobile user with respect to the base station.</p>
            <p>In addition to calculating the radio signal strength indication (RSSI) of ongoing calls in the cell, an extra receiver in each base station, is used to find out signal strengths of mobile users present in the neighboring cells.</p>
            <p>The extra receiver is controlled by the MSC and is used to examine the signal strength of callers in the neighboring cells and informs RSSI to the MSC.</p>
            <p>Based on the RSSI values received from each extra receiver, the MSC determines whether handoff is required or not.</p>
            
            <p>In second generation cellular systems using digital TDMA technology, handoff decisions are mobile assisted. In mobile assisted handoff (MAHO), each mobile station measures the received power from the neighboring base stations and informs these results to the serving base station.</p>
            <p>A handoff starts when the power received from the base station of a neighboring cell go above the power received from the present base station.</p>
            <p>In MAHO scheme, the call to be handed off between different base stations at a lot faster speed than in first generation systems because the handoff computations are done by each mobile and by keeping the MSC out of these computations.</p>
            <p>MAHO is suitable for micro-cellular network architectures where handoffs are more frequent.</p>
            
            <div class="subsection-title">Intersystem handoff</div>
            <p>When a call is in progress, if a mobile shifts from one cellular system to another cellular system managed by a different MSC, an intersystem handoff is required.</p>
            <p>An MSC performs an intersystem handoff when a signal goes weak in a particular cell and the MSC fails to find another cell inside its system to which it can move the ongoing call, and several issues should be addressed while intersystem handoff is implemented.</p>
            <p>Example: a local call might automatically turn into a long-distance call when the caller shifts out of its home network and enters into a neighboring system.</p>
            
            <div class="subsection-title">Prioritizing Handoff</div>
            <p>Various systems have different methods for dealing with hand-off requests.</p>
            <p>Several systems manage handoff requests in the same way as they manage new call requests.</p>
            <p>In such systems, the possibility that a handoff call will not be served by a new base station is equivalent to the blocking probability of new calls.</p>
            <p>However, if a call is terminated unexpectedly while in progress is more frustrating than being blocked occasionally on a new call.</p>
            <p>Therefore, to improve the quality of service, various methods have been created to give priority to handoff call requests over new call requests while allocating channels.</p>
            
            <div class="subsection-title">Scheme 1: Guard Channel Concept</div>
            <p>One scheme for prioritizing handoffs call requests is called the guard channel concept, in which a part of the existing channels in a cell is reserved entirely for handoff call requests.</p>
            <p>The major drawback of this scheme is that it reduces the total carried traffic, as smaller number of channels is allocated to new calls.</p>
            <p>However, guard channels scheme present efficient spectrum utilization when dynamic channel allocation strategies are used.</p>
            
            <div class="subsection-title">Scheme 2: Handoff Call Queuing</div>
            <p>Queuing of handoff calls is another way to minimize the forced call terminations due to unavailability of channels in the cell. Handoff call queuing is possible as there is a fixed time interval between the time the received signal strength falls below the handoff threshold and the time the call is terminated due to unavailability of signal strength.</p>
            <p>The queue size and delay time is calculated from the traffic pattern of the service area.</p>
            <p>It should be noted that queuing of handoff calls does not promise a zero forced call terminations, because large delays will force the received signal strength to fall below the minimum level required to maintain communication and therefore, lead to forced handoff call termination.</p>
            
            <div class="subsection-title">Practical Handoff consideration</div>
            <p>There are different type of users in an area.</p>
            <ul>
                <li>High speed users need frequent handoff during a call.</li>
                <li>Low speed users may never need a handoff during a call.</li>
            </ul>
            <p>The cell with low traffic speed is called as micro-cells and large high-speed traffic called macro-cells.</p>
            <p>The MSC can become burdened if high speed users are being passed between very small cells.</p>
            <p>This burden on MSC can be solved by implementing microcell concept.</p>
            <p>The smaller cell is grouped and assumed to be under a large cell. This method called as an umbrella cell concept.</p>
            <ul>
                <li>Different antenna height</li>
                <li>Different power level</li>
            </ul>
            <p>The advantages of implementing microcell concept are:</p>
            <ul>
                <li>handoffs are minimized for high-speed users</li>
                <li>Handle the simultaneous traffic of high speed and low speed users.</li>
            </ul>
            
            <div class="subsection-title">Architecture of GSM basics</div>
            <p>GSM (Global System for Mobile communications) is a standard developed to describe protocols for second-generation (2G) digital cellular networks used by mobile devices such as mobile phones and tablets.</p>
            <p>Key components of GSM architecture:</p>
            <ul>
                <li>Mobile Station (MS): Consists of Mobile Equipment (ME) and Subscriber Identity Module (SIM)</li>
                <li>Base Station Subsystem (BSS): Includes Base Transceiver Station (BTS) and Base Station Controller (BSC)</li>
                <li>Network Switching Subsystem (NSS): Includes Mobile Switching Center (MSC), Home Location Register (HLR), Visitor Location Register (VLR), Authentication Center (AuC), and Equipment Identity Register (EIR)</li>
                <li>Operation and Support Subsystem (OSS): Manages the entire network</li>
            </ul>
            <p>GSM network architecture enables efficient call routing, mobility management, and security features.</p>
        </div>
        
        <!-- Section 6.3 -->
        <div id="section6_3" class="section">
            <h2 class="section-title">6.3 Introduction to 5G networks, software defined networking, IoT communication, cloud computing and virtualization in data communication</h2>
            
            <div class="subsection-title">5G - Fifth Generation Communication System</div>
            <p>5G network is using advanced technologies to deliver ultra fast internet and multimedia experience for customers. Existing LTE advanced networks will transform into supercharged 5G networks in future.</p>
            <p>In earlier deployments, 5G network will function in non standalone mode and standalone mode. In non standalone mode both LTE spectrum and 5G-NR spectrum will be used together. Control signaling will be connected to LTE core network in non standalone mode.</p>
            <p>There will be a dedicated 5G core network higher bandwidth 5G – NR spectrum for standalone mode.</p>
            
            <div class="subsection-title">Key features of 5G technology</div>
            <ul>
                <li>Ultra fast mobile internet up to at least 20Gbps downlink and 10Gbps uplink per mobile base station.</li>
                <li>Maximum latency of just 4ms (compared to 20ms for LTE).</li>
                <li>Total cost deduction for data.</li>
                <li>Higher security and reliable network.</li>
                <li>Supports up to 1 million devices per square kilometer, ideal for IoT (Internet of Things).</li>
                <li>Optimized for lower power consumption, enhancing battery life for connected devices.</li>
                <li>Uses technologies like small cells, beam forming to improve efficiency</li>
            </ul>
            
            <div class="subsection-title">Technologies behind 5G:</div>
            <div class="subsection-title">Millimeter Waves (mmWaves)</div>
            <p>Millimeter waves refer to radio frequency bands in the range of 24 GHz to 100 GHz. These frequencies are much higher than those used in 4G networks (typically below 6 GHz). Higher frequencies can carry more data at faster speeds, allowing for gigabit-level performance. However, they can't travel long distances and are easily blocked by buildings, trees, rain, and even human bodies.</p>
            
            <div class="subsection-title">Massive MIMO</div>
            <p>MIMO uses multiple antennas at both the transmitter (e.g., base station) and the receiver (e.g., smartphone). It increases capacity by allowing multiple users to be served simultaneously and also improves spectral efficiency, meaning more data is transferred per unit of frequency.</p>
            
            <div class="subsection-title">Beamforming</div>
            <p>Beamforming is a technique used with antenna arrays (like in Massive MIMO) to focus radio signals in a specific direction instead of broadcasting them in all directions. The system calculates the best signal path to each user and steers the beam directly toward them, like a flashlight beam instead of a bare bulb.</p>
            
            <div class="subsection-title">Software Defined Networking (SDN)</div>
            <p>Software Defined Networking (SDN) is an approach to networking that uses software-based controllers or application programming interfaces (APIs) to communicate with underlying hardware infrastructure and direct traffic on a network.</p>
            <p>Key characteristics of SDN:</p>
            <ul>
                <li>Separation of control plane and data plane</li>
                <li>Centralized network control</li>
                <li>Programmable network infrastructure</li>
                <li>Abstraction of network resources</li>
            </ul>
            <p>SDN provides benefits such as:</p>
            <ul>
                <li>Greater flexibility and agility in network management</li>
                <li>Reduced operational costs</li>
                <li>Enhanced security</li>
                <li>Improved network performance</li>
                <li>Easier network virtualization</li>
            </ul>
            
            <div class="subsection-title">IoT Communication</div>
            <p>IoT (Internet of Things) communication refers to the ways smart devices (like sensors, appliances, wearables, etc.) connect and exchange data with each other, and with centralized systems like cloud platforms or edge servers.</p>
            <p>These communications are the foundation of IoT systems, enabling real-time monitoring, automation, data analytics, and remote control.</p>
            
            <p>IoT communication involves:</p>
            <ul>
                <li>Devices (things) with sensors and actuators</li>
                <li>Communication protocols to exchange data</li>
                <li>Networks that connect the devices (wireless/wired)</li>
                <li>Platforms or servers that process, store, or act on the data</li>
            </ul>
            
            <div class="subsection-title">Types of Communications in IoT:</div>
            <div class="subsection-title">1. Human to Machine (H2M)</div>
            <p>In this human gives input to IoT device i.e. as speech /text/image etc. IoT device (Machine) like sensors and actuators then understands input, analyses it and responds back to human by means of text or Visual Display.</p>
            <p>Example: Facial recognition, Bio-metric attendance, Speech or voice recognition.</p>
            
            <div class="subsection-title">2. Machine to Machine (M2M)</div>
            <p>The process of exchanging information or messages between two or more machines or devices is known as Machine to Machine (M2M) communication. It is the communication among the physical things which do not need human intervention.</p>
            <p>Example: Smart Washing machine sends alerts to the owners' smart devices after completion of washing or drying of clothes.</p>
            
            <div class="subsection-title">3. Machine to Human (M2H)</div>
            <p>In this machine interacts with Humans. Machine triggers information (text messages/images/voice/signals) respective/ irrespective of any human presence. This type of communication is most commonly used where machines guide humans in their daily life.</p>
            <p>Example: Fire alarms, Fitness bands.</p>
            
            <div class="subsection-title">4. Machine to Cloud (M2C)</div>
            <p>This type of communication allows IoT devices to send data to cloud-based applications for storage, analysis, and further action. It's essential for scenarios where cloud analytics can provide valuable insights for decision making or where remote access to the device's data is required.</p>
            <p>Example: Smart Temperature Sensor in a Cold Storage Warehouse.</p>
            
            <div class="subsection-title">Communication Technologies used in IoT:</div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Technology</th>
                        <th>Range</th>
                        <th>Use Case</th>
                    </tr>
                    <tr>
                        <td>Bluetooth (BLE)</td>
                        <td>~10-100 meters</td>
                        <td>Wearables, smart home</td>
                    </tr>
                    <tr>
                        <td>Zigbee</td>
                        <td>~10-100 meters</td>
                        <td>Home automation, sensors</td>
                    </tr>
                    <tr>
                        <td>Wi-Fi</td>
                        <td>~100 meters</td>
                        <td>Cameras, appliances</td>
                    </tr>
                    <tr>
                        <td>NFC/RFID</td>
                        <td>Few cm to meters</td>
                        <td>Contactless payments, tracking</td>
                    </tr>
                    <tr>
                        <td>Cellular (3G/4G/5G)</td>
                        <td>Km-level</td>
                        <td>Smart cars, asset tracking</td>
                    </tr>
                    <tr>
                        <td>LoRaWAN</td>
                        <td>2-15 km</td>
                        <td>Smart agriculture, remote sensors</td>
                    </tr>
                    <tr>
                        <td>NB-IoT/LTE-M</td>
                        <td>Km-level</td>
                        <td>Smart meters, smart cities</td>
                    </tr>
                </table>
            </div>
            
            <div class="subsection-title">Features of IoT Communication:</div>
            <ul>
                <li>Low Power Consumption – Optimized for battery-operated devices.</li>
                <li>Low Bandwidth Usage – Sends small data packets efficiently.</li>
                <li>Scalability – Supports millions of connected devices.</li>
                <li>Reliability – Ensures consistent and accurate data transfer.</li>
                <li>Security – Uses encryption and authentication for safe communication.</li>
                <li>Interoperability – Works across different devices and platforms.</li>
                <li>Real-time Communication – Enables instant data exchange and response.</li>
                <li>Multiple Protocol Support – Uses protocols like MQTT (Message Queuing Telemetry Transport), CoAP (Constrained Application Protocol), and HTTP.</li>
            </ul>
            
            <div class="subsection-title">Applications of IoT Communication:</div>
            <ul>
                <li>Smart Homes: Lights, thermostats, security systems</li>
                <li>Healthcare: Remote monitoring of patients</li>
                <li>Industry (IIoT): Predictive maintenance, automation</li>
                <li>Agriculture: Soil moisture sensors, livestock tracking</li>
                <li>Transportation: Fleet management, smart traffic</li>
            </ul>
            
            <div class="subsection-title">Application of 5G in IoT</div>
            <p>5G technology brings significant enhancements to IoT applications due to its high speed, low latency, and massive device connectivity capabilities.</p>
            
            <div class="subsection-title">Central Node (5G-Waiter/Server)</div>
            <p>Acts as the central communication and processing hub. It receives, processes, and routes data between various smart IoT components using high-speed, low-latency 5G connectivity.</p>
            
            <div class="subsection-title">Connected IoT Applications (Edge Nodes)</div>
            <div class="subsection-title">1. Clever Healthcare</div>
            <p>Refers to smart healthcare systems using connected devices like remote patient monitoring, telemedicine, and AI-based diagnostics. 5G enables real-time medical data transmission.</p>
            
            <div class="subsection-title">2. Smart Conveyance System</div>
            <p>Indicates intelligent transportation systems, such as autonomous vehicles, traffic management, and vehicle-to-infrastructure (V2I) communication.</p>
            
            <div class="subsection-title">3. Smart undeveloped</div>
            <p>Indicates Smart Agriculture or Smart Rural Development, involving IoT sensors for monitoring soil, weather, and crop conditions.</p>
            
            <div class="subsection-title">4. Smart Engineering</div>
            <p>Refers to IoT in industrial engineering, such as predictive maintenance, smart manufacturing (Industry 4.0), and automation.</p>
            
            <div class="subsection-title">5. Smart Network</div>
            <p>Represents the infrastructure layer, including 5G base stations, routers, and network slices for different services. Ensures efficient data flow.</p>
            
            <div class="subsection-title">6. Smart Home-grown</div>
            <p>Covers IoT-based automation in homes or farms — for example, smart appliances, lighting, irrigation, and energy management.</p>
            
            <div class="subsection-title">7. Users retrieving data distantly</div>
            <p>Refers to remote access of IoT data by users — such as through mobile apps, dashboards, or cloud services. 5G makes it possible to access real-time data from anywhere.</p>
            
            <div class="subsection-title">Cloud Computing and Virtualization in Data Communication</div>
            <p>Cloud computing is the delivery of computing services—including servers, storage, databases, networking, software, analytics, and intelligence—over the Internet ("the cloud") to offer faster innovation, flexible resources, and economies of scale.</p>
            
            <p>Virtualization is the creation of a virtual (rather than actual) version of something, such as an operating system, a server, a storage device or network resources.</p>
            
            <p>Key benefits of cloud computing and virtualization in data communication:</p>
            <ul>
                <li>Scalability: Easily scale resources up or down based on demand</li>
                <li>Cost efficiency: Pay only for what you use, reducing capital expenses</li>
                <li>Disaster recovery: Built-in backup and recovery solutions</li>
                <li>Global accessibility: Access data and applications from anywhere</li>
                <li>Enhanced collaboration: Share resources and work together more effectively</li>
                <li>Improved security: Advanced security features and compliance certifications</li>
                <li>Environmental sustainability: Reduced energy consumption and carbon footprint</li>
            </ul>
            
            <p>In data communication, cloud computing and virtualization enable:</p>
            <ul>
                <li>Network Function Virtualization (NFV): Virtualizing network functions traditionally performed by dedicated hardware</li>
                <li>Software-Defined Networking (SDN): Centralized control of network resources</li>
                <li>Edge computing: Processing data closer to where it's generated</li>
                <li>Cloud-based communication services: VoIP, video conferencing, messaging services</li>
                <li>Virtualized infrastructure for 5G networks</li>
            </ul>
        </div>
    </div>

</div>
