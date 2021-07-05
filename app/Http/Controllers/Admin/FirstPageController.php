<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inicio;
use Illuminate\Http\Request;

class FirstPageController extends Controller
{
    private $inicio;

    public function __construct(Inicio $inicio)
    {
        $this->inicio = $inicio;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inicio = $this->inicio->paginate(10);
        return view('admin.inicio.index', compact('inicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $inicio = $this->inicio->setAttribute('titulo', $data['nameTitulo']);
        $inicio = $this->inicio->setAttribute('descricao', $data['description']);

        if($request->hasFile('fotoPrincipal')) {

            $resultFoto = $data['fotoPrincipal']->store('InicioFoto', 'public');
            $inicio = $this->inicio->setAttribute('foto', $resultFoto);

        }

        $pegaAtributos = $this->inicio->getAttributes();
        $this->inicio->save($pegaAtributos);

        dump('Salvei'); exit();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inicio = $this->inicio->findOrFail($id);
        return view('admin.inicio.edit', compact('inicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
