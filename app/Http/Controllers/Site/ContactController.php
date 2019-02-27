<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $layout = [
            'title' => 'Contato'
        ];
        return view('site.contact', compact('layout'));
    }
}
