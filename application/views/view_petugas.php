<table border="1">
	<tr>
		<th>Kode</th>
		<th>Nama</th>
	</tr>
	<?php foreach($petugas as $p){ ?>
	<tr>
		<td><?php echo $p->petugas_kode ?></td>
		<td><?php echo $p->petugas_nama ?></td>
	</tr>
	<?php } ?>
</table>
