@extends('layouts.appLayout')
@section('content')
<div class="content">
    <h1>Modifica prodotto: {{$product->id}} </h1>
    <form action="{{ route('products.update', $product->id)}}" method="post">
      @method('PUT')
      @csrf
        <div class="form-group">
            <label for="nome">Nome prodotto</label>
            <input name='name'type="text" class="form-control" id="" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione Prodotto</label>
            <textarea name="description" type="text" class="form-control" id="" value="">{{$product->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input name='price' type="number" class="form-control" id="" value="{{$product->price}}">
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Aggiorna</button>
            </div>
        </div>

    </form>

    @endsection
