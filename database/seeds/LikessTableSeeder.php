<?php

use Illuminate\Database\Seeder;

class LikessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Like::create([
            'reply_id' => 2,
            'user_id' => 2
        ]);

        App\Like::create([
            'reply_id' => 1,
            'user_id' => 2
        ]);

        App\Like::create([
            'reply_id' => 2,
            'user_id' => 1
        ]);

        App\Like::create([
            'reply_id' => 1,
            'user_id' => 3
        ]);

        App\Like::create([
            'reply_id' => 3,
            'user_id' => 1
        ]);

        App\Like::create([
            'reply_id' => 4,
            'user_id' => 2
        ]);

        App\Like::create([
            'reply_id' => 4,
            'user_id' => 1
        ]);

        App\Like::create([
            'reply_id' => 5,
            'user_id' => 3
        ]);

        App\Like::create([
            'reply_id' => 7,
            'user_id' => 2
        ]);

        App\Like::create([
            'reply_id' => 8,
            'user_id' => 1
        ]);

        App\Like::create([
            'reply_id' => 10,
            'user_id' => 3
        ]);

        App\Like::create([
            'reply_id' => 9,
            'user_id' => 2
        ]);

        App\Like::create([
            'reply_id' => 9,
            'user_id' => 1
        ]);

        App\Like::create([
            'reply_id' => 9,
            'user_id' => 3
        ]);
    }
}
