<?php

namespace App\Http\Controllers\Admin;

use  \App\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoryController extends Controller

{

    public function index()
    {
        $stories = story::all();
        return view('admin.stories.index')->with('stories', $stories);
    }
    
    public function create()
    {
        return view('admin.stories.create');
    }
    
    public function edit($id)
    {
        //with->story this is the var name we want to work on
        return view('admin.stories.edit')->with('story', story::find($id)); 
    }
    
    public function store()
    {

        $story = new Story;
        $story->title = request()->title;
        $story->description = request()->description;
        
        if (request()->file('image')) {
            $image_path = request()->file('image')->store('images', 'public');
            $story->image = $image_path;
        }
        
        $story->save();
        
        return redirect('admin/stories');
    }
    
    public function update($id)
    {
        
        $story = story::find($id);
        $story->title = request()->story_title;
        $story->description = request()->story_description;
        $story->save();
        
        return redirect('admin/story');
    }


    public function show($id)
    {
        $story = story::find($id);
        return view('admin.stories.show', compact('story'));
    }


    public function destroy($id)
    {
        $story = story::find($id);

        $story->delete();
        return redirect('admin/stories');
    }


}


