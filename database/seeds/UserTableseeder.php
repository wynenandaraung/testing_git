<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 2)->create();
         $s1= new User;

        // //mg mg
        $s1->name = "gg gg";
         $s1->email = "mgmg@gmail.com";
         $s1->password =Hash::make('123456789');
         $s1->save();
    }
}
