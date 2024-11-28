<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function all(){
     $products =   Product::paginate(9);
     return view('admin.home',compact('products'));
    }

    public function show($id){
        $product = Product::findorfail($id);
        return view('admin.show',compact('product'));
    }

    public function create(){

        return view('admin.create');
    }

    public function store(Request $request){
        $data =$request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'required|numeric'
        ]);
        $data['image']= Storage::putFile('products', $request->image);
        Product::create($data);
        return view('admin.create')->with("success","Product created successfully");
}

public function delete($id){
    $product = Product::findorfail($id);
    Storage::delete($product->image);
    $product->delete();
    return redirect(url('/products'));

}

public function edit($id){
    $product = Product::findorfail($id);
    return view('admin.edit',compact('product'));
}

public function update(Request $request,$id){
    $data =$request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'quantity' => 'required|numeric'
    ]);
    $product = Product::findorfail($id);
    if($request->hasFile('image')){
        Storage::delete($product->image);
        $data['image']= Storage::putFile('products', $request->image);
    }
    $product->update($data);
    return redirect(url("/products/$id"));
}




}
