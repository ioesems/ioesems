<?php
// Include the viewer/template which contains the header, navigation, styles, and footer scripts.
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/detailed_note_viewer.php';
?>




<!-- <=============chapter 1 ===================> -->



<div id="chapter_1">
    <h1>1. Introduction (2 hours)</h1>

    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#1.1">1.1 Analog and digital instrument: Definition, block diagram; characteristics</a></li>
            <li><a href="#1.2">1.2 Microprocessor-based systems: open vs closed loop, benefits, features and
                    applications in instrumentation design</a></li>
            <li><a href="#1.3">1.3 Microcomputer on instrumentation design</a></li>
        </ul>
    </div>

    <section id="1.1">
        <h2>1.1 Analog and digital instrument: Definition, block diagram; characteristics</h2>

        <div class="definition">
            <h3>Analog Instrument Definition</h3>
            <p>The instrument whose output is the continuous function of time, and they have a constant relation to the
                input. The physical quantities like voltage, current, power and energy are measured through the analogue
                instruments. Most of the analogue instruments use pointer or dial for indicating the magnitude of the
                measured quantity.</p>
        </div>

        <h3>Classification of Analog Instruments</h3>
        <h4>A) Type of current that can be measured</h4>
        <ul>
            <li>Direct Current Analog Instruments</li>
            <li>Alternating Current Analog instrument</li>
            <li>Both Direct and Alternating current Instruments</li>
        </ul>

        <h4>B) Output of measured quantity</h4>
        <ul>
            <li>Indicating</li>
            <li>Recording</li>
            <li>Integrating Instruments</li>
        </ul>

        <h4>C) Methods used by the instruments for comparing the measured quantity</h4>
        <ul>
            <li>Direct measuring Instruments</li>
            <li>Comparison Instruments</li>
        </ul>

        <h3>Principles of Operation for Analog Instruments</h3>
        <ul>
            <li><strong>Magnetic Effect:</strong> Current flows through conductor induces magnetic field. Example: Coil
                converted into magnet.</li>
            <li><strong>Thermal Effect:</strong> Current passes through heating elements increases temperature.
                Thermocouple converts temperature to emf.</li>
            <li><strong>Electrostatic Effect:</strong> Force between charged plates displaces one plate. Used in
                electrostatic devices.</li>
            <li><strong>Induction Effect:</strong> Non-magnetic conducting disc in magnetic field induces EMF. Used in
                induction meters.</li>
            <li><strong>Hall Effect:</strong> Material produces electric current in transverse magnetic field. Voltage
                depends on current, flux density and conductor properties.</li>
        </ul>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Basic+Instrumentation+System"
            alt="Basic Instrumentation System Block Diagram" class="image">
        <p class="image-caption">Figure 1: Block diagram of a basic instrumentation system showing primary sensing
            element, variable conversion, data transmission, and data presentation elements</p>

        <div class="definition">
            <h3>Digital Instrument Definition</h3>
            <p>The instrument which represents the measurand value in the form of the digital number on a screen (LCD or
                LED) is known as the digital instruments. It works on the principle of quantization. The quantization is
                the process of converting the continuous input signal into a countable output signal.</p>
        </div>

        <h3>Digital Instrument Block Diagram</h3>
        <p>Transducer → Signal Modifier → Display Device</p>
        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=ADC+Converter"
            alt="ADC Converter Block Diagram" class="image">
        <p class="image-caption">Figure 2: Block diagram of ADC converter showing Transducer, Signal Modifier, and
            Display Device</p>

        <h3>Advantages of Digital Instruments</h3>
        <ul>
            <li>Display reading in numeric form which reduces error</li>
            <li>Output can be used as input for memory devices like floppy, recorder, printer</li>
            <li>Power consumption is less compared to analogue instruments</li>
        </ul>

        <h3>Disadvantages of Digital Instruments</h3>
        <ul>
            <li>Overloading capacity is low</li>
            <li>Temperature sensitive so easily affected by atmospheric conditions</li>
            <li>Effect of noise is more on digital electronics compared to analogue instruments</li>
            <li>Cost is high and less portable</li>
        </ul>

        <h3>Difference Between Analog and Digital Instruments</h3>
        <table>
            <thead>
                <tr>
                    <th>Characteristic</th>
                    <th>Analog Instrument</th>
                    <th>Digital Instrument</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Output Type</td>
                    <td>Continuous function of time</td>
                    <td>Discrete numerical values</td>
                </tr>
                <tr>
                    <td>Reading Method</td>
                    <td>Pointer/dial</td>
                    <td>Numeric display (LCD/LED)</td>
                </tr>
                <tr>
                    <td>Accuracy</td>
                    <td>Subject to human reading error</td>
                    <td>Higher accuracy (no human error)</td>
                </tr>
                <tr>
                    <td>Power Consumption</td>
                    <td>Higher</td>
                    <td>Lower</td>
                </tr>
                <tr>
                    <td>Cost</td>
                    <td>Generally lower</td>
                    <td>Generally higher</td>
                </tr>
            </tbody>
        </table>

        <h3>Static Characteristics</h3>
        <ul>
            <li><strong>Accuracy:</strong> Closeness to true value</li>
            <li><strong>Precision:</strong> Degree of repeatability of a measurement</li>
            <li><strong>Sensitivity:</strong> Ability to detect small changes in input</li>
            <li><strong>Resolution:</strong> Smallest change in input that can be detected</li>
            <li><strong>Linearity:</strong> Extent to which output is proportional to input</li>
            <li><strong>Hysteresis:</strong> Effects of output during loading and unloading</li>
            <li><strong>Reproducibility:</strong> Ability to produce same reading under same conditions</li>
            <li><strong>Threshold:</strong> Minimum input level for measurable output</li>
            <li><strong>Drift:</strong> Gradual change in output over time with constant input</li>
            <li><strong>Static Error:</strong> Difference between measured value and true value</li>
            <li><strong>Dead Zone:</strong> Range of input values with no output</li>
            <li><strong>Stability:</strong> Ability to maintain characteristics over time and conditions</li>
        </ul>

        <h3>Dynamic Characteristics</h3>
        <ul>
            <li><strong>Speed of Response:</strong> How quickly instrument reacts to input changes</li>
            <li><strong>Fidelity:</strong> Ability to accurately reproduce input changes without distortion</li>
            <li><strong>Lag:</strong> Delay in output reflecting input change (undesirable)</li>
            <li><strong>Dynamic Error:</strong> Error introduced by response to changing inputs</li>
            <li><strong>Sampling Rate:</strong> Number of measurements per unit time (higher = better for rapid changes)
            </li>
            <li><strong>Quantization Error:</strong> Error from converting analog to digital</li>
            <li><strong>Conversion & Processing Time:</strong> Time for ADC conversion and data processing</li>
        </ul>
    </section>

    <section id="1.2">
        <h2>1.2 Microprocessor-based systems: open vs closed loop, benefits, features and applications in
            instrumentation design</h2>

        <div class="definition">
            <h3>Microprocessor Definition</h3>
            <p>A Microprocessor is a multipurpose programmable, clock driven, register based electronic device
                fabricated using signal integrations from SSI to VLSI that reads binary instructions from a storage
                device called memory, accepts binary data as input, processes data according to those instructions and
                provide results as output.</p>
        </div>

        <div class="definition">
            <h3>Instrumentation System Definition</h3>
            <p>The system which is defined as the assembly of various instruments and other components interconnected to
                measure, analyze and control physical quantities such as electrical, thermal, mechanical etc.</p>
        </div>

        <div class="definition">
            <h3>Microprocessor Based Instrumentation System</h3>
            <p>Any instrumentation systems centered around a microprocessor are known as microprocessor based system.
                Logical and computing power of microprocessor has extended the capabilities of many basic instruments,
                improving accuracy and efficiency of use. Microprocessor is versatile device for use in any
                instrumentation system. Examples are ATM, automatic washing machine, fuel control, oven.</p>
        </div>

        <h3>Why Microprocessor?</h3>
        <ul>
            <li>Can be used in any system</li>
            <li>Can be used in specific applications and specific design</li>
            <li>Logical and computational power has been used to develop more accurate and efficient systems</li>
        </ul>

        <h3>Why Not Microprocessor?</h3>
        <ul>
            <li>Complexity in interfacing</li>
            <li>Need to learn complex machine dependent language</li>
            <li>Need of expensive microprocessor development system</li>
            <li>But these problems are accepted if system designed sells many units to spread development cost</li>
        </ul>

        <h3>Features for Selecting Microprocessor</h3>
        <ul>
            <li>How fast the data has to be processed</li>
            <li>Cost - amount of memory intelligence</li>
            <li>Complexity of work</li>
            <li>Field for which system is designed</li>
        </ul>

        <h3>Basic Features of Microprocessor Based System</h3>
        <ul>
            <li>Three components: Microprocessor, I/O, and memory</li>
            <li>Decision making power based on previous entered values</li>
            <li>Repeatability of readings</li>
            <li>User friendly (Signal readout)</li>
            <li>Parallel processing</li>
            <li>Timeshare and multiprocessing</li>
            <li>Data storage, retrieval and transmission</li>
            <li>Effective control of multiple equipments on time sharing basis</li>
            <li>A lot of processing capability</li>
        </ul>

        <h3>Open Loop vs Closed Loop Control Systems</h3>

        <h4>Open Loop Control System</h4>
        <p>Microprocessor gives output of control variable in the form of some display to human operator and then on the
            basis of displayed information, the human operator makes changes in the necessary control inputs.</p>
        <p><strong>Example:</strong> Pressure and temperature monitoring system in chemical processing plant</p>
        <p><strong>Characteristics:</strong></p>
        <ul>
            <li>Simple, low cost and used when feedback is not critical</li>
            <li>Upper and lower limits of desired pressure are set</li>
            <li>Pressure is converted to digital form to be fed to microprocessor</li>
            <li>Microprocessor compares sample with present pressure limits</li>
            <li>If sample is beyond limits, microprocessor indicates alarm or lamp</li>
            <li>Human operator makes necessary changes based on output signal</li>
        </ul>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Open+Loop+Control"
            alt="Open Loop Control System Diagram" class="image">
        <p class="image-caption">Figure 3: Block diagram of pressure monitoring system - Open loop control</p>

        <h4>Closed Loop Control System</h4>
        <p>Microprocessor monitors the process variables continuously and then supplies the output signal to the
            electromechanical devices, which in turn controls the values of process variables.</p>
        <p><strong>Example:</strong> Automatic temperature control system in an oven</p>
        <p><strong>Characteristics:</strong></p>
        <ul>
            <li>Accurate and Adaptive</li>
            <li>No human operator required</li>
            <li>Microprocessor compares temperature measurements with set limits</li>
            <li>If temperature exceeds upper limit, signal turns off some heater elements</li>
            <li>If temperature is below lower limit, signal turns on heating elements</li>
        </ul>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=Closed+Loop+Control"
            alt="Closed Loop Control System Diagram" class="image">
        <p class="image-caption">Figure 4: Block diagram of temperature control system - Closed loop control</p>

        <h3>Applications of Microprocessor Instrumentation System</h3>
        <h4>1) Data Acquisition and Processing</h4>
        <ul>
            <li>Analog-to-Digital Converters (ADCs): Control ADC process, sample signals from sensors, convert to
                digital values</li>
            <li>Signal Processing: Perform filtering, amplification, noise reduction</li>
            <li>Calibration and Correction: Automatically calibrate instruments and compensate for errors</li>
        </ul>

        <h4>2) Control and Automation</h4>
        <ul>
            <li>Process Control: Control temperature, pressure, flow, speed in industrial applications</li>
            <li>Closed-Loop Feedback Control: Monitor process, compare with setpoint, make adjustments</li>
            <li>Digital Displays: Control LCDs or LEDs to show real-time measurements</li>
        </ul>

        <h4>3) Communication and Networking</h4>
        <ul>
            <li>Communication Protocols: Implement RS-232, Ethernet, Wi-Fi for data transmission</li>
            <li>Distributed Systems: Connect multiple instruments controlled by central microprocessor</li>
        </ul>

        <h4>4) Medical Instrumentation</h4>
        <ul>
            <li>Patient Monitoring: ECG machines, pulse oximeters, blood pressure monitors</li>
            <li>Medical Devices: Infusion pumps, ventilators, surgical instruments</li>
        </ul>

        <h4>5) Industrial Automation</h4>
        <ul>
            <li>Programmable Logic Controllers (PLCs): Heart of PLCs for controlling industrial processes</li>
            <li>Data Logging and Analysis: Collect, store, and analyze data from sensors</li>
        </ul>
    </section>

    <section id="1.3">
        <h2>1.3 Microcomputer on instrumentation design</h2>

        <div class="definition">
            <h3>Microcomputer Based Instrumentation Design</h3>
            <p>A process or plant may have to simultaneously measure multiple variables like pressure, temperature,
                velocity, viscosity, flow rate etc. A computer based measurement system has the capability of processing
                all inputs and present the data in real time. A digital computer is fed with a sequential list of
                instructions termed as computer program for suitable processing and manipulation of data.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=Microcomputer+Instrumentation+System"
            alt="Microcomputer Instrumentation System Diagram" class="image">
        <p class="image-caption">Figure 5: Microcomputer based instrumentation design showing process plant,
            multiplexer, signal conditioner, ADC, computer, data logger, display, and remote indicator</p>

        <h3>Advantages of Microcomputer Based Instrumentation</h3>
        <ul>
            <li>Suitably programmed to automatically carry out mundane tasks like drift correction, noise reduction,
                gain adjustments, automatic calibration</li>
            <li>Compact, rugged and reliable signal conditioning and display systems suited for industrial, consumer,
                military, automobile environments</li>
            <li>Built in diagnostic subroutines to detect and correct faults</li>
            <li>Real time measurement, processing and display</li>
            <li>Lower cost, higher accuracy, and more flexibility</li>
        </ul>

        <h3>Disadvantages of Microcomputer Based Instrumentation</h3>
        <ul>
            <li>Cannot replace the program themselves</li>
            <li>Require software updates</li>
            <li>Prone to virus problems, may become in-operational</li>
        </ul>

        <h3>Block Diagram of Microcomputer Based Instrumentation System</h3>
        <p>Process/Plant → Transducer System → Multiplexer → Signal Conditioner → ADC → Computer → Data Logger → Print
            Out/Display</p>
        <p>Additional components: Operator Command Monitor, Data Communication, Remote Indicator</p>
    </section>
</div>



<!-- <===================chapter 2 ==================> -- > -->



