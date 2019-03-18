<?php
    if(isset($_POST['submit'])){
        include("koneksi.php");
        $id = $_GET['id'];

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
                $query = "UPDATE pengurus_panti SET foto='$nama_foto' WHERE id_pengurus='$id'";
                if (mysqli_query($link, $query)) {
                    echo "<script>alert('Berhasil ganti gambar!');</script>";
                } else {
                    echo "<script>alert('Gagal ganti gambar!');</script>";
                }
            } else {
                echo "<script>alert('ukuran gambar melebihi 2 MB');</script>";
            }
        } else {
            echo "<script>alert('format yang anda masukkan salah');</script>";
        }

        $query = "UPDATE pengurus_panti SET nama='$nama', jenis_kelamin='$jenis_kelamin', jabatan='$jabatan', no_telepon='$telepon' WHERE id_pengurus='$id'";

        if (mysqli_query($link, $query)) {
            echo "<script>alert('Data pengurus berhasil disunting');</script>";
            echo "<script>location='data-pengurus.php';</script>";
        } else {
            echo "<script>alert('Data pengurus gagal disunting');</script>";
            echo "<script>location='data-pengurus.php';</script>";
        }
    }
?>
