<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Jumaa maro',
            'email' => 'jumaa@gmail.com'
        ]);
        // \App\Models\User::factory(10)->create();
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
