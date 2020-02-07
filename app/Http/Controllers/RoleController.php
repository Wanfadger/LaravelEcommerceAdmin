<?php

namespace App\Http\Controllers;

use App\models\Role;
use Illuminate\Http\Request;


class RoleController extends Controller
{
    
    public function showRolesPage(){
        $roles = Role::paginate(3);
        return view('roles.roles' , compact("roles"));
    }

    public function saveRole(){
        $data = request()->validate([
          "name" => "required" ,
          "description" => ""
        ]);
        Role::create($data);
       return redirect()->route('dashboard.roles');
    }

    public function deleteRole(){
        $data = request()->validate([
            "id" => "required|numeric"
        ]);
        Role::destroy($data["id"]);
        return redirect()->route('roles.delete');
    }
}
