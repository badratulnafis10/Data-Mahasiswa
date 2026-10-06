<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kalender - SMART</title>

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

        /* KALENDER */

        .calendar-card {
            background: #f8f7fc;
            border-radius: 20px;
            padding: 30px;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .calendar-header h2 {
            color: #333;
            font-size: 24px;
        }

        .calendar-buttons {
            display: flex;
            gap: 10px;
        }

        .calendar-buttons button {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 10px;
            background: #7056d8;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        .calendar-buttons button:hover {
            background: #5e45c2;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }

        .day-name {
            text-align: center;
            font-weight: bold;
            color: #777;
            padding: 12px 5px;
        }

        .day {
            min-height: 90px;
            background: white;
            border-radius: 12px;
            padding: 12px;
            color: #555;
            border: 1px solid #eee;
        }

        .day.empty {
            background: transparent;
            border: none;
        }

        .date-number {
            font-weight: bold;
            margin-bottom: 8px;
        }

        .event {
            background: #eee9ff;
            color: #7056d8;
            font-size: 11px;
            padding: 5px;
            border-radius: 6px;
            margin-top: 5px;
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

            .calendar-grid {
                gap: 5px;
            }

            .day {
                min-height: 70px;
                padding: 8px;
            }

        }

        @media (max-width: 600px) {

            .calendar-card {
                padding: 15px;
                overflow-x: auto;
            }

            .calendar-grid {
                min-width: 650px;
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

            <a href="/calendar" class="active">
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
                Dashboard > Kalender
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
            Kalender
        </h1>

        <p class="subtitle">
            Jadwal dan kegiatan akademik
        </p>

        <a href="/" class="back-button">
            ← Kembali ke Dashboard
        </a>

        <!-- KALENDER -->

        <div class="calendar-card">

            <div class="calendar-header">

                <h2 id="monthYear">
                    Oktober 2026
                </h2>

                <div class="calendar-buttons">

                    <button onclick="previousMonth()">
                        ‹
                    </button>

                    <button onclick="nextMonth()">
                        ›
                    </button>

                </div>

            </div>

            <div class="calendar-grid" id="calendarGrid">
            </div>

        </div>

    </main>

</div>

<script>

    let currentDate = new Date(2026, 9, 1);

    const monthNames = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    ];

    const dayNames = [
        "Minggu",
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jumat",
        "Sabtu"
    ];

    const events = {

        "2026-10-05": "Kuliah",

        "2026-10-12": "Tugas",

        "2026-10-20": "Ujian"

    };

    function createCalendar() {

        const year = currentDate.getFullYear();

        const month = currentDate.getMonth();

        document.getElementById("monthYear").textContent =
            monthNames[month] + " " + year;

        const calendar =
            document.getElementById("calendarGrid");

        calendar.innerHTML = "";

        dayNames.forEach(function(day) {

            const dayName =
                document.createElement("div");

            dayName.className = "day-name";

            dayName.textContent = day;

            calendar.appendChild(dayName);

        });

        const firstDay =
            new Date(year, month, 1).getDay();

        const totalDays =
            new Date(year, month + 1, 0).getDate();

        for (let i = 0; i < firstDay; i++) {

            const empty =
                document.createElement("div");

            empty.className = "day empty";

            calendar.appendChild(empty);

        }

        for (let date = 1; date <= totalDays; date++) {

            const day =
                document.createElement("div");

            day.className = "day";

            const dateNumber =
                document.createElement("div");

            dateNumber.className = "date-number";

            dateNumber.textContent = date;

            day.appendChild(dateNumber);

            const monthNumber =
                String(month + 1).padStart(2, "0");

            const dateNumberString =
                String(date).padStart(2, "0");

            const dateKey =
                year + "-" +
                monthNumber + "-" +
                dateNumberString;

            if (events[dateKey]) {

                const event =
                    document.createElement("div");

                event.className = "event";

                event.textContent =
                    events[dateKey];

                day.appendChild(event);

            }

            calendar.appendChild(day);

        }

    }

    function previousMonth() {

        currentDate.setMonth(
            currentDate.getMonth() - 1
        );

        createCalendar();

    }

    function nextMonth() {

        currentDate.setMonth(
            currentDate.getMonth() + 1
        );

        createCalendar();

    }

    createCalendar();

</script>

</body>

</html>