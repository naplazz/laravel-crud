@extends('layouts.appLayout')
@section('content')
<div class="content">
    <h1>Crea nuovo prodotto</h1>
    <form action="{{ route('products.store') }}" method="post">
      @csrf
        <div class="form-group">
            <label for="nome">Nome prodotto</label>
            <input name='name'type="text" class="form-control" id="" placeholder="Inserisci nome">
        </div>
        <div class="form-group">
            <label for="description">Descrizione Prodotto</label>
            <textarea name="description" type="text" class="form-control" id="" placeholder="Inserisci Descrizione"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input name='price' type="number" class="form-control" id="" placeholder="Inserisci prezzo">
        </div>
        <div class="form-group row">
            <div class="">
                <button type="submit" class="btn btn-primary">Crea Prodotto</button>
            </div>
        </div>

    </form>
  </div>

    @endsection
