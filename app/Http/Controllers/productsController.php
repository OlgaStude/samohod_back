<?php

namespace App\Http\Controllers;

use App\Http\Resources\productRecourse;
use App\Models\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{

    public function show()
    {

        $products = ['content' =>  productRecourse::collection(Product::all()), 'what' => 'is'];

        return response($products, 200)->header('Status', '200');
    }
}
