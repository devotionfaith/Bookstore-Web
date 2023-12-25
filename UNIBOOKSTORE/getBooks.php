<?php
include "Connector.php";

$query = mysqli_query($conn, "SELECT * FROM buku");
$books = [];

while ($buku = mysqli_fetch_assoc($query)) {
    $books[] = $buku;
}

header('Content-Type: application/json');
echo json_encode($books);
