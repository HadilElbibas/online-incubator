<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use  \App\NewsItem;
use \App\Http\Controllers\Controller;

class NewsItemController extends Controller
{
    public function index()
    {
        $news = NewsItem::all();
        return view('admin.news.index')->with('news', $news);
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store()
    {
        // request()->validate([

        //     'title'  =>  'required|min:10',
        //     'description'   =>  'required|string',
        //     'image' =>  'required|image',
        // ]);
        $image_path = request()->file('image')->store('images', 'public');

        $news_item = new NewsItem;
        $news_item->title = request()->title;
        $news_item->writer = request()->writer;
        $news_item->description = request()->description;
        $news_item->image = $image_path;
        $news_item->save();

        return redirect('admin/news');
    }

    public function show($id)
    {
        $news_item = NewsItem::find($id);
        return view('admin.news.show', compact('news_item'));
    }

    public function edit($id)
    {
        //with->newsitem this is the varl name we want to work on
        return view('admin.news.edit')->with('newsitem', NewsItem::find($id)); 
    }

    public function update($id)
    {
        
        $news_item = NewsItem::find($id);

        $news_item->title = request()->news_title;
        $news_item->writer = request()->news_writer;
        $news_item->description = request()->news_description;
        // $news_item->image= request()->news_image;
        $news_item->save();
        
        return redirect('admin/news');
    }

    public function destroy($id)
    {
        $news_item = NewsItem::find($id);

        $news_item->delete();
        return redirect('admin/news');
    }


   
}
    

