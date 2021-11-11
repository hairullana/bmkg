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

$id = $_GET["id"];

require 'conn.php';

mysqli_query($conn, "DELETE FROM data_bmkg WHERE id = $id");

if (mysqli_affected_rows($conn) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus');
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