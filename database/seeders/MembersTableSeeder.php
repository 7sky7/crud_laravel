<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // 1レコード
      DB::table('members')->insert(
        [
          [
            'name'=>'山田',
            'phone'=>'xxxx-xxxxx',
            'email'=>'yamada@example.com',
            'created_at'=>now(),
            'updated_at'=>now(),
          ],

          ]
    );
}
}
