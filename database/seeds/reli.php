<?php

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Model\Masterdata\form_relig;

class reli extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Excel::selectSheets('Sheet1')->load(storage_path('app/tmp/test2.xlsx'),function($value)
      {
        foreach ($value->get() as $value1) {
          form_relig::create([
            'name'=>$value1->reli
          ]);
        }
      });
    }
}
