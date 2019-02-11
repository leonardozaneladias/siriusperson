<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $layout = [
            'title' => 'Sobre'
        ];
        return view('site.about', compact('layout'));
    }
}
