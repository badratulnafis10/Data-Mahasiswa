<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - SMART</title>

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
            margin-bottom: 50px;
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
            margin-bottom: 10px;
            color: #222;
        }

        .subtitle {
            color: #888;
            margin-bottom: 30px;
        }

        /* CARD */

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 35px;
        }

        .card {
            background: #f8f7fc;
            padding: 25px;
            border-radius: 18px;
        }

        .card h3 {
            color: #777;
            font-size: 15px;
            margin-bottom: 12px;
        }

        .card .number {
            font-size: 32px;
            font-weight: bold;
            color: #7056d8;
        }

        /* TABLE */

        .table-card {
            background: #f8f7fc;
            padding: 25px;
            border-radius: 18px;
            overflow-x: auto;
        }

        .table-card h2 {
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }

        th {
            text-align: left;
            padding: 15px;
            color: #666;
            border-bottom: 1px solid #ddd;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            color: #555;
        }

        tr:hover {
            background: white;
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

            .cards {
                grid-template-columns: 1fr;
            }

            .main {
                padding: 25px 20px;
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

            <a href="/" class="active">
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

        <div class="topbar">

            <div class="breadcrumb">
                Dashboard
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
            Dashboard
        </h1>

        <p class="subtitle">
            Selamat datang di Sistem Manajemen Akademik Terpadu
        </p>


        <!-- STATISTIK -->

        <div class="cards">

            <div class="card">

                <h3>
                    Total Mahasiswa
                </h3>

                <div class="number">
                    {{ $students->count() }}
                </div>

            </div>


            <div class="card">

                <h3>
                    Rata-rata Nilai
                </h3>

                <div class="number">

                    {{ $students->count() > 0 ? round($students->avg('grade')) : 0 }}

                </div>

            </div>


            <div class="card">

                <h3>
                    Total Proyek
                </h3>

                <div class="number">

                    {{ $students->sum('projects') }}

                </div>

            </div>

        </div>


        <!-- DATA MAHASISWA -->

        <div class="table-card">

            <h2>
                Data Mahasiswa
            </h2>

            <table>

                <thead>

                    <tr>

                        <th>No</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Tugas</th>
                        <th>Kehadiran</th>
                        <th>Proyek</th>
                        <th>Nilai</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($students as $index => $student)

                    <tr>

                        <td>
                            {{ $index + 1 }}
                        </td>

                        <td>
                            {{ $student->name }}
                        </td>

                        <td>
                            {{ $student->group }}
                        </td>

                        <td>
                            {{ $student->homeworks }}
                        </td>

                        <td>
                            {{ $student->attendance }}
                        </td>

                        <td>
                            {{ $student->projects }}
                        </td>

                        <td>
                            <strong>
                                {{ $student->grade }}
                            </strong>
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </main>

</div>

</body>

</html>