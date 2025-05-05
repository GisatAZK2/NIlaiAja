<!-- Modern Sidebar -->
<nav class="sidebar">
    <div class="sidebar-brand">
        <img src="<?= base_url('assets/ikan.png'); ?>" alt="Logo">
        <h4>NilaiAja</h4>
    </div>
    <div class="position-sticky pt-3">
        <ul class="nav flex-column px-2">
            <li class="nav-item">
                <a class="nav-link <?= ($active_menu == 'dashboard') ? 'active' : '' ?>" href="<?= site_url('dashboard') ?>">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($active_menu == 'students') ? 'active' : '' ?>" href="<?= site_url('student') ?>">
                    <i class="bi bi-people"></i>
                    <span>Students</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($active_menu == 'subject') ? 'active' : '' ?>" href="<?= site_url('Subject') ?>">
                    <i class="bi bi-journal-text"></i>
                    <span>Subject</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($active_menu == 'grades') ? 'active' : '' ?>" href="<?= site_url('grades') ?>">
                    <i class="bi bi-clipboard-data"></i>
                    <span>Grades</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($active_menu == 'analytics') ? 'active' : '' ?>" href="<?= site_url('analytics') ?>">
                    <i class="bi bi-bar-chart"></i>
                    <span>Analytics</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link <?= ($active_menu == 'settings') ? 'active' : '' ?>" href="<?= site_url('settings') ?>">
                    <i class="bi bi-gear"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>login/logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>