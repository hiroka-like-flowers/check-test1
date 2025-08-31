<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::factory()->(7)->create();
    }

    public function run(): void
    {
        User::factory(10)->create();
    $this->call([
        CategoriesTableSeeder::class,
    ]);
    }
}
