<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - BUMDes Gemah Ripah</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0f172a;
            --secondary: #1e293b;
            --accent: #10b981;
            --accent-light: #34d399;
            --danger: #ef4444;
            --warning: #f59e0b;
            --info: #3b82f6;
            --sidebar-width: 260px;
            --header-height: 70px;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
            --text-primary: #f8fafc;
            --text-secondary: #cbd5e1;
            --card-bg: rgba(30, 41, 59, 0.7);
            --hover-bg: rgba(255, 255, 255, 0.08);
            --primary-gradient: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            --accent-gradient: linear-gradient(135deg, #10b981, #3b82f6, #8b5cf6);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--primary-gradient);
            color: var(--text-primary);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Premium Background Effects */
        .premium-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .premium-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(16, 185, 129, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(59, 130, 246, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);
            animation: float 8s ease-in-out infinite;
        }

        .floating-particles {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float-particle 15s infinite linear;
        }

        /* Layout */
        .dashboard-container {
            display: flex;
            min-height: 100vh;
            position: relative;
            z-index: 1;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border-right: 1px solid var(--glass-border);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: all 0.3s ease;
            z-index: 1000;
            padding: 0 0 2rem 0;
        }

        .sidebar-header {
            padding: 1.5rem 1.5rem 1rem;
            border-bottom: 1px solid var(--glass-border);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: var(--accent-gradient);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            position: relative;
            overflow: hidden;
        }

        .logo-img {
            width: 24px;
            height: 24px;
            object-fit: contain;
            position: relative;
            z-index: 1;
        }

        .logo-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .logo:hover .logo-icon::before {
            left: 100%;
        }

        .logo-text {
            font-size: 1.25rem;
            font-weight: 700;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .sidebar-menu {
            padding: 1.5rem 0;
        }

        .menu-section {
            margin-bottom: 1.5rem;
        }

        .section-title {
            padding: 0 1.5rem 0.75rem;
            font-size: 0.75rem;
            text-transform: uppercase;
            color: var(--text-secondary);
            letter-spacing: 1px;
        }

        .menu-items {
            list-style: none;
        }

        .menu-item {
            margin-bottom: 0.25rem;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0.75rem 1.5rem;
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .menu-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }

        .menu-link:hover::before,
        .menu-link.active::before {
            left: 100%;
        }

        .menu-link:hover, .menu-link.active {
            background: var(--hover-bg);
            color: var(--text-primary);
            border-left-color: var(--accent);
        }

        .menu-link i {
            width: 20px;
            text-align: center;
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .menu-link:hover i {
            transform: scale(1.1);
        }

        .menu-badge {
            margin-left: auto;
            background: var(--accent);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 600;
            animation: pulse 2s infinite;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            min-height: 100vh;
        }

        /* Header */
        .header {
            height: var(--header-height);
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        /* Quick Navigation Styles */
        .quick-nav {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .quick-nav-card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            padding: 1.5rem;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: var(--text-primary);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .quick-nav-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--accent-gradient);
        }

        .quick-nav-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), transparent);
            transition: left 0.5s;
        }

        .quick-nav-card:hover::after {
            left: 100%;
        }

        .quick-nav-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            border-color: var(--accent);
        }

        .quick-nav-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(16, 185, 129, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            color: var(--accent);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .quick-nav-card:hover .quick-nav-icon {
            transform: scale(1.1);
            background: rgba(16, 185, 129, 0.2);
        }

        .quick-nav-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .quick-nav-desc {
            font-size: 0.875rem;
            color: var(--text-secondary);
        }

        /* Improved Stats Grid Layout */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            padding: 1.5rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--accent-gradient);
        }

        .stat-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.03), transparent);
            transition: left 0.5s;
        }

        .stat-card:hover::after {
            left: 100%;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .stat-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(16, 185, 129, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent);
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.1);
            background: rgba(16, 185, 129, 0.2);
        }

        .stat-info {
            flex: 1;
        }

        .stat-title {
            color: var(--text-secondary);
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
        }

        .stat-change {
            font-size: 0.75rem;
            color: var(--accent);
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .stat-change.negative {
            color: var(--danger);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .quick-nav {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--text-primary);
            font-size: 1.25rem;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .menu-toggle:hover {
            transform: scale(1.1);
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 600;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 1.25rem;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 10px;
            transition: background 0.3s ease;
            position: relative;
        }

        .user-menu:hover {
            background: var(--hover-bg);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--accent-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 1.1rem;
            position: relative;
            overflow: hidden;
        }

        .user-avatar i {
            font-size: 1.1rem;
            color: #fff;
            position: relative;
            z-index: 1;
        }

        .user-avatar::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .user-menu:hover .user-avatar::before {
            left: 100%;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 600;
            font-size: 0.9rem;
        }

        .user-role {
            color: var(--text-secondary);
            font-size: 0.8rem;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background: var(--card-bg);
            border: 1px solid var(--glass-border);
            border-radius: 10px;
            padding: 0.5rem 0;
            min-width: 180px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            z-index: 1000;
            backdrop-filter: blur(20px);
        }

        .user-menu:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            color: var(--text-primary);
            text-decoration: none;
            transition: background 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .dropdown-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), transparent);
            transition: left 0.3s;
        }

        .dropdown-item:hover::before {
            left: 100%;
        }

        .dropdown-item:hover {
            background: var(--hover-bg);
        }

        .dropdown-item i {
            width: 20px;
            text-align: center;
            color: var(--text-secondary);
            transition: transform 0.3s ease;
        }

        .dropdown-item:hover i {
            transform: scale(1.1);
        }

        /* Content Area */
        .content {
            padding: 2rem;
        }

        /* Content Sections */
        .content-section {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            margin-bottom: 2rem;
            overflow: hidden;
            position: relative;
        }

        .content-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.02), transparent);
            transition: left 0.5s;
        }

        .content-section:hover::after {
            left: 100%;
        }

        .section-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .section-actions {
            display: flex;
            gap: 0.75rem;
        }

        .btn {
            padding: 0.75rem 1.25rem;
            border-radius: 10px;
            border: none;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: var(--accent);
            color: white;
        }

        .btn-primary:hover {
            background: var(--accent-light);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
        }

        .btn-secondary {
            background: var(--glass-bg);
            color: var(--text-primary);
            border: 1px solid var(--glass-border);
        }

        .btn-secondary:hover {
            background: var(--hover-bg);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--text-primary);
            border: 1px solid var(--glass-border);
        }

        .btn-outline:hover {
            background: var(--hover-bg);
            border-color: var(--accent);
            transform: translateY(-2px);
        }

        /* Tables */
        .table-container {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th,
        .data-table td {
            padding: 1rem 1.5rem;
            text-align: left;
            border-bottom: 1px solid var(--glass-border);
        }

        .data-table th {
            background: rgba(255, 255, 255, 0.05);
            font-weight: 600;
            color: var(--text-secondary);
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .data-table tr {
            transition: background 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .data-table tr::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.03), transparent);
            transition: left 0.5s;
        }

        .data-table tr:hover::after {
            left: 100%;
        }

        .data-table tr:hover {
            background: var(--hover-bg);
        }

        .status-badge {
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .status-badge:hover {
            transform: scale(1.05);
        }

        .status-active {
            background: rgba(16, 185, 129, 0.2);
            color: var(--accent);
        }

        .status-inactive {
            background: rgba(239, 68, 68, 0.2);
            color: var(--danger);
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .btn-icon {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--glass-bg);
            color: var(--text-primary);
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.3s;
        }

        .btn-icon:hover::before {
            left: 100%;
        }

        .btn-icon:hover {
            background: var(--hover-bg);
            transform: scale(1.05);
        }

        .btn-edit:hover {
            background: var(--info);
            color: white;
        }

        .btn-delete:hover {
            background: var(--danger);
            color: white;
        }

        /* Modal - PERBAIKAN UTAMA */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            padding: 20px;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal {
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            width: 90%;
            max-width: 600px;
            max-height: 90vh;
            overflow: hidden;
            transform: translateY(20px);
            transition: transform 0.3s ease;
            border: 1px solid var(--glass-border);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .modal::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--accent-gradient);
        }

        .modal-overlay.active .modal {
            transform: translateY(0);
        }

        .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-shrink: 0;
        }

        .modal-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .modal-close {
            background: none;
            border: none;
            color: var(--text-secondary);
            font-size: 1.25rem;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-close:hover {
            color: var(--text-primary);
            background: var(--hover-bg);
            transform: scale(1.1);
        }

        .modal-body {
            padding: 1.5rem;
            overflow-y: auto;
            flex: 1;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-primary);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            border-radius: 8px;
            color: var(--text-primary);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
            transform: translateY(-2px);
        }

        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23cbd5e1'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
            color: var(--text-primary);
        }

        /* PERBAIKAN: Dropdown yang terlihat jelas */
        .form-select option {
            background-color: var(--card-bg);
            color: var(--text-primary);
            padding: 10px;
        }

        .modal-footer {
            padding: 1.5rem;
            border-top: 1px solid var(--glass-border);
            display: flex;
            justify-content: flex-end;
            gap: 0.75rem;
            flex-shrink: 0;
        }

        /* Image Preview */
        .image-preview-container {
            display: flex;
            gap: 1rem;
            margin-top: 0.75rem;
            flex-wrap: wrap;
        }

        .image-preview {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            border: 1px solid var(--glass-border);
            transition: all 0.3s ease;
        }

        .image-preview:hover {
            transform: scale(1.05);
            border-color: var(--accent);
        }

        .image-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .remove-image {
            position: absolute;
            top: 5px;
            right: 5px;
            background: rgba(239, 68, 68, 0.9);
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: none;
            font-size: 0.8rem;
            transition: all 0.3s ease;
        }

        .remove-image:hover {
            background: var(--danger);
            transform: scale(1.1);
        }

        /* Empty State */
        .empty-state {
            padding: 3rem 2rem;
            text-align: center;
            color: var(--text-secondary);
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
            animation: float 3s ease-in-out infinite;
        }

        .empty-state p {
            font-size: 1rem;
        }

        /* Page Navigation */
        .page-navigation {
            display: none;
        }

        .page {
            display: none;
        }

        .page.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(1deg); }
        }

        @keyframes float-particle {
            0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.05); opacity: 0.8; }
            100% { transform: scale(1); opacity: 1; }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .menu-toggle {
                display: block;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 0 1rem;
            }

            .content {
                padding: 1rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .section-header {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }

            .section-actions {
                width: 100%;
                justify-content: space-between;
            }

            .user-info {
                display: none;
            }

            .modal {
                width: 95%;
                max-height: 85vh;
            }

            .modal-body {
                padding: 1rem;
            }

            .modal-footer {
                padding: 1rem;
                flex-direction: column;
            }

            .modal-footer .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Premium Background -->
    <div class="premium-bg"></div>
    <div class="floating-particles" id="particles-container"></div>

    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <div class="logo-icon">
                        <img src="{{ asset('images/LogoBumdes.png') }}" alt="Logo BUMDes" class="logo-img">
                    </div>
                    <span class="logo-text">BUMDes Admin</span>
                </div>
            </div>

            <nav class="sidebar-menu">
                <div class="menu-section">
                    <div class="section-title">Menu Utama</div>
                    <ul class="menu-items">
                        <li class="menu-item">
                            <a href="#" class="menu-link active" data-page="dashboard">
                                <i class="fas fa-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link" data-page="units">
                                <i class="fas fa-store"></i>
                                <span>Unit Usaha</span>
                                <span class="menu-badge" id="unit-count">0</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link" data-page="documentations">
                                <i class="fas fa-images"></i>
                                <span>Dokumentasi</span>
                                <span class="menu-badge" id="documentation-count">0</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="menu-section">
                    <div class="section-title">Aksi Cepat</div>
                    <ul class="menu-items">
                        <li class="menu-item">
                            <a href="#" class="menu-link" id="view-website">
                                <i class="fas fa-external-link-alt"></i>
                                <span>Lihat Website</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <div class="header-left">
                    <button class="menu-toggle" id="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="page-title" id="page-title">Dashboard</h1>
                </div>

                <div class="header-right">
                    <div class="user-menu">
                        <div class="user-avatar"><i class="fas fa-user-shield"></i></div>
                        <div class="user-info">
                            <div class="user-name">Admin BUMDes</div>
                            <div class="user-role">Administrator</div>
                        </div>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item" id="logout-btn">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Keluar</span>
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <div class="content">
               <!-- Dashboard Page -->
<div class="page active" id="dashboard-page">
    <!-- Quick Navigation -->
    <div class="quick-nav">
        <a href="#" class="quick-nav-card" data-page="units">
            <div class="quick-nav-icon">
                <i class="fas fa-store"></i>
            </div>
            <div class="quick-nav-title">Kelola Unit Usaha</div>
            <div class="quick-nav-desc">Tambah, edit, atau hapus unit usaha BUMDes</div>
        </a>

        <a href="#" class="quick-nav-card" data-page="documentations">
            <div class="quick-nav-icon">
                <i class="fas fa-images"></i>
            </div>
            <div class="quick-nav-title">Kelola Dokumentasi</div>
            <div class="quick-nav-desc">Kelola dokumentasi kegiatan dan progress usaha</div>
        </a>

        <a href="#" class="quick-nav-card" id="view-website-quick">
            <div class="quick-nav-icon">
                <i class="fas fa-external-link-alt"></i>
            </div>
            <div class="quick-nav-title">Lihat Website</div>
            <div class="quick-nav-desc">Pratinjau website BUMDes untuk pengunjung</div>
        </a>
    </div>

    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-info">
                    <div class="stat-title">Total Unit Usaha</div>
                    <div class="stat-value" id="total-units">0</div>
                    <div class="stat-change">
                        <i class="fas fa-store"></i>
                        <span>Semua unit aktif</span>
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-store"></i>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-info">
                    <div class="stat-title">Total Dokumentasi</div>
                    <div class="stat-value" id="total-documentations">0</div>
                    <div class="stat-change">
                        <i class="fas fa-images"></i>
                        <span>Semua dokumentasi aktif</span>
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-images"></i>
                </div>
            </div>
        </div>
    </div>
</div>

                <!-- Units Page -->
                <div class="page" id="units-page">
                    <div class="content-section">
                        <div class="section-header">
                            <h2 class="section-title">Manajemen Unit Usaha</h2>
                            <div class="section-actions">
                                <button class="btn btn-primary" id="add-unit-btn">
                                    <i class="fas fa-plus"></i> Tambah Unit
                                </button>
                            </div>
                        </div>

                        <div class="table-container">
                            <table class="data-table" id="unit-table">
                                <thead>
                                    <tr>
                                        <th>Nama Unit</th>
                                        <th>Jenis Usaha</th>
                                        <th>Penanggung Jawab</th>
                                        <th>Nomor HP</th>
                                        <th>Harga</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="unit-table-body">
                                    <!-- Data akan diisi oleh JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Documentations Page -->
                <div class="page" id="documentations-page">
                    <div class="content-section">
                        <div class="section-header">
                            <h2 class="section-title">Manajemen Dokumentasi</h2>
                            <div class="section-actions">
                                <button class="btn btn-primary" id="add-documentation-btn">
                                    <i class="fas fa-plus"></i> Tambah Dokumentasi
                                </button>
                            </div>
                        </div>

                        <div class="table-container">
                            <table class="data-table" id="documentation-table">
                                <thead>
                                    <tr>
                                        <th>Judul Dokumentasi</th>
                                        <th>Jenis Usaha</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="documentation-table-body">
                                    <!-- Data akan diisi oleh JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal Tambah Unit Usaha -->
    <div class="modal-overlay" id="unit-modal">
        <div class="modal">
            <div class="modal-header">
                <h3 class="modal-title" id="unit-modal-title">Tambah Unit Usaha Baru</h3>
                <button class="modal-close" id="close-unit-modal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="unit-form">
                    <input type="hidden" id="unit-id">
                    <div class="form-group">
                        <label class="form-label">Nama Unit Usaha</label>
                        <input type="text" class="form-control" id="unit-name" placeholder="Masukkan nama unit usaha" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jenis Usaha</label>
                        <select class="form-control form-select" id="unit-type" required>
                            <option value="">Pilih jenis usaha</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Pariwisata">Pariwisata</option>
                            <option value="Pertanian">Pertanian</option>
                            <option value="Perdagangan">Perdagangan</option>
                            <option value="Jasa">Jasa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="unit-description" rows="3" placeholder="Masukkan deskripsi unit usaha" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama Penanggung Jawab</label>
                        <input type="text" class="form-control" id="unit-responsible" placeholder="Masukkan nama penanggung jawab" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nomor Telepon Penanggung Jawab</label>
                        <input type="tel" class="form-control" id="unit-phone" placeholder="Masukkan nomor telepon (contoh: 081234567890)" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control" id="unit-price" placeholder="Masukkan harga (contoh: Rp 150.000/bulan)" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gambar Usaha</label>
                        <input type="file" class="form-control" id="unit-image" accept="image/*">
                        <div class="image-preview-container" id="unit-image-preview"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gambar Penanggung Jawab</label>
                        <input type="file" class="form-control" id="unit-responsible-image" accept="image/*">
                        <div class="image-preview-container" id="unit-responsible-image-preview"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="form-control form-select" id="unit-status" required>
                            <option value="active">Aktif</option>
                            <option value="inactive">Nonaktif</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" id="cancel-unit-modal">Batal</button>
                <button class="btn btn-primary" id="save-unit-btn">
                    <i class="fas fa-save"></i> Simpan Unit
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Dokumentasi -->
    <div class="modal-overlay" id="documentation-modal">
        <div class="modal">
            <div class="modal-header">
                <h3 class="modal-title" id="documentation-modal-title">Tambah Dokumentasi Baru</h3>
                <button class="modal-close" id="close-documentation-modal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="documentation-form">
                    <input type="hidden" id="documentation-id">
                    <div class="form-group">
                        <label class="form-label">Judul Dokumentasi</label>
                        <input type="text" class="form-control" id="documentation-title" placeholder="Masukkan judul dokumentasi" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="documentation-description" rows="3" placeholder="Masukkan deskripsi dokumentasi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jenis Usaha</label>
                        <select class="form-control form-select" id="documentation-type" required>
                            <option value="">Pilih jenis usaha</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Pariwisata">Pariwisata</option>
                            <option value="Pertanian">Pertanian</option>
                            <option value="Perdagangan">Perdagangan</option>
                            <option value="Jasa">Jasa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tanggal Dokumentasi</label>
                        <input type="date" class="form-control" id="documentation-date" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gambar Dokumentasi</label>
                        <input type="file" class="form-control" id="documentation-image" accept="image/*" multiple>
                        <div class="image-preview-container" id="documentation-image-preview"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="form-control form-select" id="documentation-status" required>
                            <option value="active">Aktif</option>
                            <option value="inactive">Nonaktif</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" id="cancel-documentation-modal">Batal</button>
                <button class="btn btn-primary" id="save-documentation-btn">
                    <i class="fas fa-save"></i> Simpan Dokumentasi
                </button>
            </div>
        </div>
    </div>

    <script>
        // Data storage (simulasi database)
        let units = JSON.parse(localStorage.getItem('bumdes_units')) || [];
        let documentations = JSON.parse(localStorage.getItem('bumdes_documentations')) || [];
        let currentEditId = null;

        // DOM Elements
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.querySelector('.sidebar');
        const pageTitle = document.getElementById('page-title');
        const logoutBtn = document.getElementById('logout-btn');

        // Pages
        const pages = {
            dashboard: document.getElementById('dashboard-page'),
            units: document.getElementById('units-page'),
            documentations: document.getElementById('documentations-page')
        };

        // Table Bodies
        const unitTableBody = document.getElementById('unit-table-body');
        const documentationTableBody = document.getElementById('documentation-table-body');

        // Stats Elements
        const totalUnitsElement = document.getElementById('total-units');
        const totalDocumentationsElement = document.getElementById('total-documentations');
        const unitCountElement = document.getElementById('unit-count');
        const documentationCountElement = document.getElementById('documentation-count');

        // Modal Elements
        const unitModal = document.getElementById('unit-modal');
        const documentationModal = document.getElementById('documentation-modal');
        const addUnitBtn = document.getElementById('add-unit-btn');
        const addDocumentationBtn = document.getElementById('add-documentation-btn');
        const closeUnitModal = document.getElementById('close-unit-modal');
        const closeDocumentationModal = document.getElementById('close-documentation-modal');
        const cancelUnitModal = document.getElementById('cancel-unit-modal');
        const cancelDocumentationModal = document.getElementById('cancel-documentation-modal');
        const saveUnitBtn = document.getElementById('save-unit-btn');
        const saveDocumentationBtn = document.getElementById('save-documentation-btn');

        // Form Elements
        const unitForm = document.getElementById('unit-form');
        const documentationForm = document.getElementById('documentation-form');

        // Quick Actions
        const viewWebsite = document.getElementById('view-website');
        const viewWebsiteQuick = document.getElementById('view-website-quick');

        // Create floating particles
        function createParticles() {
            const container = document.getElementById('particles-container');
            const particleCount = 15;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');

                // Random properties
                const size = Math.random() * 6 + 2;
                const left = Math.random() * 100;
                const animationDuration = Math.random() * 20 + 10;
                const animationDelay = Math.random() * 5;
                const opacity = Math.random() * 0.3 + 0.1;

                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${left}%`;
                particle.style.animationDuration = `${animationDuration}s`;
                particle.style.animationDelay = `${animationDelay}s`;
                particle.style.opacity = opacity;

                container.appendChild(particle);
            }
        }

        // Initialize the dashboard
        function initDashboard() {
            // Create particles
            createParticles();

            // Add sample data if empty
            if (units.length === 0) {
                units = [
                    {
                        id: 'unit_1',
                        name: 'Internet Desa',
                        type: 'Teknologi',
                        description: 'Layanan internet berkecepatan tinggi untuk masyarakat desa',
                        responsible: 'Budi Santoso',
                        phone: '081234567890',
                        price: 'Rp 150.000/bulan',
                        status: 'active',
                        image: 'https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60',
                        responsibleImage: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60',
                        createdAt: new Date().toISOString(),
                        updatedAt: new Date().toISOString()
                    },
                    {
                        id: 'unit_2',
                        name: 'Wisata Pemancingan',
                        type: 'Pariwisata',
                        description: 'Destinasi wisata alam dengan fasilitas pemancingan',
                        responsible: 'Rudi Hermawan',
                        phone: '081298765432',
                        price: 'Rp 25.000/orang',
                        status: 'active',
                        image: 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60',
                        responsibleImage: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60',
                        createdAt: new Date(Date.now() - 86400000).toISOString(),
                        updatedAt: new Date(Date.now() - 86400000).toISOString()
                    }
                ];
                localStorage.setItem('bumdes_units', JSON.stringify(units));
            }

            if (documentations.length === 0) {
                documentations = [
                    {
                        id: 'doc_1',
                        title: 'Pemasangan Tower Internet',
                        description: 'Proses pemasangan tower internet untuk menjangkau seluruh wilayah desa',
                        type: 'Teknologi',
                        date: '2025-01-15',
                        status: 'active',
                        images: [
                            'https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=60'
                        ],
                        createdAt: new Date().toISOString(),
                        updatedAt: new Date().toISOString()
                    }
                ];
                localStorage.setItem('bumdes_documentations', JSON.stringify(documentations));
            }

            updateStats();
            renderUnitTable();
            renderDocumentationTable();

            // Event Listeners
            menuToggle.addEventListener('click', toggleSidebar);

            // Navigation
            document.querySelectorAll('.menu-link[data-page]').forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const page = e.target.closest('.menu-link').getAttribute('data-page');
                    navigateToPage(page);
                });
            });

            // Quick Navigation
            document.querySelectorAll('.quick-nav-card[data-page]').forEach(card => {
                card.addEventListener('click', (e) => {
                    e.preventDefault();
                    const page = card.getAttribute('data-page');
                    navigateToPage(page);
                });
            });

            // Quick Actions
            viewWebsite.addEventListener('click', (e) => {
                e.preventDefault();
                window.open('index.html', '_blank');
            });

            viewWebsiteQuick.addEventListener('click', (e) => {
                e.preventDefault();
                window.open('index.html', '_blank');
            });

            // Modal Actions
            addUnitBtn.addEventListener('click', () => openModal('unit', 'add'));
            addDocumentationBtn.addEventListener('click', () => openModal('documentation', 'add'));
            closeUnitModal.addEventListener('click', () => closeModal('unit'));
            closeDocumentationModal.addEventListener('click', () => closeModal('documentation'));
            cancelUnitModal.addEventListener('click', () => closeModal('unit'));
            cancelDocumentationModal.addEventListener('click', () => closeModal('documentation'));
            saveUnitBtn.addEventListener('click', saveUnit);
            saveDocumentationBtn.addEventListener('click', saveDocumentation);

            // Image preview handlers
            document.getElementById('unit-image').addEventListener('change', handleImagePreview);
            document.getElementById('unit-responsible-image').addEventListener('change', handleImagePreview);
            document.getElementById('documentation-image').addEventListener('change', handleDocumentationImagePreview);

            // Logout
            logoutBtn.addEventListener('click', (e) => {
                e.preventDefault();
                if (confirm('Apakah Anda yakin ingin keluar?')) {
                    showNotification('Anda telah berhasil keluar', 'success');
                    setTimeout(() => {
                        // Redirect to login page in a real application
                        window.location.href = 'login';
                    }, 1500);
                }
            });

            // Console welcome message
            console.log('%c🌾 BUMDes Dashboard Premium', 'color: #10b981; font-size: 16px; font-weight: bold;');
            console.log('%cSistem administrasi dengan animasi premium!', 'color: #64748b; font-size: 12px;');
        }

        // Navigate to page
        function navigateToPage(page) {
            // Update active menu
            document.querySelectorAll('.menu-link').forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`.menu-link[data-page="${page}"]`).classList.add('active');

            // Update page title
            const titles = {
                dashboard: 'Dashboard',
                units: 'Unit Usaha',
                documentations: 'Dokumentasi'
            };
            pageTitle.textContent = titles[page];

            // Show/hide pages
            Object.values(pages).forEach(p => p.classList.remove('active'));
            pages[page].classList.add('active');

            // Close sidebar on mobile
            if (window.innerWidth <= 1024) {
                sidebar.classList.remove('active');
            }
        }

        // Toggle sidebar on mobile
        function toggleSidebar() {
            sidebar.classList.toggle('active');
        }

        // Update statistics
        function updateStats() {
            totalUnitsElement.textContent = units.length;
            totalDocumentationsElement.textContent = documentations.length;
            unitCountElement.textContent = units.length;
            documentationCountElement.textContent = documentations.length;
        }

        // Render unit table
        function renderUnitTable() {
            unitTableBody.innerHTML = '';

            if (units.length === 0) {
                unitTableBody.innerHTML = `
                    <tr>
                        <td colspan="7" class="empty-state">
                            <i class="fas fa-store"></i>
                            <p>Belum ada unit usaha. Klik "Tambah Unit" untuk menambahkan.</p>
                        </td>
                    </tr>
                `;
                return;
            }

            units.forEach(unit => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            ${unit.image ? `<img src="${unit.image}" alt="${unit.name}" style="width: 40px; height: 40px; border-radius: 8px; object-fit: cover;">` : '<div style="width: 40px; height: 40px; border-radius: 8px; background: var(--glass-bg); display: flex; align-items: center; justify-content: center;"><i class="fas fa-store"></i></div>'}
                            <div>
                                <div style="font-weight: 600;">${unit.name}</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">${unit.type}</div>
                            </div>
                        </div>
                    </td>
                    <td>${unit.type}</td>
                    <td>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            ${unit.responsibleImage ? `<img src="${unit.responsibleImage}" alt="${unit.responsible}" style="width: 32px; height: 32px; border-radius: 50%; object-fit: cover;">` : '<div style="width: 32px; height: 32px; border-radius: 50%; background: var(--glass-bg); display: flex; align-items: center; justify-content: center; font-size: 0.8rem;"><i class="fas fa-user"></i></div>'}
                            <span>${unit.responsible}</span>
                        </div>
                    </td>
                    <td>${unit.phone}</td>
                    <td>${unit.price}</td>
                    <td><span class="status-badge ${unit.status === 'active' ? 'status-active' : 'status-inactive'}">${unit.status === 'active' ? 'Aktif' : 'Nonaktif'}</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon btn-edit" onclick="editUnit('${unit.id}')">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn-icon btn-delete" onclick="deleteUnit('${unit.id}')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                `;
                unitTableBody.appendChild(row);
            });
        }

        // Render documentation table
        function renderDocumentationTable() {
            documentationTableBody.innerHTML = '';

            if (documentations.length === 0) {
                documentationTableBody.innerHTML = `
                    <tr>
                        <td colspan="5" class="empty-state">
                            <i class="fas fa-images"></i>
                            <p>Belum ada dokumentasi. Klik "Tambah Dokumentasi" untuk menambahkan.</p>
                        </td>
                    </tr>
                `;
                return;
            }

            documentations.forEach(doc => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            ${doc.images && doc.images.length > 0 ? `<img src="${doc.images[0]}" alt="${doc.title}" style="width: 40px; height: 40px; border-radius: 8px; object-fit: cover;">` : '<div style="width: 40px; height: 40px; border-radius: 8px; background: var(--glass-bg); display: flex; align-items: center; justify-content: center;"><i class="fas fa-image"></i></div>'}
                            <div>
                                <div style="font-weight: 600;">${doc.title}</div>
                                <div style="font-size: 0.875rem; color: var(--text-secondary);">${truncateText(doc.description, 50)}</div>
                            </div>
                        </div>
                    </td>
                    <td>${doc.type}</td>
                    <td>${formatDate(doc.date)}</td>
                    <td><span class="status-badge ${doc.status === 'active' ? 'status-active' : 'status-inactive'}">${doc.status === 'active' ? 'Aktif' : 'Nonaktif'}</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon btn-edit" onclick="editDocumentation('${doc.id}')">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn-icon btn-delete" onclick="deleteDocumentation('${doc.id}')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                `;
                documentationTableBody.appendChild(row);
            });
        }

        // Open modal for adding/editing
        function openModal(type, action, id = null) {
            currentEditId = id;

            if (type === 'unit') {
                const modalTitle = document.getElementById('unit-modal-title');

                if (action === 'add') {
                    modalTitle.textContent = 'Tambah Unit Usaha Baru';
                    resetUnitForm();
                } else if (action === 'edit') {
                    modalTitle.textContent = 'Edit Unit Usaha';
                    const unit = units.find(u => u.id === id);
                    if (unit) {
                        fillUnitForm(unit);
                    }
                }

                unitModal.classList.add('active');
                document.body.style.overflow = 'hidden'; // Prevent background scroll
            } else if (type === 'documentation') {
                const modalTitle = document.getElementById('documentation-modal-title');

                if (action === 'add') {
                    modalTitle.textContent = 'Tambah Dokumentasi Baru';
                    resetDocumentationForm();
                } else if (action === 'edit') {
                    modalTitle.textContent = 'Edit Dokumentasi';
                    const doc = documentations.find(d => d.id === id);
                    if (doc) {
                        fillDocumentationForm(doc);
                    }
                }

                documentationModal.classList.add('active');
                document.body.style.overflow = 'hidden'; // Prevent background scroll
            }
        }

        // Close modal
        function closeModal(type) {
            if (type === 'unit') {
                unitModal.classList.remove('active');
            } else if (type === 'documentation') {
                documentationModal.classList.remove('active');
            }
            currentEditId = null;
            document.body.style.overflow = ''; // Restore background scroll
        }

        // Reset unit form
        function resetUnitForm() {
            unitForm.reset();
            document.getElementById('unit-id').value = '';
            document.getElementById('unit-image-preview').innerHTML = '';
            document.getElementById('unit-responsible-image-preview').innerHTML = '';
        }

        // Reset documentation form
        function resetDocumentationForm() {
            documentationForm.reset();
            document.getElementById('documentation-id').value = '';
            document.getElementById('documentation-image-preview').innerHTML = '';
        }

        // Fill unit form for editing
        function fillUnitForm(unit) {
            document.getElementById('unit-id').value = unit.id;
            document.getElementById('unit-name').value = unit.name;
            document.getElementById('unit-type').value = unit.type;
            document.getElementById('unit-description').value = unit.description;
            document.getElementById('unit-responsible').value = unit.responsible;
            document.getElementById('unit-phone').value = unit.phone;
            document.getElementById('unit-price').value = unit.price;
            document.getElementById('unit-status').value = unit.status;

            // Set image previews if available
            if (unit.image) {
                document.getElementById('unit-image-preview').innerHTML = `
                    <div class="image-preview">
                        <img src="${unit.image}" alt="Preview">
                        <button type="button" class="remove-image" onclick="removeImagePreview(this, 'unit-image')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;
            }

            if (unit.responsibleImage) {
                document.getElementById('unit-responsible-image-preview').innerHTML = `
                    <div class="image-preview">
                        <img src="${unit.responsibleImage}" alt="Preview">
                        <button type="button" class="remove-image" onclick="removeImagePreview(this, 'unit-responsible-image')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;
            }
        }

        // Fill documentation form for editing
        function fillDocumentationForm(doc) {
            document.getElementById('documentation-id').value = doc.id;
            document.getElementById('documentation-title').value = doc.title;
            document.getElementById('documentation-description').value = doc.description;
            document.getElementById('documentation-type').value = doc.type;
            document.getElementById('documentation-date').value = doc.date;
            document.getElementById('documentation-status').value = doc.status;

            // Set image previews if available
            if (doc.images && doc.images.length > 0) {
                const previewContainer = document.getElementById('documentation-image-preview');
                previewContainer.innerHTML = '';
                doc.images.forEach((image, index) => {
                    previewContainer.innerHTML += `
                        <div class="image-preview">
                            <img src="${image}" alt="Preview ${index + 1}">
                            <button type="button" class="remove-image" onclick="removeDocumentationImagePreview(this, ${index})">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    `;
                });
            }
        }

        // Handle image preview for unit forms
        function handleImagePreview(event) {
            const file = event.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                const previewContainer = event.target.id === 'unit-image'
                    ? document.getElementById('unit-image-preview')
                    : document.getElementById('unit-responsible-image-preview');

                previewContainer.innerHTML = `
                    <div class="image-preview">
                        <img src="${e.target.result}" alt="Preview">
                        <button type="button" class="remove-image" onclick="removeImagePreview(this, '${event.target.id}')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;
            };
            reader.readAsDataURL(file);
        }

        // Handle image preview for documentation (multiple images)
        function handleDocumentationImagePreview(event) {
            const files = event.target.files;
            if (!files || files.length === 0) return;

            const previewContainer = document.getElementById('documentation-image-preview');

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewContainer.innerHTML += `
                        <div class="image-preview">
                            <img src="${e.target.result}" alt="Preview ${i + 1}">
                            <button type="button" class="remove-image" onclick="removeDocumentationImagePreview(this, ${i})">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    `;
                };
                reader.readAsDataURL(file);
            }
        }

        // Remove image preview for unit forms
        function removeImagePreview(button, inputId) {
            const previewContainer = button.closest('.image-preview-container');
            previewContainer.innerHTML = '';

            // Also clear the file input
            document.getElementById(inputId).value = '';
        }

        // Remove image preview for documentation
        function removeDocumentationImagePreview(button, index) {
            button.closest('.image-preview').remove();
            // In a real app, you would update the files array
        }

        // Save unit
        function saveUnit() {
            const id = document.getElementById('unit-id').value;
            const name = document.getElementById('unit-name').value;
            const type = document.getElementById('unit-type').value;
            const description = document.getElementById('unit-description').value;
            const responsible = document.getElementById('unit-responsible').value;
            const phone = document.getElementById('unit-phone').value;
            const price = document.getElementById('unit-price').value;
            const status = document.getElementById('unit-status').value;

            // Validation
            if (!name || !type || !description || !responsible || !phone || !price) {
                showNotification('Harap isi semua field yang diperlukan!', 'error');
                return;
            }

            // Get image data (in a real app, you would upload to server)
            const unitImage = document.getElementById('unit-image-preview').querySelector('img');
            const responsibleImage = document.getElementById('unit-responsible-image-preview').querySelector('img');

            const unitData = {
                id: id || generateId(),
                name,
                type,
                description,
                responsible,
                phone,
                price,
                status,
                image: unitImage ? unitImage.src : null,
                responsibleImage: responsibleImage ? responsibleImage.src : null,
                createdAt: id ? units.find(u => u.id === id).createdAt : new Date().toISOString(),
                updatedAt: new Date().toISOString()
            };

            if (id) {
                // Update existing unit
                const index = units.findIndex(u => u.id === id);
                if (index !== -1) {
                    units[index] = unitData;
                }
            } else {
                // Add new unit
                units.push(unitData);
            }

            // Save to localStorage (simulate database)
            localStorage.setItem('bumdes_units', JSON.stringify(units));

            // Update UI
            updateStats();
            renderUnitTable();
            closeModal('unit');

            // Show success message
            showNotification('Unit usaha berhasil disimpan!', 'success');
        }

        // Save documentation
        function saveDocumentation() {
            const id = document.getElementById('documentation-id').value;
            const title = document.getElementById('documentation-title').value;
            const description = document.getElementById('documentation-description').value;
            const type = document.getElementById('documentation-type').value;
            const date = document.getElementById('documentation-date').value;
            const status = document.getElementById('documentation-status').value;

            // Validation
            if (!title || !description || !type || !date) {
                showNotification('Harap isi semua field yang diperlukan!', 'error');
                return;
            }

            // Get image data (in a real app, you would upload to server)
            const previewContainer = document.getElementById('documentation-image-preview');
            const imageElements = previewContainer.querySelectorAll('img');
            const images = Array.from(imageElements).map(img => img.src);

            const docData = {
                id: id || generateId(),
                title,
                description,
                type,
                date,
                status,
                images: images,
                createdAt: id ? documentations.find(d => d.id === id).createdAt : new Date().toISOString(),
                updatedAt: new Date().toISOString()
            };

            if (id) {
                // Update existing documentation
                const index = documentations.findIndex(d => d.id === id);
                if (index !== -1) {
                    documentations[index] = docData;
                }
            } else {
                // Add new documentation
                documentations.push(docData);
            }

            // Save to localStorage (simulate database)
            localStorage.setItem('bumdes_documentations', JSON.stringify(documentations));

            // Update UI
            updateStats();
            renderDocumentationTable();
            closeModal('documentation');

            // Show success message
            showNotification('Dokumentasi berhasil disimpan!', 'success');
        }

        // Edit unit
        function editUnit(id) {
            openModal('unit', 'edit', id);
        }

        // Edit documentation
        function editDocumentation(id) {
            openModal('documentation', 'edit', id);
        }

        // Delete unit
        function deleteUnit(id) {
            if (confirm('Apakah Anda yakin ingin menghapus unit usaha ini?')) {
                units = units.filter(u => u.id !== id);
                localStorage.setItem('bumdes_units', JSON.stringify(units));
                updateStats();
                renderUnitTable();
                showNotification('Unit usaha berhasil dihapus!', 'success');
            }
        }

        // Delete documentation
        function deleteDocumentation(id) {
            if (confirm('Apakah Anda yakin ingin menghapus dokumentasi ini?')) {
                documentations = documentations.filter(d => d.id !== id);
                localStorage.setItem('bumdes_documentations', JSON.stringify(documentations));
                updateStats();
                renderDocumentationTable();
                showNotification('Dokumentasi berhasil dihapus!', 'success');
            }
        }

        // Utility functions
        function generateId() {
            return 'id_' + Math.random().toString(36).substr(2, 9);
        }

        function formatDate(dateString) {
            const options = { year: 'numeric', month: 'short', day: 'numeric' };
            return new Date(dateString).toLocaleDateString('id-ID', options);
        }

        function truncateText(text, maxLength) {
            if (text.length <= maxLength) return text;
            return text.substr(0, maxLength) + '...';
        }

        function showNotification(message, type) {
            // Create notification element
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                padding: 16px 24px;
                background: ${type === 'success' ? 'var(--accent)' : type === 'error' ? 'var(--danger)' : 'var(--info)'};
                color: white;
                border-radius: 10px;
                box-shadow: 0 10px 25px rgba(0,0,0,0.2);
                z-index: 3000;
                transform: translateX(100%);
                transition: transform 0.3s ease;
                font-weight: 500;
                backdrop-filter: blur(10px);
            `;
            notification.textContent = message;

            document.body.appendChild(notification);

            // Animate in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 10);

            // Remove after 3 seconds
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        // Initialize the dashboard when DOM is loaded
        document.addEventListener('DOMContentLoaded', initDashboard);
    </script>
</body>
</html>
