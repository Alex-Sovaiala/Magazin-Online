<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '28';
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
    <title>Telefon mobil Huawei P Smart, Dual SIM, 32GB, 4G, Blue</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Telefon mobil Huawei P Smart, Dual SIM, 32GB, 4G, Blue</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiHuawei/produs2/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiHuawei/produs2/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiHuawei/produs2/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
       769,00RON
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
      <td class="text-left">Hybrid Dual SIM</td>
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
      <td class="text-left">HiSilicon Kirin 659</td>
      </tr>
	  <tr>
      <td class="text-left">Frecventa procesor</td>
      <td class="text-left">4 x 2.36GHz & 4 x 1.7GHz</td>
      </tr>
	  <tr>
      <td class="text-left">Culoare</td>
      <td class="text-left">Albastru</td>
      </tr>
	  <tr>
      <td class="text-left">Dimensiuni (W x H x D mm)</td>
      <td class="text-left">72.1 x 150.1 x 7.5</td>
      </tr>
	  <tr>
      <td class="text-left">Greutate (g)</td>
      <td class="text-left">165 </td>
      </tr>
	  <tr>
      <td class="text-left">Sistem de operare</td>
      <td class="text-left">Android 8.0 (Oreo)</td>
      </tr>
	  <tr>
      <td class="text-left">Tip SIM</td>
      <td class="text-left">nanoSIM</td>
      </tr>
	  <tr>
      <td class="text-left">GPS</td>
      <td class="text-left">GLONASS, A-GPS, Bds</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Memorie</th>
      </tr>
	  <tr>
      <td class="text-left">Memorie</td>
      <td class="text-left">3 GB</td>
      </tr>
	  <tr>
      <td class="text-left">Memorie interna</td>
      <td class="text-left">32 GB</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Afisaj</th>
      </tr>
	  <tr>
      <td class="text-left">Tip display</td>
      <td class="text-left">IPS LCD</td>
      </tr>
      <tr>
      <td class="text-left">Rezolutie</td>
      <td class="text-left">1080 x 2160</td>
      </tr>
	  <tr>
      <td class="text-left">Diagonala display</td>
      <td class="text-left">5.65</td>
      </tr>
	  <tr>
      <td class="text-left">Functii</td>
      <td class="text-left">427 ppi
</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Conectivitate</th>
      </tr>
      <tr>
      <td class="text-left">Tehnologie Bluetooth</td>
      <td class="text-left">4.2</td>
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
      <td class="text-left">USB</td>
      <td class="text-left">Micro USB</td>
      </tr>
      <tr>
      <td class="text-left">Porturi</td>
      <td class="text-left">1 x Jack 3.5 mm</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Foto video</th>
      </tr>
	  <tr>
      <td class="text-left">Rezolutie camera (Mp)</td>
      <td class="text-left">13 + 2(Dual camera)</tr>
	  <tr>
	  <tr>
      <td class="text-left">Rezolutie foto (Mp)</td>
      <td class="text-left">4160 x 3120</tr>
	  <tr>
	  <tr>
      <td class="text-left">Blitz integrat</td>
      <td class="text-left">Da</tr>
	  <tr>
	  <tr>
      <td class="text-left">Rezolutie video</td>
      <td class="text-left">1080p@30fps</tr>
	  <tr>
	  <tr>
      <td class="text-left">Camera secundara</td>
      <td class="text-left">8 MP</tr>
	  <tr>
	  <tr>
      <td class="text-left">Caracteristici foto/video</td>
      <td class="text-left">Panorama<br>
HDR<br>
PDAF<br>
Mod infrumusetare<br>
Geo-etichetare, focus tactil, detectie fata</tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Alimentare</th>
      </tr>
	  <tr>
      <td class="text-left">Capacitate</td>
      <td class="text-left">3000 mAh
	  </td>
	  <tr>
      <td class="text-left">Tip baterie</td>
      <td class="text-left">Li-Po</td>
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
      <td class="text-left">Compas<br>
Senzor de lumina ambientala<br>
Proximitate<br>
Amprenta<br>
Senzor Gravitational</td>
      </tr>
	  <tr>
      <td class="text-left">Accesorii incluse</td>
      <td class="text-left">Casti<br>
Folie Protectie<br>
Cheie acces SIM
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