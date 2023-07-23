@extends('component.navbar')
@section('content')
    <!-- Carousel Start -->
    <div class="carousel">
        <div class="owl-carousel">
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="DOKUMENPOPCORN/3.jpg" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>Authentic<span>Taste</span></h1>
                    <p>
                        Popcorn to go uses family recipes with a modern touch, are made hygienically to high standards and
                        quality ingredients. Popcorn to go reminds you of warm moments with your loved ones
                    </p>
                    <div class="carousel-btn">
                        <a class="btn custom-btn"
                            href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY
                            NOW</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="DOKUMENPOPCORN/2.jpg" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>Authentic<span>Taste</span></h1>
                    <p>
                        Popcorn to go's use family recipes with a modern touch, are made hygienically to high standards and
                        quality ingredients. Popcorn to go reminds you of warm moments with your loved ones
                    </p>
                    <div class="carousel-btn">
                        <a class="btn custom-btn"
                            href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY
                            NOW</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="DOKUMENPOPCORN/1.jpg" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>Authentic<span>Taste</span></h1>
                    <p>
                        Popcorn to go's use family recipes with a modern touch, are made hygienically to high standards and
                        quality ingredients. Popcorn to go reminds you of warm moments with your loved ones
                    </p>
                    <div class="carousel-btn">
                        <a class="btn custom-btn"
                            href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY
                            NOW</a>
                    </div>
                </div> <div class="carousel-text">
                    <h1>Authentic<span>Taste</span></h1>
                    <p>
                        Popcorn to go's use family recipes with a modern touch, are made hygienically to high standards and
                        quality ingredients. Popcorn to go reminds you of warm moments with your loved ones
                    </p>
                    <div class="carousel-btn">
                        <a class="btn custom-btn"
                            href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY
                            NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Carousel Start backup -->
    {{-- <div class="carousel">
        <div class="carousel-item">
            <div class="carousel-img">
                <img src="DOKUMENPOPCORN/3.jpg" alt="Image">
            </div>
            <div class="carousel-text">
                <h1>Authentic<span>Taste</span></h1>
                <p>
                    Popcorn to go's use family recipes with a modern touch, are made hygienically to high standards and
                    quality ingredients. Popcorn to go reminds you of warm moments with your loved ones
                </p>
                <div class="carousel-btn">
                    <a class="btn custom-btn"
                        href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY
                        NOW</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-img">
                <img src="DOKUMENPOPCORN/2.jpg" alt="Image">
            </div>
            <div class="carousel-text">
                <h1>Authentic<span>Taste</span></h1>
                <p>
                    Popcorn to go's use family recipes with a modern touch, are made hygienically to high standards and
                    quality ingredients. Popcorn to go reminds you of warm moments with your loved ones
                </p>
                <div class="carousel-btn">
                    <a class="btn custom-btn"
                        href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY
                        NOW</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Carousel End -->



    {{-- Carousel Start --}}
    <div class="break" id="ourProduct">
        <br>
        <br>
        <br>
    </div>
    <div class="product container-fluid">
        <div class="container mb-5">
            <div class="product-title">
                <h2 class="text-center"><b>Our Product</b></h2>
            </div>
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-theme">
                        @foreach ($data as $item)
                            <div class="item mb-4">
                                <a href="{{ $item->slug }}">
                                    <div class="card border-0 shadow">
                                        <a href="{{ $item->rute }}"><img src="{{ asset('storage') . '/' . $item->photo }}" alt=""
                                                class="card-img-top" style="object-fit: cover"></a>
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                <h4>{{ $item->name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Carousel End --}}

    <!-- Video Modal Start-->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Feature Start -->
    <div class="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-header">
                        <p>Why Choose Us</p>
                        <h2>Our Key Features</h2>
                    </div>
                    <div class="feature-text">
                        <div class="feature-img">
                            <div class="row">
                                <div class="col-6">
                                    <img src="DOKUMENPOPCORN/POPCORN-04594s.jpg" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="DOKUMENPOPCORN/POPCORN-04610s.jpg" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="DOKUMENPOPCORN/POPCORN-04571ss.jpg" alt="Image">
                                </div>
                                <div class="col-6">
                                    <img src="DOKUMENPOPCORN/POPCORN-04591s.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        {{-- <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Phasel nec preti mi. Curabit facilis ornare velit
                            non vulputa. Aliquam metus tortor, auctor id gravida condime, viverra quis sem. Curabit non nisl
                            nec nisi sceleri maximus
                        </p> --}}
                        <a class="btn custom-btn"
                            href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY
                            NOW</a>
                    </div>
                </div>
                <div class="col-lg-7 d-flex justify-content-center align-items-center flex-column">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-cooking"></i>
                                <h3>Best quality products</h3>
                                <p>
                                    The popcorns are produced under hygienically conditions with selected ingredients and
                                    also carefully produced with the right techniques for making high quality flavour and
                                    nutritional food
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-vegetable"></i>
                                <h3>Natural ingredients</h3>
                                <p>
                                    Popcorn to go has a Healthy concept, where in the selection of materials in the
                                    manufacture of all of its products DO NOT USE chemicals and preservatives
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-medal"></i>
                                <h3>World’s best Flavour</h3>
                                <p>
                                    Made from premium quality raw goods, we serve you the finest taste of popcorn
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-courier"></i>
                                <h3>Click and Receive</h3>
                                <p>
                                    Click & Receive is a delivery option for online orders that offers a convenient way to
                                    enjoy our premium product
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        {{-- <div class="col-sm-6">
                            <div class="feature-item">
                                <i class="flaticon-meat"></i>
                                <h3>Fresh ingredients</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non
                                    vulput metus tortor
                                </p>
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-6">
                        <div class="feature-item">
                            <i class="flaticon-fruits-and-vegetables"></i>
                            <h3>Ground beef & Low fat</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                            </p>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    {{-- <!-- Food Start -->
<div class="food">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="food-item">
                    <i class="flaticon-burger"></i>
                    <h2>Burgers</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                    </p>
                    <a href="">View Menu</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="food-item">
                    <i class="flaticon-snack"></i>
                    <h2>Snacks</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                    </p>
                    <a href="">View Menu</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="food-item">
                    <i class="flaticon-cocktail"></i>
                    <h2>Beverages</h2>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem.
                    </p>
                    <a href="">View Menu</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Food End --> --}}

    <!-- Testimonial Start -->
    {{-- <div class="break" id="Testimoni">
        <br>
        <br>
        <br>
    </div>
    <div class="testimonial">
        <div class="container">
            <div class="product-title">
                <h2 class="text-center"><b>Testimoni</b></h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-1.jpg" alt="Image">
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                    </p>
                    <h2>Client Name</h2>
                    <h3>Profession</h3>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="DOKUMENPOPCORN/3.jpg" alt="Image">
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                    </p>
                    <h2>Client Name</h2>
                    <h3>Profession</h3>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-3.jpg" alt="Image">
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                    </p>
                    <h2>Client Name</h2>
                    <h3>Profession</h3>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-img">
                        <img src="img/testimonial-4.jpg" alt="Image">
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                    </p>
                    <h2>Client Name</h2>
                    <h3>Profession</h3>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Contact Us</p>
                <h2>Contact For Any Query</h2>
            </div>
            <div class="row align-items-center contact-information">
                <div class="col-md-6 col-lg-9">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Address</h3>
                            <p>Blok 1G, Jl. Raya Medokan Sawah, Medokan Ayu, Rungkut, Surabaya City, East Java 60295</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Call Us</h3>
                            <p>+62 8123 0610 228
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-3">
                    <div class="contact-info"> --}}
                {{-- <div class="contact-icon">
                            <i class="fa fa-share"></i>
                        </div> --}}
                {{-- <div class="contact-text">
                            <h3>Follow Us</h3>
                            <div class="contact-social">
                                <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                                <a href=""><i class="fab fa-tiktok"></i> </a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div> --}}
                {{-- </div>
                </div> --}}
            </div>
            <div class="row contact-form">
                <<iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15829.139658511936!2d112.78613854281983!3d-7.321859381570432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb8ee15fd871%3A0x115a28d9ed41b510!2sChatthai%20Rungkut!5e0!3m2!1sen!2sid!4v1683215420167!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @include('component.footer')
@endsection
