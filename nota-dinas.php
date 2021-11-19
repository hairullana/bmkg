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

if($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'lab'){
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
        <div class="col-md-8">

            <form action="print.php" method="post">

                <p class="header-tambah">Cetak Nota Dinas</p>
                <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor</label>
                    <input required name="nomor" type="text" class="form-control" id="nomor" placeholder="Nomor">
                </div>
                <div class="mb-3">
                    <label for="yth" class="form-label">Yth</label>
                    <input required name="yth" type="text" class="form-control" id="yth" placeholder="Yth">
                </div>
                <div class="mb-3">
                    <label for="dari" class="form-label">Dari</label>
                    <input required name="dari" type="text" class="form-control" id="dari" placeholder="Dari">
                </div>
                <div class="mb-3">
                    <label for="hal" class="form-label">Hal</label>
                    <input required name="hal" type="text" class="form-control" id="hal" placeholder="Hal">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input required name="tanggal" type="text" class="form-control" id="tanggal" placeholder="Tanggal">
                </div>
                <div class="mb-3">
                    <label for="tembusan" class="form-label">Tembusan</label>
                    <input required name="tembusan" type="text" class="form-control" id="tembusan" placeholder="Tembusan">
                </div>
            
                <p class="header-secondary">1</p>
                <div class="mb-3">
                    <label for="tugas" class="form-label">Tugas</label>
                    <input required name="tugas" type="text" class="form-control" id="tugas" placeholder="Tugas">
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">lokasi</label>
                    <input required name="lokasi" type="text" class="form-control" id="lokasi" placeholder="lokasi">
                </div>
                <div class="mb-3">
                    <label for="selama" class="form-label">Selama</label>
                    <input required name="selama" type="text" class="form-control" id="selama" placeholder="Selama">
                </div>
                <div class="mb-3">
                    <label for="tanggal-berangkat" class="form-label">Tanggal Berangkat</label>
                    <input required name="tanggal-berangkat" type="text" class="form-control" id="tanggal-berangkat" placeholder="Tanggal Berangkat">
                </div>
                
                <div class="mb-3">
                    <label for="tanggal-kembali" class="form-label">Tanggal Kembali</label>
                    <input required name="tanggal-kembali" type="text" class="form-control" id="tanggal-kembali" placeholder="Tanggal Kembalu">
                </div>
                <div class="mb-3">
                    <label for="sumber-dana" class="form-label">Sumber Dana</label>
                    <input required name="sumber-dana" type="text" class="form-control" id="sumber-dana" placeholder="Sumber Dana">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input required name="nama" type="text" class="form-control" id="nama" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input required name="nip" type="text" class="form-control" id="nip" placeholder="NIP">
                </div>
                <div class="mb-3">
                    <label for="pangkat" class="form-label">Pangkat/Gol </label>
                    <input required name="pangkat" type="text" class="form-control" id="pangkat" placeholder="Pangkat/Gol">
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan </label>
                    <input required name="jabatan" type="text" class="form-control" id="jabatan" placeholder="Jabatan">
                </div>
            
                <div class="mb-3">
                    <label for="nama2" class="form-label">Nama</label>
                    <input required name="nama2" type="text" class="form-control" id="nama2" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <label for="nip2" class="form-label">NIP</label>
                    <input required name="nip2" type="text" class="form-control" id="nip2" placeholder="NIP">
                </div>
                <div class="mb-3">
                    <label for="pangkat2" class="form-label">Pangkat/Gol </label>
                    <input required name="pangkat2" type="text" class="form-control" id="pangkat2" placeholder="Pangkat/Gol">
                </div>
                <div class="mb-3">
                    <label for="jabatan2" class="form-label">Jabatan </label>
                    <input required name="jabatan2" type="text" class="form-control" id="jabatan2" placeholder="Jabatan">
                </div>
            
                <div class="mb-3">
                    <label for="nama3" class="form-label">Nama</label>
                    <input required name="nama3" type="text" class="form-control" id="nama3" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <label for="nip3" class="form-label">NIP</label>
                    <input required name="nip3" type="text" class="form-control" id="nip3" placeholder="NIP">
                </div>
                <div class="mb-3">
                    <label for="pangkat3" class="form-label">Pangkat/Gol </label>
                    <input required name="pangkat3" type="text" class="form-control" id="pangkat3" placeholder="Pangkat/Gol">
                </div>
                <div class="mb-3">
                    <label for="jabatan3" class="form-label">Jabatan </label>
                    <input required name="jabatan3" type="text" class="form-control" id="jabatan3" placeholder="Jabatan">
                </div>
            
               
                <a href="index.php" class="btn btn-danger tambah" type="submit">Kembali</a>
                <button class="btn btn-warning tambah" type="submit" name="cetak-nota">Cetak Laporan</button>
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