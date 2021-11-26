<?php

require 'conn.php';

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();


if(isset($_POST['cetak-spt'])){

    $noTugas = $_POST["no-tugas"];
    $nama = $_POST["nama"];
    $nip = $_POST["nip"];
    $gol = $_POST["gol"];
    $jabatanUtama = $_POST["jabatan-utama"];
    $unitKerja = $_POST["unit-kerja"];
    $nama1 = $_POST["nama1"];
    $nip1 = $_POST["nip1"];
    $gol1 = $_POST["gol1"];
    $jabatan1 = $_POST['jabatan1'];
    $nama2 = $_POST["nama2"];
    $nip2 = $_POST["nip2"];
    $gol2 = $_POST["gol2"];
    $jabatan2 = $_POST["jabatan2"];
    $tugas = $_POST["tugas"];
    $lokasi = $_POST["lokasi"];
    $lama = $_POST["lama"];
    $tanggalBerangkat = $_POST["tanggal-berangkat"];
    $dana = $_POST["dana"];


    $query = "INSERT into spt VALUES('', '$noTugas', '$nama', '$nip', '$gol', '$jabatanUtama', '$unitKerja', '$nama1', '$nip1', '$gol1', '$jabatan1', '$nama2', '$nip2', '$gol2', '$jabatan2', '$tugas', '$lokasi', '$lama', '$tanggalBerangkat', '$dana')";

    if(!isset($_POST['dont-save-db'])){
        mysqli_query($conn, $query);
    }

    // mysqli_error($conn);die;


    $print = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>PRINT SPT</title>
            <link rel="stylesheet" href="src/style.css">
        </head>
        <body style="padding:0px 150px">
            <div class="container">

                <table>
                    <tr>
                        <td>

                            <div style="text-align: right;">
                                <img style="float:left;" width="120px" src="https://i.ibb.co/2jdyRKg/logo.png">
                            </div>
                        </td>
                        <td style="text-align: center;">

                            <div>
                                <h4>BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</h4>
                                <h5>BALAI BESAR METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA WILAYAH III</h5>
                                <p>
                                    Jl. Raya Tuban, Kuta, Badung, Bali 80361
                                    <br>Telp : (0361) 751122, 753105, 762082 Fax : (0361) 757975
                                    <br>Email : bbmkg3@bmkg.go.id, Website : balai3.denpasar.bmkg.go.id
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>
                <hr style="border:2px solid black">
                
                <div style="margin: 25px 0px;text-align: center;">
                    <u><b>SURAT TUGAS</b></u>
                    <br>NOMOR : ' . nl2br($noTugas) . '
                </div>
                
                <p>Yang bertanda tangan di bawah ini :</p>
                
                <table border="0">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>' . nl2br($nama) . '</td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td>' . nl2br($nip) . '</td>
                    </tr>
                    <tr>
                        <td>Pangkat / Golongan</td>
                        <td>:</td>
                        <td>' . nl2br($gol) . '</td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>' . nl2br($jabatanUtama) . '</td>
                    </tr>
                    <tr>
                        <td>Unit Kerja</td>
                        <td>:</td>
                        <td>' . nl2br($unitKerja) . '</td>
                    </tr>
                </table>
                
                <p class="mt-3">Dengan ini memberikan tugas kepada :</p>
                <table>
                    <tr>
                        <td>1</td>
                        <td>Nama</td>
                        <td>:</td>
                        <td>' . nl2br($nama1) . '</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIP</td>
                        <td>:</td>
                        <td>' . nl2br($nip1) . '</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pangkat/Golongan</td>
                        <td>:</td>
                        <td>' . nl2br($gol1) . '</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>' . nl2br($jabatan1) . '</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nama</td>
                        <td>:</td>
                        <td>' . nl2br($nama2) . '</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIP</td>
                        <td>:</td>
                        <td>' . nl2br($nip2) . '</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pangkat/Golongan</td>
                        <td>:</td>
                        <td>' . nl2br($gol2) . '</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>' . nl2br($jabatan2) . '</td>
                    </tr>
                </table>
                
                <p class="mt-3">Untuk melaksanakan :</p>
                <table>
                    <tr>
                        <td>Tugas</td>
                        <td>:</td>
                        <td>' . nl2br($tugas) . '</td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td>' . nl2br($lokasi) . '</td>
                    </tr>
                    <tr>
                        <td>Selama</td>
                        <td>:</td>
                        <td>' . nl2br($lama) . '</td>
                    </tr>
                    <tr>
                        <td>Tanggal Berangkat</td>
                        <td>:</td>
                        <td>' . nl2br($tanggalBerangkat) . '</td>
                    </tr>
                    <tr>
                        <td>Sumber Dana</td>
                        <td>:</td>
                        <td>' . nl2br($dana) . '</td>
                    </tr>
                </table>
                
                <p class="mt-3">Demikian, untuk dilaksanakan sebagaimana mestinya</p>
                
                <div style="text-align: right;">
                    <p>Denpasar, ' . date('d-m-Y') . '</p>
                    <p><b>Kepala Balai Besar</b></p>
                    <br>
                    <br>
                    <br>
                    <b>Agus Wahyu Raharjo</b>
                </div>
            </div>
            
        </body>
        </html>




    
    
    
    ';
}else if(isset($_POST['cetak-laporan'])){
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

    

    // if ( mysqli_affected_rows($conn) < 0 ){
        // echo mysqli_error($conn);die;

    // echo $periodeTanggal; die;
    





    $print = '
        <title>PRINT LAPORAN</title>
        <link rel="stylesheet" href="src/style.css">
        <div style="margin: 0px 50px;">
            <div style="text-align: center;">
                <h3>LAPORAN KEGIATAN KALIBRASI LAPANG STASIUN METEOROLOGI KLAS III MALI - ALOR DI BBMKG WILAYAH III</h3>
                <h3>TANGGAL ' . nl2br($periodeTanggal) . '</h3>
            </div>
            
            <table border="1" style="width: 100%;border-collapse: collapse;">
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

        // echo $print;die;
} else if (isset($_POST['cetak-nota'])){

    $nomor = $_POST["nomor"];
    $yth = $_POST["yth"];
    $dari = $_POST["dari"];
    $hal = $_POST["hal"];
    $tanggal = $_POST["tanggal"];
    $tembusan = $_POST["tembusan"];
    $tugas = $_POST["tugas"];
    $lokasi = $_POST["lokasi"];
    $selama = $_POST["selama"];
    $tanggalBerangkat = $_POST["tanggal-berangkat"];
    $tanggalKembali = $_POST["tanggal-kembali"];
    $sumberDana = $_POST["sumber-dana"];
    $nama = $_POST["nama"];
    $nip = $_POST["nip"];
    $pangkat = $_POST["pangkat"];
    $jabatan = $_POST["jabatan"];
    $nama2 = $_POST["nama2"];
    $nip2 = $_POST["nip2"];
    $pangkat2 = $_POST["pangkat2"];
    $jabatan2 = $_POST["jabatan2"];
    $nama3 = $_POST["nama3"];
    $nip3 = $_POST["nip3"];
    $pangkat3 = $_POST["pangkat3"];
    $jabatan3 = $_POST["jabatan3"];

    $query = "INSERT INTO nota VALUES('','$nomor','$yth','$dari','$hal','$tanggal','$tembusan','$tugas','$lokasi','$selama','$tanggalBerangkat','$tanggalKembali','$sumberDana','$nama','$nip','$pangkat','$jabatan','$nama2','$nip2','$pangkat2','$jabatan2','$nama3','$nip3','$pangkat3','$jabatan3')";

    if(!isset($_POST['dont-save-db'])){
        mysqli_query($conn, $query);
    }





    $print = '
    <title>PRINT NOTA</title>
    <link rel="stylesheet" href="src/style.css">
    <body style="padding:0px 150px">
        <table>
            <tr>
                <td>

                    <div style="text-align: right;">
                        <img style="float:left;" width="120px" src="https://i.ibb.co/2jdyRKg/logo.png">
                    </div>
                </td>
                <td style="text-align: center;">

                    <div style="text-align:center!important;">
                        <h4>BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA</h4>
                        <h5>BALAI BESAR METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA WILAYAH III</h5>
                        <p>
                            Jl. Raya Tuban, Kuta, Badung, Bali 80361
                            <br>Telp : (0361) 751122, 753105, 762082 Fax : (0361) 757975
                            <br>Email : bbmkg3@bmkg.go.id, Website : balai3.denpasar.bmkg.go.id
                        </p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border:2px solid black">

        <div style="text-align:center;font-weight: bold;">
            NOTA DINAS
            <br>Nomor : ' . nl2br($nomor) . '
        </div>

        <br>

        <div class="div">
            <table>
                <tr>
                    <td>Yht</td>
                    <td>:</td>
                    <td>' . nl2br($yth) . '</td>
                </tr>
                <tr>
                    <td>Dari</td>
                    <td>:</td>
                    <td>' . nl2br($dari) . '</td>
                </tr>
                <tr>
                    <td>Hal</td>
                    <td>:</td>
                    <td>' . nl2br($hal) . '</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>' . nl2br($tanggal) . '</td>
                </tr>
            </table>

            <p>Sehubungan dengan pelaksanaan kalibrasi ARG, AWOS dan InaTEWS di BBMKG Wil III Denpasar, maka dengan ini kami mohon untuk nama-nama terlampir dapat dibuatkan Surat Tugas.</p>
            <p>Demikian kami sampaikan, atas bantuan Bapak di ucapkan terimakasih.</p>

            <div style="text-align: right;">
                <b>Sub Koordinator Bidang Inskal</b>
                <br>
                <br>
                <br>
                <br><b>Mahmud Yusuf</b>
            </div>

            <p>
                Tembusan:
                <br>' . nl2br($tembusan) . '
            </p>

            <table>
                <tr>
                    <td>1</td>
                    <td>Tugas</td>
                    <td>:</td>
                    <td>' . nl2br($tugas) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Lokasi</td>
                    <td>:</td>
                    <td>' . nl2br($lokasi) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Selama</td>
                    <td>:</td>
                    <td>' . nl2br($selama) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tanggal Berangkat</td>
                    <td>:</td>
                    <td>' . nl2br($tanggalBerangkat) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tanggal Kembali</td>
                    <td>:</td>
                    <td>' . nl2br($tanggalKembali) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Sumber Dana</td>
                    <td>:</td>
                    <td>' . nl2br($sumberDana) . '</td>
                </tr>
                <tr>
                    <td><span style="color:white;">1</span></td>
                </tr>
                <tr style="padding-top: 20px;">
                    <td></td>
                    <td>Nama</td>
                    <td>:</td>
                    <td>' . nl2br($nama) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>NIP</td>
                    <td>:</td>
                    <td>' . nl2br($nip) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pangkat/Gol</td>
                    <td>:</td>
                    <td>' . nl2br($pangkat) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>' . nl2br($jabatan) . '</td>
                </tr>
                <tr>
                    <td><span style="color:white;">1</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Nama</td>
                    <td>:</td>
                    <td>' . nl2br($nama2) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>NIP</td>
                    <td>:</td>
                    <td>' . nl2br($nip2) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pangkat/Gol</td>
                    <td>:</td>
                    <td>' . nl2br($pangkat2) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>' . nl2br($jabatan2) . '</td>
                </tr>
                <tr>
                    <td><span style="color:white;">1</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Nama</td>
                    <td>:</td>
                    <td>' . nl2br($nama3) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>NIP</td>
                    <td>:</td>
                    <td>' . nl2br($nip3) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pangkat/Gol</td>
                    <td>:</td>
                    <td>' . nl2br($pangkat3) . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>' . nl2br($jabatan3) . '</td>
                </tr>
            </table>






        </div>
    </body>';
}


$mpdf->WriteHTML($print);
$mpdf->Output();
?>