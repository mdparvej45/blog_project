<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function post(){
        return view('add_post');
    }
    public function posts(){
        return view('all_posts');
    }
    public function post_store(Request $request){
        $request->validate([
            'title' => 'required|string|min:5',
            'detiles' => 'required|min:10'
        ],
        [
            'title.required' => 'Khali rakha jabe nah ',
            'title.min' => 'Khub kom hoycha',
            'detiles.required' => 'Detiles to khali '
        ]
    );
        // insert
        $newPost = new post();
        $newPost->title = $request['title'];
        $newPost->detiles = $request['detiles'];
        $newPost->save();
    }
}
