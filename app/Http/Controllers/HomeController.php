<?php

namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Contracts\view\view;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): view
    {
        return view('app.frontend.index');
    }
}