<div id="chapter_2">
    <h1>2. Theory of Measurement (6 hours)</h1>

    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#2.1">2.1 Static performance parameters: Accuracy, precision, sensitivity, resolution and
                    linearity</a></li>
            <li><a href="#2.2">2.2 Dynamic performance parameters: Response time, frequency response and bandwidth</a>
            </li>
            <li><a href="#2.3">2.3 Error in measurement</a></li>
            <li><a href="#2.4">2.4 Statistical analysis of error in measurement</a></li>
            <li><a href="#2.5">2.5 Measurement of resistance (Low, medium and high)</a></li>
            <li><a href="#2.6">2.6 DC/AC bridge (Wheatstone bridge, Maxwell's bridge, Schering bridge)</a></li>
        </ul>
    </div>

    <section id="2.1">
        <h2>2.1 Static performance parameters: Accuracy, precision, sensitivity, resolution and linearity</h2>

        <div class="definition">
            <h3>Static Characteristics</h3>
            <p>The characteristics of quantities or parameters measuring instruments that do not vary with respect to
                time are called static characteristics. Sometimes, these quantities or parameters may vary slowly with
                respect to time.</p>
            <p>The static characteristics and parameters of measuring instruments describe the performance of the
                instruments related to the steady-state input/output variables only. The various static characteristics
                and parameters are destined for quantitative description of the instruments perfections and they are
                well presented in the manufacturer's manuals and data sheets.</p>
        </div>

        <h3>Various Static Characteristics:</h3>
        <ul>
            <li>Accuracy</li>
            <li>Precision</li>
            <li>Sensitivity</li>
            <li>Linearity</li>
            <li>Reproducibility</li>
            <li>Repeatability</li>
            <li>Resolution</li>
            <li>Threshold</li>
            <li>Drift</li>
            <li>Stability</li>
            <li>Tolerance</li>
            <li>Range or span</li>
            <li>Hysteresis</li>
            <li>Bias</li>
            <li>Static error</li>
        </ul>

        <h3>Accuracy</h3>
        <p>It is the closeness with which an instrument reading approaches the true value of the quantity being
            measured. Thus accuracy of a measurement means conformity to truth. It is the important static
            characteristic of electrical measuring instruments.</p>
        <p>Deviation from true value indicate low accurate of measurement.</p>
        <p>Accuracy can be specified in terms of inaccuracy or limits of errors and can be expressed in the following
            ways:</p>
        <ul>
            <li><strong>Point accuracy:</strong> This is the accuracy of the instrument only at one point on its scale.
                The specification of this accuracy does not give any information about the accuracy at other points on
                the scale or in the words, does not give any information about the general accuracy of the instrument.
            </li>
            <li><strong>Accuracy as percentage of scale range:</strong> When an instrument has uniform scale, its
                accuracy may be expressed in terms of scale range.</li>
            <li><strong>Accuracy as percentage of true value:</strong> The best way to conceive the idea of accuracy is
                to specify it in terms of the true value of the quantity being measured within +0.5% or -0.5% of true
                value.</li>
        </ul>

        <h3>Precision</h3>
        <p>It is the measure of reproducibility i.e., given a fixed value of a quantity, precision is a measure of the
            degree of agreement within a group of measurements.</p>
        <p>If an instrument indicates the same value repeatedly when it is used to measure the same quantity under same
            circumstances for any number of times, then we can say that the instrument has high precision.</p>
        <p>The precision is composed of two characteristics:</p>
        <ul>
            <li><strong>Conformity:</strong> Consider a resistor having true value as 2385692, which is being measured
                by an ohmmeter. But the reader can read consistently, a value as 2.4 M due to the nonavailability of
                proper scale. The error created due to the limitation of the scale reading is a precision error.</li>
            <li><strong>Number of significant figures:</strong> The precision of the measurement is obtained from the
                number of significant figures, in which the reading is expressed. The significant figures convey the
                actual information about the magnitude & the measurement precision of the quantity.</li>
        </ul>

        <h3>Difference between Accuracy and Precision</h3>
        <p>Accuracy and precision are dependent on each other. A shooter aiming at the target. If all the shots are hit
            at the particular point it is said to have high precision.</p>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Accuracy+vs+Precision"
            alt="Accuracy vs Precision Diagram" class="image">
        <p class="image-caption">Figure: Accuracy vs Precision - High accuracy, high precision; Low accuracy, low
            precision; Low accuracy, high precision</p>

        <ul>
            <li>Precision doesn't guarantee Accuracy.</li>
            <li>But Accurate reading of instrument should be precise.</li>
            <li>"A precise instrument may not be accurate". Verify this statement with an appropriate example.</li>
        </ul>

        <h3>Sensitivity</h3>
        <p>The sensitivity denotes the smallest change in the measured variable to which the instrument responds. It is
            defined as the ratio of the changes in the output of an instrument to a change in the value of the quantity
            to be measured. Mathematically it is expressed as,</p>

        <div class="formula">
            Sensitivity = ΔOutput / ΔInput
        </div>

        <p>The term sensitivity signifies the smallest change in the measurable input that is required for an instrument
            to respond.</p>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=Sensitivity+Curve" alt="Sensitivity Curve"
            class="image">
        <p class="image-caption">Figure: Sensitivity curve for linear and non-linear instruments</p>

        <p>If the calibration curve is linear, then the sensitivity of the instrument will be a constant and it is equal
            to slope of the calibration curve.</p>
        <p>If the calibration curve is non-linear, then the sensitivity of the instrument will not be a constant and it
            will vary with respect to the input.</p>

        <h3>Linearity</h3>
        <p>Linearity is an indicator of the consistency of measurements over the entire range of measurements. In
            general, it is a good indicator of performance quality.</p>
        <p>It is also defined as ability to reproduce the input characteristics symmetrically and linearly. The curve
            shows actual calibration curve and idealized straight line.</p>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Linearity+Curve" alt="Linearity Curve"
            class="image">
        <p class="image-caption">Figure: Linearity curve showing actual calibration curve and idealized straight line
        </p>

        <div class="formula">
            % non-linearity = (Max. deviation of output from idealized straight line / Full scale reading) × 100
        </div>

        <h3>Resolution</h3>
        <p>The smallest change in a measurement variable to which an instrument will respond is resolution. If the
            output of an instrument will change only when there is a specific increment of the input, then that
            increment of the input is called Resolution. That means, the instrument is capable of measuring the input
            effectively, when there is a resolution of the input.</p>

        <ul>
            <li><strong>In Analog:</strong> Smallest division on scale</li>
            <li><strong>In Digital:</strong> LSB (Least Significant Bit)</li>
        </ul>

        <h3>Example: Voltmeter Resolution</h3>
        <p>A voltmeter has 100 scale divisions and can measure up to 100 V. Each division can be read to 1/2 division.
            Determine the resolution of the voltmeter in volts.</p>

        <div class="definition">
            <p>Solution: Resolution is the smallest change in input that can be measured. The meter can be read to 1/2
                division.</p>
            <p>100 div = 100V</p>
            <p>1 div = 1V</p>
            <p>1/2 div = 0.5V</p>
            <p>Therefore, the resolution of the instrument is 0.5 V.</p>
        </div>

        <h3>Example: Digital Voltmeter Resolution</h3>
        <p>A 3½ digit DVM can measure 19.99 V. Determine the resolution in volts. (A 3½ digit in digital instruments
            corresponds to 1. A full digit can be display decimal numbers from 0 to 9.)</p>

        <div class="definition">
            <p>Solution:</p>
            <p>The maximum number of counts that can be made with 3½ digit DVM is 1999.</p>
            <p>(Note: A 3½ digit DVM means: The ½ digit (the most significant digit) can be 0 or 1 only. The other 3
                full digits can be from 0 to 9. So the maximum display is 1999 (not 9999).)</p>
            <p>The smallest change in input that can be measured is 1 count.</p>
            <p>The maximum reading is 19.99V.</p>
            <p>The display shows up to 1999 counts (from 0000 to 1999).</p>
            <p>1 count in volts corresponds to resolution</p>
            <p>1999 counts = 19.99V</p>
            <p>1 count = 19.99/1999 = 0.01V or 10mV</p>
            <p>Resolution = 10 mV</p>
        </div>
    </section>

    <section id="2.2">
        <h2>2.2 Dynamic performance parameters: Response time, frequency response and bandwidth</h2>

        <div class="definition">
            <h3>Dynamic Characteristics</h3>
            <p>The characteristics of the instruments, which are used to measure the quantities or parameters that vary
                very quickly with respect to time are called dynamic characteristics. Dynamic characteristic are
                concerned with the measurement of quantities that vary with time.</p>
            <p>When input is applied to the system or say instruments, the response does not take its maximum value or
                constant value immediately. There will be certain delay in time, i.e Transient period. After transient
                period, response takes to its constant value i.e steady state period.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=Transient+and+Steady+State+Response"
            alt="Transient and Steady State Response" class="image">
        <p class="image-caption">Figure: Transient and Steady State Response</p>

        <h3>Following are the list of dynamic characteristics:</h3>
        <ul>
            <li>Speed of Response</li>
            <li>Dynamic Error</li>
            <li>Fidelity</li>
            <li>Measuring Lag</li>
            <li>Bandwidth</li>
            <li>Time Constant</li>
        </ul>

        <h3>Speed of Response</h3>
        <p>The speed at which the instrument responds whenever there is any change in the quantity to be measured is
            called speed of response. It indicates how fast the instrument is. It is usually specified as the time taken
            by the system to come close to steady state conditions, for a step input function.</p>

        <h3>Measuring Lag</h3>
        <p>The amount of delay present in the response of an instrument whenever there is a change in the quantity to be
            measured is called measuring lag. It is also simply called lag. This lag is usually quite small but it
            becomes quite significant where high-speed measurements are required.</p>

        <h3>Dynamic Error</h3>
        <p>The difference between the true value of the quantity to the value shown by the instrument (changing with
            time) provided static error is zero. Total dynamic error is the phase difference between input and output of
            the measurement system.</p>

        <h3>Fidelity</h3>
        <p>The degree to with which instrument responds to the changes in a measured variable without dynamic error. It
            is the ability of the system to reproduce the output in the same form as the input. In the definition of
            fidelity any time lag or phase difference is not included. Ideally a system should have 100% fidelity and
            the output should appear in the same form as the input and there is no distortion produced by the system.
            Fidelity needs are different for different applications.</p>

        <h3>Bandwidth</h3>
        <p>It is the range of frequencies for which its dynamic sensitivity is satisfactory. For measuring systems, the
            dynamic sensitivity is required to be within 2% of its statics sensitivity. For other physical systems,
            electrical filters electronic amplifiers, the above criterion is relaxed with the result that their
            bandwidth specification extend to frequencies at which the dynamic sensitivity is 70.7% of that at zero or
            the mid-frequency.</p>

        <h3>Time Constant</h3>
        <p>It is associated with the behaviour of a first order system and is defined as the time taken by the system to
            reach 0.632 times its final output signal amplitude. System having small time constant attains its final
            output amplitude earlier than the one with larger time constant and therefore, has higher speed of response.
        </p>
    </section>

    <section id="2.3">
        <h2>2.3 Error in measurement</h2>

        <div class="definition">
            <h3>Definition of Error</h3>
            <p>An error may be defined as the difference between the measured and actual values. For example, if the two
                operators use the same device or instrument for measurement. It is not necessary that both operators get
                similar results. The difference between the measurements is referred to as an ERROR.</p>
            <div class="formula">
                Error = True value - Measured value
            </div>
        </div>

        <h3>Types of Errors</h3>
        <p>There are three types of errors that are classified based on the source they arise from; They are:</p>
        <ul>
            <li>Gross Errors</li>
            <li>Random Errors</li>
            <li>Systematic Errors</li>
        </ul>

        <h3>Gross Errors</h3>
        <p>This category basically takes into account human oversight and other mistakes while reading, recording, and
            readings. The most common human error in measurement falls under this category of measurement errors. For
            example, the person taking the reading from the meter of the instrument may read 23 as 28. Gross errors can
            be avoided by using two suitable measures, and they are written below:</p>
        <ul>
            <li>Proper care should be taken in reading, recording the data. Also, the calculation of error should be
                done accurately.</li>
            <li>By increasing the number of experimenters, we can reduce the gross errors. If each experimenter takes
                different readings at different points, then by taking the average of more readings, we can reduce the
                gross errors</li>
        </ul>

        <h3>Random Errors</h3>
        <p>The random errors are those errors, which occur irregularly and hence are random. These can arise due to
            random and unpredictable fluctuations in experimental conditions (Example: unpredictable fluctuations in
            temperature, voltage supply, mechanical vibrations of experimental set-ups, etc., errors by the observer
            taking readings, etc. For example, when the same person repeats the same observation, he may likely get
            different readings every time.</p>

        <h3>Systematic Errors</h3>
        <p>Systematic errors can be better understood if we divide them into subgroups; They are:</p>
        <ul>
            <li>Environmental Errors</li>
            <li>Observational Errors</li>
            <li>Instrumental Errors</li>
        </ul>

        <h3>Environmental Errors</h3>
        <p>This type of error arises in the measurement due to the effect of the external conditions on the measurement.
            The external condition includes temperature, pressure, and humidity and can also include an external
            magnetic field. If you measure your temperature under the armpits and during the measurement, if the
            electricity goes out and the room gets hot, it will affect your body temperature, affecting the reading.</p>

        <h3>Observational Errors</h3>
        <p>These are the errors that arise due to an individual's bias, lack of proper setting of the apparatus, or an
            individual's carelessness in taking observations. The measurement errors also include wrong readings due to
            Parallax errors.</p>

        <h3>Instrumental Errors</h3>
        <p>These errors arise due to faulty construction and calibration of the measuring instruments. Such errors arise
            due to the hysteresis of the equipment or due to friction. Lots of the time, the equipment being used is
            faulty due to misuse or neglect, which changes the reading of the equipment. The zero error is a very common
            type of error. This error is common in devices like Vernier callipers and screw gauges. The zero error can
            be either positive or negative. Sometimes the scale readings are worn off, which can also lead to a bad
            reading.</p>

        <h3>Instrumental error takes place due to:</h3>
        <ul>
            <li>An inherent constraint of devices</li>
            <li>Misuse of Apparatus</li>
        </ul>

        <h3>Example: Loading Effect</h3>
        <p>It is desired to measure the value of current in the 500 ohms resistor as shown in Fig. by connecting a 100
            ohms ammeter. Find: (a) the actual value of current (b) measured value of current c) percentage error in the
            measurement and accuracy.</p>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Loading+Effect+Example"
            alt="Loading Effect Example" class="image">
        <p class="image-caption">Figure: Loading Effect Example Circuit</p>

        <h3>Example: Voltmeter Loading Effect</h3>
        <p>A voltmeter having a sensitivity of 15kΩ/V reads 80V on a 100V scale, when connected across an unknown
            resistor. The current through the resistance is 2mA. Calculate the % error due to loading effect.</p>

        <div class="definition">
            <p>Solution: Resistance of voltmeter, Rv = Sensitivity of voltmeter in kΩ/V × range of voltmeter = 15 × 100
                = 1500 kΩ</p>
            <p>Voltage across unknown resistor, V = Reading of voltmeter connected across the circuit = 80V</p>
            <p>True value of unknown resistance, Rx = Voltage across resistor / Current through resistor = 80 / 0.002 =
                40,000Ω or 40 kΩ</p>
            <p>Apparent value of unknown resistance, R = Equivalent resistance of the circuit = 40kΩ || 1500kΩ =
                (40×1500)/(40+1500) = 38.961 kΩ</p>
            <p>% error due to loading effect, E = [(R - Rx)/Rx] × 100 = [(38.961 - 40)/40] × 100 = -2.56% Ans.</p>
        </div>

        <h3>Error Calculation</h3>
        <p>Different measures of errors include:</p>

        <h4>Absolute Error</h4>
        <p>The difference between the measured value of a quantity and its actual value gives the absolute error. It is
            the variation between the actual values and measured values. It is given by</p>
        <div class="formula">
            Absolute error = |VA - VE|
        </div>

        <h4>Percent Error</h4>
        <p>It is another way of expressing the error in measurement. This calculation allows us to gauge how accurate a
            measured value is with respect to the true value. Per cent error is given by the formula</p>
        <div class="formula">
            Percentage error(%) = [(VA - VE)/VE] × 100
        </div>

        <h4>Relative Error</h4>
        <p>The ratio of the absolute error to the accepted measurement gives the relative error. The relative error is
            given by the formula:</p>
        <div class="formula">
            Relative Error = Absolute error / Actual value
        </div>

        <h3>How To Reduce Errors In Measurement</h3>
        <ul>
            <li>Make sure the formulas used for measurement are correct.</li>
            <li>Cross check the measured value of a quantity for improved accuracy.</li>
            <li>Use the instrument that has the highest precision.</li>
            <li>It is suggested to pilot test measuring instruments for better accuracy.</li>
            <li>Use multiple measures for the same construct.</li>
        </ul>

        <h3>Numerical Examples</h3>
        <p>A voltmeter whose accuracy lags is 2% of full-scale reading is used on its 0-50 volts scale. The voltage
            measured by meter is 15 V and 42 V. Calculate the possible percentage error of both readings. Comments on
            your answer.</p>

        <div class="definition">
            <p>Solution: For 15V reading:</p>
            <p>Full scale reading = 50V</p>
            <p>Limiting error = 2% of 50 = 1V</p>
            <p>% limiting error = (1/15) × 100 = 6.67%</p>
            <p>For 42V reading:</p>
            <p>% limiting error = (1/42) × 100 = 2.38%</p>
            <p>Comment: The percentage error is higher for smaller readings because the absolute error is constant for
                the full scale range.</p>
        </div>
    </section>

    <section id="2.4">
        <h2>2.4 Statistical analysis of error in measurement</h2>

        <div class="definition">
            <h3>Statistical Analysis</h3>
            <p>This method is employed to estimate the value or error when unpredictable errors or random errors are
                dominant. When the reason for specific error cannot be identified and the deviation from the true value
                is to be estimated, the statistical analysis method is to be employed. This will give the deviation from
                the true value, and the correctness of the readings taken.</p>
            <p>The statistical analysis is employed by taking a large number of readings of a particular parameter, and
                calculations are made in the following ways:</p>
        </div>

        <h3>Arithmetic Mean</h3>
        <p>A large number of readings are taken and the average value is computed. The average reading is the most
            probable value.</p>
        <div class="formula">
            x̄ = (x₁ + x₂ + x₃ + ... + xₙ) / n
        </div>
        <p>Where, x̄ = arithmetic mean, n = number of readings taken</p>

        <h3>Deviation</h3>
        <p>It is the departure of a given reading from the arithmetic mean of the group of readings.</p>
        <div class="formula">
            dₙ = xₙ - x̄
        </div>
        <p>The deviation can be positive or negative.</p>

        <h3>Average Deviation</h3>
        <p>It is an indication of precision of the instruments used in making measurements. Highly accurate instruments
            with good reproducibility will have a low average deviation.</p>
        <div class="formula">
            Average Deviation = Σ|dᵢ| / n
        </div>

        <h3>Standard Deviation</h3>
        <p>Standard deviation σ = √[Σ(xᵢ - x̄)² / (n-1)] for n < 20</p>
                <div class="formula">
                    σ = √[Σ(dᵢ²) / (n-1)]
                </div>

                <h3>Variance</h3>
                <p>Variance σ² is the mean square deviation.</p>

                <h3>Probable Error</h3>
                <p>Probable error in measurement is a concept used to indicate the range around a measured value where
                    there's a 50% chance the true value lies. It's essentially a measure of uncertainty, helping to
                    understand the reliability of a measurement.</p>
                <div class="formula">
                    p.e = ±0.6745 σ
                </div>

                <h3>Probable Error of Mean Reading</h3>
                <div class="formula">
                    Probable error of mean reading = p.e / √(n-1)
                </div>

                <h3>Range</h3>
                <p>The simplest possible measure of dispersion is the range which is the difference between greatest and
                    least values of data</p>

                <h3>Probability Distribution</h3>
                <p>Probability distributions are a function, table, or equation that shows the relationship between the
                    outcome of an event and its frequency of occurrence.</p>
                <p>Probability distributions are helpful because they can be used as a graphical representation of your
                    measurement functions and how they behave.</p>

                <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Histogram+and+Gaussian+Curve"
                    alt="Histogram and Gaussian Curve" class="image">
                <p class="image-caption">Figure: Histogram showing distribution of parameter readings and Gaussian curve
                </p>

                <h3>Gaussian Law or Normal Law</h3>
                <p>The Gaussian law of error is the basis for the study of random effects. When random errors are
                    predominant, the probable error in a particular measurement can be estimated. The equation for the
                    Gaussian law is:</p>
                <div class="formula">
                    y = (1/√(2π)σ) × e^(-(w²)/(2σ²))
                </div>
                <p>Where, h = constant = 1/√(2σ), w = magnitude of deviation from the mean, y = probability of
                    occurrence of deviation w</p>

                <h3>Probable Error Table</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Deviation</th>
                            <th>Fraction of total area included</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>±0.6745σ</td>
                            <td>0.500</td>
                        </tr>
                        <tr>
                            <td>±1σ</td>
                            <td>0.6828</td>
                        </tr>
                        <tr>
                            <td>±2σ</td>
                            <td>0.9546</td>
                        </tr>
                        <tr>
                            <td>±3σ</td>
                            <td>0.9972</td>
                        </tr>
                    </tbody>
                </table>

                <h3>Skewness</h3>
                <p>Skewness is a measure of the probability distributions symmetry.</p>

                <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=Skewness+Types" alt="Skewness Types"
                    class="image">
                <p class="image-caption">Figure: Negatively skewed, Normal (no skew), Positively skewed distributions
                </p>

                <h3>Kurtosis</h3>
                <p>Kurtosis is a measure of the tailedness and peakedness relative to a normal distribution.</p>

                <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Kurtosis+Types" alt="Kurtosis Types"
                    class="image">
                <p class="image-caption">Figure: Kurtosis showing distributions with wider tails and greater peaks</p>

                <h3>Numerical Example 1</h3>
                <p>The following 10 observations were recorded: 41.7, 42, 41.8, 42, 42.1, 41.9, 42, 41.9, 42.5, 41.8 for
                    an ammeter. Find a. Mean. b. Standard deviation. c. Probable error of one reading. d. Probable error
                    of mean. e. Range</p>

                <h3>Numerical Example 2</h3>
                <p>In a test, temperature is measured 100 times with variation in apparatus and procedure. After
                    applying the correction the result are:</p>

                <table>
                    <thead>
                        <tr>
                            <th>Temp</th>
                            <th>397</th>
                            <th>398</th>
                            <th>399</th>
                            <th>400</th>
                            <th>401</th>
                            <th>402</th>
                            <th>403</th>
                            <th>404</th>
                            <th>405</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Frequency of Occurrence</td>
                            <td>1</td>
                            <td>3</td>
                            <td>12</td>
                            <td>23</td>
                            <td>37</td>
                            <td>16</td>
                            <td>4</td>
                            <td>2</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>

                <p>Calculate a. Arithmetic mean b. Deviation from mean c. Average deviation d. Standard deviation e.
                    Variance f. Probable error</p>

                <h3>Numerical Example 3</h3>
                <p>The value of resistance R was determined by measuring current I flowing through the resistance with
                    an error ±1.5%, and power loss P in it with an error ±1%. Determine maximum possible relative error
                    to be expected in measuring a resistance R.</p>

                <div class="definition">
                    <p>Soln. We have, R = P/I²</p>
                    <p>Thus, logR = logP - 2logI</p>
                    <p>Differentiating w.r.t. R, we get:</p>
                    <p>dR/R = (dP/P) + 2(dI/I)</p>
                    <p>%error in R = % error in P + 2 × % error in I</p>
                    <p>= 1% + 2 × 1.5% = 4%</p>
                </div>
    </section>

    <section id="2.5">
        <h2>2.5 Measurement of resistance (Low, medium and high)</h2>

        <div class="definition">
            <h3>Classification of Resistances</h3>
            <p>Depending upon the value of resistance they are classified into three categories:</p>
            <ul>
                <li><strong>Low Resistance:</strong> Resistance of the order of 1Ω and below are classified as low
                    resistance.</li>
                <li><strong>Medium Resistance:</strong> Resistance ranging from 1Ω to 100Ω are classified as medium
                    resistances</li>
                <li><strong>High Resistance:</strong> Resistance of the order of 100kΩ and above are classified as high
                    resistances</li>
            </ul>
            <p>Different techniques are applied for measurement of low, medium, and high values of resistances.</p>
        </div>

        <h3>Measurement of Low Resistance</h3>
        <p>The various methods that can be employed for the measurement of low resistance are:</p>
        <ul>
            <li>Kelvin's Bridge Method</li>
            <li>Ammeter-voltmeter Method</li>
            <li>Potentiometer Method</li>
        </ul>

        <h3>Kelvin Bridge</h3>
        <p>The r is the resistance of the contacts that connect the unknown resistance R to the standard resistance S.
            The 'm' and 'n' show the range between which the galvanometer is connected for obtaining a null point.</p>

        <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=Kelvin+Bridge+Circuit"
            alt="Kelvin Bridge Circuit" class="image">
        <p class="image-caption">Figure: Kelvin Bridge Circuit</p>

        <p>When the galvanometer is connected to point 'm', the lead resistance r is added to the standard resistance S.
            Thereby the very low indication obtains for unknown resistance R. And if the galvanometer is connected to
            point n then the r adds to the R, and hence the high value of unknown resistance is obtained. Thus, at point
            n and m either very high or very low value of unknown resistance is obtained.</p>

        <p>So, instead of connecting the galvanometer from point m and n we chose any intermediate point say d where the
            resistance of lead r is divided into two equal parts, i.e., r₁ and r₂</p>

        <div class="formula">
            P/Q = R/S
        </div>

        <p>The presence of r causes no error in the measurement of unknown resistance.</p>

        <h3>Measurement of Medium Resistances</h3>
        <p>To measure the medium resistances following methods are used:</p>
        <ul>
            <li>Ammeter-Voltmeter Method</li>
            <li>Substitution Method</li>
            <li>Wheatstone Bridge</li>
            <li>Carey-Foster Slide-Wire Bridge Method</li>
        </ul>

        <h3>Ammeter Voltmeter Method</h3>
        <p>This is the most crude and simplest method of measuring resistance. It uses one ammeter to measure current, I
            and one voltmeter to measure voltage, V and we get the value of resistance as</p>
        <div class="formula">
            R = V/I
        </div>

        <p>There are two ways in ammeter and voltmeters may be connected for measurement as:</p>

        <h4>Case 1</h4>
        <p>When voltmeter is directly connected across the resistor, then the ammeter measures current flowing through
            the unknown resistance (R) and the voltmeter.</p>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Ammeter+Voltmeter+Case+1"
            alt="Ammeter Voltmeter Case 1" class="image">
        <p class="image-caption">Figure: Ammeter Voltmeter Case 1</p>

        <p>Current through ammeter = Current through(R) + Current through voltmeter = I_R + I_V</p>
        <p>Therefore, the value of unknown resistance,</p>
        <div class="formula">
            R_x = V / (I - I_V) = V / (I - V/R_v)
        </div>

        <h4>Case 2</h4>
        <p>When the ammeter is connected such that it measures only the current flowing through the unknown resistor
            (R_x), then the voltmeter measures voltage drop across the ammeter and R_x</p>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=Ammeter+Voltmeter+Case+2"
            alt="Ammeter Voltmeter Case 2" class="image">
        <p class="image-caption">Figure: Ammeter Voltmeter Case 2</p>

        <p>Therefore,</p>
        <div class="formula">
            V = I R_A + I R_x = I(R_A + R_x)
        </div>
        <div class="formula">
            R_x = (V/I) - R_A
        </div>

        <h3>Substitution Method</h3>
        <p>Step 1- In this method, first the unknown resistance (R_x) is put into the circuit and note the value of
            current.</p>
        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Substitution+Method+Step+1"
            alt="Substitution Method Step 1" class="image">

        <p>Step 2- Then the resistance R_x is removed and it is substituted by a known variable resistance R which is
            varied so that the value of current is same in both the cases. This value of R is equal to the value of
            unknown resistance.</p>
        <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=Substitution+Method+Step+2"
            alt="Substitution Method Step 2" class="image">

        <h3>Wheatstone Bridge</h3>
        <p>The Wheatstone bridge method is the most accurate method for the measurement of resistances.</p>
        <p>The bridge consists of four resistive arms, source of emf and a galvanometer (null detector). The current
            through the galvanometer depends upon the potential difference between the points B and D. The bridge is
            said to be balanced when the potential difference across the galvanometer is zero so that there is no
            current flows through the galvanometer.</p>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Wheatstone+Bridge+Circuit"
            alt="Wheatstone Bridge Circuit" class="image">
        <p class="image-caption">Figure: Wheatstone Bridge Circuit</p>

        <p>At balanced condition, when no current flows through the diagonal arm, DB. That means, there is no deflection
            in the galvanometer, when the bridge is balanced.</p>
        <p>The bridge will be balanced; the voltage across arm AD is equal to the voltage across arm AB.</p>
        <div class="formula">
            V_AD = V_AB
        </div>
        <div class="formula">
            I₁R₁ = I₂R₂
        </div>
        <div class="formula">
            R₄ = (R₂R₃)/R₁
        </div>
        <p>By substituting the known values of resistors R₁, R₂ and R₃ in above equation, we will get the value of
            resistor R₄.</p>

        <h3>Measurement of High Resistances</h3>
        <p>The following methods are employed for the measurement of high resistances:</p>
        <ul>
            <li>Direct Deflection Method</li>
            <li>Loss of Charge Method</li>
            <li>Megohm Bridge</li>
            <li>Megger</li>
        </ul>

        <h3>Megger</h3>
        <p>Megger (megohmmeter) is a device used for the measurement of high resistances, mainly insulation resistances
            of electric circuits with respect to earth or one another. A megger consists of a source of emf and a
            voltmeter whose scale is usually calibrated in mega-ohms. The unknown resistance R_x has to be connected
            across the leads of megger.</p>
        <p>When the megger operates, the deflection of the moving system depends upon the ratio of the applied voltage
            and the current in the coils of the megger. The unknown resistance is read directly from the scale of the
            megger.</p>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=Megger+Circuit" alt="Megger Circuit"
            class="image">
        <p class="image-caption">Figure: Megger Circuit</p>

        <h3>Direct Deflection Method</h3>
        <p>In this method, a very sensitive and high resistance (more than 1kΩ) PMMC galvanometer is connected in series
            with the resistance to be measured and to a battery. The deflection of galvanometer gives the measure of
            unknown resistance. This method is mainly used for the measurement of insulation resistance.</p>
        <p>Let us take an example of direction deflection method for measuring insulation resistance of a cable.</p>
        <p>Refer the figure, the galvanometer (G) measures the current I_R between conductor core and metal sheath. The
            leakage current I over the surface of insulating material is carried by the guard wire wound on the
            insulation and does not flow through the galvanometer. Thus, the resistance of the cable is,</p>
        <div class="formula">
            R = V / I_R
        </div>

        <h3>Megohm Bridge</h3>
        <p>The circuit of Megohm bridge consists of power supplies, resistances, amplifiers and indicating instruments.
        </p>
        <p>In this instrument, the dial on R₁ is calibrated (1-10-100-1000 MΩ) and the R_a gives five multipliers 0.1,
            1, 10, 100 and 100. The junction of R₁ and R₂ is brought on the main panel and assigned a name as Guard
            terminal. The unknown resistance is given by,</p>
        <div class="formula">
            R_x = (R₂R₃)/R₁
        </div>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Megohm+Bridge+Circuit"
            alt="Megohm Bridge Circuit" class="image">
        <p class="image-caption">Figure: Megohm Bridge Circuit</p>
    </section>

    <section id="2.6">
        <h2>2.6 DC/AC bridge (Wheatstone bridge, Maxwell's bridge, Schering bridge)</h2>

        <div class="definition">
            <h3>Bridge Measurement</h3>
            <p>Bridges are often used for the precision measurement of component values, like resistance, inductance,
                capacitance, etc. The simplest form of a bridge circuit consists of a network of four resistance arms
                forming a closed circuit as shown in Fig. A source of current is applied to two opposite junctions and a
                current detector is connected to other two junctions. The bridge circuit operates on null detection
                principle and uses the principle of comparison measurement methods.</p>
            <p>The two Types of Bridges are:</p>
            <ul>
                <li>D.C Bridges</li>
                <ul>
                    <li>Wheatstone Bridge</li>
                    <li>Kelvin Bridge</li>
                </ul>
                <li>A.C Bridges</li>
                <ul>
                    <li>Inductance Bridge (Hay and Maxwell Bridge)</li>
                    <li>Capacitance Bridge (Schering Bridge)</li>
                    <li>Wien Bridge</li>
                </ul>
            </ul>
            <p>The D.C bridges are used to measure the resistance while the A.C bridges are used to measure the
                impedances consisting capacitance and inductances.</p>
        </div>

        <h3>DC Bridges - Wheatstone Bridge</h3>
        <p>Wheatstone's bridge is a simple DC bridge, which is mainly having four arms. These four arms form a rhombus
            or square shape and each arm consists of one resistor.</p>
        <p>To find the value of unknown resistance, we need the galvanometer and DC voltage source. Hence, one of these
            two are placed in one diagonal of Wheatstone's bridge and the other one is placed in another diagonal of
            Wheatstone's bridge.</p>
        <p>Wheatstone's bridge is used to measure the value of medium resistance. The circuit diagram of Wheatstone's
            bridge is shown in below figure.</p>

        <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=Wheatstone+Bridge+Circuit"
            alt="Wheatstone Bridge Circuit" class="image">
        <p class="image-caption">Figure: Wheatstone Bridge Circuit</p>

        <p>Here, the resistor, R₃ is a standard variable resistor and the resistor, R₄ is an unknown resistor. We can
            balance the bridge, by varying the resistance value of resistor R₃.</p>
        <p>At balanced condition, when no current flows through the diagonal arm, DB. That means, there is no deflection
            in the galvanometer, when the bridge is balanced.</p>
        <p>The bridge will be balanced; the voltage across arm AD is equal to the voltage across arm AB.</p>
        <div class="formula">
            V_AD = V_AB
        </div>
        <div class="formula">
            I₁R₁ = I₂R₂
        </div>
        <div class="formula">
            R₄ = (R₂R₃)/R₁
        </div>
        <p>By substituting the known values of resistors R₁, R₂ and R₃ in above equation, we will get the value of
            resistor R₄.</p>

        <h3>AC Bridges</h3>
        <p>AC bridges are the circuits that are used for the measurement of electrical quantities such as inductance,
            capacitance, resistance.</p>
        <p>Let, Z₁ = (Z₁∠θ₁), Z₂ = (Z₂∠θ₂), Z₃ = (Z₃∠θ₃), Z₄ = (Z₄∠θ₄)</p>
        <p>For the bridge to be balanced, considering the above-shown figure The current through detector must be 0 that
            requires the potential difference V_bc to be 0.</p>
        <p>In such a condition voltage drop from a to b will get equal to voltage drop from a to d, both in magnitude
            and phase.</p>
        <p>So, we can write the above-stated condition as, At balance,</p>
        <div class="formula">
            E₁ = E₂
        </div>
        <div class="formula">
            I₁Z₁∠θ₁ = I₂Z₂∠θ₂
        </div>
        <p>But,</p>
        <div class="formula">
            I₁ = I₃ = E / (Z₁∠θ₁ + Z₃∠θ₃)
        </div>
        <div class="formula">
            I₂ = I₄ = E / (Z₂∠θ₂ + Z₄∠θ₄)
        </div>
        <p>So,</p>
        <div class="formula">
            Z₁∠θ₁ × Z₄∠θ₄ = Z₂∠θ₂ × Z₃∠θ₃
        </div>
        <p>Hence for AC circuit to be balanced, two condition must be satisfied:</p>
        <ul>
            <li>Product of Magnitude of impedance of opposite arm must be equal: Z₁Z₄ = Z₂Z₃</li>
            <li>Sum of angle of impedance of opposite arm must be equal: θ₁ + θ₄ = θ₂ + θ₃</li>
        </ul>

        <h3>Numerical Example</h3>
        <p>The four impedances of an AC bridge having 1000Hz has following arms:</p>
        <ul>
            <li>Branch AB with impedance Z₁ = 400Ω∠80°</li>
            <li>Branch BC with impedance Z₂ = 200Ω∠40°</li>
            <li>Branch CD with impedance Z₃ = 400Ω∠-30°</li>
            <li>Branch DA with impedance Z₄ = 800Ω∠20°</li>
        </ul>
        <p>Find out whether bridge is balanced or not.</p>

        <div class="definition">
            <p>Solution:</p>
            <p>Check if Z₁Z₄ = Z₂Z₃ and θ₁+θ₄ = θ₂+θ₃</p>
            <p>Magnitude: 400 × 800 = 320,000; 200 × 400 = 80,000 → Not equal</p>
            <p>Angles: 80° + 20° = 100°; 40° + (-30°) = 10° → Not equal</p>
            <p>Therefore, the bridge is not balanced.</p>
        </div>

        <h3>Measurement of Inductance/AC inductance bridge</h3>
        <p>Following are the two AC bridges, which can be used to measure inductance:</p>
        <ul>
            <li>Maxwell's Bridge</li>
            <li>Hay's Bridge</li>
        </ul>

        <h3>Maxwell's Bridge</h3>
        <p>Maxwell's bridge is used to measure the value of medium inductance. The circuit diagram of Maxwell's bridge
            is shown in the below figure.</p>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Maxwell's+Bridge+Circuit"
            alt="Maxwell's Bridge Circuit" class="image">
        <p class="image-caption">Figure: Maxwell's Bridge Circuit</p>

        <p>At balanced condition:</p>
        <div class="formula">
            Z₁Z₄ = Z₂Z₃
        </div>
        <p>Where:</p>
        <ul>
            <li>Z₁ = R₁ + 1/(jωC₁)</li>
            <li>Z₂ = R₂</li>
            <li>Z₃ = R₃</li>
            <li>Z₄ = Rₓ + jωLₓ</li>
        </ul>
        <p>At balanced condition:</p>
        <div class="formula">
            Rₓ = (R₂R₃)/R₁
        </div>
        <div class="formula">
            Lₓ = R₂R₃C₁
        </div>
        <p>The quality factor of Maxwell's bridge circuit is given as, Q = ωLₓ/Rₓ</p>

        <h3>Advantages of Maxwell's Bridge</h3>
        <ul>
            <li>The frequency does not appear in the final expression of both equations, hence it is independent of
                frequency.</li>
            <li>Maxwell's inductor capacitance bridge is very useful for the wide range of measurement of inductor at
                audio frequencies.</li>
        </ul>

        <h3>Disadvantages of Maxwell's Bridge</h3>
        <ul>
            <li>The variable standard capacitor is very expensive.</li>
            <li>The bridge is limited to measurement of low quality coils (1 < Q < 10) and it is also unsuitable for low
                    value of Q (i.e. Q < 1) from this we conclude that a Maxwell bridge is used suitable only for medium
                    Q coils.</li>
        </ul>

        <h3>Hay's Bridge</h3>
        <p>Hay's bridge is a modification of Maxwell's bridge that is used for measuring high Q coils (Q > 10).</p>

        <h3>Measurement of Capacitance</h3>
        <h3>Schering Bridge</h3>
        <p>This bridge is used to measure the capacitance of the capacitor, dissipation factor and measurement of
            relative permittivity. Let us consider the circuit of Schering Bridge.</p>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=Schering+Bridge+Circuit"
            alt="Schering Bridge Circuit" class="image">
        <p class="image-caption">Figure: Schering Bridge Circuit</p>

        <p>Let:</p>
        <ul>
            <li>C₁ = Capacitor whose capacitance is to be measured</li>
            <li>r₁ = Series Resistance representing the loss in the Capacitor C₁</li>
            <li>C₂ = Standard Capacitor</li>
            <li>R₃ = Non Inductive Resistance</li>
            <li>C₄ = Variable Capacitor</li>
            <li>R₄ = Variable Non Inductive Resistance</li>
        </ul>

        <p>At balance condition:</p>
        <div class="formula">
            Z₁Z₄ = Z₂Z₃
        </div>
        <p>Where:</p>
        <ul>
            <li>Z₁ = r₁ + 1/(jωC₁)</li>
            <li>Z₂ = R₃</li>
            <li>Z₃ = 1/(jωC₄)</li>
            <li>Z₄ = R₄</li>
        </ul>
        <p>At balance condition:</p>
        <div class="formula">
            r₁ = (R₃C₄)/C₂
        </div>
        <div class="formula">
            C₁ = (R₄C₂)/R₃
        </div>
        <p>Dissipation factor D₁ = ωC₁r₁</p>
        <p>Dissipation factor is a measure of its energy loss during AC operation. The dissipation factor, represented
            as tan δ = capacitor's resistance (R)/ Capacitive reactance(Xc).</p>

        <h3>Numerical Example: Schering Bridge</h3>
        <p>The Schering Bridge has the following constraints, R₁ = 1.5kΩ, C₁ = 0.4μF, R₂ = 3kΩ and C₃ = 0.4μF at
            frequency 1kHz. Determine the unknown resistance and capacitance of the bridge and dissipation factor.</p>
    </section>
</div>


<!-- <==========================chapter 3 =========================> -->




<div id="chapter_3">
    <h1>3. Transducer (8 hours)</h1>

    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#3.1">3.1 Transducer, workflow of a transducer in typical system, transducer classification</a>
            </li>
            <li><a href="#3.2">3.2 Sensor and its working principle (Resistive, capacitive and piezoelectric),
                    generation of sensor, classification of sensor (Analog sensor, digital sensor)</a></li>
            <li><a href="#3.3">3.3 Types of sensors (Electrical sensor, chemical sensor, biological sensor, acoustic
                    sensor, optical sensor and other motion sensor), characteristic of sensors</a></li>
            <li><a href="#3.4">3.4 Actuator, classification of actuators (Hydraulic, mechanical, electric),
                    characteristic of actuator</a></li>
        </ul>
    </div>

    <section id="3.1">
        <h2>3.1 Transducer, workflow of a transducer in typical system, transducer classification</h2>

        <div class="definition">
            <h3>Transducer Definition</h3>
            <p>Transducer is a device which converts one form of energy into another form i.e., the given non-electrical
                energy is converted into an electrical energy.</p>
            <p>Transducers play an important role in the field of instrumentation and control engineering. Any energy in
                a process should be converted from one form into another form to make the communication from one
                rectification sector to another.</p>
        </div>

        <h3>Workflow of typical transducer</h3>
        <ol>
            <li><strong>Sensing:</strong> The transducer's primary role is to detect a physical change, such as
                pressure, temperature, force, or motion. This is typically done by a sensor within the transducer.</li>
            <li><strong>Signal Conversion:</strong> The sensor converts the detected physical quantity into an
                electrical signal. This conversion can happen through various mechanisms, including resistance changes,
                electromagnetic induction, or piezoelectric effects.</li>
            <li><strong>Amplification (if needed):</strong> The electrical signal generated by the transducer may be too
                weak for direct processing. In such cases, an amplifier is used to strengthen the signal, ensuring its
                quality and minimizing interference.</li>
            <li><strong>Signal Transmission:</strong> The amplified signal is then transmitted, often as a standardized
                electrical signal (like 4-20mA or 0-10V), to a control system like a Programmable Logic Controller
                (PLC).</li>
            <li><strong>Processing and Action:</strong> The control system analyzes the received signal, interprets its
                meaning, and triggers appropriate actions, such as adjusting a valve, controlling a motor, or triggering
                an alarm.</li>
        </ol>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Transducer+Workflow"
            alt="Transducer Workflow Diagram" class="image">
        <p class="image-caption">Figure: Workflow of a typical transducer system showing sensing, signal conversion,
            amplification, transmission, and processing stages</p>

        <h3>BASIC REQUIREMENTS/SELECTION OF A TRANSDUCER</h3>
        <p>Basic requirements for the proper functioning of transducers:</p>
        <ul>
            <li><strong>Ruggedness:</strong> It should be capable of withstanding over load and some safety should be
                provided for overload protection.</li>
            <li><strong>Linearity:</strong> Its input-output characteristics should be linear and it should produce
                these characteristics in symmetrical way.</li>
            <li><strong>Repeatability:</strong> It should reproduce same output signal when the same input signal is
                applied under fixed environmental conditions. For example pressure, temperature, humidity etc.</li>
            <li><strong>Residual Deformation:</strong> There should be no deformation on removal of input signal after
                long period of application.</li>
            <li><strong>No Hysteresis:</strong> It should not give any hysteresis during measurement while input signal
                is varied from its low value to high value and vice versa.</li>
            <li><strong>High Output Signal Quality:</strong> The quality of the output signal should be good. That is
                the ratio of signal to the noise is high and the amplitude of the output signal should be enough.</li>
            <li><strong>High Reliability and Stability:</strong> It should give minimum error in measurement for
                temperature variations, vibrations and other various changes in surroundings.</li>
            <li><strong>Good Dynamic Response:</strong> Its output should be faithful to input when taken as a function
                of time. The effect is analysed as the frequency response</li>
        </ul>

        <h3>Transducer Characteristics</h3>
        <h4>Static characteristics of transducers:</h4>
        <ul>
            <li>Sensitivity</li>
            <li>Linearity</li>
            <li>Resolution</li>
            <li>Precision (Accuracy)</li>
            <li>Span and Range</li>
            <li>Threshold</li>
            <li>Drift</li>
            <li>Stability</li>
            <li>Responsiveness</li>
            <li>Repeatability</li>
            <li>Input Impedance and Output Impedance</li>
        </ul>

        <h4>Dynamic characteristics that may be considered in selection of a transducer:</h4>
        <ul>
            <li>Dynamic Error</li>
            <li>Fidelity</li>
            <li>Speed of Response</li>
            <li>Bandwidth</li>
        </ul>

        <h3>Transducers types</h3>

        <h4>1) On Whether an External Power Source is required or not</h4>
        <ul>
            <li><strong>Active Transducer:</strong> Active transducer is a device which converts the given
                non-electrical energy into electrical energy by itself i.e. does not need external source. E.g
                piezoelectric crystal, photo-voltaic cell, tacho-generator, thermocouples, photovoltaic cell</li>
            <li><strong>Passive Transducers:</strong> Passive transducer is a device which converts the given
                non-electrical energy into electrical energy by external force. E.g. capacitive, resistive and inductive
                transducers</li>
        </ul>

        <h4>2) Based on transduction phenomenon</h4>
        <ul>
            <li><strong>Transducers:</strong> Devices which convert a non-electrical quantity into an electrical
                quantity is popularly known as Transducers.</li>
            <li><strong>Inverse Transducers:</strong> Devices which convert an electrical quantity into non-electrical
                quantity is called Inverse Transducer. The name itself implies that the function of Inverse Transducer
                is inverse of the Transducer.</li>
        </ul>

        <h4>3) Based on the physical phenomenon</h4>
        <ul>
            <li><strong>Primary and Secondary Transducer:</strong> Primary Transducer is the detecting or sensing
                element which responds to the change in physical phenomena. Whereas the Secondary Transducer converts
                the output of primary transducer (output in the form of mechanical movement) into electrical output.
            </li>
        </ul>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=Primary+and+Secondary+Transducer"
            alt="Primary and Secondary Transducer Diagram" class="image">
        <p class="image-caption">Figure: Primary and Secondary Transducer - Bourdon tube as primary transducer and LVDT
            as secondary transducer</p>

        <h4>4) Based on Quantity to be Measured/Application</h4>
        <ul>
            <li>Temperature transducers (e.g. a thermocouple)</li>
            <li>Pressure transducers (e.g. a diaphragm)</li>
            <li>Displacement transducers (e.g. LVDT)</li>
            <li>Humidity transducer</li>
        </ul>

        <h4>5) Based on the type of output the classification of transducers are made Analog & Digital Transducer</h4>
        <ul>
            <li><strong>Analog transducer:</strong> Analog Transducers are those whose output is continuous in time
                domain. This essentially means that the electrical output signal will be continuous function of time.
                e.g. LVDT, thermocouple, strain gauge & thermistor</li>
            <li><strong>Digital transducer:</strong> Transducers which convert the input quantity into an electrical
                output signal which is in the form of pulse is called Digital Transducers. Note that, the output is not
                continuous rather it is in the form of pulse which means that it is discrete. e.g. Shaft Encoders,
                Digital Resolvers, Digital Tachometers, Hall Effect Sensors & Limit Switches</li>
        </ul>

        <h4>6) On the Principle of Transduction/ physical principle involved</h4>
        <ul>
            <li>Resistive Transducer</li>
            <li>Inductive Transducer</li>
            <li>Capacitive transducer</li>
            <li>Piezoelectric transducer</li>
            <li>Thermoelectric transducer</li>
            <li>Hall effect transducer</li>
        </ul>
    </section>

    <section id="3.2">
        <h2>3.2 Sensor and its working principle (Resistive, capacitive and piezoelectric), generation of sensor,
            classification of sensor (Analog sensor, digital sensor)</h2>

        <div class="definition">
            <h3>Sensor Definition</h3>
            <p>A sensor is a device that detects and responds to a specific input, such as light, temperature, pressure,
                or motion and converts it into a measurable output.</p>
            <p>A sensor detects and responds to some type of input from the physical environment. Its primary function
                is to detect a physical phenomenon (like temperature, pressure, light, sound, motion, etc.) and produce
                an output signal that is proportional to the quantity being measured.</p>
            <p>The output of a sensor is often not in an electrical form that is immediately usable or measurable by
                standard electronic circuits. For example, a bimetallic strip in a thermometer senses temperature by
                bending, but it doesn't directly produce an electrical signal. A thermistor's resistance changes with
                temperature, which is an electrical change, but it's still a change in resistance, not necessarily a
                standard voltage or current output.</p>
            <p>A transducer often incorporates a sensor as its primary sensing element. The sensor detects the physical
                change, and then the transducer converts that change into an electrical signal. In many practical
                applications, the sensor is the transducer, or a transducer is made up of a sensor plus additional
                circuitry to convert the sensor's output into a standardized electrical signal.</p>
        </div>

        <h3>Difference between sensor and Transducer</h3>
        <p>While the terms are often used interchangeably, there is a subtle difference:</p>
        <ul>
            <li><strong>Sensor:</strong> A device that detects or measures a physical property and records, indicates,
                or otherwise responds to it. It is the part that actually senses the physical phenomenon.</li>
            <li><strong>Transducer:</strong> A device that converts one form of energy to another. It typically includes
                a sensor as the primary sensing element plus additional circuitry to convert the sensor's output into a
                standardized electrical signal.</li>
        </ul>

        <h3>Resistive Transducer</h3>
        <p>Here, the input being measured into change into resistance. The resistive transducer converts the physical
            quantities into variable resistance. The change in resistance is measured by the ac or dc measuring devices.
            The resistive transducer is used for measuring the physical quantities like temperature, displacement,
            vibration etc.</p>

        <h4>Eg: Potentiometer</h4>
        <p>A Linear Resistance potentiometer is 50mm long & is uniformly wound with a wire having a resistance of
            10,000Ω. Under normal conditions, the slider is at the center of the potentiometer. Find the linear
            displacement when the resistances of the potentiometer as measured by Wheatstone bridge for two cases are;
            (a) 3850Ω (b) 7560Ω.</p>

        <div class="definition">
            <p>Ans.</p>
            <p>The resistance at normal position = 10000/2 = 5000Ω</p>
            <p>Resistance of potentiometer per unit length = 10000/50 = 200Ω/mm</p>
            <p>Change of resistance form normal position = 5000-3850 = 1150Ω</p>
            <p>Therefore, Displacement of slider from its normal position = 1150/200 = 5.75mm</p>
            <p>Displacement = (7560-5000)/200 = 12.8mm</p>
            <p>Resolution = minimum × 1/200 = 0.05mm</p>
        </div>

        <h4>Strain gauge</h4>
        <p>A strain gauge is a device used to measure the strain (deformation) of an object. It consists of a thin foil
            pattern that changes resistance when stretched or compressed.</p>

        <h4>Thermistor</h4>
        <p>A thermistor is a type of resistor whose resistance changes significantly with temperature. It is made of
            semiconductor material.</p>

        <h4>Resistance temperature detectors (RTD)</h4>
        <p>RTDs are temperature sensors that measure temperature by correlating the resistance of the RTD element with
            temperature. They are made of pure metals like platinum, nickel, or copper.</p>

        <h3>Capacitive Transducer</h3>
        <p>Here, the input being measured into change into capacitance. In the capacitive transducer, the change in the
            capacitance is used to measure the physical quantities. Capacitive transducers are passive transducers that
            determine the quantities like displacement, pressure and temperature etc. by measuring the variation in the
            capacitance of a capacitor. In these transducers, the capacitance between the plates is varied because of
            the distance between the plates, overlapping of plates, due to dielectric medium change, etc.</p>

        <h4>Example: Capacitive transducer with quartz diaphragms</h4>
        <p>A capacitive transducer uses two quartz diaphragms of area 750mm² separated by a distance of 3.5 mm. a
            pressure of 900 KN/m² when applied to the top diaphragm produces a deflection of 0.6mm. the capacitance is
            370 pF when no pressure applied to the diaphragms. Find the value of capacitance after the application of a
            pressure of 900kN/m².</p>

        <div class="definition">
            <p>Solution:</p>
            <p>Suppose C1 and C are respectively the values of capacitance before and after application of pressure.</p>
            <p>Let d1 and d2 be the values of distances between the diaphragms for the corresponding pressure
                conditions.</p>
            <p>C = εA/d and C2 = εA/d2</p>
            <p>Or, C2/C1 = d1/d2</p>
            <p>.. C2 = C1 × d1/d2</p>
            <p>But d1 = 3.5mm and d2 = 3.5-0.6 = 2.9mm</p>
            <p>.. Value of capacitance after application of pressure C2 = 370 × 3.5/2.9 = 446.5 pF</p>
        </div>

        <h4>Example: Capacitive transducer with concentric cylindrical electrodes</h4>
        <p>A capacitive transducer is made up of two concentric cylindrical electrodes. The outer diameter of the inner
            diameter is 3mm and the dielectric medium is air. The inner diameter of the outer electrode is 3.1 mm.
            Calculate the dielectric stress when a voltage of 100 V is applied across the electrodes. Is it within safe
            limits? The length of electrodes is 20mm. calculate the change in capacitance if the inner electrode is
            moved through a distance of 2mm. The breakdown strength of air is 3kV/mm.</p>

        <div class="definition">
            <p>Solution:</p>
            <p>Length of air gap between the two electrodes, lg = (3.1-3)/2 = 0.05mm.</p>
            <p>.. Dielectric stress = 100/0.05 = 2000V/mm = 2kV/mm.</p>
            <p>The breakdown strength of air is 3kV/mm and hence the dielectric is safe.</p>
            <p>Capacitance of the transducer C = (2εl)/log(D2/D1)</p>
            <p> = (2×8.85×10-12×20×10-3)/(loge(3.1/3))F</p>
            <p> = 33.9 Pf.</p>
            <p>The moving is electrode is shifted through a distance of 2mm.</p>
            <p>l = 20-2 = 18mm</p>
            <p>New value of capacitance = (2×8.85×10-12×18×10-3)/(log(3.1/3))</p>
            <p> = 30.5 pF</p>
            <p>.. Change in value of capacitance ΔC = 33.9-30.5 = 3.4 Pf.</p>
        </div>

        <h3>Piezoelectric Transducer</h3>
        <p>The piezoelectric transducer is an active transducer that converts physical quantity (force or pressure or
            stress) into an electric potential. The piezoelectric transducer consists of a piezoelectric crystal made up
            of piezoelectric material which develops electrical potential across its surface on application mechanical
            stress. They are self-generating transducers.</p>

        <h4>Working Principle of Piezoelectric Transducer</h4>
        <p>When a mechanical force is applied on a piezoelectric crystal, a voltage is produced across its faces. Thus,
            mechanical phenomena is converted into electrical signal.</p>
        <p>Piezoelectric Transducer responds to the mechanical force / deformation and generate voltage. There may be
            various modes of deformation to which these transducers can respond. The modes can be: thickness expansion,
            transverse expansion, thickness shear and face shear.</p>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Piezoelectric+Modes"
            alt="Piezoelectric Modes Diagram" class="image">
        <p class="image-caption">Figure: Different modes of deformation in piezoelectric transducers</p>

        <h4>Expression</h4>
        <p>The polarity of the charge depends on the direction of the applies forces.</p>
        <div class="formula">
            Q = d×F (in coulombs)
        </div>
        <p>Where, F = Force applied in Newtons, d = Charge sensitivity of the crystal.</p>

        <p>The young's modulus E can be defined as the ratio of stress to strain i.e.</p>
        <div class="formula">
            Y = Stress / Strain = (F/A) / (Δt/t)
        </div>
        <p>Where, t = thickness</p>

        <p>The force F causes a change in thickness of crystal,</p>
        <div class="formula">
            F = Y × A × (Δt/t) .....(2)
        </div>

        <p>Using equation (1) and (2)</p>
        <div class="formula">
            Q = d×F = d×Y×A×(Δt/t) .....(3)
        </div>

        <p>Also, The capacitance formed by the electrodes and the piezoelectric material is given by</p>
        <div class="formula">
            Cp = (ε×A)/t .....(4)
        </div>

        <p>Due to this charge at the electrode, an output voltage Eo will be generated which can be given by</p>
        <div class="formula">
            Eo = Q/Cp = (d×Y×A×(Δt/t)) / ((ε×A)/t) = (d×Y×Δt)/ε
        </div>

        <h4>Example: Piezoelectric pressure transducer</h4>
        <p>A piezoelectric pressure transducer having unknown charge sensitivity is connected to a charge amplifier, the
            gain being set to 5 mV/pC. The amplifier output is connected to an ultraviolet chart recorder whose
            sensitivity is set to 25 mm/volt. Determine the sensitivity of the piezoelectric transducer if deflection of
            the chart recorder is 100 mm due to a pressure of 300 N.</p>

        <div class="definition">
            <p>soln</p>
            <p>Overall sensitivity = overall output/overall input</p>
            <p>= deflection of chart recorder/force applied</p>
            <p>= 100/300 = 1/3 mm/N = 0.333 mm/N</p>
            <p>Let, sensitivity of piezoelectric be x.</p>
            <p>Overall sensitivity = piezoelectric transducer sensitivity × amplifier gain × chart recorder sensitivity
            </p>
            <p>0.333 mm/N = x × 5×10-3 (V/pC) × 25 (mm/V)</p>
        </div>

        <h3>Generations of Sensors</h3>
        <h4>First Generation Sensors (Traditional/Basic/Passive Sensors)</h4>
        <p>Period: from mid-20th century to late 1970s</p>
        <p>Characteristics:</p>
        <ul>
            <li>Stand-alone: Operated as individual, discrete components.</li>
            <li>Analog Output: Primarily produced analog electrical signals (voltage, current)</li>
            <li>Large Size</li>
            <li>Limited Functionality: Primarily focused on a single measurement</li>
            <li>No Intelligence: Required external circuitry for signal conditioning, amplification, & conversion.</li>
        </ul>
        <p>Examples: Thermistors, thermocouples, strain gauges, simple photodiodes, LVDTs.</p>

        <h4>Second Generation Sensors (Smart Sensors)</h4>
        <p>Period: From 1980s through the 1990s and early 2000s.</p>
        <p>Characteristics:</p>
        <ul>
            <li>Integration: Began to integrate sensing element with basic electronic circuitry on the same chip or in
                the same package.</li>
            <li>Digital Output (often): incorporate ADC, providing a digital output, making easier to interface with
                microcontrollers.</li>
            <li>Self-Calibration/Compensation: Could perform some level of self-calibration, temperature compensation
                internally.</li>
            <li>Self-Diagnosis: Some had rudimentary self-diagnosis capabilities.</li>
            <li>Miniaturization: Started to become smaller due to advancements in semiconductor manufacturing.</li>
            <li>MEMS Technology Emergence: Micro-Electro-Mechanical System technology, allowing for fabrication of tiny
                mechanical and electrical components on a silicon chip.</li>
        </ul>
        <p>Examples: MEMS accelerometers, MEMS gyroscopes, integrated temperature sensors (e.g., LM35)</p>

        <h4>Third Generation Sensors (Connected Sensors)</h4>
        <p>Period: 2000s to present</p>
        <p>Characteristics:</p>
        <ul>
            <li>Advanced Integration: Highly integrated, multiple sensing elements, microprocessors, memory,
                communication interfaces</li>
            <li>Connectivity: Direct communication with networks (Wi-Fi, Bluetooth, Zigbee, LoRaWAN), enabling
                participation in IoT.</li>
            <li>Distributed Processing: Capable of performing complex data processing, filtering, and analysis at the
                sensor node</li>
            <li>Context Awareness: Can fuse data from multiple sensors to provide higher-level, context-aware
                information.</li>
            <li>Machine Learning/AI at the Edge: Incorporate capabilities for on-board machine learning algorithms</li>
            <li>Low Power Consumption: Optimized for ultra-low power consumption to enable battery-powered,
                long-duration deployments.</li>
            <li>Standardized Interfaces: Utilize standardized communication protocols for easier integration into larger
                systems.</li>
        </ul>
        <p>Examples: Advanced environmental monitoring nodes, smart home sensors, industrial IoT sensors for predictive
            maintenance</p>

        <h4>Fourth Generation Sensors (Autonomous Sensors)</h4>
        <p>Period: Currently emerging and future trends.</p>
        <p>Characteristics:</p>
        <ul>
            <li>Autonomous Operation: Capable of fully autonomous decision-making</li>
            <li>Self-Organization & Swarm Intelligence: Ability to form self-organizing networks, adapt to environmental
                changes</li>
            <li>Predictive Capabilities: Actively predict future states or events based on continuous data analysis and
                learning.</li>
            <li>Energy Harvesting: More reliant on ambient energy harvesting to extend lifespan and reduce maintenance.
            </li>
            <li>Bio-integrated/Bio-mimetic: Sensors seamlessly integrated with biological systems or mimicking
                biological sensory functions.</li>
            <li>Cyber-Physical System Integration: Deep integration into complex cyber-physical systems</li>
            <li>Hyper-connectivity & Global Scale: Operating truly global scale, contributing to massive data lakes for
                AI & big data analytics.</li>
        </ul>
        <p>Examples: Autonomous robots with advanced perception, highly adaptive environmental monitoring networks,
            intelligent medical implants, self-optimizing industrial systems, smart city infrastructure with predictive
            capabilities.</p>

        <h4>Fifth Generation Sensors (Cognitive/Quantum/Bio-Cybernetic Sensors)</h4>
        <p>Period: Emerging from late 2020s onwards.</p>
        <p>Characteristics:</p>
        <ul>
            <li>Cognitive & Self-Aware: Advanced reasoning capabilities, predict complex behaviours</li>
            <li>Quantum Sensing: Exploiting quantum mechanical phenomena (e.g., superposition, entanglement) to achieve
                unprecedented levels of sensitivity, precision, and accuracy</li>
            <li>Deep AI Integration & Continual Learning: Proactive & Adaptive Behaviour</li>
            <li>Seamless Bio-Cybernetic Interfaces: Effortlessly integrate with biological systems or human brain,
                allowing for direct neural interfaces, advanced prosthetics, and truly personalized health monitoring
            </li>
            <li>Ethical & Security by Design: As sensors become more autonomous and pervasive, ethical considerations
                (privacy, bias, control) and robust cyber security measures</li>
            <li>Beyond Conventional Sensing: Moving into sensing entirely new types of phenomena or detecting traces at
                extremely low concentrations</li>
        </ul>
        <p>Examples (Conceptual/Emerging):</p>
        <ul>
            <li>Quantum gravity sensors for highly precise navigation without GPS.</li>
            <li>Bio-integrated sensors that detect disease onset years in advance through complex biomarker analysis.
            </li>
        </ul>

        <h3>Analog and Digital Sensors</h3>

        <h4>Analog Sensors</h4>
        <p>Analog Sensors produce a continuous output signal or voltage which is generally proportional to the quantity
            being measured. Physical quantities such as Temperature, Speed, Pressure, Displacement, Strain etc are all
            analogue quantities as they tend to be continuous in nature.</p>

        <p>For example, the temperature of a liquid can be measured using a thermometer or thermocouple which
            continuously responds to temperature changes as the liquid is heated up or cooled down.</p>

        <p>Analogue sensors tend to produce output signals that are changing smoothly and continuously over time. These
            signals tend to be very small in value from a few micro-volts (μV) to several milli-volts (mV), so some form
            of amplification is required.</p>

        <p>Then circuits which measure analogue signals usually have a slow response and/or low accuracy. Also analogue
            signals can be easily converted into digital type signals for use in micro-controller systems by the use of
            analogue-to-digital converters, or ADC's.</p>

        <h4>Digital Sensors</h4>
        <p>As its name implies, Digital Sensors produce a discrete digital output signals or voltages that are a digital
            representation of the quantity being measured. Digital sensors produce a Binary output signal in the form of
            a logic "1" or a logic "0", ("ON" or "OFF"). This means then that a digital signal only produces discrete
            (non-continuous) values which may be outputted as a single "bit", (serial transmission) or by combining the
            bits to produce a single "byte" output (parallel transmission).</p>

        <p>Compared to analogue signals, digital signals or quantities have very high accuracies and can be both
            measured and sampled at a very high clock speed. The accuracy of the digital signal is proportional to the
            number of bits used to represent the measured quantity. For example, using a processor of 8 bits, will
            produce an accuracy of 0.390% (1 part in 256). While using a processor of 16 bits gives an accuracy of
            0.0015%, (1 part in 65,536) or 260 times more accurate. This accuracy can be maintained as digital
            quantities are manipulated and processed very rapidly, millions of times faster than analogue signals.</p>
    </section>

    <section id="3.3">
        <h2>3.3 Types of sensors (Electrical sensor, chemical sensor, biological sensor, acoustic sensor, optical sensor
            and other motion sensor), characteristic of sensors</h2>

        <h3>Electrical Sensors</h3>
        <p>Electrical sensors detect electrical parameters like voltage, current, resistance, capacitance, and
            inductance. They are commonly used in power systems, electrical engineering applications, and industrial
            control systems.</p>
        <ul>
            <li>Current sensors (e.g., Hall effect sensors)</li>
            <li>Voltage sensors</li>
            <li>Resistance sensors (e.g., strain gauges)</li>
            <li>Capacitance sensors</li>
            <li>Inductance sensors</li>
        </ul>

        <h3>Chemical Sensors</h3>
        <p>Chemical sensors detect the presence or concentration of chemical substances. They are used in environmental
            monitoring, medical diagnostics, and industrial process control.</p>
        <ul>
            <li><strong>Gas sensors:</strong> Detect specific gases (e.g., carbon monoxide, methane, oxygen)</li>
            <li><strong>Breathalyzer:</strong> A type of chemical sensor that measures alcohol content in breath</li>
            <li><strong>pH sensors:</strong> Measure acidity or alkalinity of solutions</li>
            <li><strong>Ion-selective electrodes:</strong> Detect specific ions in solution</li>
        </ul>

        <h3>Biological Sensors</h3>
        <p>Biological sensors, also known as biosensors, detect biological substances and are used in medical
            diagnostics, food safety, and environmental monitoring.</p>
        <ul>
            <li><strong>Enzyme-based sensors:</strong> Use enzymes to catalyze specific reactions</li>
            <li><strong>Immuno-sensors:</strong> Use antibodies to detect specific antigens</li>
            <li><strong>DNA sensors:</strong> Detect specific DNA sequences</li>
            <li><strong>Cell-based sensors:</strong> Use living cells to detect toxins or other substances</li>
        </ul>

        <h3>Acoustic Sensors</h3>
        <p>Acoustic sensors detect sound waves and vibrations. They are used in noise monitoring, medical imaging, and
            structural health monitoring.</p>
        <ul>
            <li><strong>Microphones:</strong> Convert sound waves into electrical signals</li>
            <li><strong>Ultrasonic sensors:</strong> Use high-frequency sound waves for distance measurement</li>
            <li><strong>Accelerometers:</strong> Measure vibration and acceleration</li>
            <li><strong>Hydrophones:</strong> Detect underwater sound waves</li>
        </ul>

        <h3>Optical Sensors</h3>
        <p>Optical sensors detect light and are used in imaging, lighting control, and optical communications.</p>
        <ul>
            <li><strong>Photodiodes:</strong> Convert light into electrical current</li>
            <li><strong>Phototransistors:</strong> Light-sensitive transistors</li>
            <li><strong>CCD/CMOS sensors:</strong> Used in digital cameras and imaging systems</li>
            <li><strong>Fiber optic sensors:</strong> Use light in optical fibers to measure physical parameters</li>
            <li><strong>Laser sensors:</strong> Use laser beams for distance measurement and object detection</li>
        </ul>

        <h3>Motion Sensors</h3>
        <p>Motion sensors detect movement and are used in security systems, robotics, and automation.</p>
        <ul>
            <li><strong>Ultrasonic sensors:</strong> Use sound waves to detect motion</li>
            <li><strong>PIR (Passive Infrared) sensors:</strong> Detect infrared radiation emitted by moving objects
            </li>
            <li><strong>Video motion sensors:</strong> Analyze video feeds for movement</li>
            <li><strong>Vibration sensors:</strong> Detect mechanical vibrations</li>
            <li><strong>Accelerometers:</strong> Measure acceleration and movement</li>
            <li><strong>Gyroscope sensors:</strong> Measure rotational motion</li>
        </ul>

        <h3>Characteristics of Sensors</h3>
        <h4>Static characteristics of sensors:</h4>
        <ul>
            <li>Sensitivity</li>
            <li>Linearity</li>
            <li>Resolution</li>
            <li>Precision (Accuracy)</li>
            <li>Span and Range</li>
            <li>Threshold</li>
            <li>Drift</li>
            <li>Stability</li>
            <li>Responsiveness</li>
            <li>Repeatability</li>
            <li>Input Impedance and Output Impedance</li>
        </ul>

        <h4>Dynamic characteristics of sensors:</h4>
        <ul>
            <li>Dynamic Error</li>
            <li>Fidelity</li>
            <li>Speed of Response</li>
            <li>Bandwidth</li>
        </ul>
    </section>

    <section id="3.4">
        <h2>3.4 Actuator, classification of actuators (Hydraulic, mechanical, electric), characteristic of actuator</h2>

        <div class="definition">
            <h3>Actuator Definition</h3>
            <p>Actuators are the device used for converting hydraulic, pneumatic, and electrical energy into mechanical
                energy. The mechanical energy used to get the work done.</p>
            <p>It is used for generating movement or a change in environment. For example, a fan is used to reduce
                temperature. A servo motor is used for changing position etc.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=Actuator+System" alt="Actuator System Diagram"
            class="image">
        <p class="image-caption">Figure: Actuator system showing energy input, signal conditioning, control signal, and
            environmental change</p>

        <h3>Difference between Sensor and Actuator</h3>
        <ul>
            <li><strong>Sensor:</strong> Detects physical phenomena and converts it into an electrical signal (input
                device)</li>
            <li><strong>Actuator:</strong> Converts electrical signal into mechanical movement or action (output device)
            </li>
        </ul>

        <h3>Advantages of Actuators</h3>
        <ul>
            <li>Assist in providing a fine level of control of mechanical installations.</li>
            <li>Enable automation and therefore minimize the need for intervention of human participants.</li>
            <li>Available in a range of variations and suitability in multiple operations ranging from everyday uses to
                industrial use.</li>
        </ul>

        <h3>Disadvantages of Actuators</h3>
        <ul>
            <li>May consume much power in its operation particularly when used in places that involve much power such as
                in large industries.</li>
            <li>May be large and costly to both install and maintain.</li>
            <li>With time the component is liable to mechanical wear and tear.</li>
        </ul>

        <h3>Types of Actuators</h3>

        <h4>1) Hydraulic Actuators</h4>
        <p>Hydraulic actuators transform the hydraulic energy stored in a reservoir into mechanical energy by means of
            suitable pumps. The mechanical motion is converted to rotary, linear, or oscillatory motion, according to
            the need of the IoT device. Ex- construction equipment uses hydraulic actuators because hydraulic actuators
            can generate a large amount of force.</p>
        <p>Hydraulic actuators are also fluid power device for industrial robots which utilize high-pressure fluid such
            as oil to transmit forces to the point of application desired.</p>

        <h5>Advantages of hydraulic actuators:</h5>
        <ul>
            <li>It has the advantage of generating extremely large force from a very compact actuator.</li>
            <li>It can also provide precise control at low speeds</li>
            <li>Robust and self-lubricating.</li>
            <li>Due to the presence of an accumulator that acts as a storage device the system can meet sudden demand in
                power.</li>
            <li>No mechanical linkages are required.</li>
            <li>High efficiency and high power to size ratio.</li>
        </ul>

        <h5>Disadvantages of hydraulic actuators:</h5>
        <ul>
            <li>The hydraulic system is required for a large infrastructure is high-pressure pump, tank, distribution
                lines.</li>
            <li>Leakage can occur causing a loss in performance.</li>
            <li>High maintenance.</li>
            <li>Not suitable for a clean environment.</li>
        </ul>

        <h4>2) Pneumatic Actuators</h4>
        <p>Pneumatic actuators utilize pneumatic energy provided by a compressor and transforms it into mechanical
            energy by means of a piston or turbines. Example- Used in robotics, use sensors that work like human fingers
            by using compressed air.</p>
        <p>Pressurized air is used to transmit and control power.</p>
        <p>Pneumatic actuators are devices that cause things to move by taking advantage of potential energy.</p>

        <h5>Advantages:</h5>
        <ul>
            <li>They are a low-cost option and are used at extreme temperatures where using air is a safer option than
                chemicals.</li>
            <li>They need low maintenance, are durable, and have a long operational life.</li>
            <li>It is very quick in starting and stopping the motion.</li>
        </ul>

        <h5>Disadvantages:</h5>
        <ul>
            <li>Loss of pressure can make it less efficient.</li>
            <li>The air compressor should be running continuously.</li>
            <li>Air can be polluted, and it needs maintenance.</li>
        </ul>

        <h4>3) Electric Actuators</h4>
        <p>An actuator obtaining electrical energy from the mechanical system is called electric actuators. Electric
            actuators are generally referred to as those where an electric motor drives the robot links through some
            mechanical transmission i.e. gears.</p>

        <p>Electrical actuators comprise the following:</p>
        <ul>
            <li><strong>Drive system:</strong> DC motor, AC motor, Stepper motor</li>
            <li><strong>Switching Device:</strong>
                <ul>
                    <li>Mechanical switch: Solenoids, Relays</li>
                    <li>Solid-state switch: Diodes, Thyristor, Transistors</li>
                </ul>
            </li>
        </ul>

        <h5>Advantages:</h5>
        <ul>
            <li>It has many applications in various industries as it can automate industrial valves.</li>
            <li>It produces less noise and is safe to use since there are no fluid leakages.</li>
            <li>It can be re-programmed and it provides the highest control precision positioning.</li>
        </ul>

        <h5>Disadvantages:</h5>
        <ul>
            <li>It is expensive.</li>
            <li>It depends a lot on environmental conditions.</li>
        </ul>

        <h4>4) Mechanical Actuators</h4>
        <p>A mechanical actuator executes movement by converting rotary motion into linear motion. It involves pulleys,
            chains, gears, rails, and other devices to operate. Example - A crankshaft.</p>
        <p>Soft Actuators, Shape Memory Polymers, Light Activated Polymers</p>

        <h3>Characteristics of Actuators</h3>
        <table class="comparison-table">
            <thead>
                <tr>
                    <th>Characteristic</th>
                    <th>Description</th>
                    <th>Importance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Accuracy</td>
                    <td>Ability of the actuator to reach the exact commanded position, speed, or force.</td>
                    <td>Important in applications like robotics or CNC machines where precision is critical.</td>
                </tr>
                <tr>
                    <td>Repeatability</td>
                    <td>Ability to return to the same position or output when given the same command repeatedly.</td>
                    <td>A key factor in automated and repetitive motion systems.</td>
                </tr>
                <tr>
                    <td>Speed (Response Time)</td>
                    <td>Time taken by the actuator to respond to an input signal.</td>
                    <td>Fast response is crucial in dynamic systems like drones or automotive systems.</td>
                </tr>
                <tr>
                    <td>Force or Torque Output</td>
                    <td>Mechanical power generated by the actuator: Force for linear actuators (e.g., pistons). Torque
                        for rotary actuators (e.g., motors).</td>
                    <td>Determines the load the actuator can move or control.</td>
                </tr>
                <tr>
                    <td>Range of Motion</td>
                    <td>The maximum linear distance or angular displacement the actuator can achieve.</td>
                    <td>Important for sizing the actuator for specific tasks.</td>
                </tr>
                <tr>
                    <td>Control Capability</td>
                    <td>Refers to how easily the actuator can be controlled (e.g., via PWM, voltage, or digital input).
                    </td>
                    <td>Some actuators support open-loop control (no feedback), while others support closed-loop control
                        (with sensors for feedback).</td>
                </tr>
                <tr>
                    <td>Power Consumption</td>
                    <td>Amount of input energy (electrical, hydraulic, or pneumatic) the actuator use</td>
                    <td>Impacts energy efficiency and system design.</td>
                </tr>
                <tr>
                    <td>Efficiency</td>
                    <td>Ratio of useful mechanical output to total energy input.</td>
                    <td>Higher efficiency means less energy is wasted as heat or friction.</td>
                </tr>
                <tr>
                    <td>Reliability and Durability</td>
                    <td>Ability to perform over time without failure.</td>
                    <td>Important in industrial automation, aerospace, and medical applications.</td>
                </tr>
                <tr>
                    <td>Environmental Tolerance</td>
                    <td>Performance under various environmental conditions: Temperature, Humidity, Dust or corrosive
                        environments</td>
                    <td>Ensures consistent operation in different working conditions.</td>
                </tr>
            </tbody>
        </table>
    </section>
