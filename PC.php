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
<link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="footer.css">
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
<title>PC</title>
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
		<a href="Produs1PCACER.php">
			<div class="container">
			<img src="imaginiPCAcer/produs1/1.jpg" class="item" id="imgProd">
			<div class="overlay">
				<div class="text">3799,99 LEI</div>
			</div>
			</div>
		</a>
		<a href="Produs2PCACER.php">
			<div class="container">
			<img src="imaginiPCAcer/produs2/1.jpg" class="item" id="imgProd" >
			<div class="overlay">
				<div class="text">8299,99 LEI</div>
			</div>
			</div>
		</a>
    <a href="Produs3PCACER.php">
      <div class="container">
      <img src="imaginiPCAcer/produs3/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">4199.00 LEI</div>
      </div>
      </div>
    </a>

	<a href="Produs1PCDELL.php">
      <div class="container">
      <img src="imaginiPCDell/produs1/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">3422.99 LEI</div>
      </div>
      </div>
    </a>
	<a href="Produs2PCDELL.php">
      <div class="container">
      <img src="imaginiPCDell/produs2/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">2499.99 LEI</div>
      </div>
      </div>
    </a>
	<a href="Produs3PCDELL.php">
      <div class="container">
      <img src="imaginiPCDell/produs3/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">2599.99 LEI</div>
      </div>
      </div>
    </a>

	<a href="Produs1PCLENOV.php">
      <div class="container">
      <img src="imaginiPCLenov/produs1/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">1783.81 LEI</div>
      </div>
      </div>
    </a>

	<a href="Produs2PCLENOV.php">
      <div class="container">
      <img src="imaginiPCLenov/produs2/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">2949.99 LEI</div>
      </div>
      </div>
    </a>

	<a href="Produs3PCLENOV.php">
      <div class="container">
      <img src="imaginiPCLenov/produs3/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">5299.99 LEI</div>
      </div>
      </div>
    </a>


	</div>


</div>




<div id="wrapper2"  style="top:1em;padding-top:0px;padding-left:0px;padding-right:0px;" >
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">Acer</a></h5>

	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1PCACER.php">
			<div class="container">
			<img src="imaginiPCAcer/produs1/1.jpg" class="item" id="imgProd">
			<div class="overlay">
				<div class="text">3799,99 LEI</div>
			</div>
			</div>
		</a>
		<a href="Produs2PCACER.php">
			<div class="container">
			<img src="imaginiPCAcer/produs2/1.jpg" class="item" id="imgProd" >
			<div class="overlay">
				<div class="text">8299,99 LEI</div>
			</div>
			</div>
		</a>
    <a href="Produs3PCACER.php">
      <div class="container">
      <img src="imaginiPCAcer/produs3/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">4199.00 LEI</div>
      </div>
      </div>
    </a>
	</div>
</div>



<div id="wrapper2"  style="top:1em;padding-top:0px;padding-left:0px;padding-right:0px;" >
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">Lenovo</a></h5>

	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1PCLENOV.php">
      <div class="container">
      <img src="imaginiPCLenov/produs1/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">1783.81 LEI</div>
      </div>
      </div>
    </a>

	<a href="Produs2PCLENOV.php">
      <div class="container">
      <img src="imaginiPCLenov/produs2/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">2949.99 LEI</div>
      </div>
      </div>
    </a>

	<a href="Produs3PCLENOV.php">
      <div class="container">
      <img src="imaginiPCLenov/produs3/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">5299.99 LEI</div>
      </div>
      </div>
    </a>
	</div>
</div>

<div id="wrapper2" style="top:2em;padding-top:0px;padding-left:0px;padding-right:0px;" >
	<h5 style="background-image: linear-gradient(#87b4ff , white);">&emsp; <a href="#">Dell</a></h5>

	<div class="mcs-horizontal-example" style="margin-left:1em;margin-right:1em;">
		<a href="Produs1PCDELL.php">
      <div class="container">
      <img src="imaginiPCDell/produs1/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">3422.99 LEI</div>
      </div>
      </div>
    </a>
	<a href="Produs2PCDELL.php">
      <div class="container">
      <img src="imaginiPCDell/produs2/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">2499.99 LEI</div>
      </div>
      </div>
    </a>
	<a href="Produs3PCDELL.php">
      <div class="container">
      <img src="imaginiPCDell/produs3/1.jpg" class="item" id="imgProd" >
      <div class="overlay">
        <div class="text">2599.99 LEI</div>
      </div>
      </div>
    </a>

	</div>	<!-- etc. -->

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
    <p><span>Str. ??oseaua Vestului nr. 205-206</span> Ploie??ti, Prahova, Rom??nia</p>
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
    Make IT Tech este o companie rom??neasc?? hybrid, o platform?? de cump??r??turi destinat?? cump??r??turilor online, deschis?? c??tre nou ??i inovativ. Versiunea siteului 1.0.0.4B </p>



</div>
</footer>
</div>

</body>


</html>
