<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url('assets/ikan.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <title>NilaiAja Admin - Dashboard</title>
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-hover: #4f46e5;
            --sidebar-width: 280px;
            --sidebar-collapsed-width: 80px;
            --glass-bg: rgba(255, 255, 255, 0.85);
            --glass-border: 1px solid rgba(255, 255, 255, 0.2);
            --glass-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
            --glass-blur: blur(12px);
        }
        
        body {
            background-color: #f8fafc;
            color: #334155;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            overflow-x: hidden;
        }
        
        /* Sidebar Modern Style */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            background: var(--glass-bg);
            backdrop-filter: var(--glass-blur);
            border-right: var(--glass-border);
            box-shadow: var(--glass-shadow);
            z-index: 1000;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
            overflow: hidden;
        }
        
        .sidebar.collapsed .sidebar-brand h4,
        .sidebar.collapsed .nav-link span {
            display: none;
        }
        
        .sidebar.collapsed .sidebar-brand {
            justify-content: center;
            padding: 1.5rem 0.5rem;
        }
        
        .sidebar.collapsed .nav-link {
            text-align: center;
            padding: 10px 0;
            margin: 4px 8px;
        }
        
        .sidebar.collapsed .nav-link i {
            margin-right: 0;
            font-size: 1.3rem;
        }
        
        .sidebar .nav-link {
            color: #64748b;
            border-radius: 8px;
            margin: 4px 12px;
            padding: 10px 16px;
            font-weight: 500;
            transition: all 0.2s;
            white-space: nowrap;
        }
        
        .sidebar .nav-link:hover {
            background-color: #e2e8f0;
            color: #1e293b;
            transform: translateX(4px);
        }
        
        .sidebar .nav-link.active {
            background-color: var(--primary-color);
            color: white;
            box-shadow: 0 4px 6px -1px rgba(99, 102, 241, 0.3);
        }
        
        .sidebar .nav-link i {
            margin-right: 12px;
            font-size: 1.1rem;
            transition: all 0.3s;
        }
        
        .sidebar-brand {
            padding: 1.5rem 1.5rem 1rem;
            display: flex;
            align-items: center;
            transition: all 0.3s;
        }
        
        .sidebar-brand img {
            height: 40px;
            width: 40px;
            margin-right: 12px;
            transition: all 0.3s;
        }
        
        .sidebar-brand h4 {
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0;
            transition: all 0.3s;
        }
        
        /* Main Content Area */
        .main-content {
            margin-left: var(--sidebar-width);
            transition: all 0.3s;
            min-height: 100vh;
        }
        
        .main-content.collapsed {
            margin-left: var(--sidebar-collapsed-width);
        }
        
        /* Top Navigation */
        .top-navbar {
            background: var(--glass-bg);
            backdrop-filter: var(--glass-blur);
            border-bottom: var(--glass-border);
            box-shadow: var(--glass-shadow);
            position: sticky;
            top: 0;
            z-index: 999;
            padding: 1rem 2rem;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        /* Modern Cards */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s, box-shadow 0.2s;
            background: var(--glass-bg);
            backdrop-filter: var(--glass-blur);
            border: var(--glass-border);
        }
        
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            background: transparent;
            border-bottom: var(--glass-border);
            padding: 1.25rem 1.5rem;
        }
        
        .card-title {
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0;
        }
        
        /* Stats Cards */
        .stat-card {
            border-radius: 12px;
            padding: 1.5rem;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-card .icon {
            font-size: 2.5rem;
            opacity: 0.2;
            position: absolute;
            right: 20px;
            top: 20px;
        }
        
        .stat-card .value {
            font-size: 2rem;
            font-weight: 700;
            margin-top: 0.5rem;
        }
        
        .stat-card .label {
            font-size: 0.875rem;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }
        
        /* DataTable Customization */
        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter {
            margin-bottom: 1rem;
        }
        
        table.dataTable {
            border-collapse: separate !important;
            border-spacing: 0 8px !important;
        }
        
        table.dataTable thead th {
            border: none;
            background-color: #f1f5f9;
            color: #64748b;
            font-weight: 600;
            padding: 12px 18px;
        }
        
        table.dataTable tbody td {
            background: white;
            padding: 16px 18px;
            vertical-align: middle;
            border-top: none;
            border-bottom: none;
        }
        
        table.dataTable tbody tr {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }
        
        /* Buttons */
        .btn {
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.2s;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
            transform: translateY(-2px);
        }
        
        /* Toggle Button */
        .sidebar-toggle {
            background: transparent;
            border: none;
            font-size: 1.25rem;
            color: #64748b;
            cursor: pointer;
            margin-right: 1rem;
            transition: all 0.2s;
        }
        
        .sidebar-toggle:hover {
            color: var(--primary-color);
            transform: scale(1.1);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
                width: var(--sidebar-width);
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .sidebar.collapsed {
                transform: translateX(-100%);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .main-content.collapsed {
                margin-left: 0;
            }
        }
        
        /* Activity Feed */
        .activity-item {
            border-left: 3px solid #e2e8f0;
            padding-left: 1rem;
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .activity-item:last-child {
            margin-bottom: 0;
        }
        
        .activity-item::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 4px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: var(--primary-color);
            border: 2px solid white;
        }
        
        .activity-time {
            font-size: 0.75rem;
            color: #94a3b8;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Content Sections */
        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="wrapper">