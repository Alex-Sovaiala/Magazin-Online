<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '2';
	if(isset($_GET['page'])){

		$pages=array("products", "cart");

		if(in_array($_GET['page'], $pages)) {

			$_page=$_GET['page'];

		}else{

			$_page="products";

		}

	}else{

		$_page="products";

	}

?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="header.css">
<link rel="shortcut icon" href="1.jpeg">
<style>


h5 {
  position: relative;
  font-size: 40px;
  margin-top: 0;

  font-family: 'Myriad Pro', 'Myriad', helvetica, arial, sans-serif;
  text-shadow: 2px 3px 3px #292929;

}

h5 a {
  text-decoration: none;
  color: #5b5f66;
  position: absolute;
  -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from red, color-stop(50%, rgba(0,0,0,0)), to(rgba(0,0,0,1)));
  text-shadow: 0 2px 0 #e9e9e9;
  -webkit-transition: all .3s;
  -moz-transition: all .3s;
  transition: all .3s;
}

h5 a:hover {
  color: #d39904;
  -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from red, color-stop(50%, rgba(0,0,0,0)), to(rgba(0,0,0,1)));

}

h5:after {
  color: #dbdbdb;
  content : attr(data-title);
}
</style>
<title>Componente</title>
<script>(function($){
  $(window).on("load",function(){
    $(".mcs-horizontal-example").mCustomScrollbar({
      axis:"x",
      theme:"dark-3"
    });
  });
})(jQuery);
</script>

</head>

<body>
<div id="wrapperhead">
		 <div id="header">
		  <h2 style="top:5px;bottom:0px;"><a href="primapagina.php"><img src="SIGLA.jpeg" alt="Italian Trulli" style="width:50%;"></a></h2>
		<!--  <div id="headerlinks">    <a href="">Contact Us</a> |		     <a href="">Site Map</a> |		     <a href="">Store Locator</a></div>-->

		 </div>
	</div>

	  <ul id="menu">

	        <li><a href="#" class="drop">PCs</a><!-- Begin 4 columns Item -->

	            <div class="dropdown_4columns"><!-- Begin 4 columns container -->


	                <div class="col_1">

	                    <h3>PCs</h3>

	                    <ul>
	                      <li ><a href="PC.php">Desktop PC</a></li>
	                      <div class="col_1">

	                          <h3>Componente PC</h3>

	                          <ul>
	                            <li ><a href="Componente.php">Componente pc</a></li>
	                          </ul>

	                      </div>

	                    </ul>

	                </div>

	                <div class="col_1">

	                    <h3>Laptop</h3>
	                    <ul>
	                        <li><a href="Laptopuri.php">Laptopuri</a></li>
	                    </ul>

	                </div>



	                <div class="col_1">

	                    <h3>Brand Pc</h3>
	                    <ul>
	                      <li><a href="Produs1PCLENOV.php">Lenovo</a></li>
	                      <li><a href="Produs1PCDELL.php">Dell</a></li>
	                      <li><a href="Produs1PCACER.php">Acer</a></li>
	                    </ul>

	                </div>

	                <div class="col_1">

	                    <h3>Brand Laptop</h3>
	                    <ul>
	                        <li><a href="Produs1ACER.php">Acer</a></li>
	                        <li><a href="Produs1DELL.php">Dell</a></li>
	                        <li><a href="Produs1Lenov.php">Lenovo</a></li>
	                    </ul>

	                </div>

	            </div><!-- End 4 columns container -->

	        </li><!-- End 4 columns Item -->
	        <li><a href="" class="drop">Televizoare</a>
	          <!-- Begin 4 columns Item -->
	          <div class="dropdown_1column">
	            <!-- Begin 4 columns container -->
	            <div class="col_1">
	              <h3>Tip</h3>
	              <ul>
	                <li ><a href="Televizoare.php">Televizoare</a></li>
                  </ul>
                </div>

              </div>
	          <!-- End 4 columns container -->
          </li>
	        <!-- End 4 columns Item -->
          <li><a href="#" class="drop">Telefoane</a>
              <!-- Begin 4 columns Item -->
              <div class="dropdown_1column">
                <!-- Begin 4 columns container -->
                <div class="col_1">
                  <h3><a href="Telefoane.php">Telefoane</a></h3>
                  <ul>
                    <li ><a href="Produs1APP.php">Apple</a></li>
                    <li><a href="Produs1HWE.php">Huawei</a></li>
                    <li><a href="Produs1ALL.php">Allview</a></li>
                  </ul>
                </div>
              </div>

          </li>
					<li>
						<a href="Bibliografie.php" class="drop">Bibliografie</a>
					</li>

		  <?php if(isset($_SESSION['username'])): ?>
						<a href="index.php"><div  style="float:right; padding-right:5px; padding-top:10px; margin-top:0;" ><img src="cos1.jpg" alt="Smiley face" height="25px" width="30px"><h4 style="color:yellow; float:right; margin-top:0; padding-top:0; font-size:15px;"> <?php echo $_SESSION['totalquantity']?></h1></a></div>

					<li style="float:right; padding-right:5px;"><a class="drop">Contul meu</a>
					<div class="dropdown_1column">
						<div class="col_1">
							<ul>
								<li><a href="profil.php">Profilul meu</a></li>
								<li><a href="logout.php">Delogare</a></li>
							</ul>
						</div>
					</div>
				</li>

			<?php else: ?>
			<li style="float:right; padding-right:5px; border-radius: 5px 5px 5px 5px;"><a href="login.php">Autentificare</a></li>
			<?php endif; ?>
      </ul><br><br><br>

