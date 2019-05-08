<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gmuscular;
use Illuminate\Support\Facades\Auth;

class GmuscularController extends Controller
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
            return redirect('/gmuscular');
        }
    }

     public function index()
    {
        $gmusculares = Gmuscular::all();
        return view('gmuscular.index', compact('gmusculares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gmuscular.create');
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
            'nome' => 'required',
            'exercicio' => 'required',
        ]);

        Gmuscular::create($request->all());
        
        return redirect()->route('gmuscular.index')
                        ->with('success','Grupo criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gmusculares = Gmuscular::find($id);
        return view('gmuscular.show', compact('gmusculares'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gmusculares = Gmuscular::find($id);
        return view('gmuscular.edit', compact('gmusculares'));
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
            'nome' => 'required',
            'exercicio' => 'required',
        ]);
  
        $gmuscular = Gmuscular::find($id);
        $gmuscular->update($request->all());
  
        return redirect()->route('gmuscular.index')
                        ->with('success','Grupo muscular editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Gmuscular::find($id);
        $delete->delete();
        return redirect()->route('gmuscular.index')
                        ->with('success','Grupo muscular deletado com sucesso!');
    }
}
