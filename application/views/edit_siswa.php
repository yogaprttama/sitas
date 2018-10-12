<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>SITAS | Yoga Pratama</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
	<div class="container" style="width: 750px">		
		<div style="margin-top: 10%; margin-bottom: 10%; margin-right: auto; margin-left: auto; width: 340px;">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Siswa</div>
				<div class="panel-body">
					<form action="<?php echo base_url('update/siswa'); ?>" method="post">
						<div>
							<input type="hidden" id="no_induk" name="no_induk" value="<?php echo $row->no_induk; ?>">
						</div>
						<div class="form-group">
							<label for="nama_siswa">Nama Siswa:</label>
							<input type="text" id="nama_siswa" class="form-control" name="nama_siswa" value="<?php echo $row->nama_siswa; ?>">
						</div>
						<div class="form-group">
							<label for="jenis_kelamin">Jenis Kelamin:</label>
							<div class="radio">
								<label>
									<input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($row->jenis_kelamin != 'Perempuan' ? "checked" : ""); ?>>Laki-laki
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($row->jenis_kelamin != 'Laki-laki' ? "checked" : ""); ?>>Perempuan
								</label>
							</div>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat:</label>
							<textarea name="alamat" id="alamat" class="form-control" rows="5"><?php echo $row->alamat; ?></textarea>
						</div>
						<div class="form-group">
							<a href="<?php echo base_url(); ?>" class="btn btn-default pull-left">Kembali</a>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success pull-right" value="Update">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>