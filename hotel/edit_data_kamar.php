<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HOTEL GERHANA</title>
   <link rel="stylesheet" href="style.css">
   <style>
       form{
    width: 300px;
    height: 130px;
    margin: 120px auto;
    padding: 30px;
    background-color:#AAC8A7;
    border-radius: 8px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 1);
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
	border-bottom: 1px solid grey;
}
h3{
    text-align:center;
}
.main {
	width: 100%;
	height: 100vh;
	background-image: linear-gradient(rgba(0, 0, 0, 0.55),#120e0e8c), url("home3.jpg");
	background-size: cover;
	background-position: center;
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


<?php
include 'koneksi.php';
$id= $_GET['id'];
$data = mysqli_query($koneksi,"select * from data_kamar where id_kamar='$id'");
while($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_data_kamar.php">
<h3><b> Edit Data Kamar </b></h3>
    <table>
       <tr>
          <td>id kamar</td>
          <td>
            <input type="number" name="idkam" value="<?php echo $tampil['id_kamar']; ?>">
          </td>
       </tr>
       <tr>
          <td>jenis kamar</td>
          <td>
            <input type="text" name="jekam" value="<?php echo $tampil['jenis_kamar']; ?>">
          </td>
       </tr>
       <tr>
          <td>fasilitas</td>
          <td>
            <input type="text" name="fasilitas" value="<?php echo $tampil['fasilitas']; ?>">
          </td>
       </tr>
       <tr>
        <td>
            <input type="submit" value="simpan">
        </td>
       </tr>
    </table>
    <a href="data_kamar.php">Kembali</a></br>
</form>

<?php
}
?>
</body>
</html>