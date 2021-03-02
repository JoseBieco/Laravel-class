<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function show($url) {
    
        // $post = DB::select('select * from Aula where url = :url', ['url' => $url]);
        // OR
        $result = DB::table('posts')->where('url', $url)->first();

        if(!$result){
            abort(404);
        }

        return view("post", ["post" => $result->body]);
    }
}
