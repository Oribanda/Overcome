<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>ユーザー登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @if($target == 'store')
            <form action="/user" method="post" enctype="multipart/form-data">
                @csrf
                @include('user/message')
                @elseif($target == 'update')
                <form action="/user/{{ $user->id }}" method="post" enctype="multipart/form-data">
                    @include('user/message')
                    <input type="hidden" name="_method" value="PUT">
                    @endif
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
                        <label for="song_name">練習曲</label>
                        <input type="text" class="form-control" name="song_name" value="{{ $song->song_name }}">
                    </div>
                    <div class="form-group">
                        <label for="artist_name">アーティスト名</label>
                        <input type="text" class="form-control" name="artist_name" value="{{ $song->artist_name }}">
                    </div>
                    <div class="form-group">
                        <label for="practice_time">練習時間</label>
                        <input type="text" class="form-control" name="practice_time" value="{{ $practice->practice_time }}">
                    </div>
                    <div class="form-group">
                        <label for="bass_key">最低音</label>
                        <input type="text" class="form-control" name="bass_key" value="{{ $practice->bass_key }}">
                    </div>
                    <div class="form-group">
                        <label for="bass_times">低音練習回数</label>
                        <input type="text" class="form-control" name="bass_times" value="{{ $practice->bass_times }}">
                    </div>
                    <div class="form-group">
                        <label for="stretch_key">ストレッチ最高音</label>
                        <input type="text" class="form-control" name="stretch_key" value="{{ $practice->stretch_key }}">
                    </div>
                    <div class="form-group">
                        <label for="stretch_times">ストレッチ練習回数</label>
                        <input type="text" class="form-control" name="stretch_times" value="{{ $practice->stretch_times }}">
                    </div>
                    <div class="form-group">
                        <label for="falsetto_times">ファルセット練習回数</label>
                        <input type="text" class="form-control" name="falsetto_times" value="{{ $practice->falsetto_times }}">
                    </div>
                    <div class="form-group">
                        <label for="other">その他</label>
                        <input type="text" class="form-control" name="other" value="{{ $practice->other }}">
                    </div>

                    <!-- <div class="form-group">
                        <label for="password">パスワード</label>
                        <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">確認用パスワード</label>
                        <input type="password" class="form-control" name="password_confirmation" value="{{ $user->password_confirmation }}">
                    </div> -->



                    <div class="form-group">
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
                    </div>



                    <button type="submit" class="btn btn-default">登録</button>
                    <a href="/user">戻る</a>
                </form>
        </div>
    </div>
</div>
