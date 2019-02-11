<?php

namespace App\Http\Controllers\Site;

use App\Models\Quotation;
use App\Models\QuotationProducts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuotationKeepController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->get('product');
        $quantity = $request->get('quantity');
        if($quantity<=0){
            return redirect()->back();
        }

        if($request->session()->has('quotation.products')){

            foreach ($request->session()->get('quotation.products') as $s){
                if($id == $s['product']){
                    return redirect()->back();
                }
            }

            $request->session()->push('quotation.products', ['product' => $id, 'quantity' => $quantity]);
        }else{
            $request->session()->put('quotation.products', [['product' => $id, 'quantity' => $quantity]]);
        }
        $request->session()->save();
        $layout = [
            'title' => 'Orçamento'
        ];

        return view('site.quotation_keep', compact('layout'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $quotation = Quotation::create($data);
        $quo_session = $request->session()->get('quotation.products');
        foreach ($quo_session  as $prods){
            $data2 = [
                'quotation_id' => $quotation->id,
                'product_id' => $prods['product'],
                'quantity' => $prods['quantity']
            ];
            QuotationProducts::create($data2);
        }
        $request->session()->flush();
        redirect()->route('site.quotation.conclusion');

    }

    public function conclusion()
    {
        return view('site.quotation_conclusion');
    }

}
