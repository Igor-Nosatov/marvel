<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
         $this->call(HeroSeeder::class);
         $this->call(ImageSeederTable::class);
    }
}
