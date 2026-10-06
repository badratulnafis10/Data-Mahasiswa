<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mata Kuliah - SMART</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #7056d8;
            min-height: 100vh;
            padding: 30px;
        }

        .dashboard {
            max-width: 1400px;
            margin: auto;
            background: white;
            min-height: 90vh;
            border-radius: 25px;
            display: flex;
            overflow: hidden;
        }

        /* SIDEBAR */

        .sidebar {
            width: 250px;
            background: #f8f7fc;
            padding: 40px 30px;
        }

        .logo {
            font-size: 38px;
            font-weight: bold;
            color: #7056d8;
            text-align: center;
            margin-bottom: 70px;
        }

        .menu a {
            display: block;
            text-decoration: none;
            color: #666;
            font-size: 18px;
            padding: 18px 20px;
            margin-bottom: 12px;
            border-radius: 15px;
            transition: 0.3s;
        }

        .menu a:hover {
            background: #eee9ff;
            color: #7056d8;
        }

        .menu a.active {
            background: #7056d8;
            color: white;
        }

        /* MAIN */

        .main {
            flex: 1;
            padding: 40px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 45px;
        }

        .breadcrumb {
            color: #888;
            font-size: 15px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .profile-img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #7056d8;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .profile-name {
            font-weight: bold;
            color: #333;
        }

        h1 {
            font-size: 36px;
            color: #222;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #888;
            margin-bottom: 20px;
        }

        /* TOMBOL KEMBALI */

        .back-button {
            display: inline-block;
            text-decoration: none;
            background: #7056d8;
            color: white;
            padding: 10px 18px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .back-button:hover {
            background: #5e45c2;
        }

        /* COURSE */

        .course-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .course-card {
            background: #f8f7fc;
            border-radius: 20px;
            padding: 25px;
            transition: 0.3s;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }

        .course-icon {
            width: 55px;
            height: 55px;
            background: #eee9ff;
            color: #7056d8;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            margin-bottom: 20px;
        }

        .course-card h2 {
            font-size: 20px;
            color: #333;
            margin-bottom: 15px;
        }

        .course-card p {
            color: #777;
            margin-bottom: 8px;
        }

        .course-info {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #ddd;
        }

        .course-info span {
            font-size: 14px;
            color: #777;
        }

        .sks {
            color: #7056d8 !important;
            font-weight: bold;
        }

        /* RESPONSIVE */

        @media (max-width: 1000px) {

            .course-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 900px) {

            body {
                padding: 10px;
            }

            .dashboard {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .menu {
                display: flex;
                flex-wrap: wrap;
            }

            .menu a {
                margin-right: 5px;
            }

            .main {
                padding: 25px 20px;
            }

        }

        @media (max-width: 600px) {

            .course-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>

<div class="dashboard">


    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div class="logo">
            SMART
        </div>


        <div class="menu">

            <a href="/">
                📊 Dashboard
            </a>


            <a href="/students">
                👥 Mahasiswa
            </a>


            <a href="/courses" class="active">
                📚 Mata Kuliah
            </a>


            <a href="/calendar">
                📅 Kalender
            </a>


            <a href="/settings">
                ⚙️ Pengaturan
            </a>


            <a href="/logout">
                🚪 Keluar
            </a>

        </div>

    </aside>



    <!-- MAIN -->

    <main class="main">


        <!-- TOPBAR -->

        <div class="topbar">

            <div class="breadcrumb">
                Dashboard > Mata Kuliah
            </div>


            <div class="profile">

                <div class="profile-img">
                    BN
                </div>


                <div class="profile-name">
                    Badratul Nafis
                </div>

            </div>

        </div>



        <!-- JUDUL -->

        <h1>
            Mata Kuliah
        </h1>


        <p class="subtitle">
            Daftar mata kuliah Semester 5
        </p>


        <!-- KEMBALI -->

        <a href="/" class="back-button">
            ← Kembali ke Dashboard
        </a>



        <!-- DAFTAR MATA KULIAH -->

        <div class="course-grid">


            <!-- 1 -->

            <div class="course-card">

                <div class="course-icon">
                    💻
                </div>

                <h2>
                    Algoritma Pemrograman
                </h2>

                <p>
                    Mata kuliah pemrograman dan algoritma
                </p>

                <div class="course-info">

                    <span>
                        Semester 5
                    </span>

                    <span class="sks">
                        3 SKS
                    </span>

                </div>

            </div>



            <!-- 2 -->

            <div class="course-card">

                <div class="course-icon">
                    🌐
                </div>

                <h2>
                    Pemrograman Web
                </h2>

                <p>
                    Pengembangan aplikasi berbasis web
                </p>

                <div class="course-info">

                    <span>
                        Semester 5
                    </span>

                    <span class="sks">
                        3 SKS
                    </span>

                </div>

            </div>



            <!-- 3 -->

            <div class="course-card">

                <div class="course-icon">
                    🗄️
                </div>

                <h2>
                    Basis Data
                </h2>

                <p>
                    Pengelolaan dan perancangan database
                </p>

                <div class="course-info">

                    <span>
                        Semester 5
                    </span>

                    <span class="sks">
                        3 SKS
                    </span>

                </div>

            </div>



            <!-- 4 -->

            <div class="course-card">

                <div class="course-icon">
                    ⚙️
                </div>

                <h2>
                    Sistem Operasi
                </h2>

                <p>
                    Konsep dan pengelolaan sistem operasi
                </p>

                <div class="course-info">

                    <span>
                        Semester 5
                    </span>

                    <span class="sks">
                        3 SKS
                    </span>

                </div>

            </div>



            <!-- 5 -->

            <div class="course-card">

                <div class="course-icon">
                    🖥️
                </div>

                <h2>
                    Interaksi Manusia dan Komputer
                </h2>

                <p>
                    Perancangan interaksi pengguna dan sistem
                </p>

                <div class="course-info">

                    <span>
                        Semester 5
                    </span>

                    <span class="sks">
                        2 SKS
                    </span>

                </div>

            </div>



            <!-- 6 -->

            <div class="course-card">

                <div class="course-icon">
                    📊
                </div>

                <h2>
                    Sistem Informasi
                </h2>

                <p>
                    Konsep dan penerapan sistem informasi
                </p>

                <div class="course-info">

                    <span>
                        Semester 5
                    </span>

                    <span class="sks">
                        3 SKS
                    </span>

                </div>

            </div>


        </div>


    </main>

</div>


</body>

</html>