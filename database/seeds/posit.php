<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Model\Masterdata\form_posit;

class posit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Excel::selectSheets('Sheet1')->load(storage_path('app/tmp/posit.xlsx'),function($value)
      {
        foreach ($value->get() as $value1) {
          form_posit::create([
            'name'=>$value1->posit
          ]);
        }
      });
    }
}
