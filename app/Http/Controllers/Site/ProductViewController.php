<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductViewController extends Controller
{
    public function index(Request $request, $id)
    {
        $product_quotation = false;
        $products_session = $request->session()->get('quotations.products');

        if($request->session()->has('quotation.products')){

            foreach ($request->session()->get('quotation.products') as $s){
                if($id == $s['product']){
                    $product_quotation = true;
                }
            }
        }


        $product = Product::find($id);
        $layout = [
            'title' => 'Produto'
        ];
        return view('site.product_view', compact('product', 'layout', 'product_quotation'));
    }
}
