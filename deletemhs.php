<?php
include "connection.php";

// 1. Mengambil 'id' dari URL (sesuai link di mahasiswa.php)
//    Pengecekan 'isset' dihilangkan sesuai permintaan
$nim = $_GET['id']; 

// 2. Menjalankan query dengan cara LAMA (BERBAHAYA)
//    Variabel $nim langsung dimasukkan ke string query.
mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = '$nim'");

// 3. Redirect kembali
header("Location: mahasiswa.php");
exit();

?>