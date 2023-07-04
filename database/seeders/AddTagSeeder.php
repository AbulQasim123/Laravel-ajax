<?php

namespace Database\Seeders;

use App\Models\AddPost;
use App\Models\AddTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get some user IDs to use as foreign keys
        $postIds = AddPost::pluck('id')->toArray();

        $addPosts = [
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the first Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the second Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the third Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the fourth Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the five Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the six Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the seven Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the eight Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the nine Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the ten Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the eleven Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the twelth Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the thirteen Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the forteen Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the fifteen Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the sixteen Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the seventeen Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the eighteen Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the nineteen Tag.'
            ],
            [
                'post_id' => $postIds[array_rand($postIds)],
                'tag' => 'This is the twenty Tag.'
            ],
            // Add more post data here
        ];

        AddTag::insert($addPosts);
    }
}
