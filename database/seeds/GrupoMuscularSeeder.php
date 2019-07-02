<?php

use Illuminate\Database\Seeder;
use App\Gmuscular;
class GrupoMuscularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Array of groups
        $group = [
            'Ísquios', 'Abdômen', 'Quadríceps', 'Bíceps', 'Dorsal', 'Ombro', 'Trapézio', 'Posterior', 'Panturrilha'
        ];

        //Array
        for($i=0;$i < sizeof($group); $i++){
            Gmuscular::create(['nome'=>$group[$i]]);
        }
    }
}
