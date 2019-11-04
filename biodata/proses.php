<?php 
include '../database.php';
$biodata= new Biodata();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id     = $_POST['id'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk     = $_POST['jenis_kelamin'];
    $agama  = $_POST['agama'];
    $lahir  = $_POST['tgl_lahir'];
    $umur    = date('Y')-$lahir;
    
}
if ($aksi == "tambah") {
    $biodata->create($nama,$alamat,$jk,$agama,$lahir,$umur);
    header("location:index.php");
}elseif ($aksi == "update") {
    $biodata->update($id,$nama,$alamat,$jk,$agama,$lahir,$umur);
    header("location:index.php");
}elseif ($aksi == "delete") {
    $biodata->delete($_GET['id']);
    header("location:index.php");
}
?>