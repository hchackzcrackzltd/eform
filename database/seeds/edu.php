<?php

use Illuminate\Database\Seeder;
use App\Model\Masterdata\master_edu;

class edu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['ประถมศึกษา Primary','มัธยมศึกษา Secondary',
        'อาชีวะศึกษา Commercial/Vocational','มหาวิทยาลัย University'] as $key => $value) {
          master_edu::create([
            'name'=>$value
          ]);
        }
    }
}
