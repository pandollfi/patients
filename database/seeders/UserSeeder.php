<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'id' => '1',
                'name' => 'Teste OM30',
                'email' => 'teste@om30.com.br',
                'password' => '$2y$10$ihoLt5hMxelnwcmKAAsliu4zu2I7r37pS/DVvgZ1pkQuWYVNS4zYO',
                'created_at' => '2023-12-19 00:00:00.000',
                'updated_at' => '2023-12-19 00:00:00.000'
            ]
        );
    }
}
