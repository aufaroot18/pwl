<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="array_siswa.php" method="GET">
		<div>
			<label for="nama">Nama</label>
			<input id="nama" type="text" name="nama">
		</div>
		<div>
			<label for="nim">NIM</label>
			<input id="nim" type="number" name="nim">
		</div>
		<div>
			<label for="matkul">Mata Kuliah</label>
			<select name="matkul" id="matkul">
				<option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
				<option value="Basis Data I">Basis Data I</option>
				<option value="Pemrograman Web">Pemrograman Web</option>
			</select>
		</div>
		<div>
			<label for="nilai_uts">Nilai UTS</label>
			<input id="nilai_uts" type="number" name="nilai_uts">
		</div>
		<div>
			<label for="nilai_uas">Nilai UAS</label>
			<input id="nilai_uas" type="number" name="nilai_uas">
		</div>
		<div>
			<label for="nilai_tugas">Nilai Tugas Praktikum</label>
			<input id="nilai_tugas" type="number" name="nilai_tugas">
		</div>
		<input type="submit" name="simpan" value="Simpan">
	</form>
</body>
</html>