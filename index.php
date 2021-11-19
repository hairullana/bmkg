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

  <?php require 'templates/navbar.php' ?>
    
<main>
    <div class="container">
        <div class="card">
        <div class="panel panel-default">
            <div class="panel-heading">       
              <div class="mb-4">
              <p>Anda login sebagai <b><?= $_SESSION["role"] ?></b></p>
              <div class="my-3">
                <?php if($role == "admin") : ?>
                <a href="spt.php" type="button" class="btn btn-primary">Cetak SPT</a>
                <a href="nota-dinas.php" type="button" class="btn btn-primary">Cetak Nota Dinas</a>
                <a href="laporan-akhir.php" type="button" class="btn btn-primary">Cetak Laporan Akhir</a>
                <?php elseif ($role == "lab") : ?>
                <a href="nota-dinas.php" type="button" class="btn btn-primary">Cetak Nota Dinas</a>
                <?php elseif ($role == "tu") : ?>
                <a href="spt.php" type="button" class="btn btn-primary">Cetak SPT</a>
                <a href="laporan-akhir.php" type="button" class="btn btn-primary">Cetak Laporan Akhir</a>
                <?php endif; ?>
              </div>
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





        <?php if($_SESSION['role'] == "admin") :  ?>

        <!-- SPT -->
        <div class="my-3">
          <h3>Data SPT</h3>
          <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>No Tugas</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Golongan</th>
                    <th>Print</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $i = 1; 
            $spt = mysqli_query($conn, 'SELECT * FROM spt');
            ?>
            <?php foreach ($spt as $data) : ?>
              <tr class="nw">
                <td><?= $i++; ?></td>
                <td><?= $data["no-tugas"] ?></td>
                <td><?= $data["nama"] ?></td>
                <td><?= $data["nip"] ?></td>
                <td><?= $data["gol"] ?></td>
                <td>
                  <form action="print.php" method="post">
                    <input type="hidden" name="no-tugas" value="<?= $data['no-tugas'] ?>">
                    <input type="hidden" name="nama" value="<?= $data['nama'] ?>">
                    <input type="hidden" name="nip" value="<?= $data['nip'] ?>">
                    <input type="hidden" name="gol" value="<?= $data['gol'] ?>">
                    <input type="hidden" name="jabatan-utama" value="<?= $data['jabatan-utama'] ?>">
                    <input type="hidden" name="unit-kerja" value="<?= $data['unit-kerja'] ?>">
                    <input type="hidden" name="nama1" value="<?= $data['nama1'] ?>">
                    <input type="hidden" name="nip1" value="<?= $data['nip1'] ?>">
                    <input type="hidden" name="gol1" value="<?= $data['gol1'] ?>">
                    <input type="hidden" name="jabatan1" value="<?= $data['jabatan1'] ?>">
                    <input type="hidden" name="nama2" value="<?= $data['nama2'] ?>">
                    <input type="hidden" name="nip2" value="<?= $data['nip2'] ?>">
                    <input type="hidden" name="gol2" value="<?= $data['gol2'] ?>">
                    <input type="hidden" name="jabatan2" value="<?= $data['jabatan2'] ?>">
                    <input type="hidden" name="tugas" value="<?= $data['tugas'] ?>">
                    <input type="hidden" name="lokasi" value="<?= $data['lokasi'] ?>">
                    <input type="hidden" name="lama" value="<?= $data['lama'] ?>">
                    <input type="hidden" name="tanggal-berangkat" value="<?= $data['tanggal-berangkat'] ?>">
                    <input type="hidden" name="dana" value="<?= $data['dana'] ?>">
                    <input type="hidden" name="dont-save-db" value="0">
                    
                    <button class="btn btn-primary" type="submit" name="cetak-spt">Cetak</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>

            </table>
        </div>
        




        <!-- NOTA -->
        <div class="my-3">
          <h3>Data NOTA DINAS</h3>
          <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>No Nota</th>
                    <th>Hal</th>
                    <th>Tanggal</th>
                    <th>Tembusan</th>
                    <th>Print</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $i = 1; 
            $nota = mysqli_query($conn, 'SELECT * FROM nota');
            ?>
            <?php foreach ($nota as $data) : ?>
              <tr class="nw">
                <td><?= $i++; ?></td>
                <td><?= $data["nomor"] ?></td>
                <td><?= $data["hal"] ?></td>
                <td><?= $data["tanggal"] ?></td>
                <td><?= $data["tembusan"] ?></td>
                <td>
                  <form action="print.php" method="post">
                    <input type="hidden" name="nomor" value="<?= $data['nomor'] ?>">
                    <input type="hidden" name="yth" value="<?= $data['yth'] ?>">
                    <input type="hidden" name="dari" value="<?= $data['dari'] ?>">
                    <input type="hidden" name="hal" value="<?= $data['hal'] ?>">
                    <input type="hidden" name="tembusan" value="<?= $data['tembusan'] ?>">
                    <input type="hidden" name="tugas" value="<?= $data['tugas'] ?>">
                    <input type="hidden" name="lokasi" value="<?= $data['lokasi'] ?>">
                    <input type="hidden" name="selama" value="<?= $data['selama'] ?>">
                    <input type="hidden" name="tanggal-berangkat" value="<?= $data['tanggal-berangkat'] ?>">
                    <input type="hidden" name="tanggal-kembali" value="<?= $data['tanggal-kembali'] ?>">
                    <input type="hidden" name="sumber-dana" value="<?= $data['sumber-dana'] ?>">
                    <input type="hidden" name="nama" value="<?= $data['nama'] ?>">
                    <input type="hidden" name="nip" value="<?= $data['nip'] ?>">
                    <input type="hidden" name="pangkat" value="<?= $data['pangkat'] ?>">
                    <input type="hidden" name="jabatan" value="<?= $data['jabatan'] ?>">
                    <input type="hidden" name="nama2" value="<?= $data['nama2'] ?>">
                    <input type="hidden" name="nip2" value="<?= $data['nip2'] ?>">
                    <input type="hidden" name="pangkat2" value="<?= $data['pangkat2'] ?>">
                    <input type="hidden" name="jabatan2" value="<?= $data['jabatan2'] ?>">
                    <input type="hidden" name="nama3" value="<?= $data['nama3'] ?>">
                    <input type="hidden" name="nip3" value="<?= $data['nip3'] ?>">
                    <input type="hidden" name="pangkat3" value="<?= $data['pangkat3'] ?>">
                    <input type="hidden" name="jabatan3" value="<?= $data['jabatan3'] ?>">
                    <input type="hidden" name="dont-save-db" value="0">
                    
                    <button class="btn btn-primary" type="submit" name="cetak-nota">Cetak</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>

            </table>
        </div>




        <!-- LAPORAN -->
        <div class="my-3">
          <h3>Data LAPORAN AKHIR</h3>
          <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>Periode Tanggal</th>
                    <th>Kegiatan</th>
                    <th>Lokasi</th>
                    <th>Print</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $i = 1; 
            $laporan = mysqli_query($conn, 'SELECT * FROM laporan');
            ?>
            <?php foreach ($laporan as $data) : ?>
              <tr class="nw">
                <td><?= $i++; ?></td>
                <td><?= $data["periode-tanggal"] ?></td>
                <td><?= $data["judul-kegiatan"] ?></td>
                <td><?= $data["lokasi"] ?></td>
                <td>
                  <form action="print.php" method="post">
                    <input type="hidden" name="periode-tanggal" value="<?= $data['periode-tanggal'] ?>">
                    <input type="hidden" name="judul-kegiatan" value="<?= $data['judul-kegiatan'] ?>">
                    <input type="hidden" name="pendahuluan" value="<?= $data['pendahuluan'] ?>">
                    <input type="hidden" name="pelaksana" value="<?= $data['pelaksana'] ?>">
                    <input type="hidden" name="dasar-kegiatan" value="<?= $data['dasar-kegiatan'] ?>">
                    <input type="hidden" name="lokasi" value="<?= $data['lokasi'] ?>">
                    <input type="hidden" name="lingkup-kegiatan" value="<?= $data['lingkup-kegiatan'] ?>">
                    <input type="hidden" name="hasil" value="<?= $data['hasil'] ?>">
                    <input type="hidden" name="rekomendasi" value="<?= $data['rekomendasi'] ?>">
                    <input type="hidden" name="foto" value="<?= $data['foto'] ?>">
                    <input type="hidden" name="keterangan-foto" value="<?= $data['keterangan-foto'] ?>">
                    <input type="hidden" name="dont-save-db" value="0">
                    
                    <button class="btn btn-primary" type="submit" name="cetak-laporan">Cetak</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>

            </table>
        </div>

        <?php elseif($_SESSION['role'] == "tu") : ?>
          <!-- SPT -->
        <div class="my-3">
          <h3>Data SPT</h3>
          <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>No Tugas</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Golongan</th>
                    <th>Print</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $i = 1; 
            $spt = mysqli_query($conn, 'SELECT * FROM spt');
            ?>
            <?php foreach ($spt as $data) : ?>
              <tr class="nw">
                <td><?= $i++; ?></td>
                <td><?= $data["no-tugas"] ?></td>
                <td><?= $data["nama"] ?></td>
                <td><?= $data["nip"] ?></td>
                <td><?= $data["gol"] ?></td>
                <td>
                  <form action="print.php" method="post">
                    <input type="hidden" name="no-tugas" value="<?= $data['no-tugas'] ?>">
                    <input type="hidden" name="nama" value="<?= $data['nama'] ?>">
                    <input type="hidden" name="nip" value="<?= $data['nip'] ?>">
                    <input type="hidden" name="gol" value="<?= $data['gol'] ?>">
                    <input type="hidden" name="jabatan-utama" value="<?= $data['jabatan-utama'] ?>">
                    <input type="hidden" name="unit-kerja" value="<?= $data['unit-kerja'] ?>">
                    <input type="hidden" name="nama1" value="<?= $data['nama1'] ?>">
                    <input type="hidden" name="nip1" value="<?= $data['nip1'] ?>">
                    <input type="hidden" name="gol1" value="<?= $data['gol1'] ?>">
                    <input type="hidden" name="jabatan1" value="<?= $data['jabatan1'] ?>">
                    <input type="hidden" name="nama2" value="<?= $data['nama2'] ?>">
                    <input type="hidden" name="nip2" value="<?= $data['nip2'] ?>">
                    <input type="hidden" name="gol2" value="<?= $data['gol2'] ?>">
                    <input type="hidden" name="jabatan2" value="<?= $data['jabatan2'] ?>">
                    <input type="hidden" name="tugas" value="<?= $data['tugas'] ?>">
                    <input type="hidden" name="lokasi" value="<?= $data['lokasi'] ?>">
                    <input type="hidden" name="lama" value="<?= $data['lama'] ?>">
                    <input type="hidden" name="tanggal-berangkat" value="<?= $data['tanggal-berangkat'] ?>">
                    <input type="hidden" name="dana" value="<?= $data['dana'] ?>">
                    <input type="hidden" name="dont-save-db" value="0">
                    
                    <button class="btn btn-primary" type="submit" name="cetak-spt">Cetak</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>

            </table>
        </div>

        <!-- LAPORAN -->
        <div class="my-3">
          <h3>Data LAPORAN AKHIR</h3>
          <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>Periode Tanggal</th>
                    <th>Kegiatan</th>
                    <th>Lokasi</th>
                    <th>Print</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $i = 1; 
            $laporan = mysqli_query($conn, 'SELECT * FROM laporan');
            ?>
            <?php foreach ($laporan as $data) : ?>
              <tr class="nw">
                <td><?= $i++; ?></td>
                <td><?= $data["periode-tanggal"] ?></td>
                <td><?= $data["judul-kegiatan"] ?></td>
                <td><?= $data["lokasi"] ?></td>
                <td>
                  <form action="print.php" method="post">
                    <input type="hidden" name="periode-tanggal" value="<?= $data['periode-tanggal'] ?>">
                    <input type="hidden" name="judul-kegiatan" value="<?= $data['judul-kegiatan'] ?>">
                    <input type="hidden" name="pendahuluan" value="<?= $data['pendahuluan'] ?>">
                    <input type="hidden" name="pelaksana" value="<?= $data['pelaksana'] ?>">
                    <input type="hidden" name="dasar-kegiatan" value="<?= $data['dasar-kegiatan'] ?>">
                    <input type="hidden" name="lokasi" value="<?= $data['lokasi'] ?>">
                    <input type="hidden" name="lingkup-kegiatan" value="<?= $data['lingkup-kegiatan'] ?>">
                    <input type="hidden" name="hasil" value="<?= $data['hasil'] ?>">
                    <input type="hidden" name="rekomendasi" value="<?= $data['rekomendasi'] ?>">
                    <input type="hidden" name="foto" value="<?= $data['foto'] ?>">
                    <input type="hidden" name="keterangan-foto" value="<?= $data['keterangan-foto'] ?>">
                    <input type="hidden" name="dont-save-db" value="0">
                    
                    <button class="btn btn-primary" type="submit" name="cetak-laporan">Cetak</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>

            </table>
        </div>

        <?php else : ?>

          <!-- NOTA -->
        <div class="my-3">
          <h3>Data NOTA DINAS</h3>
          <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="nw">
                    <th>No</th>
                    <th>No Nota</th>
                    <th>Hal</th>
                    <th>Tanggal</th>
                    <th>Tembusan</th>
                    <th>Print</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $i = 1; 
            $nota = mysqli_query($conn, 'SELECT * FROM nota');
            ?>
            <?php foreach ($nota as $data) : ?>
              <tr class="nw">
                <td><?= $i++; ?></td>
                <td><?= $data["nomor"] ?></td>
                <td><?= $data["hal"] ?></td>
                <td><?= $data["tanggal"] ?></td>
                <td><?= $data["tembusan"] ?></td>
                <td>
                  <form action="print.php" method="post">
                    <input type="hidden" name="nomor" value="<?= $data['nomor'] ?>">
                    <input type="hidden" name="yth" value="<?= $data['yth'] ?>">
                    <input type="hidden" name="dari" value="<?= $data['dari'] ?>">
                    <input type="hidden" name="hal" value="<?= $data['hal'] ?>">
                    <input type="hidden" name="tembusan" value="<?= $data['tembusan'] ?>">
                    <input type="hidden" name="tugas" value="<?= $data['tugas'] ?>">
                    <input type="hidden" name="lokasi" value="<?= $data['lokasi'] ?>">
                    <input type="hidden" name="selama" value="<?= $data['selama'] ?>">
                    <input type="hidden" name="tanggal-berangkat" value="<?= $data['tanggal-berangkat'] ?>">
                    <input type="hidden" name="tanggal-kembali" value="<?= $data['tanggal-kembali'] ?>">
                    <input type="hidden" name="sumber-dana" value="<?= $data['sumber-dana'] ?>">
                    <input type="hidden" name="nama" value="<?= $data['nama'] ?>">
                    <input type="hidden" name="nip" value="<?= $data['nip'] ?>">
                    <input type="hidden" name="pangkat" value="<?= $data['pangkat'] ?>">
                    <input type="hidden" name="jabatan" value="<?= $data['jabatan'] ?>">
                    <input type="hidden" name="nama2" value="<?= $data['nama2'] ?>">
                    <input type="hidden" name="nip2" value="<?= $data['nip2'] ?>">
                    <input type="hidden" name="pangkat2" value="<?= $data['pangkat2'] ?>">
                    <input type="hidden" name="jabatan2" value="<?= $data['jabatan2'] ?>">
                    <input type="hidden" name="nama3" value="<?= $data['nama3'] ?>">
                    <input type="hidden" name="nip3" value="<?= $data['nip3'] ?>">
                    <input type="hidden" name="pangkat3" value="<?= $data['pangkat3'] ?>">
                    <input type="hidden" name="jabatan3" value="<?= $data['jabatan3'] ?>">
                    <input type="hidden" name="dont-save-db" value="0">
                    
                    <button class="btn btn-primary" type="submit" name="cetak-nota">Cetak</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>

            </table>
        </div>
        <?php endif; ?>
        


        <!-- DATA LAIN -->
        <div class="table-responsive my-3">
          <h3>DATA ALAT</h3>
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
                  <!-- <?php if($role == "admin") : ?>
                  <a href="lihat-sp.php" type="button" class="btn btn-secondary">Lihat SP</a>
                  <a href="lihat-spt.php" type="button" class="btn btn-secondary">Lihat SPT</a>
                  <?php else : ?>
                  <a href="cetak.php" type="button" class="btn btn-secondary">Cetak</a>
                  <?php endif; ?> -->
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>

            </table>
    </div>        
    </div>
</div>
</main>



<?php require 'templates/footer.php' ?>
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