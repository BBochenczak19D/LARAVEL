<?php

namespace App\Http\Controllers\Game;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Game;
class EloquentController extends Controller
{

    public function index(){

       // $games = Game::all();
        //dd($games);
        $games = Game::with('genre')//simplePaginate(3);
        //DB::table('games')
         //   ->join('genres','games.genre_id','=','genres.id') //inner join tabel - wyciagamy nazwe gatunku potem z tego
          //  ->select('games.id','games.title','genres.name as genre_name')//w htmlu uzywamy to genre_name
          //  ->orderBy('genres.name')
           ->orderBy('games.title')
            //->get();
            //->paginate(3);
            ->simplePaginate(3);

        return view('games.eloquent.list', ['games' => $games]);
    }

    public function dashboard()
    {



        $games = DB::table('games')
            ->join('genres','games.genre_id','=','genres.id') //inner join tabel - wyciagamy nazwe gatunku potem z tego
            ->select('games.id','games.title','genres.name as genre_name')//w htmlu uzywamy to genre_name
            ->orderBy('genres.name');

            //->get();
            //->paginate(3);
           // ->simplePaginate(3);
        //dd($games->toArray());
        $stats =[
            'count' => Game::count(),
            'countId' => Game::where('id','<',5)->count()
        ];


        //dd($stat);
        return view('games.eloquent.dashboard',[

            'stats' => $stats, 'games' => $games
        ]);
    }


    public function show($gameId)
    {
        //$game = DB::table('games')->where('id', $gameId)->get();
        //$game = DB::table('games')->where('id', $gameId)->first();
        //var_dump($gameId);
        //dd($gameId);
        // $games = Game::find($gameId);
        //$games = Game::finOrFail('id',$gameId);
        $games = Game::firstWhere('id',$gameId);

        return view('games.eloquent.show', [
            'games' => $games
        ]);
    }

}
