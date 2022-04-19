<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '20';
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
    <title>Televizor QLED Smart Samsung, 123 cm, 49Q6FN, 4K Ultra HD</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Televizor QLED Smart Samsung, 123 cm, 49Q6FN, 4K Ultra HD</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiTvSony/produs1/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiTvSony/produs1/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiTvSony/produs1/3.jpg" style="width:100%">

  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 8</div>
    <img src="imaginiTvSony/produs1/4.jpg" style="width:100%">

  </div>
  <div class="mySlides fade">
    <div class="numbertext">5 / 8</div>
    <img src="imaginiTvSony/produs1/5.jpg" style="width:100%">

  </div>
  <div class="mySlides fade">
    <div class="numbertext">6 / 8</div>
    <img src="imaginiTvSony/produs1/6.jpg" style="width:100%">

  </div>
  <div class="mySlides fade">
    <div class="numbertext">7 / 8</div>
    <img src="imaginiTvSony/produs1/7.jpg" style="width:100%">

  </div>
  <div class="mySlides fade">
    <div class="numbertext">8 / 8</div>
    <img src="imaginiTvSony/produs1/8.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
		3.299,99RON
    </p>
<?php require($_page.".php"); ?>

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
      <td class="text-left"class="table-hover" style="width:150px;">Tip</td>
      <td class="text-left"class="table-hover" style="width:1000px;">LED</td>
      </tr>
      <tr>
      <td class="text-left">Tehnologii</td>
      <td class="text-left">Quantum Dot <br>Color Volume 100%</td>
      </tr>
      <tr>
      <td class="text-left">Tip TV</td>
      <td class="text-left">Smart TV</td>
      </tr>
      <tr>
      <td class="text-left">Functie monitor</td>
      <td class="text-left">Da</td>
      </tr>
    <tr>
      <td class="text-left">Gama</td>
      <td class="text-left">2018</td>
      </tr>
      <tr>
        <td class="text-left">Tehnologie speciala</td>
        <td class="text-left">QLED</td>
        </tr>
        <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Audio</th>

    <tr>
      <td class="text-left"class="table-hover" style="width:150px;">Sistem audio</td>
      <td class="text-left"class="table-hover" style="width:1000px;">Stereo</td>
      </tr>
      <tr>
      <td class="text-left">Iesire sunet (RMS)</td>
      <td class="text-left">40 W</td>
      </tr>
      <tr>
      <td class="text-left">Caracteristici superioare sunet</td>
      <td class="text-left">Dolby Digital Plus<Br>2.1 Channels<br>Woofer<br>Multiroom Link<br>Blutooth Audio</td>
      </tr>
      <tr>
      <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Video</th>
      </tr>
      <tr>
      <td class="text-left">Diagonala ecran (cm)</td>
      <td class="text-left">123</td>
      </tr>
      <tr>
      <td class="text-left">Tip display</td>
      <td class="text-left">Plat</td>
      </tr>
      <tr>
      <td class="text-left">Rezolutie</td>
      <td class="text-left">4K ULTRA HD</td>
      </tr>
      <tr>
      <td class="text-left">Aspect imagine</td>
      <td class="text-left">16:9</td>
      </tr>
      <td class="text-left">Rezolutie ecran (pixeli)</td>
      <td class="text-left">3840 x 2160</td>
      </tr>
      <td class="text-left">Caracteristici superioare imagine</td>
      <td class="text-left">Color Volume 100%<br>
Q HDR 1000 powered by HDR10+<br>
Quantum Dot Color<br>
Q Engine<br>
HDR10+<br>
HLG (Hybrid Log Gamma)<br>
Q Contrast<br>
Ultra Slim Array<br>
Contrast Enhancer<br>
Billion Colors (10 bit panel)<br>
Wide Viewing Angle<br>
Supreme UHD Dimming<br>
Auto Motion Plus<br>
Film Mode<br>
Natural Mode Support</td>
      </tr>
    <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Tuner/Receptie/Transmisie</th>
      </tr>
    <tr>
      <td class="text-left">Tuner digital</td>
      <td class="text-left">DVB-T2CS2 x 2</td>
      </tr>
    <tr>
      <td class="text-left">Redare video</td>
      <td class="text-left">Da</td>
      </tr>
    <tr>
      <td class="text-left">Intrare antena</td>
      <td class="text-left">Da</td>
      </tr>

    <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Caracteristici speciale</th>
      </tr>
    <tr>
      <td class="text-left">Player multimedia integrat</td>
      <td class="text-left">Da</td>
      </tr>

    <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Conectori</th>
      </tr>
    <tr>
      <td class="text-left">Conexiune retea</td>
      <td class="text-left">Wi-Fi Integrat</td>
      </tr>
      <tr>
      <td class="text-left">Conexiuni</td>
      <td class="text-left">Bluetooth<br>
Slot CI+<br>
RF In</td>
      </tr>
      <tr>
      <td class="text-left">Iesire audio digitala (optica)</td>
      <td class="text-left">1</td>
      </tr>
      <tr>
      <td class="text-left">Intrare USB</td>
      <td class="text-left">2</td>
      </tr>
      <tr>
      <td class="text-left">Porturi HDMI</td>
      <td class="text-left">4</td>
      </tr>
    <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Caracteristici generale</th>
      </tr>
    <tr>
      <td class="text-left">Compatibil VESA</td>
      <td class="text-left">200 x 200</td>
    </tr>
    <tr>
      <td class="text-left">Dimensiuni (W x H x D ) fara stand</td>
      <td class="text-left">1091.6 x 634.6 x 54.9 mm</td>
    </tr>
    <tr>
      <td class="text-left">Dimensiuni (W x H x D) cu stand</td>
      <td class="text-left">1091.6 x 703.3 x 247.7 mm</td>
    </tr>
    <tr>
      <td class="text-left">Culoare</td>
      <td class="text-left">Argintiu</td>
    </tr>
    <tr>
      <td class="text-left">Greutate</td>
      <td class="text-left">14 Kg</td>
    </tr>
    <tr>
      <td class="text-left">Accesorii incluse</td>
      <td class="text-left">Cablu de alimentare<br>
Manual de utilizare<br>
Telecomada</td>
    </tr>
    <tr>
      <td class="text-left">Caracteristici speciale</td>
      <td class="text-left">DLNA<br>
EPG<br>
Time Shift<br>
WiFi Direct<br>
ConnectShare™ (USB 2.0)<br>
Instant On<br>
Digital Clean View<br>
Auto Channel Search<br>
TV to Mobile - Mirroring<br>
MBR Support<br>
BT HID Support<br>
Processor Quad-Core<br>
Auto Power Off<br>
Picture-In-Picture<br>
Web Browser<br>
Ambient Mode<br>
Caption (Subtitle)<br>
ConnectShare™<br>
Auto Game Mode<br>
Game Motion Plus<br>
IPv6 Support (LAN)<br>
USB HID Support<br>
Teletext (TTX)</td>
    </tr>
    <tr>
      <td class="text-left">Sistem de operare</td>
      <td class="text-left">Tizen OS</td>
    </tr>
    <tr>
      <td class="text-left">Eficienta energetica</td>
      <td class="text-left">B</td>
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
