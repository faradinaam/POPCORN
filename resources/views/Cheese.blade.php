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
                                <img src="DOKUMENPOPCORN/Caramel__S.jpg" alt="Logo">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="home-text">
                                <h1 class="animate_animated animate_bounce">Product 1</h1>
                                <p class="animate_animated animate_fadeIn">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Ex beatae itaque in, officia hic aut possimus modi. Aspernatur fugit
                                    minus optio velit necessitatibus. Non modi numquam enim in ex provident ullam, molestias
                                    dolor distinctio dolorum perferendis quia sit alias quae excepturi et nihil repellat
                                    aperiam, similique impedit dicta. Fugiat, reiciendis!</p>
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
                                {{-- <a class="btn custom-btn" href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY NOW</a> --}}
                            </div>
                        </div>

                    </div>

                    <div class="text-center">
                        {{-- <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                        <a href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0"><label class="btn btn-outline-warning" for="btncheck1">100 gr</label></a>

                        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                        <a href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0"><label class="btn btn-outline-warning" for="btncheck2">200 gr</label></a>

                        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">

                        <div>
                            <a href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0"></a>
                            <label class="btn btn-outline-warning" for="btncheck3">400 gr</label>
                        </div>
                    </div> --}}
                    </div>

                </div>
            </section>

    </div>
@endsection
