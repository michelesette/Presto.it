<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article =  Article::create([
                
            'title'=>$request->title,
            'subtitle'=>$request-> subtitle,
            'body'=>$request->body
         ]);
         if($request->file('img')){
          $article->img = $request->file('img')->store('public/img');
          $article->save();
         }

        // $article->categories()->attach($request->categories);

        return redirect()->back()->with('message','articolo inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('article.edit', compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        if ($request->file('img')) {
            $img = $request->file('img') ->store('public/img');
        }
        else{
            $img = $article->img;
        }

        $article->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' => $img
        ]);

        // dd($article);

        return redirect(route('article.index'))->with('message', 'articolo modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()->with('message', 'articolo eliminato');
    }
}
