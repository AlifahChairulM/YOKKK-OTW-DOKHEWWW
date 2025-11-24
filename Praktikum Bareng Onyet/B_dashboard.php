<?php
// index.php
?>

<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>PawCare - Beranda</title>

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f5f6fa;
        }

        /* =============================
        NAVBAR
    ============================== */
        .navbar {
            width: 100%;
            padding: 18px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            border-bottom: 1px solid #e8e8e8;
            box-sizing: border-box;
        }

        .nav-left img {
            height: 45px;
        }

        .nav-right a {
            margin-left: 22px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: .2s;
        }

        .nav-right a:hover {
            color: #d90b64;
        }

        .btn-daftar {
            background: #d90b64;
            color: white !important;
            padding: 8px 14px;
            border-radius: 7px;
            font-weight: 500;
        }

        /* =============================
        CONTENT WRAPPER
    ============================== */
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 10px;
        }

        .title-area {
            text-align: center;
            margin-bottom: 40px;
        }

        .title-area h2 {
            font-size: 26px;
            font-weight: 600;
            margin: 0;
        }

        .title-area p {
            margin-top: 6px;
            color: #777;
        }

        /* =============================
        MENU CARD GRID
    ============================== */
        .menu-section {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        a.menu-link {
            text-decoration: none;
            color: inherit;
        }

        .menu-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: .2s;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e8e8e8;
        }

        .menu-card:hover {
            transform: scale(1.03);
            background: #fdfdfd;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }

        .menu-card img {
            width: 85%;
            border-radius: 100%;
        }

        .menu-card h3 {
            margin-top: 14px;
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .menu-section {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .menu-section {
                grid-template-columns: 1fr;
            }
        }
    </style>

</head>

<body>

    <!-- =============================
    NAVBAR
============================= -->

    <div class="navbar">
        <div class="nav-left">
            <a href="B_dashboard.php">
                <img src="logo.jpg" alt="Logo Abal-abal">
            </a>
        </div>
        <div class="nav-right">
            <a href="#">Tentang Kami</a>
            <a href="#">FAQ</a>
            <a href="#" class="btn-daftar">Daftar untuk pemilik hewan</a>
        </div>
    </div>

    <!-- =============================
    CONTENT
============================= -->

    <div class="container">

        <div class="title-area">
            <h2>Selamat Datang di PawAlBi</h2>
            <p>Pilih layanan yang kamu butuhkan</p>
        </div>

        <div class="menu-section">

            <!-- CARD 1 -->
            <a class="menu-link" href="dashboard.php">
                <div class="menu-card">
                    <img src="https://via.placeholder.com/350x350?text=Online+Vet" alt="">
                    <h3>Temui Online Dokter Hewan</h3>
                </div>
            </a>

            <!-- CARD 2 -->
            <a class="menu-link" href="dashboard.php">
                <div class="menu-card">
                    <img src="https://via.placeholder.com/350x350?text=Klinik" alt="">
                    <h3>Jadwalkan ke Klinik</h3>
                </div>
            </a>

            <!-- CARD 3 -->
            <a class="menu-link" href="dashboard.php">
                <div class="menu-card">
                    <img src="https://via.placeholder.com/350x350?text=Layanan+Kami" alt="">
                    <h3>Layanan Kami</h3>
                </div>
            </a>

            <!-- CARD 4 -->
            <a class="menu-link" href="dashboard.php">
                <div class="menu-card">
                    <img src="https://via.placeholder.com/350x350?text=Klinik+Hewan" alt="">
                    <h3>Klinik Dokter Hewan</h3>
                </div>
            </a>

        </div>

    </div>

</body>

</html>