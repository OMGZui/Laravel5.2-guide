<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'link_name' => 'OMGZui',
                'link_title' => 'blog',
                'link_url' => 'http://www.github.com/OMGZui',
                'link_order' => 1,
            ],
        ];
        DB::table('links')->insert($data);
    }
}
