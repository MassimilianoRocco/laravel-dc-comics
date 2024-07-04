@extends('layouts.app')

@section('title', "Comics Home")
@section('content')
<div class="container" style="padding: 1rem">
    <h1>Comic Home</h1>
    <h3>{{$welcome}}, from our config->data.php</h3>
    <h4>Diretto dall'automagico PageController </h4>
</div>

@endsection
