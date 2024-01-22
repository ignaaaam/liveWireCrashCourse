<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'user_id' => 1,
                'name' => 'Task 1',
            ],
            [
                'user_id' => 1,
                'name' => 'Task 2',
            ],
            [
                'user_id' => 1,
                'name' => 'Task 3',
            ],
            [
                'user_id' => 1,
                'name' => 'Task 4',
            ],
        ];

        foreach ($tasks as $task) {
            Task::insert($task);
        }
    }
}
