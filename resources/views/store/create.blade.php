
@extends('layout.base')
@section('content')
{{-- commento --}}
<form action="{{ route('comic.store') }}" method="post">
  @csrf

  <input type="text"  name="title" value="title" placeholder="prodotto"><br>
  <input type="text"  name="description" value="description" placeholder="prodotto"><br>
  <input type="text"  name="thumb" value="thumb" placeholder="prodotto"><br>
  <input type="number"  name="price" value="price" placeholder="prodotto"><br>
  <input type="text"  name="series" value="series" placeholder="prodotto"><br>
  <input type="text"  name="sale_date" value="sale_date" placeholder="prodotto"><br>

  <select id="type" name="type">
    <option value="graphic novel">graphic novel</option>
    <option value="comic book">comic book</option>
  </select><br>

  <button type="submit" value="Submit" placeholder="prodotto"> Crea </button>

</form> 
@endsection