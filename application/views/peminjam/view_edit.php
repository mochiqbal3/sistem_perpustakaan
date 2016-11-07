<?php foreach($peminjam as $p){ ?>
<form action="<?php echo base_url(). 'crud_peminjam/update'; ?>" method="post">
	<table style="margin:20px auto;">
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="peminjam_kode" value="<?php echo $p->peminjam_kode ?>">
				<input type="text" name="peminjam_nama" value="<?php echo $p->peminjam_nama ?>">
				<input type="text" name="peminjam_alamat" value="<?php echo $p->peminjam_alamat ?>">
				<input type="text" name="peminjam_telp" value="<?php echo $p->peminjam_telp ?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
<?php } ?>