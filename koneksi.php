<?php
$koneksi = new mysqli('localhost', 'root', '', 'yoga') or die(mysqli_error($koneksi));

if(isset($_POST['Simpan'])){
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $penyakit = $_POST['penyakit'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, penyakit, jk, alamat) values ('$idPasien', '$nmPasien', '$penyakit', '$jk', '$alamat')");
    header('location:pasien.php');
}
if(isset($_GET['idPasien'])){
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien WHERE idPasien = '$idPasien'");
    header("location:pasien.php");
}
if(isset($_POST['edit'])){
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $penyakit = $_POST['penyakit'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("UPDATE pasien SET idPasien = '$idPasien', nmPasien = '$nmPasien', penyakit = '$penyakit', jk = '$jk', alamat = '$alamat'");
    header("location:pasien.php");
}
?>