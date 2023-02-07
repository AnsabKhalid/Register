<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class studentsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'std_name'=>str::random(10),
            'std_course'=>str::random(10),
            'std_fee'=>str::random(5),
            'created_at'=>data("Y-m-d H-i-s"),
            'updated_at'=>data("Y-m-d-H-i-s"),
        ]);
    }
}
