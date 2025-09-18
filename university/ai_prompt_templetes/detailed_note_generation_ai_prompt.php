<?php
// =============================================
// DO NOT MODIFY THIS LINE
// This includes all styling, navigation, search, dark mode, and JS functionality
include 'detailed_note_viewer.php';
// =============================================
?>

<!-- ========== CHAPTER 1 ========== -->
<div id="chapter_1">
    <h1>1. [Chapter Title] ([Estimated Hours])</h1>
    
    <!-- TABLE OF CONTENTS -->
    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#1.1">1.1 [Section Title 1]</a></li>
            <li><a href="#1.2">1.2 [Section Title 2]</a></li>
            <!-- Add more TOC items as needed -->
        </ul>
    </div>

    <!-- SECTION 1.1 -->
    <section id="1.1">
        <h2>1.1 [Section Title 1]</h2>
        
        <!-- Definition Box -->
        <div class="definition">
            <h3>[Key Term or Concept Name]</h3>
            <p>[Clear, concise definition. Use this box for important terms, principles, or summaries.]</p>
        </div>

        <!-- Paragraph Content -->
        <p>[Start your detailed explanation here. Keep paragraphs short for readability. Use <code><code></code> for inline code or commands.]</p>

        <!-- Subheading -->
        <h3>[Subheading if needed]</h3>
        <p>[More detailed content. You can include lists, tables, or formulas.]</p>

        <!-- Bulleted List -->
        <ul>
            <li><strong>Point 1:</strong> Description.</li>
            <li><strong>Point 2:</strong> Description with <span class="highlight">highlighted</span> key terms.</li>
            <li><strong>Point 3:</strong> Include mathematical expressions like \( E = mc^2 \) or $$ \int_a^b f(x)dx $$.</li>
        </ul>

        <!-- Image with Caption -->
        <img src="https://via.placeholder.com/600x400/3498db/ffffff?text=Replace+with+Actual+Image" alt="[Descriptive Alt Text]" class="image">
        <p class="image-caption">Figure 1: [Image caption describing what the image shows and its relevance.]</p>

        <!-- Table -->
        <table>
            <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Description</th>
                    <th>Unit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Parameter 1</td>
                    <td>Description of parameter 1</td>
                    <td>Unit 1</td>
                </tr>
                <tr>
                    <td>Parameter 2</td>
                    <td>Description of parameter 2</td>
                    <td>Unit 2</td>
                </tr>
            </tbody>
        </table>

        <!-- Formula Box -->
        <div class="formula">
            \[ \text{Formula Name:} \quad y = mx + c \]
        </div>
        <p>Where:  
        \( y \) = dependent variable,  
        \( m \) = slope,  
        \( x \) = independent variable,  
        \( c \) = intercept.</p>

        <!-- Code Block (if applicable) -->
        <pre><code>// Sample code snippet (if applicable)
function example() {
    return "Hello, Instrumentation!";
}</code></pre>
    </section>

    <!-- SECTION 1.2 -->
    <section id="1.2">
        <h2>1.2 [Section Title 2]</h2>
        
        <p>[Continue with detailed content. Follow the same structure: definition boxes, lists, images, tables, formulas.]</p>

        <div class="definition">
            <h3>[Another Key Term]</h3>
            <p>[Definition or explanation.]</p>
        </div>

        <h3>Comparison or Classification</h3>
        <p>[Use a table for comparisons:]</p>

        <table>
            <thead>
                <tr>
                    <th>Feature</th>
                    <th>Type A</th>
                    <th>Type B</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Speed</td>
                    <td>Fast</td>
                    <td>Slow</td>
                </tr>
                <tr>
                    <td>Cost</td>
                    <td>High</td>
                    <td>Low</td>
                </tr>
            </tbody>
        </table>

        <p>[Add more content as needed. You can include multiple images, nested lists, or even collapsible sections if you extend the CSS/JS later.]</p>
    </section>

    <!-- Add more sections as needed: 1.3, 1.4, etc. -->
</div>

<!-- ========== CHAPTER 2 ========== -->
<div id="chapter_2">
    <h1>2. [Next Chapter Title] ([Estimated Hours])</h1>
    
    <div id="toc">
        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#2.1">2.1 [Section Title]</a></li>
            <!-- Add more -->
        </ul>
    </div>

    <section id="2.1">
        <h2>2.1 [Section Title]</h2>
        <p>[Content for Chapter 2, Section 1. Follow the same style as above.]</p>
        
        <!-- Example Math -->
        <p>The transfer function is given by:</p>
        <div class="formula">
            \[ H(s) = \frac{V_{out}(s)}{V_{in}(s)} = \frac{1}{1 + sRC} \]
        </div>

        <!-- Continue with your content -->
    </section>
</div>

<!-- Add more chapters as needed: chapter_3, chapter_4, ... -->

<!-- =============================================
     DO NOT ADD ANYTHING BELOW THIS LINE
     All closing tags and scripts are in detailed_note_viewer.php
     ============================================= -->