<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Communication Question Bank</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        .navbar-toggle {
            display: none;
            background-color: #333;
            color: white;
            padding: 15px;
            cursor: pointer;
            text-align: center;
        }

        .sidebar {
            background-color: #f4f4f4;
            padding: 20px;
            width: 250px;
            box-sizing: border-box;
            position: fixed;
            height: 100%;
            overflow-y: auto;
            transition: transform 0.3s ease;
        }

        .sidebar h2 {
            margin-top: 0;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            margin: 10px 0;
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            display: block;
            padding: 8px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            box-sizing: border-box;
        }

        .chapter-section {
            margin-bottom: 40px;
        }

        .chapter-section h2 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .question {
            margin: 15px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 4px solid #28a745;
            border-radius: 4px;
        }

        .question .year {
            font-weight: bold;
            color: #d9534f;
            float: right;
        }

        @media (max-width: 768px) {
            .navbar-toggle {
                display: block;
            }

            .sidebar {
                position: fixed;
                top: 0;
                left: -250px;
                z-index: 1000;
                height: 100%;
                transform: translateX(0);
            }

            .sidebar.active {
                transform: translateX(250px);
            }

            .content {
                margin-left: 0;
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="navbar-toggle" onclick="toggleSidebar()">☰ Chapters</div>

    <div class="sidebar" id="sidebar">
        <h2>Chapters</h2>
        <ul>
            <li><a href="#chapter1">1. Introduction</a></li>
            <li><a href="#chapter2">2. Data Communication Fundamentals</a></li>
            <li><a href="#chapter3">3. Transmission Media and Data compression</a></li>
            <li><a href="#chapter4">4. Signal Encoding Technique</a></li>
            <li><a href="#chapter5">5. Multiplexing and Switching</a></li>
            <li><a href="#chapter6">6. Cellular Wireless and Latest Trends</a></li>
        </ul>
    </div>

    <div class="content">

        <div class="chapter-section" id="chapter1">
            <h2>1. Introduction</h2>
            <div class="question">Prepare a generic block diagram of a digital communication system representing communications between an air traffic controller and an in flight pilot in a cockpit. <span class="year">2081 Bhadra</span></div>
            <div class="question">Explain the digital data communication system working in full duplex mode using a block diagram. Define the transmission performance parameters in a data communication system. <span class="year">2081 Baishakh</span></div>
            <div class="question">Define transmission performance parameters in data communication system. Explain digital communication system with appropriate generic block diagram. <span class="year">2080 Bhadra</span></div>
            <div class="question">Define data and signal. Elaborate the advantages of digital communication system as compared to analog communications system. <span class="year">2080 Baishakh</span></div>
            <div class="question">Draw a generic block diagram of a digital communication system used in mobile telephony and explain each block. Compare analog and digital communication system with examples. <span class="year">2076 Chaitra</span></div>
            <div class="question">Draw a generic block diagram of digital data communication system for full duplex mode and briefly explain the function of each block. <span class="year">2074 Chaitra</span></div>
            <div class="question">Draw generic block diagram of digital communication duplex system and explain each block. Write down the advantages and disadvantages of digital communication over analog communication system. <span class="year">2073 Shrawan</span></div>
            <div class="question">Define noise. Briefly discuss the types of noise. Why is digital transmission preferred over analog transmission? <span class="year">2072 Chaitra</span></div>
            <div class="question">Define transmission Impairment. Compare analog communication system with digital communication system with appropriate block diagram for half-duplex mode. <span class="year">2074 Ashwin</span></div>
        </div>

        <div class="chapter-section" id="chapter2">
            <h2>2. Data Communication Fundamentals</h2>
            <div class="question">Explain the basic causes of transmission impairments in communication system. <span class="year">2081 Bhadra</span></div>
            <div class="question">Define a linear system and a time invariant system. Evaluate the odd and even component of a signal defined as: x(t)= e^(-2t)u(t). <span class="year">2081 Bhadra</span></div>
            <div class="question">Considering the combinations of at least seven mathematical operations in an equation, prepare a signal flow diagram of any system. <span class="year">2081 Bhadra</span></div>
            <div class="question">Compare and contrast Fourier series and Fourier transform. Mention the conditions and properties of Fourier transformation. <span class="year">2081 Bhadra</span></div>
            <div class="question">Define energy and power signal with examples. Check whether the following system is linear, causal and time invariant or not. y(t): logx(t) <span class="year">2081 Baishakh</span></div>
            <div class="question">State the properties of Fourier Transform. Convolve the following signals graphically. <span class="year">2081 Baishakh</span></div>
            <div class="question">Define a causal system and a stable system with example. Evaluate power and energy of a signal given as x(t)= e^(-2t)u(t). Justify whether it is energy signal or power signal. <span class="year">2080 Bhadra</span></div>
            <div class="question">Define LTI system. Convolve the following signals graphically. <span class="year">2080 Bhadra</span></div>
            <div class="question">Determine whether or not the following CT signal is periodic. If the signal is periodic, determine its fundamental period, x(t)=3cos(4t+π/3). <span class="year">2080 Baishakh</span></div>
            <div class="question">Test the linearity of the systems. y(t)= x²(t) and y(t)= 3x(t) +5 <span class="year">2080 Baishakh</span></div>
            <div class="question">Test the systems static or dynamic: y(t)= 2x(t) and y(t)= 2x(t)-3x(t-3) <span class="year">2080 Baishakh</span></div>
            <div class="question">Find the output response of an LTI system when input x(t)= e^(-t) u(t) and impulse response h(t)= e^(-2t) u(t). <span class="year">2080 Baishakh</span></div>
            <div class="question">Find magnitude and phase spectrum of x(t)= 4+2cos3t + 4sin11t. <span class="year">2080 Baishakh</span></div>
            <div class="question">Discuss any four properties of Fourier Transform. <span class="year">2080 Baishakh</span></div>
            <div class="question">Differentiate between energy and power signals with examples. Determine if the following system is stable or not: Y(t)=∫x(τ)dτ <span class="year">2078 Bhadra</span></div>
            <div class="question">List and describe all data communication parameters that describe the performance of the system. <span class="year">2078 Bhadra</span></div>
            <div class="question">Explain how we plot line spectrums of a continuous time signal and illustrate an example. <span class="year">2078 Bhadra</span></div>
            <div class="question">Differentiate data and signals with two examples of each. <span class="year">2078 Kartik</span></div>
            <div class="question">Explain the procedure of converting an analog signal to digital. Also, briefly explain each steps involved. <span class="year">2078 Kartik</span></div>
            <div class="question">Define periodic and non-periodic signals with examples. <span class="year">2078 Kartik</span></div>
            <div class="question">Test the stability of the system h(t)= e^(at).u(t) <span class="year">2078 Kartik</span></div>
            <div class="question">Test the given function y(t)= t.x(t) for causality, non causality and anti causality. <span class="year">2078 Kartik</span></div>
            <div class="question">How Nyquist theorem applied for a noiseless channel? Calculate number of discrete signal content in the channel if a channel has a spectrum of 3 to 4 MHz with signal to noise ratio of 24 dB. <span class="year">2078 Kartik</span></div>
            <div class="question">Explain the properties of causal, non-causal and anti-causal systems with example. <span class="year">2076 Chaitra</span></div>
            <div class="question">Explain why we need Fourier Transform. Plot the line spectrums of X(t)= 12+ 5sin(140πt + 30°)- 9cos(80πt- 70°). <span class="year">2076 Chaitra</span></div>
            <div class="question">What are properties Fourier transform? Plot the magnitude and phase spectra of x(t)= 5+ sin(12t+ 20°)- cos(16t- 60°)+ cos(20t+ 40°). <span class="year">2075 Ashwin</span></div>
            <div class="question">Distinguish between power and energy signals with examples. <span class="year">2075 Chaitra</span></div>
            <div class="question">Determine whether the following signals are periodic or not. a) X(t)= sin15πt b) x(t)= sin(2πt) <span class="year">2075 Chaitra</span></div>
            <div class="question">What are Recursive and Nonrecursive system? Test the stability of the CTI system whose impulse response is given as: h(t)= e^(-3t)u(t) <span class="year">2075 Chaitra</span></div>
            <div class="question">State and explain Shannon-Hartley channel capacity theorem with example. Briefly discuss about the measures that are used to characterize the performance of a channel. <span class="year">2075 Ashwin</span></div>
            <div class="question">Derive an expression to find even and odd part of signal x(t). Find even and odd part of a signal x(t)= 0.5(t+1) for -1< t< 1. <span class="year">2074 Chaitra</span></div>
            <div class="question">State the properties of continuous time Fourier series. <span class="year">2074 Chaitra</span></div>
            <div class="question">Define LTI system. Determine the range of values of 'a' and 'b' for the stability of LTI system with impulse response. h(t)= e^(at) u(t)+ e^(-bt)u(t) <span class="year">2074 Chaitra</span></div>
            <div class="question">Define LTI system. Compute convolution between two signals x(t)= e^(-at).u(t)(a> 0) and h(t)= e^(at).u(-t)(a> 0) and plot the resulting signal. <span class="year">2073 Shrawan</span></div>
            <div class="question">Check linearity, causality, stability and time invariance characteristics of system y(t)=2x(t+1) <span class="year">2073 Shrawan</span></div>
            <div class="question">Define stable and unstable systems. Test the stability of the LTI systems whose impulse responses are given as (i) h(t)= e^(at)u(t) (ii) h(t)= e^(-at)u(t) <span class="year">2072 Chaitra</span></div>
            <div class="question">Distinguish between energy and power signal with an example. Justify whether a signal x(t)= e^(-a|t|).u(t)(a> 0) is energy or power signal. <span class="year">2072 Chaitra</span></div>
            <div class="question">State and explain Shannon-Hartley channel capacity theorem. Briefly discuss about the measures that are used to characterize the performance of a channel. <span class="year">2072 Chaitra</span></div>
            <div class="question">Define energy and power signal. Check the signal x(t)= u(t) and x(t)= δ(t) is Energy or Power type. <span class="year">2072 Chaitra</span></div>
            <div class="question">Define Linear, Stable, Time Invariant and Causal system with suitable examples. <span class="year">2072 Chaitra</span></div>
            <div class="question">Find the Fourier series representation of the half-wave rectified Sine wave. <span class="year">2072 Chaitra</span></div>
            <div class="question">Find the Fourier transform of the signal x(t)= e^(-a|t|), where (0< a< ∞) is real-valued and |t| denotes the absolute value of (t). Define the terms linear time-invariant(LTI) systems and impulse response. <span class="year">2072 Chaitra</span></div>
            <div class="question">Compare the transmission characteristics and performance (frequency range, bandwidth, security, flexibility, interference, connectivity) of Optical fiber cable and Satellite transmission. <span class="year">2072 Chaitra</span></div>
            <div class="question">Given a channel with an intended capacity of 40 Mbps. The bandwidth of the channel is 6 MHz. What signal-to-noise ratio is required in order to achieve this capacity? Also find number of bits/sample if channel becomes noiseless. <span class="year">2072 Chaitra</span></div>
            <div class="question">State Nyquist's and Shannon's channel capacity formula. Find the Capacity of a channel for a signal with a bandwidth of 3.1 KHz and Signal to Noise ratio of 0 dB and comment on it. <span class="year">2074 Ashwin</span></div>
        </div>

        <div class="chapter-section" id="chapter3">
            <h2>3. Transmission Media and Data compression</h2>
            <div class="question">Explain the different modes of data transmission in optical fiber. List out and mention the protocols of different categories of twisted pair cables. <span class="year">2081 Bhadra</span></div>
            <div class="question">Compress "Ghurnne Mech Mathi Andho Manche" using Huffman coding to determine efficiency redundancy and compare it with entropy. <span class="year">2081 Baishakh</span></div>
            <div class="question">Encode "SaReGaMaPaDhaNiSa" using Huffman Encoding and calculate its transmission efficiency. What would be the code sequence if the recipient has received the message like "SaReSaR.ePaDhaNiSa"? <span class="year">2081 Bhadra</span></div>
            <div class="question">Encode "Jasta lai tastai dhido lai nistai" using farsighted Huffman encoder. Also demonstrate how it is decoded. <span class="year">2078 Bhadra</span></div>
            <div class="question">Encode "Phool ko aanl,;hama phoolai sansala" using Huffman encoder and find the transmission efficiency. <span class="year">2076 Chaitra</span></div>
            <div class="question">Design a Binary Shannon-Fano code with a six symbol source with probability assignment as p(s1)=0.04, P(s2)=0.1, P(s3)=0.1, P(s4)=0.4, P(s5)=0.06, P(s6)=0.3. Test its transmission efficiency. <span class="year">2075 Ashwin</span></div>
            <div class="question">The entropy in information theory. Find the efficient code word and efficiency using Huffman algorithm using probabilities p(x1)=0.6, p(x2)=0.2, p(x3)=0.1, p(x4)=0.05, p(x5)=0.05. <span class="year">2075 Chaitra</span></div>
            <div class="question">The source of information symbols {A0, A1, A2, A3 and A4} have corresponding probabilities {0.4, 0.3, 0.15, 0.1 and 0.05}. Encode the source symbols using most efficient coding scheme and calculate the corresponding efficiency. <span class="year">2075 Ashwin</span></div>
            <div class="question">Write down the Huffman Algorithm clearly. Find an efficient code word and calculate efficiency that can be assign to the symbols using Huffman Algorithm using probabilities p(x1)=0.5, p(x2)=0.25, p(x3)=0.125, p(x4)=0.125. <span class="year">2074 Chaitra</span></div>
            <div class="question">Explain the general working principle of Binary Huffman Coding Algorithm. Design a Binary Huffman code with a six symbol source with probability assignment as: P(s1)=0.04, P(s2)=0.1, P(s3)=0.1, P(s4)=0.4, P(s5)=0.06 and P(s6)=0.3. <span class="year">2073 Shrawan</span></div>
            <div class="question">A message source generates 8 symbols with the following probabilities: P(X1)=1/2, P(X2)=1/4, P(X3)=1/8, P(X4)=1/16, P(X5)=1/32, P(X6)=1/64, P(X7)=1/128 and P(X8)=1/128. Encode the message using Huffman code. <span class="year">2072 Chaitra</span></div>
            <div class="question">Demonstrate how checksum is used to detect errors while sending a data word of 12,15, 15, 14, 5,2. <span class="year">2078 Bhadra</span></div>
            <div class="question">Demonstrate how CRC-5 works to detect 3 burst errors. <span class="year">2075 Ashwin</span></div>
            <div class="question">What are Hamming codes? Write the properties of Hamming codes. Visualize a 3-bit code words as code vector. <span class="year">2072 Chaitra</span></div>
            <div class="question">Define Dataword and Codeword with suitable example. List the error detection and correction coding techniques with their application case. <span class="year">2072 Chaitra</span></div>
            <div class="question">Discuss the concept of redundancy in error detection and correction. Define Hamming distance? Differentiate between linear block codes and cyclic codes. <span class="year">2072 Chaitra</span></div>
            <div class="question">Compare coaxial cable with optical fibre. Evaluate the maximum capacity of a channel through which a signal with power of 10 dBW is transmitted. (Assume that the noise power spectral density is given as 5 mW/Hz). <span class="year">2080 Baishakh</span></div>
            <div class="question">What are the advantages of optical fibers over coaxial cable and twisted pair cable? <span class="year">2074 Ashwin</span></div>
        </div>

        <div class="chapter-section" id="chapter4">
            <h2>4. Signal Encoding Technique</h2>
            <div class="question">Encode the given bit sequence 11000000000101 using any suitable two of polar and two of bipolar encoders. <span class="year">2081 Bhadra</span></div>
            <div class="question">Explain the importance of Scrambling in the digital data encoding process. Encode the binary pattern 101000011101 using polar RZ, NRZ-I, AMI and Manchester line coding techniques. <span class="year">2081 Baishakh</span></div>
            <div class="question">Encode 111000000000000011 using B8ZS and HDB3 encoders. <span class="year">2078 Bhadra</span></div>
            <div class="question">List different types of digital-to-analog line encoding techniques. Give an example of QAM-32 in its constellation diagram. <span class="year">2075 Ashwin</span></div>
            <div class="question">Encode the bit stream 10010110001 using the following encoding schemes: (i) Polar NRZ-L (ii) Polar NRZ-I (iii) Differential Manchester <span class="year">2075 Ashwin</span></div>
            <div class="question">Encode the bit stream 1010011001 using NRZ-L, NRZ-I, RZ, Manchester, Bipolar AMI encoding technique. <span class="year">2074 Ashwin</span></div>
            <div class="question">Encode the Bit Stream 10110001110 using the following scheme. a) RZ b) NRZ-I c) NRZ-L d) AMI e) Manchester <span class="year">2072 Chaitra</span></div>
            <div class="question">Draw AMI and Manchester encoding for the sequence [0 1 1 0 1 0 0 0 1]. <span class="year">2072 Chaitra</span></div>
            <div class="question">List digital-to-digital line encoding techniques and explain in detail Bipolar 8-zero substitution and High-Density 3-zero substitution techniques. <span class="year">2075 Chaitra</span></div>
            <div class="question">Explain 16-QAM with constellation diagram. <span class="year">2081 Baishakh</span></div>
            <div class="question">Explain briefly about 8-QAM with constellation diagram. <span class="year">2080 Bhadra</span></div>
            <div class="question">Explain different types of pulse modulation techniques with necessary diagrams. <span class="year">2080 Bhadra</span></div>
            <div class="question">Consider AM signal as m(t)= 5[1+2cos(2π×1000t)] cos(2π×10^6t). Determine modulation index, total power delivered. <span class="year">2080 Baishakh</span></div>
            <div class="question">Illustrate an example of a 4-bit PCM with AMI encodes. <span class="year">2076 Chaitra</span></div>
            <div class="question">Define PCM technique used to convert analog signal into digital data. In a PCM system, a bandlimited signal with maximum frequency 4 kHz is sampled at the rate of Nyquist frequency. It is quantized into 256 levels and encoded. Calculate: (i) Minimum data rate available at the output of the encoder. (ii) Bandwidth of the channel required to transmit the data through a channel of 15 dB SNR. <span class="year">2080 Baishakh</span></div>
            <div class="question">What are the basic factors to be considered while line coding? Encode pattern 100000000100001 using B8ZS and HDB3 encoding. <span class="year">2080 Baishakh</span></div>
            <div class="question">What is modulation? Illustrate an example of a 4-bit PCM with AMI encodes. <span class="year">2076 Chaitra</span></div>
            <div class="question">An audio frequency signal 10 sin1000πt is used for a single tone amplitude modulation with a carrier of 50 sin2π × 10^5t. Calculate: (i) Modulation index (ii) Bandwidth requirement (iii) Total power delivered if load= 60Ω <span class="year">2075 Chaitra</span></div>
            <div class="question">A single tone FM is represented by the voltage equation as v(t)= 12cos(5×10^8t+5 sin1250t). Determine following: a) Carrier frequency b) Modulating frequency c) Modulation index d) Maximum frequency deviation <span class="year">2074 Chaitra</span></div>
            <div class="question">What is Frequency modulation(FM)? Explain with suitable equations and waveforms. <span class="year">2073 Shrawan</span></div>
            <div class="question">Explain the working of Pulse Code Modulation(PCM). <span class="year">2072 Chaitra</span></div>
        </div>

        <div class="chapter-section" id="chapter5">
            <h2>5. Multiplexing and Switching</h2>
            <div class="question">Write short notes on: CDMA, Packet switching, CRC-4, 16-QAM, E1 Hierarchy <span class="year">2081 Bhadra</span></div>
            <div class="question">Write down the applications of multiplexing. Describe FHSS and DSSS with necessary diagrams. <span class="year">2081 Baishakh</span></div>
            <div class="question">What is multiplexing? Why statistical TDM is preferred than synchronous TDM? <span class="year">2080 Bhadra</span></div>
            <div class="question">Explain the major bandwidth utilization techniques used in data communication. Explain Frequency Hopped Multiple Access(FHMA) technique using its transmitter and receiver blocks. <span class="year">2080 Baishakh</span></div>
            <div class="question">Differentiate between circuit switching and Packet switching used in computer networks with an example. <span class="year">2080 Baishakh</span></div>
            <div class="question">Explain error detection and correction mechanism with trellis diagram. Differentiate convolutional code and block code. <span class="year">2080 Baishakh</span></div>
            <div class="question">Explain the working principle of FHSS technique. <span class="year">2078 Bhadra</span></div>
            <div class="question">Explain how CDMA works with example. <span class="year">2078 Bhadra</span></div>
            <div class="question">What is multiplexing? Compare synchronous and statistical TDM. Describe Frequency hopping spread spectrum and direct sequence spread spectrum with its block diagram. <span class="year">2076 Chaitra</span></div>
            <div class="question">Define Frequency division Multiplexing. Explain the FDM Multiplexing and demultiplexing process with neat diagrams. <span class="year">2075 Ashwin</span></div>
            <div class="question">Explain, how spread spectrum techniques like FHSS and DSSS work? <span class="year">2075 Ashwin</span></div>
            <div class="question">Explain the operation of packet switching system. <span class="year">2075 Ashwin</span></div>
            <div class="question">What is multiplexing and why we need it? Explain FDM hierarchy in telephone system. <span class="year">2074 Chaitra</span></div>
            <div class="question">Define multiplexing with example. Compare synchronous and asynchronous TDM. <span class="year">2074 Ashwin</span></div>
            <div class="question">What is Data Switching? Clarify the differences between datagram switching and virtual packet switching. <span class="year">2073 Shrawan</span></div>
            <div class="question">What do you mean by multiplexing? Explain TDM. Explain about working mechanism of FDM and TDM. <span class="year">2072 Chaitra</span></div>
            <div class="question">Compare the merits and demerits of synchronous TDM and statistical TDM method. <span class="year">2073 Shrawan</span></div>
            <div class="question">Explain the rate 1/2, 4-state convolutional code correct errors of two bits with the help of its trellis diagram. <span class="year">2074 Chaitra</span></div>
            <div class="question">Prepare Code Tree, State Space and Trellis diagrams of 1/2 rate convolutional channel coding for a message bit of 1101; and demonstrate how Viterbi Decoding corrects a single bit error. <span class="year">2081 Bhadra</span></div>
            <div class="question">Using a suitable example, explain state, tree and trellis diagrams for 1/2 code rate and 4 states. <span class="year">2080 Bhadra</span></div>
            <div class="question">What are linear block codes? Design a code word of a C(8, 4) block code with any suitable generation matrix. <span class="year">2078 Bhadra</span></div>
            <div class="question">Construct a(7, 4) Hamming code using a 4x4 generation matrix for any arbitrary message. <span class="year">2076 Chaitra</span></div>
            <div class="question">Design a suitable generation matrix for a convolution code using C(3,1,3) architecture and encode input data stream of(00110). <span class="year">2075 Ashwin</span></div>
            <div class="question">Explain why channel coding is required in data communication. Generate a convolution code for a input bit streams of(11101) using a C(3,1,3) architecture. <span class="year">2075 Chaitra</span></div>
            <div class="question">Where convolution codes are used? Describe a convolution codes with 1/2 rate. <span class="year">2073 Shrawan</span></div>
            <div class="question">What are block codes? The generator matrix for a(6,3) block code is shown below. Obtain all code words. <span class="year">2072 Chaitra</span></div>
            <div class="question">Define Hamming distance and Minimum hamming distance with an example. What are the error detection and error correction capabilities of block codes? Explain. <span class="year">2080 Bhadra</span></div>
            <div class="question">Generate a CRC-3 transmission code and analyze its error detection performance with example. <span class="year">2074 Ashwin</span></div>
            <div class="question">Explain CRC-4 generator and decoder with example for both no-error and with-error cases. <span class="year">2081 Baishakh</span></div>
            <div class="question">Demonstrate how CRC-4 works to trace two burst errors. <span class="year">2075 Chaitra</span></div>
            <div class="question">What is CRC? Explain 3 bit CRC generator and decoder with example of no error case. <span class="year">2074 Chaitra</span></div>
            <div class="question">Explain how source coding is different from channel coding? Under what conditions does a linear code become a cyclic code? Explain with the help of an example. Explain the concept of convolutional code with the help of a state-transition diagram. <span class="year">2078 Kartik</span></div>
            <div class="question">Write down the Huffman Algorithm clearly and find an efficient code word and efficiency that can be assign to the symbols using Huffman Algorithm for "Kun Mancir Ma Janchhau Yattd". <span class="year">2078 Kartik</span></div>
            <div class="question">How is spread spectrum utilized in CDMA? What are the advantages and disadvantages of CDMA? <span class="year">2072 Chaitra</span></div>
            <div class="question">Explain the "near-far problem" in CDMA. How can it be solved? <span class="year">2078 Kartik</span></div>
        </div>

        <div class="chapter-section" id="chapter6">
            <h2>6. Cellular Wireless and Latest Trends</h2>
            <div class="question">Write short notes on: STP versus UTP, Frame relay, 16-Quadrature amplitude modulation, Multi mode optical fiber <span class="year">2076 Chaitra</span></div>
            <div class="question">Write short notes on: Analog versus digital mux hierarchy, DSSS versus FHSS, Optical fiber versus STP <span class="year">2075 Ashwin</span></div>
            <div class="question">Write short notes on: Means of Band width utilization, Data communication impairments, B8ZS <span class="year">2074 Chaitra</span></div>
            <div class="question">Write short notes on: HD3S coding, Packet switching, Designing a codeword of a C(6,3) block code with any suitable generation matrix <span class="year">2074 Ashwin</span></div>
            <div class="question">Describe with short notes: STP versus UTP, Frame relay, 16-Quadrature amplitude modulation, Multi mode optical fiber <span class="year">2076 Chaitra</span></div>
            <div class="question">Write short notes on: Datagram packet switching vs Virtual circuit packet switching, E1 and T1 Hierarchies, Modes of operation of optical fiber <span class="year">2080 Bhadra</span></div>
            <div class="question">Write short notes on: Double-sideband AM, Hamming codes, Packet switching versus message switching, X.25 protocol <span class="year">2078 Bhadra</span></div>
            <div class="question">Write short notes on: Antenna and its type, TEM, Waveguides <span class="year">2067 Mangsir</span></div>
            <div class="question">What is a distortionless transmission line? Why are telephone lines required to be distortionless? <span class="year">2067 Shrawan</span></div>
            <div class="question">A radar dish antenna is needed to be covered with a transparent plastic (εr= 2.25, μr=1) to protect it from weather without any reflection of the signal back to the antenna. What should be the minimum thickness of the plastic cover if the operating frequency of antenna is 10 GHz? <span class="year">2067 Shrawan</span></div>
            <div class="question">Why does a hollow rectangular waveguide not support TEM mode? A rectangular air-filled waveguide has a cross-section of 45x90 mm. Find the cut-off frequencies of the first four propagating modes. <span class="year">2072 Chaitra</span></div>
            <div class="question">Explain in brief the modes supported by rectangular waveguides. Consider a rectangular waveguide with εr=2.1, μ= μ0 with dimensions a= 1.07cm, b= 0.43cm. Find the cut off frequency for TM11 mode and the dominant mode. <span class="year">2068 Chaitra</span></div>
            <div class="question">Explain the modes supported by Rectangular waveguide. Define cutoff frequency and dominant mode for rectangular waveguide. <span class="year">2069 Chaitra</span></div>
            <div class="question">Differentiate between transmission line and waveguide. A rectangular waveguide having cross-section of 2 cmx 1 cm is filled with a lossless medium characterized by ε= 4ε0 and μr= 1. Calculate the cut-off frequency of the dominant mode. <span class="year">2074 Ashwin</span></div>
            <div class="question">Explain the different modes of propagation supported by waveguides. A rectangular waveguide has a cross-section of 2.5 cm x 1.2 cm. Determine if the signal of 5 GHz propagates in the dominant mode. <span class="year">2080 Baishakh</span></div>
            <div class="question">What are the advantages of waveguides over transmission line? Consider a rectangular waveguide with μr=4, μ= μ0 with dimensions a=2.08 cm, b= 0.54 cm. Find the cutoff frequency for TE11 mode and the dominant mode. <span class="year">2079 Bhadra</span></div>
            <div class="question">Write short notes about antenna and its parameters. <span class="year">2081 Baishakh</span></div>
            <div class="question">Write short notes about antenna and its types. <span class="year">2080 Bhadra</span></div>
            <div class="question">What are the parameters of antenna? List out the types of Antenna. <span class="year">2081 Baishakh</span></div>
            <div class="question">Write short notes on antenna and its parameters. <span class="year">2079 Bhadra</span></div>
            <div class="question">Write short notes about antenna and its parameters. <span class="year">2078 Bhadra</span></div>
            <div class="question">Write short notes on: Antenna properties <span class="year">2075 Ashwin</span></div>
            <div class="question">Write short notes on: Antenna and its types <span class="year">2075 Chaitra</span></div>
            <div class="question">Write short notes on antenna and its properties. <span class="year">2074 Ashwin</span></div>
            <div class="question">Write short notes on antenna and its types. <span class="year">2072 Chaitra</span></div>
            <div class="question">Write short notes on: a) Antenna types and properties b) Quarter wave transformer <span class="year">2069 Chaitra</span></div>
            <div class="question">Define antenna and list different types of antenna. <span class="year">2068 Chaitra</span></div>
            <div class="question">Explain the term skin depth. Using Poynting Vector deduce the time average power density for a perfect dielectric. <span class="year">2080 Bhadra</span></div>
            <div class="question">Determine skin depth, propagation constant and velocity of wave at 1 MHz in good conductor with conductivity of 1.9x 10⁷ mho per meter. <span class="year">2080 Baishakh</span></div>
            <div class="question">Write short notes on: (a) Loss tangent (b) Skin depth and (c) Displacement current density. <span class="year">2068 Chaitra</span></div>
            <div class="question">Explain the term skin depth. Using pointing vector, deduce the time average power density for a dissipative medium. <span class="year">2067 Mangsir</span></div>
        </div>

    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
        }

        // Close sidebar if clicked outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggleButton = document.querySelector('.navbar-toggle');
            const isClickInsideSidebar = sidebar.contains(event.target);
            const isClickOnToggleButton = toggleButton.contains(event.target);

            if (window.innerWidth <= 768 && !isClickInsideSidebar && !isClickOnToggleButton && sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });
    </script>

</body>
</html>