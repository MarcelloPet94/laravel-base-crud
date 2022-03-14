
@extends('layout.base')
@section('content')
<div class="setting_backoffice">
    <h1>Modifica prodotto: {{ $comic->name }}</h1>
</div>
<form action="{{route("comic.update", $comic->id)}}" method="POST" class="setting_backoffice">
  @csrf
  @method('PUT')

  <input type="text"  name="title" value="{{$comic->title}}" placeholder="prodotto"><br>
  <input type="text"  name="description" value="{{$comic->description}}" placeholder="prodotto"><br>
  <input type="text"  name="thumb" value="{{$comic->thumb}}" placeholder="prodotto"><br>
  <input type="number"  name="price" value="{{$comic->price}}" placeholder="prodotto"><br>
  <input type="text"  name="series" value="{{$comic->series}}" placeholder="prodotto"><br>
  <input type="text"  name="sale_date" value="{{$comic->sale_date}}" placeholder="prodotto"><br>

  <select id="type" name="type">
    <option value="graphic novel" {{$comic->type == "graphic novel"? "selected": ""}}>graphic novel</option>
    <option value="comic book" {{$comic->type == "comic book"? "selected": ""}}>comic book</option>
  </select><br>

  <button class="save_btn" type="submit" value="Submit" placeholder="prodotto"> Salva modifiche </button>

</form> 
@endsection