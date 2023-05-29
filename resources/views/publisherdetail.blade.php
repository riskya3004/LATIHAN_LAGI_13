
@extends('partials.master')

@section('title', 'detail book')

@section('contain')

<div class="container d-flex flex-column align-items-center justify-content-center" >
    <div class="detail-box" style="background-color: grey; width: 45vw" >


        {{ $publisher->name }}
        <br>
        Address - {{ $publisher->address }}
        <br>
        Phone - {{ $publisher->phone }}
        <br>
        Email - {{ $publisher->email }}
        <br>

    </div>

    <div class="viewbooks d-flex flex-wrap align-items-center justify-content-center " style="gap: 20px;">
        @foreach ($books as $buku)
        <div class="card" style="width: 18rem; height:45vw">
            <img src="/assets/{{ $buku->image }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title" style="font-size: 16px">{{ $buku->title }}</h5>
            <p class="card-text" style="font-size: 14px">{{ $buku->author }}</p>
            <a href="/bookdetail/{{ $buku->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>

        @endforeach
    </div>







</div>






@endsection
