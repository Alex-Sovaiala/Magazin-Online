<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '43';
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
    <title>Desktop Gaming Lenovo Legion C530-19ICB cu procesor Intel® Core™ i7-8700 3.2GHz, Coffee Lake, 8GB, 1TB + 128GB SSD, nVIDIA GeForce GTX 1060 6GB, Free DOS, Mouse + Tastatura</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Desktop Gaming Lenovo Legion C530-19ICB cu procesor Intel® Core™ i7-8700 3.2GHz, Coffee Lake, 8GB, 1TB + 128GB SSD, nVIDIA GeForce GTX 1060 6GB, Free DOS, Mouse + Tastatura</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiPCLenov/produs3/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiPCLenov/produs3/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiPCLenov/produs3/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
		5.299,99RON
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


	<h4 style="font-size:20px;margin-left:2.5em;">Rafinat la exterior...</h4><br>
	<p style="margin-left:3.5em;">Desktop-ul Lenovo Legion C530
	Cube a fost creat pentru un look mai rafinat - de la carcasa
	compacta de culoare Iron Gray pana la detaliile precum grila
	frontala eleganta cu iluminare LED alba integrata. Totul a
	fost creat in interiorul unei carcase sofisticate de 19 L,
	mult mai compacta decat cea a desktop-urilor de 28 L.
	Aseaza Legion C530 oriunde in interiorul casei tale si
	bucura-te de el.</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">...gata de lupta in interior</h4><br>
	<p style="margin-left:3.5em;">Cand ai cele mai puternice
	componente hardware de gaming in fata ta, merita sa le
	lasi la vedere. Legion C530 este prevazut cu un panou
	superior 100% transparent, cu sistem de iluminare rosu
	integrat, pentru ca tu sa poti admira spectacolul din
	interior.</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">Gaming la nivelul urmator</h4><br>
	<p style="margin-left:3.5em;">C530 integreaza
	placi grafice dedicate NVIDIA® GeForce®, care ofera
	cele mai noi tehnologii de gaming, prin urmare reprezinta
	alegerea perfecta pentru cele mai recente jocuri high-definition.
	Avand la baza NVIDIA Pascal™, cea mai avansata arhitectura
	GPU creata vreodata, placile grafice GeForce GTX livreaza o
	performanta extraordinara pentru jocurile tale preferate si
	iti deschide calea spre realitatea virtuala si chiar mai departe.
	</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">Gaming epic cu sistemul de racire optimizat</h4><br>
	<p style="margin-left:3.5em;">Stim ca cel mai mare inamic al gaming-ul a fost, dintotdeauna, caldura. Desktop-ul tip Cube cu sistem de racire cu doua canale a fost construit pentru a invinge caldura. Unitatea de procesare si GPU-ul sunt racite independent prin canale de racire dedicate, reducand temperatura sistemului si sunetul ventilatoarelor, pentru o mai buna performanta.</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">Cum sa comprimi multa actiune intr-un pachet mic...</h4><br>
	<p style="margin-left:3.5em;">Designul traditional al echipamentelor de gaming depinde prea mult de designurile clasice ale placii de baza, ceea ce face aproape imposibila integrarea celor mai performante componente intr-un design compact. Dar acesta nu este cazul pentru C530. Prin amplasarea placii de baza in centrul PC-ului si a componentelor CPU si GPU in lateral, am eliberat spatiu in interior. Astfel, poti beneficia de cele mai bune componente intr-un sistem compact care se va potrivi oriunde vrei sa il amplasezi.</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">...si cum sa o accesezi ulterior</h4><br>
	<p style="margin-left:3.5em;">C530 iti aduce o performanta uimitoare intr-o carcasa compacta, plus tot ceea ce este necesar pentru un upgrade facil. Ce putem spune sigur este ca nu vei avea nevoie de unelte pentru acest lucru. Acest desktop dispune de un sistem de upgrade ce poate fi activat prin apasarea unui singur buton, fara unelte, pentru un acces rapid. Iar manerul integrat si design-ul usor te vor ajuta sa te joci asa cum vrei, unde vrei.
	</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">Sunet impresionant cu Dolby Atmos®</h4><br>
	<p style="margin-left:3.5em;">Dolby Atmos® creeaza o experienta audio uimitoare, sunetul plutind deasupra si in jurul tau. Te vei simti ca si cum ai fi in mijlocul actiunii intrucat sunetul prinde viata cu o intensitate si profunzime care iti creeaza impresia ca esti intr-un spatiu tridimensional. Captivant si emotionant, Dolby Atmos este sunetul pe care il poti simti, care creeaza o experienta cu adevarat impresionanta.</p><br>





      <div class="table-title">

      </div>
      <table class="table-fill">
      <thead>
      <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Caracteristici generala</th>
      </tr>
      </thead>
      <tbody >
      <tr>
      <td class="text-left"class="table-hover" style="width:150px;">Tip sistem</td>
      <td class="text-left"class="table-hover" style="width:600px;">Desktop PC</td>
      </tr>
      <tr>
      <td class="text-left">Destinat pentru</td>
      <td class="text-left">Gaming</td>
      </tr>
      <tr>
      <td class="text-left">Sistem de operare</td>
      <td class="text-left">Free DOS</td>
      </tr>
      <tr>
      <td class="text-left">Continut pachet</td>
      <td class="text-left">Mouse + Tastatura</td>
      </tr>
	  <tr>
      <td class="text-left">Lungime</td>
      <td class="text-left">231 mm</td>
      </tr>
	  <tr>
      <td class="text-left">Adancime</td>
      <td class="text-left">332 mm</td>
      </tr>
	  <tr>
      <td class="text-left">Inaltime</td>
      <td class="text-left">242 mm</td>
      </tr>
	  <tr>
      <td class="text-left">Culoare</td>
      <td class="text-left">Negru</td>
      </tr>
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
      <td class="text-left">8100</td>
      </tr>
      <tr>
      <td class="text-left">Arhitectura</td>
      <td class="text-left">Coffee Lake</td>
      </tr>
	  <tr>
      <td class="text-left">Numar nuclee</td>
      <td class="text-left">4</td>
      </tr>
	  <tr>
      <td class="text-left">Numar thred-uri</td>
      <td class="text-left">4</td>
      </tr>
	  <tr>
      <td class="text-left">Frecventa nominala</td>
      <td class="text-left">3600 MHz</td>
      </tr>
	  <tr>
      <td class="text-left">Cache</td>
      <td class="text-left">6144 KB</td>
      </tr>
	  <tr>
      <td class="text-left">Tehnologie procesor</td>
      <td class="text-left">14 nm</td>
      </tr>
	  <tr>
      <td class="text-left">Procesor grafic integrat</td>
      <td class="text-left">Intel® HD Graphics 630</td>
      </tr>
      <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Placa de baza</th>
      </tr>
      <tr>
      <td class="text-left">Socket procesor</td>
      <td class="text-left">1151</td>
      </tr>
      <tr>
      <td class="text-left">Chipset</td>
      <td class="text-left">Intel B360</td>
      </tr>
      <tr>
      <td class="text-left">Sloturi onboard</td>
      <td class="text-left">1 x PCI-E x16</td>
      </tr>
      <tr>
      <td class="text-left">Porturi Back panel</td>
      <td class="text-left">1 x VGA<br>2 x USB 3.1<br>1 x Display Port<br>2 x USB 2.0<br>
1 x Serial<br>
1 x RJ 45<br>
1 x HDMI</td>
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
      <td class="text-left">Sloturi ocupate</td>
      <td class="text-left">1</td>
      </tr>
	  <tr>
      <td class="text-left">Frecventa</td>
      <td class="text-left">2666 MHz</td>
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
      <td class="text-left">7200 rpm</td>
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
      <td class="text-left">Intel HD Graphics 630</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Carcasa & sursa</th>
      </tr>
	  <tr>
      <td class="text-left">Tip carcasa</td>
      <td class="text-left">Mini Tower</td>
	  </tr>
	  <tr>
      <td class="text-left">Putere sursa</td>
      <td class="text-left">180 W</td>
	  </tr>
	  <tr>
      <td class="text-left">Unitate optica</td>
      <td class="text-left">DVD RW</td>
	  </tr>
	  <tr>
      <td class="text-left">Sistem de racire procesor</td>
      <td class="text-left">Aer</td>
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
