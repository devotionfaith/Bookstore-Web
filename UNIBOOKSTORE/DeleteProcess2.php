<?php
include 'Connector.php';
$id_penerbit = $_GET['id'];
$sql = "DELETE FROM penerbit WHERE id_penerbit = '$id_penerbit'";
$query = mysqli_query($conn, $sql);
if ($query) {
    header("location: Admin.php?page=penerbit");
}
