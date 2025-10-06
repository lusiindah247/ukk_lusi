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

.card  {
text-align: center;
background-color: transparent;
padding: 20px;
}

.logo-container img {
width: 200px; /* sesuaikan ukuran */
height: auto;
background: transparent;
border:none;
}
</style>
</head>

<body>
    <?php include 'Header.php'; ?>

    <!-- section identitas -->
    <div class="container my-4">
        <div class="row">
            <h3>Indentitas Sekolah</h3>
        </div>
        <div class="row ">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="card border-0 mb-3">
                    <img src="./image/Logo.png" alt="" width="200" height="250">
                </div>
            </div>
        </div>
        <div class="container profil  rounded-5 p-3 shadow p-3 mb-5 bg-info ">
            <div class="row g-0 flex-nowrap">
                <div class="col-4">
                    <p>Nama Sekolah</p>
                    <p>NPSN</p>
                    <p>Alamat</p><br>
                    <p>Telp/faks</p>
                    <p>Email</p>
                    <p>Tahun Berdiri/Beroperasi </p>
                    <p>Nomor SK Pendirian</p>
                    <p>Tanggal SK Pendirian</p>
                    <p>Kepemilikan</p>
                </div>
                <div class="col-1">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p><br>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                </div>
                <div class="col-6">
                    <p>SMKN 4 TASIKMALAYA</p>
                    <p>20276063</p>
                    <p>Jl Depok RT 02 RW 05, Kelurahan Sukamenak, Kecamatan Purbaratu,
                        Kota Tasikmalaya, Provinsi Jawabarat</p>
                    <p>(0265) 7528981</p>
                    <p>info@smkn4-tsm.sch.id</p>
                    <p>2010</p>
                    <p>420/9/SK-BPPT/2012</p>
                    <p>420/9/SK-BPPT/2012</p>
                    <p>Pemerintah Daerah</p>
                </div>
            </div>
        </div>
    </div>
    <!-- tutup section indentitas -->
<!-- Selection foother -->
<?php include 'Footer.php'; ?>
<!-- Tutup Selection Foother -->

</body>

</html>