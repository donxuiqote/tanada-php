<?php
include 'db.php';

// Fetching the latest information
$sql_info = "SELECT id, image_path, title, content, date FROM informasi ORDER BY date DESC";
$stmt_info = $pdo->query($sql_info);
$informasi = $stmt_info->fetchAll(PDO::FETCH_ASSOC);

// Fetching random gallery images
$sql_gallery = "SELECT image_path, alt_text FROM galeri ORDER BY RAND() LIMIT 6";
$stmt_gallery = $pdo->query($sql_gallery);
$galeri_images = $stmt_gallery->fetchAll(PDO::FETCH_ASSOC);

$images = [
  "galeri/galeri4.jpg",
  "galeri/galeri1.jpg",
  "informasi/informasi1.jpg",
  "informasi/informasi2.jpg",
];

// Mengacak urutan gambar
shuffle($images);

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SMK Tanada</title>
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
  <?php include 'carousel.php'; ?>


  <section>
    <div class="container">
      <div class="">
        <div class="">
          <h2>Sambutan Kepala Sekolah</h2>
        </div>
        <img
          src="foto/Pak Hammam.JPG"
          alt="Kepala Sekolah"
          class="images-pendidik" />
        <p class="name">Hammam Labib S.P., S.Kom., M.Pd</p>
        <p class="context">
          "Kami berkomitmen untuk menyediakan pendidikan terbaik bagi setiap
          siswa. Kami percaya bahwa setiap anak memiliki potensi untuk
          berkembang dengan bimbingan yang tepat."
        </p>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
        <div class="">
            <h2>Informasi</h2>
        </div>
        <div class="card-container">
            <?php
            $counter = 0;
            foreach ($informasi as $item):
                if ($counter >= 4) break; // Tampilkan hanya 4 artikel
            ?>
                <div class="card">
                    <img src="<?php echo htmlspecialchars($item['image_path']); ?>" alt="News Image" />
                    <div class="">
                        <h3 class=""><?php echo htmlspecialchars($item['title']); ?></h3>
                        <p class=""><?php echo htmlspecialchars($item['content']); ?></p>
                        <div class="">
                            <a href="berita.php?id=<?php echo $item['id']; ?>" class="read-more">Read more</a>
                            <span class="date"><?php echo date('d F Y', strtotime($item['date'])); ?></span>
                        </div>
                    </div>
                </div>
            <?php
                $counter++; // Increment the counter
            endforeach;
            ?>
        </div>
    </div>
</section>


  <section class="bgm">
    <div class="container py-4 text-center">
      <div class="">
        <img
          src="icons/tanada.png"
          alt="Logo SMK TANADA"
          class="logo-tentang" />
      </div>
      <h2 class="mt-4">Tentang Kami</h2>
      <p class="">
        SMK TANADA didirikan oleh Yayasan TANADA yang merupakan pengembangan
        dari TK, MI, MTS, dan MA. SMK TANADA hadir dengan metode pembelajaran
        yang tidak hanya membekali siswa di bidang akademik saja tetapi juga
        membekali keterampilan dan agama. Pola pendidikan diarahkan pada
        penggalian potensi siswa secara maksimal dengan memanfaatkan potensi
        dan fasilitas yang dimiliki siswa. Para lulusan betul-betul
        diproyeksikan pada penguasaan kemampuan dan keterampilan untuk mandiri
        dan dapat memenangkan persaingan di dunia kerja serta mampu berkarya
        dalam kehidupan bermasyarakat.
      </p>
    </div>
  </section>

  <section class="">
    <div class="container text-center">
      <h2>Visi & Misi</h2>
      <div class="row mt-4 visi-misi">
        <div class="col-md-6 container">
          <h3 class="">Visi</h3>
          <p>
            Menjadi sekolah unggulan di Sidoarjo dengan menghasilkan lulusan
            yang takwa, cerdas, dan kompetitif.
          </p>
        </div>
        <div class="col-md-6 container">
          <h3 class="">Misi</h3>
          <p>
            Memberikan pendidikan berkualitas yang berorientasi pada
            perkembangan zaman. Membentuk karakter siswa dengan nilai-nilai
            moral dan etika. Mengembangkan kreativitas dan potensi siswa dalam
            berbagai bidang.
          </p>
        </div>
      </div>
      <div
        class="container d-flex align-items-center justify-content-center py-4">
        <img
          src="icons/undraw_books_re_8gea.svg"
          alt="Books"
          width="250"
          height="250" />
      </div>
    </div>
  </section>

  <section class="bgm" id="stats">
    <div class="row text-center">
      <div class="col-md-4">
        <h2 id="jumlah-siswa">0</h2>
        <p>Jumlah Siswa</p>
      </div>
      <div class="col-md-4">
        <h2 id="tenaga-pendidik">0</h2>
        <p>Tenaga Pendidik</p>
      </div>
      <div class="col-md-4">
        <h2 id="tata-usaha">0</h2>
        <p>Tata Usaha</p>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="">
        <h2 class="">Program Jurusan</h2>
      </div>
      <div class="card-container">
        <div class="card">
          <img
            src="galeri/ulw.jpg"
            alt="News Image" />
          <div class="card-body">
            <h5 class="">Usaha Layanan Wisata</h5>
            <p class="card-text">
              Menyediakan keterampilan dalam manajemen pariwisata, perencanaan
              perjalanan, dan pelayanan pelanggan dengan fokus pada pengalaman
              praktis.
            </p>
            <div class="text-end">
              <a href="ulw.php" class="btn btn-program">Pelajari Lebih Lanjut</a>
            </div>
          </div>
        </div>

        <div class="card">
          <img
            src="galeri/dkv2.jpg"
            alt="News Image" />
          <div class="card-body">
            <h5 class="">Desain Komunikasi Visual (DKV)</h5>
            <p class="card-text">
              Program ini fokus pada pengembangan keterampilan desain dan
              komunikasi visual yang dibutuhkan untuk karier kreatif di
              berbagai industri.
            </p>
            <div class="text-end">
              <a href="dkv.php" class="btn btn-program">Pelajari Lebih Lanjut</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="">
    <div class="container">
      <div class="">
        <h2>Galeri Sekolah</h2>
      </div>
      <div class="galeri-grid container">
        <?php foreach ($galeri_images as $image): ?>
          <div>
            <img
              src="<?php echo htmlspecialchars($image['image_path']); ?>"
              alt="<?php echo htmlspecialchars($image['alt_text']); ?>"
              class="img-fluid" />
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>





  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>