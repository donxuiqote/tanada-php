<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php"); 
    exit;
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
    $image = $_FILES['image'];
    $alt_text = $_POST['alt_text'];
    $target_dir = "galeri/";
    $target_file = $target_dir . basename($image["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        $message = "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $message = "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            $stmt = $pdo->prepare("INSERT INTO galeri (image_path, alt_text) VALUES (?, ?)");
            $stmt->execute([$target_file, $alt_text]);
        } else {
            $message = "Maaf, terjadi kesalahan saat mengupload file.";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $id = $_POST['id'];
    $stmt = $pdo->prepare("SELECT image_path FROM galeri WHERE id = ?");
    $stmt->execute([$id]);
    $image = $stmt->fetchColumn();

    if ($image && file_exists($image)) {
        unlink($image);
    }

    $stmt = $pdo->prepare("DELETE FROM galeri WHERE id=?");
    $stmt->execute([$id]);
}

$stmt = $pdo->query("SELECT * FROM galeri");
$galeri = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Galeri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        <?php if ($message): ?>
            alert("<?php echo addslashes($message); ?>");
        <?php endif; ?>
    </script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        h2, h5 {
            color: #343a40;
        }
        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .table img {
            border-radius: 0.5rem;
        }
    </style>
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
        <div class="card p-4 mb-4">
            <h2 class="text-center">CRUD Galeri</h2>
            <form method="post" enctype="multipart/form-data">
                <h5>Tambah Gambar</h5>
                <div class="mb-3">
                    <label class="form-label">Unggah Gambar</label>
                    <input type="file" class="form-control" name="image" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alt Text</label>
                    <input type="text" class="form-control" name="alt_text" required>
                </div>
                <button type="submit" name="create" class="btn btn-primary">Tambah</button>
            </form>
        </div>

        <h5>Daftar Gambar</h5>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gambar</th>
                    <th>Alt Text</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($galeri as $item): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><img src="<?php echo htmlspecialchars($item['image_path']); ?>" alt="<?php echo htmlspecialchars($item['alt_text']); ?>" width="100"></td>
                        <td><?php echo htmlspecialchars($item['alt_text']); ?></td>
                        <td>
                            <form method="post" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                <button type="submit" name="delete" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
