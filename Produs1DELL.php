<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '5';
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
    <title>Laptop Dell Inspiron 3567 cu procesor Intel® Core™ i3-7020U 2.30 GHz, Kaby Lake, 15.6", Full HD, 4GB, 1TB, DVD-RW, Intel® HD Graphics 620, Ubuntu Linux 16.04, Black</title>
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
      </ul><br><br><br>




    <div id="wrapper">
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Laptop Dell Inspiron 3567 cu procesor Intel® Core™ i3-7020U 2.30 GHz, Kaby Lake, 15.6", Full HD, 4GB, 1TB, DVD-RW, Intel® HD Graphics 620, Ubuntu Linux 16.04, Black</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiDell/produs1/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiDell/produs1/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiDell/produs1/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
       1.499,99RON
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


	<h4 style="font-size:20px;margin-left:2.5em;">Exact ce va trebuie. Pentru tot ceea ce faceti.</h4><br>
	<p style="margin-left:3.5em;">Laptop de 15 inchi cu performanta
	esentiala, prevazut cu procesoare de top, afisaj TrueLife elegant
	si baterie cu autonomie mare de functionare.</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Porturi si sloturi</h4><br>
	<p style="margin-left:3.5em;">1. Cititor de carduri SD (SD, SDHC,
	SDXC) | 2. Conector pentru set de casti-microfon | 3. Port USB 2.0
	| 4. Drive DVD | 5. Incuietoare Kensington | 6. Intrare pentru
	alimentare | 7. Port de retea Ethernet RJ-45 (10/100) | 8. Ventilatoare
	de racire | 9. Port HDMI™ 1.4a | 10. Port USB 3.0</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Creat pentru conditii reale, ca in viata</h4><br>
	<p style="margin-left:3.5em;">Ne dorim sa va indragiti noul PC ani la rand. De aceea testam fiabilitatea laptopurilor Inspiron nu doar in conditii usor de anticipat, ci si in situatii neprevazute.
