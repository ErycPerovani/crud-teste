<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
        $user->create([
            'name'=>'Teste Teste',
            'email'=>'teste@teste',
            'password'=>'1234'
        ]);

        $user->create([
            'name'=>'Teste2',
            'email'=>'teste2@teste',
            'password'=>'4321'
        ]);
    }
}
