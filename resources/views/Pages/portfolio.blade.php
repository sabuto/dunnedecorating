@extends('layout')
@section('title', 'Portfolio')
@section('content')
    <div class="container mx-auto grid grid-cols-2 lg:grid-cols-3 gap-2">
        @foreach ($pag as $img)
            <a class="spotlight" href="{{asset($img)}}">
                <img class="rounded-2xl w-72 h-72" src="{{asset($img)}}">
            </a>
        @endforeach
        {{$pag->onEachSide(2)->links()}}
    </div>
@endsection
