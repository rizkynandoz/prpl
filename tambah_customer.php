<!DOCTYPE html>
<html>
<head>
	<title>Data Customer</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
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

<a href="Login.php">Cancel </a>
<h2>Masukkan Data Customer</h2>
<div class="container">
  <form action="simpan_customer.php" method="post">
  	<div class="row">
      <div class="col-25">
        <label for="fname">Username : </label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="username" pattern="[A-Za-z]+$" title="diisi huruf" required />
      </div>
    </div>
	   <div class="row">
      <div class="col-25">
        <label for="fname">Email : </label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="untuk contoh nando@gmail.com" required />
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Password : </label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="password" pattern="^\d{8}$" title="diisi angka" required  />
      </div>
    </div>	

    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>
</html>