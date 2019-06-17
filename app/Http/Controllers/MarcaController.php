<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index() {
        $marcas = Marca::orderBy('datacad', 'desc')->paginate(10);
        return view('marcas.index',['marcas' => $marcas]);
        }
    
        public function create()
        {
            return view('marcas.create');
        }
    
        public function store(MarcaRequest $request)
        {
            $marca = new Marca;
            $marca->nome        = $request->nome;
            $marca->save();
            return redirect()->route('marcas.index')->with('message', 'Marca inserida com sucesso!');
        }
      
        public function show($id)
        {
            //
        }
      
        public function edit($id)
        {
            $marca = Marca::findOrFail($id);
            return view('marcas.edit',compact('marca'));
        }
      
        public function update(MarcaRequest $request, $id)
        {
            $marca = Carro::findOrFail($id);
            $marca->nome          = $request->nome;
            $marca->save();
            return redirect()->route('marcas.index')->with('message', 'Marca atualizada com sucesso!');
        }
      
        public function destroy($id)
        {
            $marca = Marca::findOrFail($id);
            $marca->delete();
            return redirect()->route('marcas.index')->with('alert-success','Marca deletada!');
        }
}
