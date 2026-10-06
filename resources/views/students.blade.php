<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mahasiswa - SMART</title>

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

        /* =========================
           SIDEBAR
        ========================= */

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

        /* =========================
           MAIN
        ========================= */

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

        /* =========================
           TOMBOL KEMBALI
        ========================= */

        .back-button {
            display: inline-block;
            text-decoration: none;
            background: #7056d8;
            color: white;
            padding: 10px 18px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .back-button:hover {
            background: #5e45c2;
        }

        /* =========================
           ALERT
        ========================= */

        .alert-success {
            background: #e8f8ed;
            color: #218838;
            padding: 15px 18px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .alert-error {
            background: #ffe8e8;
            color: #c62828;
            padding: 15px 18px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .alert-error ul {
            margin-left: 20px;
        }

        /* =========================
           PENCARIAN
        ========================= */

        .search-box {
            background: #f8f7fc;
            padding: 20px;
            border-radius: 18px;
            margin-bottom: 25px;
        }

        .search-box label {
            display: block;
            font-weight: bold;
            color: #444;
            margin-bottom: 10px;
        }

        .search-input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
        }

        .search-input:focus {
            border-color: #7056d8;
        }

        /* =========================
           FORM
        ========================= */

        .form-card {
            background: #f8f7fc;
            padding: 25px;
            border-radius: 18px;
            margin-bottom: 30px;
        }

        .form-card h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            color: #555;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .form-group input {
            padding: 13px;
            border: 1px solid #ddd;
            border-radius: 9px;
            outline: none;
        }

        .form-group input:focus {
            border-color: #7056d8;
        }

        .button-group {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }

        .btn {
            border: none;
            padding: 12px 18px;
            border-radius: 9px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-primary {
            background: #7056d8;
            color: white;
        }

        .btn-primary:hover {
            background: #5e45c2;
        }

        .btn-cancel {
            background: #ddd;
            color: #555;
        }

        .btn-edit {
            background: #eee9ff;
            color: #7056d8;
        }

        .btn-delete {
            background: #ffe5e5;
            color: #d32f2f;
        }

        /* =========================
           TABLE
        ========================= */

        .table-card {
            background: white;
            border: 1px solid #eee;
            border-radius: 18px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 900px;
        }

        th {
            background: #f8f7fc;
            color: #555;
            padding: 16px;
            text-align: left;
        }

        td {
            padding: 16px;
            border-top: 1px solid #eee;
            color: #555;
        }

        tr:hover {
            background: #faf9ff;
        }

        .action {
            display: flex;
            gap: 8px;
        }

        .action .btn {
            padding: 8px 12px;
            font-size: 13px;
        }

        .no-result {
            text-align: center;
            padding: 25px;
            color: #999;
        }

        /* =========================
           RESPONSIVE
        ========================= */

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

            .form-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>

<div class="dashboard">


    <!-- =========================
         SIDEBAR
    ========================= -->

    <aside class="sidebar">

        <div class="logo">
            SMART
        </div>


        <div class="menu">

            <a href="/">
                📊 Dashboard
            </a>


            <a href="/students" class="active">
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



    <!-- =========================
         MAIN
    ========================= -->

    <main class="main">


        <!-- TOPBAR -->

        <div class="topbar">

            <div class="breadcrumb">
                Dashboard > Mahasiswa
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
            Data Mahasiswa
        </h1>


        <p class="subtitle">
            Kelola data mahasiswa
        </p>



        <!-- KEMBALI KE DASHBOARD -->

        <a href="/" class="back-button">
            ← Kembali ke Dashboard
        </a>



        <!-- PESAN BERHASIL -->

        @if(session('success'))

            <div class="alert-success">

                {{ session('success') }}

            </div>

        @endif



        <!-- PESAN ERROR -->

        @if($errors->any())

            <div class="alert-error">

                <ul>

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif



        <!-- =========================
             PENCARIAN
        ========================= -->

        <div class="search-box">

            <label for="searchStudent">
                🔍 Cari Mahasiswa
            </label>


            <input
                type="text"
                id="searchStudent"
                class="search-input"
                placeholder="Ketik nama atau jurusan..."
            >

        </div>



        <!-- =========================
             FORM MAHASISWA
        ========================= -->

        <div class="form-card">


            @if($editStudent)


                <!-- EDIT DATA -->

                <h2>
                    Edit Data Mahasiswa
                </h2>


                <form
                    action="/students/{{ $editStudent->id }}"
                    method="POST"
                >

                    @csrf

                    @method('PUT')


                    <div class="form-grid">


                        <!-- NAMA -->

                        <div class="form-group">

                            <label>
                                Nama Mahasiswa
                            </label>


                            <input
                                type="text"
                                name="name"
                                value="{{ $editStudent->name }}"
                                required
                            >

                        </div>



                        <!-- JURUSAN -->

                        <div class="form-group">

                            <label>
                                Jurusan
                            </label>


                            <input
                                type="text"
                                name="group"
                                value="{{ $editStudent->group }}"
                                required
                            >

                        </div>



                        <!-- TUGAS -->

                        <div class="form-group">

                            <label>
                                Tugas
                            </label>


                            <input
                                type="number"
                                name="homeworks"
                                value="{{ $editStudent->homeworks }}"
                                min="0"
                                max="100"
                                required
                            >

                        </div>



                        <!-- KEHADIRAN -->

                        <div class="form-group">

                            <label>
                                Kehadiran
                            </label>


                            <input
                                type="number"
                                name="attendance"
                                value="{{ $editStudent->attendance }}"
                                min="0"
                                required
                            >

                        </div>



                        <!-- PROYEK -->

                        <div class="form-group">

                            <label>
                                Proyek
                            </label>


                            <input
                                type="number"
                                name="projects"
                                value="{{ $editStudent->projects }}"
                                min="0"
                                required
                            >

                        </div>



                        <!-- NILAI -->

                        <div class="form-group">

                            <label>
                                Nilai
                            </label>


                            <input
                                type="number"
                                name="grade"
                                value="{{ $editStudent->grade }}"
                                min="0"
                                max="100"
                                required
                            >

                        </div>

                    </div>



                    <!-- BUTTON -->

                    <div class="button-group">

                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            Simpan Perubahan
                        </button>


                        <a
                            href="/students"
                            class="btn btn-cancel"
                        >
                            Batal
                        </a>

                    </div>


                </form>


            @else


                <!-- TAMBAH DATA -->

                <h2>
                    Tambah Mahasiswa
                </h2>


                <form
                    action="/students"
                    method="POST"
                >

                    @csrf


                    <div class="form-grid">


                        <!-- NAMA -->

                        <div class="form-group">

                            <label>
                                Nama Mahasiswa
                            </label>


                            <input
                                type="text"
                                name="name"
                                placeholder="Masukkan nama"
                                required
                            >

                        </div>



                        <!-- JURUSAN -->

                        <div class="form-group">

                            <label>
                                Jurusan
                            </label>


                            <input
                                type="text"
                                name="group"
                                placeholder="Masukkan jurusan"
                                required
                            >

                        </div>



                        <!-- TUGAS -->

                        <div class="form-group">

                            <label>
                                Tugas
                            </label>


                            <input
                                type="number"
                                name="homeworks"
                                placeholder="0 - 100"
                                min="0"
                                max="100"
                                required
                            >

                        </div>



                        <!-- KEHADIRAN -->

                        <div class="form-group">

                            <label>
                                Kehadiran
                            </label>


                            <input
                                type="number"
                                name="attendance"
                                placeholder="Jumlah kehadiran"
                                min="0"
                                required
                            >

                        </div>



                        <!-- PROYEK -->

                        <div class="form-group">

                            <label>
                                Proyek
                            </label>


                            <input
                                type="number"
                                name="projects"
                                placeholder="Jumlah proyek"
                                min="0"
                                required
                            >

                        </div>



                        <!-- NILAI -->

                        <div class="form-group">

                            <label>
                                Nilai
                            </label>


                            <input
                                type="number"
                                name="grade"
                                placeholder="0 - 100"
                                min="0"
                                max="100"
                                required
                            >

                        </div>

                    </div>



                    <!-- BUTTON -->

                    <div class="button-group">

                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            + Tambah Mahasiswa
                        </button>

                    </div>


                </form>


            @endif


        </div>



        <!-- =========================
             TABEL DATA
        ========================= -->

        <div class="table-card">

            <table id="studentTable">


                <!-- HEADER -->

                <thead>

                    <tr>

                        <th>
                            No
                        </th>

                        <th>
                            Nama
                        </th>

                        <th>
                            Jurusan
                        </th>

                        <th>
                            Tugas
                        </th>

                        <th>
                            Kehadiran
                        </th>

                        <th>
                            Proyek
                        </th>

                        <th>
                            Nilai
                        </th>

                        <th>
                            Aksi
                        </th>

                    </tr>

                </thead>



                <!-- DATA -->

                <tbody>


                    @foreach($students as $index => $student)


                    <tr class="student-row">


                        <!-- NO -->

                        <td>
                            {{ $index + 1 }}
                        </td>



                        <!-- NAMA -->

                        <td class="student-name">
                            {{ $student->name }}
                        </td>



                        <!-- JURUSAN -->

                        <td class="student-group">
                            {{ $student->group }}
                        </td>



                        <!-- TUGAS -->

                        <td>
                            {{ $student->homeworks }}
                        </td>



                        <!-- KEHADIRAN -->

                        <td>
                            {{ $student->attendance }}
                        </td>



                        <!-- PROYEK -->

                        <td>
                            {{ $student->projects }}
                        </td>



                        <!-- NILAI -->

                        <td>

                            <strong>
                                {{ $student->grade }}
                            </strong>

                        </td>



                        <!-- AKSI -->

                        <td>

                            <div class="action">


                                <!-- EDIT -->

                                <a
                                    href="/students/edit/{{ $student->id }}"
                                    class="btn btn-edit"
                                >
                                    Edit
                                </a>



                                <!-- HAPUS -->

                                <form
                                    action="/students/{{ $student->id }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data mahasiswa ini?')"
                                >

                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="btn btn-delete"
                                    >
                                        Hapus
                                    </button>


                                </form>


                            </div>

                        </td>


                    </tr>


                    @endforeach



                    <!-- TIDAK ADA HASIL -->

                    <tr
                        id="noResult"
                        style="display: none;"
                    >

                        <td
                            colspan="8"
                            class="no-result"
                        >
                            Mahasiswa tidak ditemukan.
                        </td>

                    </tr>


                </tbody>

            </table>

        </div>


    </main>

</div>



<!-- =========================
     JAVASCRIPT PENCARIAN
========================= -->

<script>

    const searchInput =
        document.getElementById('searchStudent');


    const rows =
        document.querySelectorAll('.student-row');


    const noResult =
        document.getElementById('noResult');



    searchInput.addEventListener(
        'keyup',
        function () {

            const keyword =
                this.value
                    .toLowerCase()
                    .trim();


            let found = false;



            rows.forEach(
                function (row) {


                    const name =
                        row
                            .querySelector('.student-name')
                            .textContent
                            .toLowerCase();


                    const group =
                        row
                            .querySelector('.student-group')
                            .textContent
                            .toLowerCase();



                    if (
                        name.includes(keyword) ||
                        group.includes(keyword)
                    ) {

                        row.style.display = '';

                        found = true;

                    } else {

                        row.style.display = 'none';

                    }

                }
            );



            if (
                found ||
                keyword === ''
            ) {

                noResult.style.display = 'none';

            } else {

                noResult.style.display = 'table-row';

            }

        }
    );

</script>


</body>

</html>