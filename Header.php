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
    
    <!-- Selection Header -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg- sticky-top">
        <div class="container bg-light-suble rounded-4 p-2 shadow p-1 mb-3 bg-body-transparant rounded mt-1 pt-1">
            <img src="./image/Logo.png" alt="Logo" width="60" height="70" class="d-inline-block align-text-top">
            <a class="navbar-brand" href="#">
                SMKN 4 Tasikmalaya
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <a class="navbar-brand" href="index.php">Beranda</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Sejarah.php">Sejarah</a></li>
                            <li><a class="dropdown-item" href="Identitas.php">Identitas</a></li>
                            <li><a class="dropdown-item" href="Visi&Misi.php">Visi&Misi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Jurusan.php">Keahlian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Ekstrakulikuler.php">Ekstrakulikuler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Galeri.php">Galeri</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Tutup Header -->
    </nav>