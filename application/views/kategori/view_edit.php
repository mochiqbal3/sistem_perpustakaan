<?php foreach($kategori as $k){ ?>
<form action="<?php echo base_url(). 'crud_kategori/update'; ?>" method="post">
	<table style="margin:20px auto;">
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="kategori_kode" value="<?php echo $k->kategori_kode ?>">
				<input type="text" name="kategori_nama" value="<?php echo $k->kategori_nama ?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
<?php } ?>