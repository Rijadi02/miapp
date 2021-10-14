<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin/blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
                'title' => 'required',
                'author' => 'required',
                'content' => 'required',
                'image' => 'required',
                'tags' => 'required',
            ]
        );

        $blog = new \App\Models\Blog();

        $slug = Str::slug($data['title'], '-');
        $blog->slug = $slug;
        $blog->title = $data['title'];
        $blog->author = $data['author'];
        $blog->tags = $data['tags'];
        $blog->content = $data['content'];

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $blog->image = $inputs['image'];

            $file = request('image');
            $file_name =  $inputs['image'];
            $img  = Image::make($file);
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save(\public_path($file_name));
        }

        $blog->save();

        // if ($category->isDirty('name')) {
        //     session()->flash('category-add', 'Category added: ' . request('name'));
        // } else {
        //     session()->flash('category-add', 'Nothing to add: ' . request('name'));
        // }



        return redirect('/admin/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blogs = Blog::all();
        return view('admin.blog', compact('blogs', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $data = request()->validate(
            [
                'title' => 'required',
                'author' => 'required',
                'content' => 'required',
                'image' => '',
                'tags' => 'required',
            ]
        );

        $slug = Str::slug($data['title'], '-');
        $blog->slug = $slug;
        $blog->title = $data['title'];
        $blog->author = $data['author'];
        $blog->tags = $data['tags'];
        $blog->content = $data['content'];

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $blog->image = $inputs['image'];

            $file = request('image');
            $file_name =  $inputs['image'];
            $img  = Image::make($file);
            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save(\public_path($file_name));
        }

        $blog->save();

        // if ($category->isDirty('name')) {
        //     session()->flash('category-add', 'Category added: ' . request('name'));
        // } else {
        //     session()->flash('category-add', 'Nothing to add: ' . request('name'));
        // }

        return redirect('/admin/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        session()->flash('blog-deleted', 'Blog deleted: ' . $blog->name);
        return back();
    }
}
