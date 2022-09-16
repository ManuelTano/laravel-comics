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
            <div class="col-8">
                <div class="cards">
                    <img src="{{ $comic['thumb'] }}" alt="" class="thumb">
                    <h4 class="title fw-bold">{{ $comic['title'] }}</h4>
                    <h6>{{ $comic['series'] }}</h6>
                    <p> {{ $comic['price'] }}</p>
                    <p>{{ $comic['description'] }}</p>
                </div>
            </div>
           </div>
        </div>
    </section>

    @include('layout.footer')


</body>

</html>
