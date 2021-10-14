<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'name' => 'Tamas Zentai',
                'email' => 'zentaitamas@gmail.com'
            ],
            [
                'name' => 'Michael English',
                'email' => 'michaelenglish@yahoo.com'
            ]
        ]);
        DB::table('schools')->insert([
            [
                'name' => 'EdiHS',
            ],
            [
                'name' => 'DunHS',
            ],
            [
                'name' => 'LonHS',
            ],
            [
                'name' => 'AbeHS',
            ],
            [
                'name' => 'GlaHS',
            ],
        ]);
        DB::table('member_school')->insert([
            [
                'member_id' => 1,
                'school_id' => 1
            ],
            [
                'member_id' => 2,
                'school_id' => 1
            ],
            [
                'member_id' => 2,
                'school_id' => 5
            ],

        ]);
    }
}
