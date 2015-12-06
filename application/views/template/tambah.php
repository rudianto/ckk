<?=form_open('ctrl/insert', ['class'=>'form form-horizontal']);?>
	nominal <input type="text" id="nominal" name="nominal"><br>
	kategori <input type="text" id="kategori" name="kategori"><br>
	deskripsi<textarea name="deskripsi"></textarea><br>
	<input type="submit" value="simpan"><input type="reset" value="Reset">
<?=form_close();?>