<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'task' => 'Solve multichoice questions'
            ],
            [
                'task' => 'Finish the code task'
            ],
            [
                'task' => 'Make my app better'
            ],
            [
                'task' => 'Got the job done'
            ]
            
        ]);
    }
}
