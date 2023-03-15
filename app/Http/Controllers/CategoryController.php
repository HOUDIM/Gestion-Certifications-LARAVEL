<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certif;
use App\Models\Category;
class CategoryController extends Controller
{
    //

    public function filter( Category $category)

    {
        $certifs = Certif::where('category_id','=',$category->id )->paginate(5);
        $cat = $category->nom; 
        return view('frontEnd.certifFilter', [
            'certifs'=> $certifs ,  //to get all certifs order by -id
            'cat'=> $cat // to send category   
        ]);

    }
    public function index()

    {
        $categories = Category::latest()->paginate(10);
        return view('frontEnd.category', [
            'categories'=> $categories   //to get all categories order by -id
        ]);

    }


}
