<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '23';
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
    <title>Telefon mobil Allview Soul X5 Pro, Dual SIM, 32GB, 4G, Black</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Telefon mobil Allview Soul X5 Pro, Dual SIM, 32GB, 4G, Black</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiAllview/produs2/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiAllview/prodprodus2us1/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiAllview/prodprodus2us1/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
       1.149,99RON
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


	<h4 style="font-size:20px;margin-left:2.5em;">Design & Display</h4><br>
	<p style="margin-left:3.5em;">Datorita raportului vizual 19:9 si a ecranului mai inalt, afisajul vizual este incontestabil mai imbogatit, astfel, Soul X5 Pro ridica la superlativ experienta ta de vizualizare prin care vei depasi orice bariera. Mai mult, o lume plina de culori ti se va asterne in fata prin display-ul de 6.2 inch cu o rezolutie Full HD+.
<br><br>
Privirea iti va fi captivata de design-ul desarvarsit cu curburi delicate. Acesta iti va oglindi personalitatea, indiferent de felul tau de a fi. Marginile subtiri si imbinarea armonioasa a elementelor de design iti vor tine ochii atintiti pe ecran si vor tine alte preocupari departe.
<br><br>
Display-ul inglobeaza tehnici noi si materiale avansate sustinute de procesele riguroase de fabricatie, toate acestea asigurandu-i protectie in situatii neplacute precum: zgarieturi, socuri si cazaturi usoare. Dispozitivul devine astfel durabil si noul tau prieten de incredere.</P>
<br>
	<h4 style="font-size:20px;margin-left:2.5em;">Carcasa Unibody, cu contururi rotunjite</h4><br>
	<p style="margin-left:3.5em;">Carcasa sofisticata 3D unibody, cu contururi rotunjite, textura glossy cu aspect ceramic, modern si foarte placut la atingere.	</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Camera duala AI</h4><br>
	<p style="margin-left:3.5em;">Noua tehnologie de recunoastere a cadrului fotografiat cu ajutorul inteligentei artificiale poate identifica in timp real 22 de categorii si 500 de scenarii, pentru realizarea unor fotografii perfecte. Camerele duale de 13 MP + 2 MP figureaza o diafragma mare de f/1.8 pentru captarea unor detalii vii si adauga un efect bokeh natural momentelor surprinse.</p>

	<h4 style="font-size:20px;margin-left:2.5em;">AI Selfie Artist</h4><br>
	<p style="margin-left:3.5em;">Camera frontala recunoaste opt scenarii unice de realizare a selfieurilor si optimizeaza fotografiile in timp real cu ajutorul tehnologiei I.A. pentru a putea surprinde portrete perfecte in fiecare zi.</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Chipset Kirin 710</h4><br>
	<p style="margin-left:3.5em;">Procesorul avansat octacore Kirin 710 sporeste performanta de functionare la o viteza incredibila, cu ajutorul tehnologiei de procesare 12nm, in acelasi timp scazand eficient consumul bateriei. Placa grafica GPU Turbo beneficiaza de o capacitate de calcul mult imbunatatita, care iti ofera o experienta imersiva in timpul jocurilor.</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Baterie puternica</h4><br>
	<p style="margin-left:3.5em;">Cu ajutorul bateriei puternice de 3.400 mAh cu care este prevazut telefonul HUAWEI P smart 2019, te poti bucura de jocuri intense si poti viziona filme memorabile. Viteza de incarcare este accelerata cu 22% pentru a putea tine pasul cu ritmul rapid al vietii tale.</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Deblocare prin recunoastere faciala</h4><br>
	<p style="margin-left:3.5em;">Deblocarea prin recunoastere faciala (face unlock) iti faciliteaza accesul rapid si sigur la telefon si asigura securitatea continutului din dispozitiv.	</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Cumparaturi smart cu inteligenta artificiala</h4><br>
	<p style="margin-left:3.5em;">EMUI 9.0 iti aduce experienta de shopping la indemana. Scaneaza un produs sau pur si simplu apasa prelung pe un obiect dintr-o imagine si vei obtine linkuri catre platformele de e-commerce.</p>




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
      <td class="text-left">Hybrid Dual Sim</td>
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
4G: 800 / 900 / 1800 / 2100 / 2600<br>
2G: 800 / 900 / 1800 / 1900</td>
      </tr>
      <tr>
      <td class="text-left">Model procesor</td>
      <td class="text-left">Kirin 710</td>
      </tr>
	  <tr>
      <td class="text-left">Frecventa procesor</td>
      <td class="text-left">4x 2.2 GHz & 4x 1.7 GHz</td>
      </tr>
	  <tr>
      <td class="text-left">Frecventa procesor</td>
      <td class="text-left">4x 2.2 GHz & 4x 1.7 GHz</td>
      </tr>
	  <tr>
      <td class="text-left">Culoare</td>
      <td class="text-left">Albastru</td>
      </tr>
	  <tr>
      <td class="text-left">Dimensiuni (W x H x D mm)</td>
      <td class="text-left">73.4 x 155.2 x 7.95</td>
      </tr>
	  <tr>
      <td class="text-left">GPS</td>
      <td class="text-left">A-GPS<br>
