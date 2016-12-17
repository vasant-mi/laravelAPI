<?php

use Illuminate\Database\Seeder;

class StatusTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new \App\Status();
        $status->name = 'active';
        $status->shipped_via = 'shipped_via';
        $status->terms = 'terms';
        $status->save();
    }
}
