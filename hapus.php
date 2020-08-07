<?php
	$sql = "DELETE FROM siswa WHERE id='$_GET[id]'";
	$edit = $db->query($sql);
	if ($edit) {
		header('location:index.php');
	}else{
		header('location:?module=edit&id=$_POST[id]');
	}
?>