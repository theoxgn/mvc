<?php 
include 'database.php';
$db = new database();
?>
 
<h1>WELCOME</h1>
<h3>Edit Data Pegawai</h3>
 
<form action="aksi.php?aksi=update" method="post">
<?php
foreach($db->update_pegawai($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id_peg" value="<?php echo $d['id_peg'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Hp</td>
		<td><input type="text" name="hp" value="<?php echo $d['hp'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>