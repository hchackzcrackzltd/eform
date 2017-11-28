<?php

use Illuminate\Database\Seeder;
use App\Model\Masterdata\status as sb;

class status extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(['PF'=>'Pending Form','SF'=>'Wait Resume','CF'=>'Complete Resume'] as $key=>$data){
          sb::create([
            'id'=>$key,
            'descript'=>$data
          ]);
        }
    }
}
