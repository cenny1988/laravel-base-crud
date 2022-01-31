@extends('layouts.main-layout')
@section('content')
    <h3>Lista fumetti disponibili:</h3>
    <a href=" {{ route('create') }} ">Add New</a>
    <ul>
        @foreach ($comics as $comic)
            <a href=" {{Route('show', $comic->id)}} ">
                <li>
                    {{ $comic->title }}
                </li>
            </a>
        @endforeach
    </ul>
@endsection