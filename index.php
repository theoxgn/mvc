<?php
include 'database.php';
$db = new Database();
?>
<h1> welcome </h1>
<h3> Data pegawai </h3>

<a href="tambah.php"> Tambah Pegawai </a> || 
<a href="tambah_jabatan.php"> Tambah Jabatan </a>
<table>
    <tr>
        <th>id Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Alamat Pegawai</th>
        <th>No hp</th>
        <th>Jabatan</th>
        <th> Action </th>
</tr>
<?php
$no = 1;
foreach ($db->tampil_data() as $key) {
?>
    <tr>
        <th><?php echo $key['id_peg'];?></th>
        <th><?php echo $key['nama'];?></th>
        <th><?php echo $key['alamat'];?></th>
        <th><?php echo $key['no_hp'];?></th>
        <th><?php echo $key['nama_jabatan'];?></th>
        <th>
            <a href="edit.php?id=<?php echo $key['id_peg'];?>">Edit data</a>
            <a href="aksi.php?id=<?php echo $key['id_peg'];?>&aksi=hapus">Hapus data</a>
        <th>
</tr>
<?php
}
?>
</table>
