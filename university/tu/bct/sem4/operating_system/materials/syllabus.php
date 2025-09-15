<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operating System Syllabus - Detailed Course Outline | Engineering Curriculum</title>
    <meta name="description" content="Comprehensive syllabus for Operating System course covering process management, memory management, file systems, security, virtualization, and contemporary OS for engineering students.">
    <meta name="keywords" content="operating system syllabus, engineering syllabus, process management, memory management, file systems, virtualization, contemporary OS">
    <style>
        :root {
            --primary-green: #228B22;
            --secondary-green: #32CD32;
            --accent-yellow: #FFD700;
            --light-yellow: #FFFFE0;
            --dark-text: #333333;
            --light-text: #FFFFFF;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: var(--light-yellow);
            color: var(--dark-text);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: var(--light-text);
            padding: 25px 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: var(--accent-yellow);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        main {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
        }
        
        section {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border-left: 4px solid var(--accent-yellow);
            transition: transform 0.3s ease;
        }
        
        section:hover {
            transform: translateY(-5px);
        }
        
        h2 {
            color: var(--primary-green);
            border-bottom: 2px solid var(--accent-yellow);
            padding-bottom: 8px;
            margin-bottom: 15px;
            font-size: 1.8rem;
        }
        
        h3 {
            color: var(--secondary-green);
            margin-top: 15px;
            font-size: 1.4rem;
        }
        
        ul, ol {
            padding-left: 20px;
            margin: 10px 0;
        }
        
        li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }
        
        li:before {
            content: "•";
            color: var(--accent-yellow);
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: var(--primary-green);
            color: white;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .highlight {
            background-color: var(--accent-yellow);
            padding: 2px 5px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        .references {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 15px;
            border-radius: 5px;
        }
        
        .reference-item {
            margin-bottom: 8px;
            padding-left: 15px;
            position: relative;
        }
        
        .reference-item:before {
            content: "•";
            color: var(--secondary-green);
            position: absolute;
            left: 0;
        }
        
        footer {
            background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            border-radius: 8px;
        }
        
        @media (max-width: 768px) {
            main {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            header {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Operating System Syllabus</h1>
        <div class="subtitle">Comprehensive Engineering Course Outline for Year II, Part II</div>
    </header>
    
    <main>
        <section>
            <h2>Course Objectives</h2>
            <p>To familiarize students with the different aspects of operating systems and encourage them to use these ideas in designing operating systems. The course covers fundamental concepts of operating systems including process management, memory management, file systems, security, and virtualization.</p>
        </section>
        
        <section>
            <h2>Topics Covered</h2>
            
            <h3>1. Introduction (6 hours)</h3>
            <ul>
                <li>1.1 Introduction to operating systems</li>
                <li>1.2 OS as an extended machine and resource manager</li>
                <li>1.4 Type of operating system: Mainframe, server, personal, smartphone and embedded</li>
                <li>1.5 Operating system components: Kernel, shell, utilities, applications</li>
                <li>1.6 Types of OS kernel: Monolithic, micro, nano, layered, hybrid, exokernel</li>
                <li>1.7 System calls, shell commands, shell programming</li>
                <li>1.8 POSIX standard</li>
                <li>1.9 Bootloader, GRUB, UEFI and legacy boot</li>
            </ul>
            
            <h3>2. Process Management (7 hours)</h3>
            <ul>
                <li>2.1 Process description, states and control</li>
                <li>2.2 Scheduling algorithms</li>
                <ul>
                    <li>2.2.1 First Come First Serve (FCFS)</li>
                    <li>2.2.2 Shortest Job First (SJF)</li>
                    <li>2.2.3 Shortest Remaining Time (SRT)</li>
                    <li>2.2.4 Round Robin (RR)</li>
                    <li>2.2.5 Highest Response Ratio Next (HRNN)</li>
                    <li>2.2.6 Completely Fair Scheduler (CFS) used in Linux</li>
                </ul>
            </ul>
            
            <h3>3. Process Communication and Synchronization (10 hours)</h3>
            <ul>
                <li>3.1 Principles of concurrency, race condition, critical region</li>
                <li>3.2 Mutual exclusion, semaphores, and mutex</li>
                <li>3.3 Message passing and monitors</li>
                <li>3.4 Classical problems of synchronization: Readers-writers problem, producer-consumer problem, dining philosopher problem</li>
                <li>3.5 Deadlock: Prevention, ignorance, avoidance</li>
            </ul>
            
            <h3>4. I/O, and Memory Management (9 hours)</h3>
            <ul>
                <li>4.1 I/O management</li>
                <ul>
                    <li>4.1.1 Principles of I/O hardware and software</li>
                    <li>4.1.2 I/O software layer</li>
                    <li>4.1.3 Disk technologies: Magnetic disk, SSD, NVMe storage</li>
                    <li>4.1.4 RAID</li>
                    <li>4.1.5 Concept of stable storage, compare bit comparison</li>
                </ul>
                <li>4.2 Memory Management</li>
                <ul>
                    <li>4.2.1 Memory address, swapping and managing free memory space</li>
                    <li>4.2.2 Page replacement algorithms (FIFO, LRU, Optimal, page fault and hit ratio)</li>
                    <li>4.2.3 Allocation of frames</li>
                    <li>4.2.4 Thrashing</li>
                </ul>
            </ul>
            
            <h3>5. File Systems (3 hours)</h3>
            <ul>
                <li>5.1 File concepts: Name, structure, types, access, attributes, operations</li>
                <li>5.2 Directory structures: Paths and hierarchies (Linux/windows)</li>
                <li>5.3 File system implementation: Inodes, allocation methods (contiguous, linked, indexed)</li>
                <li>5.4 File system performance: Factors affecting efficiency</li>
                <li>5.5 Example file systems: NTFS, EXT4, FAT32, NFS</li>
            </ul>
            
            <h3>6. Security and System Administration (3 hours)</h3>
            <ul>
                <li>6.1 OS security: Cryptography, multi-factor authentication (MFA), secure boot</li>
                <li>6.2 Access control: Policies, lists, and OS support</li>
                <li>6.3 System administration: User management, environment setup and tools (AWK, shell scripts, make)</li>
            </ul>
            
            <h3>7. Hypervisors and Virtual Systems (4 hours)</h3>
            <ul>
                <li>7.1 Hypervisors: Type 1 and type 2</li>
                <li>7.2 Virtual machines: Creating virtual machine in QEMU/Virtual Box/VMWare</li>
                <li>7.3 Container virtualization: Docker and Kubernetes</li>
                <li>7.4 PowerShell and Windows subsystem for LINUX (WSL)</li>
                <li>7.5 Performance optimization and security in virtualized environments</li>
            </ul>
            
            <h3>8. Overview of Contemporary OS (3 hours)</h3>
            <ul>
                <li>8.1 Windows and Linux-based OS</li>
                <li>8.2 Embedded and mobile OS</li>
                <li>8.3 IoT and RT operating system</li>
                <li>8.4 Robot and smart card operating system</li>
            </ul>
        </section>
        
        <section>
            <h2>Tutorial Details (15 hours)</h2>
            <ul>
                <li>Unix shell programs to do a variety of tasks</li>
                <li>Problems on scheduling algorithms</li>
                <li>Problems on page replacement algorithms</li>
                <li>Problems on deadlock</li>
                <li>Problems on segmentation and paging</li>
                <li>Comprehensive study on storage technologies with cobit and speed comparisons</li>
                <li>Study on process management, memory management, I/O management, security/file system of a selected OS</li>
            </ul>
        </section>
        
        <section>
            <h2>Practical Sessions (22.5 hours)</h2>
            <ul>
                <li>Basic Unix commands</li>
                <li>Shell Programming</li>
                <li>Implementation of the ls and grep commands</li>
                <li>Programs using the I/O system calls of the UNIX operating system</li>
                <li>Implementation of scheduling algorithms and the producer-consumer problem</li>
                <li>Implementation of some memory management schemes such as paging and segmentation</li>
                <li>Term Project</li>
            </ul>
        </section>
        
        <section>
            <h2>Final Exam Pattern</h2>
            <table>
                <thead>
                    <tr>
                        <th>Chapter</th>
                        <th>Hours</th>
                        <th>Marks Distribution</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>6</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>7</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>10</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>9</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>3</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>45</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table>
            <p class="highlight">Note: There may be minor deviation in marks distribution.</p>
        </section>
        
        <section class="references">
            <h2>References</h2>
            <div class="reference-item">Tanenbaum, A.S., Bos, H. (2024). Modern Operating Systems. 3rd Edition. PHI.</div>
            <div class="reference-item">Stalling, W. (2008). Operating Systems.</div>
            <div class="reference-item">Chaturvedi, A., Rai, B.L. (2017). UNIX. Science Press.</div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2023 Engineering Curriculum | Operating System Syllabus</p>
        <p>Designed for students pursuing engineering education with focus on operating systems and system design</p>
    </footer>
</body>
</html>