@extends('admin.layout')

@section('body')

<table class="table">
  <thead>
      <tr>
          <th>id</th>
          <th>name</th>
          <th>description</th>
          <th class="text-right">price</th>
          <th class="text-right">image</th>
          <th class="text-center">Action</th> 
      </tr>
  </thead>
  <tbody>
      @foreach ($products as $product)
      <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->description}}</td>
          <td class="text-right">{{$product->price}}</td>
          <td class="text-right">
              <img src="{{asset("storage/$product->image")}}" alt="" width="50">
          </td>
          <td class="text-center">
            <a class="btn btn-primary" href="{{url("products/$product->id")}}">Show</a>


              <a class="btn btn-primary" href="{{url("products/edit/$product->id")}}">Edit</a>
              <form action="{{url("products/$product->id")}}" method="POST" style="display: inline-block;">
                  
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>


  {{ $products->links() }}

@endsection