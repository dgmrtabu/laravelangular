<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // GetAllProduct
    public function getProduct(){
        return response()->json(Product::all(),200);
    }

    // GetProductById
    public function getProductByuId($id){
        $product = Product::find($id);
        if(is_null($product)){
            return response() -> json(['message' => 'Product introuvable'], 404);
        }
        return response()->json(Product::find($id),200);
        }
}
