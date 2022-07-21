<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function index() {
        // $users = DB::select('select * from users');

        $users = DB::table('users')->get();

        return (view('blog.post')->with('users',$users));
    }
}
