<?php

namespace App\Http\Controllers;

use App\Sala;
use Illuminate\Http\Request;

class VsalasController extends Controller
{
    public function index(){
        // $name = 'Miguel';
        // $lastname = 'Rodriguez';
        // return view('salas.index',['name' => $name]);
        // return view('salas.index',compact('name','lastname'));
        // return view('salas.index')->with('nombre',$name);
        // $salas = Sala::orderBy('id','asc')->get();
        $salas = Sala::all();
        // $users = User::where('id',1)->get();
        return view('salas.index',compact('salas'));
    }

    public function create(){
        return view('salas.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'nombre' => 'required|min:3|unique:salas',
            'cant_max' => 'required|integer'
        ]);

        $salas = new Sala;
        $salas->nombre = $request->get('nombre');
        $salas->cant_max = $request->get('cant_max');
        $salas->save();
        return redirect()->view('home');

    }

    public function show($id){
        $sala = Sala::find($id);
        return view('salas.show', compact('sala'));

    }

    public function edit($id){

        $sala = Sala::find($id);
        return view('salas.edit',compact('sala','id'));

    }

    public function update(Request $request, $id){

        $salas = Sala::find($id);
        $salas->nombre = $request->get('nombre');
        $salas->cant_max = $request->get('cant_max');
        $salas->save();
//        return "De verdad llego aqui";
//        return Sala::find($id);
        //return redirect()->view('home.index');

    }

    public function destroy($id){
        return 'delete Salas';
    }
}
