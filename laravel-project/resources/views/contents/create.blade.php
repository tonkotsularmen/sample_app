@extends("layouts.app")

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
            @foreach(App\Content::$gym_staffs as $gym_staff)
            <option value="{{$gym_staff}}">{{$gym_staff}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="gym_user">利用者のマナー</label>
        <select class="custom-select" name="gym_user">
            @foreach(App\Content::$gym_users as $gym_user)
            <option value="{{$gym_user}}">⭐️{{$gym_user}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="gym_beginner">初心者におすすめか</label>
        <select class="custom-select" name="gym_beginner">
            @foreach(App\Content::$gym_beginners as $gym_beginner)
            <option value="{{$gym_beginner}}">⭐️{{$gym_beginner}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="star">5段階評価</label>
        <select class="custom-select" name="star">
            @foreach(App\Content::$stars as $star)
            <option value="{{$star}}">⭐️{{$star}}</option>
            @endforeach
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
