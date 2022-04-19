<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '4';
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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="shortcut icon" href="1.jpeg">
    <title>Carcasa Zalman T1 Plus, mATX Mini Tower, Negru</title>
  </head>
  <script>
	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
  </script>

  <body>
<div id="wrapperhead">
		 <div id="header">
		  <h2 style="top:5px;bottom:0px;"><a href="primapagina.php"><img src="SIGLA.jpeg" alt="Italian Trulli" style="width:50%;"></a></h2>
		<!--  <div id="headerlinks">    <a href="">Contact Us</a> |		     <a href="">Site Map</a> |		     <a href="">Store Locator</a></div>-->

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
      </ul>
  <br><br><br>




    <div id="wrapper">
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Carcasa Zalman T1 Plus, mATX Mini Tower, Negru</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiCarcase/produs1/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiCarcase/produs1/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiCarcase/produs1/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
        114,98RON
    </p>

	<?php require($_page.".php"); ?>

      <script>
      function currentDiv(n) {
        showDivs(slideIndex = n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
      }
      </script>

</div>
<br>





    <p style="padding-left:2.5em;">
     &emsp;&emsp;<h1 style="margin-left:1.5em;">Descriere:</h1>
	<br>

	<ul style="margin-left:3em;font-size:18px;">
		<li>carcasa mini tower</li>
		<li>design aerodinamic cu fante frontale pentru admisia aerului</li>
		<li>suporta maxim 4 ventilatoare (unul inclus standard)</li>
		<li>interior full black</li>
		<li>filtre de praf preinstalate (frontal, lateral si podea)</li>
		<li>compatibilitate cu placi video performante (300 mm lungime maxima)</li>
		<li>instalare facila pentru HDD-uri si SSD-uri</li>
		<li>sistem de eliminare a vibratiilor produse de sursa si carcasa</li>
		<li>margini rotunjite pentru prevenirea leziunilor la instalarea componentelor</li>
		<li>interior optimizat pentru managementul cablurilor</li>
	</ul>

	<br>
      <div class="table-title">

      </div>
      <table class="table-fill">
      <thead>
      <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Specificatii</th>
      </tr>
      </thead>
      <tbody >
      <tr>
      <td class="text-left"class="table-hover" style="width:150px;">Culoare:</td>
      <td class="text-left"class="table-hover" style="width:600px;">Negru</td>
      </tr>
      <tr>
      <td class="text-left">Numar ventilatoare:</td>
      <td class="text-left">2 x 120 mm</td>
      </tr>
      <tr>
      <td class="text-left">Deschidere laterala</td>
      <td class="text-left">Da</td>
      </tr>
      <tr>
      <td class="text-left">Format</td>
      <td class="text-left">Micro ATX</td>
      </tr>
      <tr>
      <td class="text-left">Tip carcasa</td>
      <td class="text-left">Mini Tower</td>
      </tr>
      <tr>
      <td class="text-left">Numar locase fixe externe</td>
      <td class="text-left">1 x 5.25"</td>
      </tr>
      <tr>
      <td class="text-left">Numar locase fixe interne</td>
      <td class="text-left">2 x 3.5"<br>3 x 2.5"</td>
      </tr>
      <tr>
      <td class="text-left">Numar locase sloturi extensii</td>
      <td class="text-left">4</td>
      </tr>
      <tr>
      <td class="text-left">Altele</td>
      <td class="text-left">1 x USB2.0 <br> 1 x USB 3.0</td>
      </tr>
      <tr>
      <td class="text-left">Dimensiuni (W x H x D mm)</td>
      <td class="text-left">427.5 x 364 x 189 mm</td>
      </tr>


      </tbody>
      </table>

  </div>
  <script>
    showSlides(slideIndex);
  </script>



  </body>


<div id="wrapper3">
  	<footer class="footer-distributed" >
<div class="footer-left">

  <a href="primapagina.php"><img src="SIGLA.jpeg"></a>





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
    Make IT Tech este o companie românească hybrid, o platformă de cumpărături destinată cumpărăturilor online, deschisă către nou și inovativ. Versiunea siteului 1.0.0.4B
  </p>



</div>
</footer>
</div>
</html>
