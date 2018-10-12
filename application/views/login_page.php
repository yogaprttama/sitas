<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SITAS | Login</title>
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
		.error {
			display: block;
			margin-bottom: 10px;
			color: red
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
		.dropdown-menu {
			border-color: #d3e0e9;
			box-shadow: none
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
					<a class="navbar-brand" href="<?php echo base_url(); ?>">SITAS</a>
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
								<a href="#" class="btn btn-success btn-block">
									<span class="glyphicon glyphicon-log-in"></span> Masuk
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row" style="margin-top: 10%; margin-bottom: 10%">
				<div class="col-md-6 col-md-offset-3">

<?php if($this->session->flashdata('pesanError')): ?>
			<div class="alert alert-warning alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>Login gagal!</strong> <?php echo $this->session->flashdata('pesanError'); ?>
			</div>
<?php endif; ?>

					<div class="panel panel-default">
						<div class="panel-heading">Masuk ke SITAS</div>
						<div class="panel-body">
							<form class="form-horizontal" action="<?php echo base_url('login'); ?>" method="post">
								<div class="form-group">
									<label for="userid" class="col-md-4 control-label">User</label>
									<div class="col-md-6">
										<input type="text" id="userid" class="form-control" name="userid" value="<?php echo set_value('userid'); ?>" placeholder="username" autofocus>
										<?php if(form_error('userid')): ?>
											<?php echo form_error('userid'); ?>
										<?php endif; ?>
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-md-4 control-label">Password</label>
									<div class="col-md-6">
										<input type="password" id="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="password">
										<?php if(form_error('password')): ?>
											<?php echo form_error('password'); ?>
										<?php endif; ?>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-8 col-md-offset-4">
										<button type="submit" class="btn btn-primary">
											<span class="glyphicon glyphicon-log-in"></span> Masuk
										</button>
									</div>
								</div>							
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<p style="padding-top: 15px; padding-bottom: 15px; margin: 0" class="text-center">[ ] dengan ❤ di Cileungsi</p>
			</div>
		</div>
	</div><!-- ./app -->
	<script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>