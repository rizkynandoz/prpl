<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 50%;
      height: 50%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  } 
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="tampilanawal" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <img src="jde2.png" width="75px" height="75px">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">HOME</a></li>
        <li><a href="#menu">MENU</a></li>
        <li><a href="#paket">PAKET</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">CHANGE</a></li>
            <li><a href="login.php">LOG OUT</a></li> 
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
	  <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="kg.jpeg" alt="Kentang Goreng" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Kentang Goreng With Cheese Sauce</h3>
          <p>Recommended For You Guys</p>
        </div>      
      </div>

      <div class="item">
        <img src="st.jpeg" alt="Steak" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Steak</h3>
          <p>Recommended For You Guys</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="hb.jpeg" alt="Hamburger" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Hamburger with mozarella cheese</h3>
          <p>Recommended For You Guys</p>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="ps.jpeg" alt="Pasta" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Pasta</h3>
          <p>Recommended For You Guys</p>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="cp.jpeg" alt="Capuchino" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Capuchino</h3>
          <p>Recommended For You Guys</p>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="ms.jpeg" alt="Milkshake" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Milkshake</h3>
          <p>Recommended For You Guys</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Menu Section) -->
<div id="menu" class="container text-center">
  <h3>JUST DO EAT CAFE</h3>
  <p><em>We will serve you</em></p>
  <p>Just Do Eat merupakan suatu restoran yang berbentuk web, dimana kami akan melayani kebutuhan anda terhadap makanan ataupun minuman secara 24 jam</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Food</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="sbmk.jpeg" class="img-circle person" alt="Random Name" width="55" height="55">
      </a>
      <div id="demo" class="collapse">
        <p>DOUBLE / CHIKEN STEAK  </p>
		<p>Rp. 30.000,00 / Rp. 23.000,00</p>
        <p>DOUBLE / CHIKEN STEAK WITH HONEY SAUCE</p>
		<p>Rp. 33.000,00 / Rp. 26.000,00</p>
		<p>DOUBLE / CHIKEN STEAK WITH CHEESE SAUCE</p>
		<p>Rp. 34.000,00 / Rp. 27.000,00</p>
		<p>DOUBLE / CHIKEN STEAK WITH SPACY SAUCE</p>
		<p>Rp. 33.000,00 / Rp. 26.000,00</p>
		<p>DOUBLE / BEFF STEAK</p>
		<p>Rp. 40.000,00 / Rp. 33.000,00</p>
        <p>DOUBLE / BEEF STEAK WITH HONEY SAUCE</p>
		<p>Rp. 43.000,00 / Rp. 36.000,00</p>
		<p>DOUBLE / BEEF STEAK WITH CHEESE SAUCE</p>
		<p>Rp. 44.000,00 / Rp. 37.000,00</p>
		<p>DOUBLE / BEEF STEAK WITH SPACY SAUCE</p>
		<p>Rp. 43.000,00 / Rp. 36.000,00</p>
		<p>DOUBLE / SIRLOIN STEAK</p>
		<p>Rp. 45.000,00 / Rp. 38.000,00</p>
		<p>DOUBLE / SIRLOIN STEAK WITH HONEY SAUCE</p>
		<p>Rp. 48.000,00 / Rp. 41.000,00</p>
		<p>DOUBLE / SIRLOIN STEAK WITH CHEESE SAUCE</p>
		<p>Rp. 49.000,00 / Rp. 42.000,00</p>
		<p>DOUBLE / SIRLOIN STEAK WITH SPACY SAUCE</p>
		<p>Rp. 48.000,00 / Rp. 41.000,00</p>
		<p>SPAGETI BOLLOGNESE SAUCE</p>
		<p>Rp. 35.000,00</p>
		<p>SPAGETI CHEESE SAUCE</p>
		<p>Rp. 35.000,00</p>
		<p>FETUCCINI BOLLOGNESE SAUCE</p>
		<p>Rp. 37.000,00</p>
		<p>FETUCCINI CHEESE SAUCE</p>
		<p>Rp. 37.000,00</p>
		<p>LASAGNA</p>
		<p>Rp. 40.000,00</p>
		<p>FUSILLI CHEESE SAUCE</p>
		<p>Rp. 35.000,00</p>
		<p>FUSILLI BOLLOGNESE SAUCE</p>
		<p>Rp. 35.000,00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Snack</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="sbsk.jpeg" class="img-circle person" alt="Random Name" width="55" height="55">
      </a>
      <div id="demo2" class="collapse">
        <p>SMALL / LARGE KENTANG GORENG</p>
		<p>Rp. 15.000,00 / Rp. 18.000,00</p>
		<p>SMALL / LARGE KENTANG GORENG SPACY POWDER</p>
		<p>Rp. 15.000,00 / Rp. 18.000,00</p>
		<p>SMALL / LARGE KENTANG GORENG CHEESE SAUCE</p>
		<p>Rp. 17.000,00 / Rp. 21.000,00</p>
		<p>SMALL / LARGE KENTANG GORENG WITH MOZARELLA</p>
		<p>Rp. 18.000,00 / Rp. 22.000,00</p>
		<p>SMALL / LARGE ONION RING</p>
		<p>Rp. 15.000,00 / Rp. 18.000,00</p>
		<p>SMALL / LARGE ONION RING SPACY POWDER</p>
		<p>Rp. 15.000,00 / Rp. 18.000,00</p>
		<p>SMALL / LARGE ONION RING CHEESE SAUCE</p>
		<p>Rp. 17.000,00 / Rp. 21.000,00</p>
		<p>SMALL / LARGE ONION RING WITH MOZARELLA</p>
		<p>Rp. 18.000,00 / Rp. 22.000,00</p>
		<p>SMALL / LARGE SPACY CHIKEN WINGS</p>
		<p>Rp. 20.000,00 / Rp. 28.000,00</p>
		<p>SMALL / LARGE CHEESE SPACY CHIKEN WINGS</p>
		<p>Rp. 22.000,00 / Rp. 30.000,00</p>
		<p>SMALL / LARGE MOZARELLA SPACY CHHIKEN WINGS</p>
		<p>Rp. 23.000,00 / Rp. 31.000,00</p>
		<p>HAMBURGER CHIKEN</p>
		<p>Rp. 20.000,00</p>
		<p>HAMBURGER CHIKEN WITH CHEESE</p>
		<p>Rp. 23.000,00</p>
		<p>HAMBURGER CHIKEN WITH CHEESE + ONION RING</p>
		<p>Rp. 25.000,00</p>
		<p>HAMBURGER BEEF</p>
		<p>Rp. 25.000,00</p>
		<p>HAMBURGER BEEF WITH CHEESE</p>
		<p>Rp. 28.000,00</p>
		<p>HAMBURGER BEEF WITH CHEESE + ONION RING</p>
		<p>Rp. 30.000,00</p>
		<p>FISH AND CHIPS</p>
		<p>Rp. 25.000,00</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Drink</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="sbmn.jpeg" class="img-circle person" alt="Random Name" width="55" height="55">
      </a>
      <div id="demo3" class="collapse">
        <p>ICE / HOT TEA</p>
		<p>Rp. 10.000,00</p>
		<p>ICE / HOT ORANGE</p>
		<p>Rp. 13.000,00</p>
		<p>ICE / HOT CHOCOLATE</p>
		<p>Rp. 18.000,00</p>
		<p>ICE / HOT STRAWBERRY CHOCOLATE</p>
		<p>Rp. 18.000,00</p>
		<p>ICE / HOT CAFFE LATTE</p>
		<p>Rp. 20.000,00</p>
		<p>ICE / HOT VANILLA LATTE</p>
		<p>Rp. 22.000,00</p>
		<p>ICE / HOT MATCHA LATTE</p>
		<p>Rp. 22.000,00</p>
		<p>ICE / HOT MOCHACINNO</p>
		<p>Rp. 18.000,00</p>
		<p>ICE / HOT CHAPUCINNO</p>
		<p>Rp. 18.000,00</p>
		<p>ICE BLEND COFFE</p>
		<p>Rp. 19.000,00</p>
		<p>ICE BLEND COOKIES & CREAM</p>
		<p>Rp. 19.000,00</p>
		<p>ICE BLEND CHOCOLATE</p>
		<p>Rp. 19.000,00</p>
		<p>MILKSHAKE STRAWBERRY</p>
		<p>Rp. 20.000,00</p>
		<p>MILKSHAKE CHOCOLATE</p>
		<p>Rp. 20.000,00</p>
		<p>MILKSHAKE BANANA</p>
		<p>Rp. 20.000,00</p>
		<p>AVOCADO JUICE</p>
		<p>Rp. 15.000,00</p>
		<p>STRAWBERRY JUICE</p>
		<p>Rp. 15.000,00</p>
		<p>ORANGE JUICE</p>
		<p>Rp. 15.000,00</p>
		<p>APPLE JUICE</p>
		<p>Rp. 15.000,00</p>
		<p>BANANA JUICE</p>
		<p>Rp. 15.000,00</p>
		<p>MANGGO JUICE</p>
		<p>Rp. 15.000,00</p>
      </div>
    </div>
  </div>
  
    <div class="col-sm-4">
        <div class="thumbnail">
          <p><strong>Silahkan Klik "Beli" Untuk Memesan</strong></p>
          <a href="form_pesanan.php">Beli</a>
        </div>
      </div>
	  
