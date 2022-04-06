@extends('layout.main')

@section('content')



<div class="card  w-25">
    <h5 class="p-5 border card-heaer">{{$games->title}}</h5>
    <div class="card-body">

        <ul>
            <li>id: {{$games->id}}</li>
            <li>Nazwadsadada:  {{$games->title}}</li>
            <li>Wydwca:  {{$games->publisher}}</li>
            <li>Gatunek:
                <span>Id: {{$games->genre_id}} </span>
                <span>Nazwa: {{$games->genre->name}} </span>
            </li>
            <li>
                Opis: <div>{{$games->description}}</div>
            </li>

        </ul>
        <a href="{{ route('games.e.list') }}" class="btn btn-light">Lista gier</a>
    </div>
</div>
@endsection
