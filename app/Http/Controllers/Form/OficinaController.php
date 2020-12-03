<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Oficina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OficinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $oficinas = Oficina::all();

        return view('listAllUsers', [
            'oficinas' => $oficinas
    ]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oficina = new Oficina();
        $oficina->cliente = $request->cliente;
        $oficina->data = $request->data;
        $oficina->vendedor = $request->vendedor;
        $oficina->descricao = $request->descricao;
        $oficina->valororcado = $request->valororcado;
        $oficina->save();
        return redirect()->route('oficina.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oficina  $oficina
     * @return \Illuminate\Http\Response
     */
    public function show(Oficina $oficina)
    {
        return view('listUser', [
            'oficina' => $oficina
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oficina  $user
     * @return \Illuminate\Http\Response
     */



    public function edit(Oficina $oficina)
    {
        return view('editUser', [
           'oficina' => $oficina
        ]);

    }
    public function update(Request $request, Oficina $oficina)
    {
        $oficina->cliente = $request->cliente;
        $oficina->data = $request->data;
        $oficina->vendedor = $request->vendedor;
        $oficina->descricao = $request->descricao;
        $oficina->valororcado = $request->valororcado;
        $oficina->save();
        return redirect()->route('oficina.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oficina  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oficina $oficina)
    {
        $oficina->delete();
        return redirect()->route('oficina.index');
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $oficinas = Oficina::query()
            ->where('id', 'LIKE', "%{$search}%")
            ->orWhere('vendedor', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('search', compact('oficinas'));
    }
    public function searchcliente(Request $request){
        // Get the search value from the request
        $searchcliente = $request->input('searchcliente');

        // Search in the title and body columns from the posts table
        $oficinas = Oficina::query()
            ->where('id', 'LIKE', "%{$searchcliente}%")
            ->orWhere('cliente', 'LIKE', "%{$searchcliente}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('search', compact('oficinas'));
    }
    public function searchdata(Request $request){
        // Get the search value from the request
        $searchdata = $request->input('searchdata');

        // Search in the title and body columns from the posts table
        $oficinas = Oficina::query()
        ->where('id', 'LIKE', "%{$searchdata}%")
        ->orWhere('data', 'LIKE', "%{$searchdata}%")
        ->get();


        // Return the search view with the resluts compacted
        return view('search', compact('oficinas'));
    }

}
