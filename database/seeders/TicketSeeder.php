<?php

namespace Database\Seeders;

use App\Models\Reply;
use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        Ticket::factory(15)
            ->has(Reply::factory()->count(4))
            ->create();
    }
}
