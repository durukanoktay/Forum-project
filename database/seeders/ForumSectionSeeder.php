<?php

namespace Database\Seeders;

use App\Models\Forum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForumSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            ['name' => 'Games', 'description' => 'Discover the exciting world of gaming. Discuss your favorite games, share tips and strategies, and connect with fellow gamers in this vibrant community.'],
            ['name' => 'Sports', 'description' => 'Dive into the world of sports. From football to basketball, tennis to swimming, join the discussion on the latest matches, player news, and sporting events.'],
            ['name' => 'Art', 'description' => 'Immerse yourself in the world of art. Share your creations, discuss different art forms and techniques, and engage in conversations about paintings, sculptures, photography, and more.'],
            ['name' => 'Technology', 'description' => 'Explore the ever-evolving realm of technology. Discuss the latest gadgets, software developments, programming languages, and innovations that are shaping our digital world.'],
            ['name' => 'History', 'description' => 'Delve into the fascinating depths of history. Uncover stories from the past, share historical insights, and engage in discussions about significant events, civilizations, and notable figures.'],
        ];

        foreach ($sections as $section) {
            Forum::create($section);
        }
    }
}