<?php
	$sql = "UPDATE siswa SET nama='$_POST[nama]',
	jenis_kelamin='$_POST[jenis_kelamin]',
	agama='$_POST[agama]',
	tempat_lahir='$_POST[tempat_lahir]',
	tanggal_lahir='$_POST[tanggal_lahir]'
	WHERE id='$_POST[id]'";
	$edit = $db->query($sql);
	if ($edit) {
		header('location:index.php');
	}else{
		header('location:?module=edit&id=$_POST[id]');
	}
?>