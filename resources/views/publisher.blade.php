@extends('partials.master')

@section('title', 'publisher')

{{-- <h1>makan</h1> --}}

@section('contain')

    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center" style="margin-top: 20px; margin-left: 10px;  gap:14px">
            @foreach ($publisher as $publisher)
                <div class="card" style="width: 18rem; height:32vw">
                    <img src="/assets/{{ $publisher->logo }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title" style="font-size: 16px">Publisher Name : {{ $publisher->name }}</h5>
                    <a href="/publisher/{{ $publisher->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
             @endforeach
        </div>
    </div>


@endsection

