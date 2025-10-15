<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <title>SMKN MERKURIUS SCHOOL</title>
    <style>
    body {
    font-family: 'Poppins', sans-serif;
    background-color: #8dc8e5ff;
    padding: 40px 0;
    }

    .stat-card {
    border: none;
    border-radius: 20px;
    color: white;
    text-align: center;
    padding: 30px 20px;
    font-weight: 600;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .stat-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 10px;
    }

    .stat-label {
    font-size: 1.1rem;
    letter-spacing: 0.5px;
    }
</style>
</head>

<body>
    <!-- Slection index -->
    
    <?php include 'Header.php'; ?>
<div class="card text-bg-dark">
    <img src="./image/latar.jpg" class="card-img" alt="...">
<div class="card-body">
    <h5 class="card-title">Pusat Unggulan</h5>
    <p class="card-text">Sekolah Menengah Kejuruan</p>
    <a href="Kepala_Sekolah.php" class="btn btn-info">Kepala Sekolah</a>
</div>
</div>
<br><br>
    
        <div class="container">
        <!-- Selection Berita -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Berita</h2>
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="card">
                            <img src="./image/lapang.jpeg" class="card-img-top" alt="..." width="510" height="400">
                            <div class="card-body">
                                <h5 class="card-title">Polsek Cibeureum Sosialisasikan Larangan Knalpot Brong dan Geng
                                    Motor di
                                    SMKN
                                    4 Kota Tasikmalaya</h5>
                                <a href="https://tasikmalaya.inews.id/read/502735/polsek-cibeureum-sosialisasikan-larangan-knalpot-brong-dan-geng-motor-di-smkn-4-kota-tasikmalaya"
                                    class="btn btn-info" target="_blank">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <img src="./image/ujian_pd.JPG" class="card-img-top" alt="..." width="510" height="400">
                            <div class="card-body">
                                <h5 class="card-title">320 Pesilat Perisai Diri Ikuti UKT Periode 72 di SMKN 4
                                    Tasikmalaya,
                                    Penerimaan Anggota Baru Dibuka</h5>
                                <a href="https://kabarpriangan.pikiran-rakyat.com/kabar-priangan/pr-1488326544/320-pesilat-perisai-diri-ikuti-ukt-periode-72-di-smkn-4-tasikmalaya-penerimaan-anggota-baru-dibuka?page=all"
                                    class="btn btn-info" targer="_blank">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
        <!-- TUTUP SECTION BERITA -->

        <!--SECTION GALERI Index -->

        <?php
        $images =[
        "image/Galeri1.png",
        "image/Galeri2.png",
        "image/Galeri3.png",   
        ];

        $i = 0;
        ?>

        <div class="row">
            <div class="col-lg-12">
                <h2>Galeri</h2>
                <div class="row">
                    <?php while ($i < count($images)) { ?>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/gerak jalan_1.JPG" alt="" width="330" height="300">
                            </div>
                        </div>
                    </div>
                    <?php
                        $i++;
                    } ?>
                </div>
                <div class="text-center my-4">
                    <a class="btn btn-info" href="Galeri.php">Intip lainnya</a>
                </div>
            </div>
        </div>
    </div><br>
    <!-- TUTUP SECTION GALERI Index -->

    <!-- SECTION STASTISTIK -->
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card text-center border-1">
                        <div class="card-body">
                            <h3>1500</h3>
                            Peserta Didik
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-1">
                        <div class="card-body">
                            <h3>100</h3>
                            Pendidik
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-1">
                        <div class="card-body">
                            <h3>60</h3>
                            Romble
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-1">
                        <div class="card-body">
                            <h3>5</h3>
                            Keahlian
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!--TUTUP SECTION STATISTIK  -->


<!-- Selection foother -->
<?php include 'Footer.php'; ?>
<!-- Tutup Selection Foother -->
</body>

</html>