<div id="fundal">
<div id="wrapper2"  style="padding-top:0px;padding-left:0px;padding-right:0px;margin:0px;">
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">Recomandari</a></h5>

	<br>
	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1P.php">
			<div class="container">
			<img src="imaginiP/produs1/1.jpg" class="item" id="imgProd">
			<div class="overlay">
				<div class="text">2558,94 LEI</div>
			</div>
			</div>
		</a>
		<a href="Produs2RAM.php">
			<div class="container">
			<img src="imaginiRAM/produs2/1.jpg" class="item" id="imgProd" >
			<div class="overlay">
				<div class="text">379,99 LEI</div>
			</div>
			</div>
		</a>
    <a href="Produs3Carcase.php">
      <div class="container">
      <img src="imaginiCarcase/produs3/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">119.99 LEI</div>
      </div>
      </div>
    </a>

	<a href="Produs1VID.php">
      <div class="container">
      <img src="imaginiVID/produs1/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">1367.31 LEI</div>
      </div>
      </div>
    </a>

	<a href="Produs1SUN.php">
      <div class="container">
      <img src="imaginiSUN/produs1/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">319.99 LEI</div>
      </div>
      </div>
    </a>

	<a href="Produs1SSD.php">
      <div class="container">
      <img src="imaginiSSD/produs1/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">119.99 LEI</div>
      </div>
      </div>
    </a>

	<a href="Produs3SUR.php">
      <div class="container">
      <img src="imaginiSUR/produs3/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">1949.53 LEI</div>
      </div>
      </div>
    </a>

	<a href="Produs3HDD.php">
      <div class="container">
      <img src="imaginiHDD/produs3/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">1749.00 LEI</div>
      </div>
      </div>
    </a>


		<!-- etc. -->
	</div>
</div>

<div id="wrapper2"  style="top:1em;padding-top:0px;padding-left:0px;padding-right:0px;" >
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">Procesoare</a></h5>

	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1P.php">
			<div class="container">
			<img src="imaginiP/produs1/1.jpg" class="item" id="imgProd">
			<div class="overlay">
				<div class="text">2558,94 LEI</div>
			</div>
			</div>
		</a>
		<a href="Produs2P.php">
			<div class="container">
			<img src="imaginiP/produs2/1.jpg" class="item" id="imgProd" >
			<div class="overlay">
				<div class="text">829,99 LEI</div>
			</div>
			</div>
		</a>
    <a href="Produs3P.php">
      <div class="container">
      <img src="imaginiP/produs3/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">495.00 LEI</div>
      </div>
      </div>
    </a>
	</div>
</div>



<div id="wrapper2"  style="top:1em;padding-top:0px;padding-left:0px;padding-right:0px;" >
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">Memorii</a></h5>

	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1RAM.php">
			<div class="container">
			<img src="imaginiRAM/produs1/1.jpg" class="item" id="imgProd">
			<div class="overlay">
				<div class="text">724,00 LEI</div>
			</div>
			</div>
		</a>
		<a href="Produs2RAM.php">
			<div class="container">
			<img src="imaginiRAM/produs2/1.jpg" class="item" id="imgProd" >
			<div class="overlay">
				<div class="text">379,99 LEI</div>
			</div>
			</div>
		</a>
    <a href="Produs3RAM.php">
      <div class="container">
      <img src="imaginiRAM/produs3/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">304,94 LEI</div>
      </div>
      </div>
    </a>
	</div>
</div>

<div id="wrapper2" style="top:2em;padding-top:0px;padding-left:0px;padding-right:0px;" >
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">Carcase</a></h5>

	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1Carcase.php">
      <div class="container">
      <img src="imaginiCarcase/produs1/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">114,98 LEI</div>
      </div>
      </div>
    </a>
	<a href="Produs2Carcase.php">
      <div class="container">
      <img src="imaginiCarcase/produs2/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">102,00 LEI</div>
      </div>
      </div>
    </a>
	<a href="Produs3Carcase.php">
      <div class="container">
      <img src="imaginiCarcase/produs3/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">119,99 LEI</div>
      </div>
      </div>
    </a>

	</div>	<!-- etc. -->

