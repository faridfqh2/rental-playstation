<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $order = Order::orderBy("id","desc")->paginate(10);
        return view("admin",compact("order"));
    }

}
