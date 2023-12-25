<?php
include 'Connector.php';
$id_buku = $_GET['id'];
$sql = "DELETE FROM buku WHERE id_buku = '$id_buku'";
$query = mysqli_query($conn, $sql);
if ($query) {
    header("location: Admin.php");
} else {
    header("location: Admin.php?");
}
