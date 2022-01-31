@extends('layouts.main-layout')
@section('content')
    <h3>Lista fumetti disponibili:</h3>
    <a href=" {{ route('create') }} ">Add New</a>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href=" {{Route('show', $comic->id)}} ">
                {{ $comic->title }}
                </a>
                - <a href=" {{route('edit', $comic -> id)}} ">EDIT</a>
            </li>
        @endforeach
    </ul>
@endsection