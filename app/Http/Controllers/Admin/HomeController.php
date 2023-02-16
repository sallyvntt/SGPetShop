<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view ('admin.homedb');
    }

    public function homedb()
    {
        $prods = Product::all();
        $order = Order::all();
        $user = User::all();
        return view ('admin.homedb',compact('prods' , 'order','user'));
    }

}
