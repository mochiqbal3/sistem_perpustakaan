<?php foreach($petugas as $p){ ?>
<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
	<table style="margin:20px auto;">
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="petugas_kode" value="<?php echo $p->petugas_kode ?>">
				<input type="text" name="petugas_nama" value="<?php echo $p->petugas_nama ?>">
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
<?php } ?>