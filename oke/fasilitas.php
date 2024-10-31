<?php

$images = [
  "galeri/galeri6.jpg",
  "galeri/galeri4.jpg",
  "galeri/galeri15.jpg",
  "galeri/galeri10.jpg",
];

// Mengacak urutan gambar
shuffle($images);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fasilitas</title>
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
      <div class="container fasilitas">
        <div class="col">
          <h2 class="mb-4">Fasilitas</h2>
          <div class="row">
            <div class="col-md-10 mx-auto">
              <!-- Lab Komputer Hardware -->
              <div class="mb-3">
                <button
                  class="btn w-100 d-flex"
                  data-bs-toggle="collapse"
                  data-bs-target="#lab-komputer-hardware"
                >
                  <object
                    type="image/svg+xml"
                    data="icons/desktop-solid.svg"
                    class="me-3 fas"
                    width="30"
                    height="30"
                  ></object>
                  <h4 class="mb-0">Lab. Komputer Hardware</h4>
                </button>
                <div class="collapse mt-2" id="lab-komputer-hardware">
                  <img
                    src="informasi/informasi6.jpg"
                    class="img-fluid"
                    alt="Lab Komputer Hardware 1"
                  />
                </div>
              </div>

              <!-- Lab Komputer Software -->
              <div class="mb-3">
                <button
                  class="btn w-100 d-flex"
                  data-bs-toggle="collapse"
                  data-bs-target="#lab-komputer-software"
                >
                  <object
                    type="image/svg+xml"
                    data="icons/laptop-code-solid.svg"
                    class="me-3"
                    width="30"
                    height="30"
                  ></object>
                  <h4 class="mb-0">Lab. Komputer Software</h4>
                </button>
                <div class="collapse mt-2" id="lab-komputer-software">
                  <img
                    src="galeri/galeri15.jpg"
                    class="img-fluid"
                    alt="Lab Komputer Software 1"
                  />
                </div>
              </div>

              <!-- Lab Bahasa -->
              <div class="mb-3">
                <button
                  class="btn w-100 d-flex"
                  data-bs-toggle="collapse"
                  data-bs-target="#lab-bahasa"
                >
                  <object
                    type="image/svg+xml"
                    data="icons/language-solid.svg"
                    class="me-3"
                    width="30"
                    height="30"
                  ></object>
                  <h4 class="mb-0">Lab. Bahasa</h4>
                </button>
                <div class="collapse mt-2" id="lab-bahasa">
                  <img
                    src="galeri/galeri14.jpg"
                    class="img-fluid"
                    alt="Lab Bahasa 1"
                  />
                </div>
              </div>

              <!-- Multimedia -->
              <div class="mb-3">
                <button
                  class="btn w-100 d-flex"
                  data-bs-toggle="collapse"
                  data-bs-target="#multimedia"
                >
                  <object
                    type="image/svg+xml"
                    data="icons/video-solid.svg"
                    class="me-3"
                    width="30"
                    height="30"
                  ></object>
                  <h4 class="mb-0">Multimedia</h4>
                </button>
                <div class="collapse mt-2" id="multimedia">
                </div>
              </div>

              <!-- Lapangan Olah Raga -->
              <div class="mb-3">
                <button
                  class="btn w-100 d-flex"
                  data-bs-toggle="collapse"
                  data-bs-target="#lapangan-olah-raga"
                >
                  <object
                    type="image/svg+xml"
                    data="icons/futbol-solid.svg"
                    class="me-3"
                    width="30"
                    height="30"
                  ></object>
                  <h4 class="mb-0">Lapangan Olah Raga</h4>
                </button>
                <div class="collapse mt-2" id="lapangan-olah-raga">
                </div>
              </div>

              <!-- Masjid -->
              <div class="mb-3">
                <button
                  class="btn w-100 d-flex"
                  data-bs-toggle="collapse"
                  data-bs-target="#masjid"
                >
                  <object
                    type="image/svg+xml"
                    data="icons/mosque-solid.svg"
                    class="me-3"
                    width="30"
                    height="30"
                  ></object>
                  <h4 class="mb-0">Masjid</h4>
                </button>
                <div class="collapse mt-2" id="masjid">

                </div>
              </div>

              <!-- Perpustakaan -->
              <div class="mb-3">
                <button
                  class="btn w-100 d-flex"
                  data-bs-toggle="collapse"
                  data-bs-target="#perpustakaan"
                >
                  <object
                    type="image/svg+xml"
                    data="icons/book-solid.svg"
                    class="me-3"
                    width="30"
                    height="30"
                  ></object>
                  <h4 class="mb-0">Perpustakaan</h4>
                </button>
                <div class="collapse mt-2" id="perpustakaan">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
