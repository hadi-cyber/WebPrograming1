<?php 
class databaseLog{

  var $host = "localhost";
  var $username = "root";
  var $password = "";
  var $database = "freelance";
  var $koneksi = "";
  function __construct(){
    $this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
    if (mysqli_connect_errno()){
      echo "Koneksi database gagal : " . mysqli_connect_error();
    }
  }

  public function tampil_dataLog()
  {
    $data = mysqli_query($this->koneksi,"SELECT * FROM `log_aktivity`");
    while($row = mysqli_fetch_array($data)){
      $hasil[] = $row;
    }
    return $hasil;
  }

  public function tambah_dataLog($keterangan)
  {
    mysqli_query($this->koneksi,"insert into log_aktivity values ('','$keterangan',current_timestamp())");
  }
  public function hapus_log($id){
    mysqli_query($this->koneksi,"delete from log_aktivity where id='$id'");
  }
  public function hapussemuaLog()
  {
    mysqli_query($this->koneksi,"delete from log_aktivity");
  }

  public function idLog()
  {
    $query = mysqli_query($this->koneksi,"select * from log_aktivity order by id desc limit 1");
    return $query;
  }
}
?>