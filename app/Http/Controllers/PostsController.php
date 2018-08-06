<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //

    public function index(){
    	return view('post.index');
    }

    public function create(){
    	return view('post.create');
    }
}
