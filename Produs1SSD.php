<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '15';
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
    <title>Solid state drive (SSD) Samsung 860 EVO, 250GB, 2.5", SATA III</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Solid state drive (SSD) Samsung 860 EVO, 250GB, 2.5", SATA III</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiSsd/produs1/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiSsd/produs1/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiSsd/produs1/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
        289,99RON
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

	<h4 style="font-size:20px;margin-left:2.5em;">SSD-ul in care ai incredere</h4><br>
	<p style="margin-left:3.5em;">Cea mai noua editie din
	cea mai bine vanduta serie SSD SATA, Samsung 860 EVO.
	Special creat pentru computerele si laptopurile obisnuite,
	cu cel mai nou V-NAND si un controler bazat pe algoritm,
	acest SSD rapid si fiabil vine cu o gama larga de factori
	de forma si capacitati compatibile.</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">Performanta imbunatatita</h4><br>
	<p style="margin-left:3.5em;">Vitezele sunt mai consecvente,
	chiar si cu volum mare de munca si mai multe taskuri.
	860 EVO functioneaza cu scrieri secventiale de pana la
	520 MB/s cu tehnologia Intelligent TurboWrite si citiri
	secventiale de pana la 550 MB/s. Dimensiunea memoriei
	TurboWrite este actualizata de la 12 GB la 78 GB
	pentru un transfer mai rapid al fisierelor.
	</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">Compatibilitate inteligenta</h4><br>
	<p style="margin-left:3.5em;">Beneficiaza de o comunicare mai
	rapida si mai fluida cu sistemul tau gazda. Algoritmul ECC rafinat
	si un nou controler MJX genereaza viteze mai mari, iar prioritizarea
	de comenzi trim imbunatateste compatibilitatea cu Linux. Ingineria
	noastra avansata face 860 EVO mai compatibil cu sistemul informatic.
	</p><br>

	<h4 style="font-size:20px;margin-left:2.5em;">Factori multi-forma</h4><br>
	<p style="margin-left:3.5em;">Orice dimensiune ai avea nevoie pentru
	computerul tau, exista un 860 EVO pentru tine. Alege dintre
	cele de 2,5 inci pentru computere si laptopuri, iar M.2 (2280)
	bazat pe SATA sau mSATA pentru dispozitive informatice ultra-subtiri.</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Software de management</h4><br>
	<p style="margin-left:3.5em;">Software-ul Samsung Magician este
	creat pentru a te ajuta sa iti folosesti SSD-ul cu o interfata
	de utilizator simpla si intuitiva.
	</p>

	<h4 style="font-size:20px;margin-left:2.5em;">Securitatea datelor</h4><br>
	<p style="margin-left:3.5em;">Protejeaza datele prin selectarea
	optiunilor de securitate. 860 EVO suporta criptarea pe baza de
	hardware AES de 256 de biti si este conform cu TCG Opal si IEEE
	1667.
	</p>


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
      <td class="text-left"class="table-hover" style="width:150px;">From Factor</td>
      <td class="text-left"class="table-hover" style="width:600px;">2.5 inch</td>
      </tr>
      <tr>
      <td class="text-left">Capacitate 250GB</td>
      <td class="text-left">Interfata SATA 3</td>
      </tr>
      <tr>
      <td class="text-left">Rata de transfer la citire (MB/s)</td>
      <td class="text-left">550</td>
      </tr>
      <tr>
      <td class="text-left">Rata de transfer la scriere (MB/s)</td>
      <td class="text-left">520</td>
      </tr>
      <tr>
      <td class="text-left">Rata de transfer SATA (MB/s)</td>
      <td class="text-left">600</td>
      </tr>
      <tr>
      <td class="text-left">Altele</td>
      <td class="text-left">MTBF: 1.5 milioane ore<br>Compatibilitate TRIM<br>Compatibilitate S.M.A.R.T.<br>Criptare AES 256-bit</td>
      </tr>
      <tr>
      <td class="text-left">Dimensiuni (W x H x D mm)</td>
      <td class="text-left">101.6 x 69.85 x 6.8 mm</td>
      </tr>
      <tr>
      <td class="text-left">Greutate</td>
      <td class="text-left">51g</td>
      </tr>
      <tr>
      <td class="text-left">Tip Memorie</td>
      <td class="text-left">TLC</td>
      </tr>
	  <tr>
      <td class="text-left">Tip controller</td>
      <td class="text-left">Samsung MJX</td>
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
