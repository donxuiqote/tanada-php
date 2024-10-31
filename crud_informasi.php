<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];
        $target_dir = "informasi/";
        $target_file = $target_dir . basename($image["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (file_exists($target_file)) {
            echo "Maaf, file sudah ada.";
            $uploadOk = 0;
        }
        if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
            $uploadOk = 0;
        }
        if ($uploadOk == 1) {
            if (move_uploaded_file($image["tmp_name"], $target_file)) {
                $stmt = $pdo->prepare("INSERT INTO informasi (title, content, image_path, date) VALUES (?, ?, ?, ?)");
                $stmt->execute([$title, $content, $target_file, date('Y-m-d H:i:s')]);
            } else {
                echo "Maaf, terjadi kesalahan saat mengupload file.";
            }
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image_path = $_POST['image_path'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image'];
        $target_dir = "informasi/";
        $target_file = $target_dir . basename($image["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($image["tmp_name"], $target_file)) {
                $image_path = $target_file; 
            }
        }
    }

    $stmt = $pdo->prepare("UPDATE informasi SET title=?, content=?, image_path=? WHERE id=?");
    $stmt->execute([$title, $content, $image_path, $id]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $id = $_POST['id'];
    $stmt = $pdo->prepare("DELETE FROM informasi WHERE id=?");
    $stmt->execute([$id]);
}

$stmt = $pdo->query("SELECT * FROM informasi");
$informasi = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="app.css"> 
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
<div class="text-center">
<h2 class="mb-4">Tambahkan Berita</h2>
    
</div>    
    <form method="post" enctype="multipart/form-data" class="mb-4">
        <input type="hidden" name="id" value="">
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Konten</label>
            <textarea class="form-control" name="content" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Unggah Gambar</label>
            <input type="file" class="form-control" name="image" accept="image/*" required>
        </div>
        <button type="submit" name="create" class="btn btn-primary">Tambah</button>
    </form>

    <h5>Daftar Berita</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($informasi as $item): ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo htmlspecialchars($item['title']); ?></td>
                <td><?php echo htmlspecialchars($item['content']); ?></td>
                <td><img src="<?php echo htmlspecialchars($item['image_path']); ?>" alt="Gambar" width="100" class="img-thumbnail"></td>
                <td>
                    <form method="post" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                        <button type="submit" name="delete" class="btn btn-danger">Hapus</button>
                    </form>
                    <button class="btn btn-secondary" onclick="editInformasi(<?php echo $item['id']; ?>, '<?php echo htmlspecialchars($item['title']); ?>', '<?php echo htmlspecialchars($item['content']); ?>', '<?php echo htmlspecialchars($item['image_path']); ?>')">Edit</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Informasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" id="editForm">
                        <input type="hidden" name="id" value="">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Konten</label>
                            <textarea class="form-control" name="content" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar Saat Ini</label>
                            <img id="currentImage" src="" alt="Gambar" width="100" class="img-thumbnail mb-2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Unggah Gambar (opsional)</label>
                            <input type="file" class="form-control" name="image" accept="image/*">
                            <input type="hidden" name="image_path" value="">
                        </div>
                        <button type="submit" name="update" class="btn btn-warning">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function editInformasi(id, title, content, imagePath) {
        document.querySelector('#editForm input[name="id"]').value = id;
        document.querySelector('#editForm input[name="title"]').value = title;
        document.querySelector('#editForm textarea[name="content"]').value = content;
        document.querySelector('#currentImage').src = imagePath; 
        document.querySelector('#editForm input[name="image_path"]').value = imagePath; 
        var myModal = new bootstrap.Modal(document.getElementById('editModal'));
        myModal.show();
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
