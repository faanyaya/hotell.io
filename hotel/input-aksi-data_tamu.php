<?php
include 'koneksi.php';

$id_tamu =$_POST['idtam'];
$nama_tamu =$_POST['natam'];
$email =$_POST['email'];
$no_hp =$_POST['nohp'];
$alamat =$_POST['alamat'];

mysqli_query($koneksi,"insert into data_tamu values('$id_tamu', '$nama_tamu' ,'$email','$no_hp','$alamat')");
header("location:data_tamu.php");
?>