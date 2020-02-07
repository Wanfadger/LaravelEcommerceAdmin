<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showOrdersPage(){
        return view('order.order');
    }

    public function createOrder(){
        return view('order.create');
    }
}
