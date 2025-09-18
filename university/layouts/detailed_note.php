<?php
// Include the viewer/template which contains the header, navigation, styles, and footer scripts.
include 'detailed_note_viewer.php';
?>

<!-- CHAPTER 1 -->
<div id="chapter_1">
    <h1>1. Introduction to Instrumentation</h1>
    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#1.1">1.1 Analog and Digital Instruments</a></li>
            <li><a href="#1.2">1.2 Microprocessor-Based Systems</a></li>
        </ul>
    </div>
    <section id="1.1">
        <h2>1.1 Analog and Digital Instruments</h2>
        <p>Analog instruments use a continuous signal to represent measurements, often displayed with a needle on a dial. Digital instruments convert the measured value into discrete numerical values displayed on an LCD or LED screen.</p>
        <div class="definition">
            <h3>Key Difference</h3>
            <p>While analog instruments are susceptible to parallax errors, digital instruments offer higher precision and easier readability.</p>
        </div>
    </section>
    <section id="1.2">
        <h2>1.2 Microprocessor-Based Systems</h2>
        <p>Microprocessors have revolutionized instrumentation by enabling complex calculations, automated calibration, and data logging. They form the core of modern smart instruments.</p>
        <p>Benefits include improved accuracy, repeatability, and the ability to interface with computers for data analysis.</p>
    </section>
</div>

<!-- CHAPTER 2 -->
<div id="chapter_2">
    <h1>2. Theory of Measurement</h1>
    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#2.1">2.1 Static Performance Parameters</a></li>
            <li><a href="#2.2">2.2 Dynamic Performance Parameters</a></li>
        </ul>
    </div>
    <section id="2.1">
        <h2>2.1 Static Performance Parameters</h2>
        <p>Static characteristics describe an instrument's performance when the measured variable is constant. Key parameters include:</p>
        <ul>
            <li><strong>Accuracy:</strong> Closeness to the true value.</li>
            <li><strong>Precision:</strong> Degree of repeatability.</li>
            <li><strong>Sensitivity:</strong> Ratio of output change to input change.</li>
            <li><strong>Resolution:</strong> Smallest detectable change.</li>
            <li><strong>Linearity:</strong> Deviation from a straight-line response.</li>
        </ul>
    </section>
    <section id="2.2">
        <h2>2.2 Dynamic Performance Parameters</h2>
        <p>Dynamic characteristics describe how an instrument responds to changes in the measured variable over time.</p>
        <ul>
            <li><strong>Response Time:</strong> Time to reach a specified percentage of the final value.</li>
            <li><strong>Frequency Response:</strong> Output amplitude and phase as a function of input frequency.</li>
            <li><strong>Bandwidth:</strong> Range of frequencies the instrument can accurately measure.</li>
        </ul>
    </section>
</div>

<!-- CHAPTER 3 -->
<div id="chapter_3">
    <h1>3. Transducers</h1>
    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#3.1">3.1 Definition and Classification</a></li>
            <li><a href="#3.2">3.2 Working Principles</a></li>
        </ul>
    </div>
    <section id="3.1">
        <h2>3.1 Definition and Classification</h2>
        <p>A transducer is a device that converts one form of energy into another. In instrumentation, it typically converts a physical quantity (like temperature or pressure) into an electrical signal.</p>
        <p>Transducers can be classified as:</p>
        <ul>
            <li><strong>Active vs. Passive:</strong> Active transducers generate their own electrical output (e.g., thermocouple), while passive transducers require an external power source (e.g., strain gauge).</li>
            <li><strong>Analog vs. Digital:</strong> Based on the type of output signal.</li>
        </ul>
    </section>
    <section id="3.2">
        <h2>3.2 Working Principles</h2>
        <p>Different transducers work on different physical principles:</p>
        <ul>
            <li><strong>Resistive:</strong> Change in resistance (e.g., potentiometer, RTD).</li>
            <li><strong>Capacitive:</strong> Change in capacitance (e.g., proximity sensor).</li>
            <li><strong>Piezoelectric:</strong> Generation of charge under mechanical stress (e.g., accelerometer).</li>
        </ul>
    </section>
</div>

<!-- The closing tags for the content container and body are in the viewer file -->