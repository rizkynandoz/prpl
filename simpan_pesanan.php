<!DOCTYPE html>
<html>
<head>
  <title>simpan</title>
  </link>
   <style>
body{
	margin: 0;
	padding: 0;
	background: url(ps.jpeg);
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

$idcustomer = $_POST ['idcustomer'];
$nama = $_POST ['nama'];
$namamakanan = $_POST ['namamakanan'];
$hargamakanan = $_POST ['hargamakanan'];
$jumlahmakanan = $_POST ['jumlahmakanan'];
$namasnack = $_POST ['namasnack'];
$hargasnack = $_POST ['hargasnack'];
$jumlahsnack = $_POST ['jumlahsnack'];
$namaminuman = $_POST ['namaminuman'];
$hargaminuman = $_POST ['hargaminuman'];
$jumlahminuman = $_POST ['jumlahminuman'];
$email = $_POST ['email'];
$alamat = $_POST ['alamat'];
$total = $_POST ['total'];
$bayar = $_POST ['bayar'];
$kembalian = $_POST ['kembalian'];

$sql = "INSERT INTO paket(idcustomer, nama, namamakanan, hargamakanan, jumlahmakanan, namasnack, hargasnack, jumlahsnack, namaminuman, hargaminuman, jumlahminuman, email, alamat, total, bayar, kembalian) VALUES ('$idcustomer','$nama','$namamakanan','$hargamakanan','$jumlahmakanan','$namasnack','$hargasnack','$jumlahsnack','$namaminuman','$hargaminuman','$jumlahminuman','$email','$alamat','$total','$bayar','$kembalian')";
if($konek->query($sql)){
	echo "Pesanan Anda Terkirim";
}
else{
	echo "Data Customer Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tampil_pesanan.php'>Lihat Pesanan Anda<a/>";
?>
</html>