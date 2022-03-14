
@extends('layout.base')
@section('content')
<div class="setting_backoffice">
    <h1>Modifica prodotto: {{ $comic->name }}</h1>
</div>
<form action="{{route("comic.update", $comic->id)}}" method="POST" class="setting_backoffice">
  @csrf
  @method('PUT')

  <input type="text"  name="title" value="{{old("title") ? old("title") : $comic->title}}" placeholder="prodotto"><br>
  <p class="@error('title') missed_input_required @enderror">@error('title'){{ $message }}@enderror</p>
  
  <input type="text"  name="description" value="{{$comic->description}}" placeholder="prodotto"><br>
  <p class="@error('description') missed_input_required @enderror">@error('description'){{ $message }}@enderror</p>

  <input type="text"  name="thumb" value="{{$comic->thumb}}" placeholder="prodotto"><br>
  <p class="@error('thumb') missed_input_required @enderror">@error('thumb'){{ $message }}@enderror</p>

  <input type="number"  name="price" value="{{$comic->price}}" placeholder="prodotto"><br>
  <p class="@error('price') missed_input_required @enderror">@error('price'){{ $message }}@enderror</p>
  
  <input type="text"  name="series" value="{{$comic->series}}" placeholder="prodotto"><br>
  <p class="@error('series') missed_input_required @enderror">@error('series'){{ $message }}@enderror</p>
  
  <input type="text"  name="sale_date" value="{{$comic->sale_date}}" placeholder="prodotto"><br>
  <p class="@error('sale_date') missed_input_required @enderror">@error('sale_date'){{ $message }}@enderror</p>

  <select id="type" name="type">
    @php
        $check = old('type') ? old('type') : $comic->type;
    @endphp     

    <option value="graphic novel" {{$check == "graphic novel"? "selected": ""}}>graphic novel</option>
    <option value="comic book" {{$check == "comic book"? "selected": ""}}>comic book</option>
  </select><br>

  <button class="save_btn" type="submit" value="Submit" placeholder="prodotto"> Salva modifiche </button>

</form> 
@endsection