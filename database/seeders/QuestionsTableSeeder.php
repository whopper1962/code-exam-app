<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Question;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            Question::create([
                'exam_id' => 1,
                'title' => "Test question$i",
                'content' => "Test question$i content",
                'default_code' => "console.log('Hello World$i!');"
            ]);
        }
    }
}
