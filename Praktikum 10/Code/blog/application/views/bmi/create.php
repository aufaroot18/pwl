<div id="page-content-wrapper">
	<div class="container mt-3">
		<h2>Form Tambah BMI Pasien</h2>
		<form action="store" method="POST">
			<div class="form-group">
				<label for="tanggal">Tanggal</label>
				<input type="date" class="form-control" id="tanggal" name="tanggal">
			</div>
			<div class="form-group">
				<label for="pasien_id">Pasien</label>
				<select name="pasien_id" id="pasien_id" class="form-control">
					<?php foreach($patients as $patien): ?>
						<option value="<?php echo $patien->id ?>"><?php echo $patien->nama ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="berat">Berat</label>
				<input type="text" class="form-control" id="berat" name="berat">
			</div>
			<div class="form-group">
				<label for="tinggi">Tinggi</label>
				<input type="text" class="form-control" id="tinggi" name="tinggi">
			</div>
			<button type="submit" class="btn btn-primary">Add</button>
		</form>
	</div>
</div>