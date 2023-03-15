<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certif;
use App\Models\Category;
use App\Models\User;

class HomeController extends Controller
{


    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::latest()->paginate(6);
        $certifs = Certif::latest()->paginate(3);
        $cates = Category::all();
        $cers = Certif::all();
        $user= User::all();
        $userTotal = $user->count();
        $cersTotal = $cers->count();
        $catesTotal = $cates->count();
        return view('frontEnd.home',compact('categories','certifs','userTotal','cersTotal','catesTotal'));
    }
}
