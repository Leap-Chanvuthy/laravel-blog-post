<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function findAllBlogs(){
        $blogs = Blog::with('comments')->get();
        if(!$blogs){
            return response(['message' => 'Data not found !']);
        }
        return response(['data' => $blogs]);
    }
    
    public function findOneBlog($id){
        $blog = Blog::find($id);
        return response(['data' => $blog]);
    }

    public function addBlog(Request $request){
        $blog = Blog::create($request -> all());
        return response(['message' => 'Data added successfully']);
    }

    public function deleteBlog ($id){
        $blog = Blog::find($id);
        if ($blog){
            $blog -> delete();
            return response(['message' => 'Data deleted successfully']);
        }
        return response(['message' => 'Data cannot be deleted']);
    }

    public function updateBlog (Request $request , $id) {
        $blog = Blog::find($id);
        if ($blog){
            $blog -> update($request -> all());
            $updated = Blog::find($id);
            return response(['message' => $updated]);
        }
        return response(['message' => 'Data cannot be updated']);
    }
}
