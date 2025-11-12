<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - BUMDes Juron</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0f172a;
            --secondary: #1e293b;
            --accent: #10b981;
            --accent-gradient: linear-gradient(135deg, #10b981, #3b82f6, #8b5cf6);
            --sidebar-width: 280px;
            --header-height: 70px;
            --glass-bg: rgba(15, 23, 42, 0.8);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--primary);
            color: white;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Layout */
        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background: var(--secondary);
            border-right: 1px solid var(--glass-border);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 24px;
            border-bottom: 1px solid var(--glass-border);
            text-align: center;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 8px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: var(--accent-gradient);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-text {
            font-size: 1.25rem;
            font-weight: 700;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .admin-info {
            text-align: center;
            margin-top: 16px;
        }

        .admin-name {
            font-weight: 600;
            margin-bottom: 4px;
        }

        .admin-role {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.875rem;
        }

        .sidebar-menu {
            padding: 24px 0;
        }

        .menu-section {
            margin-bottom: 24px;
        }

        .section-title {
            padding: 0 24px 12px;
            font-size: 0.75rem;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.4);
            letter-spacing: 1px;
        }

        .menu-items {
            list-style: none;
        }

        .menu-item {
            margin-bottom: 4px;
        }

        .menu-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 24px;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .menu-link:hover, .menu-link.active {
            background: rgba(255, 255, 255, 0.05);
            color: white;
            border-left-color: var(--accent);
        }

        .menu-link i {
            width: 20px;
            text-align: center;
        }

        .menu-badge {
            margin-left: auto;
            background: var(--accent);
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.75rem;
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
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.25rem;
            cursor: pointer;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-icon {
            position: relative;
            color: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .header-icon:hover {
            color: white;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #ef4444;
            color: white;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            font-size: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
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
        }

        /* Content Area */
        .content {
            padding: 32px;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            padding: 24px;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-color: rgba(16, 185, 129, 0.3);
        }

        .stat-header {
            display: flex;
            align-items: center;
            justify-content: between;
            margin-bottom: 16px;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(16, 185, 129, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
        }

        .stat-icon i {
            font-size: 1.5rem;
            color: var(--accent);
        }

        .stat-info {
            flex: 1;
        }

        .stat-title {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.875rem;
            margin-bottom: 4px;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .stat-change {
            font-size: 0.875rem;
            color: #10b981;
        }

        .stat-change.negative {
            color: #ef4444;
        }

        /* Content Sections */
        .content-section {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            margin-bottom: 32px;
            overflow: hidden;
        }

        .section-header {
            padding: 24px;
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: between;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .section-actions {
            display: flex;
            gap: 12px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 8px;
            border: none;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--accent);
            color: white;
        }

        .btn-primary:hover {
            background: #0da271;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
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
            padding: 16px 24px;
            text-align: left;
            border-bottom: 1px solid var(--glass-border);
        }

        .data-table th {
            background: rgba(255, 255, 255, 0.05);
            font-weight: 600;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.875rem;
        }

        .data-table tr:hover {
            background: rgba(255, 255, 255, 0.02);
        }

        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .status-active {
            background: rgba(16, 185, 129, 0.2);
            color: #10b981;
        }

        .status-inactive {
            background: rgba(239, 68, 68, 0.2);
            color: #ef4444;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .btn-icon {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-icon:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .btn-edit:hover {
            background: #3b82f6;
        }

        .btn-delete:hover {
            background: #ef4444;
        }

        /* Modal */
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
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal {
            background: var(--secondary);
            border-radius: 16px;
            width: 90%;
            max-width: 500px;
            max-height: 90vh;
            overflow-y: auto;
            transform: translateY(20px);
            transition: transform 0.3s ease;
        }

        .modal-overlay.active .modal {
            transform: translateY(0);
        }

        .modal-header {
            padding: 24px;
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: between;
        }

        .modal-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .modal-close {
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.7);
            font-size: 1.25rem;
            cursor: pointer;
        }

        .modal-body {
            padding: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            border-radius: 8px;
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.1);
        }

        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23ffffff'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
        }

        .modal-footer {
            padding: 24px;
            border-top: 1px solid var(--glass-border);
            display: flex;
            justify-content: flex-end;
            gap: 12px;
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
                padding: 0 16px;
            }

            .content {
                padding: 16px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .section-header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }

            .section-actions {
                width: 100%;
                justify-content: space-between;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <span class="logo-text">BUMDes Juron</span>
                </div>
                <div class="admin-info">
                    <div class="admin-name">Admin BUMDes</div>
                    <div class="admin-role">Super Administrator</div>
                </div>
            </div>

            <nav class="sidebar-menu">
                <div class="menu-section">
                    <div class="section-title">Menu Utama</div>
                    <ul class="menu-items">
                        <li class="menu-item">
                            <a href="#" class="menu-link active">
                                <i class="fas fa-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="fas fa-chart-bar"></i>
                                <span>Analitik</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="menu-section">
                    <div class="section-title">Manajemen Konten</div>
                    <ul class="menu-items">
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="fas fa-newspaper"></i>
                                <span>Artikel & Berita</span>
                                <span class="menu-badge">12</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="fas fa-images"></i>
                                <span>Galeri</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="fas fa-file-alt"></i>
                                <span>Halaman</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="menu-section">
                    <div class="section-title">Unit Usaha</div>
                    <ul class="menu-items">
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="fas fa-store"></i>
                                <span>Semua Unit</span>
                                <span class="menu-badge">8</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="fas fa-tags"></i>
                                <span>Kategori</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="fas fa-chart-line"></i>
                                <span>Laporan Keuangan</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="menu-section">
                    <div class="section-title">Dokumentasi</div>
                    <ul class="menu-items">
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="fas fa-file-pdf"></i>
                                <span>Laporan Tahunan</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="fas fa-archive"></i>
                                <span>Arsip</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="menu-section">
                    <div class="section-title">Pengaturan</div>
                    <ul class="menu-items">
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="fas fa-users-cog"></i>
                                <span>Pengguna</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <i class="fas fa-cog"></i>
                                <span>Sistem</span>
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
                    <h1 class="page-title">Dashboard Admin</h1>
                </div>

                <div class="header-right">
                    <div class="header-icon">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge">3</span>
                    </div>
                    <div class="header-icon">
                        <i class="fas fa-envelope"></i>
                        <span class="notification-badge">5</span>
                    </div>
                    <div class="user-menu">
                        <div class="user-avatar">AB</div>
                        <div>
                            <div class="admin-name">Admin BUMDes</div>
                            <div class="admin-role">Super Admin</div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <div class="content">
                <!-- Stats Grid -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon">
                                <i class="fas fa-store"></i>
                            </div>
                            <div class="stat-info">
                                <div class="stat-title">Total Unit Usaha</div>
                                <div class="stat-value">8</div>
                                <div class="stat-change">+2 dari bulan lalu</div>
                            </div>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="stat-info">
                                <div class="stat-title">Total Artikel</div>
                                <div class="stat-value">24</div>
                                <div class="stat-change">+5 dari minggu lalu</div>
                            </div>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="stat-info">
                                <div class="stat-title">Pendapatan Bulan Ini</div>
                                <div class="stat-value">Rp 42,5 Jt</div>
                                <div class="stat-change">+15% dari bulan lalu</div>
                            </div>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-info">
                                <div class="stat-title">Pengunjung Website</div>
                                <div class="stat-value">1,248</div>
                                <div class="stat-change">+32% dari minggu lalu</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Unit Usaha Section -->
                <div class="content-section">
                    <div class="section-header">
                        <h2 class="section-title">Manajemen Unit Usaha</h2>
                        <div class="section-actions">
                            <button class="btn btn-secondary">
                                <i class="fas fa-filter"></i> Filter
                            </button>
                            <button class="btn btn-primary" id="add-unit-btn">
                                <i class="fas fa-plus"></i> Tambah Unit
                            </button>
                        </div>
                    </div>

                    <div class="table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Nama Unit</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Pendapatan</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Warung Desa</td>
                                    <td>Retail</td>
                                    <td><span class="status-badge status-active">Aktif</span></td>
                                    <td>Rp 8,2 Jt</td>
                                    <td>15 Mar 2024</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-icon btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-icon btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Simpan Pinjam</td>
                                    <td>Keuangan</td>
                                    <td><span class="status-badge status-active">Aktif</span></td>
                                    <td>Rp 12,5 Jt</td>
                                    <td>10 Feb 2024</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-icon btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-icon btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Wisata Alam</td>
                                    <td>Pariwisata</td>
                                    <td><span class="status-badge status-inactive">Nonaktif</span></td>
                                    <td>Rp 3,8 Jt</td>
                                    <td>05 Jan 2024</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-icon btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-icon btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pengolahan Hasil Bumi</td>
                                    <td>Produksi</td>
                                    <td><span class="status-badge status-active">Aktif</span></td>
                                    <td>Rp 6,9 Jt</td>
                                    <td>20 Mar 2024</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-icon btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-icon btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Artikel Section -->
                <div class="content-section">
                    <div class="section-header">
                        <h2 class="section-title">Manajemen Artikel</h2>
                        <div class="section-actions">
                            <button class="btn btn-secondary">
                                <i class="fas fa-filter"></i> Filter
                            </button>
                            <button class="btn btn-primary">
                                <i class="fas fa-plus"></i> Tambah Artikel
                            </button>
                        </div>
                    </div>

                    <div class="table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Judul Artikel</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Penulis</th>
                                    <th>Tanggal</th>
                                    <th>Dilihat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Pengembangan Ekonomi Desa Melalui BUMDes</td>
                                    <td>Ekonomi</td>
                                    <td><span class="status-badge status-active">Published</span></td>
                                    <td>Admin</td>
                                    <td>25 Mar 2024</td>
                                    <td>142</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-icon btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-icon btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peluncuran Unit Usaha Baru: Warung Desa</td>
                                    <td>Pengumuman</td>
                                    <td><span class="status-badge status-active">Published</span></td>
                                    <td>Admin</td>
                                    <td>20 Mar 2024</td>
                                    <td>89</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-icon btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-icon btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Laporan Keuangan Triwulan I 2024</td>
                                    <td>Laporan</td>
                                    <td><span class="status-badge status-inactive">Draft</span></td>
                                    <td>Admin</td>
                                    <td>15 Mar 2024</td>
                                    <td>0</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-icon btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn-icon btn-delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal Tambah Unit Usaha -->
    <div class="modal-overlay" id="unit-modal">
        <div class="modal">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Unit Usaha Baru</h3>
                <button class="modal-close" id="close-modal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="unit-form">
                    <div class="form-group">
                        <label class="form-label">Nama Unit Usaha</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama unit usaha">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Kategori</label>
                        <select class="form-control form-select">
                            <option value="">Pilih kategori</option>
                            <option value="retail">Retail</option>
                            <option value="keuangan">Keuangan</option>
                            <option value="pariwisata">Pariwisata</option>
                            <option value="produksi">Produksi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" rows="3" placeholder="Masukkan deskripsi unit usaha"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="form-control form-select">
                            <option value="active">Aktif</option>
                            <option value="inactive">Nonaktif</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" id="cancel-modal">Batal</button>
                <button class="btn btn-primary">Simpan Unit</button>
            </div>
        </div>
    </div>

    <script>
        // Toggle sidebar on mobile
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });

        // Modal functionality
        const unitModal = document.getElementById('unit-modal');
        const addUnitBtn = document.getElementById('add-unit-btn');
        const closeModal = document.getElementById('close-modal');
        const cancelModal = document.getElementById('cancel-modal');

        function openModal() {
            unitModal.classList.add('active');
        }

        function closeModalFunc() {
            unitModal.classList.remove('active');
        }

        addUnitBtn.addEventListener('click', openModal);
        closeModal.addEventListener('click', closeModalFunc);
        cancelModal.addEventListener('click', closeModalFunc);

        // Close modal when clicking outside
        unitModal.addEventListener('click', function(e) {
            if (e.target === unitModal) {
                closeModalFunc();
            }
        });

        // Sample data for demonstration
        console.log('%c🌾 Dashboard Admin BUMDes Juron', 'color: #10b981; font-size: 16px; font-weight: bold;');
        console.log('%cSistem manajemen konten dan unit usaha telah dimuat', 'color: #64748b; font-size: 12px;');
    </script>
</body>
</html>
