<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {

        $books = $category->books;
        return view('admin.book', compact('books', 'category'));
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
    public function store(Request $request, $category)
    {

        $data = request()->validate(
            [
                'name' => 'required',
                'image' => 'required|image',
            ]
        );

        $book = new \App\Models\Book();

        $slug = Str::slug($data['name'], '-');
        $book->slug = $slug;

        $book->name = $data['name'];
        $book->category_id = $category;

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $book->image = $inputs['image'];
        } else {
            $book->image = 'null';
        }
        $book->save();


        // if ($book->isDirty('name')) {
        //     session()->flash('book-add', 'Book added: ' . request('name'));
        // } else {
        //     session()->flash('book-add', 'Nothing to add: ' . request('name'));
        // }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $books = Book::all()->where('category_id', '=', $book->category_id);
        return view('admin/book', compact('books', 'book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = request()->validate(
            [
                'name' => 'required',
                'image' => 'image',

            ]
        );


        $book->name = $data['name'];

        $slug = Str::slug($data['name'], '-');
        $book->slug = $slug;

        if (request('image')) {
            $inputs['image'] = request('image')->store('uploads', 'public');
            $book->image = $inputs['image'];
        }

        $book->save();


        // if ($book->isDirty('name')) {
        //     session()->flash('book-add', 'Category added: ' . request('name'));
        // } else {
        //     session()->flash('book-add', 'Nothing to add: ' . request('name'));
        // }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        session()->flash('book-deleted', 'Book deleted: ' . $book->name);
        return back();
    }
}
