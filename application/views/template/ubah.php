<form method="post" action="<?=base_url()?>index.php/ctrl/update/<?=$value->id_transaksi ?>">
	nominal <input type="text" id="nominal" name="nominal" value="<?=$value->nominal ?>"><br>
	kategori <input type="text" id="kategori" name="kategori" value="<?=$value->kategori?>"><br>
	deskripsi<textarea name="deskripsi" value="<?=$value->deskripsi?>"></textarea><br>
	<input type="submit" value="simpan"><input type="reset" value="Reset">
</form>