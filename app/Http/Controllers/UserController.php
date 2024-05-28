<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{
    User,
    Role,
    Permission,
    RolePermission
};

class UserController extends Controller
{
    public function profile($userId, Request $request)
    {
        $user=User::find($userId);
        return view('profile', compact('user'));
    }
}

// public function comment($id)
// {
//     $blog = Blog::find($id);

//     return view('blog.comment', compact('blog'));
// }