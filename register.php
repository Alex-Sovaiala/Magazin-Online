<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="register.css">
  
 
<link rel="stylesheet" type="text/css" href="footer.css">

  
</head>
<body>





  <div class="container">
    <div class="card"></div>
    <div class="card">
        	<h1 class="title">Înregistrare</h1>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>

  	<div class="input-container"style="padding-top:1em;">
  	  <input type="text" name="username" id="#{label}" />
  	<label for="#{label}">Utilizator</label>
      <div class="bar"></div>
    </div>
  	<div class="input-container"style="padding-top:1em;">
  	  <input type="text" name="email"  id="#{label}"   />
  	  <label for="#{label}">Email</label>
      <div class="bar"></div>
    </div>
  	<div class="input-container"style="padding-top:1em;">
  	  <input type="password" name="password_1" id="#{label}" />
      <label for="#{label}">Parolă</label>
      <div class="bar"></div>
  	</div>
  	<div class="input-container"style="padding-top:1em;">
  	  <input type="password" name="password_2" id="#{label}" />
      <label for="#{label}">Confirmă parola</label>
      <div class="bar"></div>
  	</div>
  	<div class="button-container">
  	  <button type="submit" class="btn" name="reg_user"><span>Înregistrare</span></button>
  	</div>
    <div class="footer">
  		Aveti cont? <a href="login.php">Autentificare</a>     <?php echo  $_SESSION['email']; ?>
    </div>

  </form>
</div>
</div>

<div id="wrapper3">
  	<footer class="footer-distributed" >
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
    Make IT Tech este o companie românească hybrid, o platformă de cumpărături destinată cumpărăturilor online, deschisă către nou și inovativ. Versiunea siteului 1.0.0.4B </p>



</div>
</footer>
</div>

</body>

</html>
