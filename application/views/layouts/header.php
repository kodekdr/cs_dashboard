<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo isset($title) ? $title : 'CS Dashboard'; ?></title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- DataTables Bootstrap 5 CSS -->
	<link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background-color: #f8f9fa;
		}

		#wrapper {
			display: flex;
			width: 100%;
			align-items: stretch;
		}

		#sidebar {
			min-width: 250px;
			max-width: 250px;
			background: #212529;
			color: #fff;
			transition: all 0.3s;
			min-height: 100vh;
		}

		#sidebar .sidebar-header {
			padding: 20px;
			background: #1a1e21;
		}

		#sidebar ul.components {
			padding: 20px 0;
		}

		#sidebar ul p {
			color: #fff;
			padding: 10px;
		}

		#sidebar ul li a {
			padding: 10px 20px;
			font-size: 1.1em;
			display: block;
			color: #adb5bd;
			text-decoration: none;
		}

		#sidebar ul li a:hover {
			color: #fff;
			background: #343a40;
		}

		#sidebar ul li.active>a {
			color: #fff;
			background: #0d6efd;
		}

		#content {
			width: 100%;
			padding: 20px;
			min-height: 100vh;
			transition: all 0.3s;
		}

		.navbar {
			padding: 15px 10px;
			background: #fff;
			border: none;
			border-radius: 0;
			margin-bottom: 40px;
			box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
		}
	</style>
</head>

<body>

	<div id="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar">
			<div class="sidebar-header text-center">
				<h3>CS Dashboard</h3>
			</div>

			<ul class="list-unstyled components">
				<li class="active">
					<a href="#"><i class="fas fa-home me-2"></i>Report CS</a>
				</li>
				<li>
					<a href="#"><i class="fas fa-users me-2"></i> Users</a>
				</li>
				<li>
					<a href="#"><i class="fas fa-chart-line me-2"></i> Reports</a>
				</li>
				<li>
					<a href="#"><i class="fas fa-cog me-2"></i> Settings</a>
				</li>
			</ul>
		</nav>

		<!-- Page Content -->
		<div id="content">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
						<i class="fas fa-align-left"></i>
					</button>
					<div class="ms-auto d-flex align-items-center">
						<span class="text-muted me-3">Welcome, <?php echo $this->session->userdata('username'); ?></span>
						<a href="<?php echo site_url('Auth/logout'); ?>" class="btn btn-outline-danger btn-sm">
							<i class="fas fa-sign-out-alt"></i> Logout
						</a>
					</div>
				</div>
			</nav>

			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script src="https://unpkg.com/htmx.org@1.9.10"></script>