<?php
$server     = "localhost";
$username   = "root";
$password   = "";
$db_name    = "dbs_kesi";

$koneksi = mysqli_connect($server, $username, $password, $db_name);

if(!$koneksi) {
    echo "Gagal Terkoneksi";
} else {
    // echo "Berhasil Terkoneksi";
}

?>