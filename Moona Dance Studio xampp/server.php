<?php
session_start();

// initializing variables
$login = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'moona_dance_studio');

// REGISTER USER
if (isset($_POST['logins_c'])) {
  // receive all input values from the form
  $login = mysqli_real_escape_string($db, $_POST['login']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($login)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same login and/or email
  $user_check_query = "SELECT * FROM logins_c WHERE ClientLogin='$login' OR ClientEmail='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['ClientLogin'] === $login) {
      array_push($errors, "Username already exists");
    }

    if ($user['ClientEmail'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO logins_c (ClientLogin, ClientEmail, ClientPassword) 
  			  VALUES('$login', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['login'] = $login;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home-page.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $login = mysqli_real_escape_string($db, $_POST['login']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($login)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['login'] = $login;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: registration-page.php');
  	}else {
  		array_push($errors, "Wrong login/password combination");
  	}
  }
}

?>