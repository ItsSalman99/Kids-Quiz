<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Question::count() == 0) {
            Question::create([
                'question' => 'What is 1 + 1?',
                'level_id' => 1
            ]);
            Question::create([
                'question' => 'What is 2 + 2?',
                'level_id' => 1
            ]);
            Question::create([
                'question' => 'What is 2 * 2?',
                'level_id' => 1
            ]);
            Question::create([
                'question' => 'What is 10 / 10?',
                'level_id' => 1
            ]);
        }
    }
}
