@extends('layouts.app')

@section("style&js")
    @vite('resources/scss/form.scss')
@endsection

@section('title', "Comic Form")



@section('content')
    <div class="container">
        <div class="form_container">
            <h2>Create Comic Form</h2>
            <form action="/action_page.php" method="post">

                <div class="form_box">
                    <input type="text" id="fname" name="fname">
                    <div class="form_label">Add a title:</div>
                </div>

                <div class="form_box">
                    <input type="text" id="description" name="description">
                    <div class="form_label">Add a description:</div>
                </div>

                <div class="form_box">
                    <input type="text" id="thumb" name="thumb">
                    <div class="form_label">Add a thumb link:</div>
                </div>

                <div class="form_box">
                    <input type="number" id="price" name="price">
                    <div class="form_label">Add a price:</div>
                </div>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

@endsection