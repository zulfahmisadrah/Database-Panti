<?php
  if (isset($_POST['submit'])) {
    include("koneksi.php");
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM akun_admin";
    $hasil = mysqli_query($link, $query);

    $email_db = [];
    $username_db = [];
    $pass_db = [];
    $i = 1;
    $benar = false;
    while ($data = mysqli_fetch_assoc($hasil)) {
      $email_db[$i] = $data['email'];
      $username_db[$i] = $data['username'];
      $pass_db[$i] = $data['password'];

      if (($email == $email_db[$i]) && ($pass == $pass_db[$i])) {
        $benar = true;
        $username = $username_db[$i];
        break;
      }
      $i++;
    }

    if ($benar) {
      session_start();
      $_SESSION['email'] = $email;
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $pass;
      header("Location:index.php");
    } else {
      echo "<script>alert('email atau password anda salah!');</script>";
      echo "<script>location='login-admin.php';</script>";
    }
  }
?>
