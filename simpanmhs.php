<?php 

include "connection.php";


$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$query=mysqli_query($conn,"insert into mahasiswa (nim,nama, alamat, nohp, email) values ( " .$nim." , ' ".$nama." ', ' ".$alamat." ', '".$nohp." ', ' ".$email."')");
mysqli_close($conn);

header("location:mahasiswa.php");

?>