<?php

namespace App\Http\Controllers;

use App\models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SizeController extends Controller
{
    public function showSizesPage(){
        $sizes = Size::paginate(4);
            return view('size.size' , compact("sizes"));
    }

    public function saveSize(){
        $data = request()->validate([
            "name" => "required",
            "description" => ""
        ]);
          
        $data["user_id"] = Auth::user()->id;
        
        Size::create($data);
        return redirect()->route('dashboard.sizes');

    }
}
