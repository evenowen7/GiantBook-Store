<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories') ->insert([
            'category_name' => 'comedy',
            'created_at' => Carbon::now() -> format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now() -> format('Y-m-d H:i:s')
        ]);
    }
}
