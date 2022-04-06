<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Generator::class);

        DB::table('games')->truncate();

        DB::table('games')->insert([

            ['id'=> 1,'title'=>"dwqd312w", 'description'=>"wdsssdsdhrhrhrthh",'publisher'=>'RPnnnG2', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now(),'genre_id' =>1],
            ['id'=> 2,'title'=>"dwqd31313w", 'description'=>"wdsssdhtrhtsd",'publisher'=>'RPnnnG2', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now(),'genre_id' =>2],
            ['id'=> 3,'title'=>"dwqd122w", 'description'=>"wdsssdsghtrd",'publisher'=>'RPnnnG2', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now(),'genre_id' =>3],
            ['id'=> 4,'title'=>"dwqdw1313", 'description'=>"wdsssdaaasd",'publisher'=>'RPnnnG2', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now(),'genre_id' =>4],
            ['id'=> 5,'title'=>"dwqdw313", 'description'=>"wdsssdsd",'publisher'=>'RPnnnG2', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now(),'genre_id' =>5],
            ['id'=> 6,'title'=>"dwqdw1313", 'description'=>"wdsssdsdaaaaaa",'publisher'=>'RPnnnG2', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now(),'genre_id' =>6],
            ['id'=> 7,'title'=>"dwqd313w", 'description'=>"wdsssdsdaa",'publisher'=>'RPnnnG2', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now(),'genre_id' =>7],
            ['id'=> 8,'title'=>"31131dwqdw", 'description'=>"wdsaaaaaaassdsd",'publisher'=>'RPnnnG2', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now(),'genre_id' =>8],
            ['id'=> 9,'title'=>"dwq1321233213dw", 'description'=>"wdsssdshrthrthrd",'publisher'=>'RPnnnG2', 'created_at'=> Carbon::now(),'updated_at' => Carbon::now(),'genre_id' =>9]
        ]);
    }
}
