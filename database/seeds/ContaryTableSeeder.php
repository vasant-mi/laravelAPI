<?php

use Illuminate\Database\Seeder;

class ContaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ["name" => "United States", "short_code" => "US", "status_id" => 1],
            ["name" => "India", "short_code" => "IN", "status_id" => 1],
        ];

        foreach ($countries as $c) {
            $country = new \App\Contary();
            $country->name = $c['name'];
            $country->short_code = $c['short_code'];
            $country->status_id = $c['status_id'];
            $country->save();
        }
    }
}
