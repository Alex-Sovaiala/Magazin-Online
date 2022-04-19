<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '9';
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
    <title>Procesor Intel Core i9-9900K Coffee Lake-R, 3.60GHz, Socket 1151, box - Chipset seria 300</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Procesor Intel Core i9-9900K Coffee Lake-R, 3.60GHz, Socket 1151, box - Chipset seria 300</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiP/produs1/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiP/produs1/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiP/produs1/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
       2.558,94RON
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

	<h4 style="margin-left:2em;font-size:23px;">Processor Intel Core i9-9900K Coffee Lake-R, 3.60GHz, Socket 1151, box</h4>
	<p style="margin-left:3em;">
		Computerele desktop si dispozitivele mobile pot lucra mai
		mult, pot porni mai repede si pot sustine grafica la rezolutii
		mari datorita procesoarelor din seria Intel Core.
		A 9-a generatie Intel Core va ofera experiente impresionante
		in jocuri si aplicatii complexe. Va puteti juca si lucra fluent,
		intr-un mediu cu timpi de raspuns foarte mici.
	</p><br>

	<h4 style="margin-left:2em;font-size:23px;">Intel Turbo Boost</h4>
	<p style="margin-left:3em;">
		Intel Turbo Boost Technology ofera mai multa performanta atunci
		cand este necesar. Este activat atunci cand sistemul de operare
		(OS) solicita cel mai inalt nivel de performanta al procesorului.
		Intel Turbo Boost Technology 2.0 permite in mod automat nucleelor
		aflate pe procesor sa ruleze la o frecventa superioara
		redirectionand puterea si accelerand performanta in mod dinamic
		intr-o maniera proportionala sarcinilor si aplicatiilor la care
		sistemul este supus. Functioneaza pe sistemele care au la baza
		procesoarele Intel Core i5, i7 si i9.
	</p><br>

	<h4 style="margin-left:2em;font-size:23px;">Intel SpeedStep</h4>
	<p style="margin-left:3em;">
		Enhanced Intel SpeedStep Technology permite sistemului sa
		ajusteze dinamic tensiunea si fecventa procesorului, ceea
		ce poate duce la un consum de energie mai scazut si reducerea
		caldurii emanate de acesta. Prin scaderea de energie electrica
		si termica pe PC-uri desktop, constructorii de sisteme pot
		(in functie de configuratiile de sistem) reduce acustica si chiar
		sa dezvolte forme mai inovative si mai mici.
		In plus, aceasta caracteristica poate ajuta consumul
		de putere pentru companiile cu infrastructuri electrice
		limitate. Combinat cu caracteristici de economisire a energiei
		existente, Intel SpeedStep Technology poate oferi un echilibru
		excelent intre furnizarea de energie atunci cand aveti nevoie
		si conservarea ei atunci cand nu aveti nevoie.
	</p><br>

	<h4 style="margin-left:2em;font-size:23px;">A 9 a generatie de procesoare Intel Core</h4>
	<p style="margin-left:3em;">
		Aceste procesoare cu viteza uimitoare, functii complete, si
		securitate integrata, sunt gata sa va preia productivitatea,
		creativitatea si jocurile 3D la nivelul urmator. In plus, cu
		ajutorul Windows 10, procesoarele Intel Core 9th Gen va permit
		sa va alimentati imaginatia si sa explorati noi posibilitati.
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
      <td class="text-left"class="table-hover" style="width:150px;">CPU Socket</td>
      <td class="text-left"class="table-hover" style="width:600px;">1151<br>Compatibil doar cu Chipset Seria 300</td>
      </tr>
      <tr>
      <td class="text-left">Memorie Cache</td>
      <td class="text-left">16MB</td>
      </tr>
      <tr>
      <td class="text-left">TurboBoost pana la</td>
      <td class="text-left">5000MHZ</td>
      </tr>
      <tr>
      <td class="text-left">Mod de operare (biti)</td>
      <td class="text-left">32/64</td>
      </tr>
      <tr>
      <td class="text-left">Numar nuclee</td>
      <td class="text-left">8 Nuclee<br>16 Thread-uri</td>
      </tr>
      <tr>
      <td class="text-left">Tehnologie de fabricatie (nanometri)</td>
      <td class="text-left">14</td>
      </tr>
      <tr>
      <td class="text-left">Cooler</td>
      <td class="text-left">Nu</td>
      </tr>
      <tr>
      <td class="text-left">Putere termica (W)</td>
      <td class="text-left">95</td>
      </tr>
	  <tr>
      <td class="text-left">Altele</td>
      <td class="text-left">Intel UHD Graphics 630</td>
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
