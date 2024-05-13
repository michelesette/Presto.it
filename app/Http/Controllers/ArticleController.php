<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
         //recupero tutti i tags
       $tags = Tag::all();
        return view('article.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $articles = Auth::user()->articles()->create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body'=> $request->body,
            'created_at'=> $request->created_at
        ]);

        $articles->tags()->attach($request->tags);

        if($request->file('img')){

            $article->img=$request->file('img')->store('public/img');
            $article->save();
        }

        $articles
        ->tags() // MANY TO MANY def nel modello, compio questa operazione quando devo scrivere nel database
        ->attach($request->tags); // Gli passo gli ID del megli oggetti che voglio mettere in relazione al modello di partenza

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
         $tags = Tag::all();

        return view('article.edit', compact('article', 'tags'));
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

         $article->tags()->sync($request->tags); //sincronizza l'attuale relazione aggiornata tra i tag selezionati e quelli deselezionati

         return redirect(route('article.index'))->with('message', 'Articolo modificato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->tags()->detach();
        $article->delete();

        return redirect(route('article.index'))->with('message', 'Articolo eliminato con successo!');
    }
}
