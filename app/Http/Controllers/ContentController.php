<?php

namespace App\Http\Controllers;

use App\Models\content;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view("Contents.index", compact("contents"));
    }

    public function show(content $contents) {
        return view("blogs.contents.show", compact("contents"));
      }

      public function edit(content $contents) {
        return view("blogs.contents.edit", compact("contents"));
      }


      public function create(content $contents) {
        return view("blogs.contents.create", compact("contents"));
      }

      public function store(Request $request) {
        
        $validated = $request->validate([
            "contents" => ["required", "max:255"]
          ]);
        
        Content::create([
            "contents" => $request->contents
          ]);
        return redirect("/blogs/{blogs_id}");
    }
      
    public function update(Request $request, content $contents) {

        $validated = $request->validate([
          "contents" => ["required", "max:255"]
        ]);
         
        $contents->contents = $validated["contents"];
        $contents->save();
        return redirect("/blogs/{blogs_id}");
      }


      public function destroy(content $contents){
        $contents->delete();
        return redirect("/blogs/{blogs_id}");
      }
}
