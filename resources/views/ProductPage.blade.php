@extends('component.navbar')
@section('content')
    <div class="container">
        <!-- Judul -->
        <section class="judul mt-5 mb-5">
            <section class="home d-flex align-items-center">
                <div class="container">
                    <div class="P row align-items-center">
                        <div class="col-lg-5 col-md-5">
                            <div class="home-img text-center">
                                <img src="{{ asset('storage') . '/' . $product->photo }}" alt="Logo">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="home-text">
                                <h1 class="animate_animated animate_bounce">{{ $product->name }}</h1>
                                <p class="animate_animated animate_fadeIn">{{ $product->description }}</p>
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                    <div
                                        onclick="window.open(`https://api.whatsapp.com/send?phone=6281230610228&text=Halo%20saya%20mau%20pesan%20popcorn%20cheese%20flavour%20100gr`)">
                                        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                        <label class="btn btn-outline-warning" for="btncheck3">100gr</label>
                                    </div>
                                    <div
                                            onclick="window.open(`https://api.whatsapp.com/send?phone=6281230610228&text=Halo%20saya%20mau%20pesan%20popcorn%20cheese%20flavour%20200gr`)">
                                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                            <label class="btn btn-outline-warning" for="btncheck3">200gr</label>
                                    </div>
                                    <div
                                        onclick="window.open(`https://api.whatsapp.com/send?phone=6281230610228&text=Halo%20saya%20mau%20pesan%20popcorn%20cheese%20flavour%20400gr`)">
                                        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                        <label class="btn btn-outline-warning" for="btncheck3">400 gr</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    </div>
@endsection
