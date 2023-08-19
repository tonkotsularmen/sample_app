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
        <th>スタッフ</th>
        <td>{{ $content->gym_staff }}</td>
    </tr>

    <tr>
        <th>電話番号</th>
        <td>{{ $content->gym_tel_number}}</td>
    </tr>

    <tr>
        <th>店舗の清潔感</th>
        <td>{{ $content->gym_clean}}</td>
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
@endsection
