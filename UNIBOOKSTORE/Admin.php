<?php
include "Connector.php";
$page = isset($_GET['page']) ? $_GET['page'] : '';
$sql = "SELECT * FROM buku";
$sql2 = "SELECT * FROM penerbit";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Book Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="bg-image h-100" style="background-color: #f5f7fa;">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div>
                                <?php if ($page == "penerbit") { ?>
                                <a href="AddPenerbit.php"><button class="btn btn-success my-2">Tambah</button></a>
                                <a href="Admin.php"><button class="btn btn-warning my-2">Buku</button>
                                    <?php
                                } else {
                                    ?>
                                    <a href="AddBook.php"><button class="btn btn-success my-2">Tambah</button></a>
                                    <a href="Admin.php?page=penerbit"><button
                                            class="btn btn-warning my-2">Penerbit</button>
                                        <?php
                                    }
                                        ?>
                            </div></a>
                            <div class="card mt-2">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                                        style="position: relative;">
                                        <table class="table table-striped mb-0">
                                            <thead style="background-color: #002d72;">
                                                <?php
                                                if ($page == "penerbit") { ?>
                                                <tr>
                                                    <th scope="col">ID Penerbit</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Kota</th>
                                                    <th scope="col">Telepon</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Tahun</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                <?php
                                                } else { ?>
                                                <tr>
                                                    <th scope="col">ID Buku</th>
                                                    <th scope="col">Nama Buku</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Stock</th>
                                                    <th scope="col">Penerbit</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                <?php }
                                                ?>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($page == "penerbit") { ?>
                                                <?php
                                                    while ($penerbit = mysqli_fetch_array($query2)) {
                                                    ?>
                                                <tr>
                                                    <td> <?php echo $penerbit['id_penerbit']; ?></td>
                                                    <td><?php echo $penerbit['nama']; ?></td>
                                                    <td><?php echo $penerbit['alamat']; ?></td>
                                                    <td><?php echo $penerbit['kota']; ?></td>
                                                    <td><?php echo $penerbit['telepon']; ?></td>
                                                    <td><?php echo $penerbit['email']; ?></td>
                                                    <td><?php echo $penerbit['tahun']; ?></td>
                                                    <td> <a href="Edit2.php?id=<?php echo $penerbit['id_penerbit']; ?>">
                                                            <button>Edit</button></a>
                                                        <a
                                                            href="DeleteProcess2.php?id=<?php echo $penerbit['id_penerbit']; ?>"><button>Delete</button></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                    ?>
                                                <?php
                                                } else { ?>
                                                <?php
                                                    while ($buku = mysqli_fetch_array($query)) {
                                                    ?>
                                                <tr>
                                                    <td> <?php echo $buku['id_buku']; ?></td>
                                                    <td><?php echo $buku['nama_buku']; ?></td>
                                                    <td><?php echo $buku['kategori']; ?></td>
                                                    <td><?php echo $buku['harga']; ?></td>
                                                    <td><?php echo $buku['stok']; ?></td>
                                                    <td><?php echo $buku['penerbit']; ?></td>
                                                    <td> <a href="Edit.php?id=<?php echo $buku['id_buku']; ?>">
                                                            <button>Edit</button></a>
                                                        <a
                                                            href="DeleteProcess.php?id=<?php echo $buku['id_buku']; ?>"><button>Delete</button></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                    ?>
                                                <?php }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>