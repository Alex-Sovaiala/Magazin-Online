<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '1';
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
    <title>Laptop Gaming ASUS TUF FX504GD-E4075 cu procesor Intel® Core™ i7-8750H pana la 4.10 GHz, Coffee Lake, 15.6", Full HD, 8GB, 1TB, nVIDIA® GeForce®  GTX 1050 4GB, Free DOS, Black</title>
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
	                      <li ><a href="#">Desktop PC</a></li>
	                      <li ><a href="#">Periferice</a></li>
	                      <li><a href="#">Monitoare</a></li>
	                      <li><a href="#">Brand</a></li>
	                      <div class="col_1">

	                          <h3>Componente PC</h3>

	                          <ul>
	                            <li ><a href="#">Memorii PC</a></li>
	                            <li ><a href="#">Procesoare</a></li>
	                            <li><a href="#">Plăci video</a></li>
	                            <li><a href="#">Plăci audio</a></li>
	                            <li><a href="#">Surse PC</a></li>
	                            <li><a href="#">Plăci de bază</a></li>
	                            <li><a href="#">Solid-State Drive</a></li>
	                            <li><a href="#">HDD</a></li>
	                            <li><a href="#">Carcase</a></li>
	                          </ul>

	                      </div>

	                    </ul>

	                </div>

	                <div class="col_1">

	                    <h3>Laptop</h3>
	                    <ul>
	                        <li><a href="#">Coolere</a></li>
	                        <li><a href="#">Genți & Ghiozdane</a></li>
	                        <li><a href="#">Brand</a></li>
	                        <div class="col_1">
	                            <h3>Componente Laptop</h3>
	                            <ul>
	                              <li ><a href="#">Memorii </a></li>
	                              <li ><a href="#">Procesoare</a></li>
	                              <li><a href="#">Plăci audio</a></li>
	                              <li><a href="#">Solid-State Drive</a></li>
	                              <li><a href="#">HDD & HDD Extern</a></li>
	                              <li><a href="#">DVD Writer extern</a></li>
	                            </ul>

	                        </div>
	                    </ul>

	                </div>

	                <div class="col_1">

	                    <h3>Pentru birou</h3>
	                    <ul>
	                        <li><a href="#">Scaune</a></li>
	                        <li><a href="#">Veioze</a></li>
	                        <li><a href="#">Supoți pentru monitor</a></li>
	                        <li><a href="#">Veioze</a></li>
	                    </ul>

	                </div>

	                <div class="col_1">

	                    <h3>Brand Pc</h3>
	                    <ul>
	                      <li><a href="#">Lenovo</a></li>
	                      <li><a href="#">Dell</a></li>
	                      <li><a href="#">Acer</a></li>
	                    </ul>

	                </div>

	                <div class="col_1">

	                    <h3>Brand Laptop</h3>
	                    <ul>
	                        <li><a href="#">Acer</a></li>
	                        <li><a href="#">Samsung</a></li>
	                        <li><a href="#">Asus</a></li>
	                    </ul>

	                </div>

	            </div><!-- End 4 columns container -->

	        </li><!-- End 4 columns Item -->
	        <li><a href="#" class="drop">Televizoare</a>
	          <!-- Begin 4 columns Item -->
	          <div class="dropdown_4columns">
	            <!-- Begin 4 columns container -->
	            <div class="col_1">
	              <h3>Tip</h3>
	              <ul>
	                <li ><a href="#">Televizoare</a></li>
	                <li ><a href="#">HD & Full HD</a></li>
	                <li><a href="#">4k ultra HD</a></li>
                  </ul>
                </div>
	            <div class="col_1">
	              <h3>Diagonala</h3>
	              <ul>
	                <li><a href="#">82-110 cm</a></li>
	                <li><a href="#">11-125 cm</a></li>
	                <li><a href="#">126-152 cm</a></li>
                  </ul>
                </div>
	            <div class="col_1">
	              <h3>Accesorii TV</h3>
	              <ul>
	                <li><a href="#">Suporturi TV</a></li>
	                <li><a href="#">Cabluri HDMI</a></li>
	                <li><a href="#">Accesorii Smart TV</a></li>
	                <li><a href="#">Ochelari 3D</a></li>
                  </ul>
                </div>
	            <div class="col_1">
	              <h3>Brand TV</h3>
	              <ul>
	                <li><a href="#">LG</a></li>
	                <li><a href="#">Samsung</a></li>
	                <li><a href="#">Asus</a></li>
                  </ul>
                </div>
              </div>
	          <!-- End 4 columns container -->
          </li>
	        <!-- End 4 columns Item -->
          <li><a href="#" class="drop">Telefoane</a>
              <!-- Begin 4 columns Item -->
              <div class="dropdown_5columns">
                <!-- Begin 4 columns container -->
                <div class="col_1">
                  <h3>Telefoane</h3>
                  <ul>
                    <li ><a href="#">Apple</a></li>
                    <li ><a href="#">Samsung</a></li>
                    <li><a href="#">Huawei</a></li>
                    <li><a href="#">Allview</a></li>
                    <li><a href="#">Nokia</a></li>
                    <li><a href="#">Xiaomi</a></li>
                    <li><a href="#">LG</a></li>
                  </ul>
                </div>
                <div class="col_1">
                  <h3>Accesorii</h3>
                  <ul>
                    <li><a href="#">Huse telefoane</a></li>
                    <li><a href="#">Folii protectii telefoane</a></li>
                    <li><a href="#">Incarcatoare</a></li>
                    <li><a href="#">Powerbank</a></li>
                    <li><a href="#">Casti audio</a></li>
                    <li><a href="#">Suport auto</a></li>
                  </ul>
                </div>
                <div class="col_1">
                  <h3>Tablete</h3>
                  <ul>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Huawei</a></li>
                    <li><a href="#">Microsoft</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Allview</a></li>
                  </ul>
                </div>
                <div class="col_1">
                  <h3>Accesorii</h3>
                  <ul>
                    <li><a href="#">Huse tablete</a></li>
                    <li><a href="#">Folii protectii tablete</a></li>
                    <li><a href="#">Incarcatoare</a></li>
                    <li><a href="#">Suport auto</a></li>
                  </ul>
                </div>


              </div>

              <!-- End 4 columns container -->

          </li>
					<li>
						<a href="Bibliografie.php" class="drop">Bibliografie</a>
					</li>
					<?php if(isset($_SESSION['username'])): ?>

					<li style="float:right; padding-right:5px;"><a class="drop"><div class="badge"><?php echo $_SESSION['totalquantity']?></div>Contul meu</a>
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

      </ul>
  <br><br><br>




    <div id="wrapper">
			<h1 style="font-size:22px;font-weight:bold;padding-left:2em;padding-right:2em;padding-top:1em;" >Laptop Gaming ASUS TUF FX504GD-E4075 cu procesor Intel® Core™ i7-8750H pana la 4.10 GHz, Coffee Lake, 15.6", Full HD, 8GB, 1TB, nVIDIA® GeForce® GTX 1050 4GB, Free DOS, Black</h1>


     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imagini/laptop1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imagini/laptop2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imagini/laptop3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
        3.799,99RON
    </p>

		            <?php require($_page.".php"); ?>
								<?php
									$sql="SELECT * FROM products ORDER BY id_product ASC ";
									$query=mysqli_query($db,$sql);
									while ($row=mysqli_fetch_array($query) ) {
										$i=$i+1;
										if($i==$_SESSION['idx'])
										{
								?>
					<form method="post" action="index.php">
							<button type="submit" class="btn" formaction="produs1.php?page=products&action=add&id=<?php echo $row['id_product'] ?>" name="cantitate" ><img src="cos.png" alt="Italian Trulli">
							</button>
					</form>
					<?php
					}
					}
					?>



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
     &emsp;&emsp; Acest produs este ideal pentru pesoane ce își doresc un laptop pentru un gaming de nivel mediu sau avansat, portabilitatea acestuia fiind avantajl unei vacanțe bine reușite.
    <br><br><br>

    <h2 style="text-align:center;">
      PRIMUL LAPTOP PENTRU JOCURI DIN SERIA TUF
    </h2>
      <br>
    <h2 style="text-align:center;">
      <u>DEPASIND STANDARDELE DURABILITATII</u>
    </h2>
	<br>


    <p style="font-size:20px;padding-left:2em;padding-right:0em;  width:600px; position:relative;">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reprezentand emblema spiritului Fortei Supreme
	  (The Ultimate Force - TUF) si proiectat pentru a inspaimanta orice dusman, FX504, deosebit de rezistent si usor,
	  este primul model de laptop din seria TUF Gaming. Un sistem foarte versatil, rezistent, puternic si portabil,
	  FX504 poate rula cele mai recente jocuri si aplicatii, oferind in acelasi timp o robustete si durabilitate de neegalat,
	  pentru experiente deosebit de realiste in jocuri pe termen lung. Sistemul de Racire Anti-Praf patentat ofera racirea
	  necesara actiunii intense din cadrul sesiunilor extinse de jocuri,
	</p>
	<p style="font-size:20px;padding-left:2em;padding-right:2em;">
	  extinzand durata de viata a sistemului prin eliminarea
	  particulelor de praf si murdarie periculoase. Indiferent ca folositi un sistem FX504 pentru sesiuni extinse in jocuri
	  sau pentru munca – acesta va indeplini cu succes orice sarcina, datorita duratei de viata a tastaturii estimata la
	  20 de milioane de apasari, de doua ori mai mult decat standardul in acest segment, de 10 milioane de apasari.
	  FX504 a fost proiectat pentru a impresiona — este mult mai rezistent decat sistemele standard si are tot de ceea ce
	  aveti nevoie pentru munca sau distractie.
	</p>

    <h2 style="text-align:center;float:left;padding-left:7em;padding-top:2em;">
     <u>RACIRE IMBUNATATITA SI DURATA DE VIATA EXTINSA</u>
    </h2>




    <p style="font-size:20px;padding-left:2em;padding-right:2em;float:left; "><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Designul sistemului de racire al modelului FX504
	  extinde semnificativ durata de functionare a acestuia si ofera performante stabile pentru jocuri cu o grafica deosebit
	  de intensa, tehnologia HyperCool combinand sistemul de auto-curatare patentat ADC cu functia customizabila
	  Fan Overboost (supra-accelerarea ventilatoarelor). Prin eliminarea particulelor de praf si murdarie din carcasa
	  cu ajutorul celor doua tuneluri dedicate, sistemul ADC este o adevarata capodopera din punct de vedere al racirii,
	  ce joaca rolul de sistem imun al laptopului — prevenind acumularile in zona lamelelor de racire pentru a creste
	  stabilitatea si durata de viata a sistemului. Functia ajustabila Fan Overboost a fost special conceputa pentru a
	  raspunde cerintelor voastre in jocuri si utilizare normala: Puteti alege intre trei moduri diferite pentru a obtine
	  echilibrul perfect intre performanta ventilatoarelor si nivelul de zgomot. O pereche de radiatoare de cupru si un sistem
	  dublu de ventilatoare racesc independent procesorul si placa video, in timp ce design-ul cu flux de aer optimizat al carcasei
	  creste eficienta sistemului de racire cu pana la 27% comparativ cu carcasele standard. Un ventilator este plasat
	  foarte inteligent direct sub grupul de taste WASD, pentru a asigura faptul ca tastatura voastra ramane rece chiar
	  si in timpul sesiunilor de jocuri extinse.  </p>


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
        <th class="text-left" style="font-size:18px;" >Procesor</th>
        </tr>
      <tr>
      <td class="text-left"class="table-hover" style="width:150px;">Tip procesor:</td>
      <td class="text-left"class="table-hover" style="width:600px;">Intel®</td>
      </tr>
      <tr>
      <td class="text-left">Tip procesor</td>
      <td class="text-left">i7</td>
      </tr>
      <tr>
      <td class="text-left">Model procesor</td>
      <td class="text-left">8750H</td>
      </tr>
      <tr>
      <td class="text-left">Arhitectura</td>
      <td class="text-left">Coffee Lake</td>
      </tr>
      <tr>
      <td class="text-left">Numar nuclee</td>
      <td class="text-left">6</td>
      </tr>
      <tr>
      <td class="text-left">Frecventa nominala</td>
      <td class="text-left">2200 MHz</td>
      </tr>
      <tr>
      <td class="text-left">Cache</td>
      <td class="text-left">9126 KB</td>
      </tr>
      <tr>
      <td class="text-left">Frecventa Turbo Boost</td>
      <td class="text-left">4100 MHz</td>
      </tr>
      <tr>
      <td class="text-left">Tehnologie procesor</td>
      <td class="text-left">14 nm</td>
      </tr>
      <tr>
      <td class="text-left">Procesor grafic integrat</td>
      <td class="text-left">	Intel® UHD Graphics 630</td>
      </tr>

      <th class="text-left" style="font-size:18px; padding-top:1em;" >Display</th>
      </tr>
    <tr>
    <td class="text-left"class="table-hover" style="width:150px;">Diagonala Display</td>
    <td class="text-left"class="table-hover" style="width:600px;">15.6 inch</td>
    </tr>
    <tr>
    <td class="text-left">Format display</td>
    <td class="text-left">Full HD</td>
    </tr>
    <tr>
    <td class="text-left">Tehnologie display</td>
    <td class="text-left">IPS</td>
    </tr>
    <tr>
    <td class="text-left">Finisaj Display</td>
    <td class="text-left">Anti-Glare</td>
    </tr>
    <tr>
    <td class="text-left">Rezolutie</td>
    <td class="text-left">1920 x 1080</td>
    </tr>

    <th class="text-left" style="font-size:18px; padding-top:1em;" >Memorie</th>
    </tr>
  <tr>
  <td class="text-left"class="table-hover" style="width:150px;">Capacitate memorie</td>
  <td class="text-left"class="table-hover" style="width:600px;">8 GB</td>
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
  <td class="text-left">2666 MHZ</td>
  </tr>

  <th class="text-left" style="font-size:18px; padding-top:1em;" >Placa Video</th>
  </tr>
