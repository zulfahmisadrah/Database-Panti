<?php
    if(isset($_POST['submit'])){
        include("koneksi.php");
        $id = $_GET['id'];

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
        
        $query = "UPDATE anak_panti SET nama='$nama', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', usia='$usia', pendidikan='$pendidikan', hobi='$hobi' WHERE id_anak='$id'";

        if (mysqli_query($link, $query)) {
            echo "<script>alert('Data berhasil disunting');</script>";
            echo "<script>location='data-anak.php';</script>";
        } else {
            echo "<script>alert('Data gagal disunting');</script>";
            echo "<script>location='data-anak.php';</script>";
        }
    }
?>
