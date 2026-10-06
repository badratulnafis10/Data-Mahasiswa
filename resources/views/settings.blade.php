<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaturan - SMART</title>

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
            margin-bottom: 15px;
        }

        /* TOMBOL KEMBALI */

        .back-button {
            display: inline-block;
            text-decoration: none;
            background: #7056d8;
            color: white;
            padding: 12px 18px;
            border-radius: 10px;
            font-size: 14px;
            margin-bottom: 30px;
            transition: 0.3s;
        }

        .back-button:hover {
            background: #5e45c2;
        }

        /* SETTINGS CARD */

        .settings-card {
            background: #f8f7fc;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 25px;
        }

        .settings-card h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 25px;
        }

        /* INFORMASI AKUN */

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 17px 0;
            border-bottom: 1px solid #e5e3ed;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: #777;
            font-size: 16px;
        }

        .info-value {
            color: #333;
            font-size: 16px;
            font-weight: bold;
        }

        /* PENGATURAN */

        .setting-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 0;
            border-bottom: 1px solid #e5e3ed;
        }

        .setting-row:last-child {
            border-bottom: none;
        }

        .setting-text {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .setting-title {
            color: #333;
            font-size: 16px;
            font-weight: bold;
        }

        .setting-description {
            color: #999;
            font-size: 13px;
        }

        /* SWITCH */

        .switch {
            position: relative;
            width: 48px;
            height: 26px;
            flex-shrink: 0;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            inset: 0;
            background: #d4d4d4;
            border-radius: 30px;
            cursor: pointer;
            transition: 0.3s;
        }

        .slider:before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            left: 3px;
            top: 3px;
            background: white;
            border-radius: 50%;
            transition: 0.3s;
        }

        .switch input:checked + .slider {
            background: #7056d8;
        }

        .switch input:checked + .slider:before {
            transform: translateX(22px);
        }

        /* BUTTON */

        .save-button {
            margin-top: 25px;
            padding: 12px 22px;
            border: none;
            border-radius: 10px;
            background: #7056d8;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .save-button:hover {
            background: #5e45c2;
        }

        /* RESPONSIVE */

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

            .settings-card {
                padding: 15px;
            }

            .info-row {
                gap: 15px;
            }

            .setting-row {
                gap: 15px;
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

            <a href="/courses">
                📚 Mata Kuliah
            </a>

            <a href="/calendar">
                📅 Kalender
            </a>

            <a href="/settings" class="active">
                ⚙️ Pengaturan
            </a>

            <a href="/logout">
                🚪 Keluar
            </a>

        </div>

    </aside>

    <!-- MAIN -->

    <main class="main">

        <div class="topbar">

            <div class="breadcrumb">
                Dashboard > Pengaturan
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

        <h1>
            Pengaturan
        </h1>

        <p class="subtitle">
            Kelola informasi dan pengaturan aplikasi
        </p>

        <a href="/" class="back-button">
            ← Kembali ke Dashboard
        </a>

        <!-- INFORMASI AKUN -->

        <div class="settings-card">

            <h2>
                Informasi Akun
            </h2>

            <div class="info-row">

                <span class="info-label">
                    Nama
                </span>

                <span class="info-value">
                    Badratul Nafis
                </span>

            </div>

            <div class="info-row">

                <span class="info-label">
                    NPM
                </span>

                <span class="info-value">
                    24105111143
                </span>

            </div>

            <div class="info-row">

                <span class="info-label">
                    Semester
                </span>

                <span class="info-value">
                    5
                </span>

            </div>

            <div class="info-row">

                <span class="info-label">
                    Status
                </span>

                <span class="info-value">
                    Mahasiswa
                </span>

            </div>

        </div>

        <!-- PENGATURAN NOTIFIKASI -->

        <div class="settings-card">

            <h2>
                Pengaturan Notifikasi
            </h2>

            <!-- NOTIFIKASI -->

            <div class="setting-row">

                <div class="setting-text">

                    <div class="setting-title">
                        Notifikasi
                    </div>

                    <div class="setting-description">
                        Aktifkan pemberitahuan dari aplikasi
                    </div>

                </div>

                <label class="switch">

                    <input
                        type="checkbox"
                        checked
                    >

                    <span class="slider"></span>

                </label>

            </div>

            <!-- PENGINGAT TUGAS -->

            <div class="setting-row">

                <div class="setting-text">

                    <div class="setting-title">
                        Pengingat Tugas
                    </div>

                    <div class="setting-description">
                        Ingatkan ketika ada tugas
                    </div>

                </div>

                <label class="switch">

                    <input
                        type="checkbox"
                        checked
                    >

                    <span class="slider"></span>

                </label>

            </div>

            <!-- PENGINGAT UJIAN -->

            <div class="setting-row">

                <div class="setting-text">

                    <div class="setting-title">
                        Pengingat Ujian
                    </div>

                    <div class="setting-description">
                        Ingatkan jadwal ujian
                    </div>

                </div>

                <label class="switch">

                    <input
                        type="checkbox"
                    >

                    <span class="slider"></span>

                </label>

            </div>

            <!-- MODE TAMPILAN -->

            <div class="setting-row">

                <div class="setting-text">

                    <div class="setting-title">
                        Mode Tampilan
                    </div>

                    <div class="setting-description">
                        Atur tampilan aplikasi
                    </div>

                </div>

                <label class="switch">

                    <input
                        type="checkbox"
                    >

                    <span class="slider"></span>

                </label>

            </div>

            <button
                type="button"
                class="save-button"
                onclick="simpanPengaturan()"
            >
                Simpan Pengaturan
            </button>

        </div>

    </main>

</div>

<script>

    function simpanPengaturan() {

        alert("Pengaturan berhasil disimpan!");

    }

</script>

</body>

</html>