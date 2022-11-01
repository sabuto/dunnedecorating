<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class RouteController extends Controller
{
    public function index()
    {
        return view('Pages.index');
    }

    public function portfolio()
    {
        return view('Pages.portfolio');
    }

    public function getQuote()
    {
        //
    }
}
