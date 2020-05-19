<?php

use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Discussion::create([
            'title' => 'Resident Evil',
            'slug' => Str::slug('Resident Evil'),
            'channel_id' => 5,
            'content' => 'Important: Download with caution. Some sites try to trick you into downloading harmful software by telling you that you have a virus. Be careful not to download any harmful software.',
            'user_id' => 3

        ]);

        App\Discussion::create([
            'title' => 'Train and Track',
            'slug' => Str::slug('Train and Track'),
            'channel_id' => 4,
            'content' => 'Google Safe Browsing: To protect you from dangerous websites, Google maintains a list of websites that might put you at risk for malware or phishing. Google also analyzes sites and warns you if a site seems dangerous.',
            'user_id' => 2

        ]);

        App\Discussion::create([
            'title' => 'The land of the living',
            'slug' => Str::slug('The land of the living'),
            'channel_id' => 3,
            'content' => 'Did you mean [site name]? or Is this the right site?: The site you start to visit may try to confuse you, and may not be the site you meant to visit.',
            'user_id' => 1

        ]);

        App\Discussion::create([
            'title' => 'Mortal Kombat',
            'slug' => Str::slug('Mortal Kombat'),
            'channel_id' => 3,
            'content' => 'The site ahead contains malware: The site you start to visit might try to install bad software, called malware, on your computer.',
            'user_id' => 3

        ]);

        App\Discussion::create([
            'title' => 'Discussions Concerning Programming',
            'slug' => Str::slug('Discussions Concerning Programming'),
            'channel_id' => 2,
            'content' => 'Deceptive site ahead: The site you try to visit might be a phishing site. Suspicious site: The site you want to visit seems suspicious and may not be safe. ',
            'user_id' => 2

        ]);

        App\Discussion::create([
            'title' => 'Discussions Concerning Vue',
            'slug' => Str::slug('Discussions Concerning Vue'),
            'channel_id' => 1,
            'content' => 'The site ahead contains harmful programs: The site you start to visit might try to trick you into installing programs that cause problems when you’re browsing online.',
            'user_id' => 3

        ]);

        App\Discussion::create([
            'title' => 'Olympus had fallen',
            'slug' => Str::slug('Olympus had fallen'),
            'channel_id' => 7,
            'content' => 'We approach every need of our customer with utmost flexibility because we concentrate not on the processes but the end result – proper delivery of the shipment.',
            'user_id' => 3

        ]);

        App\Discussion::create([
            'title' => 'Our Mission',
            'slug' => Str::slug('Our Mission'),
            'channel_id' => 10,
            'content' => 'Our mission statement is simplicity itself. To constantly exceed customer expectations by providing superior freight forwarding and global transportation solutions including air, ocean, and customs brokerage and logistics services',
            'user_id' => 3

        ]);

        App\Discussion::create([
            'title' => 'Age Restriction',
            'slug' => Str::slug('Age Restriction'),
            'channel_id' => 9,
            'content' => 'Children under 18 can make deposits to their online savings account, check account balances, and review account activity. They can also set up their own user names and passwords.',
            'user_id' => 2

        ]);

        App\Discussion::create([
            'title' => 'CD Accounts',
            'slug' => Str::slug('CD Accounts'),
            'channel_id' => 10,
            'content' => 'Yes. We charge 90 days simple interest on the amount withdrawn for CD Accounts with terms of less than 24 months. For CD Accounts with terms greater than 36 months, we charge 180 days simple interest on the amount withdrawn. In certain circumstances, such as the death or incompetence of an account owner, we may waive the early withdrawal penalty.',
            'user_id' => 3

        ]);

        App\Discussion::create([
            'title' => 'Enterprise Development',
            'slug' => Str::slug('Enterprise Development'),
            'channel_id' => 6,
            'content' => 'Our forte is agile dedicated teams of brilliant minds who rock in Web, Mobile, Corporate E-Brand, Enterprise Development, Desktop Development, and Business Technology Consulting. ',
            'user_id' => 2

        ]);

        App\Discussion::create([
            'title' => ' Realtime Database Storage',
            'slug' => Str::slug(' Realtime Database Storage'),
            'channel_id' => 6,
            'content' => 'Firebase is accessed through a number of different libraries, one for each Firebase product (for example: Realtime Database, Authentication, Analytics, or Storage). Flutter provides a set of Firebase plugins, which are collectively called FlutterFire.',
            'user_id' => 2

        ]);

        App\Discussion::create([
            'title' => 'Branding Techniques',
            'slug' => Str::slug('Branding Techniques'),
            'channel_id' => 8,
            'content' => 'Over 100 brands trust us to build and maintain web, desktop, and mobile products that simplify their business process and maximize impact. ',
            'user_id' => 1

        ]);

        App\Discussion::create([
            'title' => 'KJK Africa',
            'slug' => Str::slug('KJK Africa'),
            'channel_id' => 4,
            'content' => 'KJK Africa is a Software Design and Development company based in Nigeria, We help start-ups and fast-growing tech companies build successful, scalable products that users love',
            'user_id' => 1

        ]);
        
    }
}

