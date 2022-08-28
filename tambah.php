<?php
include 'database.php';
$db = new database;
?>
<h1> welcome </h1>
<h3> Tambah Data pegawai </h3>

<form action="aksi.php?aksi=tambah" method="post">

    <table>
        <!-- <tr>
            <td> ID_Peg</td>
            <td><input type="text" name="id_peg"></td>
        </tr>  -->
        <tr>
            <td> Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td> Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td> No hp</td>
            <td><input type="number" name="hp"></td>
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
            <td><input type="submit" value="simpan"></td>
        </tr>
    </table>
</form>
