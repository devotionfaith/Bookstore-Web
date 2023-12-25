<?php
include "Connector.php";

$sql = "SELECT * FROM buku where stok = (SELECT min(stok) from buku)";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$book = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Book Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Pengadaan.php">Pengadaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container pb-5">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h1 class="text-header pt-5">
                        Selamat Datang Admin!
                    </h1>
                    <p class="text-desc pt-3">
                        Halaman Ini Digunakan Untuk Mengelola Data Buku.
                    </p>
                </div>
                <div class="image-header d-none d-md-block">
                    <img src="images/book-header.png" alt="Book Header" />
                </div>
            </div>
        </div>
    </header>


    <section class="intro">

        <section class="intro">
            <div class="bg-image h-100" style="background-color: #f5f7fa;">
                <div class="mask d-flex align-items-center h-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <h4>Laporan Buku Yang Harus Segera Dibeli</h1>
                                            <h5> Buku : <?= $book['nama_buku']  ?></h5>
                                            <h5> Penerbit : <?= $book['penerbit']  ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>