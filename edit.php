<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - RPL103 | SMK PGRI 2 CIANJUR</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

 <div class="container-fluid my-3">
 <div class="row justify-content-center">
 <div class="col-6">

<h2>CRUD DATA PETUGAS = Aplikasi Pembayaran SPP</h2>
	<br/> 	
	<a href="index.php" class="btn btn-outline-danger btn-sm float-right">KEMBALI</a>
	<br/>
	<br/>
<div class="card shadow">
<div class="card-body">
	<h3>EDIT DATA PETUGAS</h3>
 
	<?php
	include 'koneksi.php';
	$id_petugas = $_GET['id_petugas'];
	$data = mysqli_query($koneksi,"select * from petugas where id_petugas='$id_petugas'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table class="table">
				<tr >			
					<td class="align-middle">ID Petugas</td>
					<td>
						<input class="form-control my-1" name="id_petugas" type="text" value="<?php echo $d['id_petugas']; ?>" disabled>
						<input class="form-control my-1" name="id_petugas" type="hidden" value="<?php echo $d['id_petugas']; ?>">
					</td>
				</tr>
				<tr>
					<td class="align-middle">Username</td>
					<td><input class="form-control my-1" type="text" name="username" value="<?php echo $d['username']; ?>"></td>
				</tr>
				<tr>
					<td class="align-middle">Nama Petugas</td>
					<td><input class="form-control my-1" type="text" name="nama_petugas" value="<?php echo $d['nama_petugas']; ?>"></td>
				</tr>
				<tr>
					<td class="align-middle">Password</td>
					<td><input class="form-control my-1" type="password" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
				<tr>
					<td class="align-middle">Level</td>
					<td>
						<select class="form-control my-1" name="level">
							<option value="admin">Admin</option>
							<option value="petugas">Petugas</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-success btn-sm" type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</div>
</div>
	
 </div>
 </div>
 </div>
	
</body>
</html>
