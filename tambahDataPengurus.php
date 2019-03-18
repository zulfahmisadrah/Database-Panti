<?php
  if (isset($_POST['submit'])) {
    include("koneksi.php");
    $query = "SELECT * FROM pengurus_panti";
    $hasil = mysqli_query($link, $query);
    // $baris = mysqli_num_rows($hasil);

    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $telepon = $_POST['telepon'];

    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];
    $format = $_FILES['foto']['type'];
    $size = $_FILES['foto']['size'];
    
    if ($format == 'image/jpeg' || $format == 'image/png'){
      if ($size < 2000000) {
        move_uploaded_file($lokasi_foto, 'image/' . $nama_foto);
        $query = "INSERT INTO pengurus_panti (nama, jenis_kelamin, jabatan, no_telepon, foto)
        VALUES ('$nama', '$jenis_kelamin', '$jabatan', '$telepon' , '$nama_foto')";

        if (mysqli_query($link, $query)){
          echo "<script>alert('Data berhasil ditambahkan');</script>";
          echo "<script>location='data-pengurus.php';</script>";
        } else {
          echo "<script>alert('Data gagal ditambahkan');</script>";
          echo "<script>location='data-pengurus.php';</script>";
        }
      } else {
        echo "<script>alert('ukuran foto melebihi 5 Mb');</script>";
        echo "<script>location='tambah-pengurus.php';</script>";
      }
    } else {
      echo "<script>alert('Anda belum upload foto atau format foto yang anda masukkan salah');</script>";
      echo "<script>location='tambah-pengurus.php';</script>";
    }
  }
?>
