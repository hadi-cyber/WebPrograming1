<?php 
class database_desain{

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

  public function tampil_dataDesain()
  {
    $data = mysqli_query($this->koneksi,"select * from data_desain");
    while($row = mysqli_fetch_array($data)){
      $hasil[] = $row;
    }
    return $hasil;
  }
  public function tambah_dataDesain($nama_desain,$editor,$link_download,$deskripsi,$foto)
  {
    mysqli_query($this->koneksi,"insert into data_desain values ('','$nama_desain','$editor','$link_download','$deskripsi','$foto',current_timestamp(),'1')");
  }
  public function hapus_desain($id){
    mysqli_query($this->koneksi,"delete from data_desain where id='$id'");
  }

  function ubah_dataDesain($id,$nama_desain,$editor,$link_download,$deskripsi,$foto)
  {
    mysqli_query($this->koneksi,"update data_desain set nama_desain='$nama_desain',editor='$editor',link_download='$link_download',deskripsi='$deskripsi',foto='$foto',`cdate`=current_timestamp(),`delete_flag`='0' where id='$id'");
  }
  function get_by_idDesain($id)
  {
    $query = mysqli_query($this->koneksi,"select * from data_desain where id='$id'");
    return $query->fetch_array();
  }
  public function paginasi_desain($start, $records_per_page)
  {
    try {
      mysqli_query($this->koneksi,"SELECT * FROM data_desain LIMIT $start, $records_per_page");
    } catch (PDOException $e)
    {
      echo $e->getMessage();
    }
  }
  public function daftarDesainPaginasi()
  {
    try
    {
      mysqli_query($this->koneksi,"SELECT *FROM data_desain WHERE delete_flag = '1' ORDER BY id DESC LIMIT 3");
    } catch (PDOException $e)
    {
      echo $e->getMessage();
    }
  }
  public function daftarDesain()
  {
    try
    {
      mysqli_query($this->koneksi,"SELECT *FROM data_desain WHERE delete_flag = '1' ORDER BY id DESC");
    } catch (PDOException $e)
    {
      echo $e->getMessage();
    }
  }
}
?>