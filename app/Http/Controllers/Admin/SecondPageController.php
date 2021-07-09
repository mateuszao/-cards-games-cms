<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SecondPageController extends Controller
{
    private $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $card = $this->card->paginate(10);
        return view('admin.card.index', compact('card'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.card.create');
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

        $card = $this->card->setAttribute('titulo', $data['nameTitulo']);
        $card = $this->card->setAttribute('descricao', $data['description']);

        if($request->hasFile('fotoPrincipal')) {

            $resultFoto = $data['fotoPrincipal']->store('InicioFoto', 'public');
            $card = $this->card->setAttribute('foto', $resultFoto);

        }

        $pegaAtributos = $this->card->getAttributes();
        $this->card->save($pegaAtributos);

        flash('Card criado com sucesso')->success();
        return redirect()->route('admin.card.index');
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
        $card = $this->card->findOrFail($id);
        return view('admin.card.edit', compact('card'));
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
        $data = $request->all();
        $card = $this->card->find($id);

        $card->setAttribute('titulo', $data['nameTitulo']);
        $card->setAttribute('descricao', $data['description']);

        if($request->hasFile('fotoPrincipal')) {

            $resultFoto = $data['fotoPrincipal']->store('InicioFoto', 'public');
            $card->setAttribute('foto', $resultFoto);

        }

        $dataAtual = Carbon::now();
        $card->setAttribute('updated_at', $dataAtual->toDateTimeString());

        $pegaAtributos = $card->getAttributes();

        $card->update($pegaAtributos);

        flash('Card Atualizado com sucesso')->success();
        return redirect()->route('admin.card.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card = $this->card->find($id);
        $card->delete();

        flash('Card Removido com Sucesso')->success();
        return redirect()->route('admin.card.index');
    }
}
