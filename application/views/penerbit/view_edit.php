<?php foreach($penerbit as $p){ ?>
<form action="<?php echo base_url(). 'crud_penerbit/update'; ?>" method="post">
	<table style="margin:20px auto;">
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="penerbit_kode" value="<?php echo $p->penerbit_kode ?>">
				<input type="text" name="penerbit_nama" value="<?php echo $p->penerbit_nama ?>">
				<input type="text" name="penerbit_alamat" value="<?php echo $p->penerbit_alamat ?>">
				<input type="text" name="penerbit_telp" value="<?php echo $p->penerbit_telp ?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
<?php } ?>