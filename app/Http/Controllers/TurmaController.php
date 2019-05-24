<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TurmaController extends Controller 
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
            return redirect('/turma');
        }
    }

    public function index()
    {
     $turmas = Turma::all();
        return view('turma.index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turma.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'nome' => 'required',
            'horario' => 'required',
        ]);


        Turma::create($request->all());
        
        return redirect()->route('turma.index')
                        ->with('success','Turma criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turmas = Turma::find($id);
        return view('turma.show', compact('turmas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turmas = Turma::find($id);
        return view('turma.edit', compact('turmas'));
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
            'horario' => 'required',
        ]);
  
        $turma = Turma::find($id);
        $turma->update($request->all());
  
        return redirect()->route('turma.index')
                        ->with('success','Turma editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $delete = Turma::find($id);
        $delete->delete();
        return redirect()->route('turma.index')
                        ->with('success','Turma deletada com sucesso!');
    }
}
