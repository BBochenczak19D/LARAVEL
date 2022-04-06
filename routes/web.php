<?php
declare(strict_types = 1);
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Home\MainPage')
    ->name('home.mainPage');

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('users', 'UserController@list')
    ->name('get.users');

Route::get('users/{userId}', 'UserController@show')
->name('get.users.show');



//Route::get('users/test/{id}','UserController@testShow')
//    ->name('get.users.test.show');

//Route::post('users/test/{id}','UserController@testStore')
//     ->name('post.users.test.store');

//Route::get('users/{id}/address', 'User\ShowAddress');

//Route::resource('games', 'GameController');

//Route::resource('games', 'GameController')
//    ->only([
 //   'index', 'show'
//    ]);
//dwie trasy zastępują ten resource ^^

 //'middleware' => ['profiling']],
Route::group(['prefix' => 'b/games', 'namespace' => 'Game'], function(){

    Route::get('','BuilderController@index')
    ->name('games.list');

    Route::get('{game}','BuilderController@show')
    ->name('games.show');

    Route::get('dashboard', 'BuilderController@dashboard')
    ->name('games.dashboard');


});

Route::group(['prefix' => 'e/games', 'namespace' => 'Game'], function(){

    Route::get('','EloquentController@index')
    ->name('games.eloquent.list');

    Route::get('{game}','EloquentController@show')
    ->name('games.eloquent.show');

    Route::get('dashboard', 'EloquentController@dashboard')
    ->name('games.eloquent.dashboard');


});




//Route::get('users/{id}','User\ProfilController@testShow')
 //   ->name('get.user.profile');




/*

Route::view('/view/route', 'route.view');

Route::view(
    '/view/route/var1',
    'route.viewParam',
    ['param1' => 'var1 - to nasza dana', 'name' => 'Tom']
);

Route::view(
    '/viewParamRoute',
    'route.viewParam',
    ['param1' => 'xdxdxdd', 'name' => 'Tomcat']
);



Route::get('users/{nick}', function (string $nick) {

    dd($nick);
})->where(['nick' => '[a-z0-9]+']);

Route::get('elements/{id}', function (int $id) {
    return 'element: ' . $id;
})->name('shop.items.single');


Route::get('example', function () {
    $url = route('shop.items.single',['id' => 4444]);
    dump($url);
});


Route::get($uri, fn()=> 'siema jestem GET');
Route::post($uri, fn()=> 'siema jestem POST');
Route::put($uri,fn()=> 'jestem PUT');
Route::delete($uri,fn()=> 'jestem DELETE');
Route::patch($uri,fn()=> 'jestem PATCH');
Route::options($uri,fn()=> 'jestem OPTIONS');*/
