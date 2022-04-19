<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '57';
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
    <title>Laptop Dell Inspiron 5770 cu procesor Intel® Core™ i5-8250U pana la 3.40 GHz, Kaby Lake R, 17.3", Full HD, 8GB, 1TB + 128GB SSD, AMD Radeon 530 4GB, FPR, Linux, Silver</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Laptop Dell Inspiron 5770 cu procesor Intel® Core™ i5-8250U pana la 3.40 GHz, Kaby Lake R, 17.3", Full HD, 8GB, 1TB + 128GB SSD, AMD Radeon 530 4GB, FPR, Linux, Silver</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiDell/produs3/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiDell/produs3/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiDell/produs3/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
       3.549,99RON
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


	<h4 style="font-size:20px;margin-left:2.5em;">Complet captivant, complet impresionant</h4><br>
	<p style="margin-left:3.5em;">Afisaj clar: Bucurati-va de detaliile clare ale afisajului anti-glare FHD de 15,6" pentru a vedea totul mai bine, in special in exterior sau in lumina puternica.
<br><br>
Stream perfect: Tehnologia SmartByte va face jocurile si streaming-ul fluid si neintrerupt, astfel incat sa nu pierdeti niciodata o secunda. Aceasta solutie de retea asigura ca aplicatiile cele mai importante sa obtina o latime de banda de care au nevoie pentru o performanta optima.
<br><br>
Ascultati fiecare detaliu: Waves MaxxAudio Pro pompeaza sunetul, astfel incat sa puteti auzi totul, de la concerte la muzica de film si actiune de jocuri cu tonuri bogate, rezonante.</p>
	<br>

	<h4 style="font-size:20px;margin-left:2.5em;">Performanta responsabila si stocare multipla</h4><br>
	<p style="margin-left:3.5em;">Performanta puternica: Cel mai recent procesor Intel Core i ofera o putere din plin intr-un pachet compact.
<br><br>
Mai multa memorie: Cu performante sporite, largimea de banda si eficienta energetica epica, cu o memorie DDR4 de pana la 12 GB, veti rula toate aplicatiile si multitasking-ul ca un profesionist in cel mai scurt timp.
<br><br>
Stocare multipla: Laptopul dumneavoastra va ofera mai multe optiuni de stocare pentru performanta receptiva si o multime de backup, inclusiv 256 GB SSD si unitati dual.</p>
<br>
	<h4 style="font-size:20px;margin-left:2.5em;">Proiectat pentru lumea reala</h4><br>
	<p style="margin-left:3.5em;">Vrem sa iti iubesti noul PC pentru anii urmatori. De aceea testam laptopurile Inspiron pentru fiabilitate nu doar in locurile in care va asteptati, ci pentru drumul deschis inainte.
