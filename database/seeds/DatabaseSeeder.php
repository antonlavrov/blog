<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles',)->insert(
            [
                [
                    'name'=>Str::random(10),
                    'text'=>Str::random(30),
                    'img'=>Str::random(6).'.jpg',
                    'alias'=>Str::random(15)
                ],

            ]
          );
    }
}
