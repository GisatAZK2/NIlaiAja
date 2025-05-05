
        <!-- Modern Sidebar -->
        <nav class="sidebar">
            <div class="sidebar-brand">
                <img src="<?= base_url('assets/ikan.png'); ?>" alt="Logo">
                <h4>NilaiAja</h4>
            </div>
            <div class="position-sticky pt-3">
                <ul class="nav flex-column px-2">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-target="dashboard-content">
                            <i class="bi bi-speedometer2"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-target="students-content">
                            <i class="bi bi-people"></i>
                            <span>Students</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-target="courses-content">
                            <i class="bi bi-journal-text"></i>
                            <span>Courses</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-target="grades-content">
                            <i class="bi bi-clipboard-data"></i>
                            <span>Grades</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-target="analytics-content">
                            <i class="bi bi-bar-chart"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link" href="#" data-target="settings-content">
                            <i class="bi bi-gear"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Navigation -->
            <nav class="top-navbar navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button class="sidebar-toggle" type="button">
                        <i class="bi bi-list"></i>
                    </button>
                    <button class="navbar-toggler d-lg-none" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="d-flex align-items-center ms-auto">
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown">
                                <img src="https://ui-avatars.com/api/?name=Admin&background=6366f1&color=fff" alt="User" class="user-avatar me-2">
                                <span class="d-none d-md-inline">Admin</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Dashboard Content -->
            <div class="container-fluid py-4 content-section active" id="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <h4 class="mb-4">Dashboard Overview</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="stat-card bg-primary bg-opacity-10">
                            <div class="icon text-primary">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="label text-primary">Total Students</div>
                            <div class="value text-dark">1,245</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-card bg-success bg-opacity-10">
                            <div class="icon text-success">
                                <i class="bi bi-book"></i>
                            </div>
                            <div class="label text-success">Courses</div>
                            <div class="value text-dark">24</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-card bg-warning bg-opacity-10">
                            <div class="icon text-warning">
                                <i class="bi bi-clipboard-data"></i>
                            </div>
                            <div class="label text-warning">Grades Recorded</div>
                            <div class="value text-dark">8,542</div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-card bg-info bg-opacity-10">
                            <div class="icon text-info">
                                <i class="bi bi-award"></i>
                            </div>
                            <div class="label text-info">Top Students</div>
                            <div class="value text-dark">12</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Siswa Content -->
            <div class="container-fluid py-4 content-section" id="students-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0">Data Siswa</h5>
                                    <button class="btn btn-sm btn-primary">
                                        <i class="bi bi-plus-circle"></i> Tambah Siswa
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="students-table" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2023001</td>
                                            <td>John Doe</td>
                                            <td>12</td>
                                            <td>IPA</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>2023002</td>
                                            <td>Jane Smith</td>
                                            <td>11</td>
                                            <td>IPS</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>2023003</td>
                                            <td>Michael Johnson</td>
                                            <td>10</td>
                                            <td>IPA</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>2023004</td>
                                            <td>Sarah Williams</td>
                                            <td>12</td>
                                            <td>Bahasa</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>2023005</td>
                                            <td>David Brown</td>
                                            <td>11</td>
                                            <td>IPA</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Courses Content -->
            <div class="container-fluid py-4 content-section" id="courses-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Courses Management</h5>
                            </div>
                            <div class="card-body">
                                <p>Courses content will be displayed here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grades Content -->
            <div class="container-fluid py-4 content-section" id="grades-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Grades Management</h5>
                            </div>
                            <div class="card-body">
                                <p>Grades content will be displayed here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Analytics Content -->
            <div class="container-fluid py-4 content-section" id="analytics-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Analytics Dashboard</h5>
                            </div>
                            <div class="card-body">
                                <p>Analytics content will be displayed here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Settings Content -->
            <div class="container-fluid py-4 content-section" id="settings-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">System Settings</h5>
                            </div>
                            <div class="card-body">
                                <p>Settings content will be displayed here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize DataTable
            $('#students-table').DataTable({
                responsive: true
            });

            // Toggle sidebar
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            const sidebarToggle = document.querySelector('.sidebar-toggle');
            
            // Check localStorage for sidebar state
            const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
            if (isCollapsed) {
                sidebar.classList.add('collapsed');
                mainContent.classList.add('collapsed');
            }
            
            // Toggle sidebar function
            function toggleSidebar() {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('collapsed');
                
                // Save state to localStorage
                const isNowCollapsed = sidebar.classList.contains('collapsed');
                localStorage.setItem('sidebarCollapsed', isNowCollapsed);
                
                // Update icon
                const icon = sidebarToggle.querySelector('i');
                if (isNowCollapsed) {
                    icon.classList.remove('bi-list');
                    icon.classList.add('bi-list-nested');
                } else {
                    icon.classList.remove('bi-list-nested');
                    icon.classList.add('bi-list');
                }
            }
            
            // Add click event to toggle button
            sidebarToggle.addEventListener('click', toggleSidebar);
            
            // Mobile sidebar toggle
            document.querySelector('.navbar-toggler').addEventListener('click', function() {
                sidebar.classList.toggle('show');
            });

            // Handle sidebar menu clicks
            document.querySelectorAll('.sidebar .nav-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Get target content ID
                    const targetId = this.getAttribute('data-target');
                    
                    // Hide all content sections
                    document.querySelectorAll('.content-section').forEach(section => {
                        section.classList.remove('active');
                    });
                    
                    // Show target content
                    if (targetId) {
                        document.getElementById(targetId).classList.add('active');
                    }
                    
                    // Update active menu
                    document.querySelectorAll('.sidebar .nav-link').forEach(menu => {
                        menu.classList.remove('active');
                    });
                    this.classList.add('active');
                    
                    // Close sidebar on mobile after selection
                    if (window.innerWidth < 992) {
                        sidebar.classList.remove('show');
                    }
                    
                    // Reinitialize DataTable when showing students content
                    if (targetId === 'students-content') {
                        $('#students-table').DataTable().destroy();
                        $('#students-table').DataTable({
                            responsive: true
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>