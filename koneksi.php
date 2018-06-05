<?php
class Koneksi{
  private $server="localhost";
  private $username="id5676181_dev1";
  private $password = "Aliyah123!";
  private $db = "id5676181_db_mahasiswa";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
