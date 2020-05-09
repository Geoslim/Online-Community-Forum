<?php

use Illuminate\Database\Seeder;

class WatchersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        App\Watcher::create([
            'user_id' => 1,
            'discussion_id' => 2,
          
        ]);

        App\Watcher::create([
            'user_id' => 1,
            'discussion_id' => 1,
          
        ]);

        App\Watcher::create([
            'user_id' => 3,
            'discussion_id' => 10,
          
        ]);

        App\Watcher::create([
            'user_id' => 1,
            'discussion_id' => 9,
          
        ]);

        App\Watcher::create([
            'user_id' => 3,
            'discussion_id' => 8,
          
        ]);

        App\Watcher::create([
            'user_id' => 1,
            'discussion_id' => 7,
          
        ]);

        App\Watcher::create([
            'user_id' => 3,
            'discussion_id' => 6,
          
        ]);

        App\Watcher::create([
            'user_id' => 3,
            'discussion_id' => 2,
          
        ]);

        App\Watcher::create([
            'user_id' => 3,
            'discussion_id' => 1,
          
        ]);
    }
}
