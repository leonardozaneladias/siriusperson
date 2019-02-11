<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use App\Models\Quotation;
use App\Models\QuotationProducts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Integer;

class QuotationKeepController extends Controller
{
    public function index(Request $request, Product $product, int $quantity)
    {

        if($request->session()->has('quotation.products')){
            $request->session()->push('quotation.products', ['product' => $product->id, 'quantity' => $product->quantity_minimal]);
        }else{
            $request->session()->put('quotation.products', [['product' => $product->id, 'quantity' => $product->quantity_minimal]]);
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
