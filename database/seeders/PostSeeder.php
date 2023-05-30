<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'title' => '命令の心得',
                'body' => '命令はデータを基準に考える',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
