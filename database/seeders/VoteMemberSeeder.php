<?php

namespace Database\Seeders;

use App\Models\VotingMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoteMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'title' => 'title1',
                'description' => 'desc1',
                'author' => 'author 1',
                'images' => 'image1.jpg;image2.jpg;image3.jpg;', 
                'music' => 'music1.mp3', 
                'votes' => 0
            ],
            [
                'title' => 'title2',
                'description' => 'desc2',
                'author' => 'author 2',
                'images' => 'image4.jpg;image5.jpg;', 
                'music' => 'music2.mp3'
            ],
            [
                'title' => 'title3',
                'description' => 'desc3',
                'author' => 'author 3',
                'images' => 'image3.jpg;image4.jpg;', 
                'music' => 'music3.mp3'
            ]
        ];

        foreach ($members as $key => $value){
            VotingMember::create($value);
        }
    }
}
