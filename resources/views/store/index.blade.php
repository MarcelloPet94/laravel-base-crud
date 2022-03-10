@extends('layout.base')
@section('title','Pagina CRUD')

@section('content')

<table>
  @foreach ($allComics as $comic)
    <tr>
        <td>{{ $comic->title }}</td>
        <td>{{ $comic->description }}</td>
        <td>{{ $comic->price }}</td>
        <td>{{ $comic->series }}</td>
        <td>{{ $comic->sale_date }}</td>
        <td>{{ $comic->type }}</td>
        <td><a href="{{ route('comic.show' , $comic->id) }}" target="_blank" >vedi</a></td>
    </tr>
    @endforeach
</table>
@endsection


