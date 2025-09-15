<?php
// semester3.php

// Define subject list for Semester 3
$subjects = [
    "Numerical Method" => "numerical_method/numerical_page.php",
    "Data communication" => "data_communication/datacomm_page.php",
    "Instrumentation" => "instrumentation/instrumentation_page.php",
    "Data Structure and Algorithm" => "data_structure_algorithm/dsa_page.php",
    "Microprocessor" => "microprocessor/microprocessor_page.php",
    "Operating system" => "operating_system/os_page.php"
];

$title = "II/II - Semester 4 Subjects";
$subtitle = "Click on any subject to open its resources.";

// Include the master layout
include '../../../layouts/sem.php';