<tr>
<td class="text-left"class="table-hover" style="width:150px;">Tip placa video</td>
<td class="text-left"class="table-hover" style="width:600px;">Dedicata</td>
</tr>
<tr>
<td class="text-left">Chipset video</td>
<td class="text-left">nVidia GeForce</td>
</tr>
<tr>
<td class="text-left">Model placa video</td>
<td class="text-left">GTX 1050</td>
</tr>
<tr>
<td class="text-left">Capacitate memorie video</td>
<td class="text-left">4096 MB</td>
</tr>
<tr>
<td class="text-left">Tip memorie placa video</td>
<td class="text-left">GDDR5</td>
</tr>

<th class="text-left" style="font-size:18px; padding-top:1em;"> CONECTIVITATE & PORTURI</th>
</tr>
<tr>
<td class="text-left"class="table-hover" style="width:150px;">Porturi</td>
<td class="text-left"class="table-hover" style="width:600px;">2 X USB 3.0</td>
</tr>
<tr>
<td class="text-left"></td>
<td class="text-left">1 X Audio Out</td>
</tr>
<tr>
<td class="text-left"></td>
<td class="text-left">1 X USB 2.0</td>
</tr>
<tr>
<td class="text-left"></td>
<td class="text-left">1 X HDMI</td>
</tr>
<tr>
<td class="text-left">Wireless</td>
<td class="text-left">802.11 ac 2x2</td>
</tr>
<tr>
<td class="text-left">Versiune Bluetooth</td>
<td class="text-left">4.0</td>
</tr>

