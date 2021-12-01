<?php

require 'conn.php';


if(!isset($_POST['dont-save-db'])){
  // var_dump($_FILES);die;
  $ukuranFile = $_FILES["foto"]["size"];
  $temp = $_FILES["foto"]["tmp_name"];
  $namaFile = $_FILES["foto"]["name"];
  $error = $_FILES["foto"]["error"];

  //CEK apakah gambar di upload ada gak
  if ( $error == 4 ) {
      echo "
      <script>
          alert('Silahkan inputkan gambar !');
          // document.location.href = 'laporan-akhir.php';
      </script>
      ";
      return false;
  }

  //cek apakah file adalah gambar
  $ekstensiGambarValid = ['jpg','jpeg','png'];
  // explode = memecah string menjadi array (dg pemisah delimiter)
  $ekstensiGambar = explode('.',$namaFile);
  //mengambil ekstensi gambar yg paling belakang dg strltolower (mengecilkan semua huruf)
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  //CEK $ekstensiGambar ada di array $ekstensiGambarValid
  if ( !in_array($ekstensiGambar,$ekstensiGambarValid) ){
      echo "
          <script>
              alert('yang anda masukkan bukan gambar');
              // document.location.href = 'laporan-akhir.php';
          </script>
      ";
      return false;
  }

  //CEK ukuran file
  if ( $ukuranFile > 3000000 ) {
      echo "
          <script>
              alert('ukuran gambar terlalu besar');
              // document.location.href = 'laporan-akhir.php';
          </script>
      ";
      return false;
  }

  //LOLOS CEK BROOO
  //generate nama baru random
  $namaFileBaru = uniqid().'.'.$ekstensiGambar;
  move_uploaded_file($temp,'images/'.$namaFileBaru);

  $periodeTanggal = $_POST["periode-tanggal"];
  $judulKegiatan = $_POST["judul-kegiatan"];
  $pendahuluan = $_POST["pendahuluan"];
  $pelaksana = $_POST["pelaksana"];
  $dasarKegiatan = $_POST["dasar-kegiatan"];
  $lokasi = $_POST["lokasi"];
  $lingkupKegiatan = $_POST["lingkup-kegiatan"];
  $hasil = $_POST["hasil"];
  $rekomendasi = $_POST["rekomendasi"];
  $foto = $namaFileBaru;
  $keteranganFoto = $_POST["keterangan-foto"];
  $penyusunLaporan1 = $_POST["penyusunLaporan1"];
  $penyusunLaporan2 = $_POST["penyusunLaporan2"];
  $penyusunLaporan3 = $_POST["penyusunLaporan3"];


  $query = "INSERT INTO laporan VALUES('', '$periodeTanggal', '$judulKegiatan', '$pendahuluan', '$pelaksana', '$dasarKegiatan', '$lokasi', '$lingkupKegiatan', '$hasil', '$rekomendasi', '$foto', '$keteranganFoto', '$penyusunLaporan1', '$penyusunLaporan2', '$penyusunLaporan3')";

  mysqli_query($conn, $query);
}else {
  $namaFileBaru = $_POST['foto'];
}

$periodeTanggal = $_POST["periode-tanggal"];
$judulKegiatan = $_POST["judul-kegiatan"];
$pendahuluan = $_POST["pendahuluan"];
$pelaksana = $_POST["pelaksana"];
$dasarKegiatan = $_POST["dasar-kegiatan"];
$lokasi = $_POST["lokasi"];
$lingkupKegiatan = $_POST["lingkup-kegiatan"];
$hasil = $_POST["hasil"];
$rekomendasi = $_POST["rekomendasi"];
$foto = $namaFileBaru;
$keteranganFoto = $_POST["keterangan-foto"];
$penyusunLaporan1 = $_POST["penyusunLaporan1"];
$penyusunLaporan2 = $_POST["penyusunLaporan2"];
$penyusunLaporan3 = $_POST["penyusunLaporan3"];




$print = '
  <title>PRINT LAPORAN</title>
  <link rel="stylesheet" href="src/style.css">
  <div style="margin: 0px 50px">
      <div style="text-align: center;">
          <h3>LAPORAN KEGIATAN KALIBRASI LAPANG STASIUN METEOROLOGI KLAS III MALI - ALOR DI BBMKG WILAYAH III</h3>
          <h3>TANGGAL ' . nl2br($periodeTanggal) . '</h3>
      </div>
      
      <table border="1" autosize="1" style="width: 100%;border-collapse: collapse">
          <tr>
              <th>NO</th>
              <th>PERIHAL</th>
              <th>PENJELASAN</th>
          </tr>
          <tr>
              <td>1.</td>
              <td>JUDUL KEGIATAN</td>
              <td>' . nl2br($judulKegiatan) . '</td>
          </tr>
          <tr>
              <td>2.</td>
              <td>PENDAHULUAN</td>
              <td>' . nl2br($pendahuluan) . '</td>
          </tr>
          <tr>
              <td>3.</td>
              <td>PELAKSANA/PESERTA</td>
              <td>' . nl2br($pelaksana) . '</td>
          </tr>
          <tr>
              <td>4.</td>
              <td>DASAR KEGIATAN</td>
              <td>' . nl2br($dasarKegiatan) . '</td>
          </tr>
          <tr>
              <td>5.</td>
              <td>LOKASI</td>
              <td>' . nl2br($lokasi) . '</td>
          </tr>
          <tr>
              <td>6.</td>
              <td>LINGKUP KEGIATAN</td>
              <td>' . nl2br($lingkupKegiatan) . '</td>
          </tr>
          <tr>
              <td>7.</td>
              <td>HASIL</td>
              <td>' . nl2br($hasil) . '</td>
          </tr>
          <tr>
              <td>8.</td>
              <td>REKOMENDASI</td>
              <td>' . nl2br($rekomendasi) . '</td>
          </tr>
          <tr style="text-align: center;">
              <td></td>
              <td style="text-align:center;">
                  Mengetahui :
                  <br>KEPALA BALAI BESAR MKG WILAYAH III
                  <br>
                  <br>
                  <br>
                  <br><b>AGUS WAHYU RAHARJO</b>
              </td>
              <td style="text-align:center;">
                  Penyusun Laporan :
                  <br>
                  <br>
                  <br>
                  <br><b>' . nl2br($penyusunLaporan1) . '</b>
                  <br>
                  <br>
                  <br>
                  <br><b>' . nl2br($penyusunLaporan2) . '</b>
                  <br>
                  <br>
                  <br>
                  <br><b>' . nl2br($penyusunLaporan3) . '</b>
              </td>
          </tr>
      </table>

      
      
      <p>LAMPIRAN :</p>
      
      <table border="1" style="width: 100%;border-collapse: collapse; text-align: center;">
          <tr>
              <td>
                  <img src="images/' . nl2br($namaFileBaru) .'" alt="" style="max-width: 250px;">
              </td>
          </tr>
          <tr>
              <td>' . nl2br($keteranganFoto) . '</td>
          </tr>
      </table>
  </div>';

echo $print;

?>

<script>
  window.print();
</script>