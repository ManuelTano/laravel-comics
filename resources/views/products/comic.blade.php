<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

</head>

<body>
    @include('layout.header')
    @include('layout.jumbo')

    <div class="row bg-blue">

    </div>

    <section id="white" class="py-5">
        <div class="small-container">
            <div class="row">
                <div class="col-8 m-0 p-0 ">
                    <div class="cards">
                        <img src="{{ $comic['thumb'] }}" alt="" class="thumb">
                        <h4 class="title fw-bold mb-4">{{ $comic['title'] }}</h4>
                        <div class="row margin border-green">
                            <div class="col-9 border-right bg-green d-flex p-2 justify-content-between">
                                <span class="green fw-bold">U.S. price:
                                    <span class="text-white">{{ $comic['price'] }}</span></span>
                                <span class="green fw-bold">AVAILABLE</span>
                            </div>
                            <div class="col-3 bg-green p-2 text-center">
                                <span class="text-white fw-bold">Check Availability</span>
                            </div>
                        </div>
                        <p class="mt-4">{{ $comic['description'] }}</p>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <h5 class="text-grey">ADVERTISEMENT</h5>
                    <img src="{{ asset('../images/madv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>
    </section>

    <section id="grigio">
        <div class="small-container">

            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <h3>Talent</h3>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            Art by:
                        </div>
                        <div class="col-9">
                           
                        </div>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>

    </section>

    @include('layout.footer')


</body>

</html>
