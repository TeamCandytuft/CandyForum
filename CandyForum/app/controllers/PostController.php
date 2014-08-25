<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $result = Posts::allPosts();
		return View::make('posts.index')->with('posts', $result);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post;
        $post->header = $_POST['header'];
        $post->content = $_POST['content'];
        $post->author_id = Auth::user()->id;
        $post->category_id = $_POST['category'];
        $post->tags = 'empty tag';
        $post->save();
        $posts = Posts::allPosts();
        return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $result = Posts::allPosts($id);
		return View::make('posts.show')->with('posts', $result);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::where('id', '=', $id)->get();
        $post->header = $_POST['header'];
        $post->content = $_POST['content'];
        $post->author_id = Auth::user()->id;
        $post->category_id = $_POST['category'];
        $post->tags = 'empty tag';
        $post->update();
        return View::make('posts.show@'.$id);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
