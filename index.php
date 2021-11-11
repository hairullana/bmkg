<?php

session_start();

if(!isset($_SESSION["login-bmkg"]) || $_SESSION["login-bmkg"] == false){
  echo "
    <script>
      alert('Anda belum login!')
      location.href = 'login.php'
    </script>
  ";
}


$role = $_SESSION["role"];

require 'conn.php';

$result = mysqli_query($conn, "SELECT * FROM data_bmkg");

if(isset($_POST["search"])){
  $keyword = $_POST['keyword'];
  
  if($_SESSION["role"] == "tu"){
    $result = mysqli_query($conn, "SELECT * FROM data_bmkg WHERE pegawai LIKE '%$keyword%'");
  }else if($_SESSION["role"] == "lab"){
    $result = mysqli_query($conn, "SELECT * FROM data_bmkg WHERE nama_alat LIKE '%$keyword%'");
  }else {
    $result = mysqli_query($conn, "SELECT * FROM data_bmkg WHERE pegawai LIKE '%$keyword%' OR nama_alat LIKE '%$keyword%'");
  }
  // var_dump($result);
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>BMKG</title>
    
    <!-- Custom styles for this template -->
    <link href="src/style.css" rel="stylesheet">



  </head>
  <body>

  <?php require 'navbar.php' ?>
    
<main>
    <div class="container">
        <div class="card">
        <div class="panel panel-default">
            <div class="panel-heading">       
              <div class="mb-4">
              <p>Anda login sebagai <b><?= $_SESSION["role"] ?></b></p>
              </div>      
                <div class="my-3">
                  <form class="d-flex" method="post">
                      <input name="keyword" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button name="search" class="btn btn-outline-success" type="submit">Search</button>
                      <a href="tambah.php" type="button" class="btn btn-primary">Tambah</a>
                  </form>
                </div>
                <?php if(isset($_POST["search"])) : ?>
                <div class="my-3">
                  <h5>Menampilkan hasil pencarian untuk "<i><?= $keyword ?></i>"</h5>
                </div>     
                <?php endif; ?>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama Pegawai</th>
                    <th>Jumlah Peralat</th>
                    <th>Nama Provinsi</th>
                    <th>Jenis ALat</th>
                    <th>Nama Alat</th>
                    <th>Lokasi</th>
                    <th>Kondisi</th>
                    <th>Tanggal Update Terakhir</th>
                    <th>Tanggal Pelaksanaan Kalibrasi Start</th>
                    <th>Petugas Kalibrasi End</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

            <?php $i = 1; ?>
            <?php foreach ($result as $data) : ?>
              <tr class="nw">
                <td><?= $i++; ?></td>
                <td><?= $data["id"] ?></td>
                <td><?= $data["pegawai"] ?></td>
                <td><?= $data["jumlah_peralatan"] ?></td>
                <td><?= $data["provinsi"] ?></td>
                <td><?= $data["jenis_alat"] ?></td>
                <td><?= $data["nama_alat"] ?></td>
                <td><?= $data["lokasi"] ?></td>
                <td><?= $data["kondisi"] ?></td>
                <td><?= $data["tanggal_update"] ?></td>
                <td><?= $data["tanggal_pelaksanaan"] ?></td>
                <td><?= $data["petugas"] ?></td>
                <td>
                  <a href="edit.php?id=<?= $data['id'] ?>" type="button" class="btn btn-warning">Edit</a>
                  <a href="hapus.php?id=<?= $data['id'] ?>" type="button" class="btn btn-danger">Hapus</a>
                  <?php if($role == "admin") : ?>
                  <a href="lihat-sp.php" type="button" class="btn btn-secondary">Lihat SP</a>
                  <a href="lihat-spt.php" type="button" class="btn btn-secondary">Lihat SPT</a>
                  <?php else : ?>
                  <a href="cetak.php" type="button" class="btn btn-secondary">Cetak</a>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>

            </table>
    </div>        
    </div>
</div>
</main>



<?php require 'footer.php' ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>