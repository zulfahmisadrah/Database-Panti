<?php
  include("koneksi.php");
  $id = $_GET['id'];
  $query = "DELETE FROM anak_panti WHERE id_anak='$id'";
  mysqli_query($link, $query);
  header("Location:data-anak.php");
?>
