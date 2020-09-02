<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $s1= new Student;

        // //mg mg
        // $s1->name = "gg gg";
        // $s1->email = "mgmg@gmail.com";
        // $s1->address = "yangon";
        // $s1->save();

        // 	$s2= new Student;
        //  $s2->name = "Ng Ng";
        // $s2->email = "ngng@gmail.com";
        // $s2->address = "tangon";
        // $s2->save();
        factory(App\Student::class, 10)->create();
    }
}
