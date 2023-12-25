<?php
include 'Connector.php';

$id = $_POST['id_penerbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$tahun = $_POST['tahun'];

$sql = "UPDATE penerbit SET nama='$nama',alamat='$alamat', kota='$kota', telepon='$telepon', email = '$email', tahun = '$tahun' WHERE id_penerbit='$id' ";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($query) {
    header("location: Admin.php?page=penerbit&edited=$id");
}