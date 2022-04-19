<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '55';
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
    <title>Telefon mobil Apple iPhone 5S, 16GB, Gold</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Telefon mobil Apple iPhone 5S, 16GB, Gold</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiApple/produs3/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiApple/produs3/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiApple/produs3/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
       900,00RON
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




      <div class="table-title">

      </div>
      <table class="table-fill">
      <thead>
      <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Caracteristici generale</th>
      </tr>
      </thead>
      <tbody >
      <tr>
      <td class="text-left"class="table-hover" style="width:150px;">Tip Telefon</td>
      <td class="text-left"class="table-hover" style="width:600px;">Smarphone</td>
      </tr>
      <tr>
      <td class="text-left">Sloturi sim</td>
      <td class="text-left">Single SIM</td>
      </tr>
      <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >General</th>
      </tr>
      <tr>
      <td class="text-left">Touchscreen</td>
      <td class="text-left">Da</td>
      </tr>
      <tr>
      <td class="text-left">Tip tastatura</td>
      <td class="text-left">Standard</td>
      </tr>
      <tr>
      <td class="text-left">Frecventa retea</td>
      <td class="text-left">3G: 850 / 900 / 1900 / 2100<br>
	  2G: 850 / 900 / 1800 / 1900<br>
4G: 800 / 900 / 1800 / 2100 / 2600</td>
      </tr>
      <tr>
      <td class="text-left">Model procesor</td>
      <td class="text-left">Apple A7 64-bit (coprecesor M7 motion)</td>
      </tr>
	  <tr>
      <td class="text-left">Culoare</td>
      <td class="text-left">Gold</td>
      </tr>
	  <tr>
      <td class="text-left">Dimensiuni (W x H x D mm)</td>
      <td class="text-left">58.6 x 123.8 x 7.6<br>
GLONASS</td>
      </tr>
	  <tr>
      <td class="text-left">Greutate (g)</td>
      <td class="text-left">112 </td>
      </tr>
	  <tr>
      <td class="text-left">Sistem de operare</td>
      <td class="text-left">IOS 9.3</td>
      </tr>
	  <tr>
      <td class="text-left">Tip SIM</td>
      <td class="text-left">nanoSIM</td>
      </tr>
	  <tr>
      <td class="text-left">GPS</td>
      <td class="text-left">Da, cu A-GPS</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Memorie</th>
      </tr>
	  <tr>
      <td class="text-left">Memorie</td>
      <td class="text-left">1 GB</td>
      </tr>
	  <tr>
      <td class="text-left">Memorie interna</td>
      <td class="text-left">16 GB</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Afisaj</th>
      </tr>
      <tr>
      <td class="text-left">Rezolutie</td>
      <td class="text-left">640 x 1136</td>
      </tr>
	  <tr>
      <td class="text-left">Diagonala display</td>
      <td class="text-left">4</td>
      </tr>
	  <tr>
      <td class="text-left">Functii</td>
      <td class="text-left">800:1 contrast,
Multi-touch,
</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Conectivitate</th>
      </tr>
      <tr>
      <td class="text-left">Tehnologie Bluetooth</td>
      <td class="text-left">v4.0</td>
      </tr>
	  <tr>
      <td class="text-left">GPRS</td>
      <td class="text-left">Da</td>
      </tr>
	  <tr>
      <td class="text-left">Tehnolgie wireless</td>
      <td class="text-left">Wi-Fi 802.11 b/g/n</td>
      </tr>
	  <tr>
      <td class="text-left">NFC</td>
      <td class="text-left">Nu</td>
      </tr>
      <tr>
      <td class="text-left">Porturi</td>
      <td class="text-left">1 x Jack 3.5 mm<br>
(USB) Lightning</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Foto video</th>
      </tr>
	  <tr>
      <td class="text-left">Rezolutie camera (Mp)</td>
      <td class="text-left">8 MP</tr>
	  <tr>
	  <tr>
      <td class="text-left">Rezolutie foto (Mp)</td>
      <td class="text-left">3264 x 2448</tr>
	  <tr>
	  <tr>
      <td class="text-left">Blitz integrat</td>
      <td class="text-left">LED</tr>
	  <tr>
	  <tr>
      <td class="text-left">Rezolutie video</td>
      <td class="text-left">1920 x 1080</tr>
	  <tr>
	  <tr>
      <td class="text-left">Camera secundara</td>
      <td class="text-left">1.2 MP</tr>
	  <tr>
	  <tr>
      <td class="text-left">Caracteristici foto/video</td>
      <td class="text-left">Auto Focus<br>
Detectarea fetei<br>
Geotagging<br>
Mod foto: Panoramic<br>
Stabilizator imagine<br>
FaceTime</tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Alimentare</th>
      </tr>
	  <tr>
      <td class="text-left">Durata convorbire</td>
      <td class="text-left">3G: 10 ore
	  </td>
	  <tr>
      <td class="text-left">Durata in regim de asteptatre</td>
      <td class="text-left">3G: 250 ore
	  </td>
	  </tr>
	  <tr>
      <td class="text-left">Tip baterie</td>
      <td class="text-left">Li-Ion</td>
	  </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Altele</th>
      </tr>
	  <tr>
      <td class="text-left">SAR (W/kg )</td>
      <td class="text-left">0.97</td>
      </tr>
	  <tr>
      <td class="text-left">Senzori</td>
      <td class="text-left">Busola digitala<br>
Gyroscope<br>
Senzor de lumina ambientala<br>
Senzor de proximitate<br>
Accelerometru</td>
      </tr>
	  <tr>
      <td class="text-left">Altele</td>
      <td class="text-left">WiFi Dual band<br>
Apple EarPods<br>
Siri<br>
Twitter si Facebook integrat
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
