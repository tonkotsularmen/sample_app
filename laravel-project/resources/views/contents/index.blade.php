@extends('layouts.app')

@section('content')
<h1>投稿一覧</h1>
<a href="{{route('contents.create')}}" class="btn btn-success">+投稿</a>
<table class="table">
    <tr>
        <th>店舗名</th>
        <th>スタッフ</th>
        <th>店舗の清潔感</th>
        <th>利用者のマナー</th>
        <th>初心者におすすめか</th>
        <th>総合評価</th>
        <th>リンク</th>
    </tr>
    @foreach($contents as $content)
    <tr>
        <td>{{ $content->gym_name }}</td>
        <td>{{ $content->gym_staff }}</td>
        <td>{{ $content->gym_clean}}</td>
        <td>{{ $content->gym_user}}</td>
        <td>{{ $content->gym_beginner}}</td>
        <td>{{ $content->star }}</td>
        <td><a href="{{route('contents.show', $content)}}" class="btn btn-info">詳細</a></td>
    </tr>
    @endforeach
</table>
@endsection
