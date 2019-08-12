<?php

use Illuminate\Database\Seeder;

class ChecktypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('checktypes')->insert([
            'checktype' => Str::random(10),
        ]);
    }
}
