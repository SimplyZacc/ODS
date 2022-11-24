<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="welcome-body">
    <div class="nav">
        <div class="nav-home">
            ODS
        </div>
        @if (Route::has('login'))
            <div class="nav-links">
                <a href="{{ route('login') }}" class="nav-button login-btn">Log in</a>

                <a href="{{ route('register') }}" class="nav-button reg-btn">Register</a>
            </div>
        @endif
    </div>
    <div class="welcome-content">
        <h1>ODS</h1>
        <p>Safe. Secure. Simple.</p>
        <a href="{{ route('register') }}" class="welcome-button">Register</a>
    </div>
</body>

</html>
