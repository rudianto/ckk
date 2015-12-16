<?=form_open('kt_insert');?>
<input type="text" name="nama_kategori">
<button type="submit" name="simpan">Simpan</button>
<?=form_close();?>

<table>
	<thead>
		<tr>
			<th>ID Kategori</th>
			<th>Nama Kategori</th>
		</tr>
	</thead>
	<tbody>
	<?=foreach ($kt as $kts):?>
		<tr>
			<td><?=$kts->id_kategori?></td>
			<td><?=$kts->nama_kategori?></td>
		</tr>
	<?=endforeach;?>
	</tbody>
</table>