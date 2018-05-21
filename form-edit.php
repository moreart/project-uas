<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Mahasiswa | POLTEK TEGAL</title>
</head>

<body>
	<header>
		<h3>Formulir Edit Mahasiswa</h3>
	</header>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<?php $jk = $siswa['jenis_kelamin']; ?>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
		</p>
		<p>
			<label for="prodi">Prodi: </label>
			<?php $prodi = $siswa['prodi']; ?>
			<select name="prodi">
				<option <?php echo ($prodi == 'D4-Teknik Informatika') ? "selected": "" ?>>D4-Teknik Informatika</option>
				<option <?php echo ($prodi == 'D3-Kebidanan') ? "selected": "" ?>>D3-Kebidanan</option>
				<option <?php echo ($prodi == 'D3-Farmasi') ? "selected": "" ?>>D3-Farmasi</option>
				<option <?php echo ($prodi == 'D3-Akuntansi') ? "selected": "" ?>>D3-Akuntansi</option>
				<option <?php echo ($prodi == 'D3-Teknik Komputer') ? "selected": "" ?>>D3-Teknik Komputer</option>
                <option <?php echo ($prodi == 'D3-Teknik Komputer') ? "selected": "" ?>>D3-Teknik Mesin</option>
                <option <?php echo ($prodi == 'D3-Teknik Komputer') ? "selected": "" ?>>D3-Teknik Elektro</option>
			</select>
		</p>
		<p>
			<label for="nim">Nim: </label>
			<input type="text" name="nim" placeholder="masukan nim" value="<?php echo $siswa['nim'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
