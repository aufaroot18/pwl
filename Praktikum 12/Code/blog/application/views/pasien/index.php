<div id="page-content-wrapper">
	<div class="container mt-3">
		<div class="row">
			<div class="col-12">
				<h2>Daftar Pasien</h2>
				<?php 
					// ambil data session username
					$username = $this->session->userdata('username');

					if ($username) {
						echo "<p>Selamat Datang $username</p>";
					}
					else {
						echo "<p>Selamat Datang Guest</p>";
					}
				 ?>
				<p></p>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode</th>
							<th>Nama</th>
							<th>Gender</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; foreach($patiens as $patien): ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $patien->kode ?></td>
							<td><?= $patien->nama ?></td>
							<td><?= $patien->gender ?></td>
						</tr>
						<?php $no++; endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>