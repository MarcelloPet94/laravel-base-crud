@extends('layout.base')
@section('title','Pagina CRUD')

@section('content')

<a href="{{ route('comic.create') }}" target="_blank" >Crea</a>

<table>
  @foreach ($allComics as $comic)
    <tr>
        <td>{{ $comic->title }}</td>
        <td>{{ $comic->description }}</td>
        <td> <img src="{{ $comic->thumb }}" alt=""></td>
        <td>{{ $comic->price }}</td>
        <td>{{ $comic->series }}</td>
        <td>{{ $comic->sale_date }}</td>
        <td>{{ $comic->type }}</td>
        <td>
          <a href="{{ route('comic.show' , $comic->id) }}" target="_blank" >vedi</a>
          <a href="{{route("comic.edit", $comic->id)}}" target="_blank" >modifica</a>
          <form action="{{ route('comic.destroy', $comic->id) }}" method="post">
            @csrf
            @method("DELETE")
            
            <input type="submit" value="x">
          </form>

        </td>
    </tr>
    @endforeach
</table>
@endsection


