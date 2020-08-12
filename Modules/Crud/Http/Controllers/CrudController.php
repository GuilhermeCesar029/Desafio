<?php

namespace Modules\Crud\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Crud\Entities\Usuario;

class CrudController extends Controller
{
    use  ValidatesRequests;

    public function index()
    {
        $usuarios = Usuario::all();
        return view('crud::index', compact('usuarios'));
    }

    public function create()
    {
        return view('crud::cadastro');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome'         => 'required', 
            'sobrenome'    => 'required',
            'email'        => 'required',
        ]);     
        Usuario::create($request->all());

        return redirect()->route('index');
    }


    public function edit($id)
    {
        $usuarios = Usuario::find($id);

        return view('crud::editar', compact('usuarios'));
    }

    public function update(Request $request, $id)
    {
        $usuarios = $request->all();

        Usuario::find($id)->update($usuarios);
        
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        Usuario::find($id)->delete();
        return redirect()->route('index');
    }
}
