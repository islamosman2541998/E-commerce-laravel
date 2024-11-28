<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Product::create([
              "name" => "Product 1",
              "description" => "Product 1 description",
              "price" =>10.99,
              "image" => "products/1.png",
              "quantity" =>10
          ]);
          Product::create([
              "name" => "Product 2",
              "description" => "Product 2 description",
              "price" =>2.99,
              "image" => "products/2.png",
              "quantity" =>2
          ]);
          Product::create([
              "name" => "Product 3",
              "description" => "Product 3 description",
              "price" =>3.99,
              "image" => "products/3.png",
              "quantity" =>3
          ]);
          Product::create([
              "name" => "Product 4",
              "description" => "Product 4 description",
              "price" =>4,
              "image" => "products/4.png",
              "quantity" =>4
          ]);
          Product::create([
              "name" => "Product 5",
              "description" => "Product 5 description",
              "price" =>15.99,
              "image" => "products/5.png",
              "quantity" =>5
          ]);
    }
}
