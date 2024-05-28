<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;



class BlogController extends Controller
{   
     //Displaying all data from db
     public function index()
     {
         $blogs=Blog::with('user')
         ->withCount('likes','dislikes')
         ->get() ;   //Blog= blogs (pluralcase)
        
         return view('dashboard', compact('blogs'));
     }
     public function create()
     {
         $blogs=Blog::with('user')
         ->withCount('likes','dislikes')
         ->get() ;   //Blog= blogs (pluralcase)
        
         return view('blog.create', compact('blogs'));
     }
     //Validating and saving data to db
     public function store(Request $request)
    { 
        //requesting data into respective name of form and validating
        $request->validate([
            'title'=>'required|max:50',
            'description'=>'required',
            'photo'=>'required|mimes:jpg,png,jpeg|max:5120|',
        ]);
        //stores path
        $path=$request->file('photo')->store('blog',['disk'=>'public']);
        
        //Saving in DB
        Blog::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=> auth()->id(),
            'image'=>$path,
        ]);
        return redirect()->route('dashboard')->with(['message'=> 'Blog Created!']);
    }

    public function show($id)
    {
        $blog = Blog::find($id);

        return view('show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        
        return view('blog.edit', compact('blog'));
    }

    public function comment($id)
{
    $blog = Blog::find($id);

    return view('blog.comment', compact('blog'));
}
    

    public function update(Request $request, Blog $blog)
    {
        if ($blog->user_id == auth()->id()){
            $blog->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return redirect()->route('dashboard')->with(['message' => 'Blog Updated']);
        } else {
            abort(403);
        }

    }

    public function delete(Blog $blog)
    {
        if($blog->user_id==auth()->id())
        {
            $blog->delete();
            return redirect()->route('dashboard')->with(['message' => 'Blog Deleted!']);
        } else {
            abort(403);
        }

    }


}
