<?php
	/*
		Membuat variabel nama, nim, nilai, grade.
		Variabel ini nantinya digunakan untuk menyimpan nilai dari form.
	 */
	$nama = "";
	$nim = "";
	$nilai = "";
	$grade = "";

	/*
		jika form sudah disubmit
		maka simpan nilai dari form ke variabel yang sudah dibuat sebelumnya.
	*/
	if (isset($_REQUEST["submit"])) {
		/*
			Mengambil nilai dari form Menggunakan variabel superglobal $_REQUEST.
			Lalu simpan ke variabel yang sudah dibuat sebelumnya.
		 */
		$nama = $_REQUEST["nama"];
		$nim = $_REQUEST["nim"];
		$nilai = $_REQUEST["nilai"];

		/*
			Membuat kondisional untuk menetapkan grade dari nilai.
		 */
		if ($nilai >= 90) {
			$grade = "A";
		}
		else if ($nilai >= 80) {
			$grade = "B";
		}
		else if ($nilai >= 70) {
			$grade = "C";
		}
		else {
			$grade = "D";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="conditional.php" method="POST">
		<div>
			<label for="nama">Nama</label>
			<input id="nama" type="text" name="nama">
		</div>
		<div>
			<label for="nim">Nim</label>
			<input id="nim" type="number" name="nim">
		</div>
		<div>
			<label for="nilai">Nilai</label>
			<input id="nilai" type="number" name="nilai">
		</div>
		<input type="submit" name="submit">
	</form>

	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Nim</th>
				<th>Nilai</th>
				<th>Grade</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<!-- Menampilkan variabel nama, nim dan nilai -->
				<td><?= $nama ?></td>
				<td><?= $nim ?></td>
				<td><?= $nilai ?></td>
				<td><?= $grade ?></td>
			</tr>
		</tbody>
	</table>
</body>
</html>