@extends('layouts.main-layout')
@section('content')
    <h3>Details Comic</h3>
    <h4>{{ $comic->title }}</h4>
    Author: {{ $comic->author }} - Date of release: {{ $comic->release_date }} <br>
    Pages: {{ $comic->pages }} 
@endsection