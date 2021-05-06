<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news=News::all();

           $news = News::when($request->search, function ($query) use ($request) {

                   return $query->whereTranslationLike('title', '%'.$request->search.'%');

               })->latest()->paginate(2);
               




     return view('dashboard.news.index',compact('news'));

    }//end of index

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.news.create');

    }//end of create

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'ar.*' => 'required|unique:news_translations,title,description',
            'image' => 'image',
        ]);


        $request_data = $request->except(['image']);

            Image::make($request->image)
            ->resize(300, null, function ($constraint) {
            $constraint->aspectRatio();
            })->save(public_path('uploads/news_image/'. $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

         News::create($request_data);
        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('dashboard.news.index');


    }//end of store

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {

        return view('dashboard.news.edit',compact('news'));

    }//end of eidt

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'ar.*' => 'required|unique:news_translations,title,description',
            'image' => 'image',
        ]);

        $request_data = $request->except(['image']);

        if ($request->image) {
            Storage::disk('public_uploads')->delete('/news_image/'.$news->image);
        }

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/news_image/'. $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        $news->update($request_data);

        return redirect()->route('dashboard.news.index');


    }//end of update

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , News $news)
    {

        if ($request->image)
        {
            Storage::disk('public_uploads')->delete('/news_image/'.$news->image);
        }
        $news->delete();

        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.news.index');

    }//end of destory
}
