<?php
  include("koneksi.php");
  $id = $_GET['id'];
  $query = "DELETE FROM usaha_panti WHERE id_usaha='$id'";
  mysqli_query($link, $query);
  header("Location:data-usaha.php");
?>
