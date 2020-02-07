<?php

namespace App\Http\Controllers;

use App\models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function showCategoriesPage(){
         $categories = Category::paginate(5);
        return view('category.category' , compact("categories"));
    }

    public function saveCategory(){
        $data = request()->validate([
            "name" => "required" , 
            "description" => ""
        ]);
        $data["user_id"] = Auth::user()->id;

        
        Category::create($data);
       return redirect()->route('dashboard.categories');
    }



}
