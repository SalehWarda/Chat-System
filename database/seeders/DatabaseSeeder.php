<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([

           'name' => 'Saleh AbuWarda',
           'email' => 'salehwarda6@gmail.com',
           'email_verified_at' => Carbon::now(),
           'password' => bcrypt('403737570'),
           'remember_token' => Str::random(10),

        ]);
        User::create([

           'name' => 'Khader',
           'email' => 'khader@gmail.com',
           'email_verified_at' => Carbon::now(),
           'password' => bcrypt('403737570'),
           'remember_token' => Str::random(10),

        ]);
        User::create([

           'name' => 'Hassan',
           'email' => 'hassan@gmail.com',
           'email_verified_at' => Carbon::now(),
           'password' => bcrypt('403737570'),
           'remember_token' => Str::random(10),

        ]);
        User::create([

           'name' => 'Mohammed',
           'email' => 'mohammed@gmail.com',
           'email_verified_at' => Carbon::now(),
           'password' => bcrypt('403737570'),
           'remember_token' => Str::random(10),

        ]);



        Conversation::create([

            'name' => 'Family Group',
            'uuid' => Str::uuid(),
            'user_id' => 1,

        ]);

        Conversation::create([

            'name' => 'Friends Group',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,4),

        ]);

        Conversation::create([

            'name' => 'Work Group',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,4),

        ]);

        Conversation::create([

            'name' => 'Art Group',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,4),

        ]);


        DB::table('conversation_user')->insert([

            'conversation_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('conversation_user')->insert([

            'conversation_id' => 1,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('conversation_user')->insert([

            'conversation_id' => 1,
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('conversation_user')->insert([

            'conversation_id' => 1,
            'user_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('conversation_user')->insert([

            'conversation_id' => 2,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('conversation_user')->insert([

            'conversation_id' => 2,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('conversation_user')->insert([

            'conversation_id' => 3,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('conversation_user')->insert([

            'conversation_id' => 3,
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('conversation_user')->insert([

            'conversation_id' => 3,
            'user_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('conversation_user')->insert([

            'conversation_id' => 4,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('conversation_user')->insert([

            'conversation_id' => 4,
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('conversation_user')->insert([

            'conversation_id' => 4,
            'user_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),

        ]);


        $this->call(MessageTableSeeder::class);
    }
}
