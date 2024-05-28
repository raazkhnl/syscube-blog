<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Reactors;
use Illuminate\Http\Request;

class CommentController extends Controller
{   

    //Displaying all data from db
    public function comment(Request $request)
    {
       
        $comments=Comment::with('blog')
        ->get() ;
        return view('blog.comment');
    }

    //Validating and saving data to db
    public function store(Request $request)
    {   
        $comment= new Comment;
        $comment->comment=$request->get('comment');
        $comment->user()->associate($request->user());
        $blog=Blog::find($request->get('blog_id'));
        $blog->comments()->save($comment);
        return back()->with(['message' => 'Commented!']);      
    }



}
