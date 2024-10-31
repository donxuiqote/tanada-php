<?php
include 'db.php'; // Include your database connection file

// Fetch gallery images from the database
$sql = "SELECT image_path, alt_text FROM galeri";
$stmt = $pdo->query($sql);
$galeriImages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Galeri</title>
    <link rel="icon" href="icons/tanada.png" type="image/png">
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <script src="app.js"></script>
    <link rel="stylesheet" href="app.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>


    <section>
        <div class="container">
            <div class="">
                <h2>Galeri Sekolah</h2>
            </div>
            <div class="galeri-grid container">
                <?php foreach ($galeriImages as $image): ?>
                    <div>
                        <img
                            src="<?php echo htmlspecialchars($image['image_path']); ?>"
                            alt="<?php echo htmlspecialchars($image['alt_text']); ?>"
                            class="img-fluid rounded mb-3" />
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>