<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '63';
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
    <title>Sistem Desktop PC Dell Vostro 3268 SFF cu procesor Intel® Core™ i5-7400 3.0 GHz, Kaby Lake, 4GB, 1TB, DVD-RW, Intel HD Graphics 630, Microsoft Windows 10 Pro</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Sistem Desktop PC Dell Vostro 3268 SFF cu procesor Intel® Core™ i5-7400 3.0 GHz, Kaby Lake, 4GB, 1TB, DVD-RW, Intel HD Graphics 630, Microsoft Windows 10 Pro</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 1</div>
    <img src="imaginiPCDell/produs3/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 2</div>
    <img src="imaginiPCDell/produs3/2.jpg" style="width:100%">

  </div>



  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
       2.599,99RON
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


<div class="table-title">

</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left" style="font-size:32px;padding-bottom:1em;" >Caracteristici Generale</th>
</tr>
</thead>
<tbody >
<tr>
<td class="text-left"class="table-hover" style="width:150px;">Tip Sistem</td>
<td class="text-left"class="table-hover" style="width:600px;">Desktop PC</td>
</tr>
<tr>
<td class="text-left">Sistem de operare</td>
<td class="text-left">Microsoft Windows 10 Pro</td>
</tr>
<tr>
<td class="text-left">Greutate</td>
<td class="text-left">4.8 Kg</td>
</tr>
<tr>
<td class="text-left">Adancime</td>
<td class="text-left">293 mm</td>
</tr>
<tr>
<td class="text-left">Inaltime</td>
<td class="text-left">290 mm</td>
</tr>
<tr>
<td class="text-left">Culoare</td>
<td class="text-left">Negru</td>
</tr>

<tr>
<th class="text-left" style="font-size:32px;padding-bottom:1em;" >Procesor</th>
</tr>
<td class="text-left"class="table-hover" style="width:150px;">Producator procesor</td>
<td class="text-left"class="table-hover" style="width:600px;">Intel®</td>
</tr>
<tr>
<td class="text-left">Tip procesor</td>
<td class="text-left">i5</td>
</tr>
<tr>
<td class="text-left">Model procesor</td>
<td class="text-left">7400</td>
</tr>
<tr>
<td class="text-left">Arhitectura</td>
<td class="text-left">Kaby Lake</td>
</tr>
<tr>
<td class="text-left">Numar nuclee</td>
<td class="text-left">4</td>
</tr>
<tr>
  <td class="text-left">Numar thread-uri</td>
  <td class="text-left">4</td>
  </tr>
<tr>
<td class="text-left">Frecventa nominala</td>
<td class="text-left">3000 MHz</td>
</tr>
<tr>
<td class="text-left">Frecventa Turbo Boost</td>
<td class="text-left">3500 MHz</td>
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
<td class="text-left">Intel® UHD Graphics 630</td>
</tr>
<th class="text-left" style="font-size:32px;padding-bottom:1em;" >Memorie ram</th>
</tr>
<tr>
<td class="text-left">Capacitate Memorie</td>
<td class="text-left">4 GB</td>
</tr>
<tr>
<td class="text-left">Tip memorie</td>
<td class="text-left">DDR4</td>
</tr>
<tr>
<td class="text-left">Frecventa memorie</td>
<td class="text-left">2400 MHz</td>
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
<td class="text-left">H110</td>
</tr>
<tr>
  <td class="text-left">Porturi Back Panel</td>
  <td class="text-left">4 x USB 2.0<br>2 x USB 3.0<br>1 x RJ 45<br>1 x VGA<br>1 x HDMI</td>

</tr>
<tr>
<td class="text-left">Retea</td>
<td class="text-left">10/100/1000</td>
</tr>


<tr>
<th class="text-left" style="font-size:32px;padding-bottom:1em;" >CAPACITATE STOCARE</th>
</tr>
<tr>
<td class="text-left">Tip stocare</td>
<td class="text-left">HDD</td>
</tr>
<tr>
<td class="text-left">Capacitate HDD/SSHD</td>
<td class="text-left">1 TB</td>
</tr>

<tr>
<td class="text-left">Interfata HDD/SSHD</td>
<td class="text-left">SATA 3</td>
</tr>
<tr>
<td class="text-left">Viteza de rotatie HDD</td>
<td class="text-left">7200 rpm</td>
</tr>

<tr>
<th class="text-left" style="font-size:32px; padding-top:1em;" >Placa Video</th>
</tr>
<tr>
<td class="text-left"class="table-hover" style="width:150px;">Tip placa video</td>
<td class="text-left"class="table-hover" style="width:600px;">Integrata</td>
</tr>

<tr>
<th class="text-left" style="font-size:32px;padding-bottom:1em;" >Carcasa & Sursa</th>
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
