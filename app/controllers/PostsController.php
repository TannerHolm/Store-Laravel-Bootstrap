<?php
use Davzie\LaravelBootstrap\Uploads\Uploads;
use Davzie\LaravelBootstrap\Posts\Posts;
use Davzie\LaravelBootstrap\Uploads\UploadsRepository;

class PostsController extends \BaseController {


	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()	
	{
		$posts = Post::orderBy('created_at', 'DESC')->paginate(9);

		return View::make('posts.index', compact('posts'));
	}

	
	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// $item = Uploads::find($uploadable_id);
		$post = Post::findOrFail($id);

		return View::make('posts.show', compact('post'));
	}

}