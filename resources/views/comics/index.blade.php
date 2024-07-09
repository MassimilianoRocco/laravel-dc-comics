@extends("layouts.app")


@section("style&js")
    @vite('resources/scss/index.scss')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js"></script>
@endsection

@section("title", "Comics List")

@section("content")
    <div class="container">
        <div class="embla">
            <div class="embla__viewport">
                <div class="embla__container">
                    @foreach ($catalog as $index =>$comic)        
                        <div class="embla__slide">
                            <div class="text_box">
                                <p>{{ $comic["title"] }}</p>
                                <a href="{{ route('comics.show', $comic->id) }}" >details</a>
                                <a href="{{ route('comics.edit', $comic) }}" >update</a>
                                {{-- <a href="{{ route('comics.destroy', $comic) }}" >delete</a>  --}}
                                {{-- Così richiama il metodo GET quindi mi porterà allo show e non delete. Devo per forza creare un form --}}

                                <form class="delete_form" action="{{route('comics.destroy', $comic)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete_button">delete</button>
                                </form>
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
    <script src= @vite('resources/js/index.js')
@endsection
