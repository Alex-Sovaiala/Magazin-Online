<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '6';
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
    <title>HDD WD Blue 1TB, 7200rpm, 64MB cache, SATA III</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >HDD WD Blue 1TB, 7200rpm, 64MB cache, SATA III</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiHdd/produs1/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiHdd/produs1/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiHdd/produs1/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
        195,00RON
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

	<h4 style="font-size:20px;margin-left:2.5em;">Calitate WD</h4><br>
	<p style="margin-left:3.5em;">Realizat sa indeplineasca cele mai ridicate
	standarde ale calitatii si fiabilitate, aceste medii de stocare
	ofera capacitatea ideala pentru nevoile de zi cu zi.</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">Concepute pentru fiabilitate</h4><br>
	<p style="margin-left:3.5em;">Construit dupa cele mai inalte
	standarde WD in termeni de calitate si fiabilitate, seria WD
	Blue ofera  caracteristici si capacitati entry level, find
	ideala pentru nevoile dumneavoastra de stocare. Unitatile
	WD Blue sunt proiectate si testate pentru a va oferii fiabilitate,
	calitate,
	find solutia de stocare ideala de zi cu zi.</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">Un clasic modern</h4><br>
	<p style="margin-left:3.5em;">Seria WD Blue are la baza tehnologia
	patentata si premiata WD folosita in unitatile pentru desktop si
	cele mobile. WD Blue pune bazele nevoilor de stocare de zi cu zi
	oferind in mod consecvent performante imbunatatite fata de generatile
	anterioare, mentinand calitatea si fiabilitate pentru care cele
	6 generatii de unitati WD sunt renumite.</p><br>

		<h4 style="font-size:20px;margin-left:2.5em;">Puterea de a alege</h4><br>
	<p style="margin-left:3.5em;">Seria WD Blue dispune de  o
	gama larga de capacitati entry level, dimensiuni Cache,
	factori de forme si interfete. Indiferent de nevoile
	dumneavoastra de stocare, puteti fi sigur ca exista
	unitatea perfecta pentru sistemul dumneavoastra.</p>

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
      <td class="text-left"class="table-hover" style="width:150px;">Capacitate</td>
      <td class="text-left"class="table-hover" style="width:600px;">1</td>
      </tr>
      <tr>
      <td class="text-left">Viteza de rotatie</td>
      <td class="text-left">7200rpm</td>
      </tr>
      <tr>
      <td class="text-left">Buffer</td>
      <td class="text-left">64MB</td>
      </tr>
      <tr>
      <td class="text-left">Timp de acces</td>
      <td class="text-left">12ms</td>
      </tr>
      <tr>
      <td class="text-left">Interfata</td>
      <td class="text-left">SATA 3</td>
      </tr>
      <tr>
      <td class="text-left">Rta de transfer SATA</td>
      <td class="text-left">600 MB/s</td>
      </tr>
      <tr>
      <td class="text-left">Dimensiuni (W x H x D mm)</td>
      <td class="text-left">101.6 x 147 x 26.1 mm</td>
      </tr>
      <tr>
      <td class="text-left">Greutate</td>
      <td class="text-left">440g</td>
      </tr>
      <tr>
      <td class="text-left">Timp de acces Citire</td>
      <td class="text-left">12 ms</td>
      </tr>
	  <tr>
      <td class="text-left">Timp de acces Scriere</td>
      <td class="text-left">13 ms</td>
      </tr>
      <tr>
      <td class="text-left">Format</td>
      <td class="text-left">3.5"</td>
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
    Make IT Tech este o companie rom??neasc?? hybrid, o platform?? de cump??r??turi destinat?? cump??r??turilor online, deschis?? c??tre nou ??i inovativ. Versiunea siteului 1.0.0.4B
  </p>



</div>
</footer>
</div>
</html>
