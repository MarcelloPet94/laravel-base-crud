@extends('layout.base')
@section('title','Pagina CRUD')

@section('content')

<table>
  @foreach ($allComics as $book)
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->description }}</td>
        <td>{{ $book->price }}</td>
        <td>{{ $book->series }}</td>
        <td>{{ $book->sale_date }}</td>
        <td>{{ $book->type }}</td>
        <td><a href="{{ route('storebooks.show' , $book->id) }}" target="_blank" >vedi</a></td>
    </tr>
    @endforeach
</table>
@endsection


