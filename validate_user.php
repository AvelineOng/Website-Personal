<?php
session_start(); // Mulai sesi

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Escape user input untuk mencegah SQL Injection
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

// Siapkan query SQL untuk mencari pengguna dengan kredensial yang dimasukkan
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $user = mysqli_fetch_assoc($result);
  // Simpan informasi pengguna dalam variabel sesi
  $_SESSION['userid'] = $user['userid'];
  $_SESSION['username'] = $user['username'];
  $_SESSION['email'] = $user['email'];
  $_SESSION['gender'] = $user['gender'];
  // Pengguna ditemukan, tangani login berhasil
  header("Location: profile.php");  // Arahkan ke halaman profil
  exit();
} else {
  // Pengguna tidak ditemukan, tampilkan pesan error
  echo "<script>alert('Invalid username or password!'); window.location.href = 'formsignin.php';</script>";
}

mysqli_close($conn);
?>
