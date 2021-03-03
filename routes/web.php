<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TesteController;

// use App\Http\Controllers\PostsController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/testes", [TesteController::class, "index"])->name('testes.index');
Route::post("/testes", [TesteController::class, "store"]);
Route::get("/testes/create", [TesteController::class, "create"]);
Route::get("/testes/{item}", [TesteController::class, "show"])->name('testes.show');
Route::get("/testes/{item}/edit", [TesteController::class, "edit"]);
Route::put("/testes/{item}", [TesteController::class, "update"]);


/*
    Route::get('/about', function () {

        // return App\Models\Teste::take(3)->latest()->get();

        return view('about',['assignments' => App\Models\Teste::take(3)->latest()->get()]);
    });
*/

// Route::get("/posts/{post}", [PostsController::class, "show"]);


// Route::get('/test/{id}', function($id) {
//    return view('test', ['id' => $id]);
// });


//Route::get('/test/', function() {
  //  $name = request('name');
    //return view('name', ['name' => $name]);
//});

/*
Route::get("post/{post}", function ($post) {
    $posts = [
        "my-first-post" => "Hello, this is my first post!",
        "my-second-post" => "Now I am getting the hang of this blogging thing."
    ];

    if(! array_key_exists($post, $posts)) {
        abort(404, "Sorry, that post was not found.");
    }

    return view("post", ["post" => $posts[$post]]);
});
*/