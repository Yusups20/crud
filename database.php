<?php
class Database
{
    public $host = "localhost",$user = "root", $pass = 123 , $db = "XIRPL2";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect(//menghubungkan ke database
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            // echo "Berhasil";
        }else {
            echo "Koneksi Database Gagal :(";
        }
    }
}
//Data Tabel Siswa
include 'siswa.php';

//Data Tabel Biodata
include 'biodata.php';

//Koneksi DB
$db = new Database();

?>