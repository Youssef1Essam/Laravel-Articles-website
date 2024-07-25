<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ArticleController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required',
            'body' => 'required'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);
        return view('welcome')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. Validation title, body
        $this->validator($request->all())->validate();

        // 2. Get file from form
        $file = $request->file('thumbnail');
        $time = Carbon::now();
        $directory = $time->format('Y') . '/' . $time->format('m');
        $fileName = $time->format('h') . $time->format('s') . rand(1, 9) . '.' . $file->extension();
        Storage::disk('public')->putFileAs($directory, $file, $fileName);

        // 3. Add to database
        $article = Article::create([
            'body' => $request->body,
            'title' => $request->title,
            'thumbnail' => $directory . '/' . $fileName,
        ]);

        // 4. Return to another page
        $request->session()->flash('message', 'Message added successfully');
        return redirect()->route('admin-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where('id', $id)->firstOrFail();
        return view('article')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::where('id', $id)->firstOrFail();
        return view('admin.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::where('id', $id)->firstOrFail();

        $article->update([
            'body' => $request->body,
            'title' => $request->title,
        ]);

        if($request->file('thumbnail')){

            // 2. Get file from form
        $file = $request->file('thumbnail');
        $time = Carbon::now();
        $directory = $time->format('Y') . '/' . $time->format('m');
        $fileName = $time->format('h') . $time->format('s') . rand(1, 9) . '.' . $file->extension();
        Storage::disk('public')->putFileAs($directory, $file, $fileName);
        $article->thumbnail=$directory.'/'.$fileName;
        $article->save();

        }



        // 3. Return to another page
        $request->session()->flash('message', 'Message edited successfully');
        return redirect()->route('admin-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
