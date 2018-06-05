<h2>Formulir Ubah Data Mahasiswa</h2>
<hr>
<form action="update.php" method="POST">

<?php
include"koneksi.php";
$koneksiObj= new Koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}

$qry= "select * from mahasiswa where nim= '" .
	$_GET["nim"] . "'";
$data=$koneksi->query($qry);

if($data->num_rows <=0){
	echo "isi data dengan benar!";
}else {
	while ($hasil =$data->fetch_assoc()) {
		global $nama;
		global $jurusan;
		$nama= $hasil["nama"];
		$jurusan= $hasil["jurusan"];
	}
}
?>

<table>
<tr>

    <td>NIM </td>
		<td width="20"></td>
    <td><input type="text" name="nim"readonly="true"
			value=<?php echo $_GET["nim"]; ?>></td>
</tr>
<tr>
    <td>NAMA</td>
		<td></td>
		<td><input type="text" name="nama"
			value=<?php echo $nama; ?>></td>
</tr>
<tr>
    <td>JURUSAN</td>
		<td></td>
		<td><input type="text" name="jurusan"
			value=<?php echo $jurusan; ?>></td>
</tr>
<tr>
	<td><input type="submit" value="Simpan"></td>
	<td><input type="submit" value="Batal" ></td>

</tr>
</table>
	<a href="index.php">Kembali</a>
</form>
