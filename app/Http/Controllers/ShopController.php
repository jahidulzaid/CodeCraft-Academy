<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index(){
        return view('website.shop.index');
    }
}
