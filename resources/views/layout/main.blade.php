@php 
$comics = config('comics')
@endphp


<body>
    <section id="jumbo">
    </section>

    <section class="py-4">
            <div class="container">
                <div class="row text-white">
                    @foreach($comics as $comic)
                    <div class="col-2 text-center py-2">
                        <img src="{{ asset($comic['thumb']) }}" alt="">
                        {{$comic['series']}}
                    </div>
                    @endforeach
                </div>
            </div>
            </div>
          </div>
      
          <div class="shop">
            <div class="container">
              <ul>
              </ul>
            </div>
    </section>
</body>
</html>