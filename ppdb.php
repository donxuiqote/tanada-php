<?php
include 'db.php';

// Fetch PPDB Info
$stmt = $pdo->query("SELECT * FROM ppdb_info WHERE id = 1");
$ppdb_info = $stmt->fetch(PDO::FETCH_ASSOC);

// Fetch Requirements
$requirements = $pdo->query("SELECT * FROM ppdb_requirements")->fetchAll(PDO::FETCH_ASSOC);

// Fetch Registration Information
$registrations = $pdo->query("SELECT * FROM ppdb_registration")->fetchAll(PDO::FETCH_ASSOC);

// Fetch Contacts
$contacts = $pdo->query("SELECT * FROM ppdb_contacts")->fetchAll(PDO::FETCH_ASSOC);

$images = [
  "galeri/galeri4.jpg",
  "galeri/galeri1.jpg",
  "informasi/informasi1.jpg",
  "informasi/informasi2.jpg",
];

// Shuffle images
shuffle($images);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>PPDB</title>
<link rel="preconnect" href="https://fonts.bunny.net" />
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
<link rel="icon" href="icons/tanada.png" type="image/png">
<link rel="stylesheet" href="app.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php include 'navbar.php'; ?>
<?php include 'carousel.php'; ?>
<section>
    <div class="container">
        <h2>Informasi PPDB</h2>
        <div class="text-center mb-4">
            <img src="<?php echo htmlspecialchars($ppdb_info['image_path']); ?>" alt="News Image" class="img-fluid mb-4">
            <h4>Tanggal Pendaftaran: <?php echo htmlspecialchars($ppdb_info['registration_start']); ?> - <?php echo htmlspecialchars($ppdb_info['registration_end']); ?></h4>
        </div>
    </div>
</section>

<section class="bgm">
    <div class="container">
        <h2>PPDB Tahun Ajaran 2023/2024</h2>
        <div class="container">
            <h4>Kompetensi Keahlian</h4>
            <ul class="list-group">
                <li class="list-group-item">DKV (Desain Komunikasi Visual)</li>
                <li class="list-group-item">ULW (Usaha Layanan Wisata)</li>
            </ul>
        </div>
        <div class="my-5">
            <h4>Syarat-syarat Pendaftaran</h4>
            <ul class="list-group">
                <?php foreach ($requirements as $requirement): ?>
                    <li class="list-group-item"><?php echo htmlspecialchars($requirement['requirement']); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="table-responsive my-5">
            <h2>Informasi Pendaftaran</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Gelombang</th>
                        <th>Waktu Pendaftaran</th>
                        <th>Cashback</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($registrations as $reg): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($reg['gelombang']); ?></td>
                            <td><?php echo htmlspecialchars($reg['time']); ?></td>
                            <td><?php echo htmlspecialchars($reg['cashback']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3" class="text-center">Setiap Siswa yang Mendaftarkan Mendapatkan 1 Voucher Undian Hadiah</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">Syarat dan Ketentuan Berlaku</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container">
            <div class="pendaftaran mb-4">
                <div class="container">
                    <h2>Contact Person Pendaftaran</h2>
                    <ul>
                        <?php foreach ($contacts as $contact): ?>
                            <li><span><?php echo htmlspecialchars($contact['name']); ?> : </span> <a href="https://wa.me/<?php echo htmlspecialchars($contact['number']); ?>"><?php echo htmlspecialchars($contact['number']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
