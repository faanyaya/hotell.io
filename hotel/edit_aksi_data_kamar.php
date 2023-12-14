<?php 
    include 'koneksi.php';

    $id_kamar =$_POST['idkam'];
    $jenis_kamar =$_POST['jekam'];
    $fasilitas =$_POST['fasilitas'];

    mysqli_query($koneksi, "update data_kamar set id_kamar='$id_kamar', jenis_kamar='$jenis_kamar', fasilitas='$fasilitas' where id_kamar='$id_kamar'");

    header('location:data_kamar.php');
?>