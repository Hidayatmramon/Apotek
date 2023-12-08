<?php

namespace App\Http\Controllers;

use App\Models\Hari;
use App\Models\User;
use App\Models\Medicine;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
       if (Auth::user()->role === 'admin') {
        return view('admin.index');
    } elseif (Auth::user()->role === 'kasir') {
        $query = Order::with('user');
        $orders = $query->simplePaginate(10);
        return view('kasir.index', compact('orders'));
    } else {
        return view('home.index');
    }
    }

     public function home(){
        $medicine = Medicine::all();
        return view('home.index', compact('medicine'));

     }
     public function detilHari($slug)
     {
         if (Auth::user()->role !== 'user') {
             $students = User::where("hari", $slug)->get();
             return view('tabel.tabel', compact("students"));
         }
     }
}
