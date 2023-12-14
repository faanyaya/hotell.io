<link rel="stylesheet" href="style.css">
<style>
       form{
    width: 600px;
    height: 230px;
    margin: 120px auto;
    padding: 30px;
    background-color: #AAC8A7;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 1);
}
.main {
	width: 100%;
	height: 100vh;
	background-image: linear-gradient(rgba(0, 0, 0, 0.55),#120e0e8c), url("home3.jpg");
	background-size: cover;
	background-position: center;
}
.logo {
	font-size: 40px;
	color: rgb(81, 112, 212);
	font-weight: bold;
	width: 500px;
	cursor: pointer;
	margin-left: 50px;
	
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
	border-bottom: 1px solid rgb(125, 154, 161);
}
tr{
    text-align:center;
    
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
    <b>TRANSAKSI</b>
    
    <table border="1">
        <tr>
            <td>id transaksi</td>
            <td>id tamu</td>
            <td>id kamar</td>
            <td>id karyawan</td>
            <td>tgl masuk </td>
            <td>tgl keluar</td>
            <td>pembayaran </td>
            <td>Aksi</td>
        </tr>
<?php
include "koneksi.php";
$data=mysqli_query($koneksi, "select * from transaksi");
while($d=mysqli_fetch_array($data)){
    ?>

    <tr>
        <td><?php echo $d['id_transaksi']?></td>
        <td><?php echo $d['id_tamu']?></td>
        <td><?php echo $d['id_kamar']?></td>
        <td><?php echo $d['id_karyawan']?></td>
        <td><?php echo $d['tgl_masuk']?></td>
        <td><?php echo $d['tgl_keluar']?></td>
        <td><?php echo $d['pembayaran']?></td>
        <td><a href="hapus_transaksi.php?id=<?php echo $d['id_transaksi'];?>">Hapus</a>
            <a href="edit_transaksi.php?id=<?php echo $d['id_transaksi'];?>">Edit</a>
    </tr>
    <?php
}     
 ?>
 </table>
 <a href="input-transaksi.php"> Tambahkan Data Baru</a> 
 <br><a href="home.html">Kembali</a></br>
 </form>
</html>