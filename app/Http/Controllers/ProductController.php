<?php

namespace App\Http\Controllers;

use App\models\Category;
use App\models\Color;
use App\models\Size;
use App\models\SubCategory;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function showProductsPage(){
      $products = Product::all();  
      
      return view('product.product' ,compact("products")); 
       }

       public function createProductsPage(){
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $sizes = Size::all();
        $colors = Color::all();
        
        return view('product.create' , compact("categories" , "subCategories" , "colors" , "sizes")); 
       }

       public function saveProduct(){
        //    $product = new Product();
        //    $product->name = request('name');
        //    $product->description = request('description');
        //    $product->quantity = request('quantity');
        //    $product->subcategory_id = request('subCategory');

           //setting user id
//           $product->user_id = Auth::user()->id;
           dd(request()->input());
           //saving product
     
           $savedProduct =   Product::create([
               "name" => request("name") , 
               "description" => \request("description") ,
               "quantity" => request("quantity"),
               "subcategory_id" => request("subCategory"),
               "user_id" => Auth::user()->id
           ]);
        //   $savedProduct = Product::find(3); 
          // dd(request()->input());
        //dd($savedProduct);
                //    //setting size
           $size = request('size');
           $savedProduct->sizes()->attach($size);
           //setting producy colors
           $colors = request('colors');
          //dd($colors);
           $savedProduct->colors()->attach($colors);
           
           
           return redirect()->route('dashboard.products');

        
       }
}
