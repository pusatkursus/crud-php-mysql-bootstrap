<?php
	$sql = "INSERT INTO siswa SET nama='$_POST[nama]',
	jenis_kelamin='$_POST[jenis_kelamin]',
	agama='$_POST[agama]',
	tempat_lahir='$_POST[tempat_lahir]',
	tanggal_lahir='$_POST[tanggal_lahir]'";
	$insert = $db->query($sql);
	if ($insert) {
		header('location:index.php');
	}else{
		header('location:?module=tambah');
	}
?>