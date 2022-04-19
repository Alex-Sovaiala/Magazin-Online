<?php
session_start();

// initializing variables
$username = "";
$oras ="";
$nume ="";
$prenume ="";
$tara ="";
$adresa ="";
$telefon ="";
$varsta ="";
$email="";

$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '12345678', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Campul de utilizator este gol"); }
  if (empty($email)) { array_push($errors, "Campul de e-mail este gol"); }
  if (empty($password_1)) { array_push($errors, "Campul de parola este gol"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Utilizatorul deja exista");
    }

    if ($user['email'] === $email) {
      array_push($errors, "E-mailul deja exista");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
  	$_SESSION['success'] = "V-ati autentificat cu success";
  	header('location: primapagina.php');
  }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Campul de utilizator este gol");
  }
  if (empty($password)) {
  	array_push($errors, "Campul de parola este gol");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: primapagina.php');
  	}else {
  		array_push($errors, "Utilizator/parola gresita");
  	}
  }
}
if (isset($_POST['edit_user']))
{
$oras = mysqli_real_escape_string($db, $_POST['oras']);
$tara = mysqli_real_escape_string($db, $_POST['tara']);
$adresa = mysqli_real_escape_string($db, $_POST['adresa']);
$nume = mysqli_real_escape_string($db, $_POST['nume']);
$prenume = mysqli_real_escape_string($db, $_POST['prenume']);
$telefon = mysqli_real_escape_string($db, $_POST['telefon']);
$varsta = mysqli_real_escape_string($db, $_POST['varsta']);
$password = md5(mysqli_real_escape_string($db, $_POST['password']));
$username = mysqli_real_escape_string($db, $_POST['username']);
$sql = "UPDATE users SET tara='$tara', oras='$oras', nume='$nume', prenume='$prenume', tara='$tara', adresa='$adresa',telefon='$telefon',varsta='$varsta' WHERE password = '$password' and username='$username' ";
mysqli_query($db, $sql);

}

if(isset($_POST['cantitate']))
{

$_SESSION['totalquantity']++;
}
?>
