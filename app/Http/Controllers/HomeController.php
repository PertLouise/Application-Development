<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
 
class HomeController extends Controller
{
    public function index()
    {
        $allCategories = Category::all(); 
    
 
        return view('home', ['categories' => $allCategories]); 
}
}

