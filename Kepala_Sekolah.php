<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <title>SMKN MERKURIUS SCHOOL</title>
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    background-color: #8dc8e5ff;
    padding: 40px 0;
    }

    /* Sambutan Section */
    .sambutan-container {
    max-width: 1000px;
    margin: 80px auto;
    background: white;
    border-radius: 20px;
    padding: 50px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    }
    .sambutan-container:hover {
    transform: translateY(-5px);
    }
    .sambutan-title {
    text-align: center;
    font-weight: 700;
    margin-bottom: 30px;
    color: #003366;
    }

    .kepsek-img {
    display: block;
    margin: 0 auto 30px auto;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    width: 250px;
    transition: transform 0.3s ease;
    }
    .kepsek-img:hover {
    transform: scale(1.05);
    }

    .sambutan-text {
    text-align: justify;
    line-height: 1.8;
    }

    .sambutan-text p:first-child {
    font-style: italic;
    font-weight: 500;
    color: #005599;
    }
</style>
</head>

<body>
    <?php include 'Header.php'; ?>

    <!-- section Sambutan -->
    <div class="container bg-light-subtle rounded-5 p-5 shadow p-3 mb-5 bg-body-tertiary rounded mt-4 pt-5">
        <div class="row">
        </div>
        <div class="row ">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="card border-0 shadow rounded-5 p-2 mb-1">
                    <img src="./image/kepsek.jpg" alt="" width="200" height="250">
                </div>
            </div>
            <p><h3>Sambutan Kepala Sekolah</h3></p><br>
            <p style="text-align: justify;">Assalamu'alaikum Warahmatullahi Wabarakatuh</p><br>
            <p style="text-align: justify;">Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam lindungan-Nya.
            Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4 Tasikmalaya ini. Kami berharap
            dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat mengenal lebih jauh tentang
            sekolah kami sehingga dapat mempererat tali silaturrahmi antara sekolah dengan masyarakat demi kemajuan
            kita bersama. Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan, masih banyak kekurangan
            yang harus kami perbaiki. Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan.</p>
            <p style="text-align: justify;">Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang tidak dapat disebutkan 
            satu segala bantuan dan persatu atas fasilitasnya yang telah diberikan semoga semua yang kita lakukan bermanfaat 
            bagi masyarakat.</p><br>
            <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
            </div><br>
        <div class="container profil  rounded-5 p-3 shadow p-3 mb-5 ">
            <div class="row g-0 flex-nowrap">
                <div class="col-4">
                    <p>Nama</p>
                    <p>NIP</p>
                    <p>Pangkat/Golongan</p>
                    <p>No SK Pengangkatan</p>
                    <p>Tanggal Pengangkatan</p>
                </div>
                <div class="col-1">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p><br>
                    <p>:</p>
                </div>
                <div class="col-6">
                    <p>Kurniawan,S.pd,M.pd</p>
                    <p>19720809 199702 1 002</p>
                    <p>Pembina IV/b</p>
                    <p>821.2/Kep.373-BKD/2020</p>
                    <p>10 Juli 2020</p>
                </div>
            </div>
        </div>
    </div>
    <!-- tutup section Sambutan -->

<!-- Selection foother -->
<?php include 'Footer.php'; ?>
<!-- Tutup Selection Foother -->

</body>

</html>