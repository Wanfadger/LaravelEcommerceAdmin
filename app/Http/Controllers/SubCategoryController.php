<?php

namespace App\Http\Controllers;

use App\models\Category;
use App\models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function save(){
        $data = request()->validate([
            "name" => "required" ,
            "category_id" => "required|numeric",
            "description" => ""
        ]);
        SubCategory::create($data);
        return redirect()->route('dashboard.subcategories');
    }

    public function showSubCategoriesPage(){
        $subCategories = SubCategory::paginate(5);
        $categories = Category::all();
        return view("subcategories.subcategory" , compact("subCategories" , "categories"));
    }

    public function getCatergorySubCategories(){
     $subCategories = SubCategory::findorFail(1);
    //  dd($subCategories);
        
        
        return response()->json($subCategories);
     
    }
}
