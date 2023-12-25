<?php
include "Connector.php";
$sql = "SELECT * FROM buku";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                        Buku Impian yang Selalu <br />Menemanimu
                    </h1>
                    <p class="text-desc pt-3">
                        Aku adalah buku yang akan selalu menemanimu dimanapun dan dalam
                        keadaan <br />
                        apapun dirimu.
                    </p>
                    <div class="btn btn-warning text-light mt-3">Beli Buku</div>
                </div>
                <div class="image-header d-none d-md-block">
                    <img src="images/book-header.png" alt="Book Header" />
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <h3>Daftar Katalog Buku</h3>

            <div class="d-flex justify-content-between">
                <div class="dropdown">

                </div>
                <div class="d-flex">
                    <input id="searchInput" placeholder="Search" aria-label="Search" />
                    <button onclick="searchBooks()" class="btn btn-outline-success">Search</button>
                </div>
            </div>

            <div class="book-list mt-5 pb-5">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <?php
                        $count = 0;
                        $active = true;

                        while ($buku = mysqli_fetch_array($query)) {
                            if ($count % 3 == 0) {
                                echo '<div class="carousel-item ' . ($active ? 'active' : '') . '">';
                                echo '<div class="d-flex justify-content-between">';
                                $active = false;
                            }
                        ?>
                        <div class="book-item d-flex">
                            <img src="images/book-1.png" style="height: 230px; width: auto;" alt="..." />

                            <div class="mt-auto mb-auto ps-5">
                                <h5 class="book-title">
                                    <?php echo $buku['nama_buku']; ?>
                                </h5>
                                <p class="book-desc">
                                    Kategori: <?php echo $buku['kategori']; ?> <br>
                                    Penerbit : <?php echo $buku['penerbit']; ?> <br>
                                    Harga : <?php echo $buku['harga']; ?> <br>
                                    Stok : <?php echo $buku['stok']; ?> <br>
                                </p>

                                <a href="#" class="btn btn-warning text-light">Beli Buku</a>
                            </div>
                        </div>
                        <?php
                            $count++;

                            if ($count % 3 == 0) {
                                echo '</div>';
                                echo '</div>';
                            }
                        }

                        if ($count % 3 != 0) {
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev shadow-lg" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next shadow-lg" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    var booksData;

    $(document).ready(function() {
        $.ajax({
            url: 'getBooks.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                booksData = data;
            },
            error: function() {
                console.error('Error fetching book data.');
            }
        });
    });

    function searchBooks() {
        var searchInput = document.getElementById('searchInput').value.toLowerCase();
        var bookListContainer = document.querySelector('.book-list');
        bookListContainer.innerHTML = '';

        var count = 0;

        for (var i = 0; i < booksData.length; i++) {
            var book = booksData[i];

            if (book.nama_buku.toLowerCase().includes(searchInput)) {
                var bookItem = document.createElement('div');
                bookItem.className = 'book-item d-flex';
                bookItem.style.marginBottom = '15px';

                var bookImage = document.createElement('img');
                bookImage.src = 'images/book-1.png';
                bookImage.style.height = '230px';
                bookImage.style.width = 'auto';
                bookImage.alt = '...';

                var bookDetails = document.createElement('div');
                bookDetails.className = 'mt-auto mb-auto ps-5';

                var bookTitle = document.createElement('h5');
                bookTitle.className = 'book-title';
                bookTitle.textContent = book.nama_buku;

                var bookDesc = document.createElement('p');
                bookDesc.className = 'book-desc';
                bookDesc.innerHTML = 'Kategori: ' + book.kategori + '<br>' +
                    'Penerbit: ' + book.penerbit + '<br>' +
                    'Harga: ' + book.harga + '<br>' +
                    'Stok: ' + book.stok + '<br>';

                var buyButton = document.createElement('a');
                buyButton.href = '#';
                buyButton.className = 'btn btn-warning text-light';
                buyButton.textContent = 'Beli Buku';
                bookDetails.appendChild(bookTitle);
                bookDetails.appendChild(bookDesc);
                bookDetails.appendChild(buyButton);
                bookItem.appendChild(bookImage);
                bookItem.appendChild(bookDetails);

                bookListContainer.appendChild(bookItem);

                count++;
            }
        }

        if (count === 0) {
            var noResultMessage = document.createElement('p');
            noResultMessage.innerHTML = 'No matching books found.';
            bookListContainer.appendChild(noResultMessage);
        }
    }
    </script>


</body>

</html>