<a href="?module=tambah" class="btn btn-success">Tambah Data</a><hr>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>AGAMA</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($db->query("select * from siswa") as $row) {
			echo "<tr>
					<td>$row[id]</td>
					<td>$row[nama]</td>
					<td>$row[jenis_kelamin]</td>
					<td>$row[agama]</td>
					<td>$row[tempat_lahir]</td>
					<td>$row[tanggal_lahir]</td>
					<td>
						<a href='?module=edit&id=$row[id]' class='btn btn-warning'>edit</a>
						<a href='?module=hapus&id=$row[id]' class='btn btn-danger'>hapus</a>
					</td>
				</tr>";	
			}
		 ?>
	</tbody>
</table>