<?php

include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM kartukeluarga");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container-lg">
            <a class="navbar-brand fw-bold " href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Acount
                        </a>
                        <ul class="dropdown-menu mt-2">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Admin</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left me-2"></i>Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End-->
    <div class="container-fluid mt-4">
        <h1 class="fw-bold mb-4 text-center">Data Siswa</h1>
        <a href="tambah.php" class="mb-5 btn btn-success"><i class="bi bi-plus"></i> Tambah</a>
        <table class="table table-light table-striped mt-2 text-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat lahir</th>
                    <th scope="col">tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">Jenis Pekerjaan</th>
                    <th scope="col">Golongan darah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $row["nama_lengkap"] ?></td>
                        <td><?= $row["nik"] ?></td>
                        <td><?= $row["jenis_kelamin"] ?></td>
                        <td><?= $row["tempat_lahir"] ?></td>
                        <td><?= $row["tanggal_lahir"] ?></td>
                        <td><?= $row["agama"] ?></td>
                        <td><?= $row["pendidikan"] ?></td>
                        <td><?= $row["jenis_pekerjaan"] ?></td>
                        <td><?= $row["golongan_darah"] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row["id"] ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                            <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('Apakah Yakin Akan menghapus data terpilih ?')" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>