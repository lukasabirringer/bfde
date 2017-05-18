<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use DB;

class PageController extends Controller
{
    public function index()
    {
        {
            $pages = Page::all();
            
            return view('frontend.pages.index', ['pages' => $pages]);
        }
    }
    public function show($id)
    {
        $page = Page::findOrFail($id);

        return view('frontend.pages.show', compact('page'));
    }

}
