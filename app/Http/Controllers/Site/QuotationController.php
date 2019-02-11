<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuotationController extends Controller
{
    public function index(Request $request){

        $remove_id = $request->get('remove_id');
        $products = $request->session()->get('quotation.products');
        $products_temp =[];

        if(isset($remove_id) and $remove_id > 0){
            foreach ($products as $i => $p){
                if(!($p['product'] == $remove_id)){
                    $products_temp[] = $p;
                }
            }
            $request->session()->put('quotation.products', $products_temp);
            $request->session('quotation.products')->save();
            $products = $request->session()->get('quotation.products');
        }



        if(isset($products) and count($products) > 0){
            foreach ($products as $p){
                $prod_temp[] = $p['product'];
            }
            $products = Product::whereIn('id', $prod_temp)->get();
        }else{
            $products = [];
        }

        $layout = [
            'title' => 'Orçamento'
        ];
        return view('site.quotation', compact('products','layout'));
    }
}
