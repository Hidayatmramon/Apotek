<?php

namespace App\Http\Controllers;

use App\Models\Hari;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
       if (Auth::user()->role === 'admin') {
        $haris = Hari::all();
        return view('admin.index', compact('haris'));
    } elseif (Auth::user()->role === 'kasir') {
        $haris = Hari::all();
        return view('admin.index', compact('haris'));
    } else {
        return view('home.index');
    }
    }

     public function home(){
//           $haris=Hari::all();
         return view('home.index');
     }
     public function detilHari($slug)
     {
         if (Auth::user()->role !== 'user') {
             $students = User::where("hari", $slug)->get();
             return view('tabel.tabel', compact("students"));
         }
     }
}
