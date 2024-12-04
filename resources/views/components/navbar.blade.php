<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<nav class="navbar">
    <div class="logo">
        <a href="/">
            <img src="../assets/LogoMain.png" alt="Logo" style="margin: 0%">
        </a>
    </div>
    <div class="menu">
        <a href="/">NOW SHOWING</a>
        <a href="/">UPCOMING</a>
        <a href="/cinema">THEATER</a>
        <a href="{{ Auth::check() && Auth::user()->role == 2 ? '/admin' : '/' }}">
            {{ Auth::check() && Auth::user()->role == 2 ? 'DASHBOARD' : 'BOOKING' }}
        </a>
    </div>

    @if(Auth::check())
        <a href="/auth/logout" class="login">Logout</a>
    @else
        <a href="/auth" class="login">Login</a>
    @endif

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</nav>
