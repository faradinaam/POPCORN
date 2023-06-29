@extends('component.navbar')
@section('content')

{{-- Carousel Start --}}
<div class="product container-fluid my-5">
    <div class="container mb-5">
    <div class="row">
        <div class="col-12 m-auto">
            <div class="owl-carousel owl-theme">
                <div class="item mb-4">
                    <a href="/Cheese">
                    <div class="card border-0 shadow">
                        <img src="DOKUMENPOPCORN/chesee.jpg" alt="" class="card-img-top" style="object-fit: cover">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h4>Cheese Flavour</h4>
                            </div>
                        </div>
                    </div>
                </a>
                </div>

                <div class="item">
                    <a href="/Caramel">
                    <div class="card border-0 shadow">
                        <img src="DOKUMENPOPCORN/Caramel__S.jpg" alt="" class="card-img-top" style="object-fit: cover">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h4>Caramel Flavour</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="item">
                    <a href="/Mix" >
                    <div class="card border-0 shadow">
                        <img src="DOKUMENPOPCORN/Caramel__S.jpg" alt="" class="card-img-top" style="object-fit: cover">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h4>Mix Flavour</h4>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                {{-- <div class="item">
                    <div class="card border-0 shadow">
                        <img src="5.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h4>Owl Carousel</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 shadow">
                        <img src="6.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h4>Owl Carousel</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 shadow">
                        <img src="7.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h4>Owl Carousel</h4>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>
</div>
{{-- Carousel End --}}

    <a
        href="https://api.whatsapp.com/send?phone=62895391582231&text=Halo" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

<!-- Video Modal Start-->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
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
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Phasel nec preti mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor, auctor id gravida condime, viverra quis sem. Curabit non nisl nec nisi sceleri maximus
                    </p>
                    <a class="btn custom-btn" href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY NOW</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature-item">
                            <i class="flaticon-cooking"></i>
                            <h3>World’s best Flavour</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature-item">
                            <i class="flaticon-vegetable"></i>
                            <h3>Natural ingredients</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature-item">
                            <i class="flaticon-medal"></i>
                            <h3>Best quality products</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature-item">
                            <i class="flaticon-meat"></i>
                            <h3>Fresh ingredients</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature-item">
                            <i class="flaticon-courier"></i>
                            <h3>Fastest door delivery</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                            </p>
                        </div>
                    </div>
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




<!-- Contact Start -->
<div class="contact">
    <div class="container">
        <div class="section-header text-center">
            <p>Contact Us</p>
            <h2>Contact For Any Query</h2>
        </div>
        <div class="row align-items-center contact-information">
            <div class="col-md-6 col-lg-6">
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
                        <p>+62 8123 0061 0228</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-share"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Follow Us</h3>
                        <div class="contact-social">
                            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                            <a href=""><i class="fab fa-tiktok"></i> </a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row contact-form">
                <<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15829.139658511936!2d112.78613854281983!3d-7.321859381570432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb8ee15fd871%3A0x115a28d9ed41b510!2sChatthai%20Rungkut!5e0!3m2!1sen!2sid!4v1683215420167!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- Contact End -->

@include('component.footer')

@endsection