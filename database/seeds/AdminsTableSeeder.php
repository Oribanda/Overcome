<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
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
        DB::table('admins')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $admins = [
            [
                'name' => 'adminUser',
                'email' => 'adminUser@adminUser.com',
                'password' => 'ssss5555'
            ]
        ];

        // 登録
        foreach ($admins as $admin) {
            \App\Models\Admin::create($admin);
        }
    }
}
