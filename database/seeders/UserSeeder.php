<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        collect(range(1, 2))
            ->each(function (int $id) {
                User::factory()->create([
                    'name' => 'Agent '.$id,
                    'email' => 'agent_'.$id.'@tickety.com',
                ]);
            });
    }
}
