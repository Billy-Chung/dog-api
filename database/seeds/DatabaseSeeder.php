<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        \DB::table('home')->insert([
            [
                'dog_img' => 'https://images.unsplash.com/photo-1511382686815-a9a670f0a512?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=968&q=80',
                'dog_name' => '藍哥',
                'dog_old' => '7歲',
                'only_id' => 1,
                'deleted_at' => false,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s'),
            ],
            [
                'dog_img' => 'https://images.pexels.com/photos/551628/pexels-photo-551628.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
                'dog_name' => '皮克',
                'dog_old' => '3歲',
                'only_id' => 2,
                'deleted_at' => false,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s'),
            ],
            [
                'dog_img' => 'https://images.pexels.com/photos/1490908/pexels-photo-1490908.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
                'dog_name' => '哈金',
                'dog_old' => '6歲',
                'only_id' => 3,
                'deleted_at' => false,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s'),
            ],
            [
                'dog_img' => 'https://images.pexels.com/photos/164186/pexels-photo-164186.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
                'dog_name' => '公主',
                'dog_old' => '2歲',
                'only_id' => 4,
                'deleted_at' => false,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s'),
            ],
            [
                'dog_img' => 'https://images.pexels.com/photos/1564506/pexels-photo-1564506.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
                'dog_name' => '阿獅',
                'dog_old' => '3歲',
                'only_id' => 5,
                'deleted_at' => false,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s'),
            ],
            [
                'dog_img' => 'https://images.unsplash.com/photo-1455526050980-d3e7b9b789a4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=625&q=80',
                'dog_name' => '辛巴',
                'dog_old' => '2歲',
                'only_id' => 6,
                'deleted_at' => false,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s'),
            ],
            [
                'dog_img' => 'https://images.unsplash.com/photo-1446730853965-62433e868929?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80',
                'dog_name' => '豆皮',
                'dog_old' => '2歲',
                'only_id' => 7,
                'deleted_at' => false,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s'),
            ],
            [
                'dog_img' => 'https://images.unsplash.com/photo-1513757271804-385fb022e70a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80',
                'dog_name' => '阿瓜',
                'dog_old' => '2歲',
                'only_id' => 8,
                'deleted_at' => false,
                'created_at' => date('Y/m/d H:i:s'),
                'updated_at' => date('Y/m/d H:i:s'),
            ]
        ]);
    }
}
