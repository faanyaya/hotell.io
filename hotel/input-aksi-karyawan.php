<?php
include 'koneksi.php';

$id_karyawan =$_POST['idkar'];
$nama_karyawan =$_POST['nakar'];
$gender =$_POST['gender'];
$jenis_karyawan =$_POST['jekar'];

mysqli_query($koneksi,"insert into karyawan values('$id_karyawan', '$nama_karyawan', '$gender', '$jenis_karyawan')");
header("location:karyawan.php");
?>