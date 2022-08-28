<?php
include 'database.php';
$db = new database;
$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
  $db->tambah_pegawai($_POST['nama'], $_POST['alamat'], $_POST['hp'], $_POST['id_jabatan']);
  header("location:index.php");
} elseif ($aksi == "edit") {
  $db->update_pegawai($_POST['id_peg'], $_POST['nama'], $_POST['alamat'], $_POST['hp'],$_POST['id_jabatan']);
  header("location:index.php");
} elseif ($aksi == "hapus") {
  // if ($_GET['id_peg'] != 0) {
  $db->hapus_pegawai($_GET['id']);
  header("location:index.php");
  // }

}
