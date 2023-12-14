<title>HOTEL GERHANA</title>
<link rel="stylesheet" href="style.css">
<style>
    form{
    width: 700px;
    height: 300px;
    margin: 120px auto;
    padding: 30px;
    background-color: #AAC8A7;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 1);
}
.logo {
	font-size: 40px;
	color: rgb(41, 84, 139);
	font-weight: bold;
	width: 500px;
	cursor: pointer;
	margin-left:100px;
}
.main {
	width: 100%;
	height: 100vh;
	background-image: linear-gradient(rgba(0, 0, 0, 0.55),#120e0e8c), url("home3.jpg");
	background-size: cover;
	background-position: center;
}
.navbar {
	width: 100%;
	margin: auto;
	padding: 30px 0;
	display: flex;
	align-items: center;
	justify-content: space-between;
	line-height: 35px;
	position: sticky;
	position: -webkit-sticky;
	top: 0;
	z-index: 1;
	border-bottom: 1px solid grey;
}
.navbar ul li a {
	color: rgb(204, 164, 54);
	text-transform: uppercase;
}
</style>
<html>
<div class="main">
	<div class="navbar">
		<label class="logo">HOTEL GERHANA</label>
		<ul>
			<li><a href="home.html">Home</a></li>
			<li><a href="data_kamar.php">data kamar</a></li>
			<li><a href="data_tamu.php">data tamu</a></li>
			<li><a href="karyawan.php">karyawan</a></li>
			<li><a href="transaksi.php">transaksi</a></li>
		</ul>
	</div>
    <form>
    <b>DATA TAMU</b>
    <table border="2">
        <tr>
            <td>id tamu</td>
            <td>nama tamu</td>
            <td>email</td>
            <td>no hp</td>
            <td>alamat</td>
            <td>Aksi</td>
        </tr>
<?php
include "koneksi.php";
$data=mysqli_query($koneksi, "select * from data_tamu");
while($d=mysqli_fetch_array($data)){
    ?>

    <tr>
        <td><?php echo $d['id_tamu']?></td>
        <td><?php echo $d['nama_tamu']?></td>
        <td><?php echo $d['email']?></td>
        <td><?php echo $d['no_hp']?></td>
        <td><?php echo $d['alamat']?></td>
        <td><a href="hapus_data_tamu.php?id=<?php echo $d['id_tamu'];?>">Hapus</a>
            <a href="edit_data_tamu.php?id=<?php echo $d['id_tamu'];?>">Edit</a>
    </tr>
    <?php
}     
 ?>
 </table>
 <a href="input-data_tamu.php"> Tambahkan Data Baru</a> 
 <br><a href="home.html">Kembali</a></br>
 </form>
</html>