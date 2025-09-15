<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Structures Syllabus - Detailed Course Outline | Engineering Curriculum</title>
    <meta name="description" content="Comprehensive syllabus for Data Structures course covering algorithms, stacks, queues, linked lists, trees, graphs, sorting and searching techniques for engineering students.">
    <meta name="keywords" content="data structures syllabus, engineering syllabus, algorithms, data structures, sorting algorithms, searching algorithms, tree structures, graph algorithms">
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
        <h1>Data Structures Syllabus</h1>
        <div class="subtitle">Comprehensive Engineering Course Outline for Year II, Part II</div>
    </header>
    
    <main>
        <section>
            <h2>Course Objectives</h2>
            <p>The objective of this course is to impart fundamental knowledge on the design and implementation of data structures for storing information. It also covers various algorithms used in computer science. Upon completion of this course, students will be able to design and choose the appropriate data structure and efficient algorithm to achieve optimal performance.</p>
        </section>
        
        <section>
            <h2>Topics Covered</h2>
            
            <h3>1. Introduction (4 hours)</h3>
            <ul>
                <li>1.1 Introduction to data structures</li>
                <ul>
                    <li>1.1.1 Need of data structures</li>
                    <li>1.1.2 Types of data structures and its characteristics</li>
                </ul>
                <li>1.2 Abstract data type (ADT)</li>
                <li>1.3 Basics of algorithm design techniques (Brute Force, divide and conquer, Greedy algorithms, branch and bound, backtracking, randomized, recursive, dynamic programming)</li>
                <li>1.4 Algorithm analysis</li>
                <ul>
                    <li>1.4.1 Time and space complexity</li>
                    <li>1.4.2 Best, worst and average case analysis</li>
                    <li>1.4.3 Rate of growth</li>
                    <li>1.4.4 Asymptotic notations: Big Oh, Big Omega and Big Theta</li>
                </ul>
            </ul>
            
            <h3>2. Stack and Recursion (7 hours)</h3>
            <ul>
                <li>2.1 Definition of stack and its operations</li>
                <li>2.2 Array implementation of stack ADT</li>
                <li>2.3 Stack applications</li>
                <ul>
                    <li>2.3.1 Expression conversion: Infix to postfix and prefix expression</li>
                    <li>2.3.2 Expression evaluation: Infix and postfix expressions</li>
                </ul>
                <li>2.4 Recursion</li>
                <ul>
                    <li>2.4.1 Concept of recursion</li>
                    <li>2.4.2 Recursion and stack</li>
                    <li>2.4.3 Recursion vs iteration</li>
                    <li>2.4.4 Execution of recursive calls</li>
                    <li>2.4.5 Types of recursions</li>
                    <li>2.4.6 Applications of recursion: Tower of Hanoi</li>
                </ul>
            </ul>
            
            <h3>3. Queues (5 hours)</h3>
            <ul>
                <li>3.1 Definition of queue and its operations</li>
                <li>3.2 Array implementation of queue ADT</li>
                <li>3.3 Types of queue ADT: Linear, circular, double ended and priority queues</li>
            </ul>
            
            <h3>4. Linked List (7 hours)</h3>
            <ul>
                <li>4.1 Definition of list and its operations</li>
                <li>4.2 Array implementation of list ADT</li>
                <li>4.3 Static list and its limitations</li>
                <li>4.4 Linked list: Definition and its operations</li>
                <li>4.5 Types of linked list: Singly, doubly, circular</li>
                <li>4.6 Applications of linked list</li>
                <ul>
                    <li>4.6.1 Linked list implementation of stack and queue ADT</li>
                    <li>4.6.2 Solving polynomial equations using linked list</li>
                </ul>
            </ul>
            
            <h3>5. Tree (6 hours)</h3>
            <ul>
                <li>5.1 Definition and tree terminologies</li>
                <li>5.2 Binary trees</li>
                <ul>
                    <li>5.2.1 Definition and types</li>
                    <li>5.2.2 Array and linked list representation</li>
                    <li>5.2.3 Traversal algorithms: Pre-order, in-order and post-order traversal</li>
                </ul>
                <li>5.3 Binary search tree</li>
                <ul>
                    <li>5.3.1 Definition and operations on binary search tree: Insertion, deletion, searching and traversing</li>
                    <li>5.3.2 Construction of binary search tree</li>
                </ul>
                <li>5.4 Balanced binary tree</li>
                <ul>
                    <li>5.4.1 Problem with unbalanced binary trees</li>
                    <li>5.4.2 Balanced binary search tree</li>
                    <li>5.4.3 AVL tree, definition and need of AVL tree, construction of AVL tree: Insertion, deletion on AVL tree and rotation operations</li>
                </ul>
                <li>5.5 Introduction to red-black tree</li>
                <li>5.6 B-Tree: Need, definition and construction of B-tree</li>
            </ul>
            
            <h3>6. Graphs (6 hours)</h3>
            <ul>
                <li>6.1 Definition, terminologies and types of graphs</li>
                <li>6.2 Representation of graphs: Adjacency matrix, incidence matrix and adjacency list</li>
                <li>6.3 Transitive closure and Warshall's algorithm</li>
                <li>6.4 Graph traversals: Breadth-first search, depth-first search and topological sort</li>
                <li>6.5 Minimum spanning tree: Kruskal's algorithm and Prim's algorithm</li>
                <li>6.6 Shortest-paths problems: Dijkstra's algorithm, Floyd-Warshall algorithm</li>
            </ul>
            
            <h3>7. Sorting Algorithms (5 hours)</h3>
            <ul>
                <li>7.1 Definition of sorting and its applications</li>
                <li>7.2 Types of sorting: Internal/external sort, stable/unstable sort, in-place/not in place sort, adaptive/non-adaptive sort</li>
                <li>7.3 Sorting algorithms and its efficiency: Bubble, insertion, selection, shell</li>
            </ul>
            
            <h3>8. Searching Algorithms (5 hours)</h3>
            <ul>
                <li>8.1 Definition of searching techniques and its applications</li>
                <li>8.2 Different searching algorithms and its efficiency</li>
                <ul>
                    <li>8.2.1 Linear search</li>
                    <li>8.2.2 Binary search</li>
                </ul>
                <li>8.3 Hashing</li>
                <ul>
                    <li>8.3.1 Definition and its applications</li>
                    <li>8.3.2 Collision in hash table</li>
                    <li>8.3.3 Collision resolution techniques: Chaining method and open addressing method (Linear probing, quadratic probing and double hashing)</li>
                </ul>
            </ul>
        </section>
        
        <section>
            <h2>Tutorial Details (15 hours)</h2>
            <ul>
                <li>Analyzing time and space complexity of basic algorithms and comparing best, worst, and average cases with examples</li>
                <li>Solving problems using stacks: converting infix expressions to postfix/prefix, evaluating postfix expressions, balancing parentheses, reversing a string</li>
                <li>Solving Tower of Hanoi recursively and analyzing tail vs non-tail recursion</li>
                <li>Solving polynomial addition using linked lists</li>
                <li>Implementing tree traversals: Preorder, inorder, postorder</li>
                <li>Constructing a binary search tree (BST) and performing insertion, deletion, and searching, balancing BSTs with AVL tree operations (Rotations, insertion, deletion), constructing B-Trees (Insertion, deletion)</li>
                <li>Implementing Huffman coding for text compression</li>
                <li>Solving shortest path problems using Dijkstra's and Floyd-Warshall algorithms</li>
                <li>Implementing Kruskal's and Prim's algorithms for minimum spanning tree</li>
                <li>Analyzing and comparing sorting algorithm efficiencies</li>
                <li>Implementing linear search and binary search</li>
                <li>Designing a hash table with different collision resolution techniques (Chaining, linear probing, quadratic probing, double hashing)</li>
            </ul>
        </section>
        
        <section>
            <h2>Practical Sessions (45 hours)</h2>
            <ul>
                <li>Implementation of stack using: array, applications of stack - conversion of infix to prefix and postfix expression, evaluation of prefix and postfix expression, matching parenthesis, reversal of string</li>
                <li>Implementation of recursive algorithms (Tail and non-tail method) - Factorial, sum of natural numbers, Fibonacci series, implementation of Tower of Hanoi</li>
                <li>Implementations of linear queue and circular queue using arrays</li>
                <li>Implementation of static list, implementation of linked list: Singly and doubly linked lists</li>
                <li>Implementation of stack and queue using linked list, application of linked list - polynomial addition</li>
                <li>Implementation of in-order, pre-order and post-order tree traversals</li>
                <li>Implementation of breadth-first and depth-first search to traverse a graph</li>
                <li>Implementation of different sorting algorithms</li>
                <li>Implementation of different searching algorithms</li>
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
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>7</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>5</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>7</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>7</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>6</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>5</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>5</td>
                        <td>7</td>
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
            <div class="reference-item">Langsam, Y., Augenstein, M. J., and Tenenbaum, A. M. (1996). Data Structures using C and C++. Prentice Hall Press.</div>
            <div class="reference-item">Rowe, G. W. (1997). Introduction to data structures and algorithms with C++. Prentice-Hall, India.</div>
            <div class="reference-item">Cormen, T. H., Leiserson, C. E., Rivest, R. L., and Stein, C. (2022). Introduction to algorithms. MIT press.</div>
            <div class="reference-item">Kruse, R. L., and Ryba, A. J. (1998). Data structures and program design in C++. Prentice Hall, India.</div>
            <div class="reference-item">Thareja, R. (2014). Data Structures Using C. University Press.</div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2023 Engineering Curriculum | Data Structures Syllabus</p>
        <p>Designed for students pursuing engineering education with focus on data structures and algorithms</p>
    </footer>
</body>
</html>