</div>





<!-- <==========================chapter 4 =========================> -->


<div id="chapter_4">
    <h1>4. Interfacing of Instrumentation System (14 hours)</h1>

    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#4.1">4.1 Microprocessor and microcontroller and their selection criteria</a></li>
            <li><a href="#4.2">4.2 The PPI 8255 and interfacing of peripherals (LED, 7 segment, dip switches, 8/10-bit
                    ADC, 8/10-bit DAC using mode 0 and mode 1) with 8085 microprocessor</a></li>
            <li><a href="#4.3">4.3 Microcontrollers (Atmega328, STM32): Architecture, pin configuration, and
                    connectivity</a></li>
            <li><a href="#4.4">4.4 Sensor/Actuator interfacing with Atmega328p (Arduino): Analog and digital sensors,
                    implementation of communication protocols, interrupt based</a></li>
        </ul>
    </div>

    <section id="4.1">
        <h2>4.1 Microprocessor and microcontroller and their selection criteria</h2>

        <div class="definition">
            <h3>What is Instrumentation?</h3>
            <p>Instrumentation and control engineering focuses on the design, configuration and maintenance of
                industrial automation systems that control and monitor machines and processes within industries. This
                branch of engineering ensures that processes operate efficiently, safely and cost-effectively, using a
                variety of measuring instruments and control systems. The core objective in this field is to maintain
                stability and improve the performance of the overall system through precise measurement and control.
                Instrumentation and Control Engineering is integral to the effective operation of processes across
                various industries. It encompasses systems and instruments designed for measuring and controlling
                physical quantities to ensure optimal performance and safety. A background in electrical engineering is
                common among instrumentation engineers, highlighting the interdisciplinary nature of the field.</p>
        </div>

        <h3>Communication Channels</h3>

        <h4>1) Simplex</h4>
        <p>A simplex communication channel only sends information in one direction. For example, a radio station usually
            sends signals to the audience but never receives signals from them, thus a radio station is a simplex
            channel.</p>

        <h4>2) Half duplex</h4>
        <p>In half duplex mode, data can be transmitted in both directions on a signal carrier except not at the same
            time. At a certain point, it is actually a simplex channel whose transmission direction can be switched.
            Walkie-talkie is a typical half duplex device.</p>

        <h4>3) Full duplex</h4>
        <p>In full duplex mode, data can be transmitted in both directions simultaneously. This allows for more
            efficient communication as data can be sent and received at the same time. Telephone conversation is a
            typical example of full duplex communication.</p>

        <h3>Parallel Communication</h3>
        <p>In data transmission, parallel communication is a method of conveying multiple binary digits(bits)
            simultaneously. It contrasts with serial communication, which conveys only a single bit at a time; this
            distinction is one way of characterizing a communications link. A parallel port is a type of interface found
            on computers for connecting peripherals. The name refers to the way the data is sent; parallel ports send
            multiple bits of data at once. The device which can handle data at higher speed cannot support with serial
            interface. N bits of data are handled simultaneously by the bus and the links to the device directly.
            Achieves faster communication but becomes expensive due to need of multiple wires.</p>

        <h3>Methods of parallel data transfer</h3>

        <h4>i) Simple I/O</h4>
        <p>When you need to get digital data from simple switch, such as thermostat, into microprocessor, all you have
            to do is connect the switch to an I/O port line and read the port. Likewise, when you need to output data to
            simple display device, such as LED, all you have to do is connect the input of the LED buffer on an output
            port pin and output the logical level required to turn on the light.</p>

        <h4>ii) Simple Strobe I/O</h4>
        <p>In many applications, valid data is present on an external device only at a certain time, so it must be read
            in at that time. E.g. the ASCII-encoded keyboard. When a key is pressed, circuitry on the keyboard sends out
            the ASCII code for the pressed key on eight parallel data lines, and then sends out a strobe signal on
            another line to indicate that valid data is present on the eight data lines.</p>
        <p>In this technique, microprocessors need to wait until the device is ready for the operation and also known as
            simple wait I/O.</p>

        <h4>iii) Single Handshake</h4>
        <p>The peripheral outputs some parallel data and sends an STB signal to the MP. The MP detects the asserted STB
            signal on a polled or interrupts basis and reads in the bytes of data. Then, the MP sends ACK(acknowledge)
            signal to the peripheral to indicate that the data has been read and that the peripheral can send next byte
            of data. The point of this method is that the sending device or system is designed so that it does not send
            the next byte until the receiving device or system indicates with an ACK signal that it is ready to receive
            the next byte.</p>

        <h4>iv) Double Handshake</h4>
        <p>For data transfer where even more coordination is required between the sending system and the receiving
            system, a double handshake is used. The sending(peripheral) device asserts its STB line low to ask the
            receiving device whether it is ready or not for data reception. The receiving system raises its ACK line
            high to indicate that it is ready. The peripheral device then sends the byte of data and raises its STB line
            high to assure that the valid data is available for the receiving device (MP). When MP reads the data, it
            drops its ACK line low to indicate that it has received the data and requests the sending system to send
            next byte of data.</p>
    </section>

    <section id="4.2">
        <h2>4.2 The PPI 8255 and interfacing of peripherals (LED, 7 segment, dip switches, 8/10-bit ADC, 8/10-bit DAC
            using mode 0 and mode 1) with 8085 microprocessor</h2>

        <h3>8255A Programmable Peripheral Interface</h3>
        <p>The 8255A is an LSI peripheral designed to permit easy implementation of parallel I/O in the 8085 and
            8086-microcomputer system. It consists of three 8-bit bidirectional I/O ports(24I/O lines) which can be
            configured as per the requirement. It has 24 I/O pins that can be grouped primarily in two 8-bit parallel
            ports: A and B, with the remaining bits as port C. The 8-bits of port C can be used as individual bits or be
            grouped in two 4-bits ports: C upper(Cu) and C lower(Cl). The functions of these ports are defined by
            writing a control word in the control register.</p>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=8255A+Pin+Diagram" alt="8255A Pin Diagram"
            class="image">
        <p class="image-caption">Figure: 8255A Pin Diagram</p>

        <h3>8255A Components</h3>
        <ul>
            <li><strong>Data bus(D0-D7):</strong> These are 8-bit bi-directional buses, connected to 8085 data bus for
                transferring data.</li>
            <li><strong>CS:</strong> This is Active Low signal. When it is low, then data is transfer from 8085.</li>
            <li><strong>Read:</strong> This is Active Low signal, when it is Low read operation will be start.</li>
            <li><strong>Write:</strong> This is Active Low signal, when it is Low Write operation will be start.</li>
            <li><strong>RESET:</strong> This is used to reset the device. That means clear control registers.</li>
            <li><strong>PA0-PA7:</strong> It is the 8-bit bi-directional I/O pins used to send the data to peripheral or
                to receive the data from peripheral.</li>
            <li><strong>PB0-PB7:</strong> Similar to PA</li>
            <li><strong>PC0-PC7:</strong> This is also 8-bit bidirectional I/O pins. These lines are divided into two
                groups: PC0 to PC3(Lower Groups) and PC4 to PC7(Higher groups). These two groups working in separately
                using 4 data's.</li>
        </ul>

        <h3>Port Selection</h3>
        <p>To communicate with peripherals through 8255 three steps are necessary:</p>
        <ol>
            <li>Determine the addresses of Port A, B, C and Control register according to Chip Select Logic and the
                Address lines A0 and A1.</li>
            <li>Write a control word in control register.</li>
            <li>Write I/O instructions to communicate with peripherals through port A, B, C.</li>
        </ol>

        <h3>Common Applications of 8255</h3>
        <ul>
            <li>Traffic light control</li>
            <li>Generating square wave</li>
            <li>Interfacing with DC motors and stepper motors</li>
        </ul>

        <h3>BIT Set Reset Mode (BSR Mode)</h3>
        <p>BSR mode is concerned only with eight bits of port C, which can be set or reset by writing an appropriate
            control word in the control register. A control word with bit D7=0 is recognized as a control word and it
            does not alter any previously transmitted control word with bit D7=1; thus the I/O operations of ports A and
            B are not affected by a BSR control word. In the BSR mode individual bits of port C can be used for
            applications such as On/Off switch.</p>

        <h3>Control Word Format for BSR Mode</h3>
        <table>
            <thead>
                <tr>
                    <th>D7</th>
                    <th>D6</th>
                    <th>D5</th>
                    <th>D4</th>
                    <th>D3</th>
                    <th>D2</th>
                    <th>D1</th>
                    <th>D0</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>Don't care</td>
                    <td>Don't care</td>
                    <td>Don't care</td>
                    <td>Bit select</td>
                    <td>Bit select</td>
                    <td>Bit select</td>
                    <td>BIT SET/RESET (1=SET 0=RESET)</td>
                </tr>
            </tbody>
        </table>

        <h3>Input/Output Mode (I/O Mode)</h3>
        <p>This mode is selected when the most significant bit(D7) in the control register is 1.</p>

        <h4>Mode 0 – Simple or basic I/O mode:</h4>
        <p>This functional configuration provides simple input and output operation for each of the three ports. No
            'handshaking" is required; data is simply written to or read from a specified port.</p>
        <ul>
            <li>Two 8-bit ports and two 4-bit port</li>
            <li>Any port can be input or output</li>
            <li>Outputs are latched</li>
            <li>Inputs are not latched</li>
            <li>16 different input/output configurations are possible in this mode</li>
        </ul>

        <h4>Mode 1 – Handshake or strobbed I/O:</h4>
        <p>The functional configuration provides a means for transferring I/O data to or from a specified port in
            conjunction with strobes or handshaking signals. In mode 1, port A and port B use the lines of port C to
            generate or accept these handshaking signals.</p>
        <ul>
            <li>Two groups(Group A and Group B)</li>
            <li>Each group contains one 8-bit data port and one 4-bit control/data port</li>
            <li>The 8-bit data port can be either input or output. Both inputs and outputs are latched</li>
            <li>The 4-bit port is used for control and status of the 8-bit data port</li>
            <li>Each port uses three lines from port C as handshake signals. The remaining two lines of port C can be
                used for simple I/O functions</li>
        </ul>

        <h4>Mode 2 – Bidirectional I/O:</h4>
        <p>The functional configuration provides a means for communicating with a peripheral device or a structure on a
            single 8-bit bus for both transmitting and receiving data(bidirectional bus I/O). "Handshaking Signals" are
            provided to maintain proper bus flow discipline in a similar manner to Mode 1. Interrupt generation and
            enable/disable functions are also available.</p>
        <ul>
            <li>Used in Group A only</li>
            <li>One 8-bit bidirectional bus port(Port A) and a 5-bit control port(Port C)</li>
            <li>Both inputs and outputs are latched</li>
            <li>Three I/O lines are available at port C.( PC2 – PC0)</li>
            <li>The 5-bit control port C(PC3-PC7) is used for generating/ accepting handshake signals for the 8-bit data
                transfer on port A.</li>
        </ul>

        <h3>Control Word Format for I/O Mode</h3>
        <table>
            <thead>
                <tr>
                    <th colspan="8">Group A Control</th>
                    <th colspan="8">Group B Control</th>
                </tr>
                <tr>
                    <th>D7</th>
                    <th>D6</th>
                    <th>D5</th>
                    <th>D4</th>
                    <th>D3</th>
                    <th>D2</th>
                    <th>D1</th>
                    <th>D0</th>
                    <th>D7</th>
                    <th>D6</th>
                    <th>D5</th>
                    <th>D4</th>
                    <th>D3</th>
                    <th>D2</th>
                    <th>D1</th>
                    <th>D0</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td colspan="5">Mode selection for Group A</td>
                    <td colspan="2">Port A direction</td>
                    <td colspan="8">Group B control (only for Mode 0 or Mode 1)</td>
                </tr>
            </tbody>
        </table>

        <h3>Programming in Mode 0 (Basic I/O Mode)</h3>
        <p>The ports A, B and C can be configured as simple input or output ports by writing the appropriate control
            word in the control word register. In the control word, D7 is set to '1' (to define a mode set operation)
            and D6, D5, and D2 are all set to '0' configure all the ports in Mode 0 operation. The status of bits D4,
            D3, D1 and D0 then determine whether the corresponding ports are to be configured as Input or Output.</p>

        <div class="code-block">
            <span class="code-keyword">MVI</span> A, 90H ; Load ACC with the control word<br>
            <span class="code-keyword">OUT</span> 63H ; Write the control word in control register and initialize the
            ports<br>
            <span class="code-keyword">IN</span> 60H ; Reads switches at port A<br>
            <span class="code-keyword">OUT</span> 61H ; Display the reading at port B<br>
            <span class="code-keyword">RET</span>
        </div>

        <h3>Programming in BSR Mode</h3>
        <p>Any of the eight bits of port C can be set or reset using a single output instruction. This feature reduces
            software requirements in control-based applications. When Port C is being used as Status/ Control for Port A
            or B, these bits can be set or reset by using Bit Set/Reset. Word in the control register when D7= 0 is
            recognized as BSR control word and does not affect the I/O operations of Port A and B.</p>

        <div class="code-block">
            <span class="code-keyword">MVI</span> A, 80H<br>
            <span class="code-keyword">OUT</span> 63H<br>
            <span class="code-keyword">MVI</span> A, 0FH<br>
            <span class="code-keyword">LOOP:</span><br>
            <span class="code-keyword">OUT</span> 63H<br>
            <span class="code-keyword">CALL</span> DELAY<br>
            <span class="code-keyword">DCR</span> A<br>
            <span class="code-keyword">JNZ</span> LOOP<br>
            <span class="code-keyword">HLT</span>
        </div>

        <h3>Programming in Mode 1 (Strobe I/O Mode)</h3>
        <p>In Mode 1, handshake signals are exchanged between the MPU and peripherals prior to data transfer. Two
            ports(A and B) function as 8-bit I/O ports. They can be configured either as input or output ports. Each
            port uses three lines from port C as handshake signals The remaining two lines of port C can be used for
            simple I/O functions.</p>

        <h4>Mode 1 Input</h4>
        <p>When Port A is to be programmed as an input port, PC3, PC4, and PC5 are used for control, PC6 and PC7 can be
            Input or Output, as programmed by bit D3(Cupper) of the control word. The peripheral first loads data into
            Port A by making the STBA input low. This latches the data placed by the peripheral on the common data bus
            into Port A. Port A acknowledges reception of data by making IBFA(Input Buffer Full) high. IBFA is set when
            the STBA input is made low.</p>

        <h4>Mode 1 Output</h4>
        <p>When Port A is programmed as an output port, PC3, PC6, PC7 are used for control and PC4 and PC5 can be Input
            or Output, as programmed by bit D3(Cupper) of the control word. The OBFA output(Output Buffer Full) goes low
            on the rising edge of the WR signal (when the CPU writes data into the 8255). The OBFA output from 8255 can
            be used as a strobe input to the peripheral to latch the contents of Port A. The peripheral responds to the
            receipt of data by making the ACKA input of the 8255 low, thus acknowledging that it has received the data
            sent out by the CPU through Port A.</p>
    </section>

    <section id="4.3">
        <h2>4.3 Microcontrollers (Atmega328, STM32): Architecture, pin configuration, and connectivity</h2>

        <h3>Microcontroller Architecture</h3>
        <p>Microcontrollers are compact integrated circuits designed to govern a specific operation in an embedded
            system. They typically contain a processor, memory, and input/output peripherals on a single chip.
            Microcontrollers are used in automatically controlled products and devices, such as automobile engine
            control systems, implantable medical devices, remote controls, office machines, appliances, power tools,
            toys and other embedded systems.</p>

        <div class="microcontroller">
            <div class="microcontroller-card">
                <h3>ATMEL ATMEGA328P</h3>
                <p>The Atmel ATmega328P is a low-power CMOS 8-bit microcontroller based on the AVR enhanced RISC
                    architecture. By executing powerful instructions in a single clock cycle, the ATmega328P achieves
                    throughputs approaching 1MIPS per MHz allowing the system designer to optimize power consumption
                    versus processing speed. Basically, ATmega328P uses the Harvard architecture where the program code
                    and program data have separate memory. It consists of two memories such as program memory and data
                    memory. Wherein the data is stored in data memory and the code is stored in the flash program
                    memory. The Atmega328 microcontroller has 32kb of flash memory, 2kb of SRAM 1kb of EPROM and
                    operates with a 16MHz clock speed.</p>
                <p><strong>Key Features:</strong></p>
                <ul>
                    <li>Advanced RISC architecture with 131 powerful instructions</li>
                    <li>32 × 8 general purpose working registers</li>
                    <li>Up to 16 MIPS throughput at 16 MHz</li>
                    <li>32K bytes flash program memory</li>
                    <li>1K bytes EEPROM</li>
                    <li>2K bytes internal SRAM</li>
                    <li>Write/erase cycles: 10,000 flash/100,000 EEPROM</li>
                    <li>Two 8-bit timer/counters</li>
                    <li>One 16-bit timer/counter</li>
                    <li>Six PWM channels</li>
                    <li>6-channel 10-bit ADC in PDIP package</li>
                    <li>Programmable serial USART</li>
                    <li>Primary/secondary SPI serial interface</li>
                    <li>Byte-oriented 2-wire serial interface (Philips I2C compatible)</li>
                    <li>Programmable watchdog timer with separate on-chip oscillator</li>
                    <li>On-chip analog comparator</li>
                    <li>Interrupt and wake-up on pin change</li>
                    <li>Power-on reset and programmable brown-out detection</li>
                    <li>Internal calibrated oscillator</li>
                    <li>External and internal interrupt sources</li>
                    <li>Six sleep modes</li>
                    <li>Operating voltage 2.7 V to 5.5 V for ATmega328P</li>
                </ul>
            </div>

            <div class="microcontroller-card">
                <h3>STM32</h3>
                <p>STM32 is a family of 32-bit microcontrollers from STMicroelectronics, based on the ARM Cortex-M
                    processor. These microcontrollers are widely used in various applications, ranging from wearables to
                    industrial machines.</p>
                <p><strong>ARM Cortex-M Core:</strong></p>
                <ul>
                    <li>STM32 microcontrollers are built around different ARM Cortex-M processor cores, including
                        Cortex-M0, Cortex-M0+, Cortex-M3, Cortex-M4, Cortex-M7, Cortex-M33, and Cortex-M55.</li>
                    <li>The Cortex-M4 processor is built on a high-performance processor core, with a 3-stage pipeline
                        Harvard architecture, making it ideal for demanding embedded applications.</li>
                    <li>The processor delivers exceptional power efficiency through an efficient instruction set and
                        extensively optimized design, providing high-end processing hardware including IEEE754-compliant
                        single-precision floating-point computation, a range of single-cycle and SIMD multiplication and
                        multiply-with-accumulate capabilities, saturating arithmetic and dedicated hardware division.
                    </li>
                </ul>

                <p><strong>Cortex-M4 core peripherals:</strong></p>
                <ul>
                    <li>Nested vectored interrupt controller (NVIC)</li>
                    <li>System control block (SCB)</li>
                    <li>System timer (SysTick)</li>
                    <li>Memory protection unit (MPU)</li>
                    <li>Floating-point unit (FPU)</li>
                </ul>
            </div>
        </div>

        <h3>ATMEGA328P Architecture</h3>
        <p>The AVR® core combines a rich instruction set with 32 general purpose working registers. All the 32 registers
            are directly connected to the arithmetic logic unit(ALU), allowing two independent registers to be accessed
            in one single instruction executed in one clock cycle. The resulting architecture is more code efficient
            while achieving throughputs up to ten times faster than conventional CISC microcontrollers.</p>

        <h4>Machine Instructions</h4>
        <p>The AVR instruction set for 8-bit microcontrollers, which is used for the ATmega328P microcontroller, has
            approximately 130 unique instructions which means that 8 bits are needed in each 16-bit instruction to
            specify which operation will occur. This leaves only 8 bits for the remaining operand(s). There are 32
            general purpose registers that can be used to temporarily store data and many instructions exist that
            require the contents of two of these registers. In that case, 8 bits is insufficient to properly address
            both of these registers(each of which requires 5 bits to address). To get around this limitation, the AVR
            instruction set uses the concept of variable length instructions, or expanding opcodes. Instructions that
            have many or lengthy operands are designed to have short opcodes while instructions with few or no operands
            are designed to have long opcodes. Most AVR instructions are 16 bits, with a few 32-bit instructions used as
            needed.</p>

        <h4>Instruction Decoder</h4>
        <p>The instruction decoder translates the instruction into appropriate control and address signals. This can
            take place using combinational logic gates or by using a programmed ROM. As an example, the ADD(add without
            carry) instruction requires two general purpose(GP) registers as operands(one of which is also designated as
            the destination register where the result will be saved). The instruction decoder will address these two GP
            registers and route their contents to adder hardware in the ALU, then route the solution back to the
            destination register.</p>

        <h4>Arithmetic and Logic Unit(ALU)</h4>
        <p>The ALU contains all of the hardware that is necessary to perform arithmetic and logic operations. While most
            ALU hardware designs are proprietary, taking a look at the instruction set gives a good idea of the type of
            hardware that must be included within the ALU. For example, the AVR ALU must contain, at the very least, an
            adder, logic gates such as AND, OR, XOR, and NOT, and other similar hardware.</p>

        <h4>Registers</h4>
        <p>Registers are ubiquitous in microcontroller design. General purpose registers contain data that we can
            immediately operate on, and allows us to store data with easy access to the ALU before saving results back
            to memory. Memory address registers or pointer registers tell the microcontroller where to look in program
            data for the next instruction to perform. Status registers(SREG on the ATmega328P) store information related
            to the most recent operation that has been executed on the microcontroller. I/O registers and extended I/O
            registers(sometimes called peripheral registers) store information regarding the operation of the I/O pins
            and their peripheral features. In addition, there is a stack pointer register that is used to hold memory
            addresses in short term storage.</p>

        <h4>Program Counter(PC)</h4>
        <p>The program counter contains the address(in memory) of the first byte of the instruction to be executed. It
            is incremented after every instruction. When the power is switched on, the program counter is forced to 0
            and the instruction fetch starts from address 0(reset= 0 forces the flip-flops to a value of 0).</p>

        <h4>Memory</h4>
        <p>The ATmega328P contains both flash and EEPROM storage for non-volatile memory. Flash is where program data
            and an optional bootloader are stored. The EEPROM on the ATmega328P is used for data storage that can be
            re-written but is not intended to change frequently. (For example, a passcode for a garage door opener can
            be reprogrammed, but mostly remains the same, and must be saved during power outages.) A fuse bit on the
            ATmega328P can be configured to allow the EEPROM storage to remain programmed in between chip erases,
            allowing additional functionality for the microcontroller.</p>

        <h4>Instruction Execution Process and Timing</h4>
        <p>This is the process by which the microcontroller executes each instruction. In this fashion, the CPU is
            nothing more than a very complicated finite state machine. The state diagram is shown in Fig State diagram
            of microcontroller instruction execution process:</p>
        <ol>
            <li>The next instruction in memory is read, indicated by the address is stored in the program counter</li>
            <li>The instruction is decoded into a set of commands or signals for each of the components in the processor
            </li>
            <li>The program counter increments so that it points to the next location in memory</li>
            <li>Data is loaded from memory(or input device(s)) into register(s), the location of this data is usually
                stored in the instruction code as an operand</li>
            <li>If the ALU is required to execute the operation, the processor instructs the hardware to carry this out
            </li>
            <li>The result is written back to a memory location, to a register, or even to an output device</li>
            <li>Jump back to step 1.</li>
        </ol>

        <h3>Pinout Diagrams</h3>
        <p>The ATmega328P is available in four different packages. The 28-pin plastic dual in-line package(PDIP) is used
            in breadboarded designs. The pinout diagram of the ATmega328 P's PDIP integrated circuit package is shown in
            Figure.</p>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=ATMEGA328P+Pinout+Diagram"
            alt="ATMEGA328P Pinout Diagram" class="image">
        <p class="image-caption">Figure: ATMEGA328P Pinout Diagram</p>

        <h3>STM32 Microcontrollers</h3>
        <p>STM32 is a family of 32-bit microcontrollers from STMicroelectronics, based on the ARM Cortex-M processor.
            These microcontrollers are widely used in various applications, ranging from wearables to industrial
            machines.</p>

        <h4>Cortex-M4 Core</h4>
        <p>The Cortex-M4 processor is built on a high-performance processor core, with a 3-stage pipeline Harvard
            architecture, making it ideal for demanding embedded applications. The processor delivers exceptional power
            efficiency through an efficient instruction set and extensively optimized design, providing high-end
            processing hardware including IEEE754-compliant single-precision floating-point computation, a range of
            single-cycle and SIMD multiplication and multiply-with-accumulate capabilities, saturating arithmetic and
            dedicated hardware division.</p>

        <h4>Cortex-M4 Peripherals</h4>
        <ul>
            <li><strong>Nested vectored interrupt controller (NVIC):</strong> The nested vectored interrupt
                controller(NVIC) is an embedded interrupt controller that supports low latency interrupt processing.
            </li>
            <li><strong>System control block (SCB):</strong> The system control block(SCB) is the programmer's model
                interface to the processor. It provides system implementation information and system control, including
                configuration, control, and reporting of system exceptions.</li>
            <li><strong>System timer (SysTick):</strong> The system timer(SysTick) is a 24-bit count-down timer. Use
                this as a Real Time Operating System(RTOS) tick timer or as a simple counter.</li>
            <li><strong>Memory protection unit (MPU):</strong> The Memory protection unit(MPU) improves system
                reliability by defining the memory attributes for different memory regions. It provides up to eight
                different regions, and an optional predefined background region.</li>
            <li><strong>Floating-point unit (FPU):</strong> The Floating-point unit(FPU) provides IEEE754-compliant
                operations on single-precision, 32-bit, floating-point values.</li>
        </ul>
    </section>

    <section id="4.4">
        <h2>4.4 Sensor/Actuator interfacing with Atmega328p (Arduino): Analog and digital sensors, implementation of
            communication protocols, interrupt based</h2>

        <h3>Interfacing AD and DA converters</h3>

        <h4>Analog to Digital Converter (ADC)</h4>
        <p>Even though an analog signal may represent a real physical parameter like temperature, pressure etc, it is
            difficult to process or store the analog signal for later use without introducing a considerable error.
            Therefore, in microprocessor based industrial products, it is necessary to translate an analog signal into
            digital signal. The electronic circuit that translates an analog signal into digital signal is called
            ADC(Analog to Digital Converter). Similarly a digital signal needs to be translated into an analog signal to
            represent a physical quantity; this translator is called DAC(Digital to Analog Converter).</p>

        <h4>ADC Parameters</h4>
        <ul>
            <li><strong>Resolution:</strong> In ADC, the original analog signal has essentially an infinite resolution
                as the signal is continuous. The digital representation of this signal would of course reduce this
                resolution as digital quantities are discrete and vary in equal steps. The resolution of an ADC is
                smallest change that can be distinguished in the analog input.<br>
                <div class="formula">Resolution = FSR(Full Scale Range) / 2<sup>n</sup></div>
            </li>

            <li><strong>Conversion Time:</strong> The A/D conversion another critical parameter is conversion time. This
                is defined as the total time required converting an analog signal into its digital output.</li>

            <li><strong>Accuracy:</strong> It is the comparison of the actual output and the expected output.</li>

            <li><strong>Linearity:</strong> The output should be the linear function of input.</li>

            <li><strong>Full scale output value:</strong> The maximum bit output achieved from the respective input.
            </li>
        </ul>

        <h4>Interfacing an 8-Bit ADC using Status Check</h4>
        <p>Below figure shows a schematic of interfacing a typical ADC using status check. ADC has one input line for
            analog signal and eight output lines for converted digital signals. Typically, analog signal can range from
            0 to 10V or ±5V. When an active low pulse is sent to the START pin, the DR goes high and the output lines go
            into high impedance state. The START pulse initiates conversion. When the conversion is complete, the DR
            goes low and data are made available on the output lines that can be read by the microprocessor. To
            interface A/D converter, we need one output port and a START pulse and two input ports one to check the
            status of DR line and the other to read the output of the converter.</p>

        <div class="code-block">
            <span class="code-keyword">OUT</span> 82H ; Start conversion<br>
            <span class="code-keyword">Test:</span><br>
            <span class="code-keyword">IN</span> 80H ; Read data ready status<br>
            <span class="code-keyword">RAR</span> ; Rotate D0 into carry<br>
            <span class="code-keyword">JC</span> TEST ; If D0=1, conversion is not yet complete, go back and check<br>
            <span class="code-keyword">IN</span> 81H ; read output and save it in accumulator<br>
            <span class="code-keyword">RET</span>
        </div>

        <h4>Interfacing an 8-Bit ADC using Interrupt</h4>
        <p>For interrupt-based ADC interfacing, the service routine would typically look like:</p>
        <div class="code-block">
            <span class="code-keyword">LDA</span> 8000H ; Read data<br>
            <span class="code-keyword">MOV</span> M, A ; store data in memory<br>
            <span class="code-keyword">INX</span> H ; Next memory location<br>
            <span class="code-keyword">DCR</span> B ; Next count<br>
            <span class="code-keyword">STA</span> 8000H ; start next conversion<br>
            <span class="code-keyword">EI</span> ; Enable interrupt again<br>
            <span class="code-keyword">RNZ</span> ; Go back to main if counter not equal to zero<br>
            <span class="code-keyword">HLT</span>
        </div>

        <h4>Digital-to-Analog Converter (DAC)</h4>
        <p>DAC converts straight binary to analog voltage or current proportional to the digital value. DAC can be
            broadly classified in three categories: Current Output, Voltage Output and Multiplying Type. Voltage output
            DAC is comparatively slower than Current output DAC because of the delay in converting the current signal
            into voltage signal.</p>

        <h4>DAC Parameters</h4>
        <ul>
            <li><strong>Resolution:</strong> It is determined by the number of bits in the input binary word. A 12-bit
                converter has a resolution of 1 part in 2<sup>12</sup>.</li>

            <li><strong>Full scale output voltage:</strong> The maximum output voltage of a converter(when all input are
                1) will always have a value 1 LSB less than the named value.</li>

            <li><strong>Accuracy:</strong> The actual output voltage of a DAC is different from the ideal value; the
                factors that contribute to the lack of linearity also contribute to the lack of accuracy. The accuracy
                of a DAC is the measure of difference between actual output voltage and the expected output voltage. For
                an example, a DAC with ±0.2% accuracy and full scale(maximum) output voltage of 10V will produce a
                maximum error for an output voltage is of 20 mV.</li>

            <li><strong>Linearity:</strong> An ideal DAC should be linear i.e. the output voltage should be a linear
                function of the input code. All DAC depart somewhat from the ideal linearity. Typical factors
                responsible for introducing non-linearity are non-exact value of resistors and non-ideal electronic
                switches that introduce extra resistance to the circuit. The non-linearity(linearity error) is the
                amount by which the actual output differs from the ideal straight line output</li>

            <li><strong>Settling time:</strong> When the output of DAC changes from one value to another, it typically
                overshoots the new value and may oscillate briefly around that new value before it settles to a constant
                value. It is the time interval between the instant when the analog input passes a specified value and
                the time instant when the analog output enters for the last time a specified error band about its final
                value.</li>

            <li><strong>Monotonicity:</strong> A converter is said to be monotonic if its output voltage value
                continuous to increase with a continuously increasing input value.</li>

            <li><strong>Temperature Coefficient:</strong> It is defined as the degree of inaccuracy that the temperature
                change can cause in any of the parameter of the DAC.</li>
        </ul>

        <h4>Interfacing 10-Bit DAC with 8085</h4>
        <p>In many DAC applications, 10 or 12-bit resolution is required. But microprocessor has only 8-bit data lines.
            One method is to use two output ports on time shared basis; one for first eight bits and second for the
            remaining bits. A disadvantage of this method is that the DAC input assumes on intermediate value between
            two input operations. The solution to this difficulty can be solved using a double buffer DAC.</p>

        <div class="code-block">
            <span class="code-keyword">LXI</span> B, 03FFH ; Load 10-bit at logic 1 in BC register<br>
            <span class="code-keyword">LXI</span> H, 8000H ; Load HL with port address for lower 8-bits<br>
            <span class="code-keyword">MOV</span> M, C ; Load 8-bits D7-D0 in the DAC<br>
            <span class="code-keyword">INX</span> H ; Point to port address 8001H<br>
            <span class="code-keyword">MOV</span> M, B ; Load two bits D9 and D8 and switch all ten bits for
            conversion<br>
            <span class="code-keyword">HLT</span>
        </div>

        <h3>Sensor/Actuator interfacing with Atmega328p (Arduino)</h3>
        <p>The Atmega328P microcontroller is widely used in Arduino boards, making it a popular choice for sensor and
            actuator interfacing. Arduino provides a simple programming environment and libraries that simplify the
            interfacing process.</p>

        <h4>Analog Sensors</h4>
        <p>Analog sensors produce a continuous output signal that is proportional to the measured quantity. The
            Atmega328P has a built-in 10-bit ADC with 6 channels, allowing it to read analog sensors directly. Common
            analog sensors include:</p>
        <ul>
            <li>Temperature sensors (e.g., LM35, thermistors)</li>
            <li>Light sensors (photodiodes, photoresistors)</li>
            <li>Pressure sensors</li>
            <li>Humidity sensors</li>
            <li>Accelerometers</li>
        </ul>

        <h4>Digital Sensors</h4>
        <p>Digital sensors produce discrete output signals (high/low) that represent the measured quantity. These
            sensors can be directly connected to digital input pins on the Atmega328P. Common digital sensors include:
        </p>
        <ul>
            <li>Switches and buttons</li>
            <li>IR sensors</li>
            <li>Ultrasonic sensors (HC-SR04)</li>
            <li>PIR motion sensors</li>
            <li>Digital temperature sensors (DS18B20)</li>
        </ul>

        <h4>Communication Protocols</h4>
        <p>The Atmega328P supports several communication protocols for interfacing with sensors and other devices:</p>
        <ul>
            <li><strong>UART/Serial Communication:</strong> Used for communication between microcontroller and other
                devices (e.g., GPS modules, Bluetooth modules)</li>
            <li><strong>SPI (Serial Peripheral Interface):</strong> High-speed synchronous communication for devices
                like SD cards, displays, and sensors</li>
            <li><strong>I2C (Inter-Integrated Circuit):</strong> Two-wire synchronous communication for connecting
                multiple devices on a single bus (e.g., sensors, EEPROMs)</li>
            <li><strong>One-Wire:</strong> Simple single-wire communication protocol used by devices like DS18B20
                temperature sensors</li>
        </ul>

        <h4>Interrupt-based Interfacing</h4>
        <p>Interrupts allow the microcontroller to respond to external events without constantly polling. The Atmega328P
            has two external interrupt pins (INT0 and INT1) and pin-change interrupts for all digital pins. This is
            particularly useful for:</p>
        <ul>
            <li>Reading encoder pulses from rotary encoders</li>
            <li>Responding to button presses</li>
            <li>Handling sensor data that needs immediate attention</li>
            <li>Implementing real-time control systems</li>
        </ul>

        <h3>Example: Interfacing a Temperature Sensor with Atmega328P</h3>
        <p>Here's an example of interfacing an LM35 temperature sensor with Atmega328P using Arduino:</p>

        <div class="code-block">
            <span class="code-keyword">int</span> tempPin = A0;<br>
            <span class="code-keyword">float</span> temperature;<br>
            <br>
            <span class="code-keyword">void</span> setup() {<br>
            &nbsp;&nbsp;Serial.begin(9600);<br>
            &nbsp;&nbsp;pinMode(tempPin, INPUT);<br>
            }<br>
            <br>
            <span class="code-keyword">void</span> loop() {<br>
            &nbsp;&nbsp;int sensorValue = analogRead(tempPin);<br>
            &nbsp;&nbsp;temperature = (sensorValue * 5.0 / 1023.0) * 100.0;<br>
            &nbsp;&nbsp;Serial.print("Temperature: ");<br>
            &nbsp;&nbsp;Serial.print(temperature);<br>
            &nbsp;&nbsp;Serial.println(" C");<br>
            &nbsp;&nbsp;delay(1000);<br>
            }
        </div>
    </section>
