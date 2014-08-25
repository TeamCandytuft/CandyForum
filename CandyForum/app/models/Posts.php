<?php
class Posts{
    public static function  allPosts($id = -1){
        if($id == -1){
            $posts = Post::all();
        }
        else{
            $posts = Post::where('category_id', '=', $id)->get();
        }
        $result = array();
        $count = 0;
        foreach($posts as $post){
            $result[] = $post['original'];
            if(!isset($result[$count]['author']))
            {
                $result[$count]['author'] = '';
            }
            $result[$count]['author'] = User::where('id', '=', $result[$count]['author_id'])->get()[0]['username'];
            $count += 1;
        }
        return $result;
    }
}