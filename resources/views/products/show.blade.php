@extends('layouts.appLayout')
@section('content')
  <div class="content">
  <h1>Prodotto: {{$product->name}}</h1>
  <p>Descrizione: {{$product->description}}</p>
  <h3>Prezzo: {{$product->price}}</h3>
  <p>Azioni:</p>
  <a href="/products" type="button" class="btn btn-warning"> Tutti i Prodotti</a>
  <button onclick="window.location.href='/products/{{ $product->id }}/edit'" type="button" class="btn btn-warning">Edit</button>
  <form class="" action="{{ route('products.destroy', $product->id)}}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit" name="button" class="btn btn-danger">Cancella</button>

  </form>
</div>

@endsection