</div>

<div id="wrapper2" style="top:3em;padding-top:0px;padding-left:0px;padding-right:0px;">
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">Placi video</a></h5>

	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1VID.php">
      <div class="container">
      <img src="imaginiVID/produs1/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">1367,31 LEI</div>
      </div>
      </div>
    </a>
    <a href="Produs2VID.php">
      <div class="container">
      <img src="imaginiVID/produs2/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">889,99 LEI</div>
      </div>
      </div>
    </a>
    <a href="Produs3VID.php">
      <div class="container">
      <img src="imaginiVID/produs3/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">246,55 LEI</div>
      </div>
      </div>
    </a>

		<!-- etc. -->
	</div>
</div>

<div id="wrapper2" style="top:3em;padding-top:0px;padding-left:0px;padding-right:0px;">
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">Placi audio</a></h5>

	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1SUN.php">
      <div class="container">
      <img src="imaginiSUN/produs1/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">319,99 LEI</div>
      </div>
      </div>
    </a>
    <a href="Produs2SUN.php">
      <div class="container">
      <img src="imaginiSUN/produs2/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">132,09 LEI</div>
      </div>
      </div>
    </a>
    <a href="Produs3SUN.php">
      <div class="container">
      <img src="imaginiSUN/produs3/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">35,80 LEI</div>
      </div>
      </div>
    </a>

		<!-- etc. -->
	</div>
</div>

<div id="wrapper2" style="top:3em;padding-top:0px;padding-left:0px;padding-right:0px;">
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">SSD-uri</a></h5>

	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1SSD.php">
      <div class="container">
      <img src="imaginiSSD/produs1/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">289,99 LEI</div>
      </div>
      </div>
    </a>
    <a href="Produs2SSD.php">
      <div class="container">
      <img src="imaginiSSD/produs2/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">121,23 LEI</div>
      </div>
      </div>
    </a>
    <a href="Produs3SSD.php">
      <div class="container">
      <img src="imaginiSSD/produs3/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">88,31 LEI</div>
      </div>
      </div>
    </a>

		<!-- etc. -->
	</div>
</div>

<div id="wrapper2" style="top:3em;padding-top:0px;padding-left:0px;padding-right:0px;">
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">Surse</a></h5>

	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1SUR.php">
      <div class="container">
      <img src="imaginiSUR/produs1/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">199,99 LEI</div>
      </div>
      </div>
    </a>
    <a href="Produs2SUR.php">
      <div class="container">
      <img src="imaginiSUR/produs2/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">289,99 LEI</div>
      </div>
      </div>
    </a>
    <a href="Produs3SUR.php">
      <div class="container">
      <img src="imaginiSUR/produs3/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">1949,53 LEI</div>
      </div>
      </div>
    </a>

		<!-- etc. -->
	</div>
</div>

<div id="wrapper2" style="top:3em;padding-top:0px;padding-left:0px;padding-right:0px;">
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">HDD-uri</a></h5>

	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1HDD.php">
      <div class="container">
      <img src="imaginiHDD/produs1/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">195,00 LEI</div>
      </div>
      </div>
    </a>
    <a href="Produs2HDD.php">
      <div class="container">
      <img src="imaginiHDD/produs2/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">115,12 LEI</div>
      </div>
      </div>
    </a>
    <a href="Produs3HDD.php">
      <div class="container">
      <img src="imaginiHDD/produs3/1.jpg" class="item" id="imgProd">
      <div class="overlay">
        <div class="text">1749,00 LEI</div>
      </div>
      </div>
    </a>

		<!-- etc. -->
	</div>
</div>





</div>









<div id="wrapper3">
  	<footer class="footer-distributed" >
<div class="footer-left">

  <a href="primapagina.php"><img src="SIGLA.jpeg"></a>




  <p class="footer-company-name">Company Name &copy; 2019</p>
</div>

<div class="footer-center">

  <div>
    <i class="fa fa-map-marker"></i>
    <p><span>Str. Șoseaua Vestului nr. 205-206</span> Ploiești, Prahova, România</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>+40 72 54 19 63</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:support@company.com">makeittech@gmail.com</a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span>Despre companie</span>
    Make IT Tech este o companie românească hybrid, o platformă de cumpărături destinată cumpărăturilor online, deschisă către nou și inovativ. Versiunea siteului 1.0.0.4B </p>



</div>
</footer>
</div>

</body>


</html>
