<table border="1">
	<tr>
		<th>Kode</th>
		<th>Nama</th>
		<th>Aksi</th>
	</tr>
	<?php foreach($petugas as $p){ ?>
	<tr>
		<td><?php echo $p->petugas_kode ?></td>
		<td><?php echo $p->petugas_nama ?></td>
		<td>
			<?php echo anchor('index.php/crud/edit/'.$p->petugas_kode,'Edit'); ?>
			||
			<?php echo anchor('index.php/crud/hapus/'.$p->petugas_kode,'Hapus'); ?>	
		</td>
	</tr>
	<?php } ?>
</table>
<a href="<?php echo base_url().'index.php/crud/tambah' ?>">Tambah</a>