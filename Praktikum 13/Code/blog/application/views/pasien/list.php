<div id="page-content-wrapper">
	<div class="container mt-3">
		<h2>List Pasien</h2>
		<table class="table">
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Gender</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
			<!-- menampilkan data dengan foreach -->
			<?php foreach($patiens as $patien) : ?>
			<tr>
				<td><?php echo $patien->kode ?></td>
				<td><?php echo $patien->nama ?></td>
				<td><?php echo $patien->gender ?></td>
				<td><?php echo $patien->tmp_lahir ?></td>
				<td><?php echo $patien->tgl_lahir ?></td>
				<td><?php echo $patien->email ?></td>
				<td>
					<a href="<?php echo "detail/$patien->id" ?>" class="mr-3">
						Detail Pasien
					</a>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>