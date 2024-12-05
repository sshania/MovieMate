<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('styling/bootstrap')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;
    0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    @include('components.navbar')

    <h1 style="font-weight: 700">Hi Admin!</h1>
    <div class="text-center mb-4">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            Open Menu
        </button>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel" style="font-size: 40px; color:#FCC252; font-weight: 600;">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group">
                <li class="list-group-item">
                    <i class="bi bi-camera-reels me-2"></i><a href="{{ route('cinema.index') }}" class="text-decoration-none text-white">Cinema</a>
                </li>
                <li class="list-group-item">
                    <i class="bi bi-building me-2"></i><a href="{{ route('studio.index') }}" class="text-decoration-none text-white">Studio</a>
                </li>
                <li class="list-group-item">
                    <i class="bi bi-person-fill me-2"></i><a href="{{ route('movie.index') }}" class="text-decoration-none text-white">Movie</a>
                </li>
                <li class="list-group-item">
                    <i class="bi bi-person-fill me-2"></i><a href="{{ route('showtime.index') }}" class="text-decoration-none text-white">Booking</a>
                </li>
            </ul>
        </div>
    </div>

    @include('styling/bootstrapjs')
    @include('components.footer')
</body>
</html>
