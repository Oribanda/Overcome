<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Class;

class ClassController extends Controller
{
    public function index()
    {
        $class = Auth::user();

        return view('user/index', compact('class'));
    }

    public function create()
    {
        $user = new Class();

        return view('user/create', compact('class'));
    }

    public function edit($id)
    {

        $class = Class::findOrFail($id);

        // 取得した値をビュー「user/edit」に渡す
        return view('user/edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $class = Class::findOrFail($id);
        $class->name = $request->name;
        $class->member = $request->member;
        $class->user_id = $request->user_id;
        $class->admin_id = $request->admin_id;


        if ($request->avatar == null) {

            // avatarが選択されていない場合

        } else {
            // /storage/public/imagesが作成される
            $file_path = $request->avatar->store('public/images');
            // public/imageshogehogeoghoe.jpgみたいな名前になるので、storage/images/を消す
            $file_name = str_replace('public/images', '', $file_path);
            // $file_nameをDBに保存
            $class->avatar = $file_name;
        }
        $class->save();

        // return redirect("/user")->with(['validated' => $validated]);
        return redirect("/user");
    }

    public function destroy($id)
    {
        $class = Class::findOrFail($id);
        $class->delete();

        return redirect("/user");
    }

    public function store(Request $request)
    {
        $class = Class::findOrFail($id);
        $class->name = $request->name;
        $class->member = $request->member;
        $class->user_id = $request->user_id;
        $class->admin_id = $request->admin_id;


        if ($request->avatar == null) {

            // avatarが選択されていない場合

        } else {
            // /storage/public/imagesが作成される
            $file_path = $request->avatar->store('public/images');
            // public/imageshogehogeoghoe.jpgみたいな名前になるので、storage/images/を消す
            $file_name = str_replace('public/images', '', $file_path);
            // $file_nameをDBに保存
            $class->avatar = $file_name;
        }
        $class->save();

        // return redirect("/user")->with(['validated' => $validated]);
        return redirect("/user");
    }
}
