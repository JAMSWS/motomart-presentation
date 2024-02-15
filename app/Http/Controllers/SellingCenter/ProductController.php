<?php

namespace App\Http\Controllers\SellingCenter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('sellercenter.products.index');
    }


    public function create()
    {
        return view('sellercenter.products.create');
    }


}
