<?php
include 'koneksi.php';

if (isset($_POST["submit"])) {

    $nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
    $nik = htmlspecialchars($_POST["nik"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
    $agama = htmlspecialchars($_POST["agama"]);
    $pendidikan = htmlspecialchars($_POST["pendidikan"]);
    $jenis_pekerjaan = htmlspecialchars($_POST["jenis_pekerjaan"]);
    $golongan_darah = htmlspecialchars($_POST["golongan_darah"]);

    mysqli_query($conn, "INSERT INTO kartukeluarga VALUES ('','$nama_lengkap','$nik','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$agama','$pendidikan','$jenis_pekerjaan','$golongan_darah')");

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
        alert('Penambahan Data Berhasil');
        document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
        alert('Penambahan Data Gagal');
        document.location.href = 'index.php'
        </script>";
    }
}


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
            <a class="navbar-brand fw-bold" href="#">Admin</a>
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
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i>Admin</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End-->
    <div class="container mt-4" style="width:50%">
        <h1 class="text-center">Tambah Data Siswa</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Nama Lengkap</label>
                <input name="nama_lengkap" type="text" class="form-control" id="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">NIK</label>
                <input name="nik" type="number" class="form-control" id="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" aria-label="Default select example">
                    <option value="Laki - Laki">laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat lahir</label>
                <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
                <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" required>
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <select name="agama" id="agama" class="form-select" aria-label="Default select example">
                    <option value="islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Kristen">Budhha</option>
                    <option value="Kristen">Hindu</option>
                    <option value="Kristen">Konghucu</option>
                    <option value="Kristen">katolik</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pendidikan" class="form-label">Pendidikan</label>
                <input name="pendidikan" type="text" class="form-control" id="pendidikan" required>
            </div>
            <div class="mb-3">
                <label for="jenis_pekerjaan" class="form-label">Jenis Pekerjaan</label>
                <input name="jenis_pekerjaan" type="text" class="form-control" id="jenis_pekerjaan" required>
            </div>
            <div class="mb-3">
                <label for="golongan_darah" class="form-label">Golongan darah</label>
                <input name="golongan_darah" type="text" class="form-control" id="golongan_darah" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <a href="index.php" class="btn btn-danger">Cancle</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>