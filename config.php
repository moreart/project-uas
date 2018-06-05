<?php

$server = "localhost";
$user = "id5676181_dev1";
$password = "Aliyah123!";
$nama_database = "id5676181_db_mahasiswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
