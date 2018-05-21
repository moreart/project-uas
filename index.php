<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Mahasiswa | POLTEK TEGAL</title>
</head>

<body>
	<header>
		<marquee><h3>Aplikasi Pendataan Mahasiswa Bermasalah</marquee></h3>
		<h1>POLTEK TEGAL</h1>
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Input Mahasiswa</a></li>
			<li><a href="list-siswa.php">Lihat Daftar</a></li>
		</ul>
	</nav>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
