<div id="page-content-wrapper">
	<div class="container mt-3">
		<h2>Form Pasien</h2>
		<form action="store" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="kode">Kode</label>
				<input type="text" id="kode" name="kode" class="form-control">
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" id="nama" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label for="foto">Foto</label>
				<input type="file" id="foto" name="foto" class="form-control-file">
			</div>
			<button type="submit" class="btn btn-primary">Tambah</button>
		</form>
	</div>
</div>