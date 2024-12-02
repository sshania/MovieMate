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
        <a href="#">THEATER</a>
        <a href="#">BOOKING</a>
    </div>

    @if(Auth::check())
        <span class="greeting">Hello, {{ Auth::user()->email }}</span>
        <a href="/auth/logout" class="logout">Logout</a>
    @else
        <a href="/auth" class="login">Login</a>
    @endif

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</nav>
