<?php
// Define subject title
$subject_title = "Electromagnetics Question Bank - MathJax & Diagram Test";

// Define questions array with mathematical expressions and diagrams
$questions = [
    [
        'chapter' => 1,
        'title' => 'Vector Calculus & Coordinate Systems',
        'questions' => [
            [
                'text' => 'Transform the vector \\(\\vec{F} = 4\\hat{a}_x - 2\\hat{a}_y + 4\\hat{a}_z\\) at point \\(P(10, -8, 6)\\) from Cartesian to cylindrical coordinates. Show that \\(\\nabla \\cdot (\\nabla \\times \\vec{A}) = 0\\) for any vector field \\(\\vec{A}\\).',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'data:image/jpeg;base64,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',
                'diagram_alt' => 'Diagram showing vector transformation between Cartesian and cylindrical coordinate systems'
            ],
            [
                'text' => 'Given a point \\(P(-2, 6, 3)\\) and vector field \\(\\vec{E} = y\\hat{a}_x + (xy+z)\\hat{a}_y\\), express P and E in spherical coordinates. Recall that in spherical coordinates: \\(x = r\\sin\\theta\\cos\\phi\\), \\(y = r\\sin\\theta\\sin\\phi\\), \\(z = r\\cos\\theta\\).',
                'year' => '2023 Sample',
                'has_diagram' => false
            ],
            [
                'text' => 'Evaluate the line integral \\(\\oint_C \\vec{F} \\cdot d\\vec{l}\\) where \\(\\vec{F} = x^2\\hat{a}_x + y^2\\hat{a}_y + z^2\\hat{a}_z\\) and C is the square path in the xy-plane with vertices at (0,0,0), (1,0,0), (1,1,0), and (0,1,0). Verify Stokes\' theorem: \\(\\oint_C \\vec{F} \\cdot d\\vec{l} = \\iint_S (\\nabla \\times \\vec{F}) \\cdot d\\vec{S}\\).',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/stokes_theorem.png',
                'diagram_alt' => 'Square path in xy-plane for Stokes\' theorem verification'
            ]
        ]
    ],
    [
        'chapter' => 2,
        'title' => 'Electrostatics',
        'questions' => [
            [
                'text' => 'A point charge \\(q = 5 \\times 10^{-9}\\) C is located at the origin. Find the electric field \\(\\vec{E}\\) at point \\(P(3, 4, 5)\\) using Coulomb\'s law: \\(\\vec{E} = \\frac{1}{4\\pi\\epsilon_0} \\frac{q}{r^2} \\hat{r}\\), where \\(\\epsilon_0 = 8.854 \\times 10^{-12}\\) F/m.',
                'year' => '2023 Sample',
                'has_diagram' => false
            ],
            [
                'text' => 'An infinite line charge with density \\(\\rho_l = 2 \\times 10^{-9}\\) C/m lies along the z-axis. Find the electric field at point \\(P(4, 0, 3)\\) using Gauss\'s law. The formula is \\(\\vec{E} = \\frac{\\rho_l}{2\\pi\\epsilon_0 \\rho} \\hat{a}_\\rho\\), where \\(\\rho\\) is the radial distance from the z-axis.',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/line_charge.png',
                'diagram_alt' => 'Infinite line charge along z-axis with point P at (4,0,3)'
            ],
            [
                'text' => 'For a spherical charge distribution with volume charge density \\(\\rho_v = \\rho_0 \\left(1 - \\frac{r^2}{a^2}\\right)\\) for \\(r \\leq a\\) and \\(\\rho_v = 0\\) for \\(r > a\\), find the electric field everywhere using Gauss\'s law. Show that at \\(r = a\\), \\(E = \\frac{\\rho_0 a}{12\\epsilon_0}\\).',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/spherical_charge.png',
                'diagram_alt' => 'Spherical charge distribution with radius a'
            ]
        ]
    ],
    [
        'chapter' => 3,
        'title' => 'Magnetostatics',
        'questions' => [
            [
                'text' => 'A current filament \\(I = 5\\) A flows along the z-axis from \\(z = -\\infty\\) to \\(z = \\infty\\). Find the magnetic field intensity \\(\\vec{H}\\) at point \\(P(3, 4, 0)\\) using the Biot-Savart law: \\(d\\vec{H} = \\frac{I}{4\\pi} \\frac{d\\vec{l} \\times \\hat{R}}{R^2}\\). Show that \\(\\vec{H} = \\frac{I}{2\\pi\\rho} \\hat{a}_\\phi\\).',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/biot_savart.png',
                'diagram_alt' => 'Current filament along z-axis with point P in xy-plane'
            ],
            [
                'text' => 'Verify Ampere\'s circuital law \\(\\oint \\vec{H} \\cdot d\\vec{l} = I_{enc}\\) for an infinite current sheet in the xy-plane with surface current density \\(\\vec{K} = K_0 \\hat{a}_x\\) A/m. Show that \\(\\vec{H} = \\pm \\frac{K_0}{2} \\hat{a}_y\\) for \\(z > 0\\) and \\(z < 0\\) respectively.',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/infinite_sheet.png',
                'diagram_alt' => 'Infinite current sheet in xy-plane with surface current density K'
            ],
            [
                'text' => 'Given the magnetic vector potential \\(\\vec{A} = -\\frac{\\mu_0 I a^2}{4r^2} \\sin\\theta \\hat{a}_\\phi\\) for a small circular loop of radius a carrying current I, find the magnetic flux density \\(\\vec{B} = \\nabla \\times \\vec{A}\\). Show that at large distances \\(r >> a\\), \\(B_r = \\frac{\\mu_0 I a^2 \\cos\\theta}{2r^3}\\) and \\(B_\\theta = \\frac{\\mu_0 I a^2 \\sin\\theta}{4r^3}\\).',
                'year' => '2023 Sample',
                'has_diagram' => false
            ]
        ]
    ],
    [
        'chapter' => 4,
        'title' => 'Maxwell\'s Equations',
        'questions' => [
            [
                'text' => 'Starting from the integral form of Faraday\'s law \\(\\oint_C \\vec{E} \\cdot d\\vec{l} = -\\frac{d}{dt} \\iint_S \\vec{B} \\cdot d\\vec{S}\\), derive the differential form \\(\\nabla \\times \\vec{E} = -\\frac{\\partial \\vec{B}}{\\partial t}\\) using Stokes\' theorem.',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/faraday_law.png',
                'diagram_alt' => 'Loop C with surface S for Faraday\'s law'
            ],
            [
                'text' => 'For a time-varying electric field \\(\\vec{E} = E_0 \\cos(\\omega t - \\beta z) \\hat{a}_x\\) V/m in free space, find the corresponding magnetic field \\(\\vec{H}\\) using Maxwell\'s equations. Show that \\(\\vec{H} = \\frac{E_0}{\\eta} \\cos(\\omega t - \\beta z) \\hat{a}_y\\) A/m, where \\(\\eta = \\sqrt{\\frac{\\mu_0}{\\epsilon_0}} \\approx 120\\pi\\) ohms.',
                'year' => '2023 Sample',
                'has_diagram' => false
            ],
            [
                'text' => 'The displacement current density is defined as \\(\\vec{J}_d = \\frac{\\partial \\vec{D}}{\\partial t}\\). For a parallel plate capacitor with plate area A, separation d, and voltage \\(V = V_0 \\sin(\\omega t)\\), show that the displacement current \\(I_d = C \\frac{dV}{dt}\\), where \\(C = \\frac{\\epsilon A}{d}\\).',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/displacement_current.png',
                'diagram_alt' => 'Parallel plate capacitor with sinusoidal voltage source'
            ]
        ]
    ],
    [
        'chapter' => 5,
        'title' => 'Plane Waves',
        'questions' => [
            [
                'text' => 'A uniform plane wave in free space is given by \\(\\vec{E}(z,t) = 100 \\cos(2\\pi \\times 10^9 t - \\beta z) \\hat{a}_x\\) V/m. Find: (a) the frequency f, (b) the phase constant \\(\\beta = \\frac{2\\pi}{\\lambda} = \\omega\\sqrt{\\mu_0\\epsilon_0}\\), (c) the wavelength \\(\\lambda\\), (d) the intrinsic impedance \\(\\eta = \\sqrt{\\frac{\\mu_0}{\\epsilon_0}}\\), and (e) the magnetic field \\(\\vec{H}(z,t)\\).',
                'year' => '2023 Sample',
                'has_diagram' => false
            ],
            [
                'text' => 'For a plane wave propagating in a lossy medium with \\(\\vec{E}(z,t) = E_0 e^{-\\alpha z} \\cos(\\omega t - \\beta z) \\hat{a}_x\\), the propagation constant is \\(\\gamma = \\alpha + j\\beta = j\\omega\\sqrt{\\mu\\epsilon} \\sqrt{1 - j\\frac{\\sigma}{\\omega\\epsilon}}\\). Calculate \\(\\alpha\\) and \\(\\beta\\) for a medium with \\(\\epsilon_r = 4\\), \\(\\mu_r = 1\\), \\(\\sigma = 0.1\\) S/m at \\(f = 1\\) GHz.',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/lossy_medium.png',
                'diagram_alt' => 'Plane wave attenuation in lossy medium'
            ],
            [
                'text' => 'When a plane wave is incident normally on an interface between two dielectric media, the reflection coefficient is \\(\\Gamma = \\frac{\\eta_2 - \\eta_1}{\\eta_2 + \\eta_1}\\) and transmission coefficient is \\(\\tau = \\frac{2\\eta_2}{\\eta_2 + \\eta_1}\\). For air (\\(\\eta_1 = 120\\pi\\)) to glass (\\(\\epsilon_r = 4\\), so \\(\\eta_2 = \\frac{120\\pi}{2} = 60\\pi\\)) interface, calculate \\(\\Gamma\\) and \\(\\tau\\).',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/wave_reflection.png',
                'diagram_alt' => 'Plane wave incident normally on dielectric interface'
            ]
        ]
    ],
    [
        'chapter' => 6,
        'title' => 'Transmission Lines',
        'questions' => [
            [
                'text' => 'For a transmission line with primary constants R, L, G, C, the characteristic impedance is \\(Z_0 = \\sqrt{\\frac{R + j\\omega L}{G + j\\omega C}}\\) and propagation constant is \\(\\gamma = \\alpha + j\\beta = \\sqrt{(R + j\\omega L)(G + j\\omega C)}\\). For a lossless line (R=0, G=0), show that \\(Z_0 = \\sqrt{\\frac{L}{C}}\\) and \\(\\beta = \\omega\\sqrt{LC}\\).',
                'year' => '2023 Sample',
                'has_diagram' => false
            ],
            [
                'text' => 'A 50 Ω lossless transmission line is terminated with a load impedance \\(Z_L = 75 + j50\\) Ω. Calculate: (a) the reflection coefficient \\(\\Gamma = \\frac{Z_L - Z_0}{Z_L + Z_0}\\), (b) the standing wave ratio \\(SWR = \\frac{1 + |\\Gamma|}{1 - |\\Gamma|}\\), and (c) the input impedance at a distance \\(l = \\frac{\\lambda}{4}\\) from the load: \\(Z_{in} = \\frac{Z_0^2}{Z_L}\\).',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/transmission_line.png',
                'diagram_alt' => 'Transmission line with load impedance Z_L'
            ],
            [
                'text' => 'For a quarter-wave transformer, the input impedance is \\(Z_{in} = \\frac{Z_0^2}{Z_L}\\) when \\(l = \\frac{\\lambda}{4}\\). To match a 100 Ω load to a 50 Ω line, what should be the characteristic impedance \\(Z_0\\) of the quarter-wave section? Show that \\(Z_0 = \\sqrt{Z_{in}Z_L} = \\sqrt{50 \\times 100} = 70.71\\) Ω.',
                'year' => '2023 Sample',
                'has_diagram' => true,
                'diagram_path' => 'images/quarter_wave.png',
                'diagram_alt' => 'Quarter-wave transformer matching 50Ω line to 100Ω load'
            ]
        ]
    ]
];

// Include the viewer module
include 'question_list_viewer.php';
?>
