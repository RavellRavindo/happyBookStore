<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Books::insert([
            [
                'category_id' => 1,
                'title' => 'The Adventures of Pinocchio'
            ],
            [
                'category_id' => 1,
                'title' => 'Aleph'
            ],
            [
                'category_id' => 1,
                'title' => 'The Shack'
            ],
            [
                'category_id' => 1,
                'title' => 'Chike and the River'
            ],
            [
                'category_id' => 1,
                'title' => 'Chike and the River'
            ],
            [
                'category_id' => 2,
                'title' => 'When Religion Becomes Evil'
            ],
            [
                'category_id' => 2,
                'title' => 'Magnificent Desolation'
            ],
            [
                'category_id' => 2,
                'title' => 'When Religion Becomes Evil'
            ],
            [
                'category_id' => 2,
                'title' => 'Magnificent Desolation'
            ],
            [
                'category_id' => 2,
                'title' => 'Autism: Explaining the Enigma'
            ],
            [
                'category_id' => 3,
                'title' => 'Computer Concepts'
            ],
            [
                'category_id' => 3,
                'title' => 'Electronic Devices'
            ],
            [
                'category_id' => 3,
                'title' => 'The Cosmic Computer'
            ],
            [
                'category_id' => 3,
                'title' => 'Computer Concepts'
            ],
            [
                'category_id' => 3,
                'title' => 'Electronic Devices'
            ],
            [
                'category_id' => 3,
                'title' => 'The Cosmic Computer'
            ],
        ]);  
    }
}
