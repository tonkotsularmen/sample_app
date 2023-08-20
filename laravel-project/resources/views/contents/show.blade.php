@extends('layouts.layouts')

@section('content')
<h1>投稿詳細</h1>
<table class="table table-striped">
    <tr>
        <th>店舗名</th>
        <td>{{ $content->gym_name }}</td>
    </tr>

    <tr>
        <th>評価</th>
        <td>{{ $content->star }}</td>
    </tr>

    <tr>
        <th>店舗の清潔感</th>
        <td>{{ $content->gym_clean}}</td>
    </tr>

    <tr>
        <th>スタッフ</th>
        <td>{{ $content->gym_staff }}</td>
    </tr>

    <tr>
        <th>利用者のマナー</th>
        <td>{{ $content->gym_user}}</td>
    </tr>

    <tr>
        <th>初心者におすすめ</th>
        <td>{{ $content->gym_beginner}}</td>
    </tr>

    <tr>
        <th>レビュー</th>
        <td>{{ $content->memo}}</td>
    </tr>
</table>
<a href="{{route('contents.index')}}" class="btn btn-secondary">一覧へ</a>
<a href="{{route('contents.edit', $content)}}" class="btn btn-warning">編集</a>
<form action="/contents/{{$content->id}}" method="POST" style="display: inline;">
    @method("DELETE")
    @csrf
    <button type="submit" class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>削除</button>
</form>
@endsection
