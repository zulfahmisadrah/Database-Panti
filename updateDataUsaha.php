<?php
    if(isset($_POST['submit'])){
        include("koneksi.php");
        $id = $_GET['id'];

        $nama_usaha = $_POST['nama_usaha'];
        $jenis_usaha = $_POST['jenis_usaha'];
        $pj = $_POST['pj'];
        $pendapatan = $_POST['pendapatan'];

        $uang = number_format($pendapatan,2,",",".");
        
        $query = "UPDATE usaha_panti SET nama_usaha='$nama_usaha', jenis_usaha='$jenis_usaha', pj='$pj', pendapatan='$uang' WHERE id_usaha='$id'";

        if (mysqli_query($link, $query)) {
            echo "<script>alert('Data berhasil disunting');</script>";
            echo "<script>location='data-usaha.php';</script>";
        } else {
            echo "<script>alert('Data gagal disunting');</script>";
            echo "<script>location='data-usaha.php';</script>";
        }
    }
?>
