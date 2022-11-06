<?php

namespace App\Http\Controllers;

use App\Helpers\CollectionHelper;
use App\Mail\QuoteRequested;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class RouteController extends Controller
{
    public function index()
    {
        return view('Pages.index');
    }

    public function portfolio()
    {
        $dir = glob("img/portfolio/*.{jpg}", GLOB_BRACE);

        $pag = CollectionHelper::paginate(collect($dir), 6);
        return view('Pages.portfolio', compact('pag'));
    }

    public function getQuote()
    {
        return view('Pages.quote');
    }

    public function postQuote(Request $request)
    {
        Mail::to('dunnedecorating01@gmail.com')
            ->send(new QuoteRequested($request->email, $request->message, $request->name));

        session()->flash('success', 'Your quote will be on the way soon!');

        return redirect()->to('quote')->withSuccess('Your quote will be on the way soon!');
    }
}
