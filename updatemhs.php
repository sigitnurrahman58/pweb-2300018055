<?php
include "connection.php";

if (isset($_POST['update'])) {
    
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    $result = mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', nohp='$nohp', email='$email' WHERE nim='$nim'");

    header("Location: mahasiswa.php?status=updatesuccess");
    exit(); 
}

$nim = ""; $nama = ""; $alamat = ""; $nohp = ""; $email = "";

if (isset($_GET['id'])) {
    $id_from_url = $_GET['id'];

    $result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$id_from_url'");
    
    if ($user_data = mysqli_fetch_array($result)) {
        $nim = $user_data['nim'];
        $nama = $user_data['nama'];
        $alamat = $user_data['alamat'];
        $nohp = $user_data['nohp'];
        $email = $user_data['email'];
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan di URL.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container-sm">
<br>
<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link" href="mahasiswa.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="mahasiswa.php">Data Mahasiswa</a>
    </li>
</ul>

<nav class="navbar" style="background-color: #e3f2fd;">
    Edit Data Mahasiswa
</nav>
<br>

<form class="row g-3" method="POST" action="">
    <div class="col-md-6">
        <label for="inputnim" class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim" value="<?php echo htmlspecialchars($nim); ?>" readonly>
    </div>
    <div class="col-md-6">
        <label for="inputnama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
    </div>
    <div class="col-12">
        <label for="inputalamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo htmlspecialchars($alamat); ?>">
    </div>
    <div class="col-md-6">
        <label for="inputhp" class="form-label">Nomor HP</label>
        <input type="text" class="form-control" name="nohp" value="<?php echo htmlspecialchars($nohp); ?>">
    </div>
    <div class="col-md-6">
        <label for="inputemail" class="form-label">Email</label>
        <input type="Email" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>">
    </div>
    
    <div class="col-12">
        <button type="submit" name="update" class="btn btn-primary">Update Data</button>
        <a href="mahasiswa.php" class="btn btn-secondary">Batal</a>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</div>
</body>
</html>