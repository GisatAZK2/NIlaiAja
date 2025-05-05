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
    });
</script>
</body>
</html>