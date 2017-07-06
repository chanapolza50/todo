<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new \App\User();
        $user->name ="Chanapol reusakean";
        $user->usesname ="admin";
        $user->email ="chanapolza50@hotmail.com";
        $user->password = bcrypt(1234);
        $user->save();
    }
    // Inser INTO USER (name username emai paswword)
}
