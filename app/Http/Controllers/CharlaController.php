<?php

namespace App\Http\Controllers;

use App\Charla;
use App\Http\Resources\Charlas;
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
        //return Charla::find($charla);
        return $charla->toArray();

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
        $charlas = Charla::findOrFail($id);

        $charlas->update($request->all());
        return response()->json($charlas, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Charla  $charla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charla $charla)
    {
        $charla->delete();
        return response()->json(null, 204);
    }
}
