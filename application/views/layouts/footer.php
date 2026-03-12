        </div> <!-- End of Content -->
        </div> <!-- End of Wrapper -->

        <!-- Bootstrap JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                // Initialize DataTable
                $('#dataTable').DataTable();

                // Sidebar toggle
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                    if ($('#sidebar').hasClass('active')) {
                        $('#sidebar').hide();
                    } else {
                        $('#sidebar').show();
                    }
                });
            });
        </script>
        </body>

        </html>