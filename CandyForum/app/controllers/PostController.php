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
        $post->views = 0;
        $post->author_id = Auth::user()->id;
        $post->category_id = $_POST['category'];
        $post->tags = substr($_POST['tags'], 0, strlen($_POST['tags']) - 2);
        $post->save();
        $posts = Posts::allPosts();
        return View::make('posts.index')->with('posts', $posts);
	}

    public function search(){
        $result = Post::where('header', 'LIKE', '%%'.$_POST['query'].'%%')->get();
        return View::make('posts.search')->with('posts', $result);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $result = Posts::allPosts($id, 'category');
		return View::make('posts.showAll')->with('posts', $result);
	}

    public function showPost($id)
    {
        $result = array();
        
        $visitedPost = Post::find($id);
        $views = $visitedPost->views;
        $visitedPost->views = $views + 1;
        $visitedPost->save();
        
        $post = Posts::allPosts($id);
        
        $answers = Answers::allAnswers($id);

        if(!isset($result['post']))
        {
            $result['post'] = array();
            $result['answers'] = array();
        }

        $result['post'] = $post;
        $count = 0;

        foreach($answers as $answer){
            $result['answers'][$count] = $answer['original'];
            $count += 1;
        }
       

        return View::make('posts.show')->with('post', $result);
    }

    public function userPosts(){
        $author_id = Auth::id();
        $posts = Posts::allPosts($author_id, "user");
        return View::make('posts.showAll')->with('posts', $posts);
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