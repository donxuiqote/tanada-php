<?php
session_start(); // Memulai sesi
include 'db.php'; // Menghubungkan ke database

// Cek jika pengguna sudah login, arahkan ke halaman edit
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
    header("Location: halaman-edit.php");
    exit;
}

$error = ""; // Inisialisasi variabel error

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['username']; // Menggunakan 'username' sebagai input
    $password = $_POST['password'];

    // Mengambil hash password dari database
    $stmt = $pdo->prepare("SELECT password FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Login berhasil
        $_SESSION['user_logged_in'] = true; // Set sesi login
        header("Location: halaman-edit.php"); // Arahkan ke halaman admin
        exit;
    } else {
        // Login gagal
        $error = "Email atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Login Admin</h2>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="post" class="mt-4">
            <div class="mb-3">
                <label for="username" class="form-label">Email</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
