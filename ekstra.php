<?php

$images = [
  "ekstra/badminton.jpg",
  "ekstra/banjari.jpg",
  "ekstra/fotografi.jpg",
  "ekstra/pramuka.jpg",
  "ekstra/pilkasis.jpg",

];

shuffle($images);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ekstrakurikuler</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <script src="app.js"></script>
    <link rel="icon" href="icons/tanada.png" type="image/png">
    <link rel="stylesheet" href="app.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php include 'navbar.php'; ?>
<?php include 'carousel.php'; ?>

<section class="bgm">
      <div class="container">
        <h2>Ekstrakurikuler</h2>
        <p>
          Banyak sekali keunggulan yang bisa dijadikan alasan siswa memilih
          jurusan DKV, diantaranya :
        </p>
        <ol>
          <li>
            Organisasi Intra Sekolah (OSIS)
            <p>Organisasi yang mengelola kegiatan siswa di sekolah.</p>
          </li>
          <li>
            Fotografi
            <p>Mendokumentasikan momen melalui teknik pemotretan.</p>
          </li>
          <li>
            Videografi
            <p>Merekan video untuk berbagai acara dan kegiatan.</p>
          </li>
          <li>
            Futsal
            <p>Permainan sepak bola dalam ruangan dengan dua tim.</p>
          </li>
          <li>
            Badminton
            <p>Olahraga raket yang dimainkan satu lawan satu atau beregu.</p>
          </li>
          <li>
            Pagar Nusa
            <p>
              Beladiri khas Indonesia dengan filosofi nilai-nilai kejuangan.
            </p>
          </li>
          <li>
            Paskibraka
            <p>Tim pengibar bendera pada upacara bendera.</p>
          </li>
          <li>
            Kunjungan Industri
            <p>Melihat langsung proses kerja di perusahaan.</p>
          </li>
          <li>
            Traveling
            <p>Menjelajahi tempat baru untuk pengalaman dan pembelajaran.</p>
          </li>
          <li>
            Podcast
            <p>Diskusi audio tentang berbagai topik menarik.</p>
          </li>
          <li>
            Tabungan Amal Salih
            <p>Kegiatan sosial dan amal.</p>
          </li>
          <li>
            Banjari
            <p>Grup musik yang menyajikan lagu-lagu religi.</p>
          </li>
          <li>
            Kewirausahaan
            <p>Pelatihan dan pengembangan jiwa bisnis di kalangan siswa.</p>
          </li>
          <li>
            Pramuka
            <p>Aktivitas pendidikan karakter melalui kegiatan luar ruangan.</p>
          </li>
        </ol>
      </div>
    </section>

<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
