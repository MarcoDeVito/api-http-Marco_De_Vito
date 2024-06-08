<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PrestoController extends Controller
{
    public function products(){
        return Product::all();
    }
}
