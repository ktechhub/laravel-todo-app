<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        Todo::firstOrCreate(['title' => 'Get Mangoes', 'description' => 'Get some mangoes', 'user_id' => $user->id]);
        Todo::firstOrCreate(['title' => 'Get Banana', 'description' => 'Get some bananas', 'user_id' => $user->id]);
        Todo::firstOrCreate(['title' => 'Get Banana', 'description' => 'Get some bananas', 'user_id' => $user->id]);
    }
}
