<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CS Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="mb-0">CS Dashboard</h3>
                </div>
                <div class="card-body p-4">
                    <p class="text-center text-muted">Silakan login untuk melanjutkan</p>

                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo site_url('Auth'); ?>" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary py-2">Login</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="card-footer text-center py-3 bg-white border-top-0">
                    <p class="mb-0 text-muted small">&copy; 2026 CS Dashboard</p>
                </div> -->
            </div>
        </div>
    </div>
</body>

</html>