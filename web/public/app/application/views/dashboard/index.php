<!-- Page Content -->
<div class="container-fluid py-4 px-4">
                <!-- Page Header -->
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div>
                        <h2 class="fw-bold mb-1">Dashboard</h2>
                        <nav aria-label="breadcrumb">
                    
                        </nav>
                    </div>
                    
                </div>
                <?php foreach ($user as $datauser): ?>
                <!-- Stats Cards -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6 col-lg-3">
                        <div class="stat-card bg-primary bg-opacity-10 text-primary">
                            <i class="bi bi-people icon"></i>
                            <div class="value"><?= $total_user ?></div>
                            <div class="label">Total Murid</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="stat-card bg-success bg-opacity-10 text-success">
                            <i class="bi bi-journal-text icon"></i>
                            <div class="value">42</div>
                            <div class="label">Mata Pelajaran</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="stat-card bg-info bg-opacity-10 text-info">
                            <i class="bi bi-clipboard-check icon"></i>
                            <div class="value">1,892</div>
                            <div class="label">Jumlah Ter Record</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="stat-card bg-warning bg-opacity-10 text-warning">
                            <i class="bi bi-graph-up icon"></i>
                            <div class="value">87.5%</div>
                            <div class="label">Performa Rata-Rata</div>
                        </div>
                    </div>
                </div>


                <!-- Main Content Area -->
                <div class="row g-4">
                    <!-- Recent Grades Table -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Recent Grades</h5>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        <i class="bi bi-filter"></i> Filter
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">This Week</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Semester</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="gradesTable" class="table table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Student</th>
                                                <th>Course</th>
                                                <th>Assignment</th>
                                                <th>Grade</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=random" class="rounded-circle me-2" width="32" height="32">
                                                        John Doe
                                                    </div>
                                                </td>
                                                <td>Mathematics</td>
                                                <td>Algebra Test</td>
                                                <td><span class="badge bg-success">85</span></td>
                                                <td>Oct 15, 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=random" class="rounded-circle me-2" width="32" height="32">
                                                        Jane Smith
                                                    </div>
                                                </td>
                                                <td>Science</td>
                                                <td>Chemistry Lab</td>
                                                <td><span class="badge bg-success">92</span></td>
                                                <td>Oct 14, 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://ui-avatars.com/api/?name=Mike+Johnson&background=random" class="rounded-circle me-2" width="32" height="32">
                                                        Mike Johnson
                                                    </div>
                                                </td>
                                                <td>History</td>
                                                <td>World War II Essay</td>
                                                <td><span class="badge bg-warning">78</span></td>
                                                <td>Oct 13, 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://ui-avatars.com/api/?name=Sarah+Williams&background=random" class="rounded-circle me-2" width="32" height="32">
                                                        Sarah Williams
                                                    </div>
                                                </td>
                                                <td>English</td>
                                                <td>Book Report</td>
                                                <td><span class="badge bg-success">88</span></td>
                                                <td>Oct 12, 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://ui-avatars.com/api/?name=David+Brown&background=random" class="rounded-circle me-2" width="32" height="32">
                                                        David Brown
                                                    </div>
                                                </td>
                                                <td>Mathematics</td>
                                                <td>Geometry Quiz</td>
                                                <td><span class="badge bg-success">95</span></td>
                                                <td>Oct 11, 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                    <!-- Right Sidebar Content -->
                    <div class="col-lg-4">
                        <!-- Quick Actions -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Quick Actions</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-grid gap-3">
                                    <button class="btn btn-outline-primary text-start">
                                        <i class="bi bi-plus-circle me-2"></i> Add New Grade
                                    </button>
                                    <button class="btn btn-outline-success text-start">
                                        <i class="bi bi-file-earmark-spreadsheet me-2"></i> Export Data
                                    </button>
                                    <button class="btn btn-outline-info text-start">
                                        <i class="bi bi-people me-2"></i> Manage Students
                                    </button>
                                    <button class="btn btn-outline-secondary text-start">
                                        <i class="bi bi-printer me-2"></i> Print Reports
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Recent Activity -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Recent Activity</h5>
                            </div>
                            <div class="card-body">
                                <div class="activity-item">
                                    <h6 class="mb-1 fw-semibold">New grade added</h6>
                                    <p class="mb-1">John Doe scored 85 in Mathematics</p>
                                    <small class="activity-time">15 minutes ago</small>
                                </div>
                                <div class="activity-item">
                                    <h6 class="mb-1 fw-semibold">User login</h6>
                                    <p class="mb-1">Admin logged in from 192.168.1.1</p>
                                    <small class="activity-time">1 hour ago</small>
                                </div>
                                <div class="activity-item">
                                    <h6 class="mb-1 fw-semibold">System update</h6>
                                    <p class="mb-1">Updated to version 2.1.0</p>
                                    <small class="activity-time">3 hours ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>