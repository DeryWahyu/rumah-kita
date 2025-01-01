<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kos - RumahKita</title>
    <link rel="stylesheet" href="/css/styleDashboardUser.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav id="navbar">
        <div class="navbar-left">
            <h1><span class="black-text">Rumah</span><span class="blue-text">Kita</span></h1>
            <div class="auth-buttons">
                <a href="/login" class="btn-login">Login</a>
                <a href="/login" class="btn-register">Daftar</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-container">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h1>Selamat Datang Sistem Pencarian Kos</h1>
                <h2>Temukan Kos Impian Anda</h2>
                <p>Platform terbaik untuk mencari kos dengan fasilitas lengkap, lokasi strategis yang dekat dengan pusat aktivitas, serta harga terjangkau sesuai dengan kebutuhan mahasiswa atau pekerja.</p>
                <a href="#features" class="cta-btn" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Apa Yang Ditawarkan?</a>
                <a href="/login" class="cta-btn" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">Coba Sekarang</a>
            </div>
            <div class="hero-image" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                <img src="/images/forSaleIcon.png" alt="Ilustrasi Kos" />
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h2>Apa yang Kami Tawarkan?</h2>
            <div class="features-grid" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <img src="/images/vektor/option.png" alt="Beragam Pilihan">
                    <h3>Beragam Pilihan</h3>
                    <p>Temukan kos dengan berbagai fasilitas sesuai kebutuhan Anda.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <img src="/images/vektor/Search.png" alt="Beragam Pilihan">
                    <h3>Fitur Pencarian yang Mudah</h3>
                    <p>Filter berdasarkan lokasi, harga, fasilitas, tipe kos.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <img src="/images/vektor/Contact.png" alt="Beragam Pilihan">
                    <h3>Informasi yang Detail</h3>
                    <p>Foto kos yang lengkap dan Deskripsi fasilitas (kamar mandi dalam, AC, Wi-Fi, dapur).</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <img src="/images/vektor/Security.png" alt="Beragam Pilihan">
                    <h3>Keamanan dan Privasi</h3>
                    <p>Verifikasi identitas penyewa dan pemilik kos.</p>
                </div>
                <div class="feature-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <img src="/images/vektor/Service.png" alt="Beragam Pilihan">
                    <h3>Layanan Pelanggan 24/7</h3>
                    <p>Dukungan melalui fitur kontak dapat diakses dengan mudah dan gampang.</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        AOS.init();
    </script>
</body>
</html>
