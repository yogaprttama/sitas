<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>SITAS | Yoga Pratama</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('vendor/font-awesome/css/font-awesome.min.css'); ?>">
	<style>
		body {
			background-color: #f5f8fa
		}
		body {
			font-family: Raleway, sans-serif;
			font-size: 14px;
			line-height: 1.6;
			color: #636b6f
		}
		.navbar-default, .panel-default>.panel-heading {
			background-color: #fff
		}
		.form-control {
			box-shadow: none
		}
		.panel-default,
		.navbar-default,
		.panel-default>.panel-heading {
			border-color: #d3e0e9;			
		}
		.ml-15 {
			margin-left: 15px
		}
		/*
		.panel-default {
			border-color: #dfe2e5;
		}
		.panel-default>.panel-heading {
			background-color: #f1f8ff;
			border-color: #c8e1ff;
		}*/
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
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">SITAS</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Login</a></li>
				<li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
			</ul>
		</div>
	</nav>
	<div class="container" style="width: 970px">		
		<div class="row" style="margin-top: 10%; margin-bottom: 10%;">

<?php if($this->session->flashdata('loginSukses')): ?>
		<div class="alert alert-success alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong><?php echo $this->session->flashdata('loginSukses'); ?></strong> Selamat Datang Pakde.
		</div>
<?php endif; ?>

			<div class="col-md-4">
				<div class="sidebar-wrapper">
					<div class="sidebar">
						<ul class="sidebar-menu">
							<li class="active">
								<a href="#">
									<i class="fa fa-home"></i>
									<span class="title">Master Siswa</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-folder"></i>
									<span class="title">Master Siswa</span>
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
				<div class="form-group">
					<a href="#" class="btn btn-success">
						<span class="glyphicon glyphicon-plus"></span> Tambah Siswa
					</a>
				</div>
					<div class="panel panel-default">
						<div class="panel-heading">Master Siswa</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>No. Induk</th>
										<th>Nama Siswa</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
			<?php foreach($rows as $row): ?>
									<tr>
										<td>&nbsp;</td>
										<td><?php echo $row->nis; ?></td>
										<td>
											<a href="<?php echo base_url("siswa/{$row->nis}"); ?>" style="color: black;"><?php echo $row->nama_siswa; ?></a>
										</td>
										<td><?php echo $row->jenis_kelamin; ?></td>
										<td><?php echo $row->alamat; ?></td>
										<td>
											<a href="<?php echo base_url("edit/siswa/{$row->nis}"); ?>">
												<span class="glyphicon glyphicon-edit"></span>
											</a>
										</td>
										<td>
											<a href="<?php echo base_url("delete/siswa/{$row->nis}"); ?>">
												<span class="glyphicon glyphicon-trash"></span>
											</a>
										</td>
									</tr>
			<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div><!-- ./panel -->
			</div>

		</div>
	</div>
	<script src="<?php echo base_url('vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>