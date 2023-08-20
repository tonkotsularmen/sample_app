<?php

namespace App\Http\Controllers;

use App\Content;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    function index()
    {
        $contents = Content::all();
        # 使用するビューファイルの指定
        return view("contents.index", compact("contents"));
    }
    //
    function show(Content $content)
    {
        return view("contents.show", compact("content"));
    }
    //
    public function create()
    {
        return view("contents.create");
    }
    public function store(Request $request)
    {
        $content = new Content();
        $content->fill($request->all());
        $content->save();

        return redirect()->route('contents.show', $content);
    }
    public function edit(Content $content)
    {
        return view("contents.edit", compact("content"));
    }
    public function update(Request $request, Content $content)
    {
        $content->fill($request->all());
        $content->save();

        return redirect()->route('contents.show', $content);
    }
    public function destroy(Content $content)
    {
        $content->delete();
        return redirect()->route('contents.index');
    }
}
