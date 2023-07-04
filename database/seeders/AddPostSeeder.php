<?php

namespace Database\Seeders;

use App\Models\AddUser;
use App\Models\AddPost;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get some user IDs to use as foreign keys
        $userIds = AddUser::pluck('id')->toArray();

        $addPosts = [
            [
                'user_id' => $userIds[array_rand($userIds)],
                'title' => 'First Post',
                'description' => 'This is the first post.'
            ],
            [
                'user_id' => $userIds[array_rand($userIds)],
                'title' => 'Second Post',
                'description' => 'This is the second post.'
            ],
            [
                'user_id' => $userIds[array_rand($userIds)],
                'title' => 'Third Post',
                'description' => 'This is the third post.'
            ],
            [
                'user_id' => $userIds[array_rand($userIds)],
                'title' => 'Fourth Post',
                'description' => 'This is the fourth post.'
            ],
            [
                'user_id' => $userIds[array_rand($userIds)],
                'title' => 'Five Post',
                'description' => 'This is the five post.'
            ],
            [
                'user_id' => $userIds[array_rand($userIds)],
                'title' => 'Six Post',
                'description' => 'This is the six post.'
            ],
            [
                'user_id' => $userIds[array_rand($userIds)],
                'title' => 'Seven Post',
                'description' => 'This is the seven post.'
            ],
            [
                'user_id' => $userIds[array_rand($userIds)],
                'title' => 'Eight Post',
                'description' => 'This is the eight post.'
            ],
            // Add more post data here
        ];

        AddPost::insert($addPosts);
    }
}