<br><br>
<b>Rezistenta la caldura:</b> de la vestiare la automobile incuiate, testam rezistenta laptopurilor Inspiron expuse pe termen scurt unor conditii extreme de caldura, de pana la 65 °C (149 °F).
<br><br>
<b>Balamale de incredere:</b> testam balamalele laptopului Inspiron pentru a ne asigura ca raman la fel de stranse si dupa 20.000 de deschideri si inchideri ale capacului.
<br><br>
<b>Taste de succes:</b> testam tastele cel mai des utilizate sa reziste fara probleme la 10 milioane de apasari, iar butoanele touchpadului la 1 milion de apasari. Puteti sa scrieti un intreg roman.
<br><br>
<b>Butoane rezistente:</b> indiferent pentru ce setati butoanele de alimentare si multimedia, le-am testat pe toate sa reziste fara probleme la pana la 40.000 de apasari.
<br><br>
<b>Rezistenta la rasucire si rotire:</b> poate am exagerat, dar va putem confirma ca, si dupa peste 25.000 de rasuciri ale bazei si capacului unui laptop Inspiron, piesele din interior sunt perfect protejate.
<br><br>
<b>Insotitor de cursa lunga:</b> sistemele sunt testate intens timp de cel putin 10.000 de ore pentru a se asigura rezistenta la conditiile reale de lucru.</p>





      <div class="table-title">

      </div>
      <table class="table-fill">
      <thead>
      <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Procesor</th>
      </tr>
      </thead>
      <tbody >
      <tr>
      <td class="text-left"class="table-hover" style="width:150px;">Producator procesor</td>
      <td class="text-left"class="table-hover" style="width:600px;">Intel®</td>
      </tr>
      <tr>
      <td class="text-left">Tip proceosr</td>
      <td class="text-left">i3</td>
      </tr>
      <tr>
      <td class="text-left">Model proceos</td>
      <td class="text-left">7020U</td>
      </tr>
      <tr>
      <td class="text-left">Arhitectura</td>
      <td class="text-left">Kaby Lake</td>
      </tr>
	  <tr>
      <td class="text-left">Numar nuclee</td>
      <td class="text-left">2</td>
      </tr>
	  <tr>
      <td class="text-left">Frecventa nominala</td>
      <td class="text-left">2300 MHz</td>
      </tr>
	  <tr>
      <td class="text-left">Cache</td>
      <td class="text-left">3072 KB</td>
      </tr>
	  <tr>
      <td class="text-left">Tehnologie procesor</td>
      <td class="text-left">14 nm</td>
      </tr>
	  <tr>
      <td class="text-left">Procesor grafic integrat</td>
      <td class="text-left">Intel® HD Graphics 620</td>
      </tr>
      <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Display</th>
      </tr>
      <tr>
      <td class="text-left">Diagonala display</td>
      <td class="text-left">15.6 inch</td>
      </tr>
      <tr>
      <td class="text-left">Format display </td>
      <td class="text-left">Full HD</td>
      </tr>
      <tr>
      <td class="text-left">Tehnologie siplay</td>
      <td class="text-left">LCD LED</td>
      </tr>
      <tr>
      <td class="text-left">Finisaj display</td>
      <td class="text-left">Anti-Glare</td>
      </tr>
	  <tr>
      <td class="text-left">Rezolutie</td>
      <td class="text-left">1920 x 1080</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Memorie</th>
      </tr>
	  <tr>
      <td class="text-left">Memorie</td>
      <td class="text-left">4GB</td>
      </tr>
	  <tr>
      <td class="text-left">Tip memorie</td>
      <td class="text-left">DDR4</td>
      </tr>
	  <tr>
      <td class="text-left">Numar sloturi</td>
      <td class="text-left">2</td>
      </tr>
	  <tr>
      <td class="text-left">Sloturi ocupate</td>
      <td class="text-left">1</td>
      </tr>
	  <tr>
      <td class="text-left">Frecventa</td>
      <td class="text-left">2400 MHz</td>
      </tr>
	  <tr>
      <td class="text-left">Capacitate memorie maxima suportata</td>
      <td class="text-left">16 GB</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Hard Disk</th>
      </tr>
	  <tr>
      <td class="text-left">Tip stocare</td>
      <td class="text-left">HDD</td>
      </tr>
      <tr>
      <td class="text-left">Capacitate stocare</td>
      <td class="text-left">1 TB</td>
      </tr>
	  <tr>
      <td class="text-left">Viteza de rotatie</td>
      <td class="text-left">5400 rpm</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Placa video</th>
      </tr>
	  <tr>
      <td class="text-left">Tip placa video</td>
      <td class="text-left">Integrata</td>
      </tr>
      <tr>
      <td class="text-left">Chipset</td>
      <td class="text-left">Intel HD</td>
      </tr>
	  <tr>
      <td class="text-left">Model placa video</td>
      <td class="text-left">Intel® HD Graphics 620</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Multimedia</th>
      </tr>
	  <tr>
      <td class="text-left">Unitate optica</td>
      <td class="text-left">Da</td>
	  </tr>
	  <tr>
      <td class="text-left">Audio</td>
      <td class="text-left">Difuzoare stereo<br>Microfon</td>
	  </tr>
	  <tr>
      <td class="text-left">Tehnologii audio</td>
      <td class="text-left">Waves MaxxAudio<br>HD Audio</td>
	  </tr>
	  <tr>
      <td class="text-left">Putere difuzare</td>
      <td class="text-left">2W</td>
	  </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Conectivitate & porturi</th>
      </tr>
	  <tr>
      <td class="text-left">Porturi</td>
      <td class="text-left">2 x USB 3.0<br>1 x USB 2.0<br>1 x Audio Out<br>
	  1 x HDMI<br>1 x RJ-45
	  </td>
	  </tr>
	  <tr>
      <td class="text-left">Cititor de carduri</td>
      <td class="text-left">SD<br>SDHC<br>SDXC</td>
	  </tr>
	  <tr>
      <td class="text-left">Wirless</td>
      <td class="text-left">802.11 ac</td>
	  </tr>
	  <tr>
      <td class="text-left">Versiune Bluetooth</td>
      <td class="text-left">4.0</td>
	  </tr>
	  <tr>
      <td class="text-left">Retea</td>
      <td class="text-left">10/100</td>
	  </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Caracteristici generale</th>
      </tr>
	  <tr>
      <td class="text-left">Tastatura numerica</td>
      <td class="text-left">Da</td>
      </tr>
	  <tr>
      <td class="text-left">Dimensiuni (W x H x D)</td>
      <td class="text-left">380 x 260.3 x 23.65 mm</td>
      </tr>
	  <tr>
      <td class="text-left">Greutate</td>
      <td class="text-left">2.3KG</td>
      </tr>
	  <tr>
      <td class="text-left">Limba tastatura</td>
      <td class="text-left">Tastatura internationala</td>
      </tr>
	  <tr>
      <td class="text-left">Accesorii incluse</td>
      <td class="text-left">Adapter alimentare si cablu alimentare</td>
      </tr>
	  <tr>
      <td class="text-left">Culoare</td>
      <td class="text-left">Negru</td>
      </tr>
	  <tr>
      <td class="text-left">Caracteristici cheie</td>
      <td class="text-left">Camera web<br>TouchPad cu suport pentru gesturi multi atingere</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Software</th>
      </tr>
	  <tr>
      <td class="text-left">Sistem de operare</td>
      <td class="text-left">Ubuntu</td>
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
