<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // テーブルのクリア
        DB::table('lessons')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $lessons = [
            [
                'name' => 'TakuClass',
                'member' => 8,
                'user_id' => 2,
                'admin_id' => 1,
            ]
        ];

        // 登録
        foreach ($lessons as $lesson) {
            \App\Models\Lesson::create($lesson);
        }
    }
}
