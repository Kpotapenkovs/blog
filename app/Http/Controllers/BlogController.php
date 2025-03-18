<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view("blogs.index", compact("blogs"));
    }

    public function show(Blog $blog) {
        return view("blogs.show", compact("blog"));
      }

      
    public function create(Blog $blog) {
        return view("blogs.create", compact("blog"));
      }

      public function edit(Blog $blog) {
        return view("blogs.edit", compact("blog"));
      }

    public function store(Request $request) {
        
        $validated = $request->validate([
            "category" => ["required", "max:255"]
          ]);
        
        Blog::create([
            "category" => $request->category
          ]);
        
        return redirect("/blogs");
    }




    public function update(Request $request, Blog $blog) {

      $validated = $request->validate([
        "category" => ["required", "max:255"]
      ]);

      $blog->category = $validated["category"];
      $blog->save();
      return redirect("/blogs");
    }



    public function destroy(Blog $blog){
      $blog->delete();
      return redirect("/blogs");
    }




}
