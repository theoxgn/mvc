<?php
include 'database.php';
$db = new database;
        $aksi = $_GET['aksi'];
        if("$aksi==tambah"){
            $db->tambah_pegawai($_POST['id_peg'],$_POST['nama'],$_POST['alamat'],$_POST['hp']);
            header("location:index.php");
        }
  elseif ("$aksi==edit") {
            $db->update_pegawai($_POST['id_peg'],$_POST['nama'],$_POST['alamat'],$_POST['hp']);
            header("location:index.php");if ("$aksi==edit") {
                $db->update_pegawai($_POST['id_peg'],$_POST['nama'],$_POST['alamat'],$_POST['hp']);
                header("location:index.php");
            }
        }elseif("$aksi==hapus"){
            $db->hapus_pegawai($_GET['id_peg']);
            header("location:index.php");
        }

?>