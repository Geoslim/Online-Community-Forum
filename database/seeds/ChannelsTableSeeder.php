<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $title1 = 'VueJs';
        $title2 = 'Laravel';
        $title3 = 'Flutter';
        $title4 = 'MySQLi';
        $title5 = 'PHP';
        $title6 = 'HTML5';
        $title7 = 'Kotlin';
        $title8 = 'CSS3';
        $title9 = 'Ajax';
        $title10 = 'Python';


        $channel1 = ['title' => $title1, 'slug' => Str::slug($title1)];
        $channel2 = ['title' => $title2, 'slug' => Str::slug($title2)];
        $channel3 = ['title' => $title3, 'slug' => Str::slug($title3)];
        $channel4 = ['title' => $title4, 'slug' => Str::slug($title4)];
        $channel5 = ['title' => $title5, 'slug' => Str::slug($title5)];
        $channel6 = ['title' => $title6, 'slug' => Str::slug($title6)];
        $channel7 = ['title' => $title7, 'slug' => Str::slug($title7)];
        $channel8 = ['title' => $title8, 'slug' => Str::slug($title8)];
        $channel9 = ['title' => $title9, 'slug' => Str::slug($title9)];
        $channel10 = ['title' => $title10, 'slug' => Str::slug($title10)];



        App\Channel::create($channel1);
        App\Channel::create($channel2);
        App\Channel::create($channel3);
        App\Channel::create($channel4);
        App\Channel::create($channel5);
        App\Channel::create($channel6);
        App\Channel::create($channel7);
        App\Channel::create($channel8);
        App\Channel::create($channel9);
        App\Channel::create($channel10);
    }
}