</div>



<!-- <==========================chapter 5 =========================> -->


<div id="chapter_5">
    <h1>5. Connectivity Technology in Instrumentation System (6 hours)</h1>

    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#5.1">5.1 Wired and wireless communication system</a></li>
            <li><a href="#5.2">5.2 Wired connectivity: UART, I2C, SPI, CAN</a></li>
            <li><a href="#5.3">5.3 Wireless sensor network and its technology</a></li>
            <li><a href="#5.4">5.4 RF modem, Bluetooth, Wi-Fi, NFC, ZIGBEE and LORA</a></li>
            <li><a href="#5.5">5.5 Thermal management: Heat dissipation technique, heat sink and storage, cloud</a></li>
            <li><a href="#5.6">5.6 Data acquisition system (Data loggers, data archiving based data acquisition
                    system)</a></li>
        </ul>
    </div>

    <section id="5.1">
        <h2>5.1 Wired and wireless communication system</h2>

        <div class="definition">
            <h3>Wireless Communication System</h3>
            <p>Wireless network refers to the use of infrared or radio frequency signals to share information and
                resources between devices. Wireless technologies are designed to reduce the time and different type of
                obstacles created by the cables. Wireless network does not use wires for data or voice communication; it
                uses radio frequency waves as mentioned above. Many types of wireless devices are available today; for
                example, cellular mobile, handheld PCs, satellite receivers, laptop, PDAs, wireless sensors etc.</p>
            <p>As we know "Wireless" is the term refers to medium made of electromagnetic waves (i.e. EM Waves) or
                infrared waves. All the wireless devices will have antenna or sensors. Typical wireless devices include
                cellular mobile, wireless sensors, TV remote, satellite disc receiver, laptops with WLAN card etc. The
                other examples are fiber optic communication link and broadband ADSL etc.</p>
        </div>

        <div class="definition">
            <h3>Wired Communication System</h3>
            <p>Wired Network As we know "wired" is the term refers to any physical medium consisting of cables. The
                cables can be copper wire, twisted pair or fiber optic. Wired network is used to carry different forms
                of electrical signals from one end to the other. Mostly in wired network one internet connection is
                being taken using T1 line, cable modem or using any other means. This connection is shared among
                multiple devices using wired network concept.</p>
            <p>EXAMPLE#1: LAN(Local Area Network): This network consists of ethernet cards housed in PCs or laptops.
                These cards are connected using ethernet cables. The data flows between these cards. For small wired
                network router is used to connect few number of desktop or laptop computers. In order to increase the
                network coverage for more number of systems multiple switches and routers are used.</p>
        </div>
    </section>

    <section id="5.2">
        <h2>5.2 Wired connectivity: UART, I2C, SPI, CAN</h2>

        <h3>UART (Universal Asynchronous Receiver Transmitter Protocol)</h3>

        <div class="definition">
            <p>UART means Universal Asynchronous Receiver Transmitter Protocol. UART is used for serial communication
                from the name itself we can understand the functions of UART, where U stands for Universal which means
                this protocol can be applied to any transmitter and receiver, and A is for Asynchronous which means one
                cannot use clock signal for communication of data and R and T refers to Receiver and Transmitter. Hence
                UART refers to a protocol in which serial data communication will happen without clock signal. UART is
                established for serial communication.</p>
        </div>

        <h3>UART Basics</h3>
        <p>UART is a Universal Asynchronous Receiver Transmitter protocol that is used for serial communication. Two
            wires are established here in which only one wire is used for transmission whereas the second wire is used
            for reception. Data format and transmission speeds can be configured here. So, before starting with the
            communication define the data format and transmission speed.</p>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=UART+Block+Diagram" alt="UART Block Diagram"
            class="image">
        <p class="image-caption">Figure: UART Block Diagram</p>

        <h3>Working Procedure</h3>
        <p>Here, DEVICE A that is having transmitter PIN and a receiver pin; DEVICE B is having a receiver and
            transmission pin. The Transmitter of DEVICE A is one that should be connected with the receiver pin of
            DEVICE B and the transmitter pin of DEVICE B should be connected with the receiver pin of DEVICE A we just
            need to connect two wires for communication. If DEVICE A wants to send data, then it will be sending data on
            the transmitter's pin and here receiver of this DEVICE B will receive it over and if DEVICE A wants to
            receive the data, then that is possible on the RX line that will be forwarded by TX of DEVICE B. On
            comparing this serial communication of UART with parallel then it can be observed that in parallel multiple
            buses are required. Based on the number of lines bus complexity of UART is better but parallel communication
            is good in terms of speed.</p>

        <h3>Configuration of UART</h3>
        <p>The configuration of UART is done before transmission, both of these devices are connected with protocol and
            should know the speed of data transmission. First, define the speed of both devices. Now, configure the
            speed of DEVICE A and B for data transmission which is referred to as Baud Rate so here Baud Rate will be
            the same for DEVICE A and B otherwise both of these devices cannot understand at what speed and at what rate
            data is coming. After that, configure the data length so here DEVICE A and DEVICE B both are configured at
            fixed data length if DEVICE A is transmitting data, then it is configured with fixed data. Like if DEVICE A
            is configured with the eight-bit size of data then DEVICE B should also be configured at the same size of
            data which is eight bits. After this, check data transmission or receiving time, forward start bits, and
            stop bits.</p>

        <h3>Data Format</h3>
        <p>Now we will see the data format and when the communication is according to UART protocol. We are using NRZ
            encoding for data communication. Consider 8 bits of data length, so we will be forwarding 8 bits and those 8
            bits will be received by DEVICE B a parity bit can also be used which is optional, but this is quite
            effective. By using the parity bit, it can be identified whether the received data is correct or not.</p>
        <p>Suppose we are sending 1 1 1 0 0 0 1 0. Now, we have 4 ones; an even number of ones are there hence the
            parity is even and for that, logic 0 will be assigned. Suppose we are receiving data with some error, say
            zero is converted into one; Now incorrect data that is 1 1 1 1 0 0 1 0 for this incorrect data parity will
            be 0 as there are 5 ones, here is a mismatch in the parity bit and hence it is confirmed that the received
            data has some error.</p>

        <h3>Pros and Cons of UART Protocol</h3>
        <table class="comparison-table">
            <thead>
                <tr>
                    <th>Pros</th>
                    <th>Cons</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>It is having less physical interfacing based on only two lines.</td>
                    <td>UART is having serial communication, therefore, it has less speed.</td>
                </tr>
                <tr>
                    <td>Simple to configure data and data size. Speed is also configurable. In the majority of cases,
                        this baud rate is 9600 for the UART protocol. Full duplex mode configuration is possible by
                        using two wires so that is the major advantage of UART.</td>
                    <td>Start bit, stop bit, and the parity bit is other overhead.</td>
                </tr>
                <tr>
                    <td>Error detention is possible</td>
                    <td>Since this is asynchronous communication so here there are many things that we need to do in
                        configuration, for instance, we should configure both devices at the same speed because the
                        clock signal is absent.</td>
                </tr>
            </tbody>
        </table>

        <h3>I2C Communication Protocol</h3>

        <div class="definition">
            <p>I2C stands for Inter-Integrated Circuit. It is a bus interface connection protocol incorporated into
                devices for serial communication. It was originally designed by Philips Semiconductor in 1982. Recently,
                it is a widely used protocol for short-distance communication. It is also known as Two Wired
                Interface(TWI).</p>
        </div>

        <h3>Working of I2C Communication Protocol</h3>
        <p>It uses only 2 bi-directional open-drain lines for data communication called SDA and SCL. Both these lines
            are pulled high. Serial Data(SDA): Transfer of data takes place through this pin. Serial Clock(SCL): It
            carries the clock signal. I2C operates in 2 modes: Master mode and Slave mode.</p>
        <p>Each data bit transferred on SDA line is synchronized by a high to the low pulse of each clock on the SCL
            line. According to I2C protocols, the data line cannot change when the clock line is high, it can change
            only when the clock line is low. The 2 lines are open drain, hence a pull-up resistor is required so that
            the lines are high since the devices on the I2C bus are active low. The data is transmitted in the form of
            packets which comprises 9 bits. The sequence of these bits are – Start Condition: 1 bit, Slave Address: 8
            bit, Acknowledge: 1 bit.</p>

        <h3>Steps of I2C Data Transmission</h3>
        <ol>
            <li><strong>Start Condition:</strong> The master device sends a start condition by pulling the SDA line low
                while the SCL line is high. This signals that a transmission is about to begin.</li>
            <li><strong>Addressing the Slave:</strong> The master sends the 7-bit address of the slave device it wants
                to communicate with, followed by a read/write bit. The read/write bit indicates whether it wants to read
                from or write to the slave.</li>
            <li><strong>Acknowledge Bit(ACK):</strong> The addressed slave device responds by pulling the SDA line low
                during the next clock pulse(SCL). This confirms that the slave is ready to communicate.</li>
            <li><strong>Data Transmission:</strong> The master or slave(depending on the read/write operation) sends
                data in 8-bit chunks. After each byte, an ACK is sent to confirm that the data has been received
                successfully.</li>
            <li><strong>Stop Condition:</strong> When the transmission is complete, the master sends a stop condition by
                releasing the SDA line to high while the SCL line is high. This signals that the communication session
                has ended.</li>
        </ol>

        <h3>Features of I2C Communication Protocol</h3>
        <ul>
            <li>Half-duplex Communication Protocol-Bi-directional communication is possible but not simultaneously.</li>
            <li>Synchronous Communication-The data is transferred in the form of frames or blocks.</li>
            <li>Can be configured in a multi-master configuration.</li>
            <li>Clock Stretching-The clock is stretched when the slave device is not ready to accept more data by
                holding the SCL line low, hence disabling the master to raise the clock line. Master will not be able to
                raise the clock line because the wires are AND wired and wait until the slave releases the SCL line to
                show it is ready to transfer next bit.</li>
            <li>Arbitration-I2C protocol supports multi-master bus system but more than one bus can not be used
                simultaneously. The SDA and SCL are monitored by the masters. If the SDA is found high when it was
                supposed to be low it will be inferred that another master is active and hence it stops the transfer of
                data.</li>
            <li>Serial transmission-I2C uses serial transmission for transmission of data.</li>
            <li>Used for low-speed communication</li>
        </ul>

        <h3>Pros and Cons of I2C</h3>
        <table class="comparison-table">
            <thead>
                <tr>
                    <th>Advantages</th>
                    <th>Disadvantages</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Can be configured in multi-master mode.</td>
                    <td>Speed Limitations: I2C is slower compared to some other protocols like SPI.</td>
                </tr>
                <tr>
                    <td>Complexity is reduced because it uses only 2 bi-directional lines(unlike SPI Communication).
                    </td>
                    <td>Distance: It's not suitable for long-distance communication.</td>
                </tr>
                <tr>
                    <td>Cost-efficient.</td>
                    <td>Half-duplex communication is used in the I2C communication protocol.</td>
                </tr>
                <tr>
                    <td>It uses ACK/NACK feature due to which it has improved error handling capabilities.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Fewer Wires: Only two wires are needed, making it easier to set up.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Multiple Devices: You can connect many devices to the same bus.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Simple Communication: It's relatively easy to program and use.</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <h3>SPI Communication Protocol</h3>

        <div class="definition">
            <p>SPI stands for Serial Peripheral Interface. It is a protocol that is synchronous serial communication. It
                is used to communicate between the peripheral devices i.e. input and output devices and
                microcontrollers. It is allowed to transfer high-speed data. It is popular with digital communication
                applications and embedded systems. SPI can transfer the data and receive data from one device to another
                device at a time.</p>
        </div>

        <h3>SPI Protocol</h3>
        <p>4-wire SPI devices have four signals: 1. Clock(SPI CLK, SCLK) 2. Chip select(CS) 3. Master out, slave
            in(MOSI) 4. Master in, slave out(MISO) The device that generates the clock signal is called the master. Data
            transmitted between the master and the slave is synchronized to the clock generated by the master. SPI
            devices support much higher clock frequencies compared to I2C interfaces. Users should consult the product
            data sheet for the clock frequency specification of the SPI interface.</p>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=SPI+Connection" alt="SPI Connection"
            class="image">
        <p class="image-caption">Figure: SPI Connection between Master and Slave</p>

        <h3>Data Transmission</h3>
        <p>To begin SPI communication, the master must send the clock signal and select the slave by enabling the CS
            signal. Usually chip select is an active low signal; hence, the master must send a logic 0 on this signal to
            select the slave. SPI is a full-duplex interface; both master and slave can send data at the same time via
            the MOSI and MISO lines respectively. During SPI communication, the data is simultaneously
            transmitted(shifted out serially onto the MOSI/SDO bus) and received(the data on the bus (MISO/SDI) is
            sampled or read in). The serial clock edge synchronizes the shifting and sampling of the data. The SPI
            interface provides the user with flexibility to select the rising or falling edge of the clock to sample
            and/or shift the data (Refer to the device data sheet to determine the number of data bits transmitted using
            the SPI interface.).</p>

        <h3>Components of SPI</h3>
        <ul>
            <li><strong>Master Device:</strong> The master device is nothing but it controls the process of
                transformation of data on the SPI bus. It controls the data flow and it generates the clock signal. In
                most of the applications, the master device is the microcontroller or specialized SPI controller.</li>
            <li><strong>Slave Device:</strong> Slave devices are peripheral devices that are connected to the SPI bus
                and controlled by master devices. Every slave device has a different slave select(SS) line, allowing the
                master to select which device it wants to communicate with.</li>
            <li><strong>SPI Bus:</strong> SPI bus is a physical connection over the data transferring between the slave
                devices and the master. It contains four signal lines as below:
                <ul>
                    <li>Slave Select(SS): In Slave Select, each slave device contains a dedicated SS pin. If the master
                        will communicate with the specific slave. Multiple slave devices can be shared with the as same
                        as MOSI, MISO, and SCK lines but it must have separated SS lines.</li>
                    <li>Master Out Slave In(MOSI): In Master Out Slave In, MOSI can share the data or information from
                        the master to other slave devices.</li>
                    <li>Master In Slave Out(MISO): In Master In Slave Out, MISO can share the data or information from
                        the slave device with the master.</li>
                    <li>Serial Clock(SCK): In Serial Clock, this clock signal is used by the master and the slave
                        devices for coordinating the data transfer timings.</li>
                </ul>
            </li>
        </ul>

        <h3>Clock Polarity(CPOL) and Clock Phase(CPHA)</h3>
        <p>In SPI, the master can select the clock polarity and clock phase. The CPOL bit sets the polarity of the clock
            signal during the idle state. The idle state is defined as the period when CS is high and transitioning to
            low at the start of the transmission and when CS is low and transitioning to high at the end of the
            transmission. The CPHA bit selects the clock phase. Depending on the CPHA bit, the rising or falling clock
            edge is used to sample and/or shift the data. The master must select the clock polarity and clock phase, as
            per the requirement of the slave. Depending on the CPOL and CPHA bit selection, four SPI modes are
            available.</p>

        <h3>CAN (Controller Area Network)</h3>

        <div class="definition">
            <p>A controller area network(CAN) bus is a high-integrity serial bus system for networking intelligent
                devices. CAN busses and devices are common components in automotive and industrial systems. CAN also has
                applications in aircraft with flight-state sensors, navigation systems, and research PCs in the cockpit.
                In addition, you can find CAN buses in many aerospace applications, ranging from in-flight data analysis
                to aircraft engine control systems such as fuel systems, pumps, and linear actuators. Medical equipment
                manufacturers use CAN as an embedded network in medical devices. In fact, some hospitals use CAN to
                manage complete operating rooms. Hospitals control operating room components such as lights, tables,
                cameras, X-ray machines, and patient beds with CAN-based systems. Lifts and escalators use embedded CAN
                networks, and hospitals use the CANopen protocol to link lift devices, such as panels, controllers,
                doors, and light barriers, to each other and control them. CANopen also is used in nonindustrial
                applications such as laboratory equipment, sports cameras, telescopes, automatic doors, and even coffee
                machine.</p>
        </div>

        <h3>How CAN Communication Works</h3>
        <p>As stated earlier, CAN is a peer-to-peer network. This means that there is no master that controls when
            individual nodes have access to read and write data on the CAN bus. When a CAN node is ready to transmit
            data, it checks to see if the bus is busy and then simply writes a CAN frame onto the network. The CAN
            frames that are transmitted do not contain addresses of either the transmitting node or any of the intended
            receiving node(s). Instead, an arbitration ID that is unique throughout the network labels the frame. All
            nodes on the CAN network receive the CAN frame, and, depending on the arbitration ID of that transmitted
            frame, each CAN node on the network decides whether to accept the frame. If multiple nodes try to transmit a
            message onto the CAN bus at the same time, the node with the highest priority(lowest arbitration ID)
            automatically gets bus access. Lower-priority nodes must wait until the bus becomes available before trying
            to transmit again. In this way, you can implement CAN networks to ensure deterministic communication among
            CAN nodes.</p>

        <h3>CAN Benefits</h3>
        <ul>
            <li><strong>Low-Cost, Lightweight Network:</strong> CAN provides an inexpensive, durable network that helps
                multiple CAN devices communicate with one another. An advantage to this is that electronic control
                units(ECUs) can have a single CAN interface rather than analog and digital inputs to every device in the
                system. This decreases overall cost and weight in automobiles.</li>
            <li><strong>Broadcast Communication:</strong> Each of the devices on the network has a CAN controller chip
                and is therefore intelligent. All devices on the network see all transmitted messages. Each device can
                decide if a message is relevant or if it should be filtered. This structure allows modifications to CAN
                networks with minimal impact. Additional non-transmitting nodes can be added without modification to the
                network.</li>
            <li><strong>Priority:</strong> Every message has a priority, so if two nodes try to send messages
                simultaneously, the one with the higher priority gets transmitted and the one with the lower priority
                gets postponed. This arbitration is non-destructive and results in non-interrupted transmission of the
                highest priority message.</li>
            <li><strong>Error Capabilities:</strong> The CAN specification includes a Cyclic Redundancy Code(CRC) to
                perform error checking on each frame's contents. Frames with errors are disregarded by all nodes, and an
                error frame can be transmitted to signal the error to the network. Global and local errors are
                differentiated by the controller, and if too many errors are detected, individual nodes can stop
                transmitting errors or disconnect itself from the network completely.</li>
        </ul>

        <h3>CAN Protocol Terminology</h3>
        <p>CAN devices send data across the CAN network in packets called frames. A CAN frame consists of the following
            sections.</p>
        <ul>
            <li><strong>CAN Frame:</strong> an entire CAN transmission: arbitration ID, data bytes, acknowledge bit, and
                so on. Frames also are referred to as messages.</li>
            <li><strong>SOF(start-of-frame) bit:</strong> indicates the beginning of a message with a dominant(logic 0)
                bit.</li>
            <li><strong>Arbitration ID:</strong> identifies the message and indicates the message's priority. Frames
                come in two formats-- standard, which uses an 11-bit arbitration ID, and extended, which uses a 29-bit
                arbitration ID.</li>
            <li><strong>IDE(identifier extension) bit:</strong> allows differentiation between standard and extended
                frames.</li>
            <li><strong>RTR(remote transmission request) bit:</strong> serves to differentiate a remote frame from a
                data frame. A dominant(logic 0) RTR bit indicates a data frame. A recessive(logic 1) RTR bit indicates a
                remote frame.</li>
            <li><strong>DLC(data length code):</strong> indicates the number of bytes the data field contains.</li>
            <li><strong>Data Field:</strong> contains 0 to 8 bytes of data.</li>
            <li><strong>CRC(cyclic redundancy check):</strong> contains 15-bit cyclic redundancy check code and a
                recessive delimiter bit. The CRC field is used for error detection.</li>
            <li><strong>ACK(ACKnowledgement) slot:</strong> any CAN controller that correctly receives the message sends
                an ACK bit at the end of the message. The transmitting node checks for the presence of the ACK bit on
                the bus and reattempts transmission if no acknowledge is detected. National Instruments Series 2 CAN
                interfaces have the capability of listen-only mode. Herein, the transmission of an ACK bit by the
                monitoring hardware is suppressed to prevent it from affecting the behavior of the bus.</li>
            <li><strong>CAN Signal:</strong> an individual piece of data contained within the CAN frame data field. You
                also can refer to CAN signals as channels. Because the data field can contain up to 8 bytes of data, a
                single CAN frame can contain 0 to 64 individual signals(for 64 channels, they would all be binary).</li>
        </ul>
    </section>

    <section id="5.3">
        <h2>5.3 Wireless sensor network and its technology</h2>

        <div class="definition">
            <h3>Wireless Sensor Network (WSN)</h3>
            <p>The wireless sensor network is a group of sensors that can communicate wirelessly. The aforementioned
                groups of sensors can communicate within their communication range and are hence capable of operating in
                changing environments. Let's compare the internet with a human's Central Nervous System(CNS). Wireless
                sensor networks are like sensory organs that sense the surrounding environment and gather information to
                process it further. Therefore, WSN is a combination of a large number of sensor nodes. The following
                sensor nodes collect, process, and transfer the data to the users. The nodes mentioned above can either
                be stationary or mobile.</p>
            <p>A few applications of Wireless Sensor Networks(WSN):</p>
            <ul>
                <li>Environmental Monitoring</li>
                <li>Health Care</li>
                <li>Positioning and Monitoring</li>
                <li>Disaster prevention and relief</li>
                <li>Smart Agriculture System</li>
            </ul>
        </div>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Wireless+Sensor+Network"
            alt="Wireless Sensor Network" class="image">
        <p class="image-caption">Figure: Wireless Sensor Network Architecture</p>
    </section>

    <section id="5.4">
        <h2>5.4 RF modem, Bluetooth, Wi-Fi, NFC, ZIGBEE and LORA</h2>

        <h3>RF Modems</h3>

        <div class="definition">
            <p>Radio frequency modems, also called "RF modems" and "wireless data modems", power an impressive array of
                industrial functions. RF wireless systems enable mining companies to work in remote areas. RF modems
                perform critical tasks for water supply and sewerage systems. They monitor gas pipelines, track fleet
                vehicles, control farm irrigation, and monitor bushfire zones – among many other uses.</p>
            <p>RF modems transfer data wirelessly over long distances, providing reliable real-time communication
                independent of satellite or telecommunication networks.</p>
            <p>Long-distance data transfer: High-quality RF systems can comfortably span tens of kilometres.</p>
            <p>Real-time data communication: RF systems send data packets at blistering speeds over UHF or VHF
                bandwidths. Powerful data modems like our RF-9256 900MHz high-speed unit can transmit data at 115,200
                bits per second(bps) with a 30km line of sight. Piccolo, a "low power" unit by comparison, still
                transmits up to 38,400bps.</p>
        </div>

        <h3>Where are RF modems used?</h3>
        <ul>
            <li><strong>Fleet tracking:</strong> RF modems have differential GPS capabilities that provide more accurate
                location tracking than traditional satellite GPS</li>
            <li><strong>Remote I/O control:</strong> Controlling pumps, motors, fans, gates, and other I/O applications
            </li>
            <li><strong>SCADA systems:</strong> Creating a data transfer network to collect data and monitor processes
                remotely</li>
            <li><strong>Automated meter reading:</strong> Collecting data from environmental monitoring equipment, for
                example, in bushfire alert systems or gas pipelines</li>
        </ul>

        <h3>Near Field Communication (NFC)</h3>

        <div class="definition">
            <p>Near Field Communication(NFC) is a short-range wireless technology that enables communication between two
                electronic devices over a distance of 4 centimeters(1.6 inches) or less.</p>
            <p>NFC stands for Near Field Communication. It enables short-range communication between compatible devices.
                At least one transmitting device and another receiving device are needed to transmit the signal. Many
                devices can use the NFC standard and are considered either passive or active.</p>
        </div>

        <h3>Types of NFC</h3>
        <ul>
            <li><strong>Passive NFC devices:</strong> These near-field communication devices include tags and other
                small transmitters that can send information to other NFC devices without the need for a power source of
                their own. These devices don't really process any information sent from other sources, and can not
                connect to other passive components. These often take the form of interactive signs on walls or
                advertisements.</li>
            <li><strong>Active NFC devices:</strong> These near-field communication devices can do both things i.e. send
                and receive data. They can communicate with each other as well as with passive devices. Smartphones are
                the best example of active NFC devices. Card readers in public transport and touch payment terminals are
                also good examples of the technology.</li>
        </ul>

        <h3>How Does NFC Work?</h3>
        <p>NFC relies on inductive coupling between two electromagnetic coils present on NFC-enabled devices(such as
            smartphones). Communication occurs at a frequency of 13.56 MHz within the globally available unlicensed
            radio frequency ISM band. Data rates range from 106 to 848 kbit/s. NFC can be used for various purposes,
            including contactless transactions, data exchange, and simplified setup of more complex communications(e.g.,
            Wi-Fi). When one of the connected devices has internet connectivity, data exchange with online services is
            also possible. The NFC standard currently has three distinct modes of operation to determine what sort of
            information will be exchanged between devices. The most commonly used in smartphones is the peer-to-peer
            mode. The exchange of various pieces of information is allowed between 2 devices. In this mode both devices
            switch between active when sending data and passive when receiving. The second mode i.e. read/write mode is
            a one-way data transmission. The active device, possibly your smartphone, links up with another device in
            order to read information from it. NFC advertisement tags use this mode.</p>

        <h3>Bluetooth</h3>

        <div class="definition">
            <p>Bluetooth is a global standard Radio Frequency(RF) specification for short-range, point to-multipoint
                voice and data transfer. Bluetooth can transmit through solid, non-metal objects. Its nominal link range
                is from 10 cm to 10 m, but can be extended to 100 m by increasing the transmit power. It is based on a
                low-cost, short-range radio link, and facilitates ad hoc connections for stationary and mobile
                communication environments. A standard for wireless electronics communication "Open Wireless". It
                provides agreement at the physical level-- Bluetooth is a radio-frequency standard. It also provides
                agreement at the next level up, where products have to agree on when bits are sent, how many will be
                sent at a time and how the parties in a conversation can be sure that the message received is the same
                as the message sent. Bluetooth communicates on a frequency of 2.45 gigahertz, which has been set aside
                by international agreement for the use of industrial, scientific and medical devices(ISM)</p>
        </div>

        <h3>Bluetooth characteristics:</h3>
        <ul>
            <li>Operates in the 2.4 GHz Industrial-Scientific-Medical(ISM) band.</li>
            <li>Uses Frequency Hop(FH) spread spectrum, which divides the frequency band into a number of hop channels.
                During a connection, radio transceivers hop from one channel to another in a pseudo-random fashion.</li>
            <li>Supports up to 8 devices in a piconet(two or more Bluetooth units sharing a channel).</li>
            <li>Built-in security.</li>
            <li>Non line-of-sight transmission through walls and briefcases.</li>
            <li>Omni-directional.</li>
            <li>Supports both isochronous and asynchronous services; easy integration of TCP/IP for networking.</li>
        </ul>

        <h3>Bluetooth Network Topology</h3>

        <h4>Piconet</h4>
        <ul>
            <li>A maximum of 8 devices(7 active slaves plus 1 master) form a Piconet</li>
            <li>A piconet is characterized by the master: frequency hopping scheme, access code, timing synchronization,
                bit rate allocated to each slave</li>
            <li>Only one master: dynamically selected, roles can be switched</li>
            <li>Up to 7 active slaves; up to 255 parked slaves</li>
            <li>No central network structure: "Ad-hoc" network</li>
        </ul>

        <h4>Scatternet</h4>
        <ul>
            <li>Interconnected piconets, one master per piconet</li>
            <li>A few devices shared between piconets</li>
            <li>No central network structure: "Ad-hoc" network</li>
        </ul>

        <h3>ZigBee</h3>

        <div class="definition">
            <p>ZigBee is a Personal Area Network task group with low rate task group 4. It is a technology of home
                networking. ZigBee is a technological standard created for controlling and sensing the network. As we
                know that ZigBee is the Personal Area Network of task group 4 so it is based on IEEE 802.15.4 and is
                created by Zigbee Alliance. ZigBee is an open, global, packet-based protocol designed to provide an
                easy-to-use architecture for secure, reliable, low power wireless networks. Flow or process control
                equipment can be place anywhere and still communicate with the rest of the system. It can also be moved,
                since the network doesn't care about the physical location of a sensor, pump or valve. EEE802.15.4
                developed the PHY and MAC layer whereas, the ZigBee takes care of upper higher layers.</p>
        </div>

        <h3>General Characteristics of Zigbee Standard</h3>
        <ul>
            <li>Low Power Consumption</li>
            <li>Low Data Rate(20- 250 kbps)</li>
            <li>Short-Range(75-100 meters)</li>
            <li>Network Join Time(~ 30 msec)</li>
            <li>Support Small and Large Networks(up to 65000 devices(Theory); 240 devices (Practically))</li>
            <li>Low Cost of Products and Cheap Implementation(Open Source Protocol)</li>
            <li>Extremely low-duty cycle.</li>
            <li>3 frequency bands with 27 channels.</li>
        </ul>

        <h3>Zigbee Network Topologies:</h3>
        <ul>
            <li><strong>Star Topology(ZigBee Smart Energy):</strong> Consists of a coordinator and several end devices,
                end devices communicate only with the coordinator.</li>
            <li><strong>Mesh Topology(Self Healing Process):</strong> Mesh topology consists of one coordinator, several
                routers, and end devices.</li>
            <li><strong>Tree Topology:</strong> In this topology, the network consists of a central node which is a
                coordinator, several routers, and end devices. the function of the router is to extend the network
                coverage.</li>
        </ul>

        <h3>Architecture of Zigbee:</h3>
        <p>Zigbee architecture is a combination of 6 layers.</p>
        <ul>
            <li><strong>Application Layer</strong></li>
            <li><strong>Application Interface Layer</strong></li>
            <li><strong>Security Layer</strong></li>
            <li><strong>Network Layer</strong></li>
            <li><strong>Medium Access Control Layer</strong></li>
            <li><strong>Physical Layer</strong></li>
        </ul>

        <h3>Description</h3>
        <ul>
            <li><strong>Physical layer:</strong> The lowest two layers i.e the physical and the MAC (Medium Access
                Control) Layer are defined by the IEEE 802.15.4 specifications. The Physical layer is closest to the
                hardware and directly controls and communicates with the Zigbee radio. The physical layer translates the
                data packets in the over-the-air bits for transmission and vice-versa during the reception.</li>
            <li><strong>Medium Access Control layer(MAC layer):</strong> The layer is responsible for the interface
                between the physical and network layer. The MAC layer is also responsible for providing PAN ID and also
                network discovery through beacon requests.</li>
            <li><strong>Network layer:</strong> This layer acts as an interface between the MAC layer and the
                application layer. It is responsible for mesh networking.</li>
            <li><strong>Application layer:</strong> The application layer in the Zigbee stack is the highest protocol
                layer and it consists of the application support sub-layer and Zigbee device object. It contains
                manufacturer-defined applications.</li>
        </ul>

        <h3>LoRa Protocol</h3>

        <div class="definition">
            <p>LoRa Protocol or LoRaWAN(Long Range Wide Area Network) is a wireless communication protocol designed for
                Low-Power Wide Area Networks(LPWAN) used in Internet of Things(IoT) applications. It is a low-power,
                long-range wireless protocol that enables the transmission of small data packets over long distances
                with low power consumption, making it ideal for IoT applications that require low data rates and
                long-range connectivity. LoRaWAN operates in the unlicensed spectrum and uses chirp spread spectrum
                modulation to enable long-range communication while maintaining a low power consumption. The LoRaWAN
                protocol also uses a star topology, where individual end devices communicate with a central gateway,
                enabling the network to cover large areas with minimal infrastructure.</p>
        </div>

        <h3>How does LoRa work</h3>
        <p>A LoRaWAN network architecture consists of LoRa nodes, LoRa gateways, the network server and the application
            server. In a LoRaWAN architecture, the nodes are typically in a star topology with gateways forming a
            transparent bridge. Communication to end nodes is generally bidirectional, which means the gateway can
            collect data from the end nodes, but it can also send commands to the end nodes.</p>

        <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=LoRaWAN+Architecture"
            alt="LoRaWAN Architecture" class="image">
        <p class="image-caption">Figure: LoRaWAN Architecture</p>

        <h3>Description</h3>
        <ul>
            <li><strong>LoRa nodes:</strong> The end nodes are the elements of the LoRa network where the control or
                sensing is undertaken. They are normally battery-powered and remotely located. End nodes send data to
                every gateway in their vicinity and they transmit data in periodic not 24×7.</li>
            <li><strong>LoRa gateway:</strong> The gateway receives the data from the LoRa end nodes and then channels
                it to a network server. A LoRa gateway usually consists of a LoRa radio module, a microprocessor, and an
                Internet connectivity medium. The gateway converts the data received from the LoRa nodes into TCP/IP
                format via the backhaul network(Ethernet, 3G, 4G, WiFi, etc.) and sends it to the network server. LoRa
                gateway supports multi-channel, multi-modulation transceivers, and even simultaneous demodulation of
                signals on the same channel. They do not store any data and act only as packet forwarders to the network
                server.</li>
            <li><strong>Network Server:</strong> The network server manages the network. It filters duplicate packets
                caused by multiple gateways receiving the same data, performs security checks, manages gateway traffic
                and routing, control adaptive rate, and forwards messages to the application server.</li>
            <li><strong>Application Server:</strong> The application server processes data from the network server,
                analyzes sensor data, supports functions like status display and real-time alerts, and can optionally
                send responses back to the end node.</li>
        </ul>
    </section>

    <section id="5.5">
        <h2>5.5 Thermal management: Heat dissipation technique, heat sink and storage, cloud</h2>

        <div class="definition">
            <h3>Thermal Management</h3>
            <p>Thermal management is the process of controlling the temperature of electronic components to ensure
                optimal performance and longevity. In instrumentation systems, proper thermal management is crucial as
                electronic components generate heat during operation, and excessive heat can lead to reduced
                performance, increased failure rates, and shortened lifespan of equipment.</p>
            <p>Heat dissipation techniques include:</p>
            <ul>
                <li><strong>Heat sinks:</strong> Passive components that increase the surface area for heat dissipation.
                    They are typically made of aluminum or copper and can be finned or solid.</li>
                <li><strong>Forced air cooling:</strong> Using fans to increase airflow over heat-generating components.
                </li>
                <li><strong>Liquid cooling:</strong> Using a liquid coolant to transfer heat away from components, often
                    used in high-performance systems.</li>
                <li><strong>Thermal interface materials:</strong> Materials like thermal paste or pads that improve heat
                    transfer between components and heat sinks.</li>
                <li><strong>Thermoelectric coolers:</strong> Peltier devices that use electricity to create a
                    temperature difference for cooling.</li>
            </ul>

            <p>In modern instrumentation systems, cloud storage solutions are also being used for data archiving, which
                has implications for thermal management. Cloud storage systems require significant cooling
                infrastructure to manage the heat generated by servers, but they can also reduce the need for local
                heat-generating storage devices at the instrument site.</p>
        </div>
    </section>

    <section id="5.6">
        <h2>5.6 Data acquisition system (Data loggers, data archiving based data acquisition system)</h2>

        <div class="definition">
            <h3>What is Data Acquisition?</h3>
            <p>A Data Acquisition System, often abbreviated as DAQ, consists of sensors, measuring instruments, and a
                computer. Its purpose is to gather and process essential data for understanding electrical or physical
                phenomena. This system plays a crucial role in tasks like monitoring heating coil temperature to
                evaluate efficiency in achieving desired levels. Data acquisition, also known as the process of
                collecting data, relies on specialized software that quickly captures, processes, and stores
                information. It enables scientists and engineers to perform in-depth analysis for scientific or
                engineering purposes. Data acquisition systems are available in handheld and remote versions to cater to
                different measurement requirements. Handheld systems are suitable for direct interaction with subjects
                while remote systems excel at distant measurements, providing versatility in data collection.</p>
        </div>

        <h3>Description</h3>
        <ul>
            <li><strong>Sensors:</strong> Devices that gather information about physical or environmental conditions,
                such as temperature, pressure, or light intensity.</li>
            <li><strong>Signal Conditioning:</strong> To ensure accurate measurement, the raw sensor data undergoes
                preprocessing to filter out any noise and scale it appropriately.</li>
            <li><strong>Data Logger:</strong> Hardware or software that records and stores the conditioned data over
                time.</li>
            <li><strong>Analog-to-Digital Converter(ADC):</strong> Converts analog sensor signals into digital data that
                computers can process.</li>
            <li><strong>Interface:</strong> Connects the data acquisition system to a computer or controller for data
                transfer and control.</li>
            <li><strong>Power Supply:</strong> Provides the necessary electrical power to operate the system and
                sensors.</li>
            <li><strong>Control Unit:</strong> The management of the data acquisition system involves overseeing its
                overall operation, which includes tasks such as triggering, timing, and synchronization.</li>
            <li><strong>Software:</strong> Allows users to configure, monitor, and analyze the data collected by the
                system.</li>
            <li><strong>Communication Protocols:</strong> The transmission and re-ception of data between a system and
                external devices or networks is known as data communication.</li>
        </ul>

        <h3>Data Loggers</h3>
        <p>Data logger automatically makes a record of the readings of instruments located at different parts of plant.
            Data logger measures and record data effortlessly as quickly, as often, and as accurately as desired. These
            devices measure electrical output from transducer, give plant performance computation, logic analysis of
            alarm conditions, passes information(reading) to computer for further processing etc. So they are used in
            power generation plant, petro-chemical installations, real time processing plants etc.</p>

        <h3>Characteristics of Data Logger</h3>
        <ul>
            <li>Modularity</li>
            <li>Reliability</li>
            <li>Accuracy</li>
            <li>Management Tool</li>
            <li>Easy to Use</li>
        </ul>

        <h3>Application of Data Logger</h3>
        <ul>
            <li>Weather station recording e.g. wind speed, wind direction, temperature, relative humidity</li>
            <li>Hydrographic recording e.g. water level, depth, water flow PH, conductivity</li>
            <li>Soil moisture level</li>
            <li>Gas pressure</li>
            <li>Environmental Monitoring</li>
        </ul>

        <h3>Block diagram of Data logger</h3>
        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Data+Logger+Block+Diagram"
            alt="Data Logger Block Diagram" class="image">
        <p class="image-caption">Figure: Data Logger Block Diagram</p>

        <h3>Description</h3>
        <ol>
            <li><strong>Input Signals:</strong> May be pressure, transducers, thermocouple, AC signal, signals from
                relay, switch, tachometer pulses etc.</li>
            <li><strong>Input Scanner:</strong> It is an automatic sequence switch which selects each signal in turn.
                Modern scanner have input scanner which can scan at a rate of 150 inputs per second. Characteristics of
                input scanner may be: Low closed resistance, High open circuit resistance, Low contact potential,
                Negligible interaction between switch, enter going signal and input signal, Short operating time,
                Negligible contact bounce, Long operation life</li>
            <li><strong>Signal Amplifier & Conditioner:</strong> Amplifier for gain adjustment i.e. low level signal
                amplified up to 5v output. Characteristics are: Precise and stable DC gain, High SNR, High CMRR, Low DC
                drift, Low output impedance, High input impedance, Good linearity, Wide bandwidth and Conditioner for
                scaling linear transducer or correcting curvature of non linear transducer i.e. signal is changed to
                more linear form and suitable for digital analysis.</li>
            <li><strong>A/D Converter:</strong> Converts analog sample into digital data. Characteristics are:
                Resolution, Accuracy, Conversion time, Full scale output voltage, Linearity</li>
            <li><strong>Recorder:</strong> Output from data logger may be recorded in any of following: Typewriter,
                strip printer, digital tape recorder, punched tape, computer (hard drive), magnetic tape etc.
                Characteristics are: Speed, Memory, Writing technique(Serial/ Parallel)</li>
            <li><strong>Programmer:</strong> Control all units of data conversion and operation. Microcontroller or
                microprocessor based system. Basic units: main frames, front panel assembly, power supply unit, scanner
                controller, input interface etc. Operation performed by programmer: Set amplifier, Set linearity factor,
                Set high and low alarm value, Start A/D conversion, Record reading channel, Identify channel and time of
                recording, Display recording, Reset logger</li>
        </ol>

        <h3>Data Storage</h3>
        <h3>Storage Factors:</h3>
        <ul>
            <li>Speed with which data can be accessed</li>
            <li>Cost per unit of data</li>
            <li>Reliability</li>
            <ul>
                <li>data loss on power failure or system crash</li>
                <li>physical failure of the storage device</li>
            </ul>
            <li>Can differentiate storage into: volatile storage: loses contents when power is switched off,
                non-volatile storage:</li>
        </ul>

        <h3>Physical Storage Types:</h3>
        <ul>
            <li><strong>Primary storage:</strong> Fastest media but volatile (cache, main memory – RAM and ROM).</li>
            <li><strong>Secondary storage:</strong> Non-volatile, moderately fast access time also called on-line
                storage E.g. flash memory, magnetic disks</li>
            <li><strong>Tertiary storage:</strong> Non-volatile, slow access time which involves a robotic mechanism
                that will mount and dismount removable mass storage media into a storage device according to the system
                demands. Also called off-line storage o E.g. Tape libraries, optical jukebox etc</li>
        </ul>

        <h3>Data Compression</h3>
        <p>Process of encoding information using fewer bits than an un-encoded representation would use, through
            specific encoding schemes. Reduce consumption of expensive resources such as hard drive and transmission
            bandwidth. Trade-off between compression speed, compressed data size and quality (loss)</p>

        <h3>RAID: Redundant Arrays of Independent Disks</h3>
        <p>It is the way of storing the data in disk organization techniques that manage a large numbers of disks,
            providing a view of a single disk of high capacity and high speed by using multiple disks in parallel, and
            high reliability by storing data redundantly, so that data can be recovered even if a disk fails</p>

        <h3>RAID Levels:</h3>
        <ul>
            <li><strong>RAID Level 0:</strong> Block striping; non-redundant.</li>
            <li><strong>RAID Level 1:</strong> Mirrored disks with block striping</li>
            <li><strong>RAID Level 2:</strong> Stripes data at the bit level, and uses code for error correction.</li>
            <li><strong>RAID Level 3:</strong> Bit-Interleaved Parity - A single parity bit is enough for error
                correction, not just detection, since we know which disk has failed</li>
            <li><strong>RAID Level 4:</strong> Block-Interleaved Parity; uses block-level striping, and keeps a parity
                block on a separate disk for corresponding blocks from N other disks.</li>
            <li><strong>RAID Level 5:</strong> Block-Interleaved Distributed Parity; partitions data and parity among
                all N+ 1 disks, rather than storing data in N disks and parity</li>
        </ul>
    </section>
