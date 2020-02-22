<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pages;

class PagesController extends Controller
{
    //
    public function index()
    {
        $pages = Pages::all();
        return view('pages.main')->with([
            'pages' => $pages,
        ]);
    }
    public function slug($slug)
    {
        $page = Pages::where('slug', '=', $slug)->firstOrFail();
        return view('pages.slug')->with([
            'page' => $page,
        ]);
    }
}
