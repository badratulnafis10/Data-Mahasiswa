<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - SMART</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }


        body {
            min-height: 100vh;
            background: #7056d8;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }


        .login-card {
            width: 420px;
            background: white;
            border-radius: 25px;
            padding: 45px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }


        .logo {
            text-align: center;
            color: #7056d8;
            font-size: 38px;
            font-weight: bold;
            margin-bottom: 10px;
        }


        .title {
            text-align: center;
            color: #333;
            font-size: 26px;
            margin-bottom: 8px;
        }


        .subtitle {
            text-align: center;
            color: #888;
            font-size: 14px;
            margin-bottom: 35px;
        }


        /* PESAN ERROR */

        .error-message {
            background: #ffe5e5;
            color: #d33;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
        }


        .form-group {
            margin-bottom: 20px;
        }


        label {
            display: block;
            color: #444;
            font-size: 15px;
            font-weight: bold;
            margin-bottom: 8px;
        }


        input {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
        }


        input:focus {
            border-color: #7056d8;
        }


        .login-button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 10px;
            background: #7056d8;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }


        .login-button:hover {
            background: #5e45c2;
        }


        .footer {
            text-align: center;
            color: #999;
            font-size: 13px;
            margin-top: 25px;
        }


        /* RESPONSIVE */

        @media (max-width: 500px) {

            .login-card {
                width: 100%;
                padding: 30px 25px;
            }

        }

    </style>

</head>


<body>


<div class="login-card">


    <div class="logo">
        SMART
    </div>


    <h1 class="title">
        Selamat Datang
    </h1>


    <p class="subtitle">
        Silakan masuk ke sistem akademik
    </p>


    {{-- PESAN ERROR --}}

    @if(session('error'))

        <div class="error-message">
            {{ session('error') }}
        </div>

    @endif


    {{-- FORM LOGIN --}}

    <form action="/login" method="POST">

        @csrf


        <div class="form-group">

            <label>
                Username
            </label>


            <input
                type="text"
                name="username"
                placeholder="Masukkan username"
                required
            >

        </div>


        <div class="form-group">

            <label>
                Password
            </label>


            <input
                type="password"
                name="password"
                placeholder="Masukkan password"
                required
            >

        </div>


        <button
            type="submit"
            class="login-button"
        >
            Masuk
        </button>


    </form>


    <div class="footer">
        SMART - Sistem Manajemen Akademik
    </div>


</div>


</body>

</html>