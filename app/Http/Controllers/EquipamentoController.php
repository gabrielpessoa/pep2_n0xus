<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Equipamento;
use Illuminate\Support\Facades\Auth;


class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        if(Auth::user()['tipo'] != 'aluno'){
            return redirect('/equipamento');
        }
    }

     public function index()
    {
        $equipamentos = Equipamento::all();
        return view('equipamento.index', compact('equipamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Verificando se os dados vieram
        $request->validate([
            'equipamento' => 'required',
   
        ]);

        Equipamento::create($request->all());
        
        return redirect()->route('equipamento.index')
                        ->with('success','Equipamento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipamentos = Equipamento::find($id);
        return view('equipamento.show', compact('equipamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipamentos = Equipamento::find($id);
        return view('equipamento.edit', compact('equipamentos'));
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
         $request->validate([
            'equipamento' => 'required',
        
        ]);
  
        $equipamento = Equipamento::find($id);
        $equipamento->update($request->all());
  
        return redirect()->route('equipamento.index')
                        ->with('success','Equipamento editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Equipamento::find($id);
        $delete->delete();
        return redirect()->route('equipamento.index')
                        ->with('success','Equipamento deletado com sucesso!');
    }
}