</div>
  
  
<!-- Container (Paket Section) -->
<div id="paket" class="bg-1">
  <div class="container">
    <h3 class="text-center">PAKET MURAH</h3>
    <p class="text-center">Jangan sampai kehabisan buruan serbu.<br> Berlaku sampai dengan 30 Juni 2018</p>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="st.jpeg" alt="Paket 1" width="400" height="300">
          <p><strong>Paket 1</strong></p>
          <p>Spageti Bollognese Sauce</p>
		  <p>Hamburger Chiken</p>
		  <p>Avocado Juice</p>
		  <P>Total : Rp. 60.000,00</p>
          <a href="form_pesanan.php">Beli</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="st.jpeg" alt="Paket 2" width="400" height="500">
          <p><strong>Paket 2</strong></p>
          <p>Beef Steak</p>
		  <p>Kentang Goreng (small)</p>
		  <p>Ice Blend Chocolate</p>
		  <P>Total : Rp. 60.000,00</p>
          <a href="form_pesanan.php">Beli</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="st.jpeg" alt="Paket 3" width="400" height="300">
          <p><strong>Paket 3</strong></p>
          <p>Sirloin Steak (double)</p>
		  <p>Onion Ring With Mozarella (large)</p>
		  <p>Milkshake Strawberry</p>
		  <P>Total : Rp. 70.000,00</p>
          <a href="form_pesanan.php">Beli</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>Kririk dan Saran</em></p>

  <div class="row">
    <div class="col-md-4">
      <p><span class="glyphicon glyphicon-map-marker"></span>Jogjakarata, Indonesia</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +62 897-4567-1234</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: JustDoEat@gmail.com</p>
    </div>
    <div class="col-md-8">
	<form method="POST" action="koneksi.php">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="idcustomer" name="idcustomer" placeholder="Id Customer" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
		<div class="col-sm-6 form-group">
          <input class="form-control" id="no" name="no" placeholder="No Telepon" type="text" required>
        </div>
		<div class="col-sm-6 form-group">
          <input class="form-control" id="gender" name="gender" placeholder="Jenis Kelamin" type="text" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
	  
	  </form>
	  
	  <div class="row">
        <div id="member" class="col-lg-12">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Id Customer</th>
                    <th>Email</th>
					<th>No</th>
					<th>Gender</th>
                    <th>Komentar</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php
				$konek = new mysqli("localhost","root","","justdoeat");
	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
                $result = $konek->query("SELECT * FROM user");

                while ($mem = mysqli_fetch_assoc($result)):
                    echo '<tr>';
                    echo '<td>'.$mem['idcustomer'].'</td>';
                    echo '<td>'.$mem['email'].'</td>';
					echo '<td>'.$mem['no'].'</td>';
					echo '<td>'.$mem['gender'].'</td>';
                    echo '<td>'.$mem['comment'].'</td>';
                    echo '</tr>';
                endwhile;
                /* free result set */
                $result->close();
                ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
  </div>
  <br>
