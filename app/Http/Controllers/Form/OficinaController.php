<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Oficina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OficinaController extends Controller
{
 /**
  * __construct faz com que o usuário não possa entrar sem usar o Login

  */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $oficinas = Oficina::orderBy('created_at', 'desc')->paginate(10);
        return view('listAllUsers', [
            'oficinas' => $oficinas
    ]);
        }
 /**
  * create do CRUD

  */
    public function create()
    {
        return view('newUser');
    }

    public function store(Request $request)
    {
        $oficina = new Oficina();
        $oficina->cliente = $request->cliente;
        $oficina->data = $request->data;
        $oficina->vendedor = $request->vendedor;
        $oficina->descricao = $request->descricao;
        $oficina->valororcado = $request->valororcado;
        $oficina->save();
        return redirect()->route('oficina.index')
        ->with('success', 'Orçamento criado com sucesso!');
    }
 /**
  * show do CRUD

  */
    public function show(Oficina $oficina)
    {
        return view('listUser', [
            'oficina' => $oficina
        ]);
    }

 /**
  * edit do CRUD

  */

    public function edit(Oficina $oficina)
    {
        return view('editUser', [
           'oficina' => $oficina
        ]);

    }
     /**
  * update do CRUD

  */
    public function update(Request $request, Oficina $oficina)
    {
        $oficina->cliente = $request->cliente;
        $oficina->data = $request->data;
        $oficina->vendedor = $request->vendedor;
        $oficina->descricao = $request->descricao;
        $oficina->valororcado = $request->valororcado;
        $oficina->save();
        return redirect()->route('oficina.index')
        ->with('success2', 'Orçamento editado com sucesso!');
    }

    public function destroy(Oficina $oficina)
    {
        $oficina->delete();
        return redirect()->route('oficina.index')
        ->with('success3', 'Orçamento deletado com sucesso!');
    }
 /**
  * searchs's do CRUD

  */
    public function search(Request $request){

        $search = $request->input('search');

        $oficinas = Oficina::query()
            ->where('vendedor', 'LIKE', "%{$search}%")
            ->get();

        return view('search', compact('oficinas'))
        ->with('success4', 'Resultado da pesquisa!');
    }
    public function searchcliente(Request $request){

        $searchcliente = $request->input('searchcliente');


        $oficinas = Oficina::query()
            ->where('cliente', 'LIKE', "%{$searchcliente}%")
            ->get();

        return view('search', compact('oficinas'))
        ->with('success4', 'Resultado da pesquisa!');
    }
    public function searchdata(Request $request){
        $comeco = $request->input('data1');
        $fim = $request->input('data2');

        $oficinas = Oficina::query()
            ->whereBetween('data', array($comeco, $fim))
            ->get();

        return view('search', compact('oficinas'))
        ->with('success4', 'Resultado da pesquisa!');
    }

}
