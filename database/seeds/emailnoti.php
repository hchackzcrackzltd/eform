<?php

use Illuminate\Database\Seeder;
use App\Model\Masterdata\emailnoti as edb;

class emailnoti extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        edb::create([
          'email'=>'example@example.com'
        ]);
    }
}
