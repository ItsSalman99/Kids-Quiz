<?php

namespace Database\Seeders;

use App\Models\QuestionOption;
use Illuminate\Database\Seeder;

class QuestionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (QuestionOption::count() == 0) {
            // Q1
            QuestionOption::create([
                'name' => '2',
                'question_id' => 1
            ]);
            QuestionOption::create([
                'name' => '4',
                'question_id' => 1
            ]);
            QuestionOption::create([
                'name' => '5',
                'question_id' => 1
            ]);
            QuestionOption::create([
                'name' => '8',
                'question_id' => 1
            ]);
            // Q2
            QuestionOption::create([
                'name' => '4',
                'question_id' => 2
            ]);
            QuestionOption::create([
                'name' => '5',
                'question_id' => 2
            ]);
            QuestionOption::create([
                'name' => '10',
                'question_id' => 2
            ]);
            QuestionOption::create([
                'name' => '23',
                'question_id' => 2
            ]);
            // Q3
            QuestionOption::create([
                'name' => '10',
                'question_id' => 3
            ]);
            QuestionOption::create([
                'name' => '4',
                'question_id' => 3
            ]);
            QuestionOption::create([
                'name' => '6',
                'question_id' => 3
            ]);
            QuestionOption::create([
                'name' => 'None',
                'question_id' => 3
            ]);
            // Q4
            QuestionOption::create([
                'name' => '10',
                'question_id' => 4
            ]);
            QuestionOption::create([
                'name' => '2',
                'question_id' => 4
            ]);
            QuestionOption::create([
                'name' => '100',
                'question_id' => 4
            ]);
            QuestionOption::create([
                'name' => '0',
                'question_id' => 4
            ]);
        }
    }
}
