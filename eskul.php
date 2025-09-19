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
    <?php include 'header.php'; ?>
    <!-- tutup nav -->

    <!-- section galery -->
    <ul>
        <?php
        $galeri = [
            "./image/kepsek.jpg",
            "./image/kepsek.jpg"
        ];
        foreach ($galeri as $image) {
        ?>
            <li><img src=<?= $image ?> alt="image" style="width:200px;"></li>
        <?php } ?>
    </ul>
    <!-- tutup section galeri-->
    <!--  section foother-->
    <?php include 'footer.php'; ?>
    <!-- tutup section foother-->

</body>
</html>