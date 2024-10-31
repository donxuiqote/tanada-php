<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Berita</title>
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

  <br><br><br><br><br><br>
  <section class="">
    <div class="container">
      <?php
      include 'db.php';

      // Get the article ID from the URL
      if (isset($_GET['id'])) {
        $id = intval($_GET['id']); // Sanitize input

        // Fetch the article based on the ID
        $sql = "SELECT image_path, title, content, date FROM informasi WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $article = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($article) {
          // Display the article
      ?>
          <h2 class=""><?php echo htmlspecialchars($article['title']); ?></h2>
          <p class=""><?php echo date('d F Y', strtotime($article['date'])); ?></p>
          <div class="">
            <div class="galeri-grid">
              <img src="<?php echo htmlspecialchars($article['image_path']); ?>" class="img-fluid mb-4" alt="Judul Berita" />
            </div>
            <div class="text-start">
              <p class="">
                <?php echo nl2br(htmlspecialchars($article['content'])); ?>
              </p>
              <a href="javascript:history.back()" class="btn">Kembali</a>
            </div>
          </div>
      <?php
        } else {
          echo "<p>Artikel tidak ditemukan.</p>";
        }
      } else {
        echo "<p>Artikel tidak tersedia.</p>";
      }
      ?>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
