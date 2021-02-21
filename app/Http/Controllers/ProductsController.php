<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Welcome to the Laravel 8 Course";
        return view('products.index', compact('title'));
    }

    public function about()
    {
        return 'About us page';
    }
}
