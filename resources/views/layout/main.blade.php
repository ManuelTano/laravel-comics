@php
$comics = config('comics');
@endphp


<body>
    <section id="jumbo">
    </section>

    <section class="py-5">
        <div class="container">
            <div class="btn btn-primary fw-bold b-0 bottone">
                CURRENT SERIES
            </div>
            <div class="row text-white">
                @foreach ($comics as $comic)
                    <div class="col-2 text-center py-2">
                        <a href="{{ route('products.comic', ['id' => $loop->index]) }}"> <img src="{{ $comic['thumb'] }}"
                            alt=""></a>
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center">
                <div class="col-2 mt-4">
                    <div class="btn btn-primary fw-bold px-4">
                        READ MORE
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="shop py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-2">
                    <img src="{{ asset('../images/buy-comics-digital-comics.png') }}" alt="">
                    <span class="text-white">DIGITAL COMICS</span>
                </div>
                <div class="col-2">
                    <img src="{{ asset('../images/buy-comics-merchandise.png') }}" alt="">
                    <span class="text-white">DC MERCHANDISE</span>
                </div>
                <div class="col-2">
                    <img src="{{ asset('../images/buy-comics-shop-locator.png') }}" alt="">
                    <span class="text-white">SUBSCRIPTION</span>
                </div>
                <div class="col-2">
                    <img src="{{ asset('../images/buy-comics-subscriptions.png') }}" alt="">
                    <span class="text-white">COMIC SHOP</span>
                </div>
                <div class="col-2">
                    <img src="{{ asset('../images/buy-dc-power-visa.svg') }}" alt="">
                    <span class="text-white">DC POWER VISA</span>
                </div>
           </div>
        </div>
    </div> 
</body>

</html>
