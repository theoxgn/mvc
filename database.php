<?php

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "test";


	public function __construct(){
		$con = new mysqli($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($con,$this->db);
	}

	function tampil_data(){
		$con = new mysqli($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($con,$this->db);
		$data = mysqli_query($con, "SELECT * FROM pegawai");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

  function tambah_pegawai($id_peg, $nama, $alamat, $hp)
  {
    $con = new mysqli($this->host, $this->uname, $this->pass, $this->db);
    mysqli_select_db($con, $this->db);
    mysqli_query($con, "INSERT INTO PEGAWAI (nama,alamat,no_hp) VALUES('$id_peg','$nama','$alamat','$hp')");
  }

  function get_pegawai_by_id($id_peg)
  {
    $con = new mysqli($this->host, $this->uname, $this->pass, $this->db);
    mysqli_select_db($con, $this->db);
    $data = mysqli_query($con, "SELECT * FROM pegawai WHERE id_peg='$id_peg'");
    while ($d = mysqli_fetch_array($data)) {
      $hasil[] = $d;
    }
    return $hasil;
  }

  function update_pegawai($id_peg, $nama, $alamat, $hp)
  {
    $con = new mysqli($this->host, $this->uname, $this->pass, $this->db);
    mysqli_select_db($con, $this->db);
    mysqli_query($con, "UPDATE pegawai SET nama='$nama', alamat='$alamat', no_hp='$hp' WHERE id_peg='$id_peg'");
  }

	function hapus_pegawai($id){
		$con = new mysqli($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($con,$this->db);
		mysqli_query($con, "DELETE FROM pegawai WHERE id_peg='$id'");
	}
}
?>
