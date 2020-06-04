<?php

use App\Question;
use App\User;
use App\Answer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // To make fake data for users and questions insert method create records into database and make methods generate objects and store in memory
        factory(User::class, 3)->create()->each(function ($u) {
            $u->questions()
                ->saveMany(
                    factory(Question::class, rand(1, 5))->make()
                )
                ->each(function ($q) {
                    $q->answers()
                        ->saveMany(factory(Answer::class, rand(1, 5))->make());
                });
        });
    }
}
