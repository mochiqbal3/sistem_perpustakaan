<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
	<table style="margin:20px auto;">
		<tr>
			<td>Kode</td>
			<td><input type="text" name="kode"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Tambah"></td>
		</tr>
	</table>
</form>