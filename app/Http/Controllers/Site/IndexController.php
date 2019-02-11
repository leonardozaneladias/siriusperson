<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){

        $categories = \App\Models\Category::where('status', 1)->get();
        $layout = [
            'title' => 'Home Page'
        ];
        return view('site/index', compact('layout', 'categories'));
    }
}
