<!--
<?php
	$ambil=$kode->petugas_kode;
	$buang_huruf=(int) substr($ambil, 3);
	$buang_huruf++;
	$kode_baru="PTG". sprintf("%03s", $buang_huruf);
?>
-->
<form action="<?php echo base_url(). 'crud_peminjam/tambah_aksi'; ?>" method="post">
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
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td><input type="text" name="no_hp"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Tambah"></td>
		</tr>
	</table>
</form>