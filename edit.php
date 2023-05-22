<?php 
include 'koneksi.php';

$id = $_GET["id"];

$result = mysqli_query($conn,"SELECT * FROM siswa WHERE id = $id");

$row = mysqli_fetch_assoc($result);

if(isset($_POST["save"])){

    $nama = $_POST['nama'];
    $jurusan = $_POST["jurusan"];
    $nis = $_POST["nis"];
    $email = $_POST["email"];
    
    mysqli_query($conn,"UPDATE siswa SET 
                id = '$id',
                nama = '$nama',
                jurusan = '$jurusan',
                nis = '$nis',
                email = '$email' WHERE id = $id
    ");

    if(mysqli_affected_rows($conn) > 0){
        echo "<script>
        alert('Pengubahan Data Berhasil');
        document.location.href = 'index.php'
        </script>";
    }else{
        echo "<script>
        alert('Pengubahan Data Gagal');
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
                <label for="email" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="email" aria-describedby="emailHelp" value="<?= $row["nama"] ?>">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input name="jurusan" type="text" class="form-control" id="jurusan" value="<?= $row["jurusan"] ?>">
            </div>
            <div class="mb-3">
                <label for="nis" class="form-label">Nis</label>
                <input name="nis" type="number" class="form-control" id="nis" value="<?= $row["nis"] ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" id="email" value="<?= $row["email"] ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="save"><i class="bi bi-save2"></i></button>
            <a href="index.php" class="btn btn-danger">Cancle</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>