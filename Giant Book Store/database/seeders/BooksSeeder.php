<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books') ->insert([

        'title' => 'THE MIND OF A LEADER',
        'year' => '2022',
        'synopsis' => 'Lorem Ipsum',
        'image' => 'Lorem Ipsum',
        'publisher_id' => 1,
        'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now() -> format('Y-m-d H:i:s')
        ]);
    }
}
