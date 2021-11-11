<?php

session_start();

if (!isset($_SESSION["login-bmkg"]) || $_SESSION["login-bmkg"] == false) {
    echo "
        <script>
            alert('Anda belum login!')
            location.href = 'login.php'
        </script>
    ";
}

require 'conn.php';

$id = $_GET["id"];

$result = mysqli_query($conn, "SELECT * FROM data_bmkg WHERE id = $id");
$data = mysqli_fetch_assoc($result);


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
<title>Ubah Data | BMKG</title>
<!-- Custom styles for this template -->
<link href="src/style.css" rel="stylesheet">
</head>
<body>
<?php require 'navbar.php' ?>

<div class="container">
    <p class="header-tambah">Edit Data</p>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nama Pegawai</label>
            <input value="<?= $data['pegawai'] ?>" name="pegawai" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Nama Pegawai">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Jumlah Peralat</label>
            <input value="<?= $data['jumlah_peralatan'] ?>" name="jumlah_peralatan" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Jumlah Peralat">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nama Provinsi</label>
            <input value="<?= $data['provinsi'] ?>" name="provinsi" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Nama Provinsi">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Jenis Alat</label>
            <input value="<?= $data['jenis_alat'] ?>" name="jenis_alat" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Jenis Alat">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nama Alat</label>
            <input value="<?= $data['nama_alat'] ?>" name="nama_alat" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Nama Alat">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nama Lokasi</label>
            <input value="<?= $data['lokasi'] ?>" name="lokasi" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Nama Lokasi">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nama Kondisi</label>
            <input value="<?= $data['kondisi'] ?>" name="kondisi" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Nama Kondisi">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tanggal Update Terakhir</label>
            <input value="<?= $data['tanggal_update'] ?>" name="tanggal_update" type="date" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Tanggal Update Terakhir">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Tanggal Pelaksanaan Kalibrasi Start  </label>
            <input value="<?= $data['tanggal_pelaksanaan'] ?>" name="tanggal_pelaksanaan" type="date" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Tanggal Pelaksanaan Kalibrasi Start">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Petugas Kalibrasi End</label>
            <input value="<?= $data['petugas'] ?>" name="petugas" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Petugas Kalibrasi End">
        </div>
        <a href="index.php" class="btn btn-danger tambah" type="button">Kembali</a>
        <button name="tambah" class="btn btn-warning tambah" type="submit">Submit</button>
    </form>
</div>

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

<?php

if(isset($_POST["tambah"])) {
    $pegawai = htmlspecialchars($_POST["pegawai"]);
    $jumlah_peralatan = htmlspecialchars($_POST["jumlah_peralatan"]);
    $provinsi = htmlspecialchars($_POST["provinsi"]);
    $jenis_alat = htmlspecialchars($_POST["jenis_alat"]);
    $nama_alat = htmlspecialchars($_POST["nama_alat"]);
    $lokasi = htmlspecialchars($_POST["lokasi"]);
    $kondisi = htmlspecialchars($_POST["kondisi"]);
    $tanggal_update = htmlspecialchars($_POST["tanggal_update"]);
    $tanggal_pelaksanaan = htmlspecialchars($_POST["tanggal_pelaksanaan"]);
    $petugas = htmlspecialchars($_POST["petugas"]);

    mysqli_query($conn, "UPDATE data_bmkg SET
        pegawai = '$pegawai',
        jumlah_peralatan = '$jumlah_peralatan',
        provinsi = '$provinsi',
        jenis_alat = '$jenis_alat',
        nama_alat = '$nama_alat',
        lokasi = '$lokasi',
        kondisi = '$kondisi',
        tanggal_update = '$tanggal_update',
        tanggal_pelaksanaan = '$tanggal_pelaksanaan',
        petugas = '$petugas'
        WHERE id = $id
        ");

    if (mysqli_affected_rows($conn) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah');
                location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('".mysqli_error($conn)."');
            </script>
        ";
    }
}