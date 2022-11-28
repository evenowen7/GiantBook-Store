<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('publishers')->insert([
            'publisher_name' => 'Even Owen Thamrin',
            'address' => 'Alam Sutera, Tangerang',
            'phone' => '088877766655',
            'email' => 'even.thamrin@binus.ac.id',
            'image' => 'Lorem Ipsum',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now() -> format('Y-m-d H:i:s')
        ]);
    }
}
