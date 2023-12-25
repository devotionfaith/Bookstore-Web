<?php
include 'Connector.php';

$id = $_POST['id_penerbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$tahun = $_POST['tahun'];

$sql = "INSERT INTO penerbit VALUES('$id', '$nama', '$alamat', '$kota', '$telepon', '$email', '$tahun')";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($query) {
    header("location: Admin.php?page=penerbit");
}