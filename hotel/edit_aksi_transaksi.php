<?php 
    include 'koneksi.php';

    $id_transaksi =$_POST['idtrans'];
    $id_tamu =$_POST['idtam'];
    $id_kamar =$_POST['idkam'];
    $id_karyawan =$_POST['idkar'];
    $tgl_masuk =$_POST['tm'];
    $tgl_keluar =$_POST['tk'];
    $pembayaran =$_POST['pembayaran'];

    mysqli_query($koneksi, "update transaksi set id_transaksi='$id_transaksi', id_tamu='$id_tamu', id_kamar='$id_kamar', id_karyawan='$id_karyawan', tgl_masuk='$id_masuk', tgl_keluar='$tgl_keluar', pembayaran='$pembayaran' where id_transaksi='$id_transaksi'");

    header('location:transaksi.php');
?>