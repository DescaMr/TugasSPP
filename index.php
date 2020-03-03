<?php
    require 'koneksi.php';
    $query = mysqli_query($koneksi, 'select * from petugas');
    $no = 1;
    // $results = mysqli_fetch_assoc($query);
    // var_dump($results);
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - RPL103 | SMK PGRI 2 CIANJUR</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
 <div class="container-fluid my-3">
 	<h2>CRUD DATA PETUGAS RPL - RPL103 | SMK PGRI 2 CIANJUR</h2>
	<br/>
	<a href="tambah.php" class="btn btn-outline-success float-right">+ TAMBAH DATA PETUGAS</a>
	<br/>
	<br/>
	<table class="table table-bordered table-hover shadow">
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">ID Petugas</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Nama Petugas</th>
                            <th class="text-center">Level</th>
                          
                            <th class="text-center">ACTION</th>
                        </tr>
                        <?php foreach ($query as $result): ?>
                            <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center"><?= $result['id_petugas'] ?></td>	
                            <td class="text-center"><?= $result['username'] ?></td>
                            <td class="text-center"><?= $result['nama_petugas'] ?></td>
                            <td class="text-center"><?= $result['level'] ?></td>

                          
                            <td class="text-center">
                                <a href="edit.php?id_petugas=<?php echo $result['id_petugas']; ?>" class="btn btn-sm btn-success mx-1 my-1">Edit</a>
                                <a href="hapus.php?id_petugas=<?= $result['id_petugas']; ?>" class="btn btn-sm btn-danger mx-1 my-1">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </table>
 </div>
	
</body>
</html>

