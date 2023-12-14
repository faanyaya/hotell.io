<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL GERHANA</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form{
    width: 900px;
    height: 260px;
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
.table {
	width: 100%;

	}

tr{
    text-align:left;
    
}
.navbar ul li a {
	color: rgb(204, 164, 54);
	text-transform: uppercase;
}
    </style>
</head>
<body>
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
<b>DATA KAMAR</b>
    <table border="1">
        <tr>
            <td>id kamar</td>
            <td>jenis kamar</td>
            <td>fasilitas</td>
            <td>Aksi</td>
        </tr>
<?php
include "koneksi.php";
$data=mysqli_query($koneksi,"select * from data_kamar");
while($d=mysqli_fetch_array($data)){
    ?>

    <tr>
        <td><?php echo $d['id_kamar']?></td>
        <td><?php echo $d['jenis_kamar']?></td>
        <td><?php echo $d['fasilitas']?></td>
        <td><a href="hapus_data_kamar.php?id=<?php echo $d['id_kamar'];?>">Hapus</a>
            <a href="edit_data_kamar.php?id=<?php echo $d['id_kamar'];?>">Edit</a>
    </tr>
    <?php
}     
 ?>
 </table>
 <a href="input-data_kamar.php"> Tambahkan Data Baru</a> 
 <br><a href="home.html">Kembali</a></br>
 </form>

</body>
</html>