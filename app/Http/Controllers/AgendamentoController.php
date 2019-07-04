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

        // dd($request->all());
        Semana::create(['n_semana'=>$request->data]);
        $semana = Semana::all();
        foreach($semana as $item){
            if($item->n_semana == $request->data){
                $data = $item->id;
                break;
            }
        }
        $inputs = ['1','2','3','4'];
        for($i = 0; $i < sizeof($inputs);$i++){
            $bloco = 'bloco' . $inputs[$i];
            $gmuscular = 'gmuscular' . $inputs[$i];
            $equipamento = 'equipamento' . $inputs[$i];
            Agendamento::create([
                'semana_id'=>$data,
                'bloco_exercicio_id'=>intval($request->$bloco),
                'gmuscular_id'=>$request->$gmuscular,
                'equipamento_id'=>$request->$equipamento,
            ]);
        }

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
