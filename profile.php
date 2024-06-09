<?php
session_start(); // Mulai sesi

// Periksa apakah pengguna telah login
if (!isset($_SESSION['username'])) {
    // Jika belum, arahkan ke halaman login
    header("Location: formsignin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Profile - Atlantic Fishing</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-food.css">
  <style>
    .w3-sidebar a { font-family: "Roboto", sans-serif }
    body,h1,h2,h3,h4,h5,h6,.w3-wide { font-family: "Open Sans", sans-serif; }
    .profile-card {
      background-color: #f2f2f2;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
      margin: 0 auto;
      text-align: center;
    }
    .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin: 0 auto 20px;
    }
    .profile-info {
      line-height: 1.8;
    }
    .profile-info span {
      font-weight: bold;
    }
  </style>
</head>
<body class="w3-content" style="max-width:1800px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-food-egg w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <a href="home2.html"><img src="gambar/logo.web.png" alt="Logo" style="width: 200px; height: auto;"></a>  
  </div>
  <div class="w3-padding-16 w3-large w3-text-grey" style="font-weight:bold;">
    <a href="reel2.html" class="w3-bar-item w3-button">Reel</a>
    <a href="rod2.html" class="w3-bar-item w3-button">Rod</a>
    <a href="bait2.html" class="w3-bar-item w3-button">Bait</a>
    <a href="float2.html" class="w3-bar-item w3-button">Float</a>
    <a href="hook2.html" class="w3-bar-item w3-button">Hook</a>
    <a href="line2.html" class="w3-bar-item w3-button">Line</a>
  </div>
  <hr>
  <div class="w3-padding-16 w3-large w3-text-grey" style="font-weight:bold;">
    <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
    <a href="address.html" class="w3-bar-item w3-button">Address</a>
    <a href="aboutus.html" class="w3-bar-item w3-button">About Us</a>
  </div>
</nav>

<!-- Top header -->
<header class="w3-container w3-xlarge">
  <p class="w3-left" style="margin-left: 800px;">USER PROFILE</p>
    <p class="w3-right">
      <a href="logout.php" class="w3-margin-right">
        <i class='fas fa-sign-out-alt'></i>
      </a>
    </p>
  </header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">
  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

  <!-- Profile Content -->
  <div class="w3-container w3-padding-32" >
    <div class="profile-card">
      <img src="gambar/profile.icon.png" alt="Profile icon" class="profile-image">
      <div class="profile-info">
        <p><strong>User ID:</strong> <?php echo $_SESSION['userid']; ?></p>
        <p><strong>Username:</strong> <?php echo $_SESSION['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
        <p><strong>Gender:</strong> <?php echo $_SESSION['gender']; ?></p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-padding-32 w3-light-grey w3-small w3-center" id="footer" style="font-size: 14px;">
    <!-- Footer content -->
  </footer>  
  <div class="w3-black w3-center w3-padding-16" style="font-size: 12px;">© 2024 by Atlantic Fishing</div>
  <!-- End page content -->
</div>

</body>
</html>
