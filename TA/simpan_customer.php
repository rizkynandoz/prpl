<!DOCTYPE html>
<html>
<head>
  <title>simpan</title>
  </link>
</head>
<body>
<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "justdoeat";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$password = $_POST ['password'];
$email = $_POST ['email'];
$username = $_POST ['username'];



$sql = "INSERT INTO customer(password, email, username) VALUES ('$password','$email','$username')";
if($konek->query($sql)){
	echo "";
}
else{
	echo "Data Customer Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tampil_customer.php'>Lihat Data Anda<a/>";
?>
</html>