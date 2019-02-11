<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsByCategoryController extends Controller
{
    public function index($id)
    {
        $category = Category::find($id);
        $layout = [
            'title' => 'Categorias de Produtos'
        ];
        return view('site.products_by_category', compact('category', 'layout'));
    }
}
