<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;

class TestController extends Controller
{
    //
    public function view($id){
    	$article= Article::find($id);

    	$article->category;
    	$article->user;
    	$article->tags;

    	return view('index',['reportage'=>$article]);
    }
}
