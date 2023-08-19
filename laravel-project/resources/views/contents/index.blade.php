@extends('layouts.layouts')

@section('content')
<h1>投稿一覧</h1>
<table class="table">
    <tr>
        <th>店舗名</th>
        <th>評価</th>
        <th>スタッフ</th>
        <th>電話番号</th>
        <th>リンク</th>
    </tr>
    @foreach($contents as $content)
    <tr>
        <td>{{ $content->gym_name }}</td>
        <td>{{ $content->star }}</td>
        <td>{{ $content->gym_staff }}</td>
        <td>{{ $content->gym_tel_number}}</td>
        <td><a href="{{route('contents.show', $content)}}" class="btn btn-info">詳細</a></td>
    </tr>
    @endforeach
</table>
@endsection
