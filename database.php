<?php

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "test";
  var $con;

	public function __construct(){
		$this->con = new mysqli($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}

	function tampil_data(){
		$data = mysqli_query($this->con, "SELECT a.id_peg,a.nama,a.alamat,a.no_hp,b.nama_jabatan FROM pegawai a INNER JOIN jabatan b ON a.id_jabatan=b.id_jabatan");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

  function tambah_pegawai($nama, $alamat, $hp)
  {
    mysqli_query($this->con, "INSERT INTO PEGAWAI (nama,alamat,no_hp) VALUES('$nama','$alamat','$hp')");
  }

  function get_pegawai_by_id($id_peg)
  {
    $data = mysqli_query($this->con, "SELECT * FROM pegawai WHERE id_peg='$id_peg'");
    while ($d = mysqli_fetch_array($data)) {
      $hasil[] = $d;
    }
    return $hasil;
  }

  function update_pegawai($id_peg, $nama, $alamat, $hp)
  {
    mysqli_query($this->con, "UPDATE pegawai SET nama='$nama', alamat='$alamat', no_hp='$hp' WHERE id_peg='$id_peg'");
  }

	function hapus_pegawai($id){
		mysqli_query($this->con, "DELETE FROM pegawai WHERE id_peg='$id'");
	}

  function get_jabatan_by_id()
  {
    $data = mysqli_query($this->con, "SELECT * FROM jabatan");
    while ($d = mysqli_fetch_array($data)) {
      $hasil[] = $d;
    }
    return $hasil;
  }
}
?>
