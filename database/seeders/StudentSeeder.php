<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            DB::table('students')->insert([
                'first_name' => Str::random(5),
                'last_name' => Str::random(8),
                'midle_name' => Str::random(6),
                'birthday' => Str::random(4),
                'sex' => Str::random(5),
                'email' => Str::random(8) . '@gmail.com',
                'group_id' => rand(1, 4),
            ]);
        }
    }
}
