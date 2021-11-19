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
                        <td>

                            <div style="text-align: center;">
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
                    <br>NOMOR : ' . $_POST['no-tugas'] . '
                </div>
                
                <p>Yang bertanda tangan di bawah ini :</p>
                
                <table border="0">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>' . $_POST['nama'] . '</td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td>' . $_POST['nip'] . '</td>
                    </tr>
                    <tr>
                        <td>Pangkat / Golongan</td>
                        <td>:</td>
                        <td>' . $_POST['gol'] . '</td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>' . $_POST['jabatan-utama'] . '</td>
                    </tr>
                    <tr>
                        <td>Unit Kerja</td>
                        <td>:</td>
                        <td>' . $_POST['unit-kerja'] . '</td>
                    </tr>
                </table>
                
                <p class="mt-3">Dengan ini memberikan tugas kepada :</p>
                <table>
                    <tr>
                        <td>1</td>
                        <td>Nama</td>
                        <td>:</td>
                        <td>' . $_POST['nama1'] . '</td>
                    </tr>
                    <tr>
                        <td>' . $_POST[''] . '</td>
                        <td>NIP</td>
                        <td>:</td>
                        <td>' . $_POST['nip1'] . '</td>
                    </tr>
                    <tr>
                        <td>' . $_POST[''] . '</td>
                        <td>Pangkat/Golongan</td>
                        <td>:</td>
                        <td>' . $_POST['gol1'] . '</td>
                    </tr>
                    <tr>
                        <td>' . $_POST[''] . '</td>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>' . $_POST['jabatan1'] . '</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nama</td>
                        <td>:</td>
                        <td>' . $_POST['nama2'] . '</td>
                    </tr>
                    <tr>
                        <td>' . $_POST[''] . '</td>
                        <td>NIP</td>
                        <td>:</td>
                        <td>' . $_POST['nip2'] . '</td>
                    </tr>
                    <tr>
                        <td>' . $_POST[''] . '</td>
                        <td>Pangkat/Golongan</td>
                        <td>:</td>
                        <td>' . $_POST['gol2'] . '</td>
                    </tr>
                    <tr>
                        <td>' . $_POST[''] . '</td>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>' . $_POST['jabatan2'] . '</td>
                    </tr>
                </table>
                
                <p class="mt-3">Untuk melaksanakan :</p>
                <table>
                    <tr>
                        <td>Tugas</td>
                        <td>:</td>
                        <td>' . $_POST['tugas'] . '</td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>:</td>
                        <td>' . $_POST['lokasi'] . '</td>
                    </tr>
                    <tr>
                        <td>Selama</td>
                        <td>:</td>
                        <td>' . $_POST['lama'] . '</td>
                    </tr>
                    <tr>
                        <td>Tanggal Berangkat</td>
                        <td>:</td>
                        <td>' . $_POST['tanggal-berangkat'] . '</td>
                    </tr>
                    <tr>
                        <td>Sumber Dana</td>
                        <td>:</td>
                        <td>' . $_POST['dana'] . '</td>
                    </tr>
                </table>
                
                <p class="mt-3">Demikian, untuk dilaksanakan sebagaimana mestinya</p>
                
                <div style="text-align: right;">
                    <p>Denpasar, ' . date('d-m-Y') . '</p>
                    <p><b>Kepala Balai Besar</b></p>
                    
                    
                    <div style="margin:30px 0 0 0"><b>Agus Wahyu Raharjo</b></div>
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


    $query = "INSERT INTO laporan VALUES('', '$periodeTanggal', '$judulKegiatan', '$pendahuluan', '$pelaksana', '$dasarKegiatan', '$lokasi', '$lingkupKegiatan', '$hasil', '$rekomendasi', '$foto', '$keteranganFoto')";

        mysqli_query($conn, $query);
    }else {
        $namaFileBaru = $_POST['foto'];
    }

    

    // if ( mysqli_affected_rows($conn) < 0 ){
        // echo mysqli_error($conn);die;
    





    $print = '
        <link rel="stylesheet" href="src/style.css">
        <div style="margin: 0px 50px;">
            <div style="text-align: center;">
                <h3>LAPORAN KEGIATAN KALIBRASI LAPANG STASIUN METEOROLOGI KLAS III MALI - ALOR DI BBMKG WILAYAH III</h3>
                <h3>TANGGAL ' . $_POST['periode-tanggal'] . '</h3>
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
                    <td>' . $_POST['judul-kegiatan'] . '</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>PENDAHULUAN</td>
                    <td>' . $_POST['pendahuluan'] . '</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>PELAKSANA/PESERTA</td>
                    <td>' . $_POST['pelaksana'] . '</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>DASAR KEGIATAN</td>
                    <td>' . $_POST['dasar-kegiatan'] . '</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>LOKASI</td>
                    <td>' . $_POST['lokasi'] . '</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>LINGKUP KEGIATAN</td>
                    <td>' . $_POST['lingkup-kegiatan'] . '</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>HASIL</td>
                    <td>' . $_POST['hasil'] . '</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>REKOMENDASI</td>
                    <td>' . $_POST['rekomendasi'] . '</td>
                </tr>
                <tr style="text-align: center;">
                    <td></td>
                    <td>
                        Mengetahui :
                        <br>KEPALA BALAI BESAR MKG WILAYAH III
                        <br>
                        <br>
                        <br>
                        <br><b>AGUS WAHYU RAHARJO</b>
                    </td>
                    <td>
                        Penyusun Laporan :
                        <br>
                        <br>
                        <br><b>I KOMANG SUSILA</b>
                        <br>
                        <br>
                        <br><b>I WAYAN RIKSA WIBAWA</b>
                        <br>
                        <br>
                        <br><b>RARAS AYU PARAMITA</b>
                    </td>
                </tr>
            </table>
            
            <p>LAMPIRAN :</p>
            
            <table border="1" style="width: 100%;border-collapse: collapse; text-align: center;">
                <tr>
                    <td>
                        <img src="images/' . $namaFileBaru .'" alt="" style="max-width: 250px;">
                    </td>
                </tr>
                <tr>
                    <td>' . $_POST['keterangan-foto'] . '</td>
                </tr>
            </table>
        </div>';
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





    $print = '<link rel="stylesheet" href="src/style.css">
    <body style="padding:0px 150px">
        <table>
            <tr>
                <td>

                    <div style="text-align: right;">
                        <img style="float:left;" width="120px" src="https://i.ibb.co/2jdyRKg/logo.png">
                    </div>
                </td>
                <td>

                    <div style="text-align: center;">
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
            <br>Nomor : ' . $_POST['nomor'] . '
        </div>

        <br>

        <div class="div">
            <table>
                <tr>
                    <td>Yht</td>
                    <td>:</td>
                    <td>' . $_POST['yth'] . '</td>
                </tr>
                <tr>
                    <td>Dari</td>
                    <td>:</td>
                    <td>' . $_POST['dari'] . '</td>
                </tr>
                <tr>
                    <td>Hal</td>
                    <td>:</td>
                    <td>' . $_POST['hal'] . '</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>' . $_POST['tanggal'] . '</td>
                </tr>
            </table>

            <p>Sehubungan dengan pelaksanaan kalibrasi ARG, AWOS dan InaTEWS di BBMKG Wil III Denpasar, maka dengan ini kami mohon untuk nama-nama terlampir dapat dibuatkan Surat Tugas.</p>
            <p>Demikian kami sampaikan, atas bantuan Bapak di ucapkan terimakasih.</p>

            <div style="text-align: right;">
                <b>Sub Koordinator Bidang Inskal</b>
                <br>
                <br>
                <br><b>Mahmud Yusuf</b>
            </div>

            <p>
                Tembusan: ' . $_POST['tembusan'] . '
            </p>

            <table>
                <tr>
                    <td>1</td>
                    <td>Tugas</td>
                    <td>:</td>
                    <td>' . $_POST['tugas'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Lokasi</td>
                    <td>:</td>
                    <td>' . $_POST['lokasi'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Selama</td>
                    <td>:</td>
                    <td>' . $_POST['selama'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tanggal Berangkat</td>
                    <td>:</td>
                    <td>' . $_POST['tanggal-berangkat'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tanggal Kembali</td>
                    <td>:</td>
                    <td>' . $_POST['tanggal-kembali'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Sumber Dana</td>
                    <td>:</td>
                    <td>' . $_POST['sumber-dana'] . '</td>
                </tr>
                <tr style="padding-top: 20px;">
                    <td></td>
                    <td>Nama</td>
                    <td>:</td>
                    <td>' . $_POST['nama'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>NIP</td>
                    <td>:</td>
                    <td>' . $_POST['nip'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pangkat/Gol</td>
                    <td>:</td>
                    <td>' . $_POST['pangkat'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>' . $_POST['jabatan'] . '</td>
                </tr>
                <tr style="padding-top: 20px;">
                    <td></td>
                    <td>Nama</td>
                    <td>:</td>
                    <td>' . $_POST['nama2'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>NIP</td>
                    <td>:</td>
                    <td>' . $_POST['nip2'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pangkat/Gol</td>
                    <td>:</td>
                    <td>' . $_POST['pangkat2'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>' . $_POST['jabatan2'] . '</td>
                </tr>
                <tr style="padding-top: 20px;">
                    <td></td>
                    <td>Nama</td>
                    <td>:</td>
                    <td>' . $_POST['nama3'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>NIP</td>
                    <td>:</td>
                    <td>' . $_POST['nip3'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pangkat/Gol</td>
                    <td>:</td>
                    <td>' . $_POST['pangkat3'] . '</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>' . $_POST['jabatan3'] . '</td>
                </tr>
            </table>






        </div>
    </body>';
}










// echo $print;


$mpdf->WriteHTML($print);
$mpdf->Output();

// SPT



?>