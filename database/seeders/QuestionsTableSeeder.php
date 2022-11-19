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
        Question::create([
            'exam_id' => 1,
            'title' => "クラスの継承",
            'content' => "既存のクラスを継承したクラス「King」を作成し、インスタンス化をしてください",
            'default_code' => "class Legend {\n constructor (firstName, lastName) {\n this.firstName = firstName;\n this.lastName = lastName;\n }\n hello () {\n console.log('Hello Class!');\n }\n}\n\nconst legend1 = new Legend('Brendan', 'Eich');\nconst legend2 = new Legend('Linus', 'Torvalds');\nconst legend3 = new Legend('Ryan', 'Dahl');"
        ]);
        for ($i = 1; $i < 7; $i++) {
            Question::create([
                'exam_id' => 1,
                'title' => "Test question$i",
                'content' => "Test question$i content",
                'default_code' => "console.log('Hello World$i!');"
            ]);
        }
    }
}
