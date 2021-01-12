<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
       //$allCategories=['Categ 1','Categ 2','Categ 3'];
       $allCategories=Category::all();
       $allProducts=Product::all();
       return view('index',['categories'=>$allCategories,'products'=>$allProducts]);
    }
} 