<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Word;

class WordsController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }
    
    public function create(Category $category)
    {
        return view('admin.words.create', compact('category'));
    }

    public function store(Request $request, Category $category)
    {
        $category->addWord(new Word($request->all()));

        return redirect()->route('admin.categories.show', compact('category'));
    }
}
