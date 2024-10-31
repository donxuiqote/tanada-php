<?php

$images = [
  "galeri/galeri8.jpg",
  "galeri/dkv.jpg",
  "galeri/dkv2.jpg",
];

// Mengacak urutan gambar
shuffle($images);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DKV</title>
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
<section class="bgm">
        <div class="container">
                <h2>Keunggulan</h2>
                <p> Membekali siswa dengan pengetahuan, keterampilan, dan sikap yang kompeten dalam desain grafis, pembuatan pin, tata letak interior, sablon digital, desain media interaktif, serta pengolahan audio dan video.</p>
                <ol>
                    <li> Dasar-dasar Desain Grafis
                        <p>
                            Mempelajari elemen dan prinsip desain, seperti warna, tipografi, layout, dan komposisi visual.
                        </p>
                    </li>
                    <li> Tipografi
                        <p>
                            Pembelajaran mengenai penggunaan huruf, pemilihan jenis huruf, dan cara mengatur tipografi untuk komunikasi visual yang efektif.
                        </p>
                    </li>
                    <li> Ilustrasi
                        <p>
                            Teknik menggambar manual atau digital untuk menciptakan karya visual yang mendukung pesan atau konsep tertentu.
                        </p>
                    </li>
                    <li> Fotografi
                        <p>
                            Belajar teknik dasar fotografi, pencahayaan, framing, dan pengolahan foto sebagai media komunikasi visual.
                        </p>
                    </li>
                    <li> Desain Multimedia Interaktif
                        <p>
                            Mempelajari pembuatan media interaktif seperti website, aplikasi, dan animasi menggunakan berbagai perangkat lunak multimedia.
                        </p>
                    </li>
                    <li>Desain Iklan Branding
                        <p>
                            Fokus pada pengembangan kampanye iklan dan branding, dari konsep kreatif hingga implementasi visual.
                        </p>
                    </li>
                    <li>Pengolahan Audio Video
                        <p>
                            Teknik dasar dalam pembuatan dan pengeditan video serta pengolahan audio untuk mendukung pesan visual.
                        </p>
                    </li>
                    <li>Animasi
                        <p>
                            Membuat animasi 2D dan 3D menggunakan software untuk berbagai keperluan seperti iklan, film, atau media interaktif.
                        </p>
                    </li>
                    <li>Desain UI/UX
                        <p>
                            Pembelajaran tentang desain antarmuka pengguna (UI) dan pengalaman pengguna (UX) untuk aplikasi atau website.
                        </p>
                    </li>
                </ol>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Prospek Kerja</h2>
            <ol>
                <li>
                    <p>Desain Grafis</p>
                    <p>Membuat desain visual untuk berbagai media seperti poster, brosur, majalah, logo, dan materi promosi lainnya.</p>
                </li>
                <li>
                    <p>Ilustrator</p>
                    <p>Membuat gambar atau ilustrasi untuk buku, majalah, iklan, atau media digital.</p>
                </li>
                <li>
                    <p>Animator</p>
                    <p>Membuat animasi 2D atau 3D untuk iklan, film, televisi, video game, atau media digital.</p>
                </li>
                <li>
                    <p>Desain Web UI/UX </p>
                    <p>Merancang antarmuka pengguna (UI) dan pengalaman pengguna (UX) untuk website dan aplikasi, dengan fokus pada fungsionalitas dan tampilan yang menarik.</p>
                </li>
                <li>
                    <p>Desain Multimedia Interaktif</p>
                    <p>Mengembangkan konten interaktif seperti aplikasi, permainan, website, atau presentasi multimedia.</p>
                </li>
                <li>
                    <p>Fotografer/Videografer</p>
                    <p>Memotret atau merekam video untuk proyek komersial, editorial, atau seni, serta mengedit hasil visual untuk produksi akhir.</p>
                </li>
            </ol>
        </div>
    </section>
<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
