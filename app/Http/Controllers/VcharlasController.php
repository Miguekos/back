<?php

namespace App\Http\Controllers;

use App\Charla;
use App\Sala;
use App\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VcharlasController extends Controller
{
    public function index(){
        $charlas = Charla::all();
        return view('charlas.index',compact('charlas'));
    }

    public function create(){
        $salas = Sala::all();
        $speakers = Speaker::all();
        return view('charlas.create',compact ('salas','speakers'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'nombre' => 'required|min:3|unique:charlas',
            'fecha' => 'required',
            'sala_id' => 'required',
            'speaker_id' => 'required',
        ]);

        $charlas = new Charla;
        $charlas->nombre = $request->get('nombre');
        $charlas->fecha = $request->get('fecha');
        $charlas->sala_id = $request->get('sala_id');
        $charlas->speaker_id = $request->get('speaker_id');
        $charlas->save();
        return Redirect::to ('vcharlas');


    }

    public function show($id){
        $charla = Charla::find($id);
        return view('charlas.show', compact('charla'));

    }

    public function edit($id){

        $charla = Charla::find($id);
        $sala = Sala::find($id);
        $speaker = Speaker::find($id);
        return view('charlas.edit',compact('charla','id','sala','speaker'));

    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'nombre' => 'required|min:3|unique:charlas',
            'fecha' => 'required',
            'sala_id' => 'required',
            'speaker_id' => 'required',
        ]);

        $charla = Charla::find($id);
        $charla->nombre = $request->get('nombre');
        $charla->fecha = $request->get('fecha');
        $charla->sala_id = $request->get('sala_id');
        $charla->speaker_id = $request->get('speaker_id');
        $charla->save();

        return view('charlas.show', compact('charla'));

    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id){
        $charla = Charla::find($id);
        $charla->delete();


        // redirect
        // Session::flash('message', 'Successfully deleted the charla!');
        return Redirect::to ( 'vcharlas' );

    }
}
