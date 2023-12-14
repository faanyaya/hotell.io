<?php 
    include 'koneksi.php';

    $id_karyawan =$_POST['idkar'];
    $nama_karyawan =$_POST['nakar'];
    $gender =$_POST['gender'];
    $jenis_karyawan =$_POST['jekar'];

    mysqli_query($koneksi, "update karyawan set id_karyawan='$id_karyawan', nama_karyawan='$nama_karyawan', gender='$gender', jenis_karyawan='$jenis_karyawan'  where id_karyawan='$id_karyawan'");

    header('location:karyawan.php');
?>