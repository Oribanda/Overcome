@extends('user/layout')
@section('content')
@endsection

<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>ユーザー登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @csrf
            @include('user/message')
            <form action="/user/{{ $user->id }}" method="post" enctype="multipart/form-data">
                @include('user/message')
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">名前</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="avatar">アバター</label>
                    <input type="file" class="form-control" name="avatar" value="{{ $user->avatar }}">
                </div>

                <div class="form-group">
                    <label for="name">クラス名</label>
                    <input type="text" class="form-control" name="name" value="{{ $lesson->name }}">
                </div>



                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                </div>
                <div class="form-group">
                    <label for="password-confirm">確認用パスワード</label>
                    <input type="password" class="form-control" name="password_confirmation" value="{{ $user->password_confirmation }}">
                </div>



                <!-- <div class="form-group">
                        <label for="current">現在のパスワード</label>
                        <div>
                            <input id="current" type="password" class="form-control" name="current-password" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">新しいのパスワード</label>
                        <div>
                            <input id="password" type="password" class="form-control" name="new-password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm">新しいのパスワード（確認用）</label>
                        <div>
                            <input id="confirm" type="password" class="form-control" name="new-password_confirmation" required>
                        </div>
                    </div> -->



                <button type="submit" class="btn btn-default">登録</button>
                <a href="/user">戻る</a>
            </form>
        </div>
    </div>
</div>
