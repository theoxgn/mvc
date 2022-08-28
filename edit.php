<?php
include 'database.php';
$db = new database();
?>

<h1>WELCOME</h1>
<h3>Edit Data Pegawai</h3>

<form action="aksi.php?aksi=edit" method="post">
<?php
foreach($db->get_pegawai_by_id($_GET['id']) as $d){
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
		<td><input type="text" name="hp" value="<?php echo $d['no_hp'] ?>"></td>
	</tr>
	<?php
        $no = 1;
        foreach ($db->get_jabatan_by_id() as $key) { //error disini
        ?>
            <tr>
                <td> Jabatan
                <td>
                    <select id="id_jabatan" name="id_jabatan">
                        <option value="<?php echo $key['id_jabatan']; ?>"><?php echo $key['nama_jabatan']; ?></option>
                    </select>
                </td>
            </tr>
        <?php } ?>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
