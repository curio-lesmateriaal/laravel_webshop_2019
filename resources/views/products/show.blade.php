@extends('app')

  @section('content')
    <div class="card">
      <div class="card-body">
          <img width="200px" src="@if($product->image_path){{asset('storage/images/' . $product->image_path)}} @else http://placehold.it/200x200 @endif" alt="">
        <h1 class="card-title"> {{ $product->name }} </h1>
        <p class="card-text"> {{ $product->price }} </p>
        <p>Categorie: <a style="color: black" href="{{route('categories.show', $product->category->id)}}">{{ $product->category->name  }}</a></p>
        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">EDIT</a>


          <form method="POST" action="{{ route('products.destroy', $product->id) }}">
          @csrf
          @method('DELETE')
          <input class="btn btn-warning" type="submit" value="DELETE">
          </form>

          <form action="{{route('orders.store')}}" method="post">
              @csrf
              <input type="hidden" name="product_id" value="{{$product->id}}" >
              <input type="submit" value="Kopuh" class="btn btn-info">
          </form>

      </div>
    </div>
  @endsection
