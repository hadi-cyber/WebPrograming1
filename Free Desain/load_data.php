<?php
class database_index{

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

  public function tampil()
  {
    $data = mysqli_query($this->koneksi,"select * from data_desain LIMIT 4");
    while($row = mysqli_fetch_array($data)){
      $hasil[] = $row;
    }
    return $hasil;
  }
  public function tampil_index()
  {
    $data = mysqli_query($this->koneksi,"select * from data_desain LIMIT 1");
    while($row = mysqli_fetch_array($data)){
      $hasil[] = $row;
    }
    return $hasil;
  }
}
?>
