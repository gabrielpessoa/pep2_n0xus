<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipamento;
use App\Gmuscular;
use App\Agendamento;
use App\Semana;
use App\BlocoExercicio;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/home/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipamentos = Equipamento::all();
        $gmusculares = Gmuscular::all();
        $blocos = BlocoExercicio::all();
        return view('home', compact('equipamentos', 'gmusculares', 'blocos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $semana = new Semana;
        $semana->n_semana = $request->data;
        $semana->save();

        $semanas = Semana::all();
        foreach ($semanas as $key => $value) {
            if($value->n_semana == $request->data){
                $data = $value->id;
            }
        }

             $agendamento = new Agendamento;
             $agendamento->semana_id = $data;
             $agendamento->bloco_exercicio_id = $request->bloco1;
             $agendamento->equipamento_id = $request->equipamento1;
             $agendamento->gmuscular_id = $request->gmuscular1;
             $agendamento->save();

             $agendamento = new Agendamento;
             $agendamento->semana_id = $data;
             $agendamento->bloco_exercicio_id = $request->bloco2;
             $agendamento->equipamento_id = $request->equipamento2;
             $agendamento->gmuscular_id = $request->gmuscular2;
             $agendamento->save();

             $agendamento = new Agendamento;
             $agendamento->semana_id = $data;
             $agendamento->bloco_exercicio_id = $request->bloco3;
             $agendamento->equipamento_id = $request->equipamento3;
             $agendamento->gmuscular_id = $request->gmuscular3;
             $agendamento->save();

             $agendamento = new Agendamento;
             $agendamento->semana_id = $data;
             $agendamento->bloco_exercicio_id = $request->bloco4;
             $agendamento->equipamento_id = $request->equipamento4;
             $agendamento->gmuscular_id = $request->gmuscular4;
             $agendamento->save();

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
        //
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
