<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class studentseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            DB::table('student')->insert([
                'fullname' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'address' => Str::random(10),
                'number' => rand(1234567899, 9999999999),
            ]);
        }
    }
}