<br><br>
Incingeti atmosfera: De la vestiare la masinile incuiate, testati laptopurile Inspiron pentru supravietuire in conditii de temperatura dure de durata de pana la 65°C/149°F.
<br><br>
Totul se bazeaza pe ele: Testati balamalele laptop-ului Inspiron pentru a va asigura ca inca se simt bine, chiar si dupa deschiderea si inchiderea capacului de 20.000 de ori.
<br><br>
Cheia succesului: Testeaza tastele utilizate in mod obisnuit pentru 10 milioane de tastari si tastele touch pad-ului de 1 milion de ori fara esec. Asa ca da-i drumul, termina-ti romanul.
<br><br>
Tastat: Indiferent de ce ti-ai setat tastele de power si multimedia, le-am testat pe toti pentru a supravietui pana la 40.000 de apasari fara probleme.
<br><br>
Intotdeauna o potrivire perfecta: Probabil ca nu va mai fi nevoie sa eliminati si sa reinstalati bateria de 30 de ori a lui Inspiron, dar va puteti odihni usor, stiind ca am testat chiar si asta.</p>
<br>




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
      <td class="text-left">i5</td>
      </tr>
      <tr>
      <td class="text-left">Model proceos</td>
      <td class="text-left">8250U</td>
      </tr>
      <tr>
      <td class="text-left">Arhitectura</td>
      <td class="text-left">Kaby Lake R</td>
      </tr>
	  <tr>
      <td class="text-left">Numar nuclee</td>
      <td class="text-left">4</td>
      </tr>
	  <tr>
      <td class="text-left">Frecventa nominala</td>
      <td class="text-left">1600 MHz</td>
      </tr>
	  <tr>
      <td class="text-left">Cache</td>
      <td class="text-left">6144 KB</td>
      </tr>
	  <tr>
      <td class="text-left">Frecventa Turbo Boost</td>
      <td class="text-left">3400 MHz</td>
      </tr>
	  <tr>
      <td class="text-left">Tehnilogie procesor</td>
      <td class="text-left">14 nm</td>
      </tr>
	  <tr>
      <td class="text-left">Procesor grafic integrat</td>
      <td class="text-left">Intel® UHD Graphics 620</td>
      </tr>
      <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Display</th>
      </tr>
      <tr>
      <td class="text-left">Diagonala display</td>
      <td class="text-left">17.3 inch</td>
      </tr>
      <tr>
      <td class="text-left">Format display </td>
      <td class="text-left">Full HD</td>
      </tr>
      <tr>
      <td class="text-left">Tehnologie siplay</td>
      <td class="text-left">LED</td>
      </tr>
	  <tr>
      <td class="text-left">Dinisaj display</td>
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
      <td class="text-left">8GB</td>
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
      <td class="text-left">2400</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Hard Disk</th>
      </tr>
	  <tr>
      <td class="text-left">Tip stocare</td>
      <td class="text-left">HDD + SSD</td>
      </tr>
      <tr>
      <td class="text-left">Capacitate stocare</td>
      <td class="text-left">1TB <br>128 GB</td>
      </tr>
	  <tr>
      <td class="text-left">Viteza de roatatie</td>
      <td class="text-left">54000 rpm</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Placa video</th>
      </tr>
	  <tr>
      <td class="text-left">Tip placa video</td>
      <td class="text-left">Dedicata</td>
      </tr>
      <tr>
      <td class="text-left">Chipset</td>
      <td class="text-left">AMD Radeon</td>
      </tr>
	  <tr>
      <td class="text-left">Model</td>
      <td class="text-left">530</td>
      </tr>
	  <tr>
      <td class="text-left">Memorie video</td>
      <td class="text-left">4096 MB</td>
      </tr>
	  <tr>
      <td class="text-left">Tip memorie placa video</td>
      <td class="text-left">GDDR5</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Multimedia</th>
      </tr>
	  <tr>
      <td class="text-left">Unitate optica</td>
      <td class="text-left">Da</td>
	  </tr>
	  <tr>
      <td class="text-left">Camera WEB</td>
      <td class="text-left">HD</td>
	  </tr>
	  <tr>
      <td class="text-left">Audio</td>
      <td class="text-left">Difuzoare stereo<br>Microfon</td>
	  </tr>
	  <tr>
      <td class="text-left">Tehnologii audio</td>
      <td class="text-left">Waves MaxxAudio Pro, HD Audio</td>
	  </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Conectivitate & porturi</th>
      </tr>
	  <tr>
      <td class="text-left">Porturi</td>
      <td class="text-left">2 x USB 3.0<br>1 x USB 2.0<br>1 x Audio Out<br>
	  1 x HDMI<br>1 x USB 3.1 type C<br>1 x RJ-45
	  </td>
	  </tr>
	  <tr>
      <td class="text-left">Cititor de carduri</td>
      <td class="text-left">SD</td>
	  </tr>
	  <tr>
      <td class="text-left">Wirless</td>
      <td class="text-left">802.11 ac</td>
	  </tr>
	  <tr>
      <td class="text-left">Retea</td>
      <td class="text-left">10/100</td>
	  </tr>
	  <tr>
      <td class="text-left">Versiune Bluetooth</td>
      <td class="text-left">4.2</td>
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
      <td class="text-left">415.4 x 25 x 279.2 mm</td>
      </tr>
	  <tr>
      <td class="text-left">Securitate</td>
      <td class="text-left">Cititor de amprenta, Parola BIOS, Parola HDD, Security lock</td>
      </tr>
	  <tr>
      <td class="text-left">Greutate</td>
      <td class="text-left">2.79KG</td>
      </tr>
	  <tr>
      <td class="text-left">Limba tastatura</td>
      <td class="text-left">Tastatura internationala</td>
      </tr>
	  <tr>
      <td class="text-left">Culoare</td>
      <td class="text-left">Silver</td>
      </tr>
	  <tr>
      <td class="text-left">Caracteristici cheie</td>
      <td class="text-left">Camera web<br>Tastatura iluminata<br>TouchPad cu suport pentru gesturi multi atingere</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Software</th>
      </tr>
	  <tr>
      <td class="text-left">Sistem de operare</td>
      <td class="text-left">Linux</td>
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
