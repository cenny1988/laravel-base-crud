@extends('layouts.main-layout')
@section('content')

    <h3>Update Comic</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action=" {{route('update', $comic -> id)}} " method="POST">
        @method('POST')
        @csrf

        <label for="title">Titolo:</label>
        <input type="text" name="title" placeholder="insert title" value=" {{$comic -> title }} ">

        <label for="author">Autore:</label>
        <input type="text" name="author" placeholder="insert author" value=" {{$comic -> author }} ">

        <label for="release_date">Data Uscita:</label>
        <input type="date" name="release_date" placeholder="insert release_date" value="{{ $comic -> release_date }}">

        <label for="pages">#Pagine</label>
        <input type="number" name="pages" placeholder="insert pages" value="{{ $comic -> pages }}">

        <input type="submit" name="CREATE">
    </form>

@endsection