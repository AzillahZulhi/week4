<?php
class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "fpp0";
    
    public function __construct(){
        $koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if($koneksi){
            echo "Berhasil terhubung";
        }else{
            echo "Gagal terhubung";
        }
    }
}

$koneksi = new database; 
?>
