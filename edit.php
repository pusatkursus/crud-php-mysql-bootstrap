<?php
$id = $_GET['id'];//fungsi mengambil nilai parameter id di url
$edit = $db->query("SELECT * FROM siswa WHERE id='$id'");
$row = $edit->fetch_array();
?>
<form action="?module=update" method="POST" role="form">
	<input type="hidden"name="id" value="<?php echo $row['id']?>">
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']?>">
	</div>
	<div class="form-group">
		<label for="">Jenis kelamin</label>
		<input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if($row['jenis_kelamin'] = "Laki-Laki"){echo "checked='checked'";} ?>>Laki-Laki
		<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($row['jenis_kelamin'] = "Perempuan"){echo "checked='checked'";} ?>>Perempuan
	</div>
	<div class="form-group">
		<label for="">Agama</label>
		<select name="agama" class="form-control">
			<option value="">Pilih Agama</option>
			<option value="Islam" <?php if($row['agama'] = "Islam"){echo "selected'";} ?>>Islam</option>
			<option value="Khatolik" <?php if($row['agama'] = "Khatolik"){echo "selected'";} ?>>Khatolik</option>
			<option value="Protestan" <?php if($row['agama'] = "Protestan"){echo "selected'";} ?>>Protestan</option>
			<option value="Hindu" <?php if($row['agama'] = "Hindu"){echo "selected'";} ?>>Hindu</option>
			<option value="Budha" <?php if($row['agama'] = "Budha"){echo "selected'";} ?>>Budha</option>
		</select>
	</div>
	<div class="form-group">
		<label for="">Tempat Lahir</label>
		<textarea class="form-control" name="tempat_lahir"><?php echo $row['tempat_lahir']?></textarea>
	</div>
	<div class="form-group">
		<label for="">Tanggal Lahir</label>
		<input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']?>">
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
	<a href="index.php" class="btn btn-warning">Kembali</a>
</form>
