@extends('component.navbar')
@section('content')
    <div class="container">
        <!-- Judul -->
        <section class="judul mt-5 mb-5">
            <section class="home d-flex align-items-center">
                <div class="container">
                    <div class="P row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="home-img text-center">
                                <img src="{{ asset('storage') . '/' . $product->photo }}" alt="Logo">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="home-text">
                                <h1 class="animate_animated animate_bounce">{{ $product->name }}</h1>
                                <p class="animate_animated animate_fadeIn">{{ $product->description }}</p>

                                <div class="row tes">
                                    <div class="col-sm">
                                        <h5>Size</h5>
                                    </div>
                                    <div class="col-sm option text-align-right">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Size</option>
                                            <option value="1">± 100 grams</option>
                                            <option value="2">± 200 grams</option>
                                            <option value="3">± 400 grams</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <a class="btn custom-btn"
                                        href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
            </section>
            @include('component.footer')
@endsection
