
@extends('layout.base')
@section('content')

<h1>{{ $book->title }}</h1>
<p>{{ $book->description }}</p>

@endsection