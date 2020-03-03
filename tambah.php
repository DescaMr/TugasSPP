<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-3">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Tambah Data</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 shadow">
                <form action="tambah_aksi.php" method="post">
                    <div class="form-group">
                        <label for="id_petugas">ID Petugas :</label>
                        <input type="text" class="form-control" id="id_petugas" name="id_petugas" placeholder="Isi id petugas" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username :</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Isi username">
                    </div>
                    <div class="form-group">
                        <label for="nama_petugas">Nama Petugas :</label>
                        <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Isi nama petugas" required>
                    </div>
                    <div class="form-group">
                        <label for="level">Level :</label>
                        <select name="level">
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-sm btn-success btn-block">Kirim</button>
                        <A href="index.php" class="btn btn-sm btn-outline-primary btn-block mb-3">Kembali</A>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>