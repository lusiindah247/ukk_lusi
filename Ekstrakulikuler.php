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
</head>

<body>
    <?php include 'Header.php'; ?>

        <!-- Selection Ekstrakulikuler -->
    <div class="container">
            <div class="col-12">
                <h2 class="text-center">EKSTRAKULIKULER</h2>
                <hr>
                <div class="d-flex justify-content-evenly">
                    <div class="card border-0 shadow rounded-5 p-2 mb-1">
                    <div class="row">
                        <div class="row">
            <?php $eskul = [
                ["gambar" => "image/volly.jpeg", "nama" => "volly"],
                ["gambar" => "image/basket.png", "nama" => "Basket"],
                ["gambar" => "image/bulutangkis.png", "nama" => "Bulutangkis"],
                ["gambar" => "image/cinematography.png", "nama" => "Cinematography"],
                ["gambar" => "image/englishclub.png", "nama" => "English Club"],
                ["gambar" => "image/Futsal.png", "nama" => "Futsal"],
                ["gambar" => "image/itclub.png", "nama" => "IT Club"],
                ["gambar" => "image/laskarpustaka.png", "nama" => "Laskar Pustaka"],
                ["gambar" => "image/paskibra.png", "nama" => "Paskibra"],
                ["gambar" => "image/pks.png", "nama" => "PKS"],
                ["gambar" => "image/plh.png", "nama" => "PLH"],
                ["gambar" => "image/pmr.png", "nama" => "PMR"],
                ["gambar" => "image/pramuka..png", "nama" => "Pramuka"],
                ["gambar" => "image/Rohis.jpg", "nama" => "Rohis"],
                ["gambar" => "image/sepakbola.jpeg", "nama" => "Sepak Bola"],
                ["gambar" => "image/logo_pd.jpeg", "nama" => "Perisai diri"],
                ["gambar" => "image/Cari aman.png", "nama" => "Safety Riding"],
            ];
            foreach ($eskul as $item) {

            ?>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?= $item [ 'gambar']?>" alt="" class="w-100 h-50">
                                    <p class="text-center">
                                    <p><b><?= $item ['nama']?></b></p>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>

    <!-- Tutup Ekstrakulikuler -->


    <!-- Selection foother -->
<?php include 'Footer.php'?>
<!-- Tutup Selection Foother -->
</body>

</html>