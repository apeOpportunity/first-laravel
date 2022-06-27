<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'title' => 'Message 1',
            'content' => 'Content for message 1',
        ]);        

        DB::table('messages')->insert([
            ['title' => 'Message 2', 'content' => 'Content for message 2', 'created_at' =>  date("Y-m-d H:i:s"), 'updated_at' =>  date("Y-m-d H:i:s")],            
            ['title' => 'Message 3', 'content' => 'Content for message 3', 'created_at' =>  date("Y-m-d H:i:s"), 'updated_at' =>  date("Y-m-d H:i:s")],
            ['title' => 'Message 4', 'content' => 'Content for message 4', 'created_at' =>  date("Y-m-d H:i:s"), 'updated_at' =>  date("Y-m-d H:i:s")]            
        ]);
    }
}
