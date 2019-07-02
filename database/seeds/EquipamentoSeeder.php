<?php

use Illuminate\Database\Seeder;
use App\Equipamento;
class EquipamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Array of equipaments
        $equipaments = [
        	'Cadillac', 'Chair', 'Reformer'
        ];

        //Array
        for($i=0;$i < sizeof($equipaments); $i++){
            Equipamento::create(['equipamento'=>$equipaments[$i]]);
        }
    }
}
