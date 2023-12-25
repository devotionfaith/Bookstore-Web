<?php
include 'Connector.php';

$id = $_POST['id_buku'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];

$sql = "INSERT INTO buku VALUES('$id', '$kategori', '$nama', '$harga', '$stok', '$penerbit')";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($query) {
    header("location: Admin.php?message=Success");
}
