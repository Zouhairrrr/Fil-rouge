<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller

{
   

    //

    protected function createPost(Request $request)
    {
        DB::table('posts')->insert([

            'description' => $request->description,
            'tag' => $request->tag,
            // 'seeker_id' => Auth::guard('seeker')->id(),
        ]);
        return back()->with('success','Post Has been added successfully');
    }
    protected function showPost(){
        $posts = DB::table('posts')->get();

        // $posts= Post::all();
   }
}
