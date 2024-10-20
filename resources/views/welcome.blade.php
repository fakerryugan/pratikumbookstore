<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-light">
    <main class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <form action="" method="get">
                <div class="mb-3 row">
                    <label for="judul" class="col-sm-2 col-form-label">Cari Judul Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="search" id="search" placeholder="Masukkan judul buku">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-primary">CARI</button></div>
                </div>
            </form>
        </div>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($data) > 0) {
                        $no = 1;
                        foreach ($data as $book) {
                            echo "<tr>
                                    <td>{$no}</td>
                                    <td>{$book['judul']}</td>
                                    <td>{$book['penulis']}</td>
                                    <td>{$book['harga']}</td>
                                    <td>{$book['stok']}</td>
                                    <td>{$book['kategori']['nama_kategori']}</td>
                                  </tr>";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-center'>Data tidak ditemukan</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
