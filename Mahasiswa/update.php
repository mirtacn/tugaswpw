<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$NRP = $_POST['NRP'];
$Nama = $_POST['Nama'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Jurusan = $_POST['Jurusan'];
$Email= $_POST['Email'];
$Alamat = $_POST['Alamat'];
$No_Hp = $_POST['No_Hp'];
$Asal_SMA = $_POST['Asal_SMA'];
$Matkul_Favorit = $_POST['Matkul_Favorit'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE `daftar mahasiswa` SET `id`='$id',`NRP`='$NRP',`Nama`='$Nama',`Jenis_Kelamin`='$Jenis_Kelamin',`Jurusan`='$Jurusan',`Email`='$Email',`Alamat`='$Alamat',`No_Hp`='$No_Hp',`Asal_SMA`='$Asal_SMA',`Matkul_Favorit`='$Matkul_Favorit' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>