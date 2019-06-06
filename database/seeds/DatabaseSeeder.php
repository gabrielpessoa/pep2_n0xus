<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@Admin.com',
            'tipo'=> 'gerente',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => 1
        ]);
	
	 DB::table('blocos_exercicios')->insert([
            'nome' => 'Alongamento',
       
        ]);
	 DB::table('blocos_exercicios')->insert([
            'nome' => 'Tronco',
       
        ]);
	 DB::table('blocos_exercicios')->insert([
            'nome' => 'MMII',
       
        ]);
	 DB::table('blocos_exercicios')->insert([
            'nome' => 'MMSS',
       
        ]);
    }
    
}
