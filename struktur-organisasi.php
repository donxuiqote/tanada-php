<?php

$images = [
  "informasi/informasi1.jpg",
  "informasi/informasi_berita_2_2.jpg",
  "galeri/galeri4.jpg",
  "galeri/galeri5.jpg",
];

// Mengacak urutan gambar
shuffle($images);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Struktur Organisasi</title>
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

<section>
      <div class="container">
        <div class="">
          <h2>Struktur Organisasi</h2>
        </div>
        <div class="row">
          <div class="">
            <img
              src="foto/Pak Hammam.JPG"
              alt="Hammam Labib S. P., S.Kom., M.Pd"
              class="images-pendidik"
            />
            <h3 class="name">Hammam Labib S. P., S.Kom., M.Pd</h3>
            <p>Kepala Sekolah</p>
            <p>Projek Kreatif dan Kewirausahaan</p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Pak Eko.jpeg"
              alt="Eko Hari Widodo, S.Kom"
              class="images-pendidik"
            />
            <h3 class="name">Eko Hari Widodo, S.Kom</h3>
            <p>Wakil Kurikulum</p>
            <p>Karya Desain, Komputer Grafis</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Pak Qolbi.jpeg"
              alt="M. Masruri Qolbi, S.Pd"
              class="images-pendidik"
            />
            <h3 class="name">M. Masruri Qolbi, S.Pd</h3>
            <p>Wakil Kesiswaan</p>
            <p>
              Desain Brief, Prinsip Desain dan Komunikasi, Sketsa dan Ilustrasi,
              Komposisi Typografi, Fotografi Dasar
            </p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Pak Dirga.jpeg"
              alt="Dirga Bagus Eko P., S.Pd"
              class="images-pendidik"
            />
            <h3 class="name">Dirga Bagus Eko P., S.Pd</h3>
            <p>Wakil Sarpras</p>
            <p>Pendidikan Jasmani Olahraga & Kesehatan</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Bu Niswah.jpeg"
              alt="Khoirotun Niswah, S.Psi"
              class="images-pendidik"
            />
            <h3 class="name">Khoirotun Niswah, S.Psi</h3>
            <p>BK</p>
            <p>BK/BP</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Pak Anshori.jpeg"
              alt="Akhmad Ansori, S.Pd"
              class="images-pendidik"
            />
            <h3 class="name">Akhmad Ansori, S.Pd</h3>
            <p>Wali Kelas</p>
            <p>Bahasa Inggris</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Bu Rini.jpeg"
              alt="Herdarini Sri Wirdariningsih., S.Pd"
              class="images-pendidik"
            />
            <h3 class="name">Herdarini Sri Wirdariningsih., S.Pd</h3>
            <p>Wali Kelas</p>
            <p>Matematika</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Bu Sifa.jpeg"
              alt="Assifatul Mubarroh, S.Hum"
              class="images-pendidik"
            />
            <h3 class="name">Assifatul Mubarroh, S.Hum</h3>
            <p>Wali Kelas</p>
            <p>BTQ</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="icons/user-solid.svg"
              alt="Nurul Huda, S.Pd.I., M.Pd"
              class="images-pendidik"
            />
            <h3 class="name">Nurul Huda, S.Pd.I., M.Pd</h3>
            <p>Wali Kelas</p>
            <p>Pendidikan Agama Islam</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Pak Ulum.jpeg"
              alt="M. Syaiful Ulum, S.Pd"
              class="images-pendidik"
            />
            <h3 class="name">M. Syaiful Ulum, S.Pd</h3>
            <p>Wali Kelas</p>
            <p>
              Informatika, Proses Produksi Desain, DMI, Projek Kreatif dan
              Kewirausahaan
            </p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Bu Indah.jpeg"
              alt="Indah Zumaroh, S.Sos., S.Tr.Par"
              class="images-pendidik"
            />
            <h3 class="name">Indah Zumaroh, S.Sos., S.Tr.Par</h3>
            <p>Wali Kelas</p>
            <p>
              Mapel Pilihan, PPPW, PPTP, PW, MICE, PBIP K3LH, KKP & KLS, PKP,
              KT, PABBT
            </p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Bu Eny.jpg"
              alt="Nur Eniyah, S.Pd"
              class="images-pendidik"
            />
            <h3 class="name">Nur Eniyah, S.Pd</h3>
            <p>Wali Kelas</p>
            <p>Bahasa Indonesia</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Pak Shodiq.jpeg"
              alt="Drs. A. Shodiq Zubaidi"
              class="images-pendidik"
            />
            <h3 class="name">Drs. A. Shodiq Zubaidi</h3>
            <p>Guru</p>
            <p>Pendidikan Agama Islam</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Pak Latif.jpeg"
              alt="Latiful Asir, S.Pd.I"
              class="images-pendidik"
            />
            <h3 class="name">Latiful Asir, S.Pd.I</h3>
            <p>Guru</p>
            <p>Pendidikan Pancasila</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Pak Usman.jpeg"
              alt="Usman, S.Ag., S.Kom"
              class="images-pendidik"
            />
            <h3 class="name">Usman, S.Ag., S.Kom</h3>
            <p>Guru</p>
            <p>Desain Media Interaktif, K3LH, Technopreneur</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Bu Debby.jpeg"
              alt="Debby Affita Dian A., S.Pd"
              class="images-pendidik"
            />
            <h3 class="name">Debby Affita Dian A., S.Pd</h3>
            <p>Guru</p>
            <p>Sejarah</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Bu Tuha.jpeg"
              alt="Maftuhah, S.Pd.I"
              class="images-pendidik"
            />
            <h3 class="name">Maftuhah, S.Pd.I</h3>
            <p>Guru</p>
            <p>Seni Budaya, Pendidikan Aswaja</p>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
            <img
              src="foto/Bu Elok.jpg"
              alt="Elok Sofiyah, S.Tr.K.M"
              class="images-pendidik"
            />
            <h3 class="name">Elok Sofiyah, S.Tr.K.M</h3>
            <p>Guru</p>
            <p>Desain Brief, Perangkat Lunak Desain</p>
          </div>
        </div>
      </div>
    </section>

<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
