<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function GetProducts()
    {
        return view('products');
    }

    public function AboutUs()
    {
        return view('abouts');
    }

    public function ContactUs()
    {
        return view('contactus');
    }

    public function MyProducts()
    {
        return view('myproducts');
    }
}
