<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}

$query = "update mahasiswa".
      "   set nama = '" . $_POST['nama'] . "', ".
      "   jurusan = '" . $_POST['jurusan'] . "' " .
      "   where nim = " . $_POST['nim'];

if ($koneksi->query($query)==true) {
  echo "<br><b>data ".$_POST["nama"].
  " sudah berubah. data bisa dilihat ".
  '<a href="index.php">disini</a>';
}else {
  echo "error : ".$query."->".$koneksi->error;
}
$koneksi->close();

?>