Da<br>
GLONASS<br>
BDS</td>
      </tr>
	  <tr>
      <td class="text-left">Greutate (g)</td>
      <td class="text-left">160</td>
      </tr>
	  <tr>
      <td class="text-left">Sistem de operare</td>
      <td class="text-left">Android 9.0 (Pie)</td>
      </tr>
	  <tr>
      <td class="text-left">Tip sim</td>
      <td class="text-left">Nano SIM</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Memorie</th>
      </tr>
	  <tr>
      <td class="text-left">Memorie</td>
      <td class="text-left">3 GB</td>
      </tr>
	  <tr>
      <td class="text-left">Memorie interna</td>
      <td class="text-left">64 GB</td>
      </tr>
	  <tr>
      <td class="text-left">Tip slot memorie</td>
      <td class="text-left">MicroSD</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Afisaj</th>
      </tr>
	  <tr>
      <td class="text-left">Tip diplay</td>
      <td class="text-left">LCD</td>
      </tr>
      <tr>
      <td class="text-left">Rezolutie</td>
      <td class="text-left">2340x1080</td>
      </tr>
	  <tr>
      <td class="text-left">Numar culori</td>
      <td class="text-left">16 M</td>
      </tr>
	  <tr>
      <td class="text-left">Diagonala display</td>
      <td class="text-left">6.21</td>
      </tr>
	  <tr>
      <td class="text-left">Functii</td>
      <td class="text-left">415 PPI</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Conectivitate</th>
      </tr>
	  <tr>
      <td class="text-left">GPRS</td>
      <td class="text-left">Da</td>
      </tr>
      <tr>
      <td class="text-left">Tehnologie Bluetooth</td>
      <td class="text-left">4.2<br>A2DP<br>LE</td>
      </tr>
	  <tr>
      <td class="text-left">USB</td>
      <td class="text-left">Micro USB</td>
      </tr>
	  <tr>
      <td class="text-left">Porturi</td>
      <td class="text-left">Jack 3.5 mm</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Foto video</th>
      </tr>
	  <tr>
      <td class="text-left">Rezolutie camera (Mp)</td>
      <td class="text-left">13 + 2 (Dual Camera)</td>
	  </tr>
	  <tr>
      <td class="text-left">Blitz integrat</td>
      <td class="text-left">LED</td>
	  </tr>
	  <tr>
      <td class="text-left">Rezolutie video</td>
      <td class="text-left">1080p@30fps</td>
	  </tr>
	  <tr>
      <td class="text-left">Camera secundara</td>
      <td class="text-left">8 MP</td>
	  </tr>
	  <tr>
      <td class="text-left">Caracteristici foto/video</td>
      <td class="text-left">Panorama<br>HDR<br>Geo-etichetare, focus tactil, detectie fa</td>
	  </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Alimentare</th>
      </tr>
	  <tr>
      <td class="text-left">Capacitate (mAh)</td>
      <td class="text-left">3400
	  </td>
	  </tr>
	  <tr>
      <td class="text-left">Tip baterie</td>
      <td class="text-left">Li-Ion</td>
	  </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Comunicare</th>
      </tr>
	  <tr>
      <td class="text-left">Mesagerie</td>
      <td class="text-left">SMS / MMS</td>
      </tr>
	  <tr>
      <td class="text-left">Browsing</td>
      <td class="text-left">HTML5</td>
      </tr>
	  <tr>
      <td class="text-left">E-mail</td>
      <td class="text-left">Email, push Mail</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Multimedia</th>
      </tr>
	  <tr>
      <td class="text-left">FM Radio</td>
      <td class="text-left">Da</td>
      </tr>
	  <tr>
      <td class="text-left">Redare video</td>
      <td class="text-left">Da</td>
      </tr>
	  <tr>
      <td class="text-left">Redare audio</td>
      <td class="text-left">Da</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Altele</th>
      </tr>
	  <tr>
      <td class="text-left">Senzori</td>
      <td class="text-left">Compas<br>
Proximitate<br>
Lumina ambientala<br>
Amprenta<br>
G Sensor</td>
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
