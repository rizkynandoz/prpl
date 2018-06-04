<html>
<head>
<title>Login Website</title>

<?php
	$konek = new mysqli("localhost","root","","justdoeat");
	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	$idcustomer = $_POST['idcustomer'];
	$email = $_POST['email'];
	$no = $_POST['no'];
	$gender = $_POST['gender'];
	$comment = $_POST['comments'];
	$sql = "insert into user(idcustomer, email, no, gender, comment) values ('$idcustomer','$email','$no','$gender','$comment')";
	if($konek->query($sql)){
		echo "<a href='contact.php'>Coba Cek</a>";
	}
	else{
		echo "Database Tidak Berhasil di Buat karena ".$konek->error;
	}
	$konek->close();
	
?>

</html>