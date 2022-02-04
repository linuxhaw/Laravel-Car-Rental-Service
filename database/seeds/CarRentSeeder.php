<?php

use Illuminate\Database\Seeder;

class CarRentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = date('Y-m-d H:i:s');
        DB::table('car_rent')->delete();
        $objs = array(
        ['user_id'=>'2','car_id'=>'1','owner_id'=>'1','price'=>'111','pickup_date'=>'2019/4/4','status'=>'1' ,'created_at'=>$today]);
      
        DB::table('car_rent')->insert($objs);
    }
}
