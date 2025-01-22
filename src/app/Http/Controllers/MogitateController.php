<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MogitateController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        if($keyword) {
            $products = Product::
                where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('name','$keyword')
                ->paginate(6);
        }else{
            $products = Product::paginate(6);
        }

        return view('index', [
            'products' => $products, 
            'keyword' => $keyword
        ]);
    }

    public function detail(Product $product)
    {
        $seasons = $product->seasons;
        return view('detail', compact('product', 'seasons'));
    }

    public function create(Request $request)
    {
        return view('register');
    }
}