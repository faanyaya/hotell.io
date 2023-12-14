<?php
include 'koneksi.php';

$id_transaksi =$_POST['idtrans'];
$id_tamu =$_POST['idtam'];
$id_kamar =$_POST['idkam'];
$id_karyawan =$_POST['idkar'];
$tgl_masuk =$_POST['tm'];
$tgl_keluar =$_POST['tk'];
$pembayaran =$_POST['pembayaran'];

mysqli_query($koneksi,"insert into transaksi values('$id_transaksi', '$id_tamu', '$id_kamar', '$id_karyawan', '$tgl_masuk', '$tgl_keluar', '$pembayaran')");
header("location:transaksi.php");
?>