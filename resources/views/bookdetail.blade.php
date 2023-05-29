@extends('partials.master')

@section('title', 'Detail Book')

@section('contain')

    <div class="container d-flex flex-column align-items-center justify-content-center">
        <div class="w-50 d-flex align-items-center justify-content-left" style="background-color: grey; color:white; padding-left: 8px">
            <h5>Book Detail</h5>
        </div>

        <img src="/assets/{{ $books->image }}" style="width: 25vw; height:32vw" alt=""> <br>

        Title : {{ $books->title }}
        <br>
        Author : {{ $books->author }}
        <br>
        Publisher : {{ $books->Publisher->name }}
        <br>
        Year : {{ $books->year }}
        <br>
        Synopsis : <br>
        {{ $books->synopsis }}
        </div>

@endsection
