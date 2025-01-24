<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

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

    // 表示できていない
    public function create(Request $request)
    {
        return view('register');
    }

    public function update(ProductRequest $request)
    {
        $product = $request->only(['name', 'price', 'description']);
        Product::find($request->id)->update($product);

        // $img = $request->file('image');
        // $path = $img->store('img', 'public');

        // Product::create(['image' => $path]);
        return redirect('/products');
    }

    public function destroy(Request $request)
    {
        Product::find($request->id)->delete();
        return redirect('/products');
    }
}