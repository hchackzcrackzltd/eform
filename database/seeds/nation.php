<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Model\Masterdata\form_nation;

class nation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::selectSheets('Sheet1')->load(storage_path('app/tmp/test.xlsx'),function($value)
        {
          foreach ($value->get() as $value1) {
            form_nation::create([
              'name'=>$value1->nation
            ]);
          }
        });
    }
}
