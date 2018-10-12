<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>SITAS | Yoga Pratama</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('vendor/normalize/normalize.min.css'); ?>">
	<style>
		table, th, td { border: 1px solid transparent }
		th, td { padding: 5px; }
		a { text-decoration: none; }
		a:hover, a:visited, a:active { color: blue }
	</style>
</head>
<body>
	<div style="padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 750px;">
		<div style="margin-top: 10%; margin-bottom: 10%; margin-right: auto; margin-left: auto; width: 340px;">
			<div style="margin-bottom: 20px;">
				<a href="<?php echo base_url(); ?>">Kembali</a>
			</div>
			<div style="margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px;">
				<div style="padding: 10px 15px; background-color: #f5f5f5; border-bottom: 1px solid #ddd; border-top-left-radius: 3px; border-top-right-radius: 3px;">
					Detail Siswa				
				</div>
				<div style="padding: 15px;">
					<table>
						<tbody>
							<tr>
								<td>Nama Siswa</td>
								<td>: <?php echo $row->nama_siswa; ?></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>: <?php echo $row->jenis_kelamin; ?></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td>: <?php echo $row->alamat; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>