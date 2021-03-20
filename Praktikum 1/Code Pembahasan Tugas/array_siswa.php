<?php
	$students = [
		["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78],
		["id" => 2, "nim" => "01121", "uts" => 70, "uas" => 50, "tugas" => 68],
		["id" => 3, "nim" => "01130", "uts" => 60, "uas" => 86, "tugas" => 70],
		["id" => 4, "nim" => "01134", "uts" => 90, "uas" => 91, "tugas" => 82]
	];

	$isSubmit = isset($_GET["simpan"]);
	$student = [];

	if ($isSubmit) {
		$nama = $_GET["nama"];
		$nim = $_GET["nim"];
		$matkul = $_GET["matkul"];
		$nilai_uts = $_GET["nilai_uts"];
		$nilai_uas = $_GET["nilai_uas"];
		$nilai_tugas = $_GET["nilai_tugas"];

		$student = ["id" => 5, "nama" => $nama, "nim" => $nim, "uts" => $nilai_uts, "uas" => $nilai_uas, "tugas" => $nilai_tugas];
	}

	array_push($students, $student);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Siswa</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>UTS</th>
				<th>UAS</th>
				<th>Tugas</th>
				<th>Nilai Akhir</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;

				foreach ($students as $student) {
					$nilai_akhir = ceil(($student["uts"] + $student["uas"] + $student["tugas"]) / 3);

					echo "<tr>";
					echo "<td>$no</td>";
					echo "<td>$student[nim]</td>";
					echo "<td>$student[uts]</td>";
					echo "<td>$student[uas]</td>";
					echo "<td>$student[tugas]</td>";
					echo "<td>$nilai_akhir</td>";
					echo "</tr>";

					$no++;
				}
			?>
		</tbody>
	</table>
</body>
</html>