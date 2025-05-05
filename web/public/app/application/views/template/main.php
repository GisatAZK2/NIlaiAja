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
                        <li><a class="dropdown-item" href="<?= base_url(); ?>login/logout"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Dynamic Content -->
    <?php $this->load->view($content); ?>
</main>