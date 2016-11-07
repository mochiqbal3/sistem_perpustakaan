<table border="1">
	<tr>
		<th>Kode</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Handphone</th>
		<th>Aksi</th>
	</tr>
	<?php foreach($peminjam as $p){ ?>
	<tr>
		<td><?php echo $p->peminjam_kode ?></td>
		<td><?php echo $p->peminjam_nama ?></td>
		<td><?php echo $p->peminjam_alamat ?></td>
		<td><?php echo $p->peminjam_telp ?></td>
		<td>
			<?php echo anchor('crud_peminjam/edit/'.$p->peminjam_kode,'Edit'); ?>
			||
			<?php echo anchor('crud_peminjam/hapus/'.$p->peminjam_kode,'Hapus'); ?>	
		</td>
	</tr>
	<?php } ?>
</table>
<a href="<?php echo base_url().'crud_peminjam/tambah' ?>">Tambah</a>