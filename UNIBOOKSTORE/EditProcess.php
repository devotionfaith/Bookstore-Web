<?php
include 'Connector.php';

$id = $_POST['id_buku'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];

$sql = "UPDATE buku SET nama_buku='$nama', harga='$harga', stok='$stok', penerbit='$penerbit', penerbit='$penerbit' WHERE id_buku='$id' ";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($query) {
    header("location: Admin.php");
}
