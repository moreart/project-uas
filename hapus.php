<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}


$query = "delete from mahasiswa where nim = " .
$_GET["nim"];

//echo $query;

if ($koneksi->query($query)==true) {
  echo "<br><b>data dengan nim ".$_GET["nim"].
  " sudah dihapus data bisa dilihat".
  '<a href="index.php">disini</a>';
}else {
  echo "error : ".$query."->".$koneksi->error;
}
$koneksi->close();

?>
