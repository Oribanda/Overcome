<head>
    <title>Practice Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
@extends('user/layout')
@section('content')
<div class="container ops-main">
    <div class="row">
        <div class="col-md-12">
            <h3 class="ops-title">マイページ</h3>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
        </div>
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <table class="table text-center">
                    <tr>
                        <th class="text-center">Class</th>
                        <th class="text-center">アバター</th>
                        <th class="text-center">名前</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">練習曲/アーティスト名</th>
                        <th class="text-center">最低音</th>
                        <th class="text-center">低音練習回数</th>
                        <th class="text-center">ストレッチ最高音</th>
                        <th class="text-center">ストレッチ練習回数</th>
                        <th class="text-center">ファルセット練習回数</th>
                        <th class="text-center">その他</th>
                    </tr>

                    <tr>
                        <td>

                        </td>
                        <td><img src="../../../storage/images/{{ $user->avatar }}" width="200" height="130"></td>
                        <td>{{$user->name}}</td>
                        <td>{{ $user->email }}</td>
                        <!-- <tb>song_name/artist_name</tb> -->

                        <td>
                            <form action="/user/{{ $user->id }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
                            </form>
                        </td>
                    </tr>

                </table>
                <div><a href="/user/{{ $user->id }}/edit" class=" btn btn-default">登録情報編集</a></div>
            </div>
        </div>