<th class="text-left" style="font-size:18px; padding-top:1em;"> CARACTERISTICI GENERALE</th>
</tr>
<tr>
<td class="text-left"class="table-hover" style="width:150px;">
Tastatura numerica</td>
<td class="text-left"class="table-hover" style="width:600px;">Da</td>
</tr>
<tr>
<td class="text-left">Dimensiuni (W x H x D)</td>
<td class="text-left">384 x 25 x 262 mm</td>
</tr>
<tr>
<td class="text-left">Greutate</td>
<td class="text-left">2.3 Kg</td>
</tr>
<tr>
<td class="text-left">Securitate</td>
<td class="text-left">Kensington Lock</td>
</tr>
<tr>
<td class="text-left">Limba tastatura</td>
<td class="text-left">Tastatura internationala</td>
</tr>
<tr>
<td class="text-left">Culoare</td>
<td class="text-left">Negru</td>
</tr>
<tr>
<td class="text-left">Caracteristici cheie</td>
<td class="text-left">Camera Web</td>
</tr>
<td class="text-left">Caracteristici cheie</td>
<td class="text-left">Tastatura iluminata</td>
</tr>

<th class="text-left" style="font-size:18px; padding-top:1em;">Software</th>
</tr>
<tr>
<td class="text-left"class="table-hover" style="width:150px;">
Sistem de operare</td>
<td class="text-left"class="table-hover" style="width:600px;">Free DOS</td>
</tr>

      </tbody>
      </table>

  </div>
  <script>
    showSlides(slideIndex);
  </script>

	<div id="wrapper3">
	  	<footer class="footer-distributed" style="margin:0px;">
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
	    Make IT Tech este o companie românească hybrid, o platformă de cumpărături destinată cumpărăturilor online, deschisă către nou și inovativ. Versiunea siteului 1.0.0.2B
	  </p>



	</div>
	</footer>
	</div>

  </body>




</html>
