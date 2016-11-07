<table border="1">
	<tr>
		<th>Kode</th>
		<th>Nama</th>
		<th>Aksi</th>
	</tr>
	<?php foreach($kategori as $k){ ?>
	<tr>
		<td><?php echo $k->kategori_kode ?></td>
		<td><?php echo $k->kategori_nama ?></td>
		<td>
			<?php echo anchor('crud_kategori/edit/'.$k->kategori_kode,'Edit'); ?>
			||
			<?php echo anchor('crud_kategori/hapus/'.$k->kategori_kode,'Hapus'); ?>	
		</td>
	</tr>
	<?php } ?>
</table>
<a href="<?php echo base_url().'crud_kategori/tambah' ?>">Tambah</a>