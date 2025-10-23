<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="container-sm">
<br>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Data Mahasiswa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Data Matakuliah</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">KRS</a>
  </li>
</ul>

<nav class="navbar" style="background-color: #e3f2fd;">
  Input Data Mahasiswa
</nav>

<form class="row g-3" method="POST" action="simpanmhs.php">
  <div class="col-md-6">
    <label for="inputnim" class="form-label">NIM</label>
    <input type="text" class="form-control" name="nim">
  </div>
  <div class="col-md-6">
    <label for="inputnama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="col-12">
    <label for="inputalamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputhp" class="form-label">Nomor HP</label>
    <input type="text" class="form-control" name="nohp">
  </div>
  <div class="col-md-6">
    <label for="inputemail" class="form-label">Email</label>
    <input type="Email" class="form-control" name="email">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>


<br><br>

<nav class="navbar" style="background-color: #e3f2fd;">
  Daftar Mahasiswa
</nav>

<?php
        include "connection.php";

        echo"<table class='table'>";
        echo"<thead><tr><th scope='col'>NO</th><th scope='col'>NIM</th><th scope='col'>NAMA</th><th scope='col'>ALAMAT</th><th scope='col'>NO HP</th><th scope='col'>EMAIL</th><th scope='col'>ACTION</th></tr></thead>";

        $tampil = mysqli_query($conn,"SELECT * FROM mahasiswa");

        $i=1;
        echo"<tbody>";
          while($row=mysqli_fetch_array($tampil)){

        echo"<tr><th scope='row'>" .$i."</th> <td>" . $row["nim"]. "</td> <td>" . $row["nama"]. "</td> <td>" . $row["alamat"]."</td><td>" . $row["nohp"]."</td><td>" . $row["email"]."</td>"; 
        echo"<td><a href='updatemhs.php?id=$row[nim]'>Update</a></td>";
        echo"<td><a href='deletemhs.php?id=$row[nim]'>Hapus</a></td>";

       echo" </tr>";
           $i++;
        }

        echo"</tbody></table>";  

    ?>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</div>

</body>
</html>