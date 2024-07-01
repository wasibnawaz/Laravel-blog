<!doctype html>
<html lang="en">

<head>
    <title>Blog Website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{{ $favicon_url }}" type="image/x-icon">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <!-- Header content -->
        <nav class="navbar navbar-expand-lg navbar-light bg-orange">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="/dashboard">{{ $brand_name }}</a>
                <div class="d-flex justify-content-end align-items-center">
                    <a href="" class="text-white mx-2"><i class="fa-solid fa-bell"></i></a>
                    <a href="/logout" class="text-white mx-2"><i class="fa-solid fa-power-off"></i></a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 col-lg-2 d-md-block bg-orange sidebar pt-5">
                <div class="position-sticky">
                    <!-- Sidebar content -->
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"
                                href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('posts*') ? 'active' : '' }}" href="/posts">Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('category*') ? 'active' : '' }}"
                                href="/category">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact*') ? 'active' : '' }}"
                                href="/contacts">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('setting*') ? 'active' : '' }}"
                                href="/setting">Settings</a>
                        </li>
                    </ul>
                </div>
            </aside>

            <!-- Main content area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Page content goes here -->
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
