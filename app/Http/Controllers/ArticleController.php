<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

        public function byCategory(Category $category)
    {
        $articles = $category->articles()->orderBy('created_at', 'desc')->get();
        return view('article.byCategory', compact('category','articles'));
    }

    public function byUser(User $user)
    {
        $articles = $user->articles()->orderBy('created_at', 'desc')->get();
        return view('article.byUser', compact('user','articles'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         //recupero tutti i tags
       $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $article= Auth::user()->articles()->create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body'=> $request->body,
            'category_id'=> $request->category_id
        ]);


        if($request->file('img')){

            $article->img=$request->file('img')->store('public/img');
            $article->save();
            
        }

        return redirect()->back()->with('message', 'Articolo creato correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
         $categories = Category::all();

        return view('article.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        if($request->file('img')){

            $img= $request->file('img')
                 ->store('public/img');

         } else {

             $img = $article->img;
         }


         $article->update([
             'title' => $request->title,
             'subtitle' => $request->subtitle,
             'body' => $request->body,
             'img'=> $img
         ]);
        //  $article->category()->sync([$request->categories]);
         return redirect(route('article.index'))->with('message', 'Articolo modificato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('article.index'))->with('message', 'Articolo eliminato con successo!');
    }
}


