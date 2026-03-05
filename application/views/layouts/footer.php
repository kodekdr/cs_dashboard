        </div> <!-- End of Content -->
    </div> <!-- End of Wrapper -->

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarCollapse').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            if (sidebar.style.display === 'none') {
                sidebar.style.display = 'block';
            } else {
                sidebar.style.display = 'none';
            }
        });
    </script>
</body>

</html>
