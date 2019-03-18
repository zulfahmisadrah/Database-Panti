<?php
    if (isset($_POST['submit'])) {
        include("koneksi.php");
        $query = "SELECT * FROM anak_panti";
        $hasil = mysqli_query($link, $query);

        $nama = $_POST['nama'];
        $nama_ayah = $_POST['nama_ayah'];
        $nama_ibu = $_POST['nama_ibu'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pendidikan = $_POST['pendidikan'];
        $hobi = $_POST['hobi'];

        $birthdate = new DateTime($tanggal_lahir);
        $today   = new DateTime('today');
        $usia = $birthdate->diff($today)->y;

        $query = "INSERT INTO anak_panti (nama, nama_ayah, nama_ibu, jenis_kelamin, tanggal_lahir, usia, pendidikan, hobi)
        VALUES ('$nama', '$nama_ayah', '$nama_ibu', '$jenis_kelamin' , '$tanggal_lahir', '$usia', '$pendidikan', '$hobi')";

        if (mysqli_query($link, $query)){
            echo "<script>alert('Data berhasil ditambahkan');</script>";
            echo "<script>location='data-anak.php';</script>";
        } else {
            echo "<script>alert('Data gagal ditambahkan');</script>";
            echo "<script>location='data-anak.php';</script>";
        }
        
    }
?>
