<?php

use Illuminate\Database\Seeder;

class SiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('title')->insert([
            'file' =>"01B01.jpg" ,
            'title' =>"科技大學校園資訊網" ,
            'sh' =>"checked",
        ]);
        DB::table('title')->insert([
            'file' =>"01B02.jpg" ,
            'title' =>"泰山學校園資訊網" ,
            'sh' =>"",
        ]);
        DB::table('total')->insert([
            'total' =>10 ,
        ]);
        DB::table('bottom')->insert([
            'bottom' =>"科技大學版權所有" ,
        ]);
        DB::table('admin')->insert([
            'acc' =>"admin" ,
            'pw' =>"1234" ,
        ]);
        DB::table('mvim')->insert([
            'file' =>"01C05.gif" ,
            'sh' =>"checked" ,
        ]);
        DB::table('image')->insert([
            'file' =>"01D01.jpg" ,
            'sh' =>"checked" ,
        ]);
        DB::table('ad')->insert([
            'text' =>"轉知臺北教育大學與臺灣師大合辦第11屆麋研齋全國硬筆書法比賽活動" ,
            'sh' =>"checked" ,
        ]);
        DB::table('news')->insert([
          'text' =>"教師研習「世界公民生命園丁國內研習會」\n 1.主辦單位：世界展望會\n 2.研習日期：101年11月14日（三）～15日（四）\n 3.詳情請參考：\n http://gc.worldvision.org.tw/seed.html。\n 請線上報名。\n",
          'sh' =>"checked" ,
        ]);        
        DB::table('menu')->insert([
          'text' =>"管理登入",
          'href' =>"/" ,
          'sh' =>"checked" ,
          'parent' =>0 ,

        ]);        
    }
}
