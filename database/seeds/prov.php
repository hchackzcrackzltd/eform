<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Model\Masterdata\form_provin;

class prov extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Excel::selectSheets('Sheet1')->load(storage_path('app/tmp/test3.xlsx'),function($value)
      {
        foreach ($value->get() as $value1) {
          form_provin::create([
            'name'=>$value1->en.' - '.$value1->th
          ]);
        }
      });
    }
}
