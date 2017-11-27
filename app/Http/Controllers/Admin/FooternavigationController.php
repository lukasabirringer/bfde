<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Footernavigation;
use App\Page;
use DB;

class FooternavigationController extends Controller
{
		public function index()
    {
        $footernavigations = Footernavigation::all();
        return view('admin.footernavigations.index', ['footernavigations' => $footernavigations]);
    }

    public function create()
    {
    	 $pages = Page::all();
       return view('admin.footernavigations.create', ['pages' => $pages]);
    }

    public function store(Request $request)
    { 
        DB::table('footernavigations')->insert(
            ['page_name' => $request->pageName,
             'position' => $request->menuPosition,]
        );
        return redirect('/admin/footernavigations/');
    }
    public function show($id)
    {
        $footernavigation = Footernavigation::where('id', $id)->firstorfail();
        return view('admin.footernavigations.show', compact('footernavigation'));  
    }

    public function update(Request $request, $id)
    {
        $pageName = $request->input('pageName');
        $menuPosition = $request->input('menuPosition');

        $footernavigation = Footernavigation::where('id', $id)->firstorfail();
        $footernavigation->page_name = $pageName;
        $footernavigation->position = $menuPosition;
        $footernavigation->save();

        return redirect('/admin/footernavigations');
    }

    public function edit($id)
    {
        $footernavigation = Footernavigation::where('id', $id)->firstorfail();
        return view('admin.footernavigations.edit', compact('footernavigation'));  
    }
    public function destroy($id)
    {
        $footernavigation = Footernavigation::where('id', $id)->firstorfail();
        $footernavigation->delete();
        return redirect('/admin/footernavigations');
    }
}
