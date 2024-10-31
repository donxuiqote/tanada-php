<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php"); 
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_image'])) {
    $target_dir = "ppdb/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $stmt = $pdo->prepare("UPDATE ppdb_info SET image_path = ?");
            $stmt->execute([$target_file]);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_dates'])) {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $stmt = $pdo->prepare("UPDATE ppdb_info SET registration_start = ?, registration_end = ? WHERE id = 1");
    $stmt->execute([$start_date, $end_date]);
}

$stmt = $pdo->query("SELECT * FROM ppdb_info WHERE id = 1");
$ppdb_info = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_requirements'])) {
    $requirement = $_POST['requirement'];
    $stmt = $pdo->prepare("INSERT INTO ppdb_requirements (requirement) VALUES (?)");
    $stmt->execute([$requirement]);
}

$requirements = $pdo->query("SELECT * FROM ppdb_requirements")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_registration'])) {
    $registration_info = $_POST['registration_info'];
    $stmt = $pdo->prepare("INSERT INTO ppdb_registration (info) VALUES (?)");
    $stmt->execute([$registration_info]);
}

$registrations = $pdo->query("SELECT * FROM ppdb_registration")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_contact'])) {
    $contact_name = $_POST['contact_name'];
    $contact_number = $_POST['contact_number'];
    $stmt = $pdo->prepare("INSERT INTO ppdb_contacts (name, number) VALUES (?, ?)");
    $stmt->execute([$contact_name, $contact_number]);
}

$contacts = $pdo->query("SELECT * FROM ppdb_contacts")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PPDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
    <h2 class="text-center pb-4">Informasi PPDB</h2>

<div class="p-4 border">
<h4 class="mt-4 text-center ">Foto Poster</h4>
    <form method="post" enctype="multipart/form-data" class="mb-4">
        <div class="mb-3 text-center">
            <img src="<?php echo htmlspecialchars($ppdb_info['image_path']); ?>" alt="PPDB Image" class="img-fluid mb-2">
            <input type="file" name="image" accept="image/*" class="form-control" required>
        </div>
        <button type="submit" name="update_image" class="btn btn-primary">Perbarui Poster</button>
    </form>
</div>

<div class="container border my-5">

<h4 class="mt-4">Tanggal Pendaftaran</h4>
    <form method="post" class="mb-4">
        <div class="mb-3">
            <label class="form-label">Pendaftaran Dibuka</label>
            <input type="date" name="start_date" value="<?php echo htmlspecialchars($ppdb_info['registration_start']); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Pendaftaran Ditutup</label>
            <input type="date" name="end_date" value="<?php echo htmlspecialchars($ppdb_info['registration_end']); ?>" class="form-control" required>
        </div>
        <button type="submit" name="update_dates" class="btn btn-primary">Perbarui</button>
    </form>
</div>

<div class="container border my-5">
<h4 class="mt-4">Syarat Pendaftaran</h4>
    <form method="post" class="mb-4">
        <div class="mb-3">
            <label class="form-label">Tambahkan</label>
            <input type="text" name="requirement" class="form-control" required>
        </div>
        <button type="submit" name="update_requirements" class="btn btn-primary">Tambahkan</button>
    </form>
    <ul class="list-group mb-4">
        <?php foreach ($requirements as $req): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo htmlspecialchars($req['requirement']); ?>
                <form method="post" class="d-inline">
                    <input type="hidden" name="req_id" value="<?php echo $req['id']; ?>">
                    <button type="submit" name="delete_requirement" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="container border my-5">
<h4 class="mt-4">Informasi Pendaftaran</h4>
    <form method="post" class="mb-4">
        <div class="mb-3">
            <label class="form-label">Tambah mengenai informasi pendaftaran</label>
            <input type="text" name="registration_info" class="form-control" required>
        </div>
        <button type="submit" name="update_registration" class="btn btn-primary">Tambahkan</button>
    </form>
    <ul class="list-group mb-4">
        <?php foreach ($registrations as $reg): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo htmlspecialchars($reg['info']); ?>
                <form method="post" class="d-inline">
                    <input type="hidden" name="reg_id" value="<?php echo $reg['id']; ?>">
                    <button type="submit" name="delete_registration" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<div class="container border my-5">
<h4 class="mt-4">Narahubung</h4>
    <form method="post" class="mb-4">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="contact_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Whatsapp cth. = (6281234567890)</label>
            <input type="text" name="contact_number" class="form-control" required>
        </div>
        <button type="submit" name="update_contact" class="btn btn-primary">Tambahkan</button>
    </form>
    <ul class="list-group mb-4">
        <?php foreach ($contacts as $contact): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo htmlspecialchars($contact['name']) . ': ' . htmlspecialchars($contact['number']); ?>
                <form method="post" class="d-inline">
                    <input type="hidden" name="contact_id" value="<?php echo $contact['id']; ?>">
                    <button type="submit" name="delete_contact" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
