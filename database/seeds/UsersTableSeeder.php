<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        DB::table('users')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $users = [
            [
                'name' => 'testUser',
                'email' => 2000,
                'password' => 'ssss5555'
            ]
        ];

        // 登録
        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
