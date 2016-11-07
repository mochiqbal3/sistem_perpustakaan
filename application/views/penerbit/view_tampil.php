<table border="1">
	<tr>
		<th>Kode</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Handphone</th>
		<th>Aksi</th>
	</tr>
	<?php foreach($penerbit as $p){ ?>
	<tr>
		<td><?php echo $p->penerbit_kode ?></td>
		<td><?php echo $p->penerbit_nama ?></td>
		<td><?php echo $p->penerbit_alamat ?></td>
		<td><?php echo $p->penerbit_telp ?></td>
		<td>
			<?php echo anchor('crud_penerbit/edit/'.$p->penerbit_kode,'Edit'); ?>
			||
			<?php echo anchor('crud_penerbit/hapus/'.$p->penerbit_kode,'Hapus'); ?>	
		</td>
	</tr>
	<?php } ?>
</table>
<a href="<?php echo base_url().'crud_penerbit/tambah' ?>">Tambah</a>