</div>



<!-- <==========================chapter 6 =========================> -->


<div id="chapter_6">
    <h1>6. Circuit Design (4 hours)</h1>

    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#6.1">6.1 Converting requirement into design, reliability and fault tolerance</a></li>
            <li><a href="#6.2">6.2 High-speed design: Bandwidth, decoupling, crosstalk, impedance matching</a></li>
            <li><a href="#6.3">6.3 PCB design: Component placement, trace routing, signal integrity, and ground
                    loops</a></li>
            <li><a href="#6.4">6.4 Noise and noise coupling mechanism, noise prevention, filtering, ferrite beads,
                    decoupling capacitors, and ESD & its prevention</a></li>
        </ul>
    </div>

    <section id="6.1">
        <h2>6.1 Converting requirement into design, reliability and fault tolerance</h2>

        <h3>Converting Requirement into Design</h3>

        <div class="definition">
            <h3>Establishing Requirements</h3>
            <p>Establishing requirement is the most difficult part of the circuit design. Experience is the best guide
                for setting requirements. General to specific approach of establishing requirements:</p>
            <ul>
                <li>Start by defining the desired function in broad term</li>
                <li>Redefine the function with operational concern</li>
                <li>Settle on exact regulations and specification</li>
            </ul>
            <p>Setting specifications is one of the most difficult parts of engineering where good judgment and
                experience are necessary. Requirements often change late in the effort and spoil the design. Some
                principles bound the design problem (e.g., use of electromagnetic spectrum).</p>
        </div>

        <h3>Design Considerations</h3>
        <ul>
            <li>Time and effort in design increases as the complexity of the function of system increases</li>
            <li>Choice of certain technology and devices are the result of good analysis and may depend on different
                factors</li>
            <li>Technology drives the requirements:
                <ul>
                    <li>Audio frequency(~KHz) → Discrete components, wirewrap or PCB</li>
                    <li>Radio frequency(~MHz) → PCB (transmission line effect)</li>
                    <li>Million frequency(~GHz) → RF design (Geometric structures)</li>
                </ul>
            </li>
            <li>Throughput: The average rate of successful message delivers over a communication channel</li>
            <li>Knowing region of operation, we can pick option available for circuit design. Right choice → Part
                count(↓), board space(↓), Power(↓), Cost(↓), time to market(↓), reliability(↑)</li>
        </ul>

        <h3>ASIC (Application Specific Integrated Circuits)</h3>
        <p>It is an IC customized for particular use. For example chips designed solely to run cell phones. Modern ASIC
            includes 32 bit processor, ROM, RAM etc. Such ASIC are called System on Chip (SOC). Solve signal/data
            processing problems optimally in terms of high throughput and low power. Low cost but takes longer time to
            market.</p>

        <h3>Standard Cells</h3>
        <p>Group of transistors are interconnected structures that provides Boolean logic function or storage function.
            Simplest cells are direct representatives of adder, mux, flip-flops etc.</p>

        <h3>Programmable Logic Devices</h3>
        <ul>
            <li><strong>Gate Array:</strong> Analogous to Cu layer of PCB. Transistors, standard NAND, NOR gates placed
                at predefined position an manufactured in wafer. Late manufacture process → joined to logic as desired
                shorter time to market</li>
            <li><strong>Programmable Logic Array (PLA):</strong> Implement combinational logic. Set of programmable AND
                gates which link to set of programmable OR gate</li>
            <li><strong>Programmable Logic Device (PLD):</strong> To build reconfigurable logic circuits. E.g. ROM →
                store i/p logic as address; o/p logic → store in ROM</li>
            <li><strong>Programmable Array Logic (PAL):</strong> Fixed OR with programmable AND. O/P logic → registered
                or combinational</li>
            <li><strong>Electrically PLD (EPLD) or Complex PLD (CPLD):</strong> Non volatile configuration memory. Can
                implement complex logics</li>
            <li><strong>Field Programmable Gate Array (FPGA):</strong>
                <ul>
                    <li>Field → firmware can be modified in field without dissembling device or returning into
                        manufacturer</li>
                    <li>IC designed to configure by customer or designer after manufacture</li>
                    <li>Programmable logic components called logic blocks wired together to form complex logic plus it
                        has analog features → programmable slew rates</li>
                    <li>Uses HDL (hardware descriptive language) to implement logic functions</li>
                    <li>Low non-recurrent engineering cost but high unit cost in comparison to ASIC</li>
                    <li>Logic blocks plus embedded microprocessor to form complex system on programmable chips</li>
                </ul>
            </li>
        </ul>

        <h3>Microcontrollers vs Microprocessors</h3>
        <ul>
            <li><strong>Microcontrollers:</strong> CPU, I/O devices, program memory, data memory all in single chip</li>
            <li><strong>Microprocessors:</strong> Requires other parts to make workable computer</li>
        </ul>

        <h3>Selection of Microprocessor/Microcomputer</h3>
        <ul>
            <li>Experience</li>
            <li>Software dependent tools for particular processor</li>
            <li>Performance: Architecture dependent</li>
            <li>No. of peripheral function</li>
            <li>Memory</li>
            <li>Tools support to determine the appropriate processor</li>
            <li>Low power consumption</li>
        </ul>

        <h3>Performance Determination</h3>
        <ul>
            <li>Throughput</li>
            <li>Resolution</li>
            <li>Address space and available memory</li>
            <li>Language choice, code size, speed</li>
            <li>Predominant types of calculation: integer and floating point</li>
        </ul>

        <h3>No. of Peripheral Function</h3>
        <ul>
            <li>Math coprocessor</li>
            <li>Graphics accelerator</li>
            <li>Interrupt handler</li>
            <li>Data transfer and communication: DMA, SCSI, Serial I/O Ports</li>
            <li>Timer</li>
            <li>ADC and DAC</li>
            <li>Power drivers</li>
            <li>Watchdog timing (System reset in case of system unresponsiveness)</li>
        </ul>

        <h3>Memory</h3>
        <p>Require minimum size of memory. Always plan for and specify margin in the requirements for future updates and
            modifications. Size of RAM/ROM Depends on:</p>
        <ul>
            <li>Data array</li>
            <li>Stack</li>
            <li>Temporary and permanent variable</li>
            <li>Compiler overhead</li>
            <li>I/O buffer</li>
        </ul>

        <h3>Tools Support</h3>
        <ul>
            <li>Hardware emulator: Helps to debug both circuits and code</li>
            <li>Software tools: supports development on the selected processor</li>
            <li>Vendor: good support, good reputation, markedly affected development tools</li>
        </ul>

        <h3>Power Consumption</h3>
        <p>Power consumption within a processor affects:</p>
        <ul>
            <li>Cooling concerns</li>
            <li>Battery sizing</li>
        </ul>

        <h3>Reliability</h3>

        <div class="definition">
            <h3>Reliability Definition</h3>
            <p>How long the product will last? Two factors role in the reliability:</p>
            <ul>
                <li>Complexity: Fewer parts better</li>
                <li>Design margin: We must allow for stressing of components</li>
            </ul>
            <p>Two methods to measure reliability:</p>
            <ul>
                <li>Model prediction: help update estimates of reliability but are limited and cannot predict every
                    outcome</li>
                <li>Prototype test: find out many weaknesses and problems but are time consuming</li>
            </ul>
            <p>Combination of both is mostly used. Standard methods for modeling use formulas based on practical
                experience of failure rates and physical knowledge to relate environmental factors to the reliability of
                electronic components.</p>
        </div>

        <h3>Failure Rate Formula</h3>
        <p>The failure rate for a component is a generally a base rate modified by various factors:</p>
        <div class="formula">
            λ = λb × πe × πq × πa
        </div>
        <p>Where, λ = failure rate, λb = base failure rate, πe = environmental factor, πq = quality factor, πa =
            acceleration factor</p>

        <div class="formula">
            R(t) = e^(-λt)
        </div>
        <p>Where R(t) = Reliability, λ = failure rate, t = time</p>

        <h3>Fault Tolerance</h3>

        <div class="definition">
            <h3>Fault Tolerance Definition</h3>
            <p>Goes beyond the design and analysis for reliable operation and reduces the possibility of dysfunction or
                damage from abnormal stresses and failures. Allows a measure of continued operation in the event of
                problem. Three distinct area:</p>
            <ul>
                <li>Careful design</li>
                <li>Testable function</li>
                <li>Redundant Architecture</li>
            </ul>
        </div>

        <h3>Careful Design</h3>
        <p>Careful design can avoid many failures from abnormal stresses. Some design techniques that can reduce the
            probability of failure:</p>
        <ul>
            <li>Reduce overstress from heat with cooling and low dissipation design</li>
            <li>Use optoisolation or transformer coupling to stop overvoltage and leakage current</li>
            <li>Implement ESD protection</li>
            <li>Mount for shock and vibration</li>
            <li>Tie down wires and cables</li>
            <li>Prevent incorrect hookup; Use keyed connector</li>
        </ul>

        <h3>Testable Architecture</h3>
        <p>The process of testing and diagnosing failures within a system. Two possible configurations of testable
            architecture:</p>

        <h4>Simple Configuration</h4>
        <p>Provides Probe points/test points for a technician or instrument to stimulate circuits and record responses.
            Only the trained personnel must disassemble the system and remove the circuit for testing.</p>

        <h4>Complex Configuration</h4>
        <p>Dedicated internal circuitry called built in test (BIT) that tests the system and diagnoses problems without
            disassembly of the equipment so adds complexity and reduces reliability. The trade off for BIT is quicker
            diagnoses and repair versus higher reliability. An appropriate calibration standard is always necessary when
            you measure a result.</p>

        <h3>Redundant Architecture</h3>
        <p>The most complex and fault tolerant architecture are redundant architectures. They use multiple copies of
            circuitry and software to self check between functions. It is justified only when downtime for repair and
            maintenance cannot be tolerated.</p>

        <ul>
            <li><strong>Doubly redundant architecture:</strong> merely indicates a failure in one of the subsystems;
                this allows for quick repair.</li>
            <li><strong>Triply redundant architecture:</strong> uses voting between the outputs of three identical
                modules to select the correct value. It can have failure and still operate correctly.</li>
            <li><strong>Dissimilar redundancy:</strong> compares the output from modules with different software and
                hardware to select the correct value. It can survive failure and even indicate errors in design if one
                system is coded correctly and the others are not</li>
        </ul>
    </section>

    <section id="6.2">
        <h2>6.2 High-speed design: Bandwidth, decoupling, crosstalk, impedance matching</h2>

        <h3>Transmission Line Effects</h3>

        <div class="definition">
            <p>We should consider transmission line effect when clock of frequency exceeds 1 MHz in a circuit or system
                because the harmonics generated by the edges of the clock and signal pulses can easily be 20 or 30 times
                the fundamental.</p>

            <p>Two conservative criteria may be used to estimate when transmission line effect begins:</p>

            <h4>Circuit dimension vs signal wavelength:</h4>
            <p>If circuit dimension exceed 5% of the minimum wavelength, then signal path approaches a transmission line
                i.e. l > λ/20 where, l = length of signal path, λ = maximum wavelength of the signal.</p>

            <h4>Rise time vs propagation delay:</h4>
            <p>If the rise time of a signal is less than 4 times the propagation delay of the signal path, then the
                signal path approximates a transmission line with a characteristic impedance i.e. tr < 4tp where,
                    tr=rise time of signal, tp=propagation delay of the signal path.</p>

                    <p>Transmission line problems: BW, decoupling, ground bounce, crosstalk, impedance mismatch and
                        timing skew or delay</p>
        </div>

        <h3>Bandwidth</h3>

        <div class="definition">
            <p>Limits the bandwidth of the signals within a system is the most effective way to reduce noise, EMI and
                problems with transmission lines. May limit the bandwidth either by increasing the rise or fall times of
                the signal edges or by reducing the clock frequency.</p>

            <p>Selecting the appropriate logic family will set the edge rates and the consequent limit on transmission
                line concerns. One criterion for selecting logic according to transmission line effects is a ratio less
                than 4 between the rise time, tr and the propagation delay, tp i.e. (tr/tp < 4).</p>

                    <p>Slower edge rates allow longer interconnections between circuits</p>
        </div>

        <h3>Decoupling</h3>

        <div class="definition">
            <p>Switching of digital logic causes transients of current on the voltage supply through inductive impedance
                of the circuit. Decoupling capacitor minimizes inductive loop area thus reducing impedance of power
                supply circuit. Shortest possible path for decoupling capacitor is best.</p>

            <p>General recommendation for Decoupling:</p>
            <ul>
                <li>Use decoupling capacitor near each chip for two sided board</li>
                <li>Use a large filter capacitor at the power entry point</li>
                <li>Use a ferrite bead at the power entry point to the circuit board</li>
            </ul>
        </div>

        <h3>Ground Bounce</h3>

        <div class="definition">
            <p>Ground bounce is a voltage surge that couples through the ground leads of a chip into non switching
                output and injects glitches onto signal lines. Asynchronous signals are more prone to ground bounce.</p>

            <p>Can reduce ground bounce by:</p>
            <ul>
                <li>Reducing loop inductance</li>
                <li>Reducing input gate capacitance</li>
                <li>Choosing logic families that either control the signal transition or have slower fall times</li>
            </ul>
        </div>

        <h3>Crosstalk</h3>

        <div class="definition">
            <p>Coupling electromagnetic energy from an active signal to a passive line. Coupling mechanism: capacitive
                or inductive. Depends on line spacing, length and characteristic impedance, signal rise times.</p>

            <p>To reduce crosstalk:</p>
            <ul>
                <li>Decrease coupling length and characteristic impedance</li>
                <li>Increase rise time of signal</li>
                <li>Better layout and design of</li>
            </ul>

            <h4>Avoiding Crosstalk:</h4>
            <ul>
                <li>Don't run parallel traces for long distances – particularly asynchronous signal</li>
                <li>Increase separation between conductors</li>
                <li>Shield clock lines with ground strips</li>
                <li>Reduce magnetic coupling by reducing the loop area of circuits</li>
                <li>Sandwich signal lines between return planes</li>
                <li>Isolate the clock, chip-select, chip-enable, read and write lines</li>
            </ul>
        </div>

        <h3>Stub Discontinuities</h3>

        <div class="definition">
            <p>Stub discontinuities cause impedance mismatch and signal reflection by connecting multiple circuits to a
                single line. Each Connection of a stub divides the impedance and splits the power of the signal. Make
                them very short, even zero to reduce the effect of stub discontinuities. Good layout and design</p>
        </div>

        <h3>Timing</h3>

        <div class="definition">
            <p>Clock frequency increases, propagation delays, timing skew, and phase jitter (change in phase) render
                logic design useless. Clock signal is skewed or arrived at different propagation delays of the clock
                signal to different destinations (propagation delay → different clock signal to arrive at different
                time). Differences in propagation delay of rising and falling edges change the duty cycle of the signal
                or shrink/expand it. Adequate setup and hold time is required to latch data reliably.</p>
        </div>
    </section>

    <section id="6.3">
        <h2>6.3 PCB design: Component placement, trace routing, signal integrity, and ground loops</h2>

        <h3>Component Placement</h3>

        <div class="definition">
            <p>Affects circuit operation, manufacturing edge, and the probability of design errors. General rules:</p>
            <ul>
                <li>Group high current circuit near the connector to isolate stray currents and near the edge of the PCB
                    to remove heat</li>
                <li>Group high frequency circuits near the connector to reduce path length, crosstalk and noise</li>
                <li>Group low power and low frequency circuits away from high current and high frequency circuits</li>
                <li>Group analog circuits separately from digital circuits</li>
                <li>Grouping components and circuits appropriately will reduce crosstalk and noise and will dissipate
                    heat efficiently</li>
            </ul>
        </div>

        <h3>Routing Signal Traces</h3>

        <div class="definition">
            <p>Poor layout, false triggering of logic due to formation of capacitive and inductive parasites with stubs,
                vias, IC pins, multiple loads and traces; setup and hold time violation and transmission delay.</p>

            <h3>Trace Density</h3>
            <p>Trade off between greater cost and difficulty in producing the denser circuit board. As you squeeze
                signal traces together on a board, you can space components closer and reduce the size of the circuit
                boards. Smaller boards, allowed by higher trace densities, provide flexibility in packaging your
                product, reduce the cost of material and may degrade signal integrity.</p>

            <h3>Common Impedance</h3>
            <p>Minimize the number of circuits that share the same return path. Voltage drops (caused by current
                switching) on the ground line (return path) increase system noise. Common impedance paths cause
                components to reside at different ground potentials from one another. You can reduce the voltage drops,
                and hence the noise by lowering effective impedance. Unbroken return plane is the best way. Choosing the
                right logic family and using decoupling capacitors will help by reducing the magnitude of current
                pulses.</p>

            <h3>Distribute Signal and Return</h3>
            <p>Address the issues of return path early in design. Long return path can shift the ground potential
                excessively, decrease noise margins, and cause false switching. If the return is longer than signal,
                then the current has high inductance path that cause noise spikes in the ground system. Large loops of
                current have high inductance or impedance and radiated noise is often proportional to return path
                impedance and loop area.</p>
        </div>

        <h3>Grounding and Shielding</h3>

        <div class="definition">
            <p>Grounds & Shields improve safety and reduce interference from noise. Properly connected grounds reduce
                dangerous voltage differentials between instruments. Shields minimize interference from noise by
                reducing noise emission and noise susceptibility.</p>

            <h3>Design Steps for Grounding and Shielding</h3>
            <ol>
                <li>Understand the safety and noise issues for a product</li>
                <li>Know the possible mechanisms of energy coupling</li>
                <li>Define the necessary grounds and shields</li>
            </ol>
        </div>

        <h3>Safety Grounding</h3>

        <div class="definition">
            <p>Seeks to reduce the voltage differentials between exposed conducting surfaces. Should have many
                connections between the exposed conducting surfaces. Safety ground must be a permanent, continuous, low
                impedance conductor with adequate capacity that runs from the power source to load. Don't rely on a
                metallic conductor to form the conductive path for the safety ground, corrosion and breaks can open the
                circuit. Don't rely on building steel either because circulating currents can generate large and noisy
                ground potentials. A separate dedicated conductor will avoid these problems.</p>

            <p>Three things to remember when to develop wiring for powering instruments:</p>
            <ul>
                <li>Consider the instrument and power mains as an integrated system</li>
                <li>Always draw your ground scheme to understand the possible circuit paths</li>
                <li>Don't blindly rely on building steel for a ground conductor</li>
            </ul>
        </div>

        <h3>Signal Referencing</h3>

        <div class="definition">
            <p>Seeks to reduce the voltage differentials between reference points. Should have one connection between
                reference points at low frequency. In either case, ground is not the return path for a signal. Both
                safety and signal grounds nominally conduct current.</p>
        </div>

        <h3>Ground Loop</h3>

        <div class="definition">
            <p>A ground loop is a complete circuit that allows unwanted current to flow into the ground. Substantial
                current in a ground path (as opposed to a return path) can produce voltage differences across the ground
                resistance and raise the ground potential at the loads. Conversely, significant potentials in the ground
                can force unwanted current to flow between circuits. The use of high frequency and reduction of ground
                loop can reduce conductive coupling or conductive noise.</p>
        </div>
    </section>

    <section id="6.4">
        <h2>6.4 Noise and noise coupling mechanism, noise prevention, filtering, ferrite beads, decoupling capacitors,
            and ESD & its prevention</h2>

        <h3>Noise and Noise Coupling Mechanism</h3>

        <div class="definition">
            <h3>Noise Definition</h3>
            <p>Noise is unwanted electrical activity coupled from one circuit into another. 3 components: A source, A
                coupling mechanism, and A receiver</p>

            <h3>Coupling Mechanisms</h3>
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Coupling Frequency Range</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Conductive</td>
                        <td>DC to 10 MHz Requires a complete circuit loop (really no upper limit to frequency)</td>
                    </tr>
                    <tr>
                        <td>Inductive</td>
                        <td>Usually > 3KHz Larger loop area in circuit means greater self inductance and mutual
                            inductance associated with heavy current (can get significant coupling from 50 Hz-60 Hz
                            power)</td>
                    </tr>
                    <tr>
                        <td>Capacitive</td>
                        <td>Usually > 1 KHz Greater spacing between conductors reduces coupling associated with high
                            voltage (can get significant coupling from 50 Hz-60 Hz power)</td>
                    </tr>
                    <tr>
                        <td>Electromagnetic</td>
                        <td>Usually > 15 MHz Needs antennas greater than 1/20 of wave length in both the source and
                            susceptible circuit</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3>Conductive Coupling</h3>

        <div class="definition">
            <p>Requires a connection between source and receiver that completes a continuous circuit. Conductive
                coupling usually occurs at lower frequencies and is often caused by incorrect grounding. Such
                connections are inadvertent and difficult to find; such connections are called Sneak circuits. A ground
                loop is a complete circuit that allows unwanted current to flow into the ground.</p>
        </div>

        <h3>Inductive Coupling</h3>

        <div class="definition">
            <p>An Inductive coupling mechanism requires a current loop that generates changing magnetic flux. Generally,
                a current transient creates the changing magnetic flux. The induced voltage in a magnetically coupled
                circuit is proportional to the change of current and loop area. Reducing the loop area will reduce the
                inductive reactance of a circuit. For frequencies above 3 MHz, (dv/dt)/(di/dt) << 377Ω.</p>

                    <p>Current follows the path of lowest impedance, not necessarily lowest resistance. Therefore,
                        current will follow the path of minimum inductive reactance; this means the current will
                        minimize loop area in a circuit. A slot in the ground plane of a circuit board will increase the
                        loop area of a circuit; so avoid such slots. The long, straight wires encompass significant loop
                        area that provides an inductive reactance. Twisting the pairs of signal and return lines
                        together eliminates the loop area and the mutual inductive coupling between circuits.</p>
        </div>

        <h3>Capacitive Coupling</h3>

        <div class="definition">
            <p>Capacitive coupling mechanism requires both proximity between circuits and a changing voltage. It occurs
                when two conductors are placed at some distance apart and voltage level and frequency are changed.
                Capacitive coupling of noise becomes a factor for frequency above 1 KHz. Generally, the total circuit
                impedance is high; i.e. both the source and load impedance are large. (dv/dt)/(di/dt) >> 377Ω.
                Capacitive coupling can be reduced by separation of conductors and appropriate shielding.</p>
        </div>

        <h3>Electromagnetic Coupling</h3>

        <div class="definition">
            <p>Electromagnetic coupling or radiative coupling becomes a factor only when the frequency of operation
                exceeds 20 MHz. f < 200 MHz, cables are primary sources and receivers for electromagnetic coupling. f>
                    200 MHz, PCB traces begin to radiate & couple energy. Generally, the length of conductor must be
                    longer than 5% of the bandwidth i.e. l > λ/20. Pseudo impedance factor between 100Ω and 500Ω.
                    (dv/dt)/(di/dt) = 377Ω. The frequency of signal must be reduced. Use magnetic plate shielding.</p>
        </div>

        <h3>Single Point Grounding and Ground Loop Grounding</h3>

        <div class="definition">
            <p>Grounding provides safety and signal reference. General principle is to minimize the voltage differential
                between your instrument and a reference point i.e. ΔV = 0 between instruments. Use the return conductors
                as a signal reference.</p>
        </div>

        <h3>Filtering and Smoothing</h3>

        <div class="definition">
            <h3>Filtering Definition</h3>
            <p>Only filtering reduces conductive noise coupling. A filter can either block or pass energy by three
                criteria:</p>
            <ul>
                <li><strong>Frequency:</strong>
                    <ul>
                        <li>LPF passes low frequency energy and rejects high frequency energy</li>
                        <li>HPF passes high frequency energy and rejects low frequency energy</li>
                    </ul>
                </li>
                <li><strong>Mode (Common or Differential):</strong>
                    <ul>
                        <li>Common-mode noise injects current in the same direction in both the signal and return lines.
                            Filter diverts common mode noise current to ground</li>
                        <li>Differential-mode noise injects current in opposite directions in the signal and return
                            lines. Filter blocks common mode currents while passing differential mode current</li>
                    </ul>
                </li>
                <li><strong>Amplitude (Surge suppression):</strong>
                    <ul>
                        <li>Amplitude selective filters reduce large transients or spikes e.g. surge suppressors</li>
                        <li>Time-average filter: Implemented in software, reduce the effect of noise on data within a
                            signal</li>
                        <li>Time-synchronous filter: Stop running at periodic disturbance e.g. periodic switching in
                            power supply</li>
                    </ul>
                </li>
            </ul>
        </div>

        <h3>Minimize Bandwidth</h3>

        <div class="definition">
            <p>A low-pass filter reduces high frequency emissions and susceptibility for signal applications. Filtering
                input signals may improve the noise immunity of the circuit. Sharp edges on pulses will have large
                Fourier coefficient. Slowing the rise and fall times of pulse edge will reduce the bandwidth of signals.
            </p>
        </div>

        <h3>Ferrite Beads</h3>

        <div class="definition">
            <p>Ferrite beads provide one form of filtering based on frequency. A ferrite bead is a magnetically
                permeable sleeve that fits around a wire. It presents inductive impedance to signals that attenuates
                high frequencies. Ferrite beads are best suited to filter low level signals and low current power feeds
                to circuit board. A ferrite bead is a passive electric component used to suppress high frequency noise
                in electronic circuits. It is a specific type of electronic choke. Ferrite beads employ the mechanism of
                high dissipation of high frequency currents in a ferrite to build high frequency noise suppression
                devices. The ferrite bead is effectively an inductor with a very small Q factor.</p>
        </div>

        <h3>Decoupling and Bypass Capacitors</h3>

        <div class="definition">
            <p>They provide Filtering based on frequency. They filter and smooth out the spikes in DC power of ICs.
                During a logic transition, a momentary short circuit from power to return in a digital device demands a
                large current transient. A decoupling capacitor can supply the momentary pulse of current and
                effectively decouple the switching spike from the power supply. They reduce the impedance of power
                supply circuit. Inductance in the power supply attenuates the effect of switching current transients by
                producing large voltage spikes. Decoupling capacitor provides this demand for shorter time. Mitigate the
                effect of inductance by reducing effective loop area between Power supply and the ICs. Reduce impedance
                of power supply. If you arbitrarily make the decoupling capacitor too large, you will move the resonance
                frequency of the supply inductance and decoupling capacitor down into the range of operation of your
                circuit and cause excessive ringing in the supply. Also, large capacitors have larger parasitic
                inductances than smaller decoupling capacitor.</p>
        </div>

        <h3>Line Filters, Isolators and Transient Suppressors</h3>

        <div class="definition">
            <p>Line filters and Isolators → Mode basis. Transient Suppressor → Amplitude basis. Common mode filters for
                AC power lines diverts noise to ground, but beware of polluting the signal reference ground with noise.
                An optoisolator can eliminate common mode noise by interrupting the conductive path. A differential mode
                filter has to separate noise from signal by criteria other than current direction; a low pass filter is
                an example of differential mode filter that uses frequency as the selection criterion. Transient →
                Machinery switching on or off produces transients through inductive "kick". The opening or closing of
                switches changes the load current instantaneously and generates a sizable voltage across the line
                inductance that affects the other loads.</p>

            <h3>Transient Protection Approaches:</h3>
            <ul>
                <li><strong>Filter:</strong> It removes the high frequency components of the energy associated with the
                    sharp edge of a spike. Consequently, the peak of the spike is flattened.</li>
                <li><strong>Crowbar (thyristor):</strong> It detects an over voltage and short circuit current until the
                    input voltage is cycled off and on again.</li>
                <li><strong>Arching discharge:</strong> It occurs across gap into a gas tube. The initial breakdown of
                    the gas requires a fairly high voltage; but once the arc is established, the holding voltage is much
                    lower. It is used in telephone circuits to suppress surge caused by lightning.</li>
                <li><strong>Voltage clamp (Zener):</strong> It shorts the excess energy to prevent an overvoltage
                    condition. Fast, more cost, low current capacity than MOV (Metal oxide varister).</li>
            </ul>
        </div>

        <h3>Shielding Mechanism</h3>

        <div class="definition">
            <p>Shielding either prevents noise energy from coupling between circuits or suppresses it.</p>
            <ul>
                <li>Magnetic flux – inductive shielding</li>
                <li>Electric field – capacitive shielding</li>
                <li>Electromagnetic wave propagation – electromagnetic shielding</li>
            </ul>
        </div>

        <h3>Inductive Shielding</h3>

        <div class="definition">
            <p>It is concerned with Self-inductance and Mutual inductance. It reduces noise coupling by reducing or
                rerouting magnetic flux. The most effective inductive shielding minimizes loop area, separating circuits
                and reducing the change in current help, while metal or magnetically permeable enclosures place a
                distant third in usefulness. Magnetic noise depends on loop area and current in the emitting and
                receiving circuits. Coaxial cable has minimal loop area and may be preferable for high frequencies (>
                1MHz) because it provides both capacitive shielding and controlled impedance. Always pair signals with
                return, otherwise, we will not gain any inductive shielding. On circuit boards, Make sure that the
                return path is always under the signal conductor to minimize loop area. Avoid slots in ground plane,
                which increase the loop area of signal path. Enclosures provide magnetic shielding by allowing eddy
                currents to reflect or absorb interference energy. These enclosures are heavy, expensive and frequency
                dependent, but sometimes they are only solution.</p>
        </div>

        <h3>Capacitive Shielding</h3>

        <div class="definition">
            <p>Capacitive shielding reduces noise coupling by reducing or rerouting the electrical charge in an electric
                field. Capacitive shields shunt to ground charge that is capacitively coupled. Capacitive coupling
                provides a path for the injection of noise charges. At low frequencies (< 1 MHz), connect a capacitive
                    shield at one point if the signal circuit is grounded. Multiple connections can form ground loops.
                    Capacitive shielding can be improved by reducing: Noise voltage and frequency, Signal impedance,
                    Floating metal surfaces. Conversely, multiple ground connections are necessary for high frequencies
                    (> 1 MHz). Stray capacitance at the ungrounded end of a shield can complete a ground loop.
                    Therefore, we should ground both ends of a long (relative to wavelength) shield. A mutual enclosure
                    can be an effective electrostatic shield (transformer), or faraday shield to prevent capacitive
                    coupling.</p>
        </div>

        <h3>Electromagnetic Shielding</h3>

        <div class="definition">
            <p>Electromagnetic shielding reduces emissions and reception. Emission sources: Lightning, Discharges, Radio
                and TV transmitters, High-frequency circuits. Electromagnetic Interference (EMI) always begins as
                conductive (current in wires) becomes radioactive, and ends as conductive (fields interact with
                circuitry). Several techniques can reduce EMI:</p>
            <ul>
                <li>Reduced bandwidth (longer wavelength)</li>
                <li>Good layout and signal routing</li>
                <li>Shielded enclosures</li>
            </ul>
            <p>As shielded enclosure should ideally be a completely closed conducting surface. Effective enclosure is
                one that has watertight metallic seams and openings. Openings include cooling vents, cable penetration
                with slots larger than a fraction of a wavelength (> λ/20), push buttons, and monitor screens that can
                leak electromagnetic radiation. Similarly, cable shields must seal completely around each connector.</p>
        </div>

        <h3>Electrostatic Discharge (ESD) Prevention</h3>

        <div class="definition">
            <h3>ESD Definition</h3>
            <p>Electrostatic discharge (ESD) is a discharge at very high voltage and very low current that readily
                damages sensitive electronics. ESD can range from hundreds to tens of thousands of volts. Any instrument
                containing integrated circuits is susceptible. ESD transfers electrical charge in three stages: pickup,
                storage and discharge. Usually mechanical rubbing between dry, insulated materials transfers the charge
                from source to storage. Often the storage medium is person, who then unwillingly delivers the damaging
                discharge. Proximity or physical contact discharges the charge from storage. Several conditions
                including humidity, speed of the activity, and material affect the charge transfer. The discharge
                waveform of ESD has a fast rise time and short duration.</p>
        </div>

        <h3>ESD Protection</h3>

        <div class="definition">
            <p>Several schemes including grounding, shielding and transient limiters can protect circuits from ESD.
                Input gates are the most susceptible to damage, so we should use surge-limiters on input lines as shown
                in below figure.</p>

            <p>Generally zener diodes and MOVs are used to limit surges. Zener diodes tend to turn on faster, while MOVs
                are cheaper and handle large peak current. For prevention, we need to eliminate the activities and
                materials that create high static charge control methods including the following:</p>
            <ul>
                <li>Grounding</li>
                <li>Protective handling, Protective material, Humidity</li>
            </ul>

            <h3>Checklist to make work areas less prone to ESD:</h3>
            <ul>
                <li>Use a "static-free" workstation, and wear a wrist ground strap. Discharge static before handling
                    devices</li>
                <li>Keep parts in original container. Minimize handling of components</li>
                <li>Pickup devices by their bodies, not their leads</li>
                <li>Never slide a semiconductor over any surface</li>
                <li>Use conductive or antistatic containers for storage and transport of components</li>
                <li>Clear all plastic, vinyl, Styrofoam from work area</li>
            </ul>
        </div>

        <h3>General Rules for Design</h3>

        <div class="definition">
            <p>When design and develop product, must include grounding and shielding. Also need to follow these general
                guidelines:</p>
            <ul>
                <li>System Characterization: Establish the following:
                    <ul>
                        <li>Grounding options</li>
                        <li>Source and load impedance</li>
                        <li>Frequency bandwidth</li>
                        <li>Determine possible coupling mechanism</li>
                        <li>Diagram the topology of circuit paths and reduce the loops (ground loops, inductive loops in
                            signal and power circuits)</li>
                    </ul>
                </li>
                <li>Standards: Undoubtely encounter regulations and standards whatever market, product will compete in.
                    Have to meet or surpass the limits of emission or susceptibility in both conducted and radiated
                    environments. Regulations types may be commercial or military</li>
                <li>Procedure (good design technique): Good design techniques for grounding and shielding have a few
                    basic rules:
                    <ul>
                        <li>Reduce Frequency bandwidth</li>
                        <li>Balance currents</li>
                        <li>Route signals for self shielding: a return (ground) plane, short traces, decoupling
                            capacitors</li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
