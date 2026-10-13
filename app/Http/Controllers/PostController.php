<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return view('posts.index');
    }

    public function update(Request $request, $id)
    {
        // Handle the update logic here
        return "Post with ID: " . $id . " has been updated.";
    }

    public function the_path(Request $request)
    {
        $requestPath = $request->path();
        return "The request path is: " . $requestPath;
    }

}
