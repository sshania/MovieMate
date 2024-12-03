@extends('layouts/home-layout')

@section('title', 'MovieMate | HomePage')

@section('content')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <div class="justify-center w-full">
        <div id="indicators-carousel" class="relative w-full" data-carousel="static" >
            <div class='carousel-container'>
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    @php
                        $movieCarousel = [
                            ['image' => 'cinta-dalam-ikhlas.jpg', 'title' => 'cinta-dalam-ikhlas'],
                            ['image' => 'pia-lokal.jpg', 'title' => 'pia-lokal'],
                            ['image' => 'guna-guna-istri-muda.jpg', 'title' => 'guna-guna-istri-muda'],
                        ];
                    @endphp

                    @foreach ($movieCarousel as $index => $mc)
                        <div class="{{ $index === 0 ? 'block' : 'hidden' }} duration-700 ease-in-out" data-carousel-item="{{ $index === 0 ? 'active' : '' }}">
                            <img src="{{ asset('iklan/' . $mc['image']) }}" style="width:700px" class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="{{ $mc['title'] }}">
                        </div>
                    @endforeach
                </div>
                <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                    @foreach ($movieCarousel as $index => $mc)
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                    @endforeach
                </div>

                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>

        <div class="now-playing-container">
            <h1 class="title" id="now-playing">Now Playing</h1>
            <div class="movies">
                @foreach ($movieNow as $mn)
                <a href="/movies/{{ $mn->id }}">
                    <div class="movie-container">
                        <div class="movie-card">
                            <div class="movie">
                                <image src="{{ asset('poster/' . $mn->movie_images) }}" alt="{{$mn->title}}" class="movie-image"></image>
                            </div>
                        </div>

                        <div class="movie-text">
                            <h3 class="movie-title">{{$mn->title}}</h3>
                            <span class="movie-rating {{ $mn->rating }}">
                                {{ $mn->rating }}
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            {{ $movieNow->links() }}
        </div>

        <div class="container">
            <h1 class="title" id="upcoming">Upcoming</h1>
            <div class="movies">
                @foreach ($movieUp as $mu)
                <a href="/movies/{{ $mu->id }}">
                    <div class="movie-container">
                        <div class="movie-card">
                            <div class="movie">
                                <image src="{{ asset('poster/' . $mu->movie_images) }}" alt="{{$mu->title}}" class="movie-image"></image>
                            </div>
                        </div>

                        <div class="movie-text">
                            <h3 class="movie-title">{{$mu->title}}</h3>
                            <span class="movie-rating {{ $mu->rating }}">
                                {{ $mu->rating }}
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            {{ $movieUp->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
@endsection
