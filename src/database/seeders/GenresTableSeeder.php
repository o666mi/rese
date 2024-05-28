<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = [
            'genre' => '寿司'
        ];
        DB::table('genres')->insert($genre);
        $genre = [
            'genre' => '焼肉'
        ];
        DB::table('genres')->insert($genre);
        $genre = [
            'genre' => '居酒屋'
        ];
        DB::table('genres')->insert($genre);
        $genre = [
            'genre' => 'イタリアン'
        ];
        DB::table('genres')->insert($genre);
        $genre = [
            'genre' => 'ラーメン'
        ];
        DB::table('genres')->insert($genre);
    }
}
