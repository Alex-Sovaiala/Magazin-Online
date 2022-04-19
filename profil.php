<?php include('server.php');
$username=$_SESSION['username'];
$result = mysqli_query($db,"SELECT * FROM users");
while($row = mysqli_fetch_array($result))
{

  if($username==$row['username'])
  {
    $email=$row['email'];
    $user=$row['username'];
    $nume=$row['nume'];
    $prenume=$row['prenume'];
    $tara=$row['tara'];
    $oras=$row['oras'];
    $adresa=$row['adresa'];
    $telefon=$row['telefon'];
    $varsta=$row['varsta'];
  }
}



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profilul meu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <style>

    #avatar {
        /* This image is 687 wide by 1024 tall, similar to your aspect ratio */

        /* make a square container */
        width: 12em;
        height: 12em;

        /* fill the container, preserving aspect ratio, and cropping to fit */
        background-size: cover;

        /* center the image vertically and horizontally */
        background-position: top center;

        /* round the edges to a circle with border radius 1/2 container size */
        border-radius: 50%;
    }

</style>
  </head>
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

          <div id="wrapper2"  style="padding-top:0px;padding-left:0px;padding-right:0px; margin-left: auto; margin-right:auto;position:center; width:1280px;">

              <img src="avatar.jpg" alt="Avatar" id="avatar" style="margin-left: 42%; margin-bottom:-50px; margin-top:50px;">
          	<br>
            <table class="table-fill" style="margin-left: 37%;margin-top:0px;">
            <thead>

            </thead>
            <tbody >

            <tr>
            <td class="text-left">Username</td>
            <td class="text-left"><?php echo $user ?></td>
            </tr>
            <tr>
            <td class="text-left">Nume</td>
            <td class="text-left"><?php echo $nume?></td>
            </tr>
            <tr>
            <td class="text-left">Prenume</td>
            <td class="text-left"><?php echo $prenume ?></td>
            </tr>
            <tr>
            <td class="text-left">Email</td>
            <td class="text-left"><?php echo $email ?></td>
            </tr>
            <tr>
            <td class="text-left">Tara</td>
            <td class="text-left"><?php echo $tara ?></td>
            </tr>
            <tr>
            <td class="text-left">Oras</td>
            <td class="text-left"><?php echo $oras ?></td>
            </tr>
            <tr>
            <td class="text-left">Adresa</td>
            <td class="text-left"><?php echo $adresa ?></td>
            </tr>
            <tr>
            <td class="text-left">Telefon mobil</td>
            <td class="text-left"><?php echo $telefon ?></td>
            </tr>
            <tr>
            <td class="text-left">Data nasterii</td>
            <td class="text-left"><?php echo $varsta ?></td>
            </tr>

            </tbody>
          </table><Br>
            <a href="editprofil.php"><button type="submit" class="button8" style="margin-left: 42%;" name="edit_profil">Editare profil</button></a>

            </div>




  </body>
  <div id="wrapper3">
    	<footer class="footer-distributed" style="margin:0px;">
  <div class="footer-left">

    <a href="primapagina.php"><img src="SIGLA.jpeg"></a>




    <p class="footer-company-name">Company Name &copy; 2019</p>
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

</html>
