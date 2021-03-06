<?php

use Illuminate\Database\Seeder;
use App\User; // User モデルの読み込み

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UserSeeder::class);
    }
}
