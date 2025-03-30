<?php

namespace Database\Factories;

use App\Models\Reply;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Reply>
 */
class ReplyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'message' => $this->faker->realText(),
            'ticket_id' => Ticket::factory(),
            'user_id' => User::query()->inRandomOrder()->first(),
        ];
    }
}
