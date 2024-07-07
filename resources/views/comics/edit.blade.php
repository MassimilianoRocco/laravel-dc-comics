@extends('layouts.app')

@section("style&js")
    @vite('resources/scss/form.scss')
@endsection

@section('title', "Comic Form")



@section('content')
    <div class="container">
        <div class="form_container">
            <h2>Update {{$comic->title}} Form</h2>
            <form>

                <div class="form_box">
                    <input type="text" id="title" name="title" class="custom_input" value="{{$comic->title}}" required>
                    <div class="form_label">Add a title:</div>
                </div>

                <div class="form_box">
                    <input type="text" id="description" name="description" class="custom_input" value="{{$comic->description}}" required>
                    <div class="form_label">Add a description:</div>
                </div>

                <div class="form_box">
                    <input type="text" id="thumb" name="thumb" class="custom_input" value="{{$comic->thumb}}" required>
                    <div class="form_label">Add a thumb link:</div>
                </div>

                <div class="form_box">
                    <input type="number" id="price" name="price" class="custom_input" value="{{$comic->price}}" required>
                    <div class="form_label">Add a price:</div>
                </div>

                <input type="submit" value="Submit" class="custom_submit">
            </form>
        </div>
    </div>

@endsection