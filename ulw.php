<?php

$images = [
  "galeri/galeri14.jpg",
  "galeri/ulw.jpg",
  "galeri/galeri2.jpg",
];

shuffle($images);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ULW</title>
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
            <h2>Keunggulan</h2>
            <p>Membekali siswa dengan pengetahuan, keterampilan, dan sikap agar kompeten dalam bidang penjualan tiket, perencanaan tur, pemanduan wisata, kepemimpinan tur, serta penyelenggaraan acara seperti Meeting, Incentive, Conference, dan Exhibition (MICE).</p>
            <ol>
                <li> Dasar-dasar Kepariwisataan
                    <p>
                        Mengenal industri pariwisata, konsep wisata, dan dampak pariwisata terhadap ekonomi, sosial, dan budaya.
                    </p>
                </li>
                <li> Perencanaan dan Pengelolaan Wisata
                    <p>
                        Belajar merencanakan perjalanan wisata, membuat itinerary, mengatur logistik, serta pengelolaan destinasi wisata.
                    </p>
                </li>
                <li> Penjualan dan Pemasaran Produk
                    <p>
                        Teknik menjual dan memasarkan produk wisata, termasuk penjualan tiket, paket wisata, dan promosi destinasi.
                    </p>
                </li>
                <li> Administrasi Usaha Pariwisata
                    <p>
                        Mempelajari aspek administratif dalam mengelola bisnis wisata, seperti pengelolaan dokumen, legalitas, dan manajemen usaha wisata.
                    </p>
                </li>
                <li> Customer Service
                    <p>
                        Teknik menghadapi pelanggan dalam industri pariwisata, melayani kebutuhan wisatawan, dan menangani keluhan dengan profesional.
                    </p>
                </li>
                <li>Hukum dan Etika Kepariwisataan
                    <p>Mempelajari aspek hukum dan etika yang harus dipatuhi dalam industri pariwisata, termasuk regulasi pemerintah dan perlindungan lingkungan.</p>
                </li>
                <li>Pengelolaan Akomodasi dan Hotel
                    <p>Belajar tentang manajemen hotel, pengelolaan kamar, layanan tamu, serta keterampilan kerja di industri perhotelan.</p>
                </li>
            </ol>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Prospek Kerja</h2>
            <ol>
                <li>
                    <p>Tour Guide</p>
                    <p>Menjadi pemandu yang mengarahkan wisatawan selama perjalanan, memberikan informasi tentang destinasi wisata, sejarah, dan budaya.</p>
                </li>
                <li>
                    <p>Travel Planner</p>
                    <p>Menyusun rencana perjalanan (itinerary) untuk klien atau perusahaan wisata, mengatur transportasi, akomodasi, dan kegiatan selama tur.</p>
                </li>
                <li>
                    <p>Pengelola Acara MICE (Meeting, Incentive, Conference, Exhibition)</p>
                    <p>Merencanakan dan menyelenggarakan acara besar seperti rapat, konferensi, insentif perusahaan, dan pameran dalam skala nasional maupun internasional.</p>
                </li>
                <li>
                    <p>Konsultan Pariwisata</p>
                    <p>Memberikan layanan konsultasi terkait pengembangan wisata, strategi pemasaran, atau pengelolaan destinasi bagi pemerintah atau perusahaan swasta.</p>
                </li>
                <li>
                    <p>Event Organizer Wisata</p>
                    <p>Menyusun dan mengelola acara wisata atau kegiatan khusus seperti festival budaya, perjalanan edukasi, atau wisata keluarga.</p>
                </li>
                <li>
                    <p>Tour Leader</p>
                    <p>Memimpin grup wisata selama perjalanan, bertanggung jawab atas keselamatan, kenyamanan, dan kelancaran perjalanan wisatawan.</p>
                </li>
                <li>
                    <p>Staff Hotel atau Akomodasi</p>
                    <p>Bekerja di hotel, resor, atau jenis akomodasi lainnya, bertanggung jawab atas layanan tamu, reservasi, atau pengelolaan operasional hotel.</p>
                </li>
                <li>
                    <p>Manajer Layanan Pelanggan</p>
                    <p>Bekerja di perusahaan perjalanan atau akomodasi untuk memastikan kualitas layanan pelanggan, menangani keluhan, dan menjaga kepuasan klien.</p>
                </li>
                <li>
                    <p>Marketing dan Saales Produk Wisata</p>
                    <p>Bertugas memasarkan dan menjual paket wisata, promosi destinasi wisata, serta bekerja sama dengan agen perjalanan atau industri terkait.</p>
                </li>
            </ol>
        </div>
        </div>
    </section>

<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
