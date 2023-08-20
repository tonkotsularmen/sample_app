@extends("layouts.layouts")

@section("content")
<h1>新しい投稿</h1>
<form action="/contents" method="post">
    @csrf
    <div class="form-group">
        <label>店舗名</label>
        <input type="text" name="gym_name" class="form-control">
    </div>

    <div class="form-group">
        <label for="gym_clean">清潔感</label>
        <select class="custom-select" name="gym_clean">
            @foreach(App\Content::$gym_cleans as $gym_clean)
            <option value="{{$gym_clean}}">{{$gym_clean}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="gym_staff">スタッフの対応</label>
        <select class="custom-select" name="gym_staff">
            <option value="とても丁寧">とても丁寧</option>
            <option value="まあまあ丁寧">まあまあ丁寧</option>
            <option value="ふつう">ふつう</option>
            <option value="あまり丁寧ではない">あまり丁寧ではない</option>
            <option value="丁寧ではない">丁寧ではない</option>
        </select>
    </div>

    <div class="form-group">
        <label for="gym_user">利用者のマナー</label>
        <select class="custom-select" name="gym_user">
            <option value="5">とても良い</option>
            <option value="4">まあまあ良い</option>
            <option value="3">ふつう</option>
            <option value="2">あまり良くない</option>
            <option value="1">良くない</option>
        </select>
    </div>

    <div class="form-group">
        <label for="gym_beginner">初心者におすすめか</label>
        <select class="custom-select" name="gym_beginner">
            <option value="5">とてもおすすめ</option>
            <option value="4">まあまあおすすめ</option>
            <option value="3">ふつう</option>
            <option value="2">あまりおすすめしない</option>
            <option value="1">おすすめしない</option>
        </select>
    </div>

    <div class="form-group">
        <label for="star">5段階評価</label>
        <select class="custom-select" name="star">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
    </div>

    <div class="form-group">
        <label>レビュー</label>
        <textarea name="memo" cols="150" rows="5" placeholder="施設を利用した感想を150文字でご記入ください。"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">投稿</button>
    <a href="{{route('contents.index')}}" class="btn btn-secondary">戻る</a>

</form>
@endsection
