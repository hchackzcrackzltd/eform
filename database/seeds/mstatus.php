<?php

use Illuminate\Database\Seeder;
use App\Model\Masterdata\master_mstatus;

class mstatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['โสด Single','แต่งงาน Married'] as $value) {
          master_mstatus::create([
            'name'=>$value
          ]);
        }
    }
}
