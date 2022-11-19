<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Exam;

class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            Exam::create([
                'title' => "Test$i title",
                'content' => "Test$i content"
            ]);
        }
    }
}
