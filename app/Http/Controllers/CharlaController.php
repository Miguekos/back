<?php

namespace App\Http\Controllers;

use App\Charla;
use App\Http\Resources\Product;
use Illuminate\Http\Request;

class CharlaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Charla::all();
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
        $charlas = Charla::create($request->all());
        return response()->json($charlas, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Charla  $charla
     * @return \Illuminate\Http\Response
     */
    public function show(Charla $charla)
    {
        return Charla::find($charla);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Charla  $charla
     * @return \Illuminate\Http\Response
     */
    public function edit(Charla $charla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Charla  $charla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Charla::findOrFail($id);
        $article->update($request->all());

        return response()->json($article, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Charla  $charla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charla $charla)
    {
        //
    }
}
