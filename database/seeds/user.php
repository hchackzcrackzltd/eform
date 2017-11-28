<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	 AdminUser::truncate();
        AdminUser::create([
          'name'=>'test',
          'password'=>bcrypt(1234),
          'username'=>'test'
        ]);
    }
}
