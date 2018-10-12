<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SITAS | Master Petugas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('vendor/font-awesome/css/font-awesome.min.css'); ?>">
	<style>
		body {
			font-family: "Raleway", sans-serif;
			font-size: 16px;
			line-height: 1.6;
			color: #636b6f;
			background-color: #f5f8fa
		}
		.breadcrumb {
			background-color: transparent
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
		.sidebar-wrapper {
		  margin-bottom: 20px;
		  -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
		  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
		}

		.sidebar {
		  display: block !important;
		  height: auto !important;
		  padding-top: 10px;
		  padding-bottom: 10px;
		}

		.sidebar {
		  background-color: #fff;
		  border-radius: 4px;
		}

		.sidebar .sidebar-menu > li > a {
		  color: #485a6a;
		}

		.sidebar .sidebar-menu > li > a {
		  display: block;
		  position: relative;
		  margin-bottom: 1px;
		  border: 0;
		  padding: 12px 15px;
		  text-decoration: none;
		}

		.sidebar .sidebar-menu > li > a > .title {
		  font-size: 14px;
		  font-weight: 400;
		}

		.sidebar .sidebar-menu > li > a > i {
		  color: #97b1c3;
		}

		.sidebar .sidebar-menu > li > a > i {
		  font-size: 18px;
		  font-weight: 300;
		}

		.sidebar .sidebar-menu > li > a > i {
		  width: 1.5em;
		}

		.sidebar .sidebar-menu > li:hover > a {
		  background: #f2f6f9;
		  color: #5b9bd1;
		}

		.sidebar .sidebar-menu > li:hover > a > i {
		  color: #5b9bd1;
		}

		.sidebar .sidebar-menu > li.active > a,
		.sidebar .sidebar-menu > li > a.router-link-exact-active.router-link-active {
		  background: #f2f6f9;
		  color: #5b9bd1;
		}

		.sidebar .sidebar-menu > li.active > a:hover,
		.sidebar .sidebar-menu > li > a.router-link-exact-active.router-link-active:hover {
		  background: #f2f6f9;
		}

		.sidebar .sidebar-menu > li.active > a > i,
		.sidebar .sidebar-menu > li > a.router-link-exact-active.router-link-active > i {
		  color:#5b9bd1
		}

		.sidebar .sidebar-menu > li.active > a,
		.sidebar .sidebar-menu > li > a.router-link-exact-active.router-link-active {
		  border-left:3px solid #5C9ACF!important;
		  margin-left:-3px;
		  padding-left:15px
		}

		.sidebar .sidebar-menu > li {
		  display: block;
		  margin: 0;
		  padding: 0;
		  border: 0;
		}

		.sidebar .sidebar-menu {
		  list-style: none;
		  margin-top: 0;
		  margin-bottom: 0;
		  padding: 0;
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
					<ul class="nav navbar-nav">
						<li>
							<a href="<?php echo base_url('home'); ?>">Home</a>
						</li>
<?php if($this->session->userdata('level') == 'admin') : ?>
						<li class="active">
							<a href="<?php echo base_url('master/petugas'); ?>">Master Petugas</a>
						</li>
						<li>
							<a href="#">Report</a>
						</li>
						<li>
							<a href="#">Maintenance</a>
						</li>
<?php endif; ?>
					</ul>
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
			<ol class="breadcrumb">
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Master Petugas</a>
				</li>
			</ol>
			<div class="row">
				<div class="col-md-4">
					<div class="sidebar-wrapper">
						<div class="sidebar">
							<ul class="sidebar-menu">
								<li class="active">
									<a href="#">
										<i class="fa fa-home"></i>
										<span class="title">Master Petugas</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-folder"></i>
										<span class="title">Level Petugas</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
										<span class="title">Master Siswa</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">Master Petugas</div>
						<div class="panel-body">
							<table id="master-petugas" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>ID Petugas</th>
										<th>Nama Petugas</th>
										<th>Jenis Kelamin</th>
										<th>Telp</th>
										<th>Level</th>
									</tr>
								</thead>
								<tbody>
<?php foreach($rows as $row) : ?>
									<tr>
										<td><?php echo $row->id_petugas; ?></td>
										<td><?php echo $row->nama_petugas; ?></td>
										<td><?php echo $row->jenis_kelamin; ?></td>
										<td><?php echo $row->telp; ?></td>
										<td><?php echo $row->level; ?></td>
									</tr>	
<?php endforeach; ?>
								</tbody>
							</table>							
							<?php echo $this->pagination->create_links(); ?>
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
	</div>
	<script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>