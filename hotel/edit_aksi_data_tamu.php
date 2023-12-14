<?php 
    include 'koneksi.php';

    $id_tamu =$_POST['idtam'];
    $nama_tamu =$_POST['natam'];
    $email =$_POST['email'];
    $no_hp =$_POST['nohp'];
    $alamat =$_POST['alamat'];

    mysqli_query($koneksi, "update data_tamu set id_tamu='$id_tamu', nama_tamu='$nama_tamu', email='$email', no_hp='$no_hp', alamat='$alamat'  where id_tamu='$id_tamu'");

    header('location:data_tamu.php');
?>