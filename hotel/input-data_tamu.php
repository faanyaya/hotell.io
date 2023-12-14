<link rel="stylesheet" href="style.css">
<style>
    form{
    width: 300px;
    height: 150px;
    margin: 120px auto;
    padding: 30px;
    background-color: #AAC8A7;
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

<form method="post" action="input-aksi-data_tamu.php">
<h3><b>Tambah Data Tamu</b></h3>
    <table>
        <tr>
            <td>id tamu</td>
            <td><input type="number" name="idtam"></td>
        </tr>
        <tr>
            <td>nama tamu</td>
            <td><input type="text" name="natam"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>no hp</td>
            <td><input type="number" name="nohp"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td><input type="submit" value="simpan"></td>
        </tr>
    </table>
    <a href="data_tamu.php">Kembali</a></br>
</form>