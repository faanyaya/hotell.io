<?php
include 'koneksi.php';

$id_kamar =$_POST['idkam'];
$jenis_kamar =$_POST['jekam'];
$fasilitas =$_POST['fasilitas'];

mysqli_query($koneksi,"insert into data_kamar values('$id_kamar', '$jenis_kamar', '$fasilitas')");
header("location:data_kamar.php");
?>