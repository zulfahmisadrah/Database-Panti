<?php
  include("koneksi.php");
  $id = $_GET['id'];
  $query = "DELETE FROM pengurus_panti WHERE id_pengurus='$id'";
  mysqli_query($link, $query);
  header("Location:data-pengurus.php");
?>
