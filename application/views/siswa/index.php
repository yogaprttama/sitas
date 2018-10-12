<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SITAS | Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('vendor/animate/animate.min.css'); ?>">
	<style>
		body {
			font-family: "Raleway", sans-serif;
			font-size: 16px;
			line-height: 1.6;
			color: #636b6f;
			background-color: #f5f8fa
		}
		.navbar-default, .panel-default>.panel-heading {
			background-color: #fff
		}
		.form-control, .form-control:focus {
			box-shadow: none;
			outline: none
		}
		.panel-default,
		.navbar-default,
		.panel-default>.panel-heading {
			border-color: #d3e0e9			
		}
		.btn:focus,
		.btn:active:focus,
		.btn.active:focus,
		.btn.focus,
		.btn:active.focus,
		.btn.active.focus {
			outline: none
		}
		.navbar-default .navbar-toggle {
			border-color: #fff
		}
		.navbar-default .navbar-toggle:hover,
		.navbar-default .navbar-toggle:focus {
			background-color: #fff
		}
		.navbar-default .navbar-toggle:hover .icon-bar,
		.navbar-default .navbar-toggle:focus .icon-bar {
			background-color: #337ab7
		}
		.navbar-default .navbar-collapse,
		.navbar-default .navbar-form {
			border-color: #d3e0e9
		}
		.navbar-default .navbar-nav>.open>a,
		.navbar-default .navbar-nav>.open>a:focus,
		.navbar-default .navbar-nav>.open>a:hover {
			background-color: inherit
		}
		.dropdown-menu {
			border-color: #d3e0e9;
			box-shadow: none
		}
		.footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			background-color: #fff;
			border-top: 1px solid #d3e0e9
		}
		@media (max-width: 767px) {
			.navbar-nav .open .dropdown-menu>li>a {
				padding-top: 10px;
				padding-bottom: 10px
			}
		}
		.dropdown-menu>li>a>.glyphicon {
			margin-right: 5px
		}
		.navbar-nav>li>a.avatar {
			padding-top: 10px;
			padding-bottom: 10px
		}
	</style>
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sitasMenu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">SITAS</a>
				</div>
				<div class="collapse navbar-collapse" id="sitasMenu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">							
							<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown" role="button" aria-expanded="false">
								<img src="<?php echo base_url('assets/img/avatar.png'); ?>" class="img-circle" alt="avatar" width="30" height="30"> Hallo, <?php echo $this->session->userdata('user'); ?> <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">
										<span class="glyphicon glyphicon-user"></span> Profil
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('logout'); ?>">
										<span class="glyphicon glyphicon-log-out"></span> Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<h1>Halo Siswa</h1>
		</div>
		<div class="footer">
			<div class="container">
				<p style="padding-top: 15px; padding-bottom: 15px; margin: 0" class="text-center">[ ] dengan ❤ di Cileungsi</p>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>