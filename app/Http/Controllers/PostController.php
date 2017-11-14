<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Sentinel;

class PostController extends Controller
{

	public function allPost() 
	{
		return view('back.post.allPost');
	}

    public function addNewPost()
    {
    	return view('back.post.addNewPost');
    }

    public function savePost(Request $request)
    {
    	$data = [
    		'title'=>$request->input('title'),
    		'description'=>$request->input('description'),
    		'category'=>$request->input('category'),
    		'post_type'=>1,
    		'post_user'=>Sentinel::getUser()->id,
    		//'image'=>$request->input('image'),
    		'tag'=>$request->input('tag')
    	];

    	$post = DB::table('posts')->insert($data);

    	if($post){
    		$request->session->flash('status', 'Post saved Successfully!');
    	} else {
    		$request->session->flash('status', 'Post Could not be saved!');
    	}
    	return redirect('/new-cover');
    }
}
