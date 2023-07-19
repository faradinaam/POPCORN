@extends('component.navbar')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    {{-- <div class="food">
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
        </div> --}}

    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="DOKUMENPOPCORN/POPCORN-04597s.jpg" alt="POPCORN" width="100%">
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header">
                            <p style="font-size: 50px"><b>About Us</b></p>
                            {{-- <h2>Food Since 1990</h2> --}}
                        </div>
                        <div class="about-text">
                            <p>
                                Popcorn to go was founded in 2022 bringing authentic family recipes. Starting from a home on
                                Medokan street, now it has an outlet in Rungkut Surabaya. Various choices of popcorn
                                flavors, varying from sweet, salty, and mixed are available both in offline and online
                                stores.
                            </p>
                            <p>
                                Either as a gift or as a snack with family and friends. The use of quality ingredients,
                                hygienic processing, and wholehearted service are the keys in Popcorn to go sharing joy.
                            </p>
                            <P>
                                Popcorn to go hopes to continue to serve the authentic taste of a cross-generational
                                favourite that brings people memories of warm moments with the loved ones.
                            </P>
                            <a class="btn custom-btn" href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
    @include('component.footer')
@endsection
