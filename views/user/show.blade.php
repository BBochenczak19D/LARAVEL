@extends('layout.main')

@section('title', 'Użytkownik')

@section('sidebar')
    @parent
    <button class="btn btn-primary">Lista użytkowników: <a href="{{ route('get.users') }}">Link</a></div>
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">{{ $user['name'] }}</h5>
        <div class="card-body">
            <ul>
                <li>Id: {{ $user['id'] }}</li>
                <li>Imię: {{ $user['firstName'] }}</li>
                <li>Nazwisko: {{ $user['lastName'] }}</li>
                <li>Wiek: {{ $user['age'] }}</li>
            </ul>

            <a href="{{ route('get.users') }}" class="btn btn-light">Lista użytkowników</a>
        </div>
    </div>
@endsection
