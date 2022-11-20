<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Textbook;

class TextbooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Textbook::create([
                'title' => "Text textbook title $i",
                'content' => "### Test textbook content $i"
            ]);
        }
    }
}
