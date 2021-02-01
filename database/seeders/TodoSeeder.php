<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;
use App\Models\User;
use App\Models\TodoTask;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*User::all()->each(function($user){
            $user->todos()->saveMany(
                factory(Todo::class, 10)->make()
            )->each(function($todo){
                $todo->tasks()->saveMany(
                    factory(TodoTask::class)->make()
                );
            });
        });
        */
        User::all()->each(function($user){
            $user->todos()->saveMany(
                Todo::factory()->count(10)->make()
            )->each(function($todo){
                $todo->tasks()->saveMany(
                    TodoTask::factory()->count(10)->make()    
                );
            });
        });
    }
   
}
