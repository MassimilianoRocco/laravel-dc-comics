@extends("layouts.app")


@section("style&js")
    @vite('resources/scss/home.scss')
    <link rel="stylesheet" href="/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
@endsection

@section("title", "Home")

@section("content")
    <div class="container">
        <div class="embla">
            <div class="embla__viewport">
                <div class="embla__container">
                    @foreach ($catalog as $index =>$comic)        
                        <div class="embla__slide">
                            <div class="text_box">
                                <p>{{ $comic["title"] }}</p>
                                <a href="{{ route('comics.show', $comic->id) }}" >Vai ai dettagli</a>
                            </div>
                            <div class="thumb_box">
                                <img src= {{$comic["thumb"]}} >
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="buttons_box">
                <button class="embla__prev">Prev</button>
                <button class="embla__next">Next</button>
            </div>
        </div>
    </div>
@endsection    


@section("pageScript")
  <script type="text/javascript">
    const emblaNode = document.querySelector('.embla')
    const options = { loop: false }
    const emblaApi = EmblaCarousel(emblaNode, options)

    const viewportNode = emblaNode.querySelector('.embla__viewport')

    // Grab button nodes
    const prevButtonNode = emblaNode.querySelector('.embla__prev')
    const nextButtonNode = emblaNode.querySelector('.embla__next')

    const embla = EmblaCarousel(viewportNode)
    prevButtonNode.addEventListener('click', embla.scrollPrev, false)
    nextButtonNode.addEventListener('click', embla.scrollNext, false)
  </script>

@endsection
