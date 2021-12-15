<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::insert([
            ['category' => 'Fiction'],
            ['category' => 'Science'],
            ['category' => 'Computer'],
        ]);
    }
}
