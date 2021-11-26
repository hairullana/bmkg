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
  <div class="row justify-content-center">

    <div class="col">
      <p class="header-tambah">Cetak SPT</p>
      <p class="header-secondary">Yang bertandatangan dibawah ini :</p>
      <form action="print.php" method="post">
        <div class="row justify-content-center">

          <div class="col-md-4 mb-3">
              <label for="no-tugas" class="form-label">No Tugas</label>
              <input required type="text" class="form-control" id="no-tugas" name="no-tugas" placeholder="No Tugas">
          </div>
          <div class="col-md-4 mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input required type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
          </div>
          <div class="col-md-4 mb-3">
              <label for="nip" class="form-label">NIP</label>
              <input required type="text" class="form-control" id="nip" name="nip" placeholder="NIP">
          </div>
          <div class="col-md-4 mb-3">
              <label for="gol" class="form-label">Pangkat/Golongan</label>
              <input required type="text" class="form-control" id="gol" name="gol" placeholder="Pangkat/Golongan">
          </div>
          <div class="col-md-4 mb-3">
              <label for="jabatan-utama" class="form-label">Jabatan</label>
              <input required type="text" class="form-control" id="jabatan-utama" name="jabatan-utama" placeholder="Jabatan">
          </div>
          <div class="col-md-4 mb-3">
              <label for="unit-kerja" class="form-label">Unit kerja</label>
              <input required type="text" class="form-control" id="unit-kerja" name="unit-kerja" placeholder="Unit Kerja">
          </div>
      
          <p class="header-secondary">Dengan ini memberikan tugas kepada :</p>
          <p class="header-secondary">1</p>
          <div class="col-md-6 mb-3">
              <label for="nama1" class="form-label">Nama</label>
              <input required type="text" class="form-control" id="nama1" name="nama1" placeholder="Nama">
          </div>
          <div class="col-md-6 mb-3">
              <label for="nip1" class="form-label">NIP</label>
              <input required type="text" class="form-control" id="nip1" name="nip1" placeholder="NIP">
          </div>
          <div class="col-md-6 mb-3">
              <label for="gol1" class="form-label">Pangkat/ Golongan</label>
              <input required name="gol1" type="text" class="form-control" id="gol1" placeholder="Pangkat/Golongan">
          </div>
          <div class="col-md-6 mb-3">
              <label for="jabatan1" class="form-label">Jabatan</label>
              <input required type="text" class="form-control" id="jabatan1" name="jabatan1" placeholder="Jabatan">
          </div>
      
          <p class="header-secondary">2</p>
          <div class="col-md-6 mb-3">
              <label for="nama2" class="form-label">Nama</label>
              <input required type="text" class="form-control" id="nama2" name="nama2" placeholder="Nama">
          </div>
          <div class="col-md-6 mb-3">
              <label for="nip2" class="form-label">NIP</label>
              <input required type="text" class="form-control" id="nip2" name="nip2" placeholder="NIP">
          </div>
          <div class="col-md-6 mb-3">
              <label for="gol2" class="form-label">Pangkat/ Golongan</label>
              <input required type="text" class="form-control" id="gol2" name="gol2" placeholder="Pangkat/Golongan">
          </div>
          <div class="col-md-6 mb-3">
              <label for="jabatan2" class="form-label">Jabatan</label>
              <input required type="text" class="form-control" id="jabatan2" name="jabatan2" placeholder="Jabatan">
          </div>
      
          <p class="header-secondary">Untuk Melaksanakan</p>
      
          <div class="col-md-6 mb-3">
              <label for="tugas" class="form-label">Tugas</label>
              <input required type="text" class="form-control" id="tugas"  name="tugas" placeholder="Tugas">
          </div>
          <div class="col-md-6 mb-3">
            <label for="lama" class="form-label">Selama</label>
            <input required type="text" class="form-control" id="lama" name="lama" placeholder="Selama">
          </div>
          <div class="col-md-6 mb-3">
            <label for="tanggal-berangkat" class="form-label">Tanggal Berangkat</label>
            <input required type="text" class="form-control" id="tanggal-berangkat" name="tanggal-berangkat" placeholder="Tanggal Berangkat">
          </div>
          <div class="col-md-6 mb-3">
            <label for="dana" class="form-label">Sumber Dana</label>
            <input required type="text" class="form-control" id="dana" name="dana" placeholder="Sumber Dana">
          </div>
          <div class="col-md-12 mb-3">
            <label for="lokasi">Lokasi</label>
            <textarea name="lokasi" required class="form-control" placeholder="Lokasi" id="lokasi" style="height: 100px"></textarea>
          </div>
          <div class="col">
            <div class="row justify-content-center">
              <div class="col">
                <button class="btn btn-warning tambah" type="submit" name="cetak-spt">Cetak Laporan</button>
                <a href="index.php" class="btn btn-danger tambah" type="submit">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
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