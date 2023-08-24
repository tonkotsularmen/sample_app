<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Content::query();

        if (!empty($keyword)) {
            $query->where('gym_name', 'LIKE', "%{$keyword}%");
        }

        $contents = $query->get();
        # 使用するビューファイルの指定
        return view("contents.index", compact("contents", 'keyword'));
    }


    function show(Content $content)
    {
        return view("contents.show", compact("content"));
    }


    public function create()
    {
        return view("contents.create");
    }


    public function store(Request $request)
    {
        $content = new Content();
        $content->fill($request->all());
        $content->user_id = Auth::user()->id;
        $content->save();

        return redirect()->route('contents.show', $content);
    }


    public function edit(Content $content)
    {
        $this->checkMyData($content);
        return view("contents.edit", compact("content"));
    }


    public function update(Request $request, Content $content)
    {
        $this->checkMyData($content);
        $content->fill($request->all());
        $content->save();

        return redirect()->route('contents.show', $content);
    }


    public function destroy(Content $content)
    {
        $this->checkMyData($content);
        $content->delete();
        return redirect()->route('contents.index');
    }


    private function checkMyData(Content $content)
    {
        if ($content->user_id != Auth::user()->id) {
            return redirect()->route('contents.index');
        }
    }
}