</div>




<!-- <==========================chapter 7 =========================> -->



<div id="chapter_7">
    <h1>7. Software for Instrumentation Application (6 hours)</h1>

    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#7.1">7.1 Overview of software engineering</a></li>
            <li><a href="#7.2">7.2 Types of software</a></li>
            <li><a href="#7.3">7.3 Software development life cycle (SDLC), software process models</a></li>
            <li><a href="#7.4">7.4 Software reliability vs hardware reliability</a></li>
            <li><a href="#7.5">7.5 Software bugs, software testing, different levels of testing</a></li>
        </ul>
    </div>

    <section id="7.1">
        <h2>7.1 Overview of software engineering</h2>

        <div class="definition">
            <h3>Software in Instrumentation and Control Systems</h3>
            <p>Software is pervasive in electronic products such as televisions, video recorders, remote controls,
                microwave ovens, sewing machines, and cloth washers all have embedded microcontrollers. Software
                accounts for 50-75 percent of a microcontroller project. General methods to improve software are code
                generation, reliability, maintainability and correctness.</p>
            <p>Instrumentation and control applications require specialized software that can interact with hardware
                components, process sensor data, and provide control functions. This software must be reliable,
                efficient, and often real-time in nature to meet the demands of industrial and scientific applications.
            </p>
        </div>

        <h3>Role of Software in Instrumentation</h3>
        <p>Software plays a critical role in modern instrumentation systems by:</p>
        <ul>
            <li>Processing raw sensor data and converting it into meaningful information</li>
            <li>Implementing control algorithms for automated systems</li>
            <li>Providing user interfaces for system configuration and monitoring</li>
            <li>Enabling communication between different components of the instrumentation system</li>
            <li>Performing data analysis and visualization</li>
            <li>Implementing safety protocols and fault detection mechanisms</li>
        </ul>

        <h3>Challenges in Instrumentation Software</h3>
        <p>Developing software for instrumentation systems presents several challenges:</p>
        <ul>
            <li>Real-time constraints: Many instrumentation systems require timely responses to events</li>
            <li>Hardware-software integration: Close coupling with specific hardware components</li>
            <li>Reliability requirements: Instrumentation systems often operate in critical environments</li>
            <li>Environmental factors: Software must function reliably under varying temperature, humidity, and
                electromagnetic conditions</li>
            <li>Security concerns: Protecting sensitive data and preventing unauthorized access</li>
            <li>Long-term maintenance: Instrumentation systems often have long lifespans requiring ongoing support</li>
        </ul>
    </section>

    <section id="7.2">
        <h2>7.2 Types of software</h2>

        <h3>System Software</h3>
        <p>System software provides the basic functions that allow a computer to operate and manage hardware resources.
            In instrumentation systems, system software includes:</p>
        <ul>
            <li><strong>Operating systems:</strong> Real-time operating systems (RTOS) for embedded instrumentation
                devices</li>
            <li><strong>System drivers:</strong> Software that controls specific hardware components like ADCs, DACs,
                and communication interfaces</li>
            <li><strong>Firmware:</strong> Software embedded in hardware devices that provides low-level control</li>
        </ul>

        <h3>Programming Software</h3>
        <p>Programming software tools are used to develop, test, and maintain software applications. For instrumentation
            systems, these include:</p>
        <ul>
            <li><strong>Compilers:</strong> Translate high-level code into machine code for the target hardware</li>
            <li><strong>Debuggers:</strong> Tools for finding and fixing errors in software</li>
            <li><strong>Interpreters:</strong> Execute code line-by-line for development and testing</li>
            <li><strong>Linkers:</strong> Combine object files into executable programs</li>
            <li><strong>Text editors:</strong> For writing and modifying source code</li>
        </ul>

        <h3>Application Software</h3>
        <p>Application software is designed for specific tasks and end-users. In instrumentation systems, application
            software includes:</p>
        <ul>
            <li><strong>Industrial/Business automation:</strong> Software for process control, monitoring, and data
                acquisition</li>
            <li><strong>User interfaces:</strong> Graphical interfaces for system configuration and monitoring</li>
            <li><strong>Simulation software:</strong> Tools for modeling and simulating instrumentation systems</li>
            <li><strong>Data analysis tools:</strong> Software for processing and analyzing measurement data</li>
            <li><strong>Database systems:</strong> For storing and managing instrument data</li>
            <li><strong>Specialized applications:</strong> Such as medical device software, environmental monitoring
                systems, etc.</li>
        </ul>

        <h3>Embedded Software</h3>
        <p>Embedded software is specifically designed for dedicated functions within larger systems. In instrumentation
            applications, embedded software:</p>
        <ul>
            <li>Runs directly on hardware without a general-purpose operating system</li>
            <li>Is optimized for specific hardware constraints (memory, processing power)</li>
            <li>Often has real-time requirements</li>
            <li>Is tightly integrated with hardware components</li>
            <li>Typically has limited or no user interface</li>
        </ul>
    </section>

    <section id="7.3">
        <h2>7.3 Software development life cycle (SDLC), software process models</h2>

        <h3>Software Development Life Cycle (SDLC)</h3>
        <p>SDLC is a framework that describes the activities performed at each stage of a software development project.
            It provides a structured approach to software development, ensuring quality and efficiency throughout the
            process.</p>

        <h3>Waterfall Model</h3>
        <div class="definition">
            <p>The Waterfall Model is a linear sequential approach to software development. Each phase must be completed
                before the next phase begins, with little or no overlap between phases.</p>
            <p>Phases:</p>
            <ol>
                <li><strong>Requirements:</strong> Defines needed information, function, behavior, performance and
                    interfaces.</li>
                <li><strong>Design:</strong> Data structures, software architecture, interface representations,
                    algorithmic details.</li>
                <li><strong>Implementation:</strong> Source code, database, user documentation, testing.</li>
            </ol>
        </div>

        <h3>Waterfall Model Strengths</h3>
        <ul>
            <li>Easy to understand and use</li>
            <li>Provides structure to inexperienced staff</li>
            <li>Milestones are well understood</li>
            <li>Sets requirements stability</li>
            <li>Good for management control (plan, staff, track)</li>
            <li>Works well when quality is more important than cost or schedule</li>
        </ul>

        <h3>Waterfall Model Deficiencies</h3>
        <ul>
            <li>All requirements must be known upfront</li>
            <li>Deliverables created for each phase are considered frozen – inhibits flexibility</li>
            <li>Can give a false impression of progress</li>
            <li>Does not reflect problem-solving nature of software development – iterations of phases</li>
            <li>Integration is one big bang at the end</li>
            <li>Little opportunity for customer to preview the system (until it may be too late)</li>
        </ul>

        <h3>When to use the Waterfall Model</h3>
        <ul>
            <li>Requirements are very well known</li>
            <li>Product definition is stable</li>
            <li>Technology is understood</li>
            <li>New version of an existing product</li>
            <li>Porting an existing product to a new platform</li>
        </ul>

        <h3>Prototyping Model</h3>
        <div class="definition">
            <p>The Prototyping Model is used when customers do not know the exact project requirements beforehand. A
                prototype of the end product is first developed, tested, and refined as per customer feedback repeatedly
                until a final acceptable prototype is achieved which forms the basis for developing the final product.
            </p>
        </div>

        <h3>Steps of Prototyping Model</h3>
        <ol>
            <li><strong>Requirement Gathering and Analysis:</strong> Users are asked about what they expect or want from
                the system.</li>
            <li><strong>Quick Design:</strong> Basic design of the requirement for a quick overview.</li>
            <li><strong>Build a Prototype:</strong> Building an actual prototype from the knowledge gained from
                prototype design.</li>
            <li><strong>Initial User Evaluation:</strong> Preliminary testing where the customer provides feedback on
                strengths and weaknesses of the design.</li>
            <li><strong>Refining Prototype:</strong> Improving the design based on customer feedback and suggestions.
            </li>
            <li><strong>Implement Product and Maintain:</strong> Final system testing and distribution to production.
            </li>
        </ol>

        <h3>Pros and Cons of Prototyping Model</h3>
        <table class="comparison-table">
            <thead>
                <tr>
                    <th>Advantages</th>
                    <th>Disadvantages</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Customers get to see the partial product early in the life cycle</td>
                    <td>Costly concerning time as well as money</td>
                </tr>
                <tr>
                    <td>New requirements can be easily accommodated</td>
                    <td>Poor Documentation due to continuously changing requirements</td>
                </tr>
                <tr>
                    <td>Missing functionalities can be easily figured out</td>
                    <td>Difficulty accommodating all changes demanded by the customer</td>
                </tr>
                <tr>
                    <td>Error detection much earlier saving effort and cost</td>
                    <td>Uncertainty in determining number of iterations required</td>
                </tr>
                <tr>
                    <td>Developed prototype can be reused for more complicated projects</td>
                    <td>Customers may demand actual product delivery too soon</td>
                </tr>
                <tr>
                    <td>Flexibility in design</td>
                    <td>Developers may end up with sub-optimal solutions</td>
                </tr>
            </tbody>
        </table>

        <h3>When to use Prototyping Model</h3>
        <ul>
            <li>Requirements not clearly understood or unstable</li>
            <li>Requirements changing quickly</li>
            <li>Developing user interfaces, high-technology software-intensive systems</li>
            <li>Systems with complex algorithms and interfaces</li>
            <li>Demonstrating technical feasibility of the product</li>
        </ul>

        <h3>Incremental Model</h3>
        <div class="definition">
            <p>The Incremental Model constructs a partial implementation of a total system, then slowly adds increased
                functionality. The model prioritizes requirements of the system and implements them in groups. Each
                subsequent release of the system adds function to the previous release, until all designed functionality
                has been implemented.</p>
        </div>

        <h3>Incremental Model Strengths</h3>
        <ul>
            <li>Develop high-risk or major functions first</li>
            <li>Each release delivers an operational product</li>
            <li>Customer can respond to each build</li>
            <li>Uses "divide and conquer" breakdown of tasks</li>
            <li>Lowers initial delivery cost</li>
            <li>Initial product delivery is faster</li>
            <li>Customers get important functionality early</li>
            <li>Risk of changing requirements is reduced</li>
        </ul>

        <h3>Incremental Model Weaknesses</h3>
        <ul>
            <li>Requires good planning and design</li>
            <li>Requires early definition of complete system to allow for definition of increments</li>
            <li>Well-defined module interfaces are required</li>
            <li>Total cost of complete system is not lower</li>
        </ul>

        <h3>When to use Incremental Model</h3>
        <ul>
            <li>Risk, funding, schedule, program complexity, or need for early realization of benefits</li>
            <li>Most requirements known up-front but expected to evolve over time</li>
            <li>Need to get basic functionality to market early</li>
            <li>On projects with lengthy development schedules</li>
            <li>On projects with new technology</li>
        </ul>

        <h3>Agile Model</h3>
        <div class="definition">
            <p>Agile models speed up or bypass one or more life cycle phases. They are usually less formal and reduced
                scope, used for time-critical applications in organizations that employ disciplined methods.</p>
        </div>

        <h3>Agile Methods</h3>
        <ul>
            <li>Adaptive Software Development (ASD)</li>
            <li>Feature Driven Development (FDD)</li>
            <li>Crystal Clear</li>
            <li>Dynamic Software Development Method (DSDM)</li>
            <li>Rapid Application Development (RAD)</li>
            <li>Scrum</li>
            <li>Extreme Programming (XP)</li>
            <li>Rational Unified Process (RUP)</li>
        </ul>

        <h3>Extreme Programming (XP)</h3>
        <p>XP is a lightweight, agile methodology for small-to-medium-sized teams developing software with vague or
            rapidly changing requirements. Coding is the key activity throughout a software project.</p>

        <h3>XP Practices</h3>
        <ol>
            <li><strong>Planning game:</strong> Determine scope of next release by combining business priorities and
                technical estimates</li>
            <li><strong>Small releases:</strong> Put simple system into production, then release new versions in very
                short cycles</li>
            <li><strong>Metaphor:</strong> All development guided by simple shared story of how system works</li>
            <li><strong>Simple design:</strong> System designed as simply as possible; extra complexity removed as soon
                as found</li>
            <li><strong>Testing:</strong> Programmers continuously write unit tests; customers write tests for features
            </li>
            <li><strong>Refactoring:</strong> Programmers continuously restructure system without changing behavior to
                remove duplication and simplify</li>
            <li><strong>Pair-programming:</strong> All production code written with two programmers at one machine</li>
            <li><strong>Collective ownership:</strong> Anyone can change any code anywhere in system at any time</li>
            <li><strong>Continuous integration:</strong> Integrate and build system many times a day – every time a task
                is completed</li>
            <li><strong>40-hour week:</strong> Work no more than 40 hours a week as a rule</li>
            <li><strong>On-site customer:</strong> User available full-time to answer questions</li>
            <li><strong>Coding standards:</strong> Programmers write all code in accordance with rules emphasizing
                communication through code</li>
        </ol>
    </section>

    <section id="7.4">
        <h2>7.4 Software reliability vs hardware reliability</h2>

        <h3>Software Reliability</h3>
        <div class="definition">
            <p>Software reliability refers to the probability of failure-free operation of a software system for a
                specified time in a specified environment. Unlike hardware, which wears out over time, software does not
                physically degrade but can develop faults due to design errors, implementation mistakes, or changing
                environments.</p>
        </div>

        <h3>Phases of Bugs in Software</h3>
        <table class="comparison-table">
            <thead>
                <tr>
                    <th>Phase</th>
                    <th>Description</th>
                    <th>Examples</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Intent</td>
                    <td>Wrong assumptions or misunderstandings</td>
                    <td>Correctly solving wrong problems, viruses, slang-limits of operation defined too broadly or
                        narrowly</td>
                </tr>
                <tr>
                    <td>Translation</td>
                    <td>Incorrect algorithm, analysis, or interpretation</td>
                    <td>Incorrect algorithm, incorrect analysis, misinterpretation</td>
                </tr>
                <tr>
                    <td>Execution</td>
                    <td>Errors during program execution</td>
                    <td>Semantic errors, syntax errors, logic errors, range errors, truncation errors, data errors,
                        language misuse</td>
                </tr>
                <tr>
                    <td>Operation</td>
                    <td>Errors during system operation</td>
                    <td>Changing paradigm, interface errors, performance issues, hardware errors, human errors</td>
                </tr>
            </tbody>
        </table>

        <h3>Hardware Reliability</h3>
        <div class="definition">
            <p>Hardware reliability refers to the ability of physical components to function without failure under
                specified conditions for a specified period of time. Hardware reliability is typically characterized by
                physical wear and tear, environmental factors, and manufacturing defects.</p>
        </div>

        <h3>Key Differences Between Software and Hardware Reliability</h3>
        <table class="comparison-table">
            <thead>
                <tr>
                    <th>Characteristic</th>
                    <th>Software Reliability</th>
                    <th>Hardware Reliability</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Failure Cause</td>
                    <td>Design errors, implementation mistakes, environmental changes</td>
                    <td>Physical wear, manufacturing defects, environmental stress</td>
                </tr>
                <tr>
                    <td>Failure Pattern</td>
                    <td>Constant failure rate (no wear-out phase)</td>
                    <td>Bathtub curve (early failures, random failures, wear-out failures)</td>
                </tr>
                <tr>
                    <td>Repair</td>
                    <td>Usually requires code changes or updates</td>
                    <td>Usually requires physical replacement</td>
                </tr>
                <tr>
                    <td>Degradation</td>
                    <td>No physical degradation; failures are discrete events</td>
                    <td>Physical degradation over time</td>
                </tr>
                <tr>
                    <td>Testing</td>
                    <td>Testing can reveal most faults, but not all (infinite possible inputs)</td>
                    <td>Testing reveals manufacturing defects but not all field failures</td>
                </tr>
                <tr>
                    <td>Failure Rate</td>
                    <td>Decreases initially then stabilizes</td>
                    <td>High initially (infant mortality), then stable, then increases</td>
                </tr>
            </tbody>
        </table>

        <h3>Reliability Metrics for Instrumentation Systems</h3>
        <p>For instrumentation systems, reliability metrics include:</p>
        <ul>
            <li><strong>Mean Time Between Failures (MTBF):</strong> Average time between system failures</li>
            <li><strong>Mean Time To Repair (MTTR):</strong> Average time to repair a failed system</li>
            <li><strong>Availability:</strong> Percentage of time system is operational (MTBF/(MTBF+MTTR))</li>
            <li><strong>Failure Rate:</strong> Number of failures per unit time</li>
            <li><strong>Reliability Function:</strong> Probability that system will operate without failure for a
                specified time</li>
        </ul>

        <h3>Challenges in Instrumentation System Reliability</h3>
        <ul>
            <li>Hardware-software interaction failures</li>
            <li>Environmental factors affecting both hardware and software</li>
            <li>Long-term reliability of embedded systems</li>
            <li>Security vulnerabilities that can compromise system reliability</li>
            <li>Intermittent failures that are difficult to reproduce and diagnose</li>
            <li>Complexity of modern instrumentation systems leading to unexpected interactions</li>
        </ul>
    </section>

    <section id="7.5">
        <h2>7.5 Software bugs, software testing, different levels of testing</h2>

        <h3>Software Bugs in Instrumentation Systems</h3>
        <div class="definition">
            <p>Software bugs are errors, flaws, or faults in a computer program that cause it to produce incorrect or
                unexpected results. In instrumentation systems, software bugs can have serious consequences including
                measurement errors, control failures, safety hazards, and system crashes.</p>
        </div>

        <h3>Debugging Techniques</h3>
        <ul>
            <li><strong>Print statements:</strong> Adding debug statements to output variable values and program flow
            </li>
            <li><strong>Break points and watch values:</strong> Pausing execution at specific points to inspect program
                state</li>
            <li><strong>In-circuit emulators and debuggers:</strong> Hardware tools for debugging embedded systems</li>
            <li><strong>Logic analyzers:</strong> For analyzing digital signals and timing issues</li>
            <li><strong>White box testing:</strong> Testing based on internal structure and code</li>
            <li><strong>Black box testing:</strong> Testing based on requirements without knowledge of internal
                structure</li>
            <li><strong>Grey Box testing:</strong> Having knowledge of internal data structure and algorithm for
                designing test cases but testing is black box</li>
        </ul>

        <h3>Testing Levels</h3>

        <h4>Unit Testing</h4>
        <div class="definition">
            <p>Unit testing tests the functionality of specific sections of code at the functional level. It ensures
                that individual building blocks work independently of each other. In object-oriented programming, this
                typically involves class-level testing.</p>
            <p>Characteristics:</p>
            <ul>
                <li>Tests individual functions or methods</li>
                <li>Performed by developers during coding phase</li>
                <li>Uses stubs and drivers for dependencies</li>
                <li>Focuses on correctness of individual components</li>
            </ul>
        </div>

        <h4>Integration Testing</h4>
        <div class="definition">
            <p>Integration testing verifies the interface between components. It tests how different modules or services
                work together as a group.</p>
            <p>Characteristics:</p>
            <ul>
                <li>Tests interactions between modules</li>
                <li>Can be done incrementally (top-down, bottom-up, sandwich)</li>
                <li>Focuses on communication between components</li>
                <li>Identifies interface issues and data flow problems</li>
            </ul>
        </div>

        <h4>System Testing</h4>
        <div class="definition">
            <p>System testing tests the whole system which is to be used. It verifies that the complete and integrated
                system meets the specified requirements.</p>
            <p>Characteristics:</p>
            <ul>
                <li>Tests the complete system as a whole</li>
                <li>Performed by a separate testing team</li>
                <li>Validates against functional and non-functional requirements</li>
                <li>Includes performance, security, and usability testing</li>
            </ul>
        </div>

        <h4>Acceptance Testing</h4>
        <div class="definition">
            <p>Acceptance testing is the final testing phase before deployment. It verifies that the system meets
                business requirements and is ready for production use.</p>
            <p>Characteristics:</p>
            <ul>
                <li>Performed by customers or end-users</li>
                <li>Validates against real-world scenarios</li>
                <li>Ensures system meets user needs and expectations</li>
                <li>Often includes user acceptance testing (UAT)</li>
            </ul>
        </div>

        <h3>Specialized Testing for Instrumentation Systems</h3>
        <ul>
            <li><strong>Real-time testing:</strong> Verifying timing constraints and response times</li>
            <li><strong>Environmental testing:</strong> Testing under various temperature, humidity, and electromagnetic
                conditions</li>
            <li><strong>Stress testing:</strong> Testing system behavior under extreme conditions</li>
            <li><strong>Fault injection testing:</strong> Intentionally introducing faults to verify error handling</li>
            <li><strong>Hardware-software co-testing:</strong> Testing interaction between hardware components and
                software</li>
            <li><strong>Calibration testing:</strong> Verifying measurement accuracy against known standards</li>
        </ul>

        <h3>Testing Challenges in Instrumentation Systems</h3>
        <ul>
            <li>Difficult to reproduce intermittent failures</li>
            <li>Real-time constraints make testing timing-sensitive behavior challenging</li>
            <li>Hardware dependencies make testing difficult without physical equipment</li>
            <li>Need for specialized test equipment to validate measurements</li>
            <li>Complexity of modern instrumentation systems with multiple interacting components</li>
            <li>Need for traceability between requirements and test cases</li>
        </ul>
    </section>
</div>




<!-- <==========================chapter 8 =========================> -->



