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
    <link rel="icon" href="{{$favicon_url}}" type="image/gif" />
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
    @if (session('success'))
        <div class="alert alert-success"style="position:absolute;top:10px;right:30px;">{{ session('success') }}</div>
    @endif
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
    <!-- banner -->
    <div class="full_bg">
        <div class="slider_main">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#banner1" data-slide-to="0" class="active"></li>
                    <li data-target="#banner1" data-slide-to="1"></li>
                    <li data-target="#banner1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- first slide -->
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <div class="row d_flex">
                                    <div class="col-lg-7 offset-lg-6 col-md-7 offset-md-5">
                                        <div class="creative">
                                            <h1>The Science Behind a Good Night's Sleep</h1>
                                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as
                                                necessary, making this the first true generator on the Internet. It uses
                                                a
                                                dictionary of over 200 Latin words, combined with</p>
                                            <a class="read_more" href="Javascript:void(0)">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- second slide -->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <div class="row d_flex">
                                    <div class="col-lg-7 offset-lg-6 col-md-7 offset-md-5">
                                        <div class="creative">
                                            <h1>Exploring Best Recipes for Dinners</h1>
                                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as
                                                necessary, making this the first true generator on the Internet. It uses
                                                a
                                                dictionary of over 200 Latin words, combined with</p>
                                            <a class="read_more" href="Javascript:void(0)">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- third slide-->
                    <div class="carousel-item">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <div class="row d_flex">
                                    <div class="col-lg-7 offset-lg-6 col-md-7 offset-md-5">
                                        <div class="creative">
                                            <h1> Impact of Social Media on Mental Health</h1>
                                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as
                                                necessary, making this the first true generator on the Internet. It uses
                                                a
                                                dictionary of over 200 Latin words, combined with</p>
                                            <a class="read_more" href="Javascript:void(0)">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- controls -->
                <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- end banner -->
    <!-- perfect -->
    <div class="perfect">
        <div class="container_width">
            @php
                $posts = $posts->sortBy('updated_at')->take(4);
            @endphp
            @foreach ($posts as $post)
                <div class="row d_flex blog-item" id="blogList">
                    <div class="col-lg-6 image-container">
                        <div class="perfect_img">
                            <span>{{ $post->updated_at->format('d M Y') }}</span>
                            <figure><img src="{{ asset('images/' . $post->image) }}" alt="#"
                                    style="object-fit:cover;width:50vw;height:60vh;" /></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 content-container">
                        <div class="titlepage">
                            <h2 class="blog-title">{{ $post->name }}</h2>
                            <p class="blog-content">{{ $post->description }}</p>
                            <p><i class="fa fa-user"></i> {{ $post->category->name }}</p>
                            <a class="read_more" href="{{ route('show', $post->id) }}">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- end perfect -->
    <!-- combined -->
    <div class="combined">
        <div class="clients_bg">
            <div class="container-fluid">
                <div class="row d_flex grig">
                    <div class="col-lg-8">
                        <!-- start slider section -->
                        <div id="myCarousel" class="carousel slide clients_banner" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container">
                                        <div class="carousel-caption testimo">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="dicti">
                                                        <figure><img src="images/test2.png" alt="#" />
                                                        </figure>
                                                        <h4>Dictionary</h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dicti">
                                                        <figure><img src="images/test3.png" alt="#" />
                                                        </figure>
                                                        <h4>chunks as necessary,</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="carousel-caption testimo">
                                            <div class="row d_flex">
                                                <div class="col-md-6">
                                                    <div class="dicti">
                                                        <figure><img src="images/test2.png" alt="#" /></figure>
                                                        <h4>Dictionary</h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dicti">
                                                        <figure><img src="images/test3.png" alt="#" /></figure>
                                                        <h4>chunks as necessary,</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="carousel-caption testimo">
                                            <div class="row d_flex">
                                                <div class="col-md-6">
                                                    <div class="dicti">
                                                        <figure><img src="images/test2.png" alt="#" /></figure>
                                                        <h4>Dictionary</h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="dicti">
                                                        <figure><img src="images/test3.png" alt="#" /></figure>
                                                        <h4>chunks as necessary,</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 order">
                        <div class="titlepage text_align_left">
                            <h2>Uses a dictionary of over 200 Latin words, combined </h2>
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200
                                Latin
                                words, combined withAll the Lorem </p>
                            <a class="read_more" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end combined -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage text_align_center">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <form method="POST" id="request" action="{{ route('index') }}" class="main_form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="form_control" placeholder="Name" type="type" name="name"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="form_control" placeholder="Email" type="type" name="email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input class="form_control" placeholder="Phone Number" type="type" name="phone"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="message" type="type" name="message" rows="5"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
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