</div>

<div id="contact" class="container">
  <h3 class="text-center">Pengguna Terakhir</h3>
  
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

          <table id="myTable">
            <tr class="header">
              <th style="width:40%;">Name</th>
              <th style="width:20%;">Date</th>
              <th style="width:20%;">Item</th>
              <th style="width:20%;">Price</th>
            </tr>
            <tr>
              <td>Rizky Yoga Berliando</td>
              <td>25 April 2018</td>
              <td>Chiken Steak | Ice Tea</td>
              <td>Rp. 33.000,00</td>
            </tr>
			 <tr>
              <td>Nurul Salsabilla</td>
              <td>25 April 2018</td>
              <td>Chiken Steak | Orange Tea</td>
              <td>Rp. 36.000,00</td>
            </tr>
			 <tr>
              <td>Muh Fahmi</td>
              <td>24 April 2018</td>
              <td>Double Chiken Steak | Ice Tea</td>
              <td>Rp. 43.000,00</td>
            </tr>
			 <tr>
              <td>Banu Harli Trimulya SA</td>
              <td>24 April 2018</td>
              <td>Chiken Steak | Ice Tea</td>
              <td>Rp. 33.000,00</td>
            </tr>
			 <tr>
              <td>Ari Juanda</td>
              <td>23 April 2018</td>
              <td>Chiken Steak With Spacy Sauce | Ice Tea</td>
              <td>Rp. 39.000,00</td>
            </tr>
          </table>

          <script>
          function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[0];
              if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }       
            }
          }
          </script>
</div>


<!-- Footer -->
<footer class="text-center">
	<a class="up-arrow" href="#tampilanawal" data-toggle="tooltip" title="TO TOP">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</a><br><br>
	<table>
    <tr>
      <td><a href="https://www.facebook.com/"><img src="facebook.png" width="40px" height="40px"></a></td>
    </tr>
	<tr>
      <td><a href="https://www.instagram.com/"><img src="instagram.png" width="40px" height="40px"></a></td>
    </tr>
	<tr>
      <td><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="gmail.png" width="40px" height="40px"></a></td>
    </tr>
  </table>
	<p align="center">Copyright &copy;JUST DO EAT</p>
	<p align="center">Custom By : Nandaw Brilian</p>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>