<?php

namespace App\Http\Controllers;

use App\models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColorController extends Controller
{
    public function showColorsPage(){
        $colors  = Color::paginate(5);
        return view('color.color' , compact("colors"));
    }

    public function saveColor(){
        $data = request()->validate([
            "name" => "required" ,
            "description" => ""
        ]);
        $data["user_id"] = Auth::user()->id;
        Color::create($data);
        return redirect()->route('dashboard.colors');
        
    }
}
