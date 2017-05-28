<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\Footernavigation;
use DB;

class PageController extends Controller
{
    public function index()
    {
        {
            $pages = Page::all();
            $footernavigations = Footernavigation::limit(5)->get();
         
            return view('frontend.pages.index', ['pages' => $pages, 'footernavigations' => $footernavigations]);
        }
    }
    public function show($slug)
    {   
        $page = Page::where('slug', $slug)->firstorfail();
        $footernavigations = Footernavigation::limit(5)->get();
        return view('frontend.pages.show', compact('page', 'footernavigations'));
    }
}