<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use Illuminate\Http\Request;

    class UserController extends Controller{

        public function list(Request $request){
            $users = [
                [
                    'id' => 1,
                    'name' => "Lol",
                ],
                [
                    'id' => 2,
                    'name' => "xd",
                ],
                [
                    'id' => 3,
                    'name' => "adssdsa",
                ],


            ];


           return view('user.list', [
               'users' =>$users
           ]);
        }

        public function show(int $userId){


            $user = [

                    'id' => $userId,
                    'name' => 'gfggh',
                    'firstName' => "John",
                    'lastName' => "Wayne",
                    'age' => 12,
                    'html' => "<b>dfawdwad</b>",
            ];

            return view('user.show' ,[
                'user' => $user,
                'nick' => false
            ]);
        }
        ////public function testShow(Request $request,int $id)
        ///{
        ///    return view('user.show',
         ///   [
          ///      'applicationName'=>'Laravel Games',
          ///      'id'=>$id,
         ///       'example'=>'show',
         //./   ]);
        ///

        //public function testStore(Request $request,int $id)
        ///{
        ////    if(!$request->isMethod('post'))
       ////         return 'nie jest post';

      ///  }


        //public function testShow(Request $request,int $id)
       // {
           // return "To jest zwykly tekst" . "User: $id";
           //return response(
           //    "<h3>edsffsdfds $id</h3>",
           //    200,
           //    ['Content-type'=>'text/html']
           //);
           //return response( "<h3>eefsda resposne $id </h3>")
           //->setStatusCode(200)
           //->header('Content-Type', 'text/html')
           //->header('own-Header', 'Laravel');

        //}



    }


?>
