<?php

use Illuminate\Database\Seeder;

class carseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = date('Y-m-d H:i:s');
        DB::table('cars')->delete();
        $objs = array(
        ['car_id'=>'1','owner_id'=>'1','brand'=>'toyota','name'=>'belta','price'=>'111','car_no'=>'123234',
        'type'=>'saloon', 'status'=>'1','delete_status'=>'1','image1'=>'blog_img4.jpg','image2'=>'blog_img4.jpg','image3'=>'blog_img4.jpg', 'created_at'=>$today]);
      
        DB::table('cars')->insert($objs);
    }
}
