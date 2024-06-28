<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Blogging</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ $favicon_url }}" type="image/gif" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->

    <!-- header -->
    <header class="header-area">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-12">
                    <div class="header_top">
                        <div class="row">
                            <div class=" col-md-6 col-sm-12">
                                <div class="logo">
                                    <a href="index.html">BLOGGING </a>
                                </div>
                            </div>
                            <div class="col-md-6 d_none">
                                <ul class="social_icon text_align_right">
                                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="https://www.twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="navbar-area">
                        <nav class="site-navbar">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="testimonial.html">testimonial</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                            <button class="nav-toggler">
                                <span></span>
                            </button>
                        </nav>
                        <div>
                            <i class="fa-solid fa-magnifying-glass search-icon" aria-hidden="true" id="searchIcon"></i>
                        </div>
                        <div id="searchPopup" class="popup">
                            <div class="popup-content">
                                <input type="text" id="searchInput" placeholder="Search...">
                                <button id="closePopup" class="close-popup">&times;</button>
                                <button type="submit" id="searchBtn" class="search-btn">Search</button>
                                <div class="search-results mt-3" id="searchResults"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- end header inner -->

    <body class="main-layout">
        <div class="perfect" style="margin-top:100px">
            <div class="container_width">
                <div class="row">
                    <div class="col-8">
                        @if ($post)
                            <div class="row d_flex blog-item" id="blogList">
                                <div class="col-lg-12 image-container">
                                    <div class="perfect_img">
                                        <span>{{ $post->updated_at->format('d M Y') }}</span>
                                        <figure><img src="{{ asset('images/' . $post->image) }}" alt="#"
                                                style="object-fit: cover; width: 50vw; height: 60vh;" /></figure>
                                    </div>
                                </div>
                                <div class="col-lg-12 content-container">
                                    <div class="titlepage">
                                        <span><i class="fa fa-user"></i> {{ $post->category->name }}</span>
                                        <h2 class="blog-title">{{ $post->name }}</h2>
                                        <p class="blog-content">{{ $post->description }}</p>
                                        <!-- Optional: Add a link to view the full post -->
                                        <a class="read_more" href="{{ route('show', $post->id) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @else
                        @endif
                    </div>
                    <div class="col-4">
                        @php
                            $posts = $posts->shuffle()->take(3);
                        @endphp
                        @foreach ($posts as $post)
                            <div class="row d_flex blog-item" id="blogList">
                                <div class="col-lg-12 image-container">
                                    <div class="perfect_img">
                                        <span>{{ $post->updated_at->format('d M Y') }}</span>
                                        <figure><img src="{{ asset('images/' . $post->image) }}" alt="#"
                                                style="object-fit: cover; width: 50vw; height: 25vh;" /></figure>
                                    </div>
                                </div>
                                <div class="col-lg-12 content-container">
                                    <div class="titlepage">
                                        <span class="text-truncate"><i class="fa fa-user"></i>
                                            {{ $post->category->name }}</span>
                                        <p class="blog-title text-truncate"
                                            style="font-size:25px;margin-top:0px;font-weight:600">
                                            {{ $post->name }}</p>
                                        <p class="blog-content" style="overflow:hidden;height:11vh;">
                                            {{ $post->description }}</p>
                                        <a class="read_more" href="{{ route('show', $post->id) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--  footer -->
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="hedingh3  text_align_left">
                                <h3>Contact Us</h3>
                                <ul class="top_infomation">
                                    <li><img src="images/loc.png" alt="#" />
                                        Locations
                                    </li>
                                    <li><img src="images/call.png" alt="#" />
                                        +71 89078493
                                    </li>
                                    <li><img src="images/mail.png" alt="#" />
                                        <a href="Javascript:void(0)">demo@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hedingh3 text_align_left">
                                <h3>Useful Link</h3>
                                <ul class="menu_footer">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hedingh3  text_align_left">
                                <h3>Newsletter</h3>
                                <form id="colof" class="form_subscri">
                                    <input class="newsl" placeholder="Your email" type="text" name="Email">
                                    <button class="subsci_btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p>© 2022 All Rights Reserved. Design by <a href="https://html.design/"> Free html
                                        Templates</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- Javascript files-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>

</html>
