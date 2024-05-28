<?php

namespace App\Http\Controllers;

use App\Models\Reactor;
use Illuminate\Http\Request;

class ReactorController extends Controller
{
    public function respond(Request $request, $blog)
    {
        $request->validate([
            'response'=>'required|in:0,1'
        ]);
        
        $entry=Reactor::where('user_id', auth()->id())
            ->where('blog_id',$blog)
            ->first();
        if(!$entry)
        {
        Reactor::create([
            'user_id'=>auth()->id(),
            'blog_id'=>$blog,
            'like'=>$request->response,

        ]);
        return redirect()->route('dashboard')->with(['message' => 'Responded To The Blog!']);

        }else{
            return redirect()->back()->with(['message' => 'You Have Already Responded!']);
        }
    }
}
