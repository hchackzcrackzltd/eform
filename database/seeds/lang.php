<?php

use Illuminate\Database\Seeder;
use App\Model\Masterdata\master_lang;

class lang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['ไทย Thai','อังกฤษ English','จีน Chinese'] as $key => $value) {
          master_lang::create([
            'name'=>$value
          ]);
        }
    }
}
