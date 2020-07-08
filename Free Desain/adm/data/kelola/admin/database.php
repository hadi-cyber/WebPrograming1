<?php 
class database{

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

  public function tampil_data()
  {
    $data = mysqli_query($this->koneksi,"select * from admin");
    while($row = mysqli_fetch_array($data)){
      $hasil[] = $row;
    }
    return $hasil;
  }

  public function tambah_data($nama,$username,$password)
  {
    mysqli_query($this->koneksi,"insert into admin values ('','$nama','$username','$password',current_timestamp(),'1')");
  }
  public function hapus($id){
    mysqli_query($this->koneksi,"delete from admin where id='$id'");
  }

  public function ubah_data($id,$nama,$username,$password)
  {
    mysqli_query($this->koneksi,"update admin set nama='$nama',username='$username',password='$password',`cdate`=current_timestamp(),`delete_flag`='0' where id='$id'");
  }
  public function get_by_id($id)
  {
    $query = mysqli_query($this->koneksi,"select * from admin where id='$id'");
    return $query->fetch_array();
  }
}
?>