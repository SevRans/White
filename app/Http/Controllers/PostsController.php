<?php

namespace App\Http\Controllers;

use App\Models\answers;
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
}
