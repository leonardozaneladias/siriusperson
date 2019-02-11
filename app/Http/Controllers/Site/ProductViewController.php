<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductViewController extends Controller
{
    public function index($id)
    {

        $product = Product::find($id);
        $layout = [
            'title' => 'Produto'
        ];
        return view('site.product_view', compact('product', 'layout'));
    }
}
