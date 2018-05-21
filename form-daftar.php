<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendataran Mahasiswa | POLTEK TEGAL</title>
</head>

<body>
	<header>
		<h3>Formulir Pendataan Mahasiswa </h3>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
		</p>
		<p>
			<label for="prodi">Prodi: </label>
			<select name="prodi">
				<option>D4-Teknik Informatika</option>
				<option>D3-Kebidanan</option>
				<option>D3-Farmasi</option>
				<option>D3-Akuntansi</option>
				<option>D3-Teknik Komputer</option>
                <option>D3-Teknik Mesin</option>
                <option>D3-Teknik Elektro</option>
			</select>
		</p>
		<p>
			<label for="nim">Nim: </label>
			<input type="text" name="nim" placeholder="masukan nim " />
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
