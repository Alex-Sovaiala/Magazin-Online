<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Autentificare</title>
  <link rel="stylesheet" type="text/css" href="register.css">
  <link rel="shortcut icon" href="1.jpeg">
  <link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body style="margin-bottom:0; margin-left:0; margin-right:0;">

    <div class="container">
      <div class="card"></div>
      <div class="card">
        <h1 class="title">Autentificare</h1>
        <form method="post" action="login.php" >
            	<?php include('errors.php'); ?>
          <div class="input-container"style="padding-top:1em;">
            <input type="text" name="username" id="#{label}" />
            <label for="#{label}">Utilizator</label>
            <div class="bar"></div>
          </div>
          <div class="input-container">
            <input type="password" name="password" id="#{label}" />
            <label for="#{label}">Parolă</label>
            <div class="bar"></div>
          </div>
          <div class="button-container">
            <button type="submit" name="login_user"><span>Autentificare</span></button>
          </div>
          <div class="footer">Încă nu ai cont? <a href="register.php">Înscrie-te</a></div>
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
