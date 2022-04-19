<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '48';
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

?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="shortcut icon" href="1.jpeg">
    <title>Sursa Asus ROG Thor, 1200W Platinum, Aura Sync, OLED display</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Sursa Asus ROG Thor, 1200W Platinum, Aura Sync, OLED display</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiSur/produs3/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiSur/produs3/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiSur/produs3/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
        1.989,53RON
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

	<h4 style="font-size:20px;margin-left:2.5em;">Puterea trasnetului</h4><br>
	<p style="margin-left:3.5em;">ROG Thor 1200W Platinum este PSU-ul
	pentru entuziastii PC care cer excelenta estetica si perfectiune in
	performanta. Primul nostru PSU este dotat cu idei inovatoare, incluzand
	iluminare RGB Aura Sync, un panou de informatii OLED integrat, un ventilator
	de praf Wing-Blade si un radiator mare care permite o functionare de 0dB la
	o putere mai mare decat modelele tipice. De asemenea, integreaza componente
	de incredere, durabile, cum ar fi condensatori japonezi, pentru a realiza o
	certificare de eficienta 80 PLUS® Platinum.</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Straluceste mai tare decat concurenta</h4><br>
	<p style="margin-left:3.5em;">ASUS Aura Sync este ecosistemul
	de iluminare care va permite sa sincronizati efectele luminoase
	pe platforma de jocuri, componente si periferice. ROG Thor 1200W
	Platinum are LED-uri incorporate Aura RGB si este pregatit pentru
	ca dvs sa puteti crea un aspect personalizat.</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Afisaj alimentare OLED</h4><br>
	<p style="margin-left:3.5em;">ROG Thor 1200W Platinum este primul
	PC PSU din lume care dispune de un panou OLED integrat, oferind o
	afisare reala a puterii. Acum puteti vedea dintr-o privire cat de
	multa energie foloseste jocul dvs.</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Ventilator Wing-Blade</h4><br>
	<p style="margin-left:3.5em;">Am echipat ROG Thor 1200W Platinum
	cu un ventilator patentat de 135 mm ca o aripa, pentru a mari la
	maxim durata de viata a componentei. Rezistenta la praf IP5X o
	lasa sa se miste liber, iar tehnologia de 0db utilizeaza senzori
	termici pentru a permite ventilatorului sa se dezactiveze complet
	la puteri mai mici - care sa permita operarea complet silentioasa.</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Radiator ROG</h4><br>
	<p style="margin-left:3.5em;">Radiatoarele ROG integrate au un
	volum de 2 ori mai mare decat modele traditionale, ducand la
	temperaturi mai mici cu 20% in interiorul ROG Thor 1200W Platinum.
	Acest lucru permite operarea mai rece, marind durata de viata a
	componentelor si permitand functionarea la 0dB cu mult dupa ce modelele
	standard ar trebui sa-si invarta inca ventilatoarele.</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Certificare 80 Plus Platinum</h4><br>
	<p style="margin-left:3.5em;">ROG Thor 1200W Platinum utilizeaza
	condensatori japonezi de top pentru a asigura functionarea eficienta.
	Acesta a castigat o certificare 80 PLUS Platinum, care garanteaza
	eficienta de 89% la o sarcina de 100% si 92% la o sarcina de 50%.
	Cresterea eficientei produce mai putina caldura, reducand zgomotul
	ventilatorului si sporind fiabilitatea.</p>




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
      <td class="text-left"class="table-hover" style="width:150px;">Putere sursa (W)</td>
      <td class="text-left"class="table-hover" style="width:600px;">1200</td>
      </tr>
	  <tr>
      <td class="text-left">Caracteristici generale</td>
      <td class="text-left">Pasiv PFC<br>Protectie: OVP,SCP,OCP</td>
      </tr>
      <tr>
      <td class="text-left">Numar ventilatoare</td>
      <td class="text-left">1 x 135mm</td>
      </tr>
      <tr>
      <td class="text-left">Alimentare</td>
      <td class="text-left">100-240 V</td>
      </tr>
      <tr>
      <td class="text-left">Caracteristici speciale</td>
      <td class="text-left">Protectie: OVP, SCP, OCP, OTP</td>
      </tr>
      <tr>
      <td class="text-left">Conectori</td>
      <td class="text-left">1 x 24 pin ATX<br>12 x SATA<br>5 x Molex<br>1 x Floppy
	  <br>8 x 6+2 PCI-E<br>2 x 4+4 Pin ATX/EPS</td>
      </tr>
      <tr>
      <td class="text-left">Sursa modulara</td>
      <td class="text-left">Da</td>
      </tr>
      <tr>
      <td class="text-left">Form</td>
      <td class="text-left">ATX</td>
      </tr>
      <tr>
      <td class="text-left">Rail</td>
      <td class="text-left">1 x 12 V</td>
      </tr>
	  <tr>
      <td class="text-left">Altele</td>
      <td class="text-left">Eficienta: 92%<br>Certificare 80+ Platinum</td>
      </tr>
	  <tr>
      <td class="text-left">Dimensiuni (W x H x D mm)</td>
      <td class="text-left">190 x 150 x 86</td>
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
