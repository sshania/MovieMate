<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | @yield('title')</title>
    @include('styling/bootstrap')
</head>

<body>
    <div>
        <h1>Welcome to admin page!</h1>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">SideBar (with body scrolling)</button>
    </div>
    <div>
        @yield('content')
    </div>

    <!-- dibawah adalah siderbarnya -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Try scrolling the rest of the page to see this option in action.</p>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{ route('cinema.index') }}">Cinema</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('studio.index') }}">Studio</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('showtime.index') }}">Showtime</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('movie.index') }}">Movie</a>
                </li>
                <li class="list-group-item">
                    <a href="">Hai</a>
                </li>
            </ul>
        </div>
    </div>

    @include('styling/bootstrapjs')
</body>

</html>
