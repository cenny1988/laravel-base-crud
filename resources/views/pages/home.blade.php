@extends('layouts.main-layout')
@section('content')
    <h3>Lista fumetti disponibili:</h3>
    <ul>
        @foreach ($comics as $comic)
            <a href="#">
                <li>
                    {{ $comic->title }}
                </li>
            </a>
        @endforeach
    </ul>
@endsection