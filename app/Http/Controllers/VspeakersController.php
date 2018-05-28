<?php

namespace App\Http\Controllers;

use App\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VspeakersController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $speakers = Speaker::all();
        return view('speakers.index',compact('speakers'));
    }

    public function create(){
        return view('speakers.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'nombre' => 'required|min:3|unique:speakers',
            'cant_max' => 'required|integer'
        ]);

        $speakers = new Speaker;
        $speakers->nombre = $request->get('nombre');
        $speakers->cant_max = $request->get('cant_max');
        $speakers->save();
        return redirect()->view('home');

    }

    public function show($id){
        $speaker = Speaker::find($id);
        return view('speakers.show', compact('speaker'));

    }

    public function edit($id){

        $speaker = Speaker::find($id);
        return view('speakers.edit',compact('speaker','id'));

    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'nombre' => 'required|min:3|unique:speakers',
        ]);

        $speaker = Speaker::find($id);
        $speaker->nombre = $request->get('nombre');
        $speaker->save();

        return view('speakers.show', compact('speaker'));

    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id){
        $sala = Speaker::find($id);
        $sala->delete();


        // redirect
        // Session::flash('message', 'Successfully deleted the sala!');
        return Redirect::to('vspeakers');

    }
}
