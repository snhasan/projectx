<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('clients')->insert([
            'Company Name' => str_random(10),
            'Address' => str_random(10).'@gmail.com',
            'Status' => str_random(10),
            'Agent ID' => random_int(1,10),
        ]);
    }
}
