<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index($id = null)
    // {
    //     //
    //     $articles = Article::all();
    //     if($id){
    //         return view('articles',['articles'=> $articles]);
    //     }
    //     $article = Article::findOrFail($id);
    //     return view('articles',['articles'=> $articles, 'article'=>$article, 'id'=> $id]);
    // }
    public function index($id = null)
    {
        //
        
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
        $article = new Article();
        $article->code = request('code');
        $article->designation = request('designation');
        $article->status = request('status');
        $article->categorie = request('categorie');
        $article->pv = request('pv');
        $article->pa = request('pa');
        $article->uv = request('uv');
        $article->ua = request('ua');
        $article->save();

        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article = Article::findOrFail($id);
        return view('articles');
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
        //
        $newData = $request->all();
        $article = Article::findOrFail($id);
        $article->code = $newData['code1'];
        $article->designation = $newData['designation1'];
        $article->status = $newData['status1'];
        $article->categorie = $newData['categorie1'];
        $article->pv = $newData['pv1'];
        $article->pa = $newData['pa1'];
        $article->uv = $newData['uv1'];
        $article->ua = $newData['ua1'];
        $article->save();
        return redirect('/articles');
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
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect('/articles');
    }

}
