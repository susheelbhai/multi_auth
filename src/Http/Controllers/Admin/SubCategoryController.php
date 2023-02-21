<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SubCategory::all();
        return view('admin.resources.sub_categories.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::select('id as value', 'name as lbl' )->get();
        return view('admin.resources.sub_categories.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'icon' => 'required',
        ]);
        $category = new SubCategory();
        $category->category_id = $request->category;
        $category->name = $request->name;
        $category->icon = $request->icon;
        if (isset($request->is_active)) {
            $category->is_active = 1;
        } else {
            $category->is_active = 0;
        }
        
        $category->save();
        return redirect()->route('admin.subCategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = SubCategory::whereId($id)->first();
        return view('admin.resources.sub_categories.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::select('id as value', 'name as lbl' )->get();

        $data = SubCategory::whereId($id)->first();

        return view('admin.resources.sub_categories.edit', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'icon' => 'required',
        ]);
        $category = SubCategory::find($id);
        $category->category_id = $request->category;
        $category->name = $request->name;
        $category->icon = $request->icon;
        if (isset($request->is_active)) {
            $category->is_active = 1;
        } else {
            $category->is_active = 0;
        }
        $category->update();
        return redirect()->route('admin.subCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
