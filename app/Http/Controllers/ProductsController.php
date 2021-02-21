<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Welcome to the Laravel 8 Course";
        $desc = "Description";

        $data = [
            'prod1' => 'iPhone',
            'prod2' => 'Samsung',
        ];

        // return view(
        //     'products.index',
        //     compact('title', 'desc')
        // );

        // With Method
        // return view('products.index')->with('data', $data);

        // Directly in view
        return view('products.index', [
            'data' => $data,
        ]);
    }

    public function about()
    {
        return 'About us page';
    }
}
