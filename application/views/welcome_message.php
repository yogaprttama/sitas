<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SITAS | By Yoga Pratama</title>
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
			outline: none;
		}
		.panel-default,
		.navbar-default,
		.panel-default>.panel-heading {
			border-color: #d3e0e9;			
		}
		.help-block>p {
			color: red
		}
		.jumbotron.halaman-depan {
			background-image: url(<?php echo base_url('assets/img/sitas-bg.jpg'); ?>);
			color: #fff;
			background-size: cover;
		}
		.container .jumbotron.halaman-depan {
			padding-top: 48px;
			padding-bottom: 48px;
		}
		.fs-18 {
			margin-top: 0;
			font-size: 18px;
		}
		.fs-28 {
			margin-top: 0;
			font-size: 28px;
		}
		.fw-600 {
			font-weight: 600;
		}
		.ml-15 {
			margin-left: 15px;
		}
		.mb-20 {
			margin-bottom: 20px;
		}
		@media screen and (min-width: 768px) {
			.jumbotron.halaman-depan h1 {
				font-size: 42px;
			}
			.jumbotron.halaman-depan h2 {
				font-size: 24px;
			}
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
  border-color: #fff;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #fff;
}
.navbar-default .navbar-toggle:hover .icon-bar,
.navbar-default .navbar-toggle:focus .icon-bar {
  background-color: #337ab7;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #d3e0e9
}
.btn-nav {
	padding: 5px 15px
} 
@media (min-width: 768px) {
	.btn-nav {
		padding: 8px 4px
	}
}
.footer {
	position: absolute;
	bottom: 0;
	width: 100%;
	background-color: #fff;
	border-top: 1px solid #d3e0e9
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
						<li>
							<div class="btn-nav">
								<a href="#" class="btn btn-default btn-block">
									<span class="glyphicon glyphicon-user"></span> Daftar
								</a>
							</div>
						</li>
						<li>
							<div class="btn-nav">
								<a href="<?php echo base_url('login'); ?>" class="btn btn-success btn-block">
									<span class="glyphicon glyphicon-log-in"></span> Masuk
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="jumbotron halaman-depan">
				<div style="padding-top: 32px; padding-bottom: 32px;">
					<h1 class="fs-28 fw-600">Selamat Datang di SITAS</h1>
					<h2 class="fs-18 mb-20">Sistem Informasi Tabungan Siswa SMA Tanjungsari</h2>
					<a class="btn btn-success btn-lg" href="#" role="button">Masuk</a>
					<a class="btn btn-default btn-lg ml-15" href="#" role="button">Daftar</a>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<p style="padding-top: 15px; padding-bottom: 15px; margin: 0" class="text-center">[ ] dengan ❤ di Cileungsi</p>
			</div>
		</div>
	</div><!-- /app -->
	<script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>