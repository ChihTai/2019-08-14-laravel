<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ad;
use App\Mvim;
use App\Menu;
use App\image;
use App\news;

class IndexCT extends BaseCT
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        parent::init();
        $this->common['main']="index";
        $ad=Ad::where("sh","checked")->get();
        $image=Image::where("sh","checked")->get();
        $mvim=Mvim::where("sh","checked")->get();
        $news=News::where("sh","checked")->get();
        $this->common["ad"]=$ad->implode("text","　　");
        $this->common["image"]=$image->pluck("file");
        $this->common["news"]=$news->pluck("text");
        $this->common["mvim"]=$mvim->implode("file",",");

/*         $menus=Menu::where([
                            ["sh","=","checked"],
                            ["parent","=","0"]
                           ])->get();
         $mu=[];
         foreach($menus as $m){
            $chk=Menu::where("parent",$m['id'])->count();
            $su=[];
            if($chk>0){
                $subs=Menu::where("parent",$m['id'])->get();
                foreach($subs as $s){
                    $su[]=["text"=>$s['text'],"href"=>$s["href"]];
                }
            }
            $mu[]=[
                    "text"=>$m['text'],
                    "href"=>$m['href'],
                    "subs"=>$su,
                ];
         } */

         $menus=Menu::where("sh","checked")->get();
         $mu=[];
         foreach($menus as $k=>$v){
             if($v['parent']==0){
                $mu[$v['id']]=["text"=>$v['text'],"href"=>$v['href']];
             }else{
                if(!empty($mu[$v['parent']])){
                    $mu[$v['parent']]['subs'][]=["text"=>$v['text'],"href"=>$v['href']];
                }
             }
         }

         $this->common["menu"]=$mu;



        return view('index',$this->common);
    }


}
