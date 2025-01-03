<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 100px 4%;
    box-sizing: border-box;
}

button {
    background-color: #ff511c;
    border: 0;
    padding: 10px 40px;
    border-radius: 15px;
    color: white;
    transition: all .3s;
}

button:hover {
    cursor: pointer;
    scale: 1.1;
}

#navbar {
    padding: 25px 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    height: 20px;
    background-color: white;
    font-family: sans-serif;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    z-index: 9999;
}

.black-text {
    color: black;
}

.blue-text {
    color: #0a69ca;
}

#navbar ul li {
    list-style: none;
    display: inline-block;
    margin: 20px;
    position: relative;
    right: 30px;
}

#navbar h1 {
    font-size: 36px;
    font-family: sans-serif;
    font-weight: bold;
}

#nav-aktif {
    background-color: black;
    z-index: 99999;
    transition: all 300ms ease;
}

.menu {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 30px;
}

.menu a {
    text-decoration: none;
    color: #000000;
    font-size: 17px;
    font-weight: bold;
    transition: all 0.3s ease;
}

.menu .dropdown {
    position: relative;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 10px;
    justify-content: center;
}

.dropdown img {
    object-fit: contain;
    display: block;
    width: 38px;
    height: 38px;
    cursor: pointer;
    object-position: center;
    transition: all .5s ease;
}

.dropdown img:active {
    transform: scale(0.9);
}

@keyframes slideDown {
    0% {
        transform: translateY(-20px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

.dropdown-menu {
    animation-timing-function: ease-out;
    animation-duration: 0.3s;
    display: none;
    position: absolute;
    top: 60px;
    right: 0;
    width: 200px;
    background: #ffffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    overflow: hidden;
    z-index: 1000;
}

.dropdown-menu.show {
    display: block;
    animation-name: slideDown;
}

.dropdown-item {
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    color: #333;
    font-size: 14px;
}

.dropdown-item:hover {
    background-color: #f1f1f1;
}

.menu-dropdown-content {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: white;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    min-width: 160px;
    border-radius: 5px;
    overflow: hidden;
}

.menu-dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s ease;
}

.menu-dropdown-content a:hover {
    background-color: #f1f1f1;
}

.menu-dropdown:hover .menu-dropdown-content {
    display: block;
}

.menu a:hover {
    color: #0d83fd;
}
        .container {
            max-width: 1300px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #007BFF;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .social-icons a {
            color: #fff;
            background-color: #007BFF;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .social-icons a:hover {
            background-color: #0056b3;
        }
    </style>
    <!-- Include Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
    <div class="container">
        <h1>Tentang Kami</h1>
        <p>Selamat datang di RumahKita, solusi modern untuk mencari dan memesan tempat tinggal dengan nyaman, cepat, dan terpercaya. Kami hadir sebagai platform yang membantu Anda menemukan kos atau tempat tinggal yang sesuai dengan kebutuhan Anda, baik dari segi lokasi, fasilitas, maupun anggaran.</p>
        <p>Visi Kami
            Menjadi platform reservasi kos terbaik
            yang menghubungkan pemilik kos dan penyewa dengan mudah, transparan, dan aman.</p>
        <p>Misi Kami
            Memberikan informasi lengkap dan akurat mengenai pilihan kos,
            Memudahkan proses reservasi kos secara online, kapan saja dan di mana saja,
            Membangun kepercayaan antara pemilik kos dan penyewa dengan sistem yang transparan,
            Mendukung komunitas dengan menciptakan pengalaman tinggal yang lebih baik.</p>
        <p></p>

        <div class="social-icons">
            <a href="https://www.instagram.com/derywhy_" target="_blank" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://wa.me/qr/J2R34HWBWC4LN1" target="_blank" title="WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://github.com/DeryWahyu" target="_blank" title="GitHub">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://linkedin.com/in/derywahyuperdana" target="_blank" title="LinkedIn">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
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
    </script>
</body>
</html>
