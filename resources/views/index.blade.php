@extends('layout.base')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="container">
        <h2>CURRENT SERIES</h2>
        <ul style="display: flex; flex-wrap:wrap">
        @foreach ($comics as $comic)
            <li style="width: calc(100% / 6)">
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                <h4>{{strtoupper($comic['series'])}}</h4>
            </li>    
        @endforeach
        </ul>
    </div>
    @dump($comics);
@endsection