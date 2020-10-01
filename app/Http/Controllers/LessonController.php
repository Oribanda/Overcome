<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function index()
    {
        // ログインしているuser
        $lessons = Auth::user();


        // 取得した値をビュー「user/index」に渡す
        return view('user/index', compact('lessons'));
    }

    public function create()
    {
        $lesson = new Lesson();

        return view('user/create', compact('Lesson'));
    }

    public function edit($id)
    {
        // DBよりURIパラメータと同じIDを持つLessonの情報を取得
        $lesson = Lesson::findOrFail($id);

        // 取得した値をビュー「user/edit」に渡す
        return view('user/edit', compact('lesson'));
    }

    public function update(Request $request, $id)
    {

        $lesson = Lesson::findOrFail($id);
        $lesson->name = $request->name;
        if ($request->avatar == null) {

            // avatarが選択されていない場合

        } else {
            // /storage/public/imagesが作成される
            $file_path = $request->avatar->store('public/images');
            // public/imageshogehogeoghoe.jpgみたいな名前になるので、storage/images/を消す
            $file_name = str_replace('public/images', '', $file_path);
            // $file_nameをDBに保存
            $lesson->avatar = $file_name;
        }
        $lesson->save();

        return redirect("/user");
    }

    public function destroy($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();

        return redirect("/user");
    }

    public function store(Request $request)
    {

        $lesson = new Lesson();
        $lesson->name = $request->name;
        if ($request->avatar == null) {

            // avatarが選択されていない場合

        } else {
            // /storage/public/imagesが作成される
            $file_path = $request->avatar->store('public/images');
            // public/imageshogehogeoghoe.jpgみたいな名前になるので、storage/images/を消す
            $file_name = str_replace('public/images', '', $file_path);
            // $file_nameをDBに保存
            $lesson->avatar = $file_name;
        }

        $lesson->save();

        return redirect("lesson");
    }
}
