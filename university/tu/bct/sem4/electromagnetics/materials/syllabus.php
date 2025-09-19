<?php
header("Content-Type: text/html; charset=utf-8");

// Define syllabus content for Electromagnetics
$pageTitle = "Electromagnetics Syllabus";
$subtitle = "Comprehensive Engineering Course Outline for Year II, Part II";
$courseObjectives = "The objective of this course is to provide students with a basic mathematical concepts related to electromagnetic time invariant and time variant fields including wave and their transmission on different media.";

$topics = [
    [
        'title' => '1. Introduction (4 hours)',
        'items' => [
            '1.1 Scalar and vector fields',
            '1.2 Operations on scalar and vector fields',
            '1.3 Co-ordinate systems (Cartesian, cylindrical and spherical) and conversions'
        ]
    ],
    [
        'title' => '2. Electric Field (15 hours)',
        'items' => [
            '2.1 Coulomb\'s law',
            '2.2 Electric field intensity',
            '2.3 Electric flux density',
            '2.4 Gauss\'s law and applications',
            '2.5 Physical significance of divergence, divergence theorem',
            '2.6 Electric potential, potential gradient',
            '2.7 Energy density in electrostatic field',
            '2.8 Electric properties of material medium',
            '2.9 Free and bound charges, polarization, relative permittivity, electric dipole, electric boundary conditions',
            '2.10 Current, current density, conservation of charge, relaxation time continuity equation',
            '2.11 Boundary value problems, Laplace and Poisson equations and their solutions, uniqueness theorem'
        ]
    ],
    [
        'title' => '3. Magnetic Field (9 hours)',
        'items' => [
            '3.1 Biot-Savart\'s law',
            '3.2 Magnetic field intensity',
            '3.3 Ampere\'s circuital law and its application',
            '3.4 Magnetic flux density',
            '3.5 Physical significance of curl, Stoke\'s theorem',
            '3.6 Scalar and magnetic vector potential',
            '3.7 Magnetic properties of material medium',
            '3.8 Magnetic force, magnetic torque, magnetic moment, magnetization',
            '3.9 Magnetic boundary condition'
        ]
    ],
    [
        'title' => '4. Time Varying Fields (4 hours)',
        'items' => [
            '4.1 Faraday\'s law, transformer EMF, motional EMF',
            '4.2 Displacement current',
            '4.3 Maxwell\'s equations in integral and point forms'
        ]
    ],
    [
        'title' => '5. Plane Waves (9 hours)',
        'items' => [
            '5.1 Wave propagation in lossless and lossy dielectric',
            '5.2 Plane waves in free space, lossless dielectric, good conductor',
            '5.3 Power and Poynting theorem average power density',
            '5.4 Reflection of plane wave at normal incidence',
            '5.5 Standing wave and SWR',
            '5.6 Input intrinsic impedance'
        ]
    ],
    [
        'title' => '6. Transmission Lines (4 hours)',
        'items' => [
            '6.1 Transmission line equations (Taking analogy from wave equations)',
            '6.2 Lossless, lossy and distortionless transmission lines',
            '6.3 Input impedance, reflection coefficient, standing wave ratio'
        ]
    ]
];

$tutorialHours = 15;
$tutorials = [
    'Conversion of coordinate systems (cartesian to cylindrical vice versa, cylindrical to spherical and vice versa)',
    'Electric field intensity and flux density (Coulomb\'s law, Gauss law, divergence, electric potential and energy density)',
    'Boundary condition, electric dipole, and boundary value problems',
    'Magnetic fields (Biot-savart law, Ampere circuit law, Stoke\'s theorem, magnetic force and torque)',
    'Time varying fields (Transformer/motional EMF, displacement current)',
    'Wave propagation equations in lossy and lossless medium (Poynting theorem, standing wave ratio and intrinsic impedance)',
    'Transmission line (Lossless, lossy and distortionless)'
];

$practicalHours = 15;
$practicals = [
    'Teledeltos (Electro-conductive) paper mapping of electrostatic fields',
    'Determination of dielectric constant, display of a magnetic hysteresis loop',
    'Studies of wave propagation on a terminated parameter transmission line',
    ' Microwave sources, detectors, transmission lines',
    'Standing wave patterns on transmission lines, reflections, power measurements on transmission lines, reflections',
    'Familiarizations of electric and magnetic fields measurements',
    'Simulation tool'
];

$examPattern = [
    ['chapter' => '1', 'hours' => '4', 'marks' => '4'],
    ['chapter' => '2', 'hours' => '15', 'marks' => '15'],
    ['chapter' => '3', 'hours' => '9', 'marks' => '12'],
    ['chapter' => '4', 'hours' => '4', 'marks' => '4'],
    ['chapter' => '5', 'hours' => '9', 'marks' => '12'],
    ['chapter' => '6', 'hours' => '4', 'marks' => '4']
];

$totalHours = 45;
$totalMarks = 60;

$references = [
    'Hayt, W. H. (2001). Engineering Electromagnetics. McGraw-Hill Book Company.',
    'Kraus, J. D. (1973). Electromagnetics. McGraw-Hill Book Company.',
    'Rao, N. N. (1990). Elements of Engineering Electromagnetics. Prentice Hall.',
    'David K. Cheng, (1989). Field and wave Electromagnetics. Addison-westey.',
    'Sadiku, M. N. O. (2010). Elements of Electromagnetics. Oxford University Press.'
];

// Include the reusable syllabus viewer
include $_SERVER['DOCUMENT_ROOT'] . '/std/university/layouts/syllabus_viewer.php';
?>