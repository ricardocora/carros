<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index() {
    $carros = Carro::orderBy('datacad', 'desc')->paginate(10);
    return view('carros.index',['carros' => $carros]);
    }

    public function create()
    {
        return view('carros.create');
    }

    public function store(ProductRequest $request)
    {
        $carro = new Carro;
        $carro->nome        = $request->nome;
        $carro->ano         = $request->ano;
        $carro->marca       = $request->marca;
        $carro->save();
        return redirect()->route('carros.index')->with('message', 'Carro inserido com sucesso!');
    }
  
    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
        $carro = Carro::findOrFail($id);
        return view('carros.edit',compact('carro'));
    }
  
    public function update(CarroRequest $request, $id)
    {
        $carro = Carro::findOrFail($id);
        $carro->nome          = $request->nome;
        $carro->ano           = $request->ano;
        $carro->marca         = $request->marca;
        $carro->save();
        return redirect()->route('carros.index')->with('message', 'Carro atualizado com sucesso!');
    }
  
    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();
        return redirect()->route('carros.index')->with('alert-success','Carro deletado!');
    }
}
