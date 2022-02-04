<?php

use Illuminate\Database\Seeder;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        //
        DB::table('users')->delete();

        // default admin password is 'aaaaaaaa'
        $objs = array(
        ['id'=>'1', 'name'=>'admin','email' =>'admin@gmail.com','address'=>'765','NRC'=>'12/Oukama(n)23535','Date_of_birth'=>'1999-06-08','phone_number'=>'957977256162',
        'password' =>'$2y$10$Y/T1obHbsT2PDhQfwyKpt.ZNvOjryxlP1hKlAQHPc9bVQ0RuAvU3.','role_id' =>'1', 'created_at'=>'2019-10-19']

        );

        DB::table('users')->insert($objs);
    }
}
