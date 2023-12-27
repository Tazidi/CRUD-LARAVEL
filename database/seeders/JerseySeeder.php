<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jersey;

class JerseySeeder extends Seeder
{
    public function run()
    {
        $teams = [
            'Los Angeles Lakers',
            'Golden State Warriors',
            'Miami Heat',
            'Boston Celtics',
            'Chicago Bulls',
            'San Antonio Spurs',
            'Toronto Raptors',
            'Houston Rockets',
            'Denver Nuggets',
            'Milwaukee Bucks',
        ];

        foreach ($teams as $team) {
            Jersey::create([
                'name' => "{$team} Jersey",
                'club' => $team,
                'price' => rand(50, 200),
            ]);
        }
    }
}

