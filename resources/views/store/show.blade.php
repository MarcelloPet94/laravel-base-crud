
@extends('layout.base')
@section('content')

<h1>{{ $comic->title }}</h1>
<p>{{ $comic->description }}</p>

@endsection