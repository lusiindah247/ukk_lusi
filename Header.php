<style>
 /* Navbar */
    .navbar {
    transition: all 0.4s ease;
      background: rgba(32, 66, 100, 0.95); /* warna awal */
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .navbar.scrolled {
    background: rgba(0, 51, 102, 0.7); /* jadi transparan ketika scroll */
    backdrop-filter: blur(10px); /* efek kaca */
    box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    }

    .navbar-brand, .nav-link {
    color: white !important;
    font-weight: 500;
    }

    .nav-link:hover {
    color: #ffcc00 !important;
    }
    </style>
    
    <nav class="navbar navbar-expand-lg bg- sticky-top">
        <div class="container rounded-4 p-2 shadow   ">
            <img src="./image/logo.png" alt="" width="80px" height="90px">&nbsp;
            <a class="navbar-brand" href="#"><b>SMKN 4 Tasikmalaya</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <b>Beranda</b>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <b>Profil</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Identitas.php">Indentitas sekolah</a></li>
                            <li><a class="dropdown-item" href="Sejarah.php">Sejarah</a></li>
                            <li><a class="dropdown-item" href="Kepala_Sekolah.php">Kepala Sekolah</a></li>
                            <li><a class="dropdown-item" href="Visi&Misi.php">Visi & Misi</a></li>
                            <li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Jurusan.php"><b>Jurusan</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Ekstrakulikuler.php"><b>Ektrakurikuler</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Galeri.php">
                            <b>Galeri</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>