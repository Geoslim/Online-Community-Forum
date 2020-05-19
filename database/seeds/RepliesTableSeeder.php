<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Reply::create([
            'user_id' => 2,
            'discussion_id' => 2,
            'content' => 'I have always wanted to do the right thing and be the right person.',
        ]);

        App\Reply::create([
            'user_id' => 3,
            'discussion_id' => 3,
            'content' => 'This is the second reply under this discussion.',
        ]);

        App\Reply::create([
            'user_id' => 3,
            'discussion_id' => 3,
            'content' => 'A step taken may seem amazing from the inside.',
        ]);

        App\Reply::create([
            'user_id' => 3,
            'discussion_id' => 2,
            'content' => 'How many Trust Funds Online Banking accounts can I have?',
        ]);

        App\Reply::create([
            'user_id' => 2,
            'discussion_id' => 2,
            'content' => 'Our father was more of a father to you than yours ever was.',
        ]);

        App\Reply::create([
            'user_id' => 2,
            'discussion_id' => 3,
            'content' => 'Tell me about test deposits.',
        ]);

        App\Reply::create([
            'user_id' => 1,
            'discussion_id' => 5,
            'content' => 'For security reasons, we use test deposits as part of the external account verification process.',
        ]);

        App\Reply::create([
            'user_id' => 2,
            'discussion_id' => 6,
            'content' => 'Your external account is a bank account you have with another U.S. financial institution',
        ]);

        App\Reply::create([
            'user_id' => 1,
            'discussion_id' => 6,
            'content' => 'Yes. Trust is a member of the FDIC, so our deposit accounts are insured up to the maximum amount allowed by law',
        ]);

        App\Reply::create([
            'user_id' => 1,
            'discussion_id' => 4,
            'content' => 'At present, we have succeeded in developing technology-based',
        ]);

        App\Reply::create([
            'user_id' => 2,
            'discussion_id' => 1,
            'content' => 'here are a few significant reasons why you should collaborate with us.',
        ]);

        App\Reply::create([
            'user_id' => 2,
            'discussion_id' => 4,
            'content' => 'increased productivity and revenue for businesses that choose to work with us. ',
        ]);

        App\Reply::create([
            'user_id' => 3,
            'discussion_id' => 7,
            'content' => 'Since Flutter is a multi-platform SDK, each FlutterFire plugin is applicable for both iOS and Android.',
        ]);

        App\Reply::create([
            'user_id' => 1,
            'discussion_id' => 8,
            'content' => 'FlutterFire plugin to your Flutter app, it will be used by both the iOS and Android versions of your Firebase app.',
        ]);
    }
}
