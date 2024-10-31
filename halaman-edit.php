<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php"); // Arahkan ke halaman login jika belum login
    exit; // Hentikan eksekusi skrip
}

include 'db.php'; // Menghubungkan ke database

// Menghitung jumlah foto di Galeri
$sql_gallery = "SELECT COUNT(*) FROM galeri";
$stmt_gallery = $pdo->query($sql_gallery);
$gallery_count = $stmt_gallery->fetchColumn();

// Menghitung jumlah berita
$sql_news = "SELECT COUNT(*) FROM informasi";
$stmt_news = $pdo->query($sql_news);
$news_count = $stmt_news->fetchColumn();

// Menghitung jumlah PPDB
$sql_ppdb = "SELECT COUNT(*) FROM ppdb"; // Ganti 'ppdb' dengan nama tabel yang sesuai
$stmt_ppdb = $pdo->query($sql_ppdb);
$ppdb_count = $stmt_ppdb->fetchColumn();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="app.css"> <!-- Jika ada stylesheet tambahan -->
</head>
<body>
<nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand text-success" href="halaman-edit.php">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="halaman-edit.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crud_informasi.php">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crud_galeri.php">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="crud_ppdb.php">PPDB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="text-center">Dashboard Admin</h2>
        <div class="row mt-4">

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Galeri</h5>
                        <p class="card-text">Jumlah Foto: <?php echo $gallery_count; ?></p>
                        <a href="crud_galeri.php" class="btn btn-primary">Kelola Galeri</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>
                        <p class="card-text">Jumlah Berita: <?php echo $news_count; ?></p>
                        <a href="crud_informasi.php" class="btn btn-primary">Kelola Berita</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">PPDB</h5>
                        <p class="card-text">Jumlah PPDB: <?php echo $ppdb_count; ?></p>
                        <a href="crud_ppdb.php" class="btn btn-warning">Edit PPDB</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
