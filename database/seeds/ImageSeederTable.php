<?php

use Illuminate\Database\Seeder;

class ImageSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image')->insert([
            'name' => '/img/1.png',
            'hero_id' => '1'
        ]);
        DB::table('image')->insert([
            'name' => '/img/2.png',
            'hero_id' => '2'
        ]);
        DB::table('image')->insert([
            'name' => '/img/3.png',
            'hero_id' => '3'
        ]);
        DB::table('image')->insert([
            'name' => '/img/4.png',
            'hero_id' => '4'
        ]);
        DB::table('image')->insert([
            'name' => '/img/5.png',
            'hero_id' => '5'
        ]);
        DB::table('image')->insert([
            'name' => '/img/6.png',
            'hero_id' => '6'
        ]);
        DB::table('image')->insert([
            'name' => '/img/7.png',
            'hero_id' => '7'
        ]);
        DB::table('image')->insert([
            'name' => '/img/8.png',
            'hero_id' => '8'
        ]);
        DB::table('image')->insert([
            'name' => '/img/9.png',
            'hero_id' => '9'
        ]);
        DB::table('image')->insert([
            'name' => '/img/10.png',
            'hero_id' => '10'
        ]);
    }
}
