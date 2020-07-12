<?php

use Illuminate\Database\Seeder;

class TableLog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('log')->insert([
            'log' => "test cronjob",
            'created_at' => date("Y-m-d h:i:s")
        ]);
    }
}
