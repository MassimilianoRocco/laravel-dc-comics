@extends('layouts.app')
@section("style&js")
    @vite('resources/scss/show.scss')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

@endsection

@section('title', "SingleComic Name")

@section('content')
    <div class="container">
        <div class="text_box">
            <h1>{{ $comic->title }}</h1>
        </div>
        <div class="info_container">
            <div class="thumb_box">
                <img src= {{$comic->thumb}} >
            </div>
            <div class="description_box">
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </div>
@endsection
