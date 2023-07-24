<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>POPCORN TO GO | {{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    {{-- Animate CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Favicon -->
    <link href="DOKUMENPOPCORN/logo.jpeg" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="admin-asset/signin.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a href="/"><img src="DOKUMENPOPCORN/logo.png" alt="logo" width="100px"></a>
            <button type="button" class="navbar-toggler navbar-dark" data-toggle="collapse"
                data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="/" class="nav-item nav-link {{ $title === 'Home' ? 'active' : '' }}">Home</a>
                    <a href="{{ $title != 'Home' ? '/' : '#ourProduct' }}"
                        class="nav-item nav-link {{ $title === 'Home' ? 'active' : '' }}">Product</a>
                    {{-- <a href="http://127.0.0.1:8000/#Testimoni"class="nav-item nav-link {{ $title === 'Home' ? 'active' : '' }}">Testimoni</a> --}}
                    <a href="/about" class="nav-item nav-link {{ $title === 'About' ? 'active' : '' }}">About</a>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome back, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor"
                                            class="bi bi-layout-text-sidebar-reverse" viewBox="0 0 16 16">
                                            <path
                                                d="M12.5 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm0 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm.5 3.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z" />
                                            <path
                                                d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2zM4 1v14H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h2zm1 0h9a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5V1z" />
                                        </svg> My Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i
                                                class="fa-solid fa-right-from-bracket"></i> Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                    {{-- <a href="/contact" class="nav-item nav-link {{ ($title === "Contact") ? 'active' : ''}}">Contact</a>
                        <a href="/login" class="nav-item nav-link {{ ($title === "login") ? 'active' : ''}}">Login</a> --}}
                    {{-- <a href="feature.html" class="nav-item nav-link">Feature</a> --}}
                    {{-- <a href="team.html" class="nav-item nav-link">Chef</a> --}}
                    {{-- <a href="menu.html" class="nav-item nav-link">Menu</a>
                            <a href="booking.html" class="nav-item nav-link">Checkout</a> --}}
                    {{-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                    <a href="single.html" class="dropdown-item">Blog Detail</a>
                                </div> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Nav Bar End -->

    @yield('content')



    {{-- float wa start --}}
    <a href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0" class="float"
        target="_blank" style="text-decoration: none">
        <i class="fa-brands fa-whatsapp"></i> </a>
    {{-- float wa End --}}

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script>
        // Main carousel
        $(".carousel .owl-carousel").owlCarousel({
            autoplay: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items: 1,
            smartSpeed: 300,
            dots: false,
            loop: true,
            nav: false
        });

        $('.product .owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })

        // Testimonials carousel
        $(".testimonials-carousel").owlCarousel({
            center: true,
            autoplay: true,
            dots: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });

        // let lastKnownScrollPosition = 0;
        // let ticking = false;

        // function animate(scrollPos) {
        //     const animate = document.getElementById('product');
        //     let delay = 0;
        //     if (window.scrollY > 700) {
        //         animate.classList.add('animate__animate', 'animate__fadeInUp','animate__delay-${selay}s');
        //         delay++;
        //     }

        // }

        document.addEventListener("scroll", (event) => {
            lastKnownScrollPosition = window.scrollY;

            if (!ticking) {
                window.requestAnimationFrame(() => {
                    animate(lastKnownScrollPosition);
                    ticking = false;
                });

                ticking = true;
            }
        });
    </script>
</body>

</html>
