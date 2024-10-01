@extends('layouts.app')

@section('content')
    <div class="bg-dark">
        <div class="container py-5">
            <div class="row my-5">
                @foreach ($comics as $comic)
                    <div class="col-3">
                        <div class="comic-card text-white d-flex flex-column align-items-center">
                            <div class="thumb">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <h5 class="my-5">{{ $comic['title'] }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
