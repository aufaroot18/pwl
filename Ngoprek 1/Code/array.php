<?php 

	$animals = ["Kucing", "Ayam", "Ikan", "Burung"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>Nama-nama hewan</p>
	<ul>
		<?php
			foreach($animals as $animal) {
				echo "<li>";
				echo $animal;
				echo "</li>";
			}
		?>
	</ul>
</body>
</html>