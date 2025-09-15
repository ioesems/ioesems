<?php
session_start();
include __DIR__ . './api/config.php';
if (!isset($conn) || !($conn instanceof mysqli)) {
    die("Database connection failed. Please contact administrator.");
}
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('Location: ../login/index.php');
    exit;
}
$user_id = $_SESSION['user_id'];
$name = htmlspecialchars($_SESSION['name']);
$email = htmlspecialchars($_SESSION['email'] ?? '');
// Get questions
$questions = [];
$stmt = $conn->prepare("SELECT * FROM questions WHERE user_id = ? ORDER BY created_at DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) { $questions[] = $row; }
$stmt->close();
// Get answers
$answers = [];
$stmt = $conn->prepare("
    SELECT a.*, q.question_text 
    FROM answers a 
    JOIN questions q ON a.question_id = q.id 
    WHERE a.user_id = ? 
    ORDER BY a.created_at DESC
");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) { $answers[] = $row; }
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* ===== CONSISTENT COLOR SYSTEM ===== */
        :root {
            /* Primary Color Palette - Rich Forest Green */
            --primary-50: #f0fdf4;
            --primary-100: #dcfce7;
            --primary-200: #bbf7d0;
            --primary-300: #86efac;
            --primary-400: #4ade80;
            --primary-500: #22c55e;
            --primary-600: #16a34a;
            --primary-700: #15803d;
            --primary-800: #166534;
            --primary-900: #14532d;
            /* Accent Color Palette - Warm Amber */
            --accent-50: #fffbeb;
            --accent-100: #fef3c7;
            --accent-200: #fde68a;
            --accent-300: #fcd34d;
            --accent-400: #fbbf24;
            --accent-500: #f59e0b;
            --accent-600: #d97706;
            --accent-700: #b45309;
            --accent-800: #92400e;
            --accent-900: #78350f;
            /* Neutral Palette */
            --gray-50: #fafafa;
            --gray-100: #f5f5f5;
            --gray-200: #e5e5e5;
            --gray-300: #d4d4d4;
            --gray-400: #a3a3a3;
            --gray-500: #737373;
            --gray-600: #525252;
            --gray-700: #404040;
            --gray-800: #262626;
            --gray-900: #171717;
            /* Semantic Colors */
            --success: #10b981;
            --warning: #f59e0b;
            --error: #ef4444;
            --info: #3b82f6;
            /* UI Variables */
            --card-bg: #ffffff;
            --surface-bg: var(--gray-50);
            --border-light: var(--gray-200);
            --border-medium: var(--gray-300);
            --text-primary: var(--gray-900);
            --text-secondary: var(--gray-600);
            --text-muted: var(--gray-500);
            /* Shadows */
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-md: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            /* Border Radius */
            --radius-sm: 6px;
            --radius: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 20px;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: var(--surface-bg);
            color: var(--text-primary);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            line-height: 1.6;
        }
        .dashboard {
            display: flex;
            min-height: 100vh;
        }
        /* ===== SIDEBAR ===== */
        .sidebar {
            width: 280px;
            background: linear-gradient(180deg, var(--primary-800), var(--primary-900));
            color: white;
            display: flex;
            flex-direction: column;
            padding: 32px 24px;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Ccircle cx='7' cy='7' r='7'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        }
        .sidebar-header {
            position: relative;
            z-index: 1;
            margin-bottom: 32px;
        }
        .sidebar h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--accent-300);
            margin-bottom: 8px;
            letter-spacing: -0.025em;
        }
        .sidebar-subtitle {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.875rem;
            font-weight: 500;
        }
        .nav-menu {
            position: relative;
            z-index: 1;
        }
        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            padding: 14px 16px;
            margin-bottom: 8px;
            border-radius: var(--radius);
            transition: all 0.2s ease;
            font-weight: 500;
            font-size: 15px;
        }
        .nav-item:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transform: translateX(4px);
        }
        .nav-item.active {
            background: linear-gradient(135deg, var(--accent-500), var(--accent-600));
            color: white;
            box-shadow: var(--shadow);
        }
        .nav-icon {
            width: 20px;
            height: 20px;
            opacity: 0.8;
        }
        .logout-section {
            margin-top: auto;
            position: relative;
            z-index: 1;
        }
        .logout-item {
            display: flex;
            align-items: center;
            gap: 12px;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            padding: 14px 16px;
            border-radius: var(--radius);
            transition: all 0.2s ease;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .logout-item:hover {
            background: rgba(239, 68, 68, 0.1);
            border-color: rgba(239, 68, 68, 0.3);
            color: #fca5a5;
        }
        /* ===== MAIN CONTENT ===== */
        .content {
            flex: 1;
            padding: 32px;
            background: var(--surface-bg);
            overflow-y: auto;
            transition: margin 0.3s ease;
        }
        .page-header {
            margin-bottom: 32px;
        }
        .page-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 8px;
            letter-spacing: -0.025em;
        }
        .page-subtitle {
            color: var(--text-secondary);
            font-size: 1.1rem;
            font-weight: 400;
        }
        /* ===== CARDS ===== */
        .card {
            background: var(--card-bg);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            border: 1px solid var(--border-light);
            margin-bottom: 24px;
            overflow: hidden;
            transition: all 0.2s ease;
        }
        .card:hover {
            box-shadow: var(--shadow-md);
            border-color: var(--primary-200);
        }
        .card-header {
            padding: 24px 32px 20px;
            border-bottom: 1px solid var(--border-light);
            background: linear-gradient(135deg, var(--gray-50), white);
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .card-icon {
            width: 24px;
            height: 24px;
            color: var(--primary-600);
        }
        .card-body {
            padding: 32px;
        }
        /* ===== PROFILE CARD ===== */
        .profile-card {
            background: linear-gradient(135deg, var(--primary-500), var(--primary-600));
            color: white;
            border: none;
            position: relative;
            overflow: hidden;
        }
        .profile-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='7' cy='7' r='7'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        }
        .profile-content {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 24px;
        }
        .profile-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent-400), var(--accent-500));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 700;
            color: white;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }
        .profile-info h3 {
            font-size: 1.75rem;
            font-weight: 700;
            margin: 0 0 8px 0;
            letter-spacing: -0.025em;
        }
        .profile-info p {
            margin: 4px 0;
            opacity: 0.9;
            font-size: 1.1rem;
        }
        .profile-stats {
            margin-top: 16px;
            display: flex;
            gap: 24px;
        }
        .stat-item {
            text-align: center;
        }
        .stat-number {
            font-size: 1.5rem;
            font-weight: 700;
            display: block;
        }
        .stat-label {
            font-size: 0.875rem;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 500;
        }
        /* ===== QA ITEMS ===== */
        .qa-item,
        .answer-item {
            background: var(--card-bg);
            border: 1px solid var(--border-light);
            border-radius: var(--radius);
            padding: 20px;
            margin-bottom: 16px;
            transition: all 0.2s ease;
        }
        .qa-item {
            background: linear-gradient(135deg, var(--accent-50), white);
            border-left: 4px solid var(--accent-500);
            border-color: var(--accent-100);
        }
        .answer-item {
            background: linear-gradient(135deg, var(--primary-50), white);
            border-left: 4px solid var(--primary-500);
            border-color: var(--primary-100);
        }
        .qa-item:hover {
            border-color: var(--accent-200);
            border-left-color: var(--accent-600);
            box-shadow: var(--shadow-sm);
            transform: translateY(-2px);
        }
        .answer-item:hover {
            border-color: var(--primary-200);
            border-left-color: var(--primary-600);
            box-shadow: var(--shadow-sm);
            transform: translateY(-2px);
        }
        .qa-item h4,
        .answer-item h4 {
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0 0 12px 0;
            color: var(--text-primary);
            line-height: 1.4;
        }
        .qa-item p,
        .answer-item p {
            margin: 8px 0;
            color: var(--text-secondary);
            line-height: 1.6;
        }
        .qa-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 16px;
            flex-wrap: wrap;
            gap: 12px;
        }
        .qa-date {
            font-size: 0.875rem;
            color: var(--text-muted);
            font-weight: 500;
        }
        .qa-actions {
            display: flex;
            gap: 8px;
        }
        /* ===== BUTTONS ===== */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            font-weight: 600;
            font-size: 14px;
            border-radius: var(--radius);
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
            white-space: nowrap;
        }
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-500), var(--primary-600));
            color: white;
            box-shadow: var(--shadow-sm);
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-600), var(--primary-700));
            transform: translateY(-1px);
            box-shadow: var(--shadow);
        }
        .btn-secondary {
            background: linear-gradient(135deg, var(--accent-400), var(--accent-500));
            color: white;
            box-shadow: var(--shadow-sm);
        }
        .btn-secondary:hover {
            background: linear-gradient(135deg, var(--accent-500), var(--accent-600));
            transform: translateY(-1px);
            box-shadow: var(--shadow);
        }
        .btn-ghost {
            background: transparent;
            color: var(--primary-600);
            border: 1px solid var(--primary-200);
        }
        .btn-ghost:hover {
            background: var(--primary-50);
            border-color: var(--primary-300);
        }
        .btn-danger {
            background: linear-gradient(135deg, var(--error), #dc2626);
            color: white;
        }
        .btn-danger:hover {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            transform: translateY(-1px);
        }
        /* ===== EMPTY STATES ===== */
        .empty-state {
            text-align: center;
            padding: 48px 24px;
            color: var(--text-muted);
            background: linear-gradient(135deg, var(--gray-50), white);
            border: 2px dashed var(--border-medium);
            border-radius: var(--radius-md);
        }
        .empty-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 16px;
            opacity: 0.5;
        }
        .empty-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-secondary);
            margin: 0 0 8px 0;
        }
        .empty-text {
            font-size: 1rem;
            margin: 0;
        }
        /* ===== SUCCESS MESSAGE ===== */
        #successMessage {
            display: none;
            position: fixed;
            top: 24px;
            right: 24px;
            background: linear-gradient(135deg, var(--success), #059669);
            color: white;
            padding: 16px 24px;
            border-radius: var(--radius);
            box-shadow: var(--shadow-lg);
            font-weight: 600;
            z-index: 9999;
            min-width: 300px;
            transition: all 0.3s ease;
        }
        /* ===== INLINE EDIT FORM ===== */
        .edit-form-container {
            display: none;
            padding-top: 20px;
            animation: fadeIn 0.3s ease-in-out;
        }
        .edit-form-container textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--border-light);
            border-radius: var(--radius);
            font-family: inherit;
            font-size: 15px;
            resize: vertical;
            min-height: 100px;
            margin-bottom: 16px;
            transition: all 0.2s ease;
        }
        .edit-form-container textarea:focus {
            outline: none;
            border-color: var(--primary-400);
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
        }
        .edit-form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        /* ===== HAMBURGER MENU FOR MOBILE ===== */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--text-primary);
            font-size: 1.5rem;
            cursor: pointer;
            padding: 8px;
            margin-right: 16px;
        }
        .mobile-menu-toggle svg {
            width: 24px;
            height: 24px;
        }
        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 1024px) {
            .dashboard {
                flex-direction: column;
            }
            .sidebar {
                width: 280px;
                position: fixed;
                top: 0;
                left: -280px;
                height: 100vh;
                z-index: 1000;
            }
            .sidebar.active {
                left: 0;
            }
            .content {
                margin-left: 0;
            }
            .content.active {
                margin-left: 280px;
            }
            .mobile-menu-toggle {
                display: block;
            }
            .sidebar-header {
                margin-bottom: 24px;
            }
            .sidebar h2 {
                font-size: 1.25rem;
            }
            .sidebar-subtitle {
                font-size: 0.8rem;
            }
            .nav-menu {
                flex-direction: column;
                gap: 0;
            }
            .nav-item {
                margin-bottom: 0;
            }
            .logout-section {
                margin-top: 24px;
            }
            .page-title {
                font-size: 1.75rem;
            }
            .page-subtitle {
                font-size: 1rem;
            }
        }
        @media (max-width: 768px) {
            .content {
                padding: 20px;
            }
            .card-body {
                padding: 20px;
            }
            .card-header {
                padding: 20px;
            }
            .profile-content {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
            .profile-avatar {
                width: 64px;
                height: 64px;
                font-size: 1.5rem;
            }
            .profile-stats {
                justify-content: center;
            }
            .qa-meta {
                flex-direction: column;
                align-items: stretch;
            }
            .qa-actions {
                justify-content: stretch;
            }
            .qa-actions .btn {
                flex: 1;
                justify-content: center;
            }
            .sidebar {
                width: 260px;
            }
            #successMessage {
                right: 16px;
                left: 16px;
                width: auto;
                min-width: 0;
            }
        }
        @media (max-width: 640px) {
            .sidebar-header {
                margin-right: 16px;
            }
            .nav-menu {
                gap: 4px;
            }
            .nav-item {
                padding: 10px 12px;
                font-size: 14px;
            }
            .page-title {
                font-size: 1.5rem;
            }
            .profile-info h3 {
                font-size: 1.4rem;
            }
            .stat-number {
                font-size: 1.2rem;
            }
            .edit-form-actions {
                flex-direction: column;
            }
            .edit-form-actions .btn {
                width: 100%;
            }
        }
        /* ===== EXTRA SMALL SCREENS (ANDROID) ===== */
        @media (max-width: 480px) {
            .sidebar {
                width: 240px;
            }
            .sidebar h2 {
                font-size: 1.1rem;
            }
            .sidebar-subtitle {
                font-size: 0.75rem;
            }
            .nav-item {
                padding: 8px 12px;
                font-size: 13px;
            }
            .nav-icon {
                width: 18px;
                height: 18px;
            }
            .logout-item {
                padding: 8px 12px;
                font-size: 13px;
            }
            .content {
                padding: 16px;
            }
            .card-body {
                padding: 16px;
            }
            .card-header {
                padding: 16px;
            }
            .page-title {
                font-size: 1.3rem;
            }
            .page-subtitle {
                font-size: 0.9rem;
            }
            .profile-info h3 {
                font-size: 1.3rem;
            }
            .profile-avatar {
                width: 56px;
                height: 56px;
                font-size: 1.4rem;
            }
            .stat-number {
                font-size: 1.1rem;
            }
            .qa-item,
            .answer-item {
                padding: 16px;
            }
            .qa-meta {
                gap: 8px;
            }
            .qa-actions {
                gap: 6px;
            }
            .btn {
                padding: 6px 10px;
                font-size: 12px;
            }
            .btn-danger {
                padding: 6px 10px;
                font-size: 12px;
            }
            .mobile-menu-toggle {
                font-size: 1.3rem;
                padding: 6px;
            }
            .card-title {
                font-size: 1.1rem;
            }
            .qa-item h4,
            .answer-item h4 {
                font-size: 1rem;
            }
            .empty-title {
                font-size: 1.1rem;
            }
        }
        /* ===== MODAL DIALOGS (REPLACING ALERTS/CONFIRM) ===== */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 10000;
            justify-content: center;
            align-items: center;
            padding: 16px;
            animation: fadeInOverlay 0.3s ease-out;
        }
        @keyframes fadeInOverlay {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .modal-dialog {
            background: var(--card-bg);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            width: 100%;
            max-width: 500px;
            padding: 24px;
            animation: slideUp 0.3s ease-out;
            position: relative;
            overflow: hidden;
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border-light);
        }
        .modal-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-primary);
            margin: 0;
        }
        .modal-close {
            background: transparent;
            border: none;
            font-size: 1.5rem;
            color: var(--text-secondary);
            cursor: pointer;
            padding: 0;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: background-color 0.2s;
        }
        .modal-close:hover {
            background-color: var(--gray-100);
        }
        .modal-body {
            margin-bottom: 24px;
            color: var(--text-secondary);
            font-size: 1rem;
        }
        .modal-footer {
            display: flex;
            gap: 12px;
            justify-content: flex-end;
        }
        .modal-footer .btn {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Dashboard</h2>
                <div class="sidebar-subtitle">User Portal</div>
            </div>
            <nav class="nav-menu">
                <a href="#profile" class="nav-item active" onclick="showSection('profile')">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                    Profile
                </a>
                <a href="#questions" class="nav-item" onclick="showSection('questions')">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                        <line x1="12" x2="12.01" y1="17" y2="17"/>
                    </svg>
                    My Questions
                </a>
                <a href="#answers" class="nav-item" onclick="showSection('answers')">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        <path d="M13 8H7"/>
                        <path d="M17 12H7"/>
                    </svg>
                    My Answers
                </a>
            </nav>
            <div class="logout-section">
                <a href="../login/logout.php" class="logout-item">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                        <polyline points="16,17 21,12 16,7"/>
                        <line x1="21" x2="9" y1="12" y2="12"/>
                    </svg>
                    Logout
                </a>
            </div>
        </div>
        <div class="content">
            <div class="page-header">
                <button class="mobile-menu-toggle" onclick="toggleSidebar()">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                <h1 class="page-title">Welcome back, <?= explode(' ', $name)[0] ?>!</h1>
                <p class="page-subtitle">Manage your questions and answers</p>
            </div>
            <div id="profile-section" class="content-section">
                <div class="card profile-card">
                    <div class="card-body">
                        <div class="profile-content">
                            <div class="profile-avatar">
                                <?= strtoupper(substr($name, 0, 1)) ?>
                            </div>
                            <div class="profile-info">
                                <h3><?= $name ?></h3>
                                <p><?= $email ?></p>
                                <div class="profile-stats">
                                    <div class="stat-item">
                                        <span class="stat-number"><?= count($questions) ?></span>
                                        <span class="stat-label">Questions</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-number"><?= count($answers) ?></span>
                                        <span class="stat-label">Answers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="questions-section" class="content-section" style="display:none;">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                                <line x1="12" x2="12.01" y1="17" y2="17"/>
                            </svg>
                            Your Questions
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php if (count($questions) > 0): ?>
                            <?php foreach ($questions as $q): ?>
                                <div class="qa-item" id="question-<?= $q['id'] ?>">
                                    <div class="qa-display">
                                        <h4><?= htmlspecialchars($q['question_text']) ?></h4>
                                        <div class="qa-meta">
                                            <span class="qa-date">Asked on <?= date('M j, Y \a\t g:i A', strtotime($q['created_at'])) ?></span>
                                            <div class="qa-actions">
                                                <button class="btn btn-ghost" onclick="editQuestion(<?= $q['id'] ?>)">
                                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                                        <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4z"/>
                                                    </svg>
                                                    Edit
                                                </button>
                                                <button class="btn btn-danger" onclick="deleteQuestion(<?= $q['id'] ?>)">
                                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M3 6h18"/>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit-form-container" style="display:none;">
                                        <form onsubmit="submitEditForm(event, this)">
                                            <input type="hidden" name="id" value="<?= $q['id'] ?>">
                                            <input type="hidden" name="type" value="question">
                                            <textarea name="text" required><?= htmlspecialchars($q['question_text']) ?></textarea>
                                            <div class="edit-form-actions">
                                                <button type="button" class="btn btn-ghost" onclick="cancelEdit(<?= $q['id'] ?>, 'question')">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="empty-state">
                                <svg class="empty-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                                    <line x1="12" x2="12.01" y1="17" y2="17"/>
                                </svg>
                                <h3 class="empty-title">No questions yet</h3>
                                <p class="empty-text">Start by asking your first question to get the conversation going.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div id="answers-section" class="content-section" style="display:none;">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <svg class="card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                <path d="M13 8H7"/>
                                <path d="M17 12H7"/>
                            </svg>
                            Your Answers
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php if (count($answers) > 0): ?>
                            <?php foreach ($answers as $a): ?>
                                <div class="answer-item" id="answer-<?= $a['id'] ?>">
                                    <div class="qa-display">
                                        <h4>Question: <?= htmlspecialchars($a['question_text']) ?></h4>
                                        <p><?= htmlspecialchars($a['answer_text']) ?></p>
                                        <div class="qa-meta">
                                            <span class="qa-date">Answered on <?= date('M j, Y \a\t g:i A', strtotime($a['created_at'])) ?></span>
                                            <div class="qa-actions">
                                                <button class="btn btn-ghost" onclick="editAnswer(<?= $a['id'] ?>)">
                                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                                        <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4z"/>
                                                    </svg>
                                                    Edit
                                                </button>
                                                <button class="btn btn-danger" onclick="deleteAnswer(<?= $a['id'] ?>)">
                                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                        <path d="M3 6h18"/>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                                                    </svg>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit-form-container" style="display:none;">
                                        <form onsubmit="submitEditForm(event, this)">
                                            <input type="hidden" name="id" value="<?= $a['id'] ?>">
                                            <input type="hidden" name="type" value="answer">
                                            <textarea name="text" required><?= htmlspecialchars($a['answer_text']) ?></textarea>
                                            <div class="edit-form-actions">
                                                <button type="button" class="btn btn-ghost" onclick="cancelEdit(<?= $a['id'] ?>, 'answer')">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="empty-state">
                                <svg class="empty-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                    <path d="M13 8H7"/>
                                    <path d="M17 12H7"/>
                                </svg>
                                <h3 class="empty-title">No answers yet</h3>
                                <p class="empty-text">Help others by answering their questions and sharing your knowledge.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="successMessage"></div>

    <!-- Confirmation Modal for Question Deletion -->
    <div id="confirmDeleteQuestionModal" class="modal-overlay">
        <div class="modal-dialog">
            <div class="modal-header">
                <h2 class="modal-title">Delete Question</h2>
                <button class="modal-close" onclick="closeModal('confirmDeleteQuestionModal')">&times;</button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this question? This will also delete all associated answers.
            </div>
            <div class="modal-footer">
                <button class="btn btn-ghost" onclick="closeModal('confirmDeleteQuestionModal')">Cancel</button>
                <button class="btn btn-danger" onclick="confirmDeleteQuestion()">Delete</button>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal for Answer Deletion -->
    <div id="confirmDeleteAnswerModal" class="modal-overlay">
        <div class="modal-dialog">
            <div class="modal-header">
                <h2 class="modal-title">Delete Answer</h2>
                <button class="modal-close" onclick="closeModal('confirmDeleteAnswerModal')">&times;</button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this answer?
            </div>
            <div class="modal-footer">
                <button class="btn btn-ghost" onclick="closeModal('confirmDeleteAnswerModal')">Cancel</button>
                <button class="btn btn-danger" onclick="confirmDeleteAnswer()">Delete</button>
            </div>
        </div>
    </div>

    <script>
        let currentlyEditing = null;
        let currentDeleteId = null;
        let currentDeleteType = null;
        let sidebarOpen = false;

        // Toggle sidebar for mobile
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');
            sidebarOpen = !sidebarOpen;
            
            if (sidebarOpen) {
                sidebar.classList.add('active');
                content.classList.add('active');
            } else {
                sidebar.classList.remove('active');
                content.classList.remove('active');
            }
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');
            const mobileToggle = document.querySelector('.mobile-menu-toggle');
            
            if (sidebarOpen && 
                !sidebar.contains(event.target) && 
                !mobileToggle.contains(event.target)) {
                sidebar.classList.remove('active');
                content.classList.remove('active');
                sidebarOpen = false;
            }
        });

        // Show success message
        function showSuccess(message) {
            const msg = document.getElementById('successMessage');
            msg.textContent = message;
            msg.style.display = 'block';
            msg.style.opacity = '1';
            setTimeout(() => {
                msg.style.opacity = '0';
                setTimeout(() => {
                    msg.style.display = 'none';
                    msg.style.opacity = '1';
                }, 300);
            }, 3000);
        }

        // Section navigation
        function showSection(sectionName) {
            // Hide all sections
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => {
                section.style.display = 'none';
            });
            // Remove active class from all nav items
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => {
                item.classList.remove('active');
            });
            // Show selected section
            document.getElementById(sectionName + '-section').style.display = 'block';
            // Add active class to clicked nav item
            event.target.classList.add('active');
            
            // Close sidebar on mobile after selection
            if (sidebarOpen && window.innerWidth <= 1024) {
                const sidebar = document.querySelector('.sidebar');
                const content = document.querySelector('.content');
                sidebar.classList.remove('active');
                content.classList.remove('active');
                sidebarOpen = false;
            }
        }

        // Inline editing functions
        function editQuestion(id) {
            cancelCurrentEdit();
            const item = document.getElementById(`question-${id}`);
            item.querySelector('.qa-display').style.display = 'none';
            item.querySelector('.edit-form-container').style.display = 'block';
            currentlyEditing = { id, type: 'question' };
        }
        function editAnswer(id) {
            cancelCurrentEdit();
            const item = document.getElementById(`answer-${id}`);
            item.querySelector('.qa-display').style.display = 'none';
            item.querySelector('.edit-form-container').style.display = 'block';
            currentlyEditing = { id, type: 'answer' };
        }
        function cancelEdit(id, type) {
            const item = document.getElementById(`${type}-${id}`);
            item.querySelector('.qa-display').style.display = 'block';
            item.querySelector('.edit-form-container').style.display = 'none';
            currentlyEditing = null;
        }
        function cancelCurrentEdit() {
            if (currentlyEditing) {
                const item = document.getElementById(`${currentlyEditing.type}-${currentlyEditing.id}`);
                item.querySelector('.qa-display').style.display = 'block';
                item.querySelector('.edit-form-container').style.display = 'none';
                currentlyEditing = null;
            }
        }

        async function submitEditForm(event, form) {
            event.preventDefault();
            const formData = new FormData(form);
            const id = formData.get('id');
            const type = formData.get('type');
            const text = formData.get('text').trim();
            if (!text) {
                showSuccess(`${type} cannot be empty!`);
                return;
            }
            const apiEndpoint = type === 'question' ? './api/edit-question.php' : './api/edit-answer.php';
            const body = type === 'question' ? { id, question_text: text } : { id, answer_text: text };
            try {
                const response = await fetch(apiEndpoint, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(body)
                });
                const data = await response.json();
                if (data.success) {
                    showSuccess(`${type} updated successfully!`);
                    setTimeout(() => location.reload(), 1500);
                } else {
                    showSuccess(`Error updating ${type}: ` + (data.error || "Unknown error"));
                }
            } catch (error) {
                console.error('Error:', error);
                showSuccess("Network error. Please try again.");
            }
        }

        // Delete functions - Replaced confirm with modals
        function deleteQuestion(id) {
            currentDeleteId = id;
            currentDeleteType = 'question';
            document.getElementById('confirmDeleteQuestionModal').style.display = 'flex';
        }
        function deleteAnswer(id) {
            currentDeleteId = id;
            currentDeleteType = 'answer';
            document.getElementById('confirmDeleteAnswerModal').style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        async function confirmDeleteQuestion() {
            closeModal('confirmDeleteQuestionModal');
            try {
                const response = await fetch('./api/delete-question.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id: currentDeleteId })
                });
                const data = await response.json();
                if (data.success) {
                    showSuccess("Question deleted successfully!");
                    setTimeout(() => location.reload(), 1500);
                } else {
                    showSuccess("Error deleting question: " + (data.error || "Unknown error"));
                }
            } catch (error) {
                console.error('Error:', error);
                showSuccess("Network error. Please try again.");
            }
        }

        async function confirmDeleteAnswer() {
            closeModal('confirmDeleteAnswerModal');
            try {
                const response = await fetch('./api/delete-answer.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id: currentDeleteId })
                });
                const data = await response.json();
                if (data.success) {
                    showSuccess("Answer deleted successfully!");
                    setTimeout(() => location.reload(), 1500);
                } else {
                    showSuccess("Error deleting answer: " + (data.error || "Unknown error"));
                }
            } catch (error) {
                console.error('Error:', error);
                showSuccess("Network error. Please try again.");
            }
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            showSection('profile');
        });

        // Close modal if clicked outside content
        document.addEventListener('click', function(event) {
            const modals = document.querySelectorAll('.modal-overlay');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>