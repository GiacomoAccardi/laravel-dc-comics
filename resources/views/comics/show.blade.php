@extends('layouts.app')

@section('content')
    <div class="bg-dark py-5 text-white">
        <div class="container">
            <div class="row my-5">
                <div class="col-6 d-flex justify-content-center">
                    <div class="show-img">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                </div>
                <div class="col-6">
                    <h1>{{ $comic['title'] }}</h1>
                    <p>{{ $comic['price'] }}</p>
                    <p><strong>{{ $comic['description'] }}</strong></p>
                    <p>{{ $comic['sale_date'] }}</p>
                    <p>{{ $comic['type'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
