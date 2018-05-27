<?php

namespace App\Http\Controllers;

use App\Sala;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class VsalasController extends Controller
{
    public function index(){
        $salas = Sala::all();
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

        $this->validate($request, [
            'nombre' => 'required|min:3|unique:salas',
            'cant_max' => 'required|integer'
        ]);

        $sala = Sala::find($id);
        $sala->nombre = $request->get('nombre');
        $sala->cant_max = $request->get('cant_max');
        $sala->save();

        return view('salas.show', compact('sala'));

    }

    public function destroy($id){
//        $sala = Sala::find($id);
//        $sala->delete();
//        return view('salas.index');
//        $sala = Sala::find($id);
//        $sala->delete();
//        $sala->delete();
//        $process = new MenuProcess();
//        $process->deleteMenu($id);
//        $sala = Sala::find($id);
//        $sala->delete();

//        $sala = Sala::findOrFail($id);
//
//        $sala->delete();

//        return view('vsala.index')->with([
//            'flash_message' => 'Deleted',
//            'flash_message_important' => false
//        ]);

        // redirect
//        Session::flash('message', 'Successfully deleted the sala!');
//        return Redirect::to('salas.index');
        return "Entro en destroy";
    }
}
