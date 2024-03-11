<?php

namespace App\Http\Controllers\SellingCenter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservedBuyerController extends Controller
{
    public function index()
    {
        return view('sellercenter.reservedBuyer');
    }

}
