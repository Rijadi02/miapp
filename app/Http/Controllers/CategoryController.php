<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin/category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = request()->validate(
            [
                'slug' => 'required',
                'name' => 'required',
                'image' => 'required|image',

            ]
        );

        $category = new \App\Models\Category();
        $slug = Str::slug($data['slug'], '-');
        $category->slug = $slug;
        $category->name = $data['name'];

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $category->image = $inputs['image'];
        } else {
            $category->image = 'null';
        }

        $category->save();


        // if ($category->isDirty('name')) {
        //     session()->flash('category-add', 'Category added: ' . request('name'));
        // } else {
        //     session()->flash('category-add', 'Nothing to add: ' . request('name'));
        // }

        return redirect('/admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin/category', compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'image' => 'image',
            ]
        );


        $category->name = $data['name'];

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $category->image = $inputs['image'];
        }

        #TODO FIX UPDATE SVED ONLY IF NAME IS DIRTY
        // if ($category->isDirty('name')) {
        //     session()->flash('category-add', 'Category added: ' . request('name'));
        // } else {
        //     session()->flash('category-add', 'Nothing to add: ' . request('name'));
        // }

        $category->save();

        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // $category->delete();
        // session()->flash('category-deleted', 'Category deleted: ' . $category->name);
        return back();
    }
}
