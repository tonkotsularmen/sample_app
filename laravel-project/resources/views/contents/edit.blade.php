@extends('layouts.layouts')

@section('content')
<h1>投稿データを修正</h1>
<form action="/contents/{{$content->id}}" method="POST">
    @csrf
    @method("PATCH")
    <div class="form-group">
        <label>店舗名</label>
        <input type="text" name="gym_name" class="form-control" value="{{$content->gym_name}}">
    </div>

    <div class="form-group">
        <label for="gym_clean">清潔感</label>
        <select class="custom-select" name="gym_clean">
            <option value="とても綺麗" {{($content->gym_clean == "とても綺麗")? "selected":""}}>とても綺麗</option>
            <option value="まあまあ綺麗" {{($content->gym_clean == "まあまあ綺麗")? "selected":""}}>まあまあ綺麗</option>
            <option value="ふつう" {{($content->gym_clean == "ふつう")? "selected":""}}>ふつう</option>
            <option value="あまり綺麗ではない" {{($content->gym_clean == "あまり綺麗ではない")? "selected":""}}>あまり綺麗ではない</option>
            <option value="綺麗ではない" {{($content->gym_clean == "綺麗ではない")? "selected":""}}>綺麗ではない</option>
        </select>
    </div>

    <div class="form-group">
        <label for="gym_staff">スタッフの対応</label>
        <select class="custom-select" name="gym_staff">
            <option value="とても丁寧" {{($content->gym_staff == "とても丁寧")? "selected":""}}>とても丁寧</option>
            <option value="まあまあ丁寧" {{($content->gym_staff == "まあまあ丁寧")? "selected":""}}>まあまあ丁寧</option>
            <option value="ふつう" {{($content->gym_staff == "ふつう")? "selected":""}}>ふつう</option>
            <option value="あまり丁寧ではない" {{($content->gym_staff == "あまり丁寧ではない")? "selected":""}}>あまり丁寧ではない</option>
            <option value="丁寧ではない" {{($content->gym_staff == "丁寧ではない")? "selected":""}}>丁寧ではない</option>
        </select>
    </div>

    <div class="form-group">
        <label for="gym_user">利用者のマナー</label>
        <select class="custom-select" name="gym_user">
            <option value="5" {{($content->gym_user == "とても良い")? "selected":""}}>とても良い</option>
            <option value="4" {{($content->gym_user == "まあまあ良い")? "selected":""}}>まあまあ良い</option>
            <option value="3" {{($content->gym_user == "ふつう")? "selected":""}}>ふつう</option>
            <option value="2" {{($content->gym_user == "あまり良くない")? "selected":""}}>あまり良くない</option>
            <option value="1" {{($content->gym_user == "良くない")? "selected":""}}>良くない</option>
        </select>
    </div>

    <div class="form-group">
        <label for="gym_beginner">初心者におすすめか</label>
        <select class="custom-select" name="gym_beginner">
            <option value="5" {{($content->gym_user == "とてもおすすめ")? "selected":""}}>とてもおすすめ</option>
            <option value="4" {{($content->gym_user == "まあまあおすすめ")? "selected":""}}>まあまあおすすめ</option>
            <option value="3" {{($content->gym_user == "ふつう")? "selected":""}}>ふつう</option>
            <option value="2" {{($content->gym_user == "あまりおすすめしない")? "selected":""}}>あまりおすすめしない</option>
            <option value="1" {{($content->gym_user == "おすすめしない")? "selected":""}}>おすすめしない</option>
        </select>
    </div>

    <div class="form-group">
        <label for="star">5段階評価</label>
        <select class="custom-select" name="star">
            <option value="5" {{($content->gym_user == "5")? "selected":""}}>5</option>
            <option value="4" {{($content->gym_user == "4")? "selected":""}}>4</option>
            <option value="3" {{($content->gym_user == "3")? "selected":""}}>3</option>
            <option value="2" {{($content->gym_user == "2")? "selected":""}}>2</option>
            <option value="1" {{($content->gym_user == "1")? "selected":""}}>1</option>
        </select>
    </div>

    <div class="form-group">
        <label>レビュー</label>
        <textarea name="memo" cols="150" rows="5">{{$content->memo}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">編集</button>
    <a href="{{route('contents.index')}}" class="btn btn-secondary">戻る</a>
</form>
@endsection
