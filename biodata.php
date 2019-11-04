<?php
class Biodata extends Database
{
   // Menampilkan Semua Data
   public function index()
   {
      $databiodata = mysqli_query($this->koneksi, "select * from biodata");
      // var_dump($datasiswa);
      return $databiodata;
   }
   // Menambah Data
   public function create($nama,$alamat,$jk,$agama,$lahir,$umur)
   {
      mysqli_query(
         $this->koneksi,
         "insert into biodata values(null,'$nama','$alamat','$jk','$agama','$lahir','$umur')"
      );
   }
   // Menampilkan Data Berdasarkan ID
   public function show($id)
   {
      $databiodata = mysqli_query(
         $this->koneksi,
         "select * from biodata where id='$id'"
      );
      return $databiodata;
   }
   // Menampilkan data berdasarkan id
   public function edit($id)
   {
      $databiodata = mysqli_query(
         $this->koneksi,
         "select * from biodata where id='$id'"
      );
      return $databiodata;
   }
   // mengupdate data berdasarkan id
   public function update($id,$nama,$alamat,$jk,$agama,$lahir,$umur)
   {
      mysqli_query(
         $this->koneksi,
         "update biodata set nama='$nama' , alamat='$alamat' ,
         jenis_kelamin='$jk' , agama='$agama' , tgl_lahir='$lahir' , umur='$umur' where id='$id'");
   }
   // menghapus data berdasarkan id
   public function delete($id)
   {
      mysqli_query($this->koneksi, "delete from biodata where id='$id'");
   }
}