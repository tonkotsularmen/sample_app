<?php

namespace App\Http\Controllers;
use App\Content;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    function index(){
        $contents = Content::all();
        # 使用するビューファイルの指定
        return view("contents.index", compact("contents"));
    }
    //
    function show(Content $content){
        return view("contents.show", compact("content"));
    }
    //
    public function create(){
        return view("contents.create");
    }
}
