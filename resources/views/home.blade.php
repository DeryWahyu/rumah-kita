<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RumahKita</title>
    <link rel="stylesheet" href="/css/styleHome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <nav id="navbar">
        <h1><span class="black-text">Rumah</span><span class="blue-text">Kita</span></h1>
        <div class="menu">
            <a href="/home">HOME</a>
            <a href="/kontak">KONTAK</a>
            <a href="/bantuan">BANTUAN</a>
            <a href="/tentang">TENTANG</a>
            <div class="dropdown">
                <img src="/images/user.png" alt="User" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/"><i class="ri-logout-box-line"></i> Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="search" class="search-section">
        <div class="container">
            <h2>Cari Kos Impianmu</h2>
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Masukkan nama kos yang ingin anda cari...">
                <button id="searchButton">Cari</button>
            </div>
        </div>
    </section>

    <section id="recommendations" class="recommendation-section">
        <div class="container">
            <h2 style="text-align: center;">Rekomendasi Kos</h2>
            <div class="recommendation-grid" id="recommendationGrid">
                <div class="card" data-nama="Kos Ibu Hadi" data-lokasi="Sendangadi, Kec. Mlati, Yogyakarta">
                    <img src="/images/bg-home.jpg" alt="Kos Ibu Hadi">
                    <h3>Kos Ibu Hadi</h3>
                    <h4 style="font-size: 0.9rem; color: gray;">Ngemplak Nganti, Sendangadi, Kec. Mlati, Daerah Istimewa Yogyakarta</h4>
                    <p>Rp 5.000.000/Tahun</p>
                    <a href="/kosIbuHadi" class="view-button">Lihat Detail Kos</a>
                </div>
                <div class="card" data-nama="Kos Pak Bambang" data-lokasi="Trini, Trihanggo, Kec. Gamping, Sleman">
                    <img src="/images/kosPakBambang/4.jpg" alt="Kos Pak Bambang">
                    <h3>Kos Pak Bambang</h3>
                    <h4 style="font-size: 0.9rem; color: gray;">Trini, Trihanggo, Kec. Gamping, Sleman, Daerah Istimewa Yogyakarta</h4>
                    <p>Rp 6.500.000/Tahun</p>
                    <a href="/kosPakBambang" class="view-button">Lihat Detail Kos</a>
                </div>
                <div class="card" data-nama="Kos Ibu Nasocha" data-lokasi="Sendangadi, Kec. Mlati, Yogyakarta">
                    <img src="/images/kosIbuNasocha/2.jpg" alt="Kos Ibu Nasocha">
                    <h3>Kos Ibu Nasocha</h3>
                    <h4 style="font-size: 0.9rem; color: gray;">Jl. Sinom No. 104e Karangjati, Mlati, Sleman, Yogyakarta.</h4>
                    <p>Rp 4.400.000/Tahun</p>
                    <a href="/kosIbuNasocha" class="view-button">Lihat Detail Kos</a>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Dropdown functionality
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        dropdownToggle.addEventListener('click', () => {
            dropdownMenu.classList.toggle('show');
        });

        window.addEventListener('click', (e) => {
            if (!e.target.matches('.dropdown-toggle')) {
                dropdownMenu.classList.remove('show');
            }
        });

        // Pencarian
        const searchInput = document.getElementById('searchInput');
        const recommendationGrid = document.getElementById('recommendationGrid');
        const cards = recommendationGrid.getElementsByClassName('card');

        // Elemen untuk menampilkan pesan "Kos tidak ditemukan"
        const noResultMessage = document.createElement('p');
        noResultMessage.textContent = 'Kos tidak ditemukan';
        noResultMessage.style.textAlign = 'center';
        noResultMessage.style.fontSize = '1.2rem';
        noResultMessage.style.color = '#555';
        noResultMessage.style.display = 'none';
        recommendationGrid.parentElement.appendChild(noResultMessage);

        searchInput.addEventListener('input', function () {
            const query = searchInput.value.toLowerCase();
            let hasResult = false;

            for (let i = 0; i < cards.length; i++) {
            const card = cards[i];
            const nama = card.getAttribute('data-nama').toLowerCase();
            const lokasi = card.getAttribute('data-lokasi').toLowerCase();

            // Tampilkan atau sembunyikan card berdasarkan pencarian
            if (nama.includes(query) || lokasi.includes(query)) {
                card.style.display = 'block'; // Tampilkan card
                hasResult = true;
            } else {
                card.style.display = 'none'; // Sembunyikan card
            }
            }

            // Tampilkan atau sembunyikan pesan "Kos tidak ditemukan"
            if (hasResult) {
            noResultMessage.style.display = 'none';
            } else {
            noResultMessage.style.display = 'block';
            }
        });
    </script>
</body>

</html>
