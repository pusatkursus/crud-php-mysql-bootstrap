<form action="?module=simpan" method="POST" role="form">
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" class="form-control" name="nama" placeholder="Nama">
	</div>

	<div class="form-group">
		<label for="">Jenis kelamin</label>
		<input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
		<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
	</div>
	<div class="form-group">
		<label for="">Agama</label>
		<select name="agama" class="form-control">
			<option value="">Pilih Agama</option>
			<option value="Islam">Islam</option>
			<option value="Khatolik">Khatolik</option>
			<option value="Protestan">Protestan</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
		</select>
	</div>
	<div class="form-group">
		<label for="">Tempat Lahir</label>
		<textarea class="form-control" name="tempat_lahir"></textarea>
	</div>
	<div class="form-group">
		<label for="">Tanggal Lahir</label>
		<input type="date" class="form-control" name="tanggal_lahir">
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
	<a href="index.php" class="btn btn-warning">Kembali</a>
</form>