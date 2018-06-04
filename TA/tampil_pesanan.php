
<!DOCTYPE html>
<html>
<head>
  <title>Tampil Customer</title>
  <style>
body{
	margin: 0;
	padding: 0;
	background: url(ms.jpeg);
	background-size : cover;
	background-position: center top;
	font-family: sans-serif;
	background-repeat: no-repeat;
}
  * {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>

<body>
  
  <h1 align="center">Daftar Pesanan</h1>
  <center>
  <table border='1'>
    <tr><td>No.</td>
      <td>ID Customer</td>
	  <td>Nama Pemesan</td>
      <td>Nama Makanan</td>
	  <td>Harga</td>
      <td>Jumlah Makanan</td>
	  <td>Nama Snack</td>
	  <td>Harga</td>
      <td>Jumlah Snack</td>
	  <td>Nama Minuman</td>
	  <td>Harga</td>
      <td>Jumlah Minuman</td>
      <td>E-mail</td>
      <td>Alamat</td>
	  <td>Total Harga</td>
	  <td>Uang Pembayaran</td>
	  <td>Kembalian</td>
    </tr>
	
	</center>
	<a href='home.php'>Klik Untuk Kembali ke Menu</a>
	
	<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "justdoeat";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM paket";
$data = $konek->query($sql);

if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idcustomer']."</td>";
	echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['namamakanan']."</td>";
	echo "<td>".$row['hargamakanan']."</td>";
    echo "<td>".$row['jumlahmakanan']."</td>";
    echo "<td>".$row['namasnack']."</td>";
	echo "<td>".$row['hargasnack']."</td>";
    echo "<td>".$row['jumlahsnack']."</td>";
	echo "<td>".$row['namaminuman']."</td>";
	echo "<td>".$row['hargaminuman']."</td>";
    echo "<td>".$row['jumlahminuman']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['alamat']."</td>";
	echo "<td>".$row['total']."</td>";
	echo "<td>".$row['bayar']."</td>";
	echo "<td>".$row['kembalian']."</td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>

</body>
</html>