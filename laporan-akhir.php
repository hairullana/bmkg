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

if($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'tu'){
  echo "
    <script>
      alert('Akses ditolak!')
      location.href = 'index.php'
    </script>
  ";
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
<?php require 'templates/navbar.php' ?>

<div class="container">
    <p class="header-tambah">Laporan Akhir</p>

    <form action="print.php" method="post" enctype="multipart/form-data">

      <div class="row">

        <div class="col-md-12">
          <div class="mb-3">
              <label for="periode-tanggal" class="form-label header-secondary">Masukan Periode Tanggal</label>
              <input required type="text" class="form-control" id="periode-tanggal" name="periode-tanggal" placeholder="Periode Kegiatan">
          </div>
        </div>
    
        <p class="header-secondary">Kegiatan</p>
        <div class="form-floating">
            <textarea name="judul-kegiatan" required class="form-control" placeholder="Leave a comment here" id="judul-kegiatan" style="height: 100px"></textarea>
            <label for="judul-kegiatan">Judul Kegiatan</label>
        </div>
    
        <p class="header-secondary">Pendahuluan</p>
        <div class="form-floating">
            <textarea name="pendahuluan" required class="form-control" placeholder="Leave a comment here" id="pendahuluan" style="height: 200px"></textarea>
            <label for="pendahuluan">Pendahuluan</label>
        </div>
    
        <p class="header-secondary">PELAKSANA/ PESERTA</p>
        <div class="form-floating">
            <textarea name="pelaksana" required class="form-control" placeholder="Leave a comment here" id="pelaksana" style="height: 100px"></textarea>
            <label for="pelaksana">PELAKSANA/ PESERTA</label>
        </div>
    
    
        <p class="header-secondary">DASAR KEGIATAN</p>
        <div class="form-floating">
            <textarea name="dasar-kegiatan" required class="form-control" placeholder="Leave a comment here" id="dasar-kegiatan" style="height: 100px"></textarea>
            <label for="dasar-kegiatan">DASAR KEGIATAN</label>
        </div>
    
    
        <p class="header-secondary">LOKASI </p>
        <div class="form-floating">
            <textarea name="lokasi" required class="form-control" placeholder="Leave a comment here" id="lokasi" style="height: 100px"></textarea>
            <label for="lokasi">LOKASI </label>
        </div>
    
        <p class="header-secondary">LINGKUP KEGIATAN </p>
        <div class="form-floating">
            <textarea name="lingkup-kegiatan" required class="form-control" placeholder="Leave a comment here" id="lingkup-kegiatan" style="height: 400px"></textarea>
            <label for="lingkup-kegiatan">LINGKUP KEGIATAN </label>
        </div>
    
    
        <p class="header-secondary">Hasil</p>
        <div class="form-floating">
            <textarea name="hasil" required class="form-control" placeholder="Leave a comment here" id="hasil" style="height: 200px"></textarea>
            <label for="hasil">HASIL</label>
        </div>
    
        <p class="header-secondary">REKOMENDASI</p>
        <div class="form-floating">
            <textarea name="rekomendasi" required class="form-control" placeholder="Leave a comment here" id="rekomendasi" style="height: 200px"></textarea>
            <label for="rekomendasi">REKOMENDASI</label>
        </div>
        
    
        <div class="input-group mb-3" style="margin-top: 20px;">
            <input type="file" name="foto" id="foto" class="form-control">
        </div>
  
        <p class="header-secondary">Keterangan Foto</p>
        <div class="form-floating">
            <textarea name="keterangan-foto" required class="form-control" placeholder="Leave a comment here" id="keterangan-foto" style="height: 200px"></textarea>
            <label for="keterangan-foto">Keterangan Foto</label>
        </div>
  
        <div class="mb-3">
            <label for="penyusunLaporan1" class="form-label header-secondary">Penyusun Laporan</label>
  
            <!-- Input Penyusun Laporan -->
            <div class="row">
              <!-- Penyusun 1 -->
              <div class="col-4">
                <input required type="text" class="form-control" id="penyusunLaporan1" name="penyusunLaporan1" placeholder="Nama Penyusun Laporan 1">
              </div>
              <!-- Penyusun 2 -->
              <div class="col-4">
                <input required type="text" class="form-control" id="penyusunLaporan2" name="penyusunLaporan2" placeholder="Nama Penyusun Laporan 2">
              </div>
              <!-- Penyusun 3 -->
              <div class="col-4">
                <input required type="text" class="form-control" id="penyusunLaporan3" name="penyusunLaporan3" placeholder="Nama Penyusun Laporan 3">
              </div>
            </div>
        </div>
    
        <div class="col">
          <div class="row justify-content-center">
            <div class="col">
              <a href="index.php" class="btn btn-danger tambah" type="submit">Kembali</a>
              <button class="btn btn-warning tambah" type="submit" name="cetak-laporan">Cetak Laporan</button>
            </div>
          </div>
        </div>
      </div>
      
    </form>
    
</div>

<?= require 'templates/footer.php' ?>

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