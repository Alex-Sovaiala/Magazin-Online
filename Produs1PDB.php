<?php
	session_start();

	require("server.php");
	$_SESSION['idx'] = '13';
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
    <title>Placa de baza Gigabyte B450M DS3H, Socket AM4</title>
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
    <h1 style="font-size:30px;font-weight:bold;padding-left:1.5em;padding-right:2em;padding-top:1em;" >Placa de baza Gigabyte B450M DS3H, Socket AM4</h1>



     <div class="slideshow-container" style="float:right;">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="imaginiPDB/produs1/1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="imaginiPDB/produs1/2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="imaginiPDB/produs1/3.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	<p id="pret">
       340,91RON
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
      <td class="text-left"class="table-hover" style="width:150px;">CPU Socket</td>
      <td class="text-left"class="table-hover" style="width:600px;">Am4</td>
      </tr>
      <tr>
      <td class="text-left">Chipset</td>
      <td class="text-left">B450</td>
      </tr>
      <tr>
      <td class="text-left">Procesoare suportate</td>
      <td class="text-left">RYZEN</td>
      </tr>
      <tr>
      <td class="text-left">Socket-uri procesor</td>
      <td class="text-left">1</td>
      </tr>
      <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Memorie</th>
      </tr>
      <tr>
      <td class="text-left">Tip memorie</td>
      <td class="text-left">DDR4</td>
      </tr>
      <tr>
      <td class="text-left">Capacitate maxima memorie RAM (MB)</td>
      <td class="text-left">64 GB</td>
      </tr>
      <tr>
      <td class="text-left">Frecventa memorie (MHz)</td>
      <td class="text-left">3200(O.C.)<br>2667<br>2400<br>2133<br>2933(O.C.)</td>
      </tr>
      <tr>
      <td class="text-left">Suport Dualchannel</td>
      <td class="text-left">Da</td>
      </tr>
	  <tr>
      <td class="text-left">Suport ECC</td>
      <td class="text-left">Da</td>
      </tr>
	  <tr>
      <td class="text-left">Sloturi memorie</td>
      <td class="text-left">4</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Conectivitate</th>
      </tr>
	  <tr>
      <td class="text-left">Slot PCI</td>
      <td class="text-left">PCI Express 3.0</td>
      </tr>
	  <tr>
      <td class="text-left">Audio integrat</td>
      <td class="text-left">Realtek ALC887</td>
      </tr>
	  <tr>
      <td class="text-left">LAN integrat</td>
      <td class="text-left">Realtek® GbE LAN chip (10/100/1000 Mbit)</td>
      </tr>
	  <tr>
      <td class="text-left">RAID integrat</td>
      <td class="text-left">RAID 0<br>RAID 1<br> RAID 10<br> 0, 1, 10</td>
      </tr>
	  <tr>
      <td class="text-left">Rata de transfer SATA (MB/s)</td>
      <td class="text-left">6000</td>
      </tr>
	  <tr>
      <td class="text-left">Conector sursa (pini)</td>
      <td class="text-left">1 x 24-pin ATX<br>1 x 8 pin 12V</td>
      </tr>

	  <tr>
      <td class="text-left">Porturi USB 2.0</td>
      <td class="text-left">4</td>
      </tr>
      <tr>
      <td class="text-left">Porturi USB 3.1</td>
      <td class="text-left">4</td>
      </tr>
	  <tr>
	  <tr>
      <td class="text-left">Conectivitate</td>
      <td class="text-left">1 x HDMI <br>RJ-45<br>3 x Audio Jack<br>1 x DVI<br>1 x PS/2</td>
      </tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Sloturi</th>
      </tr>
	  <tr>
      <td class="text-left">Sloturi PCI-E x16</td>
      <td class="text-left">2 x PCI-E (x16,x4)</td>
      </tr>
      <tr>
      <td class="text-left">Sloturi PCI-E x1</td>
      <td class="text-left">1</td>
      </tr>
	  <tr>
      <td class="text-left">Sloturi speciale</td>
      <td class="text-left">1 x M.2</td>
      </tr>
	  <tr>
      <th class="text-left" style="font-size:32px;padding-bottom:1em;" >Altele</th>
      </tr>
	  <tr>
      <td class="text-left">Tehnologii suportate</td>
      <td class="text-left">APP Center<br>Q-Flash<br>Xpress Install</td>
	  </tr>
	  <tr>
      <td class="text-left">BIOS & memorie BIOS</td>
      <td class="text-left">1 x 128 Mbit flash<br>AMI UEFI BIOS<br>DualBIOS<br>PnP 1.0a, DMI 2.7, WfM 2.0, SM BIOS 2.7, ACPI 5.0</td>
	  </tr>
	  <tr>
      <td class="text-left">Format</td>
      <td class="text-left">Micro ATX</td>
	  </tr>
	  <tr>
      <td class="text-left">Altele</td>
      <td class="text-left">7-colors RGB LED Strips Support</td>
	  </tr>
	  <tr>
      <td class="text-left">Dimensiuni (L x l, cm)</td>
      <td class="text-left">24.4 x 21.5</td>
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
