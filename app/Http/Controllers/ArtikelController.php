<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\ArtikelModel;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function user(Request $request)
    {
        $new_user = ArtikelModel::user($request->all());
        return redirect('/artikel');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->get();

        if($user = null) {
            return view('items.user_create');
        } else {
            $articles = ArtikelModel::get_all();
            return view('items.index', compact('articles'));   
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = DB::table('users')->get();

        if($user = null) {
            return view('items.user_create');
        } else {
            return view('items.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_article = ArtikelModel::save($request->all());
        return redirect('/artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = ArtikelModel::get_by_id($id);
        return view('items.show', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = ArtikelModel::get_by_id($id);
        return view('items.edit', compact('articles'));
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
        $article_edited = ArtikelModel::update($id, $request);
        return redirect('artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article_delete = ArtikelModel::delete($id);
        return redirect('artikel');
    }
}
