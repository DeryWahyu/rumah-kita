<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bantuan</title>
    <link rel="stylesheet" href="/css/styleBantuan.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
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
                <img src="/images/user.png" alt="User" class="dropdown-toggle" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/"><i class="ri-logout-box-line"></i> Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="help-section">
        <div class="container">
            <h1>Butuh Bantuan?</h1>
            <div class="help-items">
                <div class="help-item">
                    <i class="ri-question-line"></i>
                    <h3>Cara Reservasi</h3>
                    <p>Anda dapat memilih menu home pada kemudian cari kos yang sesuai dengan keinginan anda.</p>
                </div>
                <div class="help-item">
                    <i class="ri-secure-payment-line"></i>
                    <h3>Pemesanan Mudah</h3>
                    <p>Informasi tentang metode pembayaran yang tersedia dan keamanannya.</p>
                </div>
                <div class="help-item">
                    <i class="ri-information-line"></i>
                    <h3>Tampilan Dinamis</h3>
                    <p>Pelajari cara menyesuaikan preferensi tampilan.</p>
                </div>
                <div class="help-item">
                    <i class="ri-bug-line"></i>
                    <h3>Terjadi Bug</h3>
                    <p>Anda dapat menghubungi kami melalui bagian menu kontak apabila menemukan masalah atau bug.</p>
                </div>
                <div class="help-item">
                    <i class="ri-settings-3-line"></i>
                    <h3>Fitur Mudah</h3>
                    <p>Pelajari cara mengelola profil Anda, mengganti kata sandi, dan lainnya.</p>
                </div>
                <div class="help-item">
                    <i class="ri-lock-line"></i>
                    <h3>Keamanan Akun</h3>
                    <p>Pelajari cara menjaga keamanan akun Anda dan melindungi informasi pribadi Anda.</p>
                </div>
                <div class="help-item">
                    <i class="ri-question-line"></i>
                    <h3>Pertanyaan Umum</h3>
                    <p>Temukan jawaban dari pertanyaan yang sering diajukan oleh pengguna kami.</p>
                </div>
                <div class="help-item">
                    <i class="ri-customer-service-2-line"></i>
                    <h3>Hubungi Kami</h3>
                    <p>Jika Anda tidak menemukan jawaban, tim kami siap membantu Anda 24/7.</p>
                </div>
            </div>
        </div>
    </section>
    <script>

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

        document.querySelectorAll('.accordion-header').forEach(button => {
            button.addEventListener('click', () => {
            const content = button.nextElementSibling;

            button.classList.toggle('active');

            if (content.style.display === 'block') {
                content.style.display = 'none';
            } else {
                content.style.display = 'block';
            }
            });
        });
    </script>
</body>
</html>
