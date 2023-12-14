<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HOTEL GERHANA</title>
   <link rel="stylesheet" href="style.css">
   <style>
           form{
    width: 400px;
    height: 200px;
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
$data = mysqli_query($koneksi,"select * from transaksi where id_transaksi='$id'");
while($tampil= mysqli_fetch_array($data)){
?>
<form method="post" action="edit_aksi_transaksi.php">
<h3><b> Edit Transaksi </b></h3>
    <table>
       <tr>
          <td>id transaksi</td>
          <td>
            <input type="number" name="idtrans" value="<?php echo $tampil['id_transaksi']; ?>">
          </td>
       </tr>
       <tr>
          <td>id tamu</td>
          <td>
            <input type="text" name="idtam" value="<?php echo $tampil['id_tamu']; ?>">
          </td>
       </tr>
       <tr>
          <td>id kamar</td>
          <td>
            <input type="text" name="idkam" value="<?php echo $tampil['id_kamar']; ?>">
          </td>
       </tr>
       <tr>
          <td>id karyawan</td>
          <td>
            <input type="number" name="idkar" value="<?php echo $tampil['id_karyawan']; ?>">
          </td>
       </tr>
       <tr>
          <td>tgl masuk</td>
          <td>
            <input type="date" name="tm" value="<?php echo $tampil['tgl_masuk']; ?>">
          </td>
       </tr>
       <tr>
          <td>tgl keluar</td>
          <td>
            <input type="date" name="tk" value="<?php echo $tampil['tgl_keluar']; ?>">
          </td>
       </tr>
       <tr>
          <td>pembayaran</td>
          <td>
            <input type="text" name="pembayaran" value="<?php echo $tampil['pembayaran']; ?>">
          </td>
       </tr>
       <tr>
        <td>
            <input type="submit" value="simpan">
        </td>
       </tr>
    </table>
    <a href="transaksi.php">Kembali</a></br>
</form>

<?php
}
?>
</body>
</html>