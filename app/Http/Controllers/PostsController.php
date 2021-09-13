<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\Questions;
use Auth;
use App\Models\User;

class PostsController extends Controller
{
    public function index()
    {
        return Posts::with(['user'])->get();
    }

public function store(Request $request)
{
    $validated = $request->validate([

        'title' => 'required',
        'text' => 'required',

    ]);
    $newPosts = new Posts();
    $newPosts -> author_id = Auth::id();
    $newPosts->title = $validated ['title'];
    $newPosts->body =$validated['text'];

    $newPosts->save();


    //return redirect()->route('AnswersController.create')
    //    ->with('success','question created.');
    return route('posts.index');

}
}
