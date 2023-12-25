<?php
include "Connector.php";
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
                        Halaman Tambah Penerbit
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
        <div class="bg-image h-100" style="background-color: #f5f7fa;">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 600px">
                                        <form action="AddProcess2.php" method="POST" enctype="multipart/form-data">
                                            <div class="">
                                                <div class="">
                                                    <div class="mt-3 mx-3">
                                                        <label for="id_penerbit" class="form-label">Id Penerbit</label>
                                                        <input type="text" name="id_penerbit" class="form-control">
                                                    </div>
                                                    <div class=" mt-3 mx-3">
                                                        <label for="nama" class="form-label">Nama Penerbit</label>
                                                        <input type="text" name="nama" class="form-control">
                                                    </div>
                                                    <div class="mt-3 mx-3">
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <input type="text" name="alamat" class="form-control">
                                                    </div>
                                                    <div class="mt-3 mx-3">
                                                        <label for="kota" class="form-label">Kota</label>
                                                        <input type="text" name="kota" class="form-control">
                                                    </div>
                                                    <div class="mt-3 mx-3">
                                                        <label for="telepon" class="form-label">Telepon</label>
                                                        <input type="text" name="telepon" id="telepon" class="form-control">
                                                    </div>
                                                    <div class="mt-3 mx-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="text" name="email" id="telepon" class="form-control">
                                                    </div>
                                                    <div class="mt-3 mx-3">
                                                        <label for="tahun" class="form-label">Tahun</label>
                                                        <input type="text" name="tahun" id="telepon" class="form-control">
                                                    </div>
                                                </div>
                                                <div class=" mt-4 mx-3">
                                                    <input type="submit" class="btn btn-warning" value="Add">
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>