<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<div class="navbar">
    <div class="logo">
        <a href="/">
            <img src="../../assets/LogoMain.png" alt="Logo" style="margin: 0%">
        </a>
    </div>
    <button id="menu-icon" class="menu-icon">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div id="menu" class="menu">
        <a href="/now-showing">NOW SHOWING</a>
        <a href="/upcoming">UPCOMING</a>
        <a href="/cinema">THEATER</a>
        <a href="{{ Auth::check() && Auth::user()->role == 2 ? '/admin' : '/booking' }}">
            {{ Auth::check() && Auth::user()->role == 2 ? 'DASHBOARD' : 'BOOKING' }}
        </a>
        @if(Auth::check())
            <a href="/auth/logout" class="login">Logout</a>
        @else
            <a href="/auth" class="login">Login</a>
        @endif
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>
<script src="{{ asset('js/navbar.js') }}"></script>
