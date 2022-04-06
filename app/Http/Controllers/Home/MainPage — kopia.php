<?php

declare(strict_types=1);

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class MainPage extends Controller{

    public function __invoke()
    {

        DB::table('genres')->truncate();
        //DB::table('genres')->delete();
        DB::table('genres')->insert(
            [
                'name' => 'RPG',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );

        DB::table('genres')->insert(
            [
            [
                'name' => 'Adventure',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'xxx',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]

            ]);

            DB::table('genres')->insertOrIgnore(
                [
                    [

                        'name' => 'Adventure',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ],
                    [
                        'name' => 'xxx',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]

                    ]
            );

            DB::table('genres')->insertOrIgnore(
                [
                        'name' => 'TPP',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                ]
            );

            $id = DB::table('genres')->insertGetId(
                [
                        'name' => 'Sim',
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                ]
            );
            //AKTUALIZACJA DANYCH
            DB::table('genres')
                ->where('id',7)
                ->update(['name' => 'Strategy']);
            //USUWANIE DANYCH
            DB::table('genres')
                ->where('id',7)
                ->delete();




        //$db = \DB::connection()->getPdo();
        //dd($db);
        $config = config('app.name');
        return view('home.main');
    }

}
