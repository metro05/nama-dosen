<?php
session_start();
if (isset($_POST['submit'])) {
  include 'koneksi.php';
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM tb_pengguna WHERE username ='$username' AND password='$password'";
  $data = mysqli_query($koneksi, $query);
  $cek = mysqli_num_rows($data);
  $_SESSION['username']; // Add a semicolon here

  if ($cek > 0) {
    $_SESSION['login'] = true;
    header('location: index.php');
    exit(); // Add exit() after header to stop further script execution
  } else {
    echo "<div class='alert alert-danger'>USERNAME ATAU PASSWORD TIDAK SESUAI</div>"; // Removed extra semicolons
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="login/fonts/icomoon/style.css">

  <link rel="stylesheet" href="login/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="login/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="login/css/style.css">

  <title>Login</title>
</head>

<body>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="login/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3>Sign In</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" id="username">
                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
                </div>
                <input type="submit" name="submit" value="Log In" class="btn btn-block btn-primary">
                <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>
                <div class="social-login">
                  <a href="https://www.facebook.com/profile.php?id=100068424076223" class="facebook">
                    <span class="icon-facebook mr-3"></span>
                  </a>
                  <a href="https://www.instagram.com/unika.santothomas/?hl=id" class="twitter">
                    <span class="icon-instagram mr-3"></span>
                  </a>
                  <a href="https://www.ust.ac.id/" class="google">
                    <span class="icon-google mr-3"></span>
                  </a>
                </div>
              </form>