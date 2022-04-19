<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '17';
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
    <title>Sursa nJoy Titan 600, 600W Real Power, PFC Activ, 80 Plus Bronze</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Sursa nJoy Titan 600, 600W Real Power, PFC Activ, 80 Plus Bronze</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiSur/produs1/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiSur/produs1/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiSur/produs1/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
        199,99RON
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

	<h4 style="font-size:20px;margin-left:2.5em;"></h4><br>
	<p style="margin-left:3.5em;">Seria Titan aduce performanta
	extrema si intareste bucuria pentru gaming. Iti ofera puterea
	maxima de care sistemul tau de joc are nevoie, fiind un partener
	de incredere pe care te poti baza mereu.
nJoy Titan a fost creat pentru jocuri si calculatoare de inalta
performanta. Iti ofera puterea ideala pentru sistemul de gaming,
oferindu-ti o performanta optima. Uita de problemele cauzate de
supra-tensiuni, sub-tensiuni, scurt-circuite, supra-incalzire si
supra-sarcini. Seria Titan lupta impotriva acestora si iti ofera o
 experienta de neuitat in gaming. Titan aduce la un loc performanta
 si protectia de care ai nevoie intr-un pachet puternic si convingator.</p><br><br>


	<p style="margin-left:3.5em;">Seria Titan foloseste PFC Activ
	pentru a putea permite o distributie excelenta a puterii astfel
	incat sa ai parte de o eficienta maxima. PFC Activ foloseste un
	circuit care regularizeaza tensiunea de intrare astfel incat semnalul
	transmis spre restul componentelor din sistem sa fie constant. Acest
	circuit are o eficienta de peste 95%!
	</p><br><br><br>

	<p style="margin-left:3.5em;">Nici din punct de vedere al
	consumului de energie nu trebuie sa iti faci griji. Titan
	functioneaza cu o eficienta de peste 82% si te ajuta sa scazi
	costul facturii de curent electric.
	</p><br>


	<p style="margin-left:3.5em;">Pana si fulgerele lui Zeus nu reprezinta
	o amenintare pentru Titan. Acesta lupta cu supra-tensiuni, sub-tensiuni,
	scurt-circuite, supra-incalzire si supra-sarcini, oferind lovituri letale
	oricarui factor de amenintare pentru sistemului tau.</p>




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
      <td class="text-left"class="table-hover" style="width:600px;">600</td>
      </tr>
      <tr>
      <td class="text-left">Numar ventilatoare</td>
      <td class="text-left">1 x 120mm</td>
      </tr>
      <tr>
      <td class="text-left">Alimentare</td>
      <td class="text-left">230 V</td>
      </tr>
      <tr>
      <td class="text-left">Caracteristici speciale</td>
      <td class="text-left">PFC Activ<br>PFC Activ Protectii OVP / OPP / UVP / SCP / OCP<br>Nivel de zgomot redus 21 dB<br>Cabluri mansetate 50cm lungime</td>
      </tr>
      <tr>
      <td class="text-left">Conectori</td>
      <td class="text-left">5 x SATA<br>1 x 20 + 4 pin ATX<br>1 x 4+4 pin ATX 12V<br>2 x PCI-E 6 + 2pin<br>3 x 4pin Molex</td>
      </tr>
      <tr>
      <td class="text-left">Sursa modulara</td>
      <td class="text-left">Nu</td>
      </tr>
      <tr>
      <td class="text-left">Format</td>
      <td class="text-left">ATX 2.3</td>
      </tr>
      <tr>
      <td class="text-left">Rail</td>
      <td class="text-left">2</td>
      </tr>
      <tr>
      <td class="text-left">Altele</td>
      <td class="text-left">Compatibila AMD / Intel, ATI / Nvidia<br>
	  Compatibila NVIDIA SLI<br>Compatibila ATI CrossFireX<br>
	  Controll inteligent al temperaturii<br>80 Plus Bronze (82% eficienta)<br>
	  Cabluri mansetate<br>Cablu de alimentare 1.5m inclus<br>
	  Certificat de garantie Pick-up & Return<br>Nivel de zgomot redus
	  </td>
      </tr>
	  <tr>
      <td class="text-left">Dimensiuni (W x H x D mm)</td>
      <td class="text-left">150 x 86 x 140</td>
      </tr>
	  <tr>
      <td class="text-left">Greutate (Kg)</td>
      <td class="text-left">1.4</td>
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
