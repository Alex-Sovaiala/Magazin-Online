<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '7';
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
    <title>Telefon mobil Huawei Mate 20 Pro, Dual SIM, 128GB, 6GB RAM, 4G, Twilight</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Telefon mobil Huawei Mate 20 Pro, Dual SIM, 128GB, 6GB RAM, 4G, Twilight</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiHuawei/produs1/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiHuawei/produs1/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiHuawei/produs1/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
       4.599,99RON
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


	<h4 style="font-size:20px;margin-left:2.5em;">Performante<br>
Cel mai puternic si mai inteligent de pana acum</h4><br>
	<p style="margin-left:3.5em;">Primul chipset de 7 nm pentru dispozitive mobile cu inteligenta artificiala din lume.
Tehnologia lider in industrie a procesorului de 7 nm Kirin 980 genereaza o crestere verticala a performantelor, imbunatatind viteza si eficienta energetica.
Adoptand un procesor CPU avansat si flexibil si un procesor GPU cu structura multi-nucleu, viteza de operare si efectuare a sarcinilor oferita de dispozitiv a fost crescuta considerabil. Unul dintre cele Doua procesoare NPU ofera putere ampla de calcul pentru inteligenta artificiala, iar cealalta se concentreaza pe sarcini specifice, asigurand o eficienta impresionanta si o imbunatatire radicala a experientei de utilizare.
	</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">GPS de inalta precizie<br>
Suport pentru proiectie inclus</h4><br>
	<p style="margin-left:3.5em;">Utilizand simultan dubla frecventa L1 si L5, Huawei Mate 20 Pro iti permite sa gasesti intotdeauna destinatia dorita cu o mai mare precizie si mai putine batai de cap, chiar si in centrele de orase inconjurate de zgarie-nori sau noduri de autostrazi.
	</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">Capacitate masiva</h4><br>
	<p style="margin-left:3.5em;">Durata excelenta a bateriei a caracterizat dintotdeauna seria Mate. Bateria mai mare, de 4200 mAh, cu gestiune acum si mai inteligenta a consumului energetic, bazata pe inteligenta artificiala, alimenteaza operatiile de munca si de divertisment pe parcursul intregii zile.
	</p><br>





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
      <td class="text-left">Rezistenta la</td>
      <td class="text-left">IP68</td>
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
      <td class="text-left">Kirin 980</td>
      </tr>
	  <tr>
      <td class="text-left">Frecventa procesor</td>
      <td class="text-left">4x 1.8 GHz & 2x 2.6 GHz & 2x 1.92 GHz</td>
      </tr>
	  <tr>
      <td class="text-left">Dimensiuni (W x H x D mm)</td>
      <td class="text-left">72.3 x 157.8 x 8.6</td>
      </tr>
	  <tr>
      <td class="text-left">Greutate (g)</td>
      <td class="text-left">189 </td>
      </tr>
	  <tr>
      <td class="text-left">Tip SIM</td>
      <td class="text-left">Nano SIM</td>
      </tr>
	  <tr>
      <td class="text-left">GPS</td>
      <td class="text-left">GLONASS, A-GPS</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Memorie</th>
      </tr>
	  <tr>
      <td class="text-left">Memorie</td>
      <td class="text-left">6 GB</td>
      </tr>
	  <tr>
      <td class="text-left">Memorie interna</td>
      <td class="text-left">128 GB</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Afisaj</th>
      </tr>
	  <tr>
      <td class="text-left">Tip display</td>
      <td class="text-left">OLED</td>
      </tr>
      <tr>
      <td class="text-left">Rezolutie</td>
      <td class="text-left">3120 x 1440</td>
      </tr>
	  <tr>
      <td class="text-left">Diagonala display</td>
      <td class="text-left">6.39</td>
      </tr>
	  <tr>
      <td class="text-left">Numar culori</td>
      <td class="text-left">16 M</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Conectivitate</th>
      </tr>
      <tr>
      <td class="text-left">Tehnologie Bluetooth</td>
      <td class="text-left">BLE<br>
5.0<br>
aptX HD<br>
SBC<br>
AAC<br>
LDAC<br>
HWA Audio</td>
      </tr>
	  <tr>
      <td class="text-left">GPRS</td>
      <td class="text-left">Da</td>
      </tr>
	  <tr>
      <td class="text-left">Tehnolgie wireless</td>
      <td class="text-left">Wi-Fi 802.11 a/b/g/n/ac</td>
      </tr>
	  <tr>
      <td class="text-left">NFC</td>
      <td class="text-left">Da</td>
      </tr>
      <tr>
      <td class="text-left">USB</td>
      <td class="text-left">Type-C</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Foto video</th>
      </tr>
	  <tr>
      <td class="text-left">Rezolutie camera (Mp)</td>
      <td class="text-left">40 + 20 + 8</tr>
	  <tr>
	  <tr>
      <td class="text-left">Camera secundara</td>
      <td class="text-left">24 Mp</tr>
	  <tr>
      <td class="text-left">Blitz integrat</td>
      <td class="text-left">LED</tr>
	  </tr>
	  <tr>
      <td class="text-left">Caracteristici foto/video</td>
      <td class="text-left">Panorama,
HDR,
PDAF,
OIS,
Geo-etichetare, focus tactil, detectie fata,
EIS</tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Alimentare</th>
      </tr>
	  <tr>
      <td class="text-left">Capacitate</td>
      <td class="text-left">4200 (mAh)</td>
	  </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Altele</th>
      </tr>
	  <tr>
      <td class="text-left">SAR (W/kg )</td>
      <td class="text-left">0.58</td>
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
