<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '18';
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
    <title>Televizor LED Smart LG, 108 cm, 43UK6950PLB, 4K Ultra HD</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Televizor LED Smart LG, 108 cm, 43UK6950PLB, 4K Ultra HD</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img src="imaginiTvLG/produs1/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="imaginiTvLG/produs1/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="imaginiTvLG/produs1/3.jpg" style="width:100%">

  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="imaginiTvLG/produs1/4.jpg" style="width:100%">

  </div>
  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="imaginiTvLG/produs1/5.jpg" style="width:100%">

  </div>
  <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="imaginiTvLG/produs1/6.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="imaginiTvLG/produs1/7.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="imaginiTvLG/produs1/8.jpg" style="width:100%">
</div>


  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
		2.299,99RON
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

        <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Audio</th>

    <tr>
      <td class="text-left"class="table-hover" style="width:150px;">Sistem audio</td>
      <td class="text-left"class="table-hover" style="width:1000px;">Stereo</td>
      </tr>
      <tr>
      <td class="text-left">Iesire sunet (RMS)</td>
      <td class="text-left">20 W</td>
      </tr>
      <tr>
      <td class="text-left">Caracteristici superioare sunet</td>
      <td class="text-left">	Clear Voice III<br>
Magic Sound Tuning<br>
Smart Sound Mode<br>
Hi-Fi Audio<br>
DTS Decoder<br>
One Touch Sound Tuning<br>
Adaptive Sound Control<br>
Audio Upscaler<br>
LG Sound Sync<br>
Bluetooth Audio Playback<br>
Dolby Digital</td>
      </tr>
      <tr>
      <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Video</th>
      </tr>
      <tr>
      <td class="text-left">Diagonala ecran (cm)</td>
      <td class="text-left">108</td>
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
      <td class="text-left">Active HDR<br>
TM100 (Refresh Rate 50Hz)<br>
4K Active HDR<br>
HDR10 Pro<br>
HLG<br>
HDR Effect<br>
Quad Core Processor<br>
Dynamic Colour Enhancer<br>
True Colour Accuracy<br>
4K Upscaler<br>
Noise Reduction<br>
Dynamic Tone Mapping<br>
HEVC<br>
VP9<br>
SHVC</td>
      </tr>
    <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Tuner/Receptie/Transmisie</th>
      </tr>
    <tr>
      <td class="text-left">Tuner digital</td>
      <td class="text-left">DVB-T2/C/S2</td>
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
      <td class="text-left">	Audio Return Channel(ARC)<br>
Slot CI+<br>
LAN<br>
2 x RF In<br>
Bluetooth</td>
      </tr>
      <tr>
      <td class="text-left">Intrare USB</td>
      <td class="text-left">2</td>
      </tr>
      <tr>
      <td class="text-left">Iesire audio digitala (optica)</td>
      <td class="text-left">1</td>
      </tr>
      <tr>
      <td class="text-left">Porturi HDMI</td>
      <td class="text-left">4</td>
      </tr>
    <tr>
      <tr>
      <td class="text-left">Intrare video composite</td>
      <td class="text-left">1</td>
      </tr>
    <tr>
      <tr>
      <td class="text-left">Intrari component</td>
      <td class="text-left">1</td>
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
      <td class="text-left">975 x 571 x 86</td>
    </tr>
    <tr>
      <td class="text-left">Dimensiuni (W x H x D) cu stand</td>
      <td class="text-left">975 x 631 x 225</td>
    </tr>
    <tr>
      <td class="text-left">Putere consumata</td>
      <td class="text-left">71 W</td>
    </tr>
    <tr>
      <td class="text-left">Culoare</td>
      <td class="text-left">Argintiu</td>
    </tr>
    <tr>
      <td class="text-left">Greutate</td>
      <td class="text-left">10.3 Kg</td>
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
TeleText 2000 pagini<br>
Time Shift<br>
WiFi Direct<br>
Quad Core<br>
Music player<br>
Magic Remote Ready<br>
Live Zoom<br>
OSD Language<br>
Magic Zoom<br>
Block access to harmful site<br>
Universal Control<br>
Quick Access<br>
LG Content Store<br>
Web Browser<br>
My Content<br>
My Channels<br>
Channel Advisor<br>
Digital Recording<br>
webOS Smart TV<br>
Focus Zoom<br>
Intelligent Voice Recognition<br>
Audio Guidance(Text To Speech)<br>
DIAL<br>
Magic Remote Control;
</td>
    </tr>
    <tr>
      <td class="text-left">Eficienta energetica</td>
      <td class="text-left">A</td>
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
