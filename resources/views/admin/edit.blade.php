@extends('admin.layout')

@section('body')

<form method="POST" action="{{url("products/$product->id")}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">product Name</label>
    <input type="text" name="name" value="{{$product->name}}" class ="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>

  <div class="form-group">
      <label for="exampleInputEmail1">product description</label>
      <textarea type="text"  name="description" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter desc"> {{$product->description}}</textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">product Price</label>
      <input type="number" name="price" value="{{$product->price}}" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">product quantity</label>
      <input type="text" name="quantity" value="{{$product->quantity}}" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price">
    </div>

    <div class="form-group">
      <img src="{{asset("storage/$product->image")}}" alt="" width= "100">

      <label for="exampleInputEmail1">product image</label>
      <input type="file" name="image"    class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection