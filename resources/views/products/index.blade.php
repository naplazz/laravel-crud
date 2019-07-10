@extends('layouts.appLayout')
@section('content')
  <div class="content">
<h1 id='prdtitle'>Prodotti</h1><a id='create-btn' href="products/create" type="button" name="button">Crea Nuovo</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
            <th>Creato il</th>
            <th>Modificato il</th>
            <th>Azioni</th>
        </tr>
    </thead>
    <tbody>
        @if(count($products) > 1)
          @foreach ($products as $product)
          <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->created_at }}</td>
              <td>{{ $product->updated_at }}</td>
              <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                      <button onclick="window.location.href='/products/{{ $product->id }}'" type="button" class="btn btn-success">Visualizza</button>
                      <button onclick="window.location.href='/products/{{ $product->id }}/edit'" type="button" class="btn btn-primary">Modifica</button>
                      <form class="" action="{{ route('products.destroy', $product->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" name="button" class="btn btn-danger">Cancella</button>

                      </form>
                  </div>
              </td>

          </tr>
          @endforeach
        @else
        <h3>Non ci sono prodotti</h3>
        @endif
    </tbody>
</table>
</div>
@endsection
