@extends('admin.layout')

@section('body')

<div class="container">

    <div class="row">
        <div class="col-6 d-flex flex-column justify-content-center ">
            <h1> name :{{ $product->name }}</h1>
            <h1> description :{{ $product->description }}</h1>
            <h1> price :{{ $product->price }}</h1>
            <h1> quantity :{{ $product->quantity }}</h1>
            

        </div>
        <div class="col-6">
            <img src="{{asset("storage/$product->image")}}" alt="" width= "300">

                </div>
            
        </div>
    </div>

@endsection