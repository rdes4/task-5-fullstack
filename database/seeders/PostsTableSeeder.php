<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
            [
                'title' => "Lorem Ipsum",
                'content' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing 
                           industries for previewing layouts and visual mockups.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "What is Lorem Ipsum?",
                'content' => 'From its medieval origins to the digital era, learn everything there is to know about 
                           the ubiquitous lorem ipsum passage.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "Origins and Discovery",
                'content' => 'Lorem ipsum began as scrambled, nonsensical Latin derived from Cicero"s
                           1st-century BC text De Finibus Bonorum et Malorum.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'title' => "Fuzzy Beginnings",
                'content' => 'Creation timelines for the standard lorem ipsum passage vary, with some citing 
                           the 15th century and others the 20th.',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

        ];
    }
}
