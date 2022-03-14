
@extends('layout.base')
@section('content')
{{-- commento --}}
<form action="{{ route('comic.store') }}" method="post" class="setting_backoffice">
  @csrf

  <input
  type="text"  
  name="title" 
  value="{{old('title')}}" 
  placeholder="titolo"><br>
  <p class="@error('title') missed_input_required @enderror">@error('title'){{ $message }}@enderror</p>

  <input
  type="text"  
  name="description" 
  value="{{old('description')}}" 
  placeholder="descrizione @error('description'){{ $message }}@enderror" class="@error('description') missed_input_required @enderror"><br>
  <p class="@error('description') missed_input_required @enderror">@error('description'){{ $message }}@enderror</p>

  <input
  type="text"  
  name="thumb" 
  value="{{old('thumb')}}" 
  placeholder="link immagine"><br>
  <p class="@error('thumb') missed_input_required @enderror">@error('thumb'){{ $message }}@enderror</p>

  <input
  type="number"  
  name="price" 
  value="{{old('price')}}" 
  placeholder="prezzo"><br>
  <p class="@error('price') missed_input_required @enderror">@error('price') <p class="missed_input_required"> {{ $message }} </p> @enderror</p>

  <input
  type="text"  
  name="series" 
  value="{{old('series')}}" 
  placeholder="serie @error('series'){{ $message }}@enderror" class="@error('series') missed_input_required @enderror"><br>
  <p class="@error('series') missed_input_required @enderror">@error('series'){{ $message }}@enderror</p>

  <input
  type="text"  
  name="sale_date" 
  value="{{old('sale_date')}}" 
  placeholder="uscita @error('sale_date'){{ $message }}@enderror" class="@error('sale_date') missed_input_required @enderror"><br>
  <p class="@error('sale_date') missed_input_required @enderror">@error('sale_date'){{ $message }}@enderror</p>

  <select id="type" name="type">
  <option value="graphic novel" {{ old("type") == "graphic novel" ? "selected" : null }} >graphic novel</option>
  <option value="comic book" {{ old("type") == "comic book" ? "selected" : null }}>comic book</option>
  </select><br>

  <button type="submit" value="Submit" placeholder="prodotto"> Crea </button>

</form> 
{{-- 
@if ($errors->any())
    <div class="alert alert-danger align_errors">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

@endsection