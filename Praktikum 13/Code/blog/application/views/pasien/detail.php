<div id="page-content-wrapper">
	<div class="container mt-3">
		<h2>Detail Pasien</h2>
		<img src="<?php echo base_url("uploads/$patien->foto") ?>" alt="" class="img-thumbnail mb-3" width="200">
		<table class="table">
			<tr>
				<th>Kode Pasien</th>
				<th>Nama</th>
				<th>Gender</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
			</tr>
			<!-- Menampilkan detail data -->
			<tr>
				<td><?php echo $patien->kode; ?></td>
				<td><?php echo $patien->nama; ?></td>
				<td><?php echo $patien->gender; ?></td>
				<td><?php echo $patien->tmp_lahir; ?></td>
				<td><?php echo $patien->tgl_lahir; ?></td>
			</tr>
		</table>
	</div>
</div>