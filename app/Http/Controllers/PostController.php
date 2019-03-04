<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
	public function create()
	{
		$categories = Category::all();

		return view('post.create', compact('categories'));
	}

	public function store()
	{
		Post::create([
			'title' => request('title'),
			'slug' => str_slug(request('title')),
			'content' => request('content'),
			'category_id' => request('category_id')
		]);

		return redirect('/home');
	}
}
