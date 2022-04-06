<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->truncate();
        DB::table('genres')->insert([

            ['name'=>'RPG2', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now()],
            ['name'=>'Adventures', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now()],
            ['name'=>'FPSS', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now()],
            ['name'=>'Sport', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now()],
            ['name'=>'Simm', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now()]
        ]);

    }
}
