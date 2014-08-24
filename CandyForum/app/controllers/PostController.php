<?php
class PostController extends BaseController{
    public   $restfull = true;

    function get_index(){
        return View::make('posts.index');
    }
}