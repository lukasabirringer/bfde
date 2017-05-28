<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use DB;

class PageController extends Controller
{
    
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', ['pages' => $pages]);
    }

    public function create()
    {
       return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        DB::table('pages')->insert(
            ['name' => $request->pageName,
             'description' => $request->pageDescription,
             'content' => $request->pageContent,
             'slug' => $request->pageSlug,
             'visible' => $request->pageVisible,]
            );
        return redirect('/admin/pages/');
    }

    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstorfail();
        return view('admin.pages.show', compact('page'));  
    }

    public function edit($slug)
    {
        $page = Page::where('slug', $slug)->firstorfail();
        return view('admin.pages.edit', compact('page'));  
    }

    public function update(Request $request, $slug)
    {
        $newname = $request->input('pageName');
        $newdescription = $request->input('pageDescription');
        $newcontent = $request->input('pageContent');
        $newslug = $request->input('pageSlug');
        $newvisible = $request->input('pageVisible');

        $page = Page::where('slug', $slug)->firstorfail();
        $page->name = $newname;
        $page->description = $newescription;
        $page->content = $newcontent;
        $page->slug = $newslug;
        $page->visible = $newvisible;
        $page->save();

        return redirect('/admin/pages');
    }

    public function destroy($slug)
    {
        $page = Page::where('slug', $slug)->firstorfail();
        $page->delete();
        return redirect('/admin/pages');
    }
}
