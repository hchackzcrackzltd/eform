<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(posit::class);
         $this->call(edu::class);
         $this->call(lang::class);
         $this->call(nation::class);
         $this->call(posit::class);
         $this->call(prov::class);
         $this->call(race::class);
         $this->call(reli::class);
         $this->call(mstatus::class);
         $this->call(status::class);
         $this->call(emailnoti::class);
         $this->call(user::class);
    }
}
