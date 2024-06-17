<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\NewsGallery;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = NewsCategory::get();
        $galleries = Gallery::get();
        return view('news.create', compact('categories','galleries'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            // 'user_id' => 'required|exists:users,id',
            'news_category_id' => 'required|exists:news_categories,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'published_date' => 'required|date',
            // 'status' => 'boolean',
            // 'image' => 'nullable|image',
        ]);
        $data['user_id'] = auth()->user()->id ?? 1;

        $data['status'] = $request->status ? 1:0;

        $news = News::create($data);
        foreach($request->image as $image ){
            $newsgallery= new NewsGallery();
            $newsgallery->user_id = auth()->user()->id;
            $newsgallery->news_id = $news->id;
            $newsgallery->gallery_id = $image;

            $newsgallery->save();





        }

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $news = News::with('galleries')->findOrFail($news->id);
        $categories = NewsCategory::all(); 
        $galleries = Gallery::get();
        return view('news.edit', compact('news', 'categories','galleries'));
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,News $news)
    {
        $data = $request->validate([
            // 'user_id' => 'required|exists:users,id',
            'news_category_id' => 'required|exists:news_categories,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'published_date' => 'required|date',
            // 'status' => 'boolean',
            //'image' => 'nullable|image',
        ]);
        $data['user_id'] = auth()->user()->id ?? 1;

        $data['status'] = $request->status ? 1:0;

        $news->update($data);

        $news->galleries()->detach();

    // Attach new galleries
    if ($request->has('image')) {
        foreach ($request->image as $image) {
            $news->galleries()->attach($image, ['user_id' => auth()->user()->id]);
        }
    }

    return redirect()->route('news.index');
    }
        
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index');
        
    }
}
