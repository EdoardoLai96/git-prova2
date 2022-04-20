<?php

use App\Song;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'name' => Str::random(10),
            'author' => Str::random(10),
            'genre' => Str::random(10),
            'release_date' => '2022-10-10',
        ]);
    }
}
