<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brilliahib</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('img/me-circle.png') }}" type="image/png">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <!-- end font google -->
</head>

<body>
    <!-- NAVBAR  -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand mb-0 d-flex gap-3 h-full align-items-center" href="/">
                <div class="avatar">
                    <img src="{{ asset('img/avatar-angry.png') }}" alt="" width="40px">
                </div>
                <h2 class="font-base text-black fw-semibold mb-0">Muhammad Ahib Ibrilli</h2>
                <img src="{{ asset('img/verified.png') }}" alt="" width="14px" height="14px"
                    style="margin-left: -10px;">
            </a>
            <button class="navbar-toggler m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Ganti dengan SVG icon -->
                <div class="p-1 rounded" style="background-color: #efefef;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000"
                        class="bi bi-list fw-extrabold" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg>
                </div>
                <!-- /Ganti dengan SVG icon -->
            </button>
            <div class="collapse navbar-collapse list-navbar" id="navbarNav" style="margin-left: -10rem;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('projects') ? 'active' : '' }}" href="/projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <div class="navbar-contact">
                        <a href="/contact" class="button fw-semibold font-base">Contact Me</a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <section id="main" class="main pt-0">
        @yield('container')
    </section>

    @extends('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
</body>

</html>
