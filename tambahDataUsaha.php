<?php
    if (isset($_POST['submit'])) {
        include("koneksi.php");
        $query = "SELECT * FROM usaha_panti";
        $hasil = mysqli_query($link, $query);

        $nama_usaha = $_POST['nama_usaha'];
        $jenis_usaha = $_POST['jenis_usaha'];
        $pj = $_POST['pj'];
        $pendapatan = $_POST['pendapatan'];

        $uang = number_format($pendapatan,2,",",".");

        $query = "INSERT INTO usaha_panti (nama_usaha, jenis_usaha, pj, pendapatan)
        VALUES ('$nama_usaha', '$jenis_usaha', '$pj', '$uang')";

        if (mysqli_query($link, $query)){
            echo "<script>alert('Data berhasil ditambahkan');</script>";
            echo "<script>location='data-usaha.php';</script>";
        } else {
            echo "<script>alert('Data gagal ditambahkan');</script>";
            echo "<script>location='data-usaha.php';</script>";
        }
        
    }
?>
