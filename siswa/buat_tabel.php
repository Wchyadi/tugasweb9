<?php
$dbname='db_siswa';
$host='localhost';
$password='';
$username='root';

//Koneksi Ke MySQL
$cnn = mysqli_connect($host,$username,$password,$dbname);
//Membuat Koneksi

if(!$cnn){
die("Koneksi Failed : ".mysqli_connect_error()); }
//Membuat Tabel

$sql ="CREATE TABLE datasiswa (
nis char(10) NULL,
nama varchar(20) NULL,
jenis_kelamin varchar(10) NULL,
telp char(15) NULL,
alamat varchar(30) NULL,
foto varchar(100) NULL,

constraint pk_datasiswa primary key(nis)
)";

if (mysqli_query($cnn, $sql)){
echo "Table Berhasil di Buat";
} else {
echo "Table Gagal di Buat :".mysqli_error($cnn); }
mysqli_close($cnn);
?>