<div id="chapter_8">
    <h1>8. Electrical Equipment (6 hours)</h1>

    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#8.1">8.1 Voltmeter and ammeter: Types and working principle</a></li>
            <li><a href="#8.2">8.2 Energy meter: Types and working principle</a></li>
            <li><a href="#8.3">8.3 Frequency meter: Types and working principle</a></li>
            <li><a href="#8.4">8.4 Wattmeter: Types and working principle</a></li>
        </ul>
    </div>

    <section id="8.1">
        <h2>8.1 Voltmeter and ammeter: Types and working principle</h2>

        <h3>Introduction to Voltmeters and Ammeters</h3>

        <div class="definition">
            <h3>What is a Voltmeter?</h3>
            <p>Voltmeter is used to measure the voltage between the two nodes. It is a measuring instrument which
                measures the potential difference between the two points.</p>
            <p>Voltmeter must be connected in parallel to the circuit where the voltage is measured because a voltmeter
                has very high resistance. If connected in series, it would nearly stop the current flow, acting like an
                open circuit.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Voltmeter+Connection"
            alt="Voltmeter Connection" class="image">
        <p class="image-caption">Figure: Voltmeter connected in parallel to the circuit</p>

        <h3>Types of Voltmeter</h3>

        <div class="definition">
            <h3>Classification of Voltmeters</h3>
            <p>Voltmeters can be classified based on:</p>
            <ul>
                <li>Output (Analog or Digital)</li>
                <li>Construction</li>
                <li>Type of measurement (DC or AC)</li>
            </ul>
            <p>Common types include:</p>
            <ul>
                <li>PMMC Voltmeters (only for DC)</li>
                <li>Moving Iron Voltmeters</li>
                <li>Electrodynamic Voltmeters</li>
                <li>Rectifier Type Voltmeters</li>
                <li>Induction Type Voltmeters</li>
            </ul>
        </div>

        <h4>PMMC Voltmeters (Permanent Magnet Moving Coil)</h4>

        <div class="definition">
            <p>PMMC voltmeter operates on the principle of electromagnetic force. When a current-carrying coil is placed
                within a magnetic field, it experiences a force that causes it to rotate. The amount of rotation, and
                thus the deflection of the pointer attached to the coil, is proportional to the current flowing through
                the coil. Since voltage is directly related to current in a circuit with a fixed resistance (Ohm's Law:
                V=IR), the deflection can be calibrated to indicate voltage measurements.</p>

            <div class="formula">
                Deflecting torque, T = BINA = GI
            </div>
            <p>Where, G = galvanometers constant</p>

            <div class="formula">
                Controlling torque, Tc = Kθ
            </div>

            <p>For steady operation:</p>
            <div class="formula">
                T = Tc
            </div>
            <div class="formula">
                GI = Kθ
            </div>
            <div class="formula">
                I = Kθ/G
            </div>

            <p>By Ohm's Law: V = IR, the deflection can be calibrated to indicate voltage measurements.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=PMMC+Voltmeter" alt="PMMC Voltmeter"
            class="image">
        <p class="image-caption">Figure: PMMC Voltmeter Construction</p>

        <h4>Moving Iron Voltmeters</h4>

        <div class="definition">
            <p>The working principle depends upon the movement of iron attracted by the magnetic field towards it and
                repulsion between them. The magnetic field is produced by the current in the coil.</p>

            <p>Moving iron instrument is divided into two types:</p>
            <ul>
                <li>Attraction type (Uses single iron)</li>
                <li>Repulsion type (Uses double iron)</li>
            </ul>
        </div>

        <h5>Attraction Type Moving Iron Instruments</h5>

        <div class="definition">
            <p>"If a piece of a non-magnet soft iron is brought near, either of the two ends of a current-carrying coil,
                it would be attracted into the coil in the same way as it would be attracted by the pole of a bar
                magnet." Hence, if we attach a disc of soft iron on a spindle the iron disc will rotate into the coil
                and the electric current will pass through it and the pointer will deflect.</p>

            <div class="formula">
                Force acting on iron piece, f ∝ H
            </div>
            <div class="formula">
                f ∝ H², but H = NI/L, H ∝ I
            </div>
            <div class="formula">
                Hence, deflecting torque, Td ∝ I²
            </div>

            <p>And controlling torque, Tc ∝ θ</p>

            <p>Thus, for steady operation:</p>
            <div class="formula">
                Td = Tc
            </div>
            <div class="formula">
                θ ∝ I²
            </div>
        </div>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Attraction+Type+Moving+Iron"
            alt="Attraction Type Moving Iron" class="image">
        <p class="image-caption">Figure: Attraction Type Moving Iron Instrument</p>

        <h5>Repulsion Type Moving Iron Instruments</h5>

        <div class="definition">
            <p>These instruments consists of a fixed coil which is placed between the two soft iron rods and are
                parallel to each other and one rod is fixed and the other is movable and it carries a pointer.</p>

            <p>When the current is passed through the coil, it makes its own magnetic field and magnetizes the two rods
                which are parallel to each other and these two rods repel each other and as a result the pointer
                deflects opposing the controlling torque of a spring.</p>

            <div class="formula">
                Deflecting torque, Td ∝ m.m
            </div>
            <div class="formula">
                m ∝ H
            </div>
            <div class="formula">
                m² ∝ H²
            </div>
            <div class="formula">
                And, H ∝ NI/L, H ∝ I
            </div>
            <div class="formula">
                Hence, Td ∝ I²
            </div>

            <p>And controlling torque, Tc ∝ θ</p>

            <p>Thus, for steady operation:</p>
            <div class="formula">
                Td = Tc
            </div>
            <div class="formula">
                θ ∝ I²
            </div>
        </div>

        <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=Repulsion+Type+Moving+Iron"
            alt="Repulsion Type Moving Iron" class="image">
        <p class="image-caption">Figure: Repulsion Type Moving Iron Instrument</p>

        <h4>Electrodynamic Type Voltmeters</h4>

        <div class="definition">
            <p>Controlling torque is provided by two control springs. Air friction damping is provided by aluminium
                vanes attached to spindle bottom.</p>

            <p>Let, currents passing through fixed and moving coils be I₁ and I₂, respectively. Since, there is no iron,
                field strength and hence flux density is proportional to I₁....B = KI₁</p>

            <p>Force on each side of the moving coil = NBI₂l</p>
            <p>Torque produced on whole of the coil = NBI₂l×b = NBIA</p>
            <div class="formula">
                T = NKI₁I₂A
            </div>
            <div class="formula">
                T ∝ I₁I₂
            </div>

            <p>It shows that the deflecting torque is proportional to the product of currents flowing in the fixed and
                the moving coil which is proportional to voltage.</p>

            <p>Since, the instrument is spring controlled; the restoring or controlling torque is proportional to
                angular deflection θ. Tc ∝ Kθ</p>

            <p>As, the deflecting torque is equal to the controlling torque, θ ∝ I₁I₂</p>
        </div>

        <h3>Introduction to Ammeters</h3>

        <div class="definition">
            <p>An ammeter is a device used to measure the amount of current in an electric circuit. An ammeter, short
                for ampere-meter, measures the current in amperes.</p>
            <p>The working principle of an ammeter is that it must have very low resistance and inductive reactance.
                Ideally, an ammeter should have zero impedance for zero voltage drop and no power loss, but this is not
                practical. This low impedance is essential to minimize voltage drop and power loss.</p>
            <p>Ammeters are connected in series because the current remains the same in a series circuit, ensuring
                accurate measurements.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Ammeter+Connection" alt="Ammeter Connection"
            class="image">
        <p class="image-caption">Figure: Ammeter connected in series to the circuit</p>

        <h3>Types of Ammeter</h3>

        <div class="definition">
            <p>Common types include:</p>
            <ul>
                <li>Permanent moving coil ammeter</li>
                <li>Moving iron ammeter</li>
                <li>Electro-dynamometer ammeter</li>
                <li>Rectifier type ammeter</li>
                <li>Hotwire ammeter</li>
                <li>Digital ammeter</li>
                <li>Integrating ammeter</li>
            </ul>
        </div>

        <h4>Moving Coil Ammeter</h4>

        <div class="definition">
            <p>Magnetic deflection is a technique used by moving coil ammeters, in which current flowing through a coil
                positioned in the magnetic field of a permanent magnet causes the coil to move. The restoring force is
                provided by two spiral springs. The deflection of the meter is linearly proportional to current thanks
                to the consistent air gap between their own core and the permanent magnet poles.</p>
        </div>

        <h4>Moving Iron Ammeter</h4>

        <div class="definition">
            <p>A piece of iron is used in moving iron ammeters, which moves in response to the electromagnetic force of
                a stationary wire coil. The iron element consists of a stationary vane enclosed in a coil and a moving
                vane coupled to a pointer. The moving vane deflects in opposition to the restoring force generated by
                the fine helical springs as alternating or direct current passes through the coil and creates a magnetic
                field in both vanes. A moving iron meter's deflection is proportional to the square of the current.</p>

            <p>Classified into two types like repulsion and attraction. This device includes different components like
                moving element, coil, control, damping & reflective torque.</p>
        </div>

        <h4>Electrodynamic Ammeter</h4>

        <div class="definition">
            <p>An electromagnet is used in place of a permanent magnet in an electrodynamic ammeter. Both alternating
                and direct current can be detected by this device, which can also display accurate RMS for AC. Wattmeter
                is another application for this instrument.</p>
        </div>

        <h4>Hot Wire Ammeter</h4>

        <div class="definition">
            <p>This is used to measure AC or DC by transmitting it through a wire to make the wire heated and expand is
                known as a hot wire. The working principle of this device is to increase the wire by providing heat
                effect from the current supply through it. This is used for both AC & DC.</p>
        </div>
    </section>

    <section id="8.2">
        <h2>8.2 Energy meter: Types and working principle</h2>

        <h3>Energy Meter Introduction</h3>

        <div class="definition">
            <p>Energy Meter or Watt-Hour Meter is an electrical instrument that measures the amount of electrical energy
                used by the consumers.</p>
            <p>The energy meter has four main parts. They are:</p>
            <ul>
                <li>Driving System</li>
                <li>Moving System</li>
                <li>Braking System</li>
                <li>Registering System</li>
            </ul>
        </div>

        <h3>Driving System</h3>

        <div class="definition">
            <p>Electromagnet as main component which is temporary magnet and is excited by current flow through their
                coil. The driving system has two electromagnets. The upper one is called the shunt electromagnet, and
                the lower one is called series electromagnet.</p>

            <p>Series electromagnet is excited by the load current flow through the current coil.</p>

            <p>Shunt electromagnet is directly connected with supply and hence carry current proportional to shunt
                voltage. This coil is called pressure coil.</p>

            <p>The central limb of the magnet has the copper band. These bands are adjustable. The main function of the
                copper band is to align the flux produced by the shunt magnet in such a way that it is exactly
                perpendicular to the supplied voltage.</p>
        </div>

        <h3>Moving System</h3>

        <div class="definition">
            <p>Moving system is aluminum disc mounted on the shaft of the alloy which is placed in the air gap of two
                electromagnets. Eddy current is induced in the disc because of change of magnetic field. This eddy
                current is cut by magnetic flux. The interaction of flux and disc induces the deflecting torque.</p>

            <p>When the devices consume power, aluminum disc starts rotating, and after some number of rotations, the
                disc displays the unit used by the load. The number of rotations of the disc is counted at particular
                interval of time. Disc measured the power consumption in kilowatt hours.</p>
        </div>

        <h3>Braking System</h3>

        <div class="definition">
            <p>Permanent magnet is used for reducing the rotation of the aluminum disc. The aluminum disc induces the
                eddy current because of their rotation. The eddy current cut the magnetic flux of the permanent magnet
                and hence produces the braking torque.</p>

            <p>This braking torque opposes movement of disc, thus reduces their speed. Permanent magnet is adjustable
                due to which braking torque is also adjusted by shifting magnet to the other radial position.</p>
        </div>

        <h3>Registration (Counting Mechanism)</h3>

        <div class="definition">
            <p>The main function of the registration or counting mechanism is to record the number of rotations of the
                aluminum disc. Their rotation is directly proportional to the energy consumed by the loads in the
                kilowatt hour.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Energy+Meter+Diagram"
            alt="Energy Meter Diagram" class="image">
        <p class="image-caption">Figure: Energy Meter Construction</p>

        <h3>Working of the Energy Meter</h3>

        <div class="definition">
            <p>Aluminium disc whose rotation determines the power consumption of the load, disc is placed between the
                air gap of the series and shunt electromagnet.</p>

            <p>Pressure coil creates the magnetic field because of the supply voltage, and the current coil produces it
                because of the current.</p>

            <p>field induced by the voltage coil is lagging by 90° on the magnetic field of the current coil because of
                which eddy current induced in the disc. The interaction of the eddy current and the magnetic field
                causes torque, which exerts a force on the disc. Thus, the disc starts rotating.</p>
        </div>

        <h3>Torque Equation of Single Phase Energy Meter</h3>

        <div class="definition">
            <p>Phaser diagram of energy meter shown in the below diagram</p>

            <p>Average Torque of energy meter</p>
            <div class="formula">
                Td ∝ Is Cosφ - Ise Cos(180-φ)
            </div>
            <p>Where φ = alternating flux links with the disc</p>
            <p>Ise = Eddy current flowing through the series</p>
            <p>Cos(180-φ) = -cosφ put this in above formula</p>
            <div class="formula">
                Td ∝ Is Cosφ + Ise Ip cosφ
            </div>
            <div class="formula">
                Td ∝ Cosφ (Is Ise + Ise Ip)
            </div>
            <p>But given that</p>
            <div class="formula">
                Ip ∝ Φs Vph
            </div>
            <div class="formula">
                Ise ∝ Φs I
            </div>
            <div class="formula">
                Φs Ise Vph I = Φs Ise = A Vph I
            </div>
            <div class="formula">
                Φs Ise = B Vph I
            </div>
            <p>Hence,</p>
            <div class="formula">
                Td ∝ (A Vph I + B Vph I) Cosφ
            </div>
            <div class="formula">
                Td ∝ (A+B) Vph I Cosφ
            </div>
            <div class="formula">
                Td ∝ Vph I Cosφ
            </div>
            <p>In an energy meter, the average torque produced in the disc is used to measure the power consumed in the
                load.</p>

            <p>The torque produced by the braking magnet (TB) is also proportional to the speed of the disc (N). The
                braking magnet applies a force to the disc to slow it down or stop it from rotating, and the strength of
                this force is influenced by the speed of the disc. As the disc speeds up, the braking magnet must apply
                a stronger force to bring the disc to a stop.</p>
            <div class="formula">
                TB ∝ N
            </div>
            <div class="formula">
                TB = K2N
            </div>
            <div class="formula">
                Td ∝ Vph I Cosφ
            </div>
            <div class="formula">
                Td = K1 Vph I Cosφ
            </div>
            <p>In a steady-state condition, the braking torque and the driving torque of an energy meter should be
                equal.</p>
            <div class="formula">
                TB = Td
            </div>
            <div class="formula">
                K2N = K1 Vph I Cosφ
            </div>
            <div class="formula">
                N = (K1/K2) Vph I Cosφ
            </div>
            <div class="formula">
                N ∝ True power of the circuit
            </div>
        </div>

        <h3>Errors in Energy Meter</h3>

        <div class="definition">
            <h4>1) Errors Caused by Driving System</h4>
            <ul>
                <li>Errors due to the incorrect magnitude of fluxes due to variations in supply voltage or load current
                </li>
                <li>incorrect lag adjustments, change in resistance of coils with temperature, etc.</li>
                <li>Lack of symmetry in the magnetic circuit</li>
            </ul>

            <h4>2) Errors Caused by Braking System</h4>
            <ul>
                <li>Change in strength of brake magnet due to variations in temperature etc.</li>
                <li>Self-braking effect of series magnet flux due to overcurrent (or loads).</li>
                <li>Variations in disc resistance with temperature.</li>
                <li>Friction errors at light loads.</li>
            </ul>

            <h4>3) Creeping in Energy Meter</h4>
            <p>A phenomenon even when no current is flowing through current coil, there is slight continuous rotation
                due to over-compensation of friction of meter.</p>
            <p>Can caused due to:</p>
            <ul>
                <li>Stray Magnetic Fields: External magnetic fields affecting the meter.</li>
                <li>Excessive Friction: In the registering mechanism causing the disc to rotate slowly.</li>
                <li>Overvoltage: Causing the voltage coil to produce a magnetic field even without current flow.</li>
            </ul>
            <p>To prevent creeping, small holes are drilled in the disk which stop its motion under the poles' edge,
                limiting rotation to a maximum of half a revolution. Some meters also use an attached iron piece
                achieving a similar effect.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=Creeping+Prevention" alt="Creeping Prevention"
            class="image">
        <p class="image-caption">Figure: Prevention of creeping in energy meter using holes in the disc</p>
    </section>

    <section id="8.3">
        <h2>8.3 Frequency meter: Types and working principle</h2>

        <h3>Introduction to Frequency Meters</h3>

        <div class="definition">
            <p>Frequency meter is an instrument that measures and displays the frequency of a periodic electrical
                signal. It's essential for various applications, including telecommunications, power systems,
                electronics, and radio broadcasting.</p>
        </div>

        <h3>Types of Frequency Meters</h3>

        <div class="definition">
            <p>Common types include:</p>
            <ul>
                <li>Vibrating Reed Meters / Mechanical resonance type</li>
                <li>Electrical resonance type / Ferrodynamic type</li>
                <li>Weston type / Moving iron type</li>
            </ul>
        </div>

        <h4>Vibrating Reed Frequency Meter</h4>

        <div class="definition">
            <p>A vibrating-reed frequency meter is a measuring instrument which is used to measure the frequency of
                various electric circuits. It consists of vibrating reeds and each vibrating reed has a specific value.
                These reeds vibrate when this frequency meter is connected to supply for the measurement of frequency. A
                reed which vibrates more as compared to the other reeds, the more vibrating reed is considered as
                frequency reading of a supply or electric circuit.</p>

            <p>To measure the frequency of the circuit, it is compulsory to connect the frequency meter to supply.</p>

            <p>The electromagnet is connected to the supply for which frequency is to be measured. The magnetism of the
                electromagnet alternates with the same frequency and the electro-magnet exerts the attracting force on
                each reed once every half cycle.</p>

            <p>All reeds start vibrating but the reed whose frequency is double, vibrates with maximum amplitude due to
                mechanical resonance. The vibration of the other reeds is so small and these are unobservant.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Vibrating+Reed+Frequency+Meter"
            alt="Vibrating Reed Frequency Meter" class="image">
        <p class="image-caption">Figure: Vibrating Reed Frequency Meter</p>

        <h4>Weston Type / Moving Iron Frequency Meter</h4>

        <div class="definition">
            <p>Moving iron frequency meters are the meters in which two coils are fixed and a moving iron is attached to
                the spindle. This moving iron frequency meters depend on the following working principle.</p>

            <p>Working Principle</p>
            <p>This meter depends on the variations in an electric current drawn by inductive and non-inductive circuits
                connected in parallel. The current flows from these circuits when the frequency changes its value.</p>

            <p>Construction</p>
            <p>This meter consists of two fixed coils A and B that their magnetic axes are perpendicular to each other.
                A long and soft iron needle is pivoted at their centers. This circuit remains balanced at the supply
                frequency to be measured. Coil A consists of a series resistance R, and a reactance L in parallel and
                the coil B consists of a series resistance R and a reactance L in parallel. The series inductance helps
                to suppress higher harmonics in the current waveform which helps to minimize the waveform errors in the
                indication of the instruments.</p>

            <p>Working of Moving Iron Frequency Meter</p>
            <p>When the supply is connected to the meter, the current passes through the coils A and B and these two
                coils produce opposing torques. When the supply frequency increases then the current of the coil A
                increases and decreases in the coil B. The iron needle lies more nearly to the magnetic axis of the coil
                A. For low frequencies, the current of coil B increases and the current of the coil A decreases.</p>

            <p>Range</p>
            <p>These instruments are designed to measure large amount of frequency and also for measuring very small
                amounts.</p>
        </div>

        <h4>Electrical Resonance Type / Ferrodynamic Type Frequency Meter</h4>

        <div class="definition">
            <p>An electrical resonance type frequency meter is a device used to measure the frequency of an alternating
                current (AC) supply. It operates on the principle of electrical resonance, where a circuit exhibits
                maximum current flow at a specific resonant frequency.</p>

            <p>It is a type of frequency meter which is used to measure frequency range 45 Hz to 55 Hz of AC supply.</p>

            <p>When the supply frequency matches the natural resonant frequency of the LC circuit, the circuit achieves
                resonance, and the current reaches its maximum value. The resonant frequency (f) is given by:</p>
            <div class="formula">
                f = 1/(2π√LC)
            </div>

            <p>Due to the current in the moving coil, the moving coil produces a flux in phase with the current. This
                flux flows along with the extended core of the fixed coil, Therefore the flux links the moving coil.</p>

            <p>Hence, the flux induces an emf across the moving coil. Obviously, this induced emf lags the flux by 90°.
                Since it is a coil; the moving coil will have some inductive reactance. Again, as it is connected across
                a capacitor, it will have some capacitive reactance also.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Ferrodynamic+Frequency+Meter"
            alt="Ferrodynamic Frequency Meter" class="image">
        <p class="image-caption">Figure: Ferrodynamic Frequency Meter</p>
    </section>

    <section id="8.4">
        <h2>8.4 Wattmeter: Types and working principle</h2>

        <h3>Wattmeter Introduction</h3>

        <div class="definition">
            <p>A wattmeter is an instrument which is used to measure electric power given to or developed by an
                electrical circuit. Generally, a wattmeter consists of a current coil and a potential coil.</p>

            <p>Types of Wattmeter:</p>
            <ul>
                <li>Electrodynamometer Wattmeter - for both DC and AC Power Measurement</li>
                <li>Induction Wattmeter - for AC Power Measurement only</li>
            </ul>
        </div>

        <h3>Working Principle of Electrodynamometer Wattmeter</h3>

        <div class="definition">
            <p>Works on a current-carrying conductor experiences a magnetic force when it is placed in a magnetic field.
                So there will be deflection of pointer took place due to mechanical force.</p>

            <p>Contains two coils such as fixed coil (current coil) and moving coil (pressure coil or voltage coil).</p>

            <p>Supply voltage is applied to moving coil. Current across moving coil controlled with the help of a
                resistor, which is connected in series with Moving coil on which pointer is fixed is placed in between
                fixed coils.</p>

            <p>Two magnetic fields are generated due to the current and voltage in the fixed coil and moving coil. The
                pointer deflects as the two magnetic fields interact. The deflection is proportional to the power that
                is flowing through it.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=Electrodynamometer+Wattmeter"
            alt="Electrodynamometer Wattmeter" class="image">
        <p class="image-caption">Figure: Electrodynamometer Wattmeter Construction</p>

        <h3>Advantages and Disadvantages of Dynamometer Type Wattmeter</h3>

        <div class="definition">
            <h4>Advantages:</h4>
            <ul>
                <li>These instruments are made to give very high accuracy and these are used as a standard for
                    calibration purposes.</li>
                <li>These instruments provide full accuracy on direct current (DC).</li>
            </ul>

            <h4>Disadvantages:</h4>
            <ul>
                <li>These instruments cannot provide full accuracy on alternating Current (AC).</li>
                <li>These instruments cause errors at low power factor.</li>
            </ul>
        </div>

        <h3>Power Calculation</h3>

        <div class="definition">
            <h4>DC Circuit:</h4>
            <p>When the wattmeter is connected in DC circuit for power measurement, the power taken by the load is VI.
            </p>
            <div class="formula">
                Deflecting Torque, Td ∝ I₁I₂
            </div>
            <p>Since the current I₂ is proportional to load voltage V.</p>
            <div class="formula">
                Thus, Deflecting Torque Td ∝ I₁ × V ∝ Power
            </div>

            <h4>AC Circuit:</h4>
            <p>When the wattmeter is connected in an AC circuit to measure the load power. Consider at any instant,
                current through the load is i and voltage across the load is v and the power factor of the load is
                supposed to be cos φ lagging.</p>
            <div class="formula">
                v = Vm sinθ
            </div>
            <div class="formula">
                i = Im sin(θ-φ)
            </div>
            <p>Instantaneous deflecting torque, Td ∝ v*i</p>
            <p>Due to inertia of moving system, the pointer cannot follow the rapid changes in the instantaneous power.
                Hence the wattmeter indicates the average power.</p>
            <div class="formula">
                Average deflecting torque = Average of vi over one cycle
            </div>
            <div class="formula">
                Td ∝ (1/2π) ∫(Vm sinθ)(Im sin(θ-φ)) dθ
            </div>
            <div class="formula">
                Td ∝ VmIm cosφ ∝ VI cosφ
            </div>
            <div class="formula">
                Td ∝ Load Power
            </div>
            <p>Since the controlling torque in the wattmeter is provided by spring. Thus, Tc ∝ θ</p>
            <p>Under steady state condition,</p>
            <div class="formula">
                Td = Tc
            </div>
            <div class="formula">
                θ ∝ Load power
            </div>
        </div>

        <h3>Working Principle of Induction Wattmeter</h3>

        <div class="definition">
            <p>Used to measure AC power only.</p>
            <p>Working based on principle of electromagnetic induction.</p>
            <p>(Consists of two laminated electromagnets - Shunt Magnet and Series Magnet.</p>
            <p>Shunt magnet is connected across supply and carries a current proportional to supply voltage. Coil of
                shunt magnet is made highly inductive so that current in it lags the supply voltage by 90°.</p>
            <p>Series magnet is connected in series with supply and carries load current. Coil of series magnet is made
                highly non-inductive.</p>
            <p>A thin disc (made up of aluminum) mounted on a spindle is placed between two magnets so that it cuts flux
                of two magnets.</p>
            <p>When the wattmeter is connected in an AC circuit, a current flows through the coil of shunt magnet that
                is proportional to supply voltage and series magnet carries load current.</p>
            <p>Fluxes produced by two magnets induce eddy currents in the aluminum disc by action of electromagnetic
                induction.</p>
            <p>Due to interaction between the fluxes and eddy currents, a deflecting torque is produced on the disc,
                causing disc to move and hence, pointer connected to the disc moves over the scale.</p>
            <p>The pointer comes to rest when the deflecting torque becomes equal to controlling torque.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=Induction+Wattmeter" alt="Induction Wattmeter"
            class="image">
        <p class="image-caption">Figure: Induction Wattmeter Construction</p>

        <h3>Power Calculation for Induction Wattmeter</h3>

        <div class="definition">
            <p>Let, V = Supply voltage</p>
            <p>Ic = Current Carried by Shunt Magnet</p>
            <p>I = Current Carried by Series Magnet</p>
            <p>φ = Lagging Power Factor of the Load</p>

            <p>The current I in the shunt magnet lags the supply voltage V by 90° and so does the flux Φv produced by
                it. The current I in the series magnet is the load current and hence lags behind the supply voltage V by
                φ.</p>
            <p>The flux Φ produced by this current (that is I) is in phase with it. It is clear that phase angle θ
                between the two fluxes is 90°-φ that is θ = 90°-φ</p>

            <p>Therefore Mean deflecting torque, Td ∝ Φv Φc sin θ</p>
            <div class="formula">
                Td ∝ VI sin(90°-φ)
            </div>
            <div class="formula">
                Td ∝ VI cosφ
            </div>
            <div class="formula">
                Td ∝ AC power
            </div>
            <p>Since the instrument is spring controlled, Tc ∝ θ</p>
            <p>For steady deflected position, Td = Tc.</p>
            <div class="formula">
                θ ∝ AC power
            </div>
            <p>Hence such instruments have uniform scale.</p>
        </div>

        <h3>Advantages and Disadvantages of Induction Type Wattmeter</h3>

        <div class="definition">
            <h4>Advantages:</h4>
            <ul>
                <li>The scale is uniform.</li>
                <li>They provide good damping.</li>
                <li>There is no effect of stray fields.</li>
            </ul>

            <h4>Disadvantages:</h4>
            <ul>
                <li>Can be used only for AC power measurements.</li>
                <li>Low accuracy due to heavy moving system and Power consumption is more</li>
                <li>Temperature changes can affect the readings by introducing errors.</li>
            </ul>
        </div>
    </section>
</div>




<!-- <==========================chapter 9 =========================> -->



<div id="chapter_9">
    <h1>9. Latest Trends (3 hours)</h1>

    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#9.1">9.1 Internet of things (IoT): Simple architecture, characteristics, advantages</a></li>
            <li><a href="#9.2">9.2 Smart sensors</a></li>
            <li><a href="#9.3">9.3 Importance of cloud computing in instrumentation system</a></li>
            <li><a href="#9.4">9.4 Instrumentation in industry 4.0</a></li>
        </ul>
    </div>

    <section id="9.1">
        <h2>9.1 Internet of things (IoT): Simple architecture, characteristics, advantages</h2>

        <div class="definition">
            <h3>Internet of Things (IoT)</h3>
            <p>Internet of Things is a system of interrelated computing devices or objects which have the ability to
                transfer the data over a network without requiring any human to human or human to computer interaction
                uniquely addressable, based on standard communication protocol.</p>
            <p>It is a giant network of connected things, capturing the data about the way they are used and the
                environment around them.</p>
            <p>When we speak about the "Things" in IoT, these are objects not precisely identifiable.</p>
            <p>The sensors are used in the devices and objects and these feed the data to various IoT platforms.</p>
            <p>Further, IoT platforms are used to gather the pinpointed information, detect patterns.</p>
            <p>Thus, with the above process the IoT helps the organizations and institutions in reducing the cost
                through improved processes efficiency, asset utilization and productivity.</p>
        </div>

        <h3>Different Names of IoT</h3>
        <ul>
            <li>Internet of Everything</li>
            <li>Smarter Planet</li>
            <li>Machine to Machine (M2M)</li>
            <li>The Fog</li>
            <li>Tsensors (Trillion Sensors)</li>
            <li>The Industrial Internet</li>
            <li>Industry 4.0</li>
            <li>Internet of Things (IoT)</li>
        </ul>

        <h3>Reasons of IoT</h3>
        <ul>
            <li><strong>Data deluge:</strong> The explosion of the amount of data collected and exchanged is one of the
                major reason why IoT came in existence. Forecasts indicate that in the year 2015 more than 220 Exabytes
                of data are stored. So we need novel mechanisms to find, fetch, and transmit data.</li>
            <li><strong>Decrease in energy required:</strong> There is decrease in energy required to operate
                intelligent devices. The search will be for a zero level of entropy where the device or system will have
                to harvest its own energy.</li>
            <li><strong>Miniaturization of devices:</strong> the devices are becoming increasingly smaller.</li>
            <li><strong>Autonomic management:</strong> the devices/systems of future will have self-management,
                self-healing, and self-configuration capabilities.</li>
            <li><strong>IPv6 as an integration layer:</strong> allows to exploit the potential of IPv6 and related
                standards.</li>
        </ul>

        <h3>IoT Architecture</h3>

        <div class="definition">
            <p>IoT architecture refers to the tangle of components such as sensors, actuators, cloud services,
                Protocols, and layers that make up IoT networking systems.</p>
            <p>In general, it is divided into layers that allow administrators to evaluate, monitor, and maintain the
                integrity of the system.</p>
            <p>The architecture of IoT is a four-step process through which data flows from devices connected to
                sensors, through a network, and then through the cloud for processing, analysis, and storage.</p>
            <p>With further development, the Internet of Things is poised to grow even further, providing users with new
                and improved experiences.</p>
            <p>However, there is no standard defined architecture of work that is strictly adhered to across the board.
                The complexity and number of architectural layers vary according to the specific business task at hand.
                A four-layer architecture is the standard and most widely accepted format.</p>
        </div>

        <h3>Perception/Sensing Layer</h3>

        <div class="definition">
            <p>The first layer of any IoT system involves "things" or endpoint devices that serve as a conduit between
                the physical and the digital worlds.</p>
            <p>Perception refers to the physical layer, which includes sensors and actuators that are capable of
                collecting, accepting, and processing data over the network. Sensors and actuators can be connected
                either wirelessly or via wired connections.</p>
            <p>The architecture does not limit the scope of its components nor their location.</p>
            <p>As a first step towards IoT architecture, the physical layer must be established within the environment.
                There would be no Internet of Things without "smart" or connected objects. Typically, these are wireless
                sensors or actuators in the perception layer.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Perception+Layer" alt="Perception Layer"
            class="image">
        <p class="image-caption">Figure: Perception/Sensing Layer in IoT Architecture</p>

        <h3>Network Layer</h3>

        <div class="definition">
            <p>Network layers provide an overview of how data is moved throughout the application.</p>
            <p>This layer contains Data Acquiring Systems (DAS) and Internet/Network gateways.</p>
            <p>A DAS performs data aggregation and conversion functions (collecting and aggregating data from sensors,
                then converting analog data to digital data, etc.).</p>
            <p>It is necessary to transmit and process the data collected by the sensor devices. That's what the network
                layer does.</p>
            <p>It allows these devices to connect and communicate with other servers, smart devices, and network
                devices. As well, it handles all data transmissions for the devices.</p>
            <p>When step one is done properly, the next step that needs to be done is to set up an internet gateway. As
                the sensors and actuators collect data in analog form, we must have a means of converting the analog
                data into digital data in order to process it. We use the internet gateway to accomplish this task. In
                the internet gateway stage, raw data will be received from the devices and pre-processed before being
                sent to the cloud.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=Network+Layer" alt="Network Layer"
            class="image">
        <p class="image-caption">Figure: Network Layer in IoT Architecture</p>

        <h3>Processing Layer</h3>

        <div class="definition">
            <p>The processing layer is the brain of the IoT ecosystem.</p>
            <p>Typically, data is analyzed, pre-processed, and stored here before being sent to the data center, where
                it is accessed by software applications that both monitor and manage the data as well as prepare further
                actions.</p>
            <p>This is where Edge IT or edge analytics enters the picture.</p>
            <p>In light of the significant amount of data collected by IoT systems and the consequent bandwidth
                requirements, edge IT systems play a crucial role in reducing the pressure on the core IT
                infrastructure. Edge IT systems employ machine learning and visualization techniques to generate
                insights from collected data. Machine learning algorithms provide insights into the data while
                visualization techniques present the data in an easy-to-understand manner.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Processing+Layer" alt="Processing Layer"
            class="image">
        <p class="image-caption">Figure: Processing Layer in IoT Architecture</p>

        <h3>Application Layer</h3>

        <div class="definition">
            <p>User interaction takes place at the application layer, which delivers application-specific services to
                the user.</p>
            <p>Upon analysis, the data can be sent to cloud-based servers or data centers for final processing. Using
                the cloud platform can lower hardware costs, but securing data is also a concern.</p>
            <p>When it comes to physical servers or data centers, they are safer, but they also cost more.</p>
            <p>An example might be a smart home application where users can turn on a coffee maker by tapping a button
                in an app or a dashboard that shows the status of the devices in a system.</p>
        </div>

        <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=Application+Layer" alt="Application Layer"
            class="image">
        <p class="image-caption">Figure: Application Layer in IoT Architecture</p>

        <h3>IoT Framework</h3>

        <div class="definition">
            <p>An IoT framework provides a structured approach to developing and deploying IoT applications, offering
                tools, protocols, and standards for building and managing interconnected devices and systems.</p>
            <p>It facilitates communication, data exchange, and cloud integration, enabling the creation of smart
                solutions across various industries.</p>
            <p><strong>Key Components:</strong></p>
            <ul>
                <li><strong>Hardware Devices:</strong> The physical devices that collect and transmit data.</li>
                <li><strong>Software Applications:</strong> The software that runs on the devices and in the cloud.</li>
                <li><strong>Communication and Cloud Platforms:</strong> The infrastructure for connecting devices and
                    transmitting data.</li>
                <li><strong>Cloud Applications:</strong> The applications that process and analyze data.</li>
            </ul>
        </div>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=IoT+Framework" alt="IoT Framework"
            class="image">
        <p class="image-caption">Figure: IoT Framework Components</p>
    </section>

    <section id="9.2">
        <h2>9.2 Smart sensors</h2>

        <div class="definition">
            <h3>Smart Sensors</h3>
            <p>A smart sensor is a device that takes input from the physical environment and uses built-in compute
                resources to perform predefined functions upon detection of specific input and then process data before
                passing it on.</p>
            <p>A smart sensor has three components:</p>
            <ul>
                <li>A sensor that captures data</li>
                <li>A microprocessor that computes on the output of the sensor via programming</li>
                <li>Communications capabilities</li>
            </ul>
        </div>

        <img src="https://via.placeholder.com/600x400/e74c3c/ffffff?text=Smart+Sensor+Components"
            alt="Smart Sensor Components" class="image">
        <p class="image-caption">Figure: Components of a Smart Sensor</p>

        <h3>Characteristics of Smart Sensors</h3>
        <ul>
            <li>Self-diagnostic capabilities</li>
            <li>Self-calibration</li>
            <li>Self-identification</li>
            <li>Ability to communicate with other devices</li>
            <li>Ability to process data locally before transmission</li>
            <li>Energy efficiency</li>
            <li>Higher accuracy and reliability compared to traditional sensors</li>
        </ul>
    </section>

    <section id="9.3">
        <h2>9.3 Importance of cloud computing in instrumentation system</h2>

        <div class="definition">
            <h3>Cloud Computing in Instrumentation</h3>
            <p>Cloud computing is becoming increasingly important in instrumentation due to its ability to enhance data
                management, collaboration, and analysis capabilities. It offers scalability, flexibility, and
                accessibility, allowing for real-time monitoring, remote access, and improved efficiency in various
                industries.</p>
        </div>

        <h3>Enhanced Data Management and Analysis</h3>
        <ul>
            <li><strong>Real-time monitoring:</strong> Cloud platforms enable continuous data upload from instruments,
                allowing for real-time monitoring of processes and immediate identification of issues.</li>
            <li><strong>Scalable storage:</strong> Cloud storage offers virtually unlimited capacity for storing vast
                amounts of data generated by instruments, facilitating long-term trend analysis and predictive
                maintenance.</li>
            <li><strong>Advanced analytics:</strong> Cloud platforms often provide sophisticated analytics tools and
                machine learning capabilities for deeper insights into instrument data, leading to better
                decision-making.</li>
            <li><strong>Improved accessibility:</strong> Cloud-based data access allows engineers and operators to
                monitor and analyze data from anywhere with an internet connection, fostering collaboration and faster
                response times.</li>
        </ul>

        <h3>Enhanced Collaboration and Communication</h3>
        <ul>
            <li><strong>Seamless collaboration:</strong> Cloud platforms facilitate collaboration among engineers and
                stakeholders, regardless of their geographic location, by providing shared access to data and
                applications.</li>
            <li><strong>Improved communication:</strong> Cloud-based communication tools enable efficient exchange of
                information and feedback among teams, enhancing project management and decision-making.</li>
        </ul>

        <h3>Cost-Effectiveness</h3>
        <ul>
            <li><strong>Reduced capital expenditure:</strong> Cloud computing eliminates the need for significant
                upfront investment in hardware and infrastructure.</li>
            <li><strong>Pay-as-you-go model:</strong> Cloud services offer a pay-as-you-go model, allowing businesses to
                pay only for the resources they use, optimizing costs and improving financial efficiency.</li>
        </ul>

        <h3>Flexibility and Scalability</h3>
        <ul>
            <li><strong>Scalability:</strong> Cloud computing allows for easy scaling of resources up or down based on
                demand, providing flexibility to adapt to changing needs and market conditions.</li>
            <li><strong>Adaptability:</strong> Cloud platforms enable organizations to quickly adapt to new technologies
                and incorporate them into their workflows, fostering innovation and faster time to market.</li>
        </ul>

        <h3>Cloud Based Data Acquisition System</h3>
        <div class="definition">
            <p>A cloud-based data acquisition system allows instruments to send data directly to cloud servers for
                processing, storage, and analysis. This eliminates the need for local data storage and processing
                infrastructure, reducing costs and complexity while providing access to powerful analytics tools.</p>
            <p>Key benefits include:</p>
            <ul>
                <li>Remote access to data from anywhere</li>
                <li>Automatic data backup and disaster recovery</li>
                <li>Real-time data visualization and reporting</li>
                <li>Integration with other cloud-based applications</li>
                <li>Scalable storage capacity</li>
            </ul>
        </div>

        <img src="https://via.placeholder.com/600x400/2ecc71/ffffff?text=Cloud+Based+Data+Acquisition"
            alt="Cloud Based Data Acquisition" class="image">
        <p class="image-caption">Figure: Cloud Based Data Acquisition System Architecture</p>
    </section>

    <section id="9.4">
        <h2>9.4 Instrumentation in industry 4.0</h2>

        <div class="definition">
            <h3>Industry 4.0 and Instrumentation</h3>
            <p>Industry 4.0 is significantly impacting instrumentation by integrating smart sensors and IoT
                technologies, enabling real-time data collection, analysis, and automated control. This shift leads to
                increased efficiency, reduced downtime, and improved decision-making in industrial processes.</p>
            <p>Industry 4.0, also known as the Fourth Industrial Revolution, represents the current trend of automation
                and data exchange in manufacturing technologies. It includes cyber-physical systems, the Internet of
                Things, cloud computing, and cognitive computing.</p>
        </div>

        <h3>Key Characteristics of Industry 4.0</h3>
        <ul>
            <li><strong>Interconnectivity:</strong> Machines, devices, sensors, and people connect and communicate with
                each other via the IoT</li>
            <li><strong>Information transparency:</strong> Comprehensive information is created by connecting physical
                and digital worlds</li>
            <li><strong>Technical assistance:</strong> Systems assist humans by aggregating and visualizing information
                to make informed decisions</li>
            <li><strong>Decentralized decision-making:</strong> Cyber-physical systems make decisions on their own and
                perform tasks as autonomously as possible</li>
        </ul>

        <h3>Impact of Industry 4.0 on Instrumentation</h3>
        <ul>
            <li><strong>Smart sensors:</strong> Sensors with built-in processing capabilities that can perform analysis
                and communicate data directly</li>
            <li><strong>Real-time monitoring:</strong> Continuous monitoring of processes with immediate feedback and
                alerts</li>
            <li><strong>Predictive maintenance:</strong> Using data analytics to predict equipment failures before they
                occur, reducing downtime</li>
            <li><strong>Automated control:</strong> Systems that automatically adjust processes based on real-time data
                analysis</li>
            <li><strong>Remote access and control:</strong> Ability to monitor and control industrial processes from
                anywhere</li>
            <li><strong>Data-driven decision making:</strong> Using big data analytics to optimize processes and improve
                quality</li>
        </ul>

        <h3>Example Applications</h3>
        <ul>
            <li><strong>Smart factories:</strong> Factories where machines communicate with each other to optimize
                production processes</li>
            <li><strong>Supply chain optimization:</strong> Real-time tracking of materials and products throughout the
                supply chain</li>
            <li><strong>Quality control:</strong> Automated quality inspection using computer vision and machine
                learning</li>
            <li><strong>Energy management:</strong> Smart systems that optimize energy usage based on real-time data
            </li>
        </ul>

        <img src="https://via.placeholder.com/600x400/9b59b6/ffffff?text=Industry+4.0+Instrumentation"
            alt="Industry 4.0 Instrumentation" class="image">
        <p class="image-caption">Figure: Industry 4.0 Instrumentation System Architecture</p>
    </section>
</div>


<!-- <==========================chapter 10 =========================> -->


<div id="chapter_10">
    <h1>10. Application of Modern Instrumentation System (5 hours)</h1>

    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#10.1">10.1 Instrumentation for power station including all electrical and non-electrical
                    parameters</a></li>
            <li><a href="#10.2">10.2 Instrumentation for wire and cable manufacturing and bottling plant</a></li>
            <li><a href="#10.3">10.3 Instrumentations for a beverage manufacturing and bottling plant</a></li>
            <li><a href="#10.4">10.4 Instrumentations required for a biomedical application in a medical clinic or
                    hospital</a></li>
            <li><a href="#10.5">10.5 Instrumentation system design using a processor (Microprocessor, microcontroller or
                    others)</a></li>
        </ul>
    </div>

    <section id="10.1">
        <h2>10.1 Instrumentation for power station including all electrical and non-electrical parameters</h2>

        <div class="definition">
            <h3>Introduction to Power Station Instrumentation</h3>
            <p>Modern power stations require comprehensive instrumentation systems to monitor and control various
                electrical and non-electrical parameters. These systems ensure efficient, safe, and reliable power
                generation, transmission, and distribution. Power station instrumentation covers everything from turbine
                control to environmental monitoring, making it a critical component of modern power generation
                facilities.</p>
        </div>

        <h3>Electrical Parameters Monitoring</h3>

        <div class="definition">
            <h4>Key Electrical Parameters:</h4>
            <ul>
                <li><strong>Voltage:</strong> Monitored using potential transformers (PTs) and voltage transducers.
                    Critical for maintaining stable grid operation.</li>
                <li><strong>Current:</strong> Measured using current transformers (CTs), Rogowski coils, or Hall effect
                    sensors. Essential for load monitoring and protection systems.</li>
                <li><strong>Frequency:</strong> Monitored using frequency meters or digital signal processing
                    techniques. Critical for grid synchronization and stability.</li>
                <li><strong>Power:</strong> Measured using wattmeters, power analyzers, or energy meters. Includes
                    active, reactive, and apparent power monitoring.</li>
                <li><strong>Power Factor:</strong> Monitored using power factor meters to optimize system efficiency and
                    reduce losses.</li>
                <li><strong>Harmonics:</strong> Monitored using power quality analyzers to detect and mitigate harmonic
                    distortion.</li>
            </ul>
        </div>

        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Power+Station+Electrical+Monitoring"
            alt="Power Station Electrical Monitoring" class="image">
        <p class="image-caption">Figure: Power station electrical monitoring system showing voltage, current, and power
            measurement points</p>

        <h3>Non-Electrical Parameters Monitoring</h3>

        <div class="definition">
            <h4>Key Non-Electrical Parameters:</h4>
            <ul>
                <li><strong>Temperature:</strong> Monitored using RTDs, thermocouples, and infrared sensors in turbines,
                    boilers, transformers, and cooling systems.</li>
                <li><strong>Pressure:</strong> Monitored using pressure transducers in steam lines, hydraulic systems,
                    and cooling water systems.</li>
                <li><strong>Flow:</strong> Measured using flow meters (orifice plates, magnetic flowmeters, ultrasonic
                    flowmeters) for water, steam, and cooling fluids.</li>
                <li><strong>Vibration:</strong> Monitored using accelerometers and proximity probes for turbine and
                    generator health monitoring.</li>
                <li><strong>Level:</strong> Monitored using level sensors (ultrasonic, radar, capacitance) in boilers,
                    tanks, and reservoirs.</li>
                <li><strong>Gas Analysis:</strong> Monitored using gas analyzers for combustion efficiency, emissions
                    monitoring, and safety.</li>
                <li><strong>Humidity:</strong> Monitored using hygrometers in transformer rooms and control rooms.</li>
            </ul>
        </div>

        <h3>Power Station Instrumentation System Architecture</h3>

        <div class="system-diagram">
            <div class="system-card">
                <h4>Sensor Layer</h4>
                <ul>
                    <li>Electrical sensors (PTs, CTs)</li>
                    <li>Temperature sensors (RTDs, thermocouples)</li>
                    <li>Pressure sensors</li>
                    <li>Flow meters</li>
                    <li>Vibration sensors</li>
                    <li>Level sensors</li>
                    <li>Gas analyzers</li>
                </ul>
            </div>

            <div class="system-card">
                <h4>Signal Conditioning</h4>
                <ul>
                    <li>Amplifiers</li>
                    <li>Filters</li>
                    <li>Isolators</li>
                    <li>ADCs for digital conversion</li>
                    <li>Signal conditioning for sensor-specific requirements</li>
                </ul>
            </div>

            <div class="system-card">
                <h4>Data Acquisition & Processing</h4>
                <ul>
                    <li>SCADA system</li>
                    <li>PLCs for local control</li>
                    <li>RTUs for remote monitoring</li>
                    <li>Data loggers</li>
                    <li>Real-time processing</li>
                    <li>Historical data storage</li>
                </ul>
            </div>

            <div class="system-card">
                <h4>Control & Communication</h4>
                <ul>
                    <li>Automated control systems</li>
                    <li>Communication protocols (Modbus, DNP3, IEC 61850)</li>
                    <li>SCADA interface</li>
                    <li>Remote monitoring capabilities</li>
                    <li>Alarm and event management</li>
                    <li>Data visualization</li>
                </ul>
            </div>
        </div>

        <h3>Challenges in Power Station Instrumentation</h3>

        <div class="definition">
            <h4>Key Challenges:</h4>
            <ul>
                <li><strong>Harsh Environment:</strong> High temperatures, high voltages, electromagnetic interference,
                    and harsh weather conditions.</li>
                <li><strong>Reliability Requirements:</strong> Systems must operate continuously with minimal downtime.
                </li>
                <li><strong>Safety Concerns:</strong> Instrumentation must ensure personnel safety and prevent
                    catastrophic failures.</li>
                <li><strong>Integration Complexity:</strong> Integrating diverse instruments from different
                    manufacturers into a cohesive system.</li>
                <li><strong>Data Volume:</strong> Managing large volumes of data from numerous sensors across the plant.
                </li>
                <li><strong>Standardization:</strong> Ensuring compatibility with industry standards for
                    interoperability.</li>
            </ul>
        </div>

        <h3>Modern Solutions</h3>

        <div class="definition">
            <h4>Advanced Instrumentation Solutions:</h4>
            <ul>
                <li><strong>Digital Instrumentation:</strong> Replacing analog instruments with digital ones for better
                    accuracy and communication capabilities.</li>
                <li><strong>Wireless Sensors:</strong> For hard-to-reach locations, reducing wiring costs and
                    complexity.</li>
                <li><strong>Predictive Maintenance:</strong> Using vibration analysis, temperature trends, and other
                    parameters to predict equipment failures before they occur.</li>
                <li><strong>Smart Grid Integration:</strong> Instrumentation systems that communicate with the wider
                    power grid for optimized operation.</li>
                <li><strong>AI and Machine Learning:</strong> For anomaly detection, fault prediction, and optimization
                    of power generation processes.</li>
                <li><strong>IoT Integration:</strong> Connecting instrumentation systems to broader IoT networks for
                    enhanced monitoring and control.</li>
            </ul>
        </div>
    </section>

    <section id="10.2">
        <h2>10.2 Instrumentation for wire and cable manufacturing and bottling plant</h2>

        <div class="definition">
            <h3>Introduction to Wire and Cable Manufacturing Instrumentation</h3>
            <p>Wire and cable manufacturing requires precise instrumentation to monitor and control various parameters
                throughout the production process. From raw material handling to final product testing, instrumentation
                ensures quality, consistency, and efficiency in manufacturing operations.</p>
        </div>

        <h3>Wire and Cable Manufacturing Process Instrumentation</h3>

        <div class="definition">
            <h4>Key Process Stages and Instrumentation:</h4>
            <ul>
                <li><strong>Raw Material Handling:</strong>
                    <ul>
                        <li>Load cells for material weight monitoring</li>
                        <li>Level sensors for storage tanks</li>
                        <li>Temperature sensors for material storage conditions</li>
                    </ul>
                </li>
                <li><strong>Extrusion Process:</strong>
                    <ul>
                        <li>Temperature sensors (RTDs, thermocouples) for precise control of extruder barrels</li>
                        <li>Pressure sensors for monitoring extrusion pressure</li>
                        <li>Flow meters for monitoring material flow rates</li>
                        <li>Dimensional measurement systems (laser micrometers) for diameter control</li>
                    </ul>
                </li>
                <li><strong>Conductor Stranding:</strong>
                    <ul>
                        <li>Tension sensors for precise control of conductor tension</li>
                        <li>Speed sensors for monitoring line speed</li>
                        <li>Alignment sensors for proper conductor positioning</li>
                    </ul>
                </li>
                <li><strong>Insulation and Jacketing:</strong>
                    <ul>
                        <li>Thickness gauges (ultrasonic or laser) for precise insulation thickness control</li>
                        <li>Color matching sensors for consistent coloration</li>
                        <li>Surface inspection systems for detecting defects</li>
                    </ul>
                </li>
                <li><strong>Cabling and Shielding:</strong>
                    <ul>
                        <li>Twist pitch measurement systems</li>
                        <li>Shielding coverage measurement systems</li>
                        <li>Electrical continuity testers</li>
                    </ul>
                </li>
                <li><strong>Testing and Quality Control:</strong>
                    <ul>
                        <li>Voltage withstand testers</li>
                        <li>Insulation resistance testers</li>
                        <li>Partial discharge testers</li>
                        <li>Conductivity testers</li>
                        <li>Dimensional measurement systems</li>
                    </ul>
                </li>
            </ul>
        </div>

        <h3>Bottling Plant Instrumentation</h3>

        <div class="definition">
            <h4>Key Process Stages and Instrumentation:</h4>
            <ul>
                <li><strong>Preparation and Cleaning:</strong>
                    <ul>
                        <li>Flow meters for water and cleaning solutions</li>
                        <li>Temperature sensors for hot water systems</li>
                        <li>Pressure sensors for cleaning systems</li>
                        <li>Conductivity sensors for water quality monitoring</li>
                    </ul>
                </li>
                <li><strong>Bottle Handling:</strong>
                    <ul>
                        <li>Counters for bottle counting</li>
                        <li>Vision systems for bottle inspection</li>
                        <li>Weight sensors for bottle weight verification</li>
                        <li>Position sensors for bottle alignment</li>
                    </ul>
                </li>
                <li><strong>Filling Process:</strong>
                    <ul>
                        <li>Level sensors for product tanks</li>
                        <li>Flow meters for precise filling control</li>
                        <li>Pressure sensors for filling pressure control</li>
                        <li>Weight sensors for fill weight verification</li>
                        <li>Temperature sensors for product temperature monitoring</li>
                    </ul>
                </li>
                <li><strong>Capping and Sealing:</strong>
                    <ul>
                        <li>Torque sensors for cap tightness</li>
                        <li>Seal integrity testers</li>
                        <li>Position sensors for cap alignment</li>
                    </ul>
                </li>
                <li><strong>Labeling:</strong>
                    <ul>
                        <li>Vision systems for label placement verification</li>
                        <li>Bar code scanners for product tracking</li>
                        <li>Print quality sensors</li>
                    </ul>
                </li>
                <li><strong>Quality Control:</strong>
                    <ul>
                        <li>Weight checkers</li>
                        <li>Leak testers</li>
                        <li>Fill level sensors</li>
                        <li>Cap tightness testers</li>
                    </ul>
                </li>
            </ul>
        </div>

        <h3>Integrated Control System</h3>

        <div class="definition">
            <h4>System Architecture:</h4>
            <ul>
                <li><strong>SCADA System:</strong> Supervisory Control and Data Acquisition system for overall plant
                    monitoring and control.</li>
                <li><strong>PLCs:</strong> Programmable Logic Controllers for local control of specific processes.</li>
                <li><strong>Industrial Ethernet:</strong> For high-speed communication between devices.</li>
                <li><strong>Human-Machine Interface (HMI):</strong> For operator interaction and system monitoring.</li>
                <li><strong>Data Logging:</strong> For recording process parameters for quality control and
                    traceability.</li>
                <li><strong>Quality Management System (QMS):</strong> Integrated system for quality control and
                    compliance.</li>
            </ul>
        </div>

        <h3>Key Challenges and Solutions</h3>

        <div class="definition">
            <h4>Challenges:</h4>
            <ul>
                <li>High-speed production requiring fast response times</li>
                <li>Strict quality control requirements</li>
                <li>Need for traceability and product recall capability</li>
                <li>Integration of diverse equipment from different manufacturers</li>
                <li>Hygiene requirements in bottling plants</li>
            </ul>

            <h4>Solutions:</h4>
            <ul>
                <li>Real-time monitoring and control systems</li>
                <li>Automated quality inspection systems</li>
                <li>Integrated traceability systems with barcoding</li>
                <li>Standardized communication protocols (Modbus, Profibus, EtherNet/IP)</li>
                <li>Sanitary design of instrumentation for food and beverage applications</li>
                <li>Redundant systems for critical processes</li>
            </ul>
        </div>
    </section>

    <section id="10.3">
        <h2>10.3 Instrumentations for a beverage manufacturing and bottling plant</h2>

        <div class="definition">
            <h3>Introduction to Beverage Manufacturing Instrumentation</h3>
            <p>Beverage manufacturing requires precise instrumentation to ensure product quality, consistency, safety,
                and regulatory compliance. From raw material handling to final product packaging, instrumentation plays
                a critical role in every stage of the beverage production process.</p>
        </div>

        <h3>Key Process Stages and Instrumentation</h3>

        <div class="definition">
            <h4>1. Raw Material Handling:</h4>
            <ul>
                <li><strong>Sugar Syrup Preparation:</strong>
                    <ul>
                        <li>Level sensors for storage tanks</li>
                        <li>Temperature sensors for heating and cooling</li>
                        <li>Flow meters for precise syrup mixing</li>
                        <li>Density meters for concentration control</li>
                        <li>Conductivity sensors for purity monitoring</li>
                    </ul>
                </li>
                <li><strong>Water Treatment:</strong>
                    <ul>
                        <li>Flow meters for water flow monitoring</li>
                        <li>Pressure sensors for filtration systems</li>
                        <li>Temperature sensors for hot water systems</li>
                        <li>Conductivity sensors for water purity</li>
                        <li>PH sensors for water quality</li>
                        <li>Chlorine sensors for disinfection control</li>
                    </ul>
                </li>
                <li><strong>Ingredient Storage:</strong>
                    <ul>
                        <li>Level sensors for storage tanks</li>
                        <li>Temperature sensors for refrigerated storage</li>
                        <li>Weight sensors for inventory management</li>
                        <li>Gas sensors for monitoring storage conditions</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="definition">
            <h4>2. Mixing and Blending:</h4>
            <ul>
                <li><strong>Batch Mixing:</strong>
                    <ul>
                        <li>Flow meters for precise ingredient measurement</li>
                        <li>Temperature sensors for mixing temperature control</li>
                        <li>PH sensors for acidity control</li>
                        <li>Density meters for consistency monitoring</li>
                        <li>Viscosity sensors for consistency control</li>
                        <li>Color sensors for consistent product appearance</li>
                    </ul>
                </li>
                <li><strong>Carbonation:</strong>
                    <ul>
                        <li>Pressure sensors for carbonation tanks</li>
                        <li>Temperature sensors for carbonation control</li>
                        <li>CO2 flow meters for precise carbonation</li>
                        <li>CO2 concentration sensors for quality control</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="definition">
            <h4>3. Filling and Packaging:</h4>
            <ul>
                <li><strong>Bottle Handling:</strong>
                    <ul>
                        <li>Counters for bottle counting</li>
                        <li>Vision systems for bottle inspection</li>
                        <li>Weight sensors for bottle weight verification</li>
                        <li>Position sensors for bottle alignment</li>
                    </ul>
                </li>
                <li><strong>Filling Process:</strong>
                    <ul>
                        <li>Level sensors for product tanks</li>
                        <li>Flow meters for precise filling control</li>
                        <li>Pressure sensors for filling pressure control</li>
                        <li>Weight sensors for fill weight verification</li>
                        <li>Temperature sensors for product temperature monitoring</li>
                        <li>Fill level sensors for consistent filling</li>
                    </ul>
                </li>
                <li><strong>Capping and Sealing:</strong>
                    <ul>
                        <li>Torque sensors for cap tightness</li>
                        <li>Seal integrity testers</li>
                        <li>Position sensors for cap alignment</li>
                        <li>Visual inspection systems for cap quality</li>
                    </ul>
                </li>
                <li><strong>Labeling:</strong>
                    <ul>
                        <li>Vision systems for label placement verification</li>
                        <li>Bar code scanners for product tracking</li>
                        <li>Print quality sensors</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="definition">
            <h4>4. Quality Control and Testing:</h4>
            <ul>
                <li><strong>Chemical Analysis:</strong>
                    <ul>
                        <li>PH meters for acidity control</li>
                        <li>Conductivity meters for purity verification</li>
                        <li>Colorimeters for consistent color</li>
                        <li>Density meters for consistency verification</li>
                        <li>Gas chromatographs for flavor component analysis</li>
                    </ul>
                </li>
                <li><strong>Microbiological Testing:</strong>
                    <ul>
                        <li>Microbial testing equipment for contamination detection</li>
                        <li>ATP bioluminescence testers for surface cleanliness</li>
                        <li>Water quality testing equipment</li>
                    </ul>
                </li>
                <li><strong>Physical Testing:</strong>
                    <ul>
                        <li>Weight checkers</li>
                        <li>Leak testers</li>
                        <li>Fill level sensors</li>
                        <li>Cap tightness testers</li>
                        <li>Visual inspection systems for defects</li>
                    </ul>
                </li>
            </ul>
        </div>

        <h3>Integrated Control System</h3>

        <div class="definition">
            <h4>System Architecture:</h4>
            <ul>
                <li><strong>SCADA System:</strong> Supervisory Control and Data Acquisition system for overall plant
                    monitoring and control.</li>
                <li><strong>PLCs:</strong> Programmable Logic Controllers for local control of specific processes.</li>
                <li><strong>Industrial Ethernet:</strong> For high-speed communication between devices.</li>
                <li><strong>Human-Machine Interface (HMI):</strong> For operator interaction and system monitoring.</li>
                <li><strong>Data Logging:</strong> For recording process parameters for quality control and
                    traceability.</li>
                <li><strong>Quality Management System (QMS):</strong> Integrated system for quality control and
                    compliance.</li>
                <li><strong>Traceability System:</strong> For tracking products from raw materials to finished goods.
                </li>
            </ul>
        </div>

        <h3>Key Challenges and Solutions</h3>

        <div class="definition">
            <h4>Challenges:</h4>
            <ul>
                <li>Strict regulatory requirements for food safety</li>
                <li>Need for consistent product quality across batches</li>
                <li>High-speed production requiring fast response times</li>
                <li>Hygiene requirements for food-grade equipment</li>
                <li>Traceability and recall capability</li>
                <li>Integration of diverse equipment from different manufacturers</li>
            </ul>

            <h4>Solutions:</h4>
            <ul>
                <li>Sanitary design of instrumentation for food and beverage applications</li>
                <li>Real-time monitoring and control systems with automated adjustments</li>
                <li>Automated quality inspection systems</li>
                <li>Integrated traceability systems with barcoding and RFID</li>
                <li>Standardized communication protocols (Modbus, Profibus, EtherNet/IP)</li>
                <li>Redundant systems for critical processes</li>
                <li>Advanced analytics for predictive maintenance and quality optimization</li>
            </ul>
        </div>
    </section>

    <section id="10.4">
        <h2>10.4 Instrumentations required for a biomedical application in a medical clinic or hospital</h2>

        <div class="definition">
            <h3>Introduction to Biomedical Instrumentation</h3>
            <p>Biomedical instrumentation is critical for diagnosis, monitoring, treatment, and research in healthcare
                settings. Modern medical facilities require sophisticated instrumentation systems that are accurate,
                reliable, safe, and user-friendly. These systems range from simple devices like thermometers to complex
                systems like MRI machines.</p>
        </div>

        <h3>Key Areas of Biomedical Instrumentation</h3>

        <div class="definition">
            <h4>1. Patient Monitoring Systems:</h4>
            <ul>
                <li><strong>Cardiovascular Monitoring:</strong>
                    <ul>
                        <li>ECG (Electrocardiogram) monitors</li>
                        <li>Blood pressure monitors (manual and automatic)</li>
                        <li>Pulse oximeters</li>
                        <li>Cardiac output monitors</li>
                        <li>Arterial line monitoring systems</li>
                    </ul>
                </li>
                <li><strong>Respiratory Monitoring:</strong>
                    <ul>
                        <li>Pulse oximeters</li>
                        <li>Capnography monitors (CO2 monitoring)</li>
                        <li>Respiratory rate monitors</li>
                        <li>Ventilator monitoring systems</li>
                    </ul>
                </li>
                <li><strong>Neurological Monitoring:</strong>
                    <ul>
                        <li>EEG (Electroencephalogram) monitors</li>
                        <li>EMG (Electromyography) monitors</li>
                        <li>Evoked potential monitors</li>
                        <li>Intracranial pressure monitors</li>
                    </ul>
                </li>
                <li><strong>Temperature Monitoring:</strong>
                    <ul>
                        <li>Thermometers (digital, infrared, tympanic)</li>
                        <li>Temperature probes for internal monitoring</li>
                        <li>Thermal imaging systems</li>
                    </ul>
                </li>
                <li><strong>Multi-parameter Monitors:</strong>
                    <ul>
                        <li>Integrated systems that monitor multiple parameters simultaneously</li>
                        <li>Wireless monitoring systems for patient mobility</li>
                        <li>Remote patient monitoring systems</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="definition">
            <h4>2. Diagnostic Imaging Systems:</h4>
            <ul>
                <li><strong>X-ray Systems:</strong>
                    <ul>
                        <li>Digital radiography systems</li>
                        <li>Fluoroscopy systems</li>
                        <li>Mobile X-ray units</li>
                        <li>Dose monitoring systems</li>
                    </ul>
                </li>
                <li><strong>Computed Tomography (CT):</strong>
                    <ul>
                        <li>Multi-slice CT scanners</li>
                        <li>Dose monitoring systems</li>
                        <li>Image reconstruction systems</li>
                    </ul>
                </li>
                <li><strong>Magnetic Resonance Imaging (MRI):</strong>
                    <ul>
                        <li>High-field MRI scanners</li>
                        <li>Functional MRI systems</li>
                        <li>MRI safety monitoring systems</li>
                        <li>Contrast agent delivery systems</li>
                    </ul>
                </li>
                <li><strong>Ultrasound Systems:</strong>
                    <ul>
                        <li>Doppler ultrasound systems</li>
                        <li>3D/4D ultrasound systems</li>
                        <li>Portable ultrasound units</li>
                        <li>Image processing systems</li>
                    </ul>
                </li>
                <li><strong>Nuclear Medicine:</strong>
                    <ul>
                        <li>Gamma cameras</li>
                        <li>SPECT scanners</li>
                        <li>PET scanners</li>
                        <li>Radiation detection and monitoring systems</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="definition">
            <h4>3. Laboratory Instrumentation:</h4>
            <ul>
                <li><strong>Clinical Chemistry Analyzers:</strong>
                    <ul>
                        <li>Biochemistry analyzers</li>
                        <li>Immunoassay analyzers</li>
                        <li>Point-of-care testing devices</li>
                        <li>Blood gas analyzers</li>
                    </ul>
                </li>
                <li><strong>Hematology Analyzers:</strong>
                    <ul>
                        <li>Complete blood count (CBC) analyzers</li>
                        <li>Coagulation analyzers</li>
                        <li>Blood cell counters</li>
                    </ul>
                </li>
                <li><strong>Microbiology Analyzers:</strong>
                    <ul>
                        <li>Bacterial culture systems</li>
                        <li>Automated identification systems</li>
                        <li>Antimicrobial susceptibility testing systems</li>
                    </ul>
                </li>
                <li><strong>Pathology Equipment:</strong>
                    <ul>
                        <li>Automated slide preparation systems</li>
                        <li>Digital pathology systems</li>
                        <li>Image analysis systems</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="definition">
            <h4>4. Therapeutic Equipment:</h4>
            <ul>
                <li><strong>Infusion Pumps:</strong>
                    <ul>
                        <li>Volume control pumps</li>
                        <li>Syringe pumps</li>
                        <li>Smart pumps with drug libraries</li>
                        <li>Wireless infusion monitoring systems</li>
                    </ul>
                </li>
                <li><strong>Ventilators:</strong>
                    <ul>
                        <li>Adult ventilators</li>
                        <li>Neonatal ventilators</li>
                        <li>Portable ventilators</li>
                        <li>Non-invasive ventilation systems</li>
                    </ul>
                </li>
                <li><strong>Dialysis Machines:</strong>
                    <ul>
                        <li>Hemodialysis machines</li>
                        <li>Peritoneal dialysis systems</li>
                        <li>Continuous renal replacement therapy (CRRT) systems</li>
                    </ul>
                </li>
                <li><strong>Electrosurgical Units:</strong>
                    <ul>
                        <li>Monopolar electrosurgical units</li>
                        <li>Bipolar electrosurgical units</li>
                        <li>Radiofrequency ablation systems</li>
                    </ul>
                </li>
                <li><strong>Defibrillators:</strong>
                    <ul>
                        <li>Manual defibrillators</li>
                        <li>Automated external defibrillators (AEDs)</li>
                        <li>Implantable cardioverter-defibrillators (ICDs)</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="definition">
            <h4>5. Monitoring and Safety Systems:</h4>
            <ul>
                <li><strong>Environmental Monitoring:</strong>
                    <ul>
                        <li>Temperature and humidity sensors in operating rooms</li>
                        <li>Air quality monitoring systems</li>
                        <li>Pressure differential monitoring in isolation rooms</li>
                    </ul>
                </li>
                <li><strong>Medical Gas Monitoring:</strong>
                    <ul>
                        <li>Oxygen concentration monitors</li>
                        <li>Nitrous oxide monitors</li>
                        <li>Medical air quality monitors</li>
                    </ul>
                </li>
                <li><strong>Electrical Safety Monitoring:</strong>
                    <ul>
                        <li>Leakage current monitors</li>
                        <li>Ground fault monitors</li>
                        <li>Isolation monitors</li>
                    </ul>
                </li>
                <li><strong>Patient Identification Systems:</strong>
                    <ul>
                        <li>Bar code wristband systems</li>
                        <li>RFID patient tracking systems</li>
                        <li>Electronic medication administration records</li>
                    </ul>
                </li>
            </ul>
        </div>

        <h3>Key Challenges in Biomedical Instrumentation</h3>

        <div class="definition">
            <h4>Challenges:</h4>
            <ul>
                <li><strong>Safety and Reliability:</strong> Medical devices must be extremely reliable with fail-safe
                    mechanisms.</li>
                <li><strong>Regulatory Compliance:</strong> Strict regulations (FDA, CE, ISO 13485) must be met.</li>
                <li><strong>Biocompatibility:</strong> Devices must be safe for use with human tissue.</li>
                <li><strong>Electromagnetic Interference (EMI):</strong> Medical devices must be resistant to EMI and
                    not cause interference with other devices.</li>
                <li><strong>Human Factors:</strong> Devices must be user-friendly and intuitive for healthcare
                    professionals.</li>
                <li><strong>Miniaturization:</strong> Increasing demand for smaller, portable devices.</li>
                <li><strong>Data Security:</strong> Protecting patient data in connected medical devices.</li>
            </ul>
        </div>

        <h3>Modern Solutions in Biomedical Instrumentation</h3>

        <div class="definition">
            <h4>Solutions:</h4>
            <ul>
                <li><strong>Advanced Sensor Technology:</strong> Microsensors, nanosensors, and implantable sensors for
                    continuous monitoring.</li>
                <li><strong>Wireless Connectivity:</strong> Bluetooth, Wi-Fi, and cellular connectivity for remote
                    monitoring and data sharing.</li>
                <li><strong>Artificial Intelligence:</strong> AI for diagnostic assistance, predictive analytics, and
                    personalized medicine.</li>
                <li><strong>IoT Integration:</strong> Internet of Things for connected medical devices and integrated
                    healthcare systems.</li>
                <li><strong>3D Printing:</strong> Customized medical devices and implants.</li>
                <li><strong>Enhanced Safety Features:</strong> Multiple redundant systems, real-time monitoring, and
                    automatic fail-safe mechanisms.</li>
                <li><strong>Cloud-Based Data Management:</strong> Secure storage and analysis of medical data.</li>
            </ul>
        </div>
    </section>

    <section id="10.5">
        <h2>10.5 Instrumentation system design using a processor (Microprocessor, microcontroller or others)</h2>

        <div class="definition">
            <h3>Introduction to Instrumentation System Design with Processors</h3>
            <p>Modern instrumentation systems increasingly rely on processors for data acquisition, processing, control,
                and communication. Designing an instrumentation system with a processor requires careful consideration
                of the application requirements, processor selection, hardware design, and software development.</p>
        </div>

        <h3>System Design Process</h3>

        <div class="definition">
            <h4>Step 1: Requirements Analysis</h4>
            <ul>
                <li>Define the purpose and scope of the instrumentation system</li>
                <li>Identify all input parameters to be measured</li>
                <li>Define required accuracy, precision, and resolution</li>
                <li>Specify response time and dynamic characteristics</li>
                <li>Identify environmental conditions (temperature, humidity, EMI)</li>
                <li>Define communication requirements (local or remote monitoring)</li>
                <li>Identify safety and regulatory requirements</li>
                <li>Define power requirements and constraints</li>
                <li>Identify size and form factor constraints</li>
            </ul>
        </div>

        <div class="definition">
            <h4>Step 2: Processor Selection</h4>
            <ul>
                <li><strong>Microprocessors:</strong> For complex systems requiring high processing power (e.g., medical
                    imaging, industrial control systems)</li>
                <li><strong>Microcontrollers:</strong> For embedded systems with integrated peripherals (e.g., portable
                    medical devices, industrial sensors)</li>
                <li><strong>DSPs (Digital Signal Processors):</strong> For real-time signal processing applications
                    (e.g., ECG, ultrasound)</li>
                <li><strong>FPGAs (Field Programmable Gate Arrays):</strong> For highly parallel processing applications
                    or custom logic implementation</li>
                <li><strong>SoC (System on Chip):</strong> For integrated solutions combining processor, memory, and
                    peripherals</li>
            </ul>
            <p>Selection criteria:</p>
            <ul>
                <li>Processing speed and architecture</li>
                <li>Memory requirements (RAM, ROM, Flash)</li>
                <li>Peripheral support (ADCs, DACs, communication interfaces)</li>
                <li>Power consumption</li>
                <li>Development tools and ecosystem</li>
                <li>Cost and availability</li>
                <li>Environmental tolerance</li>
            </ul>
        </div>

        <div class="definition">
            <h4>Step 3: Hardware Design</h4>
            <ul>
                <li><strong>Sensor Interface:</strong> Design circuits for connecting sensors to the processor (signal
                    conditioning, amplification, filtering)</li>
                <li><strong>Analog-to-Digital Conversion:</strong> Select and interface appropriate ADCs for required
                    resolution and speed</li>
                <li><strong>Digital-to-Analog Conversion:</strong> Design DAC circuits for output control signals (if
                    required)</li>
                <li><strong>Communication Interfaces:</strong> Design interfaces for communication (UART, SPI, I2C,
                    Ethernet, USB, wireless)</li>
                <li><strong>Power Supply Design:</strong> Design stable power supply with appropriate filtering and
                    regulation</li>
                <li><strong>Protection Circuits:</strong> Design ESD protection, overvoltage protection, and isolation
                    circuits</li>
                <li><strong>PCB Design:</strong> Layout considerations for signal integrity, noise reduction, and
                    thermal management</li>
            </ul>
        </div>

        <div class="definition">
            <h4>Step 4: Software Development</h4>
            <ul>
                <li><strong>Firmware Development:</strong> Low-level code for hardware control, sensor interfacing, and
                    data acquisition</li>
                <li><strong>Data Processing Algorithms:</strong> Signal processing, filtering, calibration, and error
                    correction algorithms</li>
                <li><strong>Control Algorithms:</strong> PID controllers, state machines, or other control logic for
                    automated systems</li>
                <li><strong>Communication Protocols:</strong> Implementation of communication protocols for data
                    transmission</li>
                <li><strong>User Interface:</strong> Display management, user input handling, and menu systems</li>
                <li><strong>System Monitoring:</strong> Self-test routines, error detection, and fault handling</li>
                <li><strong>Security Features:</strong> Encryption, authentication, and data protection</li>
            </ul>
        </div>

        <div class="definition">
            <h4>Step 5: Testing and Validation</h4>
            <ul>
                <li><strong>Unit Testing:</strong> Testing individual components and functions</li>
                <li><strong>Integration Testing:</strong> Testing combined components and subsystems</li>
                <li><strong>System Testing:</strong> Testing the complete system against requirements</li>
                <li><strong>Environmental Testing:</strong> Testing under specified environmental conditions</li>
                <li><strong>EMC Testing:</strong> Electromagnetic compatibility testing</li>
                <li><strong>Safety Testing:</strong> Compliance with safety standards (IEC 60601 for medical devices)
                </li>
                <li><strong>Reliability Testing:</strong> Accelerated life testing and failure mode analysis</li>
            </ul>
        </div>

        <h3>Case Study: Design of a Portable Blood Glucose Monitor</h3>

        <div class="definition">
            <h4>System Requirements:</h4>
            <ul>
                <li>Measure blood glucose concentration from 0-500 mg/dL</li>
                <li>Accuracy: ±5% of reading or ±5 mg/dL, whichever is greater</li>
                <li>Measurement time: ≤5 seconds</li>
                <li>Power: Battery-operated with ≥1 year battery life</li>
                <li>Display: LCD with backlight</li>
                <li>Communication: Bluetooth for data transfer to mobile app</li>
                <li>Storage: Store up to 500 test results</li>
                <li>Size: Compact, portable design (≤10cm x 5cm x 2cm)</li>
                <li>Safety: Medical device safety standards compliance</li>
            </ul>
        </div>

        <div class="definition">
            <h4>Processor Selection:</h4>
            <ul>
                <li>Microcontroller: ARM Cortex-M4 (e.g., STM32F4 series)</li>
                <li>Reasons:
                    <ul>
                        <li>High performance for real-time processing</li>
                        <li>Integrated ADC (12-bit, 1 MSPS) for glucose sensor signal</li>
                        <li>Low power consumption for battery operation</li>
                        <li>Integrated Bluetooth module or easy interface to Bluetooth module</li>
                        <li>Memory: 256KB Flash, 64KB RAM for storage and processing</li>
                        <li>Development tools and ecosystem available</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="definition">
            <h4>Hardware Design:</h4>
            <ul>
                <li><strong>Sensor Interface:</strong>
                    <ul>
                        <li>Electrochemical glucose sensor with integrated reference electrode</li>
                        <li>Amplifier circuit for sensor signal conditioning</li>
                        <li>Filtering circuit to remove noise</li>
                        <li>Temperature compensation circuit</li>
                    </ul>
                </li>
                <li><strong>ADC Interface:</strong>
                    <ul>
                        <li>Direct connection of conditioned signal to microcontroller ADC input</li>
                        <li>Reference voltage circuit for stable ADC reference</li>
                        <li>Protection circuit for ESD and overvoltage</li>
                    </ul>
                </li>
                <li><strong>Power Supply:</strong>
                    <ul>
                        <li>3V coin cell battery with voltage regulator</li>
                        <li>Power management circuit for low-power operation</li>
                        <li>Low-dropout regulator for stable supply</li>
                    </ul>
                </li>
                <li><strong>Communication:</strong>
                    <ul>
                        <li>Bluetooth Low Energy (BLE) module interface</li>
                        <li>Antenna design for Bluetooth communication</li>
                        <li>RF shielding for EMI protection</li>
                    </ul>
                </li>
                <li><strong>Display:</strong>
                    <ul>
                        <li>Low-power LCD display with backlight control</li>
                        <li>Driver circuit for LCD interface</li>
                    </ul>
                </li>
                <li><strong>PCB Design:</strong>
                    <ul>
                        <li>Multi-layer PCB for signal integrity</li>
                        <li>Ground plane for noise reduction</li>
                        <li>Shielding for sensitive analog circuits</li>
                        <li>Thermal management for battery and processor</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="definition">
            <h4>Software Design:</h4>
            <ul>
                <li><strong>Firmware:</strong>
                    <ul>
                        <li>ADC sampling and data acquisition</li>
                        <li>Signal processing algorithms for glucose measurement</li>
                        <li>Temperature compensation algorithms</li>
                        <li>Calibration routines</li>
                        <li>Power management routines</li>
                        <li>Bluetooth communication protocol implementation</li>
                    </ul>
                </li>
                <li><strong>Data Processing:</strong>
                    <ul>
                        <li>Filtering of raw sensor data</li>
                        <li>Conversion of raw ADC values to glucose concentration</li>
                        <li>Calibration using reference values</li>
                        <li>Statistical analysis for quality control</li>
                    </ul>
                </li>
                <li><strong>User Interface:</strong>
                    <ul>
                        <li>Display management for test results</li>
                        <li>Menu system for settings and configuration</li>
                        <li>Alerts for low battery, error conditions</li>
                        <li>Time and date management</li>
                    </ul>
                </li>
                <li><strong>Security:</strong>
                    <ul>
                        <li>Encryption for data transmission</li>
                        <li>Authentication for device pairing</li>
                        <li>Secure storage of calibration data</li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="definition">
            <h4>Testing and Validation:</h4>
            <ul>
                <li><strong>Functional Testing:</strong> Verify all features work as specified</li>
                <li><strong>Accuracy Testing:</strong> Test against reference standards across measurement range</li>
                <li><strong>Environmental Testing:</strong> Test at various temperatures and humidity levels</li>
                <li><strong>EMC Testing:</strong> Verify electromagnetic compatibility</li>
                <li><strong>Safety Testing:</strong> Compliance with IEC 60601 medical device safety standards</li>
                <li><strong>Reliability Testing:</strong> Accelerated life testing and failure mode analysis</li>
                <li><strong>Usability Testing:</strong> User testing for ease of use and interface design</li>
            </ul>
        </div>

        <h3>Best Practices for Instrumentation System Design with Processors</h3>

        <div class="definition">
            <h4>Design Best Practices:</h4>
            <ul>
                <li><strong>Modular Design:</strong> Design system in modular components for easier development and
                    testing</li>
                <li><strong>Redundancy:</strong> Include redundancy for critical functions to improve reliability</li>
                <li><strong>Fail-Safe Design:</strong> Design systems to fail safely in case of errors</li>
                <li><strong>Minimize Noise:</strong> Careful PCB layout, proper grounding, shielding for sensitive
                    analog circuits</li>
                <li><strong>Power Management:</strong> Optimize power consumption for battery-operated devices</li>
                <li><strong>Documentation:</strong> Comprehensive documentation for hardware, software, and testing</li>
                <li><strong>Regulatory Compliance:</strong> Design with regulatory requirements in mind from the start
                </li>
                <li><strong>Security by Design:</strong> Implement security features from the beginning, not as an
                    afterthought</li>
                <li><strong>Test Early and Often:</strong> Implement testing throughout the development process</li>
                <li><strong>Use Proven Components:</strong> Use components with proven reliability and long-term
                    availability</li>
            </ul>
        </div>
    </section>
